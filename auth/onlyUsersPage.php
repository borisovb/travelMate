<?php
if (empty($_SESSION['id'])) {
    $url='error.php';
    header("Location: $url");
    }
?>