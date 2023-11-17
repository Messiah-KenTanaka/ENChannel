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
</div>
