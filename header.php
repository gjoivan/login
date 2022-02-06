<h3>NASLOV</h3>
<div class="login-bar">
    <ul>
        <li>
            <a href="?route=home" >Doma</a>  
        </li>
        <?php
        if(empty($_SESSION['logged_in'])){ ?>
            <li>
                <a href="?route=login">Login</a>
            </li>
        <?php } ?>    
        
        
        <li>
            <a href="?route=register">Register page</a>
        </li>        
    </ul>

    <?php
        if(!empty($_SESSION['logged_in'])) { ?>
            <form method="POST">
                <button name='logout' value=1>Log Out
                    <a href="?route=home"></a>
                </button>
            </form>
        <?php } ?>
</div>