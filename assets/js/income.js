$(function() {
    "use strict";

// chart 20
var title01 = $('div.hidden').data('title01');
var title02 = $('div.hidden').data('title02');
var fulfilled01 = $('div.hidden').data('fulfilled01');
var fulfilled02 = $('div.hidden').data('fulfilled02');

var ctx = document.getElementById("chart20").getContext('2d');

var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke1.addColorStop(0, '#C71585');
    gradientStroke1.addColorStop(1, '#FF4500');
    
var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke2.addColorStop(0, '#228B22');
    gradientStroke2.addColorStop(1, '#00FF7F');

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [title02, title01],
        datasets: [{
            backgroundColor: [
                gradientStroke1,
                gradientStroke2
            ],

            hoverBackgroundColor: [
                gradientStroke1,
                gradientStroke2
            ],

            data: [fulfilled02, fulfilled01],
            borderWidth: [1, 1]
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

// chart 21
var title001 = $('div.hidden').data('title001');
var title002 = $('div.hidden').data('title002');
var title003 = $('div.hidden').data('title003');
var title004 = $('div.hidden').data('title004');
var title005 = $('div.hidden').data('title005');
var title006 = $('div.hidden').data('title006');
var title007 = $('div.hidden').data('title007');
var title008 = $('div.hidden').data('title008');
var title009 = $('div.hidden').data('title009');
var title010 = $('div.hidden').data('title010');
var title011 = $('div.hidden').data('title011');
var title012 = $('div.hidden').data('title012');
var title013 = $('div.hidden').data('title013');
var title014 = $('div.hidden').data('title014');

var fulfilled001 = $('div.hidden').data('fulfilled001');
var fulfilled002 = $('div.hidden').data('fulfilled002');
var fulfilled003 = $('div.hidden').data('fulfilled003');
var fulfilled004 = $('div.hidden').data('fulfilled004');
var fulfilled005 = $('div.hidden').data('fulfilled005');
var fulfilled006 = $('div.hidden').data('fulfilled006');
var fulfilled007 = $('div.hidden').data('fulfilled007');
var fulfilled008 = $('div.hidden').data('fulfilled008');
var fulfilled009 = $('div.hidden').data('fulfilled009');
var fulfilled010 = $('div.hidden').data('fulfilled010');
var fulfilled011 = $('div.hidden').data('fulfilled011');
var fulfilled012 = $('div.hidden').data('fulfilled012');
var fulfilled013 = $('div.hidden').data('fulfilled013');
var fulfilled014 = $('div.hidden').data('fulfilled014');

/*
var ctx = document.getElementById("chart21").getContext('2d');

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
    
var gradientStroke11 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke11.addColorStop(0, '#8B0000');
    gradientStroke11.addColorStop(1, '#FF0000');    
    
var gradientStroke12 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke12.addColorStop(0, '#7FFF00');
    gradientStroke12.addColorStop(1, '#ADFF2F');   
    
var gradientStroke13 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke13.addColorStop(0, '#FF00FF');
    gradientStroke13.addColorStop(1, '#EE82EE'); 
    
var gradientStroke14 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke14.addColorStop(0, '#006400');
    gradientStroke14.addColorStop(1, '#228B22'); 
      
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [title001, title002, title003, title004, title005, 
            title006, title007, title008, title009, title010, 
            title011, title012, title013, title014 
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
                gradientStroke10,
                gradientStroke11,
                gradientStroke12,
                gradientStroke13,
                gradientStroke14
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
                gradientStroke10,
                gradientStroke11,
                gradientStroke12,
                gradientStroke13,
                gradientStroke14
            ],

            data: [fulfilled001, fulfilled002, fulfilled003, fulfilled004, fulfilled005, 
                fulfilled006, fulfilled007, fulfilled008, fulfilled009, fulfilled010, 
                fulfilled011, fulfilled012, fulfilled013, fulfilled014],
            borderWidth: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
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
      
 */

// chart 22
Highcharts.chart('chart22', {
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
                name: title013,
                y: fulfilled013,
                sliced: true,
                selected: true
        }, {
                name: title001,
                y: fulfilled001
        }, {
                name: title002,
                y: fulfilled002
        }, {
                name: title003,
                y: fulfilled003
        }, {
                name: title004,
                y: fulfilled004
        }, {
                name: title005,
                y: fulfilled005
        }, {
                name: title006,
                y: fulfilled006
        }, {
                name: title007,
                y: fulfilled007
        }, {
                name: title008,
                y: fulfilled008
        }, {
                name: title014,
                y: fulfilled014
        }, {
                name: title010,
                y: fulfilled010
        }, {
                name: title011,
                y: fulfilled011
        }, {
                name: title012,
                y: fulfilled012
        }, {
                name: title009,
                y: fulfilled009
        }]
    }]
});
	  
});	 
   


