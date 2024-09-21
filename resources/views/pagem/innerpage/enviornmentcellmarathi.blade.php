@extends('layouts.app') @section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)') @section('content')

<body>
<div class="cleafix"></div>

        <div class="cleafix"></div>
        <section>

            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">मुख्यपृष्ठ</a></li>
                    <li class="breadcrumb-item active">अधिक</li>
                    <li class="breadcrumb-item active">पर्यावरण कक्ष</li>
                    <li class="pull-right"><a href="" onClick="window.print()"><i class="ri-printer-fill"></i></a></li>
                </ol>
            </div>
        </section>
        <section class="content_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="left_menu">

                            <h3>अधिक</h3>
                            <div class="menus1">
                                <nav>
                                    <ul id="respMenu" class="ace-responsive-menu collapse hide-menu" data-menu-style="">


                                        <li class="has-sub">
                                            <a href="{{route('enviornmentcellmarathi')}}" target="" title="पर्यावरण कक्ष" class="activelm">पर्यावरण कक्ष</a>

                                        </li>

                                        <li class="has-sub">
                                            <a href="http://umd.nic.in/sra/" target="_blank" title="भौगोलिक स्थितीचे संकेतस्थळ" class="">भौगोलिक स्थितीचे संकेतस्थळ</a>

                                        </li>

                                    </ul>
                                </nav>
                            </div>



                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="content-div">
                            <h3 class="page_heading">पर्यावरण कक्ष</h3>
                            <p style="text-align: justify;">The Ministry of Environment, Forest & Climate Change has sanctioned the amendement for incorporating Integration of Environmental conditions in the building bye laws vide MoEF Notification No. S.O.3999 (E), dtd.9th December
                                2016 in which proposed that the State Government should incorporate the environmental norms/environmental safeguards (hereinafter referred to as “the said Proposed Integration of Environmental Norms/Conditions in DCR”)
                                to be adopted for all buildings and construction having built up area 5,000 Sq.mtr to 1,50,000 sqmtr. in the Development Control Regulations of the respective Planning Authorities as specifically mentioned in the said notification.
                                Accordingly the Government of Maharashtra vide Notification No.TPS-1816/CR-443/16/DP/Pune & Konkan/UD-13, dtd.28th June, 2017 has sanctioned modification in respect of the said proposed Integration of Environmental Norms/Conditons
                                in DCR, in sanctioned Development Control Regulations of all Planning Authorities in Pune & Konkan Division. Accordingly, Slum Rehabilitation Authority, as a Planning Authority u/s.2 (19) (b) of Maharashtra Regional & Town
                                Planning Act, 1966 hereby constitute an Environmental Cell under the provisions of Appendix ‘C’ of the said Notification, as follows:</p>
                            <table class="table" border="1" width="100%" cellspacing="0" cellpadding="7">
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1.</td>
                                        <td>Dr. Sharad P. Kale, Waste Management (Solid) Expert</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">2.</td>
                                        <td>Dr. Tuhin Banerjee, Representative of NEERI, Waste Management (Liquid) Expert</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">3.</td>
                                        <td>Shri.Ashwin Velotia, Retired Dy.Chief Engineer, MCGM Resource Efficiency including Building Material Expert</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">4.</td>
                                        <td>Shri. Satish Bapat, Retired Chief Engineer, Mahavitaran Energy effieciency and Renewable Energy Expert</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">5.</td>
                                        <td>Shri. P.S.Sakhare, Retired Chief Engineer, MCGM Environmental Planning including Air quality Mangement Expert</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">6.</td>
                                        <td>Shri.R.B.Mitkar, Dy. Chief Engineer, SRA Transport Planning and Management Expert</td>
                                        <td>Member Secretary</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p> </p>
                            <p style="text-align: left;"><strong>The Formats for Applications to be submitted through QBEA</strong></p>
                            <table class="table" border="1" width="100%" cellspacing="0" cellpadding="7">
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1.</td>
                                        <td><span class="style3">Appendix-I(<strong>Form I</strong>)</span></td>
                                        <td>
                                            <p><em><a title="Appendix A" href="{{ asset('storage/pdf/AppendixA.pdf') }}" target="_blank" rel="noopener">[View]</a></em></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">2.</td>
                                        <td><span class="style3">Appendix-II(<strong>Form I-A</strong>)<strong>Check List Of Environmental</strong></span></td>
                                        <td>
                                            <p><a href="{{ asset('storage/pdf/CHECKLISTOFENVIRONMENTALIMPACTS.pdf') }}" target="_blank" rel="noopener">[View]</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">3.</td>
                                        <td><span class="style3"><span class="style7">Appexndix-A (<strong>Environmental Condition for Building and Construction</strong>.)</span></span>
                                        </td>
                                        <td>
                                            <p><a class="style7" href="{{ asset('storage/pdf/EnvironmentalConditionforBuildingandConstruction.pdf')}}" target="_blank" rel="noopener">[View]</a></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p> </p>
                            <p style="text-align: justify;"><strong>Documents Required To Be Submitted Alongwith Applications</strong></p>
                            <table class="table" border="1" width="100%" cellspacing="0" cellpadding="7">
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1.</td>
                                        <td>
                                            <p><span class="style8">List of the documents required for OFFLINE proposal (<strong>Annexure-1</strong>)</span></p>
                                        </td>
                                        <td>
                                            <p><a href="{{ asset('storage/pdf/ListofthedocumentsrequiredforONLINEOFFLINEtheproposal.pdf')}}" target="_blank" rel="noopener"><span class="style7">[View]</span></a></p>
                                            <p> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">2.</td>
                                        <td><span class="style3"><span class="style7"><span class="style8">Check List</span></span>
                                            </span>
                                        </td>
                                        <td>
                                            <p><a href="{{ asset('storage/pdf/Checklist.pdf')}}" target="_blank" rel="noopener"><span class="style7">[View]</span></a></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p> </p>
                            <p><strong>Fees  of the Application</strong></p>
                            <table class="table" border="1" width="100%" cellspacing="0" cellpadding="7">
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1.</td>
                                        <td>
                                            <p><span class="style8"><span class="style7"><strong>Scrutiny fees</strong></span></span>
                                            </p>
                                        </td>
                                        <td>
                                            <p><a class="style7" href="{{ asset('storage/pdf/Scrutinyfees.pdf')}}" target="_blank" rel="noopener">[View]</a></p>
                                            <p> </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>



    </body>


    @endsection
