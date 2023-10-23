<?php
require_once("util-db.php");
require_once("model-stores.php");

$pageTitle = "Stores";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
    case "Add":
    if (insertStore($_POST['sName'], $_POST['sLocation'], $_POST['sSize'])) {
      echo '<div class="alert alert-success" role="alert">Store added</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
  }
}
$stores = selectStores();
include "view-stores.php";
include "view-footer.php";
?>
