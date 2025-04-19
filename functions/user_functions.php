<?php
    require '../config.php';
    header('Content-Type: application/json');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
        try {
            if ($_POST['action'] == 'createUser') {
                createUser($conn);
            } else if ($_POST['action'] == 'updateUser') {
                updateUser($conn);
            } else if ($_POST['action'] == 'deleteUser') {
                deleteUser($conn);
            } else {
                echo json_encode(['success' => false, 'message' => 'Unknown action']);
                return;
            }

            echo json_encode(['success' => true]);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => $e->getMessage()]);
        }

    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request method or no action specified']);
    }
    function createUser($conn) {
        $user_image = $_POST['user_image'] ?? 'default_user.jpg';
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $sex = $_POST['sex'];
        $birthdate = $_POST['birthdate'];
        $user_number = $_POST['user_number'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (user_image, first_name, middle_name, last_name, address, sex, birthdate, user_number, email, phone, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssss", $user_image, $first_name, $middle_name, $last_name, $address, $sex, $birthdate, $user_number, $email, $phone, $password);

        $stmt->execute();
        $stmt->close();
    }

    function updateUser($conn) {
        $user_id = $_POST['user_id'];
        $user_image = $_POST['user_image'] ?? 'default_user.jpg';
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $sex = $_POST['sex'];
        $birthdate = $_POST['birthdate'];
        $user_number = $_POST['user_number'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET user_image=?, first_name=?, middle_name=?, last_name=?,
        address=?, sex=?, birthdate=?, user_number=?, email=?, phone=?, password=? WHERE user_id=?");
        $stmt->bind_param("sssssssssssi", $user_image, $first_name, $middle_name, $last_name, $address, $sex, $birthdate, $user_number, $email, $phone, $password, $user_id);    
        $stmt->execute();
        $stmt->close();
    }
?>