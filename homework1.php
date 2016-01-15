<?php 
include_once 'functions.php';
$operation = getValue($_POST, "operation"); 
$firstNumber = getValue($_POST, "firstNumber"); 
$secondNumber = getValue($_POST, "secondNumber"); 
$sum = null ; 
var_dump($_POST);


//moje s switch case ako v html kajeme vmesto string-ove da prashta 1,2,3,4
if ($operation == "plus"){
	 	$sum = $firstNumber+$secondNumber; 	
}
if ($operation == "minus"){
	$sum = $firstNumber - $secondNumber;
}
if ($operation == "po"){
	$sum = $firstNumber*$secondNumber;
}
if ($operation == "deleno"){
	$sum = $firstNumber/$secondNumber;
}


	echo $sum ;

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
				<label for="firstNumber">first number</label>
				<input type="number" id="firstNumber" name="firstNumber"/>
			</div>
			
			<div>
				<label for="secondNumber">second number</label>
				<input type="number" id="secondNumber" name="secondNumber"/>
			</div>
			
			
			<div>
				<label for="operation">Select Operation</label>
				<select name="operation" id="operation">
				<option value ="plus">+</option>
				<option value = "minus">-</option>
				<option value = "po">*</option>
				<option value = "deleno">/</option>
				</select>
			</div>
			
			<div>
				<input type="submit" />
			</div>
		</form>
	
	</div>
</body>
</html>