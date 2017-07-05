/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    if ($('#hd_current_time_zone').val() == "") {
        var current_date = new Date();
        current_zone = -current_date.getTimezoneOffset() * 60;
        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            method: "POST",
            url: 'ajax/set_current_time_zone',
            data: {'_token':token, current_zone:current_zone }
        }).done(function(data) {  
            // alert(data);
        });
    }
    
    $('#add_to_favourite').click(function() {
        var workout_id = $('#workout_id').val();
        var token = $('meta[name="csrf-token"]').attr('content');

        var cls = $('#add_to_favourite').attr("class");
        if (cls === 'fa fa-heart favourite') {
            $('#add_to_favourite').attr("class", "fa fa-heart unfavourite");
            $.ajax({
                method: "POST",
                url: '/ajax/add_to_favourites',
                data: {'_token':token, workout_id: workout_id }
            }).done(function(data) {
                var status = data.status;
                if (status === 'failed') {
                    $('#add_to_favourite').attr("class", "fa fa-heart favourite");
                }
            });
        } else {
            $('#add_to_favourite').attr("class", "fa fa-heart favourite");
            $.ajax({
                method: "POST",
                url: '/ajax/remove_from_favourites',
                data: {'_token':token, workout_id: workout_id }
            }).done(function(data) {
                var status = data.status;
                if (status === 'failed') {
                    $('#add_to_favourite').attr("class", "fa fa-heart unfavourite");
                }
            });
        }
    });    
});