@extends('home.base')
@section('content')
    <!-- Start Main Slider -->
    <section class="main-slider style2">
        <div class="slider-box">
            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url({{asset('home/images/ai2.jpg')}})">
                    </div>
                    <div class="auto-container">
                        <div class="content text-center">
                            <div class="big-title">
                                <h2>
                                    AI- Integrated<br> Investment
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="{{route('register')}}">
                                        <span class="txt">
                                            Get Started<i class="icon-refresh arrow"></i>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url({{asset('home/images/biotech.jpg')}})">
                    </div>
                    <div class="auto-container">
                        <div class="content text-center">
                            <div class="big-title">
                                <h2>
                                    Invest in Biotechnology<br> with a Notable firm
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="{{route('register')}}">
                                        <span class="txt">
                                            Get Started<i class="icon-refresh arrow"></i>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url({{asset('home/serv/2.png')}})">
                    </div>
                    <div class="auto-container">
                        <div class="content text-center">
                            <div class="big-title">
                                <h2>
                                    Medical Cannabis Investment<br> Services
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="{{route('register')}}">
                                        <span class="txt">
                                            Get Started<i class="icon-refresh arrow"></i>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Main Slider -->
    <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,1958,1831,74,2,5426" currency="USD" theme="light" transparent="true" show-symbol-logo="true"></div>
    <!-- /.End of tricker -->
    <!--Start Service Style1 Area-->
    <section class="service-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="service-style1__title">
                        <div class="sec-title sec-title--style2">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h3>What we do</h3>
                            </div>
                            <h2>Services We’re<br> Offering</h2>
                        </div>
                        <div class="inner-text">
                            <p>We are utilizing a super AI-model based strategy to ensure that you have the best returns possible.</p>
                        </div>

                        <div class="video-holder-box">
                            <div class="video-gallery-style1">
                                <div class="video-gallery-style1__bg"
                                     style="background-image: url({{asset('home/images/resources/video-gallery-style1-bg.jpg')}});">
                                </div>
                                <div class="icon wow zoomIn animated" data-wow-delay="300ms"
                                     data-wow-duration="1500ms">
                                    <a class="video-popup" title="Video Gallery"
                                       href="https://www.youtube.com/watch?v=p25gICT63ek">
                                        <span class="fa fa-play"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="service-style1__content">
                        <div class="row justify-content-center">
                            @foreach($services as $service)
                                <!--Start Single Service Style1-->
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="single-service-style1">
                                        <div class="shape-box"></div>
                                        <div class="icon-holder">
                                            <span class="icon-report"></span>
                                        </div>
                                        <div class="title-holder">
                                            <h3>
                                                <a href="{{route('service.details',['id'=>$service->id])}}">
                                                    {{$service->title}}
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service Style1-->
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Service Style1 Area-->

    <!--Start About Style2 Area-->
    <section class="about-style2-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="about-style2__content">
                        <div class="sec-title sec-title--style2">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h3>About the company</h3>
                            </div>
                            <h2>We’re Providing the<br> Best Solution with AI & Experts</h2>
                        </div>
                        <div class="inner-content">
                            <div class="top-text">
                                <div class="icon">
                                    <span class="icon-recruit"></span>
                                </div>
                                <div class="inner-title">
                                    <h3>Grow your wealth with reputable and proof-based strategies.</h3>
                                </div>
                            </div>

                            <div class="text-box">
                                <p>
                                    Welcome to {{$siteName}}, your all-in-one destination for navigating the world of investments.
                                    Specializing in Agriculture, stocks,
                                    retirement planning, gold, medical cannabis, and oil and gas,
                                    {{$siteName}} is your gateway to a diverse range of lucrative opportunities.
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <ul>
                                        <li>
                                            <span class="icon-check"></span>
                                            Automated Returns
                                        </li>
                                        <li>
                                            <span class="icon-check"></span>
                                            Audited by experts
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6">
                                    <ul>
                                        <li>
                                            <span class="icon-check"></span>
                                            Agriculture and Real Estate dominated
                                        </li>
                                        <li>
                                            <span class="icon-check"></span>
                                            AI-driven strategies
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-box">
                                <a class="btn-one" href="{{url('about')}}">
                                    <span class="txt">Discover More</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-style2__image clearfix">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="border-box float-bob-y"></div>
                        <div class="inner">
                            <img src="{{asset('home/images/about/about-style2__image-1.jpg')}}" alt="">
                            <div class="overlay-content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="48">0</span>M+
                                </div>
                                <h3>Investment Completed</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Style2 Area-->

    <!--Start working process Area-->
    <section class="working-process-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>our work process</h3>
                </div>
                <h2>How We Work</h2>
            </div>
            <div class="row">

                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="100ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('home/images/resources/working-process-img1.jpg')}}" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">SIGN UP</a></h3>
                                <p>
                                    Register a free account and start your first step to yieldind daily income from our Agro, Real estate, gold mine and stock market projects.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->

                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="300ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('home/images/deposit.png')}}" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">FUND YOUR REGISTERED ACCOUNT</a></h3>
                                <p>Fund your registered account by paying into the company's account to enable you buy a share and earn in any of our projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->
                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="500ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('home/images/resources/working-process-img3.jpg')}}" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">ENROLL IN A PACKAGE</a></h3>
                                <p>
                                    select a suitable level percentage share, which ranges from level 1-3 in any of our
                                    AGRO, REAL ESTATE, STOCK MARKET or GOLD MINE projects and invest to start earning.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->
                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="700ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('home/images/withdraw.jpg')}}" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">WITHDRAWAL</a></h3>
                                <p>After a successful investment, profit can be withdrawn once the investment duration is
                                    completed. On the 7th day, your earnings will automatically stop. You can as well decide to reinvest.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->

            </div>
        </div>
    </section>
    <!--End working process Area-->


    <!--Start Service Style2 Area-->
    <section class="service-style2-area">
        <div class="service-style2--primary-bg"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>Our Services</h3>
                </div>
                <h2>What We’re Offering</h2>
            </div>
            <div class="row text-right-rtl justify-content-center">
                @foreach($services as $service)
                    <!--Start Single Service Style2-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="single-service-style2">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                                </div>
                                <div class="icon">
                                    <span class="icon-creative"></span>
                                </div>
                            </div>
                            <div class="title-holder">
                                <h3><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h3>
                                <div class="text">
                                    <p>
                                        {{$service->short}}
                                    </p>
                                </div>
                                <div class="btn-box">
                                    <a href="{{route('service.details',['id'=>$service->id])}}"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Service Style2-->
                @endforeach
            </div>
        </div>
    </section>
    <!--End Service Style2 Area-->

    <!--Start Choose Area-->
    <section class="choose-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="choose-img-box">
                        <div class="border-box float-bob-y"></div>
                        <div class="inner">
                            <img src="{{asset('home/images/ai.jpg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="choose-content-box">
                        <div class="sec-title sec-title--style2">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h3>get benefits</h3>
                            </div>
                            <h2>Why Choose Our<br> Firm</h2>
                        </div>
                        <div class="inner-content">
                            <div class="top-text">
                                <p>Although there may be others who claim to be like us, we remain unique for these reasons</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-right-arrow"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Investment Analytics</h3>
                                            <p>
                                                Track your investments with our real analytics that gives you feedback on
                                                what you have invested so far.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-right-arrow"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Automated System</h3>
                                            <p>
                                                From the deposit to the investment and returns, everything has been automated
                                                to give you the peace of mind that you have always desired.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Choose Area-->

    <!--Start Testimonial Style1 Area-->
    <section class="testimonial-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>our testimonials</h3>
                </div>
                <h2>What They Say?</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-style1-content">
                        <div class="theme_carousel testimonial-carousel owl-theme owl-carousel" data-options='{
                                    "loop": true,
                                    "margin": 30,
                                    "autoheight":true,
                                    "lazyload":true,
                                    "nav": false,
                                    "dots": false,
                                    "autoplay": true,
                                    "autoplayTimeout": 5000,
                                    "smartSpeed": 500,
                                    "navText": ["<span class=\"left icon-next\"></span>",
                                    "<span class=\"right icon-next\"></span>"],
                                    "responsive":{
                                    "0" :{ "items": "1" },
                                    "600" :{ "items" : "1" },
                                    "768" :{ "items" : "1" },
                                    "992":{ "items" : "2" },
                                    "1200":{ "items" : "2" }
                                }
                            }'>

                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text">
                                    <p>
                                        {{$siteName}} transformed my approach to real estate investing. Their insightful
                                        strategies opened doors to hidden gems in the market, and their commitment to
                                        innovation reassured me that I'm on the right path to financial success.
                                    </p>
                                </div>
                                <div class="bottom-box">
                                    <div class="client-name">
                                        <h3>Christine Rose</h3>
                                        <span>Customer</span>
                                    </div>
                                    <div class="client-img">
                                        <div class="inner">
                                            <img src="https://ui-avatars.com/api/?name=Christine+Rose&size=100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->

                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text">
                                    <p>
                                        Investing in gold was always a mystery to me until I found {{$siteName}}. Their expertise
                                        demystified the precious metal market, and now I confidently navigate the golden
                                        opportunities they present. Trust them to turn your investments into shining success stories.
                                    </p>
                                </div>
                                <div class="bottom-box">
                                    <div class="client-name">
                                        <h3>Mike Hardson</h3>
                                        <span>Customer</span>
                                    </div>
                                    <div class="client-img">
                                        <div class="inner">
                                            <img src="https://ui-avatars.com/api/?name=Mike+Hardson&size=100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->

                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text">
                                    <p>
                                        {{$siteName}}'s dedication to sustainable agriculture investments aligns perfectly with
                                        my values. Their guidance goes beyond profits; it's about fostering a greener
                                        future while reaping the rewards. Joining hands with {{$siteName}} means investing in
                                        a world that thrives, both financially and environmentally.
                                    </p>
                                </div>
                                <div class="bottom-box">
                                    <div class="client-name">
                                        <h3>Samuel F.</h3>
                                        <span>Customer</span>
                                    </div>
                                    <div class="client-img">
                                        <div class="inner">
                                            <img src="https://ui-avatars.com/api/?name=Samuel+F&size=100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text">
                                    <p>
                                        In the fast-paced world of stocks, {{$siteName}} stands out with its AI-driven approach.
                                        The accuracy and foresight their technology provides give me a significant edge in
                                        the market. With {{$siteName}}, I feel confident, informed, and ready to seize every
                                        opportunity the stock market throws my way.
                                    </p>
                                </div>
                                <div class="bottom-box">
                                    <div class="client-name">
                                        <h3>Mike Hardson</h3>
                                        <span>Customer</span>
                                    </div>
                                    <div class="client-img">
                                        <div class="inner">
                                            <img src="https://ui-avatars.com/api/?name=Emily+G&size=100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Style1 Area-->


    <!--Start Features Style1 Area-->
    <section class="features-style1-area">
        <div class="features-style1-img-box">
            <div class="features-style1-img-bg"
                 style="background-image: url({{asset('home/images/resources/features-style1-img-bg.jpg')}});">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="features-style1__content">
                        <div class="sec-title sec-title--style2">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h3>What’s Happening</h3>
                            </div>
                            <h2>Looking for Top<br> Consultants</h2>
                        </div>
                        <div class="inner-content">
                            <ul>
                                <li>
                                    <span class="icon-right-arrow"></span>
                                    Nsectetur cing elit.
                                </li>
                                <li>
                                    <span class="icon-right-arrow"></span>
                                    Suspe ndisse suscipit sagittis leo.
                                </li>
                                <li>
                                    <span class="icon-right-arrow"></span>
                                    Entum estibulum dignissim posuere.
                                </li>
                            </ul>
                            <div class="btn-box">
                                <a class="btn-one" href="about">
                                    <span class="txt">Discover More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="features-style1__items">
                        <ul>
                            <li>
                                <div class="top">
                                    <div class="icon">
                                        <span class="icon-help"></span>
                                    </div>
                                    <div class="title">
                                        <h3>We’re Serving<br> 30 Years</h3>
                                    </div>
                                </div>
                                <div class="inner-text">
                                    <p>Lorem ipsum dolor sit a consetetur simple is pscing elitr m nonmy simply free
                                        text.</p>
                                </div>
                            </li>
                            <li>
                                <div class="top">
                                    <div class="icon">
                                        <span class="icon-customer-review"></span>
                                    </div>
                                    <div class="title">
                                        <h3>The Largest<br> Consulting Firm</h3>
                                    </div>
                                </div>
                                <div class="inner-text">
                                    <p>Lorem ipsum dolor sit a consetetur simple is pscing elitr m nonmy simply free
                                        text.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Features Style1 Area-->



    <!--Start Features Style2 Area-->
    <section class="features-style2-area">
        <div class="features-style2-area__bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="features-style2__content">
                        <div class="features-style2__content-bg"
                             style="background-image: url({{asset('home/images/resources/features-style2__content-bg.jpg')}});">
                        </div>
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="top-title">
                            <h2>We Shape the Perfect<br> Solution for Your Finance</h2>
                        </div>
                        <div class="features-style2__content-inner">
                            <div class="row">

                                <!--Start Features Style2 Single Box-->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="features-style2-single-box">
                                        <span class="icon-conversation-1"></span>
                                        <div class="inner-title">
                                            <h3>Trusted Agency</h3>
                                            <p>We are a registered agency</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Features Style2 Single Box-->
                                <!--Start Features Style2 Single Box-->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="features-style2-single-box">
                                        <span class="icon-checking"></span>
                                        <div class="inner-title">
                                            <h3>Quality Services</h3>
                                            <p>We ensure the best solutions get delivered</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Features Style2 Single Box-->
                                <!--Start Features Style2 Single Box-->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="features-style2-single-box">
                                        <span class="icon-cyber-security"></span>
                                        <div class="inner-title">
                                            <h3>Best Strategy</h3>
                                            <p>With our AI integrated strategies.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Features Style2 Single Box-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Style2 Area-->

    <!--Start Blog Style1 Area-->
    <section class="blog-style1-area">
        <div class="blog-style1-area__bg"></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>What’s Happening</h3>
                </div>
                <h2>News & Articles</h2>
            </div>
            <div class="row">

                <!--Start Single Blog Style1-->
                <div class="col-xl-12 col-lg-12">
                    <div class="single-blog-style1">
                        <rssapp-wall id="tUnw8WjWtYT1oJ3Z"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>
                <!--End Single Blog Style1-->


            </div>
        </div>
    </section>
    <!--End Blog Style1 Area-->

    <!--Start Partner Area-->
    <section class="partner-area bg-white">
        <div class="container">
            <div class="brand-content">
                <div class="inner">
                    <ul class="partner-box partner-carousel owl-carousel owl-theme owl-dot-style1 rtl-carousel">
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="{{asset('home/images/brand/brand-logo-1.png')}}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="{{asset('home/images/brand/brand-logo-2.png')}}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="{{asset('home/images/brand/brand-logo-3.png')}}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="{{asset('home/images/brand/brand-logo-4.png')}}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Partner Area-->

@endsection
