
function Grafica(){
  _this = this;
}

Grafica.prototype.TablaIndicadores = function(){
    Highcharts.chart('visor_graficas_indicadores_aprendizaje', {
        lang: {
            drillUpText: '◁ Regresar a {series.name}'
        },
        credits: {
            enabled: false
        },
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Resultados PLANEA 2015 primaria'
        },
        subtitle: {
            text: 'Haz clic para ver los porcentajes por área.'
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        
        series: [{
            colors: ['#85BB65','#4E8975','#8C4351','#FFA500','#438D80','#3EA055','#009987','#25383C'],
            name: 'Área', 
            colorByPoint: true,
            tooltip: { 
                pointFormat: '' 
            },
            data: [{
                name: 'Leng. y<br>comunicación',
                y: 50,
                drilldown: 'Lenguaje y comunicación'
            }, {
                name: 'Mat.',
                y: 50,
                drilldown: 'Matemáticas'
            }]
        }],
        drilldown: {
            colors: ['#8C4351','#FFA500','#438D80','#3EA055','#009987','#25383C'],
            series: [{
                name: 'Lenguaje y comunicación',
                id: 'Lenguaje y comunicación',
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> del total<br/>'  
                },
                data: [
                    ['Nivel I', 14.3],
                    ['Nivel II', 42.9],
                    ['Nivel III', 30],
                    ['Nivel IV', 12.9]
                ]
            }, {
                name: 'Matemáticas',
                id: 'Matemáticas',
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> del total<br/>'  
                },
                data: [
                    ['Nivel I', 21.4],
                    ['Nivel II', 12.9],
                    ['Nivel III', 30],
                    ['Nivel IV', 35.7]
                ]
            }],
           
        }
    });

}

Grafica.prototype.TablaIndicadores1 = function(){
    Highcharts.chart('visor_graficas_indicadores_aprendizaje1', {
        lang: {
            drillUpText: '◁ Regresar a {series.name}'
        },
        credits: {
            enabled: false
        },
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Resultados PLANEA 2016 primaria'
        },
        subtitle: {
            text: 'Haz clic para ver los porcentajes por área.'
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        
        series: [{
            colors: ['#85BB65','#4E8975','#8C4351','#FFA500','#438D80','#3EA055','#009987','#25383C'],
            name: 'Área',
            colorByPoint: true,
            tooltip: {
                pointFormat: ''  
            },
            data: [{
                name: 'Leng. y<br>comunucación',
                y: 50,
                drilldown: 'Lenguaje y comunicación'
            }, {
                name: 'Mat.',
                y: 50,
                drilldown: 'Matemáticas'
            }]
        }],
        drilldown: {
            colors: ['#8C4351','#FFA500','#438D80','#3EA055','#009987','#25383C'],
            series: [{
                name: 'Lenguaje y comunicación',
                id: 'Lenguaje y comunicación',
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> del total<br/>'  
                },
                data: [
                    ['Nivel I', 42.4],
                    ['Nivel II', 25.3],
                    ['Nivel III', 25.9],
                    ['Nivel IV', 6.3]
                ]
            }, {
                name: 'Matemáticas',
                id: 'Matemáticas',
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> del total<br/>'  
                },
                data: [
                    ['Nivel I', 38.2],
                    ['Nivel II', 17.2],
                    ['Nivel III', 24.8],
                    ['Nivel IV', 19.7]
                ]
            }],
           
        }
    });
}

Grafica.prototype.TablaEstadistica = function(){
    Highcharts.chart('visor_graficas_estadistica', {
        lang: {
            drillUpText: '◁ Regresar a {series.name}'
        },
        credits: {
            enabled: false
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Estadística escolar: alumnos, grupos, docentes.'
        },
        subtitle: {
            text: 'Haz clic en las columnas para ver el desagregado por grado.'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Cantidad'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b>'
        },

        series: [{
            name: 'Estadística',
            colorByPoint: true,
            data: [{
                name: 'Alumnos',
                y: 503,
                drilldown: 'Alumnos'
            }, {
                name: 'Grupos',
                y: 19,
                drilldown: 'Grupos'
            }, {
                name: 'Docentes',
                y: 19,
                drilldown: 'Docentes'
            }]
        }],
        drilldown: {
            series: [{
                name: 'Alumnos',
                id: 'Alumnos',
                data: [
                    [
                        '1º',
                        148
                    ],
                    [
                        '2º',
                        159
                    ],
                    [
                        '3º',
                        136
                    ],
                    [
                        '4º',
                        151
                    ],
                    [
                        '5º',
                        144
                    ],
                    [
                        '6º',
                        164
                    ]
                ]
            }, {
                name: 'Grupos',
                id: 'Grupos',
                data: [
                    [
                        '1º',
                        4
                    ],
                    [
                        '2º',
                        3
                    ],
                    [
                        '3º',
                        3
                    ],
                    [
                        '4º',
                        3
                    ],
                    [
                        '5º',
                        3
                    ],
                    [
                        '6º',
                        3
                    ]
                ]
            }, {
                name: 'Docentes',
                id: 'Docentes',
                data: [
                    [
                        '1º',
                        1
                    ],
                    [
                        '2º',
                        1
                    ],
                    [
                        '3º',
                        1
                    ],
                    [
                        '4º',
                        1
                    ],
                    [
                        '5º',
                        1
                    ],
                    [
                        '6º',
                        1
                    ]
                ]
            }]
        }
    });
}



Grafica.prototype.TablaRiesgo = function(){
    Highcharts.chart('visor_graficas_riesgo', {
        credits: {
            enabled: false
        },
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Proporciones de acuerdo a matrícula escolar'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Porcentaje',
            colorByPoint: true,
            data: [{
                name: 'Muy alto',
                y: 1,
                sliced: true,
                selected: true
            }, {
                name: 'Alto',
                y: 10
            }, {
                name: 'Medio',
                y: 54
            }, {
                name: 'Bajo',
                y: 159
            }]
        }]
    });
}

Grafica.prototype.TablaRiesgo1 = function(){
    Highcharts.chart('visor_graficas_riesgo1', {
        credits: {
            enabled: false
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Distribución por grado'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                '1er °',
                '2do °',
                '3er °',
                '4to °',
                '5to °',
                '6to °'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Alumnos'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Alumnos',
            data: [3,3,0,1,2,0]
        }]
    });
}



function grafica_permanencia() {

	chart = new Highcharts.Chart({
        chart: {
            renderTo: 'visor_graficas_indicadores_permanencia',
            type: 'pie'
        },
        title: {
            text: ''
        },
        plotOptions: {
            pie: {
                shadow: false,
            }
        },
        series: [{
            name: 'Retencion',
            data: [
               [ "Completed", 90],
               { 
                   "name": "Incomplete",
                   "y": 10,
                   "color": 'rgba(0,0,0,0)'
               }
            ],
            size: '100%',
            innerSize: '65%',
            showInLegend:false,
            dataLabels: {
                enabled: false
            }
        }]
    });

}

function grafica_permanencia1() {

	chart = new Highcharts.Chart({
        chart: {
            renderTo: 'visor_graficas_indicadores_permanencia1',
            type: 'pie'
        },
        title: {
            text: ''
        },
        plotOptions: {
            pie: {
                shadow: false
            }
        },
        series: [{
            name: 'Aprobacion',
            data: [
               [ "Completed", 95],
               { 
                   "name": "Incomplete",
                   "y": 5,
                   "color": 'rgba(0,0,0,0)'
               }
            ],
            size: '100%',
            innerSize: '65%',
            showInLegend:false,
            dataLabels: {
                enabled: false
            }
        }]
    });

}

function grafica_permanencia2() {

	chart = new Highcharts.Chart({
        chart: {
            renderTo: 'visor_graficas_indicadores_permanencia2',
            type: 'pie'
        },
        title: {
            text: ''
        },
        plotOptions: {
            pie: {
                shadow: false
            }
        },
        series: [{
            name: 'Eficiencia Terminal',
            data: [
               [ "Completed", 80],
               { 
                   "name": "Incomplete",
                   "y": 20,
                   "color": 'rgba(0,0,0,0)'
               }
            ],
            size: '100%',
            innerSize: '65%',
            showInLegend:false,
            dataLabels: {
                enabled: false
            }
        }]
    });

}

$("#ver_detalle").click(function(e){
	console.log("llegue a la funcion");
	var obj_grafica = new Grafica();
  	e.preventDefault();
  		$.ajax({
		    url:base_url+"mapa/estadistica",
		    method:"POST",
		    data:{'id_cct':$("#id_cct").val()},
		    beforeSend: function(xhr) {

		    },
		    success:function(data){
				$("#visor_estadistica").empty();
        		$("#visor_estadistica").append(data.str_view);
        		obj_grafica.TablaEstadistica();
        		// obj_grafica.TablaIndicadoresPermanencia();
        		obj_grafica.TablaIndicadores();
        		obj_grafica.TablaIndicadores1();
        		obj_grafica.TablaRiesgo();
        		obj_grafica.TablaRiesgo1();
        		grafica_permanencia();
        		grafica_permanencia1();
        		grafica_permanencia2();
        		
        		$("#modal_resultado_estadistica").modal("show");
		    },
		    error: function(error){
		      console.log(error);
		    }
	  	});

});