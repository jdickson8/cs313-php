$(document).ready(function() { 
	$("#div2button").one('click', function() {
		var color = "#" + document.getElementById("txt2Color").value;
		$("#div2").css("background-color", color);
	})

	$("#hidediv3").one('click', function() {
		$("#div3").fadeToggle("slow", "linear");
	})
});

function clickMe() {
	alert("Clicked!");
}

function changeDiv1Color() {
	var color = "#" + document.getElementById("txt1Color").value;
	var div = document.getElementById("div1");

	div.style.backgroundColor = color;
}

