<?php
include ('db_connection.php'); 

$room_id = $_POST['room_id'];
$start_date = date('Y-m-d', strtotime($_POST['start_date']));
$end_date = date('Y-m-d', strtotime($_POST['end_date']));


$query = "SELECT * FROM reservations 
          WHERE room_id = ? 
          AND (
              (start_date <= ? AND end_date >= ?) OR
              (start_date <= ? AND end_date >= ?) OR
              (start_date >= ? AND end_date <= ?)
          )";

$stmt = $conn->prepare($query);
$stmt->bind_param("issssss", $room_id, $start_date, $start_date, $end_date, $end_date, $start_date, $end_date);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(['available' => false]);
} else {
    echo json_encode(['available' => true]);
}
?>
