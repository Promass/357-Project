function initGoogle() {
    var location = {
        lat: 45.497,
        lng: -73.636
    };
    var options = {
        center: location,
        zoom: 12
    };

    map = new google.maps.Map(document.getElementById("Map-google"), options);

    autocomplete = new google.maps.places.Autocomplete(document.getElementById("Home-search-input"),
        {
            componentRestrictions: { 'country': ['ca'] },
            fields: ['geometry', 'name'],
        });

    var marker = null;
    var bounds = new google.maps.LatLngBounds();

    autocomplete.addListener("place_changed", () => {
        const place = autocomplete.getPlace();
        if (marker == null) {
            marker = new google.maps.Marker({
                position: place.geometry.location,
                title: 'Searched Address'
            })
            placeCoordinates(place.geometry.location.lng(), place.geometry.location.lat());
            disabledSearch();
            bounds.extend(marker.position);
            marker.setMap(map);
            map.panTo(marker.position);
            map.setZoom(16);
        }
        else {
            marker.setMap(null);
            marker = null;
            marker = new google.maps.Marker({
                position: place.geometry.location,
                title: 'Searched Address'
            })
            placeCoordinates(place.geometry.location.lng(), place.geometry.location.lat());
            disabledSearch();
            bounds.extend(marker.position);
            marker.setMap(map);
            map.panTo(marker.position);
            map.setZoom(16);
        }
    });

    document.getElementById("Home-search-address").addEventListener('focusout', () => {
        if (document.getElementById('Home-search-address').value == '') {
            marker.setMap(null);
            marker = null;
        }
    });
}

function placeCoordinates(longitude, latitude) {
    document.getElementById("Home-search-lng").value = longitude;
    document.getElementById("Home-search-lat").value = latitude;
}

function disabledSearch() {
    var lng = document.getElementById("Home-search-lng").value;
    var lat = document.getElementById("Home-search-lat").value;

    if (lng != "" && lat != "") {
        document.getElementById("Home-search-btn").disabled = false;
    }
    else {
        document.getElementById("Home-search-btn").disabled = true;
    }
}