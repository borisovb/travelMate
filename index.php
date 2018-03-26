<?php
require "auth/config.php";
require 'auth/userClass.php';
require 'auth/formValidation.php';
?>

<!DOCTYPE html>
<html>
<head>
    <?php
    $pageName = "Homepage";
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

    <section class="headerImgSection">
        <div class="headerContainer">
            <img src="img/logo.png" class="gear" />
            <h1>TravelMate</h1>
            <p>Travel from home</p>
        </div>
    </section>

    <section class="infoSection">
        <div class="infoLeft">
            <img src="img/icons/passport.png" />
            <p>Read interesting stories
                <br> from the around the world</p>
        </div>
        <div class="infoRight">
            <img src="img/icons/trekking.png" />
            <p>Find new friends
                <br> and share a trip together</p>
        </div>
        <div class="infoCenter">
            <img src="img/icons/around.png" />
            <p>Find useful information about
                <br> travel visas, road taxes and more...</p>
        </div>
    </section>

    <section class="joinUsSection">
        <div>
            <p>JOIN US</p>
            <button onclick="openLogin()" class="button">Login</button>
            <br />
            <button onclick="openRegister()" class="button">Register</button>

        </div>
    </section>
    <?php
    require 'includes/footer.php' 
    ?>
    </body>
</html>