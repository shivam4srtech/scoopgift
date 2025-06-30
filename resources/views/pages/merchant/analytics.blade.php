<?php

use function Livewire\Volt\layout;;
layout('layouts.merchant'); ?>
@extends('layouts.merchant')
@push('styles')
    <link rel="stylesheet" href="{{ asset('style/commission.css') }}">
@endpush
@section('content')

    <h1 class="title">Analytics</h1>
    <ul class="breadcrumbs">
        <li><a href="./merchant.html">Home</a></li>
        <li class="divider">/</li>
        <li><a href="#" class="active">Analytics</a></li>
    </ul>
    <div class="row mt-4 date">
        <form action="#somewhere" class="row">
            <div class="mb-3 col-md-6">
                <label for="exampleFormControlInput2" class="form-label p-2">Start Date</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="select date" onfocus="(this.type = 'date')"  id="date">
            </div>
            <div class="mb-3 col-md-6">
                <label for="exampleFormControlInput2" class="form-label p-2">End Date</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="select date" onfocus="(this.type = 'date')"  id="date">
            </div>
            
        </form>
    </div>
    <div class="info-data">
        <div class="card">
            <div class="head">
                <div>
                    <h2>15</h2>
                    <p>Gift Cards</p>
                </div>
                <i class='bx bx-trending-up icon' ></i>
            </div>
            <span class="progress" data-value="40%"></span>
            <span class="label">40%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2><span>$</span>234</h2>
                    <p>Revenue</p>
                </div>
                <i class='bx bx-trending-down icon down' ></i>
            </div>
            <span class="progress" data-value="60%"></span>
            <span class="label">60%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>465</h2>
                    <p>Page Views</p>
                </div>
                <i class='bx bx-trending-up icon' ></i>
            </div>
            <span class="progress" data-value="30%"></span>
            <span class="label">30%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>2000</h2>
                    <p>Commission</p>
                </div>
                <i class='bx bx-trending-up icon' ></i>
            </div>
            <span class="progress" data-value="80%"></span>
            <span class="label">80%</span>
        </div>
    </div>
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Analytics Report</h3>
                <div class="menu">
                    <i class='bx bx-dots-horizontal-rounded icon'></i>
                    <ul class="menu-link">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Save</a></li>
                        <li><a href="#">Remove</a></li>
                    </ul>
                </div>
            </div>
            <div class="chart">
                <div id="chart"></div>
            </div>
        </div>
    </div>

    <div class="row recent-order mt-4">
        <h2>Visits</h2>
        <div class="table-section">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Landing Page</th>
                        <th>Gift Card</th>
                        <th>Page Views</th>
                        <th>Order</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="date">
                            <span>Oct 13, 01:44 PM</span>
                        </td>
                        <td>
                            <span><i class="fa-solid fa-desktop" style="margin-right: 12px;"></i> <img src="../dashboard-pages/images/windows.svg" height="12" alt="chrome" style="margin-right: 12px;"><img src="../dashboard-pages/images/chrome.svg" height="12" alt="chrome" style="margin-right: 12px;"></span>
                        </td>
                        <td class="name">
                            <span><a href="./affiliate-details.html">Glenn Maxwell</a></span>
                        </td>
                        <td>
                            <span>10</span>
                        </td>
                        <td>
                            <span>10001</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="date">
                            <span>Oct 13, 01:44 PM</span>
                        </td>
                        <td>
                            <span><i class="fa-solid fa-desktop" style="margin-right: 12px;"></i> <i class="fa-brands fa-apple" style="margin-right: 12px;"></i><img src="../dashboard-pages/images/Safari_browser_logo.svg.png" height="12" alt="chrome" style="margin-right: 12px;"></span>
                        </td>
                        <td class="name">
                            <span><a href="./affiliate-details.html">Glenn Maxwell</a></span>
                        </td>
                        <td>
                            <span>10</span>
                        </td>
                        <td>
                            <span>10001</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="date">
                            <span>Oct 13, 01:44 PM</span>
                        </td>
                        <td>
                            <span><i class="fa-solid fa-desktop" style="margin-right: 12px;"></i> <img src="../dashboard-pages/images/windows.svg" height="12" alt="chrome" style="margin-right: 12px;"><img src="../dashboard-pages/images/edge.png" height="12" alt="chrome" style="margin-right: 12px;"></span>
                        </td>
                        <td class="name">
                            <span><a href="./affiliate-details.html">Pat Commins</a></span>
                        </td>
                        <td>
                            <span>10</span>
                        </td>
                        <td>
                            <span>10001</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="date">
                            <span>Oct 13, 01:44 PM</span>
                        </td>
                        <td>
                            <span><i class="fa-solid fa-mobile-screen" style="margin-right: 12px;"></i><i class="fa-brands fa-android" style="margin-right: 12px;"></i><img src="../dashboard-pages/images/chrome.svg" height="12" alt="chrome" style="margin-right: 12px;"></span>
                        </td>
                        <td class="name">
                            <span><a href="./affiliate-details.html">Musafikur Rahim</a></span>
                        </td>
                        <td>
                            <span>10</span>
                        </td>
                        <td>
                            <span>10001</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
