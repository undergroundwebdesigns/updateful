/**
* Handles basic tasks and provides basic services.
*/
var main_js = {
	postion: null,
	maps: new Array(),

	// Sets up. Gets the user's location
	initialize: function()
	{
		// Set default location (currently newyork):
		this.position = new google.maps.LatLng(40.713956, -74.003906);
		
		this.get_location();
		this.create_maps();
	},

	get_location: function()
	{
		if (Modernizr.geolocation) {
			navigator.geolocation.getCurrentPosition(jQuery.proxy(this.get_location_callback, this), jQuery.proxy(this.get_location_error, this));
		} else {
			// no native support; maybe try Gears?
		}
	},

	get_location_callback: function(position)
	{
		this.position = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
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
			if ($(el).is(":visible"))
			{
				var myOptions = {
					zoom: 10,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				this.maps[index] = new google.maps.Map(el, myOptions);
				this.maps[index].setCenter(this.position);
			}
		}, this));
	}
};

$(document).ready(function() {
	main_js.initialize();
});

$('#show_map').click(function() {

	$('#look_map_show').toggle('slow', function() {
		main_js.create_maps($('#look_map_show'));
	});
});