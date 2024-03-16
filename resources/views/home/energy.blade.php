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
                        <div class="service-content">
                            <h2 class="title">
                                ENERGY TRANSITION SECTOR
                            </h2>
                            <p>
                                Kinesis Energy is one of the international largest capital investors in
                                renewable energy infrastructures. We are working towards securing
                                green power all round the globe. We have cultivated a team of
                                solution experts who help commercial and industrial customers
                                accelerate their journey to low-cost, sustainable energy for a
                                decarbonized future.

                            </p>
                            <h4 class="title">
                                Renewable Energy
                            </h4>
                            <p>In order to achieve low-carbon society, we are committed to
                                promote renewable energies. Currently we own various renewable
                                energy sources such as wind, solar, biomass, and geothermal. You
                                can find our more from below pages.
                            </p>
                            <h4 class="title">
                                About Solar Projects
                            </h4>
                            <p>
                                Solar power is one of the cleanest generation systems which produce
                                no carbon dioxide emissions.
                                Kinesis started the operation of three solar power plants, “OUR GRID”
                                in UK and Canada in November 2013, having invested heavily into thisproject, the productivity has been remarkably high.
                            </p>
                            <h4 class="title">
                                About Wind Projects
                            </h4>
                            <p>
                                Wind power is characterized as the most economical in terms of
                                renewable energy generation. We have been jointly operating Wind
                                Farm Development. We have been supplying electric power, which
                                is derived from the wind production farm and the other renewable
                                energy, to our customers.
                            </p>
                            <h4 class="title">
                                About Hydrogen Farm
                            </h4>
                            <p>
                                We have constructed partnerships hydrogen farm, we supply
                                hydrogen energy to our prospects and partners around the globe
                                swiftly. We will contribute to the realization of a hydrogen
                                community.
                            </p>
                            <h4 class="title">
                                Don't know where to start?
                            </h4>
                            <p>
                                The path to reducing carbon emissions is complex and can look
                                different for everyone. Launch our interactive wizard to see how
                                we can help you make your energy transition a reality.
                            </p>
                            <h2 class="title text-center">
                                Where are you in your decarbonization Journey?
                            </h2>
                            <p>
                                Your energy strategy and solution mix are uniquely yours, and therefore no
                                two sustainability plans are the same. Whether you’re just getting started or
                                you’re well down the path, incorporating clean energy into a home or an
                                organization can be a nuanced and complex process. Kinesis Energy
                                Resources can help you understand where you are, and how to get where
                                you need to go. Our Decarbonization step will guide you to the information
                                you need now to start planning, take action and realize results. To start,
                                simply select the category that best describes your home or organization’s
                                current decarbonization status.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Just Starting</h5>
                                <p class="card-text">Your organization is analyzing its energy data and perhaps have integrated some renewable energy initiatives, but have not set a formal carbon reduction goal yet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Along the Journey</h5>
                                <p class="card-text">Your organization recognizes it needs to take action on reducing carbon, but you haven't benchmarked your carbon emissions or set any goals yet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Leading the Way</h5>
                                <p class="card-text">Your organization has established benchmarks, incorporated renewable energy initiatives and is tracking against formal carbon reduction goals but still has some gaps to fill to reach those goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">JUST STARTING</h5>
                        <p>Transitioning to an energy strategy that aims to reduce carbon while still achieving budget objectives and mitigating risk can be a nuanced and complex process. It requires understanding your energy consumption across the entire organization, uncovering opportunities for energy efficiency, and integrating renewables, setting sustainability goals, and monitoring progress.</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Measure Baseline</h6>
                        <p>First, we need to understand your current energy usage to measure and benchmark your carbon emissions. To do this, we’ll evaluate your real-time energy consumption data across all facilities, operations and fleets, and forecast demand using advanced analytics.</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Set Goals</h6>
                        <p>Establishing decarbonization goals can feel overwhelming, but armed with your benchmark emission data, we’ll help you identify carbon-reduction goals that make sense for you. It's important to think big at first but follow with tangible, realistic targets that can be achieved over time.</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Develop a Plan</h6>
                        <p>With your new targets set, we can determine the best course of action to reach them. Although your specific decarbonization strategy may not be a simple formula, we will choose, combine, and customize the right solutions for your needs.</p>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Leading the Way</h5>
                        <p>
                            Congratulations on establishing a leadership position in sustainability. Now it’s
                            time to solve for the challenging final leg of your journey. Identifying and
                            executing bespoke solutions for advanced firms like yours is complex. It’s
                            important understand your options and when to act
                        </p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Measure Baseline</h6>
                        <p>
                            First, we need to understand your current energy consumption and carbon
                            reduction measures already in place to measure and benchmark where you are
                            today. Our analytics platform will aggregate all your energy consumption, carbon
                            emissions, and forecast net demand into one dashboard.
                        </p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Optimize & Prioritize</h6>
                        <p>
                            Our advanced energy analytics tools will help you optimize your energy usage
                            and reveal which energy solutions and projects you should focus on to achieve
                            your financial and sustainability goals. We’ll use the unique and specific data of
                            your facilities to produce highly customized and actionable recommendations.

                        </p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Deploy Solutions</h6>
                        <p>
                            Using the customized recommendations from Step 2, you’re ready to move
                            into action. Through our diverse portfolio of offerings and solutions, we can
                            help you go the final mile. There’s no need for you to find, vet, hire and
                            oversee multiple vendors to complete your initiatives and achieve your final
                            goals.

                        </p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h6 class="card-title mb-2 text-muted">HIGH LEVEL RECOMMENDATION</h6>
                        <p>
                            Based on where you are in your decarbonization journey, the following
                            products and solutions are recommended. Should we partner together,
                            we would work with you to create a more detailed recommendation based
                            on your unique needs.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Service
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
   Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="service-section two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="service-item three details">
                        <div class="service-content">
                            <h2 class="title">
                                Why US?
                            </h2>

                            <p>
                                Transitioning your business to renewables takes some heavy
                                planning. It helps to have a sustainability expert on your side.
                                As the world’s leading provider of sustainable solutions, Kinesis
                                Energy Resources knows exactly what it takes for you to
                                overcome the toughest challenges and deliver on your energy
                                objectives.

                            </p>
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h6 class="card-title mb-2">Sustainable Energy Leader</h6>
                                    <p>
                                        Kinesis Energy resources is the world’s leading sustainable
                                        energy company. We believe that the planet, people and
                                        industry need reliable, affordable and clean energy solutions.
                                        It’s our mission to accelerate industry toward a zero-carbon
                                        future.<br/>
                                        Kinesis Energy Resources’s ability to produce power with zerocarbon emissions means our energy customers can meet their
                                        emissions reduction goals faster, cheaper and easier. We
                                        partner with businesses like yours to develop new, creative and
                                        comprehensive energy solutions to decarbonize, lower costs
                                        and ensure business sustainability. Our promise to you is clean,
                                        reliable and affordable energy.<br/>
                                        We didn’t become the world’s leading sustainable solutions
                                        provider by being one-dimensional. With $135 billion in total
                                        assets, we are the world leader in electricity generated from
                                        wind and solar.
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
