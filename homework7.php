<?php
//iskah informaciqta za browser-a da q printa chrez get_browser() no neshto ne uspqh da unlock-na 
//php.ini faila da include ne browscap.ini

$browserAgent  = [$_SERVER['HTTP_USER_AGENT'],
					$_SERVER['SERVER_ADDR'],
						$_SERVER['SERVER_NAME'],
							$_SERVER['SERVER_SOFTWARE'],
								$_SERVER['SERVER_PROTOCOL'],
					];

var_dump($browserAgent);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

</body>
</html>