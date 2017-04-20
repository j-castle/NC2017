<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' type='text/css' href='Phone.css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        
        <script>
            function random(){
                switch($set) {
                    case 0 : $("#numField1").val($i); 
                        break;       
                    case 1 : $("#numField2").val($i);
                        break;
                    case 2 : $("#numField3").val($i);
                        break;       
                    case 3 : $("#numField4").val($i);
                        break;
                    case 4 : $("#numField5").val($i); 
                        break;       
                    case 5 : $("#numField6").val($i);
                        break;
                    case 6 : $("#numField7").val($i); 
                        break;       
                    case 7 : $("#numField8").val($i);
                        break;
                    case 8 : $("#numField9").val($i); 
                        break;       
                    case 9 : $("#numField10").val($i);
                        break;
                                     
                }
            }
            $i=0;
            $set=0;   
            
            $(document).ready(function(){
                $("#reset").click(function(){
                    $set=0;
                    $("#numField1").val(0);
                    $("#numField2").val(0);
                    $("#numField3").val(0);
                    $("#numField4").val(0);
                    $("#numField5").val(0);
                    $("#numField6").val(0);
                    $("#numField7").val(0);
                    $("#numField8").val(0);
                    $("#numField9").val(0);
                    $("#numField10").val(0);
                    $("#Textbox").val(0);
                    $("#numTotal").val(0);
                });
            });
            
            $(document).ready(function(){
                $("#set").click(function(){
                    $("#Textbox").val($("#numField1").val()+ $("#numField2").val()+$("#numField3").val()+ $("#numField4").val()+$("#numField5").val()+ $("#numField6").val()+$("#numField7").val()+ $("#numField8").val()+$("#numField9").val()+ $("#numField10").val());
                });
            });
            
            $(document).ready(function(){
                $("#numField1").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField1").val()<0){
                        $("#numField1").val(0);
                    }
                    while(($("#numField1").val()>=10)){
                        $temp= Math.floor(($("#numField1").val())/10);
                        $("#numField1").val($temp);
                    }
                        random();
                });
                
                $("#numField2").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField2").val()<0){
                        $("#numField2").val(0);
                    }
                    while(($("#numField2").val()>=10)){
                        $temp= Math.floor(($("#numField2").val())/10);
                        $("#numField2").val($temp);
                    }
                    random();
                });

                $("#numField3").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField3").val()<0){
                        $("#numField3").val(0);
                    }
                    while(($("#numField3").val()>=10)){
                        $temp= Math.floor(($("#numField3").val())/10);
                        $("#numField3").val($temp);
                    }
                    random();
                });
                
                $("#numField4").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField4").val()<0){
                        $("#numField4").val(0);
                    }
                    while(($("#numField4").val()>=10)){
                        $temp= Math.floor(($("#numField4").val())/10);
                        $("#numField4").val($temp);
                    }
                    random();
                });
                
                $("#numField5").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField5").val()<0){
                        $("#numField5").val(0);
                    }
                    while(($("#numField5").val()>=10)){
                        $temp= Math.floor(($("#numField5").val())/10);
                        $("#numField5").val($temp);
                    }
                    random();
                });
                
                $("#numField6").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField6").val()<0){
                        $("#numField6").val(0);
                    }
                    while(($("#numField6").val()>=10)){
                        $temp= Math.floor(($("#numField6").val())/10);
                        $("#numField6").val($temp);
                    }
                    random();
                });
                
                $("#numField7").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField7").val()<0){
                        $("#numField7").val(0);
                    }
                    while(($("#numField7").val()>=10)){
                        $temp= Math.floor(($("#numField7").val())/10);
                        $("#numField7").val($temp);
                    }
                    random();
                });
                
                $("#numField8").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField8").val()<0){
                        $("#numField8").val(0);
                    }
                    while(($("#numField8").val()>=10)){
                        $temp= Math.floor(($("#numField8").val())/10);
                        $("#numField8").val($temp);
                    }
                    random();
                });
       
                $("#numField9").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField9").val()<0){
                        $("#numField9").val(0);
                    }
                    while(($("#numField9").val()>=10)){
                        $temp=Math.floor(($("#numField9").val())/10);
                        $("#numField9").val($temp);
                    }
                    random();
                });
                
                $("#numField10").change(function(){
                    $set=Math.floor(Math.random()*10);
                    $i=Math.floor(Math.random()*10);
                    if($("#numField10").val()<0){
                        $("#numField10").val(0);
                    }
                    while(($("#numField10").val()>=10)){
                        $temp= Math.floor(($("#numField10").val())/10);
                        $("#numField10").val($temp);
                    }
                    random();  
                });
                    
                $("#Textbox").change(function(){
                    $("#Textbox").val(0);
                });
    
                $("#numTotal").change(function(){
                    $("#numTotal").val(0);
                });
            });
            
            //$(document).on( "mousemove", function(event) {
             //   $("#log").text("pageX: " + event.pageX + ", pageY: " + event.pageY);
           // });
            
            $count=0;
            
            $(document).ready(function(){
                $("#log").click(function(){
                    
                    $("#x").val(event.pageX);       
                    $("#y").val(event.pageY);
                    if(($("#numTotal").val())===0){
                        $("#numTotal").val($("#x").val()+ $("#y").val());
                    } 
                    else
                        $("#numTotal").val($("#numTotal").val() + $("#x").val() + $("#y").val());

                    if (($("#numTotal").val().length) > 10) {
                        while (($("#numTotal").val().length) > 10) {
                            $("#numTotal").val(Math.floor($("#numTotal").val() / 10));
                        }
                    }
                });
            });
         </script>  
         
         
        <title></title>
        
    </head>
    <body id="log1">
        <p id="stuff">
            <input type="number" id="numField1" value="0">
            <input type="number" id="numField2" value="0">
            <input type="number" id="numField3" value="0">
            <input type="number" id="numField4" value="0">
            <input type="number" id="numField5" value="0">
            <input type="number" id="numField6" value="0">
            <input type="number" id="numField7" value="0">
            <input type="number" id="numField8" value="0">
            <input type="number" id="numField9" value="0">
            <input type="number" id="numField10" value="0">
        </p>
        
        <div id="xandy">X and Y Number:</div>
        <input type="number" id="numTotal" value="0">
        <div id="help">Helper Phone Number:</div>
        <input type="number" id="Textbox" value="0">
        <div>Value of X:</div>
        <input type="number" id="x" value="0">
        <div>Value of Y:</div>
        <input type="number" id="y" value="0">

        <button id="set">Set</button>
        <button id="reset">Reset</button>
            
        <div id="log"></div>
    </body>
</html>
