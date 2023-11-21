<?php

$perPage = 50; // ページごとのコメント表示数
$totalPages = 1; // トータルページのデフォルト値
$page = isset($_GET['commentPage']) ? (int)$_GET['commentPage'] : 1;
$start = ($page - 1) * $perPage;

try {
  // コメントの総数を取得
  $sql = "SELECT COUNT(*) FROM comments WHERE thread_id = :thread_id";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':thread_id', $thread['id'], PDO::PARAM_INT);
  $stmt->execute();
  $total = $stmt->fetchColumn();
  $totalPages = $total / $perPage;

  // コメント一覧取得
  $sql2 = "SELECT * FROM comments WHERE thread_id = :thread_id ORDER BY id DESC LIMIT :start, :perPage";
  $stmt2 = $dbh->prepare($sql2);
  $stmt2->bindValue(':thread_id', $thread['id'], PDO::PARAM_INT);
  $stmt2->bindValue(':start', $start, PDO::PARAM_INT);
  $stmt2->bindValue(':perPage', $perPage, PDO::PARAM_INT);
  $stmt2->execute();
  $comments = $stmt2->fetchAll();

  $thread_id = $thread['id'];

  writeLog('コメント取得成功しました。');
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
  $error_msg[] = 'コメント一覧を取得できませんでした。';
  writeLog('ERROR: コメントを読み込めませんでした。' . $e->getMessage());
}
