@extends('layouts.app')

@section('content')

<div class="main_col">
    <div class="row no-margin top_area">
        <div class="layoutHeader">
            <div class="title">
                <div id="workoutsTitle">
                    WORKOUTS<span class="result_count">648 RESULTS</span>
                </div>
            </div>
            
        </div>
    </div>  

    <div class="x_panel workout_panel" style="margin-bottom: 70px;">
        <div class="pager" style="margin: 0px">                
            @foreach($workouts as $key => $workout)
            <div class="col-md-3 col-sm-6 video-card">
                <div class="card-inner">
                    <div class="video-thumbnail">
                        <a href="#">
                            <img src="{{ asset('images/dashboard/workout.jpg') }}">
                        </a>
                        <a class="player_play_btn" href="#"></a>
                        <span class="label_new">new</span>
                        <span class="player_duration">24 min</span>
                    </div>
                    
                    <div class="video_meta clearfix">
                        <div class="title_desc">
                            <a href="#">
                                <h6 class="title">Bet On You</h6>
                            </a>
                            <p class="description">
                                You are sure to win when you bet on yourself and when you do today's ROMWOD for your glutes, hips, hamstrings, IT band, lower back and groin.
                            </p>
                        </div>
                        <div class="video_poses clearfix">
                            <div class="contain">
                                <div class="pose has-tutorial">
                                    <a href="#">
                                        Dragon
                                        <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px">
                                    </a>
                                </div>
                                <div class="pose has-tutorial">
                                    <a href="#">
                                        Dragon
                                        <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px">
                                    </a>
                                </div>
                                <div class="pose has-tutorial">
                                    <a href="#">
                                        Dragon
                                        <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px">
                                    </a>
                                </div>
                                <div class="pose has-tutorial">
                                    <a href="#">
                                        Dragon
                                        <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px">
                                    </a>
                                </div>
                                <div class="pose has-tutorial">
                                    <a href="#">
                                        Dragon
                                        <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            @endforeach
        </div>
    </div>    
    
    <div class="pagination-container">
        <div class="subcontainer">
            {{ $workouts->links('vendor.pagination.custom') }} 
        </div>
    </div>
</div>

<div class="right_col">
    
</div>
@endsection
