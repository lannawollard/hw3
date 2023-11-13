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



<script src="https://d3js.org/d3.v6.min.js"></script>


<script src="$YOUR_PATH/billboard.js"></script>
<div id="gaugeChart"></div>
<script>


var chart = bb.generate({
  data: {
    columns: [
	["data", 91.4]
    ],
    type: "gauge", // for ESM specify as: gauge()
    onclick: function(d, i) {
	console.log("onclick", d, i);
   },
    onover: function(d, i) {
	console.log("onover", d, i);
   },
    onout: function(d, i) {
	console.log("onout", d, i);
   }
  },
  gauge: {},
  color: {
    pattern: [
      "#FF0000",
      "#F97600",
      "#F6C600",
      "#60B044"
    ],
    threshold: {
      values: [
        30,
        60,
        90,
        100
      ]
    }
  },
  size: {
    height: 180
  },
  bindto: "#gaugeChart"
});

setTimeout(function() {
	chart.load({
		columns: [["data", 10]]
	});
}, 1000);

setTimeout(function() {
	chart.load({
		columns: [["data", 50]]
	});
}, 2000);

setTimeout(function() {
	chart.load({
		columns: [["data", 70]]
	});
}, 3000);

setTimeout(function() {
	chart.load({
		columns: [["data", 0]]
	});
}, 4000);

setTimeout(function() {
	chart.load({
		columns: [["data", 100]]
	});
}, 5000);
</script>

