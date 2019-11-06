document.querySelector('.subcatprofile').style.display = 'none';
document.querySelector('.subcatnotifications').style.display = 'none';
document.querySelector('.subcatorderhistory').style.display = 'none';
document.querySelector('.subcatvoucher').style.display = 'none';
document.querySelector('.subcatpolicy').style.display = 'none';


function changeaccount(){
    document.querySelector('.subcatprofile').style.display = 'block';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'none';
    document.querySelector('.subcatvoucher').style.display = 'none';
    document.querySelector('.subcatpolicy').style.display = 'none';
};
function changetovoucher(){
    document.querySelector('.subcatprofile').style.display = 'none';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'none';
    document.querySelector('.subcatvoucher').style.display = 'block';
    document.querySelector('.subcatpolicy').style.display = 'none';
}
function shownotif(){
    document.querySelector('.subcatprofile').style.display = 'none';
    document.querySelector('.subcatnotifications').style.display = 'block';
    document.querySelector('.subcatorderhistory').style.display = 'none';
    document.querySelector('.subcatvoucher').style.display = 'none';
    document.querySelector('.subcatpolicy').style.display = 'none';
    document.querySelector(".subcatwishlist").style.display = 'none';
}
function showwishlist(){
    document.querySelector('.subcatprofile').style.display = 'none';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'none';
    document.querySelector('.subcatvoucher').style.display = 'none';
    document.querySelector('.subcatpolicy').style.display = 'none';
    document.querySelector(".subcatwishlist").style.display = 'block';
}

function showhistory(){
    document.querySelector('.subcatprofile').style.display = 'none';
    document.querySelector('.subcatnotifications').style.display = 'none';
    document.querySelector('.subcatorderhistory').style.display = 'block';
    document.querySelector('.subcatvoucher').style.display = 'none';
    document.querySelector('.subcatpolicy').style.display = 'none';
    document.querySelector(".subcatwishlist").style.display = 'none';
}

