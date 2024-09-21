@extends('layouts.app')
@section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)')
 @section('content')

    <body>


        <section>

            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">मुख्यपृष्ठ</a></li>
                    <li class="breadcrumb-item active">नागरी सेवा</li>
                    <li class="breadcrumb-item active">सदनिकेचे / गाळयाचे हस्तांतरण (Transfer Of Tenement)</li>
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
                                            <a href="{{route('rentmanagemntsystemmr')}}" target="" title="भाडे व्यवस्थापन प्रणाली" class="">भाडे व्यवस्थापन प्रणाली</a>

                                        </li>

                                        <li class="has-sub">
                                            <a href="{{route('transferoftenements')}}" target="" title="सदनिकेचे / गाळयाचे हस्तांतरण (Transfer Of Tenement)" class="activelm">सदनिकेचे / गाळयाचे हस्तांतरण (Transfer Of Tenement)</a>

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
                            <h3 class="page_heading">सदनिकेचे / गाळयाचे हस्तांतरण (Transfer Of Tenement)</h3>
                            <p>महाराष्ट्र झोपडपट्टी क्षेत्र (सुधारणा, निर्मुलन व पुनर्वसन) अधिनियम १९७१ मधील कलम ३ (ई) नुसार व झोपडपट्टी पुनर्वसन प्राधिकरणाचे परिपत्रक क्र. १४५, दि. २४/१०/२०१३ अन्वये सदनिकेचे / गाळयाचे हस्तांतरण</p>
                            <p>
                                <br /><strong>मूळ झोपडीधारकाची कागदपत्रे व माहिती.</strong></p>
                            <ol>
                                <li>मूळ झोपडीधारकाची कागदपत्रे व माहिती.</li>
                                <li>सक्षम प्राधिकारी यांनी मंजूर केलेल्या परि-२ ची प्रत. (Annexure-II)</li>
                                <li>सदनिका / गाळा वाटप पत्र / ताबा पत्राची प्रत. (Allotment Letter / Possession Letter)</li>
                                <li>सहकारी गृहनिर्माण संस्थेच्या भाग दाखल्याची प्रत. (Share Certificate)</li>
                                <li>अर्जदाराच्या (पती/पत्नी) आधार कार्डची प्रत. (Adhaar Card Xerox)</li>
                                <li>प्राधिकरण / संस्था / विकासक यांचेकडून सदनिका वाटप झाल्याबाबतची माहिती. (फोटो यादी)</li>
                            </ol>
                            <p> </p>
                            <p><strong>सदनिका/गाळा घेणाऱ्या झोपडीधारकाची कागदपत्रे व माहिती.</strong></p>
                            <p> </p>
                            <ol>
                                <li>सक्षम प्राधिकाऱ्याने दिलेला उत्पन्नाचा दाखला (Income certificate for the current year / form १६ current year + last २ years.)</li>
                                <li>विहीत नमुन्यातील प्रतिज्ञापत्र (Legal Paper + Notery)</li>
                                <li>सक्षम प्राधिकारी यांनी दिलेला अधिवास दाखला (Domicile Certificate)</li>
                                <li>सहकारी गृहनिर्माण संस्थेचा गाळा / सदनिका हस्तांतरणाबाबतची परवानगी (Society NOC)</li>
                                <li>विकत घेणाऱ्याच्या (पती/पत्नी) आधार कार्डची प्रत</li>
                            </ol>
                            <h4><a href="https://transfersra.in/"><span style="text-decoration: underline;"><span style="background-color: #ff0000;"><span style="background-color: #ffffff;"><strong>ऑनलाईन </strong>सदनिकेचे / गाळयाचे हस्तांतरण (Transfer Of Tenement) करण्याकरिता ⇒ </span></span> </span> <span style="background-color: #ffff00;"> येथे क्लिक करा</span></a></h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="cleafix"></div>



    </body>

    @endsection
