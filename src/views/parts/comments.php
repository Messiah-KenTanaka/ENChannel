<!-- コメント一覧 -->
<div>
  <table class="table table-striped">
    <tbody>
      <?php foreach ($comments as $comment) : ?>
        <tr>
          <td>
            <!-- レスポンシブなレイアウトのためにFlexboxを使用 -->
            <div class="d-flex flex-column flex-md-row justify-content-between">
              <div>
                <span>ニックネーム：
                  <span class="text-success">
                    <?= h($comment['user_name']) ?>
                  </span>
                </span>
                <!-- スマートフォン表示用の日付 -->
                <div class="d-md-none text-end">
                  <i class="bi bi-clock-history"></i>
                  <?= date('Y年m月d日 H:i', strtotime($comment['created_at'])) ?>
                </div>
              </div>
              <!-- デスクトップ表示用の日付 -->
              <span class="d-none d-md-block text-end">
                <i class="bi bi-clock-history"></i>
                <?= date('Y年m月d日 H:i', strtotime($comment['created_at'])) ?>
              </span>
            </div>
            <p class="text-break mt-2"><?= h($comment['comment']) ?></p>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <!-- ページネーションリンクの追加 -->
  <!-- <nav aria-label="Page navigation" class="mt-4">
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
          echo '<li class="page-item' . ($i == $page ? ' active' : '') . '"><a class="page-link" href="?commentPage=' . $i . '">' . $i . '</a></li>';
        } else {
          // 現在のページの前後の範囲外で、まだ省略記号を表示していなければ表示する
          if (!$showDots) {
            $showDots = true;
          }
        }
      }
      ?>
    </ul>
  </nav> -->

</div>