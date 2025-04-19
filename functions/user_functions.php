<?php
    require '../config.php';
    header('Content-Type: application/json');

    if (isset($_GET['action']) && $_GET['action'] == 'getAllUsers') {
        $users = getAllUsers($conn);
    
        $userRows = '';
        foreach ($users as $user) {
            $userRows .= '<tr>';
            $userRows .= '<td>' . htmlspecialchars($user['user_number']) . '</td>';
            $userRows .= '<td><img src="../../student_management/uploads/users/' . htmlspecialchars($user['user_image'] ?? 'default_user.jpg') . '" height="75px" alt=""></td>';
            $userRows .= '<td>' . htmlspecialchars($user['first_name'] . ' ' . $user['middle_name'] . ' ' . $user['last_name']) . '</td>';
            $userRows .= '<td>
            <button class="btn btn-primary view_user_btn" id="view_user_btn" data-bs-toggle="modal" data-bs-target="#viewUserModal" data-id="' . htmlspecialchars($user['id']) . '">View</button>
            <button class="btn btn-success edit_user_btn" id="edit_user_btn" data-bs-toggle="modal" data-bs-target="#editUserModal" data-id="' . htmlspecialchars($user['id']) . '">Edit</button>
            <button class="btn btn-danger" id="delete_user_btn" data-id="' . htmlspecialchars($user['id']) . '">Delete</button></td>';
            $userRows .= '</tr>';
        }
        echo json_encode(['success' => true, 'data' => $userRows]);
        exit;
    }
    else if (isset($_GET['action']) && $_GET['action'] == 'getUserById' && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            echo json_encode(['success' => true, 'data' => $user]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Query error']);
        }
        exit;
    }
    function getAllUsers($conn) {
        $stmt = $conn->prepare("SELECT * FROM users");
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $users = $result->fetch_all(MYSQLI_ASSOC);
            return $users;
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Database query failed: ' . $stmt->error
            ]);
            exit; 
        }
    }
    
    function getUserById($conn, $id) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Database query failed: ' . $stmt->error
            ]);
            exit; 
        }
    }
    
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
        $user_id = $_POST['id'];
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
        address=?, sex=?, birthdate=?, user_number=?, email=?, phone=?, password=? WHERE id=?");
        $stmt->bind_param("sssssssssssi", $user_image, $first_name, $middle_name, $last_name, $address, $sex, $birthdate, $user_number, $email, $phone, $password, $user_id);    

        $stmt->execute();
        $stmt->close();
    }

    function deleteUser($conn) {
        $user_id = $_POST['user_id'];

        $stmt = $conn->prepare("DELETE FROM users WHERE user_id=?");
        $stmt->bind_param("i", $user_id);

        $stmt->execute();
        $stmt->close();
    }
?>