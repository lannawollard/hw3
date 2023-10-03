<h1>Level where Manager</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Time</th>
      <th>Floor</th>
      <th>Hours</th>
      </tr>
    </thead>
    <tbody>      
<?php
while ($level = $levels->fetch_assoc()){
?>
  <tr>
    <td><?php echo $level['manager_id']; ?></td>
    <td><?php echo $level['manager_name']; ?></td>
    <td><?php echo $level['manager_time']; ?></td>
    <td><?php echo $level['floor']; ?></td>
    <td><?php echo $level['hours']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
