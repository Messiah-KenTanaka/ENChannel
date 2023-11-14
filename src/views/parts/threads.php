<section id="home" class="my-4">
  <h2>スレッド一覧</h2>
  <p>ようこそ89ちゃんねるへ。ここでは様々な話題についてディスカッションを行うことができます。</p>
  <div class="row">
    <?php foreach ($threads as $thread) : ?>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm rounded hover-shadow">
          <a href="views/pages/thread.php?id=<?= urlencode($thread['id']) ?>" class="card-body text-decoration-none">
            <h5 class="card-title text-dark">
              <i class="bi bi-threads ml-1"></i>
              <?= h($thread['title']) ?>
            </h5>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <div>
                <i class="bi bi-chat-dots"></i>
                <small><?= $thread['comment_count'] ?>件</small>
              </div>
              <small class="text-muted"><?= date('Y年m月d日 H:i', strtotime($thread['created_at'])) ?></small>
            </div>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>