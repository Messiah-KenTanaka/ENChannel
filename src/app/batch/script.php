<?php

include(__DIR__ . '../../../config/config.php');
include(__DIR__ . '../../functions/util.php');
include(__DIR__ . '../../../database/database.php');

// ログメッセージの作成
writeLog('バッチ処理開始', LOG_TYPE_CRON);

try {
  // トランザクション開始
  $dbh->beginTransaction();
  // スレッドに紐づくコメント数をカウント
  $sql = "SELECT t.id, t.title, COUNT(c.thread_id) AS comment_count
          FROM threads t
            JOIN comments c
            ON t.id = c.thread_id
          GROUP BY c.thread_id";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $datas = $stmt->fetchAll();
  writeLog('SELECT成功!!', LOG_TYPE_CRON);

  // コメント数を各スレッドテーブルのカラムに挿入
  if (!empty($datas)) {
    foreach ($datas as $data) {
      $sql2 = "UPDATE threads SET comment_count = :comment_count WHERE id = :id";
      $stmt = $dbh->prepare($sql2);
      $stmt->bindValue(':comment_count', $data['comment_count'], PDO::PARAM_INT);
      $stmt->bindValue(':id', $data['id'], PDO::PARAM_INT);
      $stmt->execute();
    }
  }
  writeLog('UPDATE成功!!', LOG_TYPE_CRON);
  // コミット
  $dbh->commit();
} catch (PDOException $e) {
  // ロールバック
  $dbh->rollback();
  writeLog("クエリエラー:" . $e->getMessage(), LOG_TYPE_CRON);
}

// ログファイルへの書き込み
writeLog("バッチ処理終了" . "\n", LOG_TYPE_CRON);
