<?php

    $id         = $_GET["id"];
    $register   = $_GET["register"];
    $magic      = $_GET["magic"];
    $generatepm = $_GET["dogenerate-pm"];
    $poker      = $_GET["poker"];

    if (isset($login)){

}
?>


<!DOCTYPE html>
<html>
<head>
    <meta content=\"text/html">
    <title>son.snov........)))</title>

    <link rel="stylesheet" type="text/css" href="style/main.css">
    <script src="main.js"></script>
    <script src="src/js/lib/formwork.js"></script>
</head>

<body>

<div class="red big-label">RED BIG LABEL</div>

    <section id="main-menu">
        <a href="index.php?login" class="main-label" id="login-label">Login</a>
        <a href="index.php?register" class="main-label" id="register-label">Register</a>
        <a href="index.php?logout" class="main-label" id="logout-label">Logout</a>
        <a href="index.php?magic" class="main-label" id="magic-label">Magic</a>
        <a href="poker/index.php" class="main-label" id="poker-label">Poker</a>
    </section>
    
    <?php
    if (isset($register)){ ?>

    <section>
        <form id="login-panel" action="?doregister" method="post">
            <script> var i = createInputForParentID("login-panel","Username","text","user-name","user-name", "input-def");</script>
            <script> createInputForParentID("login-panel","Password","password","password","password", "input-def");</script>
            <script> createInputForParentID("login-panel","Email","text","email","email", "input-def");</script>

            <script> createInputButton("login-panel","do-register-button","do-register-button","link-button","OK!");</script>
        </form>
    </section>

    <?php
    }
    elseif (isset($magic)){
        echo   "<iframe src='http://blog.kalarupa.com/pmc.lib?font=D4D4D4&amp;bg=2F2F2F' width='600' height='150' scrolling='no' frameborder='0'></iframe>";

        require_once("exp/causalics.php");

        $pm->setup(7,7);
        $myseq = $pm->addEmptySequence();

        echo "Sequence:";
        echo "<br>";

        for ($i = 0; $i < 16; $i++) {
            $myseq->addRandomEvent();
        }

        $myseq->get();

        $comseq = $pm->compressSequence($myseq);
        $comseq->get();
        $myseq->get();
    }
    else if (isset($poker)) { ?>
    
    <iframe src="poker/index.php" width="100%" height="420" frameborder="0"></iframe>

    <?php 
    }

    require_once("src/php/lib/connectmysql.php");
    if ($id == "login"){
      echo "<div>Login screen</div>";
    }
    elseif ($id == "register"){
        echo "<div>Register screen</div>";
    }
    else{
        echo "<div>Game screen</div>";
    }
    ?>

</body>
</html>
