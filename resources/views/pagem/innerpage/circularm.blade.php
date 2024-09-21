@extends('layouts.app')

@section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)')

@section('content')
<section>
    <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="https://sra.gov.in/marathi">मुख्यपृष्ठ</a></li>
      <li class="breadcrumb-item active">नवीनतम परिपत्रके</li>
      <li class="pull-right"><a href=""><i class="fa fa-print"></i></a></li>
    </ol>
    </div>
    </section>
    <div class="cleafix"></div>



    <section class="content_sec">
    <div class="container">
    <div class="row">

    <div class="col-md-12 col-xs-12">
    <div class="content-div">
    <h3 class="page_heading">नवीनतम परिपत्रके</h3>
    <form style="display:none;">
    <div class="circular_form">
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
                <label for="circular_name">Keywords:</label>
                <input type="circular_name" class="form-control" id="circular_name">
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
    <span>एकूण नोंदी:</span><span>110</span>
    </div>
    <div class="go_page" style="display:none;">
    <span>पृष्ठ क्र.:</span><span><input type="text" name=""></span> <span>/6614</span><span><button class="btn" type="button">Go</button></span>
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
            <th valign="top" class="col-xs-2">परिपत्रक क्रमांक</th>
            <th class="col-xs-1">परिपत्रक दिनांक</th>
            <!-- <th class="col-xs-1">File Size (KB)</th> -->
            <th class="col-xs-1">फाइल डाउनलोड करा</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>1</td>
            <td>Deputy Collector Department</td>
            <td>CIRCULAR</td>
            <td>SRA/Dyce/Ow/205/2022</td>
            <td>29/07/2022</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/CIRCULAR.pdf" target="_blank" title="CIRCULAR" class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="CIRCULAR" title="CIRCULAR"></a></td>
          </tr>

          <tr>
            <td>2</td>
            <td>Information Technology Department</td>
            <td>झोपडपट्टी पुनर्वसन प्राधिकरण अंतर्गत योजनेतील पात्र सभासदाच्या प्रथम झोपडी तोडल्याप्रमाणे जेष्ठता यादी सादर करणेबाबत.</td>
            <td>SRA/Admin/Desk-1/Teble-2/204/2022</td>
            <td>09/06/2022</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/" target="_blank" title="झोपडपट्टी पुनर्वसन प्राधिकरण अंतर्गत योजनेतील पात्र सभासदाच्या प्रथम झोपडी तोडल्याप्रमाणे जेष्ठता यादी सादर करणेबाबत." class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="झोपडपट्टी पुनर्वसन प्राधिकरण अंतर्गत योजनेतील पात्र सभासदाच्या प्रथम झोपडी तोडल्याप्रमाणे जेष्ठता यादी सादर करणेबाबत." title="झोपडपट्टी पुनर्वसन प्राधिकरण अंतर्गत योजनेतील पात्र सभासदाच्या प्रथम झोपडी तोडल्याप्रमाणे जेष्ठता यादी सादर करणेबाबत."></a></td>
          </tr>

          <tr>
            <td>3</td>
            <td>Administrative Department</td>
            <td>परिपत्रक क्र. 41</td>
            <td>MMR,SRA/Cirular/44/2024</td>
            <td>16/02/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/परिपत्रक_क्र__411.pdf" target="_blank" title="परिपत्रक क्र. 41" class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="परिपत्रक क्र. 41" title="परिपत्रक क्र. 41"></a></td>
          </tr>

          <tr>
            <td>4</td>
            <td>Administrative Department</td>
            <td>परिपत्रक क्र.- 40  मुंबई महानगर प्रदेश झोपडपट्टी पुनर्वसन प्राधिकरण, MMR SRA.</td>
            <td>MMR,SRA/Circular/43/2023</td>
            <td>20/09/2023</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/परिपत्रक_क्र_-_40_मुंबई_महानगर_प्रदेश_झोपडपट्टी_पुनर्वसन_प्राधिकरण,_SRA_MMR_1.pdf" target="_blank" title="परिपत्रक क्र.- 40  मुंबई महानगर प्रदेश झोपडपट्टी पुनर्वसन प्राधिकरण, MMR SRA." class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="परिपत्रक क्र.- 40  मुंबई महानगर प्रदेश झोपडपट्टी पुनर्वसन प्राधिकरण, MMR SRA." title="परिपत्रक क्र.- 40  मुंबई महानगर प्रदेश झोपडपट्टी पुनर्वसन प्राधिकरण, MMR SRA."></a></td>
          </tr>

          <tr>
            <td>5</td>
            <td>Chief Executive Officer</td>
            <td>CIRCULAR NO. 37</td>
            <td>MMR,SRA/Circular/40/2022</td>
            <td>28/12/2022</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/CIRCULAR_NO__37.pdf" target="_blank" title="CIRCULAR NO. 37" class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="CIRCULAR NO. 37" title="CIRCULAR NO. 37"></a></td>
          </tr>

          <tr>
            <td>6</td>
            <td>Chief Executive Officer</td>
            <td>CIRCULAR NO. 35A</td>
            <td>MMR,SRA/Circular/39/2022</td>
            <td>28/12/2022</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/CIRCULAR_NO__35A.pdf" target="_blank" title="CIRCULAR NO. 35A" class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="CIRCULAR NO. 35A" title="CIRCULAR NO. 35A"></a></td>
          </tr>

          <tr>
            <td>7</td>
            <td>CTSO Department</td>
            <td>CIRCULAR No. 39, Thane MMR.</td>
            <td>MMR,SRA/Circular-42/2023</td>
            <td>25/08/2023</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/CIRCULAR_No__39,_Thane_MMR_.pdf" target="_blank" title="CIRCULAR No. 39, Thane MMR." class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="CIRCULAR No. 39, Thane MMR." title="CIRCULAR No. 39, Thane MMR."></a></td>
          </tr>

          <tr>
            <td>8</td>
            <td>Finance Department</td>
            <td>विकासकाकडून अनामत स्वरुपात बँक हमीपत्र/सयुक्त मुदत ठेव/पे ऑर्डर/डिमांड ड्राफट/NEFT/RTGS प्राप्त करुन घेण्याबाबत.</td>
            <td>221</td>
            <td>18/07/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/परिपत्रक_क्र__2214.pdf" target="_blank" title="विकासकाकडून अनामत स्वरुपात बँक हमीपत्र/सयुक्त मुदत ठेव/पे ऑर्डर/डिमांड ड्राफट/NEFT/RTGS प्राप्त करुन घेण्याबाबत." class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="विकासकाकडून अनामत स्वरुपात बँक हमीपत्र/सयुक्त मुदत ठेव/पे ऑर्डर/डिमांड ड्राफट/NEFT/RTGS प्राप्त करुन घेण्याबाबत." title="विकासकाकडून अनामत स्वरुपात बँक हमीपत्र/सयुक्त मुदत ठेव/पे ऑर्डर/डिमांड ड्राफट/NEFT/RTGS प्राप्त करुन घेण्याबाबत."></a></td>
          </tr>

          <tr>
            <td>9</td>
            <td>Finance Department</td>
            <td>विकासकाकडून अनामत स्वरुपात बँक हमीपत्र/सयुक्त मुदत ठेव/पे ऑर्डर/डिमांड ड्राफट/NEFT/RTGS प्राप्त करुन घेण्याबाबत.</td>
            <td>221</td>
            <td>18/07/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/परिपत्रक_क्र__2215.pdf" target="_blank" title="विकासकाकडून अनामत स्वरुपात बँक हमीपत्र/सयुक्त मुदत ठेव/पे ऑर्डर/डिमांड ड्राफट/NEFT/RTGS प्राप्त करुन घेण्याबाबत." class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="विकासकाकडून अनामत स्वरुपात बँक हमीपत्र/सयुक्त मुदत ठेव/पे ऑर्डर/डिमांड ड्राफट/NEFT/RTGS प्राप्त करुन घेण्याबाबत." title="विकासकाकडून अनामत स्वरुपात बँक हमीपत्र/सयुक्त मुदत ठेव/पे ऑर्डर/डिमांड ड्राफट/NEFT/RTGS प्राप्त करुन घेण्याबाबत."></a></td>
          </tr>

          <tr>
            <td>10</td>
            <td>Finance Department</td>
            <td>शासनास व इतर नियोजन प्राधिकरणास भरणा करण्यात यावायाच्या विविध अधिमूल्यामध्ये हप्त्याची सवलत मिळणेबाबत.</td>
            <td>220</td>
            <td>02/07/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/परिपत्रक_क्र__220_1.pdf" target="_blank" title="शासनास व इतर नियोजन प्राधिकरणास भरणा करण्यात यावायाच्या विविध अधिमूल्यामध्ये हप्त्याची सवलत मिळणेबाबत." class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="शासनास व इतर नियोजन प्राधिकरणास भरणा करण्यात यावायाच्या विविध अधिमूल्यामध्ये हप्त्याची सवलत मिळणेबाबत." title="शासनास व इतर नियोजन प्राधिकरणास भरणा करण्यात यावायाच्या विविध अधिमूल्यामध्ये हप्त्याची सवलत मिळणेबाबत."></a></td>
          </tr>

          <tr>
            <td>11</td>
            <td>Finance Department</td>
            <td>शासनास व इतर नियोजन प्राधिकरणास भरणा करण्यात यावायाच्या विविध अधिमूल्यामध्ये हप्त्याची सवलत मिळणेबाबत.</td>
            <td>220</td>
            <td>02/07/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/परिपत्रक_क्र__220_2.pdf" target="_blank" title="शासनास व इतर नियोजन प्राधिकरणास भरणा करण्यात यावायाच्या विविध अधिमूल्यामध्ये हप्त्याची सवलत मिळणेबाबत." class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="शासनास व इतर नियोजन प्राधिकरणास भरणा करण्यात यावायाच्या विविध अधिमूल्यामध्ये हप्त्याची सवलत मिळणेबाबत." title="शासनास व इतर नियोजन प्राधिकरणास भरणा करण्यात यावायाच्या विविध अधिमूल्यामध्ये हप्त्याची सवलत मिळणेबाबत."></a></td>
          </tr>

          <tr>
            <td>12</td>
            <td>Administrative Department</td>
            <td>Taining to ther members of Society through appropriate Licensed professional for ensuring life safety measures of structural, Electrical,</td>
            <td>219</td>
            <td>25/04/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/Cirular_No__219_.pdf" target="_blank" title="Taining to ther members of Society through appropriate Licensed professional for ensuring life safety measures of structural, Electrical," class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="Taining to ther members of Society through appropriate Licensed professional for ensuring life safety measures of structural, Electrical," title="Taining to ther members of Society through appropriate Licensed professional for ensuring life safety measures of structural, Electrical,"></a></td>
          </tr>

          <tr>
            <td>13</td>
            <td>Administrative Department</td>
            <td>Taining to ther members of Society through appropriate Licensed professional for ensuring life safety measures of structural, Electrical,</td>
            <td>219</td>
            <td>25/04/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/Cirular_No__219_1.pdf" target="_blank" title="Taining to ther members of Society through appropriate Licensed professional for ensuring life safety measures of structural, Electrical," class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="Taining to ther members of Society through appropriate Licensed professional for ensuring life safety measures of structural, Electrical," title="Taining to ther members of Society through appropriate Licensed professional for ensuring life safety measures of structural, Electrical,"></a></td>
          </tr>

          <tr>
            <td>14</td>
            <td>Administrative Department</td>
            <td>All the Competent Authorities are hereby directed to generate Annexure-II Only by Using Auto Annexure-II Application.</td>
            <td>217</td>
            <td>12/02/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/Circular_No__2173.pdf" target="_blank" title="All the Competent Authorities are hereby directed to generate Annexure-II Only by Using Auto Annexure-II Application." class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="All the Competent Authorities are hereby directed to generate Annexure-II Only by Using Auto Annexure-II Application." title="All the Competent Authorities are hereby directed to generate Annexure-II Only by Using Auto Annexure-II Application."></a></td>
          </tr>

          <tr>
            <td>15</td>
            <td>Engineering Department</td>
            <td>Defect Liability Period For Rehabilitation Buildings in all SR Schemes.</td>
            <td>216</td>
            <td>21/02/2024</td>
            <!-- <td>File</td> -->
            <td><a href="https://sra.gov.in/upload/circular/Circular_No__2162.pdf" target="_blank" title="Defect Liability Period For Rehabilitation Buildings in all SR Schemes." class="table_view"><img src="https://sra.gov.in//assets/themes/images/pdfIcon.png" alt="Defect Liability Period For Rehabilitation Buildings in all SR Schemes." title="Defect Liability Period For Rehabilitation Buildings in all SR Schemes."></a></td>
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
                <ul class="pagination"><li class="active"><a href="#">1</a></li><li><a href="https://sra.gov.in/circularm/index/15" data-ci-pagination-page="2">2</a></li><li><a href="https://sra.gov.in/circularm/index/30" data-ci-pagination-page="3">3</a></li><li><a href="https://sra.gov.in/circularm/index/45" data-ci-pagination-page="4">4</a></li><li><a href="https://sra.gov.in/circularm/index/60" data-ci-pagination-page="5">5</a></li><li><a href="https://sra.gov.in/circularm/index/75" data-ci-pagination-page="6">6</a></li><li><a href="https://sra.gov.in/circularm/index/90" data-ci-pagination-page="7">7</a></li><li><a href="https://sra.gov.in/circularm/index/105" data-ci-pagination-page="8">8</a></li><li><a href="https://sra.gov.in/circularm/index/15" data-ci-pagination-page="2" rel="next">»</a></li></ul>        </div>
        </div>

    </div>

    </div>
    </div>
    </section>



@endsection
