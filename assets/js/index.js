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
          }, {
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
	  
	 
// chart 2



   

// worl map

jQuery('#geographic-map-2').vectorMap(
{
    map: 'world_mill_en',
    backgroundColor: 'transparent',
    borderColor: '#818181',
    borderOpacity: 0.25,
    borderWidth: 1,
    zoomOnScroll: false,
    color: '#009efb',
    regionStyle : {
        initial : {
          fill : '#008cff'
        }
      },
    markerStyle: {
      initial: {
				r: 9,
				'fill': '#fff',
				'fill-opacity':1,
				'stroke': '#000',
				'stroke-width' : 5,
				'stroke-opacity': 0.4
                },
                },
    enableZoom: true,
    hoverColor: '#009efb',
    markers : [{
        latLng : [21.00, 78.00],
        name : 'Lorem Ipsum Dollar'
      
      }],
    hoverOpacity: null,
    normalizeFunction: 'linear',
    scaleColors: ['#b6d6ff', '#005ace'],
    selectedColor: '#c9dfaf',
    selectedRegions: [],
    showTooltip: true,
});


// chart 3

 var ctx = document.getElementById('chart3').getContext('2d');

  var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
      gradientStroke1.addColorStop(0, '#008cff');
      gradientStroke1.addColorStop(1, 'rgba(22, 195, 233, 0.1)');

      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
          datasets: [{
            label: 'Revenue',
            data: [3, 30, 10, 10, 22, 12, 5],
            pointBorderWidth: 2,
            pointHoverBackgroundColor: gradientStroke1,
            backgroundColor: gradientStroke1,
            borderColor: gradientStroke1,
            borderWidth: 3
          }]
        },
        options: {
			maintainAspectRatio: false,
            legend: {
			  position: 'bottom',
              display:false
            },
            tooltips: {
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



// chart 4

var ctx = document.getElementById("chart4").getContext('2d');

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

	  
  // chart 5

    var ctx = document.getElementById("chart5").getContext('2d');
   
      var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
      gradientStroke1.addColorStop(0, '#f54ea2');
      gradientStroke1.addColorStop(1, '#ff7676');

      var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
      gradientStroke2.addColorStop(0, '#42e695');
      gradientStroke2.addColorStop(1, '#3bb2b8');

      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [1, 2, 3, 4, 5, 6, 7, 8],
          datasets: [{
            label: 'Clothing',
            data: [40, 30, 60, 35, 60, 25, 50, 40],
            borderColor: gradientStroke1,
            backgroundColor: gradientStroke1,
            hoverBackgroundColor: gradientStroke1,
            pointRadius: 0,
            fill: false,
            borderWidth: 1
          }, {
            label: 'Electronic',
            data: [50, 60, 40, 70, 35, 75, 30, 20],
            borderColor: gradientStroke2,
            backgroundColor: gradientStroke2,
            hoverBackgroundColor: gradientStroke2,
            pointRadius: 0,
            fill: false,
            borderWidth: 1
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
		  scales: {
			  xAxes: [{
				barPercentage: .5
			  }]
		     },
			tooltips: {
			  displayColors:false,
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
            label: 'Доходы',
            data: [approvedd, approvedr, 0],
            borderColor: gradientStroke1,
            backgroundColor: gradientStroke1,
            hoverBackgroundColor: gradientStroke1,
            pointRadius: 0,
            fill: false,
            borderWidth: 0
          }, {
            label: 'Расходы',
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
                                    enabled: true
                            }
                    }
            },
            colors: ['#006400', '#00FF00'],
            series: [{
                    name: '0002',
                    data: [2, 2, 3, 2],
                    color: '#006400'
            }, {
                    name: '0001',
                    data: [3, 4, 4, 2],
                    color: '#00FF00'
            }]
                                         
	});


   });	 
   