<?php

include(__DIR__ . '/database/database.php');
include(__DIR__ . '/app/functions/util.php');

$error_msg = array();

// INSERT処理 新規スレッドを立ち上げ
include(__DIR__ . '/app/controllers/thread_add.php');
// SELECT スレッド一覧を取得
include(__DIR__ . '/app/controllers/threads_get.php');

?>

<!DOCTYPE html>
<html lang="ja">

<?php include(__DIR__ . '/views/parts/head.php'); ?>

<body>
	<!-- ヘッダーを読み込む -->
	<?php include(__DIR__ . '/views/parts/header.php'); ?>
	<!-- ナビゲーションバーを読み込む -->
	<?php include(__DIR__ . '/views/parts/navbar.php'); ?>

	<!-- メインコンテンツ -->
	<main class="container my-4">
		<!-- エラー内容表示 -->
		<?php include(__DIR__ . '/views/parts/validation.php'); ?>

		<!-- スレッドを立ち上げる -->
		<?php include(__DIR__ . '/views/parts/thread_form.php'); ?>

		<!-- スレッド一覧 -->
		<?php include(__DIR__ . '/views/parts/threads.php'); ?>
	</main>

	<!-- フッターを読み込む -->
	<?php include(__DIR__ . '/views/parts/footer.php'); ?>
</body>

</html>