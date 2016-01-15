<?php
session_start();

echo count($_SESSION);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>

</head>
<body>
	<div>
		<form action="" method="post">
		
			<div>
				<label for="first">First name</label>
			
			</div>
			<div>
				<label for="last">Last name</label>
				
			</div>
				<label for="date">Born date: </label>
	
			<div>
				<input type="submit" value="Calculate" />
			</div>	
		
		</form>
		
		

		

	</div>
</body>
</html>