<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-2</title>
</head>
<body>
    <?php
        // echo では HTML タグも書ける
        // echo と print は同じもの（本当は微妙に違う）
        echo '<h1>漫画ドラえもん</h1>';

        // 変数のルール
        // 先頭にドル（$）マークを入れる
        // 使える文字は半角英数字とアンダーバー（_）
        $dora = 'ドラえもん';
        $dorami = 'ドラミちゃん';
        $nobi = 'のび太';

        print $dora;
        // 改行
        print '<br/>';
        print $dorami;
        print '<br/>';
        print $nobi;
        print '<br/>';

        print '<h1>ここから別の漫画</h1>';

        // 変数の上書き
        $dora = 'ドラベース';

        print $dora;
        print '<br/>';

        // 変数に対して新しい変数をつけることも可能
        $nobichan = $nobi;

        print $nobichan;
    ?>
</body>
</html>