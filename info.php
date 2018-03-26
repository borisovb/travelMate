<?php
require "auth/config.php";
require 'auth/userClass.php';
require 'auth/formValidation.php';
require 'auth/onlyUsersPage.php';
?>
<!DOCTYPE html>
<html>

<head>
    <?php
        $pageName = "Useful Info";
        require 'includes/head.php' 
    ?>
    <script src="scripts/loadContent.js"></script>
</head>

<body id="main">
    <header>
        <?php 
            require 'includes/nav.php';
            require 'includes/asideProfile.php';
        ?>
    </header>

    <section class="titleSection">
        <p> Useful Info </p>
    </section>
    <section class="secTitleSection">
        <div class="secNav">
            <a id="travelVisasLink" href="javascript:void(0)" onclick="loadTravelVisas()">Travel visas</a> |
            <a id="roadTaxesLink" href="javascript:void(0)" onclick="loadRoadTaxes()">Road taxes</a> |
            <a id="otherLink" href="javascript:void(0)" onclick="loadOther()">Other</a>
        </div>
    </section>
    <div class="wrapper">
        <section class="mainSection" id="infoContent">

        </section>
    </div>
    <?php
    require 'includes/footer.php'
    ?>
</body>

</html>