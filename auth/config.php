<?php
session_start();

define('DB_SERVER', 'studmysql01.fhict.local');
define('DB_USERNAME', 'dbi380570');
define('DB_PASSWORD', 'tainaParola123');
define('DB_DATABASE', 'dbi380570');
define("BASE_URL", "http://i380570.hera.fhict.nl/travelmate/");


function getDB() {
  $dbhost=DB_SERVER;
  $dbuser=DB_USERNAME;
  $dbpass=DB_PASSWORD;
  $dbname=DB_DATABASE;

  try {
    $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $dbConnection->exec("set names utf8");
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConnection;
  }
  catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
  }
}
