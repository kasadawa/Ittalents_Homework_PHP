<?php 
include_once 'functions.php';
$username = getValue($_POST, "username"); 
$password = getValue($_POST, "password"); 
$commitPassword = getValue($_POST, "commitPassword"); 
$cryptedPassword =crypt($password);
var_dump($_POST);
// if(strcmp($password, $commitPassword) != 0){
// 	
// }
// else if ($password !=null && $commitPassword !=null) {
// 	$cryptedPassword =crypt($password);
// }

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
				<label for="username">username</label>
				<input type="text" id="username" name="username"/>
			</div>
			
			<div>
				<label for="password">password</label>
				<input type="password" id="password" name="password"/>
			</div>
			
			<div>
				<label for="commitPassword">Type password again</label>
				<input type="password" id="commitPassword" name="commitPassword"/>
			</div>
			
			<div>
				<input type="submit" />
			</div>
		</form>
		<div>
		<?php if(strcmp($password, $commitPassword) != 0 ):?>
			<p>The passwords must be equal</p>
		<?php elseif($username !==null && $password !==null && $commitPassword !==null) :?>
			<p>Username: <?= $username ?></p>
			<p>Password: <?= $cryptedPassword ?></p>
		<?php endif?>
		</div>
	
	</div>
</body>
</html>