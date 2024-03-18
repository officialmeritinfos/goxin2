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


    <!--About One Start-->
    <section class="about-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline"></span>
            </div>
            <div class="row">

                <div class="col-xl-12 mb-24">
                    <div class="about-one__right">
                        <div class="container mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Last Updated: January 31, 2024</h5>
                                    <p>These Terms of Use (the “Terms”) govern your use of Kinesisasset.com (this “website”). By continuing to access or use this website, you agree to be bound by these Terms. {{$siteName}} may update these Terms at any time. You are encouraged to review the Terms carefully prior to using this website and each time you return as they are subject to change.</p>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-5 mb-5">
                            <div class="list-group">
                                <a href="#scope" class="list-group-item list-group-item-action">Scope</a>
                                <a href="#limitations" class="list-group-item list-group-item-action">Limitations Regarding Information Presented</a>
                                <a href="#virtual-assistant" class="list-group-item list-group-item-action">Virtual Assistant</a>
                                <a href="#" class="list-group-item list-group-item-action">Customer Experience (CX) Surveys</a>
                                <a href="#" class="list-group-item list-group-item-action">Live Chat</a>
                                <a href="#" class="list-group-item list-group-item-action">Privacy of Information</a>
                                <a href="#" class="list-group-item list-group-item-action">Copyright and DMCA Copyright Agent Information</a>
                                <a href="#" class="list-group-item list-group-item-action">Linking to This Website & Links from This Website</a>
                                <a href="#" class="list-group-item list-group-item-action">Trademarks</a>
                                <a href="#" class="list-group-item list-group-item-action">Third Party Content</a>
                                <a href="#" class="list-group-item list-group-item-action">Timeliness of Content</a>
                                <a href="#" class="list-group-item list-group-item-action">Accuracy of Content</a>
                                <a href="#" class="list-group-item list-group-item-action">Prohibited Uses and Termination of Access</a>
                                <a href="#" class="list-group-item list-group-item-action">Password Security and Notification</a>
                                <a href="#" class="list-group-item list-group-item-action">Security of Electronic Communications</a>
                                <a href="#" class="list-group-item list-group-item-action">DISCLAIMER OF WARRANTIES</a>
                                <a href="#" class="list-group-item list-group-item-action">LIMITATION OF LIABILITY</a>
                                <a href="#" class="list-group-item list-group-item-action">Indemnification</a>
                                <a href="#" class="list-group-item list-group-item-action">Predispute Arbitration Clause</a>
                                <a href="#" class="list-group-item list-group-item-action">Modification of These Terms</a>
                                <a href="#" class="list-group-item list-group-item-action">Governing law</a>
                                <a href="#" class="list-group-item list-group-item-action">Severability</a>
                                <a href="#" class="list-group-item list-group-item-action">Contact Us</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="container mt-5">
                                    <h2 id="scope">Scope</h2>
                                    <p>This website is operated by FMR LLC, the parent company of various entities that offer products and services to the public, which includes {{$siteName}} Brokerage Services LLC, a registered broker-dealer, Kinesis Personal and Workplace Advisors LLC, a registered investment adviser, {{$siteName}} Workplace Services LLC, a workplace savings plan recordkeeper, Kinesis Digital Asset Services, LLC, a UK chartered, limited liability trust company (UKBG ID 165527), {{$siteName}} Stock Transfer Solutions LLC, a registered transfer agent, or any of their affiliates (together with FMR LLC, “{{$siteName}}”).</p>
                                    <p>These Terms contain a Predispute Arbitration Clause that requires that you and {{$siteName}} agree to pursue any disputes in individual arbitration and that each of us waives the right to sue in court, including in a class action or representative proceeding. Please see Section 20, titled “Predispute Arbitration Clause,” for more information.</p>
                                    <p>If you are a customer of {{$siteName}} Investments, your customer relationship is also governed by your account agreements and related documentation. If there is any conflict between these Terms and your account agreements, then your account agreements will govern. Additional information regarding {{$siteName}} Investments’ products, services and potential conflicts of interest can be reviewed by clicking the “Disclosures” link on the bottom of this website.</p>
                                    <p>Certain sections of this website may contain separate terms and conditions, which are in addition to these Terms. You should read those additional terms and conditions carefully. By accessing such sections or pages, you agree to be bound by those additional terms and conditions. In the event of a conflict, those additional terms and conditions will govern your use of those sections or pages. You may be asked to execute supplemental agreements before you are permitted to access or use certain features or functionality within this website (each, a “Supplemental Agreement”). In the case of Supplemental Agreements presented to you online, you authorize {{$siteName}} Investments to rely upon “checks” or “clicks” in designated locations as your electronic signature and your agreement to the terms of such Supplemental Agreements. These Terms are in addition to any Supplemental Agreement and are not intended to supersede or modify any such Supplemental Agreement.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2 id="limitations">Limitations Regarding Information Presented</h2>
                                    <p>Pricing and other information generated through the use of data or services made available via this website may not reflect actual prices or values that would be available in the market at the time provided or at the time that you may want to purchase or sell a particular security or other investment, including a digital asset. In addition, credit ratings are statements of opinions and are not statements of fact. Any reference to a particular investment or security, a rating or any observation concerning an investment that is part of this information is not a recommendation to buy, sell or hold such investment or security or other asset, does not address the suitability of an investment or security or other asset for any particular investor, and should not be relied on as investment advice. Before investing, you should consider whether any investment, investment strategy, security, other asset, or related transaction is appropriate for you based on your personal investment objectives, financial circumstances, and risk tolerance. You are also encouraged to consult your legal, tax, or insurance professional regarding your specific situation.</p>

                                </div>
                                <div class="container mt-5">
                                    <h2 id="virtual-assistant">Virtual Assistant</h2>
                                    <p>On certain pages of this website, you may engage with Kinesis’s Virtual Assistant. Our Virtual Assistant uses advanced technology and artificial intelligence to help with frequently asked questions and to enhance your digital experience. It is designed to be both anticipatory and responsive based on your search terms, information you enter in reply to the Virtual Assistant’s questions, and your account and other information on file with Kinesis. Your interactions with our Virtual Assistant may be recorded and shared with our service providers that provide technology and services used in our Virtual Assistant or are used for other business purposes. The Virtual Assistant is not designed to recommend the purchase or sale of specific securities or digital assets. While it may offer educational information, it doesn’t have the capability to discern what investment choices would be suitable for your personal situation.</p>
                                    <p>Do not attempt to place trade orders through the Virtual Assistant; it can provide you with guidance as to how to place a trade at Kinesis, but the Virtual Assistant cannot execute trades on your behalf.</p>
                                    <p>Any personal, account, or other information you provide to the Virtual Assistant, as well as all search information entered, may be retained, accessible to {{$siteName}} personnel, and used and shared consistent with Kinesis’s Privacy Policy. Notwithstanding, you should not provide the Virtual Assistant with credit or debit card information or protected health information. Responses from the Virtual Assistant are general in nature and should not be considered investment, legal, or tax advice. Consult an investment professional, attorney, or tax professional regarding your specific situation.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2 id="cx-surveys">Customer Experience (CX) Surveys</h2>
                                    <p>On certain pages of this website, you may engage with Kinesis’s customer experience feedback surveys.</p>
                                    <p><strong>Legal Disclaimer:</strong> Responses to this survey will be collected by our team, a team of experts in the company working to develop, collect and analyze the results. Your feedback is confidential. {{$siteName}} will individually respond to any feedback you provide in this survey unless required to do so by applicable law, nor will they use your feedback for individual marketing efforts. Please do not include any personally identifiable information related to an account in your responses. If you have questions or comments that you would like {{$siteName}} to follow-up with you on, please contact {{$siteName}} directly through your normal contact channel.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2 id="live-chat">Live Chat</h2>
                                    <p>On certain pages of this website, you may engage with representatives of {{$siteName}} through a live chat feature. All of the chat interactions may be recorded, are subject to recordkeeping and monitoring, and may be shared with our service providers that provide technology and services used in our chat feature or are used for other business purposes.</p>

                                </div>
                                <div class="container mt-5">
                                    <h2 id="privacy-info">Privacy of Information</h2>
                                    <p>While using this website, you may be asked to provide certain information to us, such as categories of products and services in which you are interested, account information, or contact or other personal information, in order to use certain capabilities and/or to subscribe to {{$siteName}} products or services.</p>
                                    <p>All such information, as well as all other information collected when you use this website, may be accessible to {{$siteName}} personnel, is subject to possible retention, and may be used and shared consistent with Kinesis's Privacy Policy, which can be accessed at any time by clicking on the “Privacy” link that is in the footer of each page of this website.</p>
                                    <p>In addition, your use of this website may be monitored and recorded by us and/or our service providers for our business purposes and security.</p>

                                </div>
                                <div class="container mt-5">
                                    <h2 id="copyright-info">Copyright and DMCA Copyright Agent Information</h2>
                                    <p>This website, including the content presented on this website, is protected by applicable copyright laws. Accordingly, you may not copy, distribute, modify, post or frame-in this website, including any text, graphics, video, audio, software code, user interface design or logos, without our express permission.</p>
                                    <p>If you believe that your work has been copied in a way that constitutes copyright infringement, please provide {{$siteName}} with the following information:</p>
                                    <ul>
                                        <li>A description of the copyrighted work that you claim has been infringed, or, if multiple copyrighted works are the subject of a single notice, a representative list of such works.</li>
                                        <li>An identification of the allegedly infringing material, and a description of where that material is located on this website.</li>
                                        <li>Your address, telephone number, and email address.</li>
                                        <li>A statement by you that you have a good faith belief that use of the disputed material in the manner complained of is not authorized by the copyright owner, its agent, or the law.</li>
                                        <li>A statement by you, made under penalty of perjury, that the information you provide in your notice is accurate and that you are the owner of the allegedly infringed copyright, or that you are authorized to act on behalf of the copyright owner.</li>
                                        <li>Your physical or electronic signature as the owner, or a person authorized to act on behalf of the owner, of the copyright allegedly infringed.</li>
                                    </ul>
                                    <p>Kinesis's Agent for Notice of claims of copyright infringement can be reached as follows: By mail: {{$siteName}} or through our channel.</p>

                                </div>

                                <div class="container mt-5">
                                    <h2 id="linking-info">Linking to This Website & Links from This Website</h2>
                                    <p>Unless you and {{$siteName}} have agreed otherwise in writing, links from another website to this website must resolve to the top-level homepage of www.kinesisasset.com. In order to avoid confusion, any link from a third-party website to the top-level homepage of www.kinesisasset.com, must identify that {{$siteName}} does not endorse, sponsor nor is affiliated with the third-party website, entity, service or product, and may not make use of any {{$siteName}} trademarks or service marks other than those contained within the text of the link.</p>
                                    <p>{{$siteName}} is not responsible or liable for any content, advertising, product, or other materials on or available from third party sites, even if linked from, or otherwise referenced on, this website. Any such link or reference does not constitute an endorsement or recommendation with respect to such products or sites.</p>

                                </div>
                                <div class="container mt-5">
                                    <h2 id="trademarks-info">Trademarks</h2>
                                    <p>All trademarks and service marks on this website belong to {{$siteName}} or an affiliate, except third-party trademarks and service marks, which are the property of their respective owners as discussed below.</p>

                                </div>
                                <div class="container mt-5">
                                    <h2 id="third-party-content-info">Third Party Content</h2>
                                    <p>This website includes general news and information, commentary, interactive tools, quotes,
                                        research reports, data and other material, including ratings, concerning the financial markets, securities, digital assets, and other subjects. Some of this content is supplied by companies that are not affiliated with any {{$siteName}} entity (“Third Party Content”). The Third Party Content is protected by copyright pursuant to United Kingdom laws and international treaties and is owned or licensed by the providers, their affiliates or their suppliers of such Third Party Content (“Third Party Content Providers”).</p>
                                    <p>
                                        You acknowledge and agree that the Third Party
                                        Content is and shall remain valuable intellectual property owned by the Third Party Content
                                        Providers, and that no proprietary rights are being transferred to you with respect to such
                                        content. Reproduction of any Third Party Content in any form is prohibited except with the
                                        prior written permission of the Third Party Content Provider credited. Any use by you of such
                                        Third Party Content beyond the scope of the services provided to you by {{$siteName}}
                                        generally requires a license from the Third Party Content Provider, along with an associated
                                        fee based on usage.
                                    </p>
                                    <p>
                                        Neither {{$siteName}} nor any Third Party Content Provider guarantees the accuracy,
                                        timeliness, completeness, usefulness, or availability of Third Party Content, nor is {{$siteName}}
                                        or any Third Party Content Provider responsible for any errors or omissions in Third Party
                                        Content (negligent or otherwise), regardless of the cause, or for the results obtained from the
                                        use of such Third Party Content. In no event shall {{$siteName}} or any Third Party Content
                                        Provider be liable for any damages, costs, expenses, legal fees, or losses (including lost income
                                        or lost profit and opportunity costs) in connection with any use of Third Party Content. A
                                        reference to a particular investment or security, a rating or any observation concerning an
                                        investment that is part of the Third Party Content is not a recommendation to buy, sell or hold
                                        such investment or security, does not address the suitability of an investment or security for
                                        any particular investor, and should not be relied on as investment advice. Credit ratings are
                                        statements of opinions and are not statements of fact. You accept and assume all risks of
                                        using any Third Party Content. The inclusion of any Third Party Content on this website does
                                        not constitute an endorsement or recommendation from {{$siteName}} of such Third Party
                                        Content or the Third Party Content Provider.
                                    </p>
                                    <p>
                                        Third Party Content shall not be distributed or redistributed in any manner by you or your
                                        agents. To the extent {{$siteName}} provides Third Party Content to you or an agent, including a
                                        third party service provider you have designated for receipt of such Third Party Content, your
                                        receipt and use and that of your agent is subject to certain restrictions and terms and
                                        conditions pursuant to these Terms and as required by the Third Party Content Providers.
                                        Pursuant to these Terms, and as required by the Third Party Content Providers, you
                                        understand and acknowledge that you and your agents, inclusive of any third party service
                                        providers, are prohibited from distributing, redistributing, exporting to, downloading,
                                        providing access to, directly or indirectly, or otherwise transferring Third Party Content
                                        received from {{$siteName}} to any party, including but not limited to, any other service
                                        provider or vendor.
                                    </p>
                                    <p>
                                        You shall be liable and responsible to {{$siteName}} for any actions or omissions, including any
                                        unauthorized or inadvertent receipt, use or misuse of Third Party Content by you or your agent in
                                        violation of these Terms, or any other obligations that are made to {{$siteName}} by you.
                                        {{$siteName}}, in its sole discretion, reserves the right to immediately, without notice, suspend or
                                        terminate your or your agents’, including your third party service providers’, access to, or your or
                                        your agents’ right to use, the Third Party Content and that upon termination or suspension of such
                                        access or use or upon the termination of your relationship, you shall cease and shall cause all of
                                        your agents to cease all use of and delete or purge any and all of the Third Party Content. Kinesis
                                        Asset will not be liable to you for any modification or discontinuance of such access to the Third
                                        Party Content whether as a result of Kinesis’s suspension or termination of the Third Party Content,
                                        your relationship with {{$siteName}} or for any other reason.
                                    </p>
                                    <p>
                                        You agree that the foregoing terms and conditions shall survive any termination of your or your
                                        agents’ or third party service providers’ right of access to the Third Party Content.
                                        “CUSIP” identifiers have been provided by CUSIP Global Services, managed on behalf of the UK
                                        Bankers Association by Standard & Poor’s Financial Services, LLC, and are not for use or
                                        dissemination in a manner that would serve as a substitute for any CUSIP service. The CUSIP
                                        Database, © 2021 UK Bankers Association. “CUSIP” is a registered trademark of the UK Bankers
                                        Association. Moody’s Investors Service, Inc. (“Moody’s”) ratings are proprietary to Moody’s or its
                                        affiliates and are protected by copyright and other intellectual property laws. Ratings are licensed to
                                        {{$siteName}}by Moody’s.
                                    </p>
                                    <p class="text-uppercase">
                                        RATINGS MAY NOT BE COPIED OR OTHERWISE REPRODUCED, REPACKAGED, FURTHER
                                        TRANSMITTED, TRANSFERRED, DISSEMINATED, REDISTRIBUTED OR RESOLD, OR STORED FOR
                                        SUBSEQUENT USE FOR ANY SUCH PURPOSE, IN WHOLE OR IN PART, IN ANY FORM OR MANNER OR
                                        BY ANY MEANS WHATSOEVER, BY ANY PERSON WITHOUT MOODY’S PRIOR WRITTEN CONSENT
                                    </p>

                                </div>
                                <div class="container mt-5">
                                    <h2>Timeliness of Content</h2>
                                    <p>All content on this website is presented only as of the date and time published or indicated and may be superseded by subsequent market events or for other reasons. Users are cautioned not to place undue reliance on any forward-looking statements (indicated by language such as “believe”, “anticipate”, “expect” or similar words) which were based on information available at the time they were made. {{$siteName}} undertakes no obligation to update publicly or revise any dated, forward-looking, or other statements.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2>Accuracy of Content</h2>
                                    <p>ALTHOUGH {{$siteName}} TRIES TO INCLUDE ACCURATE AND TIMELY INFORMATION ON THIS WEBSITE, THERE MAY BE INADVERTENT INACCURACIES AND ERRORS, AND NEITHER {{$siteName}} NOR ITS THIRD PARTY CONTENT PROVIDERS WARRANT THE ACCURACY, COMPLETENESS, AVAILABILITY OR TIMELINESS OF THIS WEBSITE OR ANY INFORMATION, TEXT, GRAPHICS, LINKS, OR OTHER {{$siteName}} OR THIRD PARTY CONTENT ON THIS WEBSITE. {{$siteName}} MAY CHANGE THIS WEBSITE AND ANY CONTENT THEREON AT ANY TIME WITHOUT NOTICE, BUT {{$siteName}} DOES NOT WARRANT THAT ANY DEFECTS OR INACCURACIES WILL BE CORRECTED OR THAT THEY WILL BE CORRECTED IN A TIMELY MANNER.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2>Prohibited Uses and Termination of Access</h2>
                                    <p>You may use this website only as permitted by law. You may use this website only for personal, non-commercial purposes. You may not do any of the following: (a) use this website in any manner that could damage or overburden any {{$siteName}} server, or any network connected to any {{$siteName}} server; (b) use this website in any manner that would interfere with any other party’s use of this website; or (c) introduce or permit any person to introduce into this website any code or malicious or hidden mechanisms that would impair the operation of this website, or of Kinesis’s computers, networks, or other devices or software.</p>
                                    <p>You may not access this website through devices or services that are designed to provide high-speed, automated, repeated access, unless such devices are approved or made available by Kinesis. You may not use any feature or services made available by this website to interact with any {{$siteName}} computer, network or service other than for the purposes and in the manner for which the feature or service is made available to, and is intended to be used by, users of this website. Certain parts of this website are protected by passwords or require a login. You may not obtain or attempt to obtain unauthorized access to such parts of this website, or to any other protected materials or information, through any means not intentionally made available by {{$siteName}} for your specific use.</p>
                                    <p>
                                        No content made available on this website may be reproduced, duplicated, copied, sold, resold,
                                        or otherwise exploited for any commercial purpose without express written consent of Kinesis.
                                        Use or disclosure of any content or materials from this website, including Third Party Content,
                                        in any manner inconsistent with these Terms or any other obligations that are made to Kinesis
                                        Asset by you, may result in immediate and irreparable harm to {{$siteName}} and/or the Third
                                        Party Content Providers, and any remedies at law in such event may not be adequate.
                                        Accordingly, in addition to all other remedies available at law or in equity, {{$siteName}} and its
                                        Third Party Content Providers shall have the right to seek equitable and injunctive relief,
                                        without the necessity of proving actual damages and without posting a bond, to prevent such
                                        unauthorized, negligent, or inadvertent use or disclosure, and to recover the amount of all such
                                        damages (including attorneys’ fees and expenses) incurred in connection with such use or
                                        disclosure. Additionally, {{$siteName}} is not waiving or purporting to waive any rights that the
                                        Third Party Content Providers may have to pursue any and all claims against you or your agents
                                        in connection with the unauthorized use or disclosure of Third Party Content.
                                        {{$siteName}} may terminate or suspend your access to this website for any violation of the
                                        provisions of these Terms or for any reason whatsoever at its sole discretion and without prior
                                        notice.
                                    </p>
                                </div>
                                <div class="container mt-5">
                                    <h2>Password Security and Notification</h2>
                                    <p>If you have a password for access to non-public areas of this website, you are solely responsible for maintaining the confidentiality of any username, password, and other security data, methods, and devices. Further, you are responsible for all activities that occur in connection with your access credentials or password, including all instructions electronically transmitted to {{$siteName}} via this website and all use of any data, information or services obtained using your access credentials or password and other security data. {{$siteName}} shall not be under any duty to inquire as to the authority or propriety of any instructions given to {{$siteName}} by you or by a person who has logged on using your access credentials or password, shall be entitled to act upon any such instructions, and will not be liable for any loss, cost, expense, or other liability arising out of any such instructions.</p>
                                    <p>Accordingly, you should take steps to protect the confidentiality of your access credentials or password. As an authorized user of non-public areas of this website, you accept full responsibility for the monitoring of your account including frequently checking your account information, reviewing your transaction history online and promptly reviewing any correspondence, account statements and confirmations received from {{$siteName}}. Notify {{$siteName}} immediately if you become aware of any unauthorized activity, disclosure, loss, theft, or unauthorized use of your password. You agree to cooperate with {{$siteName}} in any investigation and agree to take corrective measures to protect your account from further fraudulent activity.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2>Security of Electronic Communications</h2>
                                    <p>Electronic (including wired and wireless) communications to or from {{$siteName}} may not be encrypted. You acknowledge that there is no guarantee that data, including e-mail, electronic and wireless communications, and personal data, will not be accessed by unauthorized third parties when communicated between you and {{$siteName}} or between you and other parties.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2>DISCLAIMER OF WARRANTIES</h2>
                                    <p>NEITHER {{$siteName}} NOR ITS THIRD PARTY CONTENT PROVIDERS MAKE ANY EXPRESS OR IMPLIED WARRANTIES ABOUT THIS WEBSITE OR THE CONTENT PRESENTED ON THIS WEBSITE, INCLUSIVE OF ANY THIRD PARTY CONTENT, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT. THIS WEBSITE AND ALL CONTENT IS MADE AVAILABLE TO YOU “AS IS” AND “AS AVAILABLE”.</p>
                                    <p>{{$siteName}} DOES NOT WARRANT THAT THIS WEBSITE WILL BE UNINTERRUPTED, OR SECURE. IF YOU DOWNLOAD ANY MATERIALS FROM THIS WEBSITE, YOU DO SO AT YOUR RISK, AND YOU ARE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER OR OTHER ELECTRONIC SYSTEM OR LOSS OF DATA THAT RESULTS.</p>
                                    <p>NEITHER {{$siteName}} NOR ITS THIRD PARTY CONTENT PROVIDERS WARRANT THAT THE RESULTS OBTAINED FROM THE USE OF THIS WEBSITE OR THE CONTENT PRESENTED ON THIS WEBSITE, INCLUDING THIRD PARTY CONTENT, WILL BE ACCURATE OR RELIABLE, OR THAT THIS WEBSITE OR ANY PRODUCTS, SERVICES, INFORMATION, OR OTHER MATERIAL PURCHASED OR OBTAINED BY YOU THROUGH THIS WEBSITE WILL MEET YOUR NEEDS OR EXPECTATIONS.</p>
                                    <p>IF YOU LIVE IN A STATE THAT DOES NOT ALLOW WARRANTIES TO BE LIMITED OR DISCLAIMED, SOME OR ALL OF THESE PROVISIONS MAY NOT APPLY TO YOU.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2>LIMITATION OF LIABILITY</h2>
                                    <p>NEITHER {{$siteName}} NOR ANY THIRD PARTY CONTENT PROVIDER WILL BE LIABLE TO YOU OR ANYONE ELSE FOR ANY DAMAGES OF ANY KIND, WHETHER CONSEQUENTIAL, INCIDENTAL, SPECIAL, DIRECT, INDIRECT OR OTHERWISE. {{$siteName}} AND ITS THIRD PARTY CONTENT PROVIDERS EXPRESSLY DISCLAIM LIABILITY FOR LOST PROFITS, TRADING LOSSES, AND/OR ANY DAMAGES THAT RESULT FROM USE OF OR LOSS OF USE OF THIS WEBSITE AND MATERIALS ON THIS WEBSITE (WHETHER PROVIDED BY {{$siteName}} OR THIRD PARTIES). THIS DISCLAIMER OF LIABILITY APPLIES EVEN IF {{$siteName}} AND/OR ITS THIRD PARTY CONTENT PROVIDERS HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES OR LOSSES.</p>
                                    <p>{{$siteName}} WILL NOT BE LIABLE TO YOU OR ANYONE ELSE FOR ANY LOSS RESULTING FROM A CAUSE OVER WHICH {{$siteName}} DOES NOT HAVE DIRECT CONTROL. THIS INCLUDES FAILURE OF ELECTRONIC OR MECHANICAL EQUIPMENT OR COMMUNICATIONS LINES (INCLUDING TELEPHONE, CABLE, AND INTERNET), UNAUTHORIZED ACCESS, VIRUSES, THEFT, OPERATOR ERRORS, SEVERE OR EXTRAORDINARY WEATHER (INCLUDING FLOOD, EARTHQUAKE, OR OTHER ACT OF GOD), FIRE, WAR, INSURRECTION, TERRORIST ACT, RIOT, LABOR DISPUTE AND OTHER LABOR PROBLEMS, ACCIDENT, EMERGENCY OR ACTION OF GOVERNMENT.</p>
                                    <p>IF YOU LIVE IN A STATE THAT DOES NOT ALLOW THE LIMITATION OR EXCLUSION OF LIABILITY OR INCIDENTAL OR CONSEQUENTIAL DAMAGES, SOME OR ALL OF THESE LIMITATIONS AND EXCLUSIONS MAY NOT APPLY TO YOU. IF THE LIMITATIONS OF LIABILITIES OR REMEDIES IN THESE TERMS ARE DETERMINED BY A COURT OR ARBITRATION PANEL TO NOT APPLY TO YOU OR TO BE UNENFORCEABLE FOR ANY REASON, THEN YOU EXPRESSLY AGREE THAT THESE PROVISIONS WILL BE CONSTRUED TO APPLY TO THE MAXIMUM EXTENT PERMITTED BY LAW AND THAT UNDER NO CIRCUMSTANCES WILL THE TOTAL, AGGREGATE LIABILITY OF {{$siteName}} AND ALL THIRD PARTY CONTENT PROVIDERS FOR ANY CAUSE WHATSOEVER RELATING TO THIS AGREEMENT, THIS WEBSITE, OR ANY {{$siteName}} OR THIRD PARTY CONTENT ON THIS WEBSITE, EXCEED $100.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2>Indemnification</h2>
                                    <p>As a condition of your use of this website, you agree to indemnify and hold {{$siteName}} and its Third Party Content Providers harmless from and against any and all claims, losses, liability, costs, and expenses including but not limited to attorneys’ fees) arising from your misuse of this website or any {{$siteName}} or Third Party Content on this website, or from your violation of these Terms.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2>Predispute Arbitration Clause</h2>
                                    <p>These Terms are subject to a predispute arbitration clause. Under this clause, you and {{$siteName}} agree as follows:</p>
                                    <ul>
                                        <li>All parties to this agreement are giving up the right to sue each other in court, including the right to a trial by jury, except as provided by the rules of the arbitration forum in which a claim is filed.</li>
                                        <li>Arbitration awards are generally final and binding; a party's ability to a court reverse or modify an arbitration award is very limited.</li>
                                        <li>The ability of the parties to obtain documents, witness statements and other discovery is generally more limited in arbitration than in court proceedings. The arbitrators do not have to explain the reason(s) for their award unless, in an eligible case, a joint request for an explained decision has been submitted by all parties to the panel at least 20 days prior to the first scheduled hearing date.</li>
                                        <li>The panel of arbitrators may include a minority of arbitrators who were or are affiliated with the securities industry. The rules of some arbitration forums may impose time limits for bringing a claim in arbitration. In some cases, a claim that is ineligible for arbitration may be brought in court.</li>
                                        <li>The rules of the arbitration forum in which the claim is filed, and any amendments thereto, shall be incorporated into this agreement. All controversies that may arise between you and {{$siteName}} concerning any subject matter, issue or circumstance whatsoever shall be determined by arbitration through the Financial Industry Regulatory Authority (FINRA) or any securities self-regulatory organization or United Kingdom securities exchange of which the person, entity, or entities against whom the claim is made is a member, as you may designate.</li>
                                        <li>You understand that judgment upon any arbitration award may be entered in any court of competent jurisdiction. No person shall bring a putative or certified class action to arbitration, nor seek to enforce any predispute arbitration agreement against any person who has initiated in court a putative class action; or who is a member of a putative class who has not opted out of the class with respect to any claims encompassed by the putative class action until: (i) the class certification is denied; or (ii) the class is decertified; or (iii) the customer is excluded from the class by the court. Such forbearance to enforce an agreement to arbitrate shall not constitute a waiver of any rights under this agreement except to the extent stated herein.</li>
                                        <li>This predispute arbitration agreement survives the termination of the relationship between you and Kinesis, cancellation or end of any particular account or program, and any opt-out by you with respect to {{$siteName}} communications, products, or services.</li>
                                    </ul>
                                </div>
                                <div class="container mt-5">
                                    <h2>Modification of These Terms</h2>
                                    <p>{{$siteName}} may modify these Terms at any time without notice to you, except where required by law. When we make changes to these Terms, we will change the “Last Updated” date specified at the beginning of these Terms. The most current version of these Terms can be reviewed by clicking on the “Terms of Use” link located at the bottom of this website. Use of the website shall constitute acceptance by you of the Terms in effect as of such time.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2>Governing Law</h2>
                                    <p>These Terms and their enforcement are governed by the laws of the Commonwealth of Massachusetts, without regard to conflicts of law, and shall inure to the benefit of Kinesis’s successors and assigns, whether by merger, consolidation, or otherwise.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2>Severability</h2>
                                    <p>If a court of competent jurisdiction deems any provision of these Terms to be unenforceable or in conflict with applicable laws, rules, or regulations, either present or future, that provision will be enforced to the maximum extent permissible, and the remaining provisions will remain in full force and effect.</p>
                                </div>
                                <div class="container mt-5">
                                    <h2>Contact Us</h2>
                                    <p>For questions about these Terms, your account, or other concerns or inquiries, please <a href="{{url('/')}}">contact us</a>.</p>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="about-one__right">


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->


@endsection
