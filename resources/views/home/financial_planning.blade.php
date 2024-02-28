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
                            <img src="{{asset('home/images/fin1.jpg')}}" alt="service">
                        </div>
                        <div class="service-content">
                            <h2 class="title">
                                What is financial planning?
                            </h2>
                            <p>
                                Financial planning helps you understand where you are today and create a roadmap to get you where you want to
                                be. Planning is personalized to you—whether you’re saving for a single goal, like retirement, or need
                                comprehensive planning and wealth management, Rebit Asset is your best bidder to choose.
                            </p>
                            <ul style="list-style-type: disc;">
                                <li>Discover your goals</li>
                                <li>Consider all aspects of your financial life</li>
                                <li>Identify action steps</li>
                                <li>Create an investment strategy tailored to your goals</li>
                            </ul>

                            <div class="service-bottom-content">
                                <h2 class="title">Why is financial planning important?</h2>
                                <p>
                                    Financial planning helps you take control of your future:
                                </p>
                                <ul style="list-style-type: disc;">
                                    <li>Feel more confident about reaching your financial goals</li>
                                    <li>Save for milestones like college and retirement</li>
                                    <li>Build an investment portfolio tailored to your goals</li>
                                    <li>Know where you want to go and how to stay on track</li>
                                </ul>
                            </div>
                            <div class="service-bottom-content">
                                <h2 class="title">Here's what's inside your financial plan:</h2>
                            </div>
                            <div class="row justify-content-center mb-30-none">

                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                    <div class="service-item three">
                                        <div class="service-icon">
                                            <img src="{{asset('home/images/dart.jpg')}}" alt="icon">
                                        </div>
                                        <div class="service-content">
                                            <h3 class="title">Retirement Goals</h3>
                                            <p>
                                                Tell us when you plan to retire and what you need for expenses to support your lifestyle.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                    <div class="service-item three">
                                        <div class="service-icon">
                                            <img src="{{asset('home/images/dollar.jpg')}}" alt="icon">
                                        </div>
                                        <div class="service-content">
                                            <h3 class="title">Finances</h3>
                                            <p>
                                                Include your income, investments, and assets.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                    <div class="service-item three">
                                        <div class="service-icon">
                                            <img src="{{asset('home/images/list.jpg')}}" alt="icon">
                                        </div>
                                        <div class="service-content">
                                            <h3 class="title">Results & Action Steps</h3>
                                            <p>
                                                You'll get your probability of reaching your goals and steps to take action.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="service-content">
                            <h2 class="title">Create your financial plan and see the probability of your success—in three easy steps.</h2>
                            <div class="service-bottom-content">
                                <p>
                                    Because we believe reaching your financial goals for is one of the most important achievements, our
                                    complimentary plan will help you see what it will take to live the way you want.
                                </p>
                                <img src="{{asset('home/images/dash.jpg')}}" alt="icon">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2 class="title">Write down your goals.</h2>
                            <div class="service-bottom-content">
                                <p>
                                    Start by entering your goals, like when you plan to retire and how much you'll need for expenses to support your
                                    lifestyle. Then input your financial information like your income, asset investments and send it to our financial
                                    planning team for guidance.
                                </p>
                                <p>
                                    Our financial advisors runs 1,000 simulated market projections with your input to generate the probability you
                                    will reach your goals. Stress test your plan with an interactive tool that lets you see the impact of adjusting your
                                    financial planning start-up amount and more.
                                </p>
                                <img src="{{asset('home/images/analytics.jpg')}}" alt="icon">
                                <img src="{{asset('home/images/ready.jpg')}}" alt="icon" class="mt-3">
                            </div>
                        </div>
                        <div class="service-content">
                            <h2 class="title">Review your plan and take action.</h2>
                            <div class="service-bottom-content">
                                <p>
                                    We'll help you understand your probability of reaching your goals and what steps you could take next to put your
                                    plan into action. You can update your plan as life changes so you stay on track.
                                </p>
                            </div>
                        </div>
                        <div class="service-content">
                            <h2 class="title text-warning">
                                Ready to get started? Rebit Asset can help you with financial planning—whatever your needs
                                may be.
                            </h2>
                            <div class="service-bottom-content row">
                                <div class="col-md-12">
                                    <h6>Quickly write down your goals and send to our financial advisors</h6>
                                    <p>
                                        Our advisors and planning tools will help you see how much to save for college, how much your monthly
                                        mortgage might be, how much to invest, how to prepare and live in retirement, and more.
                                    </p>

                                    <img src="{{asset('home/images/analytics2.jpg')}}" alt="icon" class="mt-3">
                                    <p>We believe financial planning is one of the most important goals for most investors. That's why every Rebit client
                                        can get a complimentary financial plan focused on achieving your goals. Quickly write down your goals and send
                                        to our financial team advisors, and in as little as 15 minutes you’ll be able to see the probability of reaching your
                                        financial goals—and what you could do next.</p>
                                </div>

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

@endsection
