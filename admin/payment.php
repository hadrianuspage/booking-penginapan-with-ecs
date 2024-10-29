<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOOKING TEMPAT PENGINAPAN</title>
    <!-- icon -->
<link rel="icon" type="images/png" href="images/favicon.png">
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
					<li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i>Room Booking</a>
                    </li>
                    <li>
                        <a class="active-menu" href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="logout.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Payment Details<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Room type</th>
                                <th>Bed Type</th>
                                <th>Check in</th>
                                <th>Check out</th>
                                <th>No of Room</th>
                                <th>Meal Type</th>
                                <th>Room Rent</th>
                                <th>Bed Rent</th>
                                <th>Meals</th>
                                <th>Gr.Total</th>
                                <th>Print</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
include('db.php');

$sql = "SELECT * FROM payment";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result)) {
    $id = $row['id'];

    if ($id % 2 == 1) {
        echo "<tr class='gradeC'>";
    } else {
        echo "<tr class='gradeU'>";
    }

    echo "<td>" . $row['title'] . " " . $row['fname'] . " " . $row['lname'] . "</td>";
    echo "<td>" . $row['troom'] . "</td>";
    echo "<td>" . $row['tbed'] . "</td>";
    echo "<td>" . $row['cin'] . "</td>";
    echo "<td>" . $row['cout'] . "</td>";
    echo "<td>" . $row['nroom'] . "</td>";
    echo "<td>" . $row['meal'] . "</td>";
    echo "<td>" . $row['ttot'] . "</td>";
    echo "<td>" . $row['mepr'] . "</td>";
    echo "<td>" . $row['btot'] . "</td>";
    echo "<td>" . $row['fintot'] . "</td>";
    echo "<td><a href=print.php?pid=" . $id . "><button class='btn btn-primary'><i class='fa fa-print'></i> Print</button></a></td>";
    echo "<td><a class='btn btn-success' onclick='markAsPaid(" . $id . ")'><i class='fa fa-times-circle'></i> Unpaid</a></td>";
    echo "</tr>";
}
?>

<script>
function markAsPaid(id) {
    // Perform AJAX request to the server to update the payment status
    // After successful update, change the button display to the "verified" icon
    var button = document.querySelector(`a[onclick='markAsPaid(${id})']`);
    button.innerHTML = '<i class="fa fa-check-circle"></i> Paid';
    button.classList.remove('btn-success');
    button.classList.add('btn-success');
}
</script>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
