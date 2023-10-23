<?php
require_once("util-db.php");
require_once("model-stores-with-managers.php");

$pageTitle = "Stores with managers";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertLevel($_POST['sid'], $_POST['mid'], $_POST['floor'], $_POST['hours'])) {
        echo '<div class="alert alert-success" role="alert">Level added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateLevel($_POST['sid'], $_POST['mid'], $_POST['floor'], $_POST['hours'], $_POST['lid'])) {
        echo '<div class="alert alert-success" role="alert">Level edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteLevel($_POST['lid'])) {
        echo '<div class="alert alert-success" role="alert">Level deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}


$stores = selectStores();
include "view-stores-with-managers.php";
include "view-footer.php";
?>
