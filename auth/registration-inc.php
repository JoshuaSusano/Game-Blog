<?php
if(isset($_POST["submit"])){

    // Grabbing Data 
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    
    // Instantiate the RegistrationControl Class
    include "../classes/registration-contr-classes.php";
    include "../classes/registration.php";
    $register = new registration($email , $password , $confirm_password);
    // Error catcher
    

    // Displaying data

}