<select store="form-select" id="sid" name="sid">
<?php
while ($storeItem = $storeList->fetch_assoc()) {
  $selText = "";
  if ($selectedStore == $instructorStore['store_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $storeItem['store_id']; ?>"<?=$selText?>><?php echo $storeItem['store_name']; ?></option>
<?php
}
?>
</select>
