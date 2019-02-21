<?php

// if(isset($title) && !empty($title)) {

// echo $title;

// }

// else {

// echo "Default title tag";

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php
	if(isset($metaD) && !empty($metaD)) {
		echo $metaD;
	}	
	else {
		echo "Reiki Treatments, -Classes and -Training offered in Edinburgh & Dundee. We also recommend our Meditation & Mindfulness and Indian Head Massage sessions";
	} ?>" />

	<link rel="stylesheet" href="@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>
		<?php
		if(isset($title) && !empty($title)) {
			echo $title;
		}
		else {
			echo "Reiki Edinburgh & Dundee | Meditation & Mindfulness | Class & Sessions";
		} ?></title>
</head>
<body class="container">
	<!-- Header -->
	<header>
		<nav class="top-header">
			<div class="top-header-content">
				<ul>
					<li><a href="#">Direct Dial: +44 7738 272558</a></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="#"><i class="fas fa-search"></i></a></li>
					<!-- Add Dropdown to TopHeader -->
          			<li class="dropdown">
						<a class="dropbtn"><i class="far fa-user-circle"></i></a>
						<div class="dropdown-content">
							<a class="dropdown_icon"><i class="fas fa-sign-in-alt"> Login</i></a>
			                <a class="dropdown_icon"><i class="fas fa-sign-out-alt"> Register</i></a>
						</div>
					</li>
				</ul>
			</div>
		</nav>

		<nav class="bottom-header">
			<div class="bottom-header-content">
				<div class="logo">
					<ul>
						<li>
							<a href="index.php"><img class="logo" src="img/AudreyHird_Logo.png" alt="Audrey Hird Alernative Therapies Company Logo"></a>
						</li>
					</ul>
				</div>
				<div class="nav-bar">
					<ul>
						<li><a href="index.php">Home</a></li>
						​<li class="dropdown">
						    <a class="dropbtn">Therapies  
						      <i class="fa fa-caret-down"></i>
						  	</a>
						    <div class="dropdown-content">
						      <a href="#">Indian Head Massage</a>
						      <a href="#">Meditation & Mindfulness</a>
						      <a href="#">Reiki</a>
						      <a href="#">Training</a>
						    </div>
						</li>
						<li><a href="whatson.php">What's On</a></li>
						<li><a href="#">About</a></li>
						<li><a href="contacts.php">Contact</a></li>
						<li><a href="https://audreyhird.setmore.com">Bookings</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div class="main">		