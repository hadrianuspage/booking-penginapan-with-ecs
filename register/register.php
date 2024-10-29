<?php
require '..\register\db.php';
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
        <a href="http://localhost/BookingPenginapan/" style="text-decoration:none; color:#FFA500"> BACK  &nbsp; | &nbsp; 
		<a href="register.php" style="text-decoration:none; color:#FFA500">REGISTRATION</a> &nbsp; | &nbsp; 
		<a href="index.php" style="text-decoration:none; color:#FFA500">LOGIN</a> &nbsp; | &nbsp; 
	</h5>
	
	<div id="main-wrapper">
    <center>
        <form class="myform" action="register.php" method="post" enctype="multipart/form-data">
            <label><b>Full Name :</b></label><br>
            <input name="fullname" type="text" class="inputvalues" placeholder="Type your Full Name" required /><br>
            <label><b>Username :</b></label><br>
            <input name="username" type="text" class="inputvalues" placeholder="Type your username" required /><br>
            <label><b>Email :</b></label><br>
            <input name="email" type="email" class="inputvalues" placeholder="Type your email" required /><br>
            <label><b>Password :</b></label><br>
            <input name="password" type="password" class="inputvalues" placeholder="Your password" required /><br>
            <label><b>Confirm Password :</b></label><br>
            <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required /><br>
            <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up" /><br>
            <a href="index.php"><input type="button" id="back_btn" value="Back To Login" /></a>
        </form>
    </center>
</div>

	<?php
		if(isset($_POST['submit_btn']))
		{
			$fullname = $_POST['fullname'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			
			$directory = 'uploads/';
			
			if($password==$cpassword)
			{
				$query= "select * from userinformation WHERE username='$username'";
				$query_run = mysqli_query($con,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
				}
				else
				{
                    
					$query= "insert into userinformation values('','$username','$password','$fullname', '$email', '')";
					$query_run = mysqli_query($con,$query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!") </script>';
					}
				}	
			}
			else
			{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match!")</script>';	
			}
		}
	?>
    
</body>
</html>