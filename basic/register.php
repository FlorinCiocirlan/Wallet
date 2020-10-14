<?php
    require_once '../Core/baseController.php';
    require_once '../utils/utils.php';
    class RegisterController extends baseController
    {
        public function handleGet(): string
        {
            return 'register';
        }

        public function handlePost(): string
        {
           $email = $_POST['email'];
           $name = $_POST['name'];
           $password = md5($_POST['password']);

           if(!insertUser($email,$name,$password)){
               $this->templateData['feedBack']= 'You already have an account';
               $this->templateData['color'] = 'text-danger';
           } else {
               $this->templateData['feedBack'] = 'You have successfully registered';
               $this->templateData['color'] = 'text-success';
           }

           return 'login';
        }

    }

    baseController::run();