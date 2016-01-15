<?php
function isAll($inputName){
	$tmp = true; 
	foreach ($_POST as $key=>$value){
		if($value==null){
			$tmp = false; 
		}
	}
	if(!$tmp){
		echo !isset($_POST[$inputName])?"":$_POST[$inputName];
	}
}

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
				<label for="first">First name</label>
				<input type="text" id="first" name="first" value="<?php isAll("first") ?>" />
				
			</div>
			<div>
				<label for="last">Last name</label>
				<input type="text" id="last" name="last" value="<?php isAll("last") ?>"/>
				
			</div>
			
			<label for="date">Born date: </label>
			<input type="date" id="date" name="date" value="<?php isAll("date") ?>" />
			
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