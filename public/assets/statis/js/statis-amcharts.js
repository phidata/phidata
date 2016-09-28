var ChartsAmcharts = function() {

    // var initChartSample1 = function($chart1Data) {
    //     var chart = AmCharts.makeChart("chart_1", {
    //         "type": "serial",
    //         "theme": "light",
    //         "legend": {
    //             "horizontalGap": 10,
    //             "maxColumns": 1,
    //             "position": "right",
    //             "useGraphSettings": true,
    //             "markerSize": 10
    //         },
    //         "dataProvider": $chart1Data,
    //         "valueAxes": [{
    //             "stackType": "regular",
    //             "axisAlpha": 0.3,
    //             "gridAlpha": 0
    //         }],
    //         "graphs": [{
    //             "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
    //             "fillAlphas": 0.8,
    //             "labelText": "[[value]]",
    //             "lineAlpha": 0.3,
    //             "title": "区域代理商",
    //             "type": "column",
    //             "color": "#000000",
    //             "valueField": "agent"
    //         }, {
    //             "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
    //             "fillAlphas": 0.8,
    //             "labelText": "[[value]]",
    //             "lineAlpha": 0.3,
    //             "title": "回收站商户",
    //             "type": "column",
    //             "color": "#000000",
    //             "valueField": "recycler"
    //         }, {
    //             "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
    //             "fillAlphas": 0.8,
    //             "labelText": "[[value]]",
    //             "lineAlpha": 0.3,
    //             "title": "普通用户",
    //             "type": "column",
    //             "color": "#000000",
    //             "valueField": "commonuser"
    //         }],
    //         "categoryField": "month",
    //         "categoryAxis": {
    //             "gridPosition": "start",
    //             "axisAlpha": 0,
    //             "gridAlpha": 0,
    //             "position": "left"
    //         },
    //         "export": {
    //             "enabled": true
    //         }
    //
    //     });
    //
    //     $('#chart_1').closest('.portlet').find('.fullscreen').click(function() {
    //         chart.invalidateSize();
    //     });
    // }


    var initChartSample3 = function($chart3Data) {
        var chart = AmCharts.makeChart("chart_3", {
            "type": "serial",
            "theme": "light",

            "fontFamily": 'Open Sans',
            "color":    '#888888',

            "pathToImages": Metronic.getGlobalPluginsPath() + "img/",

            "dataProvider": $chart3Data,
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
    };


    var initChartSample7 = function($chart7Data) {
        var chart = AmCharts.makeChart("chart_7", {
            "type": "pie",
            "theme": "light",

            "fontFamily": 'Open Sans',

            "color":    '#888',

            "dataProvider": $chart7Data,
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

        jQuery('.chart-input'  ).off().on( 'input change', function() {
            var property = jQuery( this ).data( 'property' );
            var target = chart;
            var value = Number( this.value );
            chart.startDuration = 0;

            if ( property == 'innerRadius' ) {
                value += "%";
            }

            target[ property ] = value;
            chart.validateNow();
        } );

        $('#chart_7').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    };


    var initChartSample0 = function($chart0Data) {
        var dataAdmins = $chart0Data['dataAdmins'];
        var dataAgents = $chart0Data['dataAgents'];
        var dataRecycs = $chart0Data['dataRecycs'];
        var dataCusers = $chart0Data['dataCusers'];

        var chart = AmCharts.makeChart( "chart_0", {
            "type": "stock",
            "theme": "light",

            "pathToImages": Metronic.getGlobalPluginsPath() + "img/chart0/",

            "dataSets": [ {
                "title": "普通用户",
                "fieldMappings": [ {
                    "fromField": "value",
                    "toField": "value"
                }, {
                    "fromField": "volume",
                    "toField": "volume"
                } ],
                "dataProvider": dataCusers,
                "categoryField": "date"
            }, {
                "title": "回收商户",
                "fieldMappings": [ {
                    "fromField": "value",
                    "toField": "value"
                }, {
                    "fromField": "volume",
                    "toField": "volume"
                } ],
                "dataProvider": dataRecycs,
                "categoryField": "date"
            }, {
                "title": "区域代理商",
                "fieldMappings": [ {
                    "fromField": "value",
                    "toField": "value"
                }, {
                    "fromField": "volume",
                    "toField": "volume"
                } ],
                "dataProvider": dataAgents,
                "categoryField": "date"
            }, {
                "title": "系统管理员",
                "fieldMappings": [ {
                    "fromField": "value",
                    "toField": "value"
                }, {
                    "fromField": "volume",
                    "toField": "volume"
                } ],
                "dataProvider": dataAdmins,
                "categoryField": "date"
            }
            ],

            "panels": [ {
                "showCategoryAxis": true,
                "title": "累计数量",
                "percentHeight": 70,
                "stockGraphs": [ {
                    "id": "g1",
                    "valueField": "value",
                    "comparable": true,
                    "compareField": "value",
                    "balloonText": "[[title]]:<b>[[value]]</b>",
                    "compareGraphBalloonText": "[[title]]:<b>[[value]]</b>"
                } ],
                "stockLegend": {
                    "periodValueTextComparing": "[[percents.value.close]]%",
                    "periodValueTextRegular": "[[value.close]]"
                }
            }, {
                "title": "新增数量",
                "percentHeight": 30,
                "stockGraphs": [ {
                    "valueField": "volume",
                    "type": "column",
                    "showBalloon": false,
                    "fillAlphas": 1
                } ],
                "stockLegend": {
                    "periodValueTextRegular": "[[value.close]]"
                }
            } ],

            "chartScrollbarSettings": {
                "graph": "g1"
            },

            "chartCursorSettings": {
                "valueBalloonsEnabled": true,
                "fullWidth": true,
                "cursorAlpha": 0.1,
                "valueLineBalloonEnabled": true,
                "valueLineEnabled": true,
                "valueLineAlpha": 0.5
            },

            "periodSelector": {
                "position": "left",
                "periods": [{
                    "period": "MAX",
                    "selected": true,
                    "label": "MAX"
                }
                //     , {
                //     "period": "MM",
                //     "count": 1,
                //     "label": "1 month"
                // }, {
                //     "period": "YYYY",
                //     "count": 1,
                //     "label": "1 year"
                // }
                ]
            },

            "dataSetSelector": {
                "position": "left"
            },

            "export": {
                "enabled": true
            }
        } );

        $('#chart_0').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    };


    return {
        //main function to initiate the module
        init: function($chart0Data, $chart3Data, $chart7Data) {
            //initChartSample1($chart1Data);
            if (0 == $chart0Data.length){
                $('#chart_0').append('暂无相关数据');
            } else {
                initChartSample0($chart0Data);
            }
            if (0 == $chart3Data.length){
                $('#chart_3').append('暂无相关数据');
            } else {
                initChartSample3($chart3Data);
            }
            if (0 == $chart7Data){
                $('#chart_7').append('暂无相关数据');
                $('#chart_7_bar').hide();
            } else {
                initChartSample7($chart7Data);
            }
        }

    };

}();