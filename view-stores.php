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
