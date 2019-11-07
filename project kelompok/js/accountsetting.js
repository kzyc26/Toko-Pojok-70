document.querySelector('.subcatwish').style.display = 'none';
document.querySelector('.subcatprofile').style.display = 'none';
document.querySelector('.subcatnotifications').style.display = 'none';
document.querySelector('.subcatorderhistory').style.display = 'none';
document.querySelector('.subcatvoucher').style.display = 'none';
document.querySelector('.subcatpolicy').style.display = 'none';



function changeaccount(){
    document.querySelector('.subcatwish').style.display = 'none';
    document.querySelector('.subcatprofile').style.display = 'block';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'none';
    document.querySelector('.subcatvoucher').style.display = 'none';
    document.querySelector('.subcatpolicy').style.display = 'none';
 
};
function changetovoucher(){
    document.querySelector('.subcatwish').style.display = 'none';
    document.querySelector('.subcatprofile').style.display = 'none';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'none';
    document.querySelector('.subcatvoucher').style.display = 'block';
    document.querySelector('.subcatpolicy').style.display = 'none';
   
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
    document.querySelector('.subcatwish').style.display = 'block';
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
    
}

