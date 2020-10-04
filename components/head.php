<?php
function print_head($json) {
	if (isset($json['title'])) {
		$title = $json['title'];
	} else {
		$title = 'AAAR Salmon';
	}
	$url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	if (isset($json['image'])) {
		$image = $json['image'];
	} else {
		$image = 'http://aarsalmon.starfree.jp/resources/logo.png';
	}
	if (isset($json['description'])) {
		$description = $json['description'];
	} else {
		$description = 'しがない学生、終に鮭 (@AAAR_Salmon) のホームページです';
	}
	echo<<<EOD
	<title>{$title}</title>
	<meta property="og:title" content="{$title}">
	<meta property="og:type" content="article">
	<meta property="og:url" content="{$url}">
	<meta property="og:image" content="{$image}">
	<meta property="og:site_name" content="AAAR_Salmon">
	<meta property="og:description" content="{$description}">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@AAAR_Salmon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="icon" href="/favicon.ico">
	<script type="text/javascript" src="/js/numbering.js"></script>
	<script type="text/javascript" src="/js/custom_elements.js"></script>
	<!-- <script type="text/javascript" src="/js/zoomimg.js"></script> -->
	EOD;
}
?>
