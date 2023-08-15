<?php

$id = $_GET['id'];


require_once('model.php');
$pdo = db_connect();
$result = get_posts_by_id($pdo, $id);
require_once('templates/detail.php');

// 下をtemplate.phpへ移動

// <?php

// session_start();
// require_once('funcs.php');
// loginCheck();

// //select.phpから送られてくる対象のIDを取得
// $id = $_GET['id'];
// $pdo = db_conn();

// //3．データ登録SQL作成
// $stmt = $pdo->prepare('SELECT * FROM gs_kadai_an_table WHERE id=:id;');
// $stmt->bindValue(':id',$id,PDO::PARAM_INT);
// $status = $stmt->execute();

// //4．データ表示
// $result = '';
// if ($status === false) {
//     $error = $stmt->errorInfo();
//     exit('SQLError:' . print_r($error, true));
// } else {
//     $result = $stmt->fetch();
// }
// ?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>開催予定の個展登録フォーム｜そうだ、個展に行こう</title>
    <link rel="stylesheet" href="/gs_kadai_php3/style.css">
</head>

<body>
    <div class="menu">
        <h2>更新画面</h2>
        <p>更新したい情報を選択してください</p>
    </div>

    <form id="formlist" action="update.php" method="post">
        作家名: <input type="text" name="name" class="feedback-input"  value="<?= $result['name'] ?>">
        主な活動ジャンル:<select name="category" class="feedback-input" value="<?= $result['category'] ?>">
            <option value="絵画">絵画</option>
            <option value="写真">写真</option>
            <option value="版画">版画</option>
            <option value="立体">立体</option>
        </select>
        SNSのURL: <input type="text" name="sns" placeholder="https://…" class="feedback-input" value="<?= $result['sns'] ?>">
        メールアドレス: <input type="text" name="email" class="feedback-input"  value="<?= $result['email'] ?>">
        出展場所: <input type="text" name="place" class="feedback-input" value="<?= $result['place'] ?>">
        出展予定の作品および点数: <textarea name="description" class="feedback-input"  value="<?= $result['description'] ?>"></textarea>
        パスワード: <input type="password" name="pass" placeholder="パスワードを入力" class="feedback-input"  value="<?= $result['pass'] ?>">
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
        <input type="submit" value="更新する">
    </form>
</body>

</html> -->
