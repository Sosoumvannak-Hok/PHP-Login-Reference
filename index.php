<?php
    include_once 'header.php';
?>
    
    <main>
        <div class="login_box">
            <form action="includes/login.inc.php" method="post">
                <div class="first_last">
                    <input type="text" name="u_first" placeholder="Firstname" required>
                    <input type="text" name="u_last" placeholder="Lastname" required>
                </div>
                <input type="password" name="u_id" placeholder="ID" required>
                <input class="login_button" type="submit" name="login" value="Login">
            </form>
        </div>
    </main>

<?php
    include_once 'footer.php';
?>
    
