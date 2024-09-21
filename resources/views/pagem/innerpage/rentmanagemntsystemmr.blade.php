@extends('layouts.app') @section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)') @section('content')

    <body>


        <div class="cleafix"></div>
        <section>

            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">मुख्यपृष्ठ</a></li>
                    <li class="breadcrumb-item active">नागरी सेवा</li>
                    <li class="breadcrumb-item active">भाडे व्यवस्थापन प्रणाली</li>
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
                                            <a href="{{route('rtimarathi')}}" target="" title="माहितीचा अधिकार कायदा" class="">माहितीचा अधिकार कायदा</a>

                                            <ul>
                                                <li>
                                                    <a href="{{ asset('storage/pdf/1509645558RTI_Act_2005.pdf') }}" target="_blank" title="माहितीचा अधिकार कायदा २००५" class="">माहितीचा अधिकार कायदा २००५</a>

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
                                            <a href="{{route('rentmanagemntsystemmr')}}" target="" title="भाडे व्यवस्थापन प्रणाली" class="activelm">भाडे व्यवस्थापन प्रणाली</a>

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
                            <h3 class="page_heading">भाडे व्यवस्थापन प्रणाली</h3>
                            <ul>
                                <li>नागरिकांनी पोर्टलवर स्वतःची नोंदणी करणे आवश्यक आहे, तर नोंदणीसाठी नाव, मोबाइल नंबर, ईमेल यासारखे मूलभूत तपशील घेतले जातील.</li>
                                <li>नोंदणी केल्यानंतर वापरकर्ता स्वतःसाठी किंवा त्याच्या कुटुंबातील सदस्यांसाठी भाड्याने संबंधित तक्रार नोंदवू शकतो.</li>
                                <li>तक्रार नोंदवताना नाव, भाडे तपशील, बँक तपशील, मागील पेमेंट तपशील यासारखे मूलभूत तपशील भरणे आवश्यक आहे.</li>
                                <li>वापरकर्ता आधार कार्ड, बँक पासबुक, परि. २ क्रमांक आणि भाडे करार यांसारखे सहाय्यक दस्तऐवज देखील अपलोड करू शकतो.</li>
                                <li>वापरकर्ता त्याच्या विद्यमान अर्जाची स्थिती अनुप्रयोग सूची विभागांतर्गत पाहू शकतो.</li>
                                <li>कोणताही अर्ज नाकारला गेला असल्यास वापरकर्ता पुन्हा सबमिट करू शकतो.</li>
                            </ul>
                            <h4><a href="https://rent.sra.gov.in/"><span style="text-decoration: underline;"> <span style="background-color: #ff0000;"> <span style="background-color: #ffffff;"> भाडे संबंधित तक्रारींकरिता  ⇒ </span></span> </span> </a><span style="background-color: #ffff00;"><a href="https://rent.sra.gov.in/"> येथे क्लिक करा</a></span></h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>





</body>

@endsection
