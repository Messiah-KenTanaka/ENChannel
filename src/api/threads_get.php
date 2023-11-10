<?php

// SELECT スレッド一覧を取得
try {
  $sql = "SELECT * FROM threads ORDER BY id DESC";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $threads = $stmt->fetchAll();
} catch (PDOException $e) {
  // echo 'Error: ' . $e->getMessage();
  $error_msg = 'スレッド一覧を読み込めませんでした。';
}
