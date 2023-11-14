<?php

// コメントを投稿
if (isset($_POST['thread_id']) && isset($_POST['user_name']) && isset($_POST['comment'])) {
	try {
		$sql = "INSERT INTO comments (thread_id, user_name, comment) VALUE(:thread_id, :user_name, :comment)";
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':thread_id', $_POST['thread_id'], PDO::PARAM_INT);
		$stmt->bindValue(':user_name', $_POST['user_name'], PDO::PARAM_STR);
		$stmt->bindValue(':comment', $_POST['comment'], PDO::PARAM_STR);
		$stmt->execute();

		header('Location: thread.php?id=' . $_POST['thread_id']);
		exit;
	} catch (PDOException $e) {
		echo 'ERROR: ' . $e->getmessage();
		$error_msg[] = 'コメントの投稿に失敗しました。';
	}
}
