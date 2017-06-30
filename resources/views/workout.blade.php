@extends('layouts.app')
@section('content')

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('node_modules/plyr/dist/plyr.css') }}">

<div class="main_col">
    <div class="row no-margin top_area">
        <div class="layoutHeader" style="margin: 0px; padding: 0px; padding-bottom: 8px;">
            <div class="title">
                <div id="workoutsTitle" style="margin: 0px; padding: 0px; padding-left: 15px">
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
        <div data-type="youtube" data-video-id="{{ $workout[0]['url'] }}"></div>            
    @else
        <div data-type="youtube" data-video-id=""></div>            
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

<div class="add-favorite">
    <p>Add to Favourites?</p>
    <button class="button" type="button>">
        Add To Favourites
    </button>
</div>

<div class="workout">
    <p>In This Workout:</p>
    <ul id="inthisworkout">
        @foreach($relations as $relation)
            @if($relation['has_tutorial'] == 0)
                <li class="pose">
                    <div>
                        {{ $relation['relation_name'] }}
                    </div>
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
</div>
@endsection

<!-- Plyr core script -->
<script src="{{ asset('node_modules/plyr/dist/plyr.js') }}"></script>
<script>plyr.setup()</script>

@endsection
