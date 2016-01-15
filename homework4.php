<?php
include_once 'functions.php';
$number = getValue($_POST, "number");

$tmp = $number[0];
$length= count($number);
for($g=0;$g<$length;$g++){
	for($i=$g+1;$i<$length ;$i++){
		if($number[$i] < $number[$g]){
			$tmp = $number[$i];
			$number[$i] = $number[$g];
			$number[$g] = $tmp ;
		}
	}	
}
var_dump($number);

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
				<input type="number" id="number1" name="number[]"/>
				
			</div>
			<div>
				<label for="number2">two</label>
				<input type="number" id="number2" name="number[]"/>
				
			</div>

			<div>
				<label for="number3">three</label>
				<input type="number" id="number3" name="number[]"/>
				
			</div>
			<div>
				<label for="number4">four</label>
				<input type="number" id="number4" name="number[]"/>
				
			</div>			
			<div>
				<label for="number5">five</label>
				<input type="number" id="number5" name="number[]"/>
				
			</div>
			<div>
				<label for="number6">six</label>
				<input type="number" id="number6" name="number[]"/>
				
			</div>
			
			<div>
				<label for="number7">seven</label>
				<input type="number" id="number7" name="number[]"/>
				
			</div>
			<div>
				<label for="number8">eight</label>
				<input type="number" id="number8" name="number[]"/>
				
			</div>
			<div>
				<label for="number9">nine</label>
				<input type="number" id="number9" name="number[]"/>
				
			</div>
			<div>
				<label for="number10">ten</label>
				<input type="number" id="number10" name="number[]"/>
				
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
		<div>
		Array : 
		<?php print_r($number) 	 ?>
		</div>
		<div>
		Maxmimum : 
		<?= max($number) ?> 
		</div>
		<div>
		Minimum : 
		<?= min($number) ?> 
		</div>
	</div>
</body>
</html>