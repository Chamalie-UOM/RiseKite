<?php

$user='root';
$pass='chul@P292';
$db='armydb';


$db=mysql_connect('localhost',$user,$pass) or die("unable to connect db1");
@mysql_select_db('armydb')or die("unable to connect database");
?>