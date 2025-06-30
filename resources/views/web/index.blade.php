@extends('layouts.web')

@section('content')
<section class="">
    <button class="chatbot-toggler">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M64 0C28.7 0 0 28.7 0 64L0 352c0 35.3 28.7 64 64 64l96 0 0 80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416 448 416c35.3 0 64-28.7 64-64l0-288c0-35.3-28.7-64-64-64L64 0z"/></svg>
    </button>
    <div class="chatbot">
        <header>
            <h2>Chatbot</h2>
            <span><i class=" close-btn fa fa-times" aria-hidden="true"></i></span>
        </header>
        <ul class="chatbox">
            <li class="chat incoming">
                <span><i class="fa-solid fa-robot"></i></span>
                <p>Hi there <br> How can I help you today?</p>
            </li>
        </ul>
        <div class="chat-input">
            <textarea placeholder="Enter a message..." required></textarea>
            <span id="send-btn"><i class="fa-solid fa-paper-plane"></i></span>
        </div>
    </div>
</section>

<section class="container description-box">
    <div class="row">
        <div class="col-lg-6 col-sm-12 site-description">
            <strong class="d-one">Welcome to <br> <span class="affiliate">gift card portal</span></strong>
            <p>
                    Our gift-card portal empowers merchants to sign up and promote their gift cards with ease. Each merchant gets a dedicated dashboard to track sales, revenue, profit, and key metrics in real-time, enabling smarter decisions and better growth. Join us to boost visibility and manage your gift card business efficiently.
            </p>
            <a href="" class="explore mt-3">Join Now</a>
        </div>
        <div class="col-lg-6 col-sm-12 site-description">
            <img src="{{ asset('images/gift-card-happy-client.webp') }}" alt="happy-clients">
        </div>
    </div>
</section>

<section class="container-fluid brand">
    <div class="container">
        <h2 class="my-4">Where do you fit into the picture?</h2>
        <div class="row brand-box">
            <div class="col-md-6">
                <div class="brand-item">
                    <h3>Are You a Merchant?</h3>
                    <p>Boost your sales and compensate top-tier publishers for effectively marketing your products/services.</p>
                    <button onclick="window.location.href='./account/sign-up.html';">Register</button>
                    <button onclick="window.location.href='./account/login.html';">Login</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ************************why choose us************************************ -->
<section class="container-fluid why-bigAffi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-10 mx-auto">
                <div class="row">
                    <h2>Why should you Choose scoopGift ?</h2>
                    <p class="join">Join the ranks of successful merchants and affiliates who have already unlocked their full earning potential.</p>
                    <div class="col-lg-3 col-md-6 col-sm-12 choose-box">
                        <div class="choose-item">
                            <img src="./images/user-friendly.jpg" alt="">
                            <span>User-Friendly Interface</span>
                            <p>
                                Seamlessly navigate our platform, whether you're a seasoned pro or new to affiliate marketing.
                            </p>
                        </div>
                    </div>
                    <!-- ************************ -->
                    <div class="col-lg-3 col-md-6 col-sm-12 choose-box">
                        <div class="choose-item">
                            <img src="./images/divercified.jpg" alt="">
                            <span>Diverse Affiliate Programs</span>
                            <p>
                                Access a wide range of industries and niches, allowing you to find the perfect match for your audience.
                            </p>
                        </div>
                    </div>
                    <!-- ************************ -->
                    <div class="col-lg-3 col-md-6 col-sm-12 choose-box">
                        <div class="choose-item">
                            <img src="./images/secure.jpg" alt="">
                            <span> Secure and Reliable</span>
                            <p>
                                Rest easy knowing that your data and earnings are protected by state-of-the-art security measures.
                            </p>
                        </div>
                    </div>
                    <!-- ************************ -->
                    <div class="col-lg-3 col-md-6 col-sm-12 choose-box">
                        <div class="choose-item">
                            <img src="./images/innovative.jpg" alt="">
                            <span>Innovative Tools</span>
                            <p>
                                Our state-of-the-art affiliate marketing tools empower you to optimize your campaigns.
                            </p>
                        </div>
                    </div>
                    <!-- ************************ -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ********************************Auto Playing carousel**************************************************** -->
<div class="logos">
    <h2 class="text-center mb-5">Trusted by over 200 companies and millions of Advertisers around the globe</h2>
    <div class="logos-slide">
        <img src="./images/cnn_scaled3.webp" />
        <img src="./images/Microsoftx200-300x79.webp" />
        <img src="./images/Bigcommerce_scaled3.png" />
        <img src="./images/shopify_scaled.webp" />
        <img src="./images/Walmart-logo-website-.webp" />
        <img src="./images/levis_200px-300x79.webp" />
        <img src="./images/Adidas_200px-300x79.webp" />
        <img src="./images/Buzzfeed_scaled.webp" />
        <img src="./images/HSBC-greyscale-logo-with-padding-light-no-bg.webp" />
        <img src="./images/ticketmaster_200px-300x79-1.webp" />
        <img src="./images/macafee_logo.webp" />
        <img src="./images/uber-logo.webp" />
    </div>
</div>

<!-- *************************************Statistics******************************************* -->
<section class="counters">
    <h2>Our Statistical Data Tells Everything</h2>
    <div>
        <div class="counter">
            <h1><span data-count="50020">0</span>+</h1>
            <h3>Stores</h3>
        </div>
        <div class="counter">
            <h1><span data-count="19870">0</span>+</h1>
            <h3>Satisfied Clients</h3>
        </div>
        <div class="counter">
            <h1><span data-count="20003">0</span>+</h1>
            <h3>Order Received</h3>
        </div>
        <div class="counter">
            <h1><span data-count="53000">0</span>+</h1>
            <h3>Clicks</h3>
        </div>
    </div>
</section>
@endsection