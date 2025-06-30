<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GiftCardController;

Route::post('/shopify/validate-gift-card', [GiftCardController::class, 'validateGiftcard']);