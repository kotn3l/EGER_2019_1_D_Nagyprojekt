window.onload = function() {
  newgame();
};

var random_array;
var points;
var question = 0;
var parts;
var difficulty;
function newgame() {

	points = 0;
	question = 0;
	difficulty = 1;
	document.getElementById("point").innerHTML = "Pontszám: " + points + "/10";
	document.getElementById("game").style.display="block";
	document.getElementById("endgame").style.display = "none";
	document.getElementById("points").value = points;


}

function ellenorzes(element, answer) {
	var i;
	var btn;

	switch (answer) {
		case 'A':
			btn = document.getElementById("button1");
			break;
		case 'B':
			btn = document.getElementById("button2");
			break;
		case 'C':
			btn = document.getElementById("button3");
			break;
		case 'D':
			btn = document.getElementById("button4");
			break;
	}

	if (btn == element) {
		element.style.background='green';
		points++;
		difficulty++;
		document.getElementById("point").innerHTML = "Pontszám: " + points + "/10";
	}
	else {
		for(i=1; i<5; i++) {
			var button = document.getElementById("button" + i);
			if (btn == button) {
				button.style.background='green';
			} else {
				button.style.background='red';
			}
		}
	}
	
	if (question < 10) {
		question++;
		setTimeout(refreshData, 1500);
	}
	if (question == 10) {
		document.getElementById("game").style.display="none";
		document.getElementById("endgame").style.display = "block";
		document.getElementById("points").value = points;
		document.getElementById("point").innerHTML = "Elért pontszám: " + points + "/10";
	} 		
}

function rndQuestion(){
	for(i=1; i<5; i++) {
		var button = document.getElementById("button" + i);
		button.style.background='lightgrey';
	}

}


function refreshData(){
	  var display = document.getElementById("content");
      var xmlhttp = new XMLHttpRequest();
      var difficulty = document.getElementById("difficulty");
      xmlhttp.open("GET", "?P=next");
      xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xmlhttp.send(difficulty);
      xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
        	display.innerHTML = this.responseText;
        	document.getElementById("point").innerHTML = "Pontszám: " + points + "/10";
        } else {

        };
      }
    }
