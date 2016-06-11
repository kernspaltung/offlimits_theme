var $ = jQuery.noConflict();

function FrontEndUtils(){
	var fe = this;
	this.test = function(selector) {
		alert( selector )
	}
	this.vcenter = function( selector ) {

		if (typeof(selector)==='undefined')
		selector = '.vcenter';

		$( selector ).each(function(){
			item = $(this);
			p = item.parent();
			mT = ( p.height() - item.height() ) / 2;
			item.css({ marginTop: mT, opacity: 1 });

		})
	}

	this.square = function( selector ) {

		if (typeof(selector)==='undefined')
		selector = '.square';

		$( selector ).each(function(){


			console.log( $(this).width(), $(this).height() );

			if( $(this).width() > 0 ) {
				$(this).height( $(this).outerWidth() );
			} else {
				if( $(this).height() > 0 ) {
					$(this).width( $(this).outerHeight() );
				}
			}

		});


	}
	this.squareH = function( selector ) {

		if (typeof(selector)==='undefined')
		selector = '.squareH';

		$( selector ).each(function(){
			$(this).height( $(this).outerWidth() );
		});

	}

	this.squareW = function( selector ) {

		if (typeof(selector)==='undefined')
		selector = '.squareW';

		$( selector ).each(function(){
			$(this).width( $(this).outerHeight() );
		});
	}


	this.shareW = function( selector ) {

		if (typeof(selector)==='undefined')
		selector = '.shareW';

		$( selector ).each(function(){
			// console.log( $(this).parent().css('paddingLeft') + $(this).parent().css('paddingRight') );
			var totalW = ( $(this).parent().width() - 2 ) - ( parseInt($(this).parent().css('paddingLeft')) + parseInt($(this).parent().css('paddingRight'))) ;
			var totalItems = $(this).siblings().length + 1;

			var thisW = totalW / totalItems;

			$(this).css({
				width: thisW,
				float: 'left'
			});


		});


	}
	this.shareH = function( selector ) {

		if (typeof(selector)==='undefined')
		selector = '.shareH';

		$( selector ).each(function(){

			var totalH = $(this).parent().innerHeight() - ( parseInt($(this).parent().css('paddingTop')) + parseInt($(this).parent().css('paddingBottom'))) - ( parseInt($(this).css('paddingTop')) + parseInt($(this).css('paddingBottom'))) ;
			var totalItems = $(this).siblings().length + 1;

			var thisH = totalH / totalItems;

			$(this).css({
				height: thisH,
				display:'block',
				clear:'both',
				float:'none',
			});


		});


	}


	this.scrollTo = function ( target, parent ) {

		var targetDivScroll = target.offset().top;
		var parentTop  = parent.offset().top;
		var currScroll = parent.scrollTop();

		var targetY = currScroll - parentTop + targetDivScroll;

		parent.stop().animate({
			scrollTop: targetY
		}, 1000, 'swing');
	}


	// this.resize = function() {
	// 	fe.vcenter();
	// 	fe.squareW();
	// 	fe.squareH();
	// 	fe.shareW();
	// 	fe.shareH();
	// }

	// recalculate at resize
	$(window).resize(function() {
		fe.vcenter();
		fe.squareW();
		fe.squareH();
		fe.shareW();
		fe.shareH();
	});



	this.sameMaxH = function( elements ) {
		var do_this = true;
		elements.each(function(){
			if( $(window).width() > 1024 && $(this).hasClass('noSameH_lg') ){
				do_this = false;
			}
		})
		if( do_this ) {

			var maxH = 0;
			elements.each(function(){
				if( $(this).height() > maxH ){
					maxH = $(this).height();
				}
			})

			elements.height( maxH );
		}

	}
}


// console.log( Utils )
