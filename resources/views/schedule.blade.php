@extends('layouts.app')

@section('content')

<div class="main_col" style="background-color: #ffffff">
    <div class="row no-margin top_area">
        <div class="col-md-12 schedule_controls">
            <div class="title" style="display: inline-block">
                <span id="scheduleForLabel">SCHEDULE FOR:</span>
                <span id="scheduleDate">JUNE 12 - JUNE 18, 2017</span>
            </div>

            <a class="archive-link" href="#">
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

                    <a class="mybutton" href="#day7">Today</a>
                </div>
            </div>
        </div>
    </div>

    <div id="day1" class="x_panel wod_schedule_day">                
        <div class="col-md-4 left_column">
            <div class="schedule_day_label font_rajdhani_semibold s18 darkblack">DAY 1</div>
            <div class="font_rajdhani_semibold s16 darkblack">MONDAY, JUNE 19, 2017</div>            
            <p class="schedule_day_shortdesc s13 middleblack">If you want something, go get it.</p>   
        </div>  
        <div class="col-md-4 middle_column">
            <a href="#" class="card-view">
                <img width="100%" src="{{ asset('images/dashboard/workout.jpg') }}" alt="..." />
                <div class="mask"></div>  
                <div class="play-button">
                    <img src="{{ asset('images/common/play.png') }}" alt="..." />
                </div>
            </a>
        </div>
        <div class="col-md-4 right_column">
            <div class="font_rajdhani_semibold s26 darkblack">FROGS IN A SADDLE</div>
            <p class="s13 middleblack">Today's lower body focused routine will have you working on your quads, ankles, knees, groin, glutes, IT band, hamstrings, and lower back.</p>   
        </div>
    </div>   

    <div id="day2" class="x_panel wod_schedule_day">                
        <div class="col-md-4 left_column">
            <div class="schedule_day_label font_rajdhani_semibold s18 darkblack">DAY 2</div>
            <div class="font_rajdhani_semibold s16 darkblack">MONDAY, JUNE 19, 2017</div>
            <p class="schedule_day_shortdesc s13 middleblack">If you want something, go get it.</p>   
        </div>  
        <div class="col-md-4 middle_column">
            <a href="#" class="card-view">
                <img width="100%" src="{{ asset('images/dashboard/workout.jpg') }}" alt="..." />
                <div class="mask"></div>  
                <div class="play-button">
                    <img src="{{ asset('images/common/play.png') }}" alt="..." />
                </div>
            </a>
        </div>
        <div class="col-md-4 right_column">
            <div class="font_rajdhani_semibold s26 darkblack">FROGS IN A SADDLE</div>
            <p class="s13 middleblack">Today's lower body focused routine will have you working on your quads, ankles, knees, groin, glutes, IT band, hamstrings, and lower back.</p>   
        </div>
    </div>   

    <div id="day3" class="x_panel wod_schedule_day">                
        <div class="col-md-4 left_column">
            <div class="schedule_day_label font_rajdhani_semibold s18 darkblack">DAY 3</div>            
            <div class="font_rajdhani_semibold s16 darkblack">MONDAY, JUNE 19, 2017</div>
            <p class="schedule_day_shortdesc s13 middleblack">If you want something, go get it.</p>   
        </div>  
        <div class="col-md-4 middle_column">
            <a href="#" class="card-view">
                <img width="100%" src="{{ asset('images/dashboard/workout.jpg') }}" alt="..." />
                <div class="mask"></div>  
                <div class="play-button">
                    <img src="{{ asset('images/common/play.png') }}" alt="..." />
                </div>
            </a>
        </div>
        <div class="col-md-4 right_column">
            <div class="font_rajdhani_semibold s26 darkblack">FROGS IN A SADDLE</div>
            <p class="s13 middleblack">Today's lower body focused routine will have you working on your quads, ankles, knees, groin, glutes, IT band, hamstrings, and lower back.</p>   
        </div>
    </div>   

    <div id="day4" class="x_panel wod_schedule_day">                
        <div class="col-md-4 left_column">
            <div class="schedule_day_label font_rajdhani_semibold s18 darkblack">DAY 4</div>
            <div class="font_rajdhani_semibold s16 darkblack">MONDAY, JUNE 19, 2017</div>
            <p class="schedule_day_shortdesc s13 middleblack">If you want something, go get it.</p>   
        </div>  
        <div class="col-md-4 middle_column">
            <a href="#" class="card-view">
                <img width="100%" src="{{ asset('images/dashboard/workout.jpg') }}" alt="..." />
                <div class="mask"></div>  
                <div class="play-button">
                    <img src="{{ asset('images/common/play.png') }}" alt="..." />
                </div>
            </a>
        </div>
        <div class="col-md-4 right_column">
            <div class="font_rajdhani_semibold s26 darkblack">FROGS IN A SADDLE</div>
            <p class="s13 middleblack">Today's lower body focused routine will have you working on your quads, ankles, knees, groin, glutes, IT band, hamstrings, and lower back.</p>   
        </div>
    </div>  


    <div id="day5" class="x_panel wod_schedule_day">                
        <div class="col-md-4 left_column">
            <div class="schedule_day_label font_rajdhani_semibold s18 darkblack">DAY 5</div>
            <div class="font_rajdhani_semibold s16 darkblack">MONDAY, JUNE 19, 2017</div>
            <p class="schedule_day_shortdesc s13 middleblack">If you want something, go get it.</p>   
        </div>  
        <div class="col-md-4 middle_column">
            <a href="#" class="card-view">
                <img width="100%" src="{{ asset('images/dashboard/workout.jpg') }}" alt="..." />
                <div class="mask"></div>  
                <div class="play-button">
                    <img src="{{ asset('images/common/play.png') }}" alt="..." />
                </div>
            </a>
        </div>
        <div class="col-md-4 right_column">
            <div class="font_rajdhani_semibold s26 darkblack">FROGS IN A SADDLE</div>
            <p class="s13 middleblack">Today's lower body focused routine will have you working on your quads, ankles, knees, groin, glutes, IT band, hamstrings, and lower back.</p>   
        </div>
    </div>  


    <div id="day6" class="x_panel wod_schedule_day">                
        <div class="col-md-4 left_column">
            <div class="schedule_day_label font_rajdhani_semibold s18 darkblack">DAY 6</div>
            <div class="font_rajdhani_semibold s16 darkblack">MONDAY, JUNE 19, 2017</div>
            <p class="schedule_day_shortdesc s13 middleblack">If you want something, go get it.</p>   
        </div>  
        <div class="col-md-4 middle_column">
            <a href="#" class="card-view">
                <img width="100%" src="{{ asset('images/dashboard/workout.jpg') }}" alt="..." />
                <div class="mask"></div>  
                <div class="play-button">
                    <img src="{{ asset('images/common/play.png') }}" alt="..." />
                </div>
            </a>
        </div>
        <div class="col-md-4 right_column">
            <div class="font_rajdhani_semibold s26 darkblack">FROGS IN A SADDLE</div>
            <p class="s13 middleblack">Today's lower body focused routine will have you working on your quads, ankles, knees, groin, glutes, IT band, hamstrings, and lower back.</p>   
        </div>
    </div>  

    <div id="day7" class="x_panel wod_schedule_day">                
        <div class="col-md-4 left_column">
            <div class="schedule_day_label font_rajdhani_semibold s18 darkblack">DAY 7</div>
            <div class="font_rajdhani_semibold s16 darkblack">MONDAY, JUNE 19, 2017</div>
            <p class="schedule_day_shortdesc s13 middleblack">If you want something, go get it.</p>   
        </div>  
        <div class="col-md-4 middle_column">
            <a href="#" class="card-view">
                <img width="100%" src="{{ asset('images/dashboard/workout.jpg') }}" alt="..." />
                <div class="mask"></div>  
                <div class="play-button">
                    <img src="{{ asset('images/common/play.png') }}" alt="..." />
                </div>
            </a>
        </div>
        <div class="col-md-4 right_column">
            <div class="font_rajdhani_semibold s26 darkblack">FROGS IN A SADDLE</div>
            <p class="s13 middleblack">Today's lower body focused routine will have you working on your quads, ankles, knees, groin, glutes, IT band, hamstrings, and lower back.</p>   
            <br>
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


@extends('layouts.right')
@section('login_content')

@endsection

@endsection