$(document).ready(function () {
    if($('.datatable-1').length>0){
        // $('.datatable-1').dataTable();
        // $('.dataTables_paginate').addClass('btn-group datatable-pagination');
        // $('.dataTables_paginate > a').wrapInner('<span />');
        // $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
        // $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
    
        $( '.slider-range').slider({
			    range: true,
			    min: 0,
			    max: 20000,
			    values: [ 3000, 12000 ],			
			    slide: function(event, ui) {
				    $(this).find('.ui-slider-handle').attr('title', ui.value);
			    },
	    });
	
        $( '#amount' ).val( '$' + $( '.slider-range' ).slider( 'values', 0 ) + ' - $' + $( '.slider-range' ).slider( 'values', 1 ) );
    

    //Graph/Chart index.html

    var d1 = [ [0, 1], [1, 14], [2, 5], [3, 4], [4, 5], [5, 1], [6, 14], [7, 5],  [8, 5] ];
    var d2 = [ [0, 5], [1, 2], [2, 10], [3, 1], [4, 9],  [5, 5], [6, 2], [7, 10], [8, 8] ];

		var plot = $.plot($('#placeholder2'),
			   [ { data: d1, label: 'Profits'}, { data: d2, label: 'Expenses' } ], {
					lines: {
						show: true,
						fill: true, /*SWITCHED*/
						lineWidth: 2
					},
					points: {
						show: true,
						lineWidth: 5
					},
					grid: {
						clickable: true,
						hoverable: true,
						autoHighlight: true,
						mouseActiveRadius: 10,
						aboveData: true,
						backgroundColor: '#fff',
						borderWidth: 0,
						minBorderMargin: 25,
					},
					colors: [ '#55f3c0', '#0db37e',  '#b4fae3', '#e0d1cb'],
					shadowSize: 0
				 });

		function showTooltip(x, y, contents) {
			$('<div id="gridtip">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo('body').fadeIn(300);
		}

		var previousPoint = null;
		$('#placeholder2').bind('plothover', function (event, pos, item) {
			$('#x').text(pos.x.toFixed(2));
			$('#y').text(pos.y.toFixed(2));

			if (item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;

					$('#gridtip').remove();
					var x = item.datapoint[0].toFixed(0),
						y = item.datapoint[1].toFixed(0);

					showTooltip(item.pageX, item.pageY,
								'x : ' + x + '&nbsp;&nbsp;&nbsp; y : ' + y);
				}
			}
			else {
				$('#gridtip').remove();
				previousPoint = null;
			}
		});
    }

    else
    {
        var d1 = [ [0, 1], [1, 14], [2, 5], [3, 4], [4, 5], [5, 1], [6, 14], [7, 5],  [8, 5] ];
		var d2 = [ [0, 5], [1, 2], [2, 10], [3, 1], [4, 9],  [5, 5], [6, 2], [7, 10], [8, 8] ];

		var plot = $.plot($("#placeholder"), 
		[ { data: d1, label: "Data A" }, { data: d2, label: "Data B" } ], {
			lines: { 
				show: true, 
				fill: false, 
				lineWidth: 2 
			},
			points: { 
				show: true, 
				lineWidth: 5 
			},
			grid: {
				clickable: true,
				hoverable: true,
				autoHighlight: true,
				mouseActiveRadius: 10,
				aboveData: true,
				backgroundColor: "#fafafa",
				borderWidth: 0,
				minBorderMargin: 25,
			},
			colors: [ "#090", "#099",  "#609", "#900"],
			shadowSize: 0
		});

        var d1 = [ [0, 1], [1, 14], [2, 5], [3, 4], [4, 5], [5, 1], [6, 14], [7, 5],  [8, 5] ];
		var d2 = [ [0, 5], [1, 2], [2, 10], [3, 1], [4, 9],  [5, 5], [6, 2], [7, 10], [8, 8] ];

		var plot = $.plot($("#placeholder2"),
			   [ { data: d1, label: "Data Y"}, { data: d2, label: "Data X" } ], {
					lines: { 
						show: true, 
						fill: true, /*SWITCHED*/
						lineWidth: 2 
					},
					points: { 
						show: true, 
						lineWidth: 5 
					},
					grid: {
						clickable: true,
						hoverable: true,
						autoHighlight: true,
						mouseActiveRadius: 10,
						aboveData: true,
						backgroundColor: "#fafafa",
						borderWidth: 0,
						minBorderMargin: 25,
					},
					colors: [ "#090", "#099",  "#609", "#900"],
					shadowSize: 0
				 });

		function showTooltip(x, y, contents) {
			$('<div id="gridtip">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(300);
		}

		var previousPoint = null;
		$("#placeholder2").bind("plothover", function (event, pos, item) {
			$("#x").text(pos.x.toFixed(2));
			$("#y").text(pos.y.toFixed(2));

			if (item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
					
					$("#gridtip").remove();
					var x = item.datapoint[0].toFixed(0),
						y = item.datapoint[1].toFixed(0);
					
					showTooltip(item.pageX, item.pageY,
								"x : " + x + "&nbsp;&nbsp;&nbsp; y : " + y);
				}
			}
			else {
				$("#gridtip").remove();
				previousPoint = null;            
			}
		});

          // PREDEFINED DATA
        var data = [
						{ label: "Series1", data: [[1, 10]] },
						{ label: "Series2", data: [[1, 30]] },
						{ label: "Series3", data: [[1, 90]] }
					];

        // DEFAULT
        $.plot($("#pie-default"), data,
		{
		    series: {
		        pie: {
		            show: true
		        }
		    }
		});

        // DEFINE ACTIONS FOR pieHover & pieClick
        function pieHover(event, pos, obj) {
            if (!obj)
                return;
            percent = parseFloat(obj.series.percent).toFixed(2);
            $("#hover").html('<span>' + obj.series.label + ' - ' + percent + '%</span>');
        }

        function pieClick(event, pos, obj) {
            if (!obj)
                return;
            percent = parseFloat(obj.series.percent).toFixed(2);
            alert('' + obj.series.label + ': ' + percent + '%');
        }

        // DONUT
        $.plot($("#pie-donut"), data,
		{
		    series: {
		        pie: {
		            innerRadius: 50,
		            show: true
		        }
		    }
		});

        // DONUT + INTERACTIVE
        $.plot($("#pie-interactive"), data,
		{
		    series: {
		        pie: {
		            innerRadius: 50,
		            show: true
		        }
		    },
		    grid: {
		        hoverable: true,
		        clickable: true
		    }
		});

        $("#pie-interactive").bind("plothover", pieHover);
        $("#pie-interactive").bind("plotclick", pieClick);
    }
});

// JS YANG DIBUAT SENDIRI

const Formater = new FormatMoney();
const BodySetAdmin = document.querySelector('.BodySetAdmin');

// Page Dashbord

function getDataTable(){
	$("#TableDataProgram").DataTable({
		paging: true,
		aLengthMenu: [
			[10, 30, 50, -1],
			[10, 30, 50, "All"],
		],
		searching: true,
		ordering: true,
		info: true,
		autoWidth: true,
		responsive: false,
		language: {
			search: "",
		}
	})
	$('.dataTables_paginate').addClass('btn-group datatable-pagination');
	$('.dataTables_paginate > a').wrapInner('<span />');
	$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
	$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
}

if(BodySetAdmin != null){
    $.ajax({
		url : 'http://localhost/AmalBox/Api/getAllAmal.php',
		type : 'GET',
		dataType : 'JSON',
		success : (result) => {
		  let setCard = "";
		  let number = 1;

		  result.data.forEach((item) => {
			setCard += `<tr class="odd gradeX">
			<td>
				${number++}
			</td>
			<td>
				${item.judul}
			</td>
			<td>
				${item.alamat}
			</td>
			<td class="center">
				${item.terkumpul}
			</td>
			<td class="center">
				${item.dana}
			</td>
			<td>
				${item.tgl_mulai}
			</td>
			<td>
				${item.tgl_selesai}
			</td>
			<td>
				<a href="#" onclick="EditDataProgram(event, ${item.id_amal})" class="btn small">
					<i class="icon-edit"></i>
				</a>
				<a href="#" onclick="HapusDataProgram(event, ${item.id_amal})" class="btn small">
					<i class="icon-trash text-danger"></i>
				</a>
			</td>
		</tr>`;
		  });

		  BodySetAdmin.innerHTML = setCard;
		  getDataTable();
		},
		error : (e) => {
		  console.log(e);
		}
	  });
}

function HapusDataProgram (event, data){
	event.preventDefault();

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Data akan segera di hapus!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: "#d33",
		confirmButtonText: 'Submit',
		cancelButtonText: "Close",
	  }).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url : 'http://localhost/AmalBox/Api/hapusAmal.php',
				type : 'POST',
				dataType : 'JSON',
				data : {
					id_amal : data
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
					  });
				},
				error : (e) => {
				  console.log(e);
				}
			});
		}
	  });
}

// Page Donatur

function CommandDonatur(status, data){
	let setUrl = "http://localhost/AmalBox/Api/getAllDonatur.php";
	if(status){
		setUrl = `http://localhost/AmalBox/Api/getAllDonatur.php?status=${data}`
	}

	const BodySetDonatur = document.querySelector('.BodySetDonatur');

	$.ajax({
		url : setUrl,
		type : 'GET',
		dataType : 'JSON',
		success : (result) => {
			let setCard = "";
			let number = 1;
  
			result.data.forEach((item) => {
			  setCard += `<tr>
			  <td>
				  ${number++}
			  </td>
			  <td>
				  ${item.nama_donatur}
			  </td>
			  <td class="center">
			  	${Formater.toRupiah(item.jml_amal)}
			  </td>
			  <td>
			  	${item.pesan}
			  </td>
			  <td class="center">
			  	${item.tgl_amal}
			  </td>
			  <td>
				  <a href="#" onclick="SubmitDonatur(${item.id_donatur})" class="btn small" id="check">
					  <i class="far fa-check-circle"></i>
				  </a>
			  </td>
		  </tr>`;
			});
  
			BodySetDonatur.innerHTML = setCard;
			getDataTable();
		},
		error : (e) => {
			console.log(e);
		},
	})
}

CommandDonatur(true, 0);

function SubmitDonatur(data){
	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Data akan segera di proses!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: "#d33",
		confirmButtonText: 'Submit',
		cancelButtonText: "Close",
	  }).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url : 'http://localhost/AmalBox/Api/submitAmal.php',
				type : 'POST',
				dataType : 'JSON',
				data : {
					id_donatur : data
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
					  });
				},
				error : (e) => {
				  console.log(e);
				}
			});
		}
	  });
}

// Page Tambah Admin

function TambahDonatur(){
	const username = document.getElementById('username');
	const email = document.getElementById('email');
	const password = document.getElementById('password');

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Pastikan Tidak Ada Field Yang Kosong!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: "#d33",
		confirmButtonText: 'Submit',
		cancelButtonText: "Close",
	  }).then((result) => {
		if (result.isConfirmed) {

			if(username.value.length == 0 || email.value.length == 0 || password.value.length == 0){
				Swal.fire(
					"Ooppss..",
					`Salah satu field ada yang kosong!`,
					"error"
				);
			} else if (!email.value.includes("@")) {
				Swal.fire(
					"Ooppss..",
					`Email harus memiliki simbol @`,
					"error"
				);
			} else {
				$.ajax({
					url : 'http://localhost/AmalBox/Api/addAdmin.php',
					type : 'POST',
					dataType : 'JSON',
					data : {
						username : username.value,
						email : email.value,
						password : password.value
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
						  });
					},
					error : (e) => {
					  console.log(e);
					}
				});
			}
		}
	  });
}