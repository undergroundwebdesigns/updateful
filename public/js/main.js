/**
* Handles basic tasks and provides basic services.
*/
var main_js = {
	postion: null,
	accuracy: null,
	maps: new Array(),

	// Sets up. Gets the user's location
	initialize: function()
	{
		this.initialize_forms();
		
		// Set default location (currently newyork):
		this.position = new google.maps.LatLng(40.713956, -74.003906);
		
		this.get_location();
		this.create_maps();
	},
	
	initialize_forms: function()
	{
		$('form').each(jQuery.proxy(function (index, el){
			var func = jQuery.proxy(this.form_submit_handler, this);
			$(el).bind('submit', func);
		}, this));
	},
	
	form_submit_handler: function(event)
	{
		event.preventDefault();
		
		var form = $(event.target);
		
		//start the ajax  
		$.ajax({  
			//this is the php file that processes the data and send mail  
			url: form[0].action,   

			//GET method is used  
			type: "POST",  

			//pass the data           
			data: form.serialize(),       

			//Do not cache the page  
			cache: false,  

			//success  
			success: jQuery.proxy(this.form_submit_success_handler, this)
		});
	},
	
	form_submit_success_handler: function(result)
	{
		alert(result);
	},
	
	form_submit_error_handler: function()
	{
		alert('error');
	},

	get_location: function()
	{
		if (Modernizr.geolocation) {
			var geo_prefs = {
				enableHighAccuracy: mobile,
				maximumAge: 300 // 5 minutes.
			}
			navigator.geolocation.getCurrentPosition(jQuery.proxy(this.get_location_callback, this), jQuery.proxy(this.get_location_error, this), geo_prefs);
		} else {
			// no native support; maybe try Gears?
		}
	},

	get_location_callback: function(position)
	{
		this.position = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
		this.accuracy = position.coords.accuracy;
		this.create_maps();
	},

	get_location_error: function(errorObj)
	{
		if (errorObj.code != 1)
		{
			alert('Your location could not be determined.');
		}
	},

	create_maps: function(top_el)
	{
		var collection = null;
		if (top_el)
		{
			collection = top_el.find('.js_gmaps_canvas');
		}
		else
		{
			collection = $('.js_gmaps_canvas');
		}
		
		collection.each(jQuery.proxy(function(index, el){
			if ($(el).is(":visible") && $(el).children().length == 0)
			{
				var myOptions = {
					zoom: 15,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				this.maps[index] = new google.maps.Map(el, myOptions);
				this.maps[index].setCenter(this.position);
				
				// If mobile, put a dot on the map:
				if (mobile)
				{
					var markerOpts = {
						clickable: false,
						map: this.maps[index],
						position: this.position
					};
					google.maps.Marker(markerOpts);
				}
			}
		}, this));
	}
};

$(document).ready(function() {
	main_js.initialize();
});

/* UI JS TO BE UPDATED */

/* Thumbnail hover effect */

$("ul.thumb li").hover(function() {
	$(this).css({'z-index' : '10'}); /*Add a higher z-index value so this image stays on top*/ 
	$(this).find('img').addClass("hover").stop() /* Add class of "hover", then stop animation queue buildup*/
		.animate({
			marginTop: '-80px', /* The next 4 lines will vertically align this image */ 
			marginLeft: '-80px',
			top: '50%',
			left: '50%',
			width: '130px', /* Set new width */
			height: '130px', /* Set new height */
			padding: '10px'
		}, 200); /* this value of "200" is the speed of how fast/slow this hover animates */

	} , function() {
	$(this).css({'z-index' : '0'}); /* Set z-index back to 0 */
	$(this).find('img').removeClass("hover").stop()  /* Remove the "hover" class , then stop animation queue buildup*/
		.animate({
			marginTop: '0', /* Set alignment back to default */
			marginLeft: '0',
			top: '0',
			left: '0',
			width: '50px', /* Set width back to default */
			height: '50px', /* Set height back to default */
			padding: '5px'
		}, 400);
});

/* Show individual item update blocks */

$('#show_map').click(function() {

	$('#look_map_show').toggle('slow', function() {
		main_js.create_maps($('#look_map_show'));
	});
});

$('#show_tag').click(function() {
	$('#look_tag_hover').toggle('slow', function() {
		// Animation complete.
	});
});

$('#show_photo').click(function() {
	$('#look_photo_show').toggle('slow', function() {
		// Animation complete.
	});
});