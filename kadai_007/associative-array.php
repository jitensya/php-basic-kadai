<!Doctype html>
<html lang "ja">

    <head>
        <meta charaset="UTF-8">
        <title>PHP基礎編</title>
    </head>

<body>
    <!-- <p>この文章はHTMLで出力しています。</p> -->
    <p>
        <?php
        $array = ['name'=> 'onion' , 'price'=>200,'weight'=>160];
        print_r($array);
        //echo 'この文章はPHPで出力しています。';
        ?>
    </p>
</body>

</html>