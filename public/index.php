<?php
set_include_path(__DIR__.'/../php');
require_once('config.php');
require_once('content.php');
require_once('footer.php');
require_once('head.php');
require_once('header.php');
require_once('utils.php');
define('BASE_URL', Utils::getBaseUrl());
$currentPageId = Utils::getCurrentPageId($_SERVER['REQUEST_URI']);
$pageInfo = Utils::getPageInfo($MENU_ENTRIES, $currentPageId);
?>
<html>
	<head>
<?php echo Head::content(KEYWORDS, $pageInfo, 'css/style.css'); ?>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	</head>
	<body>
<?php echo Content::getPageContent($pageInfo); ?>
<?php echo Utils::analytics(ANALYTICS_ID); ?>
	</body>
</html>