<?php
    include 'src/dbkapcs.php';
?>
<!DOCTYPE HTML>

<html>
		<head>
		<title>Javascript játékok</title>
		<meta charset="utf-8" lang="hu"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
                <link href="assets/css/uzenofalcss.css" rel="stylesheet" type="text/css"/>
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


	<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						
						<h2>Üzenőfal</h2>
					</header>
				</div>
			</section>
<?php

// ha az űrlap elküldve
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $message = $_POST["message"];
  $name = $_POST["name"];
  
        // adatok mentése az adatbázisba
                $stmt = $conn->prepare("INSERT INTO messages (username, message, timestamp) VALUES (?, ?, NOW())");
                $stmt->bind_param("ss", $name, $message);
                $stmt->execute();
            }

            // az üzenetek lekérdezése az adatbázisból
            $sql = "SELECT * FROM messages ORDER BY id DESC";
            $result = $conn->query($sql);
        ?>


          
  <div class="message-board-container">
      <div class="message-board">
        <form method="post">
          <label for="name">Név:</label>
          <input type="text" name="name" id="name" required><br><br>
          <label for="message">Üzenet:</label>
          <textarea name="message" id="message" required></textarea><br><br>
          <input type="submit" value="Küldés">
        </form>
        
        <hr>
        
        <?php
        // Az üzenetek kiírása
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<div class='message'>";
            echo "<h3>" . $row["username"] . " " . $row["timestamp"] . "</h3>";
            echo "<p>" . $row["message"] . "</p>";
            echo "</div>";
          }
        } else {
          echo "<p>Nincs üzenet.</p>";
        }

        $conn->close();
        ?>
        
      </div>
    </div> </div>
  
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