<?php
// $existingNames = array("Sponge Bob", "Patrick", "Squidwork", "Sandy");
// if(!empty($_POST['suggestion'])) {
//     $name = $_POST['suggestion'];
   
//         foreach($existingNames as $existingName) {
//             if(strpos($existingName, $name) !== false){
//                 echo $existingName;
//                 echo "</br>";
//             }
//         }
    
// }
?>
<br></br>
<div class="row" style="margin-bottom: 10px">
    <div class="col-xs-2">
        <label for="uname"><b>Name:</b></label>
    </div>
    <input type="text" id="newname" placeholder="Enter name"> 
</div>
<div class="row" style="margin-bottom: 10px">
    <div class="col-xs-2">
        <label for="uname"><b>Email:</b></label>
    </div>
    <input type="text" id="newemail" placeholder="Enter emial">
</div>
<div class="row" style="margin-bottom: 10px">
    <div class="col-xs-2">
        <label for="uname"><b>User Name:</b></label>
    </div>
    <input type="text" id="newuser" placeholder="Enter username">
</div>
<div class="row" style="margin-bottom: 10px">
    <div class="col-xs-2">
        <label for="password"><b>Password:</b></label>
    </div>
    <input type="password" id="newpass" placeholder="Enter password">
</div>
<div class="row">
    <div class="col-sm-2">
        <a class="btn btn success" onclick="register_user()" style="display: block; width: 115px; height: 38px;background: #4E9CAF;">Register</a>
    </div>
</div>
<p id='responce'></p>
<script>
    function register_user(){
        var newuser = $('#newuser').val();
        if(!newuser){
            focus('#newuser');
            return;
        }
        var newpass = $('#newpass').val();
        if(!newpass){
            focus('#newpass');
            return;
        }
        var newname = $('#newname').val();
        if(!newpass){
            focus('#newname');
            return;
        }
        var newemail = $('#newemail').val();
        if(!newpass){
            focus('#newemail');
            return;
        }
console.log(newemail, newname);
        $.post("register_ajax.php",{event: 'register_new_user', name: newname, email: newemail, username: newuser, password: newpass},function(data, status){
            $('#responce').html(data);
        });
    }

</script>

<?php


?>