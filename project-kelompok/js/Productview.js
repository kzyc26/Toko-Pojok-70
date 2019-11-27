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

function sizechange(){
    var cbsize = document.getElementById("size");
    a = cbsize.options[cbsize.selectedIndex].value;
    console.log(a);
            $.ajax({
                url: "queryjumlah.php",
                method: "GET",
                data: { a },
                dataType: "html",
                success: function(result){
                    $("#contentview").html(result);
                }
            });
}
