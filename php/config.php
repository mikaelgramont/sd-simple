<?php
define('ANALYTICS_ID', 'UA-84394442-1');
define('APP_ID', '1726273124340058');
define('SITE_NAME', 'Surfing Dirt');
define('KEYWORDS', 'mountainboarding, allterrainboarding, dirtboarding');

function wmcMeta() {
	ob_start();
	?>
		<meta property="og:title" content="The 2017 World Mountainboard Championships"/>
		<meta property="og:description" content="A quick recap of what went down at the WMC17."/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"/>
		<meta property="og:site_name" content="Surfing Dirt"/>
		<meta property="og:image" content="<?php echo BASE_URL ?>images/wmc17/cover-freestyle.jpg"/>
		<meta property="fb:app_id" content="<?php echo APP_ID ?> "/>
	<?php
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}

$MENU_ENTRIES = array(
	(object) [
		'title' => '',
		'url' => '',
		'file' => 'home.php'
	],
	(object) [
		'skipMenuEntry' => true,
		'title' => 'World Championships 2017',
		'url' => 'wmc-2017',
		'file' => 'worlds2017.php',
		'meta' => wmcMeta()
	],
);