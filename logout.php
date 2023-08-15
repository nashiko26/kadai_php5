<?php
session_start();

//SESSIONを初期化
$_SESSION = [];

//Cookie保存のSessionIDの保存期間を過去にし破棄
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

//サーバ側での、セッションIDの破棄
session_destroy();

//処理後、index.phpへリダイレクト
header("Location: login.php");
exit();
