<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-5</title>
</head>
<body>
    <?php
        // NULL 型
        // NULL はプログラムで「無」を表現するもの
        $x = NULL;

        // var_dump は詳細な情報を HTML に出力する構文（デバッグ時に使う）
        // 変数が何につけられているか調査するために使う
        var_dump(1);
        print '<br/>';
        var_dump('1');
        print '<br/>';

        $z = TRUE;
        var_dump($z);
        print '<br/>';

        // キャスト（型変換）演算
        $y = (string) 10000;
        var_dump($y);
        print '<br/>';

        $a = (int) '10';
        var_dump($a);

        // 暗黙の型変換を行う言語 →「弱い型付けの言語」と呼ばれる
        // 暗黙の型変換を行わない言語 →「強い型付けの言語」と呼ばれる
        // 正しい型でプログラムを書こう!!
    ?>
</body>
</html>