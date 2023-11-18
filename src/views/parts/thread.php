		<!-- スレッド -->
		<div class="container">
			<div class="card bg-light">
				<div class="card-body">
					<h3 class="card-title"><?= h($thread['title']) ?></h3>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<div>
								<i class="bi bi-chat-dots"></i>
								<small><?= $thread['comment_count'] ?>件</small>
							</div>
							<!-- <button type="button" class="btn btn-sm btn-outline-secondary">表示</button> -->
							<!-- <button type="button" class="btn btn-sm btn-outline-secondary">編集</button> -->
						</div>
						<small class="text-muted">投稿日：<?= date('Y年m月d日 H:i', strtotime($thread['created_at'])) ?></small>
					</div>
				</div>
			</div>
		</div>