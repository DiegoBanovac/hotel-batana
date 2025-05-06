<?php
include ('db_connection.php'); 

$room_id = $_POST['room_id'];
$start_date = date('Y-m-d', strtotime($_POST['start_date']));
$end_date = date('Y-m-d', strtotime($_POST['end_date']));

$query = "SELECT * FROM reservations 
          WHERE room_id = :room_id
          AND (
              (start_date <= :start1 AND end_date >= :start2) OR
              (start_date <= :end1 AND end_date >= :end2) OR
              (start_date >= :start3 AND end_date <= :end3)
          )";

$stmt = $conn->prepare($query);
$stmt->execute([
    ':room_id' => $room_id,
    ':start1' => $start_date,
    ':start2' => $start_date,
    ':end1'   => $end_date,
    ':end2'   => $end_date,
    ':start3' => $start_date,
    ':end3'   => $end_date,
]);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {
    echo json_encode(['available' => false]);
} else {
    echo json_encode(['available' => true]);
}
?>
