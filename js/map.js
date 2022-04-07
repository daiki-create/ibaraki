






// function initialize() {
    var matue = new google.maps.LatLng(36.487523, 140.401683);
    var mapOptions = {
        zoom: 9,
        center: matue
    }
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var ctaLayer = new google.maps.KmlLayer({
        url: 'http://noland.sakura.ne.jp/ibaraki/kml/ibaraki.kml',
        map: map
    });
    ctaLayer.setMap(map);
// }

// google.maps.event.addDomListener(window, 'load', initialize);