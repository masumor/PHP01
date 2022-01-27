<?php

function h($val){
    return htmlspecialchars($val,ENT_QUOTES);
}

$name = $_GET["name"];
$job = $_GET["job"];
$age = $_GET["age"];
$tenmei = $_GET["tenmei"];
$comment = $_GET["comment"];
$star = $_GET["star"];
?>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>ますログ。</title>
  <link rel='stylesheet' href='css/reset.css'>
  <link rel='stylesheet' href='css/style.css'>
</head>
<body>
  <div class='wrap'>
    <div class='prof'>
      <div class='prof__img <?= $active; ?>'><img src='img/gyoza.jpg'alt=''></div>
      <div class='prfo__contents'>
        <div class='prof__name'>ますログ</div>
        <div class='prof__text'>PHPのビギナーです</div>
      </div>
    </div>
    <!-- /.prof -->

    <div class='contents'>
      <div class='title'>わたしはここがお勧め！</div>
      <div class='title2'><?= "その名は　".$tenmei; ?></div>
      <p1><?= "理由は・・・".$comment; ?></P>
      <p2><?= "星・・・".$star; ?></P>
    </div>
    <!-- /.contents -->

    <div class='contents'>
      <div class='title'>投稿者情報</div>
      <div class='text'><?= '名前；'.$name;?></div>
      <div class='text'><?= "職業；".$job;?></div> 
      <div class='text'><?= "年齢；".$age;?></div>
    </div>
    <!-- /.contents -->


</body>
</html>

<footer class='footer'>
      <small class='copy'>&copy;ますログ。</small>
    </footer>