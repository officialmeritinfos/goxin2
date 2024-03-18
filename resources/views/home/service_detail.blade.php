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

    <!--Start Service Details area -->
    <section class="service-details-area mt-30">
        <div class="container">
            <div class="row">


                <!--Start Service Details Content -->
                <div class="col-xl-12 col-lg-12 order-box-1">
                    <div class="service-details__content">
                        <div class="img-box-outer">
                            <div class="img-box1">
                                <img src="{{asset('home/serv/'.$service->photo)}}" alt="" />
                            </div>
                            <div class="icon">
                                <span class="icon-creative"></span>
                            </div>
                        </div>

                        <div class="text-box1">
                            <h2>{{$service->title}}</h2>
                            <p>
                                {!! str_replace(['MYSITE','REGISTER'],[$siteName,route('register')],$service->content) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <!--End Service Details Content -->

            </div>
        </div>
    </section>
    <!--End Service Details area -->

@endsection
