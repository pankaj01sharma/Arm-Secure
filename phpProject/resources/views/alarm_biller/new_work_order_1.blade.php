<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registration Form</title>
    <meta name="keywords" content="City Construction, Web Template, XHTML CSS" />
    <meta name="description" content="City Construction, Web Template, XHTML CSS layout provided by TemplateMo.com" />
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link href="css/proposal.css" rel="stylesheet" type="text/css" />
    <link href="css/workOrder.css" rel="stylesheet" type="text/css" />
    </head>
<body>
<!--#include file="include_head.html" -->
<div id="templatmeo_container">
    <div w3-include-html="content.html"></div>
    <div id="templatemo_site_title_bar">
    <div id="site_title">
        <h1><a href="#">
            <img src="images/logobig.png" alt="logo" />
            <!-- <span>Modern Buildings and Architectures</span>-->
        </a></h1>
    </div>

</div> <!-- templatemo_site_title_bar -->

    <div id="templatemo_menu">
        <ul id="templatemo_left_menu">
            <li><a href="{{ url('/customer_display') }}"><span></span>Customers</a></li>
            <li><a href="#"><span></span>Invoices</a></li>
            <li><a href="#"><span></span>Payments</a></li>
            <li><a href="{{ url('/new_work_order_1') }}"  class="current"><span></span>WorkOrders</a></li>
            <li><a href="{{ url('/proposal') }}"><span></span>Proposal</a></li>
            <li><a href="#"><span></span>Report</a></li>
        </ul>

        <ul id="templatemo_right_menu">

            <li><a href="#" class="first">Home</a></li>
            <li><a href="#">Logout</a></li>

        </ul>
    </div> <!-- end of menu -->

    <div id="templatemo_banner">
        <div id="proposal-div">

            <table id="proposalTable">
                <tr>
                    <td style="width: 80%">
                        <form method="get" action="/search" id="search">
                            <input name="q" type="text" size="40" placeholder="Search..." />
                        </form>
                    </td>
                    <td>
                        <button class="button" id="myBtn">New Work Order</button>
                    </td>
                </tr>
            </table>

            <table class="responstable">
                <tr>
                    <th>WO #</th>
                    <th>Site</th>
                    <th>Technician</th>
                    <th>Status</th>
                    <th>Last Activity</th>
                    <th>Total Amount</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


            </table>
        </div>
       <div class="cleaner"></div>
    </div> <!-- end of banner -->
</div> <!-- end of tempatemo_container -->

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">×</span>
        </div>
        <div class="modal-body">
            <div  class="form">
                <form id="Work Order Form">
                       <p class="proposal">
                        <label for="frmCustomer">Please Select a Customer , Site for the new or recurring Work Order</label></p>
             
                  <label for="cust">Select a  Customer</label>
     <select id="cust_list" name="custList">
      <option value="Beant">Beant</option>
      <option value="Ebhline">Ebhline</option>
      <option value="Komal">Komal</option>
      <option value="Pankaj">Pankaj</option>
    </select>

    <label for="site">Select Site</label>
     <select id="site_list" name="siteList">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Submit">
                
                </form>
            </div>
        </div>
    </div>

</div>
<script src="js/proposal.js">
</script>

</body>
</html>





