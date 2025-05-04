<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php

       $score1 = 80;
       $score2 = 60;
       $score3 = 55;
       $score4 = 40;
       $score5 = 100;
       $score6 = 25;
       $score7 = 80;
       $score8 = 95;
       $score9 = 30;
       $score10 = 60;

       $result1 = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
       $result2 = $result1 / 10;
       echo "heikin: , $result2 " ;

      
       //$numbers = [80,60,55,40,100,25,80,95,30,60];
       //$sum = array_sum($numbers);
       //$average = $sum / count($numbers); 
       //echo "平均: ,$average";
       ?>
   </p>
</body>

</html>