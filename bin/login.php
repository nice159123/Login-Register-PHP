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
                while($user = $result->fetch_object()){
                    echo $user->username;
                }
                
            }else{
                echo 'no user';
            }
        } catch(Exception $e) {
            $user->close();
            $conn->close();
            die('Error: ' . $e->getMessage());
        }
        $selectUser->close();
        $conn->close();   
    }