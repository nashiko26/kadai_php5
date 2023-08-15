<?php $title = 'データ編集' ?>

<?php ob_start() ?>
    <form method="POST" action="update.php">
        <div class="jumbotron">
        作家名: <input type="text" name="name" class="feedback-input"  value="<?= $result['name'] ?>">
        主な活動ジャンル:<select name="category" class="feedback-input" value="<?= $result['category'] ?>">
            <option value="絵画">絵画</option>
            <option value="写真">写真</option>
            <option value="版画">版画</option>
            <option value="立体">立体</option>
        </select>
        SNSのURL: <input type="text" name="sns" placeholder="https://…" class="feedback-input" value="<?= $result['sns'] ?>">
        メールアドレス: <input type="text" name="email" class="feedback-input"  value="<?= $result['email'] ?>">
        <!-- 出展日: <input type="date" name="eventdate" class="feedback-input" value="<?= $result['eventdate'] ?>"> -->
        出展場所: <input type="text" name="place" class="feedback-input" value="<?= $result['place'] ?>">
        出展予定の作品および点数: <textarea name="description" class="feedback-input"  value="<?= $result['description'] ?>"></textarea> <!-- おおきく -->
        パスワード: <input type="password" name="pass" placeholder="パスワードを入力" class="feedback-input"  value="<?= $result['pass'] ?>">
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
        <input type="submit" value="更新する">
        </div>
    </form>
<?php $content = ob_get_clean() ?>

<?php require_once 'layout.php' ?>