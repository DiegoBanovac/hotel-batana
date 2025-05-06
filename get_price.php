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

$query = "SELECT price FROM room_prices WHERE room_id = :room_id AND month = :month";
$stmt = $conn->prepare($query);

while ($current_date <= $end_timestamp) {
    $month_num = date('m', $current_date);
    $month_hr = $months_hr[$month_num];

    $stmt->execute([
        ':room_id' => $room_id,
        ':month' => $month_hr
    ]);

    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $total_price += $row['price'];
    }

    $current_date = strtotime("+1 day", $current_date);
}

echo $total_price;
?>
