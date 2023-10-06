$(function() {
    "use strict";
    
// chart 1
var janr = $('div.hidden').data('janr');
var febr = $('div.hidden').data('febr');
var marr = $('div.hidden').data('marr');
var aprr = $('div.hidden').data('aprr');
var mayr = $('div.hidden').data('mayr');
var junr = $('div.hidden').data('junr');
var julr = $('div.hidden').data('julr');
var augr = $('div.hidden').data('augr');
var sepr = $('div.hidden').data('sepr');
var octr = $('div.hidden').data('octr');
var novr = $('div.hidden').data('novr');
var decr = $('div.hidden').data('decr');
var jand = $('div.hidden').data('jand');
var febd = $('div.hidden').data('febd');
var mard = $('div.hidden').data('mard');
var aprd = $('div.hidden').data('aprd');
var mayd = $('div.hidden').data('mayd');
var jund = $('div.hidden').data('jund');
var juld = $('div.hidden').data('juld');
var augd = $('div.hidden').data('augd');
var sepd = $('div.hidden').data('sepd');
var octd = $('div.hidden').data('octd');
var novd = $('div.hidden').data('novd');
var decd = $('div.hidden').data('decd');

var ctx = document.getElementById("chart1").getContext('2d');
   
var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke1.addColorStop(0, '#008000');  
    gradientStroke1.addColorStop(1, '#32CD32'); 
   
var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke2.addColorStop(0, '#CD5C5C');
    gradientStroke2.addColorStop(1, '#F08080');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        datasets: [{
        label: 'Доходы',
        data: [jand, febd, mard, aprd, mayd, jund, juld, augd, sepd, octd, novd, decd],
        borderColor: gradientStroke1,
        backgroundColor: gradientStroke1,
        hoverBackgroundColor: gradientStroke1,
        pointRadius: 0,
        fill: false,
        borderWidth: 0
    },{
        label: 'Расходы',
        data: [janr, febr, marr, aprr, mayr, junr, julr, augr, sepr, octr, novr, decr],
        borderColor: gradientStroke2,
        backgroundColor: gradientStroke2,
        hoverBackgroundColor: gradientStroke2,
        pointRadius: 0,
        fill: false,
        borderWidth: 0
    }]
    },		
    options:{
	maintainAspectRatio: false,
	legend: {
	    position: 'bottom',
            display: false,
	    labels: {
                boxWidth:8
            }
        },
        tooltips:{
            displayColors:false,
        },	
        scales: {
            xAxes: [{
                barPercentage: .5
            }]
        }
    }
});
	  
// chart 6
var approvedd = $('div.hidden').data('approvedd');
var fulfilledd = $('div.hidden').data('fulfilledd');
var approvedr = $('div.hidden').data('approvedr');
var fulfilledr = $('div.hidden').data('fulfilledr');

var ctx = document.getElementById("chart6").getContext('2d');
   
var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke1.addColorStop(0, '#00008B');  
    gradientStroke1.addColorStop(1, '#0000CD'); 
   
var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke2.addColorStop(0, '#800080');
    gradientStroke2.addColorStop(1, '#FF00FF');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Доходы', 'Расходы'],
        datasets: [{
            label: '',
            data: [approvedd, approvedr, 0],
            borderColor: gradientStroke1,
            backgroundColor: gradientStroke1,
            hoverBackgroundColor: gradientStroke1,
            pointRadius: 0,
            fill: false,
            borderWidth: 0
        }, {
            label: '',
            data: [fulfilledd, fulfilledr, 0],
            borderColor: gradientStroke2,
            backgroundColor: gradientStroke2,
            hoverBackgroundColor: gradientStroke2,
            pointRadius: 0,
            fill: false,
            borderWidth: 0
        }]
    },		
    options:{
	maintainAspectRatio: false,
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
	scales: {
	    xAxes: [{
		barPercentage: .5
	    }]
	}
    }
});
         
// chart 15    
var d202001 = $('div.hidden').data('d202001');
var d202002 = $('div.hidden').data('d202002');
var d202101 = $('div.hidden').data('d202101');
var d202102 = $('div.hidden').data('d202102');
var d202201 = $('div.hidden').data('d202201');
var d202202 = $('div.hidden').data('d202202');
var d202301 = $('div.hidden').data('d202301');
var d202302 = $('div.hidden').data('d202302');
     
Highcharts.chart('chart15', {                          
    chart: {
        type: 'column'
        //styledMode: true
    },
    credits: {
        enabled: false
    },
    title: {
        text: 'Динамика доходов бюджета'
    },
    xAxis: {
        categories: ['2020', '2021', '2022', '2023']
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style && Highcharts.defaultOptions.title.style.color) || 'gray'

            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Итого: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                //enabled: true
            }
        }
    },
    colors: ['#006400', '#00FF00'],
    series: [{
        name: 'Безвозмездные поступления',
        data: [d202002, d202102, d202202, d202302],
        color: '#006400'
    }, {
        name: 'Налоговые и неналоговые',
        data: [d202001, d202101, d202201, d202301],
        color: '#00FF00'
    }]                                        
});

// chart 16  
var r2020 = $('div.hidden').data('r2020');
var r2021 = $('div.hidden').data('r2021');
var r2022 = $('div.hidden').data('r2022');
var r2023 = $('div.hidden').data('r2023');
    
Highcharts.chart('chart16', {                           
    chart: {
        type: 'column'
        //styledMode: true
    },
    credits: {
        enabled: false
    },
    title: {
        text: 'Динамика расходов бюджета'
    },
    xAxis: {
        categories: ['2020', '2021', '2022', '2023']
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: ( // theme
                    Highcharts.defaultOptions.title.style && Highcharts.defaultOptions.title.style.color) || 'gray'
            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        //pointFormat: '{series.name}: {point.y}<br/>Итого: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                //enabled: true
            }
        }
    },
    colors: ['#CD5C5C'],
    series: [{
        name: 'Всего',
        data: [r2020, r2021, r2022, r2023],
        color: '#CD5C5C'
    }]                                        
});

});	 
   