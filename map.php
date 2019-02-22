<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

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

	<title>Buses</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">


</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li class="active">
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Maps</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

		<div class="content">
            <div class="container-fluid">
                <div class="card card-map">
					<div class="header">
                        <h4 class="title">Google Maps</h4>
                    </div>
					<div class="map">
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

                    </div>
				</div>
			</div>
		</div>

		<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>



</html>
