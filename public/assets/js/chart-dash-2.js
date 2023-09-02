"use strict";

/*--------------------------------------------------------
    ApexChart
---------------------------------------------------------*/
var randomizeArray = function (arg) {
    var array = arg.slice();
    var currentIndex = array.length,
        temporaryValue,
        randomIndex;

    while (0 !== currentIndex) {
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
};
// data for the sparklines that appear below header area
var sparklineData = [
    47,
    45,
    54,
    38,
    56,
    24,
    65,
    31,
    37,
    39,
    62,
    51,
    35,
    41,
    35,
    27,
    93,
    53,
    61,
    27,
    54,
    43,
    19,
    46,
];

var optionsChart7 = {
    series: [
        {
            data: randomizeArray(sparklineData),
        },
    ],
    chart: {
        type: "area",
        height: 160,
        sparkline: {
            enabled: true,
        },
    },
    stroke: {
        curve: "smooth",
        width: 2,
    },
    colors: ["#ff9f43"],
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.8,
            opacityTo: 0.1,
            stops: [0, 95, 100],
        },
    },
    xaxis: {
        crosshairs: {
            width: 1,
        },
    },
    yaxis: {
        min: 0,
    },
};

var chart7 = new ApexCharts(document.querySelector("#chart-7"), optionsChart7);
chart7.render();

var optionsChart8 = {
    series: [
        {
            data: randomizeArray(sparklineData),
        },
    ],
    chart: {
        type: "area",
        height: 160,
        sparkline: {
            enabled: true,
        },
    },
    stroke: {
        curve: "smooth",
        width: 2,
    },
    colors: ["#1BC5BD"],
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.8,
            opacityTo: 0.1,
            stops: [0, 95, 100],
        },
    },
    xaxis: {
        crosshairs: {
            width: 1,
        },
    },
    yaxis: {
        min: 0,
    },
};

var chart8 = new ApexCharts(document.querySelector("#chart-8"), optionsChart8);
chart8.render();

var options9 = {
    series: [44, 55, 41, 17, 15],
    labels: [
        "UI Designer",
        "Web Development",
        "Web Design",
        "C Programming",
        "Node.je",
    ],
    chart: {
        width: "100%",
        type: "donut",
    },
    plotOptions: {
        pie: {
            startAngle: -45,
        },
    },
    dataLabels: {
        enabled: false,
    },
    fill: {
        type: "gradient",
    },
    legend: {
        position: "bottom",
        formatter: function (val, opts) {
            return (
                val + " - " + opts.w.globals.series[opts.seriesIndex] + "%"
            );
        },
        horizontalAlign: "flex-start",
    },
    markers: {
        offsetY: top,
    },
};

var chart9 = new ApexCharts(document.querySelector("#chart-9"), options9);
chart9.render();

var optionsChart10 = {
    series: [
        {
            name: "React",
            data: [44, 55, 41, 67, 22, 43, 21, 41, 67, 22, 43, 21],
        },
        {
            name: "Javascript",
            data: [13, 23, 20, 8, 13, 27, 33, 41, 67, 22, 43, 21],
        },
        {
            name: "Node.js",
            data: [11, 17, 15, 15, 21, 14, 15, 41, 67, 22, 43, 21],
        },
    ],
    chart: {
        type: "bar",
        height: 350,
        stacked: true,
        stackType: "100%",
        toolbar: {
            show: false,
        },
    },
    stroke: {
        width: 0,
    },
    fill: {
        opacity: 1,
        colors: ["#6b48ff", "#fed05a", "#d4d4ff"],
    },
    xaxis: {
        position: "bottom",
        offsetY: 10,
        categories: [
            "Jan",
            "Feb",
            "Mar",
            "App",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ],
        axisBorder: {
            show: false,
        },
    },
    yaxis: {
        show: true,
    },
    grid: {
        show: true,
        borderColor: "#d7f4ff",
        strokeDashArray: 5,
    },
    legend: {
        position: "top",
        fontSize: "14px",
        fontFamily: "Poppins, sans-serif",
        fontWeight: 600,
        markers: {
            width: 8,
            height: 8,
            radius: 8,
            fillColors: ["#ff808b", "#4d4cac", "#d4d4ff"],
        },
        itemMargin: {
            horizontal: 15,
            vertical: 15,
        },
    },
    dataLabels: {
        enabled: false,
    },
    plotOptions: {
        bar: {
            columnWidth: "10%",
        },
    },
};

var chart10 = new ApexCharts(
    document.querySelector("#chart-10"),
    optionsChart10
);
chart10.render();

var optionsChart11 = {
    series: [
        {
            name: "React",
            data: [44, 55, 41, 67, 22, 43, 21, 41, 67, 22, 43, 21],
        },
    ],
    chart: {
        type: "area",
        height: 350,
        toolbar: false,
    },
    grid: {
        show: true,
        borderColor: "#d7f4ff",
        strokeDashArray: 5,
    },
    stroke: {
        curve: "smooth",
        width: 2,
    },
    colors: ["#ff9f43"],
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.8,
            opacityTo: 0.1,
            stops: [0, 95, 100],
        },
    },
    xaxis: {
        crosshairs: {
            width: 1,
        },
        categories: [
            "Jan",
            "Feb",
            "Mar",
            "App",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ],
        axisBorder: {
            show: false,
        },
    },
    yaxis: {
        min: 0,
    },
    dataLabels: {
        enabled: false,
    },
};

var chart11 = new ApexCharts(
    document.querySelector("#chart-11"),
    optionsChart11
);
chart11.render();
