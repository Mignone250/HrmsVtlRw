<?php 
include ('include/config.php'); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>HRMS</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  
  <style>


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 0px;
 
}

/* Modal Content/Box */
.modal-content {
  background-color: white;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  border-radius:10px;
  width: 80%; /* Could be more or less, depending on screen size */
  color:black;
}

/* The Close Button (x) */
.close {

  color: black;
  margin-top:-10px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}



/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

</style>  

</head>

<body>
  <!-- container section start -->
  <section id="container" class="" >
    <!--header start-->
<?php
		include 'include/Academics_menue.php';
		?>
    <!--header end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> LEAVE(S)</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Academics_dashboard.php">Home</a></li>
              <li><i class="fa fa-user"></i>Leave(s)</li>
              <li><i class="fa fa-user-md"></i>Leave's History</li>
            </ol>
          </div>
        </div>
		
		
											
        <div class="row">
         
          <br>
        <!-- page start-->
        
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
				<li>
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                         LEAVE(S) INFO
                                      </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          PENDING LEAVE(S) APPLICATION
                                      </a>
                  </li>
				  <li class="">
                    <a data-toggle="tab" href="#confirmed">
                                          <i class="icon-envelope"></i>
                                          CONFIRMED LEAVE(S) APPLICATION
                                      </a>
                  </li>
				  <li class="">
                    <a data-toggle="tab" href="#cancelled">
                                          <i class="icon-envelope"></i>
                                          CANCELLED LEAVE(S) APPLICATION
                                      </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                 
                  <!-- profile -->
                  <div id="profile" class="tab-pane active" >
                    <section class="panel">
                     
					  
						<div class="panel-body bio-graph-info" style="background-color:Lavender">
						
						
 <?php
		include('include/config.php');
	?>          
 <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>LEAVE INFO</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">

			  <div class="panel-heading" class="col-lg-12" >
			  <h2><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LEAVE(S)&nbsp;&nbsp;&nbsp; & &nbsp;&nbsp;&nbsp;DAY(S)</strong></h2>
			  <div class="col-lg-6">
                <h2><strong>LEAVE(S) AND DAYS</strong></h2>
				
			  <?php
$con  = mysqli_connect("localhost","root","","hrms");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
	 if($_SESSION['gender']=='Female'){
         $sql ="SELECT * FROM leave_types where LEAVE_TYPE !='Normal/Annual'";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['LEAVE_TYPE']  ;
            $sales[] = $row['LEAVE_DAYS'];
        }
	 }
	 else if ($_SESSION['gender']=='male') {
		$sql ="SELECT * FROM leave_types where LEAVE_TYPE !='Normal/Annual' and LEAVE_TYPE !='Maternity'";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['LEAVE_TYPE']  ;
            $sales[] = $row['LEAVE_DAYS'];
		 }			
	 }
	 
	 
	  else{
		$sql ="SELECT * FROM leave_types where LEAVE_TYPE !='Normal/Annual'";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['LEAVE_TYPE']  ;
            $sales[] = $row['LEAVE_DAYS'];
		 }			
	 }
 
 }
 
 
?>
	<div style="width:70%;hieght:5%;text-align:center">
            
            <canvas  id="chartjs_bar"></canvas> 
        </div>    
   
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                            backgroundColor: [
							     "#C2E1C0",
                                "#C6D584",
                                "#6F8F6D",
                                "#D0BEF6",
								"#A78394",
                                "#9B9797",
                                "#25d5f2"
                            ],
							
                            data:<?php echo json_encode($sales); ?>,
							
                        }]
                    },
                    options: {
                           legend: {
                        display: true,						
                        position: 'top',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
					
 
 
                }
                });
    </script></div>
	<div class="col-lg-6">
				 <?php
				  echo '<br><br>';
				  if($_SESSION['gender']=="Female"){
						$sql = "SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='CONFIRMED'"; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							echo "<table class='table'>
								<thead>
								 
									<th>LEAVE TYPE</th>
									<th>REQUESTED DAYS</th>
									<th>REMAING DAYS</th>
									
								  
								
								<tbody>";
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$leave=$row["LEAVE_TYPE"];  
									$requested=$row["REQUESTED_DAYS"];
									$rleave=$row["RLEAVE_DAYS"];
									
									echo "
								  <tr><td>".$leave."</td>
									<td>".$requested."</td>
							<td>".$rleave."</td></tr>";}
							echo "</tbody>
									</table>";
 } else {
							$sql = "SELECT * FROM leave_types where LEAVE_TYPE !='Normal/Annual'"; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							echo "<table class='table'>
								<thead>
								  <tr>
									<th>LEAVE TYPE</th>
									<th>REQUESTED DAYS</th>
									<th>REMAING DAYS</th>
									
								  </tr>
								</thead>
								<tbody>";
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$leave=$row["LEAVE_TYPE"];  
									$days=$row["LEAVE_DAYS"];

							
							echo "<tr><td>".$leave."</td>
									<td>0</td>
									<td>".$days."</td></tr>";
									
						}
						$sql = "SELECT * FROM leave_types where LEAVE_TYPE ='Normal/Annual'"; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$leave=$row["LEAVE_DAYS"];
									echo "<tr><td>TOTAL</td>
									<td></td>
									<td>".$leave."</td></tr>";
						}}
						
						echo "</tbody>
									</table>";
				  }}}
				  else if ($_SESSION['gender']=="male") {
							$sql = "SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='CONFIRMED'"; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							echo "<table class='table'>
								<thead>
								 
									<th>LEAVE TYPE</th>
									<th>REQUESTED DAYS</th>
									<th>REMAING DAYS</th>
									
								  
								
								<tbody>";
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$leave=$row["LEAVE_TYPE"];  
									$requested=$row["REQUESTED_DAYS"];
									$rleave=$row["RLEAVE_DAYS"];
									
									echo "
								  <tr><td>".$leave."</td>
									<td>".$requested."</td>
							<td>".$rleave."</td></tr>";}
							echo "</tbody>
									</table>";
 } else {
							$sql = "SELECT * FROM leave_types where LEAVE_TYPE !='Normal/Annual' and LEAVE_TYPE !='Maternity'"; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							echo "<table class='table'>
								<thead>
								  <tr>
									<th>LEAVE TYPE</th>
									<th>REQUESTED DAYS</th>
									<th>REMAING DAYS</th>
									
								  </tr>
								</thead>
								<tbody>";
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$leave=$row["LEAVE_TYPE"];  
									$days=$row["LEAVE_DAYS"];

							
							echo "<tr><td>".$leave."</td>
									<td>0</td>
									<td>".$days."</td></tr>";
							}
							$abc="SELECT SUM(LEAVE_DAYS) as total FROM leave_types where LEAVE_TYPE !='Normal/Annual' and LEAVE_TYPE !='Maternity'";
							$result=mysqli_query($conn,$abc);
							if($result)
							{
							while($row=mysqli_fetch_assoc($result))
							{
							$days=$row["total"];
							echo "<tr><td>TOTAL</td>
									<td></td>
									<td>".$days."</td></tr>";
						}}
									
						}
						echo "</tbody>
									</table>";
				  }}
				  
				  
				  
				  
				  
				  
				  else{
							$sql = "SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='CONFIRMED'"; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							echo "<table class='table'>
								<thead>
								 
									<th>LEAVE TYPE</th>
									<th>REQUESTED DAYS</th>
									<th>REMAING DAYS</th>
									
								  
								
								<tbody>";
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$leave=$row["LEAVE_TYPE"];  
									$requested=$row["REQUESTED_DAYS"];
									$rleave=$row["RLEAVE_DAYS"];
									
									echo "
								  <tr><td>".$leave."</td>
									<td>".$requested."</td>
							<td>".$rleave."</td></tr>";}
							echo "</tbody>
									</table>";
 } else {
							$sql = "SELECT * FROM leave_types where LEAVE_TYPE !='Normal/Annual'"; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							echo "<table class='table'>
								<thead>
								  <tr>
									<th>LEAVE TYPE</th>
									<th>REQUESTED DAYS</th>
									<th>REMAING DAYS</th>
									
								  </tr>
								</thead>
								<tbody>";
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$leave=$row["LEAVE_TYPE"];  
									$days=$row["LEAVE_DAYS"];

							
							echo "<tr><td>".$leave."</td>
									<td>0</td>
									<td>".$days."</td></tr>";
							}
							$abc="SELECT SUM(LEAVE_DAYS) as total FROM leave_types where LEAVE_TYPE !='Normal/Annual'";
							$result=mysqli_query($conn,$abc);
							if($result)
							{
							while($row=mysqli_fetch_assoc($result))
							{
							$days=$row["total"];
							echo "<tr><td>TOTAL</td>
									<td></td>
									<td>".$days."</td></tr>";
						}}
									
						}
						echo "</tbody>
									</table>";
				  }}  
					  
					  
					  
				  
						

				 ?>
              
			  </div>
              </div>
              </div>

            </div>

          </div>

			</section>
                    <section>
                      
                    </section>
                  </div>
				  
	  <div id="edit-profile" class="tab-pane " >
                    <section class="panel">
                     
					  
						<div class="panel-body bio-graph-info" style="background-color:Lavender">
						<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query("SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='PENDING'")->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 4;

if ($stmt = $mysqli->prepare("SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='PENDING' ORDER BY LEAVE_ID LIMIT ?,?")) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
	
			<style>
			
			table {
				border-collapse: collapse;
				width: 500px;
			}
			td, th {
				padding: 10px;
			}
			th {
				background-color: #54585d;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
			.pagination {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box;
				
			}
			.pagination li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination li a:hover {
				background-color: #d4dada;
			}
			.pagination .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination .currentpage a:hover {
				background-color: #518acb;
			}
			</style>
		</head>
		<body>
		<div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>LEAVE APPLICATION(S) / PENDING</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
			   <div class="panel-body">
			<table border="1"class="table bootstrap-datatable countries">
				<tr>
					
                      <th style="background-color: #3C7792;color: white;">USER ID</th>
                      <th style="background-color: #3C7792;color: white;">LEAVE TYPE</th>
                      <th style="background-color: #3C7792;color: white;">APPL DATE</th>
                      <th style="background-color: #3C7792;color: white;">LEAVE DATE</th>
                      <th style="background-color: #3C7792;color: white;">REASON</th>
                      <th style="background-color: #3C7792;color: white;">REQUESTED DAYS</th>
                      <th style="background-color: #3C7792;color: white;">TOTAL DAYS</th>
                      <th style="background-color: #3C7792;color: white;">REMAINING DAYS</th>
                      <th style="background-color: #3C7792;color: white;">ACTION</th>
					   
                      
                      
				</tr>
				<?php while ($row = $result->fetch_assoc()):
				$leave_id=$row["LEAVE_ID"];  
									$user_id=$row["USER_ID"];  
									$leave=$row["LEAVE_TYPE"];  
									$application_date=$row["DATE"];  
									$leave_date=$row["LEAVE_DATE"];  
									$reason=$row["REASON"];
									$requested_days=$row["REQUESTED_DAYS"];
									$total_days=$row["TOTAL_DAYS"];
									$remaing_days=$row["REMAINING_DAYS"];
			
				?>
				<tr>
				
						
						<td><?php echo $user_id;  ?></td>
						<td><?php echo $leave?></td> 
						<td><?php echo $application_date ?></td> 
						<td><?php echo $leave_date ?></td> 
						<td><?php echo $reason ?></td> 
						<td><?php echo $requested_days ?></td> 
						<td><?php echo $total_days ?></td> 
						<td><?php echo $remaing_days ?></td>  
						 
						<td><button onclick="document.getElementById('id02').style.display='block'"type="submit" class="btn" style="background-color:red;color:white;">CANCEL</button></td>
						<div id="id02" class="modal">
  
						  <div style="width:50%;" class="modal-content animate">
							<div class="imgcontainer">
							  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
								<center><h3 class="heading3">MESSAGE</h3>
								<form action="cancelpendingleave.php?del=<?php echo $leave_id ?>" method="post">
									<label>TITLE</label><br>
									<input type="text" name="title"  style="width:50%" required><br><br>
									<label>DESCRIPTION</label><br>
									<textarea style="width:50%" name="message" required></textarea>
                                                  
                                                <br><br>
									<button type="submit" class="btn btn-primary" name="assign">SEND</button><br><br>	
								</form></center> 
				</tr>
				<?php endwhile; ?>
			</table>
			 </div>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<CENTER>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="academics_leaveinfor.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="academics_leaveinfor.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="academics_leaveinfor.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="academics_leaveinfor.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="academics_leaveinfor.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			</CENTER>
			<?php endif; ?>
		</body>
	</html>
	<?php
	$stmt->close();
}
?>				  					
						
                    </section>
                    <section>
                      
                    </section>
                  </div>			  
	
                  <!-- CANCELLED LEAVE -->
                  <div id="cancelled" class="tab-pane " >
                    <section class="panel">
                     
					  
						<div class="panel-body bio-graph-info" style="background-color:Lavender">
						<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query("SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='CANCELLED'")->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 4;

if ($stmt = $mysqli->prepare("SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='CANCELLED' ORDER BY LEAVE_ID LIMIT ?,?")) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>

			<style>
			
			table {
				border-collapse: collapse;
				width: 500px;
			}
			td, th {
				padding: 10px;
			}
			th {
				background-color: #54585d;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
			.pagination {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box;
				
			}
			.pagination li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination li a:hover {
				background-color: #d4dada;
			}
			.pagination .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination .currentpage a:hover {
				background-color: #518acb;
			}
			</style>
		</head>
		<body>
		<div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>LEAVE APPLICATION / CANCELLED</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
			   <div class="panel-body">
			<table border="1"class="table bootstrap-datatable countries">
				<tr>
					
                      <th class="info-box brown-bg">USER ID</th>
                      <th class="info-box brown-bg">LEAVE TYPE</th>
                      <th class="info-box brown-bg">APP DATE</th>
                      <th class="info-box brown-bg">LEAVE DATE</th>
                      <th class="info-box brown-bg">REASON</th>
                      <th class="info-box brown-bg">REQUESTED DAYS</th>
                      <th class="info-box brown-bg">TOTAL DAYS</th>
                      <th class="info-box brown-bg">REMAINING DAYS</th>
                      <th class="info-box brown-bg">ACTION</th>
					   
                      
                      
				</tr>
				<?php while ($row = $result->fetch_assoc()):
				$leave_id=$row["LEAVE_ID"];  
									$user_id=$row["USER_ID"];  
									$leave=$row["LEAVE_TYPE"];  
									$date=$row["DATE"];  
									$leave_date=$row["LEAVE_DATE"];  
									$reason=$row["REASON"];
									$requested_days=$row["REQUESTED_DAYS"];
									$total_days=$row["TOTAL_DAYS"];
									$remaing_days=$row["REMAINING_DAYS"];
			
				?>
				<tr>
				
						<td><?php echo $user_id;  ?></td>
						<td><?php echo $leave?></td> 
						<td><?php echo $date ?></td> 
						<td><?php echo $leave_date ?></td> 
						<td><?php echo $reason ?></td> 
						<td><?php echo $requested_days ?></td> 
						<td><?php echo $total_days ?></td> 
						<td><?php echo $remaing_days ?></td>
						 
						<td><button type="submit" class="btn" style="background-color:red;color:white;"> <strong style="font-size:20px">&#10006 </strong> </button></td> 
				</tr>
				<?php endwhile; ?>
			</table>
			 </div>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<CENTER>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="academics_leaveinfor.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="academics_leaveinfor.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="academics_leaveinfor.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="academics_leaveinfor.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="academics_leaveinfor.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			</CENTER>
			<?php endif; ?>
		</body>
	</html>
	<?php
	$stmt->close();
}
?>				  			
                    </section>
                    <section>
                      
                    </section>
                  </div>
                 
                  <!-- edit-profile -->
                  <div id="confirmed" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info" style="background-color:Lavender">
					  <?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query("SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='CONFIRMED'")->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 4;

if ($stmt = $mysqli->prepare("SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='CONFIRMED' ORDER BY LEAVE_ID LIMIT ?,?")) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
	
			<style>
			
			table {
				border-collapse: collapse;
				width: 500px;
			}
			td, th {
				padding: 10px;
			}
			th {
				background-color: #54585d;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
			.pagination {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box;
				
			}
			.pagination li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination li a:hover {
				background-color: #d4dada;
			}
			.pagination .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination .currentpage a:hover {
				background-color: #518acb;
			}
			</style>
		</head>
		<body>
		<div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>LEAVE APPLICATION / CONFIRMED</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
			   <div class="panel-body">
			<table border="1"class="table bootstrap-datatable countries">
				<tr>
					
                      <th style="background-color: #3C7792;color: white;">USER ID</th>
                      <th style="background-color: #3C7792;color: white;">LEAVE TYPE</th>
                      <th style="background-color: #3C7792;color: white;">APPL DATE</th>
                      <th style="background-color: #3C7792;color: white;">LEAVE DATE</th>
                      <th style="background-color: #3C7792;color: white;">REASON</th>
                      <th style="background-color: #3C7792;color: white;">REQUESTED DAYS</th>
                      <th style="background-color: #3C7792;color: white;">TOTAL DAYS</th>
                      <th style="background-color: #3C7792;color: white;">REMAINING DAYS</th>
                      <th style="background-color: #3C7792;color: white;">ACTION</th>
					   
                      
                      
				</tr>
				<?php while ($row = $result->fetch_assoc()):
				$leave_id=$row["LEAVE_ID"];  
									$user_id=$row["USER_ID"];  
									$leave=$row["LEAVE_TYPE"];  
									$application_date=$row["DATE"];  
									$leave_date=$row["LEAVE_DATE"];  
									$reason=$row["REASON"];
									$requested_days=$row["REQUESTED_DAYS"];
									$total_days=$row["TOTAL_DAYS"];
									$remaing_days=$row["REMAINING_DAYS"];
				?>
				<tr>
				
						<td><?php echo $user_id;  ?></td>
						<td><?php echo $leave?></td> 
						<td><?php echo $application_date ?></td> 
						<td><?php echo $leave_date ?></td> 
						<td><?php echo $reason ?></td> 
						<td><?php echo $requested_days ?></td> 
						<td><?php echo $total_days ?></td> 
						<td><?php echo $remaing_days ?></td> 
						<td><button onclick="document.getElementById('id02').style.display='block'"type="submit" class="btn" style="background-color:red;color:white;">CANCEL</button></td>
						<div id="id02" class="modal">
  
						  <div style="width:50%;" class="modal-content animate">
							<div class="imgcontainer">
							  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
								<center><h3 class="heading3">MESSAGE</h3>
								<form action="cl.php?del=<?php echo $leave_id ?>" method="post">
									<label>TITLE</label><br>
									<input type="text" name="title"  style="width:50%" required><br><br>
									<label>DESCRIPTION</label><br>
									<textarea style="width:50%" name="message" required></textarea>
                                                  
                                                <br><br>
									<button type="submit" class="btn btn-primary" name="assign">SEND</button><br><br>	
								</form></center> 
				</tr>
				<?php endwhile; ?>
			</table>
			 </div>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<CENTER>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="academics_leaveinfor.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="academics_leaveinfor.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="academics_leaveinfor.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="academics_leaveinfor.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="academics_leaveinfor.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="academics_leaveinfor.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			</CENTER>
			<?php endif; ?>
		</body>
	</html>
	<?php
	$stmt->close();
}
?>				  
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
        

        <!-- page end-->
      </section>
    </section>
	
	<script type="text/javascript">
   function resetForm(register_form)
   {
       var myForm = document.getElementById(register_form);

       for (var i = 0; i < myForm.elements.length; i++)
       {
           if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type)
           {
               myForm.elements[i].checked = false;
               myForm.elements[i].value = '';
               myForm.elements[i].selectedIndex = 0;
           }
       }
   }
</script>
    <!--main content end-->
    <div class="text-center">
        <div class="credits">
<?php
		$select111="select * from dev ";
//echo ($select);
$result111 = $conn->query($select111);
if ($result111->num_rows > 0) {
	while($row = $result111->fetch_assoc()) {
		$year=$row["year"]; ?>

Copyright &copy Mignone Unguyeneza <?php echo $year; ?><?php }}?>
        </div>
      </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>


</body>

</html>
