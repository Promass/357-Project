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

    return map;
}

function showSaved(lat, lng) {
    let map = initGoogle();

    var marker = null;
    var bounds = new google.maps.LatLngBounds();

    marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, lng),
        title: 'Saved Address'
    });

    bounds.extend(marker.position);
    marker.setMap(map);
    map.panTo(marker.position);
    map.setZoom(16);
}