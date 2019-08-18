<?php
$id = $_GET["id"];
$finish = $_GET["finish"];



include("function.php");
$pdo = db_conn();
$sql = "UPDATE php_table SET finish=? WHERE id=$id";
$stmt = $pdo->prepare($sql);
$data[] = $finish;
$stmt->execute($data);

$dbh = null;

print "完了<br/>";

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