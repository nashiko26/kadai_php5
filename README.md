# 課題　 -開催予定の個展登録をしよう ver.5-
## ①課題内容（どんな作品か）
- 課題の続きです。過去数回にわたり制作してきた「個展 開催情報を登録できるフォーム」をMVC処理化しました
- 自分が出店する予定の情報や、宣伝したい個展などを自由に入れられます。

## ②工夫した点・こだわった点
- MVCを教わったので習うより慣れよで分割してみました
  - Model：DBと接続。データ保存・取得する
  - Controller：ModelとViewを制御する
  - View：表示や入出力などUIを司る

## ③難しかった点・次回トライしたいこと(又は機能)
- 作ってきた構成を組み替える中でたくさんエラーに遭遇して苦労しました…
  - Uncaught ArgumentCountError: Too few arguments to function get_all_posts()
    - 解決策：https://www.php.net/manual/ja/migration71.incompatible.php
  - Uncaught Error: Call to a member function prepare() on null
    - 解決策：https://qiita.com/yyy752/questions/f97905121ea1a2ef9497

## ④質問・疑問・感想、シェアしたいこと等なんでも
- [感想]フォームの登録処理をMVCで考えてしっくり来たので卒業制作はこの考え方でやってみようかなと感じています。
  - フォームの登録処理
    - View ユーザーがフォームを入力して送信ボタンをクリックする
    - Controller ユーザーの入力した情報をViewから受け取り、Modelに入力情報を登録指示する
    - Model ユーザーの入力情報をDBに登録し、登録処理の結果をContorllerに返す
    - Controller Modelから登録処理の結果を受け取り、登録完了画面をViewに送る
    - View 登録完了画面を表示する
- [参考記事]
  - https://system-kaihatu.com/archives/3204
  - https://zenn.dev/dd_sho/articles/36abe63831d909
