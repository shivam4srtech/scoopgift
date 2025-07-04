<?php

use function Livewire\Volt\layout;;
layout('layouts.merchant'); ?>
@extends('layouts.merchant')
@push('styles')
    <link rel="stylesheet" href="{{ asset('style/settings.css') }}">
@endpush
@section('content')
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h1 class="title">Setting</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="./merchant.html">Home</a></li>
        <li class="divider">/</li>
        <li><a href="./affiliate.html" class="active">setting</a></li>
    </ul>
    <div class="card mt-4">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" aria-current="true" href="#" id="home-tab" data-bs-toggle="tab" data-bs-target="#generalSetting" aria-controls="generalSetting" aria-selected="true">General Setting</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" aria-current="true" href="#" id="home-tab" data-bs-toggle="tab" data-bs-target="#notification" aria-controls="notification" aria-selected="true">Notification</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" aria-current="true" href="#" id="home-tab" data-bs-toggle="tab" data-bs-target="#payment" aria-controls="payment" aria-selected="true">Payment</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" aria-current="true" href="#" id="home-tab" data-bs-toggle="tab" data-bs-target="#integration" aria-controls="integration" aria-selected="true">Integration</a>
            </li>
            </ul>
        </div>
        <div class="card-body tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="generalSetting" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>Set Cookie Duration</h4>
                        <p>Cookie duration refers to the period a web cookie stays active, storing user data and preferences before automatically expiring or being deleted.</p>
                    </div>
                    <div class="col-md-6">
                        <form action="#somewhere">
                            <div class="col mb-3">
                                <select id="paymentMethod" class="form-select">
                                    <option selected>Days</option>
                                    <option value="1">Hours</option>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
                            </div>
                            <div class="text-center">
                                <a href="#000" class="submit">Save</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <!-- =========Notification============= --> --}}
            <div class="tab-pane fade show" id="notification" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>Contact Info</h4>
                        <p>Kindly provide your valid contact info so that your affilites can directly communicate with you.</p>
                    </div>
                    <div class="col-md-6">
                        <form action="#somewhere">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label p-1">Email Address</label>
                                <input type="email" class="form-control" id="formGroupExampleInput">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="basic-url" class="form-label">Instagram</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">@</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="basic-url" class="form-label">Twitter X</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">@</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <a href="#000" class="submit">Save</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>Personal Notification</h4>
                        <p>your prefered notification will send to <a href="">josTheBoss@jaldiKro.com</a></p>
                    </div>
                </div>
            </div>
            {{-- <!-- ================Payment==================== --> --}}
            <div class="tab-pane fade show" id="payment" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>Global Payment Methods</h4>
                        <p>These are the worldwide supported payment methods receive payments </p>
                    </div>
                    <div class="col-md-6">
                        <div class="col">
                            <div class="tab-box">
                                <div class="form-check check-box">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        PayPal
                                    </label>
                                </div>
                                <div class="form-check check-box">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Debit Card
                                    </label>
                                </div>
                             
                                <div class="form-check check-box">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Bank Transfer (SWIFT/ACH)
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>Choose Default Payment Method</h4>
                        <p>Select deafault payment method for new affiliates</p>
                    </div>
                    <div class="col-md-6">
                        <div class="col">
                            <select id="paymentMethod" class="form-select">
                                <option selected>Paypal</option>
                                <option value="4">Debit Card</option>
                                <option value="5">Bank Transfer (SWIFT/ACH)</option>
                                <option value="6">UPI</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>Payment details</h4>
                        <p>Kindly provide your prefered payment details for receive payments on time.</p>
                    </div>
                    <div class="col-md-6">
                        <form action="#somewhere">
                           
                            <div class="col mb-3">
                                <label for="basic-url" class="form-label p-1">Paypal Id </label>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
                            </div>
                            <div class="col mb-3">
                                <label for="basic-url" class="form-label p-1">Bank Name </label>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
                            </div>
                            <div class="col mb-3">
                                <label for="basic-url" class="form-label p-1">Account No.</label>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
                            </div>
                            <div class="col mb-3">
                                <label for="basic-url" class="form-label p-1">IFSC/Swift Code </label>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
                            </div>
                            <div class="text-center">
                                <a href="#000" class="submit">Save</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- ================Report==================== --}}
            {{-- <div class="tab-pane fade show" id="report" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row settings">
                    <h4 class="text-center my-4">Download Report</h4>
                    <div class="col-md-6 mx-auto report-box">
                        <div class="">
                            <form action="#somewhere">
                                <div class="col mb-3">
                                    <label for="inputReport" class="form-label p-1">Report Type</label>
                                    <select id="inputReport" class="form-select">
                                        <option selected>Affiliates</option>
                                        <option>Order/Sales</option>
                                        <option>Product</option>
                                        <option>Payout</option>
                                        <option>Traffic</option>
                                        <option>Transaction</option>	
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput2" class="form-label p-1">Start Date</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="select date" onfocus="(this.type = 'date')"  id="date">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput2" class="form-label p-1">Final Date</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="select date" onfocus="(this.type = 'date')"  id="date">
                                    </div>
                                    <small>Report to be downloaded within selected date frame</small>
                                </div>
                                <div class="col mb-3">
                                    <label for="inputState" class="form-label p-1">Additional Filter</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Filter by Affiliate</option>
                                        <option>Filter by group</option>
                                        <option>Filter by tag</option>
                                    </select>
                                </div>
                                <div class="col mb-3">
                                    <label for="inputState" class="form-label p-1">Download Format</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>PDF</option>
                                        <option>docs</option>
                                        <option>txt</option>
                                        <option>Excel</option>
                                    </select>
                                </div>
                                <div id="liveAlertPlaceholder"></div>
                                <a type="button" class="btn  alert-btn" id="liveAlertBtn">Generate Report</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <!-- =======================Integration====================== --> --}}
            <div class="tab-pane fade show" id="integration" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>Paypal Payouts</h4>
                        <p>Efficiently transfer earnings to your affiliates right within the application.</p>
                        <a href="" class="video-modal" data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-bs-toggle="modal" data-bs-target="#videoModal">Need Help?<i class="fa-solid fa-video"></i></a>
                    </div>
                    <div class="col-md-6 integration">
                        <div class="">
                            <a href="./paypal-setup.html" class="submit">Setup Instruction</a>
                        </div>
                    </div>
                </div>
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>Amazon Attribution</h4>
                        <p>
                            If you have Amazon Brand, integrate your Amazon brand with your program for smooth affiliate sales tracking on Amazon.
                        </p>
                        <a href="" class="video-modal" data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-bs-toggle="modal" data-bs-target="#videoModal">Need Help?<i class="fa-solid fa-video"></i></a>
                    </div>
                    <div class="col-md-6 integration">
                        <div class="">
                            <a href="#000" class="submit">Complete Setup</a>
                        </div>
                    </div>
                </div>
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>Enable Google Recaptcha</h4>
                        <p>
                            enabling Google reCAPTCHA on the login page will enhance security, reduced spam, and protection against automated login attempts.	
                        </p>
                        <a href="" class="video-modal" data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-bs-toggle="modal" data-bs-target="#videoModal">Need Help?<i class="fa-solid fa-video"></i></a>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="switch">
                                <input class="switch-input" type="checkbox" / checked>
                                <span class="switch-label" data-on="Enable" data-off="Desable"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>Google tag manager</h4>
                        <p>
                            Conversion tracking is automatic when recording conversions in Google Analytics.
                        </p>
                        <a href="" class="video-modal" data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-bs-toggle="modal" data-bs-target="#videoModal">Need Help?<i class="fa-solid fa-video"></i></a>
                    </div>
                    <div class="col-md-6 integration">
                        <div class="">
                            <a href="#000" class="submit" data-bs-toggle="modal" data-bs-target="#googleTagManager">setup instruction</a>
                        </div>
                    </div>
                </div>
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>Third party checkout</h4>
                        <p>
                            Integrate external checkout applications like shopBase Checkout with the app.
                        </p>
                        <a href="" class="video-modal" data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-bs-toggle="modal" data-bs-target="#videoModal">Need Help?<i class="fa-solid fa-video"></i></a>
                    </div>
                    <div class="col-md-6 integration">
                        <div class="">
                            <a href="#000" class="submit" data-bs-toggle="modal" data-bs-target="#thirdParty" data-bs-whatever="@mdo">see instruction</a>
                        </div>
                    </div>
                </div>
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>CampaignMonitor</h4>
                        <p>
                            Sync affiliate data with campaignmonitor
                        </p>
                        <a href="" class="video-modal" data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-bs-toggle="modal" data-bs-target="#videoModal">Need Help?<i class="fa-solid fa-video"></i></a>
                    </div>
                    <div class="col-md-6 integration">
                        <div class="">
                            <a href="#000" class="submit">Sync</a>
                        </div>
                    </div>
                </div>
                <div class="row settings">
                    <div class="col-md-6">
                        <h4>ActiveCampaign</h4>
                        <p>
                            Sync affiliate data with active campaign.
                        </p>
                        <a href="" class="video-modal" data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-bs-toggle="modal" data-bs-target="#videoModal">Need Help?<i class="fa-solid fa-video"></i></a>
                    </div>
                    <div class="col-md-6 integration">
                        <div class="">
                            <a href="#000" class="submit">Integrate</a>
                        </div>
                    </div>
                </div>
            </div>							
        </div>
    </div>
    
@endsection
