@extends('layouts.web')
@push('styles')
<link rel="stylesheet" href="./css/plateforms.css">
@endpush
@section('content')
<div class="plateform">
    <h1>Supported platforms</h1><br>
</div>
<div class="plateform">
    <p>Choose the platform on which you are running your store to proceed with the setup</p>
</div>
<div class="container">
    <div class="childcontainer">
        <a href="https://www.shopify.com/in" target="_blank"><img src="./images/shopify.svg" alt=""></a>
        <a href="https://www.shopify.com/in" target="_blank"><img src="./images/magentoLogo.svg" alt=""></a>
        <a href="https://www.shopify.com/in" target="_blank"><img src="./images/wix.svg" alt=""></a>
        <a href="https://www.shopify.com/in" target="_blank"><img src="./images/shopbase_logo.png" alt=""></a>
        <a href="https://www.shopify.com/in" target="_blank"><img src="./images/shopify.svg" alt=""></a>
        <a href="https://www.shopify.com/in" target="_blank"><img src="./images/shopify.svg" alt=""></a>

    </div>
    <div class="childcontainer">
        <a href="https://woocommerce.com/" target="_blank"><img src="./images/woocommerce-logo.svg" alt=""></a>
        <a href="https://woocommerce.com/" target="_blank"><img src="./images/vimeo.png" alt=""></a>
        <a href="https://woocommerce.com/" target="_blank"><img src="./images/weebly.svg" alt=""></a>
        <a href="https://woocommerce.com/" target="_blank"><img src="./images/gtm.png" alt=""></a>
        <a href="https://woocommerce.com/" target="_blank"><img src="./images/woocommerce-logo.svg" alt=""></a>
        <a href="https://woocommerce.com/" target="_blank"><img src="./images/woocommerce-logo.svg" alt=""></a>
    </div>
    <div class="childcontainer">
        <a href="https://www.bigcommerce.com/" target="_blank"><img class="step1" src="./images/bc-logo-dark.svg" alt=""></a>
        <a href="https://www.bigcommerce.com/" target="_blank"><img class="step1" src="./images/ecwid.svg" alt=""></a>
        <a href="https://www.bigcommerce.com/" target="_blank"><img class="step1" src="./images/shoplazza_logo.png" alt=""></a>
        <a href="https://www.bigcommerce.com/" target="_blank"><img class="step1" src="./images/subbly.png" alt=""></a>
        <a href="https://www.bigcommerce.com/" target="_blank"><img class="step1" src="./images/bc-logo-dark.svg" alt=""></a>
        <a href="https://www.bigcommerce.com/" target="_blank"><img class="step1" src="./images/bc-logo-dark.svg" alt=""></a>
    </div>

</div>

<div>
    <div class="custom">
        <h1>Custom e-commerce platform ?</h1>
        <p>See how you can install the app on your custom e-commerce website</p>
        <a href="./resources.html" target="_blank">learn More</a>
    </div>
    <div class="custom manual">
        <h1>None of the above ?</h1>
        <p>We should be able to do a manual setup on your platform</p>
        <a href="./contact.html">Contact us <i class="fa fa-location-arrow" aria-hidden="true"></i></a>
    </div>
</div>
@endsection