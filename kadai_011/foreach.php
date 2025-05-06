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
        $yasai_data = ['名前' => '玉ねぎ' , '値段' => 200, '産地' => '北海道'];
        foreach ($yasai_data as $key => $value) {
            echo "{$key}:{$value}<br>";
        }
        //echo 'この文章はPHPで出力しています。';
        ?>
    </p>
</body>

</html>