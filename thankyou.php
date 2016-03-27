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
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
</head>
<body>

<style type="text/css">


p
{
	text-align: center;
	font-size: 40px;
	color: #FFF;
	font-family: 'Oxygen', sans-serif;
	border: 1px solid #8bd3da;
	padding-top: 12px;
	padding-bottom: 12px;
	border-radius: 5px;
	background-color: #8bd3da
}

a
{
	color: #666;
	font-family: 'Oxygen', sans-serif;
	text-decoration: none;
	border: 1px solid #666;
	padding: 5px;
	border-radius: 5px;

}

a:hover
{
	color: #f5c073;
}


</style>

<?php
	echo "<a href=\"index.php\">Back to Site</a>";
	if(isset($_GET['name'])) {
		$name = $_GET['name'];
		echo "<p>Thanks, {$name}, I will email you soon!</p>";
	}else{
		echo "<p>Thanks, I will email you soon!</p>";
	}
?>

</body>
</html>