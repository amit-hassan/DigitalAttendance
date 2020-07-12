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

	<section class="maincontent">
		<?php
			include('connection.php');
			session_start();
			$given_id = $_SESSION['id'];
			?>
			<form class="course-dropdown" action="attendance_up_1.php" method="post" name="course-dropdown" id="course-dropdown">
				<table>
					<tr>
						<td>Your Courses:</td>
						<td>
							<select name="selected_course">
								<option>None</option>
								<?php
									$menu=" ";
									$dt = date("y-m-d");
									$course_1="select course_info from course_faculty where faculty_id = '$given_id' and semester_code = '$semester_code' and course_info not in(select course_info from attendance_storage where date='$dt' and semester_code='$semester_code')";
									$course_result_1 = mysqli_query($conn,$course_1);
									while($course_result=mysqli_fetch_assoc($course_result_1)){
										$menu .= "<option>".$course_result['course_info']."</option>";
									}

									echo $menu;

								?>
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


	</section>

	<section class="footeroption">
		<h3><?php echo "Developed By" ."&copy"."Team_BlackDragon"?></h3>
	</section>



</div>
</body>

</html>