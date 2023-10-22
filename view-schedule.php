<h1>Schedules</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Morning</th>
      <th>Night</th>
        <th></th>
      </tr>
    </thead>
    <tbody>      
<?php
while ($schedule = $schedules->fetch_assoc()){
?>
  <tr>
    <td><?php echo $schedule['schedule_id']; ?></td>
    <td><?php echo $schedule['schedule_morning']; ?></td>
    <td><?php echo $schedule['schedule_night']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
