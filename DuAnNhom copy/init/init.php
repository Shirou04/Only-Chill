<?php 
include "config.php";
session_start();
$baseurl="http://localhost/Web204_DuAnMau/fstudio-WeddingDresses";
$action=$_GET['action']??"";
include "controllers/controller.php";