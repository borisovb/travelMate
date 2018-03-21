<!DOCTYPE html>
<html>

<head>
    <?php
    $pageName = "Homepage";
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
            <button onclick="openLogin()" class="button button1">Login</button>
            <br />
            <button onclick="openRegister()" class="button button1">Register</button>

        </div>
    </section>
    <?php
    require_once 'includes/footer.php' 
    ?>
    </body>
</html>