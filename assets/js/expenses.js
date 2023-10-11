$(function() {
    "use strict";

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


