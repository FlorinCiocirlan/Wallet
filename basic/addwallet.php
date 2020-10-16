<?php
    require_once '../Core/baseController.php';
    class AddwalletController extends baseController{

        public function handleGet(): string
        {
            return 'addwallet';
        }

        public function handlePost(): string
        {
            $walletName = $_POST['name'];
            $walletCurrency = $_POST['currency'];
            $userID = $this->getUser()->getID();
            addWallet($walletName,$walletCurrency,$userID);
            header("Location: ../basic/dashboard.php");
        }
    }

    baseController::run();