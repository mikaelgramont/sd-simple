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
	.content {
		width: 100%;
		max-width: 1024px;
		padding: 0 1em;
		margin: 0 auto;
	}
	.cover {
		width: 100%;
		height: 0;
		padding-bottom: 56.25%;
		margin-bottom: 1em;
		position: relative;
		color: #eee;
		background: url('images/wmc17/cover-freestyle.jpg') #000;
		background-size: cover;
	}
	.cover-title-wrapper {
		position: absolute;
		bottom: 0;
		width: 100%;
		padding: 1em;
		background: linear-gradient(to top, #000000 0%, rgba(0,0,0,.5) 80%, rgba(0,0,0,0) 100%);
	}
	.cover-title {
		width: 100%;
		max-width: 800px;
	}
	.title-and-like-container {
	    display: flex;
	    width: 800px;
	    margin: 0 auto;
	}
	.fb-like {
		width: 80px;
		text-align: right;
		margin-top: 30px;
	}
	.fb-comments {
		display: block;
		width: 800px;
		margin: 0 auto;
		background-color: #fff;
	}
	.video-embed,
	.vrview-wrapper {
		width: 100%;
		height: 0;
		position: relative;
	}
	.video-embed {
		padding-bottom: 56.25%;
	}
	.vrview-wrapper {
		padding-top: 56.25%;
		margin-bottom: 2em;
	}
	.vrview {
		border: 0;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
	}
	h1,
	h2 {
		width: 800px;
		margin-left: auto;
		margin-right: auto;
		margin-top: 1em;
		margin-bottom: .5em;
	}
	.title-metadata {
		font-size: .5em;
		font-weight: normal;
		display: inline-block;
    	vertical-align: middle;
	}
	.title-metadata::before {
		content: " - ";
	}
	.text {
		max-width: 800px;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 1em;
		margin-top: 0;
		text-align: justify;
		line-height: 1.3em;
	}
	.introduction {
		font-style: italic;
	}
	figure {
		margin: 1em 0;
		text-align: center;
	}
	.mosaic figure {
		margin: 0;
		padding: 10px;
	}
	figcaption {
		margin-top: .5em;
		font-size: .75em;
	}
	.image {
		max-width: 100%;
	}

	.mosaic {
		display: grid;
	}
	.mosaic-1-1 {
		grid-template-columns: 50%;
	}
	.mosaic-1-1 .a {
		grid-column: 1;
	}
	.mosaic-1-1 .b {
		grid-column: 2;
	}

	.mosaic-2-1-1,
	.mosaic-1-1-2 {
		grid-template-columns: 50%;
  		grid-template-rows: 50%;
	}

	.mosaic-2-1-1 .a {
		grid-row: 1 / span 2;
	}
	.mosaic-2-1-1 .b {
		grid-row: 1;
	}
	.mosaic-2-1-1 .c {
		grid-row: 2;
	}

	.mosaic-1-1-2 .a {
		grid-row: 1;
	}
	.mosaic-1-1-2 .b {
		grid-row: 2;
	}
	.mosaic-1-1-2 .c {
		grid-row: 1 / span 2;
	}
	.thumb-gallery {
		padding: 0;
	}
	.thumb-gallery li {
	    display: inline-block;
	    margin: .3em;
	}
	.thumb-gallery li:hover,
	.mosaic .image:hover {
		cursor: pointer;
	}
	@media(max-width: 640px) {
		.top-header {
			display: block;
		}
		.cover {
			width: 100%;
			height: initial;
			padding-bottom: 0;
			background: #000;
		}
		.cover-title-wrapper {
			position: initial;
		}
		h1,
		h2 {
			width: auto;
		}
		.title-metadata {
			display: block;
		}
		.title-metadata::before {
			display: none;
		}
		.mosaic {
			display: block;
		}
		.mosaic figure {
			margin: initial;
			margin-bottom: 1em;
			padding: initial;
		}
		.title-and-like-container {
			display: block;
			width: initial;
		}
		.thumb-gallery li {
		    display: block;
		    margin: 1em auto;
		    width: 150px;
		}
		.logo-container {
			margin: .5em 0;
		}
		.logo-container a {
			display: inline-block;
			vertical-align: middle;
		}
		.logo-container .title {
			width: 200px;
		}
		.header-links {
			display: none;
		}
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
				<section>


<div class="cover">
	<div class="cover-title-wrapper">
		<div class="title-and-like-container">
			<div>
				<h1 class="cover-title">
					The 2017 World Mountainboard Championships <span class="title-metadata">posted on July 23rd 2017 by <a href="https://www.mountainboard.fr/profil/mikael_1/">Mika</a></span>
				</h1>
				<p class="text introduction">
				When was the last time you attended both the World Freestyle Championship and World Boardercross Championship? Hmm? Can’t remember? That’s not surprising, that never happened.<br>
				On top of that, even though Serbia and Germany have hosted the World Boardercross Championship these past few years, there hasn’t been a World Freestyle Championship since 2012.<br>
				So everyone was super excited when the Compiegne (France) mountainboard club <a href="https://www.facebook.com/groups/102040336534623">AMC</a> decided to host both competitions in 2017, from July 13th to the 16th, for four days of mountainboarding goodness.<br>
				If you weren’t able to make it, here’s a little recap of what went down.
				</p>
			</div>
			<div class="fb-like" data-href="<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>			
		</div>
	</div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=<?php echo APP_ID ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="content">
	<h2>Where, when, who, what</h2>
	<p class="text">For those not familiar with the AMC, they started well over ten years ago, with <a href="https://www.mountainboard.fr/profil/seatoyen_416/">Ludovic Faure (Ludo)</a> at the helm the whole time, organising learn-to-rides and demonstrations in the Paris area, taking trips to mountainboard centers in the UK, and competing in French and foreign competitions.</p>

	<p class="text">In 2009, Ludo secured a location for a <a href="https://www.mountainboard.fr/spot-de-mountainboard/parc-du-bois-de-plaisance_948/">mountainboard park</a> in <a href="https://www.google.fr/maps/place/Venette/@49.4167123,2.7829709,325m/data=!3m1!1e3!4m5!3m4!1s0x47e7d6a3f5728fd9:0x81979f2f8b078e49!8m2!3d49.41595!4d2.800696?hl=en">Venette</a>, and the AMC built it up over the years, organising several competitions.<br>
	So when Ludo stepped up to have the AMC run Worlds this year, it was obvious they were not newcomers, and we were all hopeful for a smoothly-run event. And boy, did they deliver.
	</p>
	<p class="text">When the first riders showed up early that week, the park had just received a ton of rain. Luckily, carpets were covering the whole place, and after a day or two of drying, the place looked amazing (if I may say so myself, having been involved in the last-minute preparations!).</p>

	<div class="mosaic mosaic-2-1-1">
		<figure class="a">
			<img class="image" src="<?php echo BASE_URL?>images/wmc17/ludo.jpg" alt="" />
			<figcaption>If you pooped at the WMC17, you can thank Ludo.</figcaption>
		</figure>

		<figure class="b">
			<img class="image" src="<?php echo BASE_URL?>images/wmc17/ludo-flip.jpg" alt="" />
			<figcaption>Ludo at the 2006 WFCs in Bideford, England.</figcaption>
		</figure>

		<figure class="c">
			<img class="image" src="<?php echo BASE_URL?>images/wmc17/eiffel.jpg" alt="" />
			<figcaption>2005 mountainboard demo by the Eiffel tower</figcaption>
		</figure>
	</div>

	<h2>The Boardercross course</h2>
	<p class="text">The BX course had historically been a bit challenging because some parts of it were rather slow, so it wouldn’t work as-is for the World Championship. That concern was identified early though, and Ludo and his friend Ludwig redesigned it over the winter to fix the slow parts and extend the bottom section.
	What we ended up with was a pretty different course from the Novi Sad (Serbia) course which was very long and incredibly fast. This was a technical, medium-speed course, with three sections that were particularly challenging, even for the best of riders.</p>

	<p class="text">The very first feature after the gates, the Wu-Tang, is a common snowboard-cross feature. A quick jump with a very steep landing, the Wu-Tang forces riders to suck up their legs and aim to land as high as possible in order to maintain their speed. This made a lot of people very nervous before and during the competition. It was hard enough to ride on your own, so what would happen with four riders pulling as hard as they could on the start gates? Turns out, a few crashes, some a little scary, but not as bad as one might have guessed.</p>

	<p class="text">The first berm was big, wide... and pretty slippery. Here too a few spectacular crashes occurred, none of them bad though, but it made for some fun racing.</p>

	<p class="text">The rollers. The killer feature of the course. Where the Wu-Tang was a very technical single jump, this was a long section of 12 rollers set close enough to make pumping a challenge, separating the slow from the fast.</p>

	<div class="mosaic mosaic-2-1-1">
		<figure class="a">
			<img class="image" src="<?php echo BASE_URL?>images/wmc17/rollers.jpg" alt="" />
			<figcaption>Rollers all the way down.</figcaption>
		</figure>

		<figure class="b">
			<img class="image" src="<?php echo BASE_URL?>images/wmc17/wu-tang.jpg" alt="" />
			<figcaption>The very first feature threw a lot of people off.</figcaption>
		</figure>

		<figure class="c">
			<img class="image" src="<?php echo BASE_URL?>images/wmc17/berm1.jpg" alt="" />
			<figcaption>That was one slippery corner.</figcaption>
		</figure>
	</div>

	<h2>The Freestyle course</h2>
	<p class="text">Two main sections were open for freestyle.<br>
	The big line consisted of three jumps lined up, followed by a quarter-pipe. The first jump was rather small, with a table of about 2 meters (6ft), but the landing was steep and long and set you up for a high-speed jump off a 7-meter table (20ft), with one last 3-meter (10ft) jump set on flat, with the 4-meter (12ft) quarter-pipe behind it.</p>

	<figure class="vrview-wrapper">
		<iframe class="vrview" allowfullscreen="true" src="<?php echo BASE_URL?>vrview.html?image=<?php echo BASE_URL?>images/wmc17/view-from-the-first-berm.jpg"></iframe>
		<figcaption>360-degree view of the freestyle area.</figcaption>
	</figure>

	<p class="text">The smaller line was joy to see. The AMC has somehow been hoarding dozens of jumps, tables, wedges and rails from nearby skateparks, and kept them in their warehouse these past few years. For the competition, they arranged them all behind the “Bretonne” table-top jump and that made for some fun lines. They also had a beautiful hip jump but it was hard to link it with other features so people did not ride it much until after the competition.</p>

	<figure>
		<img class="image" src="<?php echo BASE_URL?>images/wmc17/freestyle.jpg" alt="" />
		<figcaption>The smaller line, looking like a million bucks.</figcaption>
	</figure>

	<p class="text">Oh and there was a foam pit as well. Few people used it though because everyone was so busy with the competition.</p>

	<h2>The people</h2>
	<p class="text">Over 20 different countries were represented with a total of around 120 competitors. At a time when <a href="http://www.remolition.com/long-live-mountainboarding/">mountainboarding is going through a rough period</a>, it’s nice to see that there is a core group of people across many countries who will travel and spend their own money for the sake of competing and spending time with their friends.<p>

	<p class="text">As for categories, unsurprisingly the vast, vast majority of riders were competing in the Open category. There was pretty decent turnout for the Masters (over 35) category but the Under 16 and Ladies categories were really underrepresented. It’s somewhat understandable for the Under 16s, considering this is a small sport, and it’s likely not many parents are willing to travel abroad to take their children to a mountainboarding competition. However, it’s a real shame that the Ladies category attracted so few women. We as the mountainboarding community need to get our shit together to attract and retain more women. I personally blame this on our image among other things, and am hoping to use SurfingDirt to help with that problem. End of my rant.</p>

	<ul class="thumb-gallery">
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0081.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0081.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0351.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0351.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0374.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0374.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0437.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0437.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0508.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0508.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0560.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0560.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0604.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0604.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9507.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9507.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9534.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9534.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9539.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9539.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9607.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9607.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9613.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9613.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9616.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9616.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9620.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9620.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9622.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9622.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9638.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9638.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9693.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9693.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9699.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9699.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9710.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9710.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9715.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9715.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9769.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9769.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9949.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9949.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_20170715_112027.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_20170715_112027.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_20170715_112047.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_20170715_112047.jpg" class="image"></li>
	</ul>

	<h2>The competition format</h2>
	<p class="text">Held over 3 days, the competition format changed slightly from the usual:</p>

	<ul class="text">
		<li>
			Thursday afternoon, over a 4/5-hour period, riders went through time trials for BX. This was a little unusual because of the use of individual ankle bracelets, along with the timing system provided by <a href="http://www.espace-competition.com/v2/#section-4">Espace Competition</a>, which allowed for riders to drop in at any moment, get as many runs in as they liked, get a precise time and see a live display of results. This meant that riders could save their energy if they saw a good time, or keep going until they improved.
			<div class="mosaic mosaic-1-1">
				<figure class="a">
					<img class="image" src="<?php echo BASE_URL?>images/wmc17/timing-ankle-bracelet.jpg" alt="" />
					<figcaption>We all wore one of these ankle bracelets for three days.</figcaption>
				</figure>

				<figure class="b">
					<img class="image" src="<?php echo BASE_URL?>images/wmc17/espace-competition.jpg" alt="" />
					<figcaption>The Espace Competition workshop.</figcaption>
				</figure>
			</div>
			
		</li>
		<li>
			In the same window of time, Freestyle qualifiers were held. Riders could get as many runs as they liked, and before each run they could choose to make that run count towards a total of 3 that would be judged and kept for ranking.
		</li>
		<li>
			Friday afternoon, was BX qualifier races. In the Open category (which had a lot of people), all riders were broken up into 4 groups depending on their time trials. Races were then setup with one rider from each group, thus guaranteeing that the best riders wouldn’t race each other right away.<br>
			At the end of the day, Freestyle finals were held, with Under 16s, Masters and Ladies all running at the same time in the late afternoon, and the Open category riding at night.
		</li>
		<li>
			Saturday afternoon was reserved for BX races from quarter-finals to finals.
		</li>
	</ul>

	<h2>The competition itself</h2>
	<p class="text">If you’re looking for the results, you can find them on <a href="https://www.world-mountainboard-championships.com/results-2017">the event site results page</a>. This report isn’t really meant to list all that happened at the competition, as that gets pretty dull. Instead why don’t I mention a few interesting, scary or funny moments!</p>

	<p class="text">In no particular order:</p>
	<ul class="text">
		<li>
			Piotrek Dameski tried to break the track by hitting his head as hard as he could after the Wu-tang.
		</li>
		<li>
			Joel Treliving crashed early in the Open BX finals, taking out Andy Brind and robbing us all of the supposed best race of the weekend. Joel, we don't hate you.
			<div class="mosaic mosaic-1-1">
				<figure class="a">
					<img class="image" src="<?php echo BASE_URL?>images/wmc17/bx-finals-1.jpg" alt="" />
					<figcaption>It was looking good for Joel.</figcaption>
				</figure>

				<figure class="b">
					<img class="image" src="<?php echo BASE_URL?>images/wmc17/bx-finals-2.jpg" alt="" />
					<figcaption>But then.</figcaption>
				</figure>
			</div>
		</li>
		<li>
			It was made clear that the American sense of style stops at the track. You guys.
				<div class="mosaic mosaic-1-1">
				<figure class="a">
					<img class="image" src="<?php echo BASE_URL?>images/wmc17/sandals-1.jpg" alt="" />
					<figcaption>Names witheld.</figcaption>
				</figure>

				<figure class="b">
					<img class="image" src="<?php echo BASE_URL?>images/wmc17/sandals-2.jpg" alt="" />
					<figcaption>Hungry?</figcaption>
				</figure>
			</div>
		</li>
		<li>Nicky Geerse spun a BS cork 7 on the first jump, and drifted so much that his back truck landed on the side of the box sitting at the top, making him the first human being to land a BS cork 7 to 5-0. Yeah, I wish I filmed that too.</li>
		<li>
			Joel Treliving (him again) busted out the onesie.
			<figure>
				<img class="image" src="<?php echo BASE_URL?>images/wmc17/onesie.jpg" alt="" />
				<figcaption>Joel got nothing to hide.</figcaption>
			</figure>		
		</li>
		<li>
			Some drunk idiot gifted us with the most... interesting art.
			<div class="mosaic mosaic-1-1">
				<figure class="a">
					<img class="image" src="<?php echo BASE_URL?>images/wmc17/art-qp.jpg" alt="" />
					<figcaption>Looking for a solid artist?</figcaption>
				</figure>

				<figure class="b">
					<img class="image" src="<?php echo BASE_URL?>images/wmc17/art-kicker.jpg" alt="" />
					<figcaption>Available for all kinds of work.</figcaption>
				</figure>
			</div>
		</li>
		<li>I crashed in one of the Masters quarter finals, enjoy:
			<figure>
				<div class="video-embed">
					<iframe src="https://www.youtube.com/embed/1Mxxqi2AuRU?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
				</div>
				<figcaption>Ouch (in 360 degrees).</figcaption>
			</figure>
		</li>
	</ul>

	<h2>So was it fun or what?</h2>
	<p class="text">You can bet your heel straps it was fun! First of all, even though we had a few scares, no one got seriously injured, that’s a relief.</p>

	<p class="text">If you’ve been to any international event, you know about the camaraderie and the joy of spending time with people who share the same interest in this niche hobby. This was no different, good times were had day and night, and time flew by super quickly.</p>

	<p class="text">I think one thing that stands out through the event is the fact that everyone was blown away by the ankle bracelet system and how smooth it made racing or at least time trials. The system has a cost (over 2,000 euros) and it came with 3 people running it the whole 3 days, so it’s probably fair to say a lot of work went into it and it’s going to be hard to replicate it with the same level of reliability without going through the same vendor (Matt B, if you’re reading this, I believe in you though haha). Regardless, props to Ludo for getting the hook up with that system.</p>

	<p class="text">As for freestyle, while the smaller line worked very well, the big line proved challenging for a lot of the riders because there was a lot of speed getting into the second jump. If anything, that shows that building a slopestyle track, or at least a multiple-jump setup is a lot harder for mountainboarding than for snowboarding because speed checking is essentially free on a snowboard while it can throw you off pretty bad on a mountainboard. So some riders were probably somewhat frustrated, but we did see a bunch of great tricks regardless.</p>

	<p class="text">The one big sad thing was that on Sunday morning, a bunch of people woke up to missing gear. Full boards, decks, Gopros, phones, bikes even a wheelchair were stolen. The hardest hit were Lucas and Matheus from Brazil who had their professional video equipment stolen (among other things). If you missed it, here’s a link to the campaign to raise money to help them: <a href="https://www.gofundme.com/help-replace-lucas-matheus-gear">https://www.gofundme.com/help-replace-lucas-matheus-gear</a></p>

	<p class="text">One thing we learned from this: if you’re going to have external people at the event like we did during the night time concert, it is a good idea to provide a place to lock valuables or to keep people outside the rider area. A hard lesson to learn.</p>

	<h2>More photos, more video</h2>
	<p class="text">I know, I know, most of you aren’t reading this, you’re just here for the eye candy. So here are a few more pictures, and video from all over the place.</p>
	<ul class="thumb-gallery">
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0005.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0005.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0043.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0043.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0109.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0109.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0131.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0131.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0164.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0164.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0188.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0188.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0269.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0269.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_0297.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_0297.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9487.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9487.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9489.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9489.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9557.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9557.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9573.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9573.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9670.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9670.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9673.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9673.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9717.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9717.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9746.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9746.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9788.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9788.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9828.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9828.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9838.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9838.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9858.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9858.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9944.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9944.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9958.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9958.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9978.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9978.jpg" class="image"></li>
		<li><img src="<?php echo BASE_URL?>images/wmc17/thumbnails/IMG_9989.jpg" data-image="<?php echo BASE_URL?>images/wmc17/IMG_9989.jpg" class="image"></li>
	</ul>

	<p class="text">
		The train at the end is a classic, glad we had it!
		<figure>
			<div class="video-embed">
				<iframe src="https://www.youtube.com/embed/kmWSGtyfDbA?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
			</div>
			<figcaption>The freestyle train after the Open finals were over.</figcaption>
		</figure>
	</p>

	<p class="text">
		France 3 Picardie (local TV) aired a really nice 2-minute clip about the competition.
		<figure>
			<div class="video-embed">
				<iframe width="544" height="306" src="//embedftv-a.akamaihd.net/ad20f0f7d2142f9247c983a3f54f078b" style="position:absolute;width:100%;height:100%;left:0" frameborder="0" scrolling="no" allowfullscreen></iframe>
			</div>
			<figcaption>Thanks, France 3 Picardie!</figcaption>
		</figure>
	</p>

	<h2>KTHXBAI</h2>
	<p class="text">
		So we had fun, and we're sad it's over, so it's natural to look towards the future. The decision for where the next Worlds are going to be held has yet to be made, but one thing is for sure, this year was a great success by all acounts, so expectations are high now.
	</p>
	<p class="text">
		Huge thank you's to the organisers: Ludo, Gauthier, Simon, Nico, Max, Ludwig and all the others who made this all possible. See you next year!
	</p>
	
	<div class="fb-comments" data-href="<?php echo 'https://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" data-width="800" data-numposts="5"></div>
</div>
				</section>
			</main>
		</div>
