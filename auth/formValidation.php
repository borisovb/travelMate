<?php
$userClass = new userClass();
$userDetails;
$errorMsg='';

if (!empty($_POST['loginSubmit']))
{
    $usernameEmail=$_POST['usernameEmail'];
    $password=$_POST['password'];

    if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 )
    {
        $login=$userClass->userLogin($usernameEmail,$password);
        if($login)
        {
            $userDetails=$userClass->userDetails($_SESSION['id']);
        }
        else
        {
            $errorMsg="Please check login details.";
        }
    }else
    {
        $errorMsg="Please enter username and password.";
    }
}

if (!empty($_POST['signupSubmit']))
{
    $username=$_POST['usernameReg'];
    $email=$_POST['emailReg'];
    $password=$_POST['passwordReg'];
    $passwordRepeat=$_POST['passwordRegRepeat'];

    $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
    $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
    $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

    if($password != $passwordRepeat){
        $errorMsg="Passwords doesn't match.";
    }
    if(!$username_check)
    {
        $errorMsg="Please enter valid username. It must be at least 3 and at most 20 characters long.";
    }
    if(!$email_check)
    {
        $errorMsg="Please enter valid email!";
    }
    if(!$password_check)
    {
        $errorMsg="Please enter valid password. It must be at least 6 characters long!";
    }

    if($username_check && $email_check && $password_check)
    {
        $registration=$userClass->userRegistration($username,$password,$email);
        if($registration)
        {
            $url=BASE_URL.'index.php';
            header("Location: $url"); 
        }
        else
        {
            $errorMsg="Username or Email already exists.";
        }
    }
}
$userDetails=$userClass->userDetails($_SESSION['id']); 
