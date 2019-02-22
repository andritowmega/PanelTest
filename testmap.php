<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js"
            type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js"
            type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-ui.js"
            type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css"
          href="http://js.api.here.com/v3/3.0/mapsjs-ui.css" />
    <script src="http://js.api.here.com/v3/3.0/mapsjs-mapevents.js"
            type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-pano.js"
            type="text/javascript" charset="utf-8"></script>
</head>
<body>
<div style="width: 100%; height: 480px" id="mapContainer"></div>
<script>
    // Initialize the platform object:
    var platform = new H.service.Platform({
        'app_id': 'ZhfsqYuaiPnJC2KBrdlJ',
        'app_code': 'WfnZpozAlzu7vNXLP3qYYQ'
    });

    // Get the default map types from the Platform object:
    var defaultLayers = platform.createDefaultLayers();

    // Instantiate the map:
    var map = new H.Map(
        document.getElementById('mapContainer'),
        defaultLayers.normal.map,
        {
            zoom: 10,
            center: { lng: -71.5214575, lat:-16.4632348  }
        });


    // Create an info bubble object at a specific geographic location:
    var bubble = new H.ui.InfoBubble({ lng: -71.522466, lat: -16.4632348 }, {
        content: '<b>Hello World!</b>'
    });

    // Enable the event system on the map instance:
    var mapEvents = new H.mapevents.MapEvents(map);

    // Add event listeners:
    map.addEventListener('tap', function(evt) {
        // Log 'tap' and 'mouse' events:
        console.log(evt.type, evt.currentPointer.type);
    });

    // Instantiate the default behavior, providing the mapEvents object:
    var behavior = new H.mapevents.Behavior(mapEvents);
    // Create the default UI:
    var ui = H.ui.UI.createDefault(map, defaultLayers, 'es-ES');

    ui.addBubble(bubble);

    // Define a variable holding SVG mark-up that defines an icon image:
    var svgMarkup = '<svg width="24" height="24" ' +
        'xmlns="http://www.w3.org/2000/svg">' +
        '<rect stroke="white" fill="#1b468d" x="1" y="1" width="22" ' +
        'height="22" /><text x="12" y="18" font-size="12pt" ' +
        'font-family="Arial" font-weight="bold" text-anchor="middle" ' +
        'fill="white">H</text></svg>';

    // Create an icon, an object holding the latitude and longitude, and a marker:
    var icon = new H.map.Icon(svgMarkup),
        coords = {lat: -16.4632348, lng: -71.5214575},
        marker = new H.map.Marker(coords, {icon: icon});

    // Add the marker to the map and center the map at the location of the marker:
    map.addObject(marker);
    map.setCenter(coords);

    var search = new H.places.Search(platform.getPlacesService()),
        searchResult, error;

    // Define search parameters:
    var params = {
        // Plain text search for places with the word "hotel"
        // associated with them:
        'q': 'hotel',
        //  Search in the Chinatown district in San Francisco:
        'at': '37.7942,-122.4070'
    };

    // Define a callback function to handle data on success:
    function onResult(data) {
        searchResult = data;
    }

    // Define a callback function to handle errors:
    function onError(data) {
        error = data;
    }

    // Run a search request with parameters, headers (empty), and
    // callback functions:
    search.request(params, {}, onResult, onError);

</script>
</body>
</html>