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

	</main>

	<!-- フッターを読み込む -->
	<?php include(__DIR__ . '../../parts/footer.php'); ?>
</body>

</html>