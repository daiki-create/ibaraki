

var matue = new google.maps.LatLng(36.487523, 140.401683);
var mapOptions = {
    zoom: 9,
    center: matue,
    styles: [
        {
            featureType: 'all',
            elementType: 'geometry.fill	',
            stylers: [
            ]
        }
    ]
}
var map = new google.maps.Map(document.getElementById('map'), mapOptions);

ibaraki_layer = new google.maps.Data({map: map});
japan_layer = new google.maps.Data({map: map});

ibaraki_layer.loadGeoJson('geojson/ibaraki.geojson');
ibaraki_layer.setStyle(function() {
    return ({
        strokeColor: '#bf5f51',
        strokeWeight: 4,
        clickable: false,
        zIndex: 9999,
        fillOpacity: '0'
    });
});

japan_layer.loadGeoJson('geojson/japan.geojson');
japan_layer.setStyle(function() {
    return ({
        strokeWeight: 0,
        clickable: false,
        zIndex: 0,
        fillColor: '#000',
        fillOpacity: '0.3'
    });
});



