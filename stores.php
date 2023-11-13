<?php
require_once("util-db.php");
require_once("model-stores.php");

$pageTitle = "Stores";
include "view-header.php";
$stores = selectStores();
include "view-stores.php";
include "view-footer.php";
?>

<head>
	<script src="plotly-2.27.0.min.js" charset="utf-8"></script>
</head>
<div id="tester" style="width:600px;height:250px;"></div>
<script>
	TESTER = document.getElementById('tester');
	Plotly.newPlot( TESTER, [{
	x: [1, 2, 3, 4, 5],
	y: [1, 2, 4, 8, 16] }], {
	margin: { t: 0 } } );
</script>
