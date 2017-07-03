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

@endsection

@endsection