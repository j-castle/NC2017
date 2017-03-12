<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function dayWeek(){
    for($i=1; $i<=7;$i++){
        $jday=gregoriantojd(5,$i,2016);
        echo "<td class='dayWeek'>". jddayofweek($jday,2)."</td>"; 
    }
}

function monthYear($month,$year){
    $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
    $jmonth=gregoriantojd($month,1,$year);
    echo "<div>".jdmonthname($jmonth,1)." ". $year. "</div>";
    return $days;
}

function spacing($fd){
    for ($i = 1; $i <= $fd; $i++) {
        echo "<td>". " " ."</td>";
    }
}

function calendarPage($month,$year,$fd){

        $days = monthYear($month,$year);
        echo "<table>";  
            echo "<tr>";
            dayWeek();
            echo "</tr>";
            echo "<tr>";
            spacing($fd);

            for ($i = 1; $i <= $days; $i++) {
              echo "<td>". $i ."</td>";
              $fd++;
              if ($fd % 7 == 0) {
                echo "</tr>";
                echo "<tr>";
              }
            }
            echo "</tr>";
        echo "</table>";

}

function firstDay($month,$year){
    $jd = gregoriantojd($month, 1, $year);
    $firstDay = jddayofweek($jd);
    return $firstDay;
}

function fullYear($year){
    for ($t = 1; $t <= 12; $t++){
        calendarPage($t,$year,firstDay($t,$year));
    }
}

?>

<html>
    <head>
        <link rel='stylesheet' type='text/css' href='Calendar.css'> 
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo"<p>". "Today is " . date("m/d/Y") . "</p>";
        fullYear(date("Y"));
        ?>
    </body>
</html>