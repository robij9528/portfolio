<?php
	require_once('admin/includes/init.php');
	
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">	
<title>Contact me</title>
<link rel="stylesheet" href="css/foundation.min.css"/>
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
</head>
<body>


<div class="thankyou row">
	<a href="index.php">Back to Site</a>
	<?php
		if(isset($_GET['name'])) {
			$name = $_GET['name'];
			echo "<p>Thanks, {$name}, I will email you soon!</p>";
		}else{
			echo "<p>Thanks, I will email you soon!</p>";
		}
	?>
</div>


</body>
</html>