/**
 * File tabs.jquery-plugin.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function($) {
	const ns = 'ifmtplugin';
	const pds = 'pds';
	const classToAdd = 'js-' + ns + '-tabs';
	const classToAddToLinks = 'js-' + ns + '-tabs--link'; //adding a class to the link will prevent the default link styles from kicking in.
	const activeClass = 'active';
	const linkSelector = 'a[href]';
	const headerSelector = 'h1,h2,h3,h4,h5,h6';
	const isMobileClass = ns + '-tabs-mobile';
	const initialHash = window.location.hash;
	const defaultSettings = {
		mobileDisplay: null,// determines how to display this for mobile devices. Options: 'accordion'
		mobileBreakpoint: null//determines the breakpoint at which the mobile display takes effect.  Options: an integer representing the max width, or 'auto' (in which case the assumption is that this is a 'horizontal' tab, and that all tabs should fit the browser's screen width)
	};
	const scrollIntoViewOptions = {behavior: "smooth"};
	let sideNavNumber = 0;
	if(!$.fn.scrollIntoViewIfNeeded) $.fn.scrollIntoViewIfNeeded = function(){
		if (this.length) {
			if(this[0].scrollIntoViewIfNeeded) this[0].scrollIntoViewIfNeeded(scrollIntoViewOptions);
			else this[0].scrollIntoView(scrollIntoViewOptions);
		}
		return this;
	};

	$.fn[ns + 'Tabs'] = function(inputOptions){
		const options = $.extend({}, defaultSettings, inputOptions);
		return this.each(function(){
			const $nav = $(this);
			const $container = $nav.closest('.' + ns + '-tabs-container');
			const $contentContainer = $container.find('.' + ns + '-sidenavjump-content:first,.' + ns + '-tabs--content:first');
			let $mobileDisplay = null;
			let isMobile = false;
			sideNavNumber++;
			$nav.attr('data-' + ns + '-tab-number', sideNavNumber);
			const $header = $nav.prev(headerSelector);
			if($header.length && !$nav.attr('aria-labelledby')) {
				let headerId = $header.attr('id');
				if(!headerId) {
					headerId = ns + 'tab_' + sideNavNumber + '_header';
					$header.attr('id', headerId);
				}
				$nav.attr('aria-labelledby', headerId);
			}
			const $allLinks = $nav.find(linkSelector).attr('role', 'tab').attr('aria-selected', 'false').addClass(classToAddToLinks).each(function(index){
				const $link = $(this);
				if(!$link.attr('id')) $link.attr('id', ns + 'tab_' + sideNavNumber + '_tablink_' + index);
				if(!$link.attr('role')) $link.attr('role', 'tab');
				$link.attr('aria-selected', $link.hasClass(activeClass));
				const href = $link.attr('href');
				if(!href || !href.charAt(0) == '#') return;
				let $content = $(href);
				if(!$content.length) {
					if($contentContainer.length){
						var children = $contentContainer.children();
						if (children.length > index) $content = $(children[index]);
						else return;
					}
					else return;
				}
				if(!$content.attr('id')) $content.attr('id', href.replace('#', ''));
				if($link.hasClass('active')) $content.addClass('active');
				$content.addClass('js-' + ns + '-tab-panel');
				$link.attr('aria-controls', $content.attr('id'));
				if(!$content.attr('role')) $content.attr('role', 'tabpanel');
				if(!$content.attr('aria-labelledby')) $content.attr('aria-labelledby', $link.attr('id'));
			});
			
			const removeActiveClasses = function(){
				//remove active class from all currently active links
				$nav.find('a.' + activeClass).each(function(){
					const $curLink = $(this);
					$curLink.removeClass(activeClass).attr('aria-selected', false);
					const curHref = $curLink.attr('href');
					if(curHref && curHref.charAt(0) == '#') $(curHref).removeClass(activeClass);
				});
			};
			const onLinkClick = function($link, doNotPushState){
				const href = $link.attr('href');
				if(!href || !href.charAt(0) == '#') return;
				if (href === '#') return;
				const $content = $(href);
				removeActiveClasses();
				$content.addClass(activeClass);
				$link.addClass(activeClass).attr('aria-selected', true);
				if(!doNotPushState) history.pushState(undefined, undefined, href);
				return $link;
			}
			const onHashChange = function(){
				$allLinks.each(function(){
					//by default, the markup can have the 'active' class on the target content div, but not yet on the link in the side nav - so we add it to the link to match the content...
					const $link = $(this);
					const href = $link.attr('href');
					if(!href || !href.charAt(0) == '#') return;
					if(window.location.hash === href) {
						onLinkClick($link, true).scrollIntoViewIfNeeded($link);
					}
					
				});
			};
			if ($nav.hasClass(classToAdd)) return;
			$nav.addClass(classToAdd);
			$allLinks.on('click', function(e){ e.preventDefault(); onLinkClick($(this)); return false; });
			window.addEventListener("hashchange", onHashChange, false);

			let $initialLink = null;
			let $linkWithActiveClass = null;
			$allLinks.each(function(){
				//by default, the markup can have the 'active' class on the target content div, but not yet on the link in the side nav - so we add it to the link to match the content...
				const $link = $(this);
				const href = $link.attr('href');
				if(!href || !href.charAt(0) == '#') return;
				if(initialHash === href) $initialLink = $link; //detect if the href upon loading the page has a hash that matches one of our links
				const $content = $(href);
				if($content.hasClass(activeClass)) $linkWithActiveClass = $link;
				
			});
			// if one of our links matched the current location's hash, then trigger a click to load that content and have the page jump down.
			if($initialLink) {
				onLinkClick($initialLink, true).scrollIntoViewIfNeeded();
			}
			else if ($linkWithActiveClass){
				$linkWithActiveClass.addClass(activeClass);
				//MAYBE: update the URL to show which tab is currently selected...
				//if(history.replaceState) history.replaceState(undefined, undefined, $linkWithActiveClass.attr('href'));
			}
			
			if(options.mobileDisplay && options.mobileBreakpoint !== null){
				const detectModeSwitch = function(){
					let wasMobile = isMobile;
					if(options.mobileBreakpoint === 'always'){
						isMobile = true;
					}
					else if(options.mobileBreakpoint === 'auto'){
						$nav.removeClass(isMobileClass);
						const heightBeforeWrap = $nav.height();
						$nav.css('flex-wrap', 'wrap');
						const heightAfterWrap = $nav.height();
						$nav.css('flex-wrap', '');
						if(wasMobile) $nav.addClass(isMobileClass);
						isMobile = heightBeforeWrap !== heightAfterWrap;
					}
					else isMobile = window.matchMedia('(max-width: ' + mobileBreakpoint + 'px)').matches;
					
					if(isMobile !== wasMobile) {
						//console.log(ns + 'Tabs.js: must switch modes, isMobile=' + isMobile);
						$nav[isMobile ? 'addClass' : 'removeClass'](isMobileClass);
						if($mobileDisplay) {
							$allLinks.each(function(){
								const $link = $(this);
								const href = $link.attr('href');
								const $content = $(href);
								const $contentPlaceholder = $('[data-' + ns + '-tab-placeholder-for="' + $content.attr('id') + '"]');
								if($contentPlaceholder.length) $contentPlaceholder.replaceWith($content);
							});
							$mobileDisplay.remove();
							$mobileDisplay = null;
						}
						if(isMobile) {
							switch(options.mobileDisplay){
								case 'accordion':
									var theme = getTheme($container);
									var themeClasses = getThemeClasses(theme);
									$mobileDisplay = $('<div class="' + ns + '-accordion ' + themeClasses + '"></div>');

									$allLinks.each(function(){
										const $link = $(this);
										const itemId = $link.attr('id') + '_acc';
										const href = $link.attr('href');
										const $content = $(href);
										const isActive = $link.hasClass(activeClass);
										const isHidden = !isActive;
										//const openOrClosed = isActive ? 'open' : 'closed';
										const $item = $('<div id="' + itemId + '" class="wp-block-pb-accordion-item pds-accordion__item pds-js-accordion-item pds-no-js" data-initially-open="' + isActive + '" data-click-to-close="true" data-auto-close="true" data-scroll="false" data-scroll-offset="0"/>');
										const $icon = $('<span class="pds-accordion__icon" role="presentation" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 12 7.4099998" width=".75rem" height=".75rem"><path d="M12 1.41 10.59 0 6 4.58 1.41 0 0 1.41l6 6z" fill="currentColor"></path></svg></span>');
										const $header = $('<h3 id="at-' + itemId + '" class="pds-accordion__title pds-js-accordion-controller" role="button"></h3>');
										$header.text($link.text());
										$header.append($icon);
										$item.append($header);
										const $contentPlaceholder = $('<div />').attr('data-' + ns + '-tab-placeholder-for', $content.attr('id'));
										$contentPlaceholder.insertBefore($content);
										const $mobileContent = $('<div id="ac-' + itemId + '" class="pds-accordion__content"></div>').append($content);
										$item.append($mobileContent);
										$mobileDisplay.append($item);
										$mobileDisplay.insertAfter($nav);
									});
									$(document).trigger('pds-accordion--apply-widgets');
									break;
							}
						}
					}
				};
				$(window).on('resize', detectModeSwitch);
				detectModeSwitch();
			}
		});
	};
	function getThemeClasses(theme){
		var themeClasses = [];
		if (theme != 'none' && theme != 'minimal') themeClasses.push(ns + '-theme__minimal');
		themeClasses.push(ns + '-theme__' + (theme || 'basic'));
		return themeClasses.join(' ');
	}
	function getTheme($element){
		var themeAtt = 'data-' + ns + '-theme';
		return $element.closest('['  + themeAtt + ']').attr(themeAtt);
	}
	/*
	function getThemeClass($element){
		var classes = $element.closest('.' + ns + '-tabs-container').attr('class').split(' ');
		var themeClasses = [];
		for (var i = 0; i < classes.length; i++) {
		  var matches = new RegExp('^' + ns + '\-theme__(.+)').exec(classes[i]);
		  if (matches != null) {
		    var fxclass = matches[1];
		    themeClasses.push(fxclass);
		  }
		}
		return themeClasses.join(' ');
	}*/
	function getResonsiveBehavior($element){
		return $element.closest('.' + ns + '-tabs-container').attr('data-' + ns + '-responsive');
	}
	$(function(){
		$('.' + ns + '-sidenavjump,.' + ns + '-tabs').each(function(){
			const $container = $(this);
			const $ul = $container.find('ul');
			const isAccordion = $container.is('.' + ns + '-tabs') && $container.closest('.' + ns + '-tabs-container').is('.' + ns + '-tabs-container--accordion');
			const isTabs = !isAccordion && $container.is('.' + ns + '-tabs');
			let options = {};
			//console.log(options.theme);

			const responsive = getResonsiveBehavior($container);
			if (responsive) {
				const mobileBreakpoint = isAccordion ? 'always' : 'auto';
				options = $.extend(options, {mobileDisplay: responsive, mobileBreakpoint: mobileBreakpoint});
			}
			$ul[ns + 'Tabs'](options);
		});
	});
}(jQuery) );