<!-- エラー内容表示 -->
<?php if (!empty($error_msg)) { ?>
  <div class="bg-danger text-white p-3 rounded">
    <?php echo $error_msg; ?>
  </div>
<?php } ?>