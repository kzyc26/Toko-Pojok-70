function firstload(){document.querySelector('.subcatchangepass').style.display='none';
document.querySelector('.subcatwish').style.display = 'none';
document.querySelector('.subcatprofile').style.display = 'none';
document.querySelector('.subcatnotifications').style.display = 'none';
document.querySelector('.subcatorderhistory').style.display = 'none';
document.querySelector('.subcatvoucher').style.display = 'none';
document.querySelector('.subcatpolicy').style.display = 'none';}



var passwordmatch

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


function changetovoucher(){
    document.querySelector('.subcatchangepass').style.display='none';
    document.querySelector('.subcatwish').style.display = 'none';
    document.querySelector('.subcatprofile').style.display = 'none';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'none';
    document.querySelector('.subcatvoucher').style.display = 'block';
    document.querySelector('.subcatpolicy').style.display = 'none';
    document.querySelector('.subcatchangepass').style.display='none';
}
function shownotif(){
    document.querySelector('.subcatchangepass').style.display='none';
    document.querySelector('.subcatwish').style.display = 'none';
    document.querySelector('.subcatprofile').style.display = 'none';
    document.querySelector('.subcatnotifications').style.display = 'block';
    document.querySelector('.subcatorderhistory').style.display = 'none';
    document.querySelector('.subcatvoucher').style.display = 'none';
    document.querySelector('.subcatpolicy').style.display = 'none';

}
function showwish(){
    document.querySelector('.subcatchangepass').style.display='none';
    document.querySelector('.subcatwish').style.display = 'block';
    document.querySelector('.subcatprofile').style.display = 'none';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'none';
    document.querySelector('.subcatvoucher').style.display = 'none';
    document.querySelector('.subcatpolicy').style.display = 'none';

}
function changepass(){
    document.querySelector('.subcatchangepass').style.display='block';
    document.querySelector('.subcatwish').style.display = 'none';
    document.querySelector('.subcatprofile').style.display = 'none';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'none';
    document.querySelector('.subcatvoucher').style.display = 'none';
    document.querySelector('.subcatpolicy').style.display = 'none';


}
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


