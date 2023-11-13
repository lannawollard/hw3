<h1>Stores</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Location</th>
      <th>Size</th>
        <th></th>
      </tr>
    </thead>
    <tbody>      
<?php
while ($store = $stores->fetch_assoc()){
?>
  <tr>
    <td><?php echo $store['store_id']; ?></td>
    <td><?php echo $store['store_name']; ?></td>
    <td><?php echo $store['store_location']; ?></td>
    <td><?php echo $store['store_size']; ?></td>
    <td><a href="manages-what-store.php?id=<?php echo $store['store_id']; ?>">Manages</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

<head>
	<script src="plotly-2.27.0.min.js" charset="utf-8"></script>
</head>

<div id="tester" style="width:600px;height:250px;"></div><script>
	TESTER = document.getElementById('tester');
	Plotly.newPlot( TESTER, [{
	x: [1, 2, 3, 4, 5],
	y: [1, 2, 4, 8, 16] }], {
	margin: { t: 0 } } );
</script>
