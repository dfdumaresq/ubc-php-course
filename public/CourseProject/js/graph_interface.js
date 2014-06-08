//-------------makeImgTag BEGINS-------------------
/**
 * Makes an image tag and puts it on the web page, causing the browser to
 * load the image
 */
function makeImgTag()
{
    fromYear = $("#cboFromYear option:selected").val();
    toYear = $("#cboToYear option:selected").val();
    fromMonth = $("#cboFromMonth option:selected").val();
    toMonth = $("#cboToMonth option:selected").val();
    queryString = "fromYear=" + fromYear + "&fromMonth=" + fromMonth +
                   "&toYear=" + toYear + "&toMonth=" + toMonth;
    // $("#debug").append(queryString + "<br>");

   // imgTag = "<img src = 'bargraph.php'>";
    imgTag = "<img src='show_graph.php?" + queryString + "'>";
    // alert(imgTag);

    $("#divShowImage").html(imgTag);

}// end makeImgTag
//-----------makeImgTag ENDS-----------------------


