<?php
include("function.php");
$pdo = db_conn();

$sql =  'SELECT * FROM php_table WHERE finish != 1 ORDER BY target_day ASC';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();


$view = "";
if ($status == false) {
    $error = $stmt->errorInfo();
    exit("sqlError:" . $error[2]);
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<li class="list">';

        $view .= '<p>#' . $result['id'] . '</p>';
        $view .= '<p class="name">' . $result['name'] . '</p>';
        $view .= '<p>' . $result['target_day'] . '</p>';
        $view .= '<p>' . $result['comment'] . '</p>';

        $view .= '<a href="edit.php?id=' . $result["id"] . '" >Edit</a>';
        $view .= '<a >         </a>';
        $view .= '<a href="delete.php?id=' . $result["id"] . '" >Delete</a>';
        $view .= '<a >         </a>';
        $view .= '<a href="finish_check.php?finish=1&id=' . $result["id"] . '" >finish</a>';
        $view .= '</li>';
        $view .= '<p>----------------------------------------</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Document</title>
</head>

<body style=>
    <a href="add.php">todo登録</a>
    <a href="indexx.php">一覧</a>
    <a href="finish_index.php">完了済</a>
    <br />
    ------------------------------------------------------
    <?= $view ?>
</body>

</html>