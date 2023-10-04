"use strict";
var KTWidgets = {
    init: function() {
        var e, t, a, o, r;
        ! function() {
            if (document.querySelector("#kt_dashboard_daterangepicker")) {
                var e = $("#kt_dashboard_daterangepicker"),
                    t = moment(),
                    a = moment();
                e.daterangepicker({
                    direction: KTUtil.isRTL(),
                    startDate: t,
                    endDate: a,
                    opens: "left",
                    applyClass: "btn-primary",
                    cancelClass: "btn-light-primary",
                    ranges: {
                        Today: [moment(), moment()],
                        Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
                        "Last 7 Days": [moment().subtract(6, "days"), moment()],
                        "Last 30 Days": [moment().subtract(29, "days"), moment()],
                        "This Month": [moment().startOf("month"), moment().endOf("month")],
                        "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
                    }
                }, o), o(t, a, "")
            }

            function o(e, t, a) {
                var o = "",
                    r = "";
                t - e < 100 || "Today" == a ? (o = "Today:", r = e.format("MMM D")) : "Yesterday" == a ? (o = "Yesterday:", r = e.format("MMM D")) : r = e.format("MMM D") + " - " + t.format("MMM D"), $("#kt_dashboard_daterangepicker_date").html(r), $("#kt_dashboard_daterangepicker_title").html(o)
            }
        }(), (e = document.querySelector("#kt_user_menu_dark_mode_toggle")) && e.addEventListener("click", (function() {
            window.location.href = this.getAttribute("data-kt-url")
        })), t = document.querySelectorAll(".statistics-widget-3-chart"), [].slice.call(t).map((function(e) {
            var t = parseInt(KTUtil.css(e, "height"));
            if (e) {
                var a = e.getAttribute("data-kt-chart-color"),
                    o = KTUtil.getCssVariableValue("--kt-gray-800"),
                    r = KTUtil.getCssVariableValue("--kt-" + a),
                    s = KTUtil.getCssVariableValue("--kt-" + a + "-light");
                new ApexCharts(e, {
                    series: [{
                        name: "Net Profit",
                        data: [30, 45, 32, 70, 40]
                    }],
                    chart: {
                        fontFamily: "inherit",
                        type: "area",
                        height: t,
                        toolbar: {
                            show: !1
                        },
                        zoom: {
                            enabled: !1
                        },
                        sparkline: {
                            enabled: !0
                        }
                    },
                    plotOptions: {},
                    legend: {
                        show: !1
                    },
                    dataLabels: {
                        enabled: !1
                    },
                    fill: {
                        type: "solid",
                        opacity: .3
                    },
                    stroke: {
                        curve: "smooth",
                        show: !0,
                        width: 3,
                        colors: [r]
                    },
                    xaxis: {
                        categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        axisBorder: {
                            show: !1
                        },
                        axisTicks: {
                            show: !1
                        },
                        labels: {
                            show: !1,
                            style: {
                                colors: o,
                                fontSize: "12px"
                            }
                        },
                        crosshairs: {
                            show: !1,
                            position: "front",
                            stroke: {
                                color: "#E4E6EF",
                                width: 1,
                                dashArray: 3
                            }
                        },
                        tooltip: {
                            enabled: !0,
                            formatter: void 0,
                            offsetY: 0,
                            style: {
                                fontSize: "12px"
                            }
                        }
                    },
                    yaxis: {
                        min: 0,
                        max: 80,
                        labels: {
                            show: !1,
                            style: {
                                colors: o,
                                fontSize: "12px"
                            }
                        }
                    },
                    states: {
                        normal: {
                            filter: {
                                type: "none",
                                value: 0
                            }
                        },
                        hover: {
                            filter: {
                                type: "none",
                                value: 0
                            }
                        },
                        active: {
                            allowMultipleDataPointsSelection: !1,
                            filter: {
                                type: "none",
                                value: 0
                            }
                        }
                    },
                    tooltip: {
                        style: {
                            fontSize: "12px"
                        },
                        y: {
                            formatter: function(e) {
                                return "$" + e + " thousands"
                            }
                        }
                    },
                    colors: [r],
                    markers: {
                        colors: [r],
                        strokeColor: [s],
                        strokeWidth: 3
                    }
                }).render()
            }
        })),
            function() {
                var e = document.querySelectorAll(".statistics-widget-4-chart");
                [].slice.call(e).map((function(e) {
                    var t = parseInt(KTUtil.css(e, "height"));
                    if (e) {
                        var a = e.getAttribute("data-kt-chart-color"),
                            o = KTUtil.getCssVariableValue("--kt-gray-800"),
                            r = KTUtil.getCssVariableValue("--kt-" + a),
                            s = KTUtil.getCssVariableValue("--kt-" + a + "-light");
                        new ApexCharts(e, {
                            series: [{
                                name: "Net Profit",
                                data: [40, 40, 30, 30, 35, 35, 50]
                            }],
                            chart: {
                                fontFamily: "inherit",
                                type: "area",
                                height: t,
                                toolbar: {
                                    show: !1
                                },
                                zoom: {
                                    enabled: !1
                                },
                                sparkline: {
                                    enabled: !0
                                }
                            },
                            plotOptions: {},
                            legend: {
                                show: !1
                            },
                            dataLabels: {
                                enabled: !1
                            },
                            fill: {
                                type: "solid",
                                opacity: .3
                            },
                            stroke: {
                                curve: "smooth",
                                show: !0,
                                width: 3,
                                colors: [r]
                            },
                            xaxis: {
                                categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                                axisBorder: {
                                    show: !1
                                },
                                axisTicks: {
                                    show: !1
                                },
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: o,
                                        fontSize: "12px"
                                    }
                                },
                                crosshairs: {
                                    show: !1,
                                    position: "front",
                                    stroke: {
                                        color: "#E4E6EF",
                                        width: 1,
                                        dashArray: 3
                                    }
                                },
                                tooltip: {
                                    enabled: !0,
                                    formatter: void 0,
                                    offsetY: 0,
                                    style: {
                                        fontSize: "12px"
                                    }
                                }
                            },
                            yaxis: {
                                min: 0,
                                max: 60,
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: o,
                                        fontSize: "12px"
                                    }
                                }
                            },
                            states: {
                                normal: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                hover: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                active: {
                                    allowMultipleDataPointsSelection: !1,
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                }
                            },
                            tooltip: {
                                style: {
                                    fontSize: "12px"
                                },
                                y: {
                                    formatter: function(e) {
                                        return "$" + e + " thousands"
                                    }
                                }
                            },
                            colors: [r],
                            markers: {
                                colors: [r],
                                strokeColor: [s],
                                strokeWidth: 3
                            }
                        }).render()
                    }
                }))
            }(),
            function() {
                var e = document.getElementById("kt_charts_widget_1_chart");
                if (e) {
                    var t = {
                            self: null,
                            rendered: !1
                        },
                        a = function() {
                            var a = parseInt(KTUtil.css(e, "height")),
                                o = KTUtil.getCssVariableValue("--kt-gray-500"),
                                r = KTUtil.getCssVariableValue("--kt-gray-200"),
                                s = {
                                    series: [{
                                        name: "Net Profit",
                                        data: [44, 55, 57, 56, 61, 58]
                                    }, {
                                        name: "Revenue",
                                        data: [76, 85, 101, 98, 87, 105]
                                    }],
                                    chart: {
                                        fontFamily: "inherit",
                                        type: "bar",
                                        height: a,
                                        toolbar: {
                                            show: !1
                                        }
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: !1,
                                            columnWidth: ["30%"],
                                            borderRadius: 4
                                        }
                                    },
                                    legend: {
                                        show: !1
                                    },
                                    dataLabels: {
                                        enabled: !1
                                    },
                                    stroke: {
                                        show: !0,
                                        width: 2,
                                        colors: ["transparent"]
                                    },
                                    xaxis: {
                                        categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                        axisBorder: {
                                            show: !1
                                        },
                                        axisTicks: {
                                            show: !1
                                        },
                                        labels: {
                                            style: {
                                                colors: o,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    yaxis: {
                                        labels: {
                                            style: {
                                                colors: o,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    fill: {
                                        opacity: 1
                                    },
                                    states: {
                                        normal: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        hover: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        active: {
                                            allowMultipleDataPointsSelection: !1,
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        }
                                    },
                                    tooltip: {
                                        style: {
                                            fontSize: "12px"
                                        },
                                        y: {
                                            formatter: function(e) {
                                                return "$" + e + " thousands"
                                            }
                                        }
                                    },
                                    colors: [KTUtil.getCssVariableValue("--kt-primary"), KTUtil.getCssVariableValue("--kt-gray-300")],
                                    grid: {
                                        borderColor: r,
                                        strokeDashArray: 4,
                                        yaxis: {
                                            lines: {
                                                show: !0
                                            }
                                        }
                                    }
                                };
                            t.self = new ApexCharts(e, s), t.self.render(), t.rendered = !0
                        };
                    a(), KTThemeMode.on("kt.thememode.change", (function() {
                        t.rendered && t.self.destroy(), a()
                    }))
                }
            }(),
            function() {
                var e = document.getElementById("kt_charts_widget_2_chart");
                if (e) {
                    var t = {
                            self: null,
                            rendered: !1
                        },
                        a = function() {
                            var a = parseInt(KTUtil.css(e, "height")),
                                o = KTUtil.getCssVariableValue("--kt-gray-500"),
                                r = KTUtil.getCssVariableValue("--kt-gray-200"),
                                s = {
                                    series: [{
                                        name: "Net Profit",
                                        data: [44, 55, 57, 56, 61, 58]
                                    }, {
                                        name: "Revenue",
                                        data: [76, 85, 101, 98, 87, 105]
                                    }],
                                    chart: {
                                        fontFamily: "inherit",
                                        type: "bar",
                                        height: a,
                                        toolbar: {
                                            show: !1
                                        }
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: !1,
                                            columnWidth: ["30%"],
                                            borderRadius: 4
                                        }
                                    },
                                    legend: {
                                        show: !1
                                    },
                                    dataLabels: {
                                        enabled: !1
                                    },
                                    stroke: {
                                        show: !0,
                                        width: 2,
                                        colors: ["transparent"]
                                    },
                                    xaxis: {
                                        categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                        axisBorder: {
                                            show: !1
                                        },
                                        axisTicks: {
                                            show: !1
                                        },
                                        labels: {
                                            style: {
                                                colors: o,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    yaxis: {
                                        labels: {
                                            style: {
                                                colors: o,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    fill: {
                                        opacity: 1
                                    },
                                    states: {
                                        normal: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        hover: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        active: {
                                            allowMultipleDataPointsSelection: !1,
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        }
                                    },
                                    tooltip: {
                                        style: {
                                            fontSize: "12px"
                                        },
                                        y: {
                                            formatter: function(e) {
                                                return "$" + e + " thousands"
                                            }
                                        }
                                    },
                                    colors: [KTUtil.getCssVariableValue("--kt-warning"), KTUtil.getCssVariableValue("--kt-gray-300")],
                                    grid: {
                                        borderColor: r,
                                        strokeDashArray: 4,
                                        yaxis: {
                                            lines: {
                                                show: !0
                                            }
                                        }
                                    }
                                };
                            t.self = new ApexCharts(e, s), t.self.render(), t.rendered = !0
                        };
                    a(), KTThemeMode.on("kt.thememode.change", (function() {
                        t.rendered && t.self.destroy(), a()
                    }))
                }
            }(),
            function() {
                var e = document.getElementById("kt_charts_widget_3_chart");
                if (e) {
                    var t = {
                            self: null,
                            rendered: !1
                        },
                        a = function() {
                            parseInt(KTUtil.css(e, "height"));
                            var a = KTUtil.getCssVariableValue("--kt-gray-500"),
                                o = KTUtil.getCssVariableValue("--kt-gray-200"),
                                r = KTUtil.getCssVariableValue("--kt-info"),
                                s = {
                                    series: [{
                                        name: "Net Profit",
                                        data: [30, 40, 40, 90, 90, 70, 70]
                                    }],
                                    chart: {
                                        fontFamily: "inherit",
                                        type: "area",
                                        height: 350,
                                        toolbar: {
                                            show: !1
                                        }
                                    },
                                    plotOptions: {},
                                    legend: {
                                        show: !1
                                    },
                                    dataLabels: {
                                        enabled: !1
                                    },
                                    fill: {
                                        type: "solid",
                                        opacity: 1
                                    },
                                    stroke: {
                                        curve: "smooth",
                                        show: !0,
                                        width: 3,
                                        colors: [r]
                                    },
                                    xaxis: {
                                        categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                                        axisBorder: {
                                            show: !1
                                        },
                                        axisTicks: {
                                            show: !1
                                        },
                                        labels: {
                                            style: {
                                                colors: a,
                                                fontSize: "12px"
                                            }
                                        },
                                        crosshairs: {
                                            position: "front",
                                            stroke: {
                                                color: r,
                                                width: 1,
                                                dashArray: 3
                                            }
                                        },
                                        tooltip: {
                                            enabled: !0,
                                            formatter: void 0,
                                            offsetY: 0,
                                            style: {
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    yaxis: {
                                        labels: {
                                            style: {
                                                colors: a,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    states: {
                                        normal: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        hover: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        active: {
                                            allowMultipleDataPointsSelection: !1,
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        }
                                    },
                                    tooltip: {
                                        style: {
                                            fontSize: "12px"
                                        },
                                        y: {
                                            formatter: function(e) {
                                                return "$" + e + " thousands"
                                            }
                                        }
                                    },
                                    colors: [KTUtil.getCssVariableValue("--kt-info-light")],
                                    grid: {
                                        borderColor: o,
                                        strokeDashArray: 4,
                                        yaxis: {
                                            lines: {
                                                show: !0
                                            }
                                        }
                                    },
                                    markers: {
                                        strokeColor: r,
                                        strokeWidth: 3
                                    }
                                };
                            t.self = new ApexCharts(e, s), t.self.render(), t.rendered = !0
                        };
                    a(), KTThemeMode.on("kt.thememode.change", (function() {
                        t.rendered && t.self.destroy(), a()
                    }))
                }
            }(),
            function() {
                var e = document.getElementById("kt_charts_widget_4_chart");
                if (e) {
                    var t = {
                            self: null,
                            rendered: !1
                        },
                        a = function() {
                            parseInt(KTUtil.css(e, "height"));
                            var a = KTUtil.getCssVariableValue("--kt-gray-500"),
                                o = KTUtil.getCssVariableValue("--kt-gray-200"),
                                r = KTUtil.getCssVariableValue("--kt-success"),
                                s = KTUtil.getCssVariableValue("--kt-success-light"),
                                l = KTUtil.getCssVariableValue("--kt-warning"),
                                i = KTUtil.getCssVariableValue("--kt-warning-light"),
                                n = {
                                    series: [{
                                        name: "Net Profit",
                                        data: [60, 50, 80, 40, 100, 60]
                                    }, {
                                        name: "Revenue",
                                        data: [70, 60, 110, 40, 50, 70]
                                    }],
                                    chart: {
                                        fontFamily: "inherit",
                                        type: "area",
                                        height: 350,
                                        toolbar: {
                                            show: !1
                                        }
                                    },
                                    plotOptions: {},
                                    legend: {
                                        show: !1
                                    },
                                    dataLabels: {
                                        enabled: !1
                                    },
                                    fill: {
                                        type: "solid",
                                        opacity: 1
                                    },
                                    stroke: {
                                        curve: "smooth"
                                    },
                                    xaxis: {
                                        categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                        axisBorder: {
                                            show: !1
                                        },
                                        axisTicks: {
                                            show: !1
                                        },
                                        labels: {
                                            style: {
                                                colors: a,
                                                fontSize: "12px"
                                            }
                                        },
                                        crosshairs: {
                                            position: "front",
                                            stroke: {
                                                color: a,
                                                width: 1,
                                                dashArray: 3
                                            }
                                        },
                                        tooltip: {
                                            enabled: !0,
                                            formatter: void 0,
                                            offsetY: 0,
                                            style: {
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    yaxis: {
                                        labels: {
                                            style: {
                                                colors: a,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    states: {
                                        normal: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        hover: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        active: {
                                            allowMultipleDataPointsSelection: !1,
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        }
                                    },
                                    tooltip: {
                                        style: {
                                            fontSize: "12px"
                                        },
                                        y: {
                                            formatter: function(e) {
                                                return "$" + e + " thousands"
                                            }
                                        }
                                    },
                                    colors: [r, l],
                                    grid: {
                                        borderColor: o,
                                        strokeDashArray: 4,
                                        yaxis: {
                                            lines: {
                                                show: !0
                                            }
                                        }
                                    },
                                    markers: {
                                        colors: [s, i],
                                        strokeColor: [s, i],
                                        strokeWidth: 3
                                    }
                                };
                            t.self = new ApexCharts(e, n), t.self.render(), t.rendered = !0
                        };
                    a(), KTThemeMode.on("kt.thememode.change", (function() {
                        t.rendered && t.self.destroy(), a()
                    }))
                }
            }(),
            function() {
                var e = document.getElementById("kt_charts_widget_5_chart");
                if (e) {
                    var t = {
                            self: null,
                            rendered: !1
                        },
                        a = function() {
                            parseInt(KTUtil.css(e, "height"));
                            var a = KTUtil.getCssVariableValue("--kt-gray-500"),
                                o = KTUtil.getCssVariableValue("--kt-gray-200"),
                                r = {
                                    series: [{
                                        name: "Net Profit",
                                        data: [40, 50, 65, 70, 50, 30]
                                    }, {
                                        name: "Revenue",
                                        data: [-30, -40, -55, -60, -40, -20]
                                    }],
                                    chart: {
                                        fontFamily: "inherit",
                                        type: "bar",
                                        stacked: !0,
                                        height: 350,
                                        toolbar: {
                                            show: !1
                                        }
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: !1,
                                            columnWidth: ["12%"],
                                            borderRadius: [6, 6]
                                        }
                                    },
                                    legend: {
                                        show: !1
                                    },
                                    dataLabels: {
                                        enabled: !1
                                    },
                                    stroke: {
                                        show: !0,
                                        width: 2,
                                        colors: ["transparent"]
                                    },
                                    xaxis: {
                                        categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                        axisBorder: {
                                            show: !1
                                        },
                                        axisTicks: {
                                            show: !1
                                        },
                                        labels: {
                                            style: {
                                                colors: a,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    yaxis: {
                                        min: -80,
                                        max: 80,
                                        labels: {
                                            style: {
                                                colors: a,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    fill: {
                                        opacity: 1
                                    },
                                    states: {
                                        normal: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        hover: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        active: {
                                            allowMultipleDataPointsSelection: !1,
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        }
                                    },
                                    tooltip: {
                                        style: {
                                            fontSize: "12px"
                                        },
                                        y: {
                                            formatter: function(e) {
                                                return "$" + e + " thousands"
                                            }
                                        }
                                    },
                                    colors: [KTUtil.getCssVariableValue("--kt-primary"), KTUtil.getCssVariableValue("--kt-info")],
                                    grid: {
                                        borderColor: o,
                                        strokeDashArray: 4,
                                        yaxis: {
                                            lines: {
                                                show: !0
                                            }
                                        }
                                    }
                                };
                            t.self = new ApexCharts(e, r), t.self.render(), t.rendered = !0
                        };
                    a(), KTThemeMode.on("kt.thememode.change", (function() {
                        t.rendered && t.self.destroy(), a()
                    }))
                }
            }(),
            function() {
                var e = document.getElementById("kt_charts_widget_6_chart");
                if (e) {
                    var t = {
                            self: null,
                            rendered: !1
                        },
                        a = function() {
                            parseInt(KTUtil.css(e, "height"));
                            var a = KTUtil.getCssVariableValue("--kt-gray-500"),
                                o = KTUtil.getCssVariableValue("--kt-gray-200"),
                                r = KTUtil.getCssVariableValue("--kt-primary"),
                                s = KTUtil.getCssVariableValue("--kt-primary-light"),
                                l = {
                                    series: [{
                                        name: "Net Profit",
                                        type: "bar",
                                        stacked: !0,
                                        data: [40, 50, 65, 70, 50, 30]
                                    }, {
                                        name: "Revenue",
                                        type: "bar",
                                        stacked: !0,
                                        data: [20, 20, 25, 30, 30, 20]
                                    }, {
                                        name: "Expenses",
                                        type: "area",
                                        data: [50, 80, 60, 90, 50, 70]
                                    }],
                                    chart: {
                                        fontFamily: "inherit",
                                        stacked: !0,
                                        height: 350,
                                        toolbar: {
                                            show: !1
                                        }
                                    },
                                    plotOptions: {
                                        bar: {
                                            stacked: !0,
                                            horizontal: !1,
                                            borderRadius: 4,
                                            columnWidth: ["12%"]
                                        }
                                    },
                                    legend: {
                                        show: !1
                                    },
                                    dataLabels: {
                                        enabled: !1
                                    },
                                    stroke: {
                                        curve: "smooth",
                                        show: !0,
                                        width: 2,
                                        colors: ["transparent"]
                                    },
                                    xaxis: {
                                        categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                        axisBorder: {
                                            show: !1
                                        },
                                        axisTicks: {
                                            show: !1
                                        },
                                        labels: {
                                            style: {
                                                colors: a,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    yaxis: {
                                        max: 120,
                                        labels: {
                                            style: {
                                                colors: a,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    fill: {
                                        opacity: 1
                                    },
                                    states: {
                                        normal: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        hover: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        active: {
                                            allowMultipleDataPointsSelection: !1,
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        }
                                    },
                                    tooltip: {
                                        style: {
                                            fontSize: "12px"
                                        },
                                        y: {
                                            formatter: function(e) {
                                                return "$" + e + " thousands"
                                            }
                                        }
                                    },
                                    colors: [r, KTUtil.getCssVariableValue("--kt-info"), s],
                                    grid: {
                                        borderColor: o,
                                        strokeDashArray: 4,
                                        yaxis: {
                                            lines: {
                                                show: !0
                                            }
                                        },
                                        padding: {
                                            top: 0,
                                            right: 0,
                                            bottom: 0,
                                            left: 0
                                        }
                                    }
                                };
                            t.self = new ApexCharts(e, l), t.self.render(), t.rendered = !0
                        };
                    a(), KTThemeMode.on("kt.thememode.change", (function() {
                        t.rendered && t.self.destroy(), a()
                    }))
                }
            }(),
            function() {
                var e = document.getElementById("kt_charts_widget_7_chart");
                if (e) {
                    var t = {
                            self: null,
                            rendered: !1
                        },
                        a = function() {
                            var a = parseInt(KTUtil.css(e, "height")),
                                o = KTUtil.getCssVariableValue("--kt-gray-500"),
                                r = KTUtil.getCssVariableValue("--kt-gray-200"),
                                s = KTUtil.getCssVariableValue("--kt-gray-300"),
                                l = KTUtil.getCssVariableValue("--kt-warning"),
                                i = KTUtil.getCssVariableValue("--kt-warning-light"),
                                n = KTUtil.getCssVariableValue("--kt-success"),
                                d = KTUtil.getCssVariableValue("--kt-success-light"),
                                c = KTUtil.getCssVariableValue("--kt-primary"),
                                h = {
                                    series: [{
                                        name: "Net Profit",
                                        data: [30, 30, 50, 50, 35, 35]
                                    }, {
                                        name: "Revenue",
                                        data: [55, 20, 20, 20, 70, 70]
                                    }, {
                                        name: "Expenses",
                                        data: [60, 60, 40, 40, 30, 30]
                                    }],
                                    chart: {
                                        fontFamily: "inherit",
                                        type: "area",
                                        height: a,
                                        toolbar: {
                                            show: !1
                                        },
                                        zoom: {
                                            enabled: !1
                                        },
                                        sparkline: {
                                            enabled: !0
                                        }
                                    },
                                    plotOptions: {},
                                    legend: {
                                        show: !1
                                    },
                                    dataLabels: {
                                        enabled: !1
                                    },
                                    fill: {
                                        type: "solid",
                                        opacity: 1
                                    },
                                    stroke: {
                                        curve: "smooth",
                                        show: !0,
                                        width: 2,
                                        colors: [l, "transparent", "transparent"]
                                    },
                                    xaxis: {
                                        categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                        axisBorder: {
                                            show: !1
                                        },
                                        axisTicks: {
                                            show: !1
                                        },
                                        labels: {
                                            show: !1,
                                            style: {
                                                colors: o,
                                                fontSize: "12px"
                                            }
                                        },
                                        crosshairs: {
                                            show: !1,
                                            position: "front",
                                            stroke: {
                                                color: s,
                                                width: 1,
                                                dashArray: 3
                                            }
                                        },
                                        tooltip: {
                                            enabled: !0,
                                            formatter: void 0,
                                            offsetY: 0,
                                            style: {
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    yaxis: {
                                        labels: {
                                            show: !1,
                                            style: {
                                                colors: o,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    states: {
                                        normal: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        hover: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        active: {
                                            allowMultipleDataPointsSelection: !1,
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        }
                                    },
                                    tooltip: {
                                        style: {
                                            fontSize: "12px"
                                        },
                                        y: {
                                            formatter: function(e) {
                                                return "$" + e + " thousands"
                                            }
                                        }
                                    },
                                    colors: [l, n, c],
                                    grid: {
                                        borderColor: r,
                                        strokeDashArray: 4,
                                        yaxis: {
                                            lines: {
                                                show: !0
                                            }
                                        }
                                    },
                                    markers: {
                                        colors: [i, d, KTUtil.getCssVariableValue("--kt-primary-light")],
                                        strokeColor: [l, n, c],
                                        strokeWidth: 3
                                    }
                                };
                            t.self = new ApexCharts(e, h), t.self.render(), t.rendered = !0
                        };
                    a(), KTThemeMode.on("kt.thememode.change", (function() {
                        t.rendered && t.self.destroy(), a()
                    }))
                }
            }(),
            function() {
                var e = document.getElementById("kt_charts_widget_8_chart");
                if (e) {
                    var t = {
                            self: null,
                            rendered: !1
                        },
                        a = function() {
                            var a = parseInt(KTUtil.css(e, "height")),
                                o = KTUtil.getCssVariableValue("--kt-gray-500"),
                                r = KTUtil.getCssVariableValue("--kt-gray-200"),
                                s = KTUtil.getCssVariableValue("--kt-gray-300"),
                                l = KTUtil.getCssVariableValue("--kt-warning"),
                                i = KTUtil.getCssVariableValue("--kt-warning-light"),
                                n = KTUtil.getCssVariableValue("--kt-success"),
                                d = KTUtil.getCssVariableValue("--kt-success-light"),
                                c = KTUtil.getCssVariableValue("--kt-primary"),
                                h = {
                                    series: [{
                                        name: "Net Profit",
                                        data: [30, 30, 50, 50, 35, 35]
                                    }, {
                                        name: "Revenue",
                                        data: [55, 20, 20, 20, 70, 70]
                                    }, {
                                        name: "Expenses",
                                        data: [60, 60, 40, 40, 30, 30]
                                    }],
                                    chart: {
                                        fontFamily: "inherit",
                                        type: "area",
                                        height: a,
                                        toolbar: {
                                            show: !1
                                        },
                                        zoom: {
                                            enabled: !1
                                        },
                                        sparkline: {
                                            enabled: !0
                                        }
                                    },
                                    plotOptions: {},
                                    legend: {
                                        show: !1
                                    },
                                    dataLabels: {
                                        enabled: !1
                                    },
                                    fill: {
                                        type: "solid",
                                        opacity: 1
                                    },
                                    stroke: {
                                        curve: "smooth",
                                        show: !0,
                                        width: 2,
                                        colors: [l, n, c]
                                    },
                                    xaxis: {
                                        x: 0,
                                        offsetX: 0,
                                        offsetY: 0,
                                        padding: {
                                            left: 0,
                                            right: 0,
                                            top: 0
                                        },
                                        categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                        axisBorder: {
                                            show: !1
                                        },
                                        axisTicks: {
                                            show: !1
                                        },
                                        labels: {
                                            show: !1,
                                            style: {
                                                colors: o,
                                                fontSize: "12px"
                                            }
                                        },
                                        crosshairs: {
                                            show: !1,
                                            position: "front",
                                            stroke: {
                                                color: s,
                                                width: 1,
                                                dashArray: 3
                                            }
                                        },
                                        tooltip: {
                                            enabled: !0,
                                            formatter: void 0,
                                            offsetY: 0,
                                            style: {
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    yaxis: {
                                        y: 0,
                                        offsetX: 0,
                                        offsetY: 0,
                                        padding: {
                                            left: 0,
                                            right: 0
                                        },
                                        labels: {
                                            show: !1,
                                            style: {
                                                colors: o,
                                                fontSize: "12px"
                                            }
                                        }
                                    },
                                    states: {
                                        normal: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        hover: {
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        },
                                        active: {
                                            allowMultipleDataPointsSelection: !1,
                                            filter: {
                                                type: "none",
                                                value: 0
                                            }
                                        }
                                    },
                                    tooltip: {
                                        style: {
                                            fontSize: "12px"
                                        },
                                        y: {
                                            formatter: function(e) {
                                                return "$" + e + " thousands"
                                            }
                                        }
                                    },
                                    colors: [i, d, KTUtil.getCssVariableValue("--kt-primary-light")],
                                    grid: {
                                        borderColor: r,
                                        strokeDashArray: 4,
                                        padding: {
                                            top: 0,
                                            bottom: 0,
                                            left: 0,
                                            right: 0
                                        }
                                    },
                                    markers: {
                                        colors: [l, n, c],
                                        strokeColor: [l, n, c],
                                        strokeWidth: 3
                                    }
                                };
                            t.self = new ApexCharts(e, h), t.self.render(), t.rendered = !0
                        };
                    a(), KTThemeMode.on("kt.thememode.change", (function() {
                        t.rendered && t.self.destroy(), a()
                    }))
                }
            }(),
            function() {
                var e, t, a, o = document.querySelectorAll(".mixed-widget-2-chart"),
                    r = KTUtil.getCssVariableValue("--kt-gray-500"),
                    s = KTUtil.getCssVariableValue("--kt-gray-200");
                [].slice.call(o).map((function(o) {
                    a = parseInt(KTUtil.css(o, "height")), e = KTUtil.getCssVariableValue("--kt-" + o.getAttribute("data-kt-color")), t = KTUtil.colorDarken(e, 15), new ApexCharts(o, {
                        series: [{
                            name: "Net Profit",
                            data: [30, 45, 32, 70, 40, 40, 40]
                        }],
                        chart: {
                            fontFamily: "inherit",
                            type: "area",
                            height: a,
                            toolbar: {
                                show: !1
                            },
                            zoom: {
                                enabled: !1
                            },
                            sparkline: {
                                enabled: !0
                            },
                            dropShadow: {
                                enabled: !0,
                                enabledOnSeries: void 0,
                                top: 5,
                                left: 0,
                                blur: 3,
                                color: t,
                                opacity: .5
                            }
                        },
                        plotOptions: {},
                        legend: {
                            show: !1
                        },
                        dataLabels: {
                            enabled: !1
                        },
                        fill: {
                            type: "solid",
                            opacity: 0
                        },
                        stroke: {
                            curve: "smooth",
                            show: !0,
                            width: 3,
                            colors: [t]
                        },
                        xaxis: {
                            categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                            axisBorder: {
                                show: !1
                            },
                            axisTicks: {
                                show: !1
                            },
                            labels: {
                                show: !1,
                                style: {
                                    colors: r,
                                    fontSize: "12px"
                                }
                            },
                            crosshairs: {
                                show: !1,
                                position: "front",
                                stroke: {
                                    color: s,
                                    width: 1,
                                    dashArray: 3
                                }
                            }
                        },
                        yaxis: {
                            min: 0,
                            max: 80,
                            labels: {
                                show: !1,
                                style: {
                                    colors: r,
                                    fontSize: "12px"
                                }
                            }
                        },
                        states: {
                            normal: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            hover: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            active: {
                                allowMultipleDataPointsSelection: !1,
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            }
                        },
                        tooltip: {
                            style: {
                                fontSize: "12px"
                            },
                            y: {
                                formatter: function(e) {
                                    return "$" + e + " thousands"
                                }
                            },
                            marker: {
                                show: !1
                            }
                        },
                        colors: ["transparent"],
                        markers: {
                            colors: [e],
                            strokeColor: [t],
                            strokeWidth: 3
                        }
                    }).render()
                }))
            }(),
            function() {
                var e = document.querySelectorAll(".mixed-widget-3-chart");
                [].slice.call(e).map((function(e) {
                    var t = parseInt(KTUtil.css(e, "height"));
                    if (e) {
                        var a = e.getAttribute("data-kt-chart-color"),
                            o = KTUtil.getCssVariableValue("--kt-gray-800"),
                            r = KTUtil.getCssVariableValue("--kt-gray-300"),
                            s = KTUtil.getCssVariableValue("--kt-" + a),
                            l = KTUtil.getCssVariableValue("--kt-" + a + "-light");
                        new ApexCharts(e, {
                            series: [{
                                name: "Net Profit",
                                data: [30, 25, 45, 30, 55, 55]
                            }],
                            chart: {
                                fontFamily: "inherit",
                                type: "area",
                                height: t,
                                toolbar: {
                                    show: !1
                                },
                                zoom: {
                                    enabled: !1
                                },
                                sparkline: {
                                    enabled: !0
                                }
                            },
                            plotOptions: {},
                            legend: {
                                show: !1
                            },
                            dataLabels: {
                                enabled: !1
                            },
                            fill: {
                                type: "solid",
                                opacity: 1
                            },
                            stroke: {
                                curve: "smooth",
                                show: !0,
                                width: 3,
                                colors: [s]
                            },
                            xaxis: {
                                categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                axisBorder: {
                                    show: !1
                                },
                                axisTicks: {
                                    show: !1
                                },
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: o,
                                        fontSize: "12px"
                                    }
                                },
                                crosshairs: {
                                    show: !1,
                                    position: "front",
                                    stroke: {
                                        color: r,
                                        width: 1,
                                        dashArray: 3
                                    }
                                },
                                tooltip: {
                                    enabled: !0,
                                    formatter: void 0,
                                    offsetY: 0,
                                    style: {
                                        fontSize: "12px"
                                    }
                                }
                            },
                            yaxis: {
                                min: 0,
                                max: 60,
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: o,
                                        fontSize: "12px"
                                    }
                                }
                            },
                            states: {
                                normal: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                hover: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                active: {
                                    allowMultipleDataPointsSelection: !1,
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                }
                            },
                            tooltip: {
                                style: {
                                    fontSize: "12px"
                                },
                                y: {
                                    formatter: function(e) {
                                        return "$" + e + " thousands"
                                    }
                                }
                            },
                            colors: [l],
                            markers: {
                                colors: [l],
                                strokeColor: [s],
                                strokeWidth: 3
                            }
                        }).render()
                    }
                }))
            }(),
            function() {
                var e = document.querySelectorAll(".mixed-widget-4-chart");
                [].slice.call(e).map((function(e) {
                    var t = parseInt(KTUtil.css(e, "height"));
                    if (e) {
                        var a = e.getAttribute("data-kt-chart-color"),
                            o = KTUtil.getCssVariableValue("--kt-" + a),
                            r = KTUtil.getCssVariableValue("--kt-" + a + "-light"),
                            s = KTUtil.getCssVariableValue("--kt-gray-700");
                        new ApexCharts(e, {
                            series: [74],
                            chart: {
                                fontFamily: "inherit",
                                height: t,
                                type: "radialBar"
                            },
                            plotOptions: {
                                radialBar: {
                                    hollow: {
                                        margin: 0,
                                        size: "65%"
                                    },
                                    dataLabels: {
                                        showOn: "always",
                                        name: {
                                            show: !1,
                                            fontWeight: "700"
                                        },
                                        value: {
                                            color: s,
                                            fontSize: "30px",
                                            fontWeight: "700",
                                            offsetY: 12,
                                            show: !0,
                                            formatter: function(e) {
                                                return e + "%"
                                            }
                                        }
                                    },
                                    track: {
                                        background: r,
                                        strokeWidth: "100%"
                                    }
                                }
                            },
                            colors: [o],
                            stroke: {
                                lineCap: "round"
                            },
                            labels: ["Progress"]
                        }).render()
                    }
                }))
            }(),
            function() {
                var e = document.querySelectorAll(".mixed-widget-5-chart");
                [].slice.call(e).map((function(e) {
                    var t = parseInt(KTUtil.css(e, "height"));
                    if (e) {
                        var a = e.getAttribute("data-kt-chart-color"),
                            o = KTUtil.getCssVariableValue("--kt-gray-800"),
                            r = KTUtil.getCssVariableValue("--kt-gray-300"),
                            s = KTUtil.getCssVariableValue("--kt-" + a),
                            l = KTUtil.getCssVariableValue("--kt-" + a + "-light");
                        new ApexCharts(e, {
                            series: [{
                                name: "Net Profit",
                                data: [30, 30, 60, 25, 25, 40]
                            }],
                            chart: {
                                fontFamily: "inherit",
                                type: "area",
                                height: t,
                                toolbar: {
                                    show: !1
                                },
                                zoom: {
                                    enabled: !1
                                },
                                sparkline: {
                                    enabled: !0
                                }
                            },
                            plotOptions: {},
                            legend: {
                                show: !1
                            },
                            dataLabels: {
                                enabled: !1
                            },
                            fill: {
                                type: "solid",
                                opacity: 1
                            },
                            fill1: {
                                type: "gradient",
                                opacity: 1,
                                gradient: {
                                    type: "vertical",
                                    shadeIntensity: .5,
                                    gradientToColors: void 0,
                                    inverseColors: !0,
                                    opacityFrom: 1,
                                    opacityTo: .375,
                                    stops: [25, 50, 100],
                                    colorStops: []
                                }
                            },
                            stroke: {
                                curve: "smooth",
                                show: !0,
                                width: 3,
                                colors: [s]
                            },
                            xaxis: {
                                categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                axisBorder: {
                                    show: !1
                                },
                                axisTicks: {
                                    show: !1
                                },
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: o,
                                        fontSize: "12px"
                                    }
                                },
                                crosshairs: {
                                    show: !1,
                                    position: "front",
                                    stroke: {
                                        color: r,
                                        width: 1,
                                        dashArray: 3
                                    }
                                },
                                tooltip: {
                                    enabled: !0,
                                    formatter: void 0,
                                    offsetY: 0,
                                    style: {
                                        fontSize: "12px"
                                    }
                                }
                            },
                            yaxis: {
                                min: 0,
                                max: 65,
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: o,
                                        fontSize: "12px"
                                    }
                                }
                            },
                            states: {
                                normal: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                hover: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                active: {
                                    allowMultipleDataPointsSelection: !1,
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                }
                            },
                            tooltip: {
                                style: {
                                    fontSize: "12px"
                                },
                                y: {
                                    formatter: function(e) {
                                        return "$" + e + " thousands"
                                    }
                                }
                            },
                            colors: [l],
                            markers: {
                                colors: [l],
                                strokeColor: [s],
                                strokeWidth: 3
                            }
                        }).render()
                    }
                }))
            }(),
            function() {
                var e = document.querySelectorAll(".mixed-widget-6-chart");
                [].slice.call(e).map((function(e) {
                    var t = parseInt(KTUtil.css(e, "height"));
                    if (e) {
                        var a = e.getAttribute("data-kt-chart-color"),
                            o = KTUtil.getCssVariableValue("--kt-gray-800"),
                            r = KTUtil.getCssVariableValue("--kt-gray-300"),
                            s = KTUtil.getCssVariableValue("--kt-" + a),
                            l = KTUtil.getCssVariableValue("--kt-" + a + "-light");
                        new ApexCharts(e, {
                            series: [{
                                name: "Net Profit",
                                data: [30, 25, 45, 30, 55, 55]
                            }],
                            chart: {
                                fontFamily: "inherit",
                                type: "area",
                                height: t,
                                toolbar: {
                                    show: !1
                                },
                                zoom: {
                                    enabled: !1
                                },
                                sparkline: {
                                    enabled: !0
                                }
                            },
                            plotOptions: {},
                            legend: {
                                show: !1
                            },
                            dataLabels: {
                                enabled: !1
                            },
                            fill: {
                                type: "solid",
                                opacity: 1
                            },
                            stroke: {
                                curve: "smooth",
                                show: !0,
                                width: 3,
                                colors: [s]
                            },
                            xaxis: {
                                categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                axisBorder: {
                                    show: !1
                                },
                                axisTicks: {
                                    show: !1
                                },
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: o,
                                        fontSize: "12px"
                                    }
                                },
                                crosshairs: {
                                    show: !1,
                                    position: "front",
                                    stroke: {
                                        color: r,
                                        width: 1,
                                        dashArray: 3
                                    }
                                },
                                tooltip: {
                                    enabled: !0,
                                    formatter: void 0,
                                    offsetY: 0,
                                    style: {
                                        fontSize: "12px"
                                    }
                                }
                            },
                            yaxis: {
                                min: 0,
                                max: 60,
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: o,
                                        fontSize: "12px"
                                    }
                                }
                            },
                            states: {
                                normal: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                hover: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                active: {
                                    allowMultipleDataPointsSelection: !1,
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                }
                            },
                            tooltip: {
                                style: {
                                    fontSize: "12px"
                                },
                                y: {
                                    formatter: function(e) {
                                        return "$" + e + " thousands"
                                    }
                                }
                            },
                            colors: [l],
                            markers: {
                                colors: [l],
                                strokeColor: [s],
                                strokeWidth: 3
                            }
                        }).render()
                    }
                }))
            }(),
            function() {
                var e = document.querySelectorAll(".mixed-widget-7-chart");
                [].slice.call(e).map((function(e) {
                    var t = parseInt(KTUtil.css(e, "height"));
                    if (e) {
                        var a = e.getAttribute("data-kt-chart-color"),
                            o = KTUtil.getCssVariableValue("--kt-gray-800"),
                            r = KTUtil.getCssVariableValue("--kt-gray-300"),
                            s = KTUtil.getCssVariableValue("--kt-" + a),
                            l = KTUtil.getCssVariableValue("--kt-" + a + "-light");
                        new ApexCharts(e, {
                            series: [{
                                name: "Net Profit",
                                data: [15, 25, 15, 40, 20, 50]
                            }],
                            chart: {
                                fontFamily: "inherit",
                                type: "area",
                                height: t,
                                toolbar: {
                                    show: !1
                                },
                                zoom: {
                                    enabled: !1
                                },
                                sparkline: {
                                    enabled: !0
                                }
                            },
                            plotOptions: {},
                            legend: {
                                show: !1
                            },
                            dataLabels: {
                                enabled: !1
                            },
                            fill: {
                                type: "solid",
                                opacity: 1
                            },
                            stroke: {
                                curve: "smooth",
                                show: !0,
                                width: 3,
                                colors: [s]
                            },
                            xaxis: {
                                categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                axisBorder: {
                                    show: !1
                                },
                                axisTicks: {
                                    show: !1
                                },
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: o,
                                        fontSize: "12px"
                                    }
                                },
                                crosshairs: {
                                    show: !1,
                                    position: "front",
                                    stroke: {
                                        color: r,
                                        width: 1,
                                        dashArray: 3
                                    }
                                },
                                tooltip: {
                                    enabled: !0,
                                    formatter: void 0,
                                    offsetY: 0,
                                    style: {
                                        fontSize: "12px"
                                    }
                                }
                            },
                            yaxis: {
                                min: 0,
                                max: 60,
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: o,
                                        fontSize: "12px"
                                    }
                                }
                            },
                            states: {
                                normal: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                hover: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                active: {
                                    allowMultipleDataPointsSelection: !1,
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                }
                            },
                            tooltip: {
                                style: {
                                    fontSize: "12px"
                                },
                                y: {
                                    formatter: function(e) {
                                        return "$" + e + " thousands"
                                    }
                                }
                            },
                            colors: [l],
                            markers: {
                                colors: [l],
                                strokeColor: [s],
                                strokeWidth: 3
                            }
                        }).render()
                    }
                }))
            }(),
            function() {
                var e, t, a, o = document.querySelectorAll(".mixed-widget-10-chart"),
                    r = KTUtil.getCssVariableValue("--kt-gray-500"),
                    s = KTUtil.getCssVariableValue("--kt-gray-200"),
                    l = KTUtil.getCssVariableValue("--kt-gray-300");
                [].slice.call(o).map((function(o) {
                    e = o.getAttribute("data-kt-color"), t = parseInt(KTUtil.css(o, "height")), a = KTUtil.getCssVariableValue("--kt-" + e), new ApexCharts(o, {
                        series: [{
                            name: "Net Profit",
                            data: [50, 60, 70, 80, 60, 50, 70, 60]
                        }, {
                            name: "Revenue",
                            data: [50, 60, 70, 80, 60, 50, 70, 60]
                        }],
                        chart: {
                            fontFamily: "inherit",
                            type: "bar",
                            height: t,
                            toolbar: {
                                show: !1
                            }
                        },
                        plotOptions: {
                            bar: {
                                horizontal: !1,
                                columnWidth: ["50%"],
                                borderRadius: 4
                            }
                        },
                        legend: {
                            show: !1
                        },
                        dataLabels: {
                            enabled: !1
                        },
                        stroke: {
                            show: !0,
                            width: 2,
                            colors: ["transparent"]
                        },
                        xaxis: {
                            categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"],
                            axisBorder: {
                                show: !1
                            },
                            axisTicks: {
                                show: !1
                            },
                            labels: {
                                style: {
                                    colors: r,
                                    fontSize: "12px"
                                }
                            }
                        },
                        yaxis: {
                            y: 0,
                            offsetX: 0,
                            offsetY: 0,
                            labels: {
                                style: {
                                    colors: r,
                                    fontSize: "12px"
                                }
                            }
                        },
                        fill: {
                            type: "solid"
                        },
                        states: {
                            normal: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            hover: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            active: {
                                allowMultipleDataPointsSelection: !1,
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            }
                        },
                        tooltip: {
                            style: {
                                fontSize: "12px"
                            },
                            y: {
                                formatter: function(e) {
                                    return "$" + e + " revenue"
                                }
                            }
                        },
                        colors: [a, l],
                        grid: {
                            padding: {
                                top: 10
                            },
                            borderColor: s,
                            strokeDashArray: 4,
                            yaxis: {
                                lines: {
                                    show: !0
                                }
                            }
                        }
                    }).render()
                }))
            }(),
            function() {
                var e, t = document.querySelectorAll(".mixed-widget-12-chart"),
                    a = KTUtil.getCssVariableValue("--kt-gray-500"),
                    o = KTUtil.getCssVariableValue("--kt-gray-200");
                [].slice.call(t).map((function(t) {
                    e = parseInt(KTUtil.css(t, "height")), new ApexCharts(t, {
                        series: [{
                            name: "Net Profit",
                            data: [35, 65, 75, 55, 45, 60, 55]
                        }, {
                            name: "Revenue",
                            data: [40, 70, 80, 60, 50, 65, 60]
                        }],
                        chart: {
                            fontFamily: "inherit",
                            type: "bar",
                            height: e,
                            toolbar: {
                                show: !1
                            },
                            sparkline: {
                                enabled: !0
                            }
                        },
                        plotOptions: {
                            bar: {
                                horizontal: !1,
                                columnWidth: ["30%"],
                                borderRadius: 2
                            }
                        },
                        legend: {
                            show: !1
                        },
                        dataLabels: {
                            enabled: !1
                        },
                        stroke: {
                            show: !0,
                            width: 1,
                            colors: ["transparent"]
                        },
                        xaxis: {
                            categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                            axisBorder: {
                                show: !1
                            },
                            axisTicks: {
                                show: !1
                            },
                            labels: {
                                style: {
                                    colors: a,
                                    fontSize: "12px"
                                }
                            }
                        },
                        yaxis: {
                            min: 0,
                            max: 100,
                            labels: {
                                style: {
                                    colors: a,
                                    fontSize: "12px"
                                }
                            }
                        },
                        fill: {
                            type: ["solid", "solid"],
                            opacity: [.25, 1]
                        },
                        states: {
                            normal: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            hover: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            active: {
                                allowMultipleDataPointsSelection: !1,
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            }
                        },
                        tooltip: {
                            style: {
                                fontSize: "12px"
                            },
                            y: {
                                formatter: function(e) {
                                    return "$" + e + " thousands"
                                }
                            },
                            marker: {
                                show: !1
                            }
                        },
                        colors: ["#ffffff", "#ffffff"],
                        grid: {
                            borderColor: o,
                            strokeDashArray: 4,
                            yaxis: {
                                lines: {
                                    show: !0
                                }
                            },
                            padding: {
                                left: 20,
                                right: 20
                            }
                        }
                    }).render()
                }))
            }(),
            function() {
                var e, t = document.querySelectorAll(".mixed-widget-13-chart");
                [].slice.call(t).map((function(t) {
                    if (e = parseInt(KTUtil.css(t, "height")), t) {
                        var a = KTUtil.getCssVariableValue("--kt-gray-800"),
                            o = KTUtil.getCssVariableValue("--kt-gray-300");
                        new ApexCharts(t, {
                            series: [{
                                name: "Net Profit",
                                data: [15, 25, 15, 40, 20, 50]
                            }],
                            grid: {
                                show: !1,
                                padding: {
                                    top: 0,
                                    bottom: 0,
                                    left: 0,
                                    right: 0
                                }
                            },
                            chart: {
                                fontFamily: "inherit",
                                type: "area",
                                height: e,
                                toolbar: {
                                    show: !1
                                },
                                zoom: {
                                    enabled: !1
                                },
                                sparkline: {
                                    enabled: !0
                                }
                            },
                            plotOptions: {},
                            legend: {
                                show: !1
                            },
                            dataLabels: {
                                enabled: !1
                            },
                            fill: {
                                type: "gradient",
                                gradient: {
                                    opacityFrom: .4,
                                    opacityTo: 0,
                                    stops: [20, 120, 120, 120]
                                }
                            },
                            stroke: {
                                curve: "smooth",
                                show: !0,
                                width: 3,
                                colors: ["#FFFFFF"]
                            },
                            xaxis: {
                                categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                axisBorder: {
                                    show: !1
                                },
                                axisTicks: {
                                    show: !1
                                },
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: a,
                                        fontSize: "12px"
                                    }
                                },
                                crosshairs: {
                                    show: !1,
                                    position: "front",
                                    stroke: {
                                        color: o,
                                        width: 1,
                                        dashArray: 3
                                    }
                                },
                                tooltip: {
                                    enabled: !0,
                                    formatter: void 0,
                                    offsetY: 0,
                                    style: {
                                        fontSize: "12px"
                                    }
                                }
                            },
                            yaxis: {
                                min: 0,
                                max: 60,
                                labels: {
                                    show: !1,
                                    style: {
                                        colors: a,
                                        fontSize: "12px"
                                    }
                                }
                            },
                            states: {
                                normal: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                hover: {
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                },
                                active: {
                                    allowMultipleDataPointsSelection: !1,
                                    filter: {
                                        type: "none",
                                        value: 0
                                    }
                                }
                            },
                            tooltip: {
                                style: {
                                    fontSize: "12px"
                                },
                                y: {
                                    formatter: function(e) {
                                        return "$" + e + " thousands"
                                    }
                                }
                            },
                            colors: ["#ffffff"],
                            markers: {
                                colors: [a],
                                strokeColor: [o],
                                strokeWidth: 3
                            }
                        }).render()
                    }
                }))
            }(),
            function() {
                var e, t = document.querySelectorAll(".mixed-widget-14-chart");
                [].slice.call(t).map((function(t) {
                    e = parseInt(KTUtil.css(t, "height"));
                    var a = KTUtil.getCssVariableValue("--kt-gray-800");
                    new ApexCharts(t, {
                        series: [{
                            name: "Inflation",
                            data: [1, 2.1, 1, 2.1, 4.1, 6.1, 4.1, 4.1, 2.1, 4.1, 2.1, 3.1, 1, 1, 2.1]
                        }],
                        chart: {
                            fontFamily: "inherit",
                            height: e,
                            type: "bar",
                            toolbar: {
                                show: !1
                            }
                        },
                        grid: {
                            show: !1,
                            padding: {
                                top: 0,
                                bottom: 0,
                                left: 0,
                                right: 0
                            }
                        },
                        colors: ["#ffffff"],
                        plotOptions: {
                            bar: {
                                borderRadius: 2.5,
                                dataLabels: {
                                    position: "top"
                                },
                                columnWidth: "20%"
                            }
                        },
                        dataLabels: {
                            enabled: !1,
                            formatter: function(e) {
                                return e + "%"
                            },
                            offsetY: -20,
                            style: {
                                fontSize: "12px",
                                colors: ["#304758"]
                            }
                        },
                        xaxis: {
                            labels: {
                                show: !1
                            },
                            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar"],
                            position: "top",
                            axisBorder: {
                                show: !1
                            },
                            axisTicks: {
                                show: !1
                            },
                            crosshairs: {
                                show: !1
                            },
                            tooltip: {
                                enabled: !1
                            }
                        },
                        yaxis: {
                            show: !1,
                            axisBorder: {
                                show: !1
                            },
                            axisTicks: {
                                show: !1,
                                background: a
                            },
                            labels: {
                                show: !1,
                                formatter: function(e) {
                                    return e + "%"
                                }
                            }
                        }
                    }).render()
                }))
            }(),
            function() {
                var e = document.getElementById("kt_charts_mixed_widget_16_chart"),
                    t = parseInt(KTUtil.css(e, "height"));
                if (e) {
                    var a = {
                        labels: ["Total Members"],
                        series: [74],
                        chart: {
                            fontFamily: "inherit",
                            height: t,
                            type: "radialBar",
                            offsetY: 0
                        },
                        plotOptions: {
                            radialBar: {
                                startAngle: -90,
                                endAngle: 90,
                                hollow: {
                                    margin: 0,
                                    size: "70%"
                                },
                                dataLabels: {
                                    showOn: "always",
                                    name: {
                                        show: !0,
                                        fontSize: "13px",
                                        fontWeight: "700",
                                        offsetY: -5,
                                        color: KTUtil.getCssVariableValue("--kt-gray-500")
                                    },
                                    value: {
                                        color: KTUtil.getCssVariableValue("--kt-gray-700"),
                                        fontSize: "30px",
                                        fontWeight: "700",
                                        offsetY: -40,
                                        show: !0
                                    }
                                },
                                track: {
                                    background: KTUtil.getCssVariableValue("--kt-primary-light"),
                                    strokeWidth: "100%"
                                }
                            }
                        },
                        colors: [KTUtil.getCssVariableValue("--kt-primary")],
                        stroke: {
                            lineCap: "round"
                        }
                    };
                    new ApexCharts(e, a).render()
                }
            }(),
            function() {
                var e = document.querySelectorAll(".mixed-widget-17-chart");
                [].slice.call(e).map((function(e) {
                    var t = parseInt(KTUtil.css(e, "height"));
                    if (e) {
                        var a = e.getAttribute("data-kt-chart-color"),
                            o = {
                                labels: ["Total Orders"],
                                series: [75],
                                chart: {
                                    fontFamily: "inherit",
                                    height: t,
                                    type: "radialBar",
                                    offsetY: 0
                                },
                                plotOptions: {
                                    radialBar: {
                                        startAngle: -90,
                                        endAngle: 90,
                                        hollow: {
                                            margin: 0,
                                            size: "55%"
                                        },
                                        dataLabels: {
                                            showOn: "always",
                                            name: {
                                                show: !0,
                                                fontSize: "12px",
                                                fontWeight: "700",
                                                offsetY: -5,
                                                color: KTUtil.getCssVariableValue("--kt-gray-500")
                                            },
                                            value: {
                                                color: KTUtil.getCssVariableValue("--kt-gray-900"),
                                                fontSize: "24px",
                                                fontWeight: "600",
                                                offsetY: -40,
                                                show: !0,
                                                formatter: function(e) {
                                                    return "8,346"
                                                }
                                            }
                                        },
                                        track: {
                                            background: KTUtil.getCssVariableValue("--kt-gray-300"),
                                            strokeWidth: "100%"
                                        }
                                    }
                                },
                                colors: [KTUtil.getCssVariableValue("--kt-" + a)],
                                stroke: {
                                    lineCap: "round"
                                }
                            };
                        new ApexCharts(e, o).render()
                    }
                }))
            }(),
            function() {
                var e = document.getElementById("kt_charts_mixed_widget_18_chart"),
                    t = parseInt(KTUtil.css(e, "height"));
                if (e) {
                    var a = KTUtil.getCssVariableValue("--kt-gray-800"),
                        o = KTUtil.getCssVariableValue("--kt-gray-800"),
                        r = "dark" === KTThemeMode.getMode() ? KTUtil.getCssVariableValue("--kt-gray-200") : "#D6D6E0";
                    new ApexCharts(e, {
                        series: [{
                            name: "Net Profit",
                            data: [30, 25, 45, 30, 55, 55]
                        }],
                        chart: {
                            fontFamily: "inherit",
                            type: "area",
                            height: t,
                            toolbar: {
                                show: !1
                            },
                            zoom: {
                                enabled: !1
                            },
                            sparkline: {
                                enabled: !0
                            }
                        },
                        plotOptions: {},
                        legend: {
                            show: !1
                        },
                        dataLabels: {
                            enabled: !1
                        },
                        fill: {
                            type: "solid",
                            opacity: 1
                        },
                        stroke: {
                            curve: "smooth",
                            show: !0,
                            width: 3,
                            colors: [o]
                        },
                        xaxis: {
                            categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                            axisBorder: {
                                show: !1
                            },
                            axisTicks: {
                                show: !1
                            },
                            labels: {
                                show: !1,
                                style: {
                                    colors: a,
                                    fontSize: "12px"
                                }
                            },
                            crosshairs: {
                                show: !1,
                                position: "front",
                                stroke: {
                                    color: o,
                                    width: 1,
                                    dashArray: 3
                                }
                            },
                            tooltip: {
                                enabled: !0,
                                formatter: void 0,
                                offsetY: 0,
                                style: {
                                    fontSize: "12px"
                                }
                            }
                        },
                        yaxis: {
                            min: 0,
                            max: 60,
                            labels: {
                                show: !1,
                                style: {
                                    colors: a,
                                    fontSize: "12px"
                                }
                            }
                        },
                        states: {
                            normal: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            hover: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            active: {
                                allowMultipleDataPointsSelection: !1,
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            }
                        },
                        tooltip: {
                            style: {
                                fontSize: "12px"
                            },
                            y: {
                                formatter: function(e) {
                                    return "$" + e + " thousands"
                                }
                            }
                        },
                        colors: [r],
                        markers: {
                            colors: [r],
                            strokeColor: [o],
                            strokeWidth: 3
                        }
                    }).render()
                }
            }(),
            function() {
                var e = document.getElementById("kt_charts_mixed_widget_19_chart"),
                    t = parseInt(KTUtil.css(e, "height"));
                if (e) {
                    var a = KTUtil.getCssVariableValue("--kt-gray-800"),
                        o = KTUtil.getCssVariableValue("--kt-info"),
                        r = KTUtil.getCssVariableValue("--kt-info-light");
                    new ApexCharts(e, {
                        series: [{
                            name: "Net Profit",
                            data: [30, 25, 45, 30, 55, 55]
                        }],
                        chart: {
                            fontFamily: "inherit",
                            type: "area",
                            height: t,
                            toolbar: {
                                show: !1
                            },
                            zoom: {
                                enabled: !1
                            },
                            sparkline: {
                                enabled: !0
                            }
                        },
                        plotOptions: {},
                        legend: {
                            show: !1
                        },
                        dataLabels: {
                            enabled: !1
                        },
                        fill: {
                            type: "solid",
                            opacity: 1
                        },
                        stroke: {
                            curve: "smooth",
                            show: !0,
                            width: 3,
                            colors: [o]
                        },
                        xaxis: {
                            categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                            axisBorder: {
                                show: !1
                            },
                            axisTicks: {
                                show: !1
                            },
                            labels: {
                                show: !1,
                                style: {
                                    colors: a,
                                    fontSize: "12px"
                                }
                            },
                            crosshairs: {
                                show: !1,
                                position: "front",
                                stroke: {
                                    color: o,
                                    width: 1,
                                    dashArray: 3
                                }
                            },
                            tooltip: {
                                enabled: !0,
                                formatter: void 0,
                                offsetY: 0,
                                style: {
                                    fontSize: "12px"
                                }
                            }
                        },
                        yaxis: {
                            min: 0,
                            max: 60,
                            labels: {
                                show: !1,
                                style: {
                                    colors: a,
                                    fontSize: "12px"
                                }
                            }
                        },
                        states: {
                            normal: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            hover: {
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            },
                            active: {
                                allowMultipleDataPointsSelection: !1,
                                filter: {
                                    type: "none",
                                    value: 0
                                }
                            }
                        },
                        tooltip: {
                            style: {
                                fontSize: "12px"
                            },
                            y: {
                                formatter: function(e) {
                                    return "$" + e + " thousands"
                                }
                            }
                        },
                        colors: [r],
                        markers: {
                            colors: [r],
                            strokeColor: [o],
                            strokeWidth: 3
                        }
                    }).render()
                }
            }(), (a = document.querySelector("#kt_forms_widget_1_form")) && a && new Quill("#kt_forms_widget_1_editor", {
            modules: {
                toolbar: {
                    container: "#kt_forms_widget_1_editor_toolbar"
                }
            },
            placeholder: "What is on your mind ?",
            theme: "snow"
        }), o = document.querySelector("#kt_widget_5_load_more_btn"), r = document.querySelector("#kt_widget_5"), o && o.addEventListener("click", (function(e) {
            e.preventDefault(), o.setAttribute("data-kt-indicator", "on"), setTimeout((function() {
                o.removeAttribute("data-kt-indicator"), r.classList.remove("d-none"), o.classList.add("d-none"), KTUtil.scrollTo(r, 200)
            }), 2e3)
        })),
            function() {
                if ("undefined" != typeof FullCalendar && document.querySelector("#kt_calendar_widget_1")) {
                    var e = moment().startOf("day"),
                        t = e.format("YYYY-MM"),
                        a = e.clone().subtract(1, "day").format("YYYY-MM-DD"),
                        o = e.format("YYYY-MM-DD"),
                        r = e.clone().add(1, "day").format("YYYY-MM-DD"),
                        s = document.getElementById("kt_calendar_widget_1");
                    new FullCalendar.Calendar(s, {
                        headerToolbar: {
                            left: "prev,next today",
                            center: "title",
                            right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
                        },
                        height: 800,
                        contentHeight: 780,
                        aspectRatio: 3,
                        nowIndicator: !0,
                        now: o + "T09:25:00",
                        views: {
                            dayGridMonth: {
                                buttonText: "month"
                            },
                            timeGridWeek: {
                                buttonText: "week"
                            },
                            timeGridDay: {
                                buttonText: "day"
                            }
                        },
                        initialView: "dayGridMonth",
                        initialDate: o,
                        editable: !0,
                        dayMaxEvents: !0,
                        navLinks: !0,
                        events: [{
                            title: "All Day Event",
                            start: t + "-01",
                            description: "Toto lorem ipsum dolor sit incid idunt ut",
                            className: "fc-event-danger fc-event-solid-warning"
                        }, {
                            title: "Reporting",
                            start: t + "-14T13:30:00",
                            description: "Lorem ipsum dolor incid idunt ut labore",
                            end: t + "-14",
                            className: "fc-event-success"
                        }, {
                            title: "Company Trip",
                            start: t + "-02",
                            description: "Lorem ipsum dolor sit tempor incid",
                            end: t + "-03",
                            className: "fc-event-primary"
                        }, {
                            title: "ICT Expo 2017 - Product Release",
                            start: t + "-03",
                            description: "Lorem ipsum dolor sit tempor inci",
                            end: t + "-05",
                            className: "fc-event-light fc-event-solid-primary"
                        }, {
                            title: "Dinner",
                            start: t + "-12",
                            description: "Lorem ipsum dolor sit amet, conse ctetur",
                            end: t + "-10"
                        }, {
                            id: 999,
                            title: "Repeating Event",
                            start: t + "-09T16:00:00",
                            description: "Lorem ipsum dolor sit ncididunt ut labore",
                            className: "fc-event-danger"
                        }, {
                            id: 1e3,
                            title: "Repeating Event",
                            description: "Lorem ipsum dolor sit amet, labore",
                            start: t + "-16T16:00:00"
                        }, {
                            title: "Conference",
                            start: a,
                            end: r,
                            description: "Lorem ipsum dolor eius mod tempor labore",
                            className: "fc-event-primary"
                        }, {
                            title: "Meeting",
                            start: o + "T10:30:00",
                            end: o + "T12:30:00",
                            description: "Lorem ipsum dolor eiu idunt ut labore"
                        }, {
                            title: "Lunch",
                            start: o + "T12:00:00",
                            className: "fc-event-info",
                            description: "Lorem ipsum dolor sit amet, ut labore"
                        }, {
                            title: "Meeting",
                            start: o + "T14:30:00",
                            className: "fc-event-warning",
                            description: "Lorem ipsum conse ctetur adipi scing"
                        }, {
                            title: "Happy Hour",
                            start: o + "T17:30:00",
                            className: "fc-event-info",
                            description: "Lorem ipsum dolor sit amet, conse ctetur"
                        }, {
                            title: "Dinner",
                            start: r + "T05:00:00",
                            className: "fc-event-solid-danger fc-event-light",
                            description: "Lorem ipsum dolor sit ctetur adipi scing"
                        }, {
                            title: "Birthday Party",
                            start: r + "T07:00:00",
                            className: "fc-event-primary",
                            description: "Lorem ipsum dolor sit amet, scing"
                        }, {
                            title: "Click for Google",
                            url: "http://google.com/",
                            start: t + "-28",
                            className: "fc-event-solid-info fc-event-light",
                            description: "Lorem ipsum dolor sit amet, labore"
                        }]
                    }).render()
                }
            }()
    }
};
"undefined" != typeof module && void 0 !== module.exports && (module.exports = KTWidgets), KTUtil.onDOMContentLoaded((function() {
    KTWidgets.init()
}));
