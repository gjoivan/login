
<h1>Regeneracija</h1>


    <form action="" method="POST">
        <button type="submit" class="btn btn-primary" name="button1" value="input1">START</button>
        <button type="submit" class="btn btn-primary" name="button2" value="input2">STOP</button>
    </form>
<?php

    if(!isset($_POST['button1']) && !isset($_POST['button2'])) {
        echo "Regeneracijata ne e zapocnata";
    }
    elseif(isset($_POST['button1']) && !isset($_POST['button2'])) {
         echo "Regeneracijata e zapocnata";
    }

    elseif(isset($_POST['button2']) && !isset($_POST['button1'])) { 
       echo "Regeneracijata e stopirana";
    }
?>
