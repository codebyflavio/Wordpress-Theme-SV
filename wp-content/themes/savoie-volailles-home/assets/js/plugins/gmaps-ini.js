

function createStoreMap (containerElm, address) {
    var coordsArr = address.split(",").slice(-2).map(Number);
    var coordinates = {
        lat: coordsArr[0],
        lng: coordsArr[1]
    };

    var map = new google.maps.Map(containerElm, {
        zoom: 15,
        center: coordinates
    });

    var infowindow = new google.maps.InfoWindow;
    infowindow.setContent(address);

    var marker = new google.maps.Marker({
        map: map,
        position: coordinates
    });



    google.maps.event.addListener(marker, "click", function () {
        infowindow.open(map, marker);
    });

    $(containerElm).closest(".modal").on("shown.bs.modal", function () {
        google.maps.event.trigger(map, "resize");
        map.setCenter(coordinates);
    });
}

function createMap (containerId) {
    var customMapType = new google.maps.StyledMapType([
        {
            stylers: [
                {'saturation': -100},
                {'lightness': 51},
                {'visibility': 'simplified'}
            ]
        },
        {
            elementType: 'labels',
            stylers: [{visibility: 'on'}]
        },
        {
            featureType: 'water',
            stylers: [{color: '#f7f4f4'}]
        },
        {
            featureType: 'road.highway',
            stylers: [{color: '#cc0033'}]
        }
    ], {
        name: 'IMFLAVIO.COM Style'
    });

    var image = new google.maps.MarkerImage(
        'assets/img/marker.png',
        new google.maps.Size(48,54),
        new google.maps.Point(0,0),
        new google.maps.Point(24,54)
    );

    var customMapTypeId = 'custom_style_' + containerId;

    var map = new google.maps.Map(document.getElementById(containerId), {
        zoom: 7,
        scrollwheel: false,
        center: {lat: 45.925841, lng: 5.979309},
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
        }
    });

    var infowindow = new google.maps.InfoWindow;
    infowindow.setContent('<b>Brooklyn</b>');

    var customMapTypeId = 'custom_style';
    map.mapTypes.set(customMapTypeId, customMapType);
    map.setMapTypeId(customMapTypeId);

    $("#" + containerId).closest(".modal").on("shown.bs.modal", function () {
        google.maps.event.trigger(map, "resize");
    });
}

// https://developers.google.com/maps/documentation/javascript/examples/
function initMap() {
    createMap("map");


    $(".modal .map-wrapper").each(function () {
        var $this = $(this);
        var address = $("input.map-address", $this).val();
        createStoreMap($this.find(".map_modal").get(0), address);
    });


}
