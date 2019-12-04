

document.querySelector('.subcatchangepass').style.display='none';
document.querySelector('.subcatwish').style.display = 'none';
document.querySelector('.subcatprofile').style.display = 'none';
document.querySelector('.subcatnotifications').style.display = 'none';
document.querySelector('.subcatorderhistory').style.display = 'block';
document.querySelector('.subcatvoucher').style.display = 'none';
document.querySelector('.subcatpolicy').style.display = 'none';

var passwordmatch

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
function showhistory(){
    document.querySelector('.subcatwish').style.display = 'none';
    document.querySelector('.subcatprofile').style.display = 'none';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'block';
    document.querySelector('.subcatvoucher').style.display = 'none';
    document.querySelector('.subcatpolicy').style.display = 'none';
    document.querySelector('.subcatchangepass').style.display='none';
}


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


