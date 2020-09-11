<!DOCTYPE html>
<html lang="ja">

<head prefix="og: https://ogp.me/ns#">
	<meta charset="utf-8">
	<?php
		$url = 'pages/pages.json';
		$json = file_get_contents($url);
		$pages_hash = json_decode($json, true);
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			if (!isset($pages_hash[$page])) {
				http_response_code(404);
				$page = '404';
			}
		} else {
			$page = 'top';
		}
		include 'components/head.php';
		print_head($pages_hash[$page]);
	?>
</head>

<body>
	<?php include 'components/header.php'; ?>
	<div id="content-holder">
		<?php
			include 'components/top.php';
			include 'components/notice.php';
			include 'pages/' . $pages_hash[$page]['path'];
			if ($page !== 'top') {
				echo '<p><a href="/">&lt;&lt; トップへ戻る</a></p>';
			}
		?>
	</div>
	<?php include 'components/footer.php'; ?>
</body>

</html>
