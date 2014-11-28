<?php
$enlace = mysql_connect('localhost','root','root');

if (!enlace) {
	die('no se puede conectar' . mysql_error());
}
$bd=mysql_select_db('pruebaG', $enlace);
mysql_set_charset('utf8');
?>