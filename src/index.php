<?php

include(__DIR__ . '/database/database.php');
include(__DIR__ . '/app/functions/util.php');

$error_msg = array();

// INSERT処理 新規スレッドを立ち上げ
include(__DIR__ . '/api/thread_add.php');
// SELECT スレッド一覧を取得
include(__DIR__ . '/api/threads_get.php');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>89ちゃんねる</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="/views/css/style.css">
</head>

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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script src="/views/js/script.js"></script>
</body>

</html>