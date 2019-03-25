<!DOCTYPE html>
<html lang="en">
<head>

  <title>Fish Migration Roadmap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <link rel="icon" href="img/4.jpg">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.js'></script>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.css' rel='stylesheet' />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css">
  <script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>

  <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.mapbox.css' rel='stylesheet' />

  <script src="https://rawgithub.com/ismyrnow/Leaflet.groupedlayercontrol/master/src/leaflet.groupedlayercontrol.js"></script>

  <link rel="stylesheet" href="css/leaflet-gesture-handling.min.css" type="text/css">
  <script src="js/leaflet-gesture-handling.min.js"></script>

  <style>
  body {
    font: 14px Montserrat, sans-serif;
    line-height: 1.8;
    color: #555555;
  }
  p {
    font-size: 14px;
  }
  .margin {
    margin-bottom: 40px;
  }
  .bg-1 {
    background-color: #ffffff;
    color: #555555;
    padding-left: 15px;
    padding-right: 15px;
    margin-left: 15px;
    margin-right: 15px;
  }
  .bg-2 {
    background-color: #ffffff; /
    color: #555555;
  }
  .bg-3 {
    background-color: #ffffff;
    color: #555555;
  }
  .footer {
    background-color: #4e8096;
    color: #d5d5d5;
  }
  .footer a {
    color: #d5d5d5;
  }
  .container-fluid {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  .navbar {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #4e8096;
    font-size: 15px !important;
    letter-spacing: 1px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #4e8096 !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  #map { height: 480px;}}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="mb-0 h4">Fish Migration Roadmap</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#About">About</a></li>
        <li><a href="#map">Map</a></li>
        <li><a href="#Barrier Information Form">Barrier Information Form</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div id = "About" class = "container-fluid bg-1 text-center">
  <br>
  <br>
  <br>
  <h4>About</h4>
  <br>
  <h5 class = "line-height:2, text-justify">
    In the UK we have fundamentally changed the way our rivers work, straightening and deepening their channels to get water off the land as quickly as possible.
    This has effectively turned them into water chutes, which benefited our agricultural and industrial industries by providing drainage and water transport corridors.
    We have also built <b>weirs</b> and <b>sluices</b> to control the water flow.  <br> <br>
    But this fragmentation has led to some major problems. A river is meant to meander across the landscape and have areas either side that can flood safely,
    called <b>floodplains</b>. The meandering slows the waterflow, stopping flash floods and creating pockets of habitat for wildlife and plants. Floodplains allow
    for natural drainage and create wetlands that combat pollution and create pockets of habitat that are very important for migratory fish. The lack of them
    has contributed to the decline of some species, as have sluices and other barriers to swimming upstream. Diadromous fish, such as the <b>European eel</b>, <b>bass</b>,
    <b>sea lamprey</b> and <b>flounder</b>, must be able to migrate between marine and freshwater habitats to reach their breeding, nursery and feeding grounds. <br> <br>
    Various EU directives and national legislation require improvements to our rivers and, in turn, fish migration. Some great work has already been done
    to ‘re-meander’ rivers, restore wetlands and reconnect floodplains. And technical solutions to man-made barriers – collectively known as <b>“fish passes”</b> – are
    helping to recreate fishes’ natural migration routes. Although they vary in form and complexity, many enable fish to navigate barriers by swimming and leaping
    up a series of low steps leading into the water on the other side. <br> <br>
    By bringing together all the relevant data on fish migration barriers across the greater Thames estuary, we will be able to identify entire migratory routes
    and create a road map of the ‘major highways’, ‘A-roads’ and ‘B-roads’ that the fish would use if there were no barriers preventing them. As well as helping
    to prioritise where fish passes are needed, the completed road map will help to identify opportunities for restoring habitat during work on sea or flood defences,
    river restoration and land development.</h5>
</div>
<div class = "container-fluid bg-1 text-center">
<div class="row">
  <div class="col-md-4">
      <p>Lock</p>
      <img src="img/lock.JPG" class="img-responsive margin" style="display:inline" width="500" height="500"></a>
    </div>
    <div class="col-md-4">
      <p>Weir</p>
      <img src="img/weir.jpg" class="img-responsive margin" style="display:inline" width="500" height="500"></a>
    </div>
    <div class="col-md-4">
      <p>Fish pass</p>
      <img src="img/fishpass.JPG" class="img-responsive margin" style="display:inline" width="500" height="500"></a>
    </div>
  </div>
</div>
<br>

<!-- Second Container -->
<div>
<h4 class="container bg-2 text-center">Map</h4>
</div>
<div id = "map" class="container bg-2 text-center">
<script>
var map = L.map('map',{
center: [51.6, -0.1],
zoom: 9,
scrollWheelZoom: false,
gestureHandling: true,
gestureHandlingOptions: {
        text: {
            touch: "Use two fingers to move the map"
        }
    }
});
var Hydda_Base = L.tileLayer('https://{s}.tile.openstreetmap.se/hydda/base/{z}/{x}/{y}.png', {
	maxZoom: 18,
	attribution: 'Tiles courtesy of <a href="http://openstreetmap.se/" target="_blank">OpenStreetMap Sweden</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
var Mapbox = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
maxZoom: 19,
id: 'mapbox.streets',
accessToken: 'pk.eyJ1Ijoid2FuZGFib2RuYXIiLCJhIjoiY2p0NXU3djg5MDNrZzN6bnpoaGx6MmMzMCJ9.1ZSsBHP1VNrORNIN_p0_Xg'
}).addTo(map);
var geojsonLayerBarriers = new L.GeoJSON.AJAX("https://raw.githubusercontent.com/ThamesEstuaryPartnership/barrier/master/barriers.geojson", {
  pointToLayer: function(feature,yx){
    var marker = new L.Marker(yx);
    marker.bindPopup('</h1><p>Feature: '+feature.properties.Feature+'</h1><p>Pass: '+feature.properties.Pass+'</p>')
    return marker;}
});
geojsonLayerBarriers.addTo(map);
var ThamesStyle = {
        "color": "#2e5b96",
        "weight": 1,
        "opacity": 1,
        "fillOpacity": 1,
        "fillColor": "#2e5b96"
    };
var geojsonLayerThames = new L.GeoJSON.AJAX("https://raw.githubusercontent.com/ThamesEstuaryPartnership/barrier/master/thames.geojson", {
  style:ThamesStyle,
});
geojsonLayerThames.addTo(map);
var AStyle = {
        "color": "#5c84b8",
        "weight": 2,
        "opacity": 1,
        "fillOpacity": 1,
        "fillColor": "#5c84b8"
    };
var geojsonLayerA = new L.GeoJSON.AJAX("https://raw.githubusercontent.com/ThamesEstuaryPartnership/barrier/master/aroads.geojson", {
  style:AStyle,
});
geojsonLayerA.addTo(map);
var BStyle = {
        "color": "#85a3ca",
        "weight": 2,
        "opacity": 1,
        "fillOpacity": 1,
        "fillColor": "#85a3ca"
    };
var geojsonLayerB = new L.GeoJSON.AJAX("https://raw.githubusercontent.com/ThamesEstuaryPartnership/barrier/master/broads.geojson", {
  style:BStyle,
});
geojsonLayerB.addTo(map);
var BoroughsStyle = {
        "color": "#7fbf9f",
        "weight": 1,
        "opacity": 1,
        "fillOpacity": .2,
        "fillColor": "#7fbf9f"
    };
var geojsonLayerBoroughs = new L.GeoJSON.AJAX("https://raw.githubusercontent.com/ThamesEstuaryPartnership/barrier/master/boroughs.geojson",{
        style:BoroughsStyle,
});
geojsonLayerBoroughs.addTo(map);
var baseMaps = {
  'Rivers': Hydda_Base,
  'Mapbox': Mapbox
};
var groupedOverlays = {
        "Barriers to fish migration": {
          "<img src = 'https://raw.githubusercontent.com/ThamesEstuaryPartnership/barrier/master/marker-icon.png' width='8' height='11'> Barriers": geojsonLayerBarriers
        },
        "Migration routes": {
          "<img src = 'https://raw.githubusercontent.com/ThamesEstuaryPartnership/barrier/master/h.jpg' width='10' height='10'> Highway": geojsonLayerThames,
          "<img src = 'https://raw.githubusercontent.com/ThamesEstuaryPartnership/barrier/master/a.jpg' width='10' height='10'> A-Roads": geojsonLayerA,
          "<img src = 'https://raw.githubusercontent.com/ThamesEstuaryPartnership/barrier/master/b.jpg' width='10' height='10'> B-Roads": geojsonLayerB
        },
        "London": {
          "<img src = 'https://raw.githubusercontent.com/ThamesEstuaryPartnership/barrier/master/boroughs.jpeg' width='14' height='13'>Boroughs": geojsonLayerBoroughs
        }};
var bounds = L.latLngBounds([[51.678200, -0.500250], [51.678200, 0.253993], [51.366800, 0.253993], [51.366800, -0.500250]]);
map.fitBounds(bounds);
L.easyButton('<i class="fa fa-home" style="font-size:15px;"></i>',
function(){
  map.fitBounds(bounds);
},'Zoom To Home').addTo(map);
L.control.groupedLayers(baseMaps, groupedOverlays).addTo(map);
L.control.locate().addTo(map);
</script>
</div>

<!-- Third Container -->
<div id="Barrier Information Form" class="container-fluid bg-3 text-center">
  <br>
  <br>
  <h4>Barrier Information Form</h4>
    <iframe
    src="https://fishroadmap.000webhostapp.com/index.html"
    style=" border-width:0 "
    width="100%" height="650"
    frameborder="0" scrolling="no">
    </iframe>
    <h4>Get in touch</h4>
    <h4><span class="glyphicon glyphicon-envelope"></span> w.bodnar[at]ucl.ac.uk</h4>
    <br>
</div>

<!-- Fourth Container -->
<div class="container-fluid bg-3 text-center">
  <div class="row">
    <div class="col-lg-6">
      <a href="https://thamesestuarypartnership.org/">
      <img src="img/1.jpg" class="img-responsive margin" style="display:inline" width="200" height="200"></a>
    </div>
    <div class="col-lg-6">
      <a href="https://www.thames21.org.uk/joinacampaign/londonriversweek/">
      <img src="img/2.jpg" class="img-responsive margin" style="display:inline" width="140" height="140"></a>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid footer text-center">
  <a class="up-arrow" href="#About" data-toggle="tooltip" title="Up">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Copyright © 2019 Thames Estuary Partnership</p>
</footer>

</body>
</html>
