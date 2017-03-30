(function($){
    'use strict';
	
	//Home Page map
	var styleArray = [
	  {
		"featureType": "water",
		"elementType": "geometry.fill",
		"stylers": [
		  {
			"color": "#65ac4c"
		  }
		]
	  }
	];

	var mapOptions = {
	  center: new google.maps.LatLng(6.796877,79.9017781),
	  zoom: 15,
	  styles: styleArray,
	  scrollwheel: false,
	  backgroundColor: 'transparent',
		mapTypeControl: false,          
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("home-map"),
	  mapOptions);        
	var myLatlng = new google.maps.LatLng(6.796877,79.9017781);      
	var marker = new google.maps.Marker({
	  position: myLatlng,
	  map: map,
	  icon: 'images/map-icon.png'
	});
	
	
})(jQuery);	  