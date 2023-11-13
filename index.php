



<?php
$pageTitle= "Home";
include "view-header.php";
?>
    <h1>Homework 3</h1>
<?php
include "view-footer.php";
?>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<html>
  <head>
    <title>My first Chartist Tests</title>
    <link rel="stylesheet"
          href="bower_components/chartist/dist/chartist.min.css">
  </head>
  <body>
    <!-- Site content goes here !-->
    <script src="bower_components/chartist/dist/chartist.min.js"></script>
  </body>
</html>

<div class="ct-chart ct-perfect-fourth"></div>
var data = {
   [
    [5, 2, 4, 2, 0]
  ]
};


new Chartist.Line('.ct-chart', data);


var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();
