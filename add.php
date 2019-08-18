<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
</head>

<body>
  <a href="indexx.php">一覧に戻る</a>
  <br />
  ------------------------------------------------------
  <form method="post" action="add_check.php">
    内容を入力<br />
    <input type="text" name="name" required /><br />
    日付を入力<br />
    <input type="date" name="target_day" required /><br />
    コメント<br />
    <input type="textarea" name="comment" /><br />
    <br />
    <input type="submit" value="登録" />
  </form>
</body>

</html>