 var initMap = function (){
	 (function($){
    'use strict';
	
var historicalOverlay;
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
	  zoom: 18,
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





	//Start departments
	const cse = {
    latLng:{lat:  6.796719, lng: 79.900070},
    bounds:{
        north:  6.797205,
        south: 6.796535,
        east: 79.900803,
        west: 79.899407
    },
    overlay: 'http://svgshare.com/i/1Q4.svg'
	};
	
	var dep = cse;
	var marker = new google.maps.Marker({
			position: dep.latLng,
			map: map,
			draggable: false,
			title: 'CSE'
		});

	historicalOverlay = new google.maps.GroundOverlay(
		dep.overlay,
		dep.bounds);
	historicalOverlay.setMap(	);


	//End departments
	
})(jQuery);	
 }  