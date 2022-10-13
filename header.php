<h3>NASLOV</h3>
<div class="row">
    <div clas="col-md-6">
        <div class="row" style="margin-left: 0px">
            <div class="col-sm-4">
                <a href="?route=home" >Doma</a>
            </div> 
            <?php
            if(empty($_SESSION['logged_in'])){ ?>
            <div class="col-sm-4">
                <a href="?route=login">Login</a>
            </div>
            <?php } ?>  
            <div class="col-sm-4">
                <a href="?route=register">Register page</a>
            </div>
        </div>
    </div>


    <?php
        if(!empty($_SESSION['logged_in'])) { ?>
            <form method="POST">
                <button name='logout' value=1>Log Out
                    <a href="?route=home"></a>
                </button>
            </form>
        <?php } ?>
</div>