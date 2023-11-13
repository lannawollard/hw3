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


<script src="https://unpkg.com/react/umd/react.production.min.js"></script>
<script src="https://unpkg.com/react-dom/umd/react-dom.production.min.js"></script>
<script src="https://unpkg.com/prop-types/prop-types.min.js"></script>
<script src="https://unpkg.com/recharts/umd/Recharts.js"></script>
<div>
  import { LineChart, Line } from 'recharts';
const data = [{name: 'Page A', uv: 400, pv: 2400, amt: 2400}, ...];

const renderLineChart = (
  <LineChart width={400} height={400} data={data}>
    <Line type="monotone" dataKey="uv" stroke="#8884d8" />
  </LineChart>
);

</div>

