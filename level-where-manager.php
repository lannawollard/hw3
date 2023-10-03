<?php
require_once("util-db.php");
require_once("model-level-where-manager.php");

$pageTitle = "Level where Manager";
include "view-header.php";
$level = selectLevelWhereManager($_POST['mid']);
include "view-level-where-manager.php";
include "view-footer.php";
?>
