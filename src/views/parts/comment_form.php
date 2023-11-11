<!-- コメント投稿 -->
<div class="container my-3 p-3 bg-warning-subtle">
  <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
    <div class="row mb-2">
      <div class="col">
        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="ニックネーム" minlength="0" maxlength="16">
        <input type="hidden" name="thread_id" value="<?php echo $thread['id'] ?>">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-warning">書き込む</button>
      </div>
    </div>
    <textarea class="form-control" id="comment" name="comment" placeholder="コメント..." minlength="0" maxlength="500" required rows="3"></textarea>
  </form>
</div>