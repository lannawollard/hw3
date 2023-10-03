<h1>Manages what Store</h1>
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
while ($manager = $managers->fetch_assoc()){
?>
  <tr>
    <td><?php echo $manager['manager_id']; ?></td>
    <td><?php echo $manager['manager_name']; ?></td>
    <td><?php echo $manager['manager_time']; ?></td>
    <td><?php echo $manager['floor']; ?></td>
    <td><?php echo $manager['hours']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
