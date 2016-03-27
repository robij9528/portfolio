// JavaScript Document

// Self Executing Anonymous Function - use this  Prevents Global Variables

(function() {

	console.log("Yep the SEAF Fired");

	//Variabels
	
	var theSVG = document.querySelector("#svg");
	var logo;
	var myTL = new TimelineLite();

	// Images Reveal
	var button = document.querySelector(".showMore a");
	var images = document.querySelector(".showHide");

	var welcome = document.querySelector(".welcomeMsg");


	//Functions
	
	function animateTL(p){

		myTL.from(p.top, .5, {scaleX:0})
		myTL.from(p.right, .5, {scaleY:0})
		myTL.from(p.bottom, .5, {scaleX:0})
		myTL.from(p.left, .5, {scaleY:0})

	}


	function loadLogo(){
		var svgDoc = theSVG.contentDocument;
		logo = svgDoc.querySelector("#robinsonLogo");
		var svgBits = {
			left : logo.querySelector("#left"),
			right : logo.querySelector("#right"),
			bottom : logo.querySelector("#bottom"),
			top : logo.querySelector("#top"),
		};

		animateTL(svgBits);
	}

	function hideImg(){
		images.style.display = "none";
		e.preventDefault();
	}


	function showImg(e)
	{

		if (images.style.display === 'block')
		{
			images.style.display = "none";
			button.innerHTML = "Show More";
		}
		else
		{
			images.style.display = "block";
			button.innerHTML = "Hide";
		}
	}


	function disWelcome(){
		welcome.style.opacity = "1";
	}

	//Listeners

	window.addEventListener("load", loadLogo, false);
	button.addEventListener("click", showImg, false);
	window.addEventListener("load", hideImg, false);
	window.addEventListener("load", disWelcome, false);

})();