<?php
require_once("util-db.php");
require_once("model-manages-what-store.php");

$pageTitle = "Manages what store";
include "view-header.php";
$managers = selectManagesWhatStore($_GET['store_id']);
include "view-manages-what-store.php";
include "view-footer.php";
?>
