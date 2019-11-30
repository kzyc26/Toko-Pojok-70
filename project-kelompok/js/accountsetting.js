document.getElementById('provinsi').value= <?php echo $profile['provinsi'];?>;
document.querySelector('.subcatchangepass').style.display='none';
document.querySelector('.subcatwish').style.display = 'none';
document.querySelector('.subcatprofile').style.display = 'none';
document.querySelector('.subcatnotifications').style.display = 'none';
document.querySelector('.subcatorderhistory').style.display = 'none';
document.querySelector('.subcatvoucher').style.display = 'none';
document.querySelector('.subcatpolicy').style.display = 'none';


function changeaccount(){
    document.querySelector('.subcatchangepass').style.display='none';
    document.querySelector('.subcatwish').style.display = 'none';
    document.querySelector('.subcatprofile').style.display = 'block';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'none';
    document.querySelector('.subcatvoucher').style.display = 'none';
    document.querySelector('.subcatpolicy').style.display = 'none';
    
};
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
function showhistory(){
    document.querySelector('.subcatwish').style.display = 'none';
    document.querySelector('.subcatprofile').style.display = 'none';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'block';
    document.querySelector('.subcatvoucher').style.display = 'none';
    document.querySelector('.subcatpolicy').style.display = 'none';
    document.querySelector('.subcatchangepass').style.display='none';
}
var historystatus;
$(document).ready(function (){
    $('.history').on('click', function(){
       
       historystatus = $(this).data('status');
        alert(historystatus);

        $.ajax({
            url: "history.php",
            method: "GET",
            data: { status : historystatus },
            dataType: "html",
            success: function (result){
                $("#historyinfo").html(result);
            }
        });
    });
    
});

function confirmpassword(){
    var newpass = document.getElementById("newpass").nodeValue;
    var conpass = document.getElementById("conpass").nodeValue;
if(newpass == conpass) {
    document.querySelector('.error').style.display='none';
}else { document.querySelector('.error').style.display='block'; }
}



