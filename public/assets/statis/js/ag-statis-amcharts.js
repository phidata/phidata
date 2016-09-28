var ChartsAmchartsRc = function () {

    var initAgChartSample2 = function($AgChart2Data) {
        var chart = AmCharts.makeChart("ag_chart_2", {
            "type": "serial",
            "theme": "light",
            "pathToImages":"/assets/statis/img/chart0/",
            "marginRight": 40,
            "marginLeft": 40,
            "autoMarginOffset": 20,
            "mouseWheelZoomEnabled":true,
            "dataDateFormat": "YYYY-MM-DD",
            "valueAxes": [{
                "id": "v1",
                "axisAlpha": 0,
                "position": "left",
                "ignoreAxisWidth":true
            }],
            "balloon": {
                "borderThickness": 1,
                "shadowAlpha": 0
            },
            "graphs": [{
                "id": "g1",
                "balloon":{
                    "drop":true,
                    "adjustBorderColor":false,
                    "color":"#ffffff"
                },
                "bullet": "round",
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "bulletSize": 5,
                "hideBulletsCount": 50,
                "lineThickness": 2,
                "title": "订单量",
                "useLineColorForBulletBorder": true,
                "valueField": "value",
                "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
            }],
            "chartScrollbar": {
                "graph": "g1",
                "oppositeAxis":false,
                "offset":30,
                "scrollbarHeight": 80,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount":true,
                "color":"#AAAAAA"
            },
            "chartCursor": {
                "pan": true,
                "valueLineEnabled": true,
                "valueLineBalloonEnabled": true,
                "cursorAlpha":1,
                "cursorColor":"#258cbb",
                "limitToGraph":"g1",
                "valueLineAlpha":0.2,
                "valueZoomable":true
            },
            "valueScrollbar":{
                "oppositeAxis":false,
                "offset":50,
                "scrollbarHeight":10
            },
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "dashLength": 1,
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true
            },
            "dataProvider": $AgChart2Data
        });

        chart.addListener("rendered", zoomChart);

        zoomChart();

        function zoomChart() {
            chart.zoomToIndexes(chart.dataProvider.length - 20, chart.dataProvider.length - 1);
        }
    };

    var initAgChartSample3 = function($AgChart3Data) {
        var chart = AmCharts.makeChart("ag_chart_3", {
            "type": "pie",
            "theme": "light",

            "fontFamily": 'Open Sans',

            "color":    '#888',

            "dataProvider": $AgChart3Data,
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

        $('#ag_chart_1').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    };

    return {
        //main function to initiate the module
        init: function($AgChart2Data , $AgChart3Data) {

            if (0 == $AgChart2Data){
                $('#ag_chart_2').append('暂无相关数据');
            } else {
                initAgChartSample2($AgChart2Data);
            }

            if (0 == $AgChart3Data){
                $('#ag_chart_3').append('暂无相关数据');
                $('#ag_chart_3_bar').hide();
            } else {
                initAgChartSample3($AgChart3Data);
            }
        }


    };
}();











var ChartsAmcharts = function() {

    var initAgChartSample0 = function($AgChart0Data) {
        var chart = AmCharts.makeChart("ag_chart_0", {
            "type": "serial",
            "theme": "light",
            "pathToImages": Metronic.getGlobalPluginsPath() + "img/chart0/",

            "legend": {
                "useGraphSettings": true
            },
            "dataProvider": $AgChart0Data,
            "synchronizeGrid":true,
            "valueAxes": [{
                "id":"v1",
                "axisColor": "#FFD380",
                "axisThickness": 2,
                "gridAlpha": 0,
                "offset": 20,
                "axisAlpha": 1,
                "position": "left"
            }, {
                "id":"v2",
                "axisColor": "#6699FF",
                "axisThickness": 2,
                "gridAlpha": 0,
                "offset": 20,
                "axisAlpha": 1,
                "position": "right"
            }],
            "graphs": [{
                "valueAxis": "v1",
                "lineColor": "#FFD380",
                "bullet": "square",
                "bulletBorderThickness": 1,
                "hideBulletsCount": 30,
                "title": "下属商户数量",
                "valueField": "rcs",
                "fillAlphas": 0
            }, {
                "valueAxis": "v2",
                "lineColor": "#6699FF",
                "bullet": "round",
                "bulletBorderThickness": 0.5,
                "hideBulletsCount": 30,
                "title": "下属商户当日完成订单数",
                "valueField": "orders",
                "fillAlphas": 0
            }],
            "chartScrollbar": {},
            "chartCursor": {
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "axisColor": "#DADADA",
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true,
                "position": "bottom-right"
            }
        });

        chart.addListener("dataUpdated", zoomChart);
        zoomChart();

        function zoomChart(){
            chart.zoomToIndexes(chart.dataProvider.length-20, chart.dataProvider.length-1);
        }

    };

    var initAgChartSample1 = function($AgChart1Data) {
        var chart = AmCharts.makeChart("ag_chart_1", {
            "type": "pie",
            "theme": "light",

            "fontFamily": 'Open Sans',

            "color":    '#888',

            "dataProvider": $AgChart1Data,
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

        $('#ag_chart_1').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    };

    return {
        //main function to initiate the module
        init: function($AgChart0Data, $AgChart1Data) {
            if (0 == $AgChart0Data.length){
                $('#ag_chart_0').append('暂无相关数据');
            } else {
                initAgChartSample0($AgChart0Data);
            }

            if (0 == $AgChart1Data.length){
                $('#ag_chart_1').append('暂无相关数据');
                $('#ag_chart_1_bar').hide();
            } else {
                initAgChartSample1($AgChart1Data);
            }
        }

    };

}();