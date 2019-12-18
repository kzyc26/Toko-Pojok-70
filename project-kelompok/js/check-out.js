$.ajax({
    url: "cart.php",
    method: "POST",
    // data:{},
    dataType: "html",
    success: function(result){
        $("#display").html(result);
    }
})

function paymodal(total, sid){(
    $.ajax({
    url: "payment-modal.php",
    method: "POST",
    data:{ total, sid },
    dataType: "html",
    success: function(result){
        $("#modalpay-content").html(result);
    }
}))}

function hapus(idbar, sid){
    $.ajax({
        url: "delete-cart.php",
        method: "POST",
        data:{idbar, sid},
        dataType: "html",
        success: function(result, sid){
            $("#display").html(result);
        }
    })
}

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
