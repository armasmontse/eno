
window.onload = function () { 

		var styles = [
    {
		"stylers": [{
            "visibility": "on"
        }]
    }, {
        "featureType": "road",
            "stylers": [
		{"visibility": "on"}, 
		{"color": "#ffffff"}
		]
    }, {
		  "featureType": "road.arterial",
            "stylers": [{
            "visibility": "on"
        }, {
            "color": "#ffffff"
        }]
    }, {
        "featureType": "road.highway",
            "stylers": [{
            "visibility": "on"
        }, {
            "color": "#ffffff"
        }]
    }, {
        "featureType": "landscape",
            "stylers": [{
            "visibility": "on"
        }, {
            "color": "#f1ecdb"
        }]
    }, {
        "featureType": "water",
            "stylers": [{
            "visibility": "on"
        }, {
            "color": "#f1ecdb"
        }]
    },{
        "featureType": "poi.park",
            "elementType": "geometry.fill",
            "stylers": [{
            "visibility": "on"
        }, {
            "color": "#f1ecdb"
        }]
    }, {
        "elementType": "labels.text.fill",
            "stylers": [{
            "visibility": "on"
        },{ "color": "#000000" } ]
    }, {
    	"featureType": "transit.station",
    	"elementType": "labels.text",
    	"stylers": [
    		{ "visibility": "off" },{ "color": "#000000" }
    	]
    },{
    	"featureType": "transit.station",
    	"elementType": "labels",
    	"stylers": [
    		{ "visibility": "off" } 
    	]
    },
	 {
    	"featureType": "transit.station",
    	"elementType": "labels.text.fill",
    	"stylers": [
    		{ "visibility": "off" },
    		{ "color": "#ffffff" }
    	]
    }, {
    	"featureType": "road.local",
    	"elementType": "labels.text.fill",
    	"stylers": [
    		{ "visibility": "on" },
    		{ "color": "#000000" }
    	]
    }, {
    	featureType: "poi.business", 
          elementType: "labels", 
          stylers: [ 
              { visibility: "off" } 
    	]
    }
  ];
  


 		var styledMap = new google.maps.StyledMapType(styles,{name: ""});



        var mapOptions = {
          center: new google.maps.LatLng(19.4206712, -99.213362,17),
          zoom: 16,
		  zoomControl: false,
    	  scaleControl: false,
		  mapTypeControl: false,
          mapTypeControlOptions: {
      	  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    		}
  		};
		  
        var map = new google.maps.Map(document.getElementById("mapa-virreyes"),
            mapOptions);
			
		map.mapTypes.set('map_style', styledMap);
  		map.setMapTypeId('map_style');
		
		var marker = new google.maps.Marker({
    position: new google.maps.LatLng(19.4206712, -99.213362,17),
    map: map,
    title: 'Av. Explanada 730'
  });
		
}



