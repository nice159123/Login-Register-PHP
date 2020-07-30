<?php
    $getUsername = $_POST['username'] ?? null;
    $getPassword = $_POST['password'] ?? null;

    if (
        isset($getUsername) && 
        isset($getPassword)
        ) {
        try {
            include_once 'connect.php';
            $selectUser = $conn->prepare('SELECT * FROM users WHERE username = ?');
            $selectUser->bind_param("s", $getUsername);
            $selectUser->execute();
            $result = $selectUser->get_result();
            if($result->num_rows === 1) {
                $dataUser;
                while($user = $result->fetch_object()){
                    $dataUser =  [
                        'id' => $user->id,
                        'username' => $user->username,
                        'email' => $user->email,
                        'password' => $user->password
                    ];
                }
                if (password_verify($getPassword, $dataUser['password'])) {
                    session_start();
                    $_SESSION['id'] = $dataUser['id'];
                    $_SESSION['username'] = $dataUser['username'];
                    $_SESSION['email'] = $dataUser['email'];
                    $dataUser = null;
                    Header('Location: ../index.php');
                } else {
                    throw new Exception('รหัสผ่านไม่ถูกต้อง!');
                }
            }else{
                throw new Exception('ไม่พบผู้ใช้งาน');
            }
        } catch(Exception $e) {
            $user->close();
            $conn->close();
            die('Error: ' . $e->getMessage());
        }
        $selectUser->close();
        $conn->close();   
    }