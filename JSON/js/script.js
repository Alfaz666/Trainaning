function tampilkanallmenu(){
    $.getJSON('data/sbob.json', function(hasil){  // buat ambil data json && () == nama parameter bebas
        var menu    = hasil.menu;
        $.each(menu, function(i, hasil){ // each buat menampilkan data secara menyeluruh/loop
            // console.log(i, hasil);      !!! append -> tambahkan diakhir
            $('#daftar-menu').append('<div class="col-md-4"><div class="card mb-3"><img src="img/menu/'+ hasil.gambar +'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+ hasil.nama +'</h5><p class="card-text">'+ hasil.deskripsi +'</p><h5 class="card-title">$ '+ hasil.harga +'</h5><a href="#" class="btn btn-primary">Go somewhere</a></div></div></div>')     // '+ +' -> buat meloop data yang diambil(dari json)
        })
    })

}

tampilkanallmenu();

$('.nav-link').on('click', function(){
    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    var kategori    = $(this).html();
    $('#aaa').html(kategori);

    if(kategori == 'All' ){
        tampilkanallmenu();
        return;
    }

    $.getJSON('data/sbob.json', function(hasil){
        var menu = hasil.menu;
        var content = '';

        $.each(menu, function(i, hasil){
            if( hasil.kategori == kategori.toLowerCase()){
                content += '<div class="col-md-4"><div class="card mb-3"><img src="img/menu/'+ hasil.gambar +'" class="card-img-top"><div class="card-body"><h5 class="card-title">'+ hasil.nama +'</h5><p class="card-text">'+ hasil.deskripsi +'</p><h5 class="card-title">$ '+ hasil.harga +'</h5><a href="#" class="btn btn-primary">Go somewhere</a></div></div></div>';
            }
        })

        $('#daftar-menu').html(content); 

    })


})