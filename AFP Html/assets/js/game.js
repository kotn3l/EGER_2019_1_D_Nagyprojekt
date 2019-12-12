window.onload = function() {
  newgame();
};

var random_array;
var points;
var question = 0;
var parts;
var difficulty;

//var obj = "<?php echo json_encode($json_array); ?>";

function newgame() {

	points = 0;
	question = 0;
	difficulty = 1;
	document.getElementById("difficulty").innerHTML = "Nehézség: " + difficulty;
	document.getElementById("point").innerHTML = "Pontszám: " + points + "/10";
	document.getElementById("game").style.display="block";
	document.getElementById("endgame").style.display = "none";
	document.getElementById("points").value = points;
	rndQuestion();

}

function ellenorzes(element) {
	var i;
	var ans;

	switch (questions[points][5]) {
		case 'A':
			ans = 1;
			break;
		case 'B':
			ans = 2;
			break;
		case 'C':
			ans = 3;
			break;
		case 'D':
			ans = 4;
			break;
		default: 
			ans = 0;
			break;
	}
	if (questions[points][ans] == element.innerHTML) {
		element.style.background='green';
		points++;
		difficulty++;
	}
	else {
		for(i=1; i<5; i++) {
			var button = document.getElementById("button" + i);
			if (questions[points][ans] == button.innerHTML) {
				button.style.background='green';
			} else {
				button.style.background='red';
			}
		}
		setTimeout(endGame, 1500);
	}
	
	if (question < 10) {
		question++;
		setTimeout(rndQuestion, 1500);
	}
	if (question == 10) {
		endGame();
	} 		
}

function endGame() {
	document.getElementById("game").style.display="none";
	document.getElementById("difficulty").style.display="none";
	document.getElementById("endgame").style.display = "block";
	document.getElementById("points").value = points;
	document.getElementById("point").innerHTML = "Elért pontszám: " + points + "/10";
}

function rndQuestion(){
	for(i=1; i<5; i++) {
		var button = document.getElementById("button" + i);
		button.style.background='lightgrey';
	}
	document.getElementById("difficulty").innerHTML = "Nehézség: " + difficulty;
	document.getElementById("point").innerHTML = "Pontszám: " + points + "/10";
	document.getElementById("button1").innerHTML = questions[points][1];
	document.getElementById("button2").innerHTML = questions[points][2];
	document.getElementById("button3").innerHTML = questions[points][3];
	document.getElementById("button4").innerHTML = questions[points][4];
	document.getElementById("buttonQuestion").innerHTML = questions[points][0];

}

function refreshData(){
	rndQuestion();
}

function giveResult(result) {
	document.getElementById("result").innerHTML = result;
}