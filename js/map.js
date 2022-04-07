






// function initialize() {
    var matue = new google.maps.LatLng(36.487523, 140.401683);
    var mapOptions = {
        zoom: 9,
        center: matue
    }
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var ctaLayer = new google.maps.KmlLayer({
        url: 'http://localhost/ibaraki/kml/ibaraki_2.kml',
        // url: 'http://noland.sakura.ne.jp/ibaraki/kml/ibaraki.kml',

        // url: 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml',
        // url: 'http://localhost/ibaraki/kml/test.kml',
        // url: 'http://noland.sakura.ne.jp/ibaraki/kml/test.kml',
    });
    ctaLayer.setMap(map);
// }

// google.maps.event.addDomListener(window, 'load', initialize);