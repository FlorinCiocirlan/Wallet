<?php
    require_once '../Core/baseController.php';
    class LogoutController extends baseController {

        public function handleGet(): string
        {
            $this->getUser()->logout();
        }

        public function handlePost(): string
        {
            // TODO: Implement handlePost() method.
        }
    }

    baseController::run();