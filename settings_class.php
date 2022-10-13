<?php
class Settings {
    function __constuct(){

    }
    public function check_username($username){
        global $connection;
        $request = "SELECT * FROM User WHERE `Username`= '".$username."'";
        $QueryObj = $connection->query($request, MYSQLI_USE_RESULT);
        $return_arr = array();
        while($row = $QueryObj->fetch_assoc()){
            $return_arr[$row['idUser']] = $row;
        } 
        return $return_arr;
    }
    public function check_email($email){
        global $connection;
        $request = "SELECT * FROM User WHERE `email`= '".$email."'";
        $QueryObj = $connection->query($request, MYSQLI_USE_RESULT);
        $return_arr = array();
        while($row = $QueryObj->fetch_assoc()){
            $return_arr[$row['idUser']] = $row;
        } 
        return $return_arr;
    }
    public function create_new_user($username, $password){
        global $connection;
        $request = "Update `password`, `Username` FROM User WHERE `Username`='".$username."'";
        $QueryObj = $connection->query($request, MYSQLI_USE_RESULT);
        $user = $QueryObj->fetch_assoc();
        
    }

}

?>