// JavaScript Document

// Self Executing Anonymous Function - use this  Prevents Global Variables

(function() {

	console.log("Yep the SEAF Fired");

	//Variabels
	
	var prodImg = ["brownie","chai","cinnamon_roll","soy_latte","panini","scone","smoothie","tea"];
	var thumbs = document.querySelectorAll(".thumb");
	var mainImg = document.querySelector(".mainProd");

	var caption = document.querySelector(".prodInfo");
	var info = ["We admit, perfecting the recipe for this ridiculously fine brownie became an obsession for us. Who knew there could be so many subtle variations in texture, sweetness and chocolaty goodness? After 137 tries, we’re confident this is the one. With a texture perched delicately between cakey and fudgy, it’s absolutely, positively, the best brownie you can imagine.",
	"Black tea infused with cinnamon, clove, and other warming spices is combined with steamed milk and topped with foam for the perfect balance of sweet and spicy.",
	"There’s nothing like sweet, melty cream cheese drizzled on top of a hot cinnamon roll.",
	"Our dark, rich espresso balanced with steamed soy milk and a light layer of foam. A perfect milk forward warm up.",
	"Inspired by the cuisine of Italy, this delicious sandwich is a burst of classic red, white and green. Sweet Roma tomatoes, creamy mozzarella cheese, Arugula and prosciutto – staples of a rich culinary tradition embraced by lovers of fine food everywhere. Viva l’Italia!",
	"The light biscuit texture provides the ideal backdrop for a bounty of chocolate and coconut. Sweet and decadent, our Chocolate Coconut Scone calls for a balanced coffee.",
	"Summer comes and summer goes … but long after the fireworks have burnt out, you can still enjoy the bright taste of an Orange Mango smoothie. Take one whole banana, blend it with natural orange mango juice, add a generous serving of milk and whey protein and fiber powder, then blend it with ice. Bang! Now you’re feeling re-energized and ready to declare your own personal Independence Day.",
	"Earl Grey includes some of the world’s most sought-after teas, grown in the high-elevation gardens of Sri Lanka and northeast India. We take a strong black tea base and add the essence of bergamot, a citrus fruit with subtle lemon and floral lavender notes. We think the aromatic result would have curled the Earl’s stiff upper lip into a smile."];

	var section = document.querySelector(".prodName");
	var title = ["Double Chocolate Brownie","Chai Tea Latte","Cinnamon Bun","Soy Latte","Tomato Prosciutto Panini","Chocolate Coconut Scone","Orange Mango Smoothie","Earl Grey Tea"];

	var price = document.querySelector(".prodPrice");
	var prodprice = ["$2.25 Each","$4.50 Each","$2.25 Each","$3.00 Each","$6.50 Each","$2.00 Each","$5.00 Each","$1.50 Each"];
	
	//functions

	function changeImage(e){
		mainImg.src = "images/"+prodImg[e.currentTarget.id]+".png";
		section.innerHTML = title[e.currentTarget.id];
		caption.innerHTML = info[e.currentTarget.id];
		price.innerHTML = prodprice[e.currentTarget.id];
	}

	//Listeners

	for (var i=0; i<thumbs.length; i++) {
		thumbs[i].addEventListener("click", changeImage, false);
	};

	

})();