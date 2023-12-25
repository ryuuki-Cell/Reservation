<?php
  session_start();
  $loginerr = "";
  if(isset($_SESSION["loginerr"])) {
    $loginerr = "<p style='color: red;'>".$_SESSION["loginerr"]."</p>";
    unset($_SESSION["loginerr"]);
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./css/style.css" type="text/css">
  <title>JIKKYO PENSION</title>
</head>
<body>
  <!-- ヘッダー：開始-->
  <header id="header">
    <div id="pr">
      <p>部活・サークル等のグループ利用に最適！アットホームなペンション！</p>
    </div>
    <h1><a href="./index.php"><img src="./images/logo.png" alt=""></a></h1>
  </header>
  <!-- ヘッダー：終了 -->
  <!-- メニュー：開始 -->
  <nav id="menu">
    <ul>
  <li><a href="./ownerReserveList.php?disp=today">本日</a></li>
  <li><a href="./ownerReserveList.php?disp=after">本日以降</a></li>
  <li><a href="./ownerReserveList.php?disp=before">過去</a></li>
    </ul>
  </nav>
  <!-- メニュー：終了 -->
  <!-- コンテンツ：開始 -->
  <div id="contents">
    <h2>オーナーログイン画面</h2>
    <p>オーナーのIDとパスワードを入力してください。</p>
    <form method="post" action="./ownerCheck.php">
        <table class="host">
        <tr>
            <th>オーナーID</th>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td><input type="password" name="pass"></td>
        </tr>
        </table>
        <?php echo $loginerr; ?>
        <input class="submit_a" type="submit" value="ログイン">
    </form>
  </div>
  <!-- コンテンツ：終了 -->
  <!-- フッター：開始 -->
  <footer id="footer">
    Copyright c 2016 Jikkyo Pension All Rights Reserved.
  </footer>
  <!-- フッター：終了 -->

</body>
</html>
