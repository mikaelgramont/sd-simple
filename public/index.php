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
	var lightBoxOpen = false;
	var galleryMembers = [];
	var currentGalleryIndex = null;

    function on(elSelector, eventName, selector, fn) {
        var element = document.querySelector(elSelector);
        if (!element) {
            return;
        }
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

    function displayImage(imageEl) {
    	var url = imageEl.getAttribute('data-image') || imageEl.getAttribute('src');
    	if (!url) {
    		throw new Error('No url to display for imageEl');
    	}
        var lbc = document.getElementById('lightbox-content');
        var img = document.createElement('img');
        img.setAttribute('src', url);
        if (lightBoxOpen) {
	        lbc.innerHTML = '';
        }
        lbc.appendChild(img);
        document.body.classList.add('lightbox-visible');
        lightBoxOpen = true;
    }
    function closeLightBox() {
    	if (!lightBoxOpen) {
    		return;
    	}
        var lbc = document.getElementById('lightbox-content');
        lbc.innerHTML = '';
    	document.body.classList.remove('lightbox-visible');
    	galleryMembers.length = 0;
    	currentGalleryIndex = null;
    	lightBoxOpen = false;
    }

    on('.content', 'click', '.thumb-gallery .image', function(e) {
    	galleryMembers = e.target.parentNode.parentNode.querySelectorAll('.thumb-gallery .image');
    	for (var i = 0; i < galleryMembers.length; i++) {
    		if (galleryMembers[i] == e.target) {
    			currentGalleryIndex = i;
    			break;
    		}
    	}
  		displayImage(e.target);
    });
    on('.content', 'click', '.mosaic .image', function(e) {
   		displayImage(e.target);
    });
    document.body.addEventListener('keyup', function(e){
    	if (!lightBoxOpen) {
    		return;
    	}
    	if (e.keyCode == 37) {
    		// Left
    		var prevIndex = currentGalleryIndex - 1;
    		if (prevIndex >= 0) {
    			currentGalleryIndex = prevIndex;
    			displayImage(galleryMembers[currentGalleryIndex]);
    		}
    	}
    	if (e.keyCode == 39) {
    		// Right
    		var nextIndex = currentGalleryIndex + 1;
    		if (nextIndex < galleryMembers.length) {
    			currentGalleryIndex = nextIndex;
    			displayImage(galleryMembers[currentGalleryIndex]);
    		}
    	}
    	if (e.keyCode == 27) {
    		// ESC
    		e.preventDefault();
    		closeLightBox();
    	}
    });
    document.getElementById('lightbox-close').addEventListener('click', closeLightBox);
    document.getElementById('lightbox-wrapper').addEventListener('click', closeLightBox);
</script>		
	</body>
</html>