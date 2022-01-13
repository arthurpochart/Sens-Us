
var gauge1 = Gauge(
    document.getElementById("gauge-particules"), {
        max: 80,
        dialStartAngle: 90,
        dialEndAngle: 0,
        value: 12
    }
);
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

let i = 0;
let randvalue;
while (i < 100) {
    randvalue = Math.random() * 100;
    gauge1.setValueAnimated(randvalue - 20, 3);
    i++;
    await sleep(3000)
}
