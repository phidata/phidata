var ChartsAmcharts = function() {

    var initChartSample1 = function() {
        // var chart = AmCharts.makeChart("chart_1", {
        //     "type": "serial",
        //     "theme": "light",
        //     "pathToImages": Metronic.getGlobalPluginsPath() + "img/",
        //     "autoMargins": false,
        //     "marginLeft": 50,
        //     "marginRight": 8,
        //     "marginTop": 10,
        //     "marginBottom": 26,
        //
        //     "fontFamily": 'Open Sans',
        //     "color":    '#888',
        //
        //     "dataProvider": [{
        //         "month": 1,
        //         "income": 210,
        //         "expenses": 210
        //     }, {
        //         "month": 2,
        //         "income": 230,
        //         "expenses": 20
        //     }, {
        //         "month": 3,
        //         "income": 260,
        //         "expenses": 30
        //     }, {
        //         "month": 4,
        //         "income": 270,
        //         "expenses": 10
        //     }, {
        //         "month": 5,
        //         "income": 350,
        //         "expenses": 80,
        //         "dashLengthLine": 5
        //     }, {
        //         "month": 6,
        //         "income": 400,
        //         "expenses": 50,
        //         "dashLengthColumn": 5
        //     },{
        //         "month": 7,
        //         "income": 420,
        //         "expenses": 20,
        //         "dashLengthColumn": 5
        //     },{
        //         "month": 8,
        //         "income": 440,
        //         "expenses": 40,
        //         "dashLengthColumn": 5
        //     },{
        //         "month": 9,
        //         "income": 500,
        //         "expenses": 60,
        //         "dashLengthColumn": 5
        //     },{
        //         "month": 10,
        //         "income": 600,
        //         "expenses": 100,
        //         "dashLengthColumn": 5
        //     },{
        //         "month": 11,
        //         "income": 800,
        //         "expenses": 200,
        //         "dashLengthColumn": 5
        //     },{
        //         "month": 12,
        //         "income": 1500,
        //         "expenses": 700,
        //         "dashLengthColumn": 5,
        //         "alpha": 0.2,
        //         "additional": "(projection)"
        //     }],
        //     "valueAxes": [{
        //         "axisAlpha": 0,
        //         "position": "left"
        //     }],
        //     "startDuration": 1,
        //     "graphs": [{
        //         "alphaField": "alpha",
        //         "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>",
        //         "dashLengthField": "dashLengthColumn",
        //         "fillAlphas": 1,
        //         "title": "新用户量",
        //         "type": "column",
        //         "valueField": "income"
        //     }, {
        //         "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>",
        //         "bullet": "round",
        //         "dashLengthField": "dashLengthLine",
        //         "lineThickness": 3,
        //         "bulletSize": 7,
        //         "bulletBorderAlpha": 1,
        //         "bulletColor": "#FFFFFF",
        //         "useLineColorForBulletBorder": true,
        //         "bulletBorderThickness": 3,
        //         "fillAlphas": 0,
        //         "lineAlpha": 1,
        //         "title": "增加量",
        //         "valueField": "expenses"
        //     }],
        //     "categoryField": "month",
        //     "categoryAxis": {
        //         "gridPosition": "start",
        //         "axisAlpha": 0,
        //         "tickLength": 0
        //     }
        // });
        var chart = AmCharts.makeChart("chart_1", {
            "type": "serial",
            "theme": "light",
            "legend": {
                "horizontalGap": 10,
                "maxColumns": 1,
                "position": "right",
                "useGraphSettings": true,
                "markerSize": 10
            },
            "dataProvider": [{
                "month": 1,
                "agent": 2.5,
                "recycler": 2.5,
                "commonuser": 2.1
            }, {
                "month": 2,
                "agent": 2.6,
                "recycler": 2.7,
                "commonuser": 2.8
            }, {
                "month": 3,
                "agent": 2.7,
                "recycler": 2.7,
                "commonuser": 3.0
            }, {
                "month": 4,
                "agent": 2.7,
                "recycler": 2.8,
                "commonuser": 3.3
            }, {
                "month": 5,
                "agent": 2.7,
                "recycler": 2.8,
                "commonuser": 4.1
            }, {
                "month": 6,
                "agent": 2.8,
                "recycler": 2.9,
                "commonuser": 5.1
            }, {
                "month": 7,
                "agent": 2.9,
                "recycler": 3.1,
                "commonuser": 5.5
            }, {
                "month": 8,
                "agent": 3.2,
                "recycler": 3.5,
                "commonuser": 6
            }, {
                "month": 9,
                "agent": 3.3,
                "recycler": 5.2,
                "commonuser": 8.1
            }, {
                "month": 10,
                "agent": 3.3,
                "recycler": 5.2,
                "commonuser": 8.1
            }, {
                "month": 11,
                "agent": 3.3,
                "recycler": 5.2,
                "commonuser": 8.1
            }, {
                "month": 12,
                "agent": 3.3,
                "recycler": 5.2,
                "commonuser": 8.1
            }],
            "valueAxes": [{
                "stackType": "regular",
                "axisAlpha": 0.3,
                "gridAlpha": 0
            }],
            "graphs": [{
                "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                "fillAlphas": 0.8,
                "labelText": "[[value]]",
                "lineAlpha": 0.3,
                "title": "区域代理商",
                "type": "column",
                "color": "#000000",
                "valueField": "agent"
            }, {
                "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                "fillAlphas": 0.8,
                "labelText": "[[value]]",
                "lineAlpha": 0.3,
                "title": "回收站商户",
                "type": "column",
                "color": "#000000",
                "valueField": "recycler"
            }, {
                "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                "fillAlphas": 0.8,
                "labelText": "[[value]]",
                "lineAlpha": 0.3,
                "title": "普通用户",
                "type": "column",
                "color": "#000000",
                "valueField": "commonuser"
            }],
            "categoryField": "month",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "gridAlpha": 0,
                "position": "left"
            },
            "export": {
                "enabled": true
            }

        });

        $('#chart_1').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }

    

    var initChartSample3 = function() {
        var chart = AmCharts.makeChart("chart_3", {
            "type": "serial",
            "theme": "light",

            "fontFamily": 'Open Sans',            
            "color":    '#888888',
            
            "pathToImages": Metronic.getGlobalPluginsPath() + "img/",

            "dataProvider": [{
                "lineColor": "#b7e021",  
                "date": "2016-01",
                "duration": 210
            }, {
                "date": "2016-02",
                "duration": 230
            }, {
                "date": "2016-03",
                "duration": 260
            }, {
                "date": "2016-04",
                "duration": 270
            }, {
                "lineColor": "#fbd51a",
                "date": "2016-05",
                "duration": 350
            }, {
                "date": "2016-06",
                "duration": 400
            }, {
                "date": "2016-07",
                "duration": 420
            }, {
                "date": "2016-08",
                "duration": 440,
                "lineColor": "#2498d2"
            }, {
                "date": "2016-09",
                "duration": 500
            }, {
                "date": "2016-10",
                "duration": 600
            }, {
                "date": "2016-11",
                "duration": 800
            }, {
                "date": "2016-12",
                "duration": 1500
            }],
            "balloon": {
                "cornerRadius": 6
            },
            "valueAxes": [{
                "duration": "",
                "durationUnits": {
                    "hh": "h ",
                    "mm": "min"
                },
                "axisAlpha": 0
            }],
            "graphs": [{
                "bullet": "square",
                "bulletBorderAlpha": 1,
                "bulletBorderThickness": 1,
                "fillAlphas": 0.3,
                "fillColorsField": "lineColor",
                "legendValueText": "[[value]]",
                "lineColorField": "lineColor",
                "title": "duration",
                "valueField": "duration"
            }],
            "chartScrollbar": {},
            "chartCursor": {
                "categoryBalloonDateFormat": "YYYY MMM",
                "cursorAlpha": 0,
                "zoomable": false
            },
            "dataDateFormat": "YYYY-MM-DD",
            "categoryField": "date",
            "categoryAxis": {
                "dateFormats": [{
                    "period": "DD",
                    "format": "DD"
                }, {
                    "period": "WW",
                    "format": "MMM DD"
                }, {
                    "period": "MM",
                    "format": "MMM"
                }, {
                    "period": "YYYY",
                    "format": "YYYY"
                }],
                "parseDates": true,
                "autoGridCount": false,
                "axisColor": "#555555",
                "gridAlpha": 0,
                "gridCount": 50
            }
        });

        $('#chart_3').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }

  

   

    var initChartSample7 = function() {
        var chart = AmCharts.makeChart("chart_7", {
            "type": "pie",
            "theme": "light",

            "fontFamily": 'Open Sans',
            
            "color":    '#888',

            "dataProvider": [{
                "kind": "洗衣机",
                "value": 260
            }, {
                "kind": "手机",
                "value": 201
            }, {
                "kind": "平板",
                "value": 165
            }, {
                "kind": "电视机",
                "value": 239
            }, {
                "kind": "电脑",
                "value": 139
            }, {
                "kind": "冰箱",
                "value": 110
            }],
            "valueField": "value",
            "titleField": "kind",
            "outlineAlpha": 0.4,
            "depth3D": 15,
            "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
            "angle": 30,
            "exportConfig": {
                menuItems: [{
                    icon: '/lib/3/images/export.png',
                    format: 'png'
                }]
            }
        });

        jQuery('.chart_7_chart_input').off().on('input change', function() {
            var property = jQuery(this).data('property');
            var target = chart;
            var value = Number(this.value);
            chart.startDuration = 0;

            if (property == 'innerRadius') {
                value += "%";
            }

            target[property] = value;
            chart.validateNow();
        });

        $('#chart_7').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }

  

    return {
        //main function to initiate the module

        init: function() {

            initChartSample1();
           
            initChartSample3();
            
           
            initChartSample7();
           
        }

    };

}();