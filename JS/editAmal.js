let getURL = new URL(window.location.href);
let searchParams = getURL.searchParams;
const BASE_URL = 'http://localhost/amalbox';

$.ajax({
    url : 'http://localhost/AmalBox/Api/getDetailAmal.php',
    type : 'GET',
    dataType : 'JSON',
    data : {
        id_amal : searchParams.get('id')
    },
    success : (result) => {
        const NamaProgram = document.getElementById('NamaProgram');
        const Alamat = document.getElementById('alamat');
        const TargetTerkumpul = document.getElementById('TargetTerkumpul');
        const Detail = document.getElementById('Detail');
        const WaktuMulai = document.getElementById('WaktuMulai');
        const WaktuAkhir = document.getElementById('WaktuAkhir');

        const FileLama1 = document.getElementById('FileLama1');
        const FileLama2 = document.getElementById('FileLama2');

        NamaProgram.value = result.data.judul;
        Alamat.value = result.data.alamat;
        TargetTerkumpul.value = result.data.dana;
        Detail.value = result.data.detail;
        WaktuMulai.value = result.data.tgl_mulai;
        WaktuAkhir.value = result.data.tgl_selesai;
        FileLama1.src = `${BASE_URL}/uploads/photos/${result.data.gambar}`;
        FileLama2.src = `${BASE_URL}/uploads/photos/${result.data.gambar_lain}`;
    },
    error : (e) => {
        console.log(e);
    }
});

function EditAmal(){
    const NamaProgram = document.getElementById('NamaProgram');
	const Alamat = document.getElementById('alamat');
	const TargetTerkumpul = document.getElementById('TargetTerkumpul');
	const Detail = document.getElementById('Detail');
	const WaktuMulai = document.getElementById('WaktuMulai');
	const WaktuAkhir = document.getElementById('WaktuAkhir');
	const Status = document.getElementById('status');
	const Gambar1 = document.getElementById('Gambar1');
	const Gambar2 = document.getElementById('Gambar2');

	const FileLama1 = document.getElementById('FileLama1').src;
	const FileLama2 = document.getElementById('FileLama2').src;

    const FileName1 = FileLama1.replace(/^.*[\\\/]/, '');
    const FileName2 = FileLama2.replace(/^.*[\\\/]/, '');

    let selesai = 0;

    if(Status.value == "Selesai"){
        selesai = 1;
    }

    // pake ini juga bisa kalo gk mau pake kode regex
    // const FileName1 = FileLama1.split("/").pop();

    let BaseData = new FormData();

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Pastikan Tidak Ada Data Yang Salah!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: "#d33",
		confirmButtonText: 'Submit',
		cancelButtonText: "Close",
	  }).then((result) => {
		if (result.isConfirmed) {
            BaseData.append("id_amal", searchParams.get('id'));
            BaseData.append("selesai", selesai);
            BaseData.append("judul", NamaProgram.value);
            BaseData.append("dana", TargetTerkumpul.value);
            BaseData.append("alamat", Alamat.value);
            BaseData.append("detail", Detail.value);
            BaseData.append("tgl_mulai", WaktuMulai.value);
            BaseData.append("tgl_selesai", WaktuAkhir.value);
            BaseData.append("old_img", FileName1);
            BaseData.append("old_img_lain", FileName2);

            if(!Gambar1){
                BaseData.append("img", Gambar1.files[0]);
            } else if (!Gambar2){
                BaseData.append("img_lain", Gambar2.files[0]);
            }

            $.ajax({
                url : "http://localhost/AmalBox/Api/editAmal.php",
                type : 'POST',
                dataType : 'JSON',
                data : BaseData,
                cache: false,
                contentType: false,
                processData: false,
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
                      });
                },
                error : (e) => {
                    console.log(e);
                }
            })
		}
	})
}