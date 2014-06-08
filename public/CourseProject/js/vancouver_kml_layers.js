var bikewaysLayer;
var cityBoundaryLayer;
var communityCentresLayer;
var parkPolygonsLayer;
var rapidTransitLineLayer;
var rapidTransitStationsLayer;
var map;

function initialize()
{
    var vancouver    = new google.maps.LatLng(49.261307,-123.1139097);
    var layerOptions = {preserveViewport:true}; // So the map doesn't change zoom and location when the layer loads
    var myOptions    =
                {
                    zoom: 12,
                    center: vancouver,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    noClear: true,
                };

    map                       = new google.maps.Map(document.getElementById("mapDiv"), myOptions);
    bikewaysLayer             = new google.maps.KmlLayer('http://netpub.cstudies.ubc.ca/perlstudent/gis/kml/vancouver/bikeways.kml',layerOptions);
    cityBoundaryLayer         = new google.maps.KmlLayer('http://netpub.cstudies.ubc.ca/perlstudent/gis/kml/vancouver/city_boundary.kml',layerOptions);
    communityCentresLayer     = new google.maps.KmlLayer("http://netpub.cstudies.ubc.ca/perlstudent/gis/kml/vancouver/community_centres.kml",layerOptions);
    parkPolygonsLayer         = new google.maps.KmlLayer("http://netpub.cstudies.ubc.ca/perlstudent/gis/kml/vancouver/park_polygons.kml",layerOptions);
    rapidTransitLineLayer     = new google.maps.KmlLayer("http://netpub.cstudies.ubc.ca/perlstudent/gis/kml/vancouver/rapid_transit_line.kml", layerOptions);
    rapidTransitStationsLayer = new google.maps.KmlLayer("http://netpub.cstudies.ubc.ca/perlstudent/gis/kml/vancouver/rapid_transit_stations.kml", layerOptions);
};

// google.maps.event.addDomListener(window, 'load', initialize);
// google.maps.event.addDomListener(window, "resize",
//     function() {
//     var center = map.getCenter();
//     google.maps.event.trigger(map, "resize");
//     map.setCenter(center);
//     });


/**
 * Toggles visibility of the given layer
 */
function toggleVisibility(layer)
{
    if(layer.getMap() == null)
    {
        layer.setMap(map);
    }
    else
    {
        layer.setMap(null);
    }
}
