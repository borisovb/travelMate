<?php
require "auth/config.php";
require 'auth/userClass.php';
require 'auth/storyClass.php';
require 'auth/formValidation.php';

$story = new storyClass();
$stories = $story->GetAllStories();
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    $pageName = "Stories";
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

    <section class="titleSection">
        <p> Stories </p>
    </section>
    <div class="wrapper">
        <section clas="mainSection">
            <?php 
            foreach($stories as $story){
            ?>  
            <article class="story">
                <img src="<?=$story['image']?>">
                <div class="storyContent">
                    <h2><?=$story['title']?></h2>
                    <p><?=
                    substr($story['content'], 0, 125) . '...'; ?></p>
                    <a href="story.php?id=<?=$story['id']?>">Read more...</a>
                    <p class="storyDate">
                        <strong>Date: </strong> <?=$story['date']?></p>
                </div>
            </article>
            
            <?php } ?>

        </section>
    </div>
    <?php
    require_once 'includes/footer.php' 
    ?>
</body>

</html>