function nyala(){
    var cb = document.getElementById("send-details");
    var senddetails = document.getElementById("cb-details");
if(cb.checked == true){
senddetails.disabled = false;
}else{
    senddetails.disabled = true;
}
}

function cekemail(){
    var email = document.getElementById("cb-details").value;
    if(email == "email"){
        document.getElementById("email").required = true;
    }
}