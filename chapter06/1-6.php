<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-6</title>
</head>
<body>
    <?php
        // if 文
        // if (bool型(TRUE)の値) {
        //     命令
        // }
        if (TRUE) {
            print 'TRUEです';
            print '<br/>';
        }
        print 'if 文の下です';
        print '<br/>';

        // 比較演算
        var_dump(1 < 2); // TRUE
        print '<br/>';
        var_dump(2 < 1); // FALSE
        print '<br/>';
        var_dump(1 <= 1); // TRUE
        print '<br/>';
        var_dump(1 != 2); // TRUE
        print '<br/>';
        // イコール3つ（===）で厳密な比較になる（これを使う!!）
        var_dump(1 === 1); // TRUE
        print '<br/>';

        $x = 1;
        $y = 2;
        var_dump($x < $y); // TRUE
        print '<br/>';
    ?>
</body>
</html>