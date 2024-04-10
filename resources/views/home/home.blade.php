@extends('home.base')
@section('content')


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner-section">
        <div class="banner-text">
            <span>INVEST</span>
        </div>
        <div class="banner-element-one">
            <img src="{{asset('home/images/element/element-3.png')}}" alt="element">
        </div>
        <div class="banner-element-two">
            <img src="{{asset('home/images/element/element-4.png')}}" alt="element">
        </div>
        <div class="banner-element-three">
            <img src="{{asset('home/images/element/element-5.png')}}" alt="element">
        </div>
        <div class="banner-element-four">
            <img src="{{asset('home/images/element/element-6.png')}}" alt="element">
        </div>
        <div class="banner-element-five">
            <img src="{{asset('home/images/element/element-7.png')}}" alt="element">
        </div>
        <div class="banner-group-shape">
            <div class="banner-group-element-two">
                <img src="{{asset('home/images/fingrowth.png')}}" alt="element">
            </div>
            <div class="banner-group-element-three">
                <img src="{{asset('home/images/element/element-10.png')}}" alt="element">
            </div>
            <div class="banner-group-element-four">
                <img src="{{asset('home/images/element/element-6.png')}}" alt="element">
            </div>
            <div class="banner-group-element-five">
                <img src="{{asset('home/images/element/element-5.png')}}" alt="element">
            </div>
            <div class="banner-group-element-six">
                <img src="{{asset('home/images/element/element-11.png')}}" alt="element">
            </div>
            <div class="banner-group-element-seven">
                <img src="{{asset('home/images/element/element-12.png')}}" alt="element">
            </div>
            <div class="banner-group-element-eight">
                <img src="{{asset('home/images/element/element-13.png')}}" alt="element">
            </div>
            <div class="banner-group-element-nine">
                <img src="{{asset('home/images/element/element-14.png')}}" alt="element">
            </div>
            <div class="banner-group-element-ten">
                <img src="{{asset('home/images/element/element-15.png')}}" alt="element">
            </div>
            <div class="banner-group-element-eleven">
                <img src="{{asset('home/images/element/element-16.png')}}" alt="element">
            </div>
            <div class="banner-group-element-twelve">
                <img src="{{asset('home/images/element/element-17.png')}}" alt="element">
            </div>
            <div class="banner-group-element-thirteen">
                <img src="{{asset('home/images/element/element-18.png')}}" alt="element">
            </div>
            <div class="banner-group-element-fourteen">
                <img src="{{asset('home/images/element/element-19.png')}}" alt="element">
            </div>
            <div class="banner-group-element-fifteen">
                <img src="{{asset('home/images/element/element-20.png')}}" alt="element">
            </div>
            <div class="banner-group-element-sixteen">
                <img src="{{asset('home/images/element/element-21.png')}}" alt="element">
            </div>
            <div class="banner-group-element-seventeen">
                <img src="{{asset('home/images/element/element-22.png')}}" alt="element">
            </div>
        </div>
        <div class="container custom-container">
            <div class="row align-items-end mb-30-none">
                <div class="col-xl-7 col-lg-7 mb-30">
                    <div class="banner-content" data-aos="fade-right" data-aos-duration="1800">
                        <h1 class="title">Smarter Way to grow your wealth</h1>
                        <span class="sub-title">build your wealth with {{$siteName}}</span>
                        <p>
                            Invest with confidence and benefit from the reliability of a trusted broker with a proven record of stability, security and strength.
                        </p>
                        <div class="banner-arrow">
                            <img src="{{asset('home/images/element/element-1.png')}}" alt="element">
                        </div>
                        <div class="banner-widget">
                            <div class="banner-widget-wrapper">
                                <div class="banner-widget-left">
                                    <div class="banner-widget-thumb">
                                        <img src="{{asset('home/images/element/element-2.png')}}" alt="element">
                                    </div>
                                </div>
                                <div class="banner-widget-middle">
                                    <div class="banner-widget-content">
                                        <p><span>15,000+</span> Satisfied Clients</p>
                                    </div>
                                </div>
                                <div class="banner-widget-right">
                                    <div class="banner-widget-btn">
                                        <a href="{{route('register')}}" class="btn--base">Get Started</a>
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
        End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                {
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500"
                },
                {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "US 100"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR/USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "Bitcoin"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "Ethereum"
                }
            ],
                "showSymbolLogo": true,
                "colorTheme": "light",
                "isTransparent": false,
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Experience Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="experience-secction">
        <div class="container custom-container-four">
            <div class="row">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="experience-content">
                        <h4 class="title">
                            We have cultivated the principles of an actual distinguished service, which have earned us a top-level in the realm of investment management. Kinesis Asset offers a Structured, Regulated and Licensed International Financial Management Services creating a wide-range of trusted financial education and success across the globe with a steadfast commitment to integrity, expertise, and partnership, we provide investors with bespoke finance solutions tailored to one’s unique financial objectives.
                            <br/>
                            Backed by a legacy of trust and proven performance, Kinesis Asset stands as a beacon of reliability and excellence in the ever-evolving landscape of wealth management.
                            <br/>

                            You deserve more, we can help. Partner with us, and let us give you a guided approach while you embark on a journey towards enduring prosperity with confidence and peace of mind
                        </h4>
                        <ul class="plan-list">
                            <li>
                                <strong>Personalized Financial Planning:</strong>
                                <ul>
                                    <li>
                                        Comprehensive assessment of client goals, risk tolerance, and financial
                                        situation.
                                    </li>
                                    <li>
                                        Customized investment strategies tailored to individual client needs and
                                        objectives.
                                    </li>
                                    <li>
                                        Regular review and advice to adapt to changing circumstances and
                                        market conditions.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Transparent Communication:</strong>
                                <ul>
                                    <li>
                                        Guided advice with clients regarding investment decisions and
                                        performance
                                    </li>
                                    <li>
                                        Timely updates and reports on portfolio performance and market insights
                                    </li>
                                    <li>
                                        Accessibility to dedicated advisors for addressing client concerns and
                                        inquiries.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Long-Term Relationship Building: </strong>
                                <ul>
                                    <li>
                                        Cultivation of enduring partnerships built on trust, reliability, and mutual
                                        respect.
                                    </li>
                                    <li>
                                        Continuous engagement with clients to evolve investment strategies and
                                        adapt to changing needs.
                                    </li>
                                    <li>
                                        Commitment to being a lifelong financial partner on the journey towards
                                        achieving financial goals.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Fiduciary Responsibility: </strong>
                                <ul>
                                    <li>
                                        Commitment to acting in the best interests of clients at all times
                                    </li>
                                    <li>
                                        Avoidance of conflicts of interest and prioritization of client outcomes
                                        over company gains.
                                    </li>
                                    <li>
                                        Adherence to Company’s regulations and ethical standards to ensure
                                        client trust and confidence.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong>Ongoing Education and Support: </strong>
                                <ul>
                                    <li>
                                        Provision of educational resources and seminars to empower clients with
                                        financial knowledge.
                                    </li>
                                    <li>
                                        Guidance on long-term wealth management strategies and financial
                                        planning.
                                    </li>
                                    <li>
                                        Supportive partnership through life events, such as retirement planning,
                                        inheritance, or major purchases.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="statistics-item-area">
                        <p>
                            We are confident that your financial goals will meet our strategic investment
                            solutions. Over the years, we have invested a great deal of capital, resources and
                            expertise to aid in crafting analyzed portfolio’s strategies to maximize returns and
                            reduce any possible risk.<br/>
                            With a track record of delivering consistent investment services and personalized
                            advisory support, we keep empowering investors to achieve their wealth-building
                            objectives with an eminent guaranteed satisfaction.<br/>
                            Whether you're a seasoned investor or new to the financial market, we have a slice of
                            cake to spices up your experience. Just so, we’ve got you covered with our
                            qualitatively speculated guide towards the financial investment with a 24/7 active live
                            support.
                        </p>
                        <div class="row mb-30-none">
                            <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                <div class="icon-box-items">
                                    <div class="content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="10">0</h3>
                                            <h3 class="title">Years</h3>
                                        </div>
                                        <p>of Experience</p>
                                    </div>
                                    <div class="icon">
                                        <img src="{{asset('home/images/home-three/customer-review.png')}}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                <div class="icon-box-items style-01">
                                    <div class="content">
                                        <div class="odo-area">
                                            <h3 class="odo-title odometer" data-odometer-final="125">0</h3>
                                            <h3 class="title">+</h3>
                                        </div>
                                        <p>Expert Staff</p>
                                    </div>
                                    <div class="icon">
                                        <img src="{{asset('home/images/home-three/employee.png')}}" alt="icon">
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
        End Experience Section
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Project
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="project-section pb-120">
        <div class="project-element-one">
            <img src="{{asset('home/images/element/element-23.png')}}" alt="element">
        </div>
        <div class="project-element-two">
            <img src="{{asset('home/images/element/element-24.png')}}" alt="element">
        </div>
        <div class="project-element-three">
            <img src="{{asset('home/images/element/element-25.png')}}" alt="element">
        </div>
        <div class="project-element-four">
            <img src="{{asset('home/images/element/element-26.png')}}" alt="element">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-header-wrapper">
                        <div class="section-header">
                            <h2 class="section-title">Our Recent Industry</h2>
                            <p>Industry that we recently adopted</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item-wrapper">
                <div class="row justify-content-center mb-30-none">
                    @php $cnt=0; @endphp
                    @foreach($services as $service)
                        @if($cnt ==4)
                            @break
                        @else

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
                                <div class="project-item">
                                    <div class="project-thumb">
                                        <img src="{{asset('home/serv/'.$service->photo)}}" alt="project">
                                    </div>
                                    <div class="project-overlay">
                                        <div class="overlay-content">
                                            <h4 class="title"><a href="#">{{$service->title}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @php $cnt++; @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Project
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Choose
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="choose-section pb-120">
        <div class="choose-element-one" data-aos="fade-left" data-aos-duration="1200">
            <img src="{{asset('home/images/element/element-28.png')}}" alt="element">
        </div>
        <div class="choose-element-two">
            <img src="{{asset('home/images/element/element-29.png')}}" alt="element">
        </div>
        <div class="choose-element-three">
            <img src="{{asset('home/images/element/element-30.png')}}" alt="element">
        </div>
        <div class="choose-element-four">
            <img src="{{asset('home/images/element/element-31.png')}}" alt="element">
        </div>
        <div class="choose-element-five">
            <img src="{{asset('home/images/element/element-32.png')}}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Why Choose {{$siteName}}?</h2>
                        <p>
                            Putting your money into work is for your own wealth growth, and here are why {{$siteName}} is the
                            perfect agency to help you grow your wealth
                        </p>
                    </div>
                </div>
            </div>
            <div class="choose-area">
                <div class="choose-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link" id="software-tab" data-toggle="tab" data-target="#software"
                                    type="button" role="tab" aria-controls="software" aria-selected="false">Top Industry Experts</button>
                            <button class="nav-link active" id="company-tab" data-toggle="tab" data-target="#company"
                                    type="button" role="tab" aria-controls="company" aria-selected="true">Fastest-Growing Company</button>
                            <button class="nav-link" id="client-tab" data-toggle="tab" data-target="#client"
                                    type="button" role="tab" aria-controls="client" aria-selected="false">99% Client's Satisfaction</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="software" role="tabpanel" aria-labelledby="software-tab">
                            <div class="choose-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('home/images/element/element-27.png')}}" alt="element">
                                </div>
                                <div class="choose-content">
                                    <h4 class="title"><span class="text--base">Top</span> Industry Experts</h4>
                                    <p>
                                        By utilizing the best in the various industries we trade and invest in, we are
                                        not risking your funds, rather we are ensuring that they yield the expected returns
                                        and by that means, you can be rest assured that your wealth growth is guaranteed.
                                        <br/>
                                        We also utilize the best AI-model to help study the market and give the best
                                        trading options...from cryptocurrency to forex to medical cannabis,we
                                        remain the only formidable partners for you
                                    </p>
                                    <div class="choose-statistics-area">
                                        <div class="row mb-30-none">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="120">0</h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Awesome Staff</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="35">0</h3>
                                                            <h3 class="title">K+</h3>
                                                        </div>
                                                        <p>Trusted Clients</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="25">0</h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Served Countries</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose-content-footer">
                                        <div class="choose-btn">
                                            <a href="{{route('register')}}" class="btn--base active">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="company" role="tabpanel" aria-labelledby="company-tab">
                            <div class="choose-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('home/images/element/element-77.png')}}" alt="element">
                                </div>
                                <div class="choose-content">
                                    <h4 class="title"><span class="text--base">Fastest</span> Growing Agency</h4>
                                    <p>
                                        We are one of the fastest growing Investment and Asset management Agency out there;
                                        our yield in 2023 was over $400M on a 12 month business calendar.
                                        This year, we are already on our way to $200M, meaning that by mid of 2024, we should have
                                        passed the mark which we set in 2023, and by the end of the year, we should be ending with
                                        a mark of $600M by our annual projection.
                                        This puts us on par with so many investment agency who have been there before us.
                                    </p>
                                    <div class="choose-statistics-area">
                                        <div class="row mb-30-none">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="350">0</h3>
                                                            <h3 class="title">M+</h3>
                                                        </div>
                                                        <p>Previous Yield</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="550">0</h3>
                                                            <h3 class="title">M+</h3>
                                                        </div>
                                                        <p>Projected Return</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="36">0</h3>
                                                            <h3 class="title">%</h3>
                                                        </div>
                                                        <p>Percentage Increase</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose-content-footer">
                                        <div class="choose-btn">
                                            <a href="{{route('register')}}" class="btn--base active">Join us</a>
                                        </div>
                                        <div class="choose-video-btn">
                                            <a class="video" data-rel="lightcase:myCollection" href="https://www.youtube.com/embed/6zsr22OeF2I">
                                                <i class="las la-video"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                            <div class="choose-item">
                                <div class="choose-thumb">
                                    <img src="{{asset('home/images/element/element-78.png')}}" alt="element">
                                </div>
                                <div class="choose-content">
                                    <h4 class="title"><span class="text--base">99%</span> Client Satisfaction</h4>
                                    <p>
                                        We are a client-centric company - we listen to our users, and adopt their best fitted
                                        solutions. Over the years we have continually had goodwill with our investors, and this
                                        is one of the reasons we are where we are today. From making $20M annually to making over $350M
                                        in 2023, and with a projection of about $600m in 2024.<br/>
                                        This feat can only be achieved when there is a high referral which of course is a result of trust and
                                        satisfaction in the company.
                                    </p>
                                    <div class="choose-statistics-area">
                                        <div class="row mb-30-none">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="35">0</h3>
                                                            <h3 class="title">K+</h3>
                                                        </div>
                                                        <p>Total Clients</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="250">0</h3>
                                                            <h3 class="title">M+</h3>
                                                        </div>
                                                        <p>Total Invested</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                <div class="statistics-item">
                                                    <div class="statistics-content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="25">0</h3>
                                                            <h3 class="title">+</h3>
                                                        </div>
                                                        <p>Served Countries</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose-content-footer">
                                        <div class="choose-btn">
                                            <a href="{{route('register')}}" class="btn--base active">Join us</a>
                                        </div>
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
        End Choose
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Call to action
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="call-to-action-section pb-120">
        <div class="call-to-action-element" data-aos="fade-left" data-aos-duration="1200">
            <img src="{{asset('home/images/element/element-33.png')}}" alt="element">
        </div>
        <div class="wrapper demo-text">
            <div class="marquee">
            <span>
                FINANCIAL SOLUTIONS FINANCIAL SOLUTIONS FINANCIAL SOLUTIONS FINANCIAL SOLUTIONS FINANCIAL SOLUTIONS FINANCIAL SOLUTIONS FINANCIAL SOLUTIONS FINANCIAL SOLUTIONS
            </span>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center mb-10-none">
                <div class="col-xl-9">
                    <div class="call-to-action-wrapper">
                        <div class="call-to-action-content">
                            <h3 class="title">Our award-winning platform gives you access to powerful technical charting & fundamental research tools. </h3>
                            <h3 class="inner-title">See for yourself an all round digital experience.</h3>
                        </div>
                        <div class="call-to-action-btn">
                            <a href="{{route('register')}}" class="btn--base">Join</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Call to action
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Service
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="service-section ptb-120">
        <div class="service-element-one">
            <img src="{{asset('home/images/element/element-34.png')}}" alt="element">
        </div>
        <div class="service-element-two">
            <img src="{{asset('home/images/element/element-35.png')}}" alt="element">
        </div>
        <div class="service-element-three">
            <img src="{{asset('home/images/element/element-36.png')}}" alt="element">
        </div>
        <div class="service-element-four">
            <img src="{{asset('home/images/element/element-36.png')}}" alt="element">
        </div>
        <div class="service-element-five">
            <img src="{{asset('home/images/element/element-37.png')}}" alt="element">
        </div>
        <div class="service-shape shape-1"></div>
        <div class="service-shape shape-2"></div>
        <div class="service-shape shape-3"></div>
        <div class="service-shape shape-4"></div>
        <div class="service-shape shape-5"></div>
        <div class="service-shape shape-6"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-header-wrapper">
                        <div class="section-header white">
                            <h2 class="section-title">Our Awesome Services</h2>
                            <p>Credibly grow premier ideas rather than bricks-and-clicks strategic theme areas distributed for stand-alone web-readiness.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                @foreach($services as $service)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="{{asset('home/serv/'.$service->photo)}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h3>
                                <p>{{$service->short}}</p>
                                <div class="service-btn">
                                    <a href="{{route('service.details',['id'=>$service->id])}}" class="custom-btn">Learn More <i class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach.
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="{{asset('home/serv/4.jpg')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="{{url('financialPlanning')}}">Financial Planning</a></h3>
                                <p>
                                    A financial plan is a comprehensive evaluation of an investor’s current and future
                                    financial state by using currently known variables to predict future cash flows, asset values and withdrawal...
                                </p>
                                <div class="service-btn">
                                    <a href="{{url('financialPlanning')}}" class="custom-btn">Learn More <i class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Service
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="about-section pt-120">
        <div class="about-element-one">
            <img src="{{asset('home/images/element/element-39.png')}}" alt="element">
        </div>
        <div class="about-element-two">
            <img src="{{asset('home/images/element/element-40.png')}}" alt="element">
        </div>
        <div class="about-element-three">
            <img src="{{asset('home/images/element/element-7.png')}}" alt="element">
        </div>
        <div class="about-element-four">
            <img src="{{asset('home/images/element/element-41.png')}}" alt="element">
        </div>
        <div class="about-element-five">
            <img src="{{asset('home/images/element/element-42.png')}}" alt="element">
        </div>
        <div class="container">
            <div class="about-area three">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="box-wrapper">
                            <div class="box3"></div>
                            <div class="box1">
                                <div class="box-element-one">
                                    <img src="{{asset('home/images/element/element-14.png')}}" alt="element">
                                </div>
                                <div class="box-element-two">
                                    <img src="{{asset('home/images/element/element-15.png')}}" alt="element">
                                </div>
                                <div class="box-element-three">
                                    <img src="{{asset('home/images/element/element-13.png')}}" alt="element">
                                </div>
                                <div class="box-element-four">
                                    <img src="{{asset('home/images/element/element-6.png')}}" alt="element">
                                </div>
                            </div>
                            <div class="box2">
                                <div class="box-element-five">
                                    <img src="{{asset('home/images/element/element-16.png')}}" alt="element">
                                </div>
                                <div class="box-element-six">
                                    <img src="{{asset('home/images/element/element-7.png')}}" alt="element">
                                </div>
                            </div>
                        </div>
                        <div class="about-thumb">
                            <img src="{{asset('home/images/element/element-38.png')}}" alt="element">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="about-content">
                            <h2 class="title">Still Delaying? <span class="text--base">Let's work</span></h2>
                            <p class="para">
                                We are ranked one of the best Investment agency, and you too can testify to that!
                            </p>
                            <p>{{$siteName}} is the best investment agency to help you grow your wealth portfolio and start earning. Save for your
                            retirement, invest in growing industries.</p>
                            <div class="about-btn">
                                <a href="{{route('register')}}" class="btn--base">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Client
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="client-section ptb-120">
        <div class="client-element-one">
            <img src="{{asset('home/images/element/element-44.png')}}" alt="element">
        </div>
        <div class="client-element-two">
            <img src="{{asset('home/images/element/element-45.png')}}" alt="element">
        </div>
        <div class="client-element-three">
            <img src="{{asset('home/images/element/element-46.png')}}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Hear from happy customers</h2>
                        <p>
                            We are an international financial company engaged in investment activities, which are related to trading on financial markets and cryptocurrency exchanges performed by qualified professional traders.
                        </p>
                    </div>
                </div>
            </div>
            <div class="client-area">
                <div class="row justify-content-center mb-10-none">
                    <div class="col-xl-12">
                        <div class="client-slider-area">
                            <div class="client-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-header">
                                                <div class="client-ratings">
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                </div>
                                                <div class="client-quote">
                                                    <img src="{{asset('home/images/client/quote.png')}}" alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    {{$siteName}} has made investing so much easier for me. With their AI technology, I feel like I have a
                                                    dedicated financial advisor guiding me. It's been a profitable and enlightening experience
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{asset('home/images/client/client-1.png')}}" alt="client">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Mogan Smith</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-header">
                                                <div class="client-ratings">
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                </div>
                                                <div class="client-quote">
                                                    <img src="{{asset('home/images/client/quote.png')}}" alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    As an avid investor, {{$siteName}} has become my go-to platform. Their diversification options and AI
                                                    algorithms have helped me achieve impressive results. I can't recommend them enough.
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{asset('home/images/client/client-2.png')}}" alt="client">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Manisha Kai</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-header">
                                                <div class="client-ratings">
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                </div>
                                                <div class="client-quote">
                                                    <img src="{{asset('home/images/client/quote.png')}}" alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    {{$siteName}}'s incorporation of crypto mining in their investment options caught my attention. It's
                                                    refreshing to see an investment company embracing blockchain technology.
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{asset('home/images/client/client-3.png')}}" alt="client">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Evana Parsia</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="client-pagination"></div>
                                <div class="slider-prev">
                                    <i class="las la-long-arrow-alt-left"></i>
                                </div>
                                <div class="slider-next">
                                    <i class="las la-long-arrow-alt-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Client
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="blog-section pb-130">
        <div class="blog-element">
            <img src="{{asset('home/images/element/element-47.png')}}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header">
                        <h2 class="section-title">{{$siteName}} Latest Posts</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-40-none">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="blog-item">
                        <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



@endsection
