<?php
    require "script/logincheck.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
    </head>
    <body>
        <main>
            <div>
                <div><a href="script/logout.php">Logout</a></div>
                <h3>Hi, <?=$username ?></h3>
                <div>Your email is: <?=$email ?></div>
                <div>Your registered <span id="time"></span></div>
            </div>
        </main>
        <div id="regtime" data-regtime="<?=$regAt?>"></div>

        <script src= "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js" ></script>
        <script>
            let getTime = document.querySelector("#regtime");
            getTime = getTime.dataset.regtime;
            const humanTime = moment(getTime).fromNow();

            document.querySelector("#time").innerHTML = humanTime;
        </script>

    </body>
</html>