@extends('layouts.app')
@section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)')
@section('content')

<body>

    <div class="cleafix"></div>
    <section>

        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">मुख्यपृष्ठ</a></li>
                <li class="breadcrumb-item active">एसआरए संपर्क निर्देशिका</li>
                <li class="breadcrumb-item active">एसआरए संपर्क निर्देशिका</li>
                <li class="pull-right"><a href="" onClick="window.print()"><i class="ri-printer-fill"></i></a></li>
            </ol>
        </div>
    </section>
    <section class="content_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <div class="left_menu">

                        <h3>एसआरए संपर्क निर्देशिका</h3>
                        <div class="menus1">
                            <nav>
                                <ul id="respMenu" class="ace-responsive-menu collapse hide-menu" data-menu-style="">


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
                        <h3 class="page_heading">एसआरए संपर्क निर्देशिका</h3>
                        <p style="text-align: right;"><a href="{{route('contactusmarathi')}}">Back to Contact Us page</a></p>
                        <p style="text-align: right;"> </p>
                        <p style="text-align: center;"><strong>SRA Greater Mumbai Contact Directory<br /></strong></p>
                        <table class="table" style="width: 695px;" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;"><strong>DESIGNATION</strong></td>
                                    <td style="height: 18px; width: 245.733px;"><strong>EMAIL-ID</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">CEO</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ceo[at]sra[dot]gov[dot]in">ceo[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">PA to CEO</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ceo[at]sra[dot]gov[dot]in">ceo[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Secretary</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:secretary[at]sra[dot]gov[dot]in">secretary[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">PA to Secretary</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:secretary[at]sra[dot]gov[dot]in">secretary[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="text-align: center; width: 691px; height: 18px;" colspan="3"><strong>Engineering Department</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Dy.Chief Engineer1</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:dyce1[at]sra[dot]gov[dot]in">dyce1[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;"> </td>
                                    <td style="height: 18px; width: 245.733px;"> </td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Executive Engineer-I</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ee1[at]sra[dot]gov[dot]in">ee1[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Executive Engineer-II</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ee2[at]sra[dot]gov[dot]in">ee2[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Executive Engineer-III</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ee3[at]sra[dot]gov[dot]in">ee3[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Executive Engineer-IV</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ee3[at]sra[dot]gov[dot]in">ee4[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Executive Engineer-V</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ee3[at]sra[dot]gov[dot]in">ee5[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 1</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae1[at]sra[dot]gov[dot]in">ae1[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 2</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae2[at]sra[dot]gov[dot]in">ae2[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 3</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae3[at]sra[dot]gov[dot]in">ae3[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 4</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae4[at]sra[dot]gov[dot]in">ae4[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 5</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae4[at]sra[dot]gov[dot]in">ae5[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 6</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae6[at]sra[dot]gov[dot]in">ae6[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 7</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae7[at]sra[dot]gov[dot]in">ae7[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 8</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae8[at]sra[dot]gov[dot]in">ae8[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 9</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae9[at]sra[dot]gov[dot]in">ae9[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 10</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae9[at]sra[dot]gov[dot]in">ae10[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 11</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae11[at]sra[dot]gov[dot]in">ae11[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 12</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae12[at]sra[dot]gov[dot]in">ae12[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 13</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae12[at]sra[dot]gov[dot]in">ae13[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 14</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae12[at]sra[dot]gov[dot]in">ae14[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Engineer 15</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ae15[at]sra[dot]gov[dot]in">ae15[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-1</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se2[at]sra[dot]gov[dot]in">se1[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-2</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se2[at]sra[dot]gov[dot]in">se2[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-3</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se3[at]sra[dot]gov[dot]in">se3[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-4</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se4[at]sra[dot]gov[dot]in">se4[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-5</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se5[at][dot]gov[dot]in">se5[at]sra.gov.on</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-6</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se6[at]sra[dot]gov[dot]in">se6[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-7</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se7[at]sra[dot]gov[dot]in">se7[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-8</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se8[at]sra[dot]gov[dot]in">se8[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-9</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se9[at]sra[dot]gov[dot]in">se9[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-10</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se10[at]sra[dot]gov[dot]in">se10[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-11</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se11[at]sra[dot]gov[dot]in">se11[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-12</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se12[at]sra[dot]gov[dot]in">se12[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Sub Engineer-13</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se13[at]sra[dot]gov[dot]in">se13[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Head Clerk-Engineering Department</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:headclerk[at]sra[dot]gov[dot]in">headclerk[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="text-align: center; width: 691px; height: 18px;" colspan="3"><strong>Finance Department</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Finance Controller</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:fc[at]sra[dot]gov[dot]in">fc[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Account Officer 1</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:accountofficer1[at]sra[dot]gov[dot]in">ao1[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 19.65px;">
                                    <td style="height: 19.65px; width: 281.267px;">Account Officer 2</td>
                                    <td style="height: 19.65px; width: 245.733px;"><a href="mailto:accountofficer2[at]sra[dot]gov[dot]in">ao2[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="text-align: center; width: 691px; height: 18px;" colspan="3"><strong>Deputy Collector Department</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Dy. Collector (WS)</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:dycollws[at]sra[dot]gov[dot]in">dycollws[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Dy. Collector (ES)</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:dycolles[at]sra[dot]gov[dot]in">dycolles[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Dy. Collector (CITY)</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:dycollcity[at]sra[dot]gov[dot]in">dycollcity[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Tahsildar 1</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="../../tahsildar1[at]sra[dot]gov[dot]in">tahsildar1[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Tahsildar 2</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="../../tahsildar2[at]sra[dot]gov[dot]in">tahsildar2[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Tahsildar 3</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="../../tahsildar2[at]sra[dot]gov[dot]in">tahsildar3[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="text-align: center; width: 691px; height: 18px;" colspan="3"><strong>CTSO Department</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">District Supritendent of Land Records</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:dslr[at]sra[dot]gov[dot]in">dslr[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="text-align: center; width: 691px; height: 18px;" colspan="3"><strong>Co-operative Department</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Joint Registrar</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:jtr[at]sra[dot]gov[dot]in">jtr[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Registrar 1</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ar1[at]sra[dot]gov[dot]in">ar1[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Assistant Registrar 2</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ar2[at]sra[dot]gov[dot]in">ar2[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="text-align: center; width: 691px; height: 18px;" colspan="3"><strong>Town Planning Department</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Dy. Director (TP)</td>
                                    <td style="height: 18px; width: 245.733px;">tp<a href="mailto:ar2[at]sra[dot]gov[dot]in">[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="text-align: center; width: 691px; height: 18px;" colspan="3"><strong>Legal Department</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Chief Legal Consultant, SRA</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="../../lcsra[at]sra[dot]gov[dot]in">lcsra[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Chief Legal Consultant, AGRC</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:lchpc[at]sra[dot]gov[dot]in">agrc[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Dy. Legal Advisor, AGRC</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:dyla[at]sra[dot]gov[dot]in">dyla[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="text-align: center; width: 691px; height: 18px;" colspan="3"><strong>Administrative Department</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Administrative Officer</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="../../adminoff[at]sra[dot]gov[dot]in">adminoff[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="width: 691px; text-align: center; height: 18px;" colspan="3"><strong>Information Technology Department</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Information Technology Officer </td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:ito[at]sra[dot]gov[dot]in">ito[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Asst. IT Officer</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:aito[at]sra[dot]gov[dot]in">aito[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="width: 691px; text-align: center; height: 18px;" colspan="3"><strong>Public Relation Department</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Public Relation Officer</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:pro[at]sra[dot]gov[dot]in">pro[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">General Communication</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se14[at]sra[dot]gov[dot]in">info[at]sra[dot]gov[dot]in</a><u> </u></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="text-align: center; height: 18px; width: 681px;" colspan="2"><strong>Competent Authorites</strong></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Competent Authority-1</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se14[at]sra[dot]gov[dot]in">compauth1[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Competent Authority-2</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se14[at]sra[dot]gov[dot]in">compauth2[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Competent Authority-3</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se14[at]sra[dot]gov[dot]in">compauth3[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Competent Authority-4</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se14[at]sra[dot]gov[dot]in">compauth4[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Competent Authority-5</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se14[at]sra[dot]gov[dot]in">compauth5[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Competent Authority-6</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se14[at]sra[dot]gov[dot]in">compauth6[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Competent Authority-7</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se14[at]sra[dot]gov[dot]in">compauth7[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Competent Authority-8</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se14[at]sra[dot]gov[dot]in">compauth8[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Competent Authority-9</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se14[at]sra[dot]gov[dot]in">compauth9[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                                <tr style="height: 18px;">
                                    <td style="height: 18px; width: 281.267px;">Competent Authority-10</td>
                                    <td style="height: 18px; width: 245.733px;"><a href="mailto:se14[at]sra[dot]gov[dot]in">compauth10[at]sra[dot]gov[dot]in</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="text-align: center;"> </p>
                        <table style="height: 50px;" width="448">
                            <tbody>
                                <tr>
                                    <td style="width: 308.677px;"><strong>SRA, Greater Mumbai Board Number</strong></td>
                                    <td style="width: 125.323px;"><strong>022-69125800</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="text-align: center;"> </p>
                        <p style="text-align: center;"> </p>
                        <p style="text-align: center;"> </p>
                        <p style="text-align: center;"><strong>SRA Thane  Contact Directory<br /></strong></p>
                        <table class="table" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td><strong>DESIGNATION</strong></td>
                                    <td><strong>EMAIL-ID</strong></td>
                                    <td nowrap="nowrap"><strong>Direct No</strong></td>
                                </tr>
                                <tr>
                                    <td>Dy. Collector 1</td>
                                    <td>Dycoll1<a href="mailto:thane[at]sra[dot]gov[dot]in">[at]sra[dot]gov[dot]in</a></td>
                                    <td valign="bottom" nowrap="nowrap">022-25842900/ 022-25843900 </td>
                                </tr>
                                <tr>
                                    <td>Dy. Collector 2</td>
                                    <td>Dycoll2<a href="mailto:thane[at]sra[dot]gov[dot]in">[at]sra[dot]gov[dot]in</a></td>
                                    <td valign="bottom" nowrap="nowrap">022-25842900/ 022-25843900 </td>
                                </tr>
                                <tr>
                                    <td>Dy. Collector 3</td>
                                    <td>Dycoll3<a href="mailto:thane[at]sra[dot]gov[dot]in">[at]sra[dot]gov[dot]in</a></td>
                                    <td valign="bottom" nowrap="nowrap">022-25842900/ 022-25843900 </td>
                                </tr>
                                <tr>
                                    <td>General Communication</td>
                                    <td><a href="mailto:thane[at]sra[dot]gov[dot]in">thane[at]sra[dot]gov[dot]in</a><u> </u></td>
                                    <td valign="bottom" nowrap="nowrap">022-25842900/ 022-25843900 </td>
                                </tr>
                            </tbody>
                        </table>
                        <p> </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @endsection
