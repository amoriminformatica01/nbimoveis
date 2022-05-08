/* globals Chart:false, feather:false */

(function() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' });

    // Graphs
    var ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                'Locação',
                'Venda',
                'Casa',
                'Apartamento',
                'Condomínio',
                'Loja',
                'Terreno'
            ],
            datasets: [{
                data: [
                    locacao,
                    venda,
                    casa,
                    apartamento,
                    loja,
                    terreno

                ],
                lineTension: 0,
                backgroundColor: [
                    'red',
                    'blue',
                    'green',
                    'silver',
                    'black',
                    'yellow',
                    'orange'
                ],
                borderColor: '#007bff',
                borderWidth: 2,
                pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            }
        }
    })
})()