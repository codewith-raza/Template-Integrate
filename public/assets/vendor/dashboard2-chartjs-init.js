/**
 * Created by mosaddek on 1/24/18.
 */

// donut chart

Morris.Donut({
    element: 'donut-chart',
    data: [
        {value: 60, label: 'Apple', formatted: 'at least 55%' },
        {value: 25, label: 'Orange', formatted: 'approx. 25%' },
        {value: 5, label: 'Banana', formatted: 'approx. 10%' },
        {value: 10, label: 'Long title chart', formatted: 'at most 10%' }
    ],
    backgroundColor: '#fff',
    labelColor: '#53505F',
    gridLineColor: '#e5ebf8',
    colors: [
        '#A768F3','#36a2f5','#34bfa3','#eac459'
    ],
    formatter: function (x, data) { return data.formatted; }
});

//chart js

var ctx = document.getElementById('myChart3-light').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q"],
        datasets: [{
            label: '# of Votes',
            data: [58, 80, 44, 76, 54, 50, 45, 90, 57, 48, 54, 49, 63, 77, 67, 83, 95],
            backgroundColor: [
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5',
                '#36a2f5'
            ],
            //borderColor: [
            //    'rgba(255,99,132,1)',
            //    'rgba(54, 162, 235, 1)',
            //    'rgba(255, 206, 86, 1)',
            //    'rgba(75, 192, 192, 1)',
            //    'rgba(153, 102, 255, 1)',
            //    'rgba(255, 159, 64, 1)'
            //],
            borderWidth: 0
        }]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                display: false
            }],
            yAxes: [{
                display: false
            }]
        }

    }
});


var ctx = document.getElementById('myChart4-light').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: 'rgb(255,255,255,0)',
            //backgroundColor: 'rgba(167,104,243,.2)',
            borderColor: 'rgba(255,81,138,1)',
            data: [6.06, 82.2, -22.11, 21.53, -21.47, 73.61, -53.75, -60.32]
        }]


    },

    // Configuration options go here
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                gridLines: {
                    color: 'transparent',
                    zeroLineColor: 'transparent'
                },
                ticks: {
                    fontSize: 2,
                    fontColor: 'transparent'
                }

            }],
            yAxes: [{
                display: false,
                ticks: {
                    display: false
                    //min: Math.min.apply(Math, data.datasets[0].data) - 5,
                    //max: Math.max.apply(Math, data.datasets[0].data) + 5
                }
            }]
        },
        elements: {
            line: {
                tension: 0.00001,
                //tension: 0.4,
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
});
