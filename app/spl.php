<?php
$dsn = 'pgsql:dbname=TEST;host=pgsql;port=5432';
$user = 'postgres';
$pass = 'example';

try {
  // DBに接続する
  $dbh = new PDO($dsn, $user, $pass);

  // ここでクエリ実行する
  // $query_result = $dbh->query('SELECT * FROM test_comments');
  // $sth = $dbh->prepare('INSERT INTO test_comments (name, text) VALUES (?, ?)');
  $sth_select = $dbh->prepare('SELECT * FROM test_comments WHERE name = ?');

  // DBを切断する
  $dbh = null;
} catch (PDOException $e) {
    // 接続にエラーが発生した場合ここに入る
    print "DB ERROR: " . $e->getMessage() . "<br/>";
    die();
}
?>

<?php
  // foreach($query_result as $row) {
  // print $row["name"] . ": " . $row["text"] . "<br/>";
  // }

  // $name = "John";
  // $text = "Power to the People";
  // $sth->execute(array($name, $text));
  
  $name = "John";
  $sth_select->execute(array($name));
  $prepare_result = $sth_select->fetchAll();
  foreach($prepare_result as $row) {
    print $row["name"] . ": " . $row["text"] . "<br/>";
  }
  
?>