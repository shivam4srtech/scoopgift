<?php

use function Livewire\Volt\layout;;
layout('layouts.merchant'); ?>
@extends('layouts.merchant')
@push('styles')
    <link rel="stylesheet" href="{{ asset('style/commission.css') }}">
@endpush
@section('content')

    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h1 class="title">Commission</h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="./merchant.html">Home</a></li>
        <li class="divider">/</li>
        <li><a href="./affiliate.html" class="active">refferal commissions</a></li>
    </ul>
    <div class="card mt-4">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" aria-current="true" href="#" id="home-tab" data-bs-toggle="tab" data-bs-target="#referralCommissions" aria-controls="referralCommissions" aria-selected="true">Overspent Commissions</a>
            </li>
            
            </ul>
        </div>
        <div class="card-body tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="referralCommissions" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="row default-commission mt-2">
                    <div class="col-md-6 mb-3">
                        <h2>Default Commission</h2>
                        <p>Default commission applies to all products and affiliates</p>
                        <p>Watch tutorial video for more info <a href="" class="video-modal" data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-bs-toggle="modal" data-bs-target="#videoModal">Watch Here <i class="fa-solid fa-video"></i></a></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <small>10 <span>%</span></small>
                        <p><a href="" data-bs-toggle="modal" data-bs-target="#defautCommission" class="modify-commission">Change</a></p>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    {{-- Update default commission --}}
	<div class="modal fade" id="defautCommission" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Change Default Commission</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="#someWhere">
						<div class="col-md-12 mb-3 mt-3">
							<label for="inputReport" class="form-label">Select commission attribute</label>
							<select id="paymentMethod" class="form-select" onchange="defaultCommission(this)">
							  <option selected>Select</option>
							  <option value="1">Percentages</option>
							  <option value="2">Flat Rate</option>
							</select>
						</div>
						<div class="col-md-12 mb-3 d-none" id="percentages">
							<div class="input-group mb-3">
								<span class="input-group-text" id="basic-addon3">%</span>
								<input type="number" class="form-control" id="basic-percentage" aria-describedby="basic-addon3">
							</div>
						</div>
						<div class="col-md-12 mb-3 d-none" id="flatRate">
							<div class="input-group mb-3">
								<span class="input-group-text" id="basic-addon3">$</span>
								<input type="number" class="form-control" id="basic-flatRate" aria-describedby="basic-addon3">
							</div>
						</div>
						<a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</a>
						<a type="submit" class="btn btn-primary">Update</a>
					</form>
				</div>
			</div>
		</div>
	</div>
    
@endsection
