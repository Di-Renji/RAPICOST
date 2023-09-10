var options = {
	series: [{
		name: 'Likes',
		data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5]
	}],
	chart: {
		height: 350,
		type: 'line',
		toolbar: {
			show: false,
		}
	},
	grid: {
		show: false,
		padding: {
			left: 0,
			right: 0
		}
	},
	stroke: {
		width: 7,
		curve: 'smooth'
	},
	xaxis: {
		type: 'datetime',
		categories: ['1/11/2020', '2/11/2020', '3/11/2020', '4/11/2020', '5/11/2020', '6/11/2020', '7/11/2020', '8/11/2020', '9/11/2020', '10/11/2020', '11/11/2020', '12/11/2020', '1/11/2021', '2/11/2021', '3/11/2021','4/11/2021' ,'5/11/2021' ,'6/11/2021'],
	},
	title: {
		text: 'Social Media',
		align: 'left',
		style: {
			fontSize: "16px",
			color: '#666'
		}
	},
	fill: {
		type: 'gradient',
		gradient: {
			shade: 'dark',
			gradientToColors: [ '#1b00ff'],
			shadeIntensity: 1,
			type: 'horizontal',
			opacityFrom: 1,
			opacityTo: 1,
			stops: [0, 100, 100, 100]
		},
	},
	markers: {
		size: 4,
		colors: ["#FFA41B"],
		strokeColors: "#fff",
		strokeWidth: 2,
		hover: {
			size: 7,
		}
	},
	yaxis: {
		min: -10,
		max: 40,
		title: {
			text: 'Engagement',
		},
	}
};
var chart = new ApexCharts(document.querySelector("#chart1"), options);
chart.render();

var options2 = {
	series: [{
		name: 'series1',
		data: [31, 40, 28, 51, 42, 109, 100]
	}, {
		name: 'series2',
		data: [11, 32, 45, 32, 34, 52, 41]
	}],
	chart: {
		height: 350,
		type: 'area',
		toolbar: {
			show: false,
		}
	},
	grid: {
		show: false,
		padding: {
			left: 0,
			right: 0
		}
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		curve: 'smooth'
	},
	xaxis: {
		type: 'datetime',
		categories: ["2020-09-19T00:00:00.000Z", "2020-09-19T01:30:00.000Z", "2020-09-19T02:30:00.000Z", "2020-09-19T03:30:00.000Z", "2020-09-19T04:30:00.000Z", "2020-09-19T05:30:00.000Z", "2020-09-19T06:30:00.000Z"]
	},
	tooltip: {
		x: {
			format: 'dd/MM/yy HH:mm'
		},
	},
};
var chart = new ApexCharts(document.querySelector("#chart2"), options2);
chart.render();

var options3 = {
	series: [{
		name: 'Modelo Z1DM',
		data: [89, 75, 85, 80, 80, 92, 78, 61, 75]
	}, {
		name: 'Modelo SZ0R',
		data: [138, 130, 145, 149, 135, 166, 150, 143, 133]
	}, {
		name: 'Modelo ZW96',
		data: [70, 68, 70, 75, 72, 63, 77, 69, 54]
	}, {
		name: 'Modelo BP5J',
		data: [119, 125, 112, 106, 109, 102, 117, 106, 120]
	}, {
		name: 'Modelo CD02',
		data: [75, 70, 73, 79, 77, 70, 80, 81, 75]
	}
	, {
		name: 'Modelo CV2277',
		data: [55, 50, 44, 48, 51, 49, 40, 38, 53]
	}],
	chart: {
		type: 'bar',
		height: 350,
		toolbar: {
			show: false,
		}
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '60%',
			endingShape: 'rounded'
		},
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		show: true,
		width: 2,
		colors: ['transparent']
	},
	xaxis: {
		categories: ['Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct'],
	},
	yaxis: {
		title: {
			text: 'Costo de Producción (S/.) '
		}
	},
	fill: {
		opacity: 1
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return "S/. " + val + " Soles"
			}
		}
	}
};
var chart = new ApexCharts(document.querySelector("#chart3"), options3);
chart.render();




var options32 = {
	series: [{
		name: 'Modelo Z1DM',
		data: [105, 90, 90, 97, 100, 112, 98, 87, 102]
	}, {
		name: 'Modelo SZ0R',
		data: [158, 150, 165, 169, 165, 176, 165, 160, 159]
	}, {
		name: 'Modelo ZW96',
		data: [83, 76, 89, 95, 91, 83, 97, 89, 77]
	}, {
		name: 'Modelo BP5J',
		data: [139, 145, 122, 126, 129, 122, 137, 126, 140]
	}, {
		name: 'Modelo CD02',
		data: [95, 90, 93, 99, 97, 90, 100, 101, 95]
	}
	, {
		name: 'Modelo CV2277',
		data: [75, 70, 66, 68, 71, 69, 60, 58, 73]
	}],
	chart: {
		type: 'bar',
		height: 350,
		toolbar: {
			show: false,
		}
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '60%',
			endingShape: 'rounded'
		},
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		show: true,
		width: 2,
		colors: ['transparent']
	},
	xaxis: {
		categories: ['Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct'],
	},
	yaxis: {
		title: {
			text: 'Precio de Venta (S/.) '
		}
	},
	fill: {
		opacity: 1
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return "S/. " + val + " Soles"
			}
		}
	}
};
var chart2 = new ApexCharts(document.querySelector("#chart32"), options32);
chart2.render();




var options4 = {
	series: [{
		data: [44, 55, 41, 64, 22, 43, 21]
	}, {
		data: [53, 32, 33, 52, 13, 44, 32]
	}],
	chart: {
		type: 'bar',
		height: 430,
		toolbar: {
			show: false,
		}
	},
	grid: {
		show: false,
		padding: {
			left: 0,
			right: 0
		}
	},
	plotOptions: {
		bar: {
			horizontal: true,
			dataLabels: {
				position: 'top',
			},
		}
	},
	dataLabels: {
		enabled: true,
		offsetX: -6,
		style: {
			fontSize: '12px',
			colors: ['#fff']
		}
	},
	stroke: {
		show: true,
		width: 1,
		colors: ['#fff']
	},
	xaxis: {
		categories: [2014, 2015, 2016, 2017, 2018, 2019, 2020],
	},
};
var chart = new ApexCharts(document.querySelector("#chart4"), options4);
chart.render();

var options5 = {
	series: [{
		name: 'Modelo Z1DM',
		type: 'line',
		data: [20, 15, 13, 10, 16, 12, 12, 19, 12, 14, 17]
	}, {
		name: 'Modelo SZ0R',
		type: 'line',
		data: [30, 39, 40, 37, 31, 34, 32, 37, 32, 35, 33]
	}, {
		name: 'Modelo ZW96',
		type: 'line',
		data: [12, 10, 10, 10, 14, 17, 11, 15, 12, 10, 18]
	}, {
		name: 'Modelo BP5J',
		type: 'line',
		data: [25, 17, 13, 14, 15, 20, 22, 23, 20, 19, 18]
	}, {
		name: 'Modelo CD02',
		type: 'line',
		data: [19, 23, 15, 12, 15, 10, 10, 15, 17, 14, 20]
	}, {
		name: 'Modelo CV2277',
		type: 'line',
		data: [22, 15, 16, 13, 20, 19, 17, 21, 18, 16, 15]
	}],
	chart: {
		height: 350,
		type: 'line',
		stacked: false,
		toolbar: {
			show: false,
		}
	},
	grid: {
		show: false,
		padding: {
			left: 0,
			right: 0
		}
	},
	stroke: {
		width: [5, 5, 5, 5, 5, 5],
		curve: 'smooth'
	},
	plotOptions: {
		bar: {
			columnWidth: '20%'
		}
	},

	fill: {
		opacity: [1, 1, 1, 1, 1],
		gradient: {
			inverseColors: false,
			shade: 'light',
			type: "vertical",
			opacityFrom: 0.85,
			opacityTo: 0.55,
			stops: [0, 100, 100, 100]
		}
	},
	labels: ['01/01/2020', '02/01/2020', '03/01/2020', '04/01/2020', '05/01/2020', '06/01/2020', '07/01/2020',
	'08/01/2020', '09/01/2020', '10/01/2020', '11/01/2020'
	],
	markers: {
		size: 0
	},
	xaxis: {
		categories: ['Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
	},
	yaxis: {
		title: {
			text: 'Margen de Ganancia (S/.)',
		},
		min: 0
	},
	tooltip: {
		shared: true,
		intersect: false,
		y: {
			formatter: function (y) {
				if (typeof y !== "undefined") {
					return y.toFixed(0) + " soles";
				}
				return y;

			}
		}
	}
};
var chart = new ApexCharts(document.querySelector("#chart5"), options5);
chart.render();

var options6 = {
	series: [
	{
		name: 'Bob',
		data: [
		{
			x: 'Design',
			y: [
			new Date('2020-03-05').getTime(),
			new Date('2020-03-08').getTime()
			]
		},
		{
			x: 'Code',
			y: [
			new Date('2020-03-02').getTime(),
			new Date('2020-03-05').getTime()
			]
		},
		{
			x: 'Code',
			y: [
			new Date('2020-03-05').getTime(),
			new Date('2020-03-07').getTime()
			]
		},
		{
			x: 'Test',
			y: [
			new Date('2020-03-03').getTime(),
			new Date('2020-03-09').getTime()
			]
		},
		{
			x: 'Test',
			y: [
			new Date('2020-03-08').getTime(),
			new Date('2020-03-11').getTime()
			]
		},
		{
			x: 'Validation',
			y: [
			new Date('2020-03-11').getTime(),
			new Date('2020-03-16').getTime()
			]
		},
		{
			x: 'Design',
			y: [
			new Date('2020-03-01').getTime(),
			new Date('2020-03-03').getTime()
			]
		}
		]
	},
	{
		name: 'Joe',
		data: [
		{
			x: 'Design',
			y: [
			new Date('2020-03-02').getTime(),
			new Date('2020-03-05').getTime()
			]
		},
		{
			x: 'Test',
			y: [
			new Date('2020-03-06').getTime(),
			new Date('2020-03-16').getTime()
			]
		},
		{
			x: 'Code',
			y: [
			new Date('2020-03-03').getTime(),
			new Date('2020-03-07').getTime()
			]
		},
		{
			x: 'Deployment',
			y: [
			new Date('2020-03-20').getTime(),
			new Date('2020-03-22').getTime()
			]
		},
		{
			x: 'Design',
			y: [
			new Date('2020-03-10').getTime(),
			new Date('2020-03-16').getTime()
			]
		}
		]
	},
	{
		name: 'Dan',
		data: [
		{
			x: 'Code',
			y: [
			new Date('2020-03-10').getTime(),
			new Date('2020-03-17').getTime()
			]
		},
		{
			x: 'Validation',
			y: [
			new Date('2020-03-05').getTime(),
			new Date('2020-03-09').getTime()
			]
		},
		]
	}
	],
	chart: {
		height: 450,
		type: 'rangeBar',
		toolbar: {
			show: false,
		}
	},
	grid: {
		show: false,
		padding: {
			left: 0,
			right: 0
		}
	},
	plotOptions: {
		bar: {
			horizontal: true,
			barHeight: '80%'
		}
	},
	xaxis: {
		type: 'datetime'
	},
	stroke: {
		width: 1
	},
	fill: {
		type: 'solid',
		opacity: 0.6
	},
	legend: {
		position: 'top',
		horizontalAlign: 'left'
	}
};
var chart = new ApexCharts(document.querySelector("#chart6"), options6);
chart.render();

var options7 = {
	series: [{
		data: [{
			x: new Date(1538778600000),
			y: [6629.81, 6650.5, 6623.04, 6633.33]
		},
		{
			x: new Date(1538780400000),
			y: [6632.01, 6643.59, 6620, 6630.11]
		},
		{
			x: new Date(1538782200000),
			y: [6630.71, 6648.95, 6623.34, 6635.65]
		},
		{
			x: new Date(1538784000000),
			y: [6635.65, 6651, 6629.67, 6638.24]
		},
		{
			x: new Date(1538785800000),
			y: [6638.24, 6640, 6620, 6624.47]
		},
		{
			x: new Date(1538787600000),
			y: [6624.53, 6636.03, 6621.68, 6624.31]
		},
		{
			x: new Date(1538789400000),
			y: [6624.61, 6632.2, 6617, 6626.02]
		},
		{
			x: new Date(1538791200000),
			y: [6627, 6627.62, 6584.22, 6603.02]
		},
		{
			x: new Date(1538793000000),
			y: [6605, 6608.03, 6598.95, 6604.01]
		},
		{
			x: new Date(1538794800000),
			y: [6604.5, 6614.4, 6602.26, 6608.02]
		},
		{
			x: new Date(1538796600000),
			y: [6608.02, 6610.68, 6601.99, 6608.91]
		},
		{
			x: new Date(1538798400000),
			y: [6608.91, 6618.99, 6608.01, 6612]
		},
		{
			x: new Date(1538800200000),
			y: [6612, 6615.13, 6605.09, 6612]
		},
		{
			x: new Date(1538802000000),
			y: [6612, 6624.12, 6608.43, 6622.95]
		},
		{
			x: new Date(1538803800000),
			y: [6623.91, 6623.91, 6615, 6615.67]
		},
		{
			x: new Date(1538805600000),
			y: [6618.69, 6618.74, 6610, 6610.4]
		},
		{
			x: new Date(1538807400000),
			y: [6611, 6622.78, 6610.4, 6614.9]
		},
		{
			x: new Date(1538809200000),
			y: [6614.9, 6626.2, 6613.33, 6623.45]
		},
		{
			x: new Date(1538811000000),
			y: [6623.48, 6627, 6618.38, 6620.35]
		},
		{
			x: new Date(1538812800000),
			y: [6619.43, 6620.35, 6610.05, 6615.53]
		},
		{
			x: new Date(1538814600000),
			y: [6615.53, 6617.93, 6610, 6615.19]
		},
		{
			x: new Date(1538816400000),
			y: [6615.19, 6621.6, 6608.2, 6620]
		},
		{
			x: new Date(1538818200000),
			y: [6619.54, 6625.17, 6614.15, 6620]
		},
		{
			x: new Date(1538820000000),
			y: [6620.33, 6634.15, 6617.24, 6624.61]
		},
		{
			x: new Date(1538821800000),
			y: [6625.95, 6626, 6611.66, 6617.58]
		},
		{
			x: new Date(1538823600000),
			y: [6619, 6625.97, 6595.27, 6598.86]
		},
		{
			x: new Date(1538825400000),
			y: [6598.86, 6598.88, 6570, 6587.16]
		},
		{
			x: new Date(1538827200000),
			y: [6588.86, 6600, 6580, 6593.4]
		},
		]
	}],
	chart: {
		type: 'candlestick',
		height: 350,
		toolbar: {
			show: false,
		}
	},
	grid: {
		show: false,	},
	title: {
		text: 'CandleStick Chart',
		align: 'left'
	},
	xaxis: {
		type: 'datetime'
	},
	yaxis: {
		tooltip: {
			enabled: true
		}
	}
};
var chart = new ApexCharts(document.querySelector("#chart7"), options7);
chart.render();

var options8 = {
	series: [44, 55, 41, 17, 15],
	chart: {
		type: 'donut',
	},
	responsive: [{
		breakpoint: 480,
		options: {
			chart: {
				width: 200
			},
			legend: {
				position: 'bottom'
			}
		}
	}]
};
var chart = new ApexCharts(document.querySelector("#chart8"), options8);
chart.render();

var options9 = {
	series: [76, 67, 61, 90],
	chart: {
		height: 390,
		type: 'radialBar',
	},
	plotOptions: {
		radialBar: {
			offsetY: 0,
			startAngle: 0,
			endAngle: 270,
			hollow: {
				margin: 5,
				size: '40%',
				background: 'transparent',
				image: undefined,
			},
			dataLabels: {
				name: {
					show: false,
				},
				value: {
					show: false,
				}
			}
		}
	},
	colors: ['#1ab7ea', '#0084ff', '#39539E', '#0077B5'],
	labels: ['Vimeo', 'Messenger', 'Facebook', 'LinkedIn'],
	legend: {
		show: true,
		floating: true,
		fontSize: '14px',
		position: 'left',
		offsetX: 40,
		offsetY: 15,
		labels: {
			useSeriesColors: true,
		},
		markers: {
			size: 0
		},
		formatter: function(seriesName, opts) {
			return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
		},
		itemMargin: {
			vertical: 3
		}
	},
	responsive: [{
		breakpoint: 480,
		options: {
			legend: {
				show: false
			}
		}
	}]
};
var chart = new ApexCharts(document.querySelector("#chart9"), options9);
chart.render();