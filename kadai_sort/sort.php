<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎</title>
</head>
<body>
  <p>
    <?php
    //ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10];

    function sort_2way($array, $order) {

      //TRUEなら昇順、FALSEなら降順
      if ($order === TRUE) {
        sort($array);
        echo '昇順で表示します。<br>';
      } else {
        rsort($array);
        echo '降順で表示します。<br>';
      }
      foreach ($array as $numbers) {
        echo $numbers .'<br>';
      }
    }

    sort_2way($nums, TRUE);
    sort_2way($nums, FALSE);
    ?>
  </p>
</body>
</html>