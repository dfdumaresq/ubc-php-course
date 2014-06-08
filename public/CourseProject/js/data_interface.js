/**
 * Gets selection list of product ids from northwind database
 * TODO/FIX - diamonds with question mark characters are appearing in list
 */
function get_product_selectlist()
{

    $.ajax({ url: 'fetch_product_selectlist.php',
              success: function(data) {
                  $( "#productSelect").html(data);
              }
      });
}

/**
 * calcTotalSales(productId);
 * call back end process with query containing productId to iterated
 * over northwind xml data and calculate total sales and number of items
 * use AJAX
 * return success/failure callback function
 */
function calc_total_sales(productId)
{
    // alert("calc_total_sales: Product ID = " + productId);
    // Using associative/string/key-value post data
    var arData = {};
    arData["productId"] = productId;
    $.ajax({
        type: "POST",
        url:  "backend.php",
        data: arData,
        dataType: "JSON",
        success: function(result)
        {
            ajaxSuccess(result);
        },
        error:  ajaxError
    });
    return;
}

/**
* ajaxSuccess
* Update div with total sale and number of items
* return void
*/
function ajaxSuccess(result)
{
    // TODO: add span tags and create classes with style text-align right
    var message = "Total Items: " + result.totalItems + "<br/>" +
                  "Total Sales: $" + result.totalSales;
    $("#result").html(message);
}

function ajaxError(result)
{
    var message = "Error: " + result.status + ' - ' + result.statusText;
    // alert(message);
    $("#error").html(message);
}