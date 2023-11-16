<?php

$dbUrl = getenv("JAWSDB_URL");

if ($dbUrl) {
  // Herokuの本番環境
  $urlParts = parse_url($dbUrl);

  $dbHost = $urlParts['host'];
  $dbPort = $urlParts['port'];
  $dbName = ltrim($urlParts['path'], '/');
  $dbUser = $urlParts['user'];
  $dbPass = $urlParts['pass'];

  $dsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName";
} else {
  // ローカル環境
  $dsn = "mysql:dbname=enchannel;host=db;port=3306";
  $dbUser = 'user';
  $dbPass = 'password';
}
// DBへ接続
try {
  $dbh = new PDO($dsn, $dbUser, $dbPass);
  // print("データベースの接続に成功しました");
  writeLog('データベースの接続に成功しました');
} catch (PDOException $e) {
  print("データベースの接続に失敗しました" . $e->getMessage());
  writeLog('データベースの接続に失敗しました' . $e->getMessage());
  die();
}
