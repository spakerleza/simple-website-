<?php 

$message = "";

if(isset($_GET["success"])) {
    $message = $_GET["success"];
}



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <main>
            <fieldset>
                <div><?=$message ?></div>
                <form action="script/loginprocessor.php" method="post">
                    <div>
                        <label>Username or email</label>
                        <input type="text" name="username" placeholder="Enter your username">
                    </div>
                    
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password">
                    </div>
                    <div>
                        Don't have an account? <a href="register.php">Register</a>
                    </div>
                    <button>Submit</button>
                </form>
            </fieldset>
        </main>
    </body>
</html>