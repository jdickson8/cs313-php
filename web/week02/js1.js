function clickMe() {
	alert("Clicked!");
}

function changeDiv1Color() {
	var textbox_id = "txt1Color";
	var textbox = document.getElementById(textbox_id);

	var div_id = "div1";
	var div = document.getElementById(div_id);

	var color = "#" + textbox.value;
	div.style.backgroundColor = color;

}

function changeDiv2Color() {
	var textbox_id = "txt2Color";
	var textbox = document.getElementById(textbox_id);

	var color = "#" + textbox.value;

	$(document).ready(function() { 
    	$("#div2button").one('click', function() {
			$("#div2").css("background-color", color);
		})
 	});
}

function hideDiv3() {
	$(document).ready(function() { 
    	$("#hidediv3").one('click', function() {
			$("#div3").fadeToggle("slow", "linear");
		})
 	});
}
