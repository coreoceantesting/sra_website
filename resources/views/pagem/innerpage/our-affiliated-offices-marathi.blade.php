@extends('layouts.app')

@section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)')

@section('content')

<section>

    <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">मुख्यपृष्ठ</a></li>
        <li class="breadcrumb-item active">आमच्या विषयी</li>
        <li class="breadcrumb-item active">संलग्न कार्यालये</li>
      <li class="pull-right"><a href="" onClick="window.print()"><i class="fa fa-print"></i></a></li>
    </ol>
    </div>
    </section>
    <section class="content_sec">
    <div class="container">
    <div class="row">
    <div class="col-md-3 col-xs-12">
        <div class="left_menu">

    <h3>आमच्या विषयी</h3>
        <div class="menus1">
          <nav>
                <ul id="respMenu" class="ace-responsive-menu collapse hide-menu" data-menu-style="">


                    <li class="has-sub">
                        <a href="https://sra.gov.in/pagem/innerpage/department-history-marathi.php" target="" title="विभागीय माहिती" class="">विभागीय माहिती</a>

                    </li>

                    <li class="has-sub">
                        <a href="https://sra.gov.in/pagem/innerpage/vision---mission-marathi.php" target="" title="हेतू आणि ध्येय" class="">हेतू आणि ध्येय</a>

                    </li>

                    <li class="has-sub">
                        <a href="https://sra.gov.in/pagem/innerpage/organization-structure-marathi.php" target="" title="संस्थेचा आराखडा" class="">संस्थेचा आराखडा</a>

                    </li>

                    <li class="has-sub">
                        <a href="https://sra.gov.in/pagem/innerpage/our-leaderhip-marathi.php" target="" title="आमचे नेतृत्व" class="">आमचे नेतृत्व</a>

                    </li>

                    <li class="has-sub">
                        <a href="https://sra.gov.in/pagem/innerpage/authority-members-marathi.php" target="" title="सक्षम सदस्य" class="">सक्षम सदस्य</a>

                    </li>

                    <li class="has-sub">
                        <a href="https://sra.gov.in/pagem/innerpage/our-affiliated-offices-marathi.php" target="" title="संलग्न कार्यालये" class="activelm">संलग्न कार्यालये</a>

                            <ul>
                                                    <li>
                                    <a href="https://sra.gov.in/upload/cmsfiles/" target="_blank" title="डी.आर.पी  (धारावी)" class="">डी.आर.पी  (धारावी)</a>








                                    <ul>
                                                                        <li>
                                            <a href="https://sra.gov.in/pagem/innerpage/about-drp-marathi.php" target="" title="डी.आर.पी  बाबत" class="">डी.आर.पी  बाबत</a>
                                        </li>
                                                                        <li>
                                            <a href="https://sra.gov.in/pagem/innerpage/growth-history-marathi.php" target="" title="प्रगती आढावा" class="">प्रगती आढावा</a>
                                        </li>
                                                                        <li>
                                            <a href="https://sra.gov.in/pagem/innerpage/past-programs-marathi.php" target="" title="मागील कार्यक्रम" class="">मागील कार्यक्रम</a>
                                        </li>
                                                                        <li>
                                            <a href="https://sra.gov.in/upload/cmsfiles/" target="_blank" title="अधिसूचना आणि सूचना" class="">अधिसूचना आणि सूचना</a>
                                        </li>
                                                                    </ul>

                                </li>
                                                <li>
                                    <a href="https://sra.gov.in/pagem/innerpage/thane-city-marathi.php" target="" title="ठाणे शहर" class="">ठाणे शहर</a>








                                    <ul>
                                                                        <li>
                                            <a href="https://sra.gov.in/pagem/innerpage/notifications-and-notices-thane-marathi.php" target="" title="अधिसूचना आणि सूचना" class="">अधिसूचना आणि सूचना</a>
                                        </li>
                                                                        <li>
                                            <a href="https://sra.gov.in/pagem/innerpage/thane-circulars-marathi.php" target="" title="परिपत्रके" class="">परिपत्रके</a>
                                        </li>
                                                                    </ul>

                                </li>
                                                <li>
                                    <a href="https://housing.maharashtra.gov.in/" target="_blank" title="गृहनिर्माण विभाग" class="">गृहनिर्माण विभाग</a>








                                </li>
                                                <li>
                                    <a href="https://mahahousing.mahaonline.gov.in/" target="_blank" title="महाराष्ट्र गृहनिर्माण विकास महामंडळ" class="">महाराष्ट्र गृहनिर्माण विकास महामंडळ</a>








                                </li>

                        </ul>

                    </li>

                    <li class="has-sub">
                        <a href="https://sra.gov.in/pagem/innerpage/gallery.php" target="" title="गॅलरी" class="">गॅलरी</a>

                            <ul>
                                                    <li>
                                    <a href="https://sra.gov.in/pagem/innerpage/photo-gallery.php" target="" title="फोटो गॅलरी" class="">फोटो गॅलरी</a>








                                </li>
                                                <li>
                                    <a href="https://sra.gov.in/pagem/innerpage/spot_light.php" target="" title="स्पॉटलाइट" class="">स्पॉटलाइट</a>








                                </li>

                        </ul>

                    </li>

                </ul>
          </nav>
        </div>



    <style>
    .activelm{
        background:#454f53 !important;
    }
    </style>

</div>
</div>
<div class="col-md-9 col-xs-12">
<div class="content-div">
<h3 class="page_heading">संलग्न कार्यालये</h3>
<p>संलग्न कार्यालये</p>
</div>
</div>

</div>
</div>
</section>

@endsection
