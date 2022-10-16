window.addEventListener("DOMContentLoaded", domLoaded);

function domLoaded() {
	let degreesFahrenheit = document.getElementById("fInput");
	let degreesCelsius = document.getElementById("cInput");
	
	document.getElementById("fInput").addEventListener('input', function() {
			degreesCelsius.value = "";
		});
	document.getElementById("cInput").addEventListener("input", function() {
			degreesFahrenheit.value = "";
		});
	document.getElementById("convertButton").addEventListener("click", function() {
			if(degreesCelsius.value == "") {
				if(isNaN(parseFloat(degreesFahrenheit.value))) {
					document.getElementById("errorMessage").innerHTML = degreesFahrenheit.value + " is not a number";
				} else {
					document.getElementById("errorMessage").innerHTML = "";
					convertFtoC(degreesFahrenheit.value);
				}
			}
	});
	document.getElementById("convertButton").addEventListener("click", function() {		
			if(degreesFahrenheit.value == "") {
				if(isNaN(parseFloat(degreesCelsius.value))) {
					document.getElementById("errorMessage").innerHTML = degreesCelsius.value + " is not a number";
				} else {
					document.getElementById("errorMessage").innerHTML = "";
					convertCtoF(degreesCelsius.value);
				}
			}
		});
}


function convertCtoF(degreesCelsius) {
	let fahren = (degreesCelsius * 9 / 5) + 32;
	document.getElementById("fInput").value = fahren;
	let pic = document.getElementById("weatherImage");
	
	if(fahren < 32) {
		pic.src = "cold.png";
	} else if(fahren >= 32 && fahren <=50) {
		pic.src = "cool.png";
	} else {
		pic.src = "warm.png";
	}
}

function convertFtoC(degreesFahrenheit) {
	let cel = (degreesFahrenheit - 32) * 5/9;
	document.getElementById("cInput").value = cel;
	let pic = document.getElementById("weatherImage");
	if(degreesFahrenheit < 32) {
		pic.src = "cold.png";
	} else if(degreesFahrenheit >= 32 && degreesFahrenheit <=50) {
		pic.src = "cool.png";
	} else {
	   pic.src = "warm.png";
	}
}