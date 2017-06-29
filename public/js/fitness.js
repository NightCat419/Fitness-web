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
});