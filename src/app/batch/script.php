<?php 

$data = new Datetime();
$timestamp = $data->format('Y-m-d H:i:s');

// ログメッセージの作成
$logMessage = "Batch script execute at: ". $timestamp . "\n";

// ログファイルへの書き込み
