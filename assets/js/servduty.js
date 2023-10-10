$(function() {
    "use strict";
    
// chart 50
var point10 = $('div.hidden').data('point10');
var point20 = $('div.hidden').data('point20');
var point30 = $('div.hidden').data('point30');
var point40 = $('div.hidden').data('point40');

var ctx = document.getElementById('chart50').getContext('2d');
 
var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke1.addColorStop(0, '#00FF7F');
    gradientStroke1.addColorStop(1, 'rgba(22, 195, 233, 0.1)');

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Профицит',
                data: [point10, point20, point30, point40],
                lineTension: 0,
                pointBorderWidth: 2,
                pointHoverBackgroundColor: gradientStroke1,
                backgroundColor: gradientStroke1,
                borderColor: gradientStroke1,
                borderWidth: 3
            }]
        },
        options: {
	    maintainAspectRatio: false,
            legend:{
		position: 'bottom',
                display:false
            },
            tooltips:{
		displayColors:false,	
                mode: 'nearest',
                intersect: false,
                position: 'nearest',
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            }
        }
    });    
    
// chart 51
var point100 = $('div.hidden').data('point100');
var point200 = $('div.hidden').data('point200');
var point300 = $('div.hidden').data('point300');
var point400 = $('div.hidden').data('point400');

var ctx = document.getElementById('chart51').getContext('2d');
 
var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke1.addColorStop(0, '#00FF7F');
    gradientStroke1.addColorStop(1, 'rgba(22, 195, 233, 0.1)');

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Профицит',
                data: [point100, point200, point300, point400],
                lineTension: 0,
                pointBorderWidth: 2,
                pointHoverBackgroundColor: gradientStroke1,
                backgroundColor: gradientStroke1,
                borderColor: gradientStroke1,
                borderWidth: 3
            }]
        },
        options: {
	    maintainAspectRatio: false,
            legend:{
		position: 'bottom',
                display:false
            },
            tooltips:{
		displayColors:false,	
                mode: 'nearest',
                intersect: false,
                position: 'nearest',
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            }
        }
    });    
    
});    

