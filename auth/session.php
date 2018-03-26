<?php
require('class/userClass.php');

if(!empty($_SESSION['id']))
{
$session_id=$_SESSION['id'];
$userClass = new userClass();
}
if(empty($session_id))
{

}