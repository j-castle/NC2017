<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="WebSite.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#flip").click(function(){
                    $("#video").slideToggle("slow");
                });
            });
            
            $(document).ready(function(){
                $("#tog").click(function(){
                    $("#list").slideToggle("slow");
                });
            });
        </script>
        <title>Net-Centric Assignments</title>
        <h1>Net-Centric Assignments</h1>
        <h2>Jaden Castle</h2>
    </head>
    <body>
        <div id="tog">Toggle List</div>
        <p>
            <ul id="list" style="list-style-type:disc">
                <li><a href="http://nccastle.onucs.org/JavaScript_Play/JavaScript_Play.php" target="_blank">Javascript Play</a></li> 
                <li><a href="http://nccastle.onucs.org//Calendar/Cal.php" target="_blank">PHP 1</a></li> 
                <li><a href="http://nccastle.onucs.org/nintendoAd/index.php" target="_blank">Mimic a Print Advertisement</a></li> 
                <li><a href="http://nccastle.onucs.org/PlayWithCSS/index.php" target="_blank">Play with CSS</a></li> 
                <li><a href="http://nccastle.onucs.org/HelloWorldRevamp/index.php" target="_blank">Innovative Hello World</a> 
                <li><a href="http://nccastle.onucs.org/HelloWorld/index.php" target="_blank">Hello World</a></li> 
            </ul> 
        </p>
        
        <div id="flip">Toggle Videos</div>
        
        <p id="video">
            <iframe width="420" height="315"
            src="https://www.youtube.com/embed/bWPMSSsVdPk">
            </iframe>
            <iframe width="420" height="315"
            src="https://www.youtube.com/embed/ZdP0KM49IVk">
            </iframe>
            <iframe width="420" height="315"
            src="https://www.youtube.com/embed/0afZj1G0BIE">
            </iframe>
        </p>
        
        
    </body>
</html>