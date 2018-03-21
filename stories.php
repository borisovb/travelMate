<!DOCTYPE html>
<html>

<head>
    <?php
    $pageName = "Stories";
    require_once 'includes/head.php' 
    ?>
</head>

<body id="main">
    <header>
        <?php 
        require_once 'includes/nav.php';

        require_once 'includes/asideLogin.php';

        require_once 'includes/asideRegister.php';
        ?>
    </header>

    <section class="titleSection">
        <p> Stories </p>
    </section>
    <section class="secTitleSection">
        <div class="secNav">
            <a href="#">Latest stories</a> |
            <a href="#">By Continent</a>
        </div>
    </section>
    <div class="wrapper">
        <section clas="mainSection">
            <article class="story">
                <img src="https://i.imgur.com/J3Xq0z5.jpg">
                <div class="storyContent">
                    <h2>Title of the page</h2>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                    <p class="storyDate">
                        <strong>Date: </strong> 11.11.18</p>
                    <a href="#">Read more...</a>
                </div>
            </article>
            <article class="story">
                <img src="https://i.imgur.com/J3Xq0z5.jpg">
                <div class="storyContent">
                    <h2>Title of the page</h2>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                    <p class="storyDate">
                        <strong>Date: </strong> 11.11.18</p>
                    <a href="#">Read more...</a>
                </div>
            </article>
            <article class="story">
                <img src="https://i.imgur.com/J3Xq0z5.jpg">
                <div class="storyContent">
                    <h2>Title of the page</h2>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                    <p class="storyDate">
                        <strong>Date: </strong> 11.11.18</p>
                    <a href="#">Read more...</a>
                </div>
            </article>

        </section>
    </div>
    <?php
    require_once 'includes/footer.php' 
    ?>
</body>

</html>