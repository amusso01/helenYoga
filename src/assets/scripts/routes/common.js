import smoothscroll from "smoothscroll-polyfill";
import lozad from "lozad";
import hamburger from "./../part/hamburger";
import slider from "./../part/slider"
import homeSlider from "./../part/homeSlider"
import banner from "./../part/banner"

export default {
	init() {
		// JavaScript to be fired on all pages

		// kick off the polyfill!
		smoothscroll.polyfill();

		// Hamburger event listener
		hamburger();

		// Lazy load image with lozad.js https://github.com/ApoorvSaxena/lozad.js
		const lazyObserver = lozad(); // lazy loads elements with default selector as '.lozad'
		lazyObserver.observe();


		 // SLIDER
		 const swipe = document.getElementById('fdSlider');
		 if (typeof(swipe) != 'undefined' && swipe != null)
		 {
		   slider();
		 }
		 // SLIDER
		 const heroSlider = document.getElementById('homeSlider');
		 if (typeof(heroSlider) != 'undefined' && heroSlider != null)
		 {
		   homeSlider();
		 }

		//  BANNER
		const siteBanner = document.getElementById('siteBanner');
		if (typeof(siteBanner) != 'undefined' && siteBanner != null)
		{
		  banner();
		}
	},

	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
