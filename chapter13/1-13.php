<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-13</title>
</head>
<body>
    <?php
        // クラス：仲間（概念）を定義する構文
        // 　　　　データとふるまいが必要
        // 　　　　紙やメモ帳で書いていくと浮かび上がってくる

        // オブジェクト：仲間の中の1つの具体的なもの

        // クラスの書き方
        class Human {
            // ★★ データ（クラスに定義したデータをプロパティという）
            // アクセス修飾子 プロパティ名;

            // public はプロパティをクラスの外に公開する
            public $name;
            // protected はクラスの継承と関わりが深い
            protected $birthday;
            // private はプロパティを外部から隠す
            // 特に理由がなければ private にしておくのが吉
            private $gender;

            // プロパティに値を代入
            public function __construct($name, $birthday, $gender) {
                // this はレシーバーと呼ばれるオブジェクトが入った変数
                // レシーバー：メソッドの中で何かオブジェクトのプロパティを使いたい時に使用する
                $this->name = $name;
                $this->birthday = $birthday;
                $this->gender = $gender;
            }

            // ★★ メソッド（関数）
            public function walk() {
                print "{$this->gender}が歩きます<br/>";
            }

            public function eat() {
                print "{$this->name}が食べます<br/>";
            }
        }

        // コンストラクタ
        // コンストラクタを呼び出すと、オブジェクトが返ってくる
        // クラスから具体的なモノ（オブジェクト）を生成できる
        $human = new Human('田中太郎', '1989年4月23日', '男');
        // 関数の呼び出し
        $human->eat();
        $human->walk();
    ?>
</body>
</html>