function myFunction(imgs) {
    // Get the expanded image
    var expandImg = document.getElementById("firstpreview");
    // // Use the same src in the expanded image as the image being clicked on from the grid
    expandImg.src = imgs.src;
    // Use the value of the alt attribute of the clickable image as text inside the expanded image
    expandImg.parentElement.style.display = "block";
    document.getElementsByClassName("column").style.borderColor = "blue";
}
document.querySelector('.floatbutton').style.display = 'none';

function showCheckout() {
    document.querySelector('.floatbutton').style.display = 'block';
}

var productId;
$(document).ready(function(){
    $('.btnview').on('click', function(){
        productId = $(this).data('id');
       

        $.ajax({
            url: "productdetails.php",
            method: "GET",
            data: { id : productId },
            dataType: "html",
            success: function(result){
                $("#contentview").html(result);
            }
        });
    });
    
});

// checkboxes
function gantiwarna(, sk){
    var sp = document.getElementById(sp);
    var sk = document.getElementById(sk);
    sk.innerHTML = "";

    switch(sp.value){
        case "jawa-timur":
            var arraypilihan = ["|", "surabaya|Surabaya", "malang|Malang"];
            break;
        case "jawa-tengah":
            var arraypilihan = ["|", "semarang|Semarang", "boyolali|Boyolali"];
            break;
        case "jawa-barat":
            var arraypilihan = ["|", "bandung|Bandung"];
            break;
    }

    for(var pilihan in arraypilihan){
        var pair = arraypilihan[pilihan].split("|");
        var pilihanbaru = document.createElement("option");
        pilihanbaru.value = pair[0];
        pilihanbaru.innerHTML = pair[1];
        sk.options.add(pilihanbaru);
    }
}