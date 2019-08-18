<?php
//データベース接続処理
function db_conn()
{ {
        $dbname = 'php';
        $db = 'mysql:dbname=' . $dbname . ';charset=utf8;port=3306;host=localhost';
        $user = 'root';
        $pwd = '';
        try {
            return new PDO($db, $user, $pwd);
        } catch (PDOException $e) {
            exit('dbError:' . $e->getMessage());
        }
    }
}
