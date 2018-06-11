function initMap() {
    mApp.showLoader('#box');
    var map = new google.maps.Map(
        document.getElementById('map'), { zoom: 12, center: { lat: 31.4826352, lng: 74.3637895 } });
    var input = document.getElementById('pac-input');
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    $(input).removeClass('hidden');
    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            return;
        }
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }
    });
    var clickHandler = new ClickEventHandler(map, origin);
    mApp.hideLoader('#box');
}

var ClickEventHandler = function (map, origin) {
    this.origin = origin;
    this.map = map;
    this.placesService = new google.maps.places.PlacesService(map);
    this.map.addListener('click', this.handleClick.bind(this));
};

ClickEventHandler.prototype.handleClick = function (event) {
    if (event.placeId) {
        event.stop();
        this.getPlaceInformation(event.placeId);
    }
};

ClickEventHandler.prototype.getPlaceInformation = function (placeId) {
    mApp.showLoader('#box');
    var me = this;
    this.placesService.getDetails({ placeId: placeId }, function (place, status) {
        if (status === 'OK') {
            $('.images-row').html('');
            $('#place_id').val(place.place_id);
            $('#name').val(place.name);
            $('#address').val(place.formatted_address);
            showImages(place.photos);
        }
        mApp.hideLoader('#box');
    });
};

function showImages(photos) {
    if (photos != null) {
        photos.forEach((photo, index) => {
            let pic = photo.getUrl({ 'maxWidth': 500, 'maxHeight': 500 });
            $('.images-row').append(`
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="${pic}"
                        alt="Card image cap">
                    <div class="card-body">
                        <p>Picture #${index + 1}</p>
                    </div>
                </div>
            </div>
        `);
            $('.location-images').append(`
            <input type="hidden" name="images[]" value="${pic}">
        `);
        })
    }
}