<!-- スレッドを立ち上げる -->
<div class="container my-3 p-3 bg-success-subtle">
  <h2>スレッドを立ち上げる</h2>
  <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
    <div class="mb-3">
      <input type="text" class="form-control" id="title" name="title" placeholder="スレッド名を入力..." minlength="0" maxlength="128" required>
    </div>
    <button type="submit" class="btn btn-success">立ち上げ</button>
  </form>
</div>