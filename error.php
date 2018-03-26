<?php
require "auth/config.php";
require 'auth/userClass.php';
require 'auth/formValidation.php';

if (!empty($_SESSION['id'])) {
    $url='info.php';
    header("Location: $url");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <?php
    $pageName = "Error";
    require 'includes/head.php' 
    ?>
</head>

<body id="main">
<div id="errorMessages" class="errorMessages">
<?php
if(!empty($errorMsg)){
    echo '<p>' . $errorMsg . '</p>';
    echo '<div class="errorMessagesCloseButton"><a href="javascript:void(0)" class="closebtn" onclick="closeErrorMsg()"><i class="fas fa-times"></i></a></div>';
}
?>
</div>
    <header>
        <?php 
        require 'includes/nav.php';
 
        if (empty($_SESSION['id'])) {
            require 'includes/asideLogin.php';
            require 'includes/asideRegister.php';
        } 
        else {
            require 'includes/asideProfile.php';
        }

        ?>
    </header>

 <section class="titleSection">
        <p> <i class="fas fa-exclamation-triangle"></i> Error: Access Denied! </p>
    </section>
    <div class="wrapper">
        <section clas="mainSection" style="margin: auto"> 
            <p class="warning">
            Please login to your account to access this page!</a>
        </section>
    </div>
    <?php
    require 'includes/footer.php' 
    ?>
    </body>
</html>