<?php

include(__DIR__ . '/../../functions/util.php');
include(__DIR__ . '/../../database/database.php');

// ログメッセージの作成
$logMessage = "バッチ処理開始: " . "\n";
writeLog($logMessage);

// スレッドみん紐づくコメント数をカウント
$sql = "SELECT t.id, t.title, COUNT(c.thread_id) AS COUNT
        FROM threads t
          JOIN comments c
          ON t.id = c.thread_id
        GROUP BY c.thread_id";
$stmt = $dbh->prepare($sql);
$datas = $stmt->execute();

writeLog($datas);


// ログファイルへの書き込み
$logMessage = "バッチ処理終了: " . "\n";
writeLog($logMessage);
