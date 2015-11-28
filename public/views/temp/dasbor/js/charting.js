    var corporateMean = 3.3;
    var unitIndex1 = 2.8;
    var unitIndex2 = 3.8;
    var unitIndex3 = 4.2;
    var unitIndex4 = 3.4;
    var unitIndex5 = 2.2;

    var indexProgress = 3.4;
    var indexProcess = 3.2;
    var indexImplm = 2.8;



    var randomScalingFactor = function(){ return Math.round((Math.random()*5)*100)/100};
   var randomScalingFactor2 = function(){ return Math.floor(Math.random()*(5-1+1)) + 1};
   
    var randomNumber = function(){ return Math.floor(Math.random() * (100 - 40 + 1)) + 40};


$(function () {

    	$('#container-gauge').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false,
            margin : [0,0,0,0]
                     },

        title : '',

        credits : false,

        plotOptions:{
            series:{
                dataLabels : {
                    x : 0,
                    y : -40,
                    style : {
                        fontSize : '15px'
                    }
                }
            }
        },

        pane: {
            startAngle: -90,
            endAngle: 90,
            size : '120%',
            center : ['50%', '100%'],

            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#fff000',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 5,

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'index value'
            },
            plotBands: [{
                from: 0,
                to: 1.5,
                color: '#DF5353' // red
            }, {
                from: 1.5,
                to: 3,
                color: '#DDDF0D' // yellow
            }, {
                from: 3,
                to: 5,
                color: '#55BF3B' // green
            }]
        },

        series: [{
            name: 'Index',
            data: [corporateMean],
            tooltip: {
                valueSuffix: ''
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                
            }
        });
});

    $(function () {

        $('#container-gauge-progress').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false,
            margin : [0,0,0,0]
                     },

        title : {
            text : 'Progress'
        },

        credits : false,

        plotOptions:{
            series:{
                dataLabels : {
                    x : 0,
                    y : -40,
                    style : {
                        fontSize : '15px'
                    }
                }
            }
        },

        pane: {
            startAngle: -90,
            endAngle: 90,
            size : '70%',
            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#fff000',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 5,

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'index value'
            },
            plotBands: [{
                from: 0,
                to: 1.5,
                color: '#DF5353' // red
            }, {
                from: 1.5,
                to: 3,
                color: '#DDDF0D' // yellow
            }, {
                from: 3,
                to: 5,
                color: '#55BF3B' // green
            }]
        },

        series: [{
            name: 'Index',
            data: [indexProgress],
            tooltip: {
                valueSuffix: ''
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                
            }
        });
});

       $(function () {

        $('#container-gauge-process').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false,
            margin : [0,0,0,0]
                     },

       title : {
            text : 'Process'
        },

        credits : false,

        plotOptions:{
            series:{
                dataLabels : {
                    x : 0,
                    y : 30,
                    style : {
                        fontSize : '30px'
                    }
                }
            }
        },

        pane: {
            startAngle: -90,
            endAngle: 90,
            size : '70%',

            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#fff000',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 5,

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'index value'
            },
            plotBands: [{
                from: 0,
                to: 1.5,
                color: '#DF5353' // red
            }, {
                from: 1.5,
                to: 3,
                color: '#DDDF0D' // yellow
            }, {
                from: 3,
                to: 5,
                color: '#55BF3B' // green
            }]
        },

        series: [{
            name: 'Index',
            data: [indexProcess],
            tooltip: {
                valueSuffix: ''
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                
            }
        });
});
       $(function () {

        $('#container-gauge-imple').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false,
            margin : [0,0,0,0]
                     },

        title : {
            text : 'Implementation'
        },

        credits : false,

        plotOptions:{
            series:{
                dataLabels : {
                    x : 0,
                    y : 30,
                    style : {
                        fontSize : '30px'
                    }
                }
            }
        },

        pane: {
            startAngle: -90,
            endAngle: 90,
          size : '70%',

            background: [{
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                borderWidth: 0,
                outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#fff000',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 5,

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'index value'
            },
            plotBands: [{
                from: 0,
                to: 1.5,
                color: '#DF5353' // red
            }, {
                from: 1.5,
                to: 3,
                color: '#DDDF0D' // yellow
            }, {
                from: 3,
                to: 5,
                color: '#55BF3B' // green
            }]
        },

        series: [{
            name: 'Index',
            data: [indexImplm],
            tooltip: {
                valueSuffix: ''
            }
        }]

    },
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                
            }
        });
});


    var directory1 = randomScalingFactor();
    var directory2 = randomScalingFactor();
    var directory3 = randomScalingFactor();
    var directory4 = randomScalingFactor();
    var directory5 = randomScalingFactor();
    var directory6 = randomScalingFactor();
    var directory7 = randomScalingFactor();
    var directory8 = randomScalingFactor();


    $(function(){
        $('#directory-comparison').highcharts({
            chart:{
                type: 'bar'
            },
            
            title : '',

            legend :{
                enabled : false
            },
            xAxis: {
                categories : ['JKTDZ', 'JKTDI', 'JKTDO', 'JKTDQ', 'JKTDE', 'JKTDC','JKTDF','JKTDN'],
                
            },
            plotOptions :{
                    series : {
                        colorByPoint : true,
                        dataLabels : {
                            enabled : true,
                            align : 'right',
                            color : "#fff"
                        }
                    }
                },
            yAxis : {
                title : {
                    text: "Score"
                },
                plotLines : [
                {
                    color : 'red',
                    value : corporateMean,
                    width : '2',
                    zIndex : '100',
                    label: {
                        text: corporateMean
                    }
                }]
            },
            credits:{
                enabled : false
            },
            series : [{
                data : [directory1,
                 directory2,
                 directory3,
                 directory4,
                 directory5, directory6,
                 directory7, directory8]
            }],


        });
    });

    $(function(){
        $('#unit-comparison').highcharts({
            chart:{
                type: 'bar'
            },
            
            title : '',

            legend :{
                enabled : false
            },
            xAxis: {
                categories : ['Unit SM', 'Directory VP', 'JKTDI', 'Corporate'],
                
            },
            plotOptions :{
                    series : {
                        colorByPoint : true,
                        dataLabels : {
                            enabled : true,
                            align : 'right',
                            color : "#fff"
                        }
                    }
                },
            yAxis : {
                title : {
                    text: "Score"
                },
                plotLines : [
                {
                    color : 'red',
                    value : corporateMean,
                    width : '2',
                    zIndex : '100',
                    label: {
                        text: corporateMean
                    }
                }],
                max : 5
            },
            credits:{
                enabled : false
            },
            series : [{
                data : [unitIndex1, unitIndex4,
                unitIndex2,
                corporateMean]
            }],


        });
    });


    $(function(){
        $('#unit-comparison-vp').highcharts({
            chart:{
                type: 'bar'
            },
            
            title : '',

            legend :{
                enabled : false
            },
            xAxis: {
                categories : ['Directory VP', 'JKTDI', 'Corporate'],
                
            },
            plotOptions :{
                    series : {
                        colorByPoint : true,
                        dataLabels : {
                            enabled : true,
                            align : 'right',
                            color : "#fff"
                        }
                    }
                },
            yAxis : {
                title : {
                    text: "Score"
                },
                plotLines : [
                {
                    color : 'red',
                    value : corporateMean,
                    width : '2',
                    zIndex : '100',
                    label: {
                        text: corporateMean
                    }
                }],
                max : 5
            },
            credits:{
                enabled : false
            },
            series : [{
                data : [ unitIndex4,
                unitIndex2,
                corporateMean]
            }],


        });
    });

     $(function(){
        $('#list-question').highcharts({
            chart:{
                type: 'bar'
            },
            
            title : '',

            legend :{
                enabled : false
            },
            xAxis: {
                categories : ['Q1', 'Q2', 'Q3', 'Q4','Q5',
                'Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14',
                'Q15','Q16','Q17','Q18','Q19','Q20' ],
                
            },
            plotOptions :{
                    series : {
                        colorByPoint : true,
                        dataLabels : {
                            enabled : true,
                            align : 'right',
                            color : "#fff"
                        }
                    }
                },
            yAxis : {
                title : {
                    text: "Score"
                },
                
                max : 100
            },
            credits:{
                enabled : false
            },
            series : [{
                data : [randomNumber(),randomNumber(),randomNumber(),randomNumber(),randomNumber(),
                randomNumber(),randomNumber(),randomNumber(),randomNumber(),randomNumber(),
                randomNumber(),randomNumber(),randomNumber(),randomNumber(),randomNumber(),
                randomNumber(),randomNumber(),randomNumber(),randomNumber(),randomNumber()
                ]
            }],


        });
    });


$(function () {

    $('#sigr-container-chart').highcharts({

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: 'Progress',
            
        },

        pane: {
            size: '60%'
        },

        xAxis: {
            categories: ['Supportive', 'Rules', 'Goals', 'Innovative'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>'
        },

        credits : false,

       
        
        series: [{
            
            data: [9, 7, 1, 3],
            pointPlacement: 'off',
            showInLegend : false
        }]

    });
});


$(function () {

    $('#container-spider-progress').highcharts({

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: 'Progress',
            
        },

        pane: {
            size: '60%'
        },

      

        xAxis: {
            categories: ['Supportive', 'Rules', 'Goals', 'Innovative'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>'
        },

        credits : false,

       
        
        series: [{
            
            data: [9, 7, 1, 3],
            pointPlacement: 'off',
            marker : {
                enabled : true
            },
            showInLegend : false
        }]

    });
});



    $(function(){
        $('#flyhi-container-chart').highcharts({
            chart:{
                type: 'bar'
            },
            
            title : {
                text : 'Implementation'
            },

            legend :{
                enabled : false
            },
            xAxis: {
                categories : ['F', 'L', 'Y', 'H', 'I'],
                
            },
            plotOptions :{
                    series : {
                        colorByPoint : true,
                        dataLabels : {
                            enabled : true,
                            align : 'right',
                            color : "#fff"
                        }
                    }
                },
            yAxis : {
                title : {
                    text: "Score"
                },
                min: 0,
                max : 5
                
            },
            credits:{
                enabled : false
            },
            series : [{
                data : [randomScalingFactor2(), 
                randomScalingFactor2(),
                randomScalingFactor2(), randomScalingFactor2(),
                randomScalingFactor2()]
            }],


        });
    });


