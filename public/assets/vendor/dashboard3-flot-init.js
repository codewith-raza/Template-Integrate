/**
 * Created by mosaddek on 1/24/18.
 */


// Multiple Statistics
var data7_1 = [
    [1000000, 13],
    [2000000, 55],
    [3000000, 198],
    [4000000, 153],
    [5000000, 320],
    [6000000, 220],
    [7000000, 236]
];
var data7_2 = [
    [1000000, 43],
    [2000000, 150],
    [3000000, 80],
    [4000000, 283],
    [5000000, 98],
    [6000000, 125],
    [7000000, 50]
];
$(function() {
    $.plot($("#multi-sates #multi-states-container"), [{
            data: data7_1,
            label: "Page View",
            lines: {
                fill: false
            }
        }, {
            data: data7_2,
            label: "Online User",

            points: {
                show: true
            },
            lines: {
                show: true
            },
            yaxis: 2
        }
        ],
        {
            series: {
                lines: {
                    show: true,
                    fill: true
                },
                points: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: "#ffffff",
                    symbol: "circle",
                    radius: 5
                },
                shadowSize: 0
            },
            grid: {
                hoverable: true,
                clickable: true,
                tickColor: "#e5ebf8",
                borderWidth: 1,
                borderColor: "#e5ebf8"
            },
            colors: ["#36a2f5", "#A768F3"],
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false
            },
            xaxis: {
                mode: "time"


            },
            yaxes: [{
                /* First y axis */
            }, {
                /* Second y axis */
                position: "right" /* left or right */
            }]
        }
    );
});

