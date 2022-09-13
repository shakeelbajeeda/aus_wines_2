@extends('layouts.auswine')
@section('content')
 <!-- image -->
 <div class="container-fluid image_heaher" style="background-image: url({{asset('assets/images/italy_vineyard.jpg')}});">
    <div class="text_heading">
        <h1>Explore Australian Wine</h1>
        <p>
            The Australian wine industry is one of the world's largest exporters of wine, with approximately 800
            million of the 1.2 <br />
            to 1.3 billion litres produced is annually exported to overseas market.
        </p>
    </div>
</div>
<br />

<div class="continer-fluid">
    <div class="row w-100">
        <div class="col-md-4">
            <div class="border ms-3">
                <img width="100%" height="500px" src="{{asset('assets/images/bottle.jpeg')}}" alt="">
                <p class="image_text">Red Wine</p>
                <p class="ps-2 pe-2 text-center">R
                    ed wine is a type of wine made from dark-color grape varieties.
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="border ms-3">
                <img width="100%" height="500px" src="{{asset('assets/images/glass.jpeg')}}" alt="">
                <p class="image_text">White Wine</p>
                <p class="ps-2 pe-2 text-center">
                    White wine is a wine of that is fermented without skin contact.
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="border ms-3">
                <img width="100%" height="500px" src="{{asset('assets/images/glass_2.jpeg')}}" alt="">
                <p class="image_text">Sparkling Wine</p>
                <p class="ps-2 pe-2 text-center">
                    Sparkling Wine is a wine significant levels carbon dioXide in it, making it fizzy.
                </p>
            </div>
        </div>
    </div>
</div>
<br />

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 text-center p-5">
            <h1>Explore Wine vineyard</h1>
            <p>
                Some great placeholder content for the first featurette here.
            </p>
        </div>
        <div class="col-md-6">
            <img width="100%" height="350px" src="{{asset('assets/images/wine_logo.jpeg')}}" alt="">
        </div>
    </div>
</div>
<br />

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 text-center">
            <img width="100%" height="350px" src="{{asset('assets/images/wine_glass.jpg')}}" alt="">
        </div>
        <div class="col-md-6 p-5">
            <h1>We have varieties</h1>
            <p>Do you want to explore different types of wine? you can try a bit of different tests of wine.</p>
        </div>
    </div>
</div>
<br />

<div class="container-fluid">
    <div class="row pb-5">
        <div class="col-md-6 text-center p-5">
            <h1>Do you need Wine for an event?</h1>
            <p>You Can also order a bulk of wine for an event with a huge discount.</p>
        </div>
        <div class="col-md-6">
            <img width="100%" height="350px" src="{{asset('assets/images/event_wine.jpg')}}" alt="">
        </div>
    </div>
</div>
@endsection
