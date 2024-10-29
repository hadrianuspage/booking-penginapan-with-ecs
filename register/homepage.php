<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOKING TEMPAT PENGINAPAN</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="clouds">
	<div class="cloud x1"></div>
    <div class="bottom">
    <h3><a href="#" class="text-writing" style="font-size:56px; color:#00008b">BOOKING TEMPAT PENGINAPAN</a></h3>
</div>

<style>
.text-writing {
  display: inline-block;
  animation: text-writing 2s steps(20) infinite;
  white-space: pre;
  overflow: visible;
}

@keyframes text-writing {
  from { width: 0; }
  to { width: 100%; }
}
</style>

	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
    
</div>

    

	
	<h5 align="right">
        <a href="index.php" style="text-decoration:none; color:#FFA500"> LOG OUT </a> &nbsp; | &nbsp; 
        <a href="http://localhost/BookingPenginapan/" style="text-decoration:none; color:#FFA500"> BACK &nbsp; | &nbsp; 
		<a href="register.php" style="text-decoration:none; color:#FFA500"> REGISTRATION </a> &nbsp; | &nbsp; 
		<a href="index.php" style="text-decoration:none; color:#FFA500"> LOGIN </a> &nbsp;
	</h5>
	<div id="main-wrapper">
  <center>
    <h3 class="animated-text" style="color: yellow;">
      Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : '<span style="color: green;">Guest</span>'; ?>!
    </h3>

    <h3 class="animated-text" style="color: red;">
      <p>For Reservation please go to <a href="http://localhost/BookingPenginapan/admin/reservation.php" style="text-decoration:none; color: blue;">HERE</a>
    </h3>
  </center>
</div>
<style>
	.animated-text {
  animation: fade-in 1s ease-in-out;
}

@keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
</style>
</body>
</html