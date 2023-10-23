<div class="row">
  <div class="col">
<h1>Stores</h1>    
  </div>
  <div class="col-auto">
  <?php
include "view-stores-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Location</th>
      <th>Size</th>
        <th></th>
        <th></th>
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
    <td>
    </td>
    <td>
    </td>
    <td> 
      <form method="post" action="manages-what-store.php">
        <input type="hidden" name="mid" value="<?php echo $store['store_id']; ?>">
         <button type="submit" class="btn btn-primary">Manages</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
