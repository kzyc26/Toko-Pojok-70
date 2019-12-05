function categorychange(){    
    var cbcat = document.getElementById("listcategory");
    var cat = cbcat.options[cbcat.selectedIndex].value;
    // alert(cat);
            $.ajax({
                url: "item_category.php",
                method: "GET",
                data: { cat },
                dataType: "html",
                success: function(result){
                    $("#categoryfill").html(result);
                }
            });
}
