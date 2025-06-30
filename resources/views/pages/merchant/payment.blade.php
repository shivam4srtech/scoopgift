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
            <ul class="nav nav-tabs card-header-tabs id="myTab" role="tablist"">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" aria-current="true" href="#" id="home-tab" data-bs-toggle="tab" data-bs-target="#payment" aria-controls="payment" aria-selected="true">Payment</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" aria-current="true" href="#" id="home-tab" data-bs-toggle="tab" data-bs-target="#history" aria-controls="history" aria-selected="true">History</a>
                </li>
            </ul>
        </div>
        <div class="card-body tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="payment" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row mt-2">
                    <h2>Filter Option</h2>
                    <div class="col-md-4 mb-3">
                        <label for="formGroupExampleInput" class="form-label">Affiliate</label>
                        <input type="search" class="form-control" id="formGroupExampleInput" placeholder="Eg. Jason Holder">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="inputReport" class="form-label">payment method</label>
                        <select id="paymentMethod" class="form-select">
                            <option selected>All</option>
                            <option value="1">Cash App</option>
                            <option value="2">UPI Coupon</option>
                            <option value="2">Bank Transfer</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Date</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="select date" onfocus="(this.type = 'date')"  id="date">
                    </div>
                </div>
                <div class=" row table-section">
                    <table>
                        <thead>
                            <tr>
                                <th>Affiliate</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="affiliate">
                                    <span><a href="./affiliate-details.html" class="name">Corey Anderson</a></span>
                                    <span>anderson.pay@aus.com</span>
                                </td>
                                <td>
                                    <spa> $2000</span>
                                </td>
                                <td>
                                    <span>Cash App</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="affiliate">
                                    <span><a href="./affiliate-details.html" class="name">Corey Anderson</a></span>
                                    <span>anderson.pay@aus.com</span>
                                </td>
                                <td>
                                    <spa> $2000</span>
                                </td>
                                <td>
                                    <span>Cash App</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="affiliate">
                                    <span><a href="./affiliate-details.html" class="name">Corey Anderson</a></span>
                                    <span>anderson.pay@aus.com</span>
                                </td>
                                <td>
                                    <spa> $2000</span>
                                </td>
                                <td>
                                    <span>Cash App</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="affiliate">
                                    <span><a href="./affiliate-details.html" class="name">Corey Anderson</a></span>
                                    <span>anderson.pay@aus.com</span>
                                </td>
                                <td>
                                    <spa> $2000</span>
                                </td>
                                <td>
                                    <span>Cash App</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- ================Royalties Commissions=============== -->
            <div class="tab-pane fade show" id="history" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row mt-2">
                    <h2>Filter Option</h2>
                    <div class="col-md-6 mb-3">
                        <label for="formGroupExampleInput" class="form-label">Affiliate</label>
                        <input type="search" class="form-control" id="formGroupExampleInput" placeholder="Eg. Jason Holder">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Date</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="select date" onfocus="(this.type = 'date')"  id="date">
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
                                <th>Affiliate</th>
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
                                <td class="name">
                                    <span><a href="./affiliate-details.html">AB De villiers</a></span>
                                </td>
                                <td>
                                    <span>$999</span>
                                </td>
                                <td class="">
                                    <span>Bank Transfer</span>
                                </td>
                                <td class="">
                                    <span><a href="">Edit</a></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="pay-time">
                                    <span class="date">14 Oct 2023</span>
                                    <span>2:52 PM</span>
                                </td>
                                <td class="name">
                                    <span><a href="./affiliate-details.html">AB De villiers</a></span>
                                </td>
                                <td>
                                    <span>$999</span>
                                </td>
                                <td class="">
                                    <span>Bank Transfer</span>
                                </td>
                                <td class="">
                                    <span><a href="">Edit</a></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="pay-time">
                                    <span class="date">14 Oct 2023</span>
                                    <span>2:52 PM</span>
                                </td>
                                <td class="name">
                                    <span><a href="./affiliate-details.html">AB De villiers</a></span>
                                </td>
                                <td>
                                    <span>$999</span>
                                </td>
                                <td class="">
                                    <span>Bank Transfer</span>
                                </td>
                                <td class="">
                                    <span><a href="">Edit</a></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="pay-time">
                                    <span class="date">14 Oct 2023</span>
                                    <span>2:52 PM</span>
                                </td>
                                <td class="name">
                                    <span><a href="./affiliate-details.html">AB De villiers</a></span>
                                </td>
                                <td>
                                    <span>$999</span>
                                </td>
                                <td class="">
                                    <span>Bank Transfer</span>
                                </td>
                                <td class="">
                                    <span><a href="">Edit</a></span>
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
