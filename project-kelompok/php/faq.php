<?php
$_SESSION['prevpage']="Frequently Asked Questions";
require_once('navbar.php');
?>
        
      <h1>FAQs</h1>
      <div class="accordion" id="faq">
        <div class="card">
          <div class="card-header question" id="question-1">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#answer-1" aria-expanded="true" aria-controls="answer-1">
                Apakah semua barang ready stock?
              </button>
            </h2>
          </div>
      
          <div id="answer-1" class="collapse answer" aria-labelledby="question-1" data-parent="#faq">
            <div class="card-body">
              Semua barang yang ditampilkan di website merupakan barang yang sudah ready.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header question" id="question-2">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#answer-2" aria-expanded="false" aria-controls="answer-2">
                Ekspedisi apa yang digunakan untuk pengiriman barang?
              </button>
            </h2>
          </div>
          <div id="answer-2" class="collapse answer" aria-labelledby="question-2" data-parent="#faq">
            <div class="card-body">
              Kami menggunakan ekspedisi J&T dan JNE.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header question" id="question-3">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#answer-3" aria-expanded="false" aria-controls="answer-3">
                Bagaimana metode pembayarannya?
              </button>
            </h2>
          </div>
          <div id="answer-3" class="collapse answer" aria-labelledby="question-3" data-parent="#faq">
            <div class="card-body">
              Metode pembayaran dapat dilakukan dengan transfer ke BCA virtual account 538401982xxx. Kami juga menerima pembayaran via OVO dengan memindai <i>QR code</i> di bawah ini:
              <br><img src="../assets/images/qr code.png"><br>
              Harap memasukkan screenshot bukti transaksi ke halaman <i>check-out</i> apabila Anda sudah melakukan pembayaran.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header question" id="question-4">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#answer-4" aria-expanded="false" aria-controls="answer-4">
                Apakah toko ini melayani metode pembayaran COD (<i>Cash on Delivery</i>)?
              </button>
            </h2>
          </div>
          <div id="answer-4" class="collapse answer" aria-labelledby="question-4" data-parent="#faq">
            <div class="card-body">
              Toko ini melayani metode pembayaran COD (<i>Cash on Delivery</i>) di wilayah Tumpang, Kabupaten Malang.
            </div>
          </div>
        </div>
      </div>

      <?php require_once('footer.php'); ?>  
  <link href="../css/faq.css" rel="stylesheet">
</body>
</html>