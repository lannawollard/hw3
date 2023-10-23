<div class="row">
  <div class="col">
<h1>Managers</h1>
    </div>
  <div class="col-auto">
<?php
include "view-managers-newform.php";
?>
  </div>
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
