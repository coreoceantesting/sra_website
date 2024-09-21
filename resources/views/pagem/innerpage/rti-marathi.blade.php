@extends('layouts.app') @section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)') @section('content')


<div class="cleafix"></div>
<section>

    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">मुख्यपृष्ठ</a></li>
            <li class="breadcrumb-item active">नागरी सेवा</li>
            <li class="breadcrumb-item active">माहितीचा अधिकार कायदा</li>
            <li class="pull-right"><a href="" onClick="window.print()"><i class="ri-printer-fill"></i></a></li>
        </ol>
    </div>
</section>
<section class="content_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="left_menu">

                    <h3>नागरी सेवा</h3>
                    <div class="menus1">
                        <nav>
                            <ul id="respMenu" class="ace-responsive-menu collapse hide-menu" data-menu-style="">


                                <li class="has-sub">
                                    <a href="{{route('rtimarathi')}}" target="" title="माहितीचा अधिकार कायदा" class="activelm">माहितीचा अधिकार कायदा</a>

                                    <ul>
                                        <li>


                                            <a href="{{ asset('storage/pdf/1509645558RTI_Act_2005.pdf') }}" target="_blank" title="माहितीचा अधिकार कायदा २००५">माहितीचा अधिकार कायदा २००५</a>


                                        </li>
                                        <li>
                                            <a href="https://sra.gov.in/upload/cmsfiles/15198076151514438109RTI_board.pdf" target="_blank" title="जनमाहिती आणि अपिल अधिकारी" class="">जनमाहिती आणि अपिल अधिकारी</a>



                                        </li>

                                    </ul>

                                </li>

                                <li class="has-sub">
                                    <a href="{{route('processtracker')}}" target="_blank" title="आपल्या पत्रांचा मागोवा" class="">आपल्या पत्रांचा मागोवा</a>

                                </li>

                                <li class="has-sub">
                                    <a href="" target="_blank" title="योजना माहिती" class="">योजना माहिती</a>

                                </li>

                                <li class="has-sub">
                                    <a href="{{route('rentmanagemntsystemmr')}}" target="" title="भाडे व्यवस्थापन प्रणाली" class="">भाडे व्यवस्थापन प्रणाली</a>

                                </li>

                                <li class="has-sub">
                                    <a href="{{route('transferoftenements')}}" target="" title="सदनिकेचे / गाळयाचे हस्तांतरण (Transfer Of Tenement)" class="">सदनिकेचे / गाळयाचे हस्तांतरण (Transfer Of Tenement)</a>

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
                    <h3 class="page_heading">माहितीचा अधिकार कायदा</h3>
                    <ul>
                        <li><a href="{{ asset('storage/pdf/1509645558RTI_Act_2005.pdf') }}" target="_blank" rel="noopener">माहितीचा अधिकार कायदा २००५</a></li>
                        <li><a href="{{ asset('storage/pdf/rti_2005_4_1_c.pdf') }}"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #222222;"><span style="font-family: Arial, serif;"><span style="font-size: small;"> माहितीचा अधिकार कायदा 4(1)(c )</span></span></span></span></span></a></li>
                        <li><a href="{{ asset('storage/pdf/rti_adhikari.pdf') }}" target="_blank" rel="noopener"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #222222;"><span style="font-family: Arial, serif;"><span style="font-size: small;">जनमाहिती आणि अपिल अधिकारी</span></span></span></span></span></a></li>
                        <li><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><span style="color: #222222;"><span style="font-family: Arial, serif;"><span style="font-size: small;">माहितीचा अधिकार स्थिती</span></span>
                            </span>
                            </span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>



@endsection
