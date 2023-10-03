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
function selectManagesWhatStore($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.manager_id, manager_name, manager_time, floor, hours  FROM `manager` m join level l on l.manager_id = m.manager_id WHERE l.store_id=?");
        $stmt->bind_param("s", $sid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
