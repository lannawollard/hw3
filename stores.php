<?php
require_once("util-db.php");
require_once("model-stores.php");

$pageTitle = "Stores";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
    insertStore($_POST['sName'], $_POST['sLocation'], $_POST['sSize']);
    break;
  }
}
$stores = selectStores();
include "view-stores.php";
include "view-footer.php";
?>
