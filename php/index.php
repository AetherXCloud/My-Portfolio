<?php
	$link = file_get_contents("whatpulse.json");
	$data = json_decode($link, TRUE);
	$keys = number_format($data['Keys']);
	$clicks = number_format($data['Clicks']);
?>
<html lang="en">
	<head>
		<?php
			$title="Jordan's Portfolio";
			include("head.php");
		?>
	</head>
	<body>
		<?php include("header.php"); ?>
		<div class="container">
			<div class="home clearfix">
				<div class="header-img">
					<h2>Jordan Gomes</h2>
				</div>
				<img src="images/dp.jpg" class="dp">
				<p>Hi my name is <b>Jordan</b>, I have a passion for web design, programming and video games. In my spare time I enjoy talking to my friends on Skype and going riding with my friends.</p>
				<p>I live in <b>Townsville(Australia)</b> I am currently completing my <b>Certificate III in Information Technology</b> at <b>Tec-NQ</b> and hope to eventually get a job in web design or software development.</p>
				<p>Since the start of 2015 I have pressed <?php echo $keys; ?> keys and clicked <?php echo $clicks; ?> times</p>
			</div>
		</div>
	</body>
</html>