<?php
include 'src/send.php';
?>
<!DOCTYPE HTML>

<html>
		<head>
		<title>Javascript játékok</title>
		<meta charset="utf-8" lang="hu"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
                <link href="assets/css/kapcs.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>

		
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">JavaScript  <span>Games</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Kezdőlap</a></li>
					<li><a href="breakout.html">Breakout</a></li>
					<li><a href="fej.html">Fej vagy írás</a></li>
					<li><a href="kopapir.html">Kő, papír, olló</a></li>
                                        <li><a href="gondoltam.html">Gondoltam egy számra</a></li>
                                        <li><a href="uzenofal.php">Üzenőfal</a></li>
                                        <li><a href="kapcs.php">Kapcsolat</a></li>
				</ul>
			</nav>


		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						
						<h2>Kapcsolat</h2>
					</header>
				</div>
			</section>
   




<div class="container1">
  <form action="kapcs.php" method="post">
      
    <label for="fname">Név</label>
    <input type="text" id="fname" name="firstname" placeholder="Neved" required>

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Email címed" required>
    <label for="subject">Tárgy</label>
    <textarea id="subject" name="subject" placeholder="Ide írhatsz.." style="height:200px" required></textarea>

    <input type="submit" value="Küldés">
  </form>
    
</div>
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="kapcs.php" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					JavaScript Games@2023
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>