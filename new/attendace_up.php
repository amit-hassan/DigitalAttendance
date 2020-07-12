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
			//session_start();
			$selected_course = "NULL";
			$selected_course=$_POST['selected_course'];
			session_start();
			$_SESSION["course_info"] = $selected_course;

			if($selected_course=="None")
				{
					echo "Please Select a course.";
					echo "<br/>You're redirected to sign-in page within a moment."
					header('Refresh: 2;url=course.php');
				}	
			
			else
				echo "You have selected ".$selected_course.".";
			

		?>
		
		<?php
			include('connection.php');
			$dt = date("y-m-d");
			$quettry = "Select student_id from course_student where course_info='$selected_course'";
			$result = mysqli_query($conn,$quettry) or die();/*Should Be Modified*/
			// while($fetcc=mysqli_fetch_assoc($result))
			// {
			// 	echo $fetcc['student_id']."</br>";
			// }

			// $result = mysqli_query($conn,$quettry) or die();
			while($lock = mysqli_fetch_assoc($result)){
				//echo "flag1";
				$query_store= "insert into attendance_storage(date,course_info,student_id) values('$dt','$selected_course','$lock[student_id]')";
				$final_lock = mysqli_query($conn,$query_store) or die();/*Should Be modified*/
		}

	    ?>

	    <?php 
	    	
	    	$employee="NULL";
		
		?>

		<?php
			//$display = "select student_name,aas.student_id,date,aas.course_info from attendance_storage aas,course_student cs,student s where aas.date='dt' and aas.couse_info='selected_course' and s.student_id = aas.student_id and aas.student_id = cs.student_id and cs.course_info = '$selected_course' ";	
			$display = "select student_name,aas.student_id,date,aas.course_info from attendance_storage aas,course_student cs,student s where aas.date='$dt' and aas.course_info='$selected_course' and s.student_id = aas.student_id and aas.student_id = cs.student_id and cs.course_info = '$selected_course' ";
			$result_display_query = "NULL";
			$result_display_query = mysqli_query($conn,$display);

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
						echo "<td>".$employee['date']."</td>";
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