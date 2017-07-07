@extends('layouts.app_admin')

@section('content')

<div class="main_col" style="background-color: #fff; height: 100%">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">                    
                <div class="x_content">                     
                    <table id="workout_table" class="table table-striped table-bordered dt-responsive jambo_table" cellspacing="0" width="100%">
                        <thead>
                            <tr>  
                                <th style="padding-left: 16px; padding-right: 16px"></th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Area</th>
                                <th>Movement</th>
                                <th>Video</th>
                                <th>Description</th>
                                <th>Minutes</th>
                                <th>Relations</th>
                            </tr>
                        </thead>                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
