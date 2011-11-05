# Foundation, for WordPress

Foundation, for WordPress, is a blank starter theme with the exceptional capabilities of [ZURB's Foundation Framework](http://foundation.zurb.com/) and [HTML5 Boilerplate](http://html5boilerplate.com/).

As a neat-freak designer, it's sometimes intimidating and frustrating looking at a WordPress theme framework that's jam-packed with unnecessary extras and bloated code. This doesn't include your common templates such as comments.php etc, it's the bare-minimum, allowing you to start from ground-zero and build a perfect website - keeping organisation and cleanliness in mind.

"The ability to simplify means to eliminate the unnecessary so that the necessary may speak." ~ Hans Hofmann, Introduction to the Bootstrap, 1993

## Features

Foundation, for WordPress, features everything ZURB's Foundation Framework and HTML5 Boilerplate have to offer, however, some changes have been made to tailer it to WordPress, these include:

* Orbit for WordPress, ZURB's image and content slider tailored for WordPress
* A ySlow score of 95 (in regards to 'Small Site or Blog') & without a build script
* SEO features such as an optomised Google Analytics snippet, robots.txt and Schema.org attributes
* Beautiful, coda-style tooltips
* Normalize.css, you'll never go wrong with this dynamic reset
* Reveal for WordPress, a simple modal box by ZURB made to work in WordPress
* A function to provide Google's jQuery CDN over WordPress' local copy
* Failsafe jQuery, with a fallback to WordPress' local copy

## Download

Clone the git repo - `git clone git://github.com/drewsymo/Foundation.git` - or, [download the archive](https://github.com/drewsymo/Foundation/zipball/master). 

## Changelog

**5/11/2011**

+ Added Orbit, for WordPress functionality - manage your slider through the backend.

**3/11/2011**

+ Added multiple fixes from Foundation's Repo

**2/11/2011**

+ Updated jQuery.forms plugin
+ Added Normalize.css, see: http://necolas.github.com/normalize.css/
+ Reverted back to old CSS concatenation
+ Removed support for Jammit

**1/11/2011**

+ Fixed a responsive issue. Foundation, for Wordpress, now scales to mobile devices
+ Updated to Foundation 2.0.3
+ Slowly started to add support for Jammit Build Script

**27/10/2011**

+ Updated to latest version of Foundation, 2.0.2 - all changes are documented here: https://github.com/zurb/foundation

**26/10/2011**

+ Added 'slideDown', essentially, create toggled, sliding content. Just append '.slideDown' to your trigger, and '.slideContent' to the content you want to slide.

**23/10/2011**

+ Fixed Reveal, Orbit and Tabs not showing up
+ Added more specific media queries for iPhone & iPad (Portrait + Landscape)
+ Added simple jQuery coda-like tooltips
+ Fixed the modal box (Reveal) only appearing relatively, now fixed to 150px from screen height.
+ Added apple-touch-icon support
+ Added Google jQuery CDN with fallback to local copy

## Snippets

### Orbit, for WordPress

Orbit, for WordPress, is Foundation's awesome slider built to work in WordPress. It allows you to manage your slider images through the backend. Neat, right? 

Just head into your admin panel, click the link named 'Orbit', select 'Featured Image' on the right, upload the image you'd like to appear in the slider (making sure to select 'Full Size') and select apply. O-FWP does not currently support multiple sliders or text content. It's still a WIP.

```HTML
<h3>Orbit, for WordPress</h3>
	<div class="row">
		<div class="twelve columns">
			<div id="featured"> 
				<?php sliderContent(); ?>
			</div>
		</div>
	</div>
```

### Tooltips

Tooltips require a trigger and a data container. Just wrap your entire tooltip, including its trigger, in a class called `bubbleInfo`, and create a trigger with a class of `trigger`. 

```HTML
<h3>Tooltips</h3>
<div class="bubbleInfo">
  	<a href="#" class="trigger nice button">Tooltips, anyone?</a>
  		<div class="popup">
   			Just a tooltip!
   			<sub>I'm all CSS3.</sub>
   			<div class="popup-arrow-border"></div>
   			<div class="popup-arrow"></div>
 		</div>
</div>
```

You can view elements of ZURB's Foundation in their [documentation section](http://foundation.zurb.com/docs/). This includes Orbit, Reveal, Tabs etc.


## Contribute

It'd be great if users could contribute to this project, I'm constantly striving to make improvements, to help, you could:

* Fork us
* State any issues you have
* Tag a feature you may like to see
* Send us what you've made

## Precautions

Make sure you do not replace elements of this starter theme with elements from ZURB's Foundation Framework, as it will break. Modifications have been made to allow such elements as Orbit, Reveal, Tabs, etc to work within WordPress.

This theme is constantly being updated in relation to ZURB's Foundation.

## Authors

**ZURB**

+ Foundation was made by ZURB, an interaction design and design strategy firm in Campbell, CA.
+ Follow [ZURB on Twitter](http://twitter.com/#!/foundationzurb)

**Drew Morris**

+ Drew Morris is a Website Development student currently studying at the Central Institute of Technology in Perth, W.A.
+ Follow [Drew on Twitter](http://www.twitter.com/drewsymo)
+ Follow [Drew on Google +](https://plus.google.com/114153589610660530694?rel=author)

## License

### Foundation, for WordPress

Foundation, for WordPress, is listed under Public Domain.

### Major Components

For more information about the licensing involved with Foundation, for WordPress' major components, please see:

* [ZURB's Foundation Framework](http://foundation.zurb.com/) (MIT Open License)
* [HTML5 Boilerplate](http://html5boilerplate.com/) (Public Domain)

