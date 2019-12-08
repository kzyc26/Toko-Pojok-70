
    $(document).ready(function(){
        $('.profile').on('click', function(){
            profile = $(this).data('profile');     
            // alert(profile);
            $.ajax({
                url: "AS-profile.php",
                method: "GET",
                data: {profile : profile },
                dataType: "html",
                success: function(result){
                    $("#informations").html(result);
                }
            });
        });    
    });


    $(document).ready(function(){
        $('.history').on('click', function(){
            status = $(this).data('status');     
    // alert(status);
            $.ajax({
                url: "AS-history.php",
                method: "GET",
                data: { status : status },
                dataType: "html",
                success: function(result){
                    $("#informations").html(result);
                }
            });
        });    
    });
    
    $(document).ready(function(){
        $('.history').on('click', function(){
            status = $(this).data('status');     
    // alert(status);
            $.ajax({
                url: "AS-history.php",
                method: "GET",
                data: { status : status },
                dataType: "html",
                success: function(result){
                    $("#informations").html(result);
                }
            });
        });    
    });
    $(document).ready(function(){
        $('.wishlist').on('click', function(){
            wish = $(this).data('wish');     
    // alert(status);
            $.ajax({
                url: "AS-wishlist.php",
                method: "GET",
                data: { wish : wish },
                dataType: "html",
                success: function(result){
                    $("#informations").html(result);
                }
            });
        });    
    });

function confirmcheck(){
var newpass = document.getElementById("newpass").value;
var confpass = document.getElementById("confirmpass").value;
if(newpass == confpass){
    $("#pwmatch").removeClass("glyphicon-remove");
    $("#pwmatch").addClass("glyphicon-ok");
    $("#pwmatch").css("color","#00A41E");

} else {
    $("#pwmatch").removeClass("glyphicon-ok");
		$("#pwmatch").addClass("glyphicon-remove");
		$("#pwmatch").css("color","#FF0004");
}
}
function diterima(recieve){
    recieve.preventDefault();
    var r=confirm("Konfirmasi Pesanan Diterima?");
    if (r==true) {
      window.location="accountsetting.php";
      form.submit();
    }

}

