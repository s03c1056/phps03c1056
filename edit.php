<?php
include("function.php");

$id = $_GET["id"];
$pdo = db_conn();
$sql = 'SELECT * FROM php_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();
$rs = $stmt->fetch();

?>

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
    <form method="post" action="edit_check.php">
        内容を入力<br />
        <input type="text" name="name" value="<?= $rs['name'] ?>" required><br />
        日付を入力<br />
        <input type="date" name="target_day" value="<?= $rs['target_day'] ?>" required><br />
        コメント<br />
        <input type="textarea" cols="50" rows="10" name="comment" value="<?= $rs['comment'] ?>"><br />
        <input type="hidden" name="id" value="<?= $rs['id'] ?>"><br />
        <br />
        <input type="submit" value="登録">
    </form>
</body>

</html>