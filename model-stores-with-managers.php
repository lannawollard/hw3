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
        $stmt = $conn->prepare("SELECT m.manager_id, manager_name, manager_time, floor, hours, l.level_id  FROM `manager` m join level l on l.manager_id = m.manager_id WHERE l.store_id=?");
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

function selectStoresForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT store_id, store_name FROM `store` order by store_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectManagersForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT manager_id, manager_name FROM `manager` order by manager_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertLevel($sid, $mid, $floor, $hours) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `level` (`store_id`, `manager_id`, `floor`, `hours`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiss", $sid, $mid, $floor, $hours);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateLevel($sid, $mid, $floor, $hours, $lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update`level` set `store_id` = ?, `manager_id`= ?, `floor`= ?, `hours` = ? where level_id = ?");
        $stmt->bind_param("iissi", $sid, $mid, $floor, $hours, $lid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteLevel($lid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from level where level_id=?");
        $stmt->bind_param("i", $lid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
