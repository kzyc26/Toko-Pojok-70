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

var xhr  = new XMLHttpRequest();
xhr.onreadystatechange = function(){
if(xhr.readyState == 4 && xhr.status== 200){
    
}

}
xhr.open('GET','ajax/productdetails.php',true);
xhr.send();