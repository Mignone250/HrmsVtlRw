
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

 
 <div class="row">

          
            <section class="panel">
              
              <div class="panel-body">
               
                  
                  
                  
                    
                      <div class="panel-body bio-graph-info" style="background-color:Lavender">
					  <br><br>
					<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query('SELECT * FROM user_registration')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 5;

if ($stmt = $mysqli->prepare('SELECT * FROM user_registration where USER_ID != "'.$_SESSION['user'].'" ORDER BY USER_ID LIMIT ?,?')) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
	
		
            <div class="panel panel-default">
			
              
			   <div class="panel-body">
			   <div class="row">
			   
			
			   
			<table border="1"class="table bootstrap-datatable countries" style=' width:98%;margin-left:5px;'>
				<tr>
					
                      <th  style="background-color: #152E48;color: white; text-align:center;">Names</th>
					 
                      <th  style="background-color: #152E48;color: white; text-align:center;">Gender</th>
                      
                      <th  style="background-color: #152E48;color: white; text-align:center;">Phone Number</th>
                      <th  style="background-color: #152E48;color: white; text-align:center;">Position</th>
                      <th  style="background-color: #152E48;color: white; text-align:center;">Department</th>
                      <th  style="background-color: #152E48;color: white; text-align:center;">User Type</th>
                     
					  <th  style="background-color: #152E48;color: white; text-align:center;">Email</th>
					  <th  style="background-color: #152E48;color: white; text-align:center;">Review</th>
                
				</tr>
				<?php while ($row = $result->fetch_assoc()):
				$user_id=$row["USER_ID"];  
									$user_Fname=$row["FIRST_NAME"];  
									$user_Lname=$row["LAST_NAME"];
                    
									$user_gender=$row["GENDER"];  
									$user_national=$row["NATIONAL_ID"];
									$user_phone=$row["PHONE_NUMBER"];
									$user_position=$row["POSITION"];
									$user_department=$row["DEPARTMENT"];
									$user_type=$row["USER_TYPE"];
									$user_name=$row["USERNAME"];
                                    $email=$row["EMAIL"]; 									
				?>
				<tr>
					
						<td><?php echo $user_Fname." ".$user_Lname;  ?></td>
            
						<td><?php echo $user_gender;  ?></td>
						
						<td><?php echo $user_phone;  ?></td> 
						<td><?php echo $user_position;  ?></td> 
						<td><?php echo $user_department;  ?></td> 
						<td><?php echo $user_type;  ?></td> 
						
						<td><?php echo $email  ?></td>
						<td><a href="attendancehistory3.php<?php echo '?USER_ID='.$user_id; ?>"><button class="btn" style="background-color: #152E48;color:white;margin-left:20px;">Attendance History</button></a></td>
			

				</tr>
				<?php endwhile; ?>
			</table>
			 </div>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<CENTER>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="registeredusers.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="registeredusers.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="registeredusers.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="registeredusers.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="registeredusers.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="registeredusers.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="registeredusers.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="registeredusers.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="registeredusers.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			</CENTER>
			<?php endif; ?>
	<?php
	$stmt->close();
}
?>		</div>
                      </div>				  
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div></div></div>