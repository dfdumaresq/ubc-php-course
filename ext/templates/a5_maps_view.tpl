<link href="css/generic_map_sidebar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type='text/javascript' src = "js/jquery.js"></script>
<script type='text/javascript' src = "js/vancouver_kml_layers.js"></script>
<script type='text/javascript' src = "js/vancouver_kml_layers_ready.js"></script>

<h1>{$title}</h1>
<h3>{$Explanation}</h3>
{$App_Title}
  <div id="mapContainer">
    <div id="mapDiv"></div>
    <div id="sidebarDiv">
      <table align="center">
          <tr>
            <td>
                <input type='checkbox'     id="idBikewaysLayer">
            </td>
            <th align='left'>
              Bikeways
            </th>
          </tr>
          <tr>
            <td>
                <input type='checkbox'  id="idCityBoundaryLayer">
            </td>
            <th align='left'>
              City Boundary
            </th>
          </tr>
          <tr>
            <td>
                <input type='checkbox'   id="idCommunityCentresLayer">
            </td>
            <th align='left'>
              Community Centres
            </th>
          </tr>
          <tr>
            <td>
                <input type='checkbox'   id="idParkPolygonsLayer">
            </td>

            <th align='left'>
              Park Polygons
            </th>
          </tr>
          <tr>
            <td>
                <input type='checkbox'     id="idRapidTransitLineLayer">
            </td>
            <th align='left'>
              Rapid Transit Line
            </th>
          </tr>
          <tr>
            <td>
                <input type='checkbox'     id="idRapidTransitStationsLayer">
            </td>
            <th align='left'>
              Rapid Transit Stations
            </th>
          </tr>

      </table>
      <p style="font-size:0.8em; margin:0.8em;">Click to toggle visibility of layers on and off.</p>
    </div>
  </div>
