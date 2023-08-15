<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/gs_kadai_php4/style.css">
    <title>ログイン</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-default">管理画面</nav>
    </header>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">個展登録</a>
                </div>
            </div>
        </nav>
    </header>
    <form name="form1" action="login_act.php" method="post">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>


</body>

</html>
