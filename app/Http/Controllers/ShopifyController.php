<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShopifyController extends Controller
{
    public function install(Request $request)
    {
        $shop = $request->get('shop');
        if (!$shop) {
            return response('Missing shop parameter', 400);
        }

        $installUrl = "https://{$shop}/admin/oauth/authorize?" . http_build_query([
            'client_id' => env('SHOPIFY_API_KEY'),
            'scope' => 'read_script_tags,write_script_tags',
            'redirect_uri' => env('APP_URL') . '/shopify/callback',
        ]);

        return redirect($installUrl);
    }

    public function callback(Request $request)
    {
        \Log::info('Shopify OAuth callback hit', [
    'shop' => $request->get('shop'),
    'code' => $request->get('code'),
    'full_request' => $request->all(),
]);
        $shop = $request->get('shop');
        $code = $request->get('code');

        if (!$shop || !$code) {
            return response('Invalid callback', 400);
        }

        $response = Http::asForm()->post("https://{$shop}/admin/oauth/access_token", [
            'client_id' => env('SHOPIFY_API_KEY'),
            'client_secret' => env('SHOPIFY_API_SECRET'),
            'code' => $code,
        ]);

        if (!$response->successful()) {
            return response('Failed to get access token', 500);
        }

        $accessToken = $response->json()['access_token'];

        // OPTIONAL: Save $shop and $accessToken to DB

        // Inject ScriptTag (runs on cart page)
        Http::withHeaders([
            'X-Shopify-Access-Token' => $accessToken
        ])->post("https://{$shop}/admin/api/2024-04/script_tags.json", [
            'script_tag' => [
                'event' => 'onload',
                'src' => env('SCOOPGIFT_PUBLIC_JS'),
            ]
        ]);

        return response('App installed and script injected successfully.');
    }
}
