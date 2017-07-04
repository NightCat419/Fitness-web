@extends('layouts.app')

@section('content')

<div class="main_col" style="background-color: #ffffff">
    <div class="x_panel" style="padding: 0; margin: 0">
        @foreach($scheduleDays as $scheduleDay)
            <a class="past-wod" href="{{ route('schedule_by_date', ['id' => $scheduleDay['start']]) }}">
                <span>{{ \Helpers\DateHelper::convertReadableFormat($scheduleDay['start'], false, false) }} - {{ \Helpers\DateHelper::convertReadableFormat($scheduleDay['end'], false, true) }}</span>
            </a>
        @endforeach
    </div>
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