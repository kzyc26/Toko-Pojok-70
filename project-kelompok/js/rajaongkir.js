$.ajax({
    url: "select_province.php",
    method: "GET",
    // data: { },
    dataType: "html",
    success: function (result){
        $("#sel_province").html(result);
        document.getElementById("select_provinsi").selectedIndex = "-1";
        document.getElementById("pengiriman").selectedIndex = "-1"; 
    }
});

function gantikab(sp){
    var sp = document.getElementById(sp);
    var prov_id = sp.value;
    $.ajax({
        url: "select_kabkota.php",
        method: "GET",
        data: { prov_id },
        dataType: "html",
        success: function (result){
            $("#sel_kabkota").html(result);
            document.getElementById("select_kabkota").selectedIndex = "-1"; 
        }
    });
    }

function cekongkir(kurir, tujuan){
    var kurir = document.getElementById(kurir).value;
    var tujuan = document.getElementById(tujuan).value;
    $.ajax({
        url: "rajaongkir_cost.php",
        method: "POST",
        data: { kurir, tujuan },
        dataType: "html",
        success: function (result){
            $("#ongkir").html(result);
        }
    });
}

function set_ongkir(pilih){      
    var pilih = document.getElementsByName(pilih);
    for (var i = 0, length = pilih.length; i < length; i++) {
        if (pilih[i].checked) {
            harga = pilih[i].value
            // do whatever you want with the checked radio
            // alert(pilih[i].value);
    
            // only one radio can be logically checked, don't check the rest
            break;
        }
    }


    $.ajax({
        url: "display-ongkir.php",
        method: "POST",
        data: { harga },
        dataType: "html",
        success: function (result){
        }
    });
}