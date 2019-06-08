<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      if(isset($_POST["comment"]) and isset($_POST["name"])){
        //エスケープしてから表示
        $comment = htmlspecialchars($_POST["comment"]);
		$name = htmlspecialchars($_POST["name"]);
        print("${name}のコメントは「 ${comment} 」です。");
      } else {
    ?>
        <p>コメントしてください。</p>
        <form method="POST" action="index.php">
          Comment : <input name="comment" />
		  Name : <input name="name" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>