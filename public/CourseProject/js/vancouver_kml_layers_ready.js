// Global vars. Put 'em in ready, out of the way of the 'regular' code. -Jim Oleary
var bikewaysLayer;
var cityBoundaryLayer;
var communityCentresLayer;
var parkPolygonsLayer;
var rapidTransitLineLayer;
var rapidTransitStationsLayer;
var map;

$(document).ready(

        function()
        {

            /* adjust header/footer - put in function
            $("#header").height(75);
            $("#map").height($(document).height() - $("#header").height());
            */

            // Call the map initialization function
            initialize();

            /* Turn checks off and Set event handlers */
            $("#idRapidTransitLineLayer").prop("checked", false);
            $("#idRapidTransitLineLayer").click
            (
                function()
                {
                    toggleVisibility(rapidTransitLineLayer);
                }
            );

            $("#idRapidTransitStationsLayer").prop("checked", false);
            $("#idRapidTransitStationsLayer").click
            (
                function()
                {
                    toggleVisibility(rapidTransitStationsLayer);
                }
            );

            $("#idBikewaysLayer").prop("checked", false);
            $("#idBikewaysLayer").click
            (
                function()
                {
					toggleVisibility(bikewaysLayer);
                }
            );

            $("#idCityBoundaryLayer").prop("checked", false);
			$("#idCityBoundaryLayer").click
            (
                function()
                {
					toggleVisibility(cityBoundaryLayer);
                }
            );

            $("#idCommunityCentresLayer").prop("checked", false);
			$("#idCommunityCentresLayer").click
            (
                function()
                {
					toggleVisibility(communityCentresLayer);
                }
            );

            $("#idParkPolygonsLayer").prop("checked", false);
			$("#idParkPolygonsLayer").click
            (
                function()
                {
					toggleVisibility(parkPolygonsLayer);
                }
            );

        }
    );  //end document.ready
