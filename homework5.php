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
		<form action="" method="post">
		
			<div>
				<label for="number1">one</label>
				<input type="number" id="number1" name="one"/>
				
			</div>
			<div>
				<label for="number2">two</label>
				<input type="number" id="number2" name="two"/>
				
			</div>
			
			<label for="color">Color: </label>
			<input  formmethod="get" type="radio" id="color" value="red" name="color">
			
			<div>
				<input type="submit" />
			</div>	
		
		</form>
		
		

		<div>
		Array : 
		<?php var_dump($_REQUEST) ?>
		</div>

	</div>
</body>
</html>