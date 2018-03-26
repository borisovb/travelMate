<?php
require "auth/config.php";
require 'auth/userClass.php';
require 'auth/storyClass.php';
require 'auth/formValidation.php';

$story = new storyClass();
$theStory = $story->GetStory($_GET['id']);
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    $pageName = "Story";
    require_once 'includes/head.php' 
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
    <?php 
            foreach($theStory as $story){
            ?>  
    <section class="titleSection">
        <p> <?=$story['title']?> </p>
    </section>
    <img class="storyImage" src="<?=$story['image']?>">
    <div class="wrapper">
        <section clas="mainSection">     
            <p><?=$story['content']?></p>
            <strong>Date: </strong> <?=$story['date']?>
            <br><br>
        </section>
    </div>
    <?php } ?>
    <?php
    require_once 'includes/footer.php' 
    ?>
</body>

</html>

