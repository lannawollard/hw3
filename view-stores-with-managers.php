<h1>Stores with managers</h1>
<div class="card-group">
<?php
while ($store = $stores->fetch_assoc()){
?>
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $store['store_name']; ?></h5>
      <p class="card-text">
   <ul class="list-group">
 <?php
  $managers = selectManagesWhatStore($store['store_id']);
  while ($manager = $managers->fetch_assoc()){
  ?>
     <li class="list-group-item"><?php echo $manager['manager_name']; ?> - <?php echo $manager['floor']; ?> - <?php echo $manager['hours']; ?></li>
  <?php
  }
  ?>
        </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Location: <?php echo $store['store_location']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
