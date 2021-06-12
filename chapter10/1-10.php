<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-10</title>
</head>
<body>
    <?php
        // for 文について
        // 同じ処理を何回も繰り返したい時に使うのが for 文

        // for (初期化処理; 継続条件; 更新処理) {
        //     処理
        // }

        // 初期化処理：最初に値をセットするもの
        // 継続条件：処理を繰り返す条件（論理値型の値を入れる）
        // 継続条件が TRUE の間、ずっと繰り返す（FALSE になると処理が止まる）
        // 更新処理：繰り返し処理が1つ終わるごとに1つずつ呼ばれる

        // ++（加算子・インクリメント）は変数に代入されている値に1加えた値を変数に再代入する
        // $i++ と $i = $i + 1 は同じ意味になる
        // $i += 1（複合代入演算子）も $i++ と同じ意味

        // シンタックスシュガー：書き方が違うのに同じ意味になる関係の構文のこと
        for ($i = 0; $i < 3; $i++) {
            print 'こんにちは';
            print '<br/>';
        }
        // 現在の i の値を確認
        print $i;
        print '<br/>';

        for ($a = 0; $a < 2; $a++) {
            // 文字列に型変換
            $count = (string) $a;
            // 結合演算
            print $count . '回目の繰り返しです';
            print '<br/>';
        }

        // 文字列の埋め込みバージョン
        for ($b = 0; $b < 5; $b++) {
            $count2 = (string) $b;
            // ダブルクォーテーション（""）の時に限り、
            // 文字列の中に{変数}という記法で文字列の中に変数の値を埋め込むことができる
            print "{$count2}回目の繰り返しです";
            print '<br/>';
        }

        // 二重の for 文
        //（xで9回繰り返し）×（yで9回繰り返し）=（81通りの九九）ができる
        for ($x = 1; $x < 10; $x++) {
            for ($y = 1; $y < 10; $y++) {
                $z = $x * $y;
                print "{$x}×{$y}={$z}";
                print "<br/>";
            }
        }
    ?>
</body>
</html>