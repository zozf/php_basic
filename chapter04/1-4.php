<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-4</title>
</head>
<body>
    <?php
        // スカラ型（4種類）

        // ★文字列型
        print '文字列';
        print '<br/>';
        // 演算 = ある値から別の値を作り出すこと
        // 文字列の結合演算
        // ドット（.）が結合演算の演算子
        $w = 'こんにちは、' . '田中太郎です。';
        print $w;
        print '<br/>';

        // ★整数（int）型（前回勉強したので省略）

        // ★小数（float）型
        // プログラムで小数の計算をすると、小さい誤差が発生することがある
        $x = 0.1 + 0.4 + 0.3;
        print $x;
        print '<br/>';

        // ★論理値（bool）型
        // 論理値型は TRUE と FALSE の2つしかない
        $t = TRUE;
        $f = FALSE;
        // 論理和（少なくともどちらか一方が TRUE であれば TRUE 、両方 FALSE の場合は FALSE）
        $x = TRUE or FALSE;
        // 論理積（両方 TRUE の時に TRUE 、それ以外は全て FALSE）
        $x = TRUE and FALSE;
        // 否定演算（!）
        $x = ! TRUE;
    ?>
</body>
</html>