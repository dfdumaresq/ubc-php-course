    <script type="text/javascript" src ="js/jquery.js"></script>
    <script type="text/javascript" src ="js/graph_interface.js"></script>
    <script type="text/javascript" src="js/graph_interface_ready.js"></script>
    <link rel="stylesheet" href="css/graph_styles.css"/>

    <h1>{$title}</h1>
    <h3>{$Explanation}</h3>
    <blockquote>
    <p>
      On jQuery document.ready(), a click event handler on the form submits a query string containing a date range from which a SQL query is performed on a MySQL database summing product sales over the given date range. JpGraph is used to generate a bar graph and returns the image source to jQuery which modifies the DOM tag and displays the product sales bar chart.
    </p>
    <p>
      This exercise could benefit from the use of <span style="cursor:help;color:green;font-style:italic" title="Asynchronous Javascript and XML">AJAX</span>: After clicking the 'Graph It' button you will notice a broken image icon, momentarily, while the SQL query is run on the server and the image is rendered. AJAX would allow us to replace the broken image with a loading message, before the call to the server is made and display the graph once it's ready for display. This is demonstrated in the next assignment on Data.
    </p>
    </blockquote>
    <div style="text-align:center">
      <h2>{$App_Title}</h2>
        <table border='0' align="center">
            <tr>
                <th>From Year</th>
                <td><select name="cboFromYear" id="cboFromYear">
                        <option value="1996">1996</option>
                        <option  value="1997">1997</option>
                        <option  value="1998">1998</option>
                    </select></td>
                <th>From Month</th>
                    <td>
                    <select id="cboFromMonth">
                      <option value='1'>Jan</option>
                      <option value='2'>Feb</option>
                      <option value='3'>Mar</option>
                      <option value='4'>Apr</option>
                      <option value='5'>May</option>
                      <option value='6'>Jun</option>
                      <option value='7'>Jul</option>
                      <option value='8'>Aug</option>
                      <option value='9'>Sep</option>
                      <option value='10'>Oct</option>
                      <option value='11'>Nov</option>
                      <option value='12'>Dec</option>
                      </select>
                    </td>
            </tr>
            <tr>
                <th>to Year</th>
                <td><select name="cboToYear" id="cboToYear">
                        <option  value="1996">1996</option>
                        <option  value="1997">1997</option>
                        <option  value="1998">1998</option>
                    </select></td>
                    <th>to Month</th>
                    <td>
                      <select id="cboToMonth">
                      <option value='1'>Jan</option>
                      <option value='2'>Feb</option>
                      <option value='3'>Mar</option>
                      <option value='4'>Apr</option>
                      <option value='5'>May</option>
                      <option value='6'>Jun</option>
                      <option value='7'>Jul</option>
                      <option value='8'>Aug</option>
                      <option value='9'>Sep</option>
                      <option value='10'>Oct</option>
                      <option value='11'>Nov</option>
                      <option value='12'>Dec</option>
                      </select>
                    </td>
            </tr>
            <tr>
                <td colspan="4" align='center'>
                    <input type="button" name="btnGetGraph" id="btnGetGraph" value="Graph It">
                </td>
            </tr>
        </table>
        <div id="debug"></div>
        <div id="divShowImage"><img id="graphImage" src="images/jpgraph.png"></div>
      </div>
