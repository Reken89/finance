$(function() {
    "use strict";

// chart 20
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
        labels: ["Безвозмездные поступления", "Налоговые и неналоговые"],
        datasets: [{
            backgroundColor: [
                gradientStroke1,
                gradientStroke2
            ],

            hoverBackgroundColor: [
                gradientStroke1,
                gradientStroke2
            ],

            data: [70, 50],
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
    
var gradientStroke15 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke15.addColorStop(0, '#CD5C5C');
    gradientStroke15.addColorStop(1, '#F08080');    
    
var gradientStroke16 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke16.addColorStop(0, '#00FA9A');
    gradientStroke16.addColorStop(1, '#00FF7F');  
    
var gradientStroke17 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke17.addColorStop(0, '#6B8E23');
    gradientStroke17.addColorStop(1, '#9ACD32');     

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Первый", "Второй", "Третий", "Четвертый", "Пятый", 
            "Шестой", "Седьмой", "Восьмой", "Девятый", "Десятый", 
            "Одинадцатый", "Двенадцатый", "Тринадцатый", "Четырнадцатый", 
            "Пятнадцатый", "Шестнадцатый", "Семнадцатый"],
        
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
                gradientStroke14,
                gradientStroke15,
                gradientStroke16,
                gradientStroke17
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
                gradientStroke14,
                gradientStroke15,
                gradientStroke16,
                gradientStroke17
            ],

            data: [50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50],
            borderWidth: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
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
   


