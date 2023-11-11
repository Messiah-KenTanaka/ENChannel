<?php

include(__DIR__ . '../../../database/database.php');
include(__DIR__ . '../../../app/functions/util.php');

$error_msg = array();

include(__DIR__ . '../../../api/thread_get.php');

// コメントを投稿
if (isset($_POST['thread_id']) && isset($_POST['user_name']) && isset($_POST['comment'])) {
	$sql = "INSERT INTO comments (thread_id, user_name, comment) VALUE(:thread_id, :user_name, :comment)";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':thread_id', $_POST['thread_id'], PDO::PARAM_INT);
	$stmt->bindValue(':user_name', $_POST['user_name'], PDO::PARAM_STR);
	$stmt->bindValue(':comment', $_POST['comment'], PDO::PARAM_STR);
	$stmt->execute();

	header('Location: thread.php?id=' . $_POST['thread_id']);
	exit;
}

// コメント一覧
$sql = "SELECT * FROM comments WHERE thread_id = :thread_id ORDER BY id DESC";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':thread_id', $thread['id'], PDO::PARAM_INT);
$stmt->execute();
$comments = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="ja">

<?php include(__DIR__ . '../../parts/head.php'); ?>

<body>
	<!-- ヘッダーを読み込む -->
	<?php include(__DIR__ . '../../parts/header.php'); ?>
	<!-- ナビゲーションバーを読み込む -->
	<?php include(__DIR__ . '../../parts/navbar.php'); ?>

	<!-- メインコンテンツ -->
	<main class="container my-4">

		<!-- エラー内容表示 -->
		<?php include(__DIR__ . '../../../views/parts/validation.php'); ?>

		<!-- スレッド -->
		<?php include(__DIR__ . '../../parts/thread.php'); ?>

		<!-- コメント投稿 -->
		<div class="container my-3 p-3 bg-warning-subtle">
			<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
				<div class="row mb-2">
					<div class="col">
						<input type="text" class="form-control" id="user_name" name="user_name" placeholder="ニックネーム" minlength="0" maxlength="16">
						<input type="hidden" name="thread_id" value="<?php echo $thread['id'] ?>">
					</div>
					<div class="col-auto">
						<button type="submit" class="btn btn-warning">書き込む</button>
					</div>
				</div>
				<textarea class="form-control" id="comment" name="comment" placeholder="コメント..." minlength="0" maxlength="500" required rows="3"></textarea>
			</form>
		</div>

		<!-- コメント一覧 -->
		<div>
			<table class="table table-striped">
				<tbody>
					<?php foreach ($comments as $comment) : ?>
						<tr>
							<td>
								<div class="d-flex justify-content-between">
									<span>ニックネーム：
										<span class="text-success">
											<?= h($comment['user_name']) ?>
										</span>
									</span>
									<span class="text-end"><?= h($comment['created_at']) ?></span>
								</div>
								<p><?= h($comment['comment']) ?></p>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>



	</main>

	<!-- フッターを読み込む -->
	<?php include(__DIR__ . '../../parts/footer.php'); ?>
</body>

</html>