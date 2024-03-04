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
                <div class="col-xl-12 col-lg-12 mb-30">
                    <div class="about-content two">
                        <h3 class="title">Cyber security</h3>
                        <p>
                            Internet scams particularly in the financial sector, have plateaued out. There are still individuals though that attempt to deceive and
exploit our clients, who contact and solicit them, purporting to act as representatives of {{$siteName}}. Please exercise caution and verify
the authenticity of any unexpected communication claiming to be from us. Here is what to remember:
<ul style="list-style-type: disc;">
    <li>We will never solicit clients or individual investors directly, and we will not conduct any investment contracts by e-mail.</li>
    <li>We will never send a subscription form for an investment offer. Any investment advertisement issued by {{$siteName}} Investors will direct clients to our websites - to obtain more information and either application forms or, where permitted, to subscribe online via the website.</li>
    <li>Watch out for unsolicited calls, emails, or letters offering unusually profitable investment opportunities. Fraudsters may be using times of economic uncertainty to launch new investment scams.</li>
    <li>If you ever find yourself asking ‘what’s the catch?’, it might be best to slow down and dig deeper into the offer and where it is coming from.</li>
    <li>Visit the official websites of firms purporting to offer the investment opportunity and avoid following links embedded in unsolicited email communications.</li>
    <li>Watch out when it sounds too good to be true! The chances are, that it probably is NOT.</li>
</ul>
                        </p>
                    <p>
                        Your security is our utmost priority and we appreciate your diligence in helping us maintain a safe environment for our clients and
investors. Be vigilant as we will never request personal information from you through unsolicited calls or emails or letters, but only
through our official communication channels
                    </p>
                        
    
                    </div>
                </div>
                
                <div class="col-md-12 mb-30">
                    <h4>Email scams: What to look out for</h4>
                        <p>
                            We have become aware that fraudsters are targeting members of public with scam emails that appear to come from {{$siteName}}, using
fake {{$siteName}} email addresses and the names of genuine {{$siteName}} staff. Most of these scams promote fake investments in bonds
or other financial products and come to members of the public after they have searched for investment opportunities online using
investment comparison websites, some of which have also been shown to be fake.
Exercise caution when dealing with email attachments from these domains as they may harbour malicious software, commonly known
as malware, and should therefore not be opened.
{{$siteName}} maintains a proactive stance against online fraud and collaborates closely with its IT Security Team, law enforcement
agencies, and industry bodies to identify and take down known fraudulent domains on the internet. However, fraudsters are adept at
exploiting vulnerabilities including the use of misspelled variations of our official domains and email addresses to disseminate scams.
We take this very seriously and take action on every website we find claiming to be us. So far, in 2023, we’ve identified 43 websites that
we’ve taken down or are in the process of doing so.
                        </p>
                </div>

                <div class="col-md-12 mb-30">
                    <h4>Financial scams: Attack of the clones</h4>
                        <p>
                            When it comes to money scams, there’s nothing fraudsters won’t try. They have numerous methods for trying to get their hands on our
                            cash. One that is becoming increasingly common is the fake or cloned websites. These appear to be legitimate and may even have a web
                            address that is very similar to a well-known site, such as the one operated by your bank or financial advisor. On closer inspection;
                            however, the differences can be spotted, which is why it is so important to remain vigilant – especially when you see links included.
                            Please double-check the URL to confirm its authenticity and be cautious of included links.
                            We have been made aware of a clone website using the {{$siteName}} background. We have discussed the issue with our cybersecurity
                            team and the Financial Conduct Authority (FCA), they took the necessary actions to remove it.
                            
                        </p>
                        <h2>How Cloning Scams Work</h2>
                        <ul style="list-style-type: disc;">
                            <li>
                                <h3>Persuading victims via email:</h3>
                                <p>The criminals’ biggest challenge is getting people to click through to their fake sites, and they do this in one of the following two ways:</p>
                                <p>The email might say, for example, there has been an unauthorised activity on your account and you need to log into the company’s website – via a link in the message – to check that everything is ok. The link takes you to a website that looks genuine, but is in fact a front that allows the criminals to harvest your log-in and account details.</p>
                                <p>Be careful and never share sensitive personal information such as passwords or financial details through unfamiliar channels.</p>
                            </li>
                            <li>
                                <h3>Manipulating Google rankings:</h3>
                                <p>Getting their cloned sites at the top of Google rankings. This can involve the fraudsters paying to ensure that their site appears at or near the top of Google’s rankings for certain web searches.</p>
                            </li>
                        </ul>
                        <h2>How to stay safe</h2>
                        <p>There are a number of precautions you can take to avoid this type of cons.</p>
                        <ul>
                            <li> Get the web address from official correspondence you have with the company and type it in yourself, rather than clicking on a link
sent via email or text message.
<li>If you are searching for a government service online, the genuine web address should begin with “https://www.gov....”.</li>
    <li>When you click through to a genuine site, you should also see a padlock symbol to the left-hand side of the address bar. This applies
to genuine retailers as well: when you reach payment pages, if not before, the address should begin with “https” and the padlock
symbol should be displayed.</li>
<li>You can check if a financial services firm is authorised by visiting the local regulator’s website. To verify the identity of an authorised
firm, ask for its FRN and contact details, but always call them back on the switchboard number given on the FCA Register.</li>

                        </ul>
                        
                </div>

                
                <div class="col-md-12 mb-30">
                    <h4>Recovery scam</h4>
                        <p>
                            We have become aware that of a threat known as recovery scams, where fraudsters contact victims posing as representatives of a fictitious
                            law firm. These scammers claim to offer assistance in recovering losses incurred through previous investments. For providing this type of
                            assistance, they require an upfront fee to be paid.
                            Be cautious if you receive unsolicited emails, calls, text messages, or letters. Legitimate law firms do NOT operate in this manner. Always
                            verify the identity of this individual contacting and refrain from sharing any personal or financial information. NEVER engage in such type of
                            communication and DO NOT SEND ANY MONIES OUT.
                            
                        </p>
                        
                        
                </div>
                <div class="col-md-12 mb-30">
                    <h4>Contacted by a fraudster or fallen victim to a scam?</h4>
                        <p>
                            It’s important to know that money scams can happen to everyone, and not to be embarrassed about reporting it. You should report the scam
                            to your bank before you do anything else. If the scam is still in progress, or you think you might be in immediate danger, you should also
                            contact the police.<br/>
                            If you believe you have been sent a fake link purporting to be an {{$siteName}} website, please contact {{$web->email}}.<br/>
                            If you have been scammed, defrauded, or experienced cybercrime, please report it using the below national reporting channels:<br/>
                            If you encounter any suspicious fraudulent activity or if you have already been targeted, please do not hesitate to report it to us immediately
                            using the button below.
                            
                            <a href="{{url('contact')}}" class="btn btn-primary">Report IT</a>
                        </p>
                        
                        
                </div>


            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@endsection
