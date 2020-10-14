<?php
    session_start();

    function getConnection():PDO{
        $db_username = 'florin';
        $db_password='123456';
        $db_name='walletApp';
        $db_server="localhost:3306";

        return new PDO("mysql:host=$db_server;dbname=$db_name",$db_username,$db_password);
    }


    function getUserByEmail(string $email ){
        $con = getConnection();
        $query = "SELECT * FROM user WHERE email=:email";
        $stmt = $con->prepare($query);
        $stmt->execute([':email'=>$email]);
        return $stmt->fetch();
    }

    function insertUser(string $email, string $name, string $password){
        if(getUserByEmail($email)){
            return false;
        }

        $con = getConnection();
        $query = "INSERT INTO user(email, name, password) VALUES(:email, :name, :password)";
        $stmt= $con->prepare($query);
        $stmt->execute([':email'=>$email,':name'=>$name,':password'=>$password]);

    }
