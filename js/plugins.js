
// remap jQuery to $
(function($){

 





 



})(this.jQuery);

(function ($) {
	$.fn.align = function() {
		return this.each(function(i){
			var ah = $(this).height();
			var ph = $(window).height() - $('#header').height() - $('#footer').height() - 2;
			var mh = (ph - ah) / 2;
			$(this).css({
				marginTop: mh,
				marginLeft: 'auto',
				marginRight: 'auto',
				marginBottom: 0
			});
		});
	};
})(jQuery);

(function($) {
	$.fn.hoverOver = function() {
		this.each(function() {
			$(this).hover(function() {
				$(this).find('div.caption').stop(false,true).slideToggle(200);
			}, function() {
				$(this).find('div.caption').stop(false,true).slideToggle(200);
			});
			
			$(this).click(function(event){
				event.preventDefault();
			});
		});
	};
})(jQuery);

/* v3.davefearon.com Google Maps Javascript
=============================================================================================*/
var map;
var marker;
var infoWindow;
var address;
var url;
var info;

function map_initialize()
{
	var myOptions = { zoom: 10, mapTypeId: google.maps.MapTypeId.ROADMAP };
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
	infoWindow = new google.maps.InfoWindow();
	
	var geo = new google.maps.Geocoder();
	geo.geocode({'address' : 'Ottawa, Ontario' }, function(results, status) {
		map.setCenter(results[0].geometry.location);
	});
	
	info = "<div style='color:#000000;font-size:14px;'>I Live Here! Canada's Capital!</div>";
	
	address = 'Ottawa, Ontario, Canada';
	
	makemarker(info, address);
};

function makemarker( info, address )
{
	var geocoder = new google.maps.Geocoder();
	
	geocoder.geocode({ 'address': address }, function(results, status) {
		if( status == google.maps.GeocoderStatus.OK )
		{
			marker = new google.maps.Marker({
				map:map,
				clickable: true,
				position: results[0].geometry.location
			});
			
			makeInfoWindow(marker, info);
		}
		else
		{
			//not success
		}
	});
};

function makeInfoWindow(marker, info)
{
	google.maps.event.addListener(marker, "click", function(event) {
		infoWindow.setContent(info);
		infoWindow.open(map, marker);
	});
};

/* END OF MAPS
=============================================================================================*/

var SiteLoader = {
	overlay: "",
	loadText: "",
	loadPerc: "",
	loadBar: "",
	preloader: "",
	items: new Array(),
	doneStatus: 0,
	doneNow: 0,
	selectorPreload: "body",
	ieLoadFixTime: 2000,
	ieTimeout: "",
	
	init: function()
	{
		$('#masteroverlay').css({
			width: $(window).width(),
			height: $(window).height()
		});
		if( navigator.userAgent.match(/MSIE (\d+(?:\.\d+)+(?:b\d*)?)/) == "MSIE 6.0,6.0" )
		{
			//break if IE6			
			return false;
		}
		if( SiteLoader.selectorPreload == "body" )
		{
			SiteLoader.spawnLoader();
			SiteLoader.getImages(SiteLoader.selectorPreload);
			SiteLoader.createPreloading();
		}
		else
		{
			$(document).ready(function()
			{
				SiteLoader.spawnLoader();
				SiteLoader.getImages( SiteLoader.selectorPreload );
				SiteLoader.createPreloading();
			});
		}
		
		//help IE drown if it is trying to die :)
		SiteLoader.ieTimeout = setTimeout( "SiteLoader.ieLoadFix()", SiteLoader.ieLoadFixTime );
	},
	
	ieLoadFix: function()
	{
		var ie = new Array();
		ie = navigator.userAgent.match(/MSIE (\d+(?:\.\d+)+(?:b\d*)?)/);
		if( ie != null )
		{
			if( ie[0].match("MSIE") )
			{
				while( (100 / SiteLoader.doneStatus) * SiteLoader.doneNow < 100 )
				{
					SiteLoader.imgCallback();
				}
			}
		}
	},
	
	imgCallback: function()
	{
		SiteLoader.doneNow ++;
		SiteLoader.animateLoader();
	},
	
	getImages: function(selector)
	{
		var everything = $(selector).find("*:not(script)").each(function()
		{
			var url = "";
			
			if( $(this).css("background-image") != "none" )
			{
				var url = $(this).css("background-image");
			}
			else if( typeof($(this).attr("src")) != "undefined" && $(this).attr("tagName").toLowerCase() == "img" )
			{
				var url = $(this).attr("src");
			}
			
			url = url.replace("url(\"", "");
			url = url.replace("url(", "");
			url = url.replace("\")", "");
			url = url.replace(")", "");
			
			if( url.length > 0 )
			{
				SiteLoader.items.push(url);
			}
			//console.debug(url);
		});
	},
	
	createPreloading: function()
	{
		SiteLoader.preloader = $("<div></div>").appendTo(SiteLoader.selecterPreload);
		$(SiteLoader.preloader).css({
			height: "0px",
			width: "0px",
			overflow: "hidden"
		});
		
		var length = SiteLoader.items.length;
		SiteLoader.doneStatus = length;
		
		for( var i = 0; i < length; i++ )
		{
			var imgLoad = $("<img></img>");
			$(imgLoad).attr("src", SiteLoader.items[i]);
			$(imgLoad).unbind("load");
			$(imgLoad).bind("load", function(){
				SiteLoader.imgCallback();
			});
			$(imgLoad).appendTo($(SiteLoader.preloader));
		}
	},
	
	spawnLoader: function()
	{
		if( SiteLoader.selectorPreload == "body" )
		{
			var height = $(window).height();
			var width = $(window).width();
			var position = "fixed";
		}
		else
		{
			var height = $(SiteLoader.selectorPreload).offset()['left'];
			var width = $(SiteLoader.selectorPreload).offset()['top'];
			var position = "absolute";
		}
		var left = $(SiteLoader.selectorPreload).offset()['left'];
		var top = $(SiteLoader.selectorPreload).offset()['top'];
		
		SiteLoader.overlay = $("<div></div>").appendTo($(SiteLoader.selectorPreload));
		$(SiteLoader.overlay).addClass("SLOverlay");
		$(SiteLoader.overlay).css({
			position: position,
			top: top,
			left: left,
			width: width + "px",
			height: height + "px"
		});
		
		SiteLoader.loadText = $("<div>Loading</div>").appendTo($(SiteLoader.overlay));
		SiteLoader.loadPerc = $("<div>0 %</div>").appendTo($(SiteLoader.loadText));
		
		$(SiteLoader.loadText).css({
			position: "relative",
			top: "45%",
			width: "100%",
			"text-align": "center",
			"color": "#333"
		});
		
		SiteLoader.loadBar = $("<div></div>").appendTo($(SiteLoader.overlay));
		$(SiteLoader.loadBar).addClass("SLLoader");
		
		$(SiteLoader.loadBar).css({
			position: "relative",
			top: "50%",
			width: "0%"
		});
	},
	
	animateLoader: function()
	{
		var perc = Math.floor( (100 / SiteLoader.doneStatus) * SiteLoader.doneNow );
		
		if( perc > 99 )
		{
			$(SiteLoader.loadBar).stop().animate({
				width: perc + "%"
			}, 500, "linear", function() {
				SiteLoader.doneLoad();
			});
		}
		else
		{
			$(SiteLoader.loadBar).stop().animate({
				width: perc + "%"
			}, 500, "linear", function() {});
			$(SiteLoader.loadPerc).text("" + perc + " %");
		}
		
		//console.debug(perc);
	},
	
	doneLoad: function()
	{
		clearTimeout(SiteLoader.ieTimeout);

		$(SiteLoader.loadBar).fadeOut(800);
		$(SiteLoader.loadText).fadeOut(800);
		$(SiteLoader.overlay).fadeOut(800);
		$('#masteroverlay').remove();
		setTimeout(function(){
			$(SiteLoader.loadText).remove();
			$(SiteLoader.loadBar).remove();
			$(SiteLoader.overlay).remove();
			$(SiteLoader.preloader).remove();
		}, 800);
	}
};



// usage: log('inside coolFunc',this,arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if(this.console){
    console.log( Array.prototype.slice.call(arguments) );
  }
};


/*
// catch all document.write() calls
(function(doc){
  var write = doc.write;
  doc.write = function(q){ 
    log('document.write(): ',arguments); 
    if (/docwriteregexwhitelist/.test(q)) write.apply(doc,arguments);  
  };
})(document);
*/

