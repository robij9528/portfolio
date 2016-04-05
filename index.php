<?php
	require_once('admin/includes/init.php');
	
	if(isset($_POST['name'])) {
		$direct = "thankyou.php";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$sillyRobot = $_POST['street'];
		$message = $_POST['message'];
		if($sillyRobot === "") {	
			$sendMail = submitMessage($direct, $name, $email, $message);
		}
	}
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Jake Robinson Designs</title>
<link rel="stylesheet" href="css/foundation.min.css"/>
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>

</head>

<body>

    <div class="row">
        <!-- Mobile Nav-->
      <div class="contain-to-grid show-for-small-only">
        <nav class="top-bar" data-topbar>
          <ul class="title-area">
            <li class="name"></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
          </ul>
          <section class="top-bar-section">
          	<h2 class="hidden">Mobile Nav</h2>
	            <ul class="right">
	                <li><a href="#aboutTop">About</a></li>
	                <li><a href="#workTop">My Work</a></li>
	                <li><a href="#contactTop" data-reveal-id="myModal">Contact</a></li>
	            </ul>
          </section>          
        </nav>
      </div>
    </div>

<!-- main Nav -->

<nav data-magellan-expedition="fixed" class="mainNav show-for-medium-up" id="navEdit">
	  <a href="#" id="menuLogo"> <img src="images/horizontal_logo.svg" alt="logo"></a>
      <dl class="sub-nav">
        <ul class="no-bullet inline-list">
<!--           <li><dd data-magellan-arrival="welcome"><a href="#welcomeTop">Welcome</a></dd></li> -->
          <li><dd data-magellan-arrival="about"><a href="#aboutTop">About</a></dd></li>
          <li><dd data-magellan-arrival="work"><a href="#workTop">My Work</a></dd></li>
          <li><dd data-magellan-arrival="contact"><a href="#contactTop">Contact</a></dd></li>
        </ul>
      </dl>
</nav>

<section data-interchange="[images/sky_small.jpg, (default)], [images/sky.jpg, (large)]" id="bigBg">
	<h2 class="hidden">Landing page</h2>
	<div class="row">
		<div class="small-12 large-4 large-offset-1 columns"><object  data="images/bird_outline.svg" id="svg"></object></div>

		<div class="large-6 large-offset-1 show-for-large-up columns welcomeMsg">
			<h2 id="welcome">Hello</h2>
			<div class="name">
				<h3>I'm Jake Robinson</h3>
				<h4>Front End Web Developer</h4>
			</div>
			<p id="welcBod">Thank you for deciding to visit my site! I hope you enjoy your stay and if you have any questions or just want to say hi please don't hesitate to contact me!</p>
		</div>
	</div>
</section>

<div class="row">
	<div class="small-12 columns small-text-center hide-for-large-up welcomeMob">
		<h2>Hello</h2>
		<h3>I'm Jake Robinson</h3>
		<h4>Front End Web Developer</h4>
		<p>Thank you for deciding to visit my site! I hope you enjoy your stay and if you have any questions or just want to say hi please don't hesitate to contact me!</p>
	</div>
</div>

<!-- About Me -->
<section id="aboutTop">
	<h2 class="hidden">About me</h2>
	<div class="aboutBg">
		<div class="row">
			<div class=" small-12 large-12 columns">
				<div class="row">
					<div class="small-12 large-8 small-text-justify columns">
						<h2 class=" small-12 small-text-center large-text-left small-centered large-12 large-uncentered columns aboutD">About Me</h2> <!-- For Desktop -->
						<p class="small-12 small-centered large-11 end columns aboutBod">I am a recent graduate of the Interactive Media Development program at Fanshawe College, and am a past graduate of Fanshawe's Graphic Design program. As much as I love design, I have a stronger passion for coding. I am currently a freelancer for graphics and web and can't wait to get my career started in the industry. </p>
					</div>
					<div class="large-4 me columns">
						<img class="show-for-large-up meImg" src="images/me_web.png" alt="image of me">
					</div>
				</div>
			</div>
		</div>			
	</div>
</section>

<section class="loveBg">
	<h2 class="hidden">What I love</h2>
	<div class="row">
		<div class="small-12 large-12 columns">
			<div class="row">
				<h2 class="text-center small-12 large-12 columns love">What I Love</h2>
			</div>
			<div class="row icons">
				<img class="small-2 large-1 large-offset-3 columns" src="images/music.svg" alt="headphones">
				<img class="small-2 large-1 columns" src="images/computer.svg" alt="mouse">
				<img class="small-2 large-1 columns" src="images/game.svg" alt="controller">
				<img class="small-2 large-1 columns" src="images/reel.svg" alt="movie reel">
				<img class="small-2 large-1 columns" src="images/code.svg" alt="code">
				<img class="small-2 large-1 columns end" src="images/reading.svg" alt="book">
			</div>
		</div>
	</div>
</section>



<!-- My Work -->
<section id="workTop">
	<h2 class="hidden">My Work</h2>
	<div class="row">
		<h2 class="small-10 columns work">My Work</h2>
	</div>
	<!-- Desktop -->
	<div class="show-for-medium-up thumb">
	<div class="row">
		<a class="workThumb small-4 large-4 columns" href="edfc.html"><img src="images/edfc_thumb.jpg" alt="edfc project"><span><p>See Project</p></span></a>		
		<a class="workThumb small-4 large-4 columns" href="fresco.html"><img src="images/thumb_fresco.jpg" alt="fresco project"><span><p>See Project</p></span></a>
		<a class="workThumb small-4 large-4 columns" href="ago_proj.html"><img src="images/ago_thumb.jpg" alt="ago thumbnail"><span><p>See Project</p></span></a>
	</div>
	<div class="row showHide otherThumbs">
		<a class="workThumb small-4 large-4 columns" href="fish.html"><img src="images/fish_thumb.jpg" alt="fish project"><span><p>See Project</p></span></a>
		<a class="workThumb small-4 large-4 columns" href="travel.html"><img src="images/travel_thumb.jpg" alt="pebble project"><span><p>See Project</p></span></a>
		<a class="workThumb small-4 large-4 columns" href="pebble_proj.html"><img src="images/thumb_pebble.jpg" alt="pebble project"><span><p>See Project</p></span></a>
	</div>
	<div class=" showMore large-12 text-center"><a href="#!">Show More</a></div>
	</div>

	<!-- Mobile -->
	<div class="show-for-small-only">
		<div class="row">
			<a class="workThumb small-4 large-4 columns" href="edfc.html"><img src="images/edfc_thumb.jpg" alt="edfc project"></a>
			<a class="workThumb small-4 large-4 columns" href="fresco.html"><img src="images/thumb_fresco.jpg" alt="fresco project"></a>
			<a class="workThumb small-4 large-4 columns" href="ago_proj.html"><img src="images/ago_thumb.jpg" alt="ago thumbnail"></a>
		</div>
		<div class="row">
			<a class="workThumb small-4 large-4 columns" href="fish.html"><img src="images/fish_thumb.jpg" alt="fish project"></a>
			<a class="workThumb small-4 large-4 columns" href="travel.html"><img src="images/travel_thumb.jpg" alt="pebble project"></a>
			<a class="margHelpBot workThumb small-4 large-4 columns" href="pebble_proj.html"><img src="images/thumb_pebble.jpg" alt="pebble project"></a>
		</div>
	</div>

</section>


<!-- Quote -->
<section id="quoteBg">
	<h2 class="hidden">Quote</h2>
	<div class="row">
		<div class="small-12 large-7 columns small-centered">
			<div class="row">
				<div class="small-3 large-2 columns small-centered smallBird">
					<img src="images/bird_white.svg" alt="bird logo">
				</div>
			</div>
			<h3 class="text-center" id="quote">There are three responses to a piece of design: yes, no, and WOW!<br> Wow is the one to aim for.<br>- Milton Glaser</h3>	
		</div>
	</div>
</section>


<!-- Contact -->
<section id="contactTop">
	<h2 class="hidden">Contact</h2>
	
	<div class="row">
		<div class="small-12 large-12 columns">
			<div class="row">
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="small-12 large-6 small-centered large-uncentered columns">
					<h2 class="contact">Contact Me</h2>
					<label>Name</label>
						<input name="name" type="text">					
					<label>Email</label>
						<input name="email" type="email">					
					<label>Message</label>
						<textarea name="message"></textarea>
					<label class="streetHide">
						<input name="street" type="email" placeholder="street">
					</label>
					<div class="submit">
						<button name="submit" type="submit">Submit</button>	
					</div>
				</form>
				<div class="small-12 large-5  small-text-center large-text-left columns conInfo ">
					<a href="images/resume.pdf"><h2>Check Out<br> My Resume</h2></a>
					<p class="conInfoDev">Phone:</p>
					<p>519-639-1576</p>
					<p class="conInfoDev">Social</p>
					<div class="smi row large-collapse small-collapse large-offset-0 small-offset-3">
						<div class="small-3 medium-2 large-1 columns social">
							<a href="https://www.facebook.com/jakerobinsondesigns/"><object data="images/facebook.svg"></object></a>							
						</div>
						<div class="small-3 medium-2 large-1 columns end social">
							<a href="https://twitter.com/jake_robi"><object data="images/twitter.svg"></object></a>
						</div>
					</div>
				</div>	
			</div>	
		</div>
	</div>
</section>



<footer>
	<div class="row">
		<h2 class="small-10 large-10 text-center small-centered columns">Jake Robinson Designs &copy; 2016</h2>
	</div>
</footer>





<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script src="js/main.js"></script>	
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
      $(document).foundation();
</script>
</body>



</html>
