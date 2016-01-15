<?php
include_once 'functions.php';
session_start();
$word = ['j','o','r','o'];
$char = getValue($_POST, "char");

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
    $_SESSION['id0'] = '_';
    $_SESSION['id1'] = '_';
    $_SESSION['id2'] = '_';
    $_SESSION['id3'] = '_';
    $_SESSION['counts'] = 1;  
    
} else {
	$_SESSION['count']++ ;
	$_SESSION['counts']++;
}
if($_SESSION['count'] == 4){
	unset($_SESSION['count']);
}



$length = count($word); 

for($i=0;$i<$length;$i++){
	if($word[$i]==$char){
		$_SESSION['id'.(string)$i] = $word[$i];
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
				<label for="char">Input char</label>
				<input type="text" id="char" name="char"  />
				</div>

			
			<div>
				<input type="submit" value="Gues"/>
			</div>	
		
		</form>
		
		

			<div><?= $_SESSION['id0']." ".$_SESSION['id1']." ".$_SESSION['id2']." ".$_SESSION['id3']; ?></div>
			<div>TRY number:<?php echo $_SESSION['counts'];?></div>
			<div>You can try only 5 times !!! </div>
	</div>
</body>
</html>
