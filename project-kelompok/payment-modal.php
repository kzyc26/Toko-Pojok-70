<?php
session_start();
require_once('db.php');
$_SESSION['total'] = $_POST['total'] + $_SESSION['ongkir'];
$sid = $_POST['sid'];
?>

<div class="modal-header">
          <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
          <h3 class="modal-title">Select Payment Method</h3>
        </div>
        <div id="payment_method" class="modal-body">
          <div class="row">
            <div class="choose">
              <div class="total">
                <h4>Ongkir : Rp. <?php echo number_format($_SESSION['ongkir'],2,",",".");?> </h4>               
                <h3>Total: Rp. <?php echo number_format($_SESSION['total'],2,",","."); ?></h3>                
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">Select Your Payment Method</div>
                <div class="panel-body">
                  <input type="radio" name="paymethod" value="ovo" required> Ovo<br>
                  <img src="https://img.icons8.com/nolan/150/000000/qr-code.png" class="qrcode"><br>
                  <input type="radio" name="paymethod" value="BankABC"> Bank ABC<br>
                  <p>Virtual Account : 021923223904328</p><br>
                  <input type="radio" name="paymethod" value="BankCBA"> Bank CBA<br>
                  <p>Virtual Account : 021923223904328</p>
                </div>
              </div>
              <div class="cbpolicy">
                <input type="checkbox" name="policy" value="agree" required> I agree to the <a href="#">Payment Terms and Conditions</a>
              </div><button type="submit" name="button_pay">Pay</button>
            </div>
          </div>
        </div>