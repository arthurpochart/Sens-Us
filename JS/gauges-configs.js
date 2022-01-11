var Gauge = require("../node_modules/svg-gauge");

// Standalone
var Gauge = window.Gauge;

// Create a new Gauge
var particuleGauge = Gauge(document.getElementById("gauge-particules"), {
    max: 100,
    // custom label renderer
    label: function(value) {
        return Math.round(value) + "/" + this.max;
    },
    value: 50,
    // Custom dial colors (Optional)
    color: function(value) {
        if(value < 20) {
            return "#5ee432"; // green
        }else if(value < 40) {
            return "#fffa50"; // yellow
        }else if(value < 60) {
            return "#f7aa38"; // orange
        }else {
            return "#ef4655"; // red
        }
    }
});

// Set gauge value
particuleGauge.setValue(75);

// Set value and animate (value, animation duration in seconds)
particuleGauge.setValueAnimated(90, 1);