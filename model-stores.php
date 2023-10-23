<?php
function selectStores() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT store_id, store_name, store_location, store_size FROM `store` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertStore($sName, $sLocation, $sSize) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `store` (`store_name`, `store_location`, `store_size`) VALUES (?, ?, ?) ");
         $stmt->bind_param("sss", $sName, $sLocation, $sSize);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateStore($sName, $sLocation, $sSize, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `store` set `store_name` = ? , `store_location` = ?, `store_size` = ? where store_id = ?");
         $stmt->bind_param("sssi", $sName, $sLocation, $sSize, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}function deleteStore($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from store where store_id = ?");
         $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
