<!doctype HTML>
<html>
<head>
	<title>Insertion Page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="phpcoding">
	<section class="headeroption">
		<h2>Digital Attendance Monitor</h2>
	</section>

	<section class="maincontent">
		<?php
			include('connection.php');
			session_start();
			//$semester_code = "317";
			$selected_insertion = $_POST['selected_insertion'];
			$_SESSION['selected_insertion']=$selected_insertion; 
			//$_SESSION['semester_code'] = $semester_code;
			if($selected_insertion=="none")
			{
				echo "Please select at least one valid insertion type.<br/>You're being redirected to previous selection page.";
				header('Refresh: 3;url=developer_admin.php');
			}
			
			elseif ($selected_insertion=="student") {
				?>
				<form method="post" action="final_insert.php" enctype="multipart/form-data">
					Student Name<br><input type="text" name="student_name" size="40"><br/>
					Student ID<br><input type="text" name="student_id" size="40"><br/>
					Semester<br><input type="text" name="semester" size="40"><br/>
					E-Mail<br><input type="text" name="email" size="40"><br/>
					Image<br><input type="file" name="UploadImage"><br/>

				<?php
		
					echo "<br/>Available Courses:<br/>";
					$query = "Select * from course where semester_code= '$semester_code'";
					$course_output = mysqli_query($conn,$query);
					while($courses=mysqli_fetch_assoc($course_output))
					{ ?>

					<input type="checkbox" name="student[]" value="<?php echo $courses['course_info'];?>" /><?php echo $courses['course_info']."</br>";?>

				<?php }
				?>
					

				<input id="button" type="submit" name="submit" value="INSERT">
				</form>
			<?php } 

			elseif ($selected_insertion=="faculty") {
				?>
				<form method="post" action="final_insert.php">
					Faculty Name<br><input type="text" name="faculty_name" size="40"><br/>
					Faculty ID<br><input type="text" name="faculty_id" size="40"><br/>
					Password<br><input type="password" name="password" size="40"><br/>

				<?php 
		
					echo "<br/>Available Courses:<br/>";
					$query = "Select course_info from course where semester_code= '$semester_code' and course_info NOT in(select course_info from course_faculty where semester_code = '$semester_code')";
					$course_output = mysqli_query($conn,$query);
					while($courses=mysqli_fetch_assoc($course_output))
					{ ?>

					<input type="checkbox" name="faculty[]" value="<?php echo $courses['course_info'];?>" /><?php echo $courses['course_info']."</br>";?>

				<?php }
				?>
					
				<input id="button" type="submit" name="submit" value="INSERT">
				</form>
			<?php } 

			else
			{
				?>
				<form method="post" action="final_insert.php">
					Course Info<br><input type="text" name="course_info" size="40"><br/>
					Course ID<br><input type="text" name="course_id" size="40"><br/>
					Semester Code<br><input type="text" name="semester_code" size="40"><br/>

					<input id="button" type="submit" name="submit" value="INSERT">
				</form>

			<?php } ?>




			




		
	</section>

	<section class="footeroption">
		<h3><?php echo "Developed By" ."&copy"."Team_BlackDragon"?></h3>
	</section>



</div>
</body>

</html>