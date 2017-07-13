@extends('layouts.app')

@section('content')

<div class="main_col" style="background-color: #ffffff; height: 100%">
    <div class="row no-margin top_area">
        <div class="col-md-12 schedule_controls">
            <div class="title" style="display: inline-block">
                <span id="scheduleForLabel">SCHEDULE FOR:</span>
                <span id="scheduleDate" class="uppercase">{{ \Helpers\DateHelper::convertReadableFormat($weekDays[0], false, false) . ' - ' . \Helpers\DateHelper::convertReadableFormat($weekDays[6], false, true) }}</span>
            </div>

            <a class="archive-link" href="{{ route('pastschedule') }}">
                <img src="{{ asset('images/common/icon-pastwods.svg') }}"/>
                Past Schedules
            </a>

            <div class="jumpTo">
                <div class="mybutton-group">
                    <a class="mybutton" href="#day1">Mon</a>
                    <a class="mybutton" href="#day2">Tue</a>
                    <a class="mybutton" href="#day3">Wed</a>
                    <a class="mybutton" href="#day4">Thur</a>
                    <a class="mybutton" href="#day5">Fri</a>
                    <a class="mybutton" href="#day6">Sat</a>
                    <a class="mybutton" href="#day7">Sun</a>

                    <a class="mybutton" href="#day{{ $number_of_day }}">Today</a>
                </div>
            </div>
        </div>
    </div>

    @foreach($workouts as $workout)
    @if(array_key_exists('workout_id', $workout))
    <div id="day{{ $workout['day_number'] }}" class="x_panel wod_schedule_day">                
        <div class="col-md-4 left_column">
            <div class="schedule_day_label font_rajdhani_semibold s18 darkblack">DAY {{ $workout['day_number'] }}</div>
            <div class="font_rajdhani_semibold s16 darkblack uppercase">{{ \Helpers\DateHelper::convertReadableFormat($workout['date'], true, true) }}</div>            
            <p class="schedule_day_shortdesc s13 middleblack">{{ $workout['short_desc'] }}</p>   
        </div>  
        <div class="col-md-4 middle_column">
            <a href="{{ route('workout', ['id' => $workout['workout_id']]) }}" class="card-view">
                <img width="100%" src="{{ asset($workout['thumbnail']) }}" alt="..." />
                <div class="mask"></div>  
                <div class="play-button">
                    <img src="{{ asset('images/common/play.png') }}" alt="..." />
                </div>
                <span class="video-duration uppercase">{{ $workout['minutes'] }} min</span>
            </a>
        </div>
        <div class="col-md-4 right_column">
            <div class="font_rajdhani_semibold s24 darkblack uppercase">{{ $workout['name'] }}</div>
            <p class="s13 middleblack">{{ $workout['description'] }}</p>   
            
            <br>
            <div class="video_poses clearfix">
                <div class="contain">
                    @foreach($workout['relations'] as $relation)
                        @if($relation['has_tutorial'] == true)
                            <div class="pose has-tutorial">
                                <a href="{{ route('workout', ['id' => $relation['relation_id']]) }}">
                                    {{ $relation['relation_name'] }}
                                    <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px">
                                </a>
                            </div>
                        @else
                            <div class="pose">
                                {{ $relation['relation_name'] }}                                    
                                <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px">
                            </div>
                        @endif
                    @endforeach                    
                </div>
            </div>
        </div>        
    </div>
    @endif
    @endforeach  
</div>


@extends('layouts.right')
@section('login_content')
<div class="twitter-wrapper" style="-webkit-animation-delay: .5s">
    <a class="twitter-timeline" 
       data-chrome="noheader transparent noborders nofooter" 
       data-theme="dark" 
       data-link-color="#FAB81E" 
       href="https://twitter.com/romwod">        
    </a> 
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>

<div class="rotating-announcement">
    <img src="{{ asset('images/dashboard/sneaks.png') }}">
</div>

<div class="dashboard-footer">
    <ul>
        <li>ROMWOD, LLC @ 2017</li>
        <li>All Rights Reserved</li>        
        <li style="margin-top: 8px">
            <a href="#">Terms of Use</a>
            |
            <a href="#">Privacy Policy</a>
        </li>
    </ul>
</div>
@endsection

@endsection