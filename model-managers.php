<?php
function selectManagers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT manager_id, manager_name, manager_time FROM `manager`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertManager($mName, $mTime) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `manager` (`manager_name`, `manager_time`) VALUES (?, ?)");
        $stmt->bind_param("ss", $mName, $mTime);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateManager($mName, $mTime, $mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `manager` set `manager_name` = ?, `manager_time` = ? where manager_id = ?");
        $stmt->bind_param("ssi", $mName, $mTime, $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteManager($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from manager where manager_id=?");
        $stmt->bind_param("i", $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
?>
