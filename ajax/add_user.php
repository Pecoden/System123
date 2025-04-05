<?php
require_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $working_hours = isset($_POST['working_hours']) ? (int)$_POST['working_hours'] : 0;

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, email, role, phone, password, working_hours) VALUES (:username, :email, :role, :phone, :password, :working_hours)");
        $stmt->execute([
            ':username' => $name,
            ':email' => $email,
            ':role' => $role,
            ':phone' => $phone,
            ':password' => $password,
            ':working_hours' => $working_hours
        ]);
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}
?>
