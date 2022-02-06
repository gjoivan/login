<?php
session_start();
if(!empty($_POST['logout'])){
    session_destroy();
    header("Locatiom: ?route=home");
    $y = "You are logged out";
}
$route = !empty($_GET['route']) ? $_GET['route'] : 'home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script href="jquery-3.6.0.js"></script>
</head>
<body>
    <?php
    include("./header.php");

    if($route == 'login')
    {
        include("login.php");
    }
    elseif($route == 'register')
    {
        include("register.php");
    }
    elseif($route == 'regeneracija')
    {
        include("regeneracija.php");
    }
    else
    {
        include("home.php");
    }

   ?>
   <div class="row">
        <div class="col-1">
        <label for="uname"><b>Name:</b></label>
        </div>
        <div>
        <input type="text" id="value" placeholder="Enter name">
        <div class="col-1">
    </div>
    <p id='test'></p>
    <?php //var_dump($name); ?>
<script>
    $(document).ready(function() {
    });

    $("#value").keyup(function() {
        //var name = $("input").val();
        $.post("register.php", {suggestion: $(this).val()}, 
        function(data, status) {
            $("#test").html(data);
        });
    })

</script>
</body>
</html> 