<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-12</title>
</head>
<body>
    <?php
        // 関数：あるデータを受け取って、処理を行い、
        // 　　　処理結果として別のデータを返すもの

        // PHP の関数は大きく2つ（ビルトイン関数・ユーザー定義関数）に分けられる
        // ビルトイン関数：PHP にもともと用意されている関数
        // ユーザー定義関数：ユーザーが自由に作ることができる関数

        // 関数呼び出し：関数にデータを与えて関数からデータを受け取ること

        // ★★ ビルトイン関数

        //（例）絶対値関数
        $x = -10;
        $y = abs($x);
        print $y;
        print '<br/>';

        // ★★ ユーザー定義関数

        // function 関数名($仮引数1) {
        //     処理
        //     return 返り値;
        // }

        // 関数の呼び出し
        // 関数名($実引数);

        // ユーザー定義関数
        function add($x, $y) {
            $z = $x + $y;
            return $z;
        }

        // 関数の呼び出し
        $sum = add(12, 6);
        print $sum;
        print '<br/>';

        // ★★ スコープ = 変数の有効範囲
        // (1)ローカルスコープ = ユーザー定義関数の中のこと
        // (2)グローバルスコープ = ユーザー定義関数の外全体のこと
        // (3)スーパーグローバルスコープ

        // void：返り値の型が void である場合は、返り値に意味がないことを表す
    ?>
</body>
</html>