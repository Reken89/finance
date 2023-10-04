$(function() {
    "use strict";

// chart 20
var ctx = document.getElementById("chart20").getContext('2d');

var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke1.addColorStop(0, '#ee0979');
    gradientStroke1.addColorStop(1, '#ff6a00');
    
var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke2.addColorStop(0, '#283c86');
    gradientStroke2.addColorStop(1, '#39bd3c');

var gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke3.addColorStop(0, '#7f00ff');
    gradientStroke3.addColorStop(1, '#e100ff');

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Completed", "Pending", "Process"],
        datasets: [{
            backgroundColor: [
                gradientStroke1,
                gradientStroke2,
                gradientStroke3
            ],

            hoverBackgroundColor: [
                gradientStroke1,
                gradientStroke2,
                gradientStroke3
            ],

            data: [50, 50, 50],
            borderWidth: [1, 1, 1]
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
	  
});	 
   


