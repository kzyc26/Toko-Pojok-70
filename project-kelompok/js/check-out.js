function gantikab(sp, sk){
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

function gantikecamatan(sk, skc){
    var sk = document.getElementById(sk);
    var skc = document.getElementById(skc);
    skc.innerHTML = "";

    switch(sk.value){
        case "surabaya":
            var arraypilihan = ["|", "tenggilis-mejoyo|Tenggilis Mejoyo", "rungkut|Rungkut"];
            break;
        case "malang":
            var arraypilihan = ["|", "blimbing|Blimbing", "klojen|Klojen"];
            break;
        
        case "semarang":
            var arraypilihan = ["|", "bawen|Bawen", "susukan|Susukan"];
            break;
        case "boyolali":
                var arraypilihan = ["|", "wonosegoro|Wonosegoro"];
                break;

        case "bandung":
            var arraypilihan = ["|", "nagreg|Nagreg", "cileunyi|Cileunyi"];
            break;
    }

    for(var pilihan in arraypilihan){
        var pair = arraypilihan[pilihan].split("|");
        var pilihanbaru = document.createElement("option");
        pilihanbaru.value = pair[0];
        pilihanbaru.innerHTML = pair[1];
        skc.options.add(pilihanbaru);
    }
}

function gantikelurahan(skc, skl){
    var skc = document.getElementById(skc);
    var skl = document.getElementById(skl);
    skl.innerHTML = "";

    switch(skc.value){
        case "tenggilis-mejoyo":
            var arraypilihan = ["|", "prapen|Prapen", "panjang-jiwo|Panjang Jiwo"];
            break;
        case "rungkut":
                var arraypilihan = ["|", "penjaringan-sari|Penjaringan Sari", "kedung-baruk|Kedung Baruk"];
                break;

        case "blimbing":
            var arraypilihan = ["|", "purwantoro|Purwantoro", "polehan|Polehan"];
            break;
        case "klojen":
            var arraypilihan = ["|", "klojen|Klojen", "oro-oro-dowo|Oro-Oro Dowo"];
            break;
        
        case "bawen":
                var arraypilihan = ["|", "harjosari|Harjosari", "doplang|Doplang"];
                break;
        case "susukan":
                var arraypilihan = ["|", "timpik|Timpik", "tawang|Tawang"];
                break;

        case "wonosegoro":
                var arraypilihan = ["|", "jatilawang|Jatilawang", "kalinanas|Kalinanas"];
                break;

        case "nagreg":
            var arraypilihan = ["|", "bojong|Bojong", "ciaro|Ciaro"];
            break;
        case "cileunyi":
            var arraypilihan = ["|", "cileunyi-kulon|Cileunyi Kulon", "cileunyi-wetan|Cileunyi Wetan"];
            break;
    }

    for(var pilihan in arraypilihan){
        var pair = arraypilihan[pilihan].split("|");
        var pilihanbaru = document.createElement("option");
        pilihanbaru.value = pair[0];
        pilihanbaru.innerHTML = pair[1];
        skl.options.add(pilihanbaru);
    }
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