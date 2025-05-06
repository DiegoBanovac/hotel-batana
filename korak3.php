<?php
session_start();
require_once 'db_connection.php'; 

if (!isset($_SESSION['room_id'], $_SESSION['start_date'], $_SESSION['end_date'])) {
    header("Location: rezerviraj.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name'])) {
    $room_id = $_SESSION['room_id'];
    $start_date = $_SESSION['start_date'];
    $end_date = $_SESSION['end_date'];
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone_number']);

    try {
        $stmt = $conn->prepare("
            INSERT INTO reservations (room_id, start_date, end_date, name, surname, email, phone_number) 
            VALUES (:room_id, :start_date, :end_date, :name, :surname, :email, :phone)
        ");
        $stmt->execute([
            ':room_id' => $room_id,
            ':start_date' => $start_date,
            ':end_date' => $end_date,
            ':name' => $name,
            ':surname' => $surname,
            ':email' => $email,
            ':phone' => $phone
        ]);

        session_unset();
        session_destroy();

        echo '
        <!DOCTYPE html>
        <html lang="hr">
        <head>
            <meta charset="UTF-8">
            <title>Rezervacija uspješna</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <meta http-equiv="refresh" content="3;url=index.php">
        </head>
        <body>
            <div class="container mt-5 text-center">
                <div class="alert alert-success">
                    <h4 class="alert-heading">Soba je uspješno rezervirana!</h4>
                    <p>Bit ćete preusmjereni na početnu stranicu za 3 sekunde...</p>
                </div>
            </div>
        </body>
        </html>';
        exit;

    } catch (PDOException $e) {
        echo "Greška pri unosu u bazu: " . $e->getMessage();
    }
}
?>
