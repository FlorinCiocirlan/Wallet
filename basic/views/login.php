<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js"></script>
</head>
<body>
<div class="container">
<form class="w-25 mr-auto ml-auto" action="../basic/login.php" method="post">
    <div class="form-group">
    <label for="email">Email Adress</label>
    <input class="form-control" type="text" name="email" id="email">
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input class="form-control" type="password" name="password" id="password">
    </div>
    <button class="btn btn-sm btn-success" type="submit">Sign In</button>
</form>
    <?php
    if(isset($feedBack)){
        echo '<div class="w-25 mr-auto ml-auto '.$color.'">'.$feedBack.'</div>';
    }
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
