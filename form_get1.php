<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>フォーム：GET</title>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='css/reset.css'>
  <link rel='stylesheet' href='css/style.css'>

</head>
<body>
<div class='wrap'>
    <div class='prof'>
      <div class='prof__img'><img src='img/gyoza.jpg'alt=''></div>
      <div class='prfo__contents'>
        <div class='prof__name'>ますログ。</div>
        <div class='prof__text'><?=$message; ?></div>
      </div>
    </div>

    <!-- /.prof -->

    <div class='contents'>
      
    <div class='title'>美味しいお店を教えてください♪</div>
      <div class='text'>あなたが人生で訪れた中で、だれかにお勧めしたいと思うお店を教えてください！
          <br>教えてくれた人にはいいことあるかも！</div>
    </div>
    <!-- /.contents -->
<form method="get" action="form_get2.php">
<p>名前:<input type ="text" name="name" size="20"></P>
<p>職業:<input type ="text" name="job" size="20"></P>
<p>年齢:<input type ="text" name="age" size="20"></P>
<p>行ったお店:<input type ="text" name="tenmei" size="20"></P>
<p>口コミ:<input type ="text" name="comment" size="20"></P>
<p>写真:<input type ="text" name="picture" size="20"></P>
<p>星☆☆☆:<input type ="text" name="star" size="20"></P>
<p><input type="submit" value="送信"></P>
</form>


<footer class='footer'>
      <small class='copy'>&copy;ますログ</small>
    </footer>

</body>
</html>
