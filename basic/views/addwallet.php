<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Wallet</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../../static/css/overall.css">
</head>
<body>
<div class="container">
    <form action="../basic/addwallet.php" method="post" class="w-25 mr-auto ml-auto p-2 mt-3">
        <div class="form-group">
            <label for="name">Wallet Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="select">Currency</label>
            <select name="currency" class="form-control form-control-sm" id="select">
                <option>EUR</option>
                <option>GBP</option>
                <option>RON</option>
                <option>USD</option>
            </select>
        </div>
        <button type="submit" class="btn btn-sm" id="buttonAdd">Create</button>
    </form>
</div>
</body>
</html>
