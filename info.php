<?php
include_once 'header.php';
?>

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
include_once 'footer.php';
?>