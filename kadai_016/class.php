<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_016
  </title>
</head>
<body>
  <p>
    <?php
    //クラスを定義
    class Food {

      //プロパティを定義
      private $name;
      private $price;

      //メソッドを定義
      public function show_price() {
        echo $this->price . '<br>';
      }

      //コンストラクタを定義
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    class Animal {

      private $name;
      private $height;
      private $weight;

      public function show_height() {
        echo $this->height . '<br>';
      }

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    //インスタンス化する
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    //インスタンスの各プロパティを出力
    print_r($food);
    print_r($animal);

    //メソッドを呼び出す
    $food -> show_price();
    $animal -> show_height();
    ?>
  </p>
</body>
</html>