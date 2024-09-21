@extends('layouts.app')
@section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)')
@section('content')

<body>
    <div class="cleafix"></div>
    <section>
        <div class="mean-container"></div>

    </section>

    <div class="cleafix"></div>
    <section>

        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">मुख्यपृष्ठ</a></li>
                <li class="breadcrumb-item active">संपर्क साधा</li>
                <li class="breadcrumb-item active">संपर्क साधा</li>
                <li class="pull-right"><a href="" onClick="window.print()"><i class="ri-printer-fill"></i></a></li>
            </ol>
        </div>
    </section>
    <section class="content_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <div class="left_menu">

                        <h3>संपर्क साधा</h3>
                        <div class="menus1">
                            <nav>
                                <ul id="respMenu" class="ace-responsive-menu collapse hide-menu" data-menu-style="">


                                </ul>
                            </nav>
                        </div>


                    </div>
                </div>
                <div class="col-md-9 col-xs-12">
                    <div class="content-div">
                        <h3 class="page_heading">संपर्क साधा</h3>
                        <p>संपर्क साधा</p>
                        <table border="1" width="100%" cellspacing="1" cellpadding="1">
                            <tbody>
                                <tr>
                                    <td align="center"><strong>मुंबई ऑफिस<br /></strong></td>
                                    <td align="center"><strong>ठाणे कार्यालय</strong></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>प्रशासकीय इमारत,
                                            <br />अनंत काणेकर मार्ग, वांद्रे (पूर्व),
                                            <br />मुंबई 400051
                                            <br />फोन: 022-69125800
                                            <br />ईमेल: info[at]sra[dot]gov[dot]in</p>
                                    </td>
                                    <td>
                                        <p>ठाणे महापालिका मार्केट बिल्डींग,
                                            <br />2 रा मजला केवरा सर्कल, डॉ. अल्माडा रोड मणपाडा, ठाणे (प.)
                                            <br />फोन: 022-25842900 / 022-25843900
                                            <br />ईमेल: thane[at]sra[dot]gov[dot]in</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p> </p>
                        <p> <a title="sra contact directory" href="{{route('contactdirectorymarathi')}}">Click here</a> एसआरए संपर्क/ईमेल निर्देशिका</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
