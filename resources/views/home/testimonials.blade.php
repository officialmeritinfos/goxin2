@extends('home.base')
@section('content')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                            Start Banner
                                                                        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner-section two inner">
        <div class="banner-element-four two">
            <img src="{{ asset('home/images/element/element-5.png') }}" alt="element">
        </div>
        <div class="banner-element-five two">
            <img src="{{ asset('home/images/element/element-7.png') }}" alt="element">
        </div>
        <div class="banner-element-nineteen two">
            <img src="{{ asset('home/images/element/element-6.png') }}" alt="element">
        </div>
        <div class="banner-element-twenty-two two">
            <img src="{{ asset('home/images/element/element-69.png') }}" alt="element">
        </div>
        <div class="banner-element-twenty-three two">
            <img src="{{ asset('home/images/element/element-70.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-12 mb-30">
                    <div class="banner-content two">
                        <div class="banner-content-header">
                            <h2 class="title">{{ $pageName }}</h2>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $pageName }}</li>
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
                                                                            Start Client
                                                                        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="client-section ptb-120">
        <div class="client-element-one">
            <img src="{{ asset('home/images/element/element-44.png') }}" alt="element">
        </div>
        <div class="client-element-two">
            <img src="{{ asset('home/images/element/element-45.png') }}" alt="element">
        </div>
        <div class="client-element-three">
            <img src="{{ asset('home/images/element/element-46.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header">
                        <h2 class="section-title">INVESTORS REVIEW & TESTIMONIES</h2>
                        <p>
                            Here’s what some of our investors
                            have to say about their experience
                            with our services.
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
                                                    <img src="{{ asset('home/images/client/quote.png') }}" alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    “We love that Rebit
                                                    has a team of experts
                                                    working on my
                                                    finances, versus just
                                                    one traditional
                                                    advisor.
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('home/images/') }}" alt="">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Apryl & Imran</h6>
                                                    <p>Marketing & Tech Professionals</p>

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
                                                    <img src="{{ asset('home/images/client/quote.png') }}" alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    Rebit has 100% met my
                                                    expectations and
                                                    surpassed them. Now
                                                    that I’ve been using the
                                                    platform, I don’t know if I
                                                    could live without it.
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('home/images/') }}" alt="">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Sharon</h6>
                                                    <p> Tech Professionals</p>

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
                                                    <img src="{{ asset('home/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    The advice has been solid.
                                                    I had what I thought was a
                                                    pretty simple question, but
                                                    instead of giving me the
                                                    answer I expected, they
                                                    looked at my whole
                                                    financial situation and
                                                    presented a surprisingly
                                                    strategic, thoughtful
                                                    approach. This probably
                                                    saved me thousands of
                                                    dollars.
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('home/images/') }}" alt="">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">John</h6>
                                                    <p>Founder & COO</p>

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
                                                    <img src="{{ asset('home/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    The interactive
                                                    financial plan has
                                                    been great.
                                                    Everything is right
                                                    there and I can
                                                    track my
                                                    progress
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('home/images/') }}" alt="">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Scott</h6>
                                                    <p> Tech Professionals</p>

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
                                                    <img src="{{ asset('home/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    The advice has been
                                                    incredible. Any time we
                                                    send a question, the
                                                    response has been
                                                    quick, thoughtful and
                                                    thorough.
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('home/images/') }}" alt="">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Phil and Jen</h6>
                                                    <p>Engineering Manager &
                                                        Physician Assistant / Director
                                                        of Clinical Education
                                                    </p>

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
                                                    <img src="{{ asset('home/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    We’ve been impressed
                                                    at how responsive the
                                                    team is. They follow up
                                                    quickly and have had
                                                    good attention to detail
                                                    when it comes to our
                                                    financial plan
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('home/images/') }}" alt="">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Manan and Reka</h6>
                                                    <p>Corporate Executives</p>

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
                                                    <img src="{{ asset('home/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    The platform has really
                                                    delivered on real-time
                                                    financial advice. I’ve asked
                                                    some pretty specific
                                                    questions, and the team
                                                    has responded pretty
                                                    quickly with good advice
                                                    and resources.
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('home/images/') }}" alt="">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Vivian</h6>
                                                    <p>Marketing Professional</p>

                                                </div>
                                            </div>
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

    <section class="client-section ptb-120">
        <div class="client-element-one">
            <img src="{{ asset('home/images/element/element-44.png') }}" alt="element">
        </div>
        <div class="client-element-two">
            <img src="{{ asset('home/images/element/element-45.png') }}" alt="element">
        </div>
        <div class="client-element-three">
            <img src="{{ asset('home/images/element/element-46.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header">
                        <h2 class="section-title">THOUGHT PARTNERS, NOT
                            JUST AGENTS.</h2>
                        <p>
                            We don't just stop at answering questions. We sit "side-by-side" with you to
                            help address your needs and get you over the hump.<br />
                            * Get a second set of eyes on your investment idea from a technical analysis
                            or risk management perspective.<br />
                            * Better understand a potential asset sector margin and cost basis
                            implications.<br />
                            * Get help on how to set up a profitable complex investment portfolio.
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
                                                    <img src="{{ asset('home/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    Having all of my
                                                    financials in one
                                                    platform—especially
                                                    my portfolio and tax
                                                    planning—makes
                                                    everything more
                                                    convenient.
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('home/images/') }}" alt="">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Dan</h6>
                                                    <p>Managing Team</p>

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
                                                    <img src="{{ asset('home/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    Two words for Rebit
                                                    Asset: super value!
                                                    Beyond annual tax
                                                    prep, Rebit Asset
                                                    provides full CFP
                                                    support and a suite of
                                                    DIY budgeting and
                                                    planning tools‚ all for
                                                    just a little more than
                                                    what I had been
                                                    earning from my
                                                    previous provider
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('home/images/') }}" alt="">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Ben</h6>
                                                    <p>Chief Financial
                                                        Team</p>

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
                                                    <img src="{{ asset('home/images/client/quote.png') }}"
                                                        alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>
                                                    My intro call with the
                                                    financial advisor and
                                                    initial
                                                    recommendations have
                                                    been sound. Really
                                                    helpful learning for me
                                                    on financial planning.
                                                </p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-thumb">
                                                    <img src="{{ asset('home/images/') }}" alt="">
                                                </div>
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">Matthew</h6>
                                                    <p>Technical Engineer
                                                        Team</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('home/images/icon/icon-3.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a >Travel</a></h3>
                            <p>Travel with confidence.
                                No foreign transaction fees,
                                unlimited ATM fee rebates for
                                cash withdrawals worldwide, and
                                the Rebit Asset Security
                                Guarantee.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('home/images/icon/icon-3.png') }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a >Zero Fees</a></h3>
                            <p>Ditch the fees.
                                With no monthly service fees,
                                overdraft fees, or account
                                minimums, you'll have more
                                money to invest.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
