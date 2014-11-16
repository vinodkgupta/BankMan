<?php
if(!mysql_connect('localhost','root','vision123') || !mysql_select_db('B13141'))
{	$error='Cant connect'; 
	die($error);
}
?>
