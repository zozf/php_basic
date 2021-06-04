<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-9</title>
</head>
<body>
    <?php
        // 基本型はそれ以上分割できない
        // 複合型は基本型のデータをいくつか組み合わせて1つのデータにする

        // 連想配列（ある値に別の値を対応させて保持するデータ型）、別名 array
        // 片方（左）を key 、もう片方（右）を value という（key から value を取り出せる）
        // value から key を取り出すことは通常できない
        // key に使えるデータの型は文字列か整数のみ
        // key の型は統一する

        // key が0から始まる整数の連番は配列と呼ばれる
        // PHP における配列の作り方
        $a = ['山田', '田中', '清水', '西山'];
        var_dump($a);
        print '<br/>';
        // 配列における要素の追加（複数追加も可能）
        array_push($a, '加藤', '井上');
        var_dump($a);
        print '<br/>';
        // 1つだけ追加する別の書き方（こちらの方が処理が早い）
        $a[] = '大場';
        var_dump($a);
        print '<br/>';

        $b = ['杉山', '佐藤', '松本'];
        // 配列の合体（新しい配列を作るため、元の配列に影響はない）
        $c = array_merge($a, $b);
        var_dump($c);
        print '<br/>';

        // 元の配列に影響を及ぼしてしまうものを破壊的な関数
        // 影響を及ぼさないものは非破壊的な関数

        // よく使う処理
        // 配列の先頭に要素を追加（複数追加も可能）
        array_unshift($a, '西岡', '遠藤');
        var_dump($a);
        print '<br/>';
        // 配列の先頭から要素を取り出す
        $d = array_shift($a);
        var_dump($a);
        print '<br/>';
        // 取り出した要素
        var_dump($d);
        print '<br/>';
        // 配列の末尾から要素を取り出す
        $e = array_pop($b);
        var_dump($b);
        print '<br/>';
        // 取り出した要素
        var_dump($e);
        print '<br/>';

        // PHP で連想配列を使う場合は、
        // (1) key を文字列にする
        // (2) key を0から始まる連番にする
        // のどちらか!!
    ?>
</body>
</html>