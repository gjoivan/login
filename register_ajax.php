<?php

require_once('dbconnect.php');
$event = isset($_POST['event']) ? $_POST['event'] : null; 
if($event == 'register_new_user'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    // var_dump($username, $password, $email, $name); return;
    require_once('settings_class.php');
    $settings_obj = new Settings();
    $email_check = $settings_obj->check_email($email);
    if(!empty($email_check)){
        echo '<strong>Email allready used. Forgot your username or password?</strong>';
        return;
    }
    $user_check = $settings_obj->check_username($username);
    if(!empty($user_check)){
        echo '<strong>Username allready exists. Pease try another one!</strong>';
        return;
    }
    // $new_user = $settings_obj->create_new_user($username, $password);


    // $responce = $settings_obj->create_new_user($username, $password);

}

?>