<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    // echo $email;
    // echo $password;

    $connection = mysqli_connect('localhost', 'root', '', 'my_database');

    if ($connection) {
        echo "Database is connected";
    } else {
        die("Connection fail");
    }
    $query = "INSERT INTO users(user_name,email,password) VALUES ('$username','$email','$password');";

    $query_result = mysqli_query($connection, $query);

    if (!$query_result) {
        die("Query failed" . mysqli_error('Error'));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="exampleInputUsername1">Username</label>
            <input type="text" class="form-control" name="username" id="exampleInputUsername1" aria-describedby="emailHelp" placeholder="Enter your name">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>

</html>