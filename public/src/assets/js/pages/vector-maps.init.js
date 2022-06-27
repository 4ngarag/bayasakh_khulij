function getChartColorsArray(r) {
	if (null !== document.getElementById(r)) {
		var r = document.getElementById(r).getAttribute("data-colors");
		return (r = JSON.parse(r)).map(function(r) {
			var e = r.replace(" ", "");
			if (-1 === e.indexOf(",")) {
				var o = getComputedStyle(document.documentElement).getPropertyValue(e);
				return o || e
			}
			r = r.split(",");
			return 2 != r.length ? e : "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(r[0]) + "," + r[1] + ")"
		})
	}
}
var vectorMapWorldLineColors = getChartColorsArray("world-map-line-markers"),
	worldlinemap = new jsVectorMap({
		map: "world_merc",
		selector: "#world-map-line-markers",
		zoomOnScroll: !1,
		zoomButtons: !1,
		markers: [{
			name: "Denmark",
			coords: [55, 10]
		}, {
			name: "Poland",
			coords: [52, 20]
		}, {
			name: "Korea",
			coords: [39.235, 125.9253]
		}, {
			name: "Mongolia",
			coords: [46.8206, 103.8025]
		}, {
			name: "Russia",
			coords: [61, 105]
		}, {
			name: "Ukraine",
			coords: [48.379433, 31.16558]
		}],
		lines: [{
			from: "Russia",
			to: "Mongolia"
		}, {
			from: "Poland",
			to: "Mongolia"
		}, {
			from: "Korea",
			to: "Mongolia"
		}, {
			from: "Ukraine",
			to: "Mongolia"
		}, {
			from: "Denmark",
			to: "Mongolia"
		}],
		regionStyle: {
			initial: {
				stroke: "#171796",
				strokeWidth: .25,
				fill: vectorMapWorldLineColors,
				fillOpacity: 1
			}
		},
		lineStyle: {
			animation: !0,
			strokeDasharray: "6 3 6"
		}
	}),
	vectorMapWorldMarkersColors = getChartColorsArray("world-map-line-markers"),
	worldemapmarkers = new jsVectorMap({
		map: "world_merc",
		selector: "#world-map-markers",
		zoomOnScroll: !1,
		zoomButtons: !1,
		selectedMarkers: [0, 2],
		regionStyle: {
			initial: {
				stroke: "#171796",
				strokeWidth: .25,
				fill: vectorMapWorldMarkersColors,
				fillOpacity: 1
			}
		},
		markersSelectable: !0,
		markers: [{
			name: "Palestine",
			coords: [31.9474, 35.2272]
		}, {
			name: "Russia",
			coords: [61.524, 105.3188]
		}, {
			name: "Canada",
			coords: [56.1304, -106.3468]
		}, {
			name: "Greenland",
			coords: [71.7069, -42.6043]
		}],
		markerStyle: {
			initial: {
				fill: "#038edc"
			},
			selected: {
				fill: "red"
			}
		},
		labels: {
			markers: {
				render: function(r) {
					return r.name
				}
			}
		}
	}),
	vectorMapWorldMarkersImageColors = getChartColorsArray("world-map-markers-image"),
	worldemapmarkersimage = new jsVectorMap({
		map: "world_merc",
		selector: "#world-map-markers-image",
		zoomOnScroll: !1,
		zoomButtons: !1,
		regionStyle: {
			initial: {
				stroke: "#9599ad",
				strokeWidth: .25,
				fill: vectorMapWorldMarkersImageColors,
				fillOpacity: 1
			}
		},
		selectedMarkers: [0, 2],
		markersSelectable: !0,
		markers: [{
			name: "Denmark",
			coords: [55, 10],
            image: "http://khulij.test/src/img/logo/logo.png",
		}, {
			name: "Poland",
			coords: [52, 20]
		}, {
			name: "Korea",
			coords: [39.235, 125.9253]
		}, {
			name: "Mongolia",
			coords: [46.8206, 103.8025]
		}, {
			name: "Russia",
			coords: [61, 105]
		}, {
			name: "Ukraine",
			coords: [48.379433, 31.16558]
		}],
		markerStyle: {
			initial: {
                image: "http://khulij.test/src/img/logo/logo.png"
			}
		},
		labels: {
			markers: {
				render: function(r) {
					return r.name
				}
			}
		}
    });
	vectorMapUsaColors = getChartColorsArray("usa-vectormap"),
	usmap = new jsVectorMap({
		map: "us_merc_en",
		selector: "#usa-vectormap",
		regionStyle: {
			initial: {
				stroke: "#9599ad",
				strokeWidth: .25,
				fill: vectorMapUsaColors,
				fillOpacity: 1
			}
		},
		zoomOnScroll: !1,
		zoomButtons: !1
	}),
	vectorMapCanadaColors = getChartColorsArray("canada-vectormap"),
	canadamap = new jsVectorMap({
		map: "canada",
		selector: "#canada-vectormap",
		regionStyle: {
			initial: {
				stroke: "#9599ad",
				strokeWidth: .25,
				fill: vectorMapCanadaColors,
				fillOpacity: 1
			}
		},
		zoomOnScroll: !1,
		zoomButtons: !1
	}),
	vectorMapRussiaColors = getChartColorsArray("russia-vectormap"),
	russiamap = new jsVectorMap({
		map: "russia",
		selector: "#russia-vectormap",
		regionStyle: {
			initial: {
				stroke: "#9599ad",
				strokeWidth: .25,
				fill: vectorMapRussiaColors,
				fillOpacity: 1
			}
		},
		zoomOnScroll: !1,
		zoomButtons: !1
	}),
	vectorMapSpainColors = getChartColorsArray("spain-vectormap"),
	spainmap = new jsVectorMap({
		map: "spain",
		selector: "#spain-vectormap",
		regionStyle: {
			initial: {
				stroke: "#9599ad",
				strokeWidth: .25,
				fill: vectorMapSpainColors,
				fillOpacity: 1
			}
		},
		zoomOnScroll: !1,
		zoomButtons: !1
	});