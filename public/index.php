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
	</head>
	<body>
		<div class="wrapper">
			<header>
				<div class="logo-container">
					<a href="<?php echo BASE_URL ?>" aria-label="Surfing Dirt logo">
						<img class="logo" alt="" src="<?php echo BASE_URL ?>images/logo.png">
						<img class="title" alt="" src="<?php echo BASE_URL ?>images/title.png">
					</a>
				</div>
				<ul role="nav" class="navigation-menu">
<?php echo Header::menuContent($MENU_ENTRIES, $currentPageId) ?>
				</ul>
				<a aria-hidden="true" class="banner" href="<?php echo BASE_URL ?>">
				</a>
			</header>
			<main role="main" class="main">
				<section>
<?php echo Content::getPageContent($pageInfo); ?>
				</section>
			</main>
		</div>
<?php echo Utils::analytics(ANALYTICS_ID); ?>
	</body>
</html>