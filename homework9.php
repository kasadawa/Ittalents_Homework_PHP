<?php


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>

	div >label{
	text-align:left;
	display:block;
	}
	
	
	</style>
</head>
<body>
	<div>
<!--  change the method to get and uncomment the part from homework9_1.php -->
		<form action="homework9_1.php" method="post">
		
			<div>
				<label for="firstname">First name</label>
				<input type="text" id="firstname" name="firstname" />
				
			</div>
			<div>
				<label for="lastname">Last name</label>
				<input type="text" id="lastname" name="lastname" />
				
			</div>
			
			<div>
				<label for="date">Born date: </label>
				<input type="date" id="date" name="date"  />
			
			</div>
			<div>
				<label for="childs">How many childs do you have</label>
				<input type="number" id="child" name="child" />
				
			</div>
			<div>
				<label for="color">Color of your head</label>
				<input type="text" id="color" name="color" />
				
			</div>
			<div>
				<input type="submit" />
			</div>	
		
		</form>
		
		

		<div>
		Array : 
		<?php var_dump($_POST) ?>
		</div>

	</div>
</body>
</html>