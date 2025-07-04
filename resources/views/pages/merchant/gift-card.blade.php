<?php

use App\Models\GiftCard;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;
use Livewire\Attributes\{Layout};

new #[Layout('layouts.merchant')] class extends Component {
    public $giftCards = [];
    public $giftCardId = null;
    public $code = '';
    public $amount = '';
    public $balance = '';
    public $usage_limit = '';
    public $status = 'active';
    public $expires_at = '';

    public function mount()
    {
        $this->refreshGiftCards();
    }

    public function resetForm()
    {
        $this->giftCardId = null;
        $this->code = '';
        $this->amount = '';
        $this->balance = '';
        $this->usage_limit = '';
        $this->status = 'active';
        $this->expires_at = '';
    }

    public function rules()
    {
        $uniqueRule = 'unique:gift_cards,code';

        if ($this->giftCardId) {
            $uniqueRule .= ',' . $this->giftCardId;
        }

        return [
            'code' => ['required', 'string', $uniqueRule],
            'amount' => 'required|numeric|min:0',
            'balance' => 'required|numeric|min:0',
            'usage_limit' => 'nullable|integer|min:1',
            'status' => 'required|in:active,used,expired,disabled',
            'expires_at' => 'nullable|date',
        ];
    }

    public function editGiftCard($id)
    {
        $giftCard = GiftCard::where('merchant_id', Auth::id())->findOrFail($id);

        $this->giftCardId = $giftCard->id;
        $this->code = $giftCard->code;
        $this->amount = $giftCard->amount;
        $this->balance = $giftCard->balance;
        $this->usage_limit = $giftCard->usage_limit;
        $this->status = $giftCard->status;
        $this->expires_at = optional($giftCard->expires_at)->format('Y-m-d');

        $this->dispatch('open-modal');
    }

    public function createGiftCard()
    {
        $this->validate();

        GiftCard::create([
            'merchant_id' => Auth::id(),
            'code' => $this->code,
            'amount' => $this->amount,
            'balance' => $this->balance,
            'usage_limit' => $this->usage_limit,
            'status' => $this->status,
            'expires_at' => $this->expires_at,
            'used_count' => 0,
        ]);

        $this->resetForm();
        $this->refreshGiftCards();
        $this->dispatch('close-modal');
    }

    public function updateGiftCard()
    {
        $this->validate();

        $giftCard = GiftCard::where('merchant_id', Auth::id())->findOrFail($this->giftCardId);

        $giftCard->update([
            'code' => $this->code,
            'amount' => $this->amount,
            'balance' => $this->balance,
            'usage_limit' => $this->usage_limit,
            'status' => $this->status,
            'expires_at' => $this->expires_at,
        ]);

        $this->resetForm();
        $this->refreshGiftCards();
        $this->dispatch('close-modal');
    }

    public function refreshGiftCards()
    {
        $this->giftCards = GiftCard::where('merchant_id', Auth::id())->latest()->get();
    }
};
?>
<?php

use function Livewire\Volt\layout;;
layout('layouts.merchant'); ?>
@extends('layouts.merchant')
@push('styles')
    <link rel="stylesheet" href="{{ asset('style/affiliate.css') }}">
@endpush
@section('content')
<!-- Gift Card Manager UI -->
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h1 class="title">Gift Card</h1>
        </div>
        <div class="ms-auto">
            <a href="" data-bs-toggle="modal" data-bs-target="#addGiftCard" class="add-affi">Add Gift Card</a>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="./merchant.html">Home</a></li>
        <li class="divider">/</li>
        <li><a href="./affiliate.html" class="active">Gift Card</a></li>
    </ul>
    <div class="card mt-4">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs id="myTab" role="tablist"">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" aria-current="true" href="#" id="home-tab" data-bs-toggle="tab" data-bs-target="#allAffiliate" aria-controls="allAffiliate" aria-selected="true">All Gift Card</a>
            </li>
            
            </ul>
        </div>
        <div class="card-body tab-content" id="nav-tabContent">
            
            <div class="tab-pane fade show active" id="allAffiliate" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                
                <div class="table-section">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Order ID</th>
                                <th>PIN</th>
                                <th>Status</th>
                                <th>Earnings</th>
                                <th>Order Value</th>
                                <th> Amount Spent</th>
                                <th> Remaining Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="name">
                                    <span><a href="#">Gift Card Name</a></span>
                                </td>
                                <td>
                                    <span>101</span>
                                </td>
                                <td>
                                    <span>101</span>
                                </td>
                                <td>
                                    <span>Active / Disabled</span>
                                </td>
                                <td>
                                    <span>$99</span>
                                </td>
                                <td>
                                    <span>$45</span>
                                </td>
                                <td>
                                    <span>100</span>
                                </td>
                                <td>
                                    <span>100</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
    <div class="page-count">
        <div>
            <select name="page-count" class="">
                <option value="10">10 per page</option>
                <option value="20">20 per page</option>
                <option value="30">30 per page</option>
                <option value="40">40 per page</option>
                </select>
        </div>
        <div>
            <p>Page <span>1</span> of <span>1</span></p>
        </div>
        <div class="next-page">
            <a href="#nextPage">Next Page</a>
        </div>
    </div>

    {{-- add gift card modal --}}
      <div class="modal fade" id="addGiftCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="affiliate-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Add a new Gift Card</h5>
                </div>
                <div class="modal-body affiliate-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="label col-form-label">Gift Card Name <span>*</span></label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="">
                        </div>
                        
                        <div class="mb-3">
                            <label for="recipient-name" class="label col-form-label">Status<span>*</span></label>
                            <select class="form-select" aria-label="Default select example" style="box-shadow: none;">
                            <option selected>Active</option>
                                <option value="1">Disabled</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="label col-form-label">Gift Card Value<span>*</span></label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="label col-form-label">Commission<span>*</span></label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="">
                        </div>
                    </form>
                </div>
                <div class="affiliate-footer">
                    <a type="button" class="dismiss" data-bs-dismiss="modal">Dismiss</a>
                    <a type="button" class="create">Add Gift Card</a>
                </div>
            </div>
        </div>
    </div>
@endsection    
{{-- <div>
    <main>
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h1 class="title">Gift Card</h1>
            </div>
            <div class="ms-auto">
                <a href="#" wire:click='resetForm' data-bs-toggle="modal" data-bs-target="#addGiftCard" class="add-affi">Add Gift Card</a>
            </div>
        </div>

        <ul class="breadcrumbs">
            <li><a href="./merchant.html">Home</a></li>
            <li class="divider">/</li>
            <li><a href="./affiliate.html" class="active">Gift Card</a></li>
        </ul>

        <div class="card mt-4">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#allAffiliate" role="tab">All Gift Card</a>
                    </li>
                </ul>
            </div>

            <div class="card-body tab-content">
                <div class="tab-pane fade show active" id="allAffiliate" role="tabpanel">
                    <div class="table-section">
                        <table>
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Amount</th>
                                    <th>Balance</th>
                                    <th>Status</th>
                                    <th>Usage Limit</th>
                                    <th>Expiry Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($this->giftCards as $gift)
                                    <tr>
                                        <td>{{ $gift->code }}</td>
                                        <td>{{ $gift->amount }}</td>
                                        <td>{{ $gift->balance }}</td>
                                        <td>{{ ucfirst($gift->status) }}</td>
                                        <td>{{ $gift->usage_limit ?? '-' }}</td>
                                        <td>{{ $gift->expires_at ? $gift->expires_at->format('Y-m-d') : '-' }}</td>
                                        <td>
                                            <button wire:click='editGiftCard("{{ $gift->id }}")' data-bs-toggle="modal" data-bs-target="#addGiftCard" class="btn btn-sm btn-primary">Edit</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-count mt-3">
            <div>
                <select name="page-count">
                    <option value="10">10 per page</option>
                    <option value="20">20 per page</option>
                    <option value="30">30 per page</option>
                    <option value="40">40 per page</option>
                </select>
            </div>
            <div>
                <p>Page <span>1</span> of <span>1</span></p>
            </div>
            <div class="next-page">
                <a href="#nextPage">Next Page</a>
            </div>
        </div>
    </main>
</div>     --}}

    <!-- Modal -->
    {{-- <div class="modal fade" id="addGiftCard" tabindex="-1" aria-labelledby="addGiftCardLabel" wire:ignore.self aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="affiliate-header">
                    <h5 class="modal-title text-center">
                        {{ $this->giftCardId ? 'Edit Gift Card' : 'Add New Gift Card' }}
                    </h5>
                </div>

                <form wire:submit.prevent='{{ $this->giftCardId ? "updateGiftCard" : "createGiftCard" }}'>
                    <div class="modal-body affiliate-body">
                        <div class="mb-3">
                            <label class="label col-form-label">Gift Card Code <span>*</span></label>
                            <input type="text" wire:model.defer="code" class="form-control" placeholder="Eg. GIFT500">
                            @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="label col-form-label">Amount <span>*</span></label>
                            <input type="number" wire:model.defer="amount" class="form-control" step="0.01">
                            @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="label col-form-label">Balance <span>*</span></label>
                            <input type="number" wire:model.defer="balance" class="form-control" step="0.01">
                            @error('balance') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="label col-form-label">Usage Limit</label>
                            <input type="number" wire:model.defer="usage_limit" class="form-control">
                            @error('usage_limit') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="label col-form-label">Status <span>*</span></label>
                            <select wire:model.defer="status" class="form-select">
                                <option value="active">Active</option>
                                <option value="used">Used</option>
                                <option value="expired">Expired</option>
                                <option value="disabled">Disabled</option>
                            </select>
                            @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="label col-form-label">Expiry Date</label>
                            <input type="date" wire:model.defer="expires_at" class="form-control">
                            @error('expires_at') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="affiliate-footer">
                        <a type="button" class="dismiss" data-bs-dismiss="modal">Dismiss</a>
                        <button type="submit" class="create">
                            {{ $this->giftCardId ? 'Update Gift Card' : 'Create Gift Card' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <!-- Modal JS Control -->
<script>
    $(document).ready(function () {
        const $modal = $('#addGiftCard');

        window.addEventListener('open-modal', function () {
            // Hide if already open (to reset state)
            const existingModal = bootstrap.Modal.getInstance($modal[0]);
            if (existingModal) {
                existingModal.hide();

                setTimeout(function () {
                    const modal = bootstrap.Modal.getOrCreateInstance($modal[0]);
                    modal.show();
                }, 200);
            } else {
                const modal = bootstrap.Modal.getOrCreateInstance($modal[0]);
                modal.show();
            }
        });

        window.addEventListener('close-modal', function () {
            const modal = bootstrap.Modal.getInstance($modal[0]);
            if (modal) {
                modal.hide();

                setTimeout(function () {
                    $('.modal-backdrop').remove();
                    $('body').removeClass('modal-open').css('padding-right', '');
                }, 500);
            }
        });
    });
</script>
