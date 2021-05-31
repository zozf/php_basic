<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-7</title>
</head>
<body>
    <?php
        $x = -3;

        if ($x >= 0) {
            print 'プラス';
        }

        if ($x < 0) {
            print 'マイナス';
        }

        print '<br/>';

        $y = 0;

        // if-else 構文
        if ($y > 0) {
            print 'プラス';
        } else if ($y < 0) {
            print 'マイナス';
        } else {
            print 'ゼロ';
        }

        print '<br/>';

        $z = 5;

        // 二重の if 文
        if ($z > 0) {
            if ($z % 2 === 0) {
                print '正の偶数';
            } else {
                print '正の奇数';
            }
        } else if ($z < 0) {
            if ($z % 2 === 0) {
                print '負の偶数';
            } else {
                print '負の奇数';
            }
        } else {
            print 'ゼロ';
        }
    ?>
</body>
</html>