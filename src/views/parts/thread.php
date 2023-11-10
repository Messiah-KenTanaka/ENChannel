		<!-- スレッド -->
		<div class="container my-3">
			<div class="card bg-light">
				<div class="card-body">
					<h3 class="card-title"><?= h($thread['title']) ?></h3>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<!-- <button type="button" class="btn btn-sm btn-outline-secondary">表示</button> -->
							<!-- <button type="button" class="btn btn-sm btn-outline-secondary">編集</button> -->
						</div>
						<small class="text-muted">投稿日：<?= date('Y年m月d日 H:i', strtotime($thread['created_at'])) ?></small>
					</div>
				</div>
			</div>
		</div>