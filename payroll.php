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
  <section id="container" class="">
    <!--header start-->
<?php
		include 'include/bannermenu.php';
		?>
    <!--header end-->

    

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-money"></i> PAYROLL</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
              
              <li><i class="fa fa-user-md"></i>My payroll History</li>
            </ol>
          </div>
        </div>
		<?php include"include/config.php";?>
		
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <br>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#recent-activity">
                                          <i class="icon-home"></i>
                                          PROFILE
                                      </a>
                  </li>
				   <li>
                    <a data-toggle="tab" href="#deductions">
                                          <i class="icon-user"></i>
                                          DEDUCTIONS
                                      </a>
                  </li>
				   <li>
                    <a data-toggle="tab" href="#supplements">
                                          <i class="icon-user"></i>
                                          SUPPLEMENTS
                                      </a>
                  </li>
                  
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          SALARY IN ADVANCE STATEMENT
                                      </a>
                  </li>
				  <li class="">
                    <a data-toggle="tab" href="#month">
                                          <i class="icon-envelope"></i>
                                          MONTHLY SALARY STATEMENT
                                      </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                 
				  
				  <div id="recent-activity" class="tab-pane active">
                    <section class="panel">
                      
					  
						<div class="panel-body bio-graph-info">
						<?php include"include/config.php";?>
<?php


$sql = "SELECT * FROM user_registration WHERE USER_ID = '".$_SESSION['user']."'"; 
					$result = $conn->query($sql);
					// echo $result->num_rows; die;
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
								$USER_ID=$row["USER_ID"];
								$FIRST=$row["FIRST_NAME"];
								$LAST=$row["LAST_NAME"];
								
								$PHONE=$row["PHONE_NUMBER"];
								
								$POSITION=$row["POSITION"];
								$DEPARTMENT=$row["DEPARTMENT"];
								
								?>
																
	
                        
                        <div class="row">
                          <div class="bio-row">
                            <p><span>FIRSTNAME </span>: <?php  echo $FIRST;  ?> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>LASTNAME </span>: <?php  echo $LAST;  ?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>DEPARTMENT</span>: <?php  echo $DEPARTMENT;  ?></p>
                          </div>
                         
                          <div class="bio-row">
                            <p><span>POSITION </span>: <?php  echo $POSITION;  ?></p>
                          </div>
                          
                          <div class="bio-row">
                            <p><span>MOBILE </span>: <?php  echo $PHONE;  ?></p>
                          </div>
                          
                        </div>
                      </div> <?php	}}

    ?>
	
                      
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
				  
				  <div id="supplements" class="tab-pane ">
                    <section class="panel">
                      
					  
						<div class="panel-body bio-graph-info">
					
			 <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <b>SUPPLEMENTS</b>
              </header>
              <div class="panel-body">
                <div class="form">        
          <div class="col-sm-12">
            <section class="panel">
              
              <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
          <th style="background-color:Lavender ">Supplements</th>
          <th style="background-color:Lavender ">Amount(%)</th>
		  
		  
		 
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <?php
             
            $sql = "SELECT * FROM user_supplement  where USER_ID='".$_SESSION['user']."'  "; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $deduction=$row["SUPPLEMENT_TYPE"];  
                  $amount=$row["SUPPLEMENT_AMOUNT"]; 
				  $newamou=$amount/100;
				  $total=$row["TOTAL"];
				  $newtot=$total/100;
				  
				  $sqls = "SELECT * FROM paid_users where USER_ID='".$_SESSION['user']."' and TYPE='Monthly salary'"; 
            $results = $conn->query($sqls);

            if ($results->num_rows > 0) {
              // output data of each row
              while($row = $results->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                 $gross=$row["AMOUNT"];
				  $supplement= $gross+$total;
                  
            ?>  
             <td><?php echo $deduction;  ?></td>
                    <td><?php echo  $newamou;  ?> % &nbsp;</td> 
					
				

                  </tr>
			<?php }}}} else {
    echo "No Data Found";
}


 ?>
 <tr><td style='background-color:lavender;'><b>Net Salary </b></td ><td style='background-color:lavender;'><?php echo @$gross;  ?></td></tr>
 <tr><td style='background-color:lavender;'><b>Total Supplements(%)</b></td><td style='background-color:lavender;'><?php echo @$newtot; ?> % &nbsp;</td></tr>

 <tr><td style='background-color:lavender;'><b>Net Salary With Suppliment Added</b></td><td style='background-color:lavender;'><?php echo @$supplement;  ?></td></tr>
 

                </tbody>
              </table>        
            </section>
          </div>
                  
          <!-- page end-->
          
          
                </div>

              </div>
            </section>
          </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
				  
				  
				   <div id="deductions" class="tab-pane">
                    <section class="panel">
                      
					  
						<div class="panel-body bio-graph-info">
						
			
			 <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <b>DEDUCTIONS</b>
              </header>
              <div class="panel-body">
                <div class="form">        
          <div class="col-sm-12">
            <section class="panel">
              
              <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
          <th style="background-color:Lavender ">Deduction</th>
          
		  <th style="background-color:Lavender ">Amount(%)</th>
		  
		  
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <?php
				 
            $sql = "SELECT * FROM user_deduction where USER_ID='".$_SESSION['user']."'"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $deduction=$row["DEDUCTION_TYPE"];  
                  $amount=$row["DEDUCTION_AMOUNT"]; 
				  $total=$row["TOTAL"];
				  
				  $sqls = "SELECT * FROM paid_users where USER_ID='".$_SESSION['user']."' and TYPE='Monthly salary'  "; 
            $results = $conn->query($sqls);

            if ($results->num_rows > 0) {
              // output data of each row
              while($row = $results->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                 $gross=$row["AMOUNT"];
				  $deductions= ($gross*$amount)/100;  
                  
            ?>  
             <td><?php echo $deduction;  ?></td>
			
                    <td><?php echo $amount;  ?> % &nbsp;</td>
					
					<!--<td>
					<?php //echo $deductions;  ?>
					
					</td>-->

                  </tr>
			<?php }}}} else {
    echo "0 results";
}


 ?>
  <tr><td style='background-color:lavender;'><b>Total Deductions</b></td><td style='background-color:lavender;'><?php echo @$total;  ?>% &nbsp;</td></tr>

 <tr><td style='background-color:lavender;'><b>Net Salary</b></td><td style='background-color:lavender;'><?php echo @$gross;  ?></td></tr>


                </tbody>
              </table>        
            </section>
          </div>
                  
          <!-- page end-->
          
          
                </div>

              </div>
            </section>
          </div>
                    
                    </section>
                  </div>
				  
				  
                  
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
					  <div class="profile-widget profile-widget-info">
                      <div class="col-lg-9">
            <section class="panel">
              <header class="panel-heading">
                SALARY IN ADVANCE STATEMENT
              </header>
              <div class="panel-body">
                <div class="form">				
          <div class="col-sm-12">
            <section class="panel" id="tblCustomers">
			
			
			  <table border="1" class="table"> <caption>SALARY STATEMENT</caption> 
			  <tr>
			   <?php
			   
            $sql = "SELECT * FROM user_registration where USER_ID= '".$_SESSION['user']."'"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $first=$row["FIRST_NAME"];  
                  $last=$row["LAST_NAME"]; 
				    $phone=$row["PHONE_NUMBER"]; 
					  $position=$row["POSITION"]; 
					    $department=$row["DEPARTMENT"]; 
            ?>  
			  <td  style="color:black;" > <strong>EMPLOYEE INFO</strong>
			  <br>NAMES: <?php echo $first. " ". $last;  ?><br> PHONE: <?php echo $phone;  ?>
			   <br> POSITION: <?php echo $position;  ?><br> DEPARTMENT: <?php echo $department;  ?><br></td> 
			   <td style="color:black;"> <strong>VATEL RWANDA</strong></td>
			 
			 
			  </tr>
			  <?php }} else {
    echo "0 results";
}


 ?>
			  </thead> <tbody> <tr>
			 
			  
			  <th>ITEMS</th> 
			   <th>DESCRIPTION</th> </tr>
			   <tr> 
			     <?php
				
            $sqly = "SELECT * FROM paid_users where USER_ID= '".$_SESSION['user']."' and TYPE='Salary in Advance'"; 
            $resulty = $conn->query($sqly);

            if ($resulty->num_rows > 0) {
              // output data of each row
              while($row = $resulty->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $first=$row["DATE_PAID"];  
                  $last=$row["TYPE"]; 
				  $phone=$row["AMOUNT"];
				   
            ?>  <tr > <th style="color:black;">DATE OF PAYMENT</th> <td style="color:black;"><?php echo @$first;  ?> </td> 
          
			  </tr> 
          <tr > <th style="color:black;">TYPE OF PAYMENT</th> <td style="color:black;"><?php echo @$last;  ?> </td> 
          
			  </tr>
			   </tbody> <tfoot>
			  <tr style="background-color:Lavender  "> <th style="color:black;">AMOUNT</th> <td style="color:black;">Rwf &nbsp;<?php echo @$phone;  ?> </td> 
          
			  </tr> 
			  
			  <?php }} else {
    echo "0 results";
}

 ?></tfoot> </table>
			  <br><br>
				
            </section>
			 <br><br>
			<center>
             <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
             <button class="btn btn-primary hidden-download" type="button" id="btnExport" value="Export" onclick="Export()"><i class="fa fa-download"></i> Export PDF</button>
	    </center>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
		<script>
		function myFunction() {
    window.print();
}
 function Export() {
            html2canvas(document.getElementById('tblCustomers'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Payroll.pdf");
                }
            });
        }
        
</script>
          </div>
             
                </div>

              </div>
            </section>
          </div>
					   
					   
					   
                      </div><br><br>
					  <?php include"include/config.php";?>
					  

                      </div>				  
                    </section>
                  </div>
				  
				      <!-- edit-profile -->
                  <div id="month" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
					  <div class="profile-widget profile-widget-info">
                      <div class="col-lg-9">
            <section class="panel" id="tblCustomers">
              <header class="panel-heading">
                MONTHLY SALARY STATEMENT
              </header>
              <div class="panel-body">
                <div class="form">				
          <div class="col-sm-12">
            <section class="panel" >
			
			
			  <table border="1" class="table"> 
			  <tr>
			    <?php
             
            $sql = "SELECT * FROM user_registration where USER_ID= '".$_SESSION['user']."'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $first=$row["FIRST_NAME"];  
                  $last=$row["LAST_NAME"]; 
				    $phone=$row["PHONE_NUMBER"]; 
					  $position=$row["POSITION"]; 
					    $department=$row["DEPARTMENT"]; 
            ?>  
			  <td  style="color:black;" > <strong>EMPLOYEE INFO</strong>
			  <br>NAMES: <?php echo $first. " ". $last;  ?><br> PHONE: <?php echo $phone;  ?>
			   <br> POSITION: <?php echo $position;  ?><br> DEPARTMENT: <?php echo $department;  ?><br></td> 
			   <td style="color:black;"> <strong> VATEL RWANDA</strong></td>
			  </tr>
			  <?php }} else {
    echo "No Data Found";
}


 ?>
			  </thead> <tbody> <tr>
			 
			  
			  <th>ITEM</th> 
			   <th>AMOUNT</th> </tr>
			   <tr> 
			     <?php
				
            $sqla = "SELECT * FROM paid_users where USER_ID= '".$_SESSION['user']."' and TYPE='Monthly salary'"; 
            $resulta = $conn->query($sqla);

            if ($resulta->num_rows > 0) {
              // output data of each row
              while($row = $resulta->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $firsts=$row["AMOUNT"];
				  $datea= $row['DATE_PAID'];



$sqlselect2 = "SELECT * FROM user_registration where USER_ID= '".$_SESSION['user']."'" or die(mysqli_error($conn));; 
			//echo ($sqlselect2);
            $resultselect2 = $conn->query($sqlselect2);

            if ($resultselect2->num_rows > 0) {
              // output data of each row
              while($row = $resultselect2->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  //$firsts=$row["AMOUNT"]; 
                  $posttt=$row["POSITION"]; 



$sqlselect3 = "SELECT * FROM payroll where POSITION= '$posttt'"; 
            $resultselect3 = $conn->query($sqlselect3);

            if ($resultselect3->num_rows > 0) {
              // output data of each row
              while($row = $resultselect3->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $grossa=$row["GROSS_SALARY"];	
				  
				  
				  $sqli = "SELECT * FROM user_deduction where USER_ID= '".$_SESSION['user']."' order by DID desc limit 1"; 
            $resulti = $conn->query($sqli);

            if ($resulti->num_rows > 0) {
              // output data of each row
              while($row = $resulti->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $totldeductions=$row["TOTAL"];
?>				  
                  				  
                <tr> <th style="color:black;" >PAYMENT DATE</th> <td style="color:black;"><?php echo $datea;  ?></td> </tr>
				<tr> <th style="color:black;" >GROSS SALARY</th> <td style="color:black;">RWF &nbsp;<?php echo $grossa;  ?></td> </tr> 
				<tr> <th style="color:black;" >DEDUCTIONS</th> <td style="color:black;"><?php echo $totldeductions;  ?>&nbsp;%</td> </tr> 
				<tr> <th style="color:black;" >NET SALARY WITH DEDUCTIONS</th> <td style="color:black;">RWF &nbsp;<?php echo $firsts;  ?></td></tr>
				
			  </tr> 
			  <tr> 
			     <?php
				 
            $sqlu = "SELECT * FROM user_supplement where USER_ID= '".$_SESSION['user']."' order by SID desc limit 1"; 
            $resultu = $conn->query($sqlu);

            if ($resultu->num_rows > 0) {
              // output data of each row
              while($row = $resultu->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $first=$row["TOTAL"]; 
				  $amount=$first/100;
				  
                  
            ?>  <tr > <th style="color:black;" >SUPPLEMENTS</th> <td style="color:black;"><?php echo $amount;  ?>% &nbsp;</td>
			
			  </tr> 
			  </tr> 
			  
        <?php
          
          $peramount= $firsts + $first;
        ?>
			  
			   </tbody> <tfoot>
			  <tr style="background-color:Lavender  "> <th style="color:black;">NET SALARY WITH SUPPLEMENTS</th> <td style="color:black;">RWF &nbsp;<?php echo $peramount;  ?> </td>
<tr> 
			     <?php
			
            $sqld = "SELECT * FROM user_deduction where USER_ID= '".$_SESSION['user']."'"; 
			
            $resultd = $conn->query($sqld);
			
            if ($resultd->num_rows > 0) {
              // output data of each row
              while($row = $resultd->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $first=$row["TOTAL"]; 
				  $amountss=($firsts*$first)/100;
				  
				  $sqls = "SELECT * FROM paid_users where USER_ID= '".$_SESSION['user']."' and TYPE='Salary in Advance'"; 
				  $results = $conn->query($sqls);
				  if ($results->num_rows > 0) {
              // output data of each row
              while($row = $results->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $salary=$row["AMOUNT"];
				  
                  
            ?>  
			<!--<tr > <th style="color:black;" >TOTAL_DEDUCTIONS</th> <td style="color:black;"><?php echo $amountss;  ?></td>
			
			  </tr> 
			  <tr > <th style="color:black;" >SALARY IN ADVANCE</th> <td style="color:black;"><?php echo $salary;  ?></td>
			
			  </tr>
			  </tr> -->			  
          <?php
          //$peramount= $firsts + $amount;
          //$peramounts= $peramount -($amountss +$salary);
        ?>
			  
			  <!--</tr> <tr style="background-color:Lavender "> <th style="color:black;" >NET_SALARY</th> <td style="color:black;"><?php echo $peramounts;  ?></td> 
			  </tr> -->
			  
				  <?php }}}}
						  else {
    echo "0 results";
}

 ?>
			  <?php }} else {
    echo "0 results";
}

 ?>	
			<?php }}}} ?> 
			<?php }}?>
<?php }} else {
    echo "0 results";
}

 ?>				   
			
			   </tfoot> </table>
			  <br><br>
				
            </section>
			 <br><br>
			<center>
             <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
             <button class="btn btn-primary hidden-download" type="button" id="btnExport" value="Export" onclick="Export()"><i class="fa fa-download"></i> Export PDF</button>
	    </center>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
		<script>
		function myFunction() {
    window.print();
}
 function Export() {
            var doc = new jsPDF();
var elementHTML = $('#tblCustomers').html();
var specialElementHandlers = {
    '#tblCustomers': function (element, renderer) {
        return true;
    }
};
doc.fromHTML(elementHTML, 15, 15, {
    'width': 170,
    'elementHandlers': specialElementHandlers
});

// Save the PDF
doc.save('payroll.pdf');
var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
pdfMake.createPdf(docDefinition).download("Payroll.pdf");
        }


</script>
          </div>
             
                </div>

              </div>
            </section>
          </div>
					   
					   
					   
                      </div><br><br>
					  <?php include"include/config.php";?>
					  

                      </div>				  
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
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
<script>
function yesnoCheck(that) {
    if (that.value == "Salary in Advance") {
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
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
