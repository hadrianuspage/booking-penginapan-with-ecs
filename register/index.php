<?php
session_start();
require '..\register\db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>REGISTER & LOGIN</title>
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
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>

    <h5 align="right">
<a href="http://localhost/BookingPenginapan/" style="text-decoration:none; color:#FFA500"> BACK </a> &nbsp; | &nbsp;
<a href="register.php" style="text-decoration:none; color:#FFA500"> REGISTRATION </a> &nbsp; | &nbsp;
<a href="index.php" style="text-decoration:none; color:#FFA500"> LOGIN </a> &nbsp; | &nbsp;
<a href="#" onclick="freezeScreen();" style="text-decoration:none; color:#FFA500"> Freeze Simulation </a> &nbsp; | &nbsp;
<a href="#" onclick="inspect();" style="text-decoration:none; color:#FFA500"> Inspect Mode </a> &nbsp; | &nbsp;

<h5> 
<div id="main-wrapper">
<center>
<form class="myform" action="index.php" method="post">
  <label><b>Username :</b></label><br>
  <span class="fa fa-user"></span>
  <input name="username" type="text" class="inputvalues" placeholder="Type your username" required /><br>
  <label><b>Password :</b></label><br>
  <input name="password" type="password" class="inputvalues" placeholder="Type your password" required /><br>
  <input name="login" type="submit" value="Login" onclick="if(!this.form.username.value || !this.form.password.value) { alert('Woi cok isi username karo password!'); return false; }"><br>
  <a href="register.php"><input type="button" value="Register"></a>
</form>
</center>
</div>
</h5>

<?php
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM userinformation WHERE username='$username' AND password='$password'";
    $query_run = mysqli_query($con, $query);
    
    if(mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_assoc($query_run);
        // valid
        $_SESSION['username'] = $row['username'];
        header('location:homepage.php');
    } else {
        // invalid
        echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
    }
}

// Check if the user is logged in
if(!isset($_SESSION['username'])) {
    echo '<script type="text/javascript"> alert("Selamat datang pengguna... Anda wajib login/register terlebih dahulu untuk masuk ke halaman reservation!") </script>';
}
?>

<div>
  <script>
    function freezeScreen() {
      // Disable scrolling
      document.body.style.overflow = 'hidden';

      // Disable mouse events
      document.addEventListener('mousemove', preventMouseMove);
      document.addEventListener('mousedown', preventMouseMove);
      document.addEventListener('mouseup', preventMouseMove);

      // Disable keyboard events
      document.addEventListener('keydown', preventKeyboardInput);
      document.addEventListener('keyup', preventKeyboardInput);

    }

    function preventMouseMove(event) {
      event.preventDefault();
    }

    function preventKeyboardInput(event) {
      event.preventDefault();
    }
  </script>

<script>
function inspect() {
  // Fungsi untuk membuka inspector halaman website
  window.addEventListener('keydown', function(event) {
    if (event.ctrlKey && event.shiftKey && event.key === 'C') {
      event.preventDefault();
      window.open('', '_blank').document.write('<script>document.body.style.overflow="hidden";<\/script>');
      window.open('', '_blank').document.body.style.overflow = 'hidden';
      window.open('', '_blank').focus();
    }
  });
}
</script>


</div>
</body>
</html>