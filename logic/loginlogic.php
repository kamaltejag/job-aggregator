<?php

    if(isset($_REQUEST['login'])){
        $result_users = retrieve_users($conn, $email);

        foreach($result_users as $r_users){
            $hashed_password = $r_users['password'];
            if(password_verify($password, $hashed_password)){
                echo 'true';
                $_SESSION['username'] = $r_users['username'];
                
                header("Location: index.php");
                
            }
        

        }
    }
    



?>