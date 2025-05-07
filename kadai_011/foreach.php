<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_011</title>
</head>
<body>
  <?php
  $onion_profiles = ['名前' => '玉ねぎ', '価格' => 200, '産地' => '北海道'];
  foreach ($onion_profiles as $key => $value) {
    echo "{$key}:{$value}<br>";
  }
  ?>
</body>
</html>