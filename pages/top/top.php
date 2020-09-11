<section>
	<h1 class="smon-section">ページ一覧</h1>
	<ul>
		<?php
			foreach ($pages_hash as $i => $v) {
				if (!isset($v['hidden']) || !$v['hidden']) {
					echo '<li><a href="?page=' , $i , '">' , $v['title'] , '</a></li>';
				}
			}
		?>
	</ul>
</section>
