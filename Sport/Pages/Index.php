<?php
/**
 * Created by PhpStorm.
 * User: 1034580
 * Date: 07.12.2018
 * Time: 13:32
 */
session_start();
function getotherInfo()
{
    $Name = "null";
    if (empty($_POST["Name"])) {
        $Name = "null";
        //echo "<br>your Filename: ".$Name;
    } else {
        $Name = test_input($_POST["Name"]);
        //if(!($Name = "null")){
        echo "<br>Name: " . $Name;//}
    }

    $Sport = "null";
    if (isset($_POST['Sport'])) {
        $Sport = $_POST['Sport'];
        //if(!($Sport = "null")){
        echo "<br>you have selected Sport: " . $Sport . "<br>";//}
    }


    $Abteil = "null";
    if (isset($_POST['Abteilung'])) {
        $Abteil = $_POST['Abteilung'];
        //if(!($Abteil = "null")){
        echo "you have selected Abteilung: " . $Abteil . "<br>";//}

    }

    $Klasse = "null";
    if (isset($_POST['Klasse'])) {
        $Klasse = $_POST['Klasse'];
        //if(!($Klasse = "null")){
        echo "you have selected Klasse: " . $Klasse . "<br>";//}
    }

    $Jahr = "null";
    if (isset($_POST['Jahr'])) {
        $Jahr = $_POST['Jahr'];
        //if(!($Jahr = "null")){
        echo "you have selected Jahr: " . $Jahr . "<br>";//}
    }
    $Semester = "null";
    if (isset($_POST['Semester'])) {
        $Semester = $_POST['Semester'];
        //if(!($Semester = "null")){
        echo "you have selected Semester: " . $Semester . "<br>";//}
    }
    SearchDb($Name,$Sport,$Abteil,$Klasse,$Jahr,$Semester);
    //factors($Name, $Sport, $Abteil, $Klasse, $Jahr, $Semester);
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sport Video Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Eigene Stylesheet -->
    <link rel="Stylesheet" href="Stylesheet2.css">
    <link href="https://vjs.zencdn.net/7.3.0/video-js.css" rel="stylesheet">
</head>
<body>
<h3>Sport Video Portal</h3>
<nav>
    <ul class="nav">
        <li class="nav-item"><a href="Index.php" class="nav-link active">Algemein</a></li>
        <li class="nav-item"><a href="Hochladen.php" class="nav-link active">Hochladen</a></li>
        <li class="nav-item"><a href="Loeschen.php" class="nav-link active">Löschen</a></li>
        <li class="nav-item"><a href="Suchen.php" class="nav-link active">Suchen</a></li>
        <li class="nav-item"><a href="Login.php" class="nav-link active">Login</a></li>
    </ul>
</nav>
<div id="Videos">
    <h2>Videos</h2>
    <div id = "testvideo">
<!--
    <video id="my-video" class="video-js" controls preload="auto" width="320" height="240"
           poster="Videos/Spider-Man_Homecoming_poster_2.jpg" data-setup="{}">
        <source src="Videos/Chestbounce.mov" type='video/mov'>
        <source src="Videos/Chestbounce.webm" type='video/webm'>
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
    </video>
-->
    <video id="my_video_1" class="video-js vjs-default-skin" width="640px" height="267px" controls="" preload="none" poster="Videos/Spider-Man_Homecoming_poster_2.jpg" data-setup="{ &quot;aspectRatio&quot;:&quot;640:267&quot;, &quot;playbackRates&quot;: [0.25, 0.5, 1] }">
       <!-- <source src="Videos/Julius%20Yego%20winner%2092.72m%20WL%20Mens%20Javelin%20Final%20%20IAAF%20World%20Athletics%20Championships%20BEIJING%202015.mp4" type="video/mp4"> -->
        <source src="Videos/Julius%20Yego%20winner%2092.72m%20WL%20Mens%20Javelin%20Final%20%20IAAF%20World%20Athletics%20Championships%20BEIJING%202015.webm" type="video/webm">
    </video>
    <!-- <div style="text-align:center">
            <button onclick="playPause()">Play/Pause</button>
            <button onclick="makeBig()">Big</button>
            <button onclick="makeSmall()">Small</button>
            <button onclick="makeNormal()">Normal</button>
            <br><br>
            <video id="video1" width="420">
                <source src="mov_bbb.mp4" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                Your browser does not support HTML5 video.
            </video>
        </div>

        <script>
            var myVideo = document.getElementById("video1");

            function playPause() {
                if (myVideo.paused)
                    myVideo.play();
                else
                    myVideo.pause();
            }

            function makeBig() {
                myVideo.width = 560;
            }

            function makeSmall() {
                myVideo.width = 320;
            }

            function makeNormal() {
                myVideo.width = 420;
            }
        </script>

        <p>Video courtesy of <a href="https://www.bigbuckbunny.org/" target="_blank">Big Buck Bunny</a>.</p>
        -->




</div>


<script src="https://vjs.zencdn.net/7.3.0/video.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
