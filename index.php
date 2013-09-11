<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Novanto Ji</title>
<link rel="stylesheet" href="css/skeleton.css"/>
<link rel="stylesheet" href="css/base.css"/>
<link rel="stylesheet" href="css/layout.css"/>
<link rel="stylesheet" href="css/bjqs.css"/>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="js/bjqs-1.3.js"></script>
<script>
	jQuery(document).ready(function($) {
	    $('#content').bjqs({
	    	'animtype' : 'slide',
	    	'animspeed' : 10000, 
	    	'animduration' : 550, 
	    	'automatic' : false,
	        'height' : 440,
	        'width' : 940,
	        'showcontrols' : false,
	        'responsive' : true
	    });
	    $('.bjqs-markers').prependTo($('#menu'));
	});
</script>
</head>
<body>
	<header>
		<div class="container grid">
			<div id="name" class="five columns alpha"><p>novanto ji</p></div>
			<div id="menu" class="ten columns omega">
				
			</div>
		</div>
	</header>	
	<div class="container grid">
		<div class="sixteen columns clearfix" id="content">
			<ul class="bjqs">
				<li class="content-child">
					<div class="two-third column alpha">
						<h2>Howdy!</h2>
						<p>As this is a one-page portofolio website, you won't be needing to either scroll down or up to navigate, made by <a href="http://getskeleton.com"><strong>skeleton</strong></a>, which supposed to be a responsive css framework. </p>
						<p id='cheers'>Feel free to browse my site. Cheers!</p>
					</div>
				</li>
				<li class="content-child"  id="about">
					<div class="one-third column alpha">
						<h3>IMAGE HERE</h3>
					</div>
					<div class="two-thirds column omega" id="me">
						<p>Novanto Ji, 20 years old.</p>
						<p>A web developer, newbie system administrator, network security enthusiast and soon-to-be-Bachelor in Computer Science, specifically majoring in Information Systems at University of Indonesia.<br>You can follow me on social networks and get to know more about me by clicking at contact on menu tab above.</p>
						<p>I build hand-coded, responsive websites, with a focus on web standards. And I am still honing my skills on Mobile Application Development in order to adapt with the current needs of many workplaces.</p>
					</div>
				</li>
				<li class="content-child" id="works">
					<div class="one-third column alpha">
						<h3>WEBSITE DEVELOPMENT</h3>
					</div>
					<div class="one-third column">
						<h3>SYSTEM ADMINISTRATION</h3>
					</div>
					<div class="one-third column omega">
						<h3>AVAILABLE TO HIRE (W/WO FEES)</h3>
					</div>
				</li>
				<li class="content-child">
					<div class="one-third column alpha">
						<h2>Contact</h2>
					</div> 
				</li>
			</ul>
		</div>
	</div>
</body>