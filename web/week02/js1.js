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

	$(document).ready( function() { 
    	$("#div2").on("click", "button", function(event) {
			$(event.delegateTarget).css("background-color", color);
		})
 	});
}

function hideDiv3() {
	$(document).ready( function() { 
    	$("#div3").on("click", "button", function(event) {
			$(event.delegateTarget).fadeToggle("slow", "linear");
		})
 	});
}
