<?php
	if(!$_POST['page']) die("0");
	$page = (int)$_POST['page'];
	if(file_exists('../pages/page'.$page.'.php'))
	echo file_get_contents('../pages/page'.$page.'.php');
	else echo 'There is no such page!';
?>