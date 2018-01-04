<style>
	/* Header */
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

	.quotes,
	.quotes li {
		display: block;
		margin: 0;
		padding: 0;
	}

	blockquote{
	  display:block;
	  background: #fff;
	  padding: 15px 20px 15px 45px;
	  margin: 0 0 20px;
	  position: relative;
	  
	  /*Font*/
	  font-family: Georgia, serif;
	  font-size: 14px;
	  line-height: 1.2;
	  color: #666;

	  /*Box Shadow - (Optional)*/
	  -moz-box-shadow: 2px 2px 15px #ccc;
	  -webkit-box-shadow: 2px 2px 15px #ccc;
	  box-shadow: 2px 2px 15px #ccc;

	  /*Borders - (Optional)*/
	  border-left-style: solid;
	  border-left-width: 15px;
	  border-right-style: solid;
	  border-right-width: 2px;    
	}

	blockquote::before{
	  content: "\201C"; /*Unicode for Left Double Quote*/
	  
	  /*Font*/
	  font-family: Georgia, serif;
	  font-size: 60px;
	  font-weight: bold;
	  color: #999;
	  
	  /*Positioning*/
	  position: absolute;
	  left: 10px;
	  top:5px;
	  
	}

	blockquote::after{
	  /*Reset to make sure*/
	  content: "";
	}

	blockquote em{
	  font-style: italic;
	}

	/* Colors from https://codepen.io/iPawan/pen/emrPKP */

	/*Default Color Palette*/
	blockquote.default{ 
	  border-left-color: #656d77;
	  border-right-color: #434a53;  
	}

	/*Grass Color Palette*/
	blockquote.dirt{
	  border-left-color: #775c34;
	  border-right-color: #c5ae8c;
	}

	.quotes {
		padding: 1em;
	}

	.name {
		display: block;
		margin-top: .5em;
		text-align: right;
		font-weight: bold;
	}
	.validate {
		width: 320px;
    	margin: 0 auto;
	}
	.mc-field-group {
		margin: 0 0 1em;
		width: 320px;
	}
	.mc-field-group > * {
		display: block;
		width: 100%;
	}
	.mc-field-group input {
		height: 1.75em;
		font-size: 1em;
		padding: .25em;
		min-width: 40px;
	}
	.submit {
		background: #2a8fc0;
		color: #fff;
		border: 0;
		padding: 1em;
		font-size: 14px;
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
			<h1>It's that time of year again.</h1>
			<p>Like, the beginning. You know, when everyone goes from celebrating Xmas/Hanukkah/the winter holiday to cheering for the new year and asking you about your resolutions. And of course you usually don't have any.</p>
			<p>So let's see what some people had to say, maybe you'll find some inspiration!</p>

			<article>
				<h1>Rider resolutions for 2018</h1>
				<p>We put up a short survey to see what people were thinking, here are the results.</p>
				<ul class="quotes">
					<li>
						<blockquote class="dirt">
							Get out more, build confidence, have fun and hopefully not break anything.
							<span class="name">Annabel Owens</span>
						</blockquote>
					</li>
					<li>
						<blockquote class="dirt">
							To ride more of course.
							<span class="name">Jim Vujtech</span>
						</blockquote>
					</li>
					<li>
						<blockquote class="dirt">
							Rehab my knee injury and hopefully get back into the Sport this autumn. I want to keep it fun and don't stress myself too much about contests.<br>
							<br>
							Keep the stoke.<br>
							Keep it fun.<br>
							Keep it up.
							<span class="name">Phil</span>
						</blockquote>
					</li>
					<li>
						<blockquote class="dirt">
							Cut my snowboard in half :) turn the mountings 90 degrees :) and go Surfing Dirt behind my horses :)
							<span class="name">Pigyd Horseboarding</span>
						</blockquote>
					</li>
					<li>
						<blockquote class="dirt">
							Put together the deck I bought 6 months ago with my new bindings and go make some turns! I also generally want to to do all those wheelieboard things I said I'd do in 2017 but didn't get around to :-D
							<span class="name">Dan W</span>
						</blockquote>
					</li>
					<li>
						<blockquote class="dirt">
							Attend The 3rd Annual Shred Fest NW "The Crystal Mountain Classic" at Crystal mtn Washington July 19-21 and rip and camp and party like a twisted freeride junkie.
							<span class="name">Alex Robot Dinosaur Rossiter</span>
						</blockquote>
					</li>
					<li>
						<blockquote class="dirt">
							Simply put...ride more. Have a stronger focus on free-riding while not losing focus of my freestyle roots. Throw at least one 720 in 2018.<br>
							<br>
							Make a stronger push with Colab and create some fun content.
							<span class="name">Kody Stewart</span>
						</blockquote>
					</li>
					<li>
						<blockquote class="dirt">
							Ride more!
							<span class="name">Matt Brind</span>
						</blockquote>
					</li>
					<li>
						<blockquote class="dirt">
							Organize nice riders meeting event - 10 years of Bukovac. You are all welcome on September 1st.
							<span class="name">Predrag Marcikić</span>
						</blockquote>
					</li>
					<li>
						<blockquote class="dirt">
							Come out of semi retirement and race again at international level.
							<span class="name">Mad Matt Gaydon</span>
						</blockquote>
					</li>
					<li>
						<blockquote class="dirt">
							...work on a couple of tricks I never took time to learn.<br>
							Fix some of those I can't do properly.<br>
							Learn a couple new ones I'm excited about.
							<span class="name">Mikael Gramont</span>
						</blockquote>
					</li>
				</ul>

				<p>There's a pattern here. People feel like they're not riding enough. So if we're going to give any advice, it's probably going to be this: <b>make time for more mountainboarding!</b></p>
			</article>

			<article>
				<h1>Surfing Dirt's 2018 resolutions</h1>
				<p>We at Surfing Dirt have high hopes and an inflated ambition for 2018.<br>
				The long-term goal is to build a full-fledged social network for mountainboarding, supporting and connecting individuals, clubs and events. That's a lot of work though, for this year we'll focus on releasing a limited version with at least:</p>
				<ul class="sd-res">
					<li>rider profiles</li>
					<li>photo and video posting</li>
					<li>places to ride</li>
				</ul>

				<p>So if you're interested, sign-up for our newsletter, and we'll let you know about updates ahead of time! Think beta-testing and stuff :)</p>

				<p>Happy 2018!</p>

		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
			<form action="//surfingdirt.us16.list-manage.com/subscribe/post?u=9fec4c3436956eb6a87fee575&amp;id=5f4cbf0663" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div class="mc-field-group">
					<label for="mce-EMAIL">Email Address (required)</label>
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>
				<div class="mc-field-group">
					<label for="mce-FNAME">First Name </label>
					<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
				</div>
				<div class="mc-field-group">
					<label for="mce-LNAME">Last Name </label>
					<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
				</div>
				<div class="mc-field-group size1of2">
					<label for="mce-BIRTHDAY-month">Birthday</label>
					<div class="datefield">
						<span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> / 
						<span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span> 
						<span class="small-meta nowrap">( mm / dd )</span>
					</div>
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9fec4c3436956eb6a87fee575_5f4cbf0663" tabindex="-1" value=""></div>
				<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="submit"></div>
			</div>
			</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
		<script type='text/javascript'>
			(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);
		</script>
		<!--End mc_embed_signup-->	
				
			</article>
		</section>
	</main>
</div>
