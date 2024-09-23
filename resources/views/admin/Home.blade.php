@extends('layouts.app')

@section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)')

@section('content')

{{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}

<section class="bg_gray">
    <div class="mean-container">
        <div class="row">
            <div class="col-md-12 col-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        <li data-target="#myCarousel" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="https://www.sra.gov.in/upload/banner/TRANSFER_OF_TENENET_Pamphlet_page-0001.jpg" alt="Banner" style="width: 100%; height: auto; max-height: 500px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Online Transfer Of Tenement</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://www.sra.gov.in/upload/banner/Rent_English_Banner.jpg" alt="Banner" style="width: 100%; height: auto; max-height: 500px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Register Rent Related Complaint Online</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://www.sra.gov.in/upload/banner/Resize_RENT_PAMPLETE_size-min_optimized_250.jpg" alt="Banner" style="width: 100%; height: auto; max-height: 500px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Register Complaint Online Rent Related</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://www.sra.gov.in/upload/banner/IMG_22671.jpeg" alt="Banner" style="width: 100%; height: auto; max-height: 500px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>SRA Work In Progress</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://www.sra.gov.in/upload/banner/banner_sra1.jpg" alt="Banner" style="width: 100%; height: auto; max-height: 500px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>SRA Building</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://www.sra.gov.in/upload/banner/IMG_1964.jpeg" alt="Banner" style="width: 100%; height: auto; max-height: 500px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>SRA Building</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://www.sra.gov.in/upload/banner/IMG_2006.jpeg" alt="Banner" style="width: 100%; height: auto; max-height: 500px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>SRA Building</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://www.sra.gov.in/upload/banner/sra_banner_image_11.jpg" alt="Banner" style="width: 100%; height: auto; max-height: 500px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>SRA Building</h3>
                            </div>
                        </div>
                    </div>
                    <div id="carouselButtons">

                        <button id="playButton" type="button" class="btn btn-default btn-xs">
                            <i class="ri-play-circle-line"></i>
                        </button>
                        <button id="playButton" type="button" class="btn btn-default btn-xs">
                            <i class="ri-pause-circle-line"></i>
                        </button>

                    </div>

                    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="display: flex; align-items: center; justify-content: center;">
                        <i class="ri-arrow-left-s-line" style="font-size: 24px; color: white;"></i>
                        <span class="sr-only">पहिला</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next" style="display: flex; align-items: center; justify-content: center;">
                        <i class="ri-arrow-right-s-line" style="font-size: 24px; color: white;"></i>
                        <span class="sr-only">पुढील</span>
                    </a>


                </div>
                <div class="shadow text-center">
                    <img src="https://www.sra.gov.in/assets/themes/images/shadow.png" alt="" title="">
                </div>
            </div>
        </div>
        <div class="mean-container">
            <div class="whats_new">
                <div id="multilines">
                    <h3 class="announc_heading">
                        <img src="https://www.sra.gov.in/assets/themes/images/blinking_new.gif" />
                        नवीन काय आहे -
                        <span class="scroll-text">
                            <a href="https://sra.gov.in/pagem/innerpage/transfer-of-tenements.php" target="_blank" title="Online Transfer Of Tenement">
                                Online Transfer Of Tenement
                            </a>
                        </span>
                    </h3>
                </div>
            </div>
        </div>

        <section>
            <div class="row" style="padding-left: 30px; padding-right: 30px; margin-top: 12px;">
                <div class="col-md-4 col-xs-12">
                    <div class="key_person hvr-float-shadow highlight-border" style="background-color: #067e52; border-radius: 15px; overflow: hidden; display: flex; align-items: center; padding: 10px; margin: 10px;">
                        <div class="pull-left mr20">
                            <img src="https://www.sra.gov.in/upload/minister/CM1.jpg" width="75" height="75" style="border-radius: 15px;" alt="श्री. एकनाथ शिंदे" title="श्री. एकनाथ शिंदे">
                        </div>
                        <div style="flex-grow: 1; text-align: center;">
                            <a href="{{route('eknath_shinde')}}">
                                <span class="font_20" style="display: block; color: white;">श्री. एकनाथ शिंदे</span>
                                <span class="font_16" style="display: block; color: white;">मा. मुख्यमंत्री साहेब</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="key_person hvr-float-shadow highlight-border" style="background-color:#3aaed5; border-radius: 15px; overflow: hidden; display: flex; align-items: center; padding: 10px; margin: 10px;">
                        <div class="pull-left mr20">
                            <img src="https://www.sra.gov.in/upload/minister/ajitpawar1.png" width="75" height="75" style="border-radius: 15px;" alt="श्री. अजित पवार" title="श्री. अजित पवार">
                        </div>
                        <div style="flex-grow: 1; text-align: center;">
                            <a href="{{route('ajitpawar')}}">
                                <span class="font_20" style="display: block; color: white;">श्री. अजित पवार</span>
                                <span class="font_16" style="display: block; color: white;">मा.उपमुख्यमंत्री साहेब</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="key_person hvr-float-shadow highlight-border" style="background-color: #067e52; border-radius: 15px; overflow: hidden; display: flex; align-items: center; padding: 10px; margin: 10px;">
                        <div class="pull-left mr20">
                            <img src="https://www.sra.gov.in/upload/minister/valsanair.jpeg" width="75" height="70" style="border-radius: 15px;" alt="श्रीमती. वल्सा नायर सिंग (भा.प्र.से)" title="श्रीमती. वल्सा नायर सिंग (भा.प्र.से)">
                        </div>
                        <div style="flex-grow: 1; text-align: center;">
                            <a href="{{route('valsyasingha')}}">
                                <span class="font_20" style="display: block; color: white;">श्रीमती. वल्सा नायर सिंग</span>
                                <span class="font_16" style="display: block; color: white;">मा.केंद्रीय मंत्री साहेब</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="key_person hvr-float-shadow highlight-border" style="background-color:#d3401b; border-radius: 15px; overflow: hidden; display: flex; align-items: center; padding: 10px; margin: 10px;">
                        <div class="pull-left mr20">
                            <img src="https://www.sra.gov.in/upload/minister/D_CM1.jpg" width="75" height="70" style="border-radius: 15px;" alt="श्री. देवेंद्र फडणवीस" title="श्री. देवेंद्र फडणवीस">
                        </div>
                        <div style="flex-grow: 1; text-align: center;">
                            <a href="{{route('devendra_fadanvis')}}">
                                <span class="font_20" style="display: block; color: white;">श्री. देवेंद्र फडणवीस</span>
                                <span class="font_16" style="display: block; color: white;">मा.उपमुख्यमंत्री साहेब</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="key_person hvr-float-shadow highlight-border" style="background-color: #d96726; border-radius: 15px; overflow: hidden; display: flex; align-items: center; padding: 10px; margin: 10px;">
                        <div class="pull-left mr20">
                            <img src="https://www.sra.gov.in/upload/minister/images1.jpg" width="75" height="70" style="border-radius: 15px;" alt="श्री. अतुल सावे" title="श्री. अतुल सावे">
                        </div>
                        <div style="flex-grow: 1; text-align: center;">
                            <a href="{{route('atulsave')}}">
                                <span class="font_20" style="display: block; color: white;">श्री. अतुल सावे</span>
                                <span class="font_16" style="display: block; color: white;">मा.गृहनिर्माण मंत्री</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="key_person hvr-float-shadow highlight-border" style="background-color:#d3401b; border-radius: 15px; overflow: hidden; display: flex; align-items: center; padding: 10px; margin: 10px;">
                        <div class="pull-left mr20">
                            <img src="https://www.sra.gov.in/upload/minister/WhatsApp_Image_2024-05-10_at_11_32_37_AM.jpeg" width="75" height="70" style="border-radius: 15px;" alt="डॉ. महेंद्र कल्याणकर (भा.प्र.से.)" title="डॉ. महेंद्र कल्याणकर (भा.प्र.से.)">
                        </div>
                        <div style="flex-grow: 1; text-align: center;">
                            <a href="{{route('mahendrakalyankar')}}">
                                <span class="font_20" style="display: block; color: white;">डॉ. महेंद्र कल्याणकर (भा.प्र.से.)</span>
                                <span class="font_16" style="display: block; color: white;">मुख्य कार्यकारी अधिकारी, एसआरए</span>
                                <span class="font_16" style="display: block; color: white;">बृहन्मुंबई</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</section>




  <section class="about_sec">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </section>
  <hr style="border: 0; height: 2px; background-color: rgb(95, 223, 232); margin: 0;">
  <br>
  <section class="media_sec" style="padding: 0 15px;">
    <div class="mean-container">
      <div class="row">
        <div class="col-md-8 col-xs-12" style="padding-left: 15px;">
          <div class="multimedia">
            <ul class="nav nav-tabs">
              <li class="active">
                <a data-toggle="tab" href="#photo">
                  नवीनतम परिपत्रके
                </a>
              </li>
              <li>
                <a data-toggle="tab" href="#video">
                  बातम्या आणि प्रकाशन
                </a>
              </li>
              <li>
                <a data-toggle="tab" href="#media">
                  नवीनतम ऑर्डर
                </a>
              </li>
              <li>
                <a data-toggle="tab" href="#nividaanisuchana">
                  निविदा आणि सुचना
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="photo" class="tab-pane fade in active">
                <div class="gallery_box">
                  <ul>
                    <li>
                      <i class="bx bx-chevron-right">
                      </i>
                      <a href="https://www.sra.gov.in/upload/circular/CIRCULAR.pdf" target="_blank"
                      title="CIRCULAR">

                        CIRCULAR
                        <span>
                          [वर प्रकाशित: 29-07-2022 (Deputy Collector)]
                        </span>
                      </a>
                    </li>
                    <li>
                      <i class="bx bx-chevron-right">
                      </i>
                      <a href="https://www.sra.gov.in/upload/circular/" target="_blank" title="झोपडपट्टी पुनर्वसन प्राधिकरण अंतर्गत योजनेतील पात्र सभासदाच्या प्रथम झोपडी तोडल्याप्रमाणे जेष्ठता यादी सादर करणेबाबत.">
                        झोपडपट्टी पुनर्वसन प्राधिकरण अंतर्गत योजनेतील पात्र सभासदाच्या प्रथम झोपडी
                        तोडल्याप्रमाणे जेष्ठता यादी सादर करणेबाबत.
                        <span>
                          [वर प्रकाशित: 09-06-2022 (Information Technolo)]
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div id="video" class="tab-pane fade">
                <div class="gallery_box">
                  <ul>
                    <li>
                      <a href="https://www.sra.gov.in/upload/publication/अधिसूचना_प्रसिध्द_करणेबाबत__जलप्रभात_नगर_क्र_4_माता_रमाबाई_एस_आर_ए_सह_गृह_फेडरेशन_(नियो_)_1.pdf"
                      target="_blank" title="अधिसूचना प्रसिध्द करणेबाबत. जलप्रभात नगर क्र.4 माता रमाबाई एस.आर.ए.सह.गृह.फेडरेशन (नियो.)">
                        अधिसूचना प्रसिध्द करणेबाबत. जलप्रभात नगर क्र.4 माता रमाबाई एस.आर.ए.सह.गृह.फेडरेशन
                        (नियो.)
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div id="media" class="tab-pane fade">
                <div class="gallery_box">
                  <ul>
                    <li>
                      <a href="https://www.sra.gov.in/upload/orders/Order_(SRA_Vs__Ms__Anahhata_Buildwell_LLP)_1.pdf"
                      target="_blank" title="Order (SRA Vs. Ms. Anahhata Buildwell LLP)">
                        Order (SRA Vs. Ms. Anahhata Buildwell LLP)
                        <span>
                          [वर प्रकाशित: 06-09-2024(Chief Executive Offi)]
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div id="nividaanisuchana" class="tab-pane fade">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <div class="card" style="border: 1px solid rgba(0, 142, 255, 0.3803921568627451);">
            <div class="card-body">
              <h4 style="padding-left: 15px;">
                Track Your Letter
              </h4>
              <div class="input" style="padding-left: 15px;">
                <input id="file_number" type="text" class="form-control" name="file_number"
                placeholder="Letter Unique ID e.g. GEN/2017/1">
              </div>
            </div>
            <br>
          </div>

          <div class="important_links">
            <ul>
              <li>
                <button class="blue-button" onclick="window.location.href='{{route('faq')}}'">
                  <span class="text">
                    वारंवार विचारले जाणारे प्रश्न
                  </span>
                </button>
              </li>
              <li>
                <button class="blue-button" onclick="window.location.href='{{route('actandrulesmarathi')}}'">
                  <span class="text">
                    सहकारी विभाग
                  </span>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="scroll_sec">
    <div class="container">
      <div class="row">

      </div>
    </div>

    </div>
    <div style="background-color: rgb(202, 101, 19); padding: 50px; border-radius: 0px; color: white; display: flex; align-items: flex-start;">
          <div class="col-md-4 col-xs-12">
              <div class="snapstack" style="display: flex; flex-direction: column; align-items: center; position: relative; width: 20rem; height: 20rem;">
                  <div class="snap snap--1" style="width: 14rem; height: 14rem;">
                      <div class="snap__frame snap__frame--blue" style="width: 14rem; height: 14rem;">
                          <img src="admin/images/paper.png" alt="Blue" class="snap__img">
                      </div>
                  </div>
                  <div class="snap snap--2" style="width: 14rem; height: 14rem;">
                      <div class="snap__frame snap__frame--green" style="width: 14rem; height: 14rem;">
                          <img src="admin/images/paper.png" alt="Green" class="snap__img">
                      </div>
                  </div>
                  <div class="snap snap--3" style="width: 14rem; height: 14rem;">
                      <div class="snap__frame snap__frame--yellow" style="width: 14rem; height: 14rem;">
                          <img src="admin/images/paper.png" alt="Yellow" class="snap__img">
                      </div>
                  </div>
                  <div class="snap snap--4" style="width: 14rem; height: 14rem;">
                      <div class="snap__frame snap__frame--orange" style="width: 14rem; height: 14rem;">
                          <img src="admin/images/paper.png" alt="Orange" class="snap__img">
                      </div>
                  </div>

              </div>
          </div>


          <div style="display: flex; flex-direction: column; width: 100%; margin-left: 20px;">
              <!-- First row of buttons with spacing -->
              <div style="display: flex; justify-content: space-between; margin-bottom: 20px;"> <!-- Adjusted space between rows -->
                  <button style="border: 2px solid white; background-color: transparent; color: white; padding: 10px 20px; margin-right: 15px; cursor: pointer; border-radius: 5px; font-size: 16px; width: 203px; height: 42px;"
                  onmouseover="this.style.backgroundColor='white'; this.style.color='rgb(202, 101, 19)';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='white';">
                    नागरी सनद
                  </button>
                  <button style="border: 2px solid white; background-color: transparent; color: white; padding: 10px 20px; margin-right: 15px; cursor: pointer; border-radius: 5px; font-size: 16px; width: 203px; height: 42px;"
                  onmouseover="this.style.backgroundColor='white'; this.style.color='rgb(202, 101, 19)';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='white';">
                    शासन निर्णय
                  </button>
                  <button style="border: 2px solid white; background-color: transparent; color: white; padding: 10px 20px; cursor: pointer; border-radius: 5px; font-size: 16px; width: 203px; height: 42px;"
                  onmouseover="this.style.backgroundColor='white'; this.style.color='rgb(202, 101, 19)';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='white';">
                    गृहनिर्माण पुस्तिका
                  </button>
              </div>

              <!-- Second row of buttons with spacing -->
              <div style="display: flex; justify-content: space-between;">
                  <button style="border: 2px solid white; background-color: transparent; color: white; padding: 10px 20px; margin-right: 15px; cursor: pointer; border-radius: 5px; font-size: 16px; width: 203px; height: 42px;"
                  onmouseover="this.style.backgroundColor='white'; this.style.color='rgb(202, 101, 19)';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='white';">
                    कायदा व नियम
                  </button>
                  <button style="border: 2px solid white; background-color: transparent; color: white; padding: 10px 20px; margin-right: 15px; cursor: pointer; border-radius: 5px; font-size: 16px; width: 203px; height: 42px;"
                  onmouseover="this.style.backgroundColor='white'; this.style.color='rgb(202, 101, 19)';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='white';">
                    पर्यावरण कक्ष
                  </button>
                  <button style="border: 2px solid white; background-color: transparent; color: white; padding: 10px 20px; cursor: pointer; border-radius: 5px; font-size: 16px; width: 203px; height: 42px;"
                  onmouseover="this.style.backgroundColor='white'; this.style.color='rgb(202, 101, 19)';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='white';">
                    योजना माहिती
                  </button>
              </div>
          </div>
      </div>


    <div class="mean-container">
      <div class="row" style="display: flex; width: 100%;">
        <div class="column" style="flex: 2; padding: 10px; box-sizing: border-box;">
          <img src="admin/images/baner.png" alt="Photo Gallery" title="Photo Gallery" style="width: 100%; height: 95%;">
        </div>
        <div class="column" style="flex: 1; padding: 10px; box-sizing: border-box; background-color: #3e2ca3;">
          <p style="color: #f1f1f1;">
            भारतीय स्वातंत्र्य दिनानिमित गुरवार १५ ऑगस्ट रोजी दिनाचे ही काहि शंचित्रे
          </p>
        </div>
        <div class="column" style="flex: 1.5; padding: 10px; box-sizing: border-box; background-color: #7fcf8b;">
          <h2 style="color: #f1f1f1;">
            आदेश
          </h2>
        </div>
        <div class="column" style="flex: 1; padding: 10px; box-sizing: border-box; background-color: #589be8;">
          <h2>
            परिपत्रके
          </h2>
        </div>
      </div>
    </div>

    <div class="mean-container ">
      <div class="row" style="display: flex; width: 100%;">
        <div class="column" style="flex: 2; padding: 10px; box-sizing: border-box;">
          <iframe width="100%" height="95%" src="https://www.youtube.com/embed/q1z-t66nOdY"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </div>


        <div class="column" style="flex: 1; padding: 10px; box-sizing: border-box; background-color: #e7462a;">
          <p style="color: #f1f1f1;">
            भारतीय स्वातंत्र्य दिनानिमित गुरवार १५ ऑगस्ट रोजी दिनाचे ही काहि शंचित्रे
          </p>
        </div>

        <div class="column" style="flex: 1.5; padding: 10px; box-sizing: border-box; background-color: #e8efe9;">
          <img src="admin/images/imges.jpeg"
          alt="Photo Gallery" title="Photo Gallery" style="width: 100%; height: 95%;">
        </div>

        <div class="column" style="flex: 1; padding: 10px; box-sizing: border-box; background-color: #589be8;">
          <p style="color: #f1f1f1;">
            भारतीय स्वातंत्र्य दिनानिमित गुरवार १५ ऑगस्ट रोजी दिनाचे ही काहि शंचित्रे
          </p>
        </div>
      </div>
    </div>
    <br>
    <div class="mean-container ">
      <div class="whats_new">
        <div id="multilines">
          <h3 class="announc_heading">
            <img src="https://www.sra.gov.in/assets/themes/images/blinking_new.gif"
            />
            नवीन काय आहे -
            <span class="scroll-text">
              <a href="https://sra.gov.in/pagem/innerpage/transfer-of-tenements.php"
              target="_blank" title="Online Transfer Of Tenement">
                Online Transfer Of Tenement
              </a>
            </span>
          </h3>
        </div>
      </div>
    </div>
    <div style="display: flex; flex-direction: column; gap: 10px; width: 100%;">
      <div style="display: flex; justify-content: space-between; align-items: stretch;">

        <div style="flex: 1; padding: 0 20px; text-align: justify;">
          <h3 style="text-decoration: underline; color: rgb(65, 56, 236);">
            आमच्या विषयी
          </h3>
          <p>
            महाराष्ट्र शासनाने झोपडपट्टीने व्यापलेली जमीन हा मूलभूत उत्पन्नाचा स्त्रोत
            धरुन त्यावर चटईक्षेत्र निर्देशांक देऊन, की जेणेकरुन खुल्या बाजारातील सदनिकांच्या
            विक्रीच्या रकमाद्वारे झोपडपट्टीवासीयांना पक्की घरे मोफत मिळतील, या योजनेसाठी
            कायद्यामध्ये आवश्यक बदल करुन झोपडपट्टी पुनर्वसन प्राधिकरणची स्थापना केली.
            हे प्राधिकरण संपूर्ण बृहन्मुंबईतील झोपडपट्टीवासीयांच्या पुनर्वसनासाठी "नियोजन
            प्राधिकरण" म्हणून काम करील.
          </p>
          <p>
            झोपडपट्टी पुनर्वसन प्राधिकरणाचा प्रयत्न आहे की, झोपडपट्टी पुनर्वसन योजनेची
            अंमलबजावणी एक खिडकी योजने अंतर्गत राबवावी. म्हणजे प्रकल्पासाठी लागणाऱ्या
            सर्व प्रकारच्या मान्यता जसे की, सहकारी गृहनिर्माण संस्थेची स्थापना, झोपडपट्टीधारकांची
            पात्रता प्रमाणित करणे, झोपडपट्टी पुनर्वसन योजनेस असहकार करणाऱ्या विरुद्ध
            दंडात्मक कारवाई करणे. झोपडपट्टीचे सर्वेक्षण करुन योजना करण्यासाठी अनुमती
            देणे व गलिच्छवस्तीच्या झोपडपट्टी जमिनीवरील अनुदान मंजूर करणे, पुनर्वसन
            भूखंडाचे भाडेपट्टा आणि खुले विक्री भूखंड आणि मालमत्ता कार्डस् (पीआर कार्ड)
            अद्यावत करणे.
          </p>
          <a href="">
            [ अधिक वाचा ]
          </a>
        </div>
        <div style="width: 1px; background-color: rgb(65, 56, 236); height: 1000%;">
          <hr>
          <hr>
          <hr>
          <hr>
          <hr>
          <hr>
          <hr>
          <hr>
          <hr>
          <hr>
          <hr>
          <hr>
        </div>

        <div style="flex: 1; padding: 0 20px; text-align: justify;">
          <h3 style="text-decoration: underline; color: rgb(65, 56, 236);">
            CEO संदेश
          </h3>
          <p>
            मुंबई ही महाराष्ट्र राज्याची राजधानी असून तीला नेहमी भारताची आर्थिक राजधानी
            म्हणून गणली जाते. या शहराच्या रहिवाश्यांना विविध मनोरंजनाच्या सुविधा, समाजिक
            सुरक्षा, शहरी जीवनाचे वलय, कामाचा चांगला मोबदला, तसेच घरातील कुटुंब प्रमुखाबरोबर
            इतरही व्यक्तींना पात्रतेनुसार पुरेसे काम मिळण्याची हमी यासारख्या अनेक सुविधा
            मिळतात.
          </p>
          <p>
            शहराच्या या वैशिष्टयामुळे साहजिकच गेल्या अनेक वर्षात अन्य भागातून मोठया
            प्रमाणात नागरिकांचे लोंढे या महानगरीकडे आकर्षिले गेले व त्या लोकांनी या
            महानगरीत वास्तव्य केले. शहरीकरणाच्या प्रचंड रेटयामुळे नियोजनकार, स्थानिक
            स्वराज्य संस्था, गृहनिर्माण संस्था आणि स्थावर जंगम मालमत्तेचे विकासक या
            सर्वांना शहरातील सामान्य माणसाला परवडेल अशी रहावयासाठी घरे देणे शक्य झाले
            नाही. आजच्या मितीला, 50 टक्के पेक्षा जास्त रहिवाशी 2393 पेक्षा गलिच्छ समुहामध्ये
            विखुरलेले आहेत. ते अतिधोकादायक, आरोग्याला अपायकारक परिस्थितीत दु:खद व असुरक्षित
            झोपडीत जीवन जगत आहेत.
          </p>
          <a href="">
            [ अधिक वाचा ]
          </a>
        </div>
      </div>
    </div>
    <br>
    <div class="scrolling-wrapper">
      <div class="scrolling-content">
        <div class="company-name">
          <img src="{{ asset('admin/images/img1.png') }}" style="max-width: 100px; height: auto; margin-right: 20px;">
        </div>
        <div class="company-name">
          <img src="{{ asset('admin/images/img2.jpeg') }}" style="max-width: 100px; height: auto; margin-right: 20px;">
        </div>
        <div class="company-name">
          <img src="{{ asset('admin/images/img3.png') }}" style="max-width: 100px; height: auto; margin-right: 20px;">
        </div>
        <div class="company-name">
          <img src="{{ asset('admin/images/img4.png') }}" style="max-width: 100px; height: auto; margin-right: 20px;">
        </div>
        <div class="company-name">
          <img src="{{ asset('admin/images/img5.png') }}" style="max-width: 100px; height: auto; margin-right: 20px;">
        </div>
      </div>
    </div>
  </section>
  {{-- <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
  <script>
    var botmanWidget = {
        aboutText: 'ssdsd',
        introMessage: "✋ Hi! I'm form sra.com"
    };
</script> --}}
<script>
    var botmanWidget = {
        aboutText: 'ssdsd',
        introMessage: "✋ Hi! I'm form sra.com"
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
@endsection
