@extends('layouts.app')

@section('content')

<div class="main_col" style="background-color: #eee">
    <div class="row background_container">
        <div id="video_of_the_day">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel no_background">                
                    <div class="x_content dashboard_today_content">                    
                        <div class="col-md-5 col-sm-5 col-xs-12 col-today-workout-desc" style="border:0px solid #e5e5e5;">
                            <div class="custom-title s24 white">TODAY'S WORKOUT</div>
                            <div class="thin-line"></div>
                            <br>
                            <div class="custom-title s36 white">Beyond Limits</div>
                            <div class="custom-title s24 yellow">FRIDAY 16 JUNE</div>
                            <br>                      
                            <p class="s13 lightwhitecolor">There are no limits to what you can do and today's routine will keep you moving today limitless. This ROMWOD will work on your hips, glutes, groin, spine, IT band, shoulders, upper and lower back.</p>                        
                            <br>
                            <div class="minute-label lightwhitecolor s13">23 Min</div>
                            <div class="category-frame">
                                <div class="category-label lightwhitecolor s11">Saddle Archer</div>
                                <div class="category-label lightwhitecolor s11">Extended Arm Lizard</div>
                                <div class="category-label lightwhitecolor s11">Frog</div>
                                <div class="category-label lightwhitecolor s11">Pigeon</div>
                            </div>
                        </div>                    
                        <div class="col-md-7 col-sm-7 col-xs-12 col-today-workout-video">
                            <a href="{{ route('workout', ['id' => 'saddle']) }}" class="card-view">
                                <img width="100%" src="{{ asset('images/dashboard/workout.jpg') }}" alt="..." />
                                <div class="mask"></div>
                                <div class="play-button">
                                    <img src="{{ asset('images/common/play.png') }}" alt="..." />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <div class="row" id="thumbnail-views">
        <div class="col-md-12">
            <div class="x_panel no_background">
                <div class="x_content" style="padding: 0px; margin: 0px">
                    <div class="col-md-4 thumbnail_container">
                        <div class="dashboard-card">
                            <a href="#">
                                <img style="width: 100%; display: block;" src="{{ asset('images/dashboard/thumb-wod.jpg') }}" alt="image" />                                    
                                <div class="font_rajdhani_semibold s16 darkblack" style="margin-left: 5%; margin-right: 5%; margin-top: 10%; margin-bottom: 5px; line-height: 1">
                                    DAILY PROGRAMMING
                                </div>
                                <div class="s13 middleblack" style="margin-left: 5%; margin-right: 5%; margin-bottom: 10%; line-height: 1">
                                    <p>Follow along with our programming.</p>
                                </div> 
                            </a>                            
                        </div>                                         
                    </div>
                    <div class="col-md-4 thumbnail_container">
                        <a href="#">
                            <div class="dashboard-card">
                                <img style="width: 100%; display: block;" src="{{ asset('images/dashboard/thumb-workouts.jpg') }}" alt="image" />                                    
                                <div class="font_rajdhani_semibold s16 darkblack" style="margin-left: 5%; margin-right: 5%; margin-top: 10%; margin-bottom: 5px; line-height: 1">
                                    ROM YOUR WAY
                                </div>
                                <div class="s13 middleblack" style="margin-left: 5%; margin-right: 5%; margin-bottom: 10%; line-height: 1">
                                    <p>Browse routines to fit your specific needs.</p>
                                </div> 
                            </div>  
                        </a>                                 
                    </div>
                    <div class="col-md-4 thumbnail_container">
                        <a href="#">
                            <div class="dashboard-card">
                                <img style="width: 100%; display: block;" src="{{ asset('images/dashboard/thumb-poses.jpg') }}" alt="image" />
                                <div class="font_rajdhani_semibold s16 darkblack" style="margin-left: 5%; margin-right: 5%; margin-top: 10%; margin-bottom: 5px; line-height: 1">
                                    LEARN THE POSES
                                </div>
                                <div class="s13 middleblack" style="margin-left: 5%; margin-right: 5%; margin-bottom: 10%; margin-bottom: 5px; line-height: 1">
                                    <p>Step-by-step how to's on all of the poses.</p>
                                </div> 
                            </div>  
                        </a>                                
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="thumbnail-views">
        <img style="margin: auto; margin-bottom: 50px; margin-bottom: 50px; opacity: 0.5; width: 200px; display: block;" src="{{ asset('images/dashboard/logo.png') }}" alt="image" />        
    </div>
</div>

<div class="right_col">
    
</div>

@endsection
