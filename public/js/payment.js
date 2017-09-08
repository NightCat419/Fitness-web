/**
 * Created by Han_Dev on 9/6/2017.
 */

$(document).ready(function() {

    $('.monthlybtn').on('click', function () {

        var cls = $(this).attr("class");
        if (cls === 'button monthlybtn custom-hollow hollow') {
            $(this).attr("class", "button monthlybtn");
            $('.yearlybtn').attr("class", "button yearlybtn hollow custom-hollow");
            $('#indivi-pay').text('7 Day Free Trial');
            $('#indivi-desc').text('then just $13.95/mo');
            $('#gyms-pay').text('$24.95/mo');
        }
    });

    $('.yearlybtn').on('click', function () {

        var cls = $(this).attr("class");
        if (cls === 'button yearlybtn hollow custom-hollow') {
            $(this).attr("class", "button yearlybtn");
            $('.monthlybtn').attr("class", "button monthlybtn custom-hollow hollow");
            $('#indivi-pay').text('$150.00/year');
            $('#indivi-desc').text('Free trial not included');
            $('#gyms-pay').text('$250.00/year');
        }
    });

    $('#indivi-btn').on('click', function () {

        $(this).closest('.planWrapper').css("background-color","white");
        $(this).closest('.planWrapper').css("color","#000000");
        $('#indivi-div').attr("class", "planWrapper columns small-6 large-12 selected");
        $('#gyms-div').attr("class", "planWrapper columns small-6 large-12");
        $('#indivi-div div p:first').css("color","#f58c05");
        $('#indivi-div div p:first').css("border-bottom","2px solid #b8b9bb");
        $('#gyms-btn').closest('.planWrapper').css("background-color","rgba(255, 255, 255, 0.05)");
        $('#gyms-btn').closest('.planWrapper').css("color","white");
        $('#gyms-div div p:first').css("color","#ffffff");
        $('#gyms-div div p:first').css("border-bottom","2px solid #454545");

        $('#indivi-unselected').hide();
        $('#gyms-unselected').show();
    });

    $('#gyms-btn').on('click', function () {

        $(this).closest('.planWrapper').css("background-color","white");
        $(this).closest('.planWrapper').css("color","#000000");
        $('#indivi-div').attr("class", "planWrapper columns small-6 large-12");
        $('#gyms-div').attr("class", "planWrapper columns small-6 large-12 selected");
        $('#gyms-div div p:first').css("color","#f58c05");
        $('#gyms-div div p:first').css("border-bottom","2px solid #b8b9bb");
        $('#indivi-btn').closest('.planWrapper').css("background-color","rgba(255, 255, 255, 0.05)");
        $('#indivi-btn').closest('.planWrapper').css("color","white");
        $('#indivi-div div p:first').css("color","#ffffff");
        $('#indivi-div div p:first').css("border-bottom","2px solid #454545");

        $('#gyms-unselected').hide();
        $('#indivi-unselected').show();
    });

});

