<?php 

include(__DIR__ . '../../functions/util.php');

// ログメッセージの作成
$logMessage = "Batch script execute at: " . "\n";

// ログファイルへの書き込み
writeLog($logMessage);