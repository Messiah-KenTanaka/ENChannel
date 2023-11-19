<section id="home" class="my-4">
  <h2>スレッド一覧</h2>
  <p>ようこそ89ちゃんねるへ。ここでは様々な話題についてディスカッションを行うことができます。</p>
  <div class="row">
    <?php foreach ($threads as $thread) : ?>
      <div class="col-lg-6 mb-4">
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

  <!-- ページネーションリンクの追加 -->
  <nav aria-label="Page navigation" class="mt-4">
    <ul class="pagination justify-content-center">
      <?php
      $range = 2; // 現在のページの前後に表示するページ数
      $showDots = false; // 省略記号を表示するかどうかのフラグ

      for ($i = 1; $i <= $totalPages; $i++) {
        // 現在のページの前後の範囲内か、最初のページか最後のページならリンクを表示
        if ($i == 1 || $i == $totalPages || ($i >= $page - $range && $i <= $page + $range)) {
          if ($showDots) {
            echo '<li class="page-item"><a class="page-link" href="#">...</a></li>';
            $showDots = false;
          }
          echo '<li class="page-item' . ($i == $page ? ' active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
        } else {
          // 現在のページの前後の範囲外で、まだ省略記号を表示していなければ表示する
          if (!$showDots) {
            $showDots = true;
          }
        }
      }
      ?>
    </ul>
  </nav>


</section>