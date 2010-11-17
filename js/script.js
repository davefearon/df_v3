/* Author: 

*/
$(document).ready(function(){
	SiteLoader.init();
	
	$('#loading').hide();
	
	$('.item').hoverOver();
	
	init();
	$(window).bind("resize", init);
	
	function init()
	{
		var windowheight = $(window).height();
		var windowwidth = $(window).width();
		var headerheight = 53;
		var contentheight = windowheight - headerheight - 32;
		var aw = windowwidth - 32;
		var ah = contentheight - 160;
		var itemwidth = 306;
		var itemheight = 170;
		
		Cufon.replace('.cufon', {
			color: '#0099ff',
			fontSize: '30px'
		});
		
		$('#main').css('height', contentheight);
		$('#footer').css('width', windowwidth);
		$('#footer .inside').css('width', windowwidth - 32);
		
		$('#footerlogo').css('margin-left', (windowwidth / 2) - 108);
		$('#loading').css('margin-left', (windowwidth / 2) - 24).css('margin-top', ($(window).height() - 53) / 2);
		
		$('.area').css({
			width: aw,
			height: ah
		});
		
		//nightmare WAS here
		
		$('#welcome').css({
			'margin-top': ( ( (contentheight - 160) - $('#welcome').height() ) / 2 ) - 0
		});
		
		$('#about').css({
			'margin-top': ( ( (contentheight - 160) - $('#about').height() ) / 2 ) - 0
		});
		
		$('#map_canvas').css({
			width: $(window).width() - 64,
			height: contentheight - 350
		});
		
		if( $('.area').children('.innerportfolio').length != 0 )
		{
			/* HERE IS MY NIGHTMARE
			**************************************************************************************************/
			var div = $('.innerportfolio');
			var items = $('.item').length;
			var numperrow = Math.floor(aw / itemwidth);
			var numrows = Math.floor(ah / itemheight);
			var numpages = Math.ceil( (items / numperrow ) / numrows );
			var numperpage = Math.floor( numrows * numperrow );
			var p = 1;
			var page = 1;
			var row = 1;
			var tbmargin = ( ( ah - ( numrows * itemheight ) ) / numrows ) / 2;
			var rlmargin = ( ( aw - ( numperrow * itemwidth ) ) / numperrow ) / 2;

			for(var j=1; j <= numpages; j++)
			{
				if( $('.page').hasClass('p_' + p) )
				{

				}
				else
				{
					$('<div class="page p_' + p + '"></div>').appendTo( div );
				}

				var next = $('.p_' + p).find('.next');
				var previous = $('.p_' + p).find('.previous');

				if( numpages > 1 )
				{
					if( next.length == 0 && previous.length == 0 )
					{
						if( p == 1 )
						{
							$('<a class="next">>></a>').appendTo( $('.p_' + p ) );
						}
						else if( p == numpages )
						{
							$('<a class="previous"><<</a>').appendTo( $('.p_' + p ) );
						}
						else
						{
							$('<a class="previous"><<</a><a class="next">>></a>').appendTo( $('.p_' + p ) );
						}
					}
				}

				p++;
			}

			$('.item').each(function(i){
				if( i >= ( page * numperpage ) )
				{
					page++;
				}

				$( $(this) ).appendTo( $('.p_' + page ) );

				$(this).css({
					margin: tbmargin + "px " + rlmargin + "px 0px " + rlmargin + "px",
					width: itemwidth,
					height: itemheight
				});
				$('img', this).css({
					width: itemwidth,
					height: itemheight
				});
			});

			$('.page').each(function(i){
				if( $(this).children('.item').length == 0 )
				{
					$(this).remove();
					$('.page:eq(' + (i - 1) + ')').children('.next.').remove();
				}
			});
			
			$('.page').css({
				width: windowwidth - 32,
				height: contentheight - 160
			});
			$('.innerportfolio').css({
				width: ( $('.page').size() * windowwidth - 32 ) + "px",
				//width: ( 2 * windowwidth - 32 ) + "px",
				height: contentheight - 160
			});

			/* THIS CONCLUDES MY NIGHTMARE
			**************************************************************************************************/
			runFancy();
			slider();
		}
		
	};
	
	function runFancy()
	{
		$('.item').fancybox({
			'centerOnScroll' : true,
			'titlePosition' : 'over',
			'transitionIn' : 'easing',
			'transitionOut' : 'easing',
			'easingIn' : 'swing',
			'easingOut' : 'swing',
			'speedIn' : 500,
			'speedOut' : 500,
			'overlayOpacity' : 0.75,
			'overlayColor' : '#000000'
		});
	};
	
	function slider()
	{
		var slidespeed = 500;
		var thepages = $('.page');
		var numberpages = thepages.length;
		
		$('.innerportfolio').css("marginLeft", 0);
		
		$('.next').live('click', function(event){
			event.preventDefault();
			
			var marginleft = parseInt($(this).parent().parent().css("marginLeft").replace("px", ""));
			
			$(this).parent().parent().animate({ marginLeft: marginleft - $(this).parent().width() }, slidespeed, 'swing' );
		});
		
		$('.previous').live('click', function(event){
			event.preventDefault();
			
			var marginleft = parseInt($(this).parent().parent().css("marginLeft").replace("px", ""));
			
			$(this).parent().parent().animate({ marginLeft: marginleft + $(this).parent().width() }, slidespeed, 'swing' );
		});
	};
	
	var fh = $('#footer').height();
	
	$('#title').click(function(event){
		event.preventDefault();
		bottomUp();
		setTimeout(function(){ $('.area').load("/load/", { 'section': 'welcome' }, function(){ $('.item').hoverOver(); init(); bottomDown(); }); }, 1500);
	});
	
	/*
	$('#nav_recent').click(function(event){
		event.preventDefault();
		bottomUp();
		setTimeout(function(){ $('.area').load("/load/", { 'section': 'recent' }, function(){ $('.item').hoverOver(); init(); bottomDown(); }); }, 1500);
	});
	*/
	
	$('#nav_about').click(function(event){
		event.preventDefault();
		bottomUp();
		setTimeout(function(){ $('.area').load("/load/", { 'section': 'about' }, function(){ $('.item').hoverOver(); init(); bottomDown(); }); }, 1500);
	});
	
	$('#nav_portfolio').click(function(event){
		event.preventDefault();
		bottomUp();
		setTimeout(function(){ $('.area').load("/load/", { 'section': 'portfolio' }, function(){
			$('.item').hoverOver();
			init();
			bottomDown();
		}); }, 1500);
	});
	
	/*
	$('#nav_social').click(function(event){
		event.preventDefault();
		bottomUp();
		setTimeout(function(){ $('.area').load("/load/", { 'section': 'social', 'height': $(window).height() - 53 - 32 -160 }, function(){ $('.item').hoverOver(); init(); bottomDown(); }); }, 1500);
	});
	*/
	
	$('#nav_contact').click(function(event){
		event.preventDefault();
		bottomUp();
		setTimeout(function(){ $('.area').load("/load/", { 'section': 'contact' }, function(){ $('.item').hoverOver(); init(); map_initialize(); bottomDown(); }); }, 1500);
	});
	
	function bottomUp()
	{
		$('#footer').animate({
			height: $(window).height() - 53
		}, 750 );
		
		$('#footerlogo').animate({
			bottom: $(window).height() - 160
		}, 750 );
		
		$('#loading').delay(750).fadeIn(750);
	};
	
	function bottomDown()
	{
		$('#loading').fadeOut(750);
		
		$('#footer').delay(750).animate({
			height: fh
		}, 750 );
		
		$('#footerlogo').delay(750).animate({
			bottom: 0
		}, 750 );
	};
});