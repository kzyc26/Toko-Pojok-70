<html>
    <head>
        <script src='jquery-3.4.1.min.js'></script>
    </head>
    <body>
        <button class='btn-view' type='button' data-nomor_produk='R807'>Barang 1</button>
        <button class='btn-view' type='button' data-nomor_produk='R808'>Barang 2</button>
        <div id="modal">
        </div>
        <script>
            var productId;
            
            
            $(document).ready(function (){
                $('.btn-view').on('click', (){
                    productId = $(this).data('nomor_produk');
                    ///alert(productId);

                    $.ajax({
                        url: "response_ajax.php",
                        method: "GET",
                        data: { id : productId },
                        dataType: "html",
                        success: function (result){
                            $("#modalview").html(result);
                        }
                    });
                });
                
            });
        </script>
    </body>
</html>