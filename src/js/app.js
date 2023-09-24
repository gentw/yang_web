import 'bootstrap';
import '@fortawesome/fontawesome-free/js/all';
import '../scss/main.scss';

import wow from 'wowjs';



import OwlSlider  from './modules/OwlSlider';



var owl = new OwlSlider();

import $ from 'jquery';

$(document).ready(function () {
	var $height = $("section.about-boxes .item-img").height();
	if($(window).width() > 768) {
	$('.item-txt').css({ 'height': $height });
	}


	$(window).resize(function () {
        $height = $("section.about-boxes .item-img").height();
		if($(window).width() > 768) {
		$('.item-txt').css({ 'height': $height });
		} 


		
	});

    new wow.WOW().init();
    

    //

    $(".form-group").find('p').contents().unwrap();
    $(".form-group > .wpcf7-form-control-wrap").contents().unwrap();
    $(".form-group").find("p").remove();


   });


function navOnScroll(){
    if($(window).width() > 991) { 
        $('.navbar-collapse').css("margin-top", "0");
    }

    if($(window).width() < 992) {
        if ($(window).scrollTop() >= 20) {
            $('.navbar-collapse').css("margin-top", "6.1rem");
        } else {
            $('.navbar-collapse').css("margin-top", "9.1rem");
        }
    } 

    $(window).scroll(function() {
    if ($(this).scrollTop() >= 20)
    { 
        $("nav").css('height', '6.1rem');
        if($(this).width() < 992) {
        $('.navbar-collapse').css("margin-top", "6.1rem");
        }
    } else {
        $("nav").css('height', '9.1rem');
        if($(this).width() < 992) {
        $('.navbar-collapse').css("margin-top", "9.1rem");
        }
    }
}); 
}

navOnScroll();

$(window).resize(function () {
    navOnScroll();
});

const loadGoogleMapsApi = require('load-google-maps-api');
 
var options = {
	key: 'AIzaSyDhBiQ6tU3cSikkas5vgpSnpo5IcZ2sAtU'
}

loadGoogleMapsApi(options).then(function (googleMaps) {
  
  var map = new googleMaps.Map(document.querySelector('.map'), {
    
    

    center: {
      lat: 24.9649998,
      lng: 55.0780762

    },
    zoom: 12,


    styles: [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 65
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": "50"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "30"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "40"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#ffff00"
            },
            {
                "lightness": -25
            },
            {
                "saturation": -97
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "lightness": -25
            },
            {
                "saturation": -100
            }
        ]
    }
]

	    

   
  })

  var uluru = {
      lat: 24.9649998,
      lng: 55.0780762
    }
    
    new googleMaps.Marker({
      position: uluru,
      map: map,
      icon: '/wp-content/themes/yang/dist/images/marker.png'
    });  
}).catch(function (error) {
  console.error(error)
})

