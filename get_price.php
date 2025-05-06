<?php
include 'db_connection.php';

if (!isset($_POST['room_id']) || !isset($_POST['start_date']) || !isset($_POST['end_date'])) {
    die("Greška: Nedostaju podaci!");
}

$room_id = $_POST['room_id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

$total_price = 0;

// Iteracija kroz svaki dan rezervacije
$current_date = strtotime($start_date);
$end_timestamp = strtotime($end_date);

while ($current_date <= $end_timestamp) {
    $month = date('m', $current_date);

    $query = "SELECT price FROM room_prices WHERE room_id = ? AND month = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $room_id, $month);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $total_price += $row['price'];
    }

    // Prelazak na sljedeći dan
    $current_date = strtotime("+1 day", $current_date);
}

echo $total_price;
?>
