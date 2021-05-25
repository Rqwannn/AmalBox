let getURL = new URL(window.location.href);
let searchParams = getURL.searchParams;

$.ajax({
    url : 'http://localhost/AmalBox/Api/getDetailAmal.php',
    type : 'GET',
    dataType : 'JSON',
    data : {
        id_amal : searchParams.get('id')
    },
    success : function (result){
        // Detail Amal

        const GambarSatu = document.querySelector('.GambarSatu');
        const GambarDua = document.querySelector('.GambarDua');
        const TitleAmal = document.querySelectorAll('.TitleAmal');
        const ContentAmal = document.querySelector('.ContentAmal');

        const Terkumpul = document.querySelector('.Terkumpul');
        const Keseluruhan = document.querySelector('.Keseluruhan');
        const Tanggat = document.querySelector('.Tanggat');
        const alamatAmal = document.querySelector('.alamatAmal');

        const progresAmal = document.querySelector('.progresAmal');

        const getTimeStart = new Date(result.data.tgl_mulai).getTime();
        const getTimeEnd = new Date(result.data.tgl_selesai).getTime();

        const selisih = getTimeEnd - getTimeStart;
        const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));

        let getProgress = Math.round((parseInt(result.data.terkumpul) * 100) / parseInt(result.data.dana));

        if(parseInt(result.data.terkumpul) > parseInt(result.data.dana)){
          getProgress = '100';
        }

        GambarSatu.src = `${BASE_URL}/uploads/photos/${result.data.gambar}`;
        GambarDua.src = `${BASE_URL}/uploads/photos/${result.data.gambar_lain}`;
        TitleAmal.forEach((element) => {
            element.innerHTML = result.data.judul;
        })
        ContentAmal.innerHTML = result.data.detail;
        Keseluruhan.innerHTML = Formater.toRupiah(result.data.dana);
        Tanggat.innerHTML = hari;
        Terkumpul.innerHTML = Formater.toRupiah(result.data.terkumpul);
        alamatAmal.innerHTML = result.data.alamat;
        progresAmal.innerHTML = getProgress;

        const progressbar = document.querySelector('.progress-bar');
        progressbar.setAttribute('aria-valuenow', getProgress);

          //Progress bar
          var delay = 500;
          $(".progress-bar").each(function(i){
              $(this).delay( delay*i ).animate( { width: $(this).attr('aria-valuenow') + '%' }, delay );
          
              $(this).prop('Counter',0).animate({
                  Counter: $(this).text()
              }, {
                  duration: delay,
                  easing: 'swing'
              });
          });

        // Donatur

        result.donatur.forEach((item) => {
            $('#nav-donatur').append(`<div class="d-flex path donatur">
            <div class="p-2"><img src="${BASE_URL}/img/icon.png"></div>
            <div class="p-2"> ${item.nama_donatur}
                <p style="font-size: 12px;">${item.tgl_amal}</p>
            </div>
            <div class="ml-auto p-2">
                <h5>${Formater.toRupiah(item.jml_amal)}</h5>
            </div>
        </div>`);
        })
    },
    error : function (e){
        console.log(e);
    }
})

function AmalSekarang(){
    const namaDonatur = document.getElementById('namaDonatur');
    const jumlahDonasi = document.getElementById('jumlahDonasi');
    const pesan = document.getElementById('pesan');

    if(namaDonatur.value == "" || jumlahDonasi.value == "" || pesan.value == ""){
        alert('Tidak Boleh Ada Field Yang Kosong');
    } else {
        $.ajax({
            url : 'http://localhost/AmalBox/Api/amal.php',
            type : 'POST',
            dataType : 'JSON',
            data : {
                nama_donatur : namaDonatur.value,
                jml_amal : jumlahDonasi.value,
                pesan : pesan.value,
                id_amal : searchParams.get('id')
            },
            success : (result) => {
                Swal.fire({
                    title: 'Success',
                    text: `${result.message}`,
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Close'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                  })
            },
            error : (e) => {
                console.log(e);
            }
        })
    }

}