<?php

if (isset($_POST['thread_id']) && isset($_POST['user_name']) && isset($_POST['comment'])) {
	// セッションにニックネームをセット
	$_SESSION['user_name'] = $_POST['user_name'];

	try {
		// トランザクション開始
		$dbh->beginTransaction();

		// コメントを投稿
		$sql = "INSERT INTO comments (thread_id, user_name, comment) VALUE(:thread_id, :user_name, :comment)";
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':thread_id', $_POST['thread_id'], PDO::PARAM_INT);
		$stmt->bindValue(':user_name', $_POST['user_name'], PDO::PARAM_STR);
		$stmt->bindValue(':comment', $_POST['comment'], PDO::PARAM_STR);
		$stmt->execute();

		// スレッドテーブルのコメント数をカウント
		$sql2 = "UPDATE threads SET comment_count = comment_count + 1 WHERE id = :id";
		$stmt = $dbh->prepare($sql2);
		$stmt->bindValue(':id', $_POST['thread_id'], PDO::PARAM_INT);
		$stmt->execute();

		// コミット
		$dbh->commit();

		writeLog('コメントの投稿に成功');

		header('Location: thread.php?id=' . $_POST['thread_id']);
		exit;
	} catch (PDOException $e) {
		$dbh->rollback();
		echo 'ERROR: ' . $e->getMessage();
		$error_msg[] = 'コメントの投稿に失敗しました。';
	}
}
