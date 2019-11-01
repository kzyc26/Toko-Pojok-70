function nyala(cb){
    var senddetails = document.getElementById("cb-details");
if(cb.checked == true){
senddetails.disabled = false;
}else{
    senddetails.disabled = true;
}
}