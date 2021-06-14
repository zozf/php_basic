<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-11</title>
</head>
<body>
    <?php
        // ★★ break 文：繰り返し（ループ）処理を途中で終了させる
        //（例）配列の中にマイナスの数が含まれているかどうかを調べる

        // 調べたい配列
        $arr = [12, 45, -56, 23, 73, 97, 43];

        // count 関数を利用して配列の要素の数を取得
        $num = count($arr);

        // '含まれていません' という文字列を代入しておく
        $message = '含まれていません';

        // 配列の要素数分処理を繰り返す
        for ($i = 0; $i < $num; $i++) {
            // arr の要素を value に1つずつ代入
            $value = $arr[$i];
            // もし、value がマイナスの数だったら message を '含まれています' に変更して処理を打ち切る
            if ($value < 0) {
                $message = '含まれています';
                // 処理の打ち切り
                break;
            }
        }

        // 全ての処理が終わった時に message を出力
        print $message;

        // 改行
        print '<br/>';

        // ★★ continue 文：繰り返し処理中に次の繰り返しに進めたい時に使用する
        //（例）ある配列に含まれている偶数の総和が知りたい

        // 調べたい配列
        $arr = [12, 43, 22, 39, 20];

        // count 関数を利用して配列の要素の数を取得
        $num = count($arr);

        // 偶数の総和用の変数
        $sum = 0;

        // 配列の要素数分処理を繰り返す
        for ($i = 0; $i < $num; $i++) {
            // arr の要素を value に1つずつ代入
            $value = $arr[$i];
            // 奇数だったら何もせず次のループに移る（スキップ）
            if ($value % 2 === 1) {
                continue;
            }
            // 偶数だった場合、sum に偶数の値を足し上げる（複合代入演算子）
            $sum += $value;
        }
        print $sum;

        print '<br/>';

        // ★★ while 文：for 文と同じ処理を書くことができる（複雑な処理で使われる）
        // for 文と while 文は相互に書き換えることが可能

        // while(継続条件式) {
        //     処理
        // }

        //（例）配列の中にマイナスの数が含まれているかどうかを調べる
        $arr = [1, 2, 6, 7, -5, 3];
        $num = count($arr);
        $message = '含まれていません';

        // 初期化部分
        $i = 0;

        while ($i < $num) {
            $value = $arr[$i];
            if ($value < 0) {
                $message = '含まれています';
                break;
            }
            // 更新部分
            $i++;
        }
        print $message;

        print '<br/>';

        // ★★ foreach 文：連想配列の要素を1つずつ取り出したい時に使う構文

        // foreach($連想配列 as $変数名) {
        //     処理
        // }

        $arr = [1, 2, 3, 4, 5, 6];

        foreach($arr as $value) {
            print $value;
            print '<br/>';
        }

        //（例）配列の中にマイナスの数が含まれているかどうかを調べる
        $arr = [12, 4, 32, 41, -5, 3];
        $message = '含まれていません';

        foreach ($arr as $value) {
            if ($value < 0) {
                $message = '含まれています';
                break;
            }
        }

        print $message;

        print '<br/>';

        // foreach 文を利用した key & value の取り出し
        $fruits = [
            'りんご' => 3,
            'みかん' => 1,
            'ぶどう' => 2
        ];

        foreach ($fruits as $key => $value) {
            print "{$key}の個数は{$value}個です";
            print '<br/>';
        }
    ?>
</body>
</html>