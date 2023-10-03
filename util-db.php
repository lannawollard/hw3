<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'lannawol_hw3user', 'Youngdolph2021!', 'lannawol_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
