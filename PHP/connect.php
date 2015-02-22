<?php
$con = mysql_connect('localhost','zz','1234');
if(!$con){
	die ('Could not connect to database'.mysql_error() );
}
mysql_select_db('ripitvids',$con);
?>