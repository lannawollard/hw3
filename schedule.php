<?php
require_once("util-db.php");
require_once("model-schedule.php");

$pageTitle = "Schedules";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertSchedule($_POST['sMorning'], $_POST['sNight'])) {
        echo '<div class="alert alert-success" role="alert">Schedule added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateSchedule($_POST['sMorningr'], $_POST['sNight'], $_POST['sid'])) {
        echo '<div class="alert alert-success" role="alert">Schedule edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteSchedule($_POST['sid'])) {
        echo '<div class="alert alert-success" role="alert">Schedule deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$schedules = selectSchedule();
include "view-schedule.php";
include "view-footer.php";
?>
