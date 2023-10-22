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
?>
