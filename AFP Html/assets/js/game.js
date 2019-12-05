window.onload = function() {
  newgame();
};

var random_array;
var points;
var question = 0;
var parts;
function newgame() {
	random_array = getRandList(0, 10);
	points = 0;
	question = 0;
	document.getElementById("point").innerHTML = "Pontszám: " + points + "/10";
	document.getElementById("game").style.display="block";
	document.getElementById("endgame").style.display = "none";
	document.getElementById("points").value = points;
	rndQuestion();
}

function ellenorzes(element) {
	var i;

	if (parts[parts[5]] == element.textContent) {
		element.style.background='green';
		points++;
		document.getElementById("point").innerHTML = "Pontszám: " + points + "/10";
	}
	else {
		for(i=1; i<5; i++) {
			var button = document.getElementById("button" + i);
			if (parts[parts[5]] == button.textContent) {
				button.style.background='green';
			} else {
				button.style.background='red';
			}
		}
	}

	if (question < 5) {
		question++;
		setTimeout(rndQuestion, 1500);
	}
	if (question == 5) {
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
	var number = random_array[question];
	parts = questions[number].split(',');

    document.getElementById("button1").textContent = parts[1];
    document.getElementById("button2").textContent = parts[2];
    document.getElementById("button3").textContent = parts[3];
    document.getElementById("button4").textContent = parts[4];
	
	document.getElementById("buttonQuestion").textContent = parts[0];     
}

function getRandList(min, max, count = max - min + 1) {
    const range = max - min + 1;
    const isValid = (
        Number.isInteger(min) &&
        Number.isInteger(max) &&
        Number.isInteger(count) &&
        max > min &&
        count > 0 &&
        count <= range
    );

    if (!isValid) {
        console.warn('Invalid arguments supplied', arguments);

        return [];
    }

    const list = (new Array(range)).fill(0).map((currentValue, index) => min + index);

    return arrayShuffle(list).slice(0, count);
}

function arrayShuffle(arr) {
    for (let i = arr.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));

        [arr[i], arr[j]] = [arr[j], arr[i]];
    }

    return arr;
}

var questions = ["Hol található a csarnokvíz?,a pályaudvaron,a szemben,a tejcsarnokban,barlangfürdőben,2",
"Mi indul Rideg Sándor regényének címében?,a banzáj,a bakterház,a mandula,a verseny,2",
"Melyik madarat nevezi a néphit vészmadárnak?,a seregélyt,a verebet,a kuvikot,a feketerigót,3",
"Melyik Európa legmagasabb működő vulkánja?,Stromboli,Hekla,Szantorini,Etna,4",
"Melyik volt Koncz Zsuzsa első önálló nagy slágere?,Szőke Anni balladája,Rohan az idő,Színes ceruzák,Kis virág,1",
"Kik hordták eredetileg az anorákot?,a serpák,az eszkimók,a lappok,a nyenyecek,2",
"Melyik járműről elnevezett együttes tagja volt Zorán a 60-as években?,Villamos,HÉV,Autóbusz,Metró,4",
"Hogyan vágtatott a Tisza Petőfi verse szerint?,mint a megvadult bika,mint a forgószél,mint az őrült ki letépte láncát,mint a menekülő kit kerget a tatár,3",
"Mivel foglalkozik az akinek az ikebana a hobbija?,keleti küzdősporttal,virágokkal,papírhajtogatással,japán kakasokkal,2",
"Hány játékos van egyszerre a pályán egy kosárlabda-csapatból?,négy,hét,hat,öt,4",
"Kiknek az érdekeit képviseli az UNICEF?,szakszervezetek,gyerekek,állatvédők,dolgozók,2",
"Hogyan nevezték kedveskedve a homlokba hulló kis fodor női hajfürtöt?,huncutka,mucika,pöndörke,tekercske,1",
"Milyen egységben mérik a hang rezgésszámát?,tonban,decibelben,hertzben,luxban,3",
"Milyen nőt ábrázol Munkácsy ismert 1873-as képe?,korsóvívő,bordóruhás,rőzsehordó,gyermekét tartó,3",
"Mi volt a neve George Stephenson első mozdonyának?,George,Mylord,Rocket,Locomotive,2",
"Ki volt a gyermekorvostan első tanára hazánkban?,id. Bókay János,Heim Pál,Schöpf-Mérei Ágoston,Korányi Sándor,1",
"Hogy nevezzük másképpen a kárókatonát?,obsitos,treff bubi,bölönbika,kormorán,4",
"Melyik futballistát nevezik Fekete gyöngyszem-nek?,Thuramot,Pelét,Eusebiót,Andy Cole-t,2",
"La Fontaine, Aiszóposz, Fáy András, Heltai Gáspár. Mi köti össze ezt a négy szerzőt?,a születési helyük,a vallásuk,a szerelmük,az állatmesék,4",
"Melyik magyar várost nevezik a vizek városának?,Siófok,Tata,Szeged,Debrecen,2"];