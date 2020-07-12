<?php
	$conn = mysqli_connect("localhost","root","","project_u");
	
	if(!empty($_POST['admin_name']) && !empty($_POST['admin_id']) && !empty($_POST['admin_pass']))
	{
		$pass = md5($_POST['admin_pass']);
		echo $_POST['admin_name']."<br/>".$_POST['admin_id']."<br/>";
		echo $pass;
		$name = $_POST['admin_name'];
		$id = $_POST['admin_id'];

		$quersssy = "insert into admin values('$name','$id','$pass')";
		$insert = mysqli_query($conn,$quersssy);
	    $_POST = array();
		?>
		<!doctype HTML>
		<html>
			<form action="md5_generator.php" method="POST">
				<input id="button" type="submit" name="submit" value="Create New Admin">
			</form>

		</html>


	<?php } 
	else
	{
		echo "Please Insert All values.Your page is redirecting to insertion page.";
		header('Refresh: 3;url=md5_generator.php');
	}



?>