<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-8</title>
</head>
<body>
    <?php
        // 基本型はそれ以上分割できない
        // 複合型は基本型のデータをいくつか組み合わせて1つのデータにする

        // 連想配列（ある値に別の値を対応させて保持するデータ型）、別名 array
        // 片方（左）を key 、もう片方（右）を value という（key から value を取り出せる）
        // value から key を取り出すことは通常できない
        $hashira = [
            '水柱' => '富岡義勇',
            '炎柱' => '煉獄杏寿郎'
        ];
        var_dump($hashira);
        print '<br/>';
        // value の取り出し
        print $hashira['水柱'];
        print '<br/>';
        print $hashira['炎柱'];
        print '<br/>';
        // value の書き換え
        $hashira['水柱'] = '鱗滝左近次';
        print $hashira['水柱'];
        print '<br/>';
        // key の追加
        $hashira['web柱'] = '上部頁';
        print $hashira['web柱'];
    ?>
</body>
</html>