# Foundation, for WordPress

Foundation, for WordPress, is a blank starter theme with the exceptional capabilities of [ZURB's Foundation Framework](http://foundation.zurb.com/) and [HTML5 Boilerplate](http://html5boilerplate.com/).

"The ability to simplify means to eliminate the unnecessary so that the necessary may speak. ~ Hans Hofmann, Introduction to the Bootstrap, 1993"

## Features

Foundation, for WordPress, features everything ZURB's Foundation Framework and HTML5 Boilerplate have to offer, however, some changes have been made to tailer it to WordPress, these include:

* A ySlow score of 95 (in regards to 'Small Site or Blog')
* SEO features such as an optomised Google Analytics snippet, robots.txt and Schema.org attributes
* Beautiful, coda-style tooltips
* SlideDown, a simple way to incorporate sliding content
* Reveal for WordPress, a simple modal box by ZURB made to work in WordPress
* Orbit for WordPress, ZURB's image and content slider tailored for WordPress
* A function to provide Google's jQuery CDN over WordPress' local copy
* Failsafe jQuery, with a fallback to WordPress' local copy

## Download

Clone the git repo - `git clone git://github.com/drewsymo/Foundation.git` - or, [download the archive](https://github.com/drewsymo/Foundation/zipball/master). 

## Changelog

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

## Contribute

It'd be great if users could contribute to this project, I'm constantly striving to make improvements, to help, you could:

* Fork us
* State any issues you have
* Tag a feature you may like to see
* Send us what you've made

## Snippets

### Orbit

Simply append #features to the sliders containing element, and the slider is created.

```HTML
<div id="featured"> 
	<img src="http://foundation.zurb.com/images/orbit-demo/overflow.jpg" alt="Overflow: Hidden No More" />
	<img src="http://foundation.zurb.com/images/orbit-demo/captions.jpg"  alt="HTML Captions" />
	<div><p>I'm content inside a slider.</p></div>
</div>
```

### Reveal

Just create a trigger, in this case, the anchor, and append '''#my-modal''' to your content. Note that the trigger needs to have a '''data-reveal-id''' id that matches the contents #id.

```HTML
<a href="#" class="nice button" data-reveal-id="myModal">Click Me For A Modal</a>
	<div id="myModal" class="reveal-modal">
     	<h2>Awesome. I have it.</h2>
     	<p class="lead">All your Foundation are belong to us.</p>
     	<p>Im a cool paragraph that lives inside of an even cooler modal. Wins.</p>
     	<a class="close-reveal-modal">&#215;</a>
	</div>
```

### Tooltips

### SlideDown


## Authors

**ZURB**

+ Foundation was made by ZURB, an interaction design and design strategy firm in Campbell, CA.

**Drew Morris**

+ Drew Morris is a Website Development student currently studying at the Central Institute of Technology in Perth, W.A.

## License

### Foundation, for WordPress

Foundation, for WordPress, is listed as Public Domain.

### Major Components

For more information about the licensing involved with Foundation, for WordPress' major components, please see:

* [ZURB's Foundation Framework](http://foundation.zurb.com/) (MIT Open License)
* [HTML5 Boilerplate](http://html5boilerplate.com/) (The Unlicense (a.k.a, Public Domain))

