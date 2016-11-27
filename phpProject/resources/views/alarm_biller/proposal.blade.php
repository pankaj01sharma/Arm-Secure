<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registration Form</title>
    <meta name="keywords" content="City Construction, Web Template, XHTML CSS" />
    <meta name="description" content="City Construction, Web Template, XHTML CSS layout provided by TemplateMo.com" />
    <link href={{asset("css/templatemo_style.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/proposal.css")}} rel="stylesheet" type="text/css" />
    </head>
<body>
<!--#include file="include_head.html" -->
<div id="templatmeo_container">
    <div w3-include-html="content.html"></div>
    <div id="templatemo_site_title_bar">
    <div id="site_title">
        <h1><a href="#">
            <img src={{asset("images/logobig.png")}} alt="logo" />
            <!-- <span>Modern Buildings and Architectures</span>-->
        </a></h1>
    </div>

</div> <!-- templatemo_site_title_bar -->

    <div id="templatemo_menu">
        <ul id="templatemo_left_menu">
            <li><a href="{{ url('/customer_display') }}"><span></span>Customers</a></li>
            <li><a href="#"><span></span>Invoices</a></li>
            <li><a href="#"><span></span>Payments</a></li>
            <li><a href="{{ url('/new_work_order_1') }}"><span></span>WorkOrders</a></li>
            <li><a href="{{ url('/proposal') }}" class="current"><span></span>Proposal</a></li>
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
                        <button class="button" id="myBtn">New Proposal</button>
                    </td>
                </tr>
            </table>

            <table class="re">

                <tr>
                    <th>Name</th>
                    <th>Email Id</th>
                    <th>Date</th>
                    <th>View</th>
                    <th>Delete</th>
                </tr>
                <tr>
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
                </tr>

                <tr>
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
                <form id="proposalform">
                    <p class="proposal">
                        <label for="name">Name</label></p>
                             <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text">
                    <p class="proposal">
                        <label for="email">Email</label></p>
                            <input id="email" name="email" placeholder="example@domain.com" required="" type="email">
                    <p class="proposal">
                        <label for="description">Description</label></p>
                            <input id="description" name="description" placeholder="Description" required="" tabindex="2" type="text">
                    <p class="proposal">
                        <label>Equipments</label></p>
                    <table>
                        <tr>
                            <td>
                                <input type="checkbox" id="equip1" name="equip1" value="">Equipment1<br>
                            </td>
                            <td>
                                <input type="checkbox" id="equip2" name="equip2" value="">Equipment2<br>
                            </td>
                            <td>
                                <input type="checkbox" id="equip3" name="equip3" value="">Equipment3<br>
                            </td>
                            <td>
                                <input type="checkbox" id="equip4" name="equip4" value="">Equipment4<br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="equip5" name="equip5" value="">Equipment5<br>
                            </td>
                            <td>
                                <input type="checkbox" id="equip6" name="equip6" value="">Equipment6<br>
                            </td>
                            <td>
                                <input type="checkbox" id="equip7" name="equip7" value="">Equipment7<br>
                            </td>
                            <td>
                                <input type="checkbox" id="equip8" name="equip8" value="">Equipment8<br>
                            </td>
                        </tr>
                    </table>
                        <p class="proposal">
                            <label for="totalfee">Total Price</label></p>
                        <input id="totalfee" name="totalfee" placeholder="Total Price" required="" tabindex="2" type="text" disabled>
                    <input class="buttom" name="submit" id="submit" tabindex="5" value="Send Email" type="submit">

                </form>
            </div>
        </div>
    </div>

</div>
<script src={{asset("js/proposal.js")}}>
</script>

</body>
</html>

