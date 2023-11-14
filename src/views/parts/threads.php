<!-- スレッド一覧 -->
<section id="home" class="my-4">
  <div class="text-white">
    <h2>スレッド一覧</h2>
    <p>ようこそ89ちゃんねるへ。ここでは様々な話題についてディスカッションを行うことができます。</p>
  </div>
  <div class="row"> 
    <?php foreach ($threads as $thread) : ?>
      <div class="col-md-6">
        <div class="card mb-4 shadow-sm">
          <a href="views/pages/thread.php?id=<?= urlencode($thread['id']) ?>" class="card-body">
            <h5 class="card-title"><?= h($thread['title']) ?></h5>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">表示</button> -->
                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">編集</button> -->
              </div>
              <small class="text-muted"><?= date('Y年m月d日 H:i', strtotime($thread['created_at'])) ?></small>
            </div>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>