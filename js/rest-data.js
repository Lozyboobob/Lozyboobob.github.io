$(document).ready(function () {

    $('#container').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: 'Variation du chiffre d’affaire hebdomadaire (depuis l’inscription sur Collect’eat)'
        },
        xAxis: {
            labels: {
                enabled: false,
                step: 1
            },
            type: 'datetime',
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%b'
            }
        },
        yAxis: {
            title: {
                enabled:false
            },
            min: 0
        },
        legend:{
            enabled:false
        },
        tooltip: {
            borderColor: "#B3B3B3",
            headerFormat: '',
            pointFormat: '<label style="font-weight:300;color:#B3B3B3;">DATE:<span style="color:#5e5e5e;">{point.x:%d.%m.%Y}</span></label><br/><label style="font-weight:300;color:#B3B3B3;">HEURE:<span style="color:#5e5e5e;">{point.x:%HH%M}</span></label><br /><label style="color:#B3B3B3;">CA:<span style="color:#1eb2eb;">{point.y}€</span></label>',
            shadow:false,
            backgroundColor:"#FFFFFF",
            borderWidth:2
        },

        plotOptions: {
            spline: {
                marker: {
                    enabled: false
                }
            }
        },

        series: [{
            name: 'Winter 2012-2013',
            // Define the data points. All series have a dummy year
            // of 1970/71 in order to be compared on the same x axis. Note
            // that in JavaScript, months start at 0 for January, 1 for February etc.
            data: [
                [Date.UTC(2016, 7, 15, 07, 55), 0],
                [Date.UTC(2016, 7, 15, 15, 55), 35.8],
                [Date.UTC(2016, 7, 16, 16, 46), 20.0],
                [Date.UTC(2016, 7, 16, 23, 55), 30.0],
                [Date.UTC(2016, 7, 17, 08, 45), 55.7],
                [Date.UTC(2016, 7, 17, 21, 30), 42.8],
                [Date.UTC(2016, 7, 18, 03, 50), 53.0],
                [Date.UTC(2016, 7, 18, 19, 35), 88.0],
                [Date.UTC(2016, 7, 19, 15, 55), 60.0],
                [Date.UTC(2016, 7, 20, 17, 46), 100.0],
                [Date.UTC(2016, 7, 20, 23, 55), 55.0],
                [Date.UTC(2016, 7, 21, 12, 32), 43.0],
                [Date.UTC(2016, 7, 21, 23, 32), 67.0]
            ]

        }]
    });
    $("text").each(function(){
        if($(this).text()=="Highcharts.com"){
            $(this).css("display","none");
        }
    })
    function set_Label() {
        var chart_width = $('#container').width();
        var chart_height = $('#container').height();

        $('#container').before('<label class="day" id="LUN">LUN</label>');
        $('#container').before('<label class="day" id="MAR">MAR</label>');
        $('#container').before('<label class="day" id="MER">MER</label>');
        $('#container').before('<label class="day" id="JEU">JEU</label>');
        $('#container').before('<label class="day" id="VEN">VEN</label>');
        $('#container').before('<label class="day" id="SAM">SAM</label>');
        $('#container').before('<label class="day" id="DIM">DIM</label>');

        $('#LUN').css({
            "margin-left": 1.1 * chart_width / 14,
            "margin-top": chart_height
        });
        $('#MAR').css({
            "margin-left": 3 * chart_width / 14,
            "margin-top": chart_height 
        });
        $('#MER').css({
            "margin-left": 4.9 * chart_width / 14,
            "margin-top": chart_height
        });
        $('#JEU').css({
            "margin-left": 6.9 * chart_width / 14,
            "margin-top": chart_height 
        });
        $('#VEN').css({
            "margin-left": 8.8 * chart_width / 14,
            "margin-top": chart_height 
        });
        $('#SAM').css({
            "margin-left": 10.75 * chart_width / 14,
            "margin-top": chart_height 
        });
        $('#DIM').css({
            "margin-left": 12.7 * chart_width / 14,
            "margin-top": chart_height
        });

        $('#container').before('<label class="zero_hour" id="LUN_zero">00h</label>');
        $('#container').before('<label class="zero_hour" id="MAR_zero">00h</label>');
        $('#container').before('<label class="zero_hour" id="MER_zero">00h</label>');
        $('#container').before('<label class="zero_hour" id="JEU_zero">00h</label>');
        $('#container').before('<label class="zero_hour" id="VEN_zero">00h</label>');
        $('#container').before('<label class="zero_hour" id="SAM_zero">00h</label>');
        $('#container').before('<label class="zero_hour" id="DIM_zero">00h</label>');

        $('#LUN_zero').css({
            "margin-left": 2.1 * chart_width / 14,
            "margin-top": chart_height-10 
        });
        $('#MAR_zero').css({
            "margin-left": 4 * chart_width / 14,
            "margin-top": chart_height -10 
        });
        $('#MER_zero').css({
            "margin-left": 5.9 * chart_width / 14,
            "margin-top": chart_height -10 
        });
        $('#JEU_zero').css({
            "margin-left": 7.9 * chart_width / 14,
            "margin-top": chart_height -10 
        });
        $('#VEN_zero').css({
            "margin-left": 9.8 * chart_width / 14,
            "margin-top": chart_height -10 
        });
        $('#SAM_zero').css({
            "margin-left": 11.75 * chart_width / 14,
            "margin-top": chart_height -10 
        });
        $('#DIM_zero').css({
            "margin-left": 13.7 * chart_width / 14,
            "margin-top": chart_height -10 
        });
    }
    set_Label();
    $(window).resize(function () {
        if ($(".day").length == 0) {
            return;
        }
        if ($(".zero_hour").length == 0) {
            return;
        }

        $(".zero_hour").remove();
        $(".day").remove();

        set_Label();
    });
    
    //button function
    $(".edit-rapport-btn").click(function(){
        location.href="rest-rapport-data.php";
    })
})
