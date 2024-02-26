<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>College Management</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
		<img src="img/1.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > College Information</h3><br>
					<img src="img/home.jpg" class="imgs">
					<p class="para">
						College Management System is a is a complete college management software designed to automate a college's diverse operations from classes, exams to College events calendar. 
					</p>
					
					<p class="para">
						This College software has a powerful online community to bring parents, teachers and students on a common interactive platform. It is a paperless office automation solution for today's modern college. The college Management System provides the facility to carry out all day to day activities of the College.
					</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html> 