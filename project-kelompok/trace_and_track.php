<?php
$_SESSION['prevpage']="Order Track";
require_once('navbar.php');
require_once('db.php');
?>
      <div class="content">
        <h4>Input Your Order ID Here</h4>
        <p>(you can check your ID on your account)</p>
        <div class="search">
            <input type="text" class="srchbar" placeholder="Search">
            <button type="submit" class="btsearch" onclick="showtracking()"><span class="glyphicon glyphicon-search"></span></button>
        </div>
        <div class="ordertable">
          <h3 class="orderid">Order ID:A0929302</h3>
            <table>
              <tr>
                <th> Date </th>
                <th> Order Progress</th>
              </tr>
              <tr>
                <td>09/10/2019 10:00</td>
                <td>Order Made</td>
              </tr>
              <tr>
                  <td>09/10/2019 10:10</td>
                  <td>Payment Confirmed</td>
                </tr>
                <tr>
                    <td>10/10/2019 10:00</td>
                    <td>Order Sent By</td>
                  </tr>
            </table>  
            </div>
            <a href="php/Product Review.php"><button type="button" class="reviewbtn">Give us a review!</button></a>
      </div>

      <?php require_once('footer.php'); ?>  
      
          <link href="css/Trace and track.css"rel="stylesheet">
    
        </body>
    <script>
     document.querySelector('.ordertable').style.display = 'none';
     document.querySelector('.reviewbtn').style.display = 'none';
    function showtracking(){
      document.querySelector('.ordertable').style.display = 'block';
      document.querySelector('.reviewbtn').style.display = 'block';
    }
    </script>
</html>