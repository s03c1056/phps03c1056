<?php
$name = $_POST["name"];
$target_day = $_POST["target_day"];
$comment = $_POST["comment"];

include("function.php");
$pdo = db_conn();
$sql = "INSERT INTO php_table(name,target_day,comment)VALUES(?,?,?)";
$stmt = $pdo->prepare($sql);
$data[] = $name;
$data[] = $target_day;
$data[] = $comment;
$stmt->execute($data);

$dbh = null;

print "登録完了<br/>";

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="indexx.php">一覧に戻る</a>
</body>

</html>