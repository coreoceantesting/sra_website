@extends('layouts.app')

@section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)')

@section('content')
<section>

    <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">मुख्यपृष्ठ</a></li>
        <li class="breadcrumb-item active">संसाधने</li>
        <li class="breadcrumb-item active">गृहनिर्माण पुस्तिका</li>
      <li class="pull-right"><a href="" onClick="window.print()"><i class="fa fa-print"></i></a></li>
    </ol>
    </div>
    </section>
    <section class="content_sec">
    <div class="container">
    <div class="row">
    <div class="col-md-3 col-xs-12">
        <div class="left_menu">

    <h3>संसाधने</h3>
        <div class="menus1">
          <nav>
                <ul id="respMenu" class="ace-responsive-menu collapse hide-menu" data-menu-style="">


                    <li class="has-sub">
                        <a href="https://sra.gov.in/pagem/innerpage/notification---acts-marathi.php" target="" title="अधिसूचना आणि कायदा" class="">अधिसूचना आणि कायदा</a>

                    </li>

                    <li class="has-sub">
                        <a href="https://sra.gov.in/upload/cmsfiles/15139381181509647295sanad.pdf" target="_blank" title="नागरी सनद" class="">नागरी सनद</a>

                    </li>

                    <li class="has-sub">
                        <a href="http://sra.gov.in/circularm" target="_blank" title="आमची परिपत्रके" class="">आमची परिपत्रके</a>

                    </li>

                    <li class="has-sub">
                        <a href="https://sra.gov.in/pagem/innerpage/gis-mis-slum-data-marathi.php" target="" title="जीआयएस-एमआयएस झोपडपट्टी डेटा" class="">जीआयएस-एमआयएस झोपडपट्टी डेटा</a>

                    </li>

                    <li class="has-sub">
                        <a href="https://sra.gov.in/pagem/innerpage/coopertaive-department-marathi.php" target="" title="सहकार विभाग" class="">सहकार विभाग</a>

                            <ul>
                                                    <li>
                                    <a href="https://sra.gov.in/pagem/innerpage/act-and-rules-marathi.php" target="" title="कायदा व नियम" class="">कायदा व नियम</a>








                                </li>
                                                <li>
                                    <a href="https://sra.gov.in/pagem/innerpage/housing-manual-marathi.php" target="" title="गृहनिर्माण पुस्तिका" class="activelm">गृहनिर्माण पुस्तिका</a>








                                </li>

                        </ul>

                    </li>

                    <li class="has-sub">
                        <a href="http://sra.gov.in/ordersm" target="_blank" title="आमचे आदेश" class="">आमचे आदेश</a>

                    </li>

                    <li class="has-sub">
                        <a href="https://sra.gov.in/pagem/innerpage/https:grmaharashtragovin1145government-resolutions.php" target="" title="शासन निर्णय" class="">शासन निर्णय</a>

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
<h3 class="page_heading">गृहनिर्माण पुस्तिका</h3>
<p> </p>
<p><strong><a href="{{ asset('storage/pdf/Final_draft_Housing_Maunal.pdf') }}" target="_blank" rel="noopener"><span class="tabsubhead">येथे क्लिक करा</span></a></strong>  <span class="tabsubhead">मराठी गृहनिर्माण पुस्तिका </span></p>
</div>
</div>

</div>
</div>
</section>

@endsection
