<?php

include(__DIR__ . '../../../database/database.php');
include(__DIR__ . '../../../app/functions/utill.php');

$error_msg = array();

$thread_id = (int)($_GET['id'] ?? 0);

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
	<?php include(__DIR__ . '../../parts/header.php'); ?>
	<!-- ナビゲーションバーを読み込む -->
	<?php include(__DIR__ . '../../parts/navbar.php'); ?>

	<!-- メインコンテンツ -->
	<main class="container my-4">

		<!-- エラー内容表示 -->
		<?php include(__DIR__ . '../../../views/parts/validation.php'); ?>

		<!-- スレッド一覧 -->
		<div class="container my-3">
			<div class="card bg-light">
				<div class="card-body">
					<h3 class="card-title"><?= h($thread['title']) ?></h3>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<!-- <button type="button" class="btn btn-sm btn-outline-secondary">表示</button> -->
							<!-- <button type="button" class="btn btn-sm btn-outline-secondary">編集</button> -->
						</div>
						<small class="text-muted">投稿日：<?= date('Y年m月d日 H:i', strtotime($thread['created_at'])) ?></small>
					</div>
				</div>
			</div>
		</div>


	</main>

	<!-- フッターを読み込む -->
	<?php include(__DIR__ . '../../parts/footer.php'); ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script src="/views/js/script.js"></script>
</body>

</html>