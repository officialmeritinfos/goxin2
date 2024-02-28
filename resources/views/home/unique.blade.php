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
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="service-section two ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="service-item three details">
                        <div class="service-thumb">
                            <img src="{{asset('home/images/service.png')}}" alt="service">
                        </div>
                        <div class="service-content">
                            <h2 class="title">Welcome to
                                the next era
                                of
                                wealth
                                creation.</h2>
                            <p>
                                Our focus is to help investors
                                achieve their financial goals by
                                recommending investment
                                strategies specific to their
                                unique situation. Working
                                alongside our planning team,
                                we’ll help you understand
                                where you are invested and
                                why, without complicated
                                jargon.

                            </p>
                            <div class="service-bottom-content">
                                <h2 class="title">Reach your potential</h2>
                                <p>
                                    Activate your custom investment strategy with a team of experts to help
                                    you execute it.
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="title">Planning</h2>
                                        <p>
                                            Work with our team of Financial
                                            Planners for ongoing support,
                                            portfolio analysis and investment
                                            recommendations.
                                        </p>
                                        <h6>Portfolio Analysis</h6>
                                        <p>
                                            We'll review your current portfolios to make
                                            sure they are suitable for your situation.
                                        </p>
                                        <h6>Investment Recommendations</h6>
                                        <p>
                                            Are you a DIY investor? Our team can help
                                            design your portfolio, but you'll handle the
                                            implementation.
                                        </p>
                                        <h6>Ongoing support</h6>
                                        <p>
                                            Whether you have questions about your
                                            retirement account or crypto—our advisors
                                            will provide unbiased advice and education.
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="title">Management</h2>
                                        <p>
                                            <span class="text-warning">New! 0.00% annual fee for assets
                                            under management fees*</span><br/>
                                            Let us do the heavy lifting and
                                            manage your assets for you. Fullservice investment management
                                            crafted by our team and customized
                                            to achieve your goals.

                                        </p>
                                        <h6>We are a team of fiduciary advisors</h6>
                                        <p>
                                            We’re not a robo-advisor and never earn a
                                            commission. Instead, we select, trade,
                                            monitor and rebalance a portfolio that
                                            reflects your unique needs, not ours.
                                        </p>
                                        <h6>We believe in trust and transparency</h6>
                                        <p>We invest according to your risk
                                            preferences and ensure you clearly
                                            understand your portfolio and its
                                            associated risks.
                                        </p>
                                        <h6>* 0.00% annual management fee for all
                                            active Range members</h6>
                                        <p>In addition to no investment minimums, we
                                            waived the annual management fee for
                                            investors . Schedule a call with our support
                                            team member to learn more.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-content">
                            <h2 class="title">How does it work?</h2>
                            <div class="service-bottom-content">
                                <p>Our financial advisors will:</p>
                                <ul style="list-style-type: disc;">
                                    <li>Determine ability and willingness to take investment risk (risk profile created with Qualitative Wealth Approach)</li>
                                    <li>Analyze current portfolio and contributions</li>
                                    <li>Evaluate any misalignment between risk profile, financial goals, and current strategy</li>
                                    <li>Prepare and present proposed changes (e.g., improve diversification, change contributions, combine accounts)</li>
                                    <li>Manage investment accounts - now available to all members at no additional fee</li>
                                </ul>

                                <div class="about-btn two">
                                    <a href="{{route('register')}}" class="btn--base">Get Started</a>
                                </div>

                            </div>
                        </div>
                        <div class="service-content">
                            <h2 class="title">How does it work?</h2>
                            <p>
                                We know how important your investments are to you
                                and fully expect our investors to ask questions as
                                often as needed. Our responsiveness is paramount
                                and we rely on them most often.<br/>
                                <b>Please note:</b>
                                for investors who have entrusted Range to
                                manage their investments, your managed accounts are
                                monitored on a daily basis and periodically updated based on
                                portfolio manager discretion.

                            </p>

                            <div class="about-btn two">
                                <a href="{{route('register')}}" class="btn--base">Get Started</a>
                            </div>
                        </div>
                        <div class="service-content">
                            <h2 class="title">Key planning features</h2>
                            <div class="service-bottom-content">
                                <p>Our financial planners have access to a full suite of
                                    industry-leading portfolio analytics tools to manage
                                    the investment planning process. Once we
                                    understand your specific situation, we will populate
                                    your profile with the details of your investment plan.
                                    You won’t have to comb through a multi-page
                                    comprehensive financial plan or your investment
                                    policy statement.
                                </p>
                            </div>

                        </div>
                        <div class="service-content">
                            <h2 class="title text-warning">Example
                                Recommendations</h2>
                            <div class="service-bottom-content row">
                                <div class="col-md-6">
                                    <h6>Purchase I-Bonds</h6>
                                    <p>
                                        I-bonds are governmentbacked savings bonds that
                                        adjust with the rate of inflation.
                                        Since you already have a
                                        substantial cash runway and no
                                        consumer debt, we recommend
                                        investing your $10,000 in
                                        excess savings into I-bonds
                                        given the current elevated
                                        interest rate (6.89%). You can
                                        set up an account at no cost.
                                        Keep in mind, redemptions
                                        cannot be made within the first
                                        12 months and you’ll be
                                        penalized three months of
                                        interest for any redemptions
                                        made prior to 12 months.
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h6>Change your
                                        investment mix</h6>
                                    <p>
                                        Since your taxable brokerage
                                        account is currently in a loss
                                        position (cost basis > portfolio
                                        value) this is
                                        an opportune time to reallocate
                                        your portfolio without triggering
                                        capital gains taxes. We
                                        recommend selling ABC mutual
                                        fund and XYZ mutual
                                        and buying 60% Stock Market ETF
                                        and 40% Asset Market ETF. This
                                        change will increase your
                                        portfolio diversification and
                                        reduce investment costs.

                                    </p>
                                </div>
                            </div>
                            <h2 class="title text-warning">Still have questions?</h2>
                            <p>
                                Set up a 1:1 call with our suppprt team to get a walk through of assets.
                                Just take a moment to create an account and fill out our form. You can
                                also call or text us now at . to create an account and fill out our form.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Service
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@endsection
