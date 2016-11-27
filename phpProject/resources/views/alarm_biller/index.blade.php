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
    <link href="css/proposal.css" rel="stylesheet" type="text/css" />
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
            <li><a href="{{ url('/customer_display') }}" class="current"><span></span>Customers</a></li>
            <li><a href="#"><span></span>Invoices</a></li>
            <li><a href="#"><span></span>Payments</a></li>
            <li><a href="{{ url('/new_work_order_1') }}"><span></span>WorkOrders</a></li>
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
                        <button class="button" id="myBtn">New Customer</button>
                    </td>
                </tr>
            </table>

            <table class="responstable">
                <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Balance</th>
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
                <form id="customerForm" action="{{url('alarm_biller/site')}}" method="post">
                    {{csrf_field()}}
                    <fieldset id="fd2">
                             <div class="form_row">
                         
                            <input type="checkbox" name="master" value="Master"/>
                            <label class="lbl1">Master</label><br/>
                        </div>
                        <br/>
                        <div class="form_row">
                            <label class="lbl1">Customer :</label><br/>
                            <input class="inputfield" name="custid" type="text" id="custid" placeholder="First Name"/>
                        </div>
                        <br/>
                        <div class="form_row">
                            <label class="lbl1">First Name :</label><br/>
                            <input class="inputfield" name="firstname" type="text" id="firstname" placeholder="First Name"/>
                        </div>
                        <br/>
                        <div class="form_row">
                            <label class="lbl1">Last Name :</label><br/>
                            <input class="inputfield" name="lastname" type="text" id="lastname" placeholder="Last Name"/></div>
                        <br/>
                        <div class="form_row">
                            <label class="lbl1">Address :</label><br/>
                            <input class="inputfield" name="address" type="text" id="address" placeholder="Address"/>
                        </div>
                        <br/>
                        <div class="form_row">
                            <label class="lbl1">City :</label><br/>
                            <input class="inputfield" name="city" type="text" id="city" placeholder="City"/><br/></div>
                            <div class="form_row">
                            <select>
                                <option value="ontario">Ontario</option>
                                <option value="alberta">Alberta</option>
                                <option value="britishcolumbia">British Columbia</option>
                            </select> </br>
                            <input class="inputfield" name="postal" type="text" id="postal" size="8" placeholder="Postal Code"/>       
                        </div>
                        <br/>
                        <div class="form_row">
                            <label class="lbl1">Phone :</label><br/>
                            <input class="inputfield" name="phone" type="text" id="phone" placeholder="Phone"/>
                        </div>
                        <br/>
                        <div class="form_row">
                            <label class="lbl1">Email :</label><br/>
                            <input class="inputfield" name="email" type="text" id="email" placeholder="Email Address"/>
                        </div>
                        <br/>
                        <div class="form_row">
                            <label class="lbl1">Customer Status :</label><br>
                            <select name="status">
                                <option value="active">Active</option>
                                <option value="terminated">Terminated</option>
                                <option value="prospect">Prospect</option>
                            </select>
                            <br>
                                <br>
                            <label class="lbl1">Customer Type :</label><br/>
                            <select name="type">
                                <option value="residential">Residential</option>
                                <option value="business">Business</option>
                                <option value="industrial">Industrial</option>
                            </select>               
                        </div>
                        <br/>
                        <div class="form_row">
                            <label class="lbl1">Customer Since :</label><br/>
                            <input class="inputfield" name="cust_since" type="date" id="cust_since" />
                        </div>
                        <div class="form_row">
                            <label class="lbl1">Delivery Method :</label><br/>
                            <input class="inputfield" name="delivery" type="text" id="delivery" />
                        </div>
                        <br/>
                        <button class="next_button"><a href="{{ url('/site') }}">Next</a></button>
                           
                        </fieldset>
                </form>
            </div>
        </div>
    </div>

</div>
<script src="js/proposal.js">
</script>

</body>
</html>

