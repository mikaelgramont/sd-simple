<style>
	/* Header */
	.top-header {
		display: flex;
	    width: 100%;
	    max-width: 800px;
	    margin: 0 auto;
	    align-content: space-between;
	    align-items: center;		
	}
	.logo-container {
		text-align: center;
	}
	.logo {
		width: 60px;
	}
	.title {
		width: 258px;
	}
	.header-links {
		flex-grow: 1;
		text-align: right;
	}
	.wrapper {
		width: 100%;
		max-width: 1024px;
		padding: 0 1em;
		margin: 0 auto;
	}
	.content {
		max-width: 640px;
		margin: 0 auto;
	}
	.button, .button:visited {
		display: block;
		padding: 1em;
		margin: 0 auto;
		width: 100px;
		background: #2a8fc0;
		color: #fff;
		border-radius: 8px;
		text-decoration: none;
	}

</style>
<div class="wrapper">
	<header class="top-header">
		<div class="logo-container">
			<a href="<?php echo BASE_URL ?>" aria-label="Surfing Dirt logo"><img class="logo" alt="" src="<?php echo BASE_URL ?>images/logo.png"></a>
			<a href="<?php echo BASE_URL ?>" aria-label="Surfing Dirt logo" aria-hidden="true"><img class="title" alt="" src="<?php echo BASE_URL ?>images/title.png"></a>
		</div>
		<div class="header-links">
			<a href="<?php echo BASE_URL ?>">About</a>
		</div>
	</header>
	<main role="main" class="main">
		<section class="content">
			<h1>So you're looking for spring trucks.</h1>
			<p>As you probably know, it's been getting harder to find spring trucks over the past few years. So we made some.</p>
			<p>Let's not lie, they're replicas of old models that were on the market until about two years ago. We found a manufacturer, and had a bunch made so that you and I can get riding again.</p>

			<div class="fb-like" data-href="<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>			

			<article>
				<h1>What are we talking about exactly?</h1>
				<p>These are black aluminum trucks with red plastic top trucks. They're fully compatible with the old MBS MAtrix Lites. They can take MBS wheels without a problem. The eggs are black, and probably equivalent to MBS reds.</p>
					<img srcset="<?php echo BASE_URL ?>images/trucks/1-small.jpg 480w"
					     sizes="(max-width: 480px) 400px, 640px"
					     src="<?php echo BASE_URL ?>images/trucks/1-medium.jpg" alt="Trucks">
   				<p>
				<h1>How much?</h1>
				<p>The trucks go for 80 euros each. With each order of two full trucks, we'll throw in an extra plastic top trucks.</p>
				<p>To show support for the community, clubs and female riders get 10% off (72 euros each).</p>
				<h1>Where?</h1>
				<p>We'll be bringing trucks to the World Championship in Kranj, Slovenia, so please fill out the preorder form and we'll make sure you can get your hands on them there:</p>
				<a class="button" href="https://docs.google.com/forms/d/e/1FAIpQLSeT2J2tHs4eDllemHkxji4bIAvnip2zYMlNs4hOydCcdXzflQ/viewform">Preorder</a>
				<p>Payment in cash only, on site.</p>
				<h1>Can I order online?</h1>
				<p>Not yet, but feel free to <a href="https://docs.google.com/forms/d/e/1FAIpQLSeT2J2tHs4eDllemHkxji4bIAvnip2zYMlNs4hOydCcdXzflQ/viewform">fill out the form and indicate that you're interested</a>, and we'll get back to you after the event!</p>
			</article>
		</section>
	</main>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=<?php echo APP_ID ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

