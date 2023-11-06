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
  <header class="bg-primary text-white p-4">
    <h1>89ちゃんねる</h1>
    <p>スレッドを立ち上げて語り合いましょう。</p>
  </header>

  <!-- Bootstrapのナビゲーションバー -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">89ちゃんねる</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">ホーム</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#news">ニュース</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">お問い合わせ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">このサイトについて</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container my-4">
    <!-- メインコンテンツ -->
    <section id="home" class="my-4">
      <h2>ホーム</h2>
      <p>ようこそ89ちゃんねるへ。ここでは様々な話題についてディスカッションを行うことができます。</p>
    </section>

    <section id="news" class="my-4">
      <h2>ニュース</h2>
      <p>最新のニュースや更新情報をここでチェックしましょう。</p>
    </section>

    <!-- 他のセクションや記事を追加する場合はここに挿入 -->

  </main>

  <footer class="bg-dark text-white text-center p-4">
    <p>&copy; 2023 89ちゃんねる</p>
  </footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script src="/views/js/script.js"></script>
</body>

</html>