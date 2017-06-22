@extends('layouts.app')
@section('content')

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('node_modules/plyr/dist/plyr.css') }}">

<div class="main_col">
    <div class="row no-margin top_area">
        <div class="title" style="margin-left: 8px">
            <span id="scheduleDate">Build A Body</span>
        </div>
    </div>  

    <div data-type="youtube" data-video-id="bTqVqk7FSmY"></div>
</div>

<div class="right_col">

</div>

<!-- Plyr core script -->
<script src="{{ asset('node_modules/plyr/dist/plyr.js') }}"></script>
<script>plyr.setup()</script>

@endsection
