<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<ul>
		<li><a>Home</a></li>
		<li><a>Auctions</a>
		<ul>
			<li><a>Todays Auction</a></li>
		<li><a>Auctions Calendar</a>
		<li><a>Join Auction</a></li>
		</ul> </li>

		<li><a>Sell a Vehicle</a>
			<ul>
				<li><a>For Individual</a></li>
		<li><a>For business</a></li>
		<li><a>For Dealer</a></li>
			</ul>
		</li>
		<li><a>Find Vehicle</a>
			<ul>
				<li><a>Vehicle finder</a></li>
				<li><a>Sales List</a></li>
				<li><a>Watchlist</a></li>
			</ul>
		</li>
		<li><a>Location</a></li>
		<li><a>About Us</a></li>
	</ul>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information 
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?> -->
</div>
		
</body>
<footer>
  <?php include('./includes/inc_footer.php') ?>
</footer>
</html>