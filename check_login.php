<?
session_start();
$user_check="somchai";
$pass_check="123456";
$user_check1="peter";
$pass_check1="654321";
if(($user==$user_check)&&($pass==$pass_check) or ($user==$user_check1)&&($pass==$pass_check1)){
session_register("user");
session_register("pass");
header("location:member.php");
}else header("location:index2.php");
?>