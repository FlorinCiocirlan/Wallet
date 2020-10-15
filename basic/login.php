<?php
    require_once '../Core/baseController.php';
    require_once '../utils/utils.php';
    class LoginController extends baseController {

        public function handleGet(): string
        {
            return 'login';
        }

        public function handlePost(): string
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

           $this->getUser()->login($email,$password);
        }
    }


    baseController::run();