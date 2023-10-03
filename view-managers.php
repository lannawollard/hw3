<h1>Managers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Time</th>
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
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
