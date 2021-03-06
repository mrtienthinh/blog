@extends('layouts.front')
@section('content')

<div class="image-aboutus-banner"style="margin-bottom: 90px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="lg-text">About Us</h1>
                <p class="image-aboutus-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2>About this page</h2>
                            <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
                            <ul>
                                <li>Clickable nav links that smooth scroll to page sections</li>
                                <li>Responsive behavior when clicking nav links perfect for a one page website</li>
                                <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
                                <li>Minimal custom CSS so you are free to explore your own unique design options</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="" class="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h2>Services we offer</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-4">
            @include('front.inc.sidebar')
        </div>
    </div>
</div>

@endsection