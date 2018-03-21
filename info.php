<!DOCTYPE html>
<html>

<head>
    <?php
    $pageName = "Useful Info";
    require_once 'includes/head.php' 
    ?>
        <script src="scripts/loadContent.js"></script>
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
    require_once 'includes/footer.php' 
    ?>
</body>

</html>