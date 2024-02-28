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
    Start About
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="about-section ptb-120">
        <div class="about-element-one two">
            <img src="{{asset('home/images/element/element-39.png')}}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content two">
                        <h3 class="title">Who We Are</h3>
                        <p>
                            Welcome to {{$siteName}}, your all-in-one destination for navigating the world of investments.
                            Specializing in Agriculture, stocks,
                            retirement planning, gold, medical cannabis, and oil and gas,
                            {{$siteName}} is your gateway to a diverse range of lucrative opportunities.
                        </p>
                        <p>
                            At {{$siteName}}, our mission is to redefine the landscape of financial success through a harmonious fusion of traditional wisdom and cutting-edge innovation. Guided by unwavering principles of integrity, transparency, and client-centricity, we embark on a relentless pursuit to empower individuals on their journey to prosperity.
                        </p>
                        <p>
                            We believe in democratizing access to diverse and lucrative investment opportunities, transcending the conventional boundaries of financial markets. Through astute market analysis, pioneering technologies, and a commitment to staying ahead of the curve, we aim to provide our clients with a roadmap to sustainable wealth creation.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-thumb two">
                        <img src="{{asset('home/images/element/element-68.png')}}" alt="element">
                        <div class="about-thumb-element-one">
                            <img src="{{asset('home/images/element/element-60.png')}}" alt="element">
                        </div>
                        <div class="about-thumb-element-two">
                            <img src="{{asset('home/images/element/element-60.png')}}" alt="element">
                        </div>
                        <div class="about-thumb-video">
                            <div class="circle">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
                                </defs>
                                    <circle cx="150" cy="100" r="75" fill="none"/>
                                    <g>
                                        <use xlink:href="#circlePath" fill="none"/>
                                        <text fill="#ffffff">
                                            <textPath xlink:href="#circlePath">{{$siteName}} {{$siteName}}</textPath>
                                        </text>
                                    </g>
                            </svg>
                            </div>
                            <div class="video-main">
                                <a class="video-icon video" data-rel="lightcase:myCollection" href="https://www.youtube.com/embed/LRhrNC-OC0Y">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-30">
                    <p>
                        At the heart of our mission lies a dedication to fostering financial literacy and empowerment. We strive to be a beacon of education, equipping our clients with the knowledge and tools necessary to make informed decisions that align with their unique financial goals.
                    </p>
                    <p>
                        {{$siteName}} is not merely an investment company; it is a catalyst for positive change in the financial landscape. We embrace the responsibility to contribute to a more resilient, inclusive, and sustainable global economy. By championing ethical practices, environmental stewardship, and social responsibility, we aspire to create a lasting impact that transcends generations.
                    </p>
                    <p.
                        In essence, our mission is to be the trusted partner and guiding light for those who dare to dream of financial independence. {{$siteName}} is more than an investment platform; it is a gateway to a future where financial success is not just a destination but a transformative journey—one where innovation, integrity, and inclusivity converge for the benefit of all.
                    </p>

                    <div class="about-btn two">
                        <a href="{{route('register')}}" class="btn--base">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Agency
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="agency-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="agency-content text-center">
                        <div class="agency-logo-text">
                            <span>AGENCY</span>
                        </div>
                        <h2 class="title">{{$siteName}} is an investment agency that offers a wide scale of
                            creative services, including forex, cryptocurrency, cannabis, Oil and gas mining.</h2>
                    </div>
                    <div class="agency-statistics-area">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="12">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Years of operation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="256">0</h3>
                                            <h3 class="title">M+</h3>
                                        </div>
                                        <p>Investments</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="165">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Team Specialist</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                <div class="statistics-item">
                                    <div class="statistics-content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="25">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Around The World</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Agency
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



@endsection
