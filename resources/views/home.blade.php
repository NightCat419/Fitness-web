@extends('layouts.app')

@section('content')

<div class="main_col" style="background-color: #eee">
    <div class="row background_container">
        <div id="video_of_the_day">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel no_background">                
                    <div class="x_content dashboard_today_content">
                        @if(!empty($today_workout)) 
                        <div class="col-md-5 col-sm-5 col-xs-12 col-today-workout-desc" style="border:0px solid #e5e5e5;">
                            <div class="custom-title s24 white">TODAY'S WORKOUT</div>
                            <div class="thin-line"></div>
                            <br>
                            <div class="custom-title s36 white">{{ $today_workout['name'] }}</div>
                            <div class="custom-title s24 yellow">{{ \Helpers\DateHelper::convertReadableFormat($current_date, true, true) }}</div>
                            <br>                      
                            <p class="s13 lightwhitecolor">{{ $today_workout['description'] }}</p>                        
                            <br>
                            <div class="minute-label lightwhitecolor s13">{{ $today_workout['minutes'] }} Min</div>
                            <div class="category-frame">
                                @foreach($today_workout['relations'] as $relation)
                                <div class="category-label white s11">{{ $relation['relation_name'] }}</div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 col-today-workout-video">
                            <a href="{{ route('workout', ['id' => $today_workout['workout_id']]) }}" class="card-view">
                                <img width="100%" src="{{ asset('images/dashboard/workout.jpg') }}" alt="..." />
                                <div class="mask"></div>
                                <div class="play-button">
                                    <img src="{{ asset('images/common/play.png') }}" alt="..." />
                                </div>
                            </a>
                        </div>
                        @else
                        @endif
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
                            <a href="{{ route('schedule') }}">
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
                        <div class="dashboard-card">
                            <a href="{{ route('workouts') }}">
                                <img style="width: 100%; display: block;" src="{{ asset('images/dashboard/thumb-workouts.jpg') }}" alt="image" />                                    
                                <div class="font_rajdhani_semibold s16 darkblack" style="margin-left: 5%; margin-right: 5%; margin-top: 10%; margin-bottom: 5px; line-height: 1">
                                    ROM YOUR WAY
                                </div>
                                <div class="s13 middleblack" style="margin-left: 5%; margin-right: 5%; margin-bottom: 10%; line-height: 1">
                                    <p>Browse routines to fit your specific needs.</p>
                                </div> 
                            </a>

                        </div>                          
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

@extends('layouts.right')
@section('login_content')

@endsection

@endsection
