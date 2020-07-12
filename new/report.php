<!doctype HTML>
<html>
<head>
	<title>Report</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="phpcoding">
	<section class="headeroption">
		<h2>Digital Attendance Monitor</h2>
	</section>

	<section class="logout1">
		<form action="index.php" method="post" name="logout">
			<input type="submit" name="logout" value="logout" />
	</form>
	</section>
	


	<section class="maincontent">
		<?php
			include('connection.php');
			session_start();
			$selected_course = $_SESSION['course_info'];
			$c_info = $selected_course;
			$dt = date('y-m-d');
			$quettry = "Select student_id from course_student where course_info='$selected_course' and semester_code='$semester_code'";
			$result = mysqli_query($conn,$quettry) or die();/*Should Be Modified*/
			// while($fetcc=mysqli_fetch_assoc($result))
			// {
			// 	echo $fetcc['student_id']."</br>";
			// }

			// $result = mysqli_query($conn,$quettry) or die();
			while($lock = mysqli_fetch_assoc($result)){
				//echo "flag1";
				$query_store= "insert into attendance_storage(date,course_info,student_id,semester_code) values('$dt','$selected_course','$lock[student_id]','$semester_code')";
				$final_lock = mysqli_query($conn,$query_store) or die();/*Should Be modified*/
		}

	    ?>




		<?php
			
			//$menu = $_POST['ch'];
	 		if(isset($_POST['ch']))
	 		{
	 		foreach($_POST['ch'] as $check) {
       				 
       				 $query = "update attendance_storage set status=1 where student_id='$check' and date = '$dt' and course_info='$c_info' and semester_code = '$semester_code'";
        			 $result = mysqli_query($conn,$query);
        			 $query_1 = "select class_attended from course_student where student_id = '$check' and course_info='$c_info'";
        			 $result_1 = mysqli_query($conn,$query_1);
        			 $value = mysqli_fetch_assoc($result_1);
        			 $count_s = $value['class_attended'];
        			 

					 $new_value = $count_s + 1;
					 $query_update = "update course_student set class_attended = '$new_value' where student_id ='$check' and course_info='$c_info' and semester_code='$semester_code'";
					 $final_student_update = mysqli_query($conn,$query_update);

					  


    				}
    		}
    		$query_faculty_total_class = "select total_class from course_faculty where course_info='$c_info' and semester_code='$semester_code'";
    		$result_faculty = mysqli_query($conn,$query_faculty_total_class);
    		$total_class = mysqli_fetch_assoc($result_faculty);
    		$count_total_new = $total_class['total_class'] + 1;

    		$query_faculty_total_class_update = "update course_faculty set total_class = '$count_total_new' where course_info='$c_info' and semester_code='$semester_code'";
    		$final_update_faculty = mysqli_query($conn,$query_faculty_total_class_update);
			
			// $query = "select status from attendance_storage where student_id = '18001' and course_info='Backlift B'";
			// $result = mysqli_query($conn,$query);
			// $value = mysqli_fetch_assoc($result);
			// if(isset($value['status']))
			// 	echo $value['status'];
			// else
			// 	echo "0";

	 ?>

	<table style="margin: 0px auto" width="600" border="1" BORDERCOLOR="#5C79F9" cellpadding="10" cellspacing="0">
				<tr>

				<th>Image</th>
				<th>Student_Name</th>
				<th>Student_ID</th>
				<th>Total Class</th>
				<th>Present Classes</th>
				<th>Attendance Percentage</th>

				</tr>
				<?php
					$query_report_1 = "select image,cs.course_info,s.student_name,cs.student_id,cf.total_class,cs.class_attended from course_student cs,student s,course_faculty cf where cs.course_info='$c_info' and cs.student_id = s.student_id and cf.course_info='$c_info' and cs.semester_code='$semester_code' and cf.semester_code = '$semester_code'";
					$result_report = mysqli_query($conn,$query_report_1);
					while($display=mysqli_fetch_assoc($result_report))
					{
						//echo "<td>".$display['course_info']."</td>";
						$MyPhoto=$display['image'];?>
					<td>
						<img src ="images/<?php echo $MyPhoto; ?>" width="80" height="80" />
					</td>
					<?php
						echo "<td>".$display['student_name']."</td>";
						echo "<td>".$display['student_id']."</td>";
						echo "<td>".$display['total_class']."</td>";
						echo "<td>".$display['class_attended']."</td>";

						$Percentage_dis = ($display['class_attended'] / $display['total_class']) * 100;
						echo "<td>".$Percentage_dis."</td>";

						echo "</tr>" ;

					}
				?>
				
				
	
	</table> 
	<?php
		$mail_query = "select e_mail from student s,course_student cs where cs.student_id = s.student_id and cs.course_info = '$c_info' and cs.semester_code='$semester_code' and s.student_id not in(select student_id from attendance_storage where date='$dt' and course_info = '$c_info' and status = 1 and semester_code='$semester_code')";
		$done_mail = mysqli_query($conn,$mail_query);
		while($mail_arr=mysqli_fetch_assoc($done_mail))
		{
			$to = $mail_arr['e_mail'];
			$subject = 'Absent Report';
			$message = 'Dear Sir,Your son is absent Today Class.';
			$headers = 'From: nubauthority@gmail.com';
			if(mail($to,$subject,$message,$headers))
				echo "Email Sent";
			else
				echo "Email sending failed";
		}
	
	?>



	</section>

	<section class="footeroption">
		<h3><?php echo "Developed By" ."&copy"."Team_BlackDragon"?></h3>
	</section>



</div>
</body>

</html>