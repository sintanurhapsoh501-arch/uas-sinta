function sewaJasa(namaJasa){
    
    let konfirmasi = confirm(
        "Apakah kamu yakin ingin menyewa " + namaJasa + "?"
    );

    if(konfirmasi){
        alert("Pesanan diproses! Talent kami sedang otw chat kamu ✨");
    }
}

function playMusic(){
    document.getElementById("bgmusic").play();
}