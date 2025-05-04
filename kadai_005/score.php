<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       //数値の配列
       $numbers = [80,60,55,40,100,25,80,95,30,60];
      
       //合計を計算
       $sum = array_sum($numbers);

       //平均を計算
       $average = $sum / count($numbers);

       //結果を表示
       //echo "合計: ,$sum" ;
       echo "平均: ,$average";
       ?>
   </p>
</body>

</html>