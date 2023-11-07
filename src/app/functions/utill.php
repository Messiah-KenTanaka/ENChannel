<?php

// h関数が未定義の場合は定義
if (!function_exists('h')) {
  // XSS攻撃をエスケープ処理
  function h($str)
  {
    echo htmlspecialchars($str, ENT_QUOTES, "UTF-8");
  }
}
