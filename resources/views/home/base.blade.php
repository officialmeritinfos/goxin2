
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{asset('home/css/fontawesome-all.min.css')}}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- swipper css link -->
    <link rel="stylesheet" href="{{asset('home/css/swiper.min.css')}}">
    <!-- lightcase css links -->
    <link rel="stylesheet" href="{{asset('home/css/lightcase.css')}}">
    <!-- odometer css link -->
    <link rel="stylesheet" href="{{asset('home/css/odometer.css')}}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{asset('home/css/icomoon.css')}}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{asset('home/css/line-awesome.min.css')}}">
    <!-- animate.css')}} -->
    <link rel="stylesheet" href="{{asset('home/css/animate.css')}}">
    <!-- aos.css')}} -->
    <link rel="stylesheet" href="{{asset('home/css/aos.css')}}">
    <!-- nice select css -->
    <link rel="stylesheet" href="{{asset('home/css/nice-select.css')}}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="THE LEADING AI INVESTMENT, REAL ESTATE, GOLD MINING and STOCK MARKET project company"/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />
</head>
<body>
@inject('injected','App\Defaults\Custom')



<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="preloader">
    <div class="drawing" id="loading">
        <div class="loading-dot"></div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<div class="cursor"></div>
<div class="cursor-follower"></div>


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header class="header-section">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container custom-container">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-xl p-0">
                        <a class="site-logo site-title" href="{{url('/')}}"><img src="{{asset('home/images/'.$web->logo)}}" alt="site-logo"></a>
                        <button class="navbar-toggler d-block d-xl-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggle-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <div class="header-right">
                                <div class="header-links-area">
                                    <ul class="header-links">
                                        <li>
                                            <a href="mailto:{{$web->email}}">
                                                <div class="links-thumb">
                                                    <img src="{{asset('home/images/icon/icon-1.png')}}" alt="icon">
                                                </div>
                                                <span>{{$web->email}}</span>
                                            </a>
                                        </li>
                                        @if(!empty($web->phone))
                                            <li>
                                                <a href="tel:{{$web->phone}}">
                                                    <div class="links-thumb">
                                                        <img src="{{asset('home/images/icon/icon-2.png')}}" alt="icon">
                                                    </div>
                                                    <span>{{$web->phone}}</span>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <button class="menu-toggler ml-auto">
                                    <span class="toggle-bar"></span>
                                </button>
                                <div class="menu-toggler-wrapper">
                                    <ul class="navbar-nav main-menu">

                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('about')}}">About</a></li>
                                        <li class="menu_has_children">
                                            <a href="#0">Services <i class="las la-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                @foreach($injected->getServices() as $service)
                                                    <li><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></li>
                                                @endforeach
                                                <li><a href="{{url('financialPlanning')}}">Financial Planning</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu_has_children">
                                            <a href="#0">Pages <i class="las la-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('faqs')}}">Frequently Asked Questions</a></li>
                                                <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                                                <li><a href="{{url('privacy')}}">Privacy policy</a></li>
                                                <li><a href="{{url('testimonials')}}">Testimonials</a></li>
                                                <li><a href="{{url('security')}}">Staying Safe Online</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu_has_children">
                                            <a href="#0">Investor Space <i class="las la-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('register')}}">Register</a></li>
                                                <li><a href="{{route('login')}}">Login</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-action-area">
                                    <div class="header-action">
                                        <a href="{{route('register')}}" class="btn--base">GET STARTED</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@yield('content')

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class="footer-section pt-120">
    <div class="footer-element-one">
        <img src="{{asset('home/images/element/element-48.png')}}" alt="element">
    </div>
    <div class="footer-element-two">
        <img src="{{asset('home/images/element/element-39.png')}}" alt="element">
    </div>
    <div class="footer-element-three">
        <img src="{{asset('home/images/element/element-40.png')}}" alt="element">
    </div>
    <div class="footer-element-four">
        <img src="{{asset('home/images/element/element-7.png')}}" alt="element">
    </div>
    <div class="footer-element-five">
        <img src="{{asset('home/images/element/element-41.png')}}" alt="element">
    </div>
    <div class="footer-element-six">
        <img src="{{asset('home/images/element/element-42.png')}}" alt="element">
    </div>
    <div class="footer-element-seven">
        <img src="{{asset('home/images/element/element-39.png')}}" alt="element">
    </div>
    <div class="container">
        <div class="row mb-30-none">
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a class="site-logo site-title" href="{{url('/')}}"><img src="{{asset('home/images/'.$web->logo)}}" alt="site-logo"></a>
                    </div>
                    <p>
                        {{$siteName}} was founded on the principle of creating wealth for individuals, and that is what we have done
                        since our inception; you too can benefit from this.
                    </p>
                    <ul class="footer-social">
                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="footer-widget">
                    <h5 class="title">About us</h5>
                    <ul class="footer-list">
                        <li><a href="{{url('about')}}">About Us</a></li>
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{url('unqiue')}}">Our Unique Approach</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="footer-widget">
                    <h4 class="title">Explore {{$siteName}}</h4>
                    <ul class="footer-list">
                        <li><a href="{{route('login')}}">Account</a></li>
                        <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                        <li><a href="{{url('financialPlanning')}}">Financial Planning</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                <div class="footer-widget">
                    <h4 class="title">Quick Links</h4>
                    <ul class="footer-list">
                        <li><a href="{{url('/')}}">About us</a></li>
                        <li><a href="{{url('faq')}}">FAQs</a></li>
                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                        <li><a href="{{url('testimonials')}}">Testimonials</a></li>
                        <li><a href="{{url('security')}}">Staying Safe Online</a></li>
                        <li><a href="{{asset('home/awards.pdf')}}" target="_blank">Platform Review</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="copyright-area">
                        <p>Copyright © {{date('Y')}} <a href="{{url('/')}}">{{$siteName}}</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->




<!-- jquery -->
<script src="{{asset('home/js/jquery-3.6.0.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<!-- swipper js -->
<script src="{{asset('home/js/swiper.min.js')}}"></script>
<!-- lightcase js-->
<script src="{{asset('home/js/lightcase.js')}}"></script>
<!-- odometer js -->
<script src="{{asset('home/js/odometer.min.js')}}"></script>
<!-- viewport js -->
<script src="{{asset('home/js/viewport.jquery.js')}}"></script>
<!-- aos js file -->
<script src="{{asset('home/js/aos.js')}}"></script>
<!-- nice select js -->
<script src="{{asset('home/js/jquery.nice-select.js')}}"></script>
<!-- isotope js -->
<script src="{{asset('home/js/isotope.pkgd.min.js')}}"></script>
<!-- tweenMax js -->
<script src="{{asset('home/js/TweenMax.min.js')}}"></script>
<!-- main -->
<script src="{{asset('home/js/main.js')}}"></script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
@stack('js')

</body>
</html>
