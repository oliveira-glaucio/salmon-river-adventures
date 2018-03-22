var high = parseFloat(document.getElementById("high").innerHTML);
var low = parseFloat(document.getElementById("low").innerHTML);
var windSpeed = parseFloat(document.getElementById("wind").innerHTML);
var tempF = (high + low)/2;

		var chill = (35.74 + (0.6215 * tempF)) - (35.75 * Math.pow(windSpeed, 0.16)) + (0.4275 * (tempF * Math.pow(windSpeed, 0.16)));

document.getElementById("chill").innerHTML =  Math.round(chill);