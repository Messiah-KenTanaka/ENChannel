<?php

// コメント一覧取得
try {
  $sql = "SELECT * FROM comments WHERE thread_id = :thread_id ORDER BY id DESC";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':thread_id', $thread['id'], PDO::PARAM_INT);
  $stmt->execute();
  $comments = $stmt->fetchAll();
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
  $error_msg[] = 'コメント一覧を取得できませんでした。';
}
