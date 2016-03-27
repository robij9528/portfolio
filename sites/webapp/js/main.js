// JavaScript Document

// Self Executing Anonymous Function - use this  Prevents Global Variables

(function() {

	console.log("Yep the SEAF Fired");

	//Variabels
	
	var vidCon = document.querySelector("#video");
	var appCon = document.querySelector("#webApp");

	var watch = ["watch1", "watch2", "watch3"];	
	var colorLinks = document.querySelector("#colorList");
	var colors = colorLinks.querySelectorAll("a");
	var mainWatch = document.querySelector("#watch");

	var circleLinks = document.querySelector("#circleList");
	var circles = circleLinks.querySelectorAll("a");
	var caption = document.querySelector("#info");
	var info = ["This button is used to select an item in a list or start an app. It can also be used to get to the menu from a watchface.", "Up and Down button is used to scroll through the lists.", "Back button is used for returning to the previous screen or entering your wachface app from the main menu.", "Up and Down button is used to scroll through the lists."];
	var section = document.querySelector("#titleWatch");	
	var title = ["Select", "Up & Down", "Back", "Up & Down"];

	var tl = new TimelineLite();




	function vidFinish(){
		if (window.matchMedia("(min-width: 900px)").matches) {
			vidCon.classList.remove("show");
			vidCon.classList.add("hide");
			appCon.classList.remove("hide");	
		} else {
		preventDefault();
		}
	}


	function changeColor(e){
		mainWatch.src = "images/"+watch[e.currentTarget.id]+".png";		
	}

	function changeInfo(e){
		tl.from(section,1,{opacity:0, ease:Power2.easeOut});
		tl.from(caption,1,{opacity:0, ease:Power2.easeOut}, "-=1");
		section.innerHTML = title[e.currentTarget.id];
		caption.innerHTML = info[e.currentTarget.id];

	}



	//Listeners


	vidCon.addEventListener("ended", vidFinish, false);


	for (var i=0; i<colors.length; i++) {
		colors[i].addEventListener("mouseover", changeColor, false);
	};

	for (var i=0; i<circles.length; i++){
		circles[i].addEventListener("mouseover", changeInfo, false);
	};

	

})();