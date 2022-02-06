<?php
$existingNames = array("Sponge Bob", "Patrick", "Squidwork", "Sandy");
if(!empty($_POST['suggestion'])) {
    $name = $_POST['suggestion'];
   
        foreach($existingNames as $existingName) {
            if(strpos($existingName, $name) !== false){
                echo $existingName;
                echo "</br>";
            }
        }
    
}

?>