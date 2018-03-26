<?php
require "auth/config.php";
require 'auth/userClass.php';
require 'auth/formValidation.php';
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    $pageName = "About";
    require_once 'includes/head.php' 
    ?>
    <script src="scripts/inputValidation.js"></script>
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
        <p> About </p>
    </section>

    <div class="wrapper">

        <section class="aboutLeft">
            <div class="aboutForm">
                <form name="Form">
                    <label for="name">Name:</label>
                    <input type="text" name="Name" value="Name" id="name">
                    <br>
                    <label for="email"> Email:</label>
                    <input type="text" name="Email" value="Email" id="email">
                    <br>
                    <label for="message">Message:</label>

                    <textarea rows="4" cols="50"> Your message...</textarea>
                    <br>
                    <input type="submit" onclick="validate()" value="Send">
                </form>
            </div>
        </section>

        <section class="aboutRight">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.3785153079807!2d5.463285315767883!3d51.451206479625974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d93e1ea2e495%3A0xd27609f1e27169c4!2sBoschdijk+272%2C+5612+HJ+Eindhoven!5e0!3m2!1sen!2snl!4v1520426321883"
                width="400" height="300" frameborder="0" style="border:0;margin-top:3%; border-radius:8px;" allowfullscreen></iframe>
            <p>
                <i class="fas fa-envelope"></i> info@travelmate.eu</p>
            <p>
                <i class="fas fa-map-marker"></i> Boschdijk 272, 5612HJ, Eindhoven</p>
            <p>
                <i class="fas fa-phone-square"></i> +31 6545 927</p>
        </section>

    </div>
    <?php
    require_once 'includes/footer.php' 
    ?>
</body>

</html>