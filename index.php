<?php get_header(); ?>
	
	<!-- You can remove all the content below, it won't affect the theme functionality at all, it's only examples. Just leave the header and footer includes. -->
	
	<!-- Begin Container -->
	<div role="main" class="container">
		<div class="row">
			<article class="twelve columns">
			<h3>This is Foundation for WordPress. Version 2.0</h3>
			<p>This is version 2.0.1 of the Framework, released on October 21, 2011</p>
			<p>Remember the docs are at <a href="http://foundation.zurb.com/">http://foundation.zurb.com</a></p>
			<p>This framework has been converted to WordPress by Drew Morris</p>
			</article>
		</div>
		
		<!-- Begin Tooltip -->
		<div class="row">
			<div class="eight columns">
			<div class="bubbleInfo">
  				<a href="#" class="trigger nice button">Tooltips, anyone?</a>
  				<div class="popup">
   					Just a tooltip!
   					<sub>I'm all CSS3.</sub>
   					<div class="popup-arrow-border"></div>
   					<div class="popup-arrow"></div>
 				</div>
			</div>
			</div>
		</div>
		<!-- End Tooltip -->
		
		<!-- Begin Reveal -->
		<br>
		<div class="row">
			<div class="eight columns">
				<a href="#" class="nice button" data-reveal-id="myModal">Click Me For A Modal</a>
				<div id="myModal" class="reveal-modal">
     				<h2>Awesome. I have it.</h2>
     				<p class="lead">All your Foundation are belong to us.</p>
     				<p>Im a cool paragraph that lives inside of an even cooler modal. Wins.</p>
     				<a class="close-reveal-modal">&#215;</a>
				</div>
			</div>
		</div>
		<!-- End Reveal -->
		
		<!-- Begin Slider -->
		<br>
		<div class="row">
			<div class="eight columns">
				<div id="featured"> 
    	 			<img src="http://foundation.zurb.com/images/orbit-demo/overflow.jpg" alt="Overflow: Hidden No More" />
     				<img src="http://foundation.zurb.com/images/orbit-demo/captions.jpg"  alt="HTML Captions" />
     				<div><h4>I'm content, how you like me now?</h4><p>You could put featured posts in here.</p></div>
				</div>
			</div>
		</div>
		<!-- End Slider -->
		
		<!-- Begin Tabs -->
		<div class="row">
		<div class="eight columns">
			<br>
			<dl class="nice contained tabs">
  				<dd><a href="#nice1" class="active">Nice Tab 1</a></dd>
  				<dd><a href="#nice2">Nice Tab 2</a></dd>
  				<dd><a href="#nice3">Nice Tab 3</a></dd>
			</dl>

			<ul class="nice tabs-content contained">
  				<li class="active" id="nice1Tab">This is nice tab 1's content. Pretty neat, huh?</li>
  				<li id="nice2Tab">This is nice tab 2's content. Now you see it!</li>
  				<li id="nice3Tab">This is nice tab 3's content. It's, you know...okay.</li>
			</ul>
		</div>
		</div>
		<!-- End Tabs -->
		
		<!-- Begin SlideDown -->
		<div class="row">
			<div class="four columns">
				<a href="#" class="nice button slideDown">Try me, I slide.</a>
				
					<div class="slideContent">
					I'm the content for the first Slide Down
					</div>
					
				</div>
				
				<div class="four columns">
				<a href="#" class="nice button slideDown">Try me, I slide, too!</a>
				
					<div class="slideContent">
					I'm the content for the second Slide Down, independant, FTW.
					</div>
				
				</div>
			
		</div>
		<!-- End Slidedown -->
				
	</div>
	<!-- End Container -->
	
<?php get_footer(); ?>