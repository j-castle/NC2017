<html>
    <head>
        <meta charset="UTF-8">
        <title>JavaScript Play</title>
    </head> 
   
    <script>
        function keyFunct() {
            alert("You pressed a key");
        }
        
        function copyFunct() {
            document.getElementById("demo").innerHTML = "You copied something!";
        }
        
        function Button(event) {
            alert("button: " + event.button);
        }
    </script>
    
    <body>
        <button type="button"
        onclick="document.getElementById('demo').innerHTML = Date()">
        Click to display Date and Time.</button>
        
        <input type="text" oncopy="copyFunct()" value="Copy this text">
        
        <p id="demo"></p>
        
        
       <p>Press a keyboard button in the text field.</p>

       <input type="text" onkeydown="keyFunct()">

       <div onmousedown="Button(event)">Click this text with one of your mouse buttons to return a number.
       <p>
        0 = The left mouse button<br>
        1 = The middle mouse button<br>
        2 = The right mouse button
        </p>
       </div>
    </body>
</html>