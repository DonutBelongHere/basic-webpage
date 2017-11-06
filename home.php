<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="group.css" type="text/css" />
		<link rel="shortcut icon" href="images/rosabelle.jpg" />
		<title>
			Rosabelle Armstead
		</title>
		<style type="text/css">
			body{
				margin: 0;
				padding: 0;
			}
			
			div, p {
				z-index: -1;
				padding: 0px 20px 0px 20px;
				font-family: "Trebuchet MS", Helvetica, sans-serif;
			}
			
			#header {
				background-color: #ffffff;
				position: fixed;
				top: 0;
				left: 0;
				height: 140px;
				width: 100%;
				padding: 0px;
				margin: 0px;
				z-index: 1;
			}
			
			#content {
				position:absolute;
				top: 156.67px;
				left:0px;
				right:0px;
				bottom:0px;
				overflow-y:scroll;
			}
			
			img {
				padding: 20px 20px 20px 20px;
			}
			
			img.logo {
				padding: 0;
				display: block;
				margin-left: auto;
				margin-right: auto;
			}
			
			.slide {
				padding: 0;
				width: 25%;
				margin-top: 10px;
			}
			
			#profile {
				float: left;
			}
			
			#profilediv {
				padding: 0px;
				overflow: hidden;
			}
			
			p.paragraph {
				font-size: 14px;
				text-align: justify;
				text-justify: inter-word;
			}
			
			h1, h2, h3 {
				text-align: center;
			}
			
			.line {
				border-bottom: 3px solid #351970;
			}
			
			.line2 {
				border-bottom: 1px solid #351970;
			}
			
			ul, ol {
				font-family: "Trebuchet MS", Helvetica, sans-serif;
				font-size: 14px;
			}

			.navul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				top: 0;
				width: 100%;
				overflow: hidden;
				background-color: #351970;
				position: fixed;
				font-family: "Trebuchet MS", Helvetica, sans-serif;
			}

			.navli {
				float: left;
			}

			.navli a {
				display: block;
				color: #ffffff;
				text-align: center;
				padding: 8px 16px;
				text-decoration: none;
				font-weight: bold;
			}

			.navli a:hover {
				background-color: #7151b5;
			}
			
			#hobbies {
				list-style-type: circle;
			}
			
			.hobbies {
				list-style-type: square;
			}
			
			.lists {
				list-style-type: circle;
			}

			.slideshow {
				max-width: 1000px;
				position: relative;
				margin: auto;
				padding: 7px;
				margin-top: 10px;
				text-align: center;
			}

			.dot {
				height: 13px;
				width: 13px;
				margin: 0px 2px;
				background-color: #d0c0f1;
				border-radius: 50%;
				display: inline-block;
			}

			table {
				width: 100%;
			}
			
			td, th {
				padding: 5px;
			}

			td {
				text-align: left;
			}
			
			th {
				background-color: #351970;
				color: #ffffff;
				text-align: center;
			}
			
			tr:nth-child(even) {
				background-color: #d1c7e8;
			}
			
			tr:nth-child(odd) {
				background-color: #efe8ff;
			}
			
			#table {
				padding: 0px 100px;
			}
			
			.link {
				text-decoration: none;
				color: #000000;
				font-weight: normal;
			}
			
			.link:hover {
				text-decoration: none;
				font-weight: bold;
				font-style: italic;
			}
			
			.link:active {
				text-decoration: none;
				font-weight: bold;
			}
			
			.activedots {
				background-color: #916ddf;
			}
			
			.fade {
				-webkit-animation-name: fade;
				-webkit-animation-duration: 1s;
				animation-name: fade;
				animation-duration: 1s;
			}
			
			@-webkit-keyframes fade {
				from {opacity: 0}
				to {opacity: 1}
			}
		</style>
	</head>
	<body>
<!-- create navigation bar and title image at top -->
		<div id="header">
			<img class="logo" src="images/Art/logo.png" style="width:50%;max-width:500px" alt="Rosabelle Armstead: Art and Design" title="Rosabelle Armstead" />
			<ul class="navul" style="margin-top:125px">
				<li class="navli"><a href="#home">Home</a></li>
				<li class="navli"><a href="#about">About</a></li>
				<li class="navli"><a href="#art">Art</a></li>
				<li class="navli"><a href="#contact">Contact</a></li>
				<li class="navli" style="float:right"><a href="http://www.rosabelledraws.tumblr.com" target="_blank">Tumblr</a></li>
				<li class="navli" style="float:right"><a href="http://www.rosabelledraws.deviantart.com" target="_blank">DeviantArt</a></li>
				<li class="navli" style="float:right"><a href="http://www.redbubble.com/people/rosabelledraws" target="_blank">Redbubble</a></li>
			</ul>
		</div>
		<div id="content">
<!-- home section -->
			<div class="line">
				<h3 id="home">Home</h3>
			</div>
			<div id="profilediv">
				<img id="profile" src="./images/rosabelle.jpg" title="Rosabelle" alt="Rosabelle" style="max-width:200px" />
				<p class="paragraph">
					Hi, my name is Rosabelle and this is my year 1 coursework website. I'm currently studying Computer Science 
					at the University of Surrey and British Sign Language Level 2 in the Global Graduate Award Programme. Take 
					a look around and find out more about me. Head to the About section to find out about my hobbies and interests, 
					the Art section to take a look at some of my artwork, and the Contact section to find out how to get in touch.
				</p>
			</div>
<!-- about section -->
			<div class ="line">
				<h3 id="about">About</h3>
			</div>
			<p class="paragraph">
				I spend the majority of my time watching a variety of TV shows and drawing or, as of late, doing digital paintings. 
				To find out more information about my artwork, head to the Art section. I also have many other interests including:
				<ul class="hobbies" id="hobbies">
					<li>Watching TV and movies</li>
					<li>Playing video games</li>
					<li>Playing guitar</li>
					<li>Art</li>
					<li>Archery</li>
					<li>Shooting</li>
					<li>Reading</li>
					<li>Comic books</li>
				</ul>
			<p class="paragraph">
				My current comic subscriptions are:
				<?php
					function concatenate($string1, $string2) {
						$string = $string1 . $string2;
						return $string;
					}
				?>
			</p>
				<ul class="lists">
				<?php
					echo "<li> " . concatenate("Deathstroke", "") . " </li>";
					echo "<li> " . concatenate("The ", "Flash") . " </li>";
					echo "<li> " . concatenate("Green ", "Arrow") . " </li>";
					echo "<li> " . concatenate("Green ", "Lanterns") . " </li>";
					echo "<li> " . concatenate("Suicide ", "Squad") . " </li>";
					echo "<li> " . concatenate("Buffy ", "The ") . concatenate("Vampire ", "Slayer: ") . concatenate("Season ", "11") . " </li>";
				?>
				</ul>
			<p class="paragraph">
			<?php
				$tvShowArray = array("Person of Interest","Black Mirror","Angel","Dollhouse","Buffy The Vampire Slayer");
			?>
				My top 5 TV show recommendations are:
				<ol class="lists">
				<?php
					foreach ($tvShowArray as $show) {
						echo "<li> $show </li>";
					}
				?>
				</ol>
				<blockquote cite="http://www.personofinterest.wikia.com/wiki/The_Cold_War">
					"I have come to learn there is little difference between Gods and monsters."
					<span style="font-size:14px">- <i>The Machine</i>, "Cold War", <i>Person of Interest</i></span>
				</blockquote>
			<p class="paragraph">
				You can also see the books I am currently reading in the table below:
<!-- XML to HTML; fill array with SimpleXML -->
			<?php
				$xml = simplexml_load_file("data/books.xml");
				$bookTitleArray = array();
				$bookAuthorArray = array();
				$bookProgressArray = array();
				$bookYearArray = array();
				$i = 0;
					foreach ($xml->book as $book) {
						$bookTitleArray[$i] = $book->title;
						$bookAuthorArray[$i] = $book->author;
						$bookProgressArray[$i] = $book->progress;
						$bookYearArray[$i] = $book->year;
						$i++;
					}
			?>
			</p>
<!-- populate table with array values -->
			<div id="table">
				<table>
					<tr>
						<th>Title</th>
						<th>Author</th>
						<th>Progress</th>
						<th>Year Published</th>
					</tr>
					<tr>
						<td><?php echo $bookTitleArray[0] ?></td>
						<td><?php echo $bookAuthorArray[0] ?></td>
						<td><?php echo $bookProgressArray[0] ?></td>
						<td><?php echo $bookYearArray[0] ?></td>
					</tr>
					<tr>
						<td><?php echo $bookTitleArray[1] ?></td>
						<td><?php echo $bookAuthorArray[1] ?></td>
						<td><?php echo $bookProgressArray[1] ?></td>
						<td><?php echo $bookYearArray[1] ?></td>
					</tr>
					<tr>
						<td><?php echo $bookTitleArray[2] ?></td>
						<td><?php echo $bookAuthorArray[2] ?></td>
						<td><?php echo $bookProgressArray[2] ?></td>
						<td><?php echo $bookYearArray[2] ?></td>
					</tr>
				</table>
			</div>
<!-- art section -->
			<div class="line">
				<h3 id="art">Art</h3>
			</div>
			<p class="paragraph">
				I've been interested in art for a long time and I studied it at GCSE and AS Level. I predominately paint and 
				draw portraits of celebrities and fictional characters, with digital painting being my preferred medium. Some
				of my work is showcased in the slideshow below. For my full gallery visit the DeviantArt and Tumblr links in
				the navigation bar or to purchase any of my art visit the Redbubble link. I also accept commissions - to enquire,
				please contact me at the email in the Contact section.
			</p>
<!-- slideshow section -->
			<div class="slideshow">
				<div class="artSlides fade" style="margin-top:10px">
					<img src="images/Art/Root.png" alt="Root" class="slide" />
				</div>
				<div class="artSlides fade" style="margin-top:10px">
					<img src="images/Art/Shaw.png" alt="Sameen Shaw" class="slide" />
				</div>
			</div>
<!-- dots to notify the image -->
			<div style="text-align:center">
				<span class="dot"></span>
				<span class="dot"></span>
			</div>
<!-- video element -->
			<div style="text-align:center">	
				<video width="640" height="480" controls>
					<source src="video/speeddraw.mp4" type="video/mp4" />
					Your browser does not support this content.
				</video>
				<br />
				<span style="font-size:12px"><i>Hitman</i> Kevin MacLeod (incompetech.com) 
				<br /> Licensed under Creative Commons: By Attribution 3.0 
				<br /> http://creativecommons/org/licenses/by/3.0/
				</span>
			</div>
<!-- contact section -->
			<div class="line">
				<h3 id="contact">Contact</h3>
			</div>
			<p class="paragraph">
				Message me here: <a href="http://www.rosabelledraws.tumblr.com/ask" class="link" target="_blank">Ask</a>
				<br />
				For commission enquires, email: <a href="mailto:rosabelle.art@gmail.com" class="link" target="_blank">rosabelle.art@gmail.com</a>
				<br />
				Follow me on Twitter: <a href="http://www.twitter.com/rosabelledraws" class="link" target="_blank">@rosabelledraws</a>
			</p>
				<br />
			<div class="line2">
			</div>
<!-- copyright notice -->
			<p><small>© Copyright 2016, Rosabelle Armstead</small></p>
		</div>
<!-- automatic slideshow javascript -->
			<script type="text/javascript">
				var slideIndex = 0;
				showSlides();
			
				function showSlides() {
					var i;
					var artSlides = document.getElementsByClassName("artSlides");
					var indicator = document.getElementsByClassName("dot");
					for (i = 0; i < artSlides.length; i++) {
						artSlides[i].style.display = "none";
						indicator[i].className = indicator[i].className.replace(" activedots", "");
					}
					slideIndex++;
					if (slideIndex > artSlides.length) {
						slideIndex = 1
					}
					artSlides[slideIndex-1].style.display = "block";
					indicator[slideIndex-1].className += " activedots";
					setTimeout(showSlides, 5000);
				}
		</script>
	</body>
</html>