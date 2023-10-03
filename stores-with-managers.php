<?php
require_once("util-db.php");
require_once("model-stores-with-managers.php");

$pageTitle = "Stores with managers";
include "view-header.php";
$stores = selectStores();
include "view-stores-with-managers.php";
include "view-footer.php";
?>
