<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('web.index');
    }

        public function platforms()
    {
        return view('web.platforms');
    }

    // Dashboard Pages
        public function dashboard()
    {
        return view('pages.merchant.dashboard');
    }
         public function giftCard()
    {
        return view('pages.merchant.gift-card');
    }
          public function commission()
    {
        return view('pages.merchant.commission');
    }
           public function analytics()
    {
        return view('pages.merchant.analytics');
    }
           public function settings()
    {
        return view('pages.merchant.settings');
    }
            public function payment()
    {
        return view('pages.merchant.payment');
    }
}
