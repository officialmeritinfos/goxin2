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
                            We are a global asset manager that combines our insurance heritage, investment
    capabilities and sustainability expertise to deliver wealth and retirement outcomes that
    matter most to investors. Welcome to {{$siteName}}, your all-in-one destination for navigating
    the world of investments. Specializing in Agriculture, stocks, retirement planning, gold,
    medical cannabis, and oil and gas, {{$siteName}} is your gateway to a diverse range of lucrative
    opportunities.    
                        </p>
                        <h4>Our culture</h4>
                        <p>
                            Our integrated approach creates an environment where everyone can
    contribute, collaborate and succeed.    
                        </p>
                        <h4>Responsible investment</h4>
                        <p>
                            Investing responsibly makes financial sense and helps create a
    sustainable future for us all.
                        </p>
                        <h4>Climate action</h4>
                        <p>
                            Explore climate action thought leadership with {{$siteName}}. Find out
    how we aim to become net zero by 2040.
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
                    <h4>It takes {{$siteName}}</h4>
                        <p>Today’s investors and intermediaries expect more. A better future for all. That’s why we
                            integrate our whole business around them – the outcomes they want, the experience they
                            expect, alongside a company-wide commitment to looking after a planet we all care about.
                            "We want to provide our clients with joined up thinking for an interconnected world;
                            integrated solutions with their needs firmly at the heart, an experience that is effortless
                            and rewarding. All with confidence that the future of the world they care about is being
                            looked after."
                            Delivering investment performance while doing the right thing for our people,
                            communities,Delivering investment performance while doing the right thing for our people,
                            communities, our clients is fundamental to our approach and long-term success. This takes
                            understanding, collaboration and responsible action. It takes {{$siteName}}.
                        </p>
                </div>
                <div class="row justify-content-center mb-60-none">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                        <div class="service-item two">
                            <div class="service-icon">
                                <img src="{{asset('home/img/')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title">Client-centred</h3>
                                <p>
                                    <b>Understanding what is important</b><br/>
                                    We make it our business to know what’s important to yours. Listening to client
challenges is the foundation for creating investment portfolios around you. We
skilfully combine our expertise and investment capabilities across asset classes to
help us meet your specific needs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                        <div class="service-item two">
                            <div class="service-icon">
                                <img src="{{asset('home/img/')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title">Connected thinking</h3>
                                <p>
                                    <b>Creating strength from connections</b><br/>
                                    We connect people, data and perspectives, across asset classes and the globe, to
                                    generate new investment ideas. Expertise from over 900+ people in 12 countries
                                    connect seamlessly as one team to deliver the best of our diverse expertise with every
                                    investment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                        <div class="service-item two">
                            <div class="service-icon">
                                <img src="{{asset('home/img/')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title">Responsibility built-in</h3>
                                <p>
                                    <b>Delivering positive change, responsibly</b>
                                    <br/>
                                    Responsibility is built into everything we do. Doing the right thing for our people,
clients and their capital is fundamental to our legacy and long-term success. Acting
and investing responsibly makes financial sense and helps create a sustainable future
for us all.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                        <div class="service-item two">
                            <div class="service-icon">
                                <img src="{{asset('home/img/')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title">Investment philosophy</h3>
                                <p>
                                    We believe in the power of integration, creating opportunity and empowering investors to
have greater confidence in their investment decisions and outcomes. We invest over £226bn
(as at 31 March 2023) on behalf of our clients according to the five key pillars below.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                        <div class="service-item two">
                            <div class="service-icon">
                                <img src="{{asset('home/img/')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title">We believe in informed risk, effectively managed</h3>
                                <p>
                                    We manage risk with discipline and rigour. By combining our extensive experience
                                    and unique insights, we reach an informed view on every decision throughout the
                                    whole investment process.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                        <div class="service-item two">
                            <div class="service-icon">
                                <img src="{{asset('home/img/')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title">We are actively responsible investors</h3>
                                <p>
                                    We promote sustainable business practices in global markets, encouraging greater
transparency and better corporate governance. This helps us to reduce risk and strive
to enhance the long-term value of your investments.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                        <div class="service-item two">
                            <div class="service-icon">
                                <img src="{{asset('home/img/')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title">We invest with conviction for the long term</h3>
                                <p>
                                    Everything we do is driven by our long-term perspective and our focus on building
strategies and funds that are built to last. This ensures we develop long-lasting
partnerships with our clients.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                        <div class="service-item two">
                            <div class="service-icon">
                                <img src="{{asset('home/img/')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title">We are inspired by our clients' needs</h3>
                                <p>
                                    By listening to your aspirations and understanding the challenges you face, we aim to
create the strategies and funds that focus on delivering the specific outcomes you
need. At the heart of our mission lies a dedication to fostering financial literacy and
empowerment. We strive to be a beacon of education, equipping our clients with the
knowledge and tools necessary to make informed decisions that align with their unique
financial goals.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                        <div class="service-item two">
                            <div class="service-icon">
                                <img src="{{asset('home/img/')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title">We collaborate to innovate</h3>
                                <p>
                                    Our global business acts as one team. By bringing together our knowledge, skill and
                                    creativity across major asset classes, disciplines and regions globally we can unearth
                                    great investment opportunities for you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                        <div class="service-item two">
                            <div class="service-icon">
                                <img src="{{asset('home/img/')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title">Our leadership</h3>
                                <p>
                                    Our executive team lead by example, working collaboratively to create one unified
global team.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-60">
                        <div class="service-item two">
                            <div class="service-icon">
                                <img src="{{asset('home/img/')}}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title">We know what it takes to make a difference</h3>
                                <p>
                                    It takes working together to drive sustainable transition across People, Climate, and
                                    Earth. It takes {{$siteName}}.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-12 mb-30">
                    <h4>Investment risk</h4>
                        <p>
                            The value of an investment and any income from it can go down as well as up. Investors may
not get back the original amount invested. Therefore, assessing the risk-return profile of each
investment opportunity allows us to identify and avoid excessively risky ventures that may
not align with our objectives or tolerance for risk.
                        </p>
                </div>
                <div class="col-md-12 mb-30">
                    <h4>Redefining Investment Success</h4>
                        <p>
                            At {{$siteName}}, our mission is to redefine the landscape of financial success through a
harmonious fusion of traditional wisdom and cutting-edge innovation. Guided by unwavering
principles of integrity, transparency, and client-centricity, we embark on a relentless pursuit
to empower individuals on their journey to prosperity.<br/>
We believe in democratizing access to diverse and lucrative investment opportunities,
transcending the conventional boundaries of financial markets. Through astute market
analysis, pioneering technologies, and a commitment to staying ahead of the curve, we aim to
provide our clients with a roadmap to sustainable wealth creation.
<p>{{$siteName}} is not merely an investment company; it is a catalyst for positive change in the
    financial landscape. We embrace the responsibility to contribute to a more resilient, inclusive,
    and sustainable global economy. By championing ethical practices, environmental
    stewardship, and social responsibility, we aspire to create a lasting impact that transcends
    generations.</p>
                        </p>
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
