<?php

session_start();
require_once('funcs.php');
loginCheck();

// POSTデータ取得
$name = $_POST['name'];
$category = $_POST['category'];
$sns = $_POST['sns'];
$email = $_POST['email'];
$place = $_POST['place'];
$description = $_POST['description'];
$pass = $_POST['pass'];
$id = $_POST['id']; // 追加

// funcs.phpを読み込む
require_once('funcs.php');
$pdo = db_conn();

//データ削除SQL作成
$stmt = $pdo->prepare('DELETE FROM gs_kadai_an_table WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//データ登録処理後
$result = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    header('Location: select.php');
    exit();
}