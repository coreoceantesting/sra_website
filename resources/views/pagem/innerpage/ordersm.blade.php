@extends('layouts.app')

@section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)')

@section('content')
<div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">मुख्यपृष्ठ</a></li>
        <li class="breadcrumb-item active">आमच्या विषयी</li>
        <li class="breadcrumb-item active">आमच्या विषयी</li>
      <li class="pull-right"><a href="" onClick="window.print()"><i class="fa fa-print"></i></a></li>
    </ol>
    </div>
<section class="content_sec">
    <div class="container">
    <div class="row">

    <div class="col-md-12 col-xs-12">
    <div class="content-div">
    <h3 class="page_heading">नवीनतम ऑर्डर</h3>
    <form style="display:none;">
    <div class="orders_form">
        <div class="col-md-4 col-xs-12">
            <div class="form-group">
                <label for="dapartment_name">Department Name:</label>
                <select class="form-control" id="dapartment_name">
                    <option selected="selected" value="Select">Select</option>
                    <option value="1">Admin</option>
                    <option value="2">CTSO</option>
                    <option value="3">Deputy Collector Department</option>
                    <option value="4">Engineering Department</option>
                    <option value="5">Finance Department</option>
                    <option value="6">IT</option>
                    <option value="7">Legal Department</option>
                    <option value="8">PRO</option>
                    <option value="9">Registrar Department</option>
                    <option value="10">Town Planning</option>
                </select>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="form-group">
                <label for="orders_name">Keywords:</label>
                <input type="orders_name" class="form-control" id="orders_name">
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="form-group">
                <label for="from_date">From Date:</label>
                <input type="date" class="form-control" id="from_date">
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="form-group">
                <label for="to_date">To Date:</label>
                <input type="date" class="form-control" id="to_date">
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="form-group">
                <label for="to_date">Unique Code:</label>
                <input type="date" class="form-control" id="to_date">
            </div>
        </div>
        <div class="col-md-4 col-xs-12 pt30">
            <div class="form-group">
                <label for="to_date">(Partially Code Allowed eg. YYYYMMDD)</label>
                <!-- <input type="date" class="form-control" id="to_date"> -->
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default">Clear</button>
        </div>
      </div>
    </form>





    <div class="col-md-12 col-xs-12">
    <div class="row">
    <div class="col-md-12 col-xs-12 page_srch">
    <div class="records">
    <span>एकूण नोंदी:</span><span>337</span>
    </div>
    <div class="go_page" style="display:none;">
    <span>पृष्ठ क्रमांक.:</span><span><input type="text" name=""></span> <span>/6614</span><span><button class="btn" type="button">Go</button></span>
    </div>
    <div class="table_pagination" style="display:none;">
    <a href="">1</a><a href="" class="select">2</a><a href="">3</a><a href="">4</a><a href="">5</a><a href="">6</a><a href="">7</a><a href="">8</a>
    </div>

    </div>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th class="col-xs-1">अनुक्रमांक</th>
            <th class="col-xs-2">विभाग नाव</th>
            <th class="col-xs-4">दस्तऐवज शीर्षक</th>
            <th valign="top" class="col-xs-2">मागणी क्रमांक</th>
            <th class="col-xs-1">मागणी तारीख</th>
            <!-- <th class="col-xs-1">File Size (KB)</th> -->
            <th class="col-xs-1">फाइल डाउनलोड करा</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>1</td>
            <td>Chief Executive Officer</td>
            <td>Order (SRA Vs. Ms. Anahhata Buildwell LLP)</td>
            <td>SRA/CEO/13(2)/Triveni SRA CHS (Prop)/43/2024</td>
            <td>06/09/2024</td>
            <!-- <td>File</td> -->
            <td><a href="{{ asset('storage/pdf/Order_(SRA_Vs__Ms__Anahhata_Buildwell_LLP)_1.pdf') }}" target="_blank" title="Order (SRA Vs. Ms. Anahhata Buildwell LLP)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Ms. Anahhata Buildwell LLP)" title="Order (SRA Vs. Ms. Anahhata Buildwell LLP)"></a></td>
          </tr>

          <tr>
            <td>2</td>
            <td>Chief Executive Officer</td>
            <td>Order (SRA Vs. Ms. Vatsalya Developers Pvt. Ltd.)_1</td>
            <td>SRA/CEO/13(2)/Shri. Sambhaji Nagar CHS (Prop)/2024</td>
            <td>06/09/2024</td>
            <!-- <td>File</td> -->
            <td><a href="{{ asset('storage/pdf/Order_(SRA_Vs__Ms__Vatsalya_Developers_Pvt__Ltd_)_1.pdf') }}" title="Order (SRA Vs. Ms. Vatsalya Developers Pvt. Ltd.)_1"></a></td>
          </tr>

          <tr>
            <td>3</td>
            <td>Chief Executive Officer</td>
            <td>Order (SRA Vs. Ms. Richmond Realtors)</td>
            <td>SRA/CEO/13(2)/New Sai Shhaya CHS/42/2024</td>
            <td>06/09/2024</td>
            <!-- <td>File</td> -->
            <td><a href="{{ asset('storage/pdf/Order_(SRA_Vs__Ms__Richmond_Realtors)_1.pdf') }}" target="_blank" title="Order (SRA Vs. Ms. Richmond Realtors)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Ms. Richmond Realtors)" title="Order (SRA Vs. Ms. Richmond Realtors)"></a></td>
          </tr>

          <tr>
            <td>4</td>
            <td>Engineering Department</td>
            <td>Order (SRA Vs. Ms. Sejal Shakti Realtore LLP)</td>
            <td>SRA/ENG/2985/FN/STGL & ML/LOI</td>
            <td>02/09/2024</td>
            <!-- <td>File</td> -->
            <td><a href="{{ asset('storage/pdf/Order_(SRA_Vs__Ms__Sejal_Shakti_Realtore_LLP)_11.pdf') }}" target="_blank" title="Order (SRA Vs. Ms. Sejal Shakti Realtore LLP)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Ms. Sejal Shakti Realtore LLP)" title="Order (SRA Vs. Ms. Sejal Shakti Realtore LLP)"></a></td>
          </tr>

          <tr>
            <td>5</td>
            <td>Chief Executive Officer</td>
            <td>Order (SRA Vs. Ms. Etco Developers & Realty Pvt. Ltd.)</td>
            <td>SRA/CEO/13(2)/Karmveer Dadasaheb Gaikwad Federatio</td>
            <td>29/08/2024</td>
            <!-- <td>File</td> -->
            <td><a  href="{{ asset('storage/pdf/Order_(SRA_Vs__Ms__Etco_Developers_Realty_Pvt__Ltd_).pdf') }}" target="_blank" title="Order (SRA Vs. Ms. Etco Developers & Realty Pvt. Ltd.)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Ms. Etco Developers & Realty Pvt. Ltd.)" title="Order (SRA Vs. Ms. Etco Developers & Realty Pvt. Ltd.)"></a></td>
          </tr>

          <tr>
            <td>6</td>
            <td>Chief Executive Officer</td>
            <td>Order (SRA Vs. Ms. Paradigm Ambit Buildcon Company)</td>
            <td>SRA/CEO/H.C. Dir/Shiv Ganesh Sai CHS/38/2024</td>
            <td>26/08/2024</td>
            <!-- <td>File</td> -->
            <td><a  href="{{ asset('storage/pdf/Order_(SRA_Vs__Ms__Paradigm_Ambit_Buildcon_Company).pdf') }}" target="_blank" title="Order (SRA Vs. Ms. Paradigm Ambit Buildcon Company)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Ms. Paradigm Ambit Buildcon Company)" title="Order (SRA Vs. Ms. Paradigm Ambit Buildcon Company)"></a></td>
          </tr>

          <tr>
            <td>7</td>
            <td>Chief Executive Officer</td>
            <td>Order (SRA Vs. Ms. UVK Construction LLP)</td>
            <td>SRA/CEO/13(2)/Kaju Hill SRA CHS/35/2024.</td>
            <td>22/08/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/orders/Order_(SRA_Vs__Ms__UVK_Construction_LLP)__1.pdf" target="_blank" title="Order (SRA Vs. Ms. UVK Construction LLP)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Ms. UVK Construction LLP)" title="Order (SRA Vs. Ms. UVK Construction LLP)"></a></td>
          </tr>

          <tr>
            <td>8</td>
            <td>Chief Executive Officer</td>
            <td>Order (SRA Vs. Dawoodi Bohra Jamat Malad)</td>
            <td>SRA/Noor-E-Burhani SRA CHS/HC Dire./37/2024</td>
            <td>22/08/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/orders/Order_(SRA_Vs__Dawoodi_Bohra_Jamat_Malad).pdf" target="_blank" title="Order (SRA Vs. Dawoodi Bohra Jamat Malad)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Dawoodi Bohra Jamat Malad)" title="Order (SRA Vs. Dawoodi Bohra Jamat Malad)"></a></td>
          </tr>

          <tr>
            <td>9</td>
            <td>Engineering Department</td>
            <td>Order (SRA Vs. Ms. A. M. Construction Developer)</td>
            <td>SRA/ENG/1432/FN/ST/GL/LOI</td>
            <td>20/08/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/orders/Order_(SRA_Vs__Ms__A__M__Construction_Developer)__1.pdf" target="_blank" title="Order (SRA Vs. Ms. A. M. Construction Developer)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Ms. A. M. Construction Developer)" title="Order (SRA Vs. Ms. A. M. Construction Developer)"></a></td>
          </tr>

          <tr>
            <td>10</td>
            <td>Chief Executive Officer</td>
            <td>Order (SRA Vs. Ms. Neumec Estate Developers LLP)</td>
            <td>SRA/CEO/13(2)/Sant Dnyaneshwar Mauli CHS-1/13/2024</td>
            <td>20/08/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/orders/Order_(SRA_Vs__Ms__Neumec_Estate_Developers_LLP)__1.pdf" target="_blank" title="Order (SRA Vs. Ms. Neumec Estate Developers LLP)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Ms. Neumec Estate Developers LLP)" title="Order (SRA Vs. Ms. Neumec Estate Developers LLP)"></a></td>
          </tr>

          <tr>
            <td>11</td>
            <td>Chief Executive Officer</td>
            <td>Order (SRA Ms. Nexstep Consultant)</td>
            <td>MMR,SRA/CEO Order/3C (1)/Ajinkya Maharashtra CHS/5</td>
            <td>20/08/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/orders/Order_(SRA_Ms__Nexstep_Consultant).pdf" target="_blank" title="Order (SRA Ms. Nexstep Consultant)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Ms. Nexstep Consultant)" title="Order (SRA Ms. Nexstep Consultant)"></a></td>
          </tr>

          <tr>
            <td>12</td>
            <td>Chief Executive Officer</td>
            <td>Order (SRA Vs. Ms. Shree Shrinath Developer)</td>
            <td>SRA/CEO/13(2)/Prayag SRA CHS Ltd/10/2024</td>
            <td>16/08/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/orders/Order_(SRA_Vs__Ms__Shree_Shrinath_Developer).pdf" target="_blank" title="Order (SRA Vs. Ms. Shree Shrinath Developer)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Ms. Shree Shrinath Developer)" title="Order (SRA Vs. Ms. Shree Shrinath Developer)"></a></td>
          </tr>

          <tr>
            <td>13</td>
            <td>Engineering Department</td>
            <td>Order (SRA Vs. Ms. Kashish Park Realty)</td>
            <td>SRA/ENG/1611/N/STGL/LOI</td>
            <td>16/08/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/orders/Order_(SRA_Vs__Ms__Kashish_Park_Realty).pdf" target="_blank" title="Order (SRA Vs. Ms. Kashish Park Realty)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Ms. Kashish Park Realty)" title="Order (SRA Vs. Ms. Kashish Park Realty)"></a></td>
          </tr>

          <tr>
            <td>14</td>
            <td>Chief Executive Officer</td>
            <td>Order (SRA Vs. Ms. Anudan Properties Pvt. Ltd.)</td>
            <td>MMR SRA/CEO Order/13(2)/Rajmudra CHS Ltd./515/2024</td>
            <td>13/08/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/orders/Order_(SRA_Vs__Ms__Anudan_Properties_Pvt__Ltd_)_1.pdf" target="_blank" title="Order (SRA Vs. Ms. Anudan Properties Pvt. Ltd.)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Ms. Anudan Properties Pvt. Ltd.)" title="Order (SRA Vs. Ms. Anudan Properties Pvt. Ltd.)"></a></td>
          </tr>

          <tr>
            <td>15</td>
            <td>Engineering Department</td>
            <td>Order (SRA Vs. Estate of Late Suddadevi Sitaram Garodia)</td>
            <td>SRA/END/OW/2024/42923</td>
            <td>12/08/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/orders/Order_(SRA_Vs__Estate_of_Late_Suddadevi_Sitaram_Garodia)_1.pdf" target="_blank" title="Order (SRA Vs. Estate of Late Suddadevi Sitaram Garodia)" class="table_view"><img src="https://sra.gov.in/assets/themes/images/pdfIcon.png" alt="Order (SRA Vs. Estate of Late Suddadevi Sitaram Garodia)" title="Order (SRA Vs. Estate of Late Suddadevi Sitaram Garodia)"></a></td>
          </tr>



          <tr>
          </tr>
        </tbody>
      </table>


    </div>
    </div>


    </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul class="pagination"><li class="active"><a href="#">1</a></li><li><a href="https://sra.gov.in/ordersm/index/15" data-ci-pagination-page="2">2</a></li><li><a href="https://sra.gov.in/ordersm/index/30" data-ci-pagination-page="3">3</a></li><li><a href="https://sra.gov.in/ordersm/index/45" data-ci-pagination-page="4">4</a></li><li><a href="https://sra.gov.in/ordersm/index/60" data-ci-pagination-page="5">5</a></li><li><a href="https://sra.gov.in/ordersm/index/75" data-ci-pagination-page="6">6</a></li><li><a href="https://sra.gov.in/ordersm/index/90" data-ci-pagination-page="7">7</a></li><li><a href="https://sra.gov.in/ordersm/index/105" data-ci-pagination-page="8">8</a></li><li><a href="https://sra.gov.in/ordersm/index/120" data-ci-pagination-page="9">9</a></li><li><a href="https://sra.gov.in/ordersm/index/135" data-ci-pagination-page="10">10</a></li><li><a href="https://sra.gov.in/ordersm/index/150" data-ci-pagination-page="11">11</a></li><li><a href="https://sra.gov.in/ordersm/index/165" data-ci-pagination-page="12">12</a></li><li><a href="https://sra.gov.in/ordersm/index/180" data-ci-pagination-page="13">13</a></li><li><a href="https://sra.gov.in/ordersm/index/195" data-ci-pagination-page="14">14</a></li><li><a href="https://sra.gov.in/ordersm/index/210" data-ci-pagination-page="15">15</a></li><li><a href="https://sra.gov.in/ordersm/index/225" data-ci-pagination-page="16">16</a></li><li><a href="https://sra.gov.in/ordersm/index/240" data-ci-pagination-page="17">17</a></li><li><a href="https://sra.gov.in/ordersm/index/255" data-ci-pagination-page="18">18</a></li><li><a href="https://sra.gov.in/ordersm/index/270" data-ci-pagination-page="19">19</a></li><li><a href="https://sra.gov.in/ordersm/index/285" data-ci-pagination-page="20">20</a></li><li><a href="https://sra.gov.in/ordersm/index/300" data-ci-pagination-page="21">21</a></li><li><a href="https://sra.gov.in/ordersm/index/315" data-ci-pagination-page="22">22</a></li><li><a href="https://sra.gov.in/ordersm/index/330" data-ci-pagination-page="23">23</a></li><li><a href="https://sra.gov.in/ordersm/index/15" data-ci-pagination-page="2" rel="next">»</a></li></ul>        </div>
        </div>

    </div>

    </div>
    </div>
    </section>


@endsection
