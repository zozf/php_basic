<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-3</title>
</head>
<body>
    <?php
        // データと型はセット（超重要）
        // 数値型は四則演算ができる
        print 10 * 4 - 1;
        print '<br/>';
        print 20 / 4;
        print '<br/>';
        // 剰余（余りの計算）
        print 7 % 2;
        print '<br/>';
        // 計算結果に変数をつけられる
        $x = 5 * 2 - 1;
        print $x;
        print '<br/>';
        // 変数に対していろんな計算ができる
        print $x * 2;
    ?>
</body>
</html>