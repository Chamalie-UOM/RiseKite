<?php

$user='root';
$pass='';
$db='generalsearch';


$db=mysql_connect('localhost',$user,$pass) or die("unable to connect db1");
@mysql_select_db('generalsearch')or die("unable to connect database");
?>