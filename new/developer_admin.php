<!doctype HTML>
<html>
<head>
	<title>Select Option</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<style>
		.logout1 
		{
			  box-shadow:0 0 0;
			  color:#FFFFFF;
			  margin:-18px 77px -10px 1129px;
			  padding:20px;
			  width:53px;
		}
	</style>
</head>
<body>
<div class="phpcoding">
	<?php
			session_start();
			$out = $_SESSION['id'];

			
		if($out){ ?>

	<section class="headeroption">
		<h2>Digital Attendance Monitor</h2>
	</section>

	<section class="maincontent">

		<section class="logout1">
		<form action="index.php" method="post" name="logout">

			<input type="submit" name="logout" value="logout" />
		</form>
		</section>
		
		<form class="course-dropdown" action="developer_insertion.php" method="post" name="course-dropdown" id="course-dropdown">
				<table>
					<tr>
						<td>Your Insertion Types:</td>
						<td>
							<select name="selected_insertion">
								<option value="none">None</option>
								<option value="student">Student Info</option>
								<option value="faculty">Faculty Info</option>
								<option value="course">Course</option>
								
						</select>
					</td>
				</tr>
				<tr>
				<td></td>
					<td>
						<input type="submit" name="course_submit" value="submit" />
						<input type="reset" value="Clear" />
					</td>
				</tr>
			</table>
			
		</form>
		<?php } 
		else
		{
			echo "Please Login again.<br\>";
			header('Refresh: 3;url=index.php');
		}




		?>




		






	











		<!-- <select name="carlist" form="carform">
		  <option value="volvo">Volvo</option>
		  <option value="saab">Saab</option>
		  <option value="opel">Opel</option>
		  <option value="audi">Audi</option>
		</select> -->



	</section>

	<section class="footeroption">
		<h3><?php echo "Developed By" ."&copy"."Team_BlackDragon"?></h3>
	</section>



</div>
</body>

</html>