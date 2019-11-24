var locations = [
    ['ISH Events LLC, 26 Cain Dr , Plainview NY 11803', 40.785100, -73.451096, 4],
    ['ISH Events Queens NY 84-64 169th Street Suite 1 Jamaica NY 11432', 40.690201, -73.780421, 5],
    ['ISH Events Long Island NY 26 Cain Dr Plainview NY 11803', 40.787552, -73.453488, 3],
    ['ISH Events Stamford CT 36 Cerretta St Stamford CT 06907', 41.095690, -73.515107, 2],
  ];

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 9,
    center: new google.maps.LatLng(40.787552, -73.453488),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {  
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map
    });

    google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
  }