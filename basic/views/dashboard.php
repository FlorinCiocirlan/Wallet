<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../static/js/walletPage.js" defer></script>
    <link rel="stylesheet" type="text/css" href="../../static/css/overall.css">

</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <a href="../basic/addWallet.php">
                <button class="btn btn-sm" id="buttonAdd">Create Wallet</button>
            </a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-4 ">
            <ul class="list-group">
                <?php
                    $currencies = ['USD'=>'$', 'EUR'=>'€' , 'GBP'=>'£', 'RON'=>'L'];
                    if (isset($wallets)) {
                        if($wallets != false){
                            foreach ($wallets as $wallet) {
                                echo '<li class="list-group-item" id="walletClickable">
                                        <div class="text-center d-flex justify-content-between">
                                            <p class="text-muted" data-wallet-id="'.$wallet['id'].'">
                                                '.$wallet['name'].'
                                            </p>
                                            <span class="text-muted">'.$currencies[$wallet['currency']].'</span>
                                        </div>
                                    </li>';
                            }
                        } else {
                            echo '<div class="d-flex justify-content-center text-black-50">No wallets to show</div>';
                        }
                    }
                ?>
            </ul>
        </div>
        <div class="col-8">
            <div class="border border-rounded bg-light mw-auto mh-auto" id="walletDetails" >

            </div>
        </div>
    </div>
</div>
</body>
</html>
