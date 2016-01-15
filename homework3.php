<?php 
include_once 'functions.php';
$degree = getValue($_POST, "degree"); 
$convertTo = getValue($_POST, "convertTo");
empty($degree) && $convertTo !== "F" ? :$fahrenheit=(($degree*9)/5)+32; 
empty($degree) && $convertTo !== "C" ? :$celsius=(5/9)*($degree-32);

var_dump($_POST);

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
				<label for="degree">Enter degree</label>
				<input type="text" id="degree" name="degree"/>
				<label> in </label>
				<select name="convertTo">
				
					<option value="C" selected>F</option>
					<option value="F">C</option>
				</select>
			</div>
			

			<div>
				<input type="submit" />
			</div>
		</form>
		<div>
		<?php if(!empty($degree) && $convertTo==="F"):?>
			<p>In Fahrenheit: <?= $fahrenheit ?> F</p>
		<?php endif?>
		
		<?php if(!empty($degree) && $convertTo==="C"):?>
			<p>In Celsius: <?= $celsius ?> C</p>
		<?php endif?>
		</div>
	
	</div>
</body>
</html>