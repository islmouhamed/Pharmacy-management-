
$(document).ready(function() {
    $('#test').DataTable({
        dom: "Blfrtip",
        buttons: [{
                extend: "copy",
                className: "btn-sm"
            },
            {
                extend: "csv",
                className: "btn-sm"
            },

            {
                extend: "pdfHtml5",
                className: "btn-sm"
            },
            {
                extend: "print",
                className: "btn-sm"
            },
        ],
        responsive: false,

    });

    $('.js-example-basic-multiple').select2();

    $('#lien_vent').on('click',function(){
        var id = $('#lot_id option:selected').val();
        var CSRF = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: 'vent_table',
            type: 'POST',
            data:{_token:CSRF,id_lot:id},
            success:function(data){
                var data = "<tr id='tr"+data['id']+"'><input type='hidden' name='id_lot[]' value='"+data['id']+"'>"+
                    "<td></td>"+
                    "<td>"+data['nom']+"</td>"+
                    "<td>"+data['prix']+"</td>"+
                    "<td><input type='number' name='qty"+data['id']+"' value='1' class='lien_qty' data-id='"+data['id']+"' data-prix='"+data['prix']+"'></td>"+
                    "<td class='prix_total_produit' id='prix_total_produit"+data['id']+"'><input type='hidden' name='prix_total_produit"+data['id']+"' value='"+data['prix']+"'>"+data['prix']+"</td>"+
                    "<td><span class='remove_produit btn btn-info btn-xs' data-id='"+data['id']+"'><i class='fa fa-trash-o'></i>  </span></td>"+
                    "</tr>";
                    data = $.parseHTML(data);
                    $('.body_table').append(data);
                    calculer_prix_total();
            }
        });

        
    });

    $(document).on('change','.lien_qty',function(e){
        e.preventDefault();
         var id = $(this).data('id');
         var prix = $(this).data('prix');
         var prix_total_produit = $(this).val()*prix;
         //alert(prix_total_produit);
        $('#prix_total_produit'+id).replaceWith("<td class='prix_total_produit' id='prix_total_produit"+id+"'><input type='hidden' name='prix_total_produit"+id+"' value='"+prix_total_produit+"'>"+prix_total_produit+"</td>");
        calculer_prix_total();
    }); 
    $(document).on('click','.remove_produit',function(){
        var id = $(this).data('id');
        $('#tr'+id).remove();
        calculer_prix_total();

    });

    function calculer_prix_total(){
        var prix_total=0;
        $('.prix_total_produit').each(function (index){
            prix_total +=parseFloat($(this).text());
           // alert($(this).text());
        });
        $('#prix_total').replaceWith("<td id='prix_total'><input type='hidden' name='prix_total' value='"+prix_total+"'>"+prix_total+"</td>");
        
    }
    var theme = {
        color: [
            '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
            '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
        ],

        title: {
            itemGap: 8,
            textStyle: {
                fontWeight: 'normal',
                color: '#408829'
            }
        },

        dataRange: {
            color: ['#1f610a', '#97b58d']
        },

        toolbox: {
            color: ['#408829', '#408829', '#408829', '#408829']
        },

        tooltip: {
            backgroundColor: 'rgba(0,0,0,0.5)',
            axisPointer: {
                type: 'line',
                lineStyle: {
                    color: '#408829',
                    type: 'dashed'
                },
                crossStyle: {
                    color: '#408829'
                },
                shadowStyle: {
                    color: 'rgba(200,200,200,0.3)'
                }
            }
        },

        dataZoom: {
            dataBackgroundColor: '#eee',
            fillerColor: 'rgba(64,136,41,0.2)',
            handleColor: '#408829'
        },
        grid: {
            borderWidth: 0
        },

        categoryAxis: {
            axisLine: {
                lineStyle: {
                    color: '#408829'
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            }
        },

        valueAxis: {
            axisLine: {
                lineStyle: {
                    color: '#408829'
                }
            },
            splitArea: {
                show: true,
                areaStyle: {
                    color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['#eee']
                }
            }
        },
        timeline: {
            lineStyle: {
                color: '#408829'
            },
            controlStyle: {
                normal: { color: '#408829' },
                emphasis: { color: '#408829' }
            }
        },

        k: {
            itemStyle: {
                normal: {
                    color: '#68a54a',
                    color0: '#a9cba2',
                    lineStyle: {
                        width: 1,
                        color: '#408829',
                        color0: '#86b379'
                    }
                }
            }
        },
        map: {
            itemStyle: {
                normal: {
                    areaStyle: {
                        color: '#ddd'
                    },
                    label: {
                        textStyle: {
                            color: '#c12e34'
                        }
                    }
                },
                emphasis: {
                    areaStyle: {
                        color: '#99d2dd'
                    },
                    label: {
                        textStyle: {
                            color: '#c12e34'
                        }
                    }
                }
            }
        },
        force: {
            itemStyle: {
                normal: {
                    linkStyle: {
                        strokeColor: '#408829'
                    }
                }
            }
        },
        chord: {
            padding: 4,
            itemStyle: {
                normal: {
                    lineStyle: {
                        width: 1,
                        color: 'rgba(128, 128, 128, 0.5)'
                    },
                    chordStyle: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        }
                    }
                },
                emphasis: {
                    lineStyle: {
                        width: 1,
                        color: 'rgba(128, 128, 128, 0.5)'
                    },
                    chordStyle: {
                        lineStyle: {
                            width: 1,
                            color: 'rgba(128, 128, 128, 0.5)'
                        }
                    }
                }
            }
        },
        gauge: {
            startAngle: 225,
            endAngle: -45,
            axisLine: {
                show: true,
                lineStyle: {
                    color: [
                        [0.2, '#86b379'],
                        [0.8, '#68a54a'],
                        [1, '#408829']
                    ],
                    width: 8
                }
            },
            axisTick: {
                splitNumber: 10,
                length: 12,
                lineStyle: {
                    color: 'auto'
                }
            },
            axisLabel: {
                textStyle: {
                    color: 'auto'
                }
            },
            splitLine: {
                length: 18,
                lineStyle: {
                    color: 'auto'
                }
            },
            pointer: {
                length: '90%',
                color: 'auto'
            },
            title: {
                textStyle: {
                    color: '#333'
                }
            },
            detail: {
                textStyle: {
                    color: 'auto'
                }
            }
        },
        textStyle: {
            fontFamily: 'Arial, Verdana, sans-serif'
        }
    };
    var pathname = window.location.pathname.split('/');
    if (pathname[4]=='statistique') {
        
        echart_jours();
        echart_mois();
        
    }
    function echart_jours(){
        
        $.getJSON('echart_jours', function(data){
            console.log(data);
            var echartBar = echarts.init(document.getElementById('mainb'),theme);
    
        echartBar.setOption({
          title: {
            text: 'Quantité vendus par jour',
            subtext: ''
          },
          tooltip: {
            trigger: 'axis'
          },
          legend: {
            data: ['sales']
          },
          toolbox: {
            show: false
          },
          calculable: false,
          xAxis: [{
            type: 'category',
            data: ['1jr', '2jr', '3jr', '4jr', '5jr', '6jr', '7jr', '8jr', '9jr', '10jr', '11jr', '12jr','13jr', '14jr', '15jr', '16jr', '17jr', '18jr', '19jr', '20jr', '21jr', '22jr', '23jr', '24jr','25jr', '26jr','27jr', '28jr','29jr', '30jr','31jr']
          }],
          yAxis: [{
            type: 'value'
          }],
          series: [{
            name: 'sales',
            type: 'bar',
            data: data,
            markPoint: {
              data: [{
                type: 'max',
                name: 'max quantite vendu'
              },{
                type: 'min',
                name: 'min quantite vendu'
              }]
            },
            markLine: {
              data: [{
                type: 'average',
                name: '???'
              }]
            }
          }]
        });
        });


        
    }
    function echart_mois(){
        
        $.getJSON('echart_mois', function(data){
            console.log(data);
            var echartBar = echarts.init(document.getElementById('mainbb'),theme);
    
        echartBar.setOption({
          title: {
            text: 'Chifres daffaire par mois ',
            subtext: ''
          },
          tooltip: {
            trigger: 'axis'
          },
          legend: {
            data: ['sales']
          },
          toolbox: {
            show: false
          },
          calculable: false,
          xAxis: [{
            type: 'category',
            data: ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre']
          }],
          yAxis: [{
            type: 'value'
          }],
          series: [{
            name: 'sales',
            type: 'bar',
            data: data,
            markPoint: {
              data: [{
                type: 'max',
                name: 'max chiffre d affaire'
              },{
                type: 'min',
                name: 'min chiffre d affaire'
              }]
            },
            markLine: {
              data: [{
                type: 'average',
                name: '???'
              }]
            }
          }]
        });
        });


        
    }
    

			
    
});