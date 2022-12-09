<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$know = $_POST['know'];
$reason = $_POST['reason'];
$detail = $_POST['detail'];
$time = date('Y年m月d日 H:i:s',strtotime("8 hour"));
$file = fopen('data/data.txt', 'a');

fwrite($file, $name . '/' 
. $mail . '/'
. $phone . '/'
. $know . '/'
. $reason . '/'
. $detail . '/'
. $time . '/'
);

fclose($file);
?>



<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <p>お名前：<?=$name ?></p>
    <p>EMAIL: <?=$mail ?></p>
    <p>電話番号<?=$phone ?></p>
    <p>何で知ったか: <?=$know ?></p>
    <p>弟子希望理由：<?=$reason ?></p>
    <p>詳細: <?=$detail ?></p>
    <p>送信日時: <?=$time ?></p>
    <!-- パスワード： -->
    <ul>
        <li><a href="index.php">php_kadai</a></li>
    </ul>
</body>

</html>