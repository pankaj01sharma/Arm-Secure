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
                    <li><a href="#">Logout</a></li>

                </ul>
            </div> <!--+ end of menu -->

            <div id="templatemo_banner">
                <div id="banner_left_section">
                    <h3>Site Details</h3>
                    <form class="cust_reg" method="post" action="#">
                        <fieldset id="fd1">
                     <legend><label class="lbl1">Customer No - </label><input class="inputfield" name="customerid" type="text" id="customerid"/></legend>

                           <fieldset id="fd2">
                             
                        <br/>
                         <div class="form_row">
                            <label class="lbl1">Site No :</label><br/>
                            <input class="inputfield" name="siteno" type="text" id="siteno" placeholder="Site No"/>
                        </div>
                        <br/>
                        
                        <div class="form_row">
                            <label class="lbl1">Site Address :</label><br/>
                            <input class="inputfield" name="address" type="text" id="address" placeholder="Address"/>
                        </div>
                        <br/>
                        <div class="form_row">
                            <label class="lbl1">City :</label><br/>
                            <input class="inputfield" name="city" type="text" id="city" placeholder="City"/>
                            <select>
                                <option value="ontario">Ontario</option>
                                <option value="alberta">Alberta</option>
                                <option value="britishcolumbia">British Columbia</option>
                            </select> 
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
                        
                        
                        <button class="next_button"><a href="{{ url('/site') }}">Submit</a></button>
                           
                        </fieldset>
                        </fieldset> 
                    </form>
                </div>
                <div class="cleaner"></div>
            </div> <!-- end of banner -->



        </div> <!-- end of tempatemo_container -->
    </body>
</html>
