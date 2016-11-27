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
        <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
            <link href="css/rfc.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div id="templatmeo_container">
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
                     <li><a href="{{ url('/customer_display') }}" class="current"><span></span>Customers</a></li>
            <li><a href="#"><span></span>Invoices</a></li>
            <li><a href="#"><span></span>Payments</a></li>
            <li><a href="{{ url('/new_work_order_1') }}"><span></span>WorkOrders</a></li>
            <li><a href="{{ url('/proposal') }}"><span></span>Proposal</a></li>
            <li><a href="#"><span></span>Report</a></li>
                </ul>

                <ul id="templatemo_right_menu">

                    <li><a href="#" class="first">Home</a></li>
            <li><a href="?page=logout">Logout</a></li>

                </ul>
            </div> <!--+ end of menu -->

            <div id="templatemo_banner">
                <div id="banner_left_section">
                    <h3>New RMR</h3>
                    <form class="cust_reg" method="post" action="#">
                        <fieldset id="fd1">
                     <legend><label class="lbl1">Customer No - </label><input class="inputfield" name="customerid" type="text" id="customerid"/></legend>

                           <fieldset id="fd2">
                             
                         <div  class="form">
                <form id="rfcForm">
                    <p class="rfc">
                        <label>Equipments With Price</label></p>
                    <table class="rfcTable">
                        <tr>
                            <td>
                                <input type="checkbox" id="equip1" name="equip1" value="">Equipment1($50)<br>
                            </td>
                            <td>
                                <input type="checkbox" id="equip2" name="equip2" value="">Equipment2($30)<br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="equip3" name="equip3" value="">Equipment3($70)<br>
                            </td>
                            <td>
                                <input type="checkbox" id="equip4" name="equip4" value="">Equipment4($150)<br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="equip5" name="equip5" value="">Equipment5($90)<br>
                            </td>
                            <td>
                                <input type="checkbox" id="equip6" name="equip6" value="">Equipment6($110)<br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="equip7" name="equip7" value="">Equipment7($10)<br>
                            </td>
                            <td>
                                <input type="checkbox" id="equip8" name="equip8" value="">Equipment8($199)<br>
                            </td>
                        </tr>
                    </table>
                    <fieldset>
                        <label>Start Date</label>
                        <label class="month">
                            <select class="select-style" name="StartMonth">
                                <option value="">Month</option>
                                <option  value="01">January</option>
                                <option value="02">February</option>
                                <option value="03" >March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12" >December</option>
                            </select>
                        </label>
                        <label>Day<input class="startday" maxlength="2" name="StartDay"  placeholder="Day" required=""></label>
                        <label>Year <input class="startyear" maxlength="4" name="StartYear" placeholder="Year" required=""></label>
                    </fieldset>
                    <select class="select-style cycle" name="cycle">
                        <option value="Select">Select Cycle</option>
                        <option value="quarterly">Quarterly</option>
                        <option value="monthly">Monthly</option>
                        <option value="yearly">Yearly</option>
                    </select><br><br>

                    <p class="rfc">
                        <label for="subTotal">SubTotal</label></p>
                    <input id="subTotal" name="subTotal" placeholder="Sub Total" required="" tabindex="2" type="text">
                    <p class="rfc">
                        <label for="discount">Discount</label></p>
                    <input id="discount" name="discount" placeholder="Discount" required="" tabindex="2" type="text">
                    <p class="rfc">
                        <label for="totalPrice">Total Price</label></p>
                    <input id="totalPrice" name="totalPrice" placeholder="Total Price" required="" tabindex="2" type="text">
                    <input class="buttom" name="save" id="save" tabindex="5" value="Save" type="submit">
                </form>
            </div>
                        </fieldset>
                        </fieldset> 
                    </form>
                </div>

                <div class="cleaner"></div>
            </div> <!-- end of banner -->



        </div> <!-- end of tempatemo_container -->
    </body>
</html>
