<?php

use function Livewire\Volt\layout;;
layout('layouts.merchant'); ?>
@extends('layouts.merchant')
@push('styles')
    <link rel="stylesheet" href="{{ asset('style/merchant.css') }}">
@endpush
@section('content')
			<h1 class="title">Dashboard</h1>
			<ul class="breadcrumbs">
				<li><a href="./merchant.html">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
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
							<h2>1500</h2>
							<p>Orders</p>
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
							<h2>235</h2>
							<p>Gift Card</p>
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
						<h3>Sales Report</h3>
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
			<div class="row recent-order mt-3">
        <h2>Recent Orders</h2>
				<div class="table-section">
					<table>
						<thead>
							<tr>
								<th>Gift Card</th>
								<th>Order #</th>
								<th>Order Value</th>
								<th>Commission</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="name">
									<span><a href="./affiliate-details.html">Glenn Maxwell</a></span>
								</td>
								<td>
									<span><a href="">1001</a></span>
								</td>
								<td>
									<span>$999</span>
								</td>
								<td>
									<span>$99</span>
								</td>
							</tr>
							<tr>
								<td class="name">
									<span><a href="./affiliate-details.html">Somya Sarkar</a></span>
								</td>
								<td>
									<span><a href="">1001</a></span>
								</td>
								<td>
									<span>$999</span>
								</td>
								<td>
									<span>$99</span>
								</td>
							</tr>
							<tr>
								<td class="name">
									<span><a href="./affiliate-details.html">Mahis Tikshana</a></span>
								</td>
								<td>
									<span><a href="">1001</a></span>
								</td>
								<td>
									<span>$999</span>
								</td>
								<td>
									<span>$99</span>
								</td>
							</tr>
							<tr>
								<td class="name">
									<span><a href="./affiliate-details.html">Lasith Mollinga</a></span>
								</td>
								<td>
									<span><a href="">1001</a></span>
								</td>
								<td>
									<span>$999</span>
								</td>
								<td>
									<span>$99</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
@endsection
