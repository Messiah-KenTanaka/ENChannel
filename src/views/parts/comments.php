<!-- コメント一覧 -->
<div>
  <table class="table table-striped">
    <tbody>
      <?php foreach ($comments as $comment) : ?>
        <tr>
          <td>
            <div class="d-flex justify-content-between">
              <span>ニックネーム：
                <span class="text-success">
                  <?= h($comment['user_name']) ?>
                </span>
              </span>
              <span class="text-end"><?= date('Y年m月d日 H:i', strtotime($comment['created_at'])) ?></span>
            </div>
            <p><?= h($comment['comment']) ?></p>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>