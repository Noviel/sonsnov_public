<?php

session_start();

require_once("connectmysql.php");

$playerName = $_POST["player_name"];
$teamName = $_POST["team_name"];

$query = mysql_query("SELECT * FROM users WHERE username='$playerName'") or die("UNRI SDOHNi");

$numRows = mysql_num_rows($query);

if ($numRows !== 0) {
    echo "already created!";
} else {
    if ($query = mysql_query("INSERT INTO users (username, password, register_date, team, email) VALUES ('$playerName', '1111', '12.12.12', 'red','mail@mail.com' )")){
        echo "USER CREATED!";
    }
    else {
        echo "SOME ERROR" . mysql_error();
    }
}

$fileHandle = fopen("data/teams.txt","a+");
fwrite($fileHandle, "team: " . $teamName . " player: " . $playerName . "\r\n");
fclose($fileHandle);
?>

<!DOCTYPE html>
<html>
<head>
    <meta content=\"text/html">
    <title>Void Heroes</title>
</head>

<body>

<img src="../res/img/images.jpg"><br>


</body>
</html>

