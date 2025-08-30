<?php
if (isset($_POST["submit"]))
{
$email = $_POST["email"];
$confirm_email = $_POST["confirm_email"];
$password = $_POST["password"];

//Instiantiate Register
include "../classes/registration-classes.php";
$registration = new registration($email , $confirm_email , $password);


// Running error controls


// Going back to frontpage
}