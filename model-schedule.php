<?php
function selectSchedule() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT schedule_id, schedule_morning, schedule_night FROM `schedule`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertSchedule($sMorning, $sNight) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `schedule` (`schedule_morning`, `schedule_night`) VALUES (?, ?)");
        $stmt->bind_param("ss", $sMorning, $sNight);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSchedule($sMorning, $sNight $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `schedule` set `schedule_morning` = ?, `schedule_night` = ? where schedule_id = ?");
        $stmt->bind_param("ssi", $sMorning, $sNight, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteSchedule($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from schedule where schedule_id=?");
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
?>
