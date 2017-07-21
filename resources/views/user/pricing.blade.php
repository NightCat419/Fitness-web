@extends('layouts.app_nologin')

@section('content')

    <div class="main-container" style="padding-bottom: 100px;">
                <div class="form-ui-column-container small-12 small-centered columns">
                    <h1 class="white" id="page-title-full">Two Plans. Unlimited Streaming</h1>
                    <div style="text-align: center">
                        <span class="fineprint animated fadeInUp" style="font-family: 'refrigerator-deluxe', sans-serif; display: inline-block; margin: 0 auto 3em auto; opacity: 1; padding: 3px 16px; text-align: center; color: #fff; background: #ffb300; font-size: 18px; border-radius: 3px; text-transform: uppercase; font-weight: 500; letter-spacing: 0.05em">Try ROMWOD Free for 7 Days.<sup>*</sup></span>
                    </div>
                    <div class="row" id="availablePlans">

                        <div class="col-sm-offset-0 col-sm-6 col-md-5 col-md-offset-1 animated fadeInLeft memberplan">
                            <div class="panel panel-primary">

                                <div class="panel-heading">
                                    <h4 class="text-center">Athlete Plan</h4>
                                    <div class="plan-subdetails">
                                        <em> For personal use.</em>
                                        <p>Our Athlete Plan is designed to be used by one individual. This plan does not support any sharing or public showing of ROMWOD.</p>
                                    </div>
                                </div>

                                <div class="panel-body text-center">
                                    <p class="lead"><span style="font-size: 0.7em; opacity: 0.5">Try us out for 7 days then just</span> <br><span class="plan-price h2">$13.95<em>/mo</em></span></p>
                                </div>

                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">Unlimited Streaming</li>
                                    <li class="list-group-item">Stream on all your devices.</li>
                                    <li class="list-group-item">Expert Programming for Athletes.</li>
                                    <li class="list-group-item">New routines added regularly.</li>
                                    <li style="opacity: 0.1; background-image: none" class="list-group-item"><strong>Stream ROMWOD in a class setting.</strong></li>
                                    <li style="opacity: 0.1; background-image: none" class="list-group-item"><strong>ROMWOD Ambassador Program.</strong></li>
                                    <li style="opacity: 0.1; background-image: none" class="list-group-item"><strong>ROMWOD Goodies &amp; Perks.</strong></li>
                                </ul>

                                <div class="panel-footer text-center">
                                    <a href="{{ route('register') }}" class="btn btn-primary" style="width: 100%">7-Day Free Trial</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-5 animated fadeInRight memberplan">
                            <div class="panel panel-primary">

                                <div class="panel-heading">
                                    <h4 class="text-center">Affiliate Plan</h4>
                                    <div class="plan-subdetails">
                                        <em> Stream from your gym.</em>
                                        <p>Our Affiliate Plan is designed for affiliates (gyms) to have the opportunity to use ROMWOD as part of their daily or weekly programming.</p>
                                    </div>
                                </div>

                                <div class="panel-body text-center">
                                    <p class="lead"><span style="font-size: 0.7em; opacity: 0.5">Stream from your gym for just</span> <br><span class="plan-price h2">$24.95<em>/mo</em></span></p>
                                </div>

                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">Unlimited Streaming</li>
                                    <li class="list-group-item">Stream on all your devices.</li>
                                    <li class="list-group-item">Expert Programming for Athletes.</li>
                                    <li class="list-group-item">New routines added regularly.</li>
                                    <li class="list-group-item"><strong>Stream ROMWOD in a class setting. <span data-toggle="tooltip" data-placement="left" title="" class="glyphicon glyphicon-info-sign" data-original-title="The rights to play ROMWOD in a class setting at anytime. This can be done on a TV, projector, and utilize the gyms sound system. (However, this package does not support the sharing of logins to coaches or members for personal use outside of the gym.)"></span></strong></li>
                                    <li class="list-group-item"><strong>ROMWOD Ambassador Program. <span data-toggle="tooltip" data-placement="left" title="" class="glyphicon glyphicon-info-sign" data-original-title="Earn $1 per month for every coach/member who signs up for their own ROMWOD account through the affiliate referral program, for which we provide many marketing tools to assist you in earning money back!"></span></strong></li>
                                    <li class="list-group-item"><strong>ROMWOD Goodies &amp; Perks. <span data-toggle="tooltip" data-placement="left" title="" class="glyphicon glyphicon-info-sign" data-original-title="You'll be added to our Affiliate Directory(Launching Summer 2016). As time and location permit, the affiliate also has the opportunity to have the ROMWOD team come host a seminar for your coaches and members. Plus, we routinely send out free gear and goodies to our top performing affiliates."></span></strong></li>

                                </ul>

                                <div class="panel-footer text-center">
                                    <a href="{{ route('register') }}" class="btn btn-primary" style="width: 100%">Get Started</a>
                                </div>

                            </div>
                        </div><!-- END: plan -->




                    </div>
                    <img src="{{ asset('images/dashboard/logo.png') }}" style="padding-top: 50px; width: 200px; display: block; height: auto; margin: auto">

                </div>
            </div>

@endsection
