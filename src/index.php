<?php 

if (isset($_POST['title'])) {
	$title = $_POST['title'];
	var_dump($title);
	var_dump($_SERVER['SCRIPT_NAME']);
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
	<?php include(__DIR__ . '/views/parts/header.php'); ?>
  <!-- ナビゲーションバーを読み込む -->
	<?php include(__DIR__ . '/views/parts/navbar.php'); ?>

	<!-- メインコンテンツ -->
  <main class="container my-4">

		<!-- スレッドを立ち上げる -->
		<div class="container my-3 p-3 bg-success-subtle">
			<h2>スレッドを立ち上げる</h2>
			<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
				<div class="mb-3">
					<label for="title" class="form-label">スレッド名</label>
					<input type="text" class="form-control" id="title" name="title" placeholder="スレッド名を入力">
				</div>
				<input type="hidden" name="id">
				<button type="submit" class="btn btn-success">送信</button>
			</form>
		</div>

		<!-- スレッド一覧 -->
		<section id="home" class="my-4">
      <h2>スレッド一覧</h2>
      <p>ようこそ89ちゃんねるへ。ここでは様々な話題についてディスカッションを行うことができます。</p>
    </section>

  </main>

	<!-- フッターを読み込む -->
	<?php include(__DIR__ . '/views/parts/footer.php'); ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script src="/views/js/script.js"></script>
</body>

</html>