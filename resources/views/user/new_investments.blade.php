@extends('user.base')
@section('content')
    @inject('injected','App\Defaults\Custom')
    <div class="pricing-area">
        <div class="container-fluid ui-kit-card text-center">
            <div class="row justify-content-center">
                @foreach($packages as $service)

                    @if($injected->fetchServicePackage($service->id)->count()>0)
                        <div class="col-12">
                            <h4 class="card-title big-title">{{$service->title}}</h4>
                            <p>
                                {{$service->short}}
                            </p>
                            <div class="row justify-content-center">
                                @foreach($injected->fetchServicePackage($service->id) as $package)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing-card">
                                            <div class="pricing-bar">
                                                <span>{{$package->name}}</span>
                                                <h2>{{number_format($package->roi*7,2)}}% <sub>/ Weekly</sub></h2>
                                                <p>{{$package->short}}</p>
                                            </div>

                                            <div class="price-list">
                                                <ul>
                                                    <li>
                                                        <i class="ri-check-line"></i>
                                                        Min Deposit: <b class=''> ${{number_format($package->minAmount,2)}}</b></li>
                                                    <li><i class="ri-check-line"></i>
                                                        Max Deposit: <b class=''>${{number_format($package->maxAmount,2)}}</b></li>
                                                    <li><i class="ri-check-line"></i>
                                                        Weekly Profit: <b class=''>{{number_format($package->roi*7,2)}}%</b></li>
                                                    <li><i class="ri-check-line"></i>
                                                        Monthly Profit: <b class=''>{{number_format($package->roi*30,2)}}%</b></li>
                                                    <li><i class="ri-check-line"></i>
                                                        Referral Bonus: <b class=''>{{number_format($package->referral,2)}}%</b></li>
                                                    <li><i class="ri-check-line"></i>
                                                        Duration: <b class=''>{{$package->Duration}}</b></li>
                                                    <!--li>Withdrawal <b class='text-success'>Weekly</b></li-->
                                                </ul>
                                                <a href="{{route('new_investment_packages',['id'=>$package->id])}}" class="default-btn">
                                                    Choose plan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
