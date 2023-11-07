<?php

$dsn = 'mysql:dbname=enchannel;host=db;port=3306';
$user = 'user';
$password = 'password';

// DBへ接続
try {
  $dbh = new PDO($dsn, $user, $password);
  // print("データベースの接続に成功しました");
} catch (PDOException $e) {
  print("データベースの接続に失敗しました" . $e->getMessage());
  die();
}
