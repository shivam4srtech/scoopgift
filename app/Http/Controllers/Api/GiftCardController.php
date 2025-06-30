<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiftCard;

class GiftCardController extends Controller
{
    public function validateGiftcard(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'shop' => 'required',
        ]);

        $giftCard = GiftCard::where('code', $request->code)->first();

        if (!$giftCard) {
            return response()->json(['valid' => false], 404);
        }

        return response()->json([
            'valid' => true,
            'amount' => $giftCard->amount,
        ]);
    }
}
