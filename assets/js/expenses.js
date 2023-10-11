$(function() {
    "use strict";

// chart 30
var title01 = $('div.hidden').data('title01');
var title02 = $('div.hidden').data('title02');
var title03 = $('div.hidden').data('title03');
var title04 = $('div.hidden').data('title04');
var title05 = $('div.hidden').data('title05');
var title06 = $('div.hidden').data('title06');
var title07 = $('div.hidden').data('title07');
var title08 = $('div.hidden').data('title08');
var title09 = $('div.hidden').data('title09');
var title10 = $('div.hidden').data('title10');

var fulfilled01 = $('div.hidden').data('fulfilled01');
var fulfilled02 = $('div.hidden').data('fulfilled02');
var fulfilled03 = $('div.hidden').data('fulfilled03');
var fulfilled04 = $('div.hidden').data('fulfilled04');
var fulfilled05 = $('div.hidden').data('fulfilled05');
var fulfilled06 = $('div.hidden').data('fulfilled06');
var fulfilled07 = $('div.hidden').data('fulfilled07');
var fulfilled08 = $('div.hidden').data('fulfilled08');
var fulfilled09 = $('div.hidden').data('fulfilled09');
var fulfilled10 = $('div.hidden').data('fulfilled10');

var ctx = document.getElementById("chart30").getContext('2d');

var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke1.addColorStop(0, '#ee0979');
    gradientStroke1.addColorStop(1, '#ff6a00');
    
var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke2.addColorStop(0, '#283c86');
    gradientStroke2.addColorStop(1, '#39bd3c');

var gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke3.addColorStop(0, '#7f00ff');
    gradientStroke3.addColorStop(1, '#e100ff');
    
var gradientStroke4 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke4.addColorStop(0, '#0000FF');
    gradientStroke4.addColorStop(1, '#00BFFF');    
    
var gradientStroke5 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke5.addColorStop(0, '#FFD700');
    gradientStroke5.addColorStop(1, '#FFFF00');   
    
var gradientStroke6 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke6.addColorStop(0, '#D2691E');
    gradientStroke6.addColorStop(1, '#CD853F'); 
    
var gradientStroke7 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke7.addColorStop(0, '#008000');
    gradientStroke7.addColorStop(1, '#00FF00');   
    
var gradientStroke8 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke8.addColorStop(0, '#000080');
    gradientStroke8.addColorStop(1, '#0000FF');  
    
var gradientStroke9 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke9.addColorStop(0, '#4682B4');
    gradientStroke9.addColorStop(1, '#5F9EA0');    

var gradientStroke10 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke10.addColorStop(0, '#BDB76B');
    gradientStroke10.addColorStop(1, '#F0E68C');
      
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [title01, title02, title03, title04, title05, 
            title06, title07, title08, title09, title10
            ],
        
        datasets: [{
            backgroundColor: [
                gradientStroke1,
                gradientStroke2,
                gradientStroke3,
                gradientStroke4,
                gradientStroke5,
                gradientStroke6,
                gradientStroke7,
                gradientStroke8,
                gradientStroke9,
                gradientStroke10
            ],

            hoverBackgroundColor: [
                gradientStroke1,
                gradientStroke2,
                gradientStroke3,
                gradientStroke4,
                gradientStroke5,
                gradientStroke6,
                gradientStroke7,
                gradientStroke8,
                gradientStroke9,
                gradientStroke10
            ],

            data: [fulfilled01, fulfilled02, fulfilled03, fulfilled04, fulfilled05, 
                fulfilled06, fulfilled07, fulfilled08, fulfilled09, fulfilled10],
            borderWidth: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
        }]
    },
    options: {
	maintainAspectRatio: false,
        cutoutPercentage: 0,
        legend: {
            position: 'bottom',
            display: false,
            labels: {
                boxWidth:8
            }
        },
        tooltips: {
            displayColors:false,
        },
    }
});

// chart 31
Highcharts.chart('chart31', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        styledMode: true
    },
    credits: {
        enabled: false
    },
    title: {
        text: ''
    },
    //tooltip: {
    //    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    //},
    accessibility: {
        point: {
                valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Значение',
        colorByPoint: true,
        data: [{
                name: title05,
                y: fulfilled05,
                sliced: true,
                selected: true
        }, {
                name: title01,
                y: fulfilled01
        }, {
                name: title02,
                y: fulfilled02
        }, {
                name: title03,
                y: fulfilled03
        }, {
                name: title04,
                y: fulfilled04
        }, {
                name: title06,
                y: fulfilled06
        }, {
                name: title07,
                y: fulfilled07
        }, {
                name: title08,
                y: fulfilled08
        }, {
                name: title09,
                y: fulfilled09
        }, {
                name: title10,
                y: fulfilled10
        }]
    }]
});
	  
});	


