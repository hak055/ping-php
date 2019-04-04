
<?php
include_once 'connect.php';
include 'func.php';



include 'showAll.php';
		

	
if(isset($_GET['title'])){

    
    $title = strip_tags(htmlspecialchars($_GET['title']));
    
    $new_group = new Vladis($pdo);
    $new_group->createGroup($title);
}


if(isset($_GET['submitIp']))
{
	$ip = $_GET['ip'];
	$group_id = $_GET['group_id'];

	$insert_ip = new Vladis($pdo);
    $insert_ip->validateIp($ip, $group_id);
}
?>
