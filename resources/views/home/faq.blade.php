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
                            <h2 class="title">Services</h2>
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
    Start Faq
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="faq-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12">
                    <div class="faq-wrapper">

                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">What is {{$siteName}}?</span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>{{$siteName}} our company provides a full investment service focused on the bitcoin and cryptocurrency market We are among the best platforms to invest and grow your bitcoin and other cryptocurrency</p>

                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">How do I create my account?</span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button  and fill in all the required fields</p>

                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">How do I make a deposit?</span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>
                                    To deposit funds in your trading account is quick and simple. For your
                                    convenience you may choose one of the several available deposit methods.
                                    To make a successful deposit please follow the steps below:<br>
                                <ul>
                                    <li>Login to your account Click on the New Investment button in the
                                        DASHBOARD section.<br>
                                    </li>

                                    <li>Choose the deposit option And fill the form including the amount and
                                        the package.
                                    </li>
                                    <li>
                                        You will receive the wallet address to make payment to on the next page.
                                        After payment, contact support.
                                    </li>
                                    <li>
                                        Once your deposit has been confirmed, the status of the investment will change
                                        to <span class="text-primary">Ongoing</span> which means that it has been confirmed
                                        and your investment started.
                                    </li>
                                </ul>


                                </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">How long does my deposit take before it can reflect on my {{$siteName}} account dashboard?</span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title">How do I make a withdrawal?</span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>To make a withdrawal request click the WITHDRAW button at the top center of your {{$siteName}} account dashboard and input the required details to withdraw</p>

                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title"> How long does it take to process my withdrawal?</span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>Once we receive your withdrawal request we process immediately and send to your bitcoin wallet</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <h3 class="faq-title"><span class="title"> <p>Once we receive your withdrawal request we process immediately and send to your bitcoin wallet</p></span><span class="right-icon"></span></h3>
                            <div class="faq-content">
                                <p>Yes we are officially and properly registered with the united kingdom company house and registered with the name {{$siteName}} LTD</p>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
