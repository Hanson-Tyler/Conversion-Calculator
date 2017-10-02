<?php
session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <base href="C:\Bitnami\wappstack-5.6.31-0\apache2\htdocs\">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CS 213 Week 07 Ponder and Prove</title>
    <link href="week07.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="week07.js?_&amp;d2lSessionVal=kU8r1uIwetqXoBqWnZPboOoDr"></script>
  
  </head>
  
<body>
  <h1>Tabletop 4 All</h1>
  
  <h2>Special Promoton! Free shipping on orders over $100!<br>
    Flat rate of $15 for shipping otherwise</h2>
  <h2>Please choose items for your order</h2>
  <form action="page2.php" id="items" method="post">
    <table>
      <tr>
        <td>
          <input type="checkbox" name="games[]" name="Settlers of Catan">
        </td>
        <td> 
          <img src="catan.jpg" alt="Catan" width="150px" height="150px">
          <span id="name1">Settlers of Catan $49.99</span>
        </td> 
      </tr>   

      <tr>
        <td>
          <input type="checkbox" name="games[]" name="Settlers of Catan:Cities and Knights" >
        </td>
        <td>
          <img src="cities.jpg" alt="Catan:Cities and Knights" width="150px" height="150px">
          <span id="name2">Settlers of Catan:Cities and Knights $39.99</span>
        </td> 
      </tr>   

      <tr>
        <td>
          <input type="checkbox" name="games[]" name="Agricola">
        </td>
        <td>
          <img src="agricola.jpg" alt="Agricola" width="150px" height="150px">
          <span id="name3"> Agricola $59.99</span>
        </td> 
      </tr>    

      <tr>
        <td>
          <input type="checkbox" name="games[]" name="Betrayal at House on the Hill">
        </td>
        <td>
          <img src="betrayal.jpg" alt="Betrayal at House on the Hill" width="150px" height="150px">
          <span id="name4">Betrayal at House on the Hill $34.99</span>
        </td> 
      </tr> 

      <tr>
        <td>
          <input type="checkbox" name="games[]" name="Pillars of the Earth">
        </td>
        <td>
          <img src="pillars.jpg" alt="Pillars of the Earth" width="150px" height="150px">
          <span id="name5"> Pillars of the Earth $49.99</span>
        </td> 
      </tr> 

      <tr>
        <td>
          <input type="checkbox" name="games[]" name="Shadow Hunters">
        </td>
        <td>
          <img src="shadow.jpg" alt="Shadow Hunters" width="150px" height="150px">
          <span id="name6"> Shadow Hunters $29.99</span>
        </td> 
      </tr> 

      <tr>
        <td>
          <input type="checkbox" name="games[]" name="Panic Station">
        </td>
        <td>
          <img src="panic.jpg" alt="Panic Station" width="150px" height="150px">
          <span id="name7"> Panic Station $34.99</span>
        </td> 
      </tr> 

      <tr>
        <td>
          <input type="checkbox" name="games[]" name="Trajan">
        </td>
        <td>
          <img src="trajan.jpg" alt="Trajan" width="150px" height="150px">
          <span id="name8">Trajan $59.99</span>
        </td> 
      </tr> 

      <tr>
        <td>
          <input type="checkbox" name="games[]" name="Amerigo">
        </td>
        <td>
          <img src="amerigo.jpg" alt="Amerigo" width="150px" height="150px">
          <span id="name9">Amerigo $69.99</span>
        </td> 
      </tr> 

      <tr>
        <td>
          <input type="checkbox" name="games[]" name="7 Wonders">
        </td>
        <td>
          <img src="wonders.jpg" alt="wonders" width="150px" height="150px" >
          <span id="name10"> 7 Wonders $39.99</span>
        </td> 
      </tr> 
    </table>   
    <button type="submit">Add Items To Cart </button>   
  </form>

<?php
  $_SESSION["picked"] = "games";
?>

</body>
</html>
