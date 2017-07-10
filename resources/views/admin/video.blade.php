@extends('layouts.app_admin')
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
            </div>
        </div>
    </div>
    @if(count($workout) > 0)
    <section>
        <video poster="{{ asset('images/workouts/' . $workout[0]['thumbnail']) }}" controls crossorigin>
            <!-- Video files -->
            <source src="{{ asset('videos/' . $workout[0]['url']) }}" type="video/mp4">
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

<!-- Plyr core script -->
<script src="{{ asset('node_modules/plyr/dist/plyr.js') }}"></script>
<script>plyr.setup()</script>

<script src="{{ asset('js/fitness.js') }}"></script>

@endsection
