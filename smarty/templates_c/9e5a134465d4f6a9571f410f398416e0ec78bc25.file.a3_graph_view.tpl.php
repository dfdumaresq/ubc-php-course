<?php /* Smarty version Smarty-3.1.17, created on 2014-04-24 18:53:24
         compiled from "../../smarty/templates/a3_graph_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13117613325359c014ddb7d0-89924755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e5a134465d4f6a9571f410f398416e0ec78bc25' => 
    array (
      0 => '../../smarty/templates/a3_graph_view.tpl',
      1 => 1398000544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13117613325359c014ddb7d0-89924755',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5359c014e60668_01743479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359c014e60668_01743479')) {function content_5359c014e60668_01743479($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Assignment 3 - Advanced PHP Programming</title>
        <script type="text/javascript" src ="js/jquery.js"></script>
        <script type="text/javascript" src ="js/graph_interface.js"></script>
        <script type="text/javascript" src="js/graph_interface_ready.js"></script>
        <link rel="stylesheet" href="css/styles.css"/>

    </head>
    <body>
        <div style="text-align:center">
        <h2 align='center'>Assignment 3 - Sum of Product Sales</h2>
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
                <th>To Year</th>
                <td><select name="cboToYear" id="cboToYear">
                        <option  value="1996">1996</option>
                        <option  value="1997">1997</option>
                        <option  value="1998">1998</option>
                    </select></td>
                    <th>To Month</th>
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
                    <input type="button" name="btnGetGraph" id="btnGetGraph" value="Graph it!">
                </td>
            </tr>
        </table>
        <div id="debug"></div>
        <div id="divShowImage"></div>
      </div>
    </body>
</html>
<?php }} ?>
