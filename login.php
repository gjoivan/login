<?php
require("dbconnect.php");
if(!empty($_SESSION['logged_in'])) {
    header('Location: ./?route=home');
    return;
}

if(!empty($_POST["uname"]) && !empty($_POST["psw"])) {
    $username = $_POST["uname"];
    $password = $_POST["psw"];
    $request = "SELECT `password`, `Username` FROM User WHERE `Username`='".$username."'";
    $QueryObj = $connection->query($request, MYSQLI_USE_RESULT);
    $user = $QueryObj->fetch_assoc();
    if(!empty($user["Username"]) && $user['password'] == $password ){
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: ./?route=home');
        return;
    }
    elseif(isset($username) && isset($password)){
            $message = "Username and Password is required";
        }
    elseif(isset($username) || isset($password)){
            if(isset($username)){$message = "Username is required"; }
            if(isset($password)){$message = "Password is required"; }
    }
    else{
        $_SESSION['logged_in'] = false; 
        $error = 'Usenrame/Password error';
        //header('Location: ./?route=login');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>
<body>

<h3>Login Page</h3>
<form class="login-box" method="POST">
    <div>
        <label>
            <p>Username:</p>
        </label>
        <input type="text" name="uname" placeholeder="Type Username..">
    </div>
    <div>
        <label>
            <p>Password:</p>
        </label>
        <input type="password" name="psw" placeholeder="Type Password..">
    </div>
    <div>
        <button>Submit</button>
    </div>
    <?php if(!empty($message)) {echo $message; }?> 
    <?php if(!empty($error)) {echo $error; }?>


</form>
</body>
</html>