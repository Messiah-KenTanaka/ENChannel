<?php

// h関数が未定義の場合は定義
if (!function_exists('h')) {
  // XSS攻撃をエスケープ処理
  function h($str)
  {
    echo htmlspecialchars($str, ENT_QUOTES, "UTF-8");
  }
}

// ログをファイルに出力
function writeLog($message) {
  $data = new DateTime();
  $timestamp = $data->format('Y-m-d H:i:s');
  $logMessage = $timestamp . ':' . $message . "\n";

  file_put_contents(__DIR__ . '/../../logs/app.log', $logMessage, FILE_APPEND);
}