<?php
set_include_path(__DIR__.'/../php');
require_once('utils.php');
define('BASE_URL', Utils::getBaseUrl());

require_once('config.php');
require_once('content.php');
require_once('footer.php');
require_once('head.php');
require_once('header.php');
$currentPageId = Utils::getCurrentPageId($_SERVER['REQUEST_URI']);
$pageInfo = Utils::getPageInfo($MENU_ENTRIES, $currentPageId);
?>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<?php echo Head::content(KEYWORDS, $pageInfo, 'css/style.css'); ?>
<?php
	if (isset($pageInfo->meta)) {
		echo $pageInfo->meta;
	}
?>
	</head>
	<body>
	<script>
		if( /iPhone/i.test(navigator.userAgent) ) {
			document.body.classList.add('iphone');
		}
	</script>

<?php echo Content::getPageContent($pageInfo); ?>
<?php echo Utils::analytics(ANALYTICS_ID); ?>
		<div id="lightbox-bg" class="lightbox-bg"></div>
		<div id="lightbox-wrapper" class="lightbox-wrapper">
			<div id="lightbox-content" class="lightbox-content"></div>
			<div id="lightbox-close" class="lightbox-close" role="button" aria-label="Close the image">X</div>
		</div>
<script>
    function on(elSelector, eventName, selector, fn) {
        var element = document.querySelector(elSelector);

        element.addEventListener(eventName, function(event) {
            var possibleTargets = element.querySelectorAll(selector);
            var target = event.target;

            for (var i = 0, l = possibleTargets.length; i < l; i++) {
                var el = target;
                var p = possibleTargets[i];

                while(el && el !== element) {
                    if (el === p) {
                        return fn.call(p, event);
                    }

                    el = el.parentNode;
                }
            }
        });
    }

    function displayImage(url) {
        var lbc = document.getElementById('lightbox-content');
        var img = document.createElement('img');
        img.setAttribute('src', url);
        lbc.appendChild(img);
        document.body.classList.add('lightbox-visible');
    }
    function closeLightBox() {
        var lbc = document.getElementById('lightbox-content');
        lbc.innerHTML = '';
    	document.body.classList.remove('lightbox-visible');
    }

    on('.content', 'click', '.thumb-gallery .image', function(e) {
    	if (e.target.getAttribute('data-image')) {
    		displayImage(e.target.getAttribute('data-image'));
    	}
    });
    on('.content', 'click', '.mosaic .image', function(e) {
   		displayImage(e.target.getAttribute('src'));
    });
    document.body.addEventListener('keyup', function(e){
    	if (e.keyCode == 27) {
    		e.preventDefault();
    		closeLightBox();
    	}
    });
    document.getElementById('lightbox-close').addEventListener('click', closeLightBox);
    document.getElementById('lightbox-wrapper').addEventListener('click', closeLightBox);
</script>		
	</body>
</html>