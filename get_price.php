<?php
include 'db_connection.php';

if (!isset($_POST['room_id']) || !isset($_POST['start_date']) || !isset($_POST['end_date'])) {
    die("Greška: Nedostaju podaci!");
}

$room_id = $_POST['room_id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

$total_price = 0;

$months_hr = [
    "01" => "Siječanj", "02" => "Veljača", "03" => "Ožujak",
    "04" => "Travanj", "05" => "Svibanj", "06" => "Lipanj",
    "07" => "Srpanj", "08" => "Kolovoz", "09" => "Rujan",
    "10" => "Listopad", "11" => "Studeni", "12" => "Prosinac"
];

$current_date = strtotime($start_date);
$end_timestamp = strtotime($end_date);

while ($current_date <= $end_timestamp) {
    $month_num = date('m', $current_date);
    $month_hr = $months_hr[$month_num];

    $query = "SELECT price FROM room_prices WHERE room_id = ? AND month = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("is", $room_id, $month_hr);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $total_price += $row['price'];
    }

    $current_date = strtotime("+1 day", $current_date);
}

echo $total_price;
?>
