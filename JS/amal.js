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

        // Donatur

        result.donatur.forEach((item) => {
            $('#nav-donatur').append(`<div class="d-flex path donatur">
            <div class="p-2"><img src="${BASE_URL}/img/icon.png"></div>
            <div class="p-2"> ${item.nama_donatur}
                <br> <span>${item.tgl_amal}</span>
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