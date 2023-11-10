<?php

include(__DIR__ . '../../../database/database.php');
include(__DIR__ . '../../../app/functions/util.php');

$error_msg = array();

include(__DIR__ . '../../../api/thread_get.php');

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
					<!-- ニックネーム入力フィールド -->
					<div class="col">
						<input type="text" class="form-control" id="user_name" name="user_name" placeholder="ニックネーム" minlength="0" maxlength="16">
					</div>
					<div class="col-auto">
						<button type="submit" class="btn btn-warning">送信</button>
					</div>
				</div>
				<textarea class="form-control" id="comment" name="comment" placeholder="コメント..." minlength="0" maxlength="500" required rows="3"></textarea>
			</form>
		</div>

		<!-- コメント一覧 -->

	</main>

	<!-- フッターを読み込む -->
	<?php include(__DIR__ . '../../parts/footer.php'); ?>
</body>

</html>