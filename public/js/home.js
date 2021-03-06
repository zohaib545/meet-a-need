function initMap() {
    var map = new google.maps.Map(
        document.getElementById('map-object'), {
            zoom: 12, center: { lat: 31.4826352, lng: 74.3637895 }
        });
    var infobox = new InfoBox({
        content: 'empty',
        disableAutoPan: false,
        maxWidth: 0,
        pixelOffset: new google.maps.Size(-250, -330),
        zIndex: null,
        closeBoxURL: "",
        infoBoxClearance: new google.maps.Size(1, 1),
        isHidden: false,
        isOpen: false,
        pane: "floatPane",
        enableEventPropagation: false
    });
    infobox.addListener('domready', function () {
        $('.infobox-close').on('click', function () {
            infobox.close(map);
            infobox.isOpen = false;
        });
    });
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var marker = new google.maps.Marker({ position: pos, map: map });

        }, function () {
            console.log("Error occured");
        });
    } else {
        // Browser doesn't support Geolocation
        // handleLocationError(false, infoWindow, map.getCenter());
        console.log("No geo location")
    }
    locations.forEach(location => {
        var marker = new google.maps.Marker({
            position: { lat: parseFloat(location.lat), lng: parseFloat(location.lng) },
            map: map,
            icon: `/images/markers/${location.type}.png`,
            title: location.name
        });
        marker.addListener('click', function () {
            mApp.showLoader('.map-object');
            map.setCenter(marker.getPosition());
            let photo = null;
            if (location.images.length > 0)
                photo = location.images[0].url.replace(/&amp;/g, '&');
            console.log(photo);
            $.post(`/api/location/infobox`, { name: location.name.replace(/&amp;/g, '&'), address: location.address.replace(/&amp;/g, '&'), place_id: location.place_id, photo: photo, phone: 'N/A', rating: 'N/A', website: 'N/A' }).done(response => {
                if (!infobox.isOpen) {
                    infobox.setContent(response);
                    infobox.open(map);
                    infobox.isOpen = true;
                    infobox.setPosition(marker.getPosition());
                } else {
                    infobox.close(map, this);
                    infobox.isOpen = false;
                    infobox.setContent(c);
                    infobox.open(map);
                    infobox.isOpen = true;
                    infobox.setPosition(marker.getPosition());
                }
                mApp.hideLoader('.map-object');
            });
        });
    })
    // var input = document.getElementById('search');
    // var autocomplete = new google.maps.places.Autocomplete(input);
    // autocomplete.bindTo('bounds', map);
    // autocomplete.addListener('place_changed', function () {
    //     var place = autocomplete.getPlace();
    //     if (!place.geometry) {
    //         return;
    //     }
    //     if (place.geometry.viewport) {
    //         map.fitBounds(place.geometry.viewport);
    //     } else {
    //         map.setCenter(place.geometry.location);
    //         map.setZoom(17);
    //     }
    // });
    // var clickHandler = new ClickEventHandler(map, origin);
}

// var ClickEventHandler = function (map, origin) {
//     this.origin = origin;
//     this.map = map;
//     this.placesService = new google.maps.places.PlacesService(map);
//     this.infobox = new InfoBox({
//         content: 'empty',
//         disableAutoPan: false,
//         maxWidth: 0,
//         pixelOffset: new google.maps.Size(-250, -330),
//         zIndex: null,
//         closeBoxURL: "",
//         infoBoxClearance: new google.maps.Size(1, 1),
//         isHidden: false,
//         isOpen: false,
//         pane: "floatPane",
//         enableEventPropagation: false
//     });
//     var me = this;
//     this.infobox.addListener('domready', function () {
//         $('.infobox-close').on('click', function () {
//             me.infobox.close(map);
//             me.infobox.isOpen = false;
//         });
//     });
//     this.map.addListener('click', this.handleClick.bind(this));
// };

// ClickEventHandler.prototype.handleClick = function (event) {
//     if (event.placeId) {
//         event.stop();
//         this.getPlaceInformation(event.placeId);
//     }
// };

// ClickEventHandler.prototype.getPlaceInformation = function (placeId) {
//     var me = this;
//     mApp.showLoader('.map-object');
//     this.placesService.getDetails({ placeId: placeId }, function (place, status) {
//         if (status === 'OK') {
//             console.log(place);
//             let photo = null;
//             if (place.photos)
//                 photo = place.photos[0].getUrl({ maxWidth: 500, maxHeight: 500 });
//             $.post(`/api/location/infobox`, { name: place.name, address: place.formatted_address, place_id: place.place_id, photo: photo, phone: place.formatted_phone_number, rating: place.rating, website: place.website }).done(response => {
//                 var c = response;
//                 if (!me.infobox.isOpen) {
//                     me.infobox.setContent(c);
//                     me.infobox.open(me.map);
//                     me.infobox.isOpen = true;
//                     me.infobox.setPosition(place.geometry.location);
//                 } else {
//                     me.infobox.close(me.map, this);
//                     me.infobox.isOpen = false;
//                     me.infobox.setContent(c);
//                     me.infobox.open(me.map);
//                     me.infobox.isOpen = true;
//                     me.infobox.setPosition(place.geometry.location);
//                 }
//                 mApp.hideLoader('.map-object');
//             });
//         }
//     });
// };

initMap();

$(document).ready(function () {
    $(document).on('click', 'div.listing-row-medium', function () {
        let location_id = $(this).attr('data-location');
        mApp.showLoader('.map-results-detail');
        $.get(`/api/location?location_id=${location_id}`).done(function (response) {
            $('.map-results-detail').html(response);
            $('.map-results-detail-gallery, .testimonials').slick({
                infinite: true,
                dots: true,
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1
            });
            $('.map-results-list, .map-results-detail, .hero-promo-items-wrapper').TrackpadScrollEmulator();
            mApp.hideLoader('.map-results-detail');
        });
    });
});