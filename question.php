<?php
  //POST送信で送られてきた名前を受け取って変数を作成
  $name = $_POST["name"];
  //①画像を参考に問題文の選択肢の配列を作成してください。
  $q1 = ["80","22","20","21"];
  $q2 = ["PHP","Python","JAVA","HTML"];
  $q3 = ["join","select","insert","update"];
  //② ①で作成した、配列から正解の選択肢の変数を作成してください
  $q1_answer = $q1[0];
  $q2_answer = $q2[3];
  $q3_answer = $q3[1];
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3-4問題</title>
    <link rel="stylesheet" href="question.css">
  </head>
  <body>
    <!--フォームの作成 通信はPOST通信で-->
    <form action="answer.php" method="POST">
      <p>お疲れ様です<?= $name ?>さん</p>
      <input type="hidden" name="name" value="<?php echo $name; ?>" />
      <h2>①ネットワークのポート番号は何番？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <?php foreach ($q1 as $value) { ?>
        <input type="radio" name="q1" value="<?php echo $value; ?>" /><?php echo $value; ?>
      <?php } ?>
      <input type="hidden" name="$q1_answer" value="<?php echo $q1_answer ?>">
      <h2>②Webページを作成するための言語は？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <?php foreach ($q2 as $value) { ?>
        <input type="radio" name="q2" value="<?php echo $value; ?>" /><?php echo $value; ?>
      <?php } ?>
      <input type="hidden" name="$q2_answer" value="<?php echo $q2_answer ?>">
      <h2>③MySQLで情報を取得するためのコマンドは？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <?php foreach ($q3 as $value) { ?>
        <input type="radio" name="q3" value="<?php echo $value; ?>" /><?php echo $value; ?>
      <?php } ?>
      <input type="hidden" name="$q3_answer" value="<?php echo $q3_answer ?>">
      <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
      <br>
      <input type="submit" name ="btn" value="解答する">
    </form>
  </body>
</html>
