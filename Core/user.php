<?php

require_once "../utils/utils.php";


class User{
    private $id;
    private $name;
    private $isAdmin;


    public function __construct(){
        if (isset($_SESSION['userID'])) {
            $this->id = $_SESSION['userID'];
            $this->name = $_SESSION['username'];
        }
    }

    public function isLoggedIn(){

        return (isset($this->id));

    }

    public function checkIfLoggedIn():void{

        if (!isset($this->id))
            header("Location: ../shop/login.php");
            exit();
    }

    public function getID():int{
        return $this->id;
    }

    public function getName():string{
        return $this->name;
    }

    public function getAllUserInfo(){
        if ($this->isLoggedIn()){
            $connection=getConnection();
            $query="SELECT * FROM user WHERE id= :id";
            $statement=$connection->prepare($query);
            $data=["id"=>$this->id];
            $statement->execute($data);
            $resultset=$statement->fetch();
            return $resultset;
        }else {
            header("Location: ../shop/login.php");
        }

    }

    public function login(string $email, string $password):void{
        $connection=getConnection();
        $query="SELECT * FROM user WHERE email=:email AND password=:password AND deleted=0";
        $statement=$connection->prepare($query);
        $data=["email"=>$email, "password"=>md5($password)];
        $statement->execute($data);
        $resultset=$statement->fetch();

        if ($resultset){
            $this->id=$resultset["id"];
            $_SESSION['userID']=$this->id;
            $this->name=$resultset["name"];
            $_SESSION['username']=$this->name;
            header("Location: ../basic/dashboard.php");
        } else
            header("Location: ../basic/login.php");


    }

    public function logout():void{
        if (isset($this->id)){
            unset($this->id);
            unset($this->name);


            unset($_SESSION["userID"]);
            unset($_SESSION["username"]);


        }

        header("Location: ../basic/login.php");
        exit();

    }





}






?>









