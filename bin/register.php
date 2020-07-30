<?php
    $username = $_POST['username'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if (
        isset($username) &&
        isset($email) &&
        isset($password)
    ) {
        try {
            include_once 'connect.php';
            $insertUser = $conn->prepare('INSERT INTO users(username, email, password) VALUES (?, ?, ?)');
            $insertUser->bind_param("sss", $username, $email, password_hash($password, PASSWORD_BCRYPT));
            if($insertUser->execute()) {
                header('Location: ../index.php');
            } else {
                throw new Exception('เพิ่มผู้ใช้ไม่สำเร็จ!');
            }
        } catch (Exception $e) {
            $insertUser->close();
            $conn->close();
            die('Error: ' . $e->getMessage());
        }
        $insertUser->close();
        $conn->close();
    }