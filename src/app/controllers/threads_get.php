<?php

$perPage = 30; // ページごとのスレッド表示数
$totalPages = 1; // トータルページのデフォルト値
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $perPage;

try {
  // スレッドの総数を獲得
  $total = $dbh->query("SELECT COUNT(*) FROM threads")->fetchColumn();
  $totalPages = $total / $perPage;

  // SELECT スレッド一覧を取得
  $sql = "SELECT * FROM threads ORDER BY id DESC LIMIT :start, :perPage";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':start', $start, PDO::PARAM_INT);
  $stmt->bindValue(':perPage', $perPage, PDO::PARAM_INT);
  $stmt->execute();
  $threads = $stmt->fetchAll();
} catch (PDOException $e) {
  // echo 'Error: ' . $e->getMessage();
  $error_msg[] = 'スレッド一覧を読み込めませんでした。';
  writeLog('ERROR: スレッドを読み込めませんでした。' . $e->getMessage());
}
