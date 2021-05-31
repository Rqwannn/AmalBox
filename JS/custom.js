//Card
$(document).ready(function() {
    $("#myCarouselCard").on("slide.bs.carousel", function(e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 3;
      var totalItems = $("#myCarouselCard .carousel-item").length;
  
      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $("#myCarouselCard .carousel-item")
              .eq(i)
              .appendTo("#myCarouselCard .carousel-inner-multi");
          } else {
            $("#myCarouselCard .carousel-inner-multi .carousel-item")
              .eq(0)
              .appendTo($(this).find(".carousel-inner-multi1"));
          }
        }
      }
    });
  });
  
    $(document).ready(function() {
    $("#myCarouselCard2").on("slide.bs.carousel", function(e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 3;
      var totalItems = $("#myCarouselCard2 .carousel-item").length;
  
      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $("#myCarouselCard2 .carousel-item")
              .eq(i)
              .appendTo("#myCarouselCard2 .carousel-inner-multi2");
          } else {
            $("#myCarouselCard2 .carousel-inner-multi .carousel-item")
              .eq(0)
              .appendTo($(this).find(".carousel-inner-multi2"));
          }
        }
      }
    });
  });
  
    $(document).ready(function() {
    $("#myCarouselLogo").on("slide.bs.carousel", function(e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 6;
      var totalItems = $("#myCarouselLogo .carousel-item").length;
  
      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $("#myCarouselLogo .carousel-item")
              .eq(i)
              .appendTo("#myCarouselLogo .carousel-inner-logo");
          } else {
            $("#myCarouselLogo .carousel-inner-logo .carousel-item")
              .eq(0)
              .appendTo($(this).find(".carousel-inner-logo"));
          }
        }
      }
    });
  });
  
  
  setTimeout(function(){        
      $('.giftunggu').delay(0).fadeOut('slow'); 
  }, 1000);
                new WOW().init();
  // ===== Scroll to Top ==== 
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 100px
          $('#return-to-top').fadeIn(200);    // Fade in the arrow
      } else {
          $('#return-to-top').fadeOut(200);   // Else fade out the arrow
      }
  });
  $('#return-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({
          scrollTop : 0                       // Scroll to top of body
      }, 500);
  });

  const BASE_URL = 'http://localhost/amalbox';
  const Formater = new FormatMoney();

  function getDataAmal(){
    $.ajax({
      url : 'http://localhost/AmalBox/Api/getAllAmal.php',
      type : 'GET',
      dataType : 'JSON',
      success : function (result){
  
        result.data.forEach((item) => {
          const getTimeStart = new Date().getTime();
          const getTimeEnd = new Date(item.tgl_selesai).getTime();
          const getAmal = document.querySelector('.getAmal');
          const getAmal2 = document.querySelector('.getAmal2');
  
          const selisih = getTimeEnd - getTimeStart;
          let hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
  
          let getProgress = Math.round((parseInt(item.terkumpul) * 100) / parseInt(item.dana));
  
          if(parseInt(item.terkumpul) > parseInt(item.dana)){
            getProgress = '100';
          }
  
          let SetTerkumpul = '';
  
          if(parseInt(item.terkumpul) != 0){
            SetTerkumpul = Formater.toRupiah(item.terkumpul);
          } else {
            SetTerkumpul = 'Rp. 0';
          }
  
          if(hari > 0){
            hari = `${hari} Hari Lagi`;
          } else {
            hari = 'Selesai';
          }
  
          if(getAmal != null){
            $(getAmal).append(`<div class="item">
            <div class="">
                <div class="card">
                    <a href="${BASE_URL}/amal.php?id=${item.id_amal}" title="">
                        <div class="card-image">
                            <img class="img-fluid" src="${BASE_URL}/uploads/photos/${item.gambar}" alt="Card image cap">
                        </div>
                    </a>
                    <span class="align-self-end tag"><a href="${BASE_URL}/amal.php?id=${item.id_amal}">Pemberdayaan</a></span>
                    <div class="progress align-self-center">
                        <div class="progress-bar" role="progressbar" aria-valuenow="${getProgress}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-info">
                        <span class="text-left">
                            Terkumpul <br>
                            <b>${SetTerkumpul}</b>
                        </span>
                        <span class="text-right ml-auto">
                            <b>${getProgress}%</b> Progress <br>
                            <b>${hari}</b>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="card-title ">
                            <a href="${BASE_URL}/amal.php?id=${item.id_amal}">
                                <h4 class="align-middle text-center">${item.judul}</h4>
                            </a>
                        </div>
                        <p class="card-text">${item.detail}</p>
                        <a href="${BASE_URL}/amal.php?id=${item.id_amal}" class="btn btn-custom w-100 mb-3">AMAL SEKARANG</a>
                        <div class="uploader d-flex justify-content-between">
                            <div class="p2 d-flex align-flex-center">
                                <span class="">
                                    <img src="${BASE_URL}/img/icon.png" class="rounded-circle">
                                </span>
                                <span class="d-flex">
                                    <a href="#" class="align-flex-center align-self-center">RidwanAmal</a>
                                </span>
                            </div>
                            <div class="line-card p2 d-flex align-self-center">
                            </div>
                            <div class="p2 d-flex">
                                <span class="icon-map d-flex">
                                    <i class="fa fa-map-marker fa-2x align-self-center"></i>
                                </span>
                                <span class="lokasi d-flex">
                                    <a href="#" class="justify-content-right align-self-center">${item.alamat}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
          } else {
            $(getAmal2).append(`<div class="col-lg-4">
            <div class="card">
                <a href="${BASE_URL}/amal.php?id=${item.id_amal}" title="">
                    <div class="card-image">
                        <img class="img-fluid" src="${BASE_URL}/uploads/photos/${item.gambar}" alt="Card image cap">
                    </div>
                </a>
                <span class="align-self-end tag"><a href="${BASE_URL}/amal.php?id=${item.id_amal}">Pemberdayaan</a></span>
                <div class="progress align-self-center">
                    <div class="progress-bar" role="progressbar" aria-valuenow="${getProgress}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="card-info">
                    <span class="text-left">
                        Terkumpul <br>
                        <b>${SetTerkumpul}</b>
                    </span>
                    <span class="text-right ml-auto">
                        <b>${getProgress}%</b> Progress <br>
                        <b>${hari}</b> Hari Lagi
                    </span>
                </div>
                <div class="card-body">
                    <div class="card-title mb-3">
                        <a href="${BASE_URL}/amal.php?id=${item.id_amal}">
                            <h4 class="align-middle text-center">${item.judul}</h4>
                        </a>
                    </div>
                    <p class="card-text">${item.detail}</p>
                    <a href="${BASE_URL}/amal.php?id=${item.id_amal}" class="mt-3 btn btn-custom w-100 mb-3">AMAL SEKARANG</a>
                    <div class="uploader d-flex justify-content-between">
                        <div class="p2 d-flex align-flex-center">
                            <span class="d-flex">
                                <img src="${BASE_URL}/img/icon.png" class="rounded-circle align-flex-center align-self-center" style="width: 30px;height: 30px">
                            </span>
                            <span class="d-flex">
                                <a href="#" class="align-flex-center align-self-center">RidwanAmal</a>
                            </span>
                        </div>
                        <div class="line-card p2 d-flex align-self-center">
                        </div>
                        <div class="p2 d-flex" style="overflow: hidden;">
                            <span class="icon-map d-flex">
                                <i class="fa fa-map-marker fa-2x align-self-center" style="font-size: 20px;"></i>
                            </span>
                            <span class="lokasi">
                                <a href="#" class="justify-content-right align-flex-center align-self-center">${item.alamat}</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>`);
          }
  
        })
  
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
  
        if(document.querySelector('.owl-carousel3') != null){
          $('.owl-carousel3').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
        }
      },
      error : function (e){
        console.log(e);
      }
    })
  }

  getDataAmal();

  const cariJudulAmal = document.getElementById('cariJudulAmal');
  const clickJudulAmal = document.getElementById('clickJudulAmal');

  function searchJudul(data, errorMassage){
    $.ajax({
      url : 'http://localhost/AmalBox/Api/cariAmal.php',
      type : 'GET',
      dataType : 'JSON',
      data : {
        key : data
      },
      success : (result) => {

        if(result.message == 'Data Found'){
          if(errorMassage != null){
            errorMassage.remove(errorMassage);
          }

          result.data.forEach((item) => {
            const getTimeStart = new Date().getTime();
            const getTimeEnd = new Date(item.tgl_selesai).getTime();
            const getAmal2 = document.querySelector('.getAmal2');
    
            const selisih = getTimeEnd - getTimeStart;
            let hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
    
            let getProgress = Math.round((parseInt(item.terkumpul) * 100) / parseInt(item.dana));
    
            if(parseInt(item.terkumpul) > parseInt(item.dana)){
              getProgress = '100';
            }
    
            let SetTerkumpul = '';
    
            if(parseInt(item.terkumpul) != 0){
              SetTerkumpul = Formater.toRupiah(item.terkumpul);
            } else {
              SetTerkumpul = 'Rp. 0';
            }
    
            if(hari > 0){
              hari = `${hari} Hari Lagi`;
            } else {
              hari = 'Selesai';
            }
    
              $(getAmal2).html(`<div class="col-lg-4">
              <div class="card">
                  <a href="${BASE_URL}/amal.php?id=${item.id_amal}" title="">
                      <div class="card-image">
                          <img class="img-fluid" src="${BASE_URL}/uploads/photos/${item.gambar}" alt="Card image cap">
                      </div>
                  </a>
                  <span class="align-self-end tag"><a href="${BASE_URL}/amal.php?id=${item.id_amal}">Pemberdayaan</a></span>
                  <div class="progress align-self-center">
                      <div class="progress-bar" role="progressbar" aria-valuenow="${getProgress}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="card-info">
                      <span class="text-left">
                          Terkumpul <br>
                          <b>${SetTerkumpul}</b>
                      </span>
                      <span class="text-right ml-auto">
                          <b>${getProgress}%</b> Progress <br>
                          <b>${hari}</b> Hari Lagi
                      </span>
                  </div>
                  <div class="card-body">
                      <div class="card-title mb-3">
                          <a href="${BASE_URL}/amal.php?id=${item.id_amal}">
                              <h4 class="align-middle text-center">${item.judul}</h4>
                          </a>
                      </div>
                      <p class="card-text">${item.detail}</p>
                      <a href="${BASE_URL}/amal.php?id=${item.id_amal}" class="mt-3 btn btn-custom w-100 mb-3">AMAL SEKARANG</a>
                      <div class="uploader d-flex justify-content-between">
                          <div class="p2 d-flex align-flex-center">
                              <span class="d-flex">
                                  <img src="${BASE_URL}/img/icon.png" class="rounded-circle align-flex-center align-self-center" style="width: 30px;height: 30px">
                              </span>
                              <span class="d-flex">
                                  <a href="#" class="align-flex-center align-self-center">RidwanAmal</a>
                              </span>
                          </div>
                          <div class="line-card p2 d-flex align-self-center">
                          </div>
                          <div class="p2 d-flex" style="overflow: hidden;">
                              <span class="icon-map d-flex">
                                  <i class="fa fa-map-marker fa-2x align-self-center" style="font-size: 20px;"></i>
                              </span>
                              <span class="lokasi">
                                  <a href="#" class="justify-content-right align-flex-center align-self-center">${item.alamat}</a>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>`);
    
          })

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

        } else {
          const getAmal2 = document.querySelector('.getAmal2');
          getAmal2.innerHTML = `<h2 class="text-center mt-3 errorMassage">${result.message}</h2>`;
        }
      },
      error : (e) => {
        console.log(e);
      }
    })
  }

  if(cariJudulAmal != null){
    cariJudulAmal.addEventListener('keyup', async (elemnt) => {
      const errorMassage = document.querySelector('.errorMassage');
      const getAmal2 = document.querySelector('.getAmal2');
      const dataValue =  elemnt.target.value;

      if(elemnt.target.value.length == 0){
        if(errorMassage != null){
          errorMassage.remove(errorMassage);
        }

        [...getAmal2.childNodes].forEach((item) => {
          item.remove(item);
        });

        getDataAmal();
      } else {
        await searchJudul(dataValue, errorMassage);
      }
    });
  }

  const kotakamal = document.querySelector('.kotakamal');

  if(kotakamal != null){
    $.ajax({
      url : 'http://localhost/AmalBox/Api/getAllAmal.php',
      type : 'GET',
      dataType : 'JSON',
      success : (result) => {
        kotakamal.innerHTML = result.data.length;
      },
      error : (e) => {
        console.log(e);
      }
    });
  }