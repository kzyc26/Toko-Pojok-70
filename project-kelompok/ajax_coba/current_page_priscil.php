<?php
require_once('../php/config.php');
?>
<html>
<head>
<base href='<?php echo $base_url; ?>'/>
<title> belajar AJAX </title>
<script src='jquery-3.4.1.min.js'></script>
</head>
<body>
<button type='button' class='btn-refresh'>Refresh DIV#refresh</button>
<div id='refresh'>
</div>

<script>
// $(document).ready(); //syntax dasar
$(document).ready(function(){
// console.log('jquery siap!');
// alert('jquery siap!');
$('.btn-refresh').on('click', function(){
    alert('saya ditekan!');
    $.ajax({
        url:"response_ajax_priscil.php",
        method: "GET",
        //data: ,
        dataType: "html",
        success: function(result){
            $('#refresh').html(result);
        }
    });
});
});
</script>
</body>
</html>