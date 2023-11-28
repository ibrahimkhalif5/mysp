@extends('frontend.layouts.main')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('front/images/gov.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
@if(session('success'))
<div class="alert alert-success">
    <span>&#10004;</span> {{ session('success') }}
</div>
@endif
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Address</h3>
                    <p>Mandera County government</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Contact Number</h3>
                    <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Email Address</h3>
                    <p><a href="/cdn-cgi/l/email-protection#a6cfc8c0c9e6dfc9d3d4d5cfd2c388c5c9cb"><span
                                class="__cf_email__"
                                data-cfemail="6b02050d042b12041e1918021f0e45080406">mandera.youth@gmail.com</span></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Website</h3>
                    <p><a href="#">yoursite.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                <form class="" method="POST" action="{{url('contact-us')}}" id="postComment">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email" name="email">
                    </div>

                    <div class="form-group">
                        <textarea cols="30" rows="7" class="form-control" placeholder="Message"
                            name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <!-- <div class="col-md-6 d-flex align-items-stretch">
                <div id="map"></div>
            </div> -->
        </div>
    </div>
</section>


@endsection

