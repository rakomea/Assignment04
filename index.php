<?php $pageTitle="Assignment 4: Odd Student Out"; ?>
<?php include "inc/html-top.php"; ?>
<body>
<div class="container">
<header class=" h home">
	<h1>Team Brooklyn</h1>
</header>
<div class="main">
	<ul id="cbp-bislideshow" class="cbp-bislideshow">
		<li><img src="images/brooklyn.jpg" alt="Brooklyn"/></li>
		<li><img src="images/dewey-bazirake.jpg" alt="Dewey"/></li>
		<li><img src="images/jialin-huo.jpg" alt="Jailin"/></li>
		<li><img src="images/joshua-wolkoff.jpg" alt="Joshua"/></li>
	</ul>
	
</div>

<aside class="homeaside box">
	<h2>Brooklyn, NY</h2>
	<ul>
		<li>Borough in New York City</li>
		<li>Population: 2.5 million</li>
		<li>Founded in 1636</li>
	</ul>
</aside>

<nav><a href="students.php">Click here to learn more about the students</a></nav>

<main class="box lead">
	<p>Welcome to our page! Here you can read a little bit about the lives of three University of Rochester students. Dewey and Josh are both majoring in Computer Science, and Jialin is pursuing it as a minor.</p>
</main>

<footer class="foot">CSC 174: Advanced Front-end Web Design and Development</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- imagesLoaded jQuery plugin by @desandro : https://github.com/desandro/imagesloaded -->
<script src="js/jquery.imagesloaded.min.js"></script>
<script src="js/cbpBGSlideshow.min.js"></script>
<script>
	$(function() {
		cbpBGSlideshow.init();
	});
</script>

</div>
</body>

</html>