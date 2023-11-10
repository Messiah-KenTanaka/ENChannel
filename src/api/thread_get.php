<?php

$thread_id = (int)($_GET['id'] ?? 0);

// SELECT スレッド(1件)を取得
try {
	$sql = "SELECT * FROM threads WHERE id = :id";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':id', $thread_id, PDO::PARAM_INT);
	$stmt->execute();
	$thread = $stmt->fetch();
} catch (PDOException $e) {
	// echo 'ERROR: ' . $e->getMessage();
	$error_msg = 'スレッドが取得できませんでした。';
}