document.getElementById("select_customer").selectedIndex = "-1";

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
function deliverychange(){    
    var cbdel = document.getElementById("listdelivery");
    var delivery = cbdel.options[cbdel.selectedIndex].value;
    var cbuser= document.getElementById("listuser")
    var user = cbuser.options[cbuser.selectedIndex].value;
    // alert(status);
            $.ajax({
                url: "delivery.php",
                method: "GET",
                data: { delivery,user},
                dataType: "html",
                success: function(result){
                    $("#delivery").html(result);
                }
            });
}
function custrevchange(username){
    var cbcust = document.getElementById(username);
    var username = cbcust.options[cbcust.selectedIndex].value;
    $.ajax({
        url: "customer_review_display.php",
        method: "GET",
        data: {username},
        dataType: "html",
        success: function(result){
            $("#display_custreview").html(result);
        }
    });
}
function discountchange(id){
    var cbdisc = document.getElementById(id);
    var terpilih = cbdisc.options[cbdisc.selectedIndex].value;
    $.ajax({
        url: "discount_display.php",
        method: "GET",
        data: {terpilih},
        dataType: "html",
        success: function(result){
            $("#display_discount").html(result);
        }
    });
}