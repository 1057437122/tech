
function paddAppendClear() {
	jQuery('.append-clear').append('<div class="clear"></div>');
}

function paddWrapInner1() {
	jQuery('.wrap-inner-1').wrapInner('<div class="inner"></div>');
}

function paddWrapInner2() {
	jQuery('.wrap-inner-2').wrapInner('<div class="interior"><div class="inner"></div></div>');
}

function paddWrapInner3() {
	jQuery('.wrap-inner-3').wrapInner('<div class="m"></div>');
	jQuery('.wrap-inner-3').prepend('<div class="t"></div>');
	jQuery('.wrap-inner-3').append('<div class="b"></div>');
}

function paddToggle(classname,value) {
	jQuery(classname).focus(function() {
		if (value == jQuery(classname).val()) {
			jQuery(this).val('');
		}
	});
	jQuery(classname).blur(function() {
		if ('' == jQuery(classname).val()) {
			jQuery(this).val(value);
		}
	});
}

function paddToggleTitles() {
	if (jQuery('.content-search').length <= 0 && jQuery('.content-singular').length <= 0) {
		jQuery('.post div.thumbnail').hover(
			function() {
				jQuery(this).children('h2').animate({'bottom': 0 },300);
			},
			function() {
				jQuery(this).children('h2').animate({'bottom': -60 },300);
			}
		);
	}
}

function paddPagerBuilder(index,elem) {
	return '<button class="jqc-button jqc-button-pages" id="jqc-button-' + index + '" value="' + index + '"><span>' + (index+1) + '</span></button>'
}

function paddCreateSlideShow() {
	jQuery('div#jquery-cycle').append('<div id="jqc-pages"></div>');
	len = jQuery('div#jquery-cycle div.list div.item').length;
	jQuery('div#jquery-cycle .button-l').css('z-index',len+2);
	jQuery('div#jquery-cycle .button-r').css('z-index',len+3);
	jQuery('div#jquery-cycle div.list').cycle({ 
		fx: 'fade', 
		speed: 1500, 
		timeout: 5000,
		prev: '#jqc-prev',
		next: '#jqc-next',
		pager: '#jqc-pages',
		activePagerClass: 'jqc-active',
		pagerAnchorBuilder: paddPagerBuilder
 	});
}

jQuery(document).ready(function() {
	jQuery.noConflict();
	
	paddAppendClear();
	paddWrapInner1();
	paddWrapInner2();
	paddWrapInner3();
	
	jQuery('div.pagination span.pages').wrap('<span class="pseudo-li"></span>');
	jQuery('div.pagination span.extend').wrap('<span class="pseudo-li"></span>');
	jQuery('div.pagination span.current').wrap('<span class="pseudo-li"></span>');
	jQuery('div.pagination a').wrap('<span class="pseudo-li"></span>');

	jQuery('div#menubar div > ul').supersubs({
		minWidth: 15, 
		maxWidth: 27, 
		extraWidth: 1 
	}).superfish({
		hoverClass: 'hover',
		speed: 500,
		delay: 1,
		animation: { opacity: 'show', height: 'show' }
	}); 
	
	jQuery('input#s').val('Search');
	paddToggle('input#s','Search');

	jQuery('div.search form').click(function () {
		jQuery('input#s').focus();
	});
	
	paddCreateSlideShow();
	paddToggleTitles();

	paddToggle('input#comment-author','Name');
	paddToggle('input#comment-email','Email');
	paddToggle('input#comment-url','Website');
	paddToggle('textarea#comment-comment','Message');

});
