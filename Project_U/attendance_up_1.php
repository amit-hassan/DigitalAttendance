<!doctype HTML>
<html>
<head>
	<title>Course</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="phpcoding">
	<section class="headeroption">
		<h2>Digital Attendance Monitor</h2>
	</section>

	<section class="back">
		<form action="course.php" method="post" name="goback">
			<?php
				session_start();
				
			?>
			<input type="submit" name="goback" value="GoBack" />
		</form>
		</section>
	<!-- <section class="logout1">
		<form action="index.php" method="post" name="logout">
			<?php
			
				
			?>
			<input type="submit" name="logout" value="logout" />
		</form>
	</section>
 -->
	<section class="maincontent">
		<?php
			//session_start();
			$selected_course = "NULL";
			$selected_course=$_POST['selected_course'];
			$_SESSION["course_info"] = $selected_course;
			$c_info = $selected_course;
			$dt = date("y-m-d");

			if($selected_course=="None")
				{
					echo "Please Select a course.";
					echo "<br/>You're redirected to sign-in page within a moment.";
					header('Refresh: 2;url=course.php');
				}	
			
			else
				echo "You have selected ".$selected_course.".";

			include('connection.php');
			

		?>

		

		<?php
			$query_display = "select cs.course_info,s.student_name,cs.student_id from course_student cs,student s,course_faculty cf where cs.course_info='$c_info' and cs.student_id = s.student_id and cf.course_info='$c_info' and cs.semester_code='$semester_code' and cf.semester_code = '$semester_code'";
			$result_display_query = mysqli_query($conn,$query_display);


		?>

		<form action="report.php" method="POST">
			<table style="margin: 0px auto" width="600" border="1" cellpadding="10" cellspacing="1">
				<tr>

				<th>Course_Info</th>
				<th>Date</th>
				<th>Student_Name</th>
				<th>Student_ID</th>
				<th>Status</th>
				
				</tr>
				
				<?php
					$ch[]="";
					while ($employee=mysqli_fetch_assoc($result_display_query)) {
						
						echo "<td>".$employee['course_info']."</td>";
						echo "<td>".$dt."</td>";
						echo "<td>".$employee['student_name']."</td>";
						echo "<td>".$employee['student_id']."</td>";
						?>
					<td>
						<input type="checkbox" name="ch[]" value="<?php echo $employee['student_id'];?>" />Present
					</td>
						</tr>
				<?php } ?>



				
				
				<br/>
			</table>
				<input type="submit" value="Insert record" />


	
		</form> 
	</section>

	<section class="footeroption">
		<h3><?php echo "Developed By" ."&copy"."Team_BlackDragon"?></h3>
	</section>



</div>
</body>

</html>