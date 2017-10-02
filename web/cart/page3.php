  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
                     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <base href="C:\Bitnami\wappstack-5.6.31-0\apache2\htdocs\board game page\">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CS 213 Week 07 Ponder and Prove</title>
    <link href="week07.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="week07.js?_&amp;d2lSessionVal=kU8r1uIwetqXoBqWnZPboOoDr"></script>
  
  </head>

<body>
  <h2>Please enter your personal information</h2>
  <form action="" id="customer" onreset="resetInfo()">
    First Name:<input type="text" id="firstname" size="10" onblur="validateFirstName()">
    <span id="fnerror"> </span><br>
    Last Name:<input type="text" id="lastname" size="10" onblur="validateLastName()">
    <span id="lnerror"> </span><br>
    Phone Number:<input type="text" id="phone" size="10" onblur="validatePhone()">
    <span id="pnerror"> </span><br><br>  
    Address: <br>    
    Street Number:<input type="text" id="streetnumber" size="5" onblur="validateStreetNumber()">
    <span id="snerror"> </span><br>
    Apartment Number(If Applicable):<input type="text" id="apt" size="3" onblur="validateApartment()">
    <span id="anerror"> </span><br>        
    Street Name:<input type="text" id="streetname" size="8" onblur="validateStreetName()">
    <span id="sn2error"> </span><br>   
    City:<input type="text" id="city" size="3" onblur="validateCity()">
    <span id="cerror"> </span><br>  
    State:<input type="text" id="state" size="2" onblur="validateState()"> 
    <span id="serror"> </span><br>
    Zip Code:<input type="text" id="zip" size="5" onblur="validateZIP()"> 
    <span id="zerror"> </span><br>
    Country:<input type="text" id="country" size="12" onblur="validateCountry()" value="United States">
    <span id="c2error"> </span><br><br>
    <input type="reset">
  </form>
</body>
</html>