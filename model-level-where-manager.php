<?php
function selectLevelWhereManager($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.manager_id, manager_name, manager_time, floor, hours  FROM `manager` m join level l on l.manager_id = m.manager_id WHERE l.manager_id=? ");
        $stmt->bind_param("s", $mid);
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
