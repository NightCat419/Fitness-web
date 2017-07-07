@extends('layouts.app')

@section('content')

<div class="main_col">
    <div class="row no-margin top_area">
        <div class="layoutHeader">
            <div class="title">
                <div id="workoutsTitle">
                    WORKOUTS<span class="result_count">{{ $total_count }} RESULTS</span>
                </div>
            </div>            
        </div>
    </div>  

    @if($total_count > 12)
    <div class="x_panel workout_panel" style="margin-bottom: 70px;">
    @else
    <div class="x_panel workout_panel" style="height: 100%">
    @endif
        <div class="pager" style="margin: 0px">                
            @foreach($workouts as $workout)
            <div class="col-md-3 col-sm-6 video-card">
                <div class="card-inner">
                    <div class="video-thumbnail">
                        <a href="{{ route('workout', ['id' => $workout['workout_id']]) }}">
                            <img src="{{ asset("images/dashboard/" . $workout['thumbnail']) }}">
                        </a>
                        <a class="player_play_btn" href="{{ route('workout', ['id' => $workout['workout_id']]) }}"></a>
                        <span class="label_new">new</span>
                        <span class="player_duration">{{ $workout['minutes'] }} min</span>
                    </div>
                    
                    <div class="video_meta clearfix">
                        <div class="title_desc">
                            <a href="{{ route('workout', ['id' => $workout['workout_id']]) }}">
                                <h6 class="title">{{ $workout['name'] }}</h6>
                            </a>
                            <p class="description">
                                {{ $workout['description'] }}
                            </p>
                        </div>
                        <div class="video_poses clearfix">
                            <div class="contain">
                                @foreach($workout['relations'] as $relation)
                                    @if($relation['has_tutorial']) 
                                    <div class="pose has-tutorial">
                                        <a href="{{ route('workout', ['id' => $relation['relation_id']]) }}">
                                            {{ $relation['relation_name'] }}
                                            <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px">
                                        </a>
                                    </div>
                                    @else
                                    <div class="pose">
                                        <a href="{{ route('workout', ['id' => $relation['relation_id']]) }}">
                                            {{ $relation['relation_name'] }}
                                            <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px">
                                        </a>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            @endforeach
        </div>
    </div>    
    
    @if($total_count > 12)
    <div class="pagination-container">
        <div class="subcontainer">
            {{ $links }} 
        </div>
    </div>
    @endif
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
