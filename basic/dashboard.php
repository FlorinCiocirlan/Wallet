<?php
    require_once '../Core/baseController.php';
    class DashboardController extends baseController {

        public function handleGet(): string
        {
            $wallets = getUserWallets($this->getUser()->getID());
            $this->templateData['wallets']=$wallets;
            return 'dashboard';
        }

        public function handlePost(): string
        {


        if($_REQUEST['action'] == 'getWalletDetails'){
            $walletID = $_REQUEST['walletID'];
            $wallet = getWalletById($walletID);
            error_reporting(0);
            echo json_encode($wallet);
        }
        }
    }

    baseController::run();
