@extends('home.base')
@section('content')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner-section two inner">
        <div class="banner-element-four two">
            <img src="{{asset('home/images/element/element-5.png')}}" alt="element">
        </div>
        <div class="banner-element-five two">
            <img src="{{asset('home/images/element/element-7.png')}}" alt="element">
        </div>
        <div class="banner-element-nineteen two">
            <img src="{{asset('home/images/element/element-6.png')}}" alt="element">
        </div>
        <div class="banner-element-twenty-two two">
            <img src="{{asset('home/images/element/element-69.png')}}" alt="element">
        </div>
        <div class="banner-element-twenty-three two">
            <img src="{{asset('home/images/element/element-70.png')}}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-12 mb-30">
                    <div class="banner-content two">
                        <div class="banner-content-header">
                            <h2 class="title">{{$pageName}}</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$pageName}}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Contact-item
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="contact-item-section ptb-120">
        <div class="contact-item-element-one">
            <img src="{{asset('home/images/element/element-71.png')}}" alt="element">
        </div>
        <div class="contact-item-element-two">
            <img src="{{asset('home/images/element/element-72.png')}}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="contact-item text-center">
                        <div class="contact-icon-area">
                            <div class="contact-icon">
                                <i class="las la-map-marked-alt"></i>
                            </div>
                        </div>
                        <div class="contact-content">
                            <h3 class="title">Visit Our Office</h3>
                            <p>{!! $web->address !!}</p>
                        </div>
                    </div>
                </div>
                @if(!empty($web->phone))
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="contact-item text-center">
                            <div class="contact-icon-area">
                                <div class="contact-icon">
                                    <i class="las la-phone"></i>
                                </div>
                            </div>
                            <div class="contact-content">
                                <h3 class="title">Call Us</h3>
                                <p><a href="tel:{{$web->phone}}">{{$web->phone}}</a> </p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="contact-item text-center">
                        <div class="contact-icon-area">
                            <div class="contact-icon">
                                <i class="las la-envelope-open-text"></i>
                            </div>
                        </div>
                        <div class="contact-content">
                            <h3 class="title">Mail Us</h3>
                            <p><a href="mailto:{{$web->email}}">{{$web->email}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Contact-item
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


@endsection
