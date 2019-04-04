<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

	//Получаем из адресной строки ip и передаем в функцию 
 // $ip = "127.0.0.1";
	
function ping($ip){
    $output = shell_exec("ping $ip");
    echo("<pre>");
    var_dump(iconv("cp866","utf-8", $output));
    echo("</pre>");
}
// ping('127.0.0.1');
ping($_GET['ip']);
?>
</body>
</html>