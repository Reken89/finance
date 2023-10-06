$(function() {
    "use strict";

// chart 40
var point01 = $('div.hidden').data('point01');
var point02 = $('div.hidden').data('point02');
var point03 = $('div.hidden').data('point03');
var point04 = $('div.hidden').data('point04');

var ctx = document.getElementById('chart40').getContext('2d');
 
var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke1.addColorStop(0, '#008cff');
    gradientStroke1.addColorStop(1, 'rgba(22, 195, 233, 0.1)');

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Значение',
                data: [point01, point02, point03, point04],
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





