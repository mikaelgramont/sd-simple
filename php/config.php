<?php
define('ANALYTICS_ID', 'UA-84394442-1');
define('APP_ID', '1726273124340058');
define('SITE_NAME', 'Surfing Dirt');
define('KEYWORDS', 'mountainboarding, allterrainboarding, dirtboarding');

function wmcMeta() {
	ob_start();
	?>
		<meta property="og:title" content="The 2017 World Mountainboard Championships"/>
		<meta property="og:description" content="When was the last time you attended both the World Freestyle Championship and World Boardercross Championship? Hmm? Can’t remember? That’s not surprising, that never happened!"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"/>
		<meta property="og:site_name" content="Surfing Dirt"/>
		<meta property="og:image" content="<?php echo BASE_URL ?>images/wmc17/cover-freestyle.jpg"/>
		<meta property="fb:app_id" content="<?php echo APP_ID ?>"/>
	<?php
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}
function wfc2019Meta() {
	ob_start();
	?>
		<meta property="og:title" content="The 2019 World Freestyle Championship"/>
		<meta property="og:description" content="A collection of photos from the WFC 2019 in Moszczenica, Poland"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"/>
		<meta property="og:site_name" content="Surfing Dirt"/>
		<meta property="og:image" content="<?php echo BASE_URL ?>images/wfc2019/og.png"/>
		<meta property="fb:app_id" content="<?php echo APP_ID ?>"/>
	<?php
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}

function homeMeta() {
	ob_start();
	?>
		<meta property="og:title" content="Surfing Dirt - we'll see you soon"/>
		<meta property="og:description" content="We need a place for mountainboarders to come together online and grow as a community again. Surfing Dirt hopes to solve that problem." />
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"/>
		<meta property="og:site_name" content="Surfing Dirt"/>
		<meta property="og:image" content="<?php echo BASE_URL ?>images/home/og.png"/>
		<meta property="fb:app_id" content="<?php echo APP_ID ?>"/>
	<?php
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}

function newYear2018Meta() {
	ob_start();
	?>
		<meta property="og:title" content="2018 is upon us. What to expect."/>
		<meta property="og:description" content="Other riders' resolutions, and the plan for Surfing Dirt in 2018."/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"/>
		<meta property="og:site_name" content="Surfing Dirt"/>
		<meta property="og:image" content="<?php echo BASE_URL ?>images/2018/cover.jpg"/>
		<meta property="fb:app_id" content="<?php echo APP_ID ?>"/>
	<?php
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}

function trucksMeta() {
	ob_start();
	?>
		<meta property="og:title" content="Looking for some mountainboarding trucks?"/>
		<meta property="og:description" content="SurfingDirt has a bunch of Mountainboard trucks for sale. Read up!"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"/>
		<meta property="og:site_name" content="Surfing Dirt"/>
		<meta property="og:image" content="<?php echo BASE_URL ?>images/trucks/1-medium.jpg"/>
		<meta property="fb:app_id" content="<?php echo APP_ID ?>"/>
	<?php
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}

$MENU_ENTRIES = array(
	(object) [
		'title' => 'Home page',
		'url' => '',
		'file' => 'home.php',
		'meta' => homeMeta()
	],
	(object) [
		'skipMenuEntry' => true,
		'title' => 'World Championships 2017',
		'url' => 'wmc-2017',
		'file' => 'worlds2017.php',
		'meta' => wmcMeta()
	],
	(object) [
		'skipMenuEntry' => true,
		'title' => 'World Freestyle Championship 2019',
		'url' => '28162f02-87bc-4456-9062-0ded5850e814',
		'file' => 'wfc2019.php',
		'meta' => wfc2019Meta()
	],
	(object) [
		'skipMenuEntry' => true,
		'title' => '2018 resolutions',
		'url' => '2018-resolutions',
		'file' => '2018-resolutions.php',
		'meta' => newYear2018Meta()
	],
	(object) [
		'skipMenuEntry' => true,
		'title' => 'Looking for some trucks?',
		'url' => 'trucks',
		'file' => 'trucks.php',
		'meta' => trucksMeta()
	],
);