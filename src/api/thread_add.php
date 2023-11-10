<?php

// INSERT処理 新規スレッドを立ち上げ
if (isset($_POST['title'])) {
  try {
    $sql = "INSERT INTO threads (title) VALUES (:title)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
    $stmt->execute();

    // 新規挿入されたスレッドのIDを取得
    $newThreadId = $dbh->lastInsertId();

    // 新規スレッドのページにリダイレクト
    header("Location: views/pages/thread.php?id=" . $newThreadId);
    exit;
  } catch (PDOException $e) {
    // echo 'Error: ' . $e->getMessage();
    $error_msg[] = 'スレッドの立ち上げに失敗しました。';
    header("Location: index.php");
  }
}
