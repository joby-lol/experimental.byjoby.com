$(function(){
	var $menus = $('.theMenu');
	var $stickyMenus = $('.theMenu.sticky').wrap('<div class="theMenu-sticky-placeholder" />');
	var stickMenus = function() {
		//console.log("sticking Menus");
		$stickyMenus.each(function(){
			var $this = $(this);
			//console.log($this.offset().top)
			if ($this.parent().offset().top < $(window).scrollTop()) {
				if (!$this.hasClass('stuck')) {
					$this.parent().height($this.height());
					$this.addClass('stuck');
				}
			}else {
				$this.removeClass('stuck');
			}
		});
	};
	$menus.append("<div class='more-links'><a class='toggle'>more</a><ul class='theMenu-links'></ul></div>");
	$('.theMenu .more-links').hide();
	var fitMenus = function() {
		console.log("fitting Menus");
		$menus.each(function(){
			var $this = $(this);
			//determine which object is the one to check
			var $moreLink = $this.find('.more-links');
			var $lastVisible = $this.children('.theMenu-links').children('li:visible').last();
			var $checkObj = $moreLink;
			if (!$moreLink.is(":visible")) {
				//there is no more link
				console.log('no more link yet');
				$checkObj = $lastVisible;
			}
			//hide last visible link if check object is outside the bounds
			var parentRight = $this.parent().offset().left+$this.parent().width();
			var checkObjRight = $checkObj.offset().left+$checkObj.width();
			if (checkObjRight > parentRight-25) {//slight fudge here for scrollbars, padding, etc
				//first try simple mode
				if (!$this.is('.simple')) {
					$this.addClass('simple');
				//then start hiding links
				}else {
					$moreLink.show();
					$lastVisible.clone().prependTo($moreLink.find('ul'));
					$lastVisible.hide();
				}
			}
		});
	};
	/*
	Debounce main functions and add event listeners to call them
	*/
	var stickMenus_db = debounce(stickMenus,25);
	var fitMenus_db = debounce(fitMenus,50);
	$(window).scroll(stickMenus_db);
	$(window).resize(stickMenus_db);
	$(window).resize(fitMenus_db);
	stickMenus_db();
	fitMenus_db();
});
// Debounce from _.js
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
debounce = function(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};