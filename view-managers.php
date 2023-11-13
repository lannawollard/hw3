<h1>Managers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Time</th>
        <th></th>
      </tr>
    </thead>
    <tbody>      
<?php
while ($manager = $managers->fetch_assoc()){
?>
  <tr>
    <td><?php echo $manager['manager_id']; ?></td>
    <td><?php echo $manager['manager_name']; ?></td>
    <td><?php echo $manager['manager_time']; ?></td>
    <td>
      <form method="post" action="level-where-manager.php">
        <input type="hidden" name="mid" value="<?php echo $manager['manager_id']; ?>">
         <button type="submit" class="btn btn-primary">Levels</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>


<script src="plotly-2.27.0.min.js" charset="utf-8"></script>


<div id="tester" style="width:600px;height:250px;"></div>
<script>
TESTER = document.getElementById('tester');

Plotly.plot( TESTER, [{
    x: [1, 2, 3, 4, 5],
    y: [1, 2, 4, 8, 16] }], { 
    margin: { t: 0 } }, {showSendToCloud:true} );

console.log( Plotly.BUILD );	
</script>
