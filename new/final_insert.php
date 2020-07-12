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
			$selected_insertion=$_SESSION['selected_insertion'];
			extract($_POST);
			//$semester_code = $_SESSION['selected_insertion'];

			if($selected_insertion == "student")
			{	
				$s_id                = $_POST['student_id'];
				$s_name              = $_POST['student_name'];
				$s_semester          = $_POST['semester'];
				$s_email             = $_POST['email'];
				$UploadedFileName    = $_FILES['UploadImage']['name'];
				if($UploadedFileName !='')
				{
						$upload_directory = "images/"; //This is the folder which you created just now
						$TargetPath       =time().$UploadedFileName;
						//echo $TargetPath;
						if(move_uploaded_file($_FILES['UploadImage']['tmp_name'], $upload_directory.$TargetPath))
						{    

				/*$querry_student = "insert into student(student_name,student_id,semester,e_mail) values('$_POST[student_name]','$_POST[student_id]','$_POST[semester]','$_POST[email]')";
				$insert_student = mysqli_query($conn,$querry_student);*/
						$QueryInsertFile     ="INSERT INTO student(image,student_name,student_id,semester,e_mail) values ('$TargetPath','$s_name','$s_id','$s_semester','$s_email')"; 
						$insert              = mysqli_query($conn,$QueryInsertFile) or die("Error");
						foreach ($_POST['student'] as $course_info ) 
						{
							$querry_course = "insert into course_student(course_info,student_id,semester_code,class_attended) values('$course_info','$_POST[student_id]','$semester_code',0)";
							$insert_course_table = mysqli_query($conn,$querry_course);
						}
						}
				}

				$_POST=array();
				
				echo "Inserted Successfully Student's information to the database.<br>You will be redirected to insertion main page quickly.";
				header('Refresh: 3;url=developer_admin.php');

			}
			elseif($selected_insertion=="course")
			{
				$query_course = "insert into course(course_id,course_info,semester_code) values('$_POST[course_id]','$_POST[course_info]','$semester_code') ";
				$insert_course = mysqli_query($conn,$query_course);

				$_POST=array();
				
				echo "Inserted Successfully Course's information to the database.<br>You will be redirected to insertion main page quickly.";
				header('Refresh: 3;url=developer_admin.php');

			}
			else
			{
				
				$password =md5($_POST['password']);
				$querry_faculty = "insert into faculty(name,faculty_id,password) values('$_POST[faculty_name]','$_POST[faculty_id]','$password')";
				$insert_faculty = mysqli_query($conn,$querry_faculty);
				foreach ($_POST['faculty'] as $course_info ) {
					$querry_course_faculty = "insert into course_faculty(course_info,faculty_id,semester_code,total_class) values('$course_info','$_POST[faculty_id]','$semester_code',0)";
					$insert_course_table = mysqli_query($conn,$querry_course_faculty);
				}

				$_POST=array();
				
				echo "Inserted Successfully Faculty's information to the database.<br>You will be redirected to insertion main page quickly.";
				header('Refresh: 3;url=developer_admin.php');
			}


		?>
	</section>

	<section class="footeroption">
		<h3><?php echo "Developed By" ."&copy"."Team_BlackDragon"?></h3>
	</section>



</div>
</body>

</html>