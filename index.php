<?php
	date_default_timezone_set('America/New_York');
	include 'dbh.inc.php';
	include 'comments.inc.php';
?>

<!doctype html>
<html>
<head>

	<title>Full Screen Background Immage</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div id = "hero">
		<div id = "hero-overlay">
			<div class = "content">
				<nav>
					<h1><br>Game Of Cycles</h1>
					<br>
					<ul>
  						<li><a href="#">Game</a></li>
 						<li><a href="#">Group</a></li>
  						<li><a href="#">User</a></li>
  						<li class="dropdown"><a href="#" class="dropdown-btn">Dropdown</a>
    						<div class="dropdown-menu">
      							<a href="Game Description.html">Game Description</a>
      							<a href="Project Delivarables.html">Project Delivarables</a>
      							<a href="About.html">About</a>
      							<a href="Contacts.html">Contacts</a>
    						</div>
  						</li>
					</ul>
				</nav>
				<br>
				<?php
				echo "<form method= 'POST' action='".setComments($conn)."'>
					<input type='hidden' name='uid' value='Anonymous'>
					<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
					<textarea name='message'></textarea>
					<br>
					<button type='submit' name='commentSubmit'>Comment</button>
				</form>";

				getComments($conn);
				?>
			</div>
		<footer>2018 Game of Cycles</footer>
		</div>
	</div>
</body>
</html>