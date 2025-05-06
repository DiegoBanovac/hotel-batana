<?php
require_once 'db_connection.php'; 

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  
    $stmt = $conn->prepare("SELECT COUNT(*) FROM newsletter WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        echo json_encode(['success' => false, 'message' => 'Ovaj e-mail je već pretplaćen.']);
    } else {
        $stmt = $conn->prepare("INSERT INTO newsletter (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Uspješno ste se pretplatili na newsletter!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Došlo je do pogreške. Pokušajte ponovno.']);
        }

        $stmt->close();
    }

    $conn->close();
}
?>
