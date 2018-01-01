<!DOCTYPE html>
<html>
<head>
	<title>jQuery DataTables</title>
	<meta charset="UTF-8">
	<!-- Bootstrap CSS styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- jQuery DataTables CSS file CDN -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
	<!-- Google jQuery CDN -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Roboto Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- Custom Styles -->
	<style type="text/css">
		body {
			padding-top: 30px;
			font-family: 'Roboto', sans-serif;
			font-size: 16px;
		}
		h1 {
			margin-bottom: 30px;
		}

	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<center>
			<h1 class="text-center">jQuery DataTables Plugin
			</h1>
		</center>
		<div class="col-lg-1"></div>
		<div class="col-lg-10">		
		<!-- table to displa data	 -->
			<table class="table table-striped table-hover">
				<thead>
					<tr class="info">
						<th>ID</th>
						<th>Country Name</th>
						<th>Currency</th>
						<th>Flag</th>						
					</tr>
				</thead>
				<tbody>
					<?php 
						//include database connection
						require "dbcon.php";
						//SQL query to retieve all the details of the countries stored
						$sql = "SELECT * FROM countries";
						//execution of SQL query
						$res = mysqli_query($conn,$sql);
						//check the number of rows is greater than zero
						if(mysqli_num_rows($res)>0){
							//Fetch the data into an array 
							while ($row = mysqli_fetch_array($res)) {
								//print the data within styling tags
								echo "<tr>";
								//concatenate data with HTML tags
								echo "<td>".$row['id']."</td>
									  <td>".$row['country']."</td>
									  <td>".$row['currency']."</td>
									  <td style='width: 200px;'>"."<img src='".$row["flag"]."' "."style='height: 30px; width:50px; margin-right: 50px'".">"."</td>";
								echo "</tr>";
							}
						}

					?>
				</tbody>
			</table>
		</div>
		<div class="col-lg-1"></div>
	</div>
</div> 

<!-- Bootstrap JS file -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- jQuery DataTables JS file CDN -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- jQuery DataTables JS for Bootstrap file CDN -->
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<!-- start jQuery function -->
<script type="text/javascript">
	// start jQuery function to load the content of all functions after the page is loaded completely
	$(document).ready(function(){
		$('.table').DataTable();
	});
</script> 
<!-- end jQuery function -->
</body>
</html>