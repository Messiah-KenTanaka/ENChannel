<?php

/**
 * グローバル関数
 */

// h関数が未定義の場合は定義
if (!function_exists('h')) {
  /**
   * XSS攻撃エスケープ処理関数
   * 
   * @param string $str
   */
  function h($str)
  {
    echo htmlspecialchars($str, ENT_QUOTES, "UTF-8");
  }
}

/**
 * ログをファイルに出力
 * 
 * @param string|array|object $message
 * @param int|null $logType
 */
function writeLog($message, $logType = null)
{
  $data = new DateTime("now", new DateTimeZone('Asia/Tokyo'));
  $timestamp = $data->format('Y-m-d H:i:s');
  // 引数が配列またはオブジェクトの場合、print_rを使用して文字列に変換
  if (is_array($message) || is_object($message)) {
    $message = print_r($message, true);
  }

  $logMessage = $timestamp . '：' . $message . "\n";

  switch ($logType) {
    case LOG_TYPE_CRON: // クーロン処理の場合
      file_put_contents(__DIR__ . '/../../logs/cron.log', $logMessage, FILE_APPEND);
      break;
    default:
      file_put_contents(__DIR__ . '/../../logs/app.log', $logMessage, FILE_APPEND);
  }
}
