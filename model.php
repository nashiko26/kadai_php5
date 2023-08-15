<?php

// POSTデータ取得
$name = $_POST['name'];
$category = $_POST['category'];
$sns = $_POST['sns'];
$email = $_POST['email'];
$place = $_POST['place'];
$description = $_POST['description'];
$pass = $_POST['pass'];

// funcs.phpを読み込む
// require_once('funcs.php');

// DB接続
function db_connect()
{
    try {
        $db_name = 'gs_kadai';    //データベース名
        $db_id   = 'root';      //アカウント名
        $db_pw   = '';      //パスワード：XAMPPはパスワード無しに修正してください。
        $db_host = 'localhost'; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}
// try {
//   //ID:'root', Password: xamppは 空白 ''
//   $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root', '');
// } catch (PDOException $e) {
//   exit('DBConnectError:'.$e->getMessage());
// }

//データ登録SQL作成
function get_all_posts($pdo, $id)
{
    $stmt = $pdo->prepare('SELECT * FROM gs_kadai_an_table;');
    $status = $stmt->execute();    
// function get_post_by_id($pdo, $id)
// {
//     $stmt = $pdo->prepare('SELECT * FROM gs_kadai_an_table WHERE id = :id;');
//     $stmt->bindValue(':id', $id, PDO::PARAM_INT);
//     $status = $stmt->execute();


$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p>';
        $view .= '<a href="detail.php?id=' . $result['id'] . '">';
        $view .= $result['indate'] . '：' . $result['name'];
        $view .= '</a>';
        $view .= '<a href="delete.php?id=' . $result['id'] . '">';
        $view .= ' [削除] ';
        $view .= '</a>';
        $view .= '</p>';
    }
    return $view;
}

    // $result = '';
    // if ($status === false) {
    //     $error = $stmt->errorInfo();
    //     exit('SQLError:' . print_r($error, true));
    // } else {
    //     $result = $stmt->fetch();
    //     return $result;
    // }
}

// $stmt = $pdo->prepare(
//     "INSERT INTO
//         gs_kadai_an_table(
//             name, category, sns, email, place, description, pass
//             )
//         VALUES (
//             :name, :category, :sns, :email, :place, :description, :pass
//             );"
// );

// //バインド変数
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);
// $stmt->bindValue(':category', $category, PDO::PARAM_STR);
// $stmt->bindValue(':sns', $sns, PDO::PARAM_STR);
// $stmt->bindValue(':email', $email, PDO::PARAM_STR);
// $stmt->bindValue(':place', $place, PDO::PARAM_STR);
// $stmt->bindValue(':description', $description, PDO::PARAM_STR);
// $stmt->bindValue(':pass', $pass, PDO::PARAM_STR);

//実行
// $status = $stmt->execute();

//データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．登録が成功した場合の処理
  header('Location: thanks.php');
}