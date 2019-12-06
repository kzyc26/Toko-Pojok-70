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
                    $("#listitem").html(result);
                }
            });
}
function monthchange(){    
    var cbmonth = document.getElementById("monthlist");
    var month = cbmonth.options[cbmonth.selectedIndex].value;
    // alert(cat);
            $.ajax({
                url: "monthly_revenue.php",
                method: "GET",
                data: { month },
                dataType: "html",
                success: function(result){
                    $("#monthlyrev").html(result);
                }
            });
}