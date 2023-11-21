<?php

session_start();
$error_msg = array();

include(__DIR__ . '../../../config/config.php');
include(__DIR__ . '../../../app/functions/util.php');
include(__DIR__ . '../../../database/database.php');
include(__DIR__ . '../../../app/thread_get.php');
include(__DIR__ . '../../../app/comment_add.php');
include(__DIR__ . '../../../app/comments_get.php');
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
		<?php include(__DIR__ . '../../parts/comment_form.php'); ?>

		<!-- コメント一覧 -->
		<?php include(__DIR__ . '../../parts/comments.php'); ?>

	</main>

	<!-- フッターを読み込む -->
	<?php include(__DIR__ . '../../parts/footer.php'); ?>
</body>

</html>