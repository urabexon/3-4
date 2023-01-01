<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST["name"];
$q1 = $_POST['q1'];
$q1_answer = $_POST['$q1_answer'];
$q2 = $_POST['q2'];
$q2_answer = $_POST['$q2_answer'];
$q3 = $_POST['q3'];
$q3_answer = $_POST['$q3_answer'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
if ($q1 == $q1_answer) {
  $result1 = "正解！";
} else {
  $result1 = "残念・・・";
};

if ($q2 == $q2_answer) {
  $result2 = "正解！";
} else {
  $result2 = "残念・・・";
};

if ($q3 == $q3_answer) {
  $result3 = "正解！";
} else {
  $result3 = "残念・・・";
};
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3-4解答</title>
    <link rel="stylesheet" href="answer.css">
  </head>
  <body>
    <p><?= $name ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?= $result1 ?>
    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?= $result2 ?>
    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?= $result3 ?>
  </body>
</html>