<?php

use function Livewire\Volt\layout;;
layout('layouts.merchant'); ?>
@extends('layouts.merchant')
@push('styles')
    <link rel="stylesheet" href="{{ asset('style/payment.css') }}">
@endpush
@section('content')

    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h1 class="title">Payment</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="./merchant.html">Home</a></li>
        <li class="divider">/</li>
        <li><a href="./affiliate.html" class="active">payment</a></li>
    </ul>
    <div class="card mt-4">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
           
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" aria-current="true" href="#" id="home-tab" data-bs-toggle="tab" data-bs-target="#history" aria-controls="history" aria-selected="true">Payment History</a>
                </li>
            </ul>
        </div>
        <div class="card-body tab-content" id="nav-tabContent">
            {{-- ================Royalties Commissions===============  --}}
            <div class="tab-pane active show" id="history" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row mt-2">
                    <h2>Filter Option</h2>
                    <div class="col-md-6 mb-3">
                        <label for="startDate" class="form-label">Start Date</label>
                        <input type="text" class="form-control" id="startDate" placeholder="select start date" onfocus="(this.type = 'date')">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="endDate" class="form-label">End Date</label>
                        <input type="text" class="form-control" id="endDate" placeholder="select end date" onfocus="(this.type = 'date')">
                    </div>
                </div>
                <div class="row">
                    <h2>Total Paid</h2>
                    <span>$000</span>
                </div>
                <div class="table-section">
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pay-time">
                                    <span class="date">14 Oct 2023</span>
                                    <span>2:52 PM</span>
                                </td>
                                <td>
                                    <span>$999</span>
                                </td>
                                <td class="">
                                    <span>Bank Transfer</span>
                                </td>
                                <td>
                                    <span>Self Transfer</span>
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
  
    
@endsection
