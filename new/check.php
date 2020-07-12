<!DOCTYPE HTML>
<html>
	
<head>
	<title>Digital Attendance</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	
</head>
<body>
<div class="phpcoding">
	<section class="headeroption">
		<h2>Digital Attendance Monitor<h2>

	</section>

	
	<section class="maincontent">
		<?php

			$conn = mysqli_connect("localhost","root","","project_u");
			session_start();
			$_SESSION['id'] = $_POST['id'];
			$given_id = $_POST['id'];
			
			if($_POST['id'] == NULL || $_POST['pass'] == NULL)
			{
				echo "Please carefully insert your credentials.It's not fun every time to keep them blank.</br>";
						$_POST = array();
						header('Refresh: 3;url=index.php');
			}




			if(strlen($given_id) == 12)
			{
				
				if(!empty($_POST['id']) && !empty($_POST['pass']))
					{
						$pass_dev = md5($_POST['pass']);
						$dev_query = "select * from admin where admin_id = '$_POST[id]' and admin_pass= '$pass_dev'";
						$dev_result = mysqli_query($conn,$dev_query);
						
						if(mysqli_num_rows($dev_result)>0)
						{
							echo "Successfully Logged in.</br>";
							$dev_result_output = mysqli_fetch_assoc($dev_result);
							echo "Mr.".$dev_result_output['admin_name'].". You are redirected to developer page soon.";
							header('Refresh: 3;url=developer_admin.php');
						}
						else
						{
							echo "Check Your Credential.Please,don't try to login if you are not a true developer.";
							echo "<br/>You're redirected to sign-in page within a moment.";
							header('Refresh: 2;url=index.php');
						}

					}
				else
					{
						echo "Please carefully insert your credentials.It's not fun every time to keep them blank.</br>";
						$_POST = array();
						header('Refresh: 3;url=index.php');
					}

			}
			else
			{
				if(!empty($_POST['id']) && !empty($_POST['pass']))
					{
						$pass_faculty = md5($_POST['pass']);
						$faculty_query = "select * from faculty where faculty_id = '$_POST[id]' and password= '$pass_faculty'";
						$faculty_result = mysqli_query($conn,$faculty_query);
						
						if(mysqli_num_rows($faculty_result)>0)
						{
							echo "Successfully Logged in.</br>";
							$faculty_result_output = mysqli_fetch_assoc($faculty_result);
							echo "Mr.".$faculty_result_output['name'].". You are redirected to course page soon.";
							header('Refresh: 3;url=course.php');
						}
						else
						{
							echo "Check Your Credential.Please,don't try to login if you are not a true faculty.";
							echo "<br/>You're redirected to sign-in page within a moment.";
							header('Refresh: 2;url=index.php');
						}
			}
			}



		?>

	</section>

	
	<section class="footeroption">
		<h3><?php echo "Developed By" ."&copy"."Team_BlackDragon"?></h3>

	</section>

</div>
</body>
</html>