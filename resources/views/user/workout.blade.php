@extends('layouts.app')
@section('content')

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('node_modules/plyr/dist/plyr.css') }}">
<link rel="stylesheet" href="{{ asset('css/plyr_demo.css') }}">

<div class="main_col">
    <div class="row no-margin top_area">
        <div class="layoutHeader" style="margin: 0px; padding: 0px; padding-bottom: 8px; padding-top: 8px">
            <div class="title">
                <div id="workoutsTitle" style="line-height: 40px; margin: 0px; padding: 0px; padding-left: 15px; display: inline-block">
                    @if(count($workout) > 0)
                    {{ $workout[0]['name'] }}
                    @else
                    No Workout
                    @endif
                </div>
                @if($favourited == true) 
                <i id="add_to_favourite" class="fa fa-heart unfavourite" aria-hidden="true"></i>
                @else
                <i id="add_to_favourite" class="fa fa-heart favourite" aria-hidden="true"></i>
                @endif                
            </div>
        </div>
    </div>
    @if(count($workout) > 0)
    <section>
        <video poster="{{ asset($workout[0]['thumbnail']) }}" controls crossorigin>
            <!-- Video files -->
            <source src="{{ asset('videos/') . $workout[0]['url'] }}" type="video/mp4">
        </video>
    </section>    
    <input id="workout_id" type="hidden" value="{{ $workout[0]['workout_id'] }}">
    @endif
    <div class="row no-margin" style="padding-bottom: 10px;">
        <div class="col-md-7 col-sm-7 col-xs-12" style="padding: 0px; margin: 0px;">
            <div class="video-title">
                About this routine
                <hr class="video_meta_line">
            </div>
            <div class="video-desc">
                @if(count($workout) > 0)
                {{ $workout[0]['description'] }}                
                @endif
            </div>
        </div>        
        <div class="col-md-5 col-sm-5 col-xs-12" style="padding: 0px; margin: 0px;">
            <div class="video-title">
                Optional Requirement
                <hr class="video_meta_line">
            </div>

            <div style="margin-left: 10px">
                @foreach($optional_requirements as $requirement)
                <div class="video-desc">
                    {{ $requirement['requirement'] }}
                </div>
                @endforeach
            </div>            
        </div>
    </div>
</div>

@extends('layouts.right')
@section('login_content')

<!--<div class="workout">
    <p>In This Workout:</p>
    <ul id="inthisworkout">
        @foreach($relations as $relation)
            @if($relation['has_tutorial'] == 0)
                <li class="pose">
                    <div>{{ $relation['relation_name'] }}</div>
                </li>
            @else
                <li class="pose has-tutorial">
                    <a href="{{ route('workout', ['id' => $relation['relation_id']]) }}">
                        {{ $relation['relation_name'] }}
                        <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px;">
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>-->

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

<!-- Plyr core script -->
<script src="{{ asset('node_modules/plyr/dist/plyr.js') }}"></script>
<script>plyr.setup()</script>

<script src="{{ asset('js/fitness.js') }}"></script>

@endsection
