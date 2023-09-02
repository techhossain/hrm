"use strict";
var optionsChart31 = {
    series: [15, 25, 45, 15],
    chart: {
        type: "donut",
        width: "100%",
        sparkline: {
            enabled: true,
        },
    },
};
var chart31 = new ApexCharts(
    document.querySelector("#chart-31"),
    optionsChart31
);
chart31.render();

var optionsChart32 = {
    series: [
        {
            data: [0, 23, 43, 65, 37, 89, 10],
        },
    ],
    chart: {
        type: "area",
        height: 50,
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

var chart32 = new ApexCharts(
    document.querySelector("#chart-32"),
    optionsChart32
);
chart32.render();

var optionsChart33 = {
    series: [
        {
            data: [0, 23, 43, 65, 37, 89, 10],
        },
    ],
    chart: {
        type: "area",
        height: 50,
        sparkline: {
            enabled: true,
        },
    },
    stroke: {
        curve: "smooth",
        width: 2,
    },
    colors: ["#b983ff"],
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

var chart33 = new ApexCharts(
    document.querySelector("#chart-33"),
    optionsChart33
);
chart33.render();

var optionsChart34 = {
    series: [
        {
            data: [0, 23, 43, 65, 37, 89, 10],
        },
    ],
    chart: {
        type: "area",
        height: 50,
        sparkline: {
            enabled: true,
        },
    },
    stroke: {
        curve: "smooth",
        width: 2,
    },
    colors: ["#ffa0bf"],
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

var chart34 = new ApexCharts(
    document.querySelector("#chart-34"),
    optionsChart34
);
chart34.render();

var optionsChart35 = {
    series: [
        {
            data: [0, 23, 43, 65, 37, 89, 10],
        },
    ],
    chart: {
        type: "area",
        height: 50,
        sparkline: {
            enabled: true,
        },
    },
    stroke: {
        curve: "smooth",
        width: 2,
    },
    colors: ["#ffb82c"],
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

var chart35 = new ApexCharts(
    document.querySelector("#chart-35"),
    optionsChart35
);
chart35.render();

var optionsChart36 = {
    series: [44, 55, 67, 83],
    chart: {
        width: "100%",
        type: "radialBar",
    },
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: "22px",
                },
                value: {
                    fontSize: "16px",
                },
                total: {
                    show: true,
                    label: "Total",
                    formatter: function (w) {
                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                        return 249;
                    },
                },
            },
        },
    },
    labels: ["Apples", "Oranges", "Bananas", "Berries"],
};

var chart36 = new ApexCharts(
    document.querySelector("#chart-36"),
    optionsChart36
);
chart36.render();

var optionsChart37 = {
    series: [
        {
            name: "React",
            data: [44, 55, 41, 67, 22, 43, 21],
        },
        {
            name: "Javascript",
            data: [13, 23, 20, 8, 13, 27, 33],
        },
        {
            name: "Node.js",
            data: [11, 17, 15, 15, 21, 14, 15],
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
        show: false,
        categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
        axisBorder: {
            show: false,
        },
        labels: {
            show: false,
        },
    },
    yaxis: {
        show: false,
    },
    grid: {
        show: false,
    },
    legend: {
        position: "top",
        horizontalAlign: "right",
        markers: {
            width: 12,
            height: 12,
            radius: 12,
            fillColors: ["#6b48ff", "#fed05a", "#d4d4ff"],
        },
        itemMargin: {
            horizontal: 15,
            vertical: 0,
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

var chart37 = new ApexCharts(
    document.querySelector("#chart-37"),
    optionsChart37
);
chart37.render();

am4core.ready(function () {
    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    var continents = {
        AF: 0,
        AN: 1,
        AS: 2,
        EU: 3,
        NA: 4,
        OC: 5,
        SA: 6,
    };

    // Create map instance
    var chart = am4core.create("chart-38", am4maps.MapChart);
    chart.projection = new am4maps.projections.Miller();

    // Create map polygon series for world map
    var worldSeries = chart.series.push(new am4maps.MapPolygonSeries());
    worldSeries.useGeodata = true;
    worldSeries.geodata = am4geodata_worldLow;
    worldSeries.exclude = ["AQ"];

    var worldPolygon = worldSeries.mapPolygons.template;
    worldPolygon.tooltipText = "{name}";
    worldPolygon.nonScalingStroke = true;
    worldPolygon.strokeOpacity = 0.5;
    worldPolygon.fill = am4core.color("#eee");
    worldPolygon.propertyFields.fill = "color";

    var hs = worldPolygon.states.create("hover");
    hs.properties.fill = chart.colors.getIndex(9);

    // Create country specific series (but hide it for now)
    var countrySeries = chart.series.push(new am4maps.MapPolygonSeries());
    countrySeries.useGeodata = true;
    countrySeries.hide();
    countrySeries.geodataSource.events.on("done", function (ev) {
        worldSeries.hide();
        countrySeries.show();
    });

    var countryPolygon = countrySeries.mapPolygons.template;
    countryPolygon.tooltipText = "{name}";
    countryPolygon.nonScalingStroke = true;
    countryPolygon.strokeOpacity = 0.5;
    countryPolygon.fill = am4core.color("#eee");

    var hs = countryPolygon.states.create("hover");
    hs.properties.fill = chart.colors.getIndex(9);

    // Set up click events
    worldPolygon.events.on("hit", function (ev) {
        ev.target.series.chart.zoomToMapObject(ev.target);
        var map = ev.target.dataItem.dataContext.map;
        if (map) {
            ev.target.isHover = false;
            countrySeries.geodataSource.url =
                "https://www.amcharts.com/lib/4/geodata/json/" + map + ".json";
            countrySeries.geodataSource.load();
        }
    });

    // Set up data for countries
    var data = [];
    for (var id in am4geodata_data_countries2) {
        if (am4geodata_data_countries2.hasOwnProperty(id)) {
            var country = am4geodata_data_countries2[id];
            if (country.maps.length) {
                data.push({
                    id: id,
                    color: chart.colors.getIndex(
                        continents[country.continent_code]
                    ),
                    map: country.maps[0],
                });
            }
        }
    }
    worldSeries.data = data;

    // Zoom control
    chart.zoomControl = new am4maps.ZoomControl();

    var homeButton = new am4core.Button();
    homeButton.events.on("hit", function () {
        worldSeries.show();
        countrySeries.hide();
        chart.goHome();
    });

    homeButton.icon = new am4core.Sprite();
    homeButton.padding(7, 5, 7, 5);
    homeButton.width = 30;
    homeButton.icon.path =
        "M16,8 L14,8 L14,16 L10,16 L10,10 L6,10 L6,16 L2,16 L2,8 L0,8 L8,0 L16,8 Z M16,8";
    homeButton.marginBottom = 10;
    homeButton.parent = chart.zoomControl;
    homeButton.insertBefore(chart.zoomControl.plusButton);
}); // end am4core.ready()

var optionsChart39 = {
    series: [25, 55],
    chart: {
        type: "donut",
        width: "100%",
        sparkline: {
            enabled: false,
        },
    },
    legend: {
        show: false,
    },
    dataLabels: {
        enabled: false,
    },
    plotOptions: {
        pie: {
            donut: {
                size: "30%",
            },
        },
    },
    fill: {
        colors: ["#544fff", "#e7edff"],
    },
};

var chart39 = new ApexCharts(
    document.querySelector("#chart-39"),
    optionsChart39
);
chart39.render();

var optionsChart40 = {
    series: [75, 25],
    chart: {
        type: "donut",
        width: "100%",
        sparkline: {
            enabled: false,
        },
    },
    legend: {
        show: false,
    },
    dataLabels: {
        enabled: false,
    },
    plotOptions: {
        pie: {
            donut: {
                size: "30%",
            },
        },
    },
    fill: {
        colors: ["#1BC5BD", "#e7edff"],
    },
};

var chart40 = new ApexCharts(
    document.querySelector("#chart-40"),
    optionsChart40
);
chart40.render();

var optionsChart41 = {
    series: [
        {
            name: "desktop",
            data: [30, 41, 35, 51],
        },
    ],
    chart: {
        type: "line",
        height: 250,
        toolbar: {
            show: false,
        },
    },
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr"],
        axisBorder: {
            show: false,
        },
    },
    stroke: {
        curve: "smooth",
    },
    dataLabels: {
        enabled: false,
    },
    grid: {
        show: true,
        borderColor: "#d7f4ff",
        strokeDashArray: 5,
    },
};
var chart41 = new ApexCharts(
    document.querySelector("#chart-41"),
    optionsChart41
);
chart41.render();
