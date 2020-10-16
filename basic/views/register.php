<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <title>Register</title>
</head>
<body>
<div class="container">
<form class="w-25 ml-auto mr-auto" action="../basic/register.php" method="post">
    <div class="form-group">
    <label for="email">Email Adress</label>
    <input class="form-control" type="text" name="email" id="email" required>
    </div>
    <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" id="name" required>
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input class="form-control" type="password" name="password" id="password" required>
    </div>
    <div class="form-group">
    <label for="confirmPassword">Confirmation Password</label>
    <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" required>
    </div>
    <button class="btn btn-sm btn-success" type="submit">Sign Up</button>
</form>
</div>
</body>
</html>
