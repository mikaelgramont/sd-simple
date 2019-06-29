<style>
	@font-face{
	  font-family: 'Bungee';
	  font-weight: 400;
	  src: url(<?php echo BASE_URL?>fonts/Bungee.ttf);
	  font-display: swap;
	}	
	@font-face{
	  font-family: 'Boton';
	  font-weight: 400;
	  src: url(<?php echo BASE_URL?>fonts/BotonRoman.ttf);
	  font-display: swap;
	}	
	@font-face{
	  font-family: 'Boton';
	  font-weight: 700;
	  src: url(<?php echo BASE_URL?>fonts/BotonMedium.otf);
	  font-display: swap;
	}

	h1, h2 {
		font-family: Bungee, Roboto, Helvetica;
	}
	p {
		font-family: Boton, Roboto, Helvetica;	
		line-height: 1.5rem;	
	}
	section p:first-child {
		margin-top: 0;
	}
	section p:last-child {
		margin-bottom: 0;
	}
	section {
		text-align: justify;
	}

	.wrapper {
	}
	.main {
		display: flex;
		flex-direction: column;
		margin: 0 20px;
	}
	.title {
		order: 3;
	}
	.header {
		text-align: center;
	}
	.logo {
		width: 50%;
	}
	.section1 {
		order: 1;
	}
	.section2 {
		order: 2;
	}
	@supports (display: grid) {
		@media (min-width: 641px) {
			.wrapper {
				display: grid;
				margin: 20px auto;
				padding: 0 20px;
				max-width: 1440px;
				grid-template-columns: repeat(8, 1fr);
				column-gap: 40px;
				grid-template-rows: repeat(4, auto);
				height: calc(100vh - 40px);
			}
			.main {
				display: contents;
			}
			.title {
				grid-area: 1/4/5/4;
				writing-mode: sideways-lr;
				font-size: 8vh;
				margin: 0;
				justify-self: center;
				white-space: nowrap;
			}
			.header {
				grid-area: 1/5/1/8;
				text-align: center;
			}
			.logo {
				width: auto;
			}
			.section1 {
				grid-area: 1/1/3/4;
			}
			.section2 {
				grid-area: 2/5/5/8;
				align-self: end;
			}
		}
	}
</style>
<div class="wrapper">
	<header class="header">
		<h1>
			<img class="logo" src="<?php echo BASE_URL?>images/home/logo.png" alt="Surfing Dirt" />
		</h1>
	</header>
	<main role="main" class="main">
		<h2 class="title">We'll see you soon!</h2>
		
		<section class="section1">
			<p>Remember before Facebook? There were so many resources for mountainboarding online. Forums, websites, photo galleries… Where are those now? The sad answer is they’re mostly gone. Facebook has made it so easy to post photos and videos and share them that people slowly stopped using other sites. That’s actually what happened to <a href="<?php echo BASE_URL?>forum">the old Surfing Dirt forum</a>!</p>

			<p>When you meet someone who seems genuinely excited to try mountainboarding, where do you send them? To a Facebook group, maybe? Sure there are many mountainboard groups on Facebook, and a lot of people use them. But they feel wrong. We need a place for mountainboarders to come together online and grow as a community again.</p>

			<p>Surfing Dirt hopes to solve that problem. We intend to be the social network for mountainboarders. The place where you’ll share photos and videos from your last session. Where you’ll learn about riders and spots near you. Where you’ll discuss trucks and jumps. And where people can see what mountainboarding is about.</p>
		</section>

		<section class="section2">
			<p>For those of you who attended the <a href="<?php echo BASE_URL?>wmc-2017">2017 World Champs in Compiègne</a>, you may remember stickers that were passed around announcing our comeback in… 2018.</p>

			<p>Looks like we’re a little late! Well, to tell you the truth, we aren’t quite ready to launch yet, but we’re definitely launching this year! We’ll start small and build up until mountainboarders across the world have an online home again.</p>

			<p>Also, that logo’s gone now! Thanks to <a href="https://highmountaincreative.com/" target="_blank">High Mountain Creative</a>, we’ll be using the shiny new logo you can see above, what a treat!</p>
		</section>
	</main>
</div>
