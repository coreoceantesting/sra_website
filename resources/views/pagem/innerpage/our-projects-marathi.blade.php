@extends('layouts.app')

@section('title', ' झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)')

@section('content')


<section>

<div class="container">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">मुख्यपृष्ठ</a></li>
    <li class="breadcrumb-item active">आमचे प्रकल्प</li>
    <li class="breadcrumb-item active">आमचे प्रकल्प</li>
  <li class="pull-right"><a href="" onClick="window.print()"><i class="fa fa-print"></i></a></li>
</ol>
</div>
</section>
<section class="content_sec">
<div class="container">
<div class="row">
<div class="col-md-3 col-xs-12">
	<div class="left_menu">

<h3>आमचे प्रकल्प</h3>
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
<h3 class="page_heading">आमचे प्रकल्प</h3>
<h3 style="text-align: center;">यादीनुसार आमचे प्रकल्</h3>
<h3>एकूण नोंदी: 1481</h3>
<div style="overflow: scroll; height: 600px;">
<table class="table" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="64">S R NO</td>
<td width="88">Ward</td>
<td width="221">Scheme <br /> Name</td>
<td width="81">Scheme<br />  Type</td>
<td width="289">Architect<br />  Firm Name</td>
<td width="289">Developer <br /> Firm Name</td>
<td width="124">LOI<br />  Date </td>
<td width="109">Land<br />  Type</td>
<td width="92">No of Slum Dwellers</td>
<td width="92">No. of PAP's</td>
<td width="92">No. of Provisional PAP's</td>
<td width="92">No. of PTC's</td>
<td width="92">Status of PAP whether PAP's is constructed or not</td>
<td width="92">Whether OCC is granted or not</td>
<td width="92">Whether PAP's is handed over to SRA or not</td>
<td width="92">In possession of SRA </td>
<td width="92">Handed over to MCGM </td>
<td width="92">Hand over to MMRDA</td>
<td width="92">Handover to MMRCL / SPPL</td>
<td width="92">Allotment to Eligible Slum dwellers</td>
</tr>
<tr>
<td width="64">1</td>
<td width="88">N</td>
<td width="221">Shivsrujan CHS. Somaiya Trust.  </td>
<td width="81">33-10</td>
<td width="289">V. B. PARAB</td>
<td width="289">K. J. SOMAIYA TRUST</td>
<td width="124">10-09-90</td>
<td width="109">PVT</td>
<td width="92">172</td>
<td width="92">0</td>
<td width="92">19</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">2</td>
<td>T</td>
<td width="221">Shri Ganesh CHS</td>
<td>33-10</td>
<td width="289">Nexstep Arch. Consultants</td>
<td width="289">M/s. Sai swami Developers</td>
<td>16-02-91</td>
<td>STGOVT</td>
<td>73</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">3</td>
<td width="88">FN</td>
<td width="221">Sai Visawa CHS Ltd.</td>
<td width="81">33-10</td>
<td width="289">Shri. Suyog Sheth</td>
<td style="font-weight: 400;" width="289">M/s. Royal Developers</td>
<td width="124">20-07-93</td>
<td width="109">MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">4</td>
<td width="88">FN</td>
<td width="221">Sion Shivaji Nagar CHS Ltd.</td>
<td width="81">33-10</td>
<td width="289">Miti Designer  Planners</td>
<td style="font-weight: 400;" width="289">M/s. Royal Developers</td>
<td width="124">20-07-93</td>
<td width="109">MCGM</td>
<td width="92">0</td>
<td width="92">1</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">1</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">5</td>
<td width="88">MW</td>
<td width="221">Hanuman Mandir CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. S.V. Thakkar & Associates</td>
<td width="289">M/s. Chrisma Builder</td>
<td width="124">31-07-93</td>
<td width="109">Private</td>
<td width="92">52</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">6</td>
<td width="88">RS</td>
<td width="221">Natverlal  Ganatra CHS</td>
<td width="81">33-10</td>
<td width="289">M/S. B.S.BAROT ARCHITECTS  ENGINEER</td>
<td width="289">S. R. KARNIK</td>
<td width="124">21-03-94</td>
<td width="109">Private</td>
<td width="92">134</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">7</td>
<td width="88">PS</td>
<td width="221">Bhagatsingh Nagar Rahivasi Sangh.( Devi Kanya Kumari SRA Co-op. Hsg. Soc Ltd.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Vijay N Goradia</td>
<td width="289">M/s. Kalindi Estate Developers</td>
<td width="124">31-03-94</td>
<td width="109">Private</td>
<td>383</td>
<td>220</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td width="92">no</td>
<td width="92">no</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">8</td>
<td width="88">KE</td>
<td width="221">Hari Nagar-Shivaji Nagar CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Citygold Management Services Pvt. Ltd</td>
<td style="font-weight: 400;" width="289">M/s. Akruti Nirman Ltd.</td>
<td>13-04-94</td>
<td>MCGM</td>
<td>974</td>
<td>0</td>
<td width="92">538</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">9</td>
<td width="88">RS</td>
<td width="221">CHALIS KHOLI CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sanjay B. Shah</td>
<td width="289">Panorama Constructions</td>
<td width="124">10-05-94</td>
<td width="109">Private</td>
<td width="92">40</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">10</td>
<td width="88">KW</td>
<td width="221">Andheri Kamgar Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Grit Architecutral Consultancy Pvt. Ltd</td>
<td style="font-weight: 400;" width="289">Bombay Slum Redevelopment Corporation Ltd</td>
<td width="124">04-08-94</td>
<td width="109">MHADA</td>
<td>243</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">11</td>
<td width="88">FN</td>
<td width="221">Indira Nagar CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td style="font-weight: 400;" width="289">M/s. Hare Krishna Builders</td>
<td width="124">07-10-94</td>
<td width="109">MCGM</td>
<td width="92">738</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">12</td>
<td width="88">KE</td>
<td width="221">Pragati Seva Sangh CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">Housing Development  Imp. India Pvt. Ltd. HDIL</td>
<td>28-10-94</td>
<td>Private</td>
<td>67</td>
<td>32</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">13</td>
<td width="88">GS</td>
<td width="221">Adarsha Nagar, Ekta Samata Janata CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Rajendra pagnis</td>
<td style="font-weight: 400;" width="289">M/s. Darshan Construction</td>
<td width="124">07-11-94</td>
<td width="109">MCGM</td>
<td width="92">429</td>
<td width="92">88</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">88</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">14</td>
<td width="88">HE</td>
<td width="221">Vishwakrma Apt. SRA CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. P.V. Shethgiri</td>
<td width="289">M/s. Atharva Builders</td>
<td width="124">07-11-94</td>
<td width="109">PVT</td>
<td width="92">22</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">15</td>
<td>S</td>
<td width="221">SHALI Chs</td>
<td>33-10</td>
<td width="289">Shri Sanjay Ayre</td>
<td width="289">M/s Beacon constructions</td>
<td>08-11-94</td>
<td width="109">Private</td>
<td>61</td>
<td>7</td>
<td>0</td>
<td>0</td>
<td width="92">Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>0</td>
<td>7</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">16</td>
<td>S</td>
<td width="221">Happy Home CHSL</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Arch-V-Shan Creations</td>
<td width="289">M/s. Akruti Builders</td>
<td>10-12-94</td>
<td width="109">Private</td>
<td>48</td>
<td>6</td>
<td>0</td>
<td>0</td>
<td width="92">Yes</td>
<td>YES</td>
<td>YES</td>
<td width="92">0</td>
<td>6</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">17</td>
<td width="88">FN</td>
<td width="221">Ram Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.John R Dantas</td>
<td style="font-weight: 400;" width="289">M/s. New look Constructions</td>
<td width="124">02-01-95</td>
<td width="109">MCGM</td>
<td width="92">413</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">18</td>
<td width="88">RC</td>
<td width="221">Devraj Kama</td>
<td width="81">33 (10)</td>
<td style="font-weight: 400;" width="289">Shri. BHUPENDRA PATRAWALA</td>
<td style="font-weight: 400;" width="289">M/s. WESTERN DEVELOPMENT CORPORATION Smt. P.D.Reb</td>
<td width="124">13-01-95</td>
<td width="109">Pvt.</td>
<td width="92">40</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">19</td>
<td width="88">KE</td>
<td width="221">Saiwadi C.H.S.</td>
<td>33-10</td>
<td width="289">M/s. City Gold Management Services P. Ltd</td>
<td width="289">M/s. Akruti Nirman Ltd.</td>
<td>26-04-95</td>
<td>MHADA</td>
<td>2140</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">20</td>
<td width="88">GS</td>
<td width="221">Bhakti Sagar Apartment (SRA) CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. A. N. Gersappa</td>
<td width="289">M/s. Navshakti Combined.</td>
<td width="124">12-05-95</td>
<td width="109">MCGM</td>
<td width="92">32</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">21</td>
<td width="88">RC</td>
<td width="221">Rajendra kunj SRA CHS</td>
<td width="81">33 (10)</td>
<td width="289">Shri. Avinash Kurian of<br /> M/s. Studio Essemble</td>
<td width="289">M/s. Truly Creative Developer <br /> <br /> <br />  Co-Developer<br /> M/s. Western Hebitate</td>
<td width="124">12-05-95</td>
<td width="109">Pvt.</td>
<td width="92">142</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">22</td>
<td width="88">HE</td>
<td width="221">Krishnadeep SRA CHS LTD</td>
<td width="81">33-10</td>
<td width="289">Shri.Suresh Krishnan</td>
<td width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">13-05-95</td>
<td width="109">PVT</td>
<td width="92">18</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">23</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Neelkamal CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mahale  &  Associates</td>
<td width="289">M/s Moongipa Developments  Infrastructure ltd</td>
<td>03-07-95</td>
<td width="109">MCGM</td>
<td width="92">113</td>
<td width="92">0</td>
<td width="92">13</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">24</td>
<td>FS</td>
<td width="221">Raza CHS Ltd</td>
<td>33-10</td>
<td width="289">Shri. Asrar Ahmed Jatoo of <br /> M/s. Con Arch Consultants</td>
<td width="289">M/s. Arch Construction<br /> C.A to Raza CHS Ltd.</td>
<td>04-07-95</td>
<td>MCGM</td>
<td width="92">85</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">work in progress</td>
<td width="92">Part OC granted</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">25</td>
<td width="88">GS</td>
<td width="221">Parel Shivneri CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td width="124">07-09-95</td>
<td width="109">MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">26</td>
<td width="88">GS</td>
<td width="221">Jari Mari Darshan CHS</td>
<td width="81">33-10</td>
<td width="289">Mr. Mehardad Dastur</td>
<td style="font-weight: 400;" width="289">M/s. Innovative Construction Pvt. Ltd.</td>
<td width="124">30-09-95</td>
<td width="109">MCGM</td>
<td width="92">125</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">27</td>
<td width="88">KE</td>
<td width="221">Khan Shamsuddin Chawl/ Sadbhavana Sra CHS.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah</td>
<td width="289">M/s Combine construction creators.</td>
<td>30-09-95</td>
<td>Private</td>
<td>106</td>
<td>13</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">28</td>
<td width="88">GS</td>
<td width="221">Parel Shiv Sandesh CHS,  </td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Atharva Consultants</td>
<td style="font-weight: 400;" width="289">Reliance Comstruction Company</td>
<td width="124">10-10-95</td>
<td width="109">MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">29</td>
<td>FS</td>
<td width="221">Khaprideo CHS Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td>08-11-95</td>
<td>MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">30</td>
<td>RN</td>
<td width="221">SAIKRUPA NIKETAN CHAWL</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Vijay N Goradia</td>
<td width="289">LALJI PATEL & PYAR ALI MOHD</td>
<td>30-11-95</td>
<td>Private</td>
<td width="92">47</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">31</td>
<td width="88">KW</td>
<td width="221">SAI SHRADDHA CHS LTD.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">T.N. Hasan</td>
<td style="font-weight: 400;" width="289">HIRALAL C. SHAH</td>
<td width="124">13-12-95</td>
<td width="109">Private</td>
<td>94</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">32</td>
<td width="88">RS</td>
<td width="221">Arjun Niwas Chawl</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vijay N Goradia</td>
<td width="289">Shri. Bipin Shah C.A. to Owner.</td>
<td width="124">13-12-95</td>
<td width="109">Private,MMRDA</td>
<td width="92">43</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">33</td>
<td width="88">KE</td>
<td width="221">M/s. Sahar Classic SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Aakar Associates-Santacruz(W)</td>
<td width="289">M/s. M. I. Baluwala Builders</td>
<td>15-12-95</td>
<td>Private</td>
<td>24</td>
<td>16</td>
<td width="92">0</td>
<td width="92">0</td>
<td>NO</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">34</td>
<td width="88">GS</td>
<td width="221">Akansha SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Shri. M. G. Khanolkar</td>
<td width="289">M/s. Siddhivinayak Construction Pvt. Ltd</td>
<td width="124">13-01-96</td>
<td width="109">MCGM</td>
<td width="92">244</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">5</td>
</tr>
<tr>
<td width="64">35</td>
<td width="88">KW</td>
<td width="221">Andheri Shreeram Wadi CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Joshi  Associates</td>
<td style="font-weight: 400;" width="289">M/S Parag Enterprises (Shivshakti)</td>
<td width="124">13-01-96</td>
<td width="109">MHADA</td>
<td> </td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td width="64">36</td>
<td width="88">KW</td>
<td width="221">Beharambaug Patelwadi CHS</td>
<td width="81">33-10</td>
<td width="289">M/s.  Z. A. Khan  Associates</td>
<td width="289">M/S Monarch  Qureshi Builders</td>
<td width="124">01-02-96</td>
<td width="109">Private</td>
<td>1085</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">37</td>
<td>FS</td>
<td width="221">Ganeshwadi Utkarsh CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Ravi Raj Design Studio Pvt. Ltd.</td>
<td width="289">M/S Sai Ganesh Constructions</td>
<td>07-03-96</td>
<td>Private</td>
<td width="92">105</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">38</td>
<td width="88">KW</td>
<td width="221">Mahatarangan CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">M/s. Swati Developers</td>
<td width="124">14-03-96</td>
<td width="109">MCGM</td>
<td>55</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">39</td>
<td width="88">GS</td>
<td width="221">Satyavijay SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri. Sandip Sirsat</td>
<td style="font-weight: 400;" width="289">M/s B Brothers Builders</td>
<td width="124">21-03-96</td>
<td width="109">MCGM</td>
<td width="92">270</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">2</td>
</tr>
<tr>
<td width="64">40</td>
<td width="88">PS</td>
<td width="221">Moracha pada, Moracha pani, Janata Colony  (Royal Plam)</td>
<td>33-10</td>
<td width="289">M/s. Mistri Associates of Shri. S.V. Mistri</td>
<td width="289">M/s. Amir Park & Amusement Pvt Ltd.</td>
<td width="124">27-03-96</td>
<td width="109">Private</td>
<td>751</td>
<td>349</td>
<td>0</td>
<td>0</td>
<td>not constructed</td>
<td width="92">no</td>
<td width="92">no</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">41</td>
<td width="88">KW</td>
<td width="221">Mora Saibaba CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jaynat Vaidya of M/s. D. R. Vaidya & Co.</td>
<td width="289">Provincial Housing & Properties Ltd.</td>
<td width="124">11-05-96</td>
<td width="109">STGOVT</td>
<td>231</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">42</td>
<td width="88">PS</td>
<td width="221">Bhagat Singh Nagar CHS no. 1 </td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Nathala B. Developers</td>
<td width="289">Atul Enterprises</td>
<td width="124">18-05-96</td>
<td width="109">Private</td>
<td>603</td>
<td>150</td>
<td>0</td>
<td>0</td>
<td>not constructed</td>
<td width="92">No</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">43</td>
<td width="88">FN</td>
<td width="221">Shree Sunder Kamla Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Sanjiv Hate</td>
<td width="289">M/s. Poonam Developers.</td>
<td width="124">30-05-96</td>
<td width="109">MCGM</td>
<td width="92">225</td>
<td width="92">0</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">44</td>
<td>GN</td>
<td width="221">M.N. Koli CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td>01-06-96</td>
<td>MCGM</td>
<td width="92">364</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">45</td>
<td width="88">N</td>
<td width="221">HANUMAN NAGAR VIKAS MANDAL</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Joshi  Associates</td>
<td width="289">M/s. Lake View Developers</td>
<td width="124">08-06-96</td>
<td width="109">MHADA</td>
<td width="92">1639</td>
<td width="92">0</td>
<td width="92">1224</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">46</td>
<td width="88">GS</td>
<td width="221">Mayanagar-Achanaknagar SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Smt. Maya Vaidya</td>
<td style="font-weight: 400;" width="289">M/s. Akruti Nirman Ltd.</td>
<td width="124">13-06-96</td>
<td width="109">MCGM</td>
<td width="92">265</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">47</td>
<td width="88">GS</td>
<td width="221">Jari Mari CHS</td>
<td width="81">33-10</td>
<td width="289">Surendra. J. Raut & Asso</td>
<td style="font-weight: 400;" width="289">Super Constraction Co</td>
<td width="124">21-06-96</td>
<td width="109">MCGM</td>
<td width="92">103</td>
<td width="92">4</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">4</td>
</tr>
<tr>
<td width="64">48</td>
<td width="88">E</td>
<td width="221">Ashiyana Tenants CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">I.A. Parekh</td>
<td style="font-weight: 400;" width="289">M/S NAN Enterprises</td>
<td width="124">27-06-96</td>
<td width="109">MCGM</td>
<td width="92">242</td>
<td width="92">0</td>
<td width="92">12</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">49</td>
<td>HW</td>
<td width="221">Bangadiwala CHS.</td>
<td>33-10</td>
<td width="289">JATIN SHAH</td>
<td width="289">M/s. God Gift Developer</td>
<td>08-07-96</td>
<td>Private</td>
<td>21</td>
<td>5</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">50</td>
<td width="88">HE</td>
<td width="221">Parvati wadi Slum CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/S M.K. Rao  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Shree Krishna  Developers</td>
<td width="124">11-07-96</td>
<td width="109">PVT</td>
<td width="92">38</td>
<td width="92">2</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">51</td>
<td>RN</td>
<td width="221">ANAND NAGAR ZOPADPATTI</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">PRAVIN KANEKAR</td>
<td width="289">MANGILAL R. JAIN</td>
<td>16-07-96</td>
<td>Private</td>
<td width="92">63</td>
<td width="92">35</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">35</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">52</td>
<td width="88">KE</td>
<td width="221">Sagbaug Snehsagar CHS (Ltd)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Aakar Architects & consultants</td>
<td width="289">M/s. New Monarch Bldrs.  Cont.</td>
<td>05-08-96</td>
<td>MCGM</td>
<td>1157</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">53</td>
<td width="88">RC</td>
<td width="221">More Niwas<br /> (Om Saidham SRA CHS)</td>
<td width="81">33 (10)</td>
<td style="font-weight: 400;" width="289">Shri. Vijay Garodia</td>
<td width="289">M/s. Kadam Enterprises</td>
<td width="124">05-08-96</td>
<td width="109">Pvt</td>
<td width="92">55</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">54</td>
<td width="88">RC</td>
<td width="221">Sanjivani SRA CHS Ltd</td>
<td width="81">33 (10)</td>
<td style="font-weight: 400;" width="289">Shri. Vijay Garodia</td>
<td width="289">M/s. Vijay D. Shah</td>
<td width="124">05-08-96</td>
<td width="109">Pvt.</td>
<td width="92">37</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">55</td>
<td width="88">PN</td>
<td width="221">Bandongri village CHS (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">Aalamagri Ali Mohammed Malkani</td>
<td width="124">23-08-96</td>
<td width="109">Private</td>
<td width="92">642</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">56</td>
<td width="88">N</td>
<td width="221">Sagar Nagar CHS Federation.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Joshi  Associates</td>
<td width="289">M/s. Abhini Develoers Pvt. Ltd.</td>
<td width="124">23-09-96</td>
<td width="109">MCGM</td>
<td width="92">1990</td>
<td width="92">0</td>
<td width="92">98</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">57</td>
<td>L</td>
<td width="221">C.T.S.No. 358, 358/1-69, 359, 359/1-7 of Village Kurla Village of Nana Shetwadi CHS</td>
<td>33-10</td>
<td width="289">M/s. Prakash  Nalawade.</td>
<td width="289">M/s. M. I. Enterprises</td>
<td>30-09-96</td>
<td>Private</td>
<td width="92">91</td>
<td>19</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">58</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Azad Nagar janata Dharavi</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Purbi Architect SharadMahajan</td>
<td width="289">Maulesh Builders Pvt. Ltd.</td>
<td>07-10-96</td>
<td width="109">MCGM</td>
<td width="92">115</td>
<td width="92">0</td>
<td width="92">35</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">59</td>
<td width="88">KW</td>
<td width="221">Andheri Shiv Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Grit Architecutral Consultancy Pvt. Ltd</td>
<td width="289">M/s. Ruchita Constructions.</td>
<td width="124">19-10-96</td>
<td width="109">MHADA</td>
<td width="92">73</td>
<td width="92">73</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">60</td>
<td width="88">RS</td>
<td width="221">Shiv Shakti Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td style="font-weight: 400;" width="289">M/s. Manali Developers</td>
<td width="124">19-10-96</td>
<td width="109">MCGM</td>
<td width="92">1195</td>
<td width="92">107</td>
<td width="92">120</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">61</td>
<td width="88">KW</td>
<td width="221">Raigad Darshan CHS</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri. Sanjay B. Shah</td>
<td style="font-weight: 400;" width="289">Bombay Slum Redevelopment Corporation Ltd</td>
<td width="124">19-10-96</td>
<td width="109">MCGM</td>
<td width="92">25</td>
<td width="92">12</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">62</td>
<td width="88">N</td>
<td width="221">Ghatkopar Eagle Co op. Hsg. Soc. Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M.R. Shendye  Associates</td>
<td style="font-weight: 400;" width="289">M/s.  Savla Associates</td>
<td width="124">21-10-96</td>
<td width="109">MHADA</td>
<td width="92">54</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">63</td>
<td width="88">N</td>
<td width="221">Ghatkopar Rajawadi Garden Co op. Hsg. Soc. Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M.R. Shendye  Associates</td>
<td style="font-weight: 400;" width="289">M/s.  Savla Associates</td>
<td width="124">22-10-96</td>
<td width="109">MCGM</td>
<td width="92">109</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">64</td>
<td width="88">N</td>
<td width="221">Karma Kiran Coop. Hsg. Society Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M.R. Shendye  Associates</td>
<td style="font-weight: 400;" width="289">M/s.  Savla Associates</td>
<td width="124">22-10-96</td>
<td width="109">Private</td>
<td width="92">116</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">65</td>
<td width="88">KW</td>
<td width="221">Andheri New Kapaswadi Juhu Ekta CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vijay Garodia</td>
<td width="289">M/s. Mayurpankh Properties Pvt. Ltd.</td>
<td width="124">05-11-96</td>
<td width="109">MHADA</td>
<td width="92">179</td>
<td width="92"> </td>
<td width="92">8</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">66</td>
<td width="88">PS</td>
<td width="221">Sankalp Siddhi S.R.A. C.H.S. Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">M/s. M.A. Castle Infrastructure Co.</td>
<td width="124">17-12-96</td>
<td width="109">Private</td>
<td>216</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">67</td>
<td width="88">KW</td>
<td width="221">New Sangam Nagar CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Mayurpankh Properties Pvt. Ltd</td>
<td width="289">Shri. Vijay Goradia.</td>
<td width="124">19-12-96</td>
<td width="109">MHADA</td>
<td>235</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">68</td>
<td>FS</td>
<td width="221">Shraddha Rahivashi Sangh CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">SHRI. JADHAV  ASSOCIATES</td>
<td width="289">M/s. Arihant Realtors</td>
<td>20-12-96</td>
<td>MCGM</td>
<td width="92">104</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">partially Constructed </td>
<td width="92">no</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">69</td>
<td width="88">PS</td>
<td width="221">Dyndeep CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chandrashekhar</td>
<td width="289">PRARTHANA ENTERPRISES</td>
<td width="124">02-01-97</td>
<td width="109">MCGM</td>
<td>46</td>
<td>0</td>
<td>2</td>
<td>0</td>
<td>yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">70</td>
<td width="88">GS</td>
<td width="221">Parel Sahyadri CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td width="124">06-01-97</td>
<td width="109">MCGM</td>
<td width="92">769</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">71</td>
<td>T</td>
<td width="221">Rohidas Nagar Sai Shradda CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td style="font-weight: 400;" width="289">Bombay Slum Redevelopment Corporation Ltd</td>
<td>08-01-97</td>
<td>MHADA</td>
<td>865</td>
<td>58</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">72</td>
<td width="88">KW</td>
<td width="221">Amboli Hill Pramukh palace CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Kalpana Consultants</td>
<td width="289">Pramukh Enterprises</td>
<td width="124">17-01-97</td>
<td width="109">Private</td>
<td>250</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">73</td>
<td width="88">RS</td>
<td width="221">Vrajnidhi CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sanjay B. Shah</td>
<td width="289">Shri.M.R.Kutmutia. Sweta Developers Pvt. Ltd.</td>
<td width="124">17-01-97</td>
<td width="109">Private</td>
<td width="92">26</td>
<td width="92">27</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">partly</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">27</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">74</td>
<td width="88">RS</td>
<td width="221">Siddhivinayak CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sanjay B. Shah</td>
<td width="289">Shri.A.G.Thakkar</td>
<td width="124">17-01-97</td>
<td width="109">Private</td>
<td width="92">19</td>
<td width="92">26</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">16</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">75</td>
<td width="88">RS</td>
<td width="221">Mohitewadi CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sanjay B. Shah</td>
<td width="289">Shri. B.G.Mohite</td>
<td width="124">17-01-97</td>
<td width="109">Private</td>
<td width="92">177</td>
<td width="92">27</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">Yes</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">21</td>
</tr>
<tr>
<td width="64">76</td>
<td width="88">KW</td>
<td width="221">Chandrakiran CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. T.N. HASAN</td>
<td width="289">H.K.R. ENTERPRISES</td>
<td width="124">13-02-97</td>
<td width="109">Private</td>
<td width="92">24</td>
<td width="92"> </td>
<td width="92">8</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">77</td>
<td width="88">HE</td>
<td width="221">MIRINDA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Harish Gandhi</td>
<td width="289"> M/s. Ajib Investment</td>
<td width="124">27-02-97</td>
<td width="109">PVT</td>
<td width="92">72</td>
<td width="92">14</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">78</td>
<td width="88">GS</td>
<td width="221">Rajiv Nagar SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Citygold Management Services Pvt. Ltd</td>
<td width="289">M/s. Aarati Projects & Constructions</td>
<td width="124">03-03-97</td>
<td width="109">MCGM</td>
<td width="92">128</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">79</td>
<td>GN</td>
<td width="221">Shree Mangal Murti CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Joshi  Associates</td>
<td width="289">Siraj Developers</td>
<td>14-03-97</td>
<td>MCGM</td>
<td width="92">29</td>
<td width="92">0</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">80</td>
<td width="88">KW</td>
<td width="221">MILAP CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Shekar Arolkar  Asociates</td>
<td width="289">GRACE DEVELOPERS</td>
<td width="124">17-03-97</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td width="64">81</td>
<td width="88">E</td>
<td width="221">MAZGAON KOKANI CO-OP HOUSING SOCIETY LTD</td>
<td width="81">33-10</td>
<td width="289">M/S MINAR Architects & Consultants</td>
<td width="289">Sarvesh R. Singh</td>
<td width="124">07-04-97</td>
<td width="109">Private</td>
<td width="92">27</td>
<td width="92">0</td>
<td width="92">4</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">82</td>
<td width="88">N</td>
<td width="221">Datta Digamber co. op. Hsg. Society Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Tandel  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Neelyog Construction Pvt. Ltd</td>
<td width="124">30-04-97</td>
<td width="109">Private,MHADA,MCGM</td>
<td width="92">638</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">83</td>
<td width="88">GS</td>
<td width="221">Lady Ratan Housing Complex</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Samoon & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Lokhandwala Shelters India Pvt. Ltd</td>
<td width="124">03-05-97</td>
<td width="109">MCGM</td>
<td width="92">810</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">84</td>
<td width="88">KW</td>
<td width="221">AMBOLI JAGRUTI CHS LTD</td>
<td width="81">33-10</td>
<td width="289">M/s. K. R. LOTLIKAR</td>
<td style="font-weight: 400;" width="289">M/s. MILIND DEVELOPER</td>
<td width="124">03-05-97</td>
<td width="109">STGOVT</td>
<td width="92">11</td>
<td width="92">8</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">85</td>
<td width="88">KE</td>
<td width="221">Shankarwadi SRA C.H.S</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Citygold Management Services Pvt. Ltd</td>
<td width="289">M/s. Akruti Kailash Constructions</td>
<td>28-05-97</td>
<td>MCGM</td>
<td>320</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">86</td>
<td>GN</td>
<td width="221">Shree Gana Siddhivinayak CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. K.R. Rege  Associates</td>
<td style="font-weight: 400;" width="289">Gharandaj Developer</td>
<td>31-05-97</td>
<td>MCGM</td>
<td width="92">123</td>
<td width="92">39</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Partly</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">87</td>
<td width="88">ME</td>
<td width="221">Babu Seth Smruti CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. B.H. Wadhava  Co.</td>
<td width="289">M/s. A.P. Thakur Builder  Developers</td>
<td width="124">14-07-97</td>
<td width="109">Private</td>
<td width="92">61</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">88</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">JAI GANESH CHS DHARAVI </td>
<td width="81">33-10</td>
<td width="289">Sharad Mahajan of M/s Purbi Associates </td>
<td width="289">M/s S.M.Associates </td>
<td width="124">29-07-97</td>
<td width="109">MCGM</td>
<td width="92">134</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">89</td>
<td>GN</td>
<td width="221">Ankur Rahivashi Sangh CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">DIXIT  RISBUD ASSOCIATES</td>
<td style="font-weight: 400;" width="289">M/s. Skylark Build.</td>
<td>30-07-97</td>
<td>MCGM</td>
<td width="92">73</td>
<td width="92">4</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">90</td>
<td width="88">KE</td>
<td width="221">Apna Ghar SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. P.S. Chamankar & Associates</td>
<td width="289">Zoomi Construction</td>
<td>31-07-97</td>
<td>Private,STGOVT,MCGM</td>
<td>379</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">91</td>
<td width="88">KW</td>
<td width="221">Loknayak Nagar CHS. Ltd.& Other</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td style="font-weight: 400;" width="289">Bombay Slum Redevelopment Corporation Ltd</td>
<td width="124">01-08-97</td>
<td width="109">MHADA</td>
<td width="92">1018</td>
<td width="92">0</td>
<td width="92">137</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">92</td>
<td>L</td>
<td width="221">Fitwall Compound CHS Ltd</td>
<td>33-10</td>
<td width="289">M. H. Purandore  Associates</td>
<td width="289">Ismail  Ibrahim Fitwala</td>
<td>06-08-97</td>
<td>Private</td>
<td>50</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">93</td>
<td width="88">N</td>
<td width="221">Ghatkopar Laxman Nagar CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M.R. Shendye  Associates</td>
<td style="font-weight: 400;" width="289">M/s.  Savla Associates</td>
<td width="124">06-08-97</td>
<td width="109">MHADA</td>
<td width="92">124</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">94</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Khambdeo Nagar Vaibhavi CHS</td>
<td width="81">33-10</td>
<td width="289">Rajkumar Sharma</td>
<td style="font-weight: 400;" width="289">M/s. Akruti Nirman Ltd.</td>
<td>12-08-97</td>
<td width="109">MCGM</td>
<td width="92">107</td>
<td width="92">0</td>
<td width="92">20</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">95</td>
<td width="88">E</td>
<td width="221">PARK VIEW CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s  Mass Consultant</td>
<td width="289">M/s Parkview Developers</td>
<td width="124">21-08-97</td>
<td width="109">Private</td>
<td width="92">76</td>
<td width="92">55</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">96</td>
<td>S</td>
<td width="221">Omkar Tenants CHS Ltd</td>
<td>33-10</td>
<td width="289">M/s Sushma Deodhar</td>
<td width="289">Joshua Estate Developers pvt. Ltd</td>
<td>21-08-97</td>
<td width="109">Private</td>
<td>22</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">97</td>
<td width="88">PN</td>
<td width="221">Dhanjiwadi Chawls Group CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Tandel  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Neelyog Construction Pvt. Ltd</td>
<td width="124">25-08-97</td>
<td width="109">Private</td>
<td width="92">1532</td>
<td width="92">149</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">98</td>
<td width="88">KW</td>
<td width="221">Suresh Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td width="289">M/s. Mohit Construction Co.</td>
<td width="124">30-08-97</td>
<td width="109">STGOVT</td>
<td width="92">175</td>
<td width="92"> </td>
<td width="92">2</td>
<td>0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92"> </td>
</tr>
<tr>
<td width="64">99</td>
<td width="88">PN</td>
<td width="221">Unity Complex</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Rasik P. Hingoo Associates</td>
<td width="289">M/s. R.B. Shah  Co.</td>
<td width="124">11-09-97</td>
<td width="109">Private</td>
<td width="92">278</td>
<td width="92">26</td>
<td width="92">0</td>
<td width="92">18</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">100</td>
<td width="88">KW</td>
<td width="221">INFANT JESUS CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">T.N. Hasan</td>
<td style="font-weight: 400;" width="289">HIRALAL C. SHAH</td>
<td width="124">18-09-97</td>
<td width="109">Private</td>
<td>30</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">101</td>
<td width="88">N</td>
<td width="221">Jai Hanuman CHS (Kirol)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Joshi  Associates</td>
<td width="289">Anil M. Mehta</td>
<td width="124">22-10-97</td>
<td width="109">Private</td>
<td width="92">260</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">102</td>
<td width="88">HE</td>
<td width="221">MAITRICHHAYA SRA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">27-10-97</td>
<td width="109">PVT</td>
<td width="92">35</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">103</td>
<td width="88">ME</td>
<td width="221">Govandi Buddha Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri. Dilip Sanghvi Consultants.</td>
<td width="289">M/s. Jyoti Home Makers Pvt. Ltd.</td>
<td width="124">27-10-97</td>
<td width="109">MCGM</td>
<td width="92">431</td>
<td width="92">0</td>
<td width="92">26</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">104</td>
<td width="88">HE</td>
<td width="221">Riddhi Siddhi CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. BHUPENDRA PATRAWALA</td>
<td width="289">M/s. Earth Worth Constructions Pvt. Ltd</td>
<td width="124">29-10-97</td>
<td width="109">MHADA</td>
<td width="92">132</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">Yes </td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">15</td>
</tr>
<tr>
<td width="64">105</td>
<td width="88">GS</td>
<td width="221">Worli Siddhivinayak CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Ranjit Naik & Associates</td>
<td width="289">M/s. Chunilal Velji Patel & Co.</td>
<td width="124">06-11-97</td>
<td width="109">MCGM</td>
<td width="92">31</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">106</td>
<td width="88">KW</td>
<td width="221">Om Sai Darshan CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/S. Naresh T. Mehara  Ors</td>
<td width="124">07-11-97</td>
<td width="109">Private</td>
<td width="92">108</td>
<td width="92"> </td>
<td width="92">14</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">107</td>
<td width="88">KW</td>
<td width="221">Sindhudurg Darshan SRA CHS(Navjeet Nagar CHS)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Clifford D’silva Architect</td>
<td width="289">M/s. Pushpak Home Pvt. Ltd</td>
<td width="124">07-11-97</td>
<td width="109">STGOVT</td>
<td width="92"> </td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">11</td>
</tr>
<tr>
<td width="64">108</td>
<td width="88">RC</td>
<td width="221">Nityanand Vardhman CHS Ltd.</td>
<td width="81">33 (10)</td>
<td width="289">M/s Vivek Bhole Architects Pvt. Ltd.</td>
<td width="289">M/s. Nityanand Builders & Developer</td>
<td width="124">08-11-97</td>
<td width="109">Gov</td>
<td width="92">11</td>
<td width="92">90</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">109</td>
<td width="88">FN</td>
<td width="221">Sainath Seva CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri. Suresh Mhatre</td>
<td width="289">M/s. A. J. Developers</td>
<td width="124">18-11-97</td>
<td width="109">MCGM</td>
<td width="92">52</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">110</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">TAJ SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M.R. Shendye  Associates</td>
<td style="font-weight: 400;" width="289">M/s. N.K. Construction Works</td>
<td>01-01-98</td>
<td width="109">MCGM</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">111</td>
<td width="88">GS</td>
<td width="221">Subhedar Ramaji Ambedkar Nagar CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chandrashekhar Architect</td>
<td width="289">Sattadhar Constructions Pvt. Ltd.</td>
<td width="124">06-01-98</td>
<td width="109">STGOVT</td>
<td width="92">363</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">112</td>
<td>L</td>
<td width="221">SAINATH WADI CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Prabhakar Satham  Associates</td>
<td width="289">M/s. Satguru developers</td>
<td>07-01-98</td>
<td>Private</td>
<td>32</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">113</td>
<td width="88">GS</td>
<td width="221">Vishwakamal CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Varde Paralkar & Associates</td>
<td width="289">M/s. Santosh Enterprises</td>
<td width="124">09-01-98</td>
<td width="109">Private</td>
<td width="92">117</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">114</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Subhash Nagar CHS</td>
<td width="81">33-10</td>
<td width="289">Shri Shanta prasad P. Kshetramade.<br /> M/s Sankalp Associates.</td>
<td width="289">Mr. M.K.Raibage of M/s .Sai Pushpa Construction. </td>
<td>31-01-98</td>
<td width="109">MCGM</td>
<td width="92">276</td>
<td width="92">0</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">115</td>
<td width="88">KE</td>
<td width="221">Vileparle Shivshakti  SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Smt. Maya Vaidya</td>
<td style="font-weight: 400;" width="289">M/s. Akruti Nirman Ltd.</td>
<td>10-02-98</td>
<td>MCGM</td>
<td>238</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">116</td>
<td>T</td>
<td width="221">Gangurde Wadi Vithal Nagar</td>
<td>33-10</td>
<td width="289">S. G. THAKOOR</td>
<td width="289">MarutiShilp PVT. LTD.</td>
<td>20-02-98</td>
<td>Private</td>
<td>21</td>
<td>9</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">117</td>
<td width="88">FN</td>
<td width="221">Wadala Village Welfare Society</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Hemant Parikh</td>
<td style="font-weight: 400;" width="289">M/s. Vimal Builders</td>
<td width="124">21-02-98</td>
<td width="109">MCGM</td>
<td width="92">1207</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">118</td>
<td width="88">ME</td>
<td width="221">Roma Banjara Tanda CHS</td>
<td width="81">33(10)</td>
<td width="289">Shri. Sameer V. Kulkarni</td>
<td width="289">Mangalmurti Developers pvt ltd</td>
<td width="124">21-02-98</td>
<td width="109">MHADA</td>
<td width="92">536</td>
<td width="92">144</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">144</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">119</td>
<td>HW</td>
<td width="221">Jai Bharat SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Atharva Consultants</td>
<td width="289">M/s. Lubna Construction</td>
<td>05-03-98</td>
<td>Private</td>
<td>23</td>
<td>22</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">120</td>
<td width="88">KW</td>
<td width="221">Hanuman Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289">M/s. Zodiac Developers Pvt. Ltd</td>
<td width="124">10-03-98</td>
<td width="109">STGOVT,MHADA</td>
<td width="92">194</td>
<td width="92">188</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">yes </td>
<td width="92">19</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">121</td>
<td width="88">KE</td>
<td width="221">Thakurcharan Dham SRA CHS (Prop)</td>
<td>33-10</td>
<td width="289">Shri. Vijay Phulkar</td>
<td style="font-weight: 400;" width="289">M/s Chamunda Builders Developers</td>
<td>20-03-98</td>
<td>Private</td>
<td>148</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">122</td>
<td>T</td>
<td width="221">Sanghmitra Mulund CHS</td>
<td>33-10</td>
<td width="289">Arch combine</td>
<td style="font-weight: 400;" width="289">K.D. Enterprises</td>
<td>25-03-98</td>
<td>MCGM</td>
<td>154</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">123</td>
<td width="88">KE</td>
<td width="221">Kokan Nagar SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Bidco Engineering Division</td>
<td style="font-weight: 400;" width="289">M/s. Housing Dev.  Inf. Ltd</td>
<td>01-04-98</td>
<td>MHADA</td>
<td>714</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">124</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Janata Nagar Chitrakut CHS</td>
<td width="81">33-10</td>
<td width="289">Miss. Ashwani M. Deshpande</td>
<td style="font-weight: 400;" width="289">Sai Pushpa Construction</td>
<td>16-04-98</td>
<td width="109">MCGM</td>
<td width="92">65</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">125</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Thevar Survoday CHS Dharavi</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td>16-04-98</td>
<td width="109">MCGM</td>
<td width="92">163</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">126</td>
<td width="88">KE</td>
<td width="221">Apali Ekta CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Raja Aederi Consultants. Pvt. Ltd.</td>
<td width="289">M/s. Bharat Hotel LTD</td>
<td>24-04-98</td>
<td>Private</td>
<td>429</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">127</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">GAJANAN CHS, DHARAVI </td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">S.B.JADHAV & ASSOCIATES </td>
<td style="font-weight: 400;" width="289">S.B.JADHAV & ASSOCIATES</td>
<td width="124">29-04-98</td>
<td width="109">MCGM</td>
<td width="92">96</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">128</td>
<td>S</td>
<td width="221">Om Navjivan Chs Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">DIXIT  RISBUD ASSOCIATES</td>
<td width="289">Om Navjivan Chs. Ltd</td>
<td>08-05-98</td>
<td width="109">Private</td>
<td>87</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">129</td>
<td width="88">KW</td>
<td width="221">United CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Ziyauddin M Shaikh</td>
<td width="289">HAJI YUSUF HAJI SIDDIQUE KHATRI</td>
<td width="124">12-05-98</td>
<td width="109">Private</td>
<td width="92">30</td>
<td width="92">18</td>
<td width="92">5</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">130</td>
<td>FS</td>
<td width="221">Rahul Nagar Co-Op. hsg. Society.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chandrashekhar Architect</td>
<td width="289">SHIVSHAHI PUNARVASAN PRAKALP LTD.</td>
<td>25-05-98</td>
<td>MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">131</td>
<td width="88">MW</td>
<td width="221">Sanghmitra CHS LTD</td>
<td width="81">33-10</td>
<td width="289">S. J. Associates</td>
<td width="289">M/s. Midas Builder</td>
<td width="124">15-06-98</td>
<td width="109">STGOVT,MHADA</td>
<td width="92">148</td>
<td width="92">0</td>
<td width="92">21</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">132</td>
<td>FS</td>
<td width="221">Parel Mahatma CHS (Ltd)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Paarshad Associates</td>
<td width="289">M/s. Advance Realtors</td>
<td>25-06-98</td>
<td>Private,MCGM</td>
<td width="92">174</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">133</td>
<td>HW</td>
<td width="221">New Adarsh Nagar SRA CHS .</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">Housing Development  Imp. India Pvt. Ltd. HDIL</td>
<td>05-07-98</td>
<td>Private</td>
<td>196</td>
<td>39</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">No</td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">134</td>
<td width="88">KW</td>
<td width="221">Vailankani CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chandrashekhar Architect</td>
<td width="289">M/s. D. M. BUILDERS</td>
<td width="124">07-07-98</td>
<td width="109">Private</td>
<td>16</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">135</td>
<td width="88">HE</td>
<td width="221">Shivkripa CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Prabhakar G. Dabholkar</td>
<td width="289">M/s. Bhavya Construction</td>
<td width="124">10-07-98</td>
<td width="109">PVT</td>
<td width="92">95</td>
<td width="92">1</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">136</td>
<td width="88">E</td>
<td width="221">Shiv Shankar CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Rahul Veturkar</td>
<td style="font-weight: 400;" width="289">M/s. Baccha Builders Developers</td>
<td width="124">27-07-98</td>
<td width="109">STGOVT</td>
<td width="92">49</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">137</td>
<td width="88">N</td>
<td width="221"> Avantika CHS Ltd.   </td>
<td width="81">33-10</td>
<td width="289">Samir V. Kulkarni</td>
<td width="289">PRATHMESH DEVELOPERS</td>
<td width="124">27-07-98</td>
<td width="109">PVT</td>
<td width="92">50</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">138</td>
<td width="88">PN</td>
<td width="221">Om Shram Saphalya CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Abhijit  Associates</td>
<td width="289">M/s. Mahaveer Developers C.A.</td>
<td width="124">01-08-98</td>
<td width="109">Private</td>
<td width="92">70</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">139</td>
<td width="88">PS</td>
<td width="221">Essan SRA CHS</td>
<td>33-10</td>
<td width="289">Ajit Radkar</td>
<td width="289">M/s. Essan Construction</td>
<td width="124">01-08-98</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">140</td>
<td>GN</td>
<td width="221">Mahim Unnati CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s P. N. Bhobe & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Innovative Construction Pvt. Ltd.</td>
<td>01-09-98</td>
<td>MHADA</td>
<td width="92">220</td>
<td width="92">0</td>
<td width="92">4</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">1</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">3</td>
</tr>
<tr>
<td width="64">141</td>
<td width="88">KW</td>
<td width="221">Shreeram Wadi SRA C.H.S</td>
<td width="81">33-10</td>
<td width="289">Shri.L.D. BABLADI</td>
<td style="font-weight: 400;" width="289">M/s. Akruti Nirman Ltd.</td>
<td width="124">09-09-98</td>
<td width="109">STGOVT</td>
<td width="92">62</td>
<td width="92">12</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td width="92">12</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">142</td>
<td width="88">HE</td>
<td width="221">Abhishek SRA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">16-09-98</td>
<td width="109">PVT</td>
<td width="92">39</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">143</td>
<td width="88">FN</td>
<td width="221">Gurukrupa CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. G. S. Goswami</td>
<td width="289">M/s. Dhruvi Construction</td>
<td width="124">03-10-98</td>
<td width="109">MCGM</td>
<td width="92">92</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">144</td>
<td width="88">E</td>
<td width="221">Brahmanwadi Aikyavardhak CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td style="font-weight: 400;" width="289">M/s. Darshan Construction</td>
<td width="124">09-10-98</td>
<td width="109">MCGM</td>
<td width="92">72</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">145</td>
<td width="88">KE</td>
<td width="221">Samarth Nagar Sahaniwas CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td width="289">M/s. Omkar Realtors  Developers P. Ltd.</td>
<td>09-10-98</td>
<td>MCGM</td>
<td>200</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">146</td>
<td width="88">E</td>
<td width="221">Bharat CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">D.R. Vaidya Co.</td>
<td style="font-weight: 400;" width="289">M/S NAN Enterprises</td>
<td width="124">15-10-98</td>
<td width="109">MCGM</td>
<td width="92">73</td>
<td width="92">72</td>
<td width="92">4</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">147</td>
<td width="88">PN</td>
<td width="221">Atharva SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Jayshing Shinde</td>
<td width="289">St. George Education Society</td>
<td width="124">15-10-98</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92">291</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">148</td>
<td>HW</td>
<td width="221">Maharashtra Ngr No. 2 SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td style="font-weight: 400;" width="289">M/S Riddhi Siddhi Corporation</td>
<td>17-10-98</td>
<td>MCGM</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">149</td>
<td>HW</td>
<td width="221">Murugan CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Sukhamani Construction</td>
<td>17-10-98</td>
<td>Private</td>
<td>113</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">150</td>
<td width="88">GS</td>
<td width="221">Sai Sundar Nagar CHS</td>
<td width="81">33-10</td>
<td width="289">S. Neve</td>
<td width="289">Skylark Buildcon Pvt. Ltd. And Vrinda Enterprises</td>
<td width="124">20-10-98</td>
<td width="109">Private,MCGM</td>
<td width="92">4686</td>
<td width="92">394</td>
<td width="92">799</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">151</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">SHIVNERI CHS, MUKUND NAGAR, DHARAVI </td>
<td width="81">33-10</td>
<td width="289">P.G. Dabholkar</td>
<td width="289">Pankti Developers</td>
<td width="124">31-10-98</td>
<td width="109">MCGM</td>
<td width="92">293</td>
<td width="92">0</td>
<td width="92">13</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">152</td>
<td>L</td>
<td width="221">Mahan SRA CHS (Ltd.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td style="font-weight: 400;" width="289">M/s. M.K. Builders</td>
<td>03-11-98</td>
<td>Private</td>
<td>91</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">153</td>
<td width="88">GS</td>
<td width="221">Amar Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Sanhotra  B.I. & Associates</td>
<td style="font-weight: 400;" width="289">Surana Constructions</td>
<td width="124">11-11-98</td>
<td width="109">MCGM</td>
<td width="92">116</td>
<td width="92">4</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">4</td>
</tr>
<tr>
<td width="64">154</td>
<td width="88">KE</td>
<td width="221">Sukhsagar CHS Ltd. (Proposed)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Ziyauddin M Shaikh</td>
<td width="289">M/s. Raj Developers</td>
<td>13-11-98</td>
<td>Private</td>
<td>68</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">155</td>
<td width="88">KE</td>
<td width="221">mahaprabhu Ram</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td style="font-weight: 400;" width="289">M/s. Charmee Corporation</td>
<td>25-11-98</td>
<td>Private</td>
<td>154</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">156</td>
<td>HW</td>
<td width="221">Jaferbaba CHS (Ltd), Shiv Mandir CHS (prop) ,Hill People CHS (prop),Durga Mata CHS (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Smt. Maya Vaidya</td>
<td style="font-weight: 400;" width="289">M/s. Hubtown Ltd</td>
<td>29-12-98</td>
<td>STGOVT</td>
<td>443</td>
<td>0</td>
<td>157</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">157</td>
<td width="88">HE</td>
<td width="221">Pride of Vakola CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Sharad Shiledar and Asso.Pvt. Ltd</td>
<td width="289">M/s. S.K. Gala Gold Coin</td>
<td width="124">07-01-99</td>
<td width="109">PVT</td>
<td width="92">111</td>
<td width="92">126</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Partly</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">158</td>
<td width="88">MW</td>
<td width="221">Chembur Tilak Nagar Adarsh Nagar CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Aakar Associates</td>
<td style="font-weight: 400;" width="289">M/S. Tirupati Developers</td>
<td width="124">07-01-99</td>
<td width="109">MHADA</td>
<td width="92">119</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">159</td>
<td width="88">N</td>
<td width="221">PIMPLESHWAR MAHADEO CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Prabhakar Satham  Associates</td>
<td width="289">M/S Alpa Developer</td>
<td width="124">08-01-99</td>
<td width="109">Private</td>
<td width="92">107</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">160</td>
<td width="88">KE</td>
<td width="221">Jai Bhavani CHS Ltd. (Proposed)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td width="289">M/s. Umaiya Developer</td>
<td>09-01-99</td>
<td>Private</td>
<td>41</td>
<td>0</td>
<td width="92">8</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">161</td>
<td width="88">KE</td>
<td width="221">Yellow Fever Hospital</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">Artistic Construction Pvt. Ltd</td>
<td>18-01-99</td>
<td>Private</td>
<td width="92">0</td>
<td>48</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>48</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
</tr>
<tr>
<td width="64">162</td>
<td width="88">HE</td>
<td width="221">Pramila SRA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">30-01-99</td>
<td width="109">PVT</td>
<td width="92">57</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">163</td>
<td width="88">KE</td>
<td width="221">New Sanjay Nagar (SRA) CHS</td>
<td>33-10</td>
<td width="289">Shri Ajit Ambekar  Associates</td>
<td width="289">M/s. Sai Shakti Builders  Developer Pvt.Ltd</td>
<td>30-01-99</td>
<td>MHADA</td>
<td>69</td>
<td>12</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">164</td>
<td width="88">N</td>
<td width="221">INDRAYANI CHS.</td>
<td width="81">33-10</td>
<td width="289">Shri. Vetulkar  Associates</td>
<td width="289">M/s. Sai Krupa Builders  Developers</td>
<td width="124">02-02-99</td>
<td width="109">MHADA</td>
<td width="92">68</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">165</td>
<td width="88">HE</td>
<td width="221">Shivai SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Ranjit Naik & Associates</td>
<td width="289">M/s. Mallinath Properties Pvt. Ltd.</td>
<td width="124">10-02-99</td>
<td width="109">STGOVT</td>
<td width="92">45</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">166</td>
<td width="88">KW</td>
<td width="221">Romel (Andheri) SRA CHS. Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td style="font-weight: 400;" width="289">M/s. Romell Real Estate Private Limited</td>
<td width="124">22-02-99</td>
<td width="109">Private</td>
<td>70</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">167</td>
<td width="88">KW</td>
<td width="221">Allahmoh Castle CHSL</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">M/s. Umar N.Chauhan</td>
<td width="124">22-02-99</td>
<td width="109">Private</td>
<td width="92">23</td>
<td width="92">2</td>
<td width="92">0</td>
<td>0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">2</td>
</tr>
<tr>
<td width="64">168</td>
<td width="88">ME</td>
<td width="221">Mandale S R Scheme</td>
<td width="81">3-11</td>
<td width="289">M/S. R.K. Associates</td>
<td width="289">The Director/SPPL</td>
<td width="124">23-02-99</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">3815</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">3815</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">169</td>
<td width="88">PS</td>
<td width="221">Mitha Nagar CHS.Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">M/s. M.R. Realtors</td>
<td width="124">26-02-99</td>
<td width="109">MCGM</td>
<td>190</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">170</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Milind Nagar CHS Matunga labour camp</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">PravinNaik Associates</td>
<td width="289">PrathmeshCostruction</td>
<td>05-03-99</td>
<td width="109">MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">171</td>
<td width="88">KW</td>
<td width="221">Sai Krupa CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td style="font-weight: 400;" width="289">HIRALAL C. SHAH</td>
<td width="124">16-03-99</td>
<td width="109">Private</td>
<td>34</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">172</td>
<td width="88">N</td>
<td width="221">Mayureshwar CHS ( Ltd )</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Prabhakar Satham  Associates</td>
<td width="289">Pooja Enterperises</td>
<td width="124">07-04-99</td>
<td width="109">Private</td>
<td width="92">21</td>
<td width="92">17</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">9</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">173</td>
<td>HW</td>
<td width="221">Pandit Dindayal CHS</td>
<td>33-10</td>
<td width="289">Talib Dixit Shaikh Rishb Associates</td>
<td width="289">Vaijaya Nath Promoter & Developer</td>
<td>16-04-99</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">174</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">R.P.Nagar Markendeya CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Purbi Architect SharadMahajan</td>
<td width="289">MAULESH PATEL</td>
<td>24-04-99</td>
<td width="109">MCGM</td>
<td width="92">89</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">175</td>
<td width="88">ME</td>
<td width="221">3.11</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">S.V. Thakker   Associates</td>
<td width="289">M/s G. A. Builders Pvt. Ltd</td>
<td width="124">28-05-99</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">2731</td>
<td width="92">589</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">2731</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">176</td>
<td>GN</td>
<td width="221">Sunder Nagar CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Aakar Associates-Santacruz(W)</td>
<td width="289">M/s Vidhata Enterprises</td>
<td>31-05-99</td>
<td>STGOVT</td>
<td width="92">310</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">177</td>
<td width="88">KW</td>
<td width="221">New Gilbert Hill SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Ellora Project Consultants</td>
<td width="289">CORDCON Builders Pvt. Ltd</td>
<td width="124">01-06-99</td>
<td width="109">Private</td>
<td width="92">435</td>
<td width="92"> </td>
<td width="92">1</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92"> </td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">178</td>
<td width="88">HE</td>
<td width="221">Dr. Ambedkar CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Lok Architect</td>
<td width="289">Lok Housing  Construction</td>
<td width="124">14-06-99</td>
<td width="109">STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">179</td>
<td width="88">PS</td>
<td width="221">Krishan Koyna  SRA CHS LTD</td>
<td width="81">33-10</td>
<td width="289">Shri. Jatin Shah.<br /> M/s Shah & Associates,                                   </td>
<td width="289">Bhupender Singh Shethi</td>
<td width="124">14-06-99</td>
<td width="109">PVT </td>
<td width="92">85</td>
<td width="92">36</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">not</td>
<td width="92">no</td>
<td width="92">no</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">180</td>
<td width="88">GS</td>
<td width="221">New Sagar Vihar CHS (Proposed)</td>
<td width="81">33-10</td>
<td width="289">M/s. Shilpy Associates</td>
<td width="289">M/s.Samudra Real Estates Pvt.Ltd.</td>
<td width="124">16-06-99</td>
<td width="109">STGOVT</td>
<td width="92">95</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">181</td>
<td width="88">HE</td>
<td width="221">Shankar SRA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">16-06-99</td>
<td width="109">PVT</td>
<td width="92">35</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">182</td>
<td>S</td>
<td width="221">Vaibhav chowk SRA chs ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Design Creations</td>
<td width="289">Matoshri Developer pvt. Ltd</td>
<td>22-06-99</td>
<td width="109">Private</td>
<td>79</td>
<td>13</td>
<td>5</td>
<td>0</td>
<td width="92">NO</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">183</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">V.O.C. CHS Dharavi</td>
<td width="81">33-10</td>
<td width="289">SowaniAssocaites</td>
<td width="289">Dhuri Developers</td>
<td>01-07-99</td>
<td width="109">MCGM</td>
<td width="92">221</td>
<td width="92">0</td>
<td width="92">4</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">184</td>
<td>HW</td>
<td width="221">Pali Nagar CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">Housing Development  Imp. India Pvt. Ltd. HDIL</td>
<td>02-07-99</td>
<td>Private</td>
<td>31</td>
<td>2</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">185</td>
<td width="88">GS</td>
<td width="221">Parel Shivsmruti A & B SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Samoon & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Lokhandwala Shelters India Pvt. Ltd</td>
<td width="124">13-07-99</td>
<td width="109">MCGM</td>
<td width="92">713</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">186</td>
<td width="88">KE</td>
<td width="221">Prajakta CHS (Prop.)</td>
<td>33-10</td>
<td width="289">Smt. Rajani P. Naphade</td>
<td width="289">M/s. SBI Staff Prajkta CHS (Prop)</td>
<td>19-07-99</td>
<td>STGOVT</td>
<td>55</td>
<td>60</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">187</td>
<td width="88">KW</td>
<td width="221">Om Shivneri SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Joshi  Associates</td>
<td width="289">M/s. Milind Developers</td>
<td width="124">30-07-99</td>
<td width="109">Private</td>
<td width="92">52</td>
<td width="92"> </td>
<td width="92">9</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No </td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">188</td>
<td width="88">HE</td>
<td width="221">Omkar CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. shirsat  Associates</td>
<td width="289">M/s. Sunrise Developer</td>
<td width="124">03-08-99</td>
<td width="109">OTHER</td>
<td width="92">58</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">189</td>
<td width="88">HE</td>
<td width="221">Pride Of Kalina CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Sharad Shiledar and Asso.Pvt. Ltd</td>
<td width="289">M/s GOLDEN AGE CONSTRUCTION</td>
<td width="124">04-08-99</td>
<td width="109">PVT</td>
<td width="92">183</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">190</td>
<td>RN</td>
<td width="221">MICHAEL WADI</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">NATHALAL B. DELVADIA</td>
<td style="font-weight: 400;" width="289">Nathalal B. Delvadia</td>
<td>09-08-99</td>
<td>Private</td>
<td width="92">338</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">191</td>
<td>HW</td>
<td width="221">Shivneri SRA CHS (prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Ace Consultants</td>
<td width="289">M/s. Prarthna Enterprises</td>
<td>13-08-99</td>
<td>MCGM</td>
<td>60</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">192</td>
<td width="88">KE</td>
<td width="221">Bhagirati SRA CHS</td>
<td>33-10</td>
<td width="289">M/s. Vikas Date & Associates</td>
<td width="289">S. R. DANTAL</td>
<td>17-08-99</td>
<td>Private</td>
<td>60</td>
<td>52</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">193</td>
<td width="88">N</td>
<td width="221">Vidyavihar Jai Parkash Nagar CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">M/S.PARASMANI CONSTRUCTION PVT LTD.</td>
<td width="124">05-09-99</td>
<td width="109">MHADA</td>
<td width="92">195</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">194</td>
<td width="88">KE</td>
<td width="221">PRATAP NAGAR HANUMAN TRUST, JOGESHWARI (E)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">Shiv Shankar V. Bhora</td>
<td>06-09-99</td>
<td>Private</td>
<td>46</td>
<td>0</td>
<td width="92">24</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">195</td>
<td width="88">N</td>
<td width="221">Siddhikrupa CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vinod Dharap.</td>
<td width="289"> Ashok Property Developers</td>
<td width="124">09-09-99</td>
<td width="109">Private</td>
<td width="92">20</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">196</td>
<td>GN</td>
<td width="221">Tadeshwar CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">R.W. Gudal  Associates</td>
<td width="289">M/S.Lalit  Developers</td>
<td>10-09-99</td>
<td>MCGM</td>
<td width="92">117</td>
<td width="92">0</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">11</td>
</tr>
<tr>
<td width="64">197</td>
<td width="88">KE</td>
<td width="221">Vrindavan Babubhai Morwala CHS (Proposed)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s. Umatiya Developers</td>
<td>10-09-99</td>
<td>Private</td>
<td>117</td>
<td>0</td>
<td width="92">32</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">198</td>
<td width="88">MW</td>
<td width="221">3.11 Scheme (Charishma Builders)</td>
<td width="81">3.11</td>
<td width="289">M/s. Verticohorizon<br /> Architects & Planners</td>
<td>M/s. Charishma Builders</td>
<td width="124">10-09-99</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">1536</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">1536</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">199</td>
<td width="88">N</td>
<td width="221">GURUDATTA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">PravinNaik Associates</td>
<td style="font-weight: 400;" width="289">K.D. Enterprises</td>
<td width="124">10-09-99</td>
<td width="109">MCGM</td>
<td width="92">34</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">200</td>
<td width="88">N</td>
<td width="221">Omkar SRA CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mukesh N. Shah</td>
<td style="font-weight: 400;" width="289">M/s. Neelyog Construction Pvt. Ltd</td>
<td width="124">18-09-99</td>
<td width="109">MHADA</td>
<td width="92">482</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">8</td>
</tr>
<tr>
<td width="64">201</td>
<td>HW</td>
<td width="221">Om Shivhara Shivsapana CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Satish Hande</td>
<td width="289">M/s. Crown Construction Co</td>
<td>21-09-99</td>
<td>Private</td>
<td>30</td>
<td>3</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">202</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Jay Bhavani CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Vastukarma</td>
<td style="font-weight: 400;" width="289">Jai Bhagwati Developers  Builders</td>
<td>05-10-99</td>
<td width="109">MCGM</td>
<td width="92">139</td>
<td width="92">0</td>
<td width="92">1</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">203</td>
<td width="88">HE</td>
<td width="221">Lokmanya SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Rasik P. Hingoo Associates</td>
<td style="font-weight: 400;" width="289">M/s. Vastu Nirman</td>
<td width="124">26-10-99</td>
<td width="109">PVT</td>
<td width="92">84</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">Yes </td>
<td width="92">Yes</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">12</td>
</tr>
<tr>
<td width="64">204</td>
<td width="88">N</td>
<td width="221">Gangawadi CHS Ltd.</td>
<td width="81">33-10</td>
<td width="289">Mr. K.R. Suresh of M/s Studiarch</td>
<td width="289"> M/s. Vaithara Construction Pvt. Ltd.</td>
<td width="124">30-10-99</td>
<td width="109">MHADA</td>
<td width="92">265</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">205</td>
<td width="88">FN</td>
<td width="221">Swami Vivekananda CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. G. S. Goswami</td>
<td style="font-weight: 400;" width="289">M/s. Hare Krishna Builders</td>
<td width="124">25-11-99</td>
<td width="109">MCGM</td>
<td width="92">101</td>
<td width="92">13</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">206</td>
<td width="88">FN</td>
<td width="221">Adarsh Gharkul CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Kasu Munshi  Associates</td>
<td style="font-weight: 400;" width="289">Shree Swami Samarth   Builders  Developers.</td>
<td width="124">26-11-99</td>
<td width="109">MCGM</td>
<td width="92">491</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">207</td>
<td>GN</td>
<td width="221">SWAROOPANAND SRA CHS (LTD)</td>
<td>33-10</td>
<td width="289">M/s Mungekar Associates Sandeep Shirsat</td>
<td width="289">M/s S.B.Brothers Developers</td>
<td>14-12-99</td>
<td>MCGM</td>
<td width="92">147</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">208</td>
<td>GN</td>
<td width="221">Shiv Shakti CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jintendra Patel Of M/s. Aakar Architects & C</td>
<td width="289">Rajlaxmi Developers</td>
<td>14-12-99</td>
<td>Private,MCGM</td>
<td width="92">245</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">209</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Vijay Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Vastukarma</td>
<td width="289">M/s. jai Construction Co</td>
<td>27-12-99</td>
<td width="109">MCGM</td>
<td width="92">64</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">210</td>
<td width="88">ME</td>
<td width="221">Mahila Milan CHS</td>
<td width="81">3-11</td>
<td width="289">Suchita chogale AND  Sanjiv Kudalkar</td>
<td style="font-weight: 400;" width="289">SPARC.</td>
<td width="124">29-12-99</td>
<td width="109">MHADA</td>
<td width="92">0</td>
<td width="92">380</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">380</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">211</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Kamraj Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/S. A.V. VORA ASSOC.  PVT. PTD.</td>
<td width="289">Sandeep Estate Development Pvt. Ltd.</td>
<td>31-12-99</td>
<td width="109">STGOVT</td>
<td width="92">118</td>
<td width="92">0</td>
<td width="92">87</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">212</td>
<td width="88">GS</td>
<td width="221">Indira SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Consultants Combined</td>
<td style="font-weight: 400;" width="289">M/s. Om Omega Sheltors</td>
<td width="124">31-12-99</td>
<td width="109">MCGM</td>
<td width="92">1946</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">213</td>
<td width="88">KW</td>
<td width="221">Juhu Ekta SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">M/S.H.K.ENTERPRISES</td>
<td width="124">31-12-99</td>
<td width="109">MHADA</td>
<td>82</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">214</td>
<td width="88">GS</td>
<td width="221">Mariamma Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">PravinNaik Associates</td>
<td width="289">M/s. Akshay Stapatya Pvt. Ltd.</td>
<td width="124">04-01-00</td>
<td width="109">MCGM</td>
<td width="92">1031</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">215</td>
<td width="88">HE</td>
<td width="221">Nirmal Nagar Gousia CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. BHUPENDRA PATRAWALA</td>
<td width="289">rajhans builders developer</td>
<td width="124">05-01-00</td>
<td width="109">MHADA</td>
<td width="92">30</td>
<td width="92">7</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">216</td>
<td>T</td>
<td width="221">Gautam Nagar CHS (Nahur )</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. G.S. Gokhale</td>
<td width="289">AshishAmeya Enterprises</td>
<td>11-01-00</td>
<td>STGOVT</td>
<td>23</td>
<td>10</td>
<td>3</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">217</td>
<td>GN</td>
<td width="221">OM SHIVKRUPA CO-OP.HSG.SOC. (REGD.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Bilwamangal Rege</td>
<td style="font-weight: 400;" width="289">M/s Omega Investment & Properties Pvt. Ltd.</td>
<td>12-01-00</td>
<td>MCGM</td>
<td width="92">179</td>
<td width="92">0</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">1</td>
</tr>
<tr>
<td width="64">218</td>
<td width="88">PN</td>
<td width="221">Sarvoday Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">M/s Pramukh Enterprises</td>
<td width="124">18-01-00</td>
<td width="109">Private</td>
<td width="92">230</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">219</td>
<td width="88">KW</td>
<td width="221">Om Sai Ekta CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td style="font-weight: 400;" width="289">M/s. Lashkaria Construction Pvt. Ltd</td>
<td width="124">25-01-00</td>
<td width="109">STGOVT</td>
<td>275</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">220</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">VALLABH  CHS, DHARAVI </td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">S.B.JADHAV & ASSOCIATES </td>
<td style="font-weight: 400;" width="289">S.B.JADHAV & ASSOCIATES</td>
<td width="124">06-02-00</td>
<td width="109">MCGM</td>
<td width="92">160</td>
<td width="92">0</td>
<td width="92">44</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">221</td>
<td width="88">RS</td>
<td width="221">SHREE GANESH KRUPA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">S. G. Nemivant</td>
<td width="289">M/s. Vijaya Developer</td>
<td width="124">08-02-00</td>
<td width="109">MHADA</td>
<td width="92">110</td>
<td width="92">33</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">222</td>
<td>GN</td>
<td width="221">NEW SAMADHAN DATTA GURU SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Ranjit Naik & Associates</td>
<td width="289">M/s Anupam Land Hsg. Pvt. Ltd.</td>
<td>09-02-00</td>
<td>Private</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">223</td>
<td width="88">HE</td>
<td width="221">Sukh Sagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">M/s Adarsh Developers</td>
<td width="124">10-02-00</td>
<td width="109">MHADA</td>
<td width="92">129</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">224</td>
<td width="88">KE</td>
<td width="221">Shiv Sai Co-Op Hsg Soc Ltd. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Aakar Associates</td>
<td width="289">M/s. Raviraj Constructions</td>
<td>11-02-00</td>
<td>STGOVT</td>
<td>41</td>
<td>24</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">225</td>
<td>S</td>
<td width="221">Balbir Bhuvan  CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s V.V  Associates</td>
<td width="289">Ashok sawani</td>
<td>16-02-00</td>
<td width="109">Private</td>
<td>40</td>
<td>6</td>
<td>7</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">226</td>
<td>RN</td>
<td width="221">Bhimashankar Rahivasi SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Rakesh Waghmare</td>
<td width="289">M/s. Chaubey Realties Pvt.Ltd</td>
<td>17-02-00</td>
<td>Private</td>
<td width="92">67</td>
<td width="92">46</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">227</td>
<td width="88">PS</td>
<td width="221">Alokjyot CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S.POOJA  ASSOCIATES</td>
<td style="font-weight: 400;" width="289">Rushabh Real Estate Developer Pvt Ltd</td>
<td width="124">22-02-00</td>
<td width="109">Private</td>
<td>45</td>
<td>0</td>
<td>22</td>
<td>0</td>
<td>Constructed</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">228</td>
<td width="88">D</td>
<td width="221">BHARAT CO-OPERATIVE HOUSING SOC LTD</td>
<td width="81">33-10</td>
<td width="289">M/s. Ganesh Mule & Associates</td>
<td width="289">M/s. Paramount Construction</td>
<td width="124">25-02-00</td>
<td width="109">MCGM</td>
<td width="92">27</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">229</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Rohidas Harale CHS Khambdeo Nagar, Dharavi.  </td>
<td width="81">33-10</td>
<td width="289">M.R. Shendye & Associates </td>
<td width="289">Pushpa Developers  </td>
<td width="124">28-02-00</td>
<td width="109">MCGM</td>
<td width="92">23</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">230</td>
<td width="88">KE</td>
<td width="221">Sai Bhavani SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/s. Sai Bhawani Developers,</td>
<td>29-02-00</td>
<td>MCGM</td>
<td>113</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">231</td>
<td width="88">KE</td>
<td width="221">Sunder Nagar Utkarsha CHS LTD</td>
<td>33-10</td>
<td width="289">Mr. Yomesh Rao of M/s. YMS Consultants Ltd</td>
<td width="289">Mohid Construction Co</td>
<td>01-03-00</td>
<td>MHADA</td>
<td>244</td>
<td>94</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">232</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">PRABUDHA SAMATA C.H.S</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M.R. Shendye  Associates</td>
<td style="font-weight: 400;" width="289">Pushpa Construction Co.</td>
<td>03-03-00</td>
<td width="109">MCGM</td>
<td width="92">42</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">233</td>
<td width="88">N</td>
<td width="221">RAM NAGAR CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. BHUPENDRA PATRAWALA</td>
<td style="font-weight: 400;" width="289">M/s. HALKARA CONST. CO. PVT. LTD.</td>
<td width="124">10-03-00</td>
<td width="109">Private</td>
<td width="92">121</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">234</td>
<td width="88">KE</td>
<td width="221">Julian Disouza</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Harish Gandhi</td>
<td width="289">M/s. Dilip E. Datwani</td>
<td>14-03-00</td>
<td>Private</td>
<td>32</td>
<td>5</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">235</td>
<td width="88">HE</td>
<td width="221">Ratna Prabha CHS</td>
<td width="81">33-10</td>
<td width="289">Neelam Architect</td>
<td width="289">Raj Constructions</td>
<td width="124">18-03-00</td>
<td width="109">STGOVT</td>
<td width="92">72</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">236</td>
<td width="88">GS</td>
<td width="221">Lower Parel Bharat Nagar CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Sharad Shiledar and Asso.Pvt. Ltd</td>
<td width="289">M/s. Om Sahil Enterprises</td>
<td width="124">25-03-00</td>
<td width="109">Private</td>
<td width="92">68</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">237</td>
<td width="88">KW</td>
<td width="221">Shree Andheri Shiv Shakti CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">M/s. Sanjay Joshi & Associates</td>
<td style="font-weight: 400;" width="289">M/S Parag Enterprises (Shivshakti)</td>
<td width="124">29-03-00</td>
<td width="109">MHADA</td>
<td width="92">66</td>
<td width="92">0</td>
<td width="92">5</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">238</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Nehru SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deva Consultants</td>
<td style="font-weight: 400;" width="289">Sai Pushpa Construction</td>
<td>01-04-00</td>
<td width="109">STGOVT</td>
<td width="92">180</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">239</td>
<td>GN</td>
<td width="221">Shivam CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shreeya Services Pvt. Ltd.</td>
<td style="font-weight: 400;" width="289">M/s B Brothers Builders</td>
<td>04-04-00</td>
<td>MCGM</td>
<td width="92">39</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">240</td>
<td width="88">KE</td>
<td width="221">SHREE GANESH CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Shelters Maker India P Ltd</td>
<td>18-04-00</td>
<td>Private,STGOVT</td>
<td>48</td>
<td>16</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">241</td>
<td>RN</td>
<td width="221">ASHOKVAN COLONY ZOPADPATTY</td>
<td>33-10</td>
<td width="289">M. J. Keshkamat</td>
<td width="289">Narayan D. Parmar</td>
<td>06-05-00</td>
<td>Private</td>
<td width="92">51</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">242</td>
<td width="88">HE</td>
<td width="221">Khandwala CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s.  Villayati Ram Mittal</td>
<td width="124">10-05-00</td>
<td width="109">PVT</td>
<td width="92">818</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">243</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Om Dutt CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Veturkar    Associates</td>
<td width="289">Pankti Developers Pvt Ltd</td>
<td>15-05-00</td>
<td width="109">MCGM</td>
<td width="92">114</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">244</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Om Shivam CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dilip Tambday  Associates</td>
<td width="289">Mahalaxmi Builders  Developers Nalanda chs</td>
<td>19-05-00</td>
<td width="109">MCGM</td>
<td width="92">66</td>
<td width="92">0</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">245</td>
<td width="88">PS</td>
<td width="221">Jai Yogeswar CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">Shri P.A. Shah</td>
<td width="124">19-05-00</td>
<td width="109">Private</td>
<td>56</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">246</td>
<td width="88">KE</td>
<td width="221">SAURABH SRA CHS. (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jaynat Vaidya of M/s. D. R. Vaidya & Co.</td>
<td width="289">MATOSHRI REALTORS PVT. LTD.</td>
<td>22-05-00</td>
<td>MCGM</td>
<td>97</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">247</td>
<td width="88">PN</td>
<td width="221">Radha SRA CHS (Prop.)</td>
<td width="81">33-10</td>
<td width="289">R.D. Shenoy Architect of M/s. Ramnai  Associates</td>
<td style="font-weight: 400;" width="289">Radha Construction</td>
<td width="124">24-05-00</td>
<td width="109">Private</td>
<td width="92">20</td>
<td width="92">23</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">248</td>
<td>HW</td>
<td width="221">Daulat Nagar SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">Housing Development  Imp. India Pvt. Ltd. HDIL</td>
<td>25-05-00</td>
<td>MCGM</td>
<td>3966</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">249</td>
<td width="88">ME</td>
<td width="221">3.11 Scheme (G.M. Kakde)</td>
<td width="81">3-11</td>
<td width="289">G. M. Kakde Engineering Consultants Pvt. Ltd.</td>
<td style="font-weight: 400;" width="289">MHADA</td>
<td>25-05-00</td>
<td width="109">MHADA</td>
<td width="92">0</td>
<td width="92">2437</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">2437</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">250</td>
<td width="88">GS</td>
<td width="221">Prabhodhankar Thackare CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Paarshad Associates</td>
<td width="289">M/s.Janki Developer</td>
<td width="124">29-05-00</td>
<td width="109">MCGM</td>
<td width="92">49</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">251</td>
<td width="88">GS</td>
<td width="221">Panchsheel (SRA) CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Samoon & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Lokhandwala Shelters India Pvt. Ltd</td>
<td width="124">30-05-00</td>
<td width="109">MCGM</td>
<td width="92">474</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">252</td>
<td width="88">KW</td>
<td width="221">Jai Ambe CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">Nityanand Builder & Developer</td>
<td width="124">01-06-00</td>
<td width="109">MCGM</td>
<td>275</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">253</td>
<td>FS</td>
<td width="221">Mahalaxmi SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s Mayuree Consultants</td>
<td width="289">Faithfull Developers</td>
<td>03-06-00</td>
<td>MCGM</td>
<td width="92">164</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">254</td>
<td width="88">KW</td>
<td width="221">ASMA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/S.POOJA  ASSOCIATES</td>
<td width="289">AVESH BUILDERS  CONTRACTORS.</td>
<td width="124">06-06-00</td>
<td width="109">Private</td>
<td width="92">28</td>
<td width="92">8</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">255</td>
<td width="88">HE</td>
<td width="221">Rita Apartment CHS</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">12-06-00</td>
<td width="109">PVT</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">256</td>
<td>HW</td>
<td width="221">Kitkat SRA CHS</td>
<td>33-10</td>
<td width="289">M/s. S.G. Fernandes Hamara</td>
<td width="289">M/s. Parshad Associates of         Shri. P.P. Khob</td>
<td>14-06-00</td>
<td>Private</td>
<td>56</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>Yes</td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">257</td>
<td width="88">HE</td>
<td width="221">Parwati Chawl (Sai Ganesh CHS)</td>
<td width="81">33-10</td>
<td width="289">Sultan Chambyal</td>
<td width="289">M/s. interlink builders S.K.Gala</td>
<td width="124">17-07-00</td>
<td width="109">PVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">258</td>
<td width="88">RS</td>
<td width="221">Siddhivinayak Arcade CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Ajit Developer Pvt Ltd</td>
<td width="124">18-07-00</td>
<td width="109">Private</td>
<td width="92">9</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">259</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Suryoday B RAJIV INDIRA NAGAR, DHARAVI</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chogle  Associates</td>
<td style="font-weight: 400;" width="289">SPARC.</td>
<td>07-08-00</td>
<td width="109">MHADA</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">260</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">RAJIV INDIRA NAGAR, DHARAVI</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chogle  Associates</td>
<td style="font-weight: 400;" width="289">SPARC.</td>
<td>07-08-00</td>
<td width="109">MHADA,MCGM</td>
<td width="92">155</td>
<td width="92">0</td>
<td width="92">30</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">261</td>
<td width="88">HE</td>
<td width="221">Behram Sudhar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">PRAKASH SAPRE</td>
<td width="289">M/s. Solanki  Associates</td>
<td width="124">28-08-00</td>
<td width="109">STGOVT</td>
<td width="92">665</td>
<td width="92">245</td>
<td width="92">372</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">262</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Shama CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s Mayuree Consultants</td>
<td width="289">M/s.S. B. DEVELOPER</td>
<td>29-08-00</td>
<td width="109">MCGM</td>
<td width="92">154</td>
<td width="92">0</td>
<td width="92">54</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">263</td>
<td width="88">PN</td>
<td width="221">Dindoshi Pada Janata Sevak Sangh CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">Bahist Enterprises Pvt. Ltd</td>
<td width="124">31-08-00</td>
<td width="109">Private</td>
<td width="92">952</td>
<td width="92"> </td>
<td width="92">509</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">264</td>
<td>L</td>
<td width="221">SAIFEE (SRA) CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Dalvi  Assocites</td>
<td width="289">M/s. Asscociated Builders</td>
<td>02-09-00</td>
<td>Private</td>
<td>17</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">265</td>
<td>RN</td>
<td width="221">PANCHAVATI DHAM CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">OM SAI SAMARTH DEVELOPERS</td>
<td>02-09-00</td>
<td>Private</td>
<td width="92">134</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">266</td>
<td>GN</td>
<td width="221">Shanti Nagar CHS Ltd</td>
<td>33-10</td>
<td width="289">M/s. P. N. Bhobe  Associates</td>
<td width="289">M/s R.K Madhani & Co</td>
<td>14-09-00</td>
<td>MCGM</td>
<td width="92">52</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">267</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Bhagylaxmi CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. P.S. Chamankar & Associates</td>
<td style="font-weight: 400;" width="289">Forward Construction corp</td>
<td>15-09-00</td>
<td width="109">MCGM</td>
<td width="92">71</td>
<td width="92">0</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">268</td>
<td>S</td>
<td width="221">Shivashram tenants CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">M/s. Hemgiri Shivbhoomi construction</td>
<td>22-09-00</td>
<td width="109">Private</td>
<td>281</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">269</td>
<td width="88">HE</td>
<td width="221">Navratna SRA Co. Op. Hsg. Soc. (Regd)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. P.S. Chamankar & Associates</td>
<td width="289">M/s. K.S. Chamankar Enterprises</td>
<td width="124">04-10-00</td>
<td width="109">MCGM</td>
<td width="92">244</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">270</td>
<td>FS</td>
<td width="221">Azad Nagar Rahivasi Sangh CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chandrashekhar</td>
<td width="289">M/s. OjusDeverlopers</td>
<td>10-11-00</td>
<td>MCGM</td>
<td width="92">153</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">271</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">ASHRA SRA CO-OP HSG. SOCIETY LTD</td>
<td width="81">33-10</td>
<td width="289">M/s. S.V. Thakker & Associates</td>
<td width="289">Kay Bee Developers Pvt. Ltd.</td>
<td>18-11-00</td>
<td width="109">STGOVT</td>
<td width="92">248</td>
<td width="92">0</td>
<td width="92">142</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">272</td>
<td width="88">HE</td>
<td width="221">William Arcade SRA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s Vision Architect</td>
<td width="289"> M/s NANDA ENTERPRISES</td>
<td width="124">27-11-00</td>
<td width="109">PVT</td>
<td width="92">36</td>
<td width="92">0</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">273</td>
<td width="88">RC</td>
<td width="221">SHREE SAI PRASAD S.R.A.CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Design World</td>
<td width="289">M/s. Sunil Construction</td>
<td width="124">30-11-00</td>
<td width="109">STGOVT</td>
<td>85</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">274</td>
<td>L</td>
<td width="221">Gafoor Khan Estate</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td style="font-weight: 400;" width="289">M/s. Rizvi Developer</td>
<td>06-12-00</td>
<td>Private</td>
<td>1481</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">275</td>
<td width="88">KE</td>
<td width="221">Andheri Rambaug CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Design World</td>
<td width="289">M/s Vijayalaxmi Builders  Contractors</td>
<td>11-12-00</td>
<td>MHADA</td>
<td>166</td>
<td>0</td>
<td width="92">29</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">276</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">SATHI CHS LTD.</td>
<td width="81">33-10</td>
<td width="289">N.M. MAHALE</td>
<td width="289">BAACHA BUILDERS & DEVELOPERS</td>
<td>14-12-00</td>
<td width="109">MCGM</td>
<td width="92">135</td>
<td width="92">0</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">277</td>
<td width="88">HE</td>
<td width="221">Kalina Sangam CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Vastukaram</td>
<td width="289">M/s. Jay Bhagwati Developer  Builders</td>
<td width="124">18-12-00</td>
<td width="109">MHADA</td>
<td width="92">40</td>
<td width="92">0</td>
<td width="92">53</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">278</td>
<td width="88">KW</td>
<td width="221">Lilly Apartment SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">T.N. Hasan</td>
<td width="289">Winsmile Infrastructure Pvt. Ltd</td>
<td width="124">18-12-00</td>
<td width="109">Private</td>
<td>190</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">279</td>
<td width="88">HE</td>
<td width="221">Shastrinagar SRA CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. City Gold Management Services P. Ltd</td>
<td style="font-weight: 400;" width="289">M/s. Hubtown Ltd</td>
<td width="124">19-12-00</td>
<td width="109">MCGM</td>
<td width="92">492</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">280</td>
<td>HW</td>
<td width="221">Aradhana CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Aakar Associates-Santacruz(W)</td>
<td width="289">M/s. Grace Builders  Developer</td>
<td>21-12-00</td>
<td>MCGM</td>
<td>63</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>Yes </td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">281</td>
<td>L</td>
<td width="221">C.T.S. No. 617, 617-2, 618, 618/1-9 of Village Kurla, Fitwala compound for Maharashtra Rahiwashi Sangh<br /> L/PVT/0013/20010104</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td style="font-weight: 400;" width="289">M/s. Regal Builders  Developers</td>
<td>18-01-01</td>
<td>Private</td>
<td>45</td>
<td>32</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">282</td>
<td width="88">KW</td>
<td width="221">Shiv-Shakti Jyot CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chandrashekhar Architect</td>
<td style="font-weight: 400;" width="289">Emerald Developers.</td>
<td width="124">19-01-01</td>
<td width="109">STGOVT</td>
<td>49</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">283</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Nalanda SRA CHS Mukund Nagar</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dilip Tambday  Associates</td>
<td style="font-weight: 400;" width="289">Mahalaxmi Builders  Contractors</td>
<td>26-02-01</td>
<td width="109">MCGM</td>
<td width="92">176</td>
<td width="92">0</td>
<td width="92">29</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">284</td>
<td width="88">MW</td>
<td width="221">Chembur Shree Siddhivinayak CHS Ltd.</td>
<td width="81">33-10</td>
<td width="289">M/s. Gharandaj Builders</td>
<td width="289">M/s. K.R. Rege & Assoicates</td>
<td width="124">02-03-01</td>
<td width="109">MHADA</td>
<td width="92">97</td>
<td width="92">173</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">57</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">6</td>
</tr>
<tr>
<td width="64">285</td>
<td>HW</td>
<td width="221">Khatija CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">M/s. Manek Construction</td>
<td>03-03-01</td>
<td>Private</td>
<td>54</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">286</td>
<td width="88">RS</td>
<td width="221">Siddeshwar CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Balaji Construction</td>
<td width="124">10-04-01</td>
<td width="109">Private</td>
<td width="92">12</td>
<td width="92">7</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">287</td>
<td width="88">PN</td>
<td width="221">Shakti SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Paarshad Associates</td>
<td width="289">M/s. Shakti Property Developer Pvt.</td>
<td width="124">18-05-01</td>
<td width="109">Private,MCGM</td>
<td width="92">786</td>
<td width="92">348</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">288</td>
<td width="88">KW</td>
<td width="221">Tripati Chawal Chs</td>
<td width="81">33-10</td>
<td width="289">K Arch. Architects</td>
<td width="289">Pratyaksha Builders & Developers</td>
<td width="124">24-05-01</td>
<td width="109">Private</td>
<td width="92">40</td>
<td width="92">9</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">289</td>
<td width="88">PN</td>
<td width="221">Narmada Nagar CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">M/s. Emrald Realtors Pvt. Ltd.</td>
<td width="124">24-05-01</td>
<td width="109">Private</td>
<td width="92">842</td>
<td width="92"> </td>
<td width="92">225</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">290</td>
<td width="88">PN</td>
<td width="221">Narmada Nagar CHS.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">M/s. Emrald Realtors Pvt. Ltd.</td>
<td width="124">24-05-01</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">291</td>
<td>HW</td>
<td width="221">Parera wadi, Bhau Bhalekar CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Adaam air Architects</td>
<td width="289">Grace Corporation</td>
<td>04-06-01</td>
<td>Private</td>
<td>34</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">292</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Janta Nagar A,B,C. CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dilip Tambday  Associates</td>
<td style="font-weight: 400;" width="289">Mahalaxmi Builders  Contractors</td>
<td>28-06-01</td>
<td width="109">MCGM</td>
<td width="92">309</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">293</td>
<td width="88">KE</td>
<td width="221">Siddhivinayak CHS  Ltd</td>
<td>33-10</td>
<td width="289">Shri S.P. Shevade</td>
<td width="289">M/s. Sangeeta Construction</td>
<td>09-07-01</td>
<td>MCGM</td>
<td>44</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">294</td>
<td width="88">KE</td>
<td width="221">Royal CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Ziyauddin M Shaikh</td>
<td width="289">Mrs. Amroo A. S. Khan of M/s. Royal Builders & Dev</td>
<td>19-07-01</td>
<td>Private</td>
<td>22</td>
<td>4</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">295</td>
<td width="88">E</td>
<td width="221">SHREE NATHU BHAGAT CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td width="289">MARVELLOUS BUILDER PVT LTD</td>
<td width="124">27-07-01</td>
<td width="109">MCGM</td>
<td width="92">63</td>
<td width="92">0</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">5</td>
</tr>
<tr>
<td width="64">296</td>
<td>GN</td>
<td width="221">Shiv Smurti CHS Ltd</td>
<td>33-10</td>
<td width="289">T M Rupji</td>
<td style="font-weight: 400;" width="289">Rupji Constructions</td>
<td>23-08-01</td>
<td>STGOVT</td>
<td width="92">27</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">297</td>
<td width="88">KE</td>
<td width="221">Sambhaji Nagar SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td width="289">M/s. R. T. Construction</td>
<td>14-09-01</td>
<td>STGOVT,MCGM</td>
<td>1249</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">298</td>
<td width="88">KE</td>
<td width="221">unknown AV</td>
<td>33-10</td>
<td width="289">G. D. Sambhare  Co</td>
<td width="289">MMRDA</td>
<td>11-10-01</td>
<td>MMRDA</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">299</td>
<td width="88">KE</td>
<td width="221">Parle Amit (SRA) C.H.S. Ltd.</td>
<td>33-10</td>
<td width="289">M/s. SHAH  ASSOCIATES</td>
<td width="289">M/s. Bhavik Enterprise(Developers)</td>
<td>26-11-01</td>
<td>Private</td>
<td>19</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">300</td>
<td width="88">PN</td>
<td width="221">Wadar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Shah Housecon Pvt.Ltd</td>
<td width="124">27-11-01</td>
<td width="109">Private</td>
<td width="92">1248</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">301</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">VIVEKANAND CHS </td>
<td width="81">33-10</td>
<td width="289">P.S. Chamankar</td>
<td width="289">Dr. Nitin Thorve.</td>
<td width="124">04-12-01</td>
<td width="109">MCGM</td>
<td width="92">125</td>
<td width="92">0</td>
<td width="92">16</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">302</td>
<td>T</td>
<td width="221">Bhagavatikunj CHS. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Vijay Turbadkar</td>
<td width="289">Manish Developers</td>
<td>05-12-01</td>
<td>Private</td>
<td>34</td>
<td>8</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">303</td>
<td width="88">N</td>
<td width="221">Siddharth Nagar Co-op Hsg. Society.<br /> GHATKOPAR N</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Smt. S.V. Thakkar  Associates</td>
<td width="289">KISHOR D. PATEL</td>
<td width="124">06-12-01</td>
<td width="109">Private</td>
<td width="92">261</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">304</td>
<td width="88">RC</td>
<td width="221">Borivali Priya SRA CHS</td>
<td width="81">33 (10)</td>
<td width="289">Shri. N .B Chogle Of<br /> M/s. Chogle & Associates.</td>
<td width="289">Mr. S. Khandelwal of<br /> M/s. Kumar Associates.</td>
<td width="124">21-12-01</td>
<td width="109">Pvt.</td>
<td width="92">42</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">305</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Nabi Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Veturkar    Associates</td>
<td width="289">SM.  Associates</td>
<td>26-12-01</td>
<td width="109">MCGM</td>
<td width="92">195</td>
<td width="92">0</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">306</td>
<td width="88">KE</td>
<td width="221">Ganesh Kunj CHS</td>
<td>33-10</td>
<td width="289">Shri Harish Shah</td>
<td width="289">M/s. Apraulic Construction</td>
<td>07-01-02</td>
<td>Private</td>
<td>65</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">307</td>
<td width="88">KE</td>
<td width="221">Heerabai complex SRA CHS Ltd. (Proposed)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Ziyauddin M Shaikh</td>
<td width="289">M/s. Patel Raj Developer</td>
<td>08-01-02</td>
<td>Private</td>
<td>75</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">308</td>
<td width="88">KE</td>
<td width="221">Navdurga SRA CHS Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">M/s. Winsway Infrastructure Pvt. Ltd.</td>
<td>08-01-02</td>
<td>Private</td>
<td>100</td>
<td>16</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">309</td>
<td width="88">PS</td>
<td width="221">Iraniwadi S.R.A C.H.S. Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. Ellora Project Consultants Pvt. Ltd.,</td>
<td width="289">M/s. Lucky Developers,</td>
<td width="124">08-01-02</td>
<td width="109">PVT </td>
<td width="92">518</td>
<td width="92">52</td>
<td width="92">0</td>
<td width="92">169</td>
<td width="92">not</td>
<td width="92">No</td>
<td width="92">no</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">310</td>
<td>L</td>
<td width="221">C.T.S. No. 455, 455/1-17, 456, 456/1 to 20 Kurla Chunnabhatti  for Anandi Shobha CHS</td>
<td>33-10</td>
<td width="289">Shri. V. M. Salgaonkar</td>
<td width="289">M/s V. V. Enterprises</td>
<td>09-01-02</td>
<td>Private</td>
<td>42</td>
<td>11</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">311</td>
<td width="88">RC</td>
<td width="221">Sai Baba Nagar</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td style="font-weight: 400;" width="289">M/s. Manali Developers</td>
<td>09-01-02</td>
<td width="109">STGOVT</td>
<td>626</td>
<td width="92">124</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">312</td>
<td width="88">HE</td>
<td width="221">Shraddha View SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Phulkar Kangutkar</td>
<td width="289">M/s. A. R. Builder & Developer</td>
<td width="124">15-01-02</td>
<td width="109">PVT</td>
<td width="92">14</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">313</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">SUBHASH CHANDRA BOSE CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M.R. Shendye  Associates</td>
<td style="font-weight: 400;" width="289">Pushpa Construction Co.</td>
<td>17-01-02</td>
<td width="109">MCGM</td>
<td width="92">139</td>
<td width="92">0</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">314</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Lokseva CHS GN</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deva Consultants</td>
<td style="font-weight: 400;" width="289">Sai Pushpa Construction</td>
<td>18-01-02</td>
<td width="109">MCGM</td>
<td width="92">62</td>
<td width="92">0</td>
<td width="92">30</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">315</td>
<td width="88">HE</td>
<td width="221">Akash Ekta CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/S M.K. Rao  Associates</td>
<td width="289">M/s. Vaidehi Akash Housing PVT Ltd</td>
<td width="124">18-01-02</td>
<td width="109">PVT</td>
<td width="92">47</td>
<td width="92">24</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">316</td>
<td width="88">HE</td>
<td width="221">Adarsh CHS (Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">21-01-02</td>
<td width="109">PVT</td>
<td width="92">37</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">317</td>
<td width="88">KW</td>
<td width="221">33(14)D</td>
<td width="81">33-14</td>
<td width="289">ADAM AIR ARCHITECT (K. ZAMAN)</td>
<td width="289">H. S. Developers</td>
<td width="124">23-01-02</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">8</td>
<td width="92">yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">318</td>
<td width="88">GS</td>
<td width="221">Barkat CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Veturkar    Associates</td>
<td width="289"> M/s. Richa Realtors</td>
<td width="124">31-01-02</td>
<td width="109">MCGM</td>
<td width="92">64</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">319</td>
<td width="88">N</td>
<td width="221">Shiv Krupa CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mukesh N. Shah</td>
<td style="font-weight: 400;" width="289">M/s. Neelyog Construction Pvt. Ltd</td>
<td width="124">08-02-02</td>
<td width="109">MHADA</td>
<td width="92">147</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">320</td>
<td width="88">PS</td>
<td width="221">Goregaon Subhash Nagar  CHS (Ltd.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td style="font-weight: 400;" width="289">Rushabh Real Estate Developer Pvt Ltd</td>
<td width="124">13-02-02</td>
<td width="109">MHADA</td>
<td>194</td>
<td>106</td>
<td>0</td>
<td>0</td>
<td>not constructed</td>
<td width="92">No</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">321</td>
<td width="88">PS</td>
<td width="221">Goregaon Hanuman Nagar Shiv Shakti CHS Ltd.</td>
<td width="81">33-10</td>
<td width="289"> Shri Mukesh Bahadur Of Consultants Combined,</td>
<td width="289">Conforce Engineer and Contractors</td>
<td width="124">13-02-02</td>
<td width="109">MHL</td>
<td width="92">112</td>
<td width="92">0</td>
<td width="92">8</td>
<td width="92">0</td>
<td>Constructed</td>
<td width="92">Part O.C.C. granted</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">322</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Milind Nagar A CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Prakash Sankpal Architects</td>
<td width="289">PRATHAMESH CONSTRUCTION COMPANY</td>
<td>16-02-02</td>
<td width="109">MCGM</td>
<td width="92">58</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">323</td>
<td width="88">MW</td>
<td width="221">Shree Sai Shraddha CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. P.S. Chamankar & Associates</td>
<td style="font-weight: 400;" width="289">M/s.  Unity Land Consultancy</td>
<td width="124">17-02-02</td>
<td width="109">STGOVT</td>
<td width="92">239</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">324</td>
<td width="88">FN</td>
<td width="221">Om Shiv Shakti CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Priyali Builders  Developers</td>
<td width="124">18-02-02</td>
<td width="109">MCGM</td>
<td width="92">324</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">325</td>
<td width="88">KW</td>
<td width="221">Azad Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td style="font-weight: 400;" width="289">Lakshkaria Construction Pvt. Ltd</td>
<td width="124">22-02-02</td>
<td width="109">Private</td>
<td>93</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">326</td>
<td>L</td>
<td width="221">Ali Bilal Siddi S.R.A. CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mahale  &  Associates</td>
<td style="font-weight: 400;" width="289">M/s Bharat Mahan Developers</td>
<td>08-03-02</td>
<td>Private</td>
<td>200</td>
<td>36</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>2</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">327</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Bharat Janta CHS</td>
<td width="81">33-10</td>
<td width="289">Vistaar Architects and planners</td>
<td style="font-weight: 400;" width="289">SPARC.</td>
<td>14-03-02</td>
<td width="109">MCGM</td>
<td width="92">147</td>
<td width="92">0</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">328</td>
<td width="88">KE</td>
<td width="221">OM SAI CHS(Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">PUSHKAR B. S</td>
<td width="289">Sachin Corporation</td>
<td>20-03-02</td>
<td>Private</td>
<td>34</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">329</td>
<td width="88">ME</td>
<td width="221">3.11 Scheme (Runwal Constrcution)</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">Shri. Sunil Ambre of M/s. Bhatnagar Ambre Kothari</td>
<td style="font-weight: 400;" width="289">M/s. Runwal Construction</td>
<td width="124">20-03-02</td>
<td width="109">PVT</td>
<td width="92">0</td>
<td width="92">485</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">485</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">330</td>
<td>FS</td>
<td width="221">Abhilasha Shramik CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td style="font-weight: 400;" width="289">M/s Omega Investment & Properties Pvt. Ltd.</td>
<td>01-04-02</td>
<td>Private</td>
<td width="92">234</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">331</td>
<td>S</td>
<td width="221">Chandra Nagar SRA CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S Mahendra G.Davda</td>
<td width="289">Chandra Nagar CHS Ltd</td>
<td>10-04-02</td>
<td width="109">STGOVT</td>
<td>116</td>
<td>34</td>
<td width="92">8</td>
<td>0</td>
<td width="92">Partly</td>
<td>Partly</td>
<td>No</td>
<td>0</td>
<td>21</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">332</td>
<td width="88">N</td>
<td width="221">V.M.K. SRA CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Daisaria Associates</td>
<td width="289">Rani  Company</td>
<td width="124">06-05-02</td>
<td width="109">Private</td>
<td width="92">59</td>
<td width="92">0</td>
<td width="92">13</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">333</td>
<td width="88">KW</td>
<td width="221">Baptista CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">M/s. KIRAN HEMANI</td>
<td width="124">16-05-02</td>
<td width="109">Private</td>
<td width="92">11</td>
<td width="92">6</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">334</td>
<td width="88">N</td>
<td width="221">Devi Krupa CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mukesh N. Shah</td>
<td style="font-weight: 400;" width="289">M/s. Neelyog Construction Pvt. Ltd</td>
<td width="124">20-05-02</td>
<td width="109">Private</td>
<td width="92">257</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">335</td>
<td width="88">PN</td>
<td width="221">Sukhatankar Wadi</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. C. Subhash & Associates.</td>
<td style="font-weight: 400;" width="289">M/s. Royal Builder</td>
<td width="124">23-05-02</td>
<td width="109">Private</td>
<td width="92">225</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">336</td>
<td width="88">HE</td>
<td width="221">Tarun Bharat CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Consultants Combined</td>
<td width="289">M/S .A.J.Khatri</td>
<td width="124">12-06-02</td>
<td width="109">MHADA</td>
<td width="92">49</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">337</td>
<td>S</td>
<td width="221">Powai Lake CHS Ltd. (33(14)D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td style="font-weight: 400;" width="289">M/s. Sai Lee Developers</td>
<td>12-06-02</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>481</td>
<td width="92">Under construction</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">338</td>
<td>T</td>
<td width="221">Aniket CHS. LTD. Shri Krishna PatilWadi CHS. Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Vijay Turbadkar</td>
<td width="289">M/s Ameya Housing Development Corporation</td>
<td>13-06-02</td>
<td>Private</td>
<td>60</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">339</td>
<td width="88">N</td>
<td width="221">Ghatkopar Sahyadri Nagar CHS LTd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">Vital Developers Pvt. Ltd.</td>
<td width="124">17-06-02</td>
<td width="109">MHADA</td>
<td width="92">110</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">340</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">MAHARANA PRATAP NAGAR chs</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deva Consultants</td>
<td style="font-weight: 400;" width="289">Sai Pushpa Construction</td>
<td>18-06-02</td>
<td width="109">MCGM</td>
<td width="92">45</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92"> No</td>
<td width="92"> No</td>
<td width="92"> No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">341</td>
<td>L</td>
<td width="221">Baitulnoor SRA (CHS) Ltd</td>
<td>33-10</td>
<td width="289">Ajay Shukla & Associates</td>
<td style="font-weight: 400;" width="289">M/s. United Developer</td>
<td>21-06-02</td>
<td>Private</td>
<td>53</td>
<td>14</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>14</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">342</td>
<td width="88">N</td>
<td width="221">Nalanda Coop. Hsg.Soc..Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Hemant Parikh  Associates</td>
<td width="289"> M/s  Everest Fincap Pvt.Ltd.</td>
<td width="124">06-07-02</td>
<td width="109">MCGM</td>
<td width="92">371</td>
<td width="92">0</td>
<td width="92">49</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">343</td>
<td width="88">RS</td>
<td width="221">Sambhaji Nagar CHS. Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. Samarth Associates</td>
<td width="289">M/s. Nischit Associates.</td>
<td width="124">09-07-02</td>
<td width="109">STGOVT,MCGM</td>
<td width="92">214</td>
<td width="92">60</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">6</td>
</tr>
<tr>
<td width="64">344</td>
<td>T</td>
<td width="221">Shiv Krupa CHS</td>
<td>33-10</td>
<td width="289">M/s D.S Desai  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Guru Construction</td>
<td>11-07-02</td>
<td>MCGM</td>
<td>32</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">345</td>
<td width="88">HE</td>
<td width="221">Navpada Rahiwasi CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td style="font-weight: 400;" width="289">M/s. M.K. Builders</td>
<td width="124">19-07-02</td>
<td width="109">STGOVT</td>
<td width="92">133</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">346</td>
<td width="88">N</td>
<td width="221">Devpooja SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">M/s Jayesh Builders</td>
<td width="124">23-07-02</td>
<td width="109">MCGM</td>
<td width="92">106</td>
<td width="92">33</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">33</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">347</td>
<td width="88">N</td>
<td width="221">Dev Pooja CHS                                        </td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">M/s Jayesh Builders</td>
<td width="124">23-07-02</td>
<td width="109">M/L</td>
<td width="92">106</td>
<td width="92">33</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">33</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">348</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Uday CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Abdullah Siddiqui of M/s. Space Design Consult</td>
<td style="font-weight: 400;" width="289">M/s. United Developer</td>
<td>30-07-02</td>
<td width="109">MCGM</td>
<td width="92">109</td>
<td width="92">0</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">349</td>
<td width="88">HE</td>
<td width="221">Bandra Ahinsa Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">S. G. Nemivant</td>
<td width="289">M/s Sushanku Builders Ltd</td>
<td width="124">30-07-02</td>
<td width="109">MHADA</td>
<td width="92">217</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">350</td>
<td width="88">KW</td>
<td width="221">JUHU TAJ CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td style="font-weight: 400;" width="289">M/s. Kunal Builders</td>
<td width="124">30-07-02</td>
<td width="109">MHADA,MCGM</td>
<td width="92">193</td>
<td width="92"> </td>
<td width="92">42</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">351</td>
<td>L</td>
<td width="221">Kurla Nehrunagar Angulimala Coop. Hsg. Society Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deva Consultants</td>
<td style="font-weight: 400;" width="289">Baba Homes Builders & Developers</td>
<td>02-08-02</td>
<td>MHADA</td>
<td>235</td>
<td>0</td>
<td>15</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">352</td>
<td>L</td>
<td width="221">Mata Mahalaxmi SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Shri Vilas G. Bagul M/s. Neocon infrastructure ser</td>
<td style="font-weight: 400;" width="289">M/s. Vastu Developer  Heeral</td>
<td>06-08-02</td>
<td>Private</td>
<td>62</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">353</td>
<td>T</td>
<td width="221">Punabai CHS. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Vijay Turbadkar</td>
<td style="font-weight: 400;" width="289">M/s Aruna Construction</td>
<td>12-08-02</td>
<td>Private</td>
<td>28</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">354</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Netrawala Compound 3.11</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">Shri. Mahesh Mehta</td>
<td width="289">M/s. Mukon Constructions Pvt. Ltd.</td>
<td>16-08-02</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">430</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">355</td>
<td width="88">KE</td>
<td width="221">OM VRINDAVAN SRA CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Shekar Arolkar  Asociates</td>
<td width="289">Elegant Builder And Developer</td>
<td>22-08-02</td>
<td>Private</td>
<td>130</td>
<td>2</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">356</td>
<td width="88">HE</td>
<td width="221">Siddharth Nagar CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Intact Design</td>
<td width="289">M/s. Cosmos Enterprises Builder  Engineer</td>
<td width="124">07-09-02</td>
<td width="109">PVT</td>
<td width="92">52</td>
<td width="92">0</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">357</td>
<td width="88">RC</td>
<td width="221">Om Sai Vajesjwari Gajanan CHS</td>
<td width="81">33 (10)</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td style="font-weight: 400;" width="289">M/s. Sai Lee Developers</td>
<td width="124">09-09-02</td>
<td width="109">MCGM</td>
<td width="92">118</td>
<td width="92">92</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">358</td>
<td width="88">HE</td>
<td width="221">Indira Gandhi Rahivashi Sangh CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">Housing Development  Imp. India Pvt. Ltd. HDIL</td>
<td width="124">23-09-02</td>
<td width="109">MHADA</td>
<td width="92">356</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">359</td>
<td>HW</td>
<td width="221">Kushinara SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Clifford D’silva Architect</td>
<td width="289">Samir Bhojwani</td>
<td>07-10-02</td>
<td>STGOVT</td>
<td>68</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">360</td>
<td width="88">N</td>
<td width="221">Shree Sai Janta SRA CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant</td>
<td style="font-weight: 400;" width="289">M/s. Skylark Build.</td>
<td width="124">19-10-02</td>
<td width="109">MCGM</td>
<td width="92">236</td>
<td width="92">110</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">110</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">361</td>
<td width="88">N</td>
<td width="221"> Shri Sai Janta CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant</td>
<td style="font-weight: 400;" width="289">M/s. Skylark Build.</td>
<td width="124">19-10-02</td>
<td width="109">M/L</td>
<td width="92">236</td>
<td width="92">110</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">110</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">362</td>
<td>GN</td>
<td width="221">Sairam SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td style="font-weight: 400;" width="289">M/s. Shraddha Enterprises</td>
<td>25-10-02</td>
<td>MCGM</td>
<td width="92">29</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">363</td>
<td width="88">N</td>
<td width="221">New Janta Co Op. Hsg. Soc. Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M.R. Shendye  Associates</td>
<td style="font-weight: 400;" width="289">M/s. S. Savla Constructions</td>
<td width="124">30-10-02</td>
<td width="109">MCGM</td>
<td width="92">87</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">364</td>
<td>T</td>
<td width="221">Sunita SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">ChandrakantGorule</td>
<td width="289">Delight Construction</td>
<td>30-10-02</td>
<td>Private</td>
<td>49</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">365</td>
<td>HW</td>
<td width="221">Jari Mari SRA CHS Ltd.</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">Shri Jayshing Shinde</td>
<td width="289">M/s. Suchita Developers</td>
<td>30-10-02</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>17</td>
<td>No</td>
<td width="92">No</td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td> </td>
</tr>
<tr>
<td width="64">366</td>
<td width="88">N</td>
<td width="221">CTS No. 5720(Pt.) F.P. No. 252 of TPS –III ofNew Janta CHS. </td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M.R. Shendye  Associates</td>
<td style="font-weight: 400;" width="289">M/s. S. Savla Constructions</td>
<td width="124">30-10-02</td>
<td width="109">MCGM</td>
<td width="92">87</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">367</td>
<td width="88">KE</td>
<td width="221">New Hari Om SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Hari Om Builders  Developer</td>
<td>02-11-02</td>
<td>Private</td>
<td>335</td>
<td>15</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">368</td>
<td width="88">KE</td>
<td width="221">Amogh CHS ltd.</td>
<td>33-10</td>
<td width="289">M/s Neo Mordern  Arch</td>
<td width="289">M/s. Rushabh Developers</td>
<td>13-11-02</td>
<td>Private</td>
<td>19</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">369</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Samata B CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Sharad Shiledar and Asso.Pvt. Ltd</td>
<td width="289">M/s Neeta Builders</td>
<td>18-11-02</td>
<td width="109">MCGM</td>
<td width="92">109</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">370</td>
<td width="88">ME</td>
<td width="221">3.11</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">S.V. Thakker   Associates</td>
<td style="font-weight: 400;" width="289">ROCKLINE PROPERTIES  DEVELOPERS PVT LTD</td>
<td width="124">20-11-02</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">1932</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">1932</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">371</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">ANAND CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">PravinNaik Associates</td>
<td style="font-weight: 400;" width="289">Forward Construction corp</td>
<td>28-11-02</td>
<td width="109">MCGM</td>
<td width="92">236</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">372</td>
<td width="88">KE</td>
<td width="221">BAL GOVIND NAGAR RAHIVASHI SANGH</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.Rajashree Accord</td>
<td width="289">M/s Accord land Developer Pvt.ltd.2</td>
<td>28-11-02</td>
<td>Private</td>
<td>708</td>
<td>19</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>19</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">373</td>
<td>S</td>
<td width="221">Shree Krishna Bhuvan</td>
<td>33-10</td>
<td width="289">Manohar M. Kaple.</td>
<td width="289">Shree Krishna Bhuvan Inns  Resorts pvt. Ltd.</td>
<td>10-12-02</td>
<td width="109">Private</td>
<td>74</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">374</td>
<td width="88">HE</td>
<td width="221">Vrindavan(Shreeram ) SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">11-12-02</td>
<td width="109">PVT</td>
<td width="92">70</td>
<td width="92">0</td>
<td width="92">29</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">375</td>
<td width="88">PN</td>
<td width="221">Velentine Niwara CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">M/s. Velentine Properties Pvt. Ltd.</td>
<td width="124">19-12-02</td>
<td width="109">Private</td>
<td width="92">152</td>
<td width="92">4</td>
<td width="92">0</td>
<td width="92">15</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">15</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">376</td>
<td width="88">GS</td>
<td width="221">Ganesh Nagar ‘D’ (SRA) Co. Op. Hsg. Society Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri. R. M. Warrier</td>
<td width="289">Self Development Scheme with help of NGO</td>
<td width="124">02-01-03</td>
<td width="109">MCGM</td>
<td width="92">390</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">377</td>
<td>RN</td>
<td width="221">JAI GANESH CHS</td>
<td>33-10</td>
<td width="289">Suhas M. Borole</td>
<td style="font-weight: 400;" width="289">M/s. Pragati Developers</td>
<td>02-01-03</td>
<td>Private</td>
<td width="92">46</td>
<td width="92">0</td>
<td width="92">54</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">378</td>
<td>RN</td>
<td width="221">Dahisar (W) S.R. SCHEME(3.11)</td>
<td>3.11</td>
<td width="289">Shri.  Amit Pawar</td>
<td style="font-weight: 400;" width="289">M/s. Sai Construction</td>
<td>15-01-03</td>
<td>Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">450</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">Yes</td>
<td width="92">450</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">379</td>
<td width="88">PN</td>
<td width="221">Yamunabai Pada</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Rasik P. Hingoo Associates</td>
<td width="289">M/s. Pramukh Enterprises  Dev</td>
<td width="124">23-01-03</td>
<td width="109">Private</td>
<td width="92">240</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">380</td>
<td width="88">ME</td>
<td width="221">3.11</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">S.V. Thakker   Associates</td>
<td width="289">M/s.Runwal</td>
<td width="124">27-01-03</td>
<td width="109">MMRDA</td>
<td width="92">0</td>
<td width="92">1677</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">1677</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">381</td>
<td width="88">KE</td>
<td width="221">Sai Magan SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">SHRI.MAHENDRA PANCHAL OF M/S.MAHENDRA N.ASSOCIATES</td>
<td width="289">M/s. A. Surti Developers</td>
<td>07-02-03</td>
<td>Private</td>
<td>257</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">382</td>
<td>RN</td>
<td width="221">OM SHIV MATOSHRI CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">SUNIL CONSTRUCTION</td>
<td>10-02-03</td>
<td>MCGM</td>
<td width="92">122</td>
<td width="92">49</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">383</td>
<td>T</td>
<td width="221">Nandanvan Jai Salphadevi chs. Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Aakar Associates-Santacruz(W)</td>
<td width="289">M/s Sahyadri Developers</td>
<td>10-02-03</td>
<td>Private </td>
<td>125</td>
<td>0</td>
<td>77</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">384</td>
<td>KW</td>
<td width="221">Shree Sai-Leela SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Sankalp Developer & Consultants</td>
<td>20-02-03</td>
<td>MHADA</td>
<td> </td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td>NO</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td width="92"> </td>
</tr>
<tr>
<td width="64">385</td>
<td width="88">N</td>
<td width="221">GAURABAI CHS (prop)</td>
<td width="81">33-10</td>
<td width="289">Shri .K.K. Shah</td>
<td width="289">M/s. Shanti Relaters</td>
<td width="124">25-02-03</td>
<td width="109">Private</td>
<td width="92">44</td>
<td width="92">0</td>
<td width="92">77</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">386</td>
<td width="88">KW</td>
<td width="221">Shreeram Wadi Gandhi Nagar C.H.S. Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Joshi  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Giriraj Enterprises</td>
<td width="124">28-02-03</td>
<td width="109">STGOVT</td>
<td width="92">271</td>
<td width="92"> </td>
<td width="92">32</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">387</td>
<td width="88">GS</td>
<td width="221">Dighe Nagar CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Rajendra pagnis</td>
<td width="289">SHIV SAI CONSTRUCTIONS</td>
<td width="124">11-03-03</td>
<td width="109">MCGM</td>
<td width="92">117</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">388</td>
<td width="88">KW</td>
<td width="221">God Gift (S.R.A.) Co-op Hsg Soc Ltd</td>
<td width="81">33-10</td>
<td width="289">C. Subhash & Asociates</td>
<td width="289">M/s. Smaran Developers Pvt Ltd</td>
<td width="124">21-03-03</td>
<td width="109">Private</td>
<td width="92">46</td>
<td width="92">0</td>
<td width="92">8</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">389</td>
<td width="88">KW</td>
<td width="221">Fakirabad SRA CHS (prop). & other 3 CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">Reliance Comstruction Company</td>
<td width="124">23-03-03</td>
<td width="109">STGOVT</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">390</td>
<td width="88">ME</td>
<td width="221">3.11</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">Smt. S.V. Thakkar  Associates</td>
<td width="289">Videocon Atithi Shelters Pvt.Ltd.</td>
<td width="124">08-04-03</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">4034</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">4034</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">391</td>
<td width="88">N</td>
<td width="221">Ghatkopar Sangam CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Hemant Bhavsar</td>
<td width="289">M/s. Diwali Hsg.  Construction Pvt. Ltd</td>
<td width="124">10-04-03</td>
<td width="109">Private</td>
<td width="92">113</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">392</td>
<td>HW</td>
<td width="221">Khotwadi Bhimwada Zopadatti Punarvikas  Samittee  CHS LTD.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td style="font-weight: 400;" width="289">M/s. Chouhan Builders India housing development Pv</td>
<td>21-04-03</td>
<td>MCGM</td>
<td>893</td>
<td>0</td>
<td>1274</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">393</td>
<td width="88">HE</td>
<td width="221">Manuel Rodrigues SRA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">03-05-03</td>
<td width="109">PVT</td>
<td width="92">34</td>
<td width="92">0</td>
<td width="92">7</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">394</td>
<td width="88">KE</td>
<td width="221">Veer Hanuman SRA CHS. Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. P.S. Chamankar & Associates</td>
<td style="font-weight: 400;" width="289">M/s.  MCA Constructions</td>
<td>12-05-03</td>
<td>MHADA</td>
<td>202</td>
<td>38</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">395</td>
<td width="88">KE</td>
<td width="221">Shanti Nagar Rahivashi Sangh Grihanirman Sanstha Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Vasundhara Developers</td>
<td>20-05-03</td>
<td>Private</td>
<td>723</td>
<td>4</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">396</td>
<td width="88">GS</td>
<td width="221">Seaface co operaive housing society (proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chandrashekhar Architect</td>
<td style="font-weight: 400;" width="289">M/s. Prithvi CorporationHarsiddhi</td>
<td width="124">22-05-03</td>
<td width="109">MCGM</td>
<td width="92">37</td>
<td width="92">0</td>
<td width="92">18</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">397</td>
<td width="88">GS</td>
<td width="221">Worli Sea Face CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chandrashekhar Architect</td>
<td style="font-weight: 400;" width="289">M/s. Prithvi CorporationHarsiddhi</td>
<td width="124">22-05-03</td>
<td width="109">MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">398</td>
<td width="88">HE</td>
<td width="221">RAMAN CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">ChandrakantGorule</td>
<td width="289">M/S .ASHO DEVELOPERS</td>
<td width="124">27-05-03</td>
<td width="109">PVT</td>
<td width="92">17</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">399</td>
<td width="88">MW</td>
<td width="221">Sanjivani SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sadashiv Nargundkar  Associates</td>
<td width="289">M/s. Sati Builders  Developers Ltd</td>
<td width="124">12-06-03</td>
<td width="109">MCGM</td>
<td width="92">91</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">400</td>
<td width="88">KW</td>
<td width="221">Andheri Tep-Village Trishul Co-Operative</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. S.V.Chemburkar</td>
<td style="font-weight: 400;" width="289">M/s. Truly Creative Developer</td>
<td width="124">24-06-03</td>
<td width="109">Private</td>
<td width="92">95</td>
<td width="92">8</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">401</td>
<td width="88">RS</td>
<td width="221">Ganesh Krupa CHS Ltd (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.John R Dantas</td>
<td style="font-weight: 400;" width="289">M/s. Giriraj Enterprises</td>
<td width="124">24-06-03</td>
<td width="109">Private</td>
<td width="92">47</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">402</td>
<td>HW</td>
<td width="221">Khar Hanuman Nagar Seaface CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Clifford D’silva Architect</td>
<td width="289">M/s. United Estates</td>
<td>25-06-03</td>
<td>MHADA</td>
<td>147</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">403</td>
<td>RN</td>
<td width="221">NEETA CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">VASTU BUILDERS DEVELOPERS</td>
<td>03-07-03</td>
<td>Private</td>
<td width="92">43</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">404</td>
<td>L</td>
<td width="221">Scheme (Chandivali)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri.John R Dantas</td>
<td width="289">M/s. Sumer Corporation</td>
<td>07-07-03</td>
<td>Private</td>
<td>420</td>
<td>457</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>12</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">405</td>
<td width="88">RS</td>
<td width="221">Shram Safalya CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Nathala B. Developers</td>
<td width="289">M/s. Atul Projects India Ltd</td>
<td width="124">19-07-03</td>
<td width="109">Private</td>
<td width="92">131</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">406</td>
<td width="88">PS</td>
<td width="221">Gaondevi Utkarsh Mandal CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Chouhan Builders India housing development Pv</td>
<td width="124">25-07-03</td>
<td width="109">Private,MCGM</td>
<td>89</td>
<td>0</td>
<td>14</td>
<td>0</td>
<td>Constructed</td>
<td width="92">No</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">407</td>
<td width="88">N</td>
<td width="221">SOHEL SALEHMOHAMMED CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. BHUPENDRA PATRAWALA</td>
<td style="font-weight: 400;" width="289">M/s. Sai Corporation</td>
<td width="124">01-08-03</td>
<td width="109">Private</td>
<td width="92">70</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">408</td>
<td width="88">HE</td>
<td width="221">Jai Shiv Sai SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHDUR</td>
<td width="289">M/s. G.M. Constructions</td>
<td width="124">02-08-03</td>
<td width="109">STGOVT</td>
<td width="92">487</td>
<td width="92">0</td>
<td width="92">82</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">409</td>
<td width="88">ME</td>
<td width="221">3.11 Scheme (Dinshaw Trapnix Builders)</td>
<td width="81">3-11</td>
<td width="289">Shri. S.S. Shide of M/s. Bidco Engineering Division </td>
<td width="289">M/s. Dinshaw Trapinex Builders Pvt. Ltd.</td>
<td>02-08-03</td>
<td width="109">PVT</td>
<td width="92">0</td>
<td width="92">3326</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">3326</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">410</td>
<td width="88">HE</td>
<td width="221">Siddheshwar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">M/s. Intech India  Developers</td>
<td width="124">19-08-03</td>
<td width="109">PVT</td>
<td width="92">163</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">411</td>
<td>GN</td>
<td width="221">Ram Shyam Kripa SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289">M/s. ChaitanyaDevelopersCynthiandra</td>
<td>30-08-03</td>
<td>MCGM</td>
<td width="92">436</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">412</td>
<td width="88">KW</td>
<td width="221">Mumbai Tenants Welfare Society</td>
<td width="81">33-10</td>
<td width="289">M/s. P.S.SHINGRE & ASSOCIATES Paramount</td>
<td width="289">M/s. HUDA DEVELOPER</td>
<td width="124">12-09-03</td>
<td width="109">Private</td>
<td>20</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">413</td>
<td width="88">ME</td>
<td width="221">3.11 Schme (Vikas Construction)</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">Shri. Sunil Ambre of M/s. Bhatnagar Ambre Kothari</td>
<td style="font-weight: 400;" width="289">M/s. Runwal Construction</td>
<td width="124">04-10-03</td>
<td width="109">PVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">600</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">414</td>
<td width="88">ME</td>
<td width="221">3.11</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td width="289">Suraksha Realtors</td>
<td width="124">16-10-03</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">384</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">384</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">415</td>
<td>HW</td>
<td width="221">Pali Residency SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Arch-V-Shan Creations</td>
<td width="289">M/s. Star Light Hospitality PVT. Ltd. Add</td>
<td>17-10-03</td>
<td>Private</td>
<td>77</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">416</td>
<td width="88">RS</td>
<td width="221">Krishna Nayan CHS Ltd. & Jai Ambe CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Tandel  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Neelyog Construction Pvt. Ltd</td>
<td width="124">21-10-03</td>
<td width="109">Private,STGOVT,MHADA</td>
<td width="92">168</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">417</td>
<td>S</td>
<td width="221">Shiv Shakti  SRA chs</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Ashish Solanki</td>
<td width="289">M/s. Bhavani Construction Co</td>
<td>22-10-03</td>
<td width="109">Private</td>
<td>31</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">418</td>
<td width="88">KW</td>
<td width="221">Andheri Tap Village Kaveri CHS LTD Hsg</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td width="289">Grace Estate Builders</td>
<td width="124">23-10-03</td>
<td width="109">MCGM</td>
<td width="92">22</td>
<td width="92"> </td>
<td width="92">22</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">419</td>
<td width="88">KW</td>
<td width="221">Shakti Nagar</td>
<td width="81">33-10</td>
<td width="289">VEENA SHENVI UNITECH CONSULTANTS</td>
<td width="289">THE ZOROASTRIAN RADIH SOCIETY</td>
<td width="124">24-10-03</td>
<td width="109">Private</td>
<td>76</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">420</td>
<td>L</td>
<td width="221">Ganga Niwas SRA CHS</td>
<td>33-10</td>
<td width="289">Shri. S.R. Karnik</td>
<td style="font-weight: 400;" width="289"> M. K. Shelters</td>
<td>27-10-03</td>
<td>Private</td>
<td>26</td>
<td>13</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>13</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">421</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Golden Sunrise  SRA CHS. Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Ketan Vaidya Associates</td>
<td style="font-weight: 400;" width="289"> M. K. Shelters</td>
<td>28-10-03</td>
<td width="109">Private</td>
<td width="92">151</td>
<td width="92">0</td>
<td width="92">87</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">OCC granted for 39 PAP</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">422</td>
<td>L</td>
<td width="221">Shahin SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Dalvi  Assocites</td>
<td width="289">Shahin SRA CHS</td>
<td>04-11-03</td>
<td>MHADA</td>
<td>27</td>
<td>2</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">423</td>
<td width="88">KE</td>
<td width="221">Adarsh Meghawadi Niwara CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">M/s BEST CFE Pvt. Ltd</td>
<td>04-12-03</td>
<td>MHADA</td>
<td>200</td>
<td>170</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">424</td>
<td width="88">KW</td>
<td width="221">Gaondevi CHS. Ltd. & Ujala Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Perfect Construction</td>
<td width="124">04-12-03</td>
<td width="109">MCGM</td>
<td>256</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">425</td>
<td>T</td>
<td width="221">Salphdevi Sadan CHS.(Proposed)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Nilesh D. Sawant</td>
<td width="289">M/s Sai Construction</td>
<td>09-12-03</td>
<td>STGOVT</td>
<td>152</td>
<td>8</td>
<td>52</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">426</td>
<td width="88">PS</td>
<td width="221">Tatya Tope Nagar CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s Rasik P. Hingoo Associates</td>
<td width="289">M/s. Urja Holding Pvt. Ltd.</td>
<td width="124">09-12-03</td>
<td width="109">Private</td>
<td>196</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">427</td>
<td width="88">MW</td>
<td width="221">Rajgad Sahakari Gruhanirman Sansatha (Regd)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td width="289">M/s. Premier Infotech Pvt Ltd</td>
<td width="124">10-12-03</td>
<td width="109">STGOVT</td>
<td width="92">78</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">428</td>
<td>RN</td>
<td width="221">S.R. scheme under 3.11 clause</td>
<td>3-11</td>
<td style="font-weight: 400;" width="289">Mr. Rajendra Ahir.</td>
<td width="289">M/s. Vishnu Enterprise</td>
<td>11-12-03</td>
<td>Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">462</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">462</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">429</td>
<td width="88">N</td>
<td width="221">Perin SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Jayshing Shinde</td>
<td style="font-weight: 400;" width="289">M/s Atlantic Constructions</td>
<td width="124">12-01-04</td>
<td width="109">Private</td>
<td width="92">54</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">430</td>
<td width="88">N</td>
<td width="221">Shree Sai Shakti (SRA) CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Hemant Parikh  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Shree Sai Enterprises</td>
<td width="124">15-01-04</td>
<td width="109">MCGM</td>
<td width="92">119</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">431</td>
<td width="88">N</td>
<td width="221">F.P. No. 273A, TPS III, for shree sai Shakti CHS (Prop.)  N/MCGM/0010/2001023</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Hemant Parikh  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Shree Sai Enterprises</td>
<td width="124">15-01-04</td>
<td width="109">MCGM</td>
<td width="92">119</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">432</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Shree Siddhi vinayak CHS</td>
<td width="81">33-10</td>
<td width="289">D.S. Desai & Associates</td>
<td width="289">Guru Construction</td>
<td width="124">17-01-04</td>
<td width="109">MCGM</td>
<td width="92">147</td>
<td width="92">0</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">433</td>
<td width="88">HE</td>
<td width="221">Motilal Nehru Nagar CHS.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">Housing Development  Imp. India Pvt. Ltd. HDIL</td>
<td width="124">23-01-04</td>
<td width="109">MHADA</td>
<td width="92">765</td>
<td width="92">576</td>
<td width="92">119</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">576</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">434</td>
<td>S</td>
<td width="221">Santoshi niwas Chs</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s V.V  Associates</td>
<td width="289">M/s Bhagywati Enterprises</td>
<td>10-02-04</td>
<td width="109">Private</td>
<td>27</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">435</td>
<td width="88">PN</td>
<td width="221">Tekadi Chawl CHS Prop</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s.Mauli Holliday Resort developers pvt.ltd.</td>
<td width="124">11-02-04</td>
<td width="109">Private</td>
<td width="92">42</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">436</td>
<td width="88">RC</td>
<td width="221">Torna SRA CHS</td>
<td width="81">33 (10)</td>
<td style="font-weight: 400;" width="289">Shri. S.V.Chemburkar</td>
<td style="font-weight: 400;" width="289">M/s. Truly Creative Developer</td>
<td width="124">17-02-04</td>
<td width="109">Pvt.</td>
<td width="92">141</td>
<td width="92">50</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">437</td>
<td>S</td>
<td width="221">Vikhroli Shivai SRA chs</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Sachin Jadhav</td>
<td width="289">M/s Jay Ambe Developers</td>
<td>25-02-04</td>
<td width="109">Private</td>
<td>106</td>
<td>0</td>
<td>26</td>
<td>0</td>
<td width="92">Under construction</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">438</td>
<td>T</td>
<td width="221">Shree Ekvira CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Nilesh D. Sawant</td>
<td width="289">Shree Sateri Developers</td>
<td>25-02-04</td>
<td>Private</td>
<td>22</td>
<td>7</td>
<td>7</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">439</td>
<td width="88">PS</td>
<td width="221">Mithanagar Dr. Babasaheb Ambedkar Nagar SRA CHS Ltd, Goregaon Mithanagar Samata CHS Ltd, Mithanagar Goregaon Gausiya SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">M/s. K. Arch</td>
<td width="289">M/s. Goodbuild (India) Pvt. Ltd</td>
<td width="124">27-02-04</td>
<td width="109">MCGM</td>
<td>309</td>
<td>41</td>
<td>0</td>
<td>0</td>
<td>yes</td>
<td width="92">yes</td>
<td width="92">no</td>
<td>0</td>
<td>38</td>
<td>0</td>
<td>0</td>
<td>3</td>
</tr>
<tr>
<td width="64">440</td>
<td>HW</td>
<td width="221">Shree Shiv Sainath SRA C.H.S. Ltd</td>
<td>33-10</td>
<td width="289">M/s Griha Rachana</td>
<td style="font-weight: 400;" width="289">Shrreeya Developerss</td>
<td>11-03-04</td>
<td>MCGM</td>
<td>121</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">441</td>
<td width="88">KW</td>
<td width="221">SAMATA VIKAS MANDAL CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Arch Dimension</td>
<td width="289">M.A.Khatri and Construction</td>
<td width="124">16-03-04</td>
<td width="109">MHADA</td>
<td>91</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">442</td>
<td width="88">HE</td>
<td width="221">Lotus SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Jietendra Dewoolkar</td>
<td width="289">Dolphin Developer & Builders</td>
<td width="124">19-03-04</td>
<td width="109">PVT</td>
<td width="92">31</td>
<td width="92">2</td>
<td width="92">7</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">443</td>
<td>L</td>
<td width="221">C.T.S. No. 6(pt) Village Kurla at S.G. Barve Marg Kurla(E) <br /> Kurla Kadam CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Manoj Vishwakarma</td>
<td style="font-weight: 400;" width="289">M/s.  Unity Land Consultancy</td>
<td>25-03-04</td>
<td>MHADA</td>
<td>393</td>
<td>52</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">444</td>
<td width="88">RC</td>
<td width="221">Amber CHS (Prop)  Swastik CHS (Prop).</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/S. Amber Enterprises</td>
<td width="124">26-03-04</td>
<td width="109">Private</td>
<td>87</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">445</td>
<td width="88">E</td>
<td width="221">Topaz SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jaynat Vaidya of M/s. D. R. Vaidya & Co.</td>
<td width="289">M/s NAN Developers  A-Swati Manor</td>
<td width="124">31-03-04</td>
<td width="109">MCGM</td>
<td width="92">111</td>
<td width="92">0</td>
<td width="92">168</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">123</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">2</td>
</tr>
<tr>
<td width="64">446</td>
<td width="88">HE</td>
<td width="221">Shree Krishna Nagar CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. G. S. Goswami</td>
<td style="font-weight: 400;" width="289">M/s. Rehab Enterprise</td>
<td width="124">01-04-04</td>
<td width="109">PVT</td>
<td width="92">158</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">447</td>
<td>L</td>
<td width="221">Dhamma Seva CHS Ltd, Fatimabee SRA CHS (Prop)</td>
<td>33-10</td>
<td width="289">Oasis Consultants</td>
<td width="289">M/s. A.A Property Developers</td>
<td>02-04-04</td>
<td>MHADA</td>
<td>350</td>
<td>26</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">448</td>
<td width="88">RC</td>
<td width="221">Aman Adarsh Nagar CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td style="font-weight: 400;" width="289">M/s Relliance Construction Comp</td>
<td>05-04-04</td>
<td width="109">Private,STGOVT</td>
<td>377</td>
<td width="92">27</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">449</td>
<td>HW</td>
<td width="221">Milan Sub Way CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td style="font-weight: 400;" width="289">M/s. Rehab Enterprise</td>
<td>06-04-04</td>
<td>MCGM</td>
<td>64</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">450</td>
<td width="88">HE</td>
<td width="221">Mangal Murthi CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">MANDELIYA CONSTRUCTION PVT.LTD.</td>
<td width="124">07-04-04</td>
<td width="109">PVT</td>
<td width="92">352</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">451</td>
<td>HW</td>
<td width="221">Aman CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Dilip Kadam of M/s. Kushal Design Associates</td>
<td width="289">M/s. Everest Developers</td>
<td>08-04-04</td>
<td>Private</td>
<td>109</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">452</td>
<td width="88">KE</td>
<td width="221">OM SAI GANGA SRA CHS</td>
<td>33-10</td>
<td width="289">Shri.Shrikrishna Shevade</td>
<td width="289">M/S. Om Trinetri Builders and contractors.</td>
<td>20-04-04</td>
<td>Private</td>
<td>97</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">453</td>
<td width="88">KE</td>
<td width="221">Swpnapurti SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">M/s. S. K. Enterprises</td>
<td>22-04-04</td>
<td>Private</td>
<td>43</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">454</td>
<td width="88">PS</td>
<td width="221">Om Sai Amrut Co.op Housing Society Ltd.</td>
<td>33-10</td>
<td width="289">Nextep Architects</td>
<td width="289">M/s. Shree Sai Swami Developer</td>
<td width="124">29-04-04</td>
<td width="109">Private</td>
<td>70</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">455</td>
<td width="88">N</td>
<td width="221">Shanti Sagr Police  CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">M/s Chouhan Housing Development India Private LTD</td>
<td width="124">30-04-04</td>
<td width="109">MHADA</td>
<td width="92">1772</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">456</td>
<td width="88">KW</td>
<td width="221">Garib Nawaz CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">M/S. M.F. Consultants</td>
<td width="289">M/S. Prime (India) Builders</td>
<td width="124">06-05-04</td>
<td width="109">STGOVT</td>
<td width="92">26</td>
<td width="92">36</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">36</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">457</td>
<td width="88">RC</td>
<td width="221">Lokmanya Tilak SRA CHS</td>
<td width="81">33 (10)</td>
<td width="289">Mr. U. J. Pagnis</td>
<td width="289">M/s. Sunil Construction</td>
<td width="124">10-05-04</td>
<td width="109">MHADA</td>
<td width="92">251</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">458</td>
<td width="88">PS</td>
<td width="221">Pooja Mitra Mandal C.H.S. (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. K.K.Pandey of M/s Rare Associates</td>
<td width="289">Atithi Builders And Constructors Private Limited</td>
<td width="124">11-05-04</td>
<td width="109">Private</td>
<td>60</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">459</td>
<td width="88">KW</td>
<td width="221">Om Shree Jai Ambe CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/S. Sudhir B. Trivedi & Associates</td>
<td width="289">M/s Navdurga Construction</td>
<td width="124">24-05-04</td>
<td width="109">MHADA</td>
<td width="92">87</td>
<td width="92">1</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td width="92">0</td>
<td width="92">1</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">460</td>
<td width="88">KW</td>
<td width="221">Shri Bhairavnath CHS</td>
<td width="81">33-10</td>
<td width="289">M/s Aakar Associates</td>
<td width="289">M/s. M. V. Labh & Associates</td>
<td width="124">24-05-04</td>
<td width="109">STGOVT</td>
<td width="92">34</td>
<td width="92">8</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">461</td>
<td width="88">PS</td>
<td width="221">Goregaon Shri Ram Samarth CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td style="font-weight: 400;" width="289">M/S Riddhi Siddhi Corporation</td>
<td width="124">24-05-04</td>
<td width="109">MHADA</td>
<td>142</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">462</td>
<td width="88">HE</td>
<td width="221">Maa Ashapura CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td style="font-weight: 400;" width="289">M/s. Ashapura Developer</td>
<td width="124">25-05-04</td>
<td width="109">STGOVT</td>
<td width="92">606</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">463</td>
<td>GN</td>
<td width="221">Nathuseth SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Prabhakar G. Dabholkar</td>
<td width="289">M/s Omkar Estates</td>
<td>28-05-04</td>
<td>MCGM</td>
<td width="92">104</td>
<td width="92">84</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">464</td>
<td width="88">FN</td>
<td width="221">Janata SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. C. Subhash  Associates</td>
<td width="289">Shri. Kamal Jadhawani</td>
<td width="124">29-05-04</td>
<td width="109">STGOVT</td>
<td width="92">187</td>
<td width="92">0</td>
<td width="92">89</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">465</td>
<td width="88">GS</td>
<td width="221">Krishnaraj (SRA) CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Samoon & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Lokhandwala Shelters India Pvt. Ltd</td>
<td width="124">02-06-04</td>
<td width="109">MCGM</td>
<td width="92">131</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">466</td>
<td width="88">KW</td>
<td width="221">Shigwan Chawl Committee  SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">M/s. Mundara Developers</td>
<td width="124">04-06-04</td>
<td width="109">Private</td>
<td width="92">32</td>
<td width="92">41</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">467</td>
<td>FS</td>
<td width="221">Akhil Jijamata Nagar CHS Federation (Prop.)</td>
<td>33-10</td>
<td width="289">Shri. Jitendra Dewoolkar M/s. Ellora Archi & Engg</td>
<td width="289">M/s. Shanti Om Residency Pvt. Ltd.</td>
<td>18-06-04</td>
<td>MCGM</td>
<td width="92">2557</td>
<td width="92">0</td>
<td width="92">159</td>
<td width="92">0</td>
<td width="92">no</td>
<td width="92">no</td>
<td width="92">no</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">468</td>
<td>L</td>
<td width="221">Savera SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Ketan Vaidya Associates</td>
<td width="289">M/S. M.K.Shelters</td>
<td>18-06-04</td>
<td>MHADA</td>
<td>329</td>
<td>13</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">469</td>
<td width="88">HE</td>
<td width="221">New Silver Star SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td style="font-weight: 400;" width="289">M/s. Rizvi Developer</td>
<td width="124">22-06-04</td>
<td width="109">PVT</td>
<td width="92">33</td>
<td width="92">1</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">470</td>
<td width="88">RS</td>
<td width="221">33(14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Mr. Abdullah Siddiqui of M/s. Space Design Consult</td>
<td style="font-weight: 400;" width="289">M/s. Pragati Developers</td>
<td width="124">28-06-04</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">49</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">471</td>
<td>T</td>
<td width="221">Kashibaichawl CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. G.S. Gokhale</td>
<td width="289">M/s Gulmohar Contractors. Co. pvt.ltd</td>
<td>07-07-04</td>
<td>Private</td>
<td>41</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">472</td>
<td width="88">KE</td>
<td width="221">Rustomjee (SRA) CHS. Ltd.</td>
<td>33-10</td>
<td width="289">M/s R.T Nalawade  Associates</td>
<td width="289">M/s. Bombay Paxwell Pvt. Ltd.</td>
<td>28-07-04</td>
<td>Private</td>
<td>245</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">473</td>
<td>L</td>
<td width="221">Shahid Jitesh SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td style="font-weight: 400;" width="289">M/s. M.K. Builders</td>
<td>30-07-04</td>
<td>STGOVT</td>
<td>258</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">474</td>
<td width="88">PN</td>
<td width="221">33(14)D</td>
<td width="81">33-14</td>
<td width="289">C. Subhah  Associates</td>
<td width="289">Shiv Sai Traders</td>
<td width="124">19-08-04</td>
<td width="109">Private</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">11</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">475</td>
<td width="88">HE</td>
<td width="221">Parishram Sahakari Griha Nirman Sanstha & Shastri Nagar Municipal Vyapari Seva Sangh</td>
<td width="81">33-10</td>
<td width="289">Mr. Mohd. A. Shaikh</td>
<td style="font-weight: 400;" width="289">M/s East  West Builders</td>
<td width="124">25-08-04</td>
<td width="109">MCGM</td>
<td width="92">269</td>
<td width="92">104</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">476</td>
<td width="88">GS</td>
<td width="221">V.P.NAGAR RESIDENTS SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri Sanjay Razdan</td>
<td width="289">M/s.Topworth Properties Pvt. Ltd.</td>
<td width="124">31-08-04</td>
<td width="109">MCGM</td>
<td width="92">398</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">477</td>
<td width="88">KE</td>
<td width="221">Shree Tirupati Balaji SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td width="289">M/s. Global Buildcon Pvt. Ltd.</td>
<td>22-09-04</td>
<td>STGOVT</td>
<td>384</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">478</td>
<td width="88">GS</td>
<td width="221">Prabhadevi SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s P. N. Bhobe & Associates</td>
<td width="289">M/s. Shree Ahuja Properties & Realtors Pvt. Ltd</td>
<td width="124">23-09-04</td>
<td width="109">STGOVT,MCGM</td>
<td width="92">813</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">479</td>
<td width="88">KW</td>
<td width="221">EKTA RAHIVASHI SANGH (PROP)</td>
<td width="81">33-10</td>
<td width="289">JUHU BEACH CORPORATION</td>
<td width="289">Mr. Rajendra Pagnis. M/s. Pagnis & Pagnis</td>
<td width="124">07-10-04</td>
<td width="109">STGOVT</td>
<td>57</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">480</td>
<td width="88">GS</td>
<td width="221">Gomata Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td width="124">15-10-04</td>
<td width="109">MCGM</td>
<td width="92">438</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">481</td>
<td width="88">KW</td>
<td width="221">Sayyed Chawl S.R.A. C.H.S. Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Adaam air Architects</td>
<td width="289">M/s. Sani Builders</td>
<td width="124">27-10-04</td>
<td width="109">Private</td>
<td>75</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td>NO</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td width="64">482</td>
<td width="88">KW</td>
<td width="221">Jai Ambe SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Mr. Sandeep Shikre & Associates</td>
<td width="289">M/s Matoshree Realtors Pvt. Ltd.</td>
<td width="124">28-10-04</td>
<td width="109">Private</td>
<td width="92">49</td>
<td width="92"> </td>
<td width="92">14</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">483</td>
<td>S</td>
<td width="221">Randhirvihar CHS (Ltd)</td>
<td>33-10</td>
<td width="289">M/s Deole Brothers</td>
<td style="font-weight: 400;" width="289"> M/s. Shivshankar Shivram Singh    Others</td>
<td>28-10-04</td>
<td width="109">Private</td>
<td>163</td>
<td>26</td>
<td>0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td>No</td>
<td width="92">0</td>
<td>26</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">484</td>
<td width="88">HE</td>
<td width="221">Vitthal Krupa SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s Vision Architect</td>
<td style="font-weight: 400;" width="289">M/s CLASSIC ENTERPRISES</td>
<td width="124">29-10-04</td>
<td width="109">PVT</td>
<td width="92">18</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">485</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Dharavi Siddhivinayak CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s Mayuree Consultants</td>
<td style="font-weight: 400;" width="289">M/s. United Developer</td>
<td>03-11-04</td>
<td width="109">MCGM</td>
<td width="92">108</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">Yes</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">486</td>
<td>L</td>
<td width="221">VIJAY SRA C.H.S. LTD</td>
<td>33-10</td>
<td width="289">Shri. ARVIND B. NAIK</td>
<td width="289">Venus Housing Enterprises</td>
<td>05-11-04</td>
<td>MHADA</td>
<td>86</td>
<td>12</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">487</td>
<td width="88">N</td>
<td width="221">Siddharth Nagar Coop Hsg. Society</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Arch-V-Shan Creations</td>
<td style="font-weight: 400;" width="289">M/s Sai developer</td>
<td width="124">06-11-04</td>
<td width="109">Private</td>
<td width="92">261</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">488</td>
<td>L</td>
<td width="221">Buddha Vihar SRA CHS (Ltd.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Aakar Associates-Santacruz(W)</td>
<td style="font-weight: 400;" width="289">M/s. Regal Builders  Developers</td>
<td>10-11-04</td>
<td>Private</td>
<td>407</td>
<td>128</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">489</td>
<td>L</td>
<td width="221">Golden Plaza SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Ketan Vaidya Associates</td>
<td width="289">M/s. M.K. Realtors</td>
<td>10-11-04</td>
<td>MHADA</td>
<td>120</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">490</td>
<td width="88">PS</td>
<td width="221">Kanyachapada CHS.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. JatinBhuta</td>
<td width="289">M/S Ravi Ashish Land Developers Ltd.</td>
<td width="124">18-11-04</td>
<td width="109">Private</td>
<td>746</td>
<td>108</td>
<td>0</td>
<td>438</td>
<td>not constructed</td>
<td width="92">no</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">491</td>
<td width="88">N</td>
<td width="221">Shree Sai Siddhi Ganesh CHSL</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Arch-V-Shan Creations</td>
<td width="289">S. B. Associates  Construction Company</td>
<td width="124">23-11-04</td>
<td width="109">Private</td>
<td width="92">63</td>
<td width="92">0</td>
<td width="92">29</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">492</td>
<td>GN</td>
<td width="221">Anmol CHS Ltd</td>
<td>33-10</td>
<td width="289">ShriUlhasRautArchtects Interior Designers</td>
<td width="289">M/s Tendulkar  Associates</td>
<td>25-11-04</td>
<td>MCGM</td>
<td width="92">88</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">493</td>
<td width="88">KE</td>
<td width="221">Andheri Sahajeevan SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">Varad Vinayak Realty Pvt. Ltd</td>
<td>25-11-04</td>
<td>MCGM</td>
<td>77</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">494</td>
<td width="88">N</td>
<td width="221">Shivdarshan SRA CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant</td>
<td width="289">M/s. Jankalyan Seva Sansthan  Rajendra Enterprise</td>
<td width="124">10-12-04</td>
<td width="109">PVT</td>
<td width="92">316</td>
<td width="92">0</td>
<td width="92">41</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">YES</td>
<td width="92">Partly</td>
<td width="92">17</td>
<td width="92">24</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">495</td>
<td width="88">KE</td>
<td width="221">New Prabhat SRA CHS</td>
<td>33-10</td>
<td width="289">M/s. Pratima Enterprises</td>
<td width="289">M/s. Shekhar Arolkar & Associates</td>
<td>21-12-04</td>
<td>Private</td>
<td>93</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">496</td>
<td width="88">HE</td>
<td width="221">Aditya SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">22-12-04</td>
<td width="109">PVT & STGOVT</td>
<td width="92">85</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">497</td>
<td width="88">GS</td>
<td width="221">Mahakali Nagar SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Hemant Parikh  Associates</td>
<td width="289">M/s. S.S.V. Developers & Builders</td>
<td width="124">23-12-04</td>
<td width="109">MHADA</td>
<td width="92">134</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">498</td>
<td width="88">RC</td>
<td width="221">Om Sai Shraddha  SRA CHS Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">M/s. Shubh Enterprise</td>
<td>23-12-04</td>
<td width="109">STGOVT</td>
<td>167</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">0</td>
<td>yes </td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">499</td>
<td width="88">HE</td>
<td width="221">New Safalya SRA Co. Op. Hsg. Soc. (Regd)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Manoj Vishwakarma</td>
<td width="289"> M/s. Amikrupa Land Developers Pvt. Ltd.</td>
<td width="124">28-12-04</td>
<td width="109">PVT</td>
<td width="92">192</td>
<td width="92">12</td>
<td width="92">73</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">500</td>
<td width="88">KW</td>
<td width="221">Navjeevan Ekta CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">T.N. Hasan</td>
<td style="font-weight: 400;" width="289">M/s. Mega Enterprises</td>
<td width="124">28-12-04</td>
<td width="109">Private</td>
<td width="92">36</td>
<td width="92">12</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">501</td>
<td>L</td>
<td width="221">S.R Scheme (PTC) under DCR 33(14)(D)</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">Shri. Vikas V. Date.</td>
<td width="289">M/s. Twin Developer</td>
<td>28-12-04</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>253</td>
<td>Yes</td>
<td>No</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">502</td>
<td width="88">KW</td>
<td width="221">EKTA CO OP HSG SOC (PROP)</td>
<td width="81">33-10</td>
<td width="289">K.R.Lotlikar & ASSOCIATE</td>
<td style="font-weight: 400;" width="289">M/s. MILIND DEVELOPER</td>
<td width="124">29-12-04</td>
<td width="109">Private</td>
<td width="92">36</td>
<td width="92">19</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">503</td>
<td width="88">PN</td>
<td width="221">Garden malad (west) CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Om sai Developers PVT LTD</td>
<td width="124">29-12-04</td>
<td width="109">Private,MCGM</td>
<td width="92">296</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">504</td>
<td>T</td>
<td width="221">Binakumari CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Prabhakar Satham  Associates</td>
<td width="289">M/s .Omkar Builders  developer</td>
<td>29-12-04</td>
<td>Private</td>
<td>378</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">505</td>
<td width="88">RC</td>
<td width="221">Om Shivai SRA CHS (Prop)</td>
<td>33-10</td>
<td width="289">M/s. Axis Consultancy services.</td>
<td style="font-weight: 400;" width="289">M/s. Shreenath Realtors</td>
<td>04-01-05</td>
<td width="109">MHADA</td>
<td>757</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">506</td>
<td width="88">D</td>
<td width="221">Uttar Bhartiya Rajak Samaj Panchayat CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Samoon & Associates</td>
<td width="289">M/s. Ray Property Developers Pvt. Ltd</td>
<td width="124">05-01-05</td>
<td width="109">STGOVT</td>
<td width="92">73</td>
<td width="92">53</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">507</td>
<td width="88">KW</td>
<td width="221">33(14)D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s. Daddy  Associates</td>
<td width="289">M/s.H.  S. Developers</td>
<td width="124">15-01-05</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">13</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">508</td>
<td>HW</td>
<td width="221">New Friend SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jaynat Vaidya of M/s. D. R. Vaidya & Co.</td>
<td width="289">Viraj Enterprise</td>
<td>21-03-05</td>
<td>MHADA</td>
<td>28</td>
<td>7</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td width="92">Yes</td>
<td>Yes</td>
<td>6</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">1</td>
</tr>
<tr>
<td width="64">509</td>
<td>L</td>
<td width="221">FATIMA (SRA) CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Dalvi  Assocites</td>
<td width="289">Fatima CHS Ltd.</td>
<td>24-03-05</td>
<td>MHADA</td>
<td>32</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">510</td>
<td>GN</td>
<td width="221">St. Anthony CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S. Redkar  Redkar</td>
<td width="289">M/S Shree SaiDutta Builders  Developers.</td>
<td>04-04-05</td>
<td>MCGM</td>
<td width="92">56</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">511</td>
<td width="88">KW</td>
<td width="221">DEVINE MERCY CHS (PROP)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.John R Dantas</td>
<td width="289">Kunjal Mehta</td>
<td width="124">04-04-05</td>
<td width="109">Private</td>
<td width="92">11</td>
<td width="92">8</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">512</td>
<td width="88">KW</td>
<td width="221">Ashiyana SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shreeya Services Pvt. Ltd.</td>
<td width="289">M/s. Gajanan Builders</td>
<td width="124">06-04-05</td>
<td width="109">MHADA</td>
<td width="92">106</td>
<td width="92">87</td>
<td width="92">36</td>
<td>0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">51</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">513</td>
<td>GN</td>
<td width="221">Bhavani SRA Co op. Hsg. Soc.Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td width="289">M/s. Anil Kaslay Co.</td>
<td>07-04-05</td>
<td>MCGM</td>
<td width="92">187</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">514</td>
<td>T</td>
<td width="221">Keshavpada CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">M/s. Sai Construction</td>
<td>10-04-05</td>
<td>STGOVT</td>
<td>128</td>
<td>5</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">515</td>
<td width="88">RC</td>
<td width="221">Borbhat SRA CHS (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Shreeniwas Developers</td>
<td>15-04-05</td>
<td width="109">MCGM</td>
<td>477</td>
<td width="92">143</td>
<td width="92">0</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">yes</td>
<td>Yes</td>
<td>143</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">516</td>
<td width="88">GS</td>
<td width="221">Shramik Ekta CHS Federation Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Space Counsultant</td>
<td width="289">Lokhandwala Kataria Construction Pvt.Ltd.</td>
<td width="124">16-04-05</td>
<td width="109">MCGM</td>
<td width="92">1832</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">517</td>
<td width="88">RC</td>
<td width="221">Vitthal Nagar CHS (Ltd.) , Khodiyar Mata CHS (Ltd) & Rabari Devrajbhai CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. M. R. Constructions</td>
<td>16-04-05</td>
<td width="109">MHADA</td>
<td>388</td>
<td width="92">0</td>
<td width="92">48</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">518</td>
<td width="88">N</td>
<td width="221">Vidyavihar Shastrinagar CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Prabhakar Satham  Associates</td>
<td width="289">M/s. Shree Rajal Siddhi builders Ltd</td>
<td width="124">25-04-05</td>
<td width="109">MHADA</td>
<td width="92">155</td>
<td width="92">0</td>
<td width="92">22</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">519</td>
<td width="88">RC</td>
<td width="221">Jagruti Borivali CHS. Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sanjay B. Shah</td>
<td style="font-weight: 400;" width="289">M/s. WESTERN DEVELOPMENT CORPORATION Smt. P.D.Reb</td>
<td>27-04-05</td>
<td width="109">Private</td>
<td>53</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">yes</td>
<td>Yes</td>
<td>14</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">520</td>
<td width="88">RS</td>
<td width="221">Aman Shiv Shankar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td style="font-weight: 400;" width="289">Reliance Comstruction Company</td>
<td width="124">27-04-05</td>
<td width="109">Private,MCGM</td>
<td width="92">170</td>
<td width="92">31</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">521</td>
<td width="88">D</td>
<td width="221">Jijamata CHS</td>
<td width="81">33-10</td>
<td width="289">Mr. Anish Chavan</td>
<td width="289">M/s. Earth Estate Developers Pvt. Ltd.</td>
<td width="124">30-04-05</td>
<td width="109">MCGM</td>
<td width="92">113</td>
<td width="92">54</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">54</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">522</td>
<td width="88">KW</td>
<td width="221">Andheri Indira Nagar CHS LTD</td>
<td width="81">33-10</td>
<td width="289">M/s. A. L. PRABHU</td>
<td width="289">M/s. KANWAL CORPORATION</td>
<td width="124">09-05-05</td>
<td width="109">MHADA</td>
<td width="92">138</td>
<td width="92">11</td>
<td width="92">24</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">523</td>
<td width="88">KE</td>
<td width="221">Sankalp Siddhi SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah</td>
<td style="font-weight: 400;" width="289">M/s. Sangita Realty</td>
<td>26-05-05</td>
<td>Private</td>
<td>27</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">524</td>
<td width="88">ME</td>
<td width="221">3.11 Scheme (Chembur Trading Corporation</td>
<td width="81">3-11</td>
<td width="289">Shri. P.R. Doshi of M/s. Pylon Projects</td>
<td width="289">M/s. Chembur Tradding Corporation </td>
<td width="124">09-06-05</td>
<td width="109">PVT</td>
<td width="92">0</td>
<td width="92">1718</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">1718</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">525</td>
<td width="88">KE</td>
<td width="221">Takshila Sangam Grihanirman Sanshtha (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Dilip Kadam of M/s. Kushal Design Associates</td>
<td width="289">M/s. Dimple Enterprises</td>
<td>15-06-05</td>
<td>Private</td>
<td>963</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">526</td>
<td width="88">KE</td>
<td width="221">ANNAWADI SRA CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Adaam air Architects</td>
<td style="font-weight: 400;" width="289">M/s. Sai Construction</td>
<td>17-06-05</td>
<td>Private</td>
<td>96</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">527</td>
<td width="88">KW</td>
<td width="221">Ganesh Niwas SRA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Abdullah Siddiqui of M/s. Space Design Consult</td>
<td style="font-weight: 400;" width="289">M/s. Lashkaria Construction Pvt. Ltd</td>
<td width="124">28-06-05</td>
<td width="109">MHADA</td>
<td width="92">73</td>
<td width="92">0</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">528</td>
<td width="88">FN</td>
<td width="221">Wadala Shree Shiv Ganesh CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">Sanghavi Premises Pvt. Ltd.</td>
<td width="124">29-06-05</td>
<td width="109">Private</td>
<td width="92">92</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">529</td>
<td width="88">KW</td>
<td width="221">Milansar Welfar CHS (Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. A. P. M. Consultants</td>
<td style="font-weight: 400;" width="289">M/s. Safe Home Developer  Contractors</td>
<td width="124">30-06-05</td>
<td width="109">STGOVT</td>
<td>182</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No </td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">530</td>
<td width="88">HE</td>
<td width="221">Pragati SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole of NETACPL Architects  Civil En</td>
<td width="289">M/s. Prabhav Properties Pvt. Ltd.</td>
<td width="124">13-07-05</td>
<td width="109">PVT</td>
<td width="92">77</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">531</td>
<td width="88">KE</td>
<td width="221">Sonal Siddhi CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vikas V. Date.</td>
<td style="font-weight: 400;" width="289">M/S SONAL CONTRACTER PVT LTD</td>
<td>13-07-05</td>
<td>Private</td>
<td>26</td>
<td>0</td>
<td width="92">32</td>
<td width="92">0</td>
<td> No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">532</td>
<td width="88">RC</td>
<td width="221">Om Siddhivinayak CHS Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td width="289">M/s. Shree Parashnath Enterprises</td>
<td>13-07-05</td>
<td width="109">MCGM</td>
<td>52</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">533</td>
<td>GN</td>
<td width="221">Swarajya CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Vijay N Goradia</td>
<td style="font-weight: 400;" width="289">M/s Sunshine Housing Development Pvt. Ltd.</td>
<td>15-07-05</td>
<td>MCGM</td>
<td width="92">528</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">534</td>
<td width="88">KW</td>
<td width="221">Gaondevi Dongari S.R.A.CHS (LTD)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s Mayuree Consultants</td>
<td width="289">M/s. Akanksha Developer</td>
<td width="124">25-07-05</td>
<td width="109">STGOVT</td>
<td width="92">52</td>
<td width="92">0</td>
<td width="92">24</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">535</td>
<td width="88">PS</td>
<td width="221">Aadi Shakti  SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Jayshing Shinde</td>
<td width="289">M/s. Dhanwade Associates</td>
<td width="124">26-07-05</td>
<td width="109">MHADA</td>
<td>71</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">536</td>
<td width="88">KE</td>
<td width="221">Shiv Adarsh SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. P.S. Chamankar & Associates</td>
<td style="font-weight: 400;" width="289">M/s.  MCA Constructions</td>
<td>30-07-05</td>
<td>MHADA</td>
<td>30</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">537</td>
<td width="88">RS</td>
<td width="221">Siddhivinayak Mahavir Nagar Bldg. No. 1 & 2 SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">M/s. Mahaveer Construction</td>
<td width="124">30-07-05</td>
<td width="109">Private,MHADA</td>
<td width="92">178</td>
<td width="92">161</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">538</td>
<td width="88">KE</td>
<td width="221">Sadashiv SRA CHS Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td style="font-weight: 400;" width="289">M/s. Salasarwala  Co.</td>
<td>05-08-05</td>
<td>Private</td>
<td>19</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">539</td>
<td width="88">HE</td>
<td width="221">Keshav CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td width="289">Ashiwarya Construction  Developer</td>
<td width="124">16-08-05</td>
<td width="109">STGOVT</td>
<td width="92">37</td>
<td width="92">0</td>
<td width="92">22</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">540</td>
<td width="88">PS</td>
<td width="221">Shrama Safalya CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td style="font-weight: 400;" width="289">M/s M. R.  Realtors</td>
<td width="124">24-08-05</td>
<td width="109">MHADA</td>
<td>560</td>
<td>0</td>
<td>6</td>
<td>0</td>
<td>not constructed</td>
<td width="92">No</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">541</td>
<td>GN</td>
<td width="221">Jai Bhawani CHS Ltd</td>
<td>33-10</td>
<td width="289">Shri Dilip Sankpal</td>
<td width="289">M/s Jay Sagar Const. Co.</td>
<td>30-08-05</td>
<td>MCGM</td>
<td width="92">67</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">542</td>
<td width="88">KW</td>
<td width="221">Campz CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">T.N. Hasan</td>
<td width="289">M/s. Cempz Construction.</td>
<td width="124">31-08-05</td>
<td width="109">Private</td>
<td>50</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">543</td>
<td width="88">PN</td>
<td width="221">Sai krupa Sahakari CHS (Ltd)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">M/s. Royal Realtors</td>
<td width="124">31-08-05</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">544</td>
<td width="88">GS</td>
<td width="221">Raj SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s P. N. Bhobe & Associates</td>
<td width="289">M/s Aristo Realty Developers Ltd</td>
<td width="124">13-09-05</td>
<td width="109">Private</td>
<td width="92">98</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">545</td>
<td>L</td>
<td width="221">Afiya (SRA) CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Dalvi  Assocites</td>
<td width="289">M/s. Mika Engineers</td>
<td>04-10-05</td>
<td>Private</td>
<td>43</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">546</td>
<td>RN</td>
<td width="221">NEW EKTA SRA CHS LTD.</td>
<td>33-10</td>
<td width="289">M/S. SHIRSAT  KOLWANKAR ASSOCIATES</td>
<td width="289">M/S.FALASA CONSTRUCTIONS</td>
<td>04-10-05</td>
<td>Private</td>
<td width="92">76</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">547</td>
<td width="88">RC</td>
<td width="221">NUTAN NAGAR SRA CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">M/s VIGNAHARTA BUILDERS  PROJECTS PVT LTD</td>
<td width="124">04-10-05</td>
<td width="109">MHADA</td>
<td>208</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">548</td>
<td width="88">PS</td>
<td width="221">Ashtavinayak (Goregaon) SRA CHS, Neelkamal SRA Ltd., Morning Star SRA CHS Ltd.</td>
<td width="81">33-10</td>
<td width="289">RAHUL VETURKAR & ASSOCIATES<br /> <br /> 163/Gr. Floor, Manubar Mansion,Dr. B.A. Road, Dadar (E), Mumbai – 14</td>
<td width="289">CHAMUNDA BUILDSERS & DEVELOPERS</td>
<td width="124">10-10-05</td>
<td width="109">MHADA</td>
<td width="92">203</td>
<td width="92">3</td>
<td width="92">1</td>
<td width="92">0</td>
<td>Constructed</td>
<td width="92">Full O.C. issued  </td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">1</td>
</tr>
<tr>
<td width="64">549</td>
<td>RN</td>
<td width="221">Thakar SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Harish Gandhi</td>
<td width="289">Thakar Construction</td>
<td>15-10-05</td>
<td>Private</td>
<td width="92">262</td>
<td width="92">100</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">550</td>
<td width="88">RS</td>
<td width="221">Shree Krishna Niwas CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">RAJESHRI BUILD CRAFT</td>
<td width="124">15-10-05</td>
<td width="109">Private</td>
<td width="92">78</td>
<td width="92">22</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">Yes</td>
<td width="92">12</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">551</td>
<td width="88">ME</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Ravi Raj (Architect)</td>
<td style="font-weight: 400;" width="289">MHADA</td>
<td width="124">18-10-05</td>
<td width="109">MHADA</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">84</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">84</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">552</td>
<td width="88">ME</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Ravi Raj (Architect)</td>
<td style="font-weight: 400;" width="289">MHADA</td>
<td width="124">18-10-05</td>
<td width="109">MHADA,Not Available</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">65</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">553</td>
<td width="88">PN</td>
<td width="221">Malvani Mahakali Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td width="289">M/s. Grace Erectors</td>
<td width="124">19-10-05</td>
<td width="109">STGOVT</td>
<td width="92">406</td>
<td width="92">42</td>
<td width="92">0</td>
<td>0</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">554</td>
<td width="88">RS</td>
<td width="221">Kandivali Bhagwati Padibhai SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sanjay B. Shah</td>
<td width="289">Shree Dwarkesh Corporation</td>
<td width="124">04-11-05</td>
<td width="109">Private</td>
<td width="92">54</td>
<td width="92">21</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">7</td>
</tr>
<tr>
<td width="64">555</td>
<td>FS</td>
<td width="221">Siddhi Ahmad SRA CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s. Sakshi Enterprises</td>
<td>21-11-05</td>
<td>MCGM</td>
<td width="92">65</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Part OC granted</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">556</td>
<td>L</td>
<td width="221">Kurla Jaihind Buddha Vikas CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td style="font-weight: 400;" width="289">M/s. Neeta Developer</td>
<td>24-11-05</td>
<td>MHADA</td>
<td>448</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">557</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Muslim Nagar Sada Bahar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mahale  &  Associates</td>
<td width="289">HANWARE REALTY</td>
<td>25-11-05</td>
<td width="109">MCGM</td>
<td width="92">177</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">Yes</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">558</td>
<td width="88">RC</td>
<td width="221">New Shivam SRA CHS Ltd.</td>
<td width="81">33 (10)</td>
<td width="289">Shri. Salil Thakare</td>
<td width="289">M/s. Rajenn Mehtta Builders  Developers.</td>
<td width="124">26-11-05</td>
<td width="109">Pvt</td>
<td width="92">74</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">559</td>
<td width="88">PN</td>
<td width="221">Khot Dongari CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289"> M/s. Shah  Associates</td>
<td width="124">29-11-05</td>
<td width="109">STGOVT</td>
<td width="92">770</td>
<td width="92">0</td>
<td width="92">629</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">560</td>
<td width="88">PS</td>
<td width="221">Jai Bhawani SRA C.H.S. (LTD)</td>
<td>33-10</td>
<td width="289">M/s. Retro Fitters Consulting Engineers</td>
<td style="font-weight: 400;" width="289">M/s. Samarth Erectores  Developers</td>
<td width="124">30-11-05</td>
<td width="109">MHADA</td>
<td>60</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">561</td>
<td width="88">RS</td>
<td width="221">Sant Dnyaneshwar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">Shreeji Constructions</td>
<td width="124">02-12-05</td>
<td width="109">MCGM</td>
<td width="92">223</td>
<td width="92">25</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">no</td>
<td width="92">no</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">562</td>
<td width="88">HE</td>
<td width="221">Aakash Darshan CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">12-12-05</td>
<td width="109">MHADA</td>
<td width="92">34</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">563</td>
<td>FS</td>
<td width="221">Om Shivshankar CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s G. M. Kakade Engg. Const. Pvt. Ltd.</td>
<td width="289">M/s G.M.Kakade Engineer & Consultants</td>
<td>14-12-05</td>
<td>MCGM</td>
<td width="92">107</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Part OC granted</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">564</td>
<td>L</td>
<td width="221">Kurla Mahananda Nagar SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Ms. Krishnaveni Bet of  M/s. Transform Architects</td>
<td width="289">M/s. Gangagiri Enterprises</td>
<td>16-12-05</td>
<td>MHADA</td>
<td>115</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">565</td>
<td width="88">KW</td>
<td width="221">Sangam Janseva CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/S Citimake Builders Pvt. LtdC</td>
<td width="124">21-12-05</td>
<td width="109">STGOVT,MHADA</td>
<td>399</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">566</td>
<td width="88">KW</td>
<td width="221">SHIV SFURTI SRA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/S Tushar Parulekar  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Shivraj Developers</td>
<td width="124">27-12-05</td>
<td width="109">MHADA</td>
<td>100</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">567</td>
<td width="88">KE</td>
<td width="221">SAI BABA CO OP HSG SOC (PROP)</td>
<td>33-10</td>
<td width="289">CHINMAY ASSOCIATES</td>
<td style="font-weight: 400;" width="289">M/s. Shubham Developers</td>
<td>29-12-05</td>
<td>Private</td>
<td>72</td>
<td>4</td>
<td width="92">0</td>
<td width="92">4</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">568</td>
<td width="88">GS</td>
<td width="221">WORLI SHIV NAGAR SRA CHS LTD</td>
<td width="81">33-10</td>
<td width="289">Sangita Billimoria</td>
<td width="289">M/s. Build Arch</td>
<td width="124">30-12-05</td>
<td width="109">MCGM</td>
<td width="92">148</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">569</td>
<td width="88">RC</td>
<td width="221">Shiv Ganesh Sai CHS</td>
<td width="81">33 (10)</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td width="289">M/s. Glorious Const. Co. Pvt. Ltd.</td>
<td width="124">30-12-05</td>
<td width="109">MCGM</td>
<td width="92">48</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">570</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">MASHIHA C.H.S.  ISALMPURA C.H.S.</td>
<td width="81">33-10</td>
<td width="289">MUKESH MEHTA</td>
<td style="font-weight: 400;" width="289">M/s. Baccha Builders Developers</td>
<td>09-01-06</td>
<td width="109">MCGM</td>
<td width="92">243</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">571</td>
<td width="88">HE</td>
<td width="221">SHREE SAMRAT SRA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">18-01-06</td>
<td width="109">PVT</td>
<td width="92">91</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">572</td>
<td width="88">HE</td>
<td width="221">Swami Vivekanand CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/S. Gemini Developers</td>
<td width="124">18-01-06</td>
<td width="109">PVT</td>
<td width="92">145</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">573</td>
<td>HW</td>
<td width="221">Patel Compound CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">Pioneer India pvt. Ltd</td>
<td>18-01-06</td>
<td>MCGM</td>
<td>138</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">574</td>
<td width="88">KE</td>
<td width="221">YASHODHAN C.H.S. (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">JUPITER REALTORS BUILDERS  DEVELOPERS</td>
<td>30-01-06</td>
<td>Private</td>
<td>62</td>
<td>9</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">575</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Anna Nagar Navjeevan SRA CHS. Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Manohar M. Kaphale  Associates</td>
<td width="289">Bismi Developers  Contractors</td>
<td>04-02-06</td>
<td width="109">MCGM</td>
<td width="92">116</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">576</td>
<td width="88">HE</td>
<td width="221">Siddharth Colony Hitsanrakshan CHS. Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td style="font-weight: 400;" width="289">M/S. Sai Siddharth Construction Co</td>
<td width="124">10-02-06</td>
<td width="109">MHADA</td>
<td width="92">350</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">577</td>
<td>GN</td>
<td width="221">Dr. Babasaheb Ambedkar Nagar SRA CHS</td>
<td>33-10</td>
<td width="289">Mr. P. P. Khobrekar of M/s. Paarshad</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td>15-02-06</td>
<td>MCGM</td>
<td width="92">882</td>
<td width="92">13</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">13</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">578</td>
<td width="88">N</td>
<td width="221">SAI CHHAYA SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Joshi  Associates</td>
<td width="289">M/s. Daga Developers</td>
<td width="124">17-02-06</td>
<td width="109">STGOVT</td>
<td width="92">288</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">579</td>
<td width="88">KE</td>
<td width="221">Meera SRA Co-op Hsg. Soc.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td width="289">Shri. Abdul Qayum Dost Mohammed Khan & Others</td>
<td>24-02-06</td>
<td>Private</td>
<td>37</td>
<td>25</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">580</td>
<td width="88">KW</td>
<td width="221">Labh Siddhi CHS</td>
<td width="81">33-14</td>
<td width="289">MARG CONSULTANTS</td>
<td width="289">HEMALABH DEVELOPERS</td>
<td width="124">27-02-06</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">581</td>
<td>T</td>
<td width="221">Trimurti Narayan CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Plan Well Architects</td>
<td width="289">M/s Vrushali Developers</td>
<td>28-02-06</td>
<td>Private</td>
<td>47</td>
<td>4</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>yes </td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">582</td>
<td>GN</td>
<td width="221">Ranusheth SRA Co. Op. Hsg. Soc. Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289"> M/s. Chaitanya Developers.</td>
<td>02-03-06</td>
<td>Private</td>
<td width="92">141</td>
<td width="92">0</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">6</td>
</tr>
<tr>
<td width="64">583</td>
<td width="88">KW</td>
<td width="221">Rahat Welfare CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. A. P. M. Consultants</td>
<td style="font-weight: 400;" width="289">M/s. Safe Home Developer  Contractors</td>
<td width="124">03-03-06</td>
<td width="109">STGOVT</td>
<td width="92">54</td>
<td width="92"> </td>
<td width="92">5</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">584</td>
<td width="88">PN</td>
<td width="221">SiddhiVinayak CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">CRYSTAL CONSTRUCTIONS</td>
<td width="124">03-03-06</td>
<td width="109">Private</td>
<td width="92">28</td>
<td width="92">5</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">585</td>
<td width="88">PN</td>
<td width="221">Malad Shivshakti SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">Jatin Bhuta & Associates</td>
<td width="289">A.S.K Corporation</td>
<td width="124">03-03-06</td>
<td width="109">MCGM</td>
<td width="92">855</td>
<td width="92">0</td>
<td width="92">36</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">586</td>
<td width="88">KW</td>
<td width="221">Anand Seva Samiti SRA CHS LTD</td>
<td width="81">33-10</td>
<td width="289">M/s. Arilf Shah & Associates</td>
<td width="289">Universal Housing Corporation</td>
<td width="124">06-03-06</td>
<td width="109">MHADA</td>
<td>112</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">587</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Ratnadeep Dattaguru & Ashtvinayak CHS</td>
<td width="81">33-10</td>
<td width="289">Mr. JatinBhuta</td>
<td width="289">M/s. Shree Kamatchi Construction</td>
<td>08-03-06</td>
<td width="109">MCGM</td>
<td width="92">208</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">588</td>
<td width="88">KE</td>
<td width="221">Andheri Chhaya SRA CHS</td>
<td>33-10</td>
<td width="289">AJITKUMAR G. RANE</td>
<td width="289">M/s. Samarth Erectores  Developers</td>
<td>10-03-06</td>
<td>MHADA</td>
<td>217</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">589</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Shanti CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Deva Consultants</td>
<td width="289">Sai Pushpa Construction</td>
<td>16-03-06</td>
<td width="109">MCGM</td>
<td width="92">82</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">590</td>
<td width="88">KE</td>
<td width="221">Mahakali Darshan SRA CHS LTD.</td>
<td>33-10</td>
<td width="289">M/s. P.S. Chamankar & Associates</td>
<td width="289">Sunshine Builders & Developers A-501</td>
<td>17-03-06</td>
<td>Private</td>
<td>1781</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">591</td>
<td width="88">KW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td width="289">Shri. T.N. Hasan</td>
<td width="289">M/s. Malkani Construction Company</td>
<td width="124">21-03-06</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">592</td>
<td width="88">RC</td>
<td width="221">Mitratva Co op. Hsg. Soc. (Prop).</td>
<td>33-10</td>
<td width="289">M/s. Sanjay Neve  Associates</td>
<td width="289">M/s. Amogh Enterprises</td>
<td>23-03-06</td>
<td width="109">MHADA</td>
<td>138</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">593</td>
<td width="88">N</td>
<td width="221">Safalya CHS. Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. Tandel  Associates</td>
<td width="289">M/s. Neelyog Construction Pvt. Ltd</td>
<td width="124">24-03-06</td>
<td width="109">Private</td>
<td width="92">25</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">594</td>
<td width="88">MW</td>
<td width="221">Mahadeo Patilwadi SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri. Jaysing Shinde</td>
<td width="289">M/s. Bholenath Developers Ltd</td>
<td width="124">27-03-06</td>
<td width="109">Private</td>
<td width="92">139</td>
<td width="92">43</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">43</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">595</td>
<td>GN</td>
<td width="221">Ashirwad SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289"> M/s. J.R.Properties.</td>
<td>31-03-06</td>
<td>Private</td>
<td width="92">151</td>
<td width="92">0</td>
<td width="92">1</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">1</td>
</tr>
<tr>
<td width="64">596</td>
<td width="88">PN</td>
<td width="221">SHIVRANJAN UTKARSH MANDAL C.H.S.LTD</td>
<td width="81">33-10</td>
<td width="289">Vishwas Satodia</td>
<td width="289">Parth developers</td>
<td width="124">07-04-06</td>
<td width="109">Private</td>
<td width="92">85</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">35</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">597</td>
<td>GN</td>
<td width="221">Om Siddhi SRA CHS  Ltd</td>
<td>33-10</td>
<td width="289">M/ s sandeepShikre Associates</td>
<td width="289">M/s Matoshree Realtors Pvt. Ltd.</td>
<td>13-04-06</td>
<td>Private</td>
<td width="92">128</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">598</td>
<td width="88">MW</td>
<td width="221">Jai Ambe CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s.Consultants Combined</td>
<td width="289">M/s. Balan & Chheda Developers Pvt. Ltd</td>
<td width="124">13-04-06</td>
<td width="109">Private</td>
<td width="92">21</td>
<td width="92">9</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">9</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">599</td>
<td width="88">RS</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td width="289">Shri. Atul Rana</td>
<td width="289">Shri. Paras K. Mehta</td>
<td width="124">18-04-06</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">120</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">120</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">600</td>
<td width="88">RC</td>
<td width="221">ASTAVINAYAK C.H.S.(PROP)</td>
<td>33-10</td>
<td width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td width="289">M/s. Siddhivinayak Developers</td>
<td width="124">18-04-06</td>
<td width="109">MHADA</td>
<td>38</td>
<td width="92">33</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">601</td>
<td width="88">HE</td>
<td width="221">Suryodaya SRA CHS LTD</td>
<td width="81">33-10</td>
<td width="289">Shri.Suresh Krishnan</td>
<td width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">19-04-06</td>
<td width="109">PVT</td>
<td width="92">60</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">602</td>
<td width="88">KE</td>
<td width="221">Omkar Darshan Gundavali Rahiwasi SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">M/s. Unmesh Bholay  Associates</td>
<td width="289">M/s. Srujan  Development and Construction Division</td>
<td>20-04-06</td>
<td>Private</td>
<td>227</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">603</td>
<td width="88">KW</td>
<td width="221">Dattaguru Nagar Rahivasi Sangh Chs Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. Essaar Group Architect</td>
<td width="289">M/s. A. H. CONSTRUCTION</td>
<td width="124">20-04-06</td>
<td width="109">Private</td>
<td>179</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">604</td>
<td>L</td>
<td width="221">ITTEFAQUE SRA CHS (PROP)</td>
<td>33-10</td>
<td width="289">Shri. Rajendra pagnis</td>
<td width="289">M/s. M.R. Shelter</td>
<td>20-04-06</td>
<td>STGOVT</td>
<td>188</td>
<td>29</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">605</td>
<td width="88">ME</td>
<td width="221">3.11 Scheme (HDIL)</td>
<td width="81">3-11</td>
<td width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td width="289">Suraksha Realtors</td>
<td width="124">26-04-06</td>
<td width="109">PVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">420</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">606</td>
<td>T</td>
<td width="221">Shivangan SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s. Arihant Construction Co</td>
<td>29-04-06</td>
<td>Private</td>
<td>224</td>
<td width="92">92</td>
<td width="92">129</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">607</td>
<td width="88">KE</td>
<td width="221">Pratrima Co-op.Hsg.Ltd</td>
<td>33-14</td>
<td width="289">Shri. Subhash Chawda</td>
<td width="289">M/s. Darshan Construction</td>
<td>06-05-06</td>
<td>Private</td>
<td>8</td>
<td>6</td>
<td width="92">0</td>
<td width="92">25</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">608</td>
<td width="88">RC</td>
<td width="221">Shiv Ganesh Sai CHS</td>
<td>33-10</td>
<td width="289">M/s. Dream Infrastructural Pvt Ltd</td>
<td width="289">M/s. Glorious Const. Co. Pvt. Ltd.</td>
<td width="124">06-05-06</td>
<td width="109">MCGM</td>
<td>165</td>
<td width="92">131</td>
<td width="92">57</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">yes</td>
<td>Yes</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>49</td>
</tr>
<tr>
<td width="64">609</td>
<td width="88">HE</td>
<td width="221">Parishram CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Chogle  Associates</td>
<td width="289">M/s. Amogh Enterprises</td>
<td width="124">08-05-06</td>
<td width="109">MHADA</td>
<td width="92">453</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">610</td>
<td width="88">ME</td>
<td width="221">3.11</td>
<td width="81">3-11</td>
<td width="289">Smt. S.V. Thakkar  Associates</td>
<td width="289">M/s East  West Builders</td>
<td width="124">11-05-06</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">534</td>
<td width="92">2372</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">534</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">611</td>
<td width="88">PN</td>
<td width="221">33 (14) D (Romell)</td>
<td width="81">33-14</td>
<td width="289">Shri Manoj Vishwakarma</td>
<td width="289">M/s Ashish Enterprises</td>
<td width="124">11-05-06</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">164</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">612</td>
<td width="88">GS</td>
<td width="221">Shree Durgamata CHS</td>
<td width="81">33-10</td>
<td width="289">Paarshad Associates</td>
<td width="289">Grace Land Development Ventures</td>
<td width="124">17-05-06</td>
<td width="109">MCGM</td>
<td width="92">26</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td style="font-weight: 400;" width="92">0</td>
<td style="font-weight: 400;" width="92">0</td>
<td style="font-weight: 400;" width="92">0</td>
<td style="font-weight: 400;" width="92">0</td>
<td style="font-weight: 400;" width="92">0</td>
</tr>
<tr>
<td width="64">613</td>
<td width="88">HE</td>
<td width="221">Shashtri Nagar Rahiwasi CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Pagnis & Pagnis</td>
<td width="289"> M/s. Sai Enterprisess</td>
<td width="124">17-05-06</td>
<td width="109">STGOVT</td>
<td width="92">102</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">614</td>
<td>L</td>
<td width="221">Shree Satyanarayan SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Shri. V. M. Salgaonkar</td>
<td width="289">M/s. Ameya Developers</td>
<td>17-05-06</td>
<td>Private</td>
<td>75</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">615</td>
<td width="88">KW</td>
<td width="221">Roshan Nagar CHSL</td>
<td width="81">33-10</td>
<td width="289">Shri. Pradeep Jain of M/s. Kahaan Project Consulta</td>
<td width="289">M/s. Lashkaria Construction Pvt. Ltd</td>
<td width="124">20-05-06</td>
<td width="109">STGOVT,MHADA</td>
<td width="92">133</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes </td>
<td width="92">Yes</td>
<td width="92">No </td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">616</td>
<td width="88">PN</td>
<td width="221">Bapu Miya Chawl Chs Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri Vishwas Satodia</td>
<td width="289">Venus Developers</td>
<td width="124">20-05-06</td>
<td width="109">Private</td>
<td width="92">42</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">7</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">617</td>
<td width="88">FN</td>
<td width="221">Sanyukt Ekjut CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. Parshad Associates</td>
<td width="289">M/s. Grace Erectors</td>
<td width="124">23-05-06</td>
<td width="109">MCGM</td>
<td width="92">446</td>
<td width="92">0</td>
<td width="92">32</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">618</td>
<td width="88">KW</td>
<td width="221">Aradhna Gururnank CHS</td>
<td width="81">33-10</td>
<td width="289">Mr. Girish P. Choudhari</td>
<td width="289">Mr. Reliance Enterpires</td>
<td width="124">23-05-06</td>
<td width="109">MHADA</td>
<td>597</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No </td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">619</td>
<td>RN</td>
<td width="221">LOPES RESIDENCY SRA CHS</td>
<td>33-10</td>
<td width="289">M/S.POOJA  ASSOCIATES</td>
<td width="289">ABHISHEK ENTERPRISE</td>
<td>30-05-06</td>
<td>Private</td>
<td width="92">31</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">620</td>
<td width="88">KW</td>
<td width="221">Beharambaug Patelwadi CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Design Concept</td>
<td width="289">M/S Monarch  Qureshi Builders</td>
<td width="124">30-05-06</td>
<td width="109">Private</td>
<td width="92">1085</td>
<td width="92"> </td>
<td width="92">188</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No </td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">621</td>
<td width="88">RC</td>
<td width="221">Shree Someshwar CHS Ltd</td>
<td>33-10</td>
<td width="289">Rasik P. Hingoo Associates</td>
<td width="289">M/s. Bhatia Builders  Developers P Ltd</td>
<td>02-06-06</td>
<td width="109">Private</td>
<td>35</td>
<td width="92">46</td>
<td width="92">0</td>
<td width="92">42</td>
<td>yes</td>
<td width="92">yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">622</td>
<td width="88">PN</td>
<td width="221">Pushpa Park Siddhivinayak Chawl Committee</td>
<td width="81">33-10</td>
<td width="289">Shri Vishwas Satodia</td>
<td width="289">Parth developers</td>
<td width="124">03-06-06</td>
<td width="109">Private</td>
<td width="92">51</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">8</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">623</td>
<td width="88">PS</td>
<td width="221">Sahakarwadi Sahakar SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s. Satyam Developers</td>
<td width="124">03-06-06</td>
<td width="109">Private</td>
<td>272</td>
<td>17</td>
<td>0</td>
<td>0</td>
<td>Constructed</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td>0</td>
<td>10</td>
<td>0</td>
<td>0</td>
<td>7</td>
</tr>
<tr>
<td width="64">624</td>
<td width="88">MW</td>
<td width="221">Chembur Paralkarwadi CHS</td>
<td width="81">33-10</td>
<td width="289">Shri. Prakash Sankpal Architects</td>
<td width="289">M/s. Tuli Builders</td>
<td width="124">06-06-06</td>
<td width="109">MHADA</td>
<td width="92">38</td>
<td width="92">0</td>
<td width="92">1</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">625</td>
<td width="88">N</td>
<td width="221">Savli CHS. Ltd</td>
<td width="81">33-10</td>
<td width="289">KISHOR N. SABNE</td>
<td width="289">M/s. Neelyog Construction Pvt. Ltd</td>
<td width="124">08-06-06</td>
<td width="109">STGOVT,MHADA</td>
<td width="92">237</td>
<td width="92">0</td>
<td width="92">21</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">626</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">SHREE RAM CHS (PROP.)</td>
<td width="81">33-10</td>
<td width="289">M.R. Shendye  Associates</td>
<td width="289">Pushpa Construction Co.</td>
<td>17-06-06</td>
<td width="109">Private,Not Available</td>
<td width="92">94</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">  No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">627</td>
<td width="88">KE</td>
<td width="221">RAJ COMPLEX-1 SRA CHS LTD</td>
<td>33-10</td>
<td width="289">Shri. T.N. Hasan</td>
<td width="289">M/s. Raj Developers</td>
<td>17-06-06</td>
<td>Private</td>
<td>115</td>
<td>1</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">628</td>
<td width="88">KW</td>
<td width="221">Anna Nagar kasam nagar & Vitthal Rukhumai CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. P.S. Chamankar & Associates</td>
<td width="289">M/s. K.S. Chamankar Enterprises</td>
<td width="124">20-06-06</td>
<td width="109">STGOVT,MCGM</td>
<td width="92">446</td>
<td width="92">0</td>
<td width="92">437</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">629</td>
<td>L</td>
<td width="221">Sangrash Nagar Sumer Cor.</td>
<td>3-11</td>
<td width="289">Shri.John R Dantas</td>
<td width="289">M/s. Sumer Corporation</td>
<td>23-06-06</td>
<td>Private</td>
<td>0</td>
<td width="92">0</td>
<td>13447</td>
<td>0</td>
<td>No</td>
<td>Partly</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>11498</td>
</tr>
<tr>
<td width="64">630</td>
<td>L</td>
<td width="221">Janakalyan CHS Ltd</td>
<td>33-10</td>
<td width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td width="289">M/s. Accord Builders  Developers</td>
<td>29-06-06</td>
<td>Private,MCGM</td>
<td>450</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">631</td>
<td width="88">PS</td>
<td width="221">Heramb Chhya CHS</td>
<td>33-10</td>
<td width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/S Riddhi Siddhi Corporation</td>
<td width="124">29-06-06</td>
<td width="109">MHADA</td>
<td>30</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">632</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Shree Sai Sahakar Ekta Dr. Amedkar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Taranath Sheety  associates</td>
<td width="289"> Reliable Developer</td>
<td>30-06-06</td>
<td width="109">MCGM</td>
<td width="92">480</td>
<td width="92">0</td>
<td width="92">80</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">633</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Shri Sai Sahakar Ekta CHS</td>
<td width="81">33-10</td>
<td width="289">Shri. Arif L. Shah of M/s. Atharva Consultants</td>
<td width="289">M/S. Reliable Construction</td>
<td>30-06-06</td>
<td width="109">MCGM</td>
<td width="92">480</td>
<td width="92">0</td>
<td width="92">80</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">634</td>
<td>T</td>
<td width="221">Neelkanth Nagar SRA CHS</td>
<td>33-10</td>
<td width="289">M/s. G.S. Gokhale</td>
<td width="289">M/s. R.R. Developers</td>
<td>30-06-06</td>
<td>Private</td>
<td>348</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">635</td>
<td width="88">RS</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td width="289">Mr. JatinBhuta</td>
<td width="289">ARKADE BHOOMI ENTERPRISES</td>
<td width="124">30-06-06</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">155</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">155</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">636</td>
<td>S</td>
<td width="221">Ganesh  chs ltd</td>
<td>33-10</td>
<td width="289">M/s R.T Nalawade  Associates</td>
<td width="289">M/s Classic builders  developers</td>
<td>07-07-06</td>
<td width="109">Private</td>
<td>16</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">YES</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">637</td>
<td width="88">KW</td>
<td width="221">SAHAYOG CHS. (PROP)</td>
<td width="81">33-10</td>
<td width="289">M/S. A.V. VORA ASSOC.  PVT. PTD.</td>
<td width="289">VARAD VINAYAK CONSTRUCTION CO</td>
<td width="124">15-07-06</td>
<td width="109">Private</td>
<td width="92">45</td>
<td width="92">3</td>
<td width="92">0</td>
<td>0</td>
<td width="92">yes </td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">0</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">638</td>
<td width="88">RS</td>
<td width="221">Parvati Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri Vishwas Satodia</td>
<td width="289">Patel Construction Co.</td>
<td width="124">20-07-06</td>
<td width="109">Private</td>
<td width="92">519</td>
<td width="92">210</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">639</td>
<td width="88">RC</td>
<td width="221">Shree Ambe SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s. Nirala Construction</td>
<td width="124">20-07-06</td>
<td width="109">Private</td>
<td>124</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">640</td>
<td width="88">RS</td>
<td width="221">Suhas Modi SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. Skytech Consultants</td>
<td width="289">M/s. Mahaveer Construction</td>
<td width="124">25-07-06</td>
<td width="109">Private</td>
<td width="92">236</td>
<td width="92">74</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">Partly</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">641</td>
<td width="88">ME</td>
<td width="221">Panchsheel SRA CHS Ltd & Ekta SRA CHS Ltd & Shree Sai SRA CHS & Gautam Nagar sra CHS & Vitthal Krupa & Jai Hanuman SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Shri. Sameer V. Kulkarni</td>
<td width="289">M/s. Lakadawala Developers Pvt. Ltd. & <br /> M/s. Satra Reality & Builders Ltd.</td>
<td width="124">28-07-06</td>
<td width="109">MCGM</td>
<td width="92">1773</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">642</td>
<td width="88">ME</td>
<td width="221">Nav Shivneri SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri. S.V.Chemburkar</td>
<td width="289">M/s. Vikas Construction co</td>
<td width="124">01-08-06</td>
<td width="109">Private,STGOVT</td>
<td width="92">233</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">643</td>
<td width="88">ME</td>
<td width="221">3.11</td>
<td width="81">3-11</td>
<td width="289">M/s. G. L. Pangam  Associtaes</td>
<td width="289">Rehab Housing Pvt. Ltd.</td>
<td width="124">01-08-06</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">6262</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">6262</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">644</td>
<td width="88">MW</td>
<td width="221">Mulchand Jhaverchand CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. C. Subhash & Associates.</td>
<td width="289">VATSALYA DEVELOPERS PVT.LTD.</td>
<td width="124">01-08-06</td>
<td width="109">Private</td>
<td width="92">66</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">645</td>
<td width="88">GS</td>
<td width="221">Shree Siddhi Sagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/S. A.V. VORA ASSOC.  PVT. PTD.</td>
<td width="289">M/s. Spark Developers</td>
<td width="124">04-08-06</td>
<td width="109">MCGM</td>
<td width="92">172</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">646</td>
<td width="88">KW</td>
<td width="221">Raghvendra Sahakar (SRA) CHS & Others,Vikas Al-Falah(SRA) CHS, Saraswati (Jogeshawari) (SRA) CHS, Mujaheed (SRA) CHS (Prop), Gulshan Nagar CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/S Sahyog Homes</td>
<td width="124">12-08-06</td>
<td width="109">Private,STGOVT,MHADA</td>
<td>1292</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No </td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">647</td>
<td width="88">HE</td>
<td width="221">Gurukrupa Rahiwasi Sangh CHS</td>
<td width="81">33-10</td>
<td width="289">Dot Architects.</td>
<td width="289">M/s. Satyam Developers</td>
<td width="124">21-08-06</td>
<td width="109">PVT</td>
<td width="92">33</td>
<td width="92">4</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">648</td>
<td width="88">KW</td>
<td width="221">Shree Sai Pawan SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Afcon Developers Pvt. Ltd.</td>
<td width="124">21-08-06</td>
<td width="109">Private</td>
<td>85</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">649</td>
<td width="88">HE</td>
<td width="221">Shivner Golibar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. Griha Rachana</td>
<td width="289">M/s. Citymaker Builders Pvt. Ltd.</td>
<td width="124">23-08-06</td>
<td width="109">MHADA</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">650</td>
<td>S</td>
<td width="221">Pimpleshwar  SRA CHS.</td>
<td>33-10</td>
<td width="289">Prabhakar Satham  Associates</td>
<td width="289">Pooja Developers pvt ltd.</td>
<td>23-08-06</td>
<td width="109">Private</td>
<td>26</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>YES</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">651</td>
<td>L</td>
<td width="221">Om Sai Dham CHS Ltd</td>
<td>33-10</td>
<td width="289">Prabhakar Satham  Associates</td>
<td width="289">M/s. S.K. Enterprises Builders  Developers</td>
<td>24-08-06</td>
<td>Private</td>
<td>88</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">652</td>
<td>T</td>
<td width="221">33 (14)  D</td>
<td>33-14</td>
<td width="289">M/s. Shree Laxmi Estate Pvt. Ltd</td>
<td width="289">Shri. Manoj Daisaria</td>
<td>24-08-06</td>
<td>Private</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">81</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">653</td>
<td width="88">N</td>
<td width="221">Ghatkopar Laxminagar Sneh Sadan CHS (Ltd)</td>
<td width="81">33-10</td>
<td width="289">M/s Griha Rachana</td>
<td width="289">M/s. Ashoka Developers</td>
<td width="124">24-08-06</td>
<td width="109">MHADA,Collector</td>
<td width="92">231</td>
<td width="92">31</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">654</td>
<td width="88">HE</td>
<td width="221">Maharshtra Nagar SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Shri  Samir V. Kulkarni</td>
<td width="289">M/s. Shree Gajraj</td>
<td width="124">25-08-06</td>
<td width="109">STGOVT</td>
<td width="92">841</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">655</td>
<td width="88">HE</td>
<td width="221">Maharashtra Nagar SRA CHS Ltd. & other 4 Societies</td>
<td width="81">33-10</td>
<td width="289">M/S.POOJA  ASSOCIATES</td>
<td width="289">M/s. Shree Gajraj Housing Nirman Pvt. Ltd.</td>
<td width="124">25-08-06</td>
<td width="109">STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">656</td>
<td>RN</td>
<td width="221">Prabhat S.R.A. C.H.S. Ltd</td>
<td>33-10</td>
<td width="289">Mr. Abdullah Siddiqui of M/s. Space Design Consult</td>
<td width="289">Shree Ganesh Construciton</td>
<td>25-08-06</td>
<td>Private</td>
<td width="92">105</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">657</td>
<td width="88">KE</td>
<td width="221">Majaswadi Sankalp SRA CHS Ltd. (Proposed)</td>
<td>33-10</td>
<td width="289">M/s. Skytech Consultants</td>
<td width="289">M/s. Landmark Height Pvt.Ltd</td>
<td>29-08-06</td>
<td>Private</td>
<td>154</td>
<td>0</td>
<td width="92">159</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">658</td>
<td width="88">KE</td>
<td width="221">Shree Sai Sharan (SRA) CHS.Ltd</td>
<td>33-10</td>
<td width="289">M/s.  Shantanoo Rane    Associates</td>
<td width="289">M/s. Shubh Enterprises</td>
<td>30-08-06</td>
<td>Private,STGOVT</td>
<td>105</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">659</td>
<td width="88">KW</td>
<td width="221">Sarvodaya Nagar SRA CHS (LTD)</td>
<td width="81">33-10</td>
<td width="289">Shri Vishwas Satodia</td>
<td width="289">M/s A. M. Soni develop  Developers</td>
<td width="124">31-08-06</td>
<td width="109">Private</td>
<td>95</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td> </td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">660</td>
<td width="88">KE</td>
<td width="221">Sai Prasad SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td width="289">M/s. Hari Om Construction.</td>
<td>05-09-06</td>
<td>Private</td>
<td>47</td>
<td>20</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>10</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">661</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">TAGORE CHS,(PROP)</td>
<td width="81">33-10</td>
<td width="289">Veturkar & Associates <br /> Sharad Shiledar &Associate</td>
<td width="289">M/s Neeta Builders </td>
<td width="124">06-09-06</td>
<td width="109">MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">173</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">662</td>
<td width="88">HE</td>
<td width="221">Pragati Mandal SRA CHS & 50 others Societies</td>
<td width="81">33-10</td>
<td width="289">M/s. Paarshad Associates</td>
<td width="289">Shivalik Ventures Pvt. Ltd</td>
<td width="124">07-09-06</td>
<td width="109">MHADA & STGOVT</td>
<td width="92">5560</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">663</td>
<td>HW</td>
<td width="221">Shree Sai Darshan SRA CHS (LTD)</td>
<td>33-10</td>
<td width="289">M/s. Pagnis & Pagnis</td>
<td width="289">jai Mata Di Developers</td>
<td>07-09-06</td>
<td>STGOVT</td>
<td>40</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>Yes </td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">664</td>
<td width="88">HE</td>
<td width="221">Ashirvad CHS</td>
<td width="81">33-10</td>
<td width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Vaidehi Akash Housing PVT Ltd</td>
<td width="124">08-09-06</td>
<td width="109">PVT</td>
<td width="92">43</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">5</td>
<td width="92">Yes </td>
<td width="92">Yes </td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">5</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">665</td>
<td>T</td>
<td width="221">Shankar Niwas SRA CHS ltd</td>
<td>33-10</td>
<td width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td width="289">M/s Kateeleshwari Dev. Ltd.</td>
<td>08-09-06</td>
<td>STGOVT</td>
<td>247</td>
<td width="92">54</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td>Yes</td>
<td>23</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">666</td>
<td width="88">MW</td>
<td width="221">CHEMBUR S R SCHEME (Charisma Bulider) </td>
<td width="81">3-11</td>
<td width="289">M/s. Ramakant Patil</td>
<td width="289">M/s. Charishma Builders</td>
<td width="124">13-09-06</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">679</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">667</td>
<td width="88">RS</td>
<td width="221">Siddhivinayak CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Mr. Rajendra Ahir.</td>
<td width="289">M/s. Creative Construction</td>
<td width="124">13-09-06</td>
<td width="109">MCGM</td>
<td width="92">63</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">no</td>
<td width="92">0</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">668</td>
<td>GN</td>
<td width="221">JAI HANUMAN NAGAR RAHIVASHI SANGH (PROP)</td>
<td>33-10</td>
<td width="289">ShriUlhasRautArchtects Interior Designers</td>
<td width="289">Dhanjibhai Gala</td>
<td>16-09-06</td>
<td>MCGM</td>
<td width="92">71</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">669</td>
<td>HW</td>
<td width="221">Pali Pareria Wadi CHS</td>
<td>33-10</td>
<td width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s. Sai Arnav Builders and Developers</td>
<td>17-09-06</td>
<td>MCGM</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">670</td>
<td>GN</td>
<td width="221">Shree Sai Siddhi CHS & Janshakti CHS</td>
<td>33-10</td>
<td width="289">M/s. Ravi Raj Architects  Interior Designer.</td>
<td width="289">M/s. Omkar Realtors  Developers P. Ltd.</td>
<td>18-09-06</td>
<td>MCGM</td>
<td width="92">167</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">671</td>
<td width="88">RC</td>
<td width="221">Ganesh Nagar CHS</td>
<td>33-10</td>
<td width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Dhanshree Developer</td>
<td width="124">18-09-06</td>
<td width="109">MHADA</td>
<td>641</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">672</td>
<td width="88">KW</td>
<td width="221">Om Sai Shastri Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. Echelon Design Consultants LLP.</td>
<td width="289">SMGK Developers Pvt. Ltd.</td>
<td width="124">22-09-06</td>
<td width="109">Private</td>
<td width="92">195</td>
<td width="92">5</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">673</td>
<td>FS</td>
<td width="221">Jai Bhavani SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Shri  Samir V. Kulkarni</td>
<td width="289">M/s Om Jaygiri Realtors Pvt. Ltd</td>
<td>26-09-06</td>
<td>MCGM</td>
<td width="92">33</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">674</td>
<td width="88">MW</td>
<td width="221">Sainath Nagar CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. SHAH  ASSOCIATES</td>
<td width="289">M/s. Arihant Realtors</td>
<td width="124">07-11-06</td>
<td width="109">STGOVT</td>
<td width="92">75</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">675</td>
<td width="88">KW</td>
<td width="221">Andheri Savera CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s Mayuree Consultants</td>
<td width="289">M/s. Sweet Angle Home Builders</td>
<td width="124">24-11-06</td>
<td width="109">STGOVT</td>
<td>243</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">676</td>
<td width="88">RS</td>
<td width="221">33(14) D</td>
<td width="81">33-14</td>
<td width="289">M/s. Skytech Consultants</td>
<td width="289">M/s. Shah & Sons</td>
<td width="124">30-11-06</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">28</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">28</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">677</td>
<td width="88">HE</td>
<td width="221">Bandra Saibaba Nagar CHS Ltd & Sant Tukaram CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/S AAKAR ARCHITECTS  CONSULTANTS</td>
<td width="289">M/s. k. Maniar Developers</td>
<td width="124">07-12-06</td>
<td width="109">MHADA</td>
<td width="92">125</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">678</td>
<td width="88">KW</td>
<td width="221">Andheri Shiv Shakti CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/S Anmol Alliance</td>
<td width="124">12-12-06</td>
<td width="109">MHADA</td>
<td>457</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td> </td>
</tr>
<tr>
<td width="64">679</td>
<td width="88">KW</td>
<td width="221">Ashyana  (Andheri – West) S.R.A. CHS.Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri Vishwas Satodia</td>
<td width="289">Siraj Furniturewala</td>
<td width="124">12-12-06</td>
<td width="109">MCGM</td>
<td width="92">135</td>
<td width="92">33</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Part PAPs Constructed </td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">16</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">16</td>
</tr>
<tr>
<td width="64">680</td>
<td width="88">N</td>
<td width="221">CTS No. 184(c) Pt. 194A(Pt.) of Mauli CHS.  </td>
<td width="81">33-10</td>
<td width="289">DAISARIA ASSOCIATES</td>
<td width="289">M/s. Ladam Homes Ltd</td>
<td width="124">12-12-06</td>
<td width="109">MAHADA</td>
<td width="92">172</td>
<td width="92">0</td>
<td width="92">31</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">681</td>
<td width="88">KE</td>
<td width="221">Ajinkya Durga C.H.S. Ltd.</td>
<td>33-10</td>
<td width="289">Shantanoo Rane & Associate</td>
<td width="289">M/s Om Swami Smaran Developers Pvt. Ltd.</td>
<td>18-12-06</td>
<td>Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">682</td>
<td width="88">RS</td>
<td width="221">Shiv bhakti CHSL</td>
<td width="81">33-10</td>
<td width="289">Shantanoo Rane & Associate</td>
<td width="289">M/s Nirman Constructions</td>
<td width="124">26-12-06</td>
<td width="109">Private</td>
<td width="92">48</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">683</td>
<td width="88">HE</td>
<td width="221">Patthar Nagar SRA CHS.</td>
<td width="81">33-10</td>
<td width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td width="289">Housing Development  Imp. India Pvt. Ltd. HDIL</td>
<td width="124">05-02-07</td>
<td width="109">MMRDA</td>
<td width="92">658</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">684</td>
<td width="88">RS</td>
<td width="221">Shree Mauli Bunderpakhadi SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Shri. K.K.Pandey of M/s Rare Associates</td>
<td width="289">M/s. Ariisto Realtors Infrastructure Private Limit</td>
<td width="124">05-02-07</td>
<td width="109">MHADA</td>
<td width="92">2745</td>
<td width="92">876</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">685</td>
<td width="88">RS</td>
<td width="221">33(14)D</td>
<td width="81">33-14</td>
<td width="289">Shri Vishwas Satodia</td>
<td width="289">versatile properties pvt.ltd</td>
<td width="124">05-02-07</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">59</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">686</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Rajiv Gandhi CHS (Prop.)</td>
<td width="81">33-10</td>
<td width="289">Purbi Architect SharadMahajan</td>
<td width="289">M/s. S. M. Associates</td>
<td>08-02-07</td>
<td width="109">MCGM</td>
<td width="92">245</td>
<td width="92">0</td>
<td width="92">35</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">687</td>
<td width="88">RS</td>
<td width="221">Jai Bharat CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/S Mahendra G.Davda</td>
<td width="289">Klassic Vinyal Products Pvt. Ltd.</td>
<td width="124">08-02-07</td>
<td width="109">STGOVT</td>
<td width="92">320</td>
<td width="92">9</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">688</td>
<td width="88">KE</td>
<td width="221">Prathamesh Gundavli SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Shri Jayshing Shinde</td>
<td width="289">M/s. Y. H. & Associates</td>
<td>13-02-07</td>
<td>Private</td>
<td>44</td>
<td>11</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">689</td>
<td width="88">PN</td>
<td width="221">Kamgar Punch Ganga CHS.-I</td>
<td width="81">33-10</td>
<td width="289">M/s. Shah Houscon Pvt. Ltd.</td>
<td width="289">M/s. Neptune Builders & Developers.</td>
<td width="124">13-02-07</td>
<td width="109">Private</td>
<td width="92">35</td>
<td width="92">0</td>
<td width="92">13</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">690</td>
<td width="88">KE</td>
<td width="221">Shraddha SRA CHS</td>
<td>33-10</td>
<td width="289">Shri. T.N. Hasan</td>
<td width="289">M/s. Shraddha Estate</td>
<td>14-02-07</td>
<td>Private</td>
<td>44</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">691</td>
<td width="88">RS</td>
<td width="221">Motilal CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s.  Shantanoo Rane    Associates</td>
<td width="289">M/s. Destiny Constrution</td>
<td width="124">14-02-07</td>
<td width="109">Private</td>
<td width="92">24</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">692</td>
<td width="88">PS</td>
<td width="221">Laxmi Nagar Development SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">T. N. Hasan of M/s Punar Vikas Vastushastra</td>
<td width="289">Reliable Constrution</td>
<td width="124">14-02-07</td>
<td width="109">Private</td>
<td>321</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">693</td>
<td width="88">KE</td>
<td width="221">Shivshakti SRA CHS Ltd.</td>
<td>33-10</td>
<td width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s. Anshuman Developer</td>
<td>20-02-07</td>
<td>Private</td>
<td>62</td>
<td>15</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">694</td>
<td width="88">KE</td>
<td width="221">Shree Siddhivinayak Andheri SRA CHS Ltd. & Om Siddhivinayak Andheri SRA CHS Ltd.</td>
<td>33-10</td>
<td width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s. Sagaar Developers</td>
<td>20-02-07</td>
<td>Private</td>
<td>213</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">695</td>
<td width="88">KE</td>
<td width="221">Indira Nagar (Jogeshwari) SRA CHS Ltd.</td>
<td>33-10</td>
<td width="289">M/s. SARANG  ASSOCIATES</td>
<td width="289">Tainwala Builders</td>
<td>20-02-07</td>
<td>MHADA</td>
<td>821</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">696</td>
<td width="88">RS</td>
<td width="221">Shree Renuka CHSL</td>
<td width="81">33-10</td>
<td width="289">M/s.  Shantanoo Rane    Associates</td>
<td width="289">M/s. Bau Developers Pvt. Ltd</td>
<td width="124">20-02-07</td>
<td width="109">MHADA</td>
<td width="92">111</td>
<td width="92">81</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">697</td>
<td width="88">RC</td>
<td width="221">Shree Mangalmurti (Borivali) SRA CHS. Ltd</td>
<td>33-10</td>
<td width="289">Shri. Anil Kalgutkar</td>
<td width="289">M/s. Shree Varadvinayak Enterprises</td>
<td>22-02-07</td>
<td width="109">MHADA</td>
<td>63</td>
<td width="92">24</td>
<td width="92">0</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">Yes</td>
<td>Yes</td>
<td>0</td>
<td>15</td>
<td>0</td>
<td>0</td>
<td>4</td>
</tr>
<tr>
<td width="64">698</td>
<td width="88">HE</td>
<td width="221">33(14) D</td>
<td width="81">33-14</td>
<td width="289">M/s. Samoon  Associates</td>
<td width="289">M/s. Osia Properties Pvt. Ltd.</td>
<td width="124">02-03-07</td>
<td width="109">PVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">32</td>
<td width="92">Yes </td>
<td width="92">Yes </td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">32</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">699</td>
<td width="88">PN</td>
<td width="221">Rahul SRA CHS proposed</td>
<td width="81">33-10</td>
<td width="289">Shri. Jatin Shah</td>
<td width="289">M/s. Rosefinch developer’s</td>
<td width="124">07-03-07</td>
<td width="109">Private</td>
<td width="92">31</td>
<td width="92">3</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">700</td>
<td width="88">PS</td>
<td width="221">Shri. Sai Shraddha SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Mr. JatinBhuta</td>
<td width="289">M/s REKHA DEVELOPER</td>
<td width="124">07-03-07</td>
<td width="109">MHADA</td>
<td>62</td>
<td>28</td>
<td>0</td>
<td>0</td>
<td>yes</td>
<td width="92">yes</td>
<td width="92">no</td>
<td>0</td>
<td>15</td>
<td>0</td>
<td>0</td>
<td>6</td>
</tr>
<tr>
<td width="64">701</td>
<td>RN</td>
<td width="221">Jankalyan (Dahisar) SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Shantanoo Rane & Associate</td>
<td width="289">M/s. Relliance  Construction</td>
<td>15-03-07</td>
<td>MHADA</td>
<td width="92">2219</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">702</td>
<td width="88">MW</td>
<td width="221">Shivaji Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. G. L. Pangam  Associtaes</td>
<td width="289">Surana Constructions</td>
<td width="124">27-04-07</td>
<td width="109">MHADA</td>
<td width="92">252</td>
<td width="92">0</td>
<td width="92">13</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">703</td>
<td>L</td>
<td width="221">3.11</td>
<td>33-10</td>
<td width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td width="289">M/s. Tungwa Developers</td>
<td>30-04-07</td>
<td>Private</td>
<td>0</td>
<td width="92">0</td>
<td>1996</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>1996</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">704</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">New Nehru Nagar (SRA) CHS</td>
<td width="81">33-10</td>
<td width="289"> Rahul Veturkar</td>
<td width="289">Mukhtar Ahmed Sattar Ahmed</td>
<td width="124">01-05-07</td>
<td width="109">MCGM</td>
<td width="92">48</td>
<td width="92">0</td>
<td width="92">12</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">705</td>
<td width="88">D</td>
<td width="221">Betwala Sadan CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Setsquare Project Consultant</td>
<td width="289">Yash Realtors</td>
<td width="124">10-05-07</td>
<td width="109">STGOVT</td>
<td width="92">37</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">706</td>
<td width="88">PS</td>
<td width="221">Shri Ganesh Ekta CHS (Ltd.)</td>
<td>33-10</td>
<td width="289">Shri. Naresh Waghchaude M/s.Hardik Associates</td>
<td width="289">M/s. Reddy Builders & Developers<br /> M/s. Reddy Builders and Developers</td>
<td width="124">10-05-07</td>
<td width="109">STGOVT,MHADA</td>
<td>620</td>
<td>151</td>
<td>0</td>
<td>0</td>
<td>not constructed</td>
<td width="92">No</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">707</td>
<td width="88">ME</td>
<td width="221">RAMJI NANDAN SRA CHS</td>
<td width="81">33-10</td>
<td width="289">M/s.  Shantanoo Rane    Associates</td>
<td width="289">Rameshwar Corporation</td>
<td width="124">18-05-07</td>
<td width="109">MCGM</td>
<td width="92">518</td>
<td width="92">0</td>
<td width="92">58</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">708</td>
<td width="88">PN</td>
<td width="221">Kartik CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">MR. ARIF L. SHAH OF M/S. ATHARVA CONSULTANTS.</td>
<td width="289">M/s. Oriental Hotel Management</td>
<td width="124">24-05-07</td>
<td width="109">Private</td>
<td width="92">93</td>
<td width="92">95</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">709</td>
<td width="88">RS</td>
<td width="221">33 (14) (D)</td>
<td width="81">33-14</td>
<td width="289">M/s. Sanjay Neve  Associates</td>
<td width="289">Right Channel Construction Pvt. Ltd.</td>
<td width="124">07-06-07</td>
<td width="109">Private</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">28</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">28</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">710</td>
<td>T</td>
<td width="221">Mulund Wadarpada Shree Dattaguru CHS Ltd.</td>
<td>33-10</td>
<td width="289">M/s. Grit Architecutral Consultancy Pvt. Ltd</td>
<td width="289">M/s. R. K. Developer</td>
<td>08-06-07</td>
<td>MHADA</td>
<td>135</td>
<td>17</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">711</td>
<td width="88">KW</td>
<td width="221">Sarvadharmiya Sahakari Grihamirman Sanstha (prop)</td>
<td width="81">33-10</td>
<td width="289">Vilas P. Kharche</td>
<td width="289">M/s. DARSHAN DEVELOPERS PVT LTD</td>
<td width="124">12-06-07</td>
<td width="109">STGOVT,MHADA</td>
<td> </td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td>No</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td width="64">712</td>
<td>T</td>
<td width="221">Ganesh CHS (Ltd.)</td>
<td>33-10</td>
<td width="289">M/s. S.S Associates</td>
<td width="289">M/s Aruna Developers</td>
<td>14-06-07</td>
<td>STGOVT</td>
<td>55</td>
<td>14</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>yes </td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">713</td>
<td width="88">KW</td>
<td width="221">White House CHS (prop)</td>
<td width="81">33-10</td>
<td width="289">SAYED HAROON RASHID</td>
<td width="289">SKYLINE INTERNATIONALS BUILDERS   DEVELOPERS</td>
<td width="124">18-06-07</td>
<td width="109">Private</td>
<td>27</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">714</td>
<td width="88">FN</td>
<td width="221">Jai Santoshi Mata CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Oasis Consultants</td>
<td width="289">M/s. Krishna Constructions</td>
<td width="124">19-06-07</td>
<td width="109">MCGM</td>
<td width="92">146</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">715</td>
<td width="88">RS</td>
<td width="221">Bandongri Ekta CHS (Proposed)</td>
<td width="81">33-10</td>
<td width="289">M/s. Sanjay Neve  Associates</td>
<td width="289">M/s. Yogsiddhi Developers</td>
<td width="124">21-06-07</td>
<td width="109">STGOVT</td>
<td width="92">189</td>
<td width="92">159</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">partly</td>
<td width="92">No</td>
<td width="92">12</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">716</td>
<td width="88">KE</td>
<td width="221">Om Shree Sai SRA CHS</td>
<td>33-10</td>
<td width="289">M/s.Consultants Combined</td>
<td width="289">M/s. Charmee Enterprisesm</td>
<td>24-06-07</td>
<td>MCGM</td>
<td>131</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">717</td>
<td>S</td>
<td width="221">Om shanti CHS. (prop)</td>
<td>33-10</td>
<td width="289">Deshmukh  associates.</td>
<td width="289">Aakruti concepts pvt.ltd.</td>
<td>05-07-07</td>
<td width="109">Private</td>
<td>75</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">718</td>
<td width="88">RS</td>
<td width="221">Vishwadeep, Tridevi, Adarsh C.H.S. LTD</td>
<td width="81">33-10</td>
<td width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289">M/s. Dharmesh Construction pvt.Ltd</td>
<td width="124">07-07-07</td>
<td width="109">STGOVT</td>
<td width="92">479</td>
<td width="92">0</td>
<td width="92">249</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">719</td>
<td width="88">FN</td>
<td width="221">Siddharth Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri. Sandip Sirsat</td>
<td width="289">M/s. S. B. Brothers</td>
<td width="124">09-07-07</td>
<td width="109">MHADA</td>
<td width="92">0</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">720</td>
<td width="88">N</td>
<td width="221">SHANTINIKETAN CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s Prathmesh Developers</td>
<td width="124">12-07-07</td>
<td width="109">MHADA</td>
<td width="92">31</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">721</td>
<td width="88">N</td>
<td width="221">CTS No. 1268 B/e(Pt.) & 1269(Pt.) ofShanti Niketan SRA CHS.</td>
<td width="81">33-10</td>
<td width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s Prathmesh Developers</td>
<td width="124">12-07-07</td>
<td width="109">MHADA</td>
<td width="92">31</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">722</td>
<td width="88">KE</td>
<td width="221">Sai Krupa (Gundivali) SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Shri Jarin Shah, M/s. Shah & Associates</td>
<td width="289">M/s. New India Construction Company</td>
<td>16-07-07</td>
<td>Private</td>
<td>161</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">723</td>
<td>HW</td>
<td width="221">Navi Sherali Mata Yashodhara Rahivasi CHS Ltd</td>
<td>33-10</td>
<td width="289">M/s. Tipnis Consultants</td>
<td width="289">M/s. Joy Builders</td>
<td>17-07-07</td>
<td>Private</td>
<td>615</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">724</td>
<td>T</td>
<td width="221">Avani coop. hsg. Soc. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">S.S. Associates  Architect And Int  Designer</td>
<td style="font-weight: 400;" width="289">M/s Aruna Construction</td>
<td>19-07-07</td>
<td>STGOVT</td>
<td>39</td>
<td>8</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">725</td>
<td>GN</td>
<td width="221">Mahim Janta SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s Gawde Associates</td>
<td>20-07-07</td>
<td>Private</td>
<td width="92">65</td>
<td width="92">0</td>
<td width="92">7</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">7</td>
</tr>
<tr>
<td width="64">726</td>
<td width="88">HE</td>
<td width="221">Shankar Dham CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">PAGNIS & PAGNIS</td>
<td width="289">RADHEKRISHNA DEVELOPERS</td>
<td width="124">20-07-07</td>
<td width="109">PVT</td>
<td width="92">72</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">727</td>
<td width="88">KW</td>
<td width="221">33(14)D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">PUSHKAR B. S</td>
<td width="289">MADHULI HOUSING  FINANCE CO LTD</td>
<td width="124">21-07-07</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">67</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">728</td>
<td width="88">PN</td>
<td width="221">Snehal Sadan SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Santosh Zirmute of M/s. Arch View Associates</td>
<td width="289">M/s. P.G. Enterprises</td>
<td width="124">03-08-07</td>
<td width="109">Private</td>
<td width="92">51</td>
<td width="92">16</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">729</td>
<td width="88">N</td>
<td width="221">SHRI SAI SIDDHI CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Arch Dimension</td>
<td width="289">Aditi land infrastructure developers</td>
<td width="124">03-08-07</td>
<td width="109">Private</td>
<td width="92">46</td>
<td width="92">0</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">730</td>
<td width="88">FN</td>
<td width="221">Nisarg CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td width="289">M/s. Parshad Associates</td>
<td width="289">Grace Ashiyana Builders</td>
<td width="124">09-08-07</td>
<td width="109">MCGM</td>
<td width="92">123</td>
<td width="92">111</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">731</td>
<td width="88">MW</td>
<td width="221">Chembur Suswagatam SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Joshi  Associates</td>
<td style="font-weight: 400;" width="289">Shreenath Developers</td>
<td width="124">10-08-07</td>
<td width="109">STGOVT,MHADA</td>
<td width="92">237</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">732</td>
<td width="88">MW</td>
<td width="221">Chembur Lal Dongar Vaibhav CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">Vital Developers Pvt. Ltd.</td>
<td width="124">16-08-07</td>
<td width="109">STGOVT</td>
<td width="92">223</td>
<td width="92">0</td>
<td width="92">18</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">733</td>
<td width="88">KE</td>
<td width="221">Triveni Sangam SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">AJITKUMAR G. RANE</td>
<td style="font-weight: 400;" width="289">M/s. Charmee Corporation</td>
<td>17-08-07</td>
<td>Private</td>
<td>327</td>
<td>4</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">734</td>
<td width="88">MW</td>
<td width="221">Savitribai Phule Sahakari Griha Nirman Sanstha & Dr. Babasaheb Ambedkar Chowk Sahakari Griha Nirman Sanstha</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Rajendra pagnis</td>
<td width="289">MAA ASHAPURA DEVELOPERS</td>
<td width="124">23-08-07</td>
<td width="109">STGOVT</td>
<td width="92">228</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">735</td>
<td width="88">KW</td>
<td width="221">Fakirabad SRA CHS (prop). & other 3 CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shantanoo Rane & Associate</td>
<td style="font-weight: 400;" width="289">M/s. Twin & Deccan Builders</td>
<td width="124">29-08-07</td>
<td width="109">Private</td>
<td>935</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">736</td>
<td width="88">RC</td>
<td width="221">Durgadevi Ekta CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shantanoo Rane & Associate</td>
<td width="289">Pawan Sheth  Associates</td>
<td>29-08-07</td>
<td width="109">MHADA</td>
<td>143</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">737</td>
<td width="88">KE</td>
<td width="221">33 (14) D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td style="font-weight: 400;" width="289">M/s. Shraddha Enterprises</td>
<td>29-08-07</td>
<td>Private</td>
<td>35</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">738</td>
<td width="88">KW</td>
<td width="221">Santosh Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Consultants Combined</td>
<td width="289">M/s. Unity Group</td>
<td width="124">29-08-07</td>
<td width="109">Private</td>
<td width="92">114</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">34</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">739</td>
<td>S</td>
<td width="221">3.11  CTS 683-A</td>
<td>3-11</td>
<td style="font-weight: 400;" width="289">Shri. Satish Hande</td>
<td width="289">M/s. Vijayraj Developers</td>
<td>30-08-07</td>
<td width="109">Private</td>
<td>0</td>
<td>74</td>
<td>0</td>
<td>0</td>
<td width="92">Yes</td>
<td>Yes</td>
<td>YES</td>
<td>0</td>
<td>74</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">740</td>
<td width="88">RS</td>
<td width="221">Shree Gurukrupa SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td style="font-weight: 400;" width="289">M/s. J.P Corporation</td>
<td width="124">06-09-07</td>
<td width="109">Private</td>
<td width="92">43</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">Yes</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">741</td>
<td width="88">RS</td>
<td width="221">Ganesh Krupa  SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">K.K Enterprises</td>
<td width="124">06-09-07</td>
<td width="109">STGOVT,MHADA</td>
<td width="92">151</td>
<td width="92">223</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">partly</td>
<td width="92">Yes</td>
<td width="92">78</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">742</td>
<td width="88">HE</td>
<td width="221">Amrut Manthan SRA CHS.(Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">Gurukrupa Developers</td>
<td width="124">10-09-07</td>
<td width="109">PVT</td>
<td width="92">170</td>
<td width="92">22</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">Yes </td>
<td width="92">Yes</td>
<td width="92">22</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">743</td>
<td width="88">GS</td>
<td width="221">Aman Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s. Siddhivinayak Developers</td>
<td width="124">11-09-07</td>
<td width="109">MCGM</td>
<td width="92">29</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">744</td>
<td>L</td>
<td width="221">Mahajan SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Shri Nilesh Dholakia Of M/s. Saachi Associates</td>
<td width="289">M/s  Hindustan Builders</td>
<td>12-09-07</td>
<td>Private</td>
<td>88</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">745</td>
<td>S</td>
<td width="221">Om Sai Ram chs</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Hemant Parikh  Associates</td>
<td style="font-weight: 400;" width="289">S.S.V. Developers  Builders</td>
<td>12-09-07</td>
<td width="109">Private</td>
<td>94</td>
<td>0</td>
<td>15</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">746</td>
<td width="88">RS</td>
<td width="221">Mangalmay SRA CHSL</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td width="289">M/s. Shree Mangal Associates</td>
<td width="124">14-09-07</td>
<td width="109">MCGM</td>
<td width="92">84</td>
<td width="92">29</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">Yes</td>
<td width="92">29</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">747</td>
<td width="88">PN</td>
<td width="221">Ekta Welfare SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td style="font-weight: 400;" width="289">M/s. Cosmic Developer</td>
<td width="124">18-09-07</td>
<td width="109">Private</td>
<td width="92">46</td>
<td width="92">0</td>
<td width="92">18</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">31</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">748</td>
<td>RN</td>
<td width="221">Shree Sai Sil Coop. Hsg. Society Ltd</td>
<td>33-10</td>
<td width="289">M/s. Sunil Ambre  Associates</td>
<td width="289">M/s. Siddhitech Developers</td>
<td>24-09-07</td>
<td>Private</td>
<td width="92">109</td>
<td width="92">33</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">749</td>
<td width="88">RC</td>
<td width="221">Shree Sai Dwarka CHSL</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shantanoo Rane & Associate</td>
<td width="289">M/s. Shubh Enterprises</td>
<td>27-09-07</td>
<td width="109">Private</td>
<td>36</td>
<td width="92">89</td>
<td width="92">0</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">yes</td>
<td>Yes</td>
<td>89</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">750</td>
<td>S</td>
<td width="221">Chandradhan Gruhnirman CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">S.S. Associates  Architect And Int  Designer</td>
<td width="289">M/s. Shri Swami Samarth Developer</td>
<td>29-09-07</td>
<td width="109">Private</td>
<td>36</td>
<td>8</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td width="92">yes</td>
<td>0</td>
<td>8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">751</td>
<td width="88">KE</td>
<td width="221">Govind Nagar SRA Co.Op. Hsg. Society Limited</td>
<td>33-10</td>
<td width="289">M/s. D. P. Associates</td>
<td width="289">M/s. Mass Developers</td>
<td>03-10-07</td>
<td>Private</td>
<td>196</td>
<td>50</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">752</td>
<td width="88">GS</td>
<td width="221">Mahalaxmi Co-op. Hsg. Society SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td width="289">Omkar Realators & Developers Pvt. Ltd</td>
<td width="124">26-10-07</td>
<td width="109">Private,MCGM</td>
<td width="92">1505</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">753</td>
<td width="88">PS</td>
<td width="221">Swami Samarth SRA CHS</td>
<td>33-10</td>
<td width="289">Snehal S. Shah of M/s. Techno Arch.</td>
<td width="289">M/s. Kunjan Planner Ltd.</td>
<td width="124">26-10-07</td>
<td width="109">Private</td>
<td>150</td>
<td>95</td>
<td>0</td>
<td>0</td>
<td>yes</td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td>95</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">754</td>
<td width="88">KW</td>
<td width="221">Patel Chawl S.R.A. C.H.S. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Adaam air Architects</td>
<td style="font-weight: 400;" width="289">M/s. United Developer</td>
<td width="124">27-10-07</td>
<td width="109">Private</td>
<td>120</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">755</td>
<td width="88">PS</td>
<td width="221">Shreyas CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Ketan Vaidya Associates</td>
<td width="289">Prem Leela Developer</td>
<td width="124">29-10-07</td>
<td width="109">Private</td>
<td>72</td>
<td>5</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">756</td>
<td width="88">GS</td>
<td width="221">Bhagwan Shriram SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s. N. K. Builders & Developers</td>
<td width="124">03-11-07</td>
<td width="109">MCGM</td>
<td width="92">154</td>
<td width="92">0</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">757</td>
<td width="88">N</td>
<td width="221">Ghatkopar Laxmi Nagar Shivprasad CHS Ltd.</td>
<td width="81">33-10</td>
<td width="289">Shri. Manoj V. Daisaria</td>
<td width="289">M/s. Shri Sai Deep Realtors Pvt. Ltd.</td>
<td width="124">05-11-07</td>
<td width="109">MCGM</td>
<td width="92">205</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">758</td>
<td width="88">PN</td>
<td width="221">M/s. Trimurti S.R.A. Co-Op. Hsg. Soc. Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. JatinBhuta</td>
<td style="font-weight: 400;" width="289">M/s Sunshine Housing Development Pvt. Ltd.</td>
<td width="124">05-11-07</td>
<td width="109">Private,MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">759</td>
<td>S</td>
<td width="221">SHIVAJI NAGAR CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Hemant Parikh  Associates</td>
<td width="289">M/s. Vinayak Realtors</td>
<td>05-11-07</td>
<td width="109">MHADA</td>
<td>186</td>
<td>28</td>
<td>37</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">760</td>
<td>T</td>
<td width="221">Veer Sambhaji Nagar CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">Farewell Real Estate Pvt. Ltd</td>
<td>06-11-07</td>
<td>STGOVT</td>
<td>692</td>
<td>160</td>
<td>250</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">761</td>
<td width="88">MW</td>
<td width="221">N.G. Acharya Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jintendra Patel Of M/s. Aakar Architects & C</td>
<td width="289">M/s. K.D. Lite Developers</td>
<td width="124">08-11-07</td>
<td width="109">MHADA</td>
<td width="92">274</td>
<td width="92">0</td>
<td width="92">29</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">762</td>
<td width="88">N</td>
<td width="221">GANESHWADI CO.OP. HSG.SOC. LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.DESIGN OF TRENDS</td>
<td width="289">M/s Ankita Builders  Developers</td>
<td width="124">08-11-07</td>
<td width="109">Private</td>
<td width="92">355</td>
<td width="92">0</td>
<td width="92">122</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">763</td>
<td>RN</td>
<td width="221">Sachin Nagar SRA C.H.S.L & Shree Shakti CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shantanoo Rane & Associate</td>
<td style="font-weight: 400;" width="289">M/s. S.R. Developers</td>
<td>12-11-07</td>
<td>MHADA</td>
<td width="92">288</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">764</td>
<td>HW</td>
<td width="221">Jamat E Jamhooria CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s. Pyramid Developers</td>
<td>14-11-07</td>
<td>Private,STGOVT</td>
<td>676</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">765</td>
<td width="88">D</td>
<td width="221">Shree Datta Mandir CHS, Namdeowadi CHS, Vitthalwadi CHS.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. BHUPENDRA PATRAWALA</td>
<td style="font-weight: 400;" width="289">M/s. HALKARA CONST. CO. PVT. LTD.</td>
<td width="124">16-11-07</td>
<td width="109">Private</td>
<td width="92">248</td>
<td width="92">111</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">766</td>
<td width="88">PN</td>
<td width="221">Sainath CHS</td>
<td width="81">33-10</td>
<td width="289">P.S. DESAI</td>
<td width="289">Mahalaxmi Associates</td>
<td width="124">29-12-07</td>
<td width="109">Private</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">767</td>
<td>HW</td>
<td width="221">33(10) Om Metal construction</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">M/s.OM metal Constortium</td>
<td>04-01-08</td>
<td>MHADA</td>
<td>180</td>
<td>35</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>NO</td>
<td width="92">0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">768</td>
<td>T</td>
<td width="221">Mulund Siddhivinayak CHS. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vinod Dharap.</td>
<td width="289">Meera Enterprises</td>
<td>17-01-08</td>
<td>Private</td>
<td>44</td>
<td>7</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">769</td>
<td width="88">KE</td>
<td width="221">Majaswadi inqlab nagar CHS. LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah</td>
<td style="font-weight: 400;" width="289">M/S Aishwarya Light Construction</td>
<td>20-02-08</td>
<td>MHADA</td>
<td>51</td>
<td>0</td>
<td width="92">34</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">770</td>
<td width="88">RS</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td width="289">M/s. Arvind Nandpurkar</td>
<td width="289">M/s. Kandivali Metal Works</td>
<td width="124">21-04-08</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">104</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">771</td>
<td width="88">RC</td>
<td width="221">Dr. Ambedkar Nagar Borivali S.R.A.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">Arpan Properties Pvt. Ltd.</td>
<td>12-05-08</td>
<td width="109">Private</td>
<td>210</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">772</td>
<td>L</td>
<td width="221">3.11 HDIL</td>
<td>3-11</td>
<td style="font-weight: 400;" width="289">Bidco Engineering Division</td>
<td style="font-weight: 400;" width="289">M/s. Housing Development  Infrastructure Ltd. HD</td>
<td>26-05-08</td>
<td>Private</td>
<td>0</td>
<td width="92">0</td>
<td>18645</td>
<td>0</td>
<td>Partly</td>
<td>Partly</td>
<td>No</td>
<td>0</td>
<td>400</td>
<td>697</td>
<td>556</td>
<td>93</td>
</tr>
<tr>
<td width="64">773</td>
<td width="88">PS</td>
<td width="221">Vivekanand SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Shreedham construction Pvt. Ltd</td>
<td width="124">21-06-08</td>
<td width="109">Private,MHADA</td>
<td>228</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">16</td>
<td>Constructed</td>
<td width="92">Full O.C. granted to Rehab bldg.</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">774</td>
<td>RN</td>
<td width="221">SHREE MORESHWAR S.R.A. CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Abdullah Siddiqui of M/s. Space Design Consult</td>
<td width="289">M/s. Shree Jai Ambe Developers</td>
<td>27-06-08</td>
<td>Private,STGOVT</td>
<td width="92">262</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">775</td>
<td>FS</td>
<td width="221">Shahid Nagar SRA CHS Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td style="font-weight: 400;" width="289">M/s. Neumec Developers  Builders</td>
<td>02-07-08</td>
<td>MCGM</td>
<td width="92">110</td>
<td width="92">17</td>
<td width="92">39</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">776</td>
<td width="88">PN</td>
<td width="221">Janu Bhoye SRA CHS Ltd,Aikyavardhak SRA CHS Ltd,Shri. Shiv Konkan SRA CHS Ltd,Rajiv SRA CHS(Prop),Khot Pragati SRA CHS(Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td width="124">05-07-08</td>
<td width="109">Private,MCGM</td>
<td width="92">2772</td>
<td width="92">62</td>
<td width="92">661</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">777</td>
<td>T</td>
<td width="221">Satyawadi SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td style="font-weight: 400;" width="289">Aakruti concepts pvt.ltd.</td>
<td>05-07-08</td>
<td>STGOVT</td>
<td>166</td>
<td>50</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">778</td>
<td>S</td>
<td width="221">33 (14) D</td>
<td>33-14</td>
<td width="289">M/s. Salvi  Associates</td>
<td width="289">M/s. Dharmesh Construction</td>
<td>09-07-08</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>23</td>
<td width="92">Constructed</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">779</td>
<td>L</td>
<td width="221">3.11 HDIL</td>
<td>3-11</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td width="289">M/s. Fine Developers</td>
<td>10-07-08</td>
<td>Private</td>
<td>0</td>
<td width="92">0</td>
<td>1882</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">780</td>
<td width="88">PN</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td width="289">K. N. PATEL</td>
<td width="289">M/s. K.N. Patel & Associate</td>
<td width="124">10-07-08</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">63</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">781</td>
<td width="88">RS</td>
<td width="221">Charkop Ekta Nagar CHS (Prop)</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri. Ketan Belsare</td>
<td style="font-weight: 400;" width="289">M/s. Vijay Kamal Properties Pvt. Ltd.</td>
<td width="124">11-07-08</td>
<td width="109">MHADA</td>
<td width="92">0</td>
<td width="92">935</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">782</td>
<td width="88">KW</td>
<td width="221">Sapna Co Op HSG SOC (PROP)</td>
<td width="81">33-10</td>
<td width="289">M/s. RACHNA ARCHITECT & ENGINEERING</td>
<td width="289">M/s. SAGAR DEVELOERS</td>
<td width="124">18-07-08</td>
<td width="109">STGOVT</td>
<td>331</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">783</td>
<td>S</td>
<td width="221">Vaikunthdham CHS (Ltd)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Bhavsar Consultants</td>
<td style="font-weight: 400;" width="289"> M/s. Shivshankar Shivram Singh    Others</td>
<td>18-07-08</td>
<td width="109">Private</td>
<td>108</td>
<td>6</td>
<td>14</td>
<td>0</td>
<td width="92">Partly</td>
<td width="92">Partly</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">784</td>
<td width="88">KE</td>
<td width="221">SIDHI VINAYAK C.H.S. (PROP)</td>
<td>33-10</td>
<td width="289">BOMBAY ARCHITECTURAL CONSULTANTS B.H.RATHOD</td>
<td width="289">KARAN CONSTRUCTION</td>
<td>18-08-08</td>
<td>MHADA</td>
<td>131</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">785</td>
<td width="88">KE</td>
<td width="221">NEW TECHNICAL SRA CHS LTD.</td>
<td>33-10</td>
<td width="289">Shri.jitendra B. Patel</td>
<td width="289">EVERSMILE CONSTRUCTION CO. PVT. LTD</td>
<td>22-08-08</td>
<td>Private</td>
<td>340</td>
<td>248</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">786</td>
<td width="88">FN</td>
<td width="221">Shivprerna (Wadala) SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s. S. D. Corporation</td>
<td width="124">26-08-08</td>
<td width="109">STGOVT</td>
<td width="92">514</td>
<td width="92">0</td>
<td width="92">338</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">787</td>
<td width="88">FN</td>
<td width="221">Sagar CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">Super Constraction Co</td>
<td width="124">27-08-08</td>
<td width="109">STGOVT</td>
<td width="92">114</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">788</td>
<td>L</td>
<td width="221">Sayyed  Chawl CHS (Prop)</td>
<td>33-10</td>
<td width="289">M/s Anil Patil Consultant Pvt. Ltd.</td>
<td width="289">M/s.  Win  Enterprises</td>
<td>30-08-08</td>
<td>Private</td>
<td>62</td>
<td>8</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">789</td>
<td width="88">RC</td>
<td width="221">Gayatri  SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">M/s Gayatri Builders and Kohinoor Builders  Devel</td>
<td>30-08-08</td>
<td width="109">MCGM</td>
<td>33</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">yes</td>
<td>Yes</td>
<td>8</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">790</td>
<td width="88">MW</td>
<td width="221">Jay Ambe (Chembur) SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td width="124">06-09-08</td>
<td width="109">STGOVT</td>
<td width="92">171</td>
<td width="92">19</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">19</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">791</td>
<td>FS</td>
<td width="221">Balaji CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Spaceage Consultant</td>
<td width="289">M/s Renuka Realators</td>
<td>08-09-08</td>
<td>Private,STGOVT</td>
<td width="92">379</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">work in progress</td>
<td width="92">Part OC granted</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">792</td>
<td>GN</td>
<td width="221">Kalash Co.Op. Hsg. Soc</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td>08-09-08</td>
<td>Private</td>
<td width="92">64</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">793</td>
<td width="88">FN</td>
<td width="221">Sanjay Gandhi Nagar CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Prakash Sankpal Architects</td>
<td width="289">M/s. Pragatej Builders  Developers</td>
<td width="124">09-09-08</td>
<td width="109">MCGM</td>
<td width="92">130</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">794</td>
<td width="88">FN</td>
<td width="221">Santoshi Mata Radhakrushna CHS (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Hemant Parikh</td>
<td style="font-weight: 400;" width="289">M/s. New look Constructions</td>
<td width="124">11-09-08</td>
<td width="109">MCGM</td>
<td width="92">146</td>
<td width="92">0</td>
<td width="92">78</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">795</td>
<td width="88">ME</td>
<td width="221">Morya CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">M/s. Mhatre  Associets</td>
<td width="289">M/s. Morya Homes</td>
<td width="124">11-09-08</td>
<td width="109">STGOVT</td>
<td width="92">223</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">796</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Dr. Ambedkar Nagar CHS MATUNGA- Rahul Utkarsh Mamta CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dilip Tambday  Associates</td>
<td style="font-weight: 400;" width="289">Mahalaxmi Builders  Contractors</td>
<td>19-09-08</td>
<td width="109">MCGM</td>
<td width="92">321</td>
<td width="92">0</td>
<td width="92">46</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">797</td>
<td width="88">KW</td>
<td width="221">Ajmeri CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td style="font-weight: 400;" width="289">M/s. Kunal Builders</td>
<td width="124">12-10-08</td>
<td width="109">STGOVT</td>
<td>138</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">798</td>
<td width="88">PN</td>
<td width="221">Malad Babjiwadi Saidham CHS</td>
<td width="81">33-10</td>
<td width="289">Shri Suresh Mhatre M/s. Mhatre & Associates</td>
<td width="289">M/s. Milan Builders & Developers</td>
<td width="124">21-10-08</td>
<td width="109">STGOVT</td>
<td width="92">28</td>
<td width="92">4</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">799</td>
<td width="88">HE</td>
<td width="221">Vailankani CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Verticohorizon</td>
<td style="font-weight: 400;" width="289">M/s. A. M. Constructions</td>
<td width="124">01-11-08</td>
<td width="109">PVT</td>
<td width="92">47</td>
<td width="92">35</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">800</td>
<td>T</td>
<td width="221">Vidyapati CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. G.S. Gokhale</td>
<td style="font-weight: 400;" width="289">M/s. Sai Construction</td>
<td>27-11-08</td>
<td>STGOVT</td>
<td>65</td>
<td>38</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">801</td>
<td width="88">N</td>
<td width="221">Pankeshababa (SRA) Co. Op. Hsg. Society Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td style="font-weight: 400;" width="289">ROCKLINE PROPERTIES  DEVELOPERS PVT LTD</td>
<td width="124">01-12-08</td>
<td width="109">Private</td>
<td width="92">557</td>
<td width="92">0</td>
<td width="92">227</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">802</td>
<td>L</td>
<td width="221">33(14 ) D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/s. G.M.Arch Pvt. Ltd.</td>
<td style="font-weight: 400;" width="289">M/s.Life Housing Development  Projects</td>
<td>03-12-08</td>
<td>MCGM</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>18</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">803</td>
<td>T</td>
<td width="221">Sai Laxmi CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td width="289">Swami Samarat Builders  developers</td>
<td>04-12-08</td>
<td>Private</td>
<td>60</td>
<td>16</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>16</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">804</td>
<td width="88">MW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s. Deva Consultants</td>
<td width="289">M/s. Sai Sharaddha Developer</td>
<td width="124">06-12-08</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">82</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">82</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">805</td>
<td width="88">KW</td>
<td width="221">Kittarbai Chawl SRA C.H.S. Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shelke & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Guru Construction</td>
<td width="124">17-12-08</td>
<td width="109">Private</td>
<td width="92">24</td>
<td width="92">10</td>
<td width="92">0</td>
<td>0</td>
<td width="92">yes </td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">806</td>
<td>S</td>
<td width="221">Gomes CHS. Ltd</td>
<td>33-10</td>
<td width="289">M/s Shri Puroshattam G Redekar</td>
<td width="289">M/s. Shethia Builders</td>
<td>17-12-08</td>
<td width="109">Private</td>
<td>25</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">807</td>
<td width="88">MW</td>
<td width="221">Dattakrupa, Mahatma Jyotiba Phule Nagar, Shivprerna, Navchaitnya, Vayusut Agari Seva Sangh, Indraprastha, Milab Nagar, Panchshil Nagar, Red Hill, Bhimai Ambedkar Co.op.hsg.soc.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s. Spenta Housing Corporation</td>
<td width="124">26-12-08</td>
<td width="109">STGOVT</td>
<td width="92">895</td>
<td width="92">0</td>
<td width="92">385</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">808</td>
<td width="88">HE</td>
<td width="221">Souparnika Cooperative Housing Society (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. G.M.Arch Pvt. Ltd.</td>
<td style="font-weight: 400;" width="289">M/s.Life Housing Development  Projects</td>
<td width="124">07-01-09</td>
<td width="109">PVT</td>
<td width="92">130</td>
<td width="92">61</td>
<td width="92">79</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">809</td>
<td width="88">KE</td>
<td width="221">Kunkuwadi (S.R.A.) CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah</td>
<td style="font-weight: 400;" width="289">M/s. Suparshwa Realty</td>
<td>15-01-09</td>
<td>Private</td>
<td>87</td>
<td>18</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>Yes</td>
<td>Yes</td>
<td>18</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">810</td>
<td width="88">KE</td>
<td width="221">SARASWATI (SRA) CO-OP HSG. SOCIETY</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shantanoo Rane & Associate</td>
<td style="font-weight: 400;" width="289">M/s. Shree Krishna  Developers</td>
<td>16-01-09</td>
<td>Private</td>
<td>17</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">811</td>
<td width="88">RS</td>
<td width="221">Parishram SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Sameer V. Kulkarni</td>
<td width="289">M/s.Lakdawala Developers Pvt.Ltd</td>
<td width="124">21-01-09</td>
<td width="109">MHADA</td>
<td width="92">417</td>
<td width="92">196</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">812</td>
<td>T</td>
<td width="221">Parampujya Dr. Babasaheb Ambedkar Nagar S.R.A. Co-Op. Housing Society Ltd</td>
<td>33-10</td>
<td width="289">M/s. Dilip Jayawant  Associates</td>
<td width="289">M/S. Shree Samarth Spark Developers</td>
<td>23-01-09</td>
<td>STGOVT</td>
<td>628</td>
<td>264</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">813</td>
<td>S</td>
<td width="221">Krishna Bhuvan SRA  Chs</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Manohar M. Kaphale  Associates</td>
<td width="289">M/s Ganesh Star Builders</td>
<td>30-01-09</td>
<td width="109">Private</td>
<td>48</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">814</td>
<td width="88">N</td>
<td width="221">Gurukrupa SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sadashiv Nargundkar  Associates</td>
<td width="289">Samarth Drushti Developers</td>
<td width="124">06-02-09</td>
<td width="109">MHADA</td>
<td width="92">209</td>
<td width="92">0</td>
<td width="92">4</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">815</td>
<td width="88">N</td>
<td width="221">Govardhan SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Nitin Gunjal</td>
<td width="289">Shree Raj Associates</td>
<td width="124">09-02-09</td>
<td width="109">Private</td>
<td width="92">73</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">3</td>
</tr>
<tr>
<td width="64">816</td>
<td width="88">PS</td>
<td width="221">Gulmohar CHS Ltd</td>
<td>33-10</td>
<td width="289">Manish Karnik</td>
<td width="289">Yash Realtors</td>
<td width="124">11-02-09</td>
<td width="109">Private</td>
<td>39</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">817</td>
<td width="88">KW</td>
<td width="221">Vikas  SRA CHS (prop) Amalgamated with Raghvendra Sahakar SRA CHS & Others. </td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td style="font-weight: 400;" width="289">M/S Sahyog Homes</td>
<td width="124">17-02-09</td>
<td width="109">Private</td>
<td> </td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">818</td>
<td width="88">MW</td>
<td width="221">Vishwshanti SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole of NETACPL Architects  Civil En</td>
<td width="289">M/s. Ankur Realtors</td>
<td width="124">20-02-09</td>
<td width="109">Private</td>
<td width="92">40</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">819</td>
<td width="88">PN</td>
<td width="221">Radha Nagar CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s Rasik P. Hingoo Associates</td>
<td style="font-weight: 400;" width="289">Radha Construction</td>
<td width="124">16-03-09</td>
<td width="109">Private</td>
<td width="92">227</td>
<td width="92">20</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">820</td>
<td>L</td>
<td width="221">S.R. scheme under . clause (Chandivali)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jintendra Patel Of M/s. Aakar Architects & C</td>
<td style="font-weight: 400;" width="289">M/s. DBS REALTY</td>
<td>17-03-09</td>
<td>Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">821</td>
<td>L</td>
<td width="221">DBS 3.11</td>
<td>3-11</td>
<td style="font-weight: 400;" width="289">M/S. Aakar Architects  Consultants</td>
<td style="font-weight: 400;" width="289">M/s. DBS REALTY</td>
<td>17-03-09</td>
<td>Private</td>
<td>0</td>
<td width="92">0</td>
<td>10096</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">822</td>
<td>T</td>
<td width="221">Karmveer Dadasaheb Gaikwad CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Nilesh D. Sawant</td>
<td width="289">M/s. Ashwamedh Construction</td>
<td>21-03-09</td>
<td>Private</td>
<td>52</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">823</td>
<td>T</td>
<td width="221">Parishram CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/S.SHAGUN REALITY</td>
<td>01-04-09</td>
<td>STGOVT</td>
<td>86</td>
<td>44</td>
<td>4</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">824</td>
<td width="88">N</td>
<td width="221">HANUMAN CHS.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s Shree Consultants</td>
<td width="289"> M/s. Adeshwar Associates</td>
<td width="124">04-04-09</td>
<td width="109">Private</td>
<td width="92">44</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">825</td>
<td width="88">N</td>
<td width="221">Kranti Jyot No.1 CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dot Architect</td>
<td width="289">M/s.Vinayak Asso & M/s.Shree Samarth Erectors &Dev</td>
<td width="124">15-04-09</td>
<td width="109">STGOVT</td>
<td width="92">221</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">826</td>
<td width="88">N</td>
<td width="221">Halimabai Sumer SRA CHS Ltd.</td>
<td width="81">33-10</td>
<td width="289">Shri. Jaysing Shinde</td>
<td width="289">M.P.Group of Construction</td>
<td width="124">15-04-09</td>
<td width="109">Private</td>
<td width="92">30</td>
<td width="92">17</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">2</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">827</td>
<td width="88">PN</td>
<td width="221">Navjeevan SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.DESIGN OF TRENDS</td>
<td width="289">M/s. Shivshakti Builders & Dev.</td>
<td width="124">15-04-09</td>
<td width="109">Private</td>
<td width="92">393</td>
<td width="92">121</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">828</td>
<td width="88">PS</td>
<td width="221">Jijamata Nagar Sankalp Sahkari Grihnirman Sanstha</td>
<td>33-10</td>
<td width="289">M/s. Concept architects</td>
<td style="font-weight: 400;" width="289">M/s. Royal Builder</td>
<td width="124">15-04-09</td>
<td width="109">Private,MHADA</td>
<td>104</td>
<td>0</td>
<td>28</td>
<td>0</td>
<td>not constructed</td>
<td width="92">No</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">829</td>
<td width="88">KE</td>
<td width="221">JAGRUTI SRA SAHAKARI GRIHANIRMAN SANSTHA (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Jayshing Shinde</td>
<td width="289">PRIDE ENTERPRISE</td>
<td>16-04-09</td>
<td>MHADA</td>
<td>27</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">830</td>
<td width="88">PN</td>
<td width="221">Gokul Durga Nagar CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Aakar Architects & Consultants</td>
<td width="289">AAKASH DEVELOPERS</td>
<td width="124">17-04-09</td>
<td width="109">Private</td>
<td width="92">400</td>
<td width="92">49</td>
<td width="92">248</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">831</td>
<td width="88">PN</td>
<td width="221">Mangal Murti CHS</td>
<td width="81">33-10</td>
<td width="289">SHRI.SANTOSH ZIMUDE</td>
<td style="font-weight: 400;" width="289">M/s Chamunda Builders Developers</td>
<td width="124">18-04-09</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">832</td>
<td width="88">PN</td>
<td width="221">Omkar Hitvardhak SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/S AAKAR ARCHITECTS  CONSULTANTS</td>
<td style="font-weight: 400;" width="289">M/s. Royal Realtors</td>
<td width="124">18-04-09</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">73</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">57+17</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">833</td>
<td width="88">HE</td>
<td width="221">CHANDRIKABAI HUBLAL SHRMA CHS</td>
<td width="81">33-10</td>
<td width="289">Shri. P.P.Khobarekar</td>
<td width="289">Shivalik Ventures Pvt. Ltd</td>
<td width="124">21-04-09</td>
<td width="109">PVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">834</td>
<td>S</td>
<td width="221">Sai vaishnavi S.R.A. chs</td>
<td>33-10</td>
<td width="289">B. G. Shirsat</td>
<td width="289">M/s Vastu Developers</td>
<td>21-04-09</td>
<td width="109">Private</td>
<td>79</td>
<td>21</td>
<td>0</td>
<td>0</td>
<td width="92">Yes</td>
<td>Yes</td>
<td>YES</td>
<td>0</td>
<td>21</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">835</td>
<td>RN</td>
<td width="221">Dahisar Chunabhatti C.H.S. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Sameer V. Kulkarni</td>
<td width="289">M/s. T. S. Construction</td>
<td>22-04-09</td>
<td>MHADA</td>
<td width="92">69</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">836</td>
<td>RN</td>
<td width="221">SHRI SHAKTI CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Viral. G. Joshi</td>
<td style="font-weight: 400;" width="289">M/s. S.R. Developers</td>
<td>22-04-09</td>
<td>MHADA</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">837</td>
<td width="88">RS</td>
<td width="221">Jaswanti Residency SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Ashray Housing</td>
<td width="124">06-05-09</td>
<td width="109">Private</td>
<td width="92">196</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">838</td>
<td width="88">FN</td>
<td width="221">RAMBAUG SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Priti Dalvi of M/s. Leads Architects</td>
<td width="289">M/s. Evergreen Developers</td>
<td width="124">08-05-09</td>
<td width="109">Private</td>
<td width="92">84</td>
<td width="92">31</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">839</td>
<td width="88">MW</td>
<td width="221">Chembur Jai hind Shell Colony CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Jayshing Shinde</td>
<td width="289">M/S S.P. Erectors  Developers</td>
<td width="124">12-05-09</td>
<td width="109">STGOVT</td>
<td width="92">67</td>
<td width="92">20</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">840</td>
<td width="88">PN</td>
<td width="221">Shrikrishna Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289">M/s. Dharmesh Construction pvt.Ltd</td>
<td width="124">13-05-09</td>
<td width="109">MHADA</td>
<td width="92">492</td>
<td width="92">0</td>
<td width="92">318</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">841</td>
<td width="88">N</td>
<td width="221">Om Sai Ganesh Sahakari Griha Nirman Sanstha.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.G. Dalvi  Associates</td>
<td width="289">M/s. Neelam FinanceBombayPvt. Ltd.</td>
<td width="124">15-05-09</td>
<td width="109">Private</td>
<td width="92">1044</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">842</td>
<td width="88">RS</td>
<td width="221">Shree Safalya Shejaar Sammittee CHS, Shree Saikrupa Shejaar Sammittee CHS, Sagar Shejaar Sammittee CHS, Prabhat CHS, Dattakrupa CHS, Utkarsha CHS, Pathan Chawl CHS, Shree Sai Darshan Ganga Darshan CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Innovation</td>
<td width="289">Shivam Developer</td>
<td width="124">18-05-09</td>
<td width="109">MHADA</td>
<td width="92">1178</td>
<td width="92">0</td>
<td width="92">290</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">843</td>
<td>HW</td>
<td width="221">NARLI AGRIPADA SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Suyog Shet M/s. MITI DESIGNERS  PLANNERS</td>
<td width="289">M/s. Suranjan Holding  Estate Dev. Pvt. Ltd</td>
<td>21-05-09</td>
<td>Private</td>
<td>370</td>
<td>0</td>
<td>36</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">844</td>
<td width="88">HE</td>
<td width="221">Pratiraksha Nagar CHS</td>
<td width="81">33-10</td>
<td width="289">M/s.Essar Group</td>
<td width="289">M/s Darshan Developers</td>
<td width="124">25-05-09</td>
<td width="109">PVT</td>
<td width="92">146</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">845</td>
<td>T</td>
<td width="221">Om Shiv Krupa CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Prabhakar Satham  Associates</td>
<td width="289">Amruteshwari Constructions.</td>
<td>26-05-09</td>
<td>Private</td>
<td>38</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">846</td>
<td>S</td>
<td width="221">Sahjeevan SRA CHS (Prop)</td>
<td>33-10</td>
<td width="289">M/S Dewoolkar  Associates</td>
<td width="289">M/S Ellora Developers</td>
<td>27-05-09</td>
<td width="109">Private</td>
<td>53</td>
<td>5</td>
<td>0</td>
<td>0</td>
<td width="92">Yes</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>5</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">847</td>
<td width="88">KW</td>
<td width="221">Yamunashree CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td width="289">M/s. M. M. Corporation</td>
<td width="124">30-05-09</td>
<td width="109">Private</td>
<td width="92">23</td>
<td width="92">4</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td width="92">0</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">2</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">848</td>
<td>S</td>
<td width="221">Panchratna chs. (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s Shree Consultants</td>
<td width="289">Varasiddhi Infrastructure</td>
<td>11-06-09</td>
<td width="109">Private</td>
<td>74</td>
<td>19</td>
<td>0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td>yes</td>
<td>0</td>
<td>19</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">849</td>
<td width="88">N</td>
<td width="221">Jivdaya SRA C.H.S  LTD.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td style="font-weight: 400;" width="289">M/s. Ambaji Construction Corporation.</td>
<td width="124">12-06-09</td>
<td width="109">Private</td>
<td width="92">315</td>
<td width="92">0</td>
<td width="92">206</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">850</td>
<td width="88">KE</td>
<td width="221">Durvankur SRA CHS Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">M/s. Galaxy Realtors</td>
<td>16-06-09</td>
<td>Private</td>
<td>74</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">851</td>
<td width="88">HE</td>
<td width="221">Emperior Court  C.H.S. Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/S. Redkar  Redkar</td>
<td width="289"> M/s. M. R. Developers</td>
<td width="124">19-06-09</td>
<td width="109">PVT</td>
<td width="92">37</td>
<td width="92">6</td>
<td width="92">12</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">852</td>
<td width="88">RC</td>
<td width="221">Shiv Shambhoo SRA CHS (Prop)</td>
<td>33-10</td>
<td width="289">Shri. Ashok Samarth</td>
<td width="289">Imprint Construction Pvt. Ltd</td>
<td>20-06-09</td>
<td width="109">Private,STGOVT</td>
<td>424</td>
<td width="92">70</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">853</td>
<td>HW</td>
<td width="221">St. Anthony (SRA) CHS Prop</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Ace Consultants</td>
<td width="289">Darisa Builders Pvt. Ltd</td>
<td>26-06-09</td>
<td>Private</td>
<td>44</td>
<td>1</td>
<td>2</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">854</td>
<td>T</td>
<td width="221">Mulund  Ambika Nagar C.H.S. Ltd.  Ambekrupa SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shelke & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Rajguru Developers Pvt. Ltd.</td>
<td>26-06-09</td>
<td>Private</td>
<td>404</td>
<td>212</td>
<td>28</td>
<td>128</td>
<td>Yes</td>
<td>yes </td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">855</td>
<td>GN</td>
<td width="221">Dwarkamai CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Intact Design</td>
<td width="289">M/s. Mighty Engineers Developer & Contractors</td>
<td>06-07-09</td>
<td>Private</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">13</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">13</td>
</tr>
<tr>
<td width="64">856</td>
<td width="88">GS</td>
<td width="221">Sagar Darshan CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td width="124">06-07-09</td>
<td width="109">MHADA</td>
<td width="92">141</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">857</td>
<td width="88">GS</td>
<td width="221">Worli Adarsh Nagar Sagar Darshan CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td width="124">06-07-09</td>
<td width="109">MHADA</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">858</td>
<td>T</td>
<td width="221">Sai Tulsi CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Vijay Turbadkar</td>
<td width="289">Atlantic Realtors</td>
<td>09-07-09</td>
<td>Private</td>
<td>21</td>
<td>13</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>13</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">859</td>
<td width="88">KE</td>
<td width="221">Nawalkarwadi SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">PRAVIN KANEKAR</td>
<td width="289">So-Lucky Builders</td>
<td>20-07-09</td>
<td>Private</td>
<td>51</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">860</td>
<td width="88">KE</td>
<td width="221">SHIVBHUMI SRA CHSL</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shantanoo Rane & Associate</td>
<td width="289">Shubh Enterprises</td>
<td>22-07-09</td>
<td>Private</td>
<td>489</td>
<td>0</td>
<td width="92">224</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">861</td>
<td width="88">PN</td>
<td width="221">Panchsheel SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Rasik P. Hingoo Associates</td>
<td width="289">RAJNIKANT H. MEHTA</td>
<td width="124">27-07-09</td>
<td width="109">Private</td>
<td width="92">66</td>
<td width="92">0</td>
<td width="92">89</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">862</td>
<td>S</td>
<td width="221">Vakratund  SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Manoj Walavalkar of M/s. M. M. Archs.</td>
<td width="289">Ideal Builders  developers</td>
<td>06-08-09</td>
<td width="109">GOVT</td>
<td>52</td>
<td>15</td>
<td>13</td>
<td>0</td>
<td width="92">NO</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">863</td>
<td width="88">PN</td>
<td width="221">Shree Azad CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td style="font-weight: 400;" width="289">M/s Nirman Constructions</td>
<td width="124">10-08-09</td>
<td width="109">Private</td>
<td width="92">198</td>
<td width="92">6</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">864</td>
<td width="88">PN</td>
<td width="221">Makrani Pada SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">K.D Builders</td>
<td width="124">10-08-09</td>
<td width="109">Private</td>
<td width="92">76</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">865</td>
<td width="88">RC</td>
<td width="221">Devipada SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td style="font-weight: 400;" width="289">M/s. Ashapura Developer</td>
<td>13-08-09</td>
<td width="109">MHADA</td>
<td>1544</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">866</td>
<td width="88">KE</td>
<td width="221">Shiv Darshan SRA CHS (Prop)</td>
<td>33-10</td>
<td width="289">Paarshad Associates</td>
<td width="289">Vimal Associates</td>
<td>20-08-09</td>
<td>MCGM</td>
<td>5725</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">867</td>
<td>S</td>
<td width="221">Neharu Nagar CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">S.S. Associates  Architect And Int  Designer</td>
<td width="289">Omkar Builders</td>
<td>20-08-09</td>
<td width="109">Private</td>
<td>160</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>YES</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">868</td>
<td width="88">PS</td>
<td width="221">Shree Ramdevpir CHS Ltd</td>
<td>33-10</td>
<td width="289">Deva Consultants</td>
<td width="289">Nutan Builders</td>
<td width="124">28-08-09</td>
<td width="109">Private</td>
<td>64</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">869</td>
<td width="88">PS</td>
<td width="221">Nutan Paradise CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s Rasik P. Hingoo Associates</td>
<td width="289">M/s. Nutan Paradise Builders</td>
<td width="124">28-08-09</td>
<td width="109">Private</td>
<td>64</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">870</td>
<td width="88">PN</td>
<td width="221">SHREE GANESH RAHIWASI SANGH CHS (PROP)</td>
<td width="81">33-10</td>
<td width="289">S. G. Dalvi Associates</td>
<td width="289">R. K. E. BUILDER & DEVELOPER</td>
<td width="124">29-08-09</td>
<td width="109">Private</td>
<td width="92">110</td>
<td width="92">8</td>
<td width="92">18</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">871</td>
<td width="88">ME</td>
<td width="221">Shraddha Saburi CHS & Jeevan Sangaram CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td width="289">M/s. Gurunanak Construction</td>
<td width="124">01-09-09</td>
<td width="109">STGOVT</td>
<td width="92">530</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">872</td>
<td width="88">HE</td>
<td width="221">Maa - Durga SRA CHS Ltd.</td>
<td width="81">33-10</td>
<td width="289">M/s. Unmesh Bholay  Associates</td>
<td width="289">M/s. Godshalwar Project Const.  Developer</td>
<td width="124">05-09-09</td>
<td width="109">PVT</td>
<td width="92">43</td>
<td width="92">4</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes </td>
<td width="92">Yes </td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">4</td>
</tr>
<tr>
<td width="64">873</td>
<td width="88">PN</td>
<td width="221">Kamgarpanch ganga II SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Chawla Architect & Consultant</td>
<td width="289">M/s.Neptune Buildersdevelopers</td>
<td width="124">07-09-09</td>
<td width="109">Private</td>
<td width="92">143</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">874</td>
<td width="88">PN</td>
<td width="221">Shivganga CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/S Mahendra G.Davda</td>
<td style="font-weight: 400;" width="289">M/s. ASHAPURA ESTATE PRIVATE LTD.</td>
<td width="124">07-09-09</td>
<td width="109">MHADA</td>
<td width="92">95</td>
<td width="92">116</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">875</td>
<td width="88">PS</td>
<td width="221">Goregaon - Jankalyan Sahakari Chs</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Rasik P. Hingoo Associates</td>
<td width="289">Riddhi Siddhi Developer</td>
<td width="124">09-09-09</td>
<td width="109">MHADA</td>
<td>84</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">876</td>
<td width="88">FN</td>
<td width="221">Nirmal Nagar CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td width="289">Shri. Z. A. Munshi</td>
<td style="font-weight: 400;" width="289">M/s. Shreenath Realtors</td>
<td width="124">15-09-09</td>
<td width="109">STGOVT,MCGM</td>
<td width="92">1137</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">877</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Muslim Nagar Bhartiya CHS Dharavi</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mahale  &  Associates</td>
<td width="289">M/s. Punit Construction Co.</td>
<td>19-09-09</td>
<td width="109">MHADA</td>
<td width="92">169</td>
<td width="92">0</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">878</td>
<td width="88">N</td>
<td width="221">Dr. Ambedkar Nagar SRA CHS. (Ltd.).</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">K.K. Constructions</td>
<td width="124">23-09-09</td>
<td width="109">STGOVT</td>
<td width="92">279</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">879</td>
<td>S</td>
<td width="221">Vighnahar CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Hemant Parikh  Associates</td>
<td width="289">M/s. S.S.V. Developers  Builders</td>
<td>23-09-09</td>
<td width="109">Private</td>
<td>172</td>
<td>13</td>
<td>36</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">880</td>
<td>S</td>
<td width="221">HINDUSTAN CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Hemant Parikh  Associates</td>
<td style="font-weight: 400;" width="289">S.S.V. Developers  Builders</td>
<td>23-09-09</td>
<td width="109">Private</td>
<td>630</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">881</td>
<td width="88">MW</td>
<td width="221">Shree Ganesh Gaondevi CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">PravinNaik Associates</td>
<td width="289">M/s. Empress  Adhishakti</td>
<td width="124">01-10-09</td>
<td width="109">STGOVT</td>
<td width="92">161</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">882</td>
<td width="88">KE</td>
<td width="221">Habib Nagar SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Arun Kumar Dube</td>
<td width="289">M/s. Gurunam Developers</td>
<td>03-10-09</td>
<td>Private</td>
<td>42</td>
<td>1</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">883</td>
<td>T</td>
<td width="221">Mulund Salphadevi Pada Sai Krupa CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Satish Hande</td>
<td style="font-weight: 400;" width="289">M/S. Sai Siddharth Construction Co</td>
<td>03-10-09</td>
<td>STGOVT</td>
<td>390</td>
<td width="92">57</td>
<td width="92">108</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">884</td>
<td>S</td>
<td width="221">3.11</td>
<td>3-11</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">Housing Development  Imp. India Pvt. Ltd. HDIL</td>
<td>05-10-09</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td>2004</td>
<td>0</td>
<td width="92">Under construction</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">885</td>
<td width="88">RC</td>
<td width="221">Jai Bajarang Seva Mandal Coop. Hsg. Society</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Neve  Associates</td>
<td style="font-weight: 400;" width="289">Right Channel Construction Pvt. Ltd.</td>
<td>09-10-09</td>
<td width="109">Private</td>
<td>33</td>
<td width="92">68</td>
<td width="92">0</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">886</td>
<td width="88">PN</td>
<td width="221">33(14)D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">M/s.Mauli Sai Developers pvt.ltd</td>
<td width="124">12-10-09</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">60</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">60</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">887</td>
<td width="88">FN</td>
<td width="221">Matoshree Sadan CoOp. Hsg. Soc. Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td style="font-weight: 400;" width="289">M/s. Neumec Developers  Builders</td>
<td width="124">15-10-09</td>
<td width="109">Private,MCGM</td>
<td width="92">437</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">888</td>
<td width="88">KE</td>
<td width="221">Omkar Sai CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td style="font-weight: 400;" width="289">M/s M. R.  Realtors</td>
<td>15-10-09</td>
<td>Private,STGOVT</td>
<td>136</td>
<td>30</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">889</td>
<td width="88">PN</td>
<td width="221">SHIVAM CHS</td>
<td width="81">33-10</td>
<td width="289">BHAGYA BUILDERS  DEVELOPERS</td>
<td width="289">Rakesh G. Waghmare</td>
<td width="124">15-10-09</td>
<td width="109">Private</td>
<td width="92">26</td>
<td width="92">2</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">890</td>
<td width="88">FN</td>
<td width="221">Chandani Ekta A  B CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td style="font-weight: 400;" width="289">M/s. A. M. Constructions</td>
<td width="124">16-10-09</td>
<td width="109">STGOVT</td>
<td width="92">286</td>
<td width="92">0</td>
<td width="92">410</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">891</td>
<td width="88">PN</td>
<td width="221">Shree Ramayan SRA CHS (Prop.)</td>
<td width="81">33-10</td>
<td width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">S.M. Builders & Developers</td>
<td width="124">16-10-09</td>
<td width="109">STGOVT</td>
<td width="92">194</td>
<td width="92">0</td>
<td width="92">167</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">892</td>
<td width="88">PS</td>
<td width="221">Shiv Sai Mangal CHS</td>
<td>33-10</td>
<td width="289">M/s Rasik P. Hingoo Associates</td>
<td width="289">M/S.QASWA CONSTRUCTION</td>
<td width="124">16-10-09</td>
<td width="109">Private</td>
<td>135</td>
<td>4</td>
<td>0</td>
<td>0</td>
<td>yes</td>
<td width="92">Yes</td>
<td width="92">no</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">893</td>
<td width="88">KE</td>
<td width="221">Ganesh Krupa SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">M/s Vastu Creations</td>
<td width="289">M/s Pattathu Brothers</td>
<td>22-10-09</td>
<td>Private</td>
<td>70</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">894</td>
<td width="88">ME</td>
<td width="221">Dattaguru CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Prabhakar Satham  Associates</td>
<td width="289">M/s. Raj Homes Pyramid Group</td>
<td width="124">28-10-09</td>
<td width="109">Private</td>
<td width="92">57</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">895</td>
<td width="88">PS</td>
<td width="221">New Krishna CHS Ltd. </td>
<td width="81">33-10</td>
<td width="289">MAHENDRA N. ASSOCIATES<br /> <br /> M.N.PANCHAL<br /> <br /> Radhakunj, 6/1, Babhi Naka,<br /> <br /> Borivali (W), Mumbai – 92.</td>
<td width="289">RAJ BUILDERS & DEVELOPERS</td>
<td width="124">31-10-09</td>
<td width="109">MHADA </td>
<td width="92">62</td>
<td width="92">0</td>
<td width="92">45</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">Part O.C.C. granted</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">896</td>
<td>L</td>
<td width="221">Panchsheel Co.op Hsg. Society</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mahale  &  Associates</td>
<td width="289">M/s  SONAL DEV  CON</td>
<td>04-11-09</td>
<td>MHADA</td>
<td>93</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">897</td>
<td>T</td>
<td width="221">Harihareshwar SRA Co. Op. Hsg. Soc. Ltd</td>
<td>33-10</td>
<td width="289">KETAN MUSALE</td>
<td width="289">Navnath Associates</td>
<td>04-11-09</td>
<td>Private</td>
<td>276</td>
<td>0</td>
<td>59</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">898</td>
<td>T</td>
<td width="221">Shree Krishna Nagar Co.Op. Hsg Soc</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td width="289">Syan Developers</td>
<td>04-11-09</td>
<td>Private</td>
<td>42</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">899</td>
<td width="88">KE</td>
<td width="221">Shree Sai Darshan Welfare Society SRA C.H.S. Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shelke & Associates</td>
<td width="289">M/s. Nivara Builders & Developers.</td>
<td>16-11-09</td>
<td>STGOVT</td>
<td>51</td>
<td width="92">0</td>
<td width="92">27</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">900</td>
<td>GN</td>
<td width="221">VRINDAVAN CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">M/S.NAT CONSTRUCTIONS CO. PVT. LTD</td>
<td>17-11-09</td>
<td>STGOVT</td>
<td width="92">325</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">901</td>
<td width="88">N</td>
<td width="221">Ramabai Ambedkar Nagar Rahiwasi Pariwar Sahakari Griha Nirman Sanstha</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s P. N. Bhobe & Associates</td>
<td style="font-weight: 400;" width="289">Pentagon Premises Pvt. Ltd</td>
<td width="124">17-11-09</td>
<td width="109">STGOVT</td>
<td width="92">1393</td>
<td width="92">0</td>
<td width="92">828</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">902</td>
<td width="88">N</td>
<td width="221">Prop. S.R.Scheme on plot bearing CTS No. 194(Pt.)situated along esten express higway, Ghatkopar.  For Ramabai Ambedkar Nagar Rahivashi Pariwar</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s P. N. Bhobe & Associates</td>
<td style="font-weight: 400;" width="289">Pentagon Premises Pvt. Ltd</td>
<td width="124">17-11-09</td>
<td width="109">STGOVT</td>
<td width="92">1393</td>
<td width="92">0</td>
<td width="92">828</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">903</td>
<td width="88">FN</td>
<td width="221">Shri Ganesh Sai SRA CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td style="font-weight: 400;" width="289">M/s. Neumec Developers  Builders</td>
<td width="124">23-11-09</td>
<td width="109">STGOVT</td>
<td width="92">85</td>
<td width="92">0</td>
<td width="92">106</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">53</td>
</tr>
<tr>
<td width="64">904</td>
<td width="88">HE</td>
<td width="221">CLASSIC ENCLAVE SRA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s Vision Architect</td>
<td style="font-weight: 400;" width="289">M/s CLASSIC ENTERPRISES</td>
<td width="124">26-11-09</td>
<td width="109">PVT</td>
<td width="92">40</td>
<td width="92">8</td>
<td width="92">16</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">905</td>
<td width="88">HE</td>
<td width="221">Mahakali Tenaments CHS</td>
<td width="81">33-10 & 33-14D </td>
<td style="font-weight: 400;" width="289">M/s. Veturkar    Associates</td>
<td width="289">M/s. Kshama Builders  Developers Pvt. Ltd.</td>
<td width="124">01-12-09</td>
<td width="109">PVT</td>
<td width="92">55</td>
<td width="92">0</td>
<td width="92">57</td>
<td width="92">15</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">906</td>
<td width="88">PN</td>
<td width="221">New Mahakali Nagar</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/s. Vidhi Realtors</td>
<td width="124">01-12-09</td>
<td width="109">MCGM</td>
<td width="92">561</td>
<td width="92">116</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">907</td>
<td width="88">RS</td>
<td width="221">Shiv Shankar Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Rajendra pagnis</td>
<td width="289">Brizeal Realty & Developers Pvt. Ltd.</td>
<td width="124">01-12-09</td>
<td width="109">Private</td>
<td width="92">340</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">908</td>
<td width="88">RC</td>
<td width="221">Shree Sai Aishwarya Coop. Hsg. Soc. Ltd. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Neve  Associates</td>
<td width="289">M/s. Shree Sai Taj Developers</td>
<td width="124">01-12-09</td>
<td width="109">Private</td>
<td>56</td>
<td width="92">34</td>
<td width="92">0</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">yes</td>
<td>Yes</td>
<td>34</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">909</td>
<td width="88">KW</td>
<td width="221">Andheri Juhu Lane Navbharat CHS (Ltd.)</td>
<td width="81">33-10</td>
<td width="289">M/S. SPACEAGE CONSULTANT -Bandra( E.)</td>
<td width="289">M/s. Nasar Associates</td>
<td width="124">07-12-09</td>
<td width="109">MHADA</td>
<td>204</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">910</td>
<td width="88">KE</td>
<td width="221">Kulshri CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Jitendra Dewoolkar</td>
<td width="289">M/s. Ajantha Buildcon Pvt. Ltd</td>
<td>08-12-09</td>
<td>Private</td>
<td>47</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">911</td>
<td width="88">MW</td>
<td width="221">Sardar Vallabhbhai Patel Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. Architect Collaborations</td>
<td width="289">Reliance Enterprises</td>
<td width="124">08-12-09</td>
<td width="109">Private</td>
<td width="92">429</td>
<td width="92">0</td>
<td width="92">81</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">912</td>
<td>S</td>
<td width="221">CHANDAN NAGAR (SRA) CHS [PROP]</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ketan Belsare</td>
<td width="289">International Trading  Manufacturing Company</td>
<td>08-12-09</td>
<td width="109">Private</td>
<td>377</td>
<td>0</td>
<td>0</td>
<td>64</td>
<td width="92">Under construction</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">913</td>
<td width="88">HE</td>
<td width="221">Ajay SRA CHS (Ltd)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td style="font-weight: 400;" width="289">Samartha Krupa Developers</td>
<td width="124">09-12-09</td>
<td width="109">STGOVT</td>
<td width="92">84</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">914</td>
<td width="88">RS</td>
<td width="221">Hanuman Nagar Slum</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Grit Architecutral Consultancy Pvt. Ltd</td>
<td width="289">M/s. Ruchi Priya Developer Pvt Ltd</td>
<td width="124">11-12-09</td>
<td width="109">STGOVT</td>
<td width="92">17000</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">915</td>
<td>T</td>
<td width="221">Shree Shiv Sai CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td width="289">M/S Chaitanya Parekh</td>
<td>17-12-09</td>
<td>STGOVT</td>
<td>41</td>
<td>3</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>yes </td>
<td>Yes</td>
<td>3</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">916</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Anna Nagar lokmanya  CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Purbi Architect SharadMahajan</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td>21-12-09</td>
<td width="109">MCGM</td>
<td width="92">112</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">   No</td>
<td width="92">   No</td>
<td width="92">   No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">917</td>
<td>T</td>
<td width="221">Shahid Bhagat Singh Nagar SRA CHS ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td style="font-weight: 400;" width="289">Aakruti concepts pvt.ltd.</td>
<td>21-12-09</td>
<td>STGOVT</td>
<td>114</td>
<td>16</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">918</td>
<td>L</td>
<td width="221">Laxmi Durga CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. K.R. Rege  Associates</td>
<td width="289">M/s. Anjaneya Land Property Developers</td>
<td>23-12-09</td>
<td>Private</td>
<td>90</td>
<td>59</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">919</td>
<td width="88">ME</td>
<td width="221">Jai Hanuman SRA CHS </td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td width="289">Fat Cat Infrastructures Pvt.Ltd</td>
<td width="124">05-01-10</td>
<td width="109">MCGM</td>
<td width="92">136</td>
<td width="92">29</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">920</td>
<td>L</td>
<td width="221">Kurla Shree Sadguru CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Muktanand Associates</td>
<td width="289">M/s. Omshi Services</td>
<td>06-01-10</td>
<td>STGOVT</td>
<td>116</td>
<td>87</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">921</td>
<td>S</td>
<td width="221">Khimji Nagar SRA Co-op.Housing Society Ltd.</td>
<td>33-10</td>
<td width="289">M/s M. M. Kapale</td>
<td width="289">M/s Shree. Vishal Enterprises</td>
<td>06-01-10</td>
<td width="109">Private</td>
<td>53</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">922</td>
<td width="88">KE</td>
<td width="221">Shree Kalimata CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">Keshavi Developers Pvt. Ltd.</td>
<td>13-01-10</td>
<td>Private</td>
<td>227</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">923</td>
<td width="88">KW</td>
<td width="221">Talav Market CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">T.N. Hasan</td>
<td style="font-weight: 400;" width="289">CHANDIWALA ENTERPRISES</td>
<td width="124">16-01-10</td>
<td width="109">STGOVT</td>
<td width="92">102</td>
<td width="92">28</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">924</td>
<td>FS</td>
<td width="221">Matoshree SRA CHS Ltd  & Other 15 Societies</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td>19-01-10</td>
<td>Private,MCGM</td>
<td width="92">4456</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Part OC granted</td>
<td width="92">no</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">925</td>
<td width="88">KW</td>
<td width="221">Kadam Chwal SRA CHS Ltd &<br /> Sainath SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">M/s. M.N.P. Associate</td>
<td width="124">20-01-10</td>
<td width="109">Private</td>
<td width="92">196</td>
<td width="92">149</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Part PAPs Constructed </td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td width="92">34</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">926</td>
<td>T</td>
<td width="221">Vishwasahakar CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Nilesh D. Sawant</td>
<td width="289">ASHWAMEDH BUILDERS  DEVELOPERS.</td>
<td>25-01-10</td>
<td>MHADA</td>
<td>185</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">927</td>
<td width="88">HE</td>
<td width="221">Indirakrupa  SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri.Suresh Krishnan</td>
<td style="font-weight: 400;" width="289">K.K.Krishnan construction  Co. Pvt. Ltd</td>
<td width="124">27-01-10</td>
<td width="109">STGOVT</td>
<td width="92">80</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">928</td>
<td>S</td>
<td width="221">Triveni Sangam Harijan CHS (Ltd) & Jai Bajrang CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">M/s. Swaroop Constructions Pvt. Ltd</td>
<td>27-01-10</td>
<td width="109">MCGM</td>
<td>372</td>
<td>34</td>
<td>114</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">929</td>
<td width="88">PS</td>
<td width="221">Ganesh Nagar CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/s. Sai-Sidhi Developers.</td>
<td width="124">28-01-10</td>
<td width="109">STGOVT,MHADA</td>
<td>247</td>
<td>80</td>
<td>0</td>
<td>0</td>
<td>not constructed</td>
<td width="92">no</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">930</td>
<td width="88">MW</td>
<td width="221">Shramjivi SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Consultants Combined</td>
<td width="289">M/s. M.M.Developers</td>
<td width="124">01-02-10</td>
<td width="109">STGOVT,MHADA</td>
<td width="92">199</td>
<td width="92">0</td>
<td width="92">37</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">37</td>
</tr>
<tr>
<td width="64">931</td>
<td width="88">N</td>
<td width="221">Ramnagar CHS Federation (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Plan Well Architects</td>
<td width="289"> M/S. Satra Property Developers Pvt Ltd</td>
<td width="124">01-02-10</td>
<td width="109">STGOVT</td>
<td width="92">3054</td>
<td width="92">0</td>
<td width="92">1934</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">932</td>
<td width="88">N</td>
<td width="221">Laxmi Nivas SRA CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shreeya Services Pvt. Ltd.</td>
<td width="289"> M/s. Revathi Construction</td>
<td width="124">03-02-10</td>
<td width="109">Private</td>
<td width="92">19</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">933</td>
<td>FS</td>
<td width="221">Mamta Sahakari Gruha Nirman Sanstha Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jintendra Patel Of M/s. Aakar Architects & C</td>
<td width="289">M/s. Shri sukharkarta Developers</td>
<td>11-02-10</td>
<td>MCGM</td>
<td width="92">532</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Part OC granted</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">934</td>
<td>L</td>
<td width="221">Om Sai Saki Hill CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Abdullah Siddiqui of M/s. Space Design Consult</td>
<td width="289">M/s  Skylink Developers</td>
<td>11-02-10</td>
<td>Private</td>
<td>164</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">935</td>
<td>T</td>
<td width="221">Girijabai Patil CHS LTD.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td width="289">M/s. Shree Samruddhi Developers</td>
<td>11-02-10</td>
<td>MCGM</td>
<td>98</td>
<td>36</td>
<td>32</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">936</td>
<td>L</td>
<td width="221">Gaurishankar SRA Co-op.Hsg. Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Surve  Associates</td>
<td width="289">M/s. Star Enterprises</td>
<td>15-02-10</td>
<td>MHADA</td>
<td>233</td>
<td>5</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">937</td>
<td>S</td>
<td width="221">Siddhivinayak SRA chs ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant</td>
<td style="font-weight: 400;" width="289">Sai Sanstha Enterprises</td>
<td>15-02-10</td>
<td width="109">Private</td>
<td>42</td>
<td>12</td>
<td>0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td>yes</td>
<td>0</td>
<td>12</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">938</td>
<td width="88">FN</td>
<td width="221">Sai Darshan CHS Ltd (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.G. Dalvi  Associates</td>
<td width="289">Kwality Construction Co.</td>
<td width="124">18-02-10</td>
<td width="109">MHADA</td>
<td width="92">67</td>
<td width="92">0</td>
<td width="92">12</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">939</td>
<td width="88">HE</td>
<td width="221">Blue Moon SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">PravinNaik Associates</td>
<td width="289">M/s. Mudassar Builders  Developer</td>
<td width="124">18-02-10</td>
<td width="109">PVT & STGOVT</td>
<td width="92">35</td>
<td width="92">18</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Partly</td>
<td width="92">Yes </td>
<td width="92">Yes </td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">940</td>
<td>S</td>
<td width="221">Navneet Sadan CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">S.S. Associates  Architect And Int  Designer</td>
<td style="font-weight: 400;" width="289">Shree Swami Samarth   Builders  Developers.</td>
<td>24-02-10</td>
<td width="109">Private</td>
<td>277</td>
<td>0</td>
<td>55</td>
<td>0</td>
<td width="92">Under construction</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">941</td>
<td>L</td>
<td width="221">Maheshwar Nagar CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mehul Vaghela of M/s. Creative Consultancy</td>
<td width="289">Midas Developers</td>
<td>26-02-10</td>
<td>MHADA</td>
<td>34</td>
<td>26</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">942</td>
<td width="88">PN</td>
<td width="221">Ameenabai SRA CHS (Ltd.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">M/s. Shree Ganesh Vaishno Developers</td>
<td width="124">03-03-10</td>
<td width="109">Private</td>
<td width="92">25</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">943</td>
<td>S</td>
<td width="221">Siddhivinayak SRA chs</td>
<td>33-10</td>
<td width="289">Mr. Vaidya  Co</td>
<td width="289">M/s Saur Jagat</td>
<td>09-03-10</td>
<td width="109">Private</td>
<td>247</td>
<td>27</td>
<td>32</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">944</td>
<td width="88">FN</td>
<td width="221">Guru Tegh Bahadur Nagar CHS Ltd (Prop.)</td>
<td width="81">33-10</td>
<td width="289">Smt. Pournima Raje</td>
<td style="font-weight: 400;" width="289">M/s. Kukreja Constructions</td>
<td width="124">12-03-10</td>
<td width="109">MCGM</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">945</td>
<td>L</td>
<td width="221">Raje Sahyadree SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">M/s. Dilip Sanghvi Consultants</td>
<td width="289"> M/s. Raje Shivraj Developers.</td>
<td>20-03-10</td>
<td>Private</td>
<td>31</td>
<td>8</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">946</td>
<td width="88">MW</td>
<td width="221">Jay Ambe SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Sameer V. Kulkarni</td>
<td width="289">M/s. F.A. Builder & Developers</td>
<td width="124">20-03-10</td>
<td width="109">STGOVT</td>
<td width="92">227</td>
<td width="92">0</td>
<td width="92">45</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">947</td>
<td>RN</td>
<td width="221">Shree Ganesh CHS (Proposed)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S AAKAR ARCHITECTS  CONSULTANTS</td>
<td width="289">M/S.Veekaylal Investment Co.Pvt.Ltd.</td>
<td>26-03-10</td>
<td>Private</td>
<td width="92">66</td>
<td width="92">14</td>
<td width="92">31</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">948</td>
<td width="88">PN</td>
<td width="221">Metro CHS (Prop) , Jai Neptune CHS</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s. Consultants Combined</td>
<td width="289">LOTUS LOGISTICS AND DEVELOPERS PVT. LTD.</td>
<td width="124">31-03-10</td>
<td width="109">Private</td>
<td width="92">96</td>
<td width="92">77</td>
<td width="92">0</td>
<td width="92">177</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">949</td>
<td width="88">RS</td>
<td width="221">Dr. Ambedkar Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">M/s. Anmol Developers</td>
<td width="124">09-04-10</td>
<td width="109">MCGM</td>
<td width="92">454</td>
<td width="92">133</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">950</td>
<td width="88">N</td>
<td width="221">Juni Ramabai  CHS Ltd & Sant Namdev CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">R.W. Gudal  Associates</td>
<td width="289">Aryaamaan Developers Pvt.Ltd.</td>
<td width="124">12-04-10</td>
<td width="109">STGOVT</td>
<td width="92">2572</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">951</td>
<td width="88">RS</td>
<td width="221">Chawla Chawl (SRA) CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Harish Gandhi</td>
<td width="289">Thakkar Builders  Developers</td>
<td width="124">12-04-10</td>
<td width="109">Private</td>
<td width="92">40</td>
<td width="92">33</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">Yes</td>
<td width="92">33</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">952</td>
<td>FS</td>
<td width="221">Kokan Sadan CHS(Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">Hari Construction</td>
<td>15-04-10</td>
<td>Private</td>
<td width="92">102</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">953</td>
<td width="88">KE</td>
<td width="221">Shivaji Nagar S.R.A.Co-op.Housing Society Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah</td>
<td style="font-weight: 400;" width="289">M/s Chamunda Builders Developers</td>
<td>22-04-10</td>
<td>Private,STGOVT,MCGM</td>
<td>141</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">954</td>
<td width="88">KE</td>
<td width="221">OM SHREE GANESH (SRA)C.H.S. LTD.(PROP.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.Rajashree Accord</td>
<td style="font-weight: 400;" width="289">M/S Aishwarya Light Construction</td>
<td>22-04-10</td>
<td>Private</td>
<td>132</td>
<td>2</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">955</td>
<td width="88">KE</td>
<td width="221">Miskita Cross Lane CHS Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td style="font-weight: 400;" width="289">M/s. Romell Real Estate Private Limited</td>
<td>28-04-10</td>
<td>Private</td>
<td>98</td>
<td>21</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">956</td>
<td width="88">N</td>
<td width="221">Jai Ambe Dham CHS</td>
<td width="81">33-10</td>
<td width="289">Shri P.P. Khobarekar</td>
<td width="289">M/s. Choice Enterprises</td>
<td width="124">28-04-10</td>
<td width="109">MHADA,MCGM</td>
<td width="92">109</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">957</td>
<td width="88">HE</td>
<td width="221">Madraswala Compound CHS (Prop.)</td>
<td width="81">33-10</td>
<td width="289">M/s. Mulekar and Vaidya Associates</td>
<td width="289">M/s. Pinky Construction</td>
<td width="124">03-05-10</td>
<td width="109">PVT</td>
<td width="92">200</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">958</td>
<td>S</td>
<td width="221">Shivsharda CHS (Ltd)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Bhavsar Consultants</td>
<td style="font-weight: 400;" width="289"> M/s. Shivshankar Shivram Singh    Others</td>
<td>03-05-10</td>
<td width="109">Private</td>
<td>148</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">959</td>
<td width="88">N</td>
<td width="221">Wagheshwari SRA CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant</td>
<td width="289">M/s. Rushabh Enterprises</td>
<td width="124">05-05-10</td>
<td width="109">Private</td>
<td width="92">15</td>
<td width="92">23</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">960</td>
<td width="88">RC</td>
<td width="221">Kulupwadi CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Jitendra Dewoolkar</td>
<td style="font-weight: 400;" width="289">M/s. Vijay Kamal Properties Pvt. Ltd.</td>
<td>05-05-10</td>
<td width="109">STGOVT</td>
<td>269</td>
<td width="92">0</td>
<td width="92">123</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">961</td>
<td width="88">RC</td>
<td width="221">Sai Shrushti (SRA) CHS Ltd</td>
<td>33-10</td>
<td width="289">Dilip K. Godambe</td>
<td width="289">M/S. ELITE CONSTRUCTION CO.</td>
<td>06-05-10</td>
<td width="109">Private</td>
<td>52</td>
<td width="92">0</td>
<td width="92">4</td>
<td width="92">8</td>
<td>yes</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">962</td>
<td width="88">GS</td>
<td width="221">PAREL LOK SEVA CHS</td>
<td width="81">33-10</td>
<td width="289">M/S. ACE Consultants</td>
<td width="289">M/S.SHREE SADGURU & DELUXE</td>
<td width="124">12-05-10</td>
<td width="109">MCGM</td>
<td width="92">189</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">963</td>
<td width="88">GS</td>
<td width="221">Ganesh Nagar ‘C’ SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri. V. K. Kulkarni</td>
<td style="font-weight: 400;" width="289">M/s. Lakhdawala Developers Pvt Ltd</td>
<td width="124">14-05-10</td>
<td width="109">MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">964</td>
<td>HW</td>
<td width="221">Shri Saibaba SRA CHS Ltd.</td>
<td>33-10</td>
<td width="289">VILAS DESAI & ASSOCIATES</td>
<td width="289">M/s. Sankalp Developers  Project Consultants</td>
<td>14-05-10</td>
<td>STGOVT,Not Available</td>
<td>63</td>
<td>46</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">965</td>
<td>L</td>
<td width="221">SHREE SAISEVA KRUPA CHS & VARSHA ADARSH CHS,SANTAJI DHANAJI CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td style="font-weight: 400;" width="289">M/s. Neeta Developer</td>
<td>20-05-10</td>
<td>Private</td>
<td>452</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">966</td>
<td width="88">KE</td>
<td width="221">Prakashwadi CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td>25-05-10</td>
<td>Private</td>
<td>344</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">967</td>
<td width="88">N</td>
<td width="221">NEETA DATTATRAYA SRA CHS & NEETA JAY BHAVANI SRA CHS.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Abdullah Siddiqui of M/s. Space Design Consult</td>
<td style="font-weight: 400;" width="289">M/s. Vastu Developer  Heeral</td>
<td width="124">26-05-10</td>
<td width="109">Private</td>
<td width="92">423</td>
<td width="92">0</td>
<td width="92">100</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">968</td>
<td width="88">E</td>
<td width="221">Bismillah CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Arch Dimension</td>
<td width="289">Grace Enterprises</td>
<td width="124">28-05-10</td>
<td width="109">Private</td>
<td width="92">72</td>
<td width="92">0</td>
<td width="92">9</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">969</td>
<td width="88">N</td>
<td width="221">Jai Santoshi Mata SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Hemant Parikh  Associates</td>
<td width="289">Rameshwar Corporation</td>
<td width="124">28-05-10</td>
<td width="109">Private</td>
<td width="92">125</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">970</td>
<td>S</td>
<td width="221">Shivdarshan CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Arch-V-Shan Creations</td>
<td style="font-weight: 400;" width="289">M/s. Space Solutions</td>
<td>29-05-10</td>
<td width="109">Private</td>
<td>167</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">971</td>
<td width="88">N</td>
<td width="221">CTS No. 121 (Pt.) of Shree Ganesh CHS (Prop.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dot Architects</td>
<td width="289">M/s. Shree Saibaba Constructions Pvt. Ltd. </td>
<td width="124">31-05-10</td>
<td width="109">PVT</td>
<td width="92">55</td>
<td width="92">0</td>
<td width="92">12</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">972</td>
<td width="88">RC</td>
<td width="221">Gopal Krishna SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dot Architect</td>
<td style="font-weight: 400;" width="289">Right Channel Construction Pvt. Ltd.</td>
<td width="124">31-05-10</td>
<td width="109">Private</td>
<td>139</td>
<td width="92">0</td>
<td width="92">32</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">973</td>
<td width="88">KE</td>
<td width="221">Hanuman Nagar (Jogeshwari) SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td width="289">M/s. Kanchi Builders and Developers</td>
<td>01-06-10</td>
<td>Private</td>
<td>124</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">974</td>
<td width="88">FN</td>
<td width="221">Shanti SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289">M/s. M. M. Developers</td>
<td width="124">02-06-10</td>
<td width="109">STGOVT</td>
<td width="92">122</td>
<td width="92">35</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">975</td>
<td>GN</td>
<td width="221">Samadhan SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.G. Dalvi  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Renaissance Construction</td>
<td>08-06-10</td>
<td>MCGM</td>
<td width="92">58</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">976</td>
<td>T</td>
<td width="221">Mulund Gavanipada  Gayatri Co. Op. Hsg. Soc. Ltd 2) Mulund Gavanipada Isha-chhaya Co. Op. Hsg. Soc. Ltd & 3) Mulund Gavanipada Shrikrupa Co. Op. Hsg. Soc. Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td width="289">M/s. R. R. Developers</td>
<td>08-06-10</td>
<td>MHADA</td>
<td>670</td>
<td>163</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">977</td>
<td width="88">PN</td>
<td width="221">Takshshila (Malad) SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td style="font-weight: 400;" width="289">M/s. Sai Construction</td>
<td width="124">09-06-10</td>
<td width="109">STGOVT</td>
<td width="92">73</td>
<td width="92">52</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">978</td>
<td width="88">MW</td>
<td width="221">Panchsheel & Ekta SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td style="font-weight: 400;" width="289">Jai Bhagwati Developers  Builders</td>
<td width="124">16-06-10</td>
<td width="109">STGOVT</td>
<td width="92">179</td>
<td width="92">131</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">979</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">Bhartiya Vikas A CHS Ltd .</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Purbi Architect SharadMahajan</td>
<td width="289">Shiv Shardha Developers</td>
<td>17-06-10</td>
<td width="109">MCGM</td>
<td width="92">117</td>
<td width="92">0</td>
<td width="92">17</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">980</td>
<td width="88">GS</td>
<td width="221">Shri Chamunda CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289">M/s. Hatdia Builders Pvt. Ltd</td>
<td width="124">29-06-10</td>
<td width="109">Private</td>
<td width="92">55</td>
<td width="92">0</td>
<td width="92">44</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">981</td>
<td width="88">ME</td>
<td width="221">3.11 Scheme (Mahul Constrcution)</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">M/s. Housing Dev.  Inf. Ltd</td>
<td width="124">29-06-10</td>
<td width="109">PVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">456</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">982</td>
<td>T</td>
<td width="221">Shree Balaji Co.Op. Hsg. Soc. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Hemant Parikh  Associates</td>
<td width="289">Star Premises Pvt.Ltd</td>
<td>30-06-10</td>
<td>Private</td>
<td>25</td>
<td>16</td>
<td>0</td>
<td>0</td>
<td width="92">Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">983</td>
<td width="88">MW</td>
<td width="221">3.11 scheme (Shiroya Builder) </td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289">M/s. Siroya Rishabh Developers</td>
<td width="124">30-06-10</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">352</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">984</td>
<td>T</td>
<td width="221">Naik Wadi</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHDUR</td>
<td style="font-weight: 400;" width="289">Cosmos Prime Projects Limited</td>
<td>02-07-10</td>
<td>Private</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td width="92"> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td width="64">985</td>
<td>T</td>
<td width="221">Dr. Babasaheb Ambedkar nd Bhimjyoti CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td style="font-weight: 400;" width="289">Cosmos Prime Projects Limited</td>
<td>02-07-10</td>
<td>Private</td>
<td>177</td>
<td>12</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>yes </td>
<td>Yes</td>
<td>12</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">986</td>
<td>T</td>
<td width="221">Dr. Babasaheb Ambedkar CHS  Bhimjyoti CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td style="font-weight: 400;" width="289">Cosmos Prime Projects Limited</td>
<td>02-07-10</td>
<td>Private</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td width="92"> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td width="64">987</td>
<td width="88">KE</td>
<td width="221">Ramnath CHS(Prop.) New</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">S. G. Nemivant</td>
<td width="289">M/s.Drishti Developers,</td>
<td>07-07-10</td>
<td>Private</td>
<td>32</td>
<td>6</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>Yes</td>
<td>yes</td>
<td>6</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">988</td>
<td width="88">RS</td>
<td width="221">Shri Shiv Shakti CHS 2) Pandit Nehru CHS 3) Karumari Aman CHS</td>
<td width="81">33-10</td>
<td width="289">M/S AAKAR ARCHITECTS  CONSULTANTS</td>
<td width="289">M/s. Dharti Nirman Builders   Developers</td>
<td width="124">07-07-10</td>
<td width="109">STGOVT</td>
<td width="92">274</td>
<td width="92">0</td>
<td width="92">25</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">989</td>
<td width="88">HE</td>
<td width="221">Guru Valmiki SRA CHS. (Prop.)</td>
<td width="81">33-10</td>
<td width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td width="289">Housing Development  Imp. India Pvt. Ltd. HDIL</td>
<td width="124">12-07-10</td>
<td width="109">STGOVT</td>
<td width="92">443</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">990</td>
<td width="88">MW</td>
<td width="221">Shiv Sai Sahakari SRA CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Griha Rachana</td>
<td width="289">M/s. Griha Nirmiti  Developers</td>
<td width="124">12-07-10</td>
<td width="109">STGOVT</td>
<td width="92">44</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">991</td>
<td width="88">MW</td>
<td width="221">Vishwagautam CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td style="font-weight: 400;" width="289">Jai Bhagwati Developers  Builders</td>
<td width="124">21-07-10</td>
<td width="109">STGOVT</td>
<td width="92">160</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">992</td>
<td width="88">KW</td>
<td width="221">1. New Hanuman Nagar SRA CHS(Prop). 2. Valmiki SRA CHS Ltd 3. Anand (SRA) CHS Ltd </td>
<td width="81">33-10</td>
<td width="289">Shri. Suyog Shet  M/s. Miti designers & planners</td>
<td width="289">M/s. Nimesh Global Syndicate     </td>
<td width="124">29-07-10</td>
<td width="109">MHADA/STGOVT</td>
<td>583</td>
<td>0</td>
<td>108</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">993</td>
<td width="88">RS</td>
<td width="221">Shree Siddhivinayak (SRA) Coop. Hsg. Soc. (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/S Wesymor Consultants Pvt. Ltd.</td>
<td width="289">M/s. Sai Krupa Developers</td>
<td width="124">30-07-10</td>
<td width="109">Private</td>
<td width="92">208</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">994</td>
<td>S</td>
<td width="221">M/s. Valmiki Nagar SRA CHS (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Atharva Consultants</td>
<td width="289">M/s. Geetai Developers Pvt. Ltd</td>
<td>30-07-10</td>
<td width="109">MHADA</td>
<td>267</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">995</td>
<td>S</td>
<td width="221">Marathawadi SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant</td>
<td width="289">Dharmesh Jain</td>
<td>02-08-10</td>
<td width="109">Private</td>
<td>36</td>
<td>30</td>
<td>0</td>
<td>0</td>
<td width="92">Constructed</td>
<td>Yes</td>
<td>YES</td>
<td>2</td>
<td>28</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">996</td>
<td width="88">GS</td>
<td width="221">Asthavinayak SRA</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Jayshing Shinde</td>
<td width="289">M/s.Heramb Group</td>
<td width="124">05-08-10</td>
<td width="109">MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">997</td>
<td width="88">KE</td>
<td width="221">MAJAS HILL SRA CHS (PROP) / 33(14)D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">M/s. M.K. Enterprises</td>
<td>05-08-10</td>
<td>Private</td>
<td>28</td>
<td>0</td>
<td width="92">0</td>
<td width="92">10</td>
<td>No</td>
<td>Yes</td>
<td>Yes</td>
<td>0</td>
<td>10</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">998</td>
<td width="88">KW</td>
<td width="221">Bharat Nagar CHS Ltd.  & Andheri Juhu Versova Sagar Darshan CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s. One up Developers (P) Ltd.</td>
<td width="124">11-08-10</td>
<td width="109">MHADA</td>
<td width="92">139</td>
<td width="92">15</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">999</td>
<td>T</td>
<td width="221">Shramik Nagar CHS.(Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">S.S. Associates  Architect And Int  Designer</td>
<td style="font-weight: 400;" width="289">M/s. Shree Krishna  Developers</td>
<td>11-08-10</td>
<td>Private,STGOVT</td>
<td>78</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1000</td>
<td width="88">KW</td>
<td width="221">Ashiyana Welfare Cama Hill SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shantanoo Rane & Associate</td>
<td style="font-weight: 400;" width="289">M/s. Twin & Deccan Builders</td>
<td width="124">13-08-10</td>
<td width="109">Private</td>
<td width="92">305</td>
<td width="92">72</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1001</td>
<td>T</td>
<td width="221">Vishava Shanti SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">S.S. Associates  Architect And Int  Designer</td>
<td width="289">M/S. VIVA SAVLI DEVELOPERS</td>
<td>17-08-10</td>
<td>STGOVT</td>
<td>131</td>
<td>16</td>
<td>27</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1002</td>
<td>T</td>
<td>Bombay Ox. 3.11</td>
<td>3.11</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">Housing Development  Imp. India Pvt. Ltd. HDIL</td>
<td width="124">17-08-10</td>
<td>Private</td>
<td>0</td>
<td width="92">0</td>
<td width="92">2664</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1003</td>
<td width="88">RC</td>
<td width="221">3.11 SCHEME BORIVALI</td>
<td>3-11</td>
<td style="font-weight: 400;" width="289">M/S. Aakar Architects  Consultants</td>
<td width="289">M/s. Rite developer Pvt. Ltd</td>
<td>20-08-10</td>
<td width="109">MCGM</td>
<td>191</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1004</td>
<td width="88">FN</td>
<td width="221">VIGANHARTA SRA CHS (PROP)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Tandel  Associates</td>
<td width="289">M/s. Shree Developers</td>
<td width="124">27-08-10</td>
<td width="109">MCGM</td>
<td width="92">24</td>
<td width="92">9</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1005</td>
<td width="88">HE</td>
<td width="221">Ghausia Compound CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">SANJAY V. SHAH</td>
<td width="289">M/s. STELMAC DEVELOPERS PVT LTD</td>
<td width="124">07-09-10</td>
<td width="109">MHADA</td>
<td width="92">140</td>
<td width="92">27</td>
<td width="92">82</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1006</td>
<td>GN</td>
<td width="221">OM SAI SRA CHS (LTD) & Kapila SRA CHS (Ltd)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S Tushar Parulekar  Associates</td>
<td width="289">M/s. shree Sai Samarth Developers</td>
<td>08-09-10</td>
<td>Private</td>
<td width="92">128</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1007</td>
<td>FS</td>
<td width="221">Jijau Prerana CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td width="289">M/s. Siroya Builders  Developers</td>
<td>23-09-10</td>
<td>Private</td>
<td width="92">361</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1008</td>
<td width="88">KE</td>
<td width="221">SANSKRUTI  NIRMAN SRA CHSL</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shantanoo Rane & Associate</td>
<td style="font-weight: 400;" width="289">M/s Nirman Constructions</td>
<td>23-09-10</td>
<td>Private</td>
<td>34</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1009</td>
<td width="88">RC</td>
<td width="221">3.11</td>
<td>3-11</td>
<td width="289">M/S. H.S.THAKKER  ASSOCIATES</td>
<td style="font-weight: 400;" width="289">M/s East  West Builders</td>
<td>23-09-10</td>
<td width="109">MCGM</td>
<td>78</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1010</td>
<td width="88">RS</td>
<td width="221">3.11</td>
<td width="81">3-11</td>
<td width="289">H.S.THAKKAR & ASSOCIATES</td>
<td width="289">Municipal Corporation of Greater Mumbai</td>
<td width="124">23-09-10</td>
<td width="109">MCGM</td>
<td width="92">88</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">88</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">88</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1011</td>
<td>S</td>
<td width="221">Keshar Bhagat Niwas SRA C.H.S. Ltd & Matru Pitru SRA C.H.S. Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shelke & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Atlanta Associates Builders  Developers</td>
<td>01-10-10</td>
<td width="109">Private</td>
<td>67</td>
<td>24</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1012</td>
<td width="88">HE</td>
<td width="221">Om Sai SRA Co. Op. Hsg. Soc.Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Consultants Combined</td>
<td width="289">M/s. Saranga Estate Pvt Ltd</td>
<td width="124">06-10-10</td>
<td width="109">MCGM</td>
<td width="92">42</td>
<td width="92">22</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1013</td>
<td width="88">RC</td>
<td width="221">Seven Star CHS (Prop).</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jintendra Patel Of M/s. Aakar Architects & C</td>
<td width="289">M/s. Seven Star Developers</td>
<td width="124">08-10-10</td>
<td width="109">Private,STGOVT</td>
<td>49</td>
<td width="92">29</td>
<td width="92">0</td>
<td width="92">0</td>
<td>no</td>
<td width="92">no</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1014</td>
<td width="88">E</td>
<td width="221">Ekta CHS (Prop), Ekta (Estate) CHS, Mahatama Jotiba Phule Nagar (Estate) CHS</td>
<td width="81">33-10</td>
<td>Shri Manoj Vishwakarma of M/s DOT Architects.</td>
<td>M/s Krish Developer</td>
<td width="124">14-10-10</td>
<td width="109">MCGM</td>
<td width="92">643</td>
<td width="92">103</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1015</td>
<td width="88">KE</td>
<td width="221">Jai Ambe CHS (Prop) & Swagat CHS (Prop).</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s. Anshuman Developers</td>
<td>16-10-10</td>
<td>Private</td>
<td>232</td>
<td width="92">312</td>
<td width="92">0</td>
<td width="92">36</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1016</td>
<td width="88">KW</td>
<td width="221">Shree Ganesh Krupa CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">M/s. Ishaanya Associates</td>
<td width="289">M/s. Aarc Housing Co.</td>
<td width="124">16-10-10</td>
<td width="109">STGOVT</td>
<td width="92">21</td>
<td width="92"> </td>
<td width="92">13</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1017</td>
<td width="88">PN</td>
<td width="221">Sanjay Gandhi Nagar SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/S Wesymor Consultants Pvt. Ltd.</td>
<td width="289">M/s. J.P. Infra (Mumbai) Pvt. Ltd.</td>
<td width="124">16-10-10</td>
<td width="109">Private</td>
<td width="92">451</td>
<td width="92">152</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">20</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1018</td>
<td width="88">PN</td>
<td width="221">Malad Ganesh Prasad Chs.(Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">Riddhi Siddhi Constructions</td>
<td width="124">22-10-10</td>
<td width="109">MHADA,MCGM</td>
<td width="92">463</td>
<td width="92">9</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1019</td>
<td>L</td>
<td width="221">Gomes Town A SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Rahul Veturkar</td>
<td width="289">M/s. Hari Om Constructions</td>
<td>25-10-10</td>
<td>Private</td>
<td>170</td>
<td>8</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1020</td>
<td width="88">N</td>
<td width="221">Baldevsingh Thakur SRA CHS (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Design Creations</td>
<td style="font-weight: 400;" width="289">M/s Atlantic Constructions</td>
<td width="124">25-10-10</td>
<td width="109">Private</td>
<td width="92">97</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1021</td>
<td width="88">PN</td>
<td width="221">33 (14) D Scheme</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s. Catapult Realty Consultants</td>
<td width="289">M/s. Transcon Properties Pvt. Ltd</td>
<td width="124">26-10-10</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1022</td>
<td width="88">MW</td>
<td width="221">Amber CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. ARCO Architect  Interior Designer.</td>
<td width="289">M/s. Amber Corpo Pvt. Ltd.</td>
<td width="124">29-10-10</td>
<td width="109">STGOVT</td>
<td width="92">37</td>
<td width="92">0</td>
<td width="92">37</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1023</td>
<td width="88">HE</td>
<td width="221">Dr. Babasaheb Ambedkar Nagar SRA Co-Op. Hsg. Soc.(Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td width="289">Foremost Realtors</td>
<td width="124">30-10-10</td>
<td width="109">MMRDA</td>
<td width="92">430</td>
<td width="92">192</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1024</td>
<td>HW</td>
<td width="221">Sai Durga CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S AAKAR ARCHITECTS  CONSULTANTS</td>
<td width="289">M/s. Sanjay Construction  Finance Pvt. Ltd</td>
<td>16-11-10</td>
<td>Private,MCGM</td>
<td>230</td>
<td>85</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1025</td>
<td width="88">PN</td>
<td width="221">Ambewadi Sahakari CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Rasik P. Hingoo Associates</td>
<td style="font-weight: 400;" width="289">M/s.Mauli Sai Developers pvt.ltd</td>
<td width="124">19-11-10</td>
<td width="109">Private</td>
<td width="92">161</td>
<td width="92">0</td>
<td width="92">199</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1026</td>
<td width="88">KE</td>
<td width="221">3.11</td>
<td>3-11</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">M/s. Housing Development  Infrastructure Ltd. HD</td>
<td>19-11-10</td>
<td>Private</td>
<td>1308</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>1308</td>
<td>0</td>
</tr>
<tr>
<td width="64">1027</td>
<td width="88">KW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Viral. G. Joshi</td>
<td width="289">Anil G. Nair</td>
<td width="124">19-11-10</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">28</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1028</td>
<td>RN</td>
<td width="221">33 (14) D (romell)</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">GIRISH CHAUDHARI</td>
<td style="font-weight: 400;" width="289">M/s. Romell Real Estate Private Limited</td>
<td>22-11-10</td>
<td>Private,STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1029</td>
<td width="88">PN</td>
<td width="221">3K Malvani</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Ellora Project Consultants</td>
<td style="font-weight: 400;" width="289">Lakshkaria Construction Pvt. Ltd</td>
<td width="124">23-11-10</td>
<td width="109">STGOVT,MHADA,MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1030</td>
<td>RN</td>
<td width="221">Shree Krupa SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Design World</td>
<td width="289">M/s. Shree Krupa Associates.</td>
<td>23-11-10</td>
<td>Private</td>
<td width="92">85</td>
<td width="92">0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1031</td>
<td width="88">PN</td>
<td width="221">Shree Ganraj SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Atharva Consultants</td>
<td width="289">Modern India Builders & Developers</td>
<td width="124">26-11-10</td>
<td width="109">STGOVT</td>
<td width="92">101</td>
<td width="92">0</td>
<td width="92">103</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1032</td>
<td width="88">PN</td>
<td width="221">Mitlya Budhya Compound Rahivasi Seva Sangh (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Neve  Associates</td>
<td width="289">Shri. Sanjay Parekh</td>
<td width="124">30-11-10</td>
<td width="109">Private</td>
<td width="92">86</td>
<td width="92">24</td>
<td width="92">0</td>
<td width="92">8</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1033</td>
<td width="88">KW</td>
<td width="221">Sai Samarth SRA CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td style="font-weight: 400;" width="289">Emerald Developers.</td>
<td width="124">04-12-10</td>
<td width="109">Private</td>
<td>95</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1034</td>
<td width="88">KE</td>
<td width="221">Om Sai CHS (Prop)</td>
<td>33-10</td>
<td width="289">T. N. Hasan of M/s Punar Vikas Vastushastra</td>
<td width="289">M/s. A. M Enterprises</td>
<td>09-12-10</td>
<td>Private</td>
<td>34</td>
<td>34</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1035</td>
<td width="88">HE</td>
<td width="221">Maharashtra Nagar Residents SRA CHS LTD.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Sameer V. Kulkarni</td>
<td width="289">M/s. Gajraj Housing Nirman PVT Ltd</td>
<td width="124">15-12-10</td>
<td width="109">STGOVT</td>
<td width="92">113</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1036</td>
<td width="88">RC</td>
<td width="221">Mahakali Coop. Hsg. Soc. (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Neve  Associates</td>
<td width="289">M/s. Amogh Enterprises</td>
<td>16-12-10</td>
<td width="109">Private,MHADA</td>
<td>465</td>
<td width="92">155</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1037</td>
<td width="88">RS</td>
<td width="221">Apana Nagar Adarsh CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td width="289">M/s. Navkar Construction</td>
<td width="124">23-12-10</td>
<td width="109">Private</td>
<td width="92">223</td>
<td width="92">32</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1038</td>
<td>S</td>
<td width="221">Shree Ram Nagar CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Arch-V-Shan Creations</td>
<td style="font-weight: 400;" width="289">M/s. Space Solutions</td>
<td>28-12-10</td>
<td width="109">Private</td>
<td>129</td>
<td>7</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1039</td>
<td width="88">RS</td>
<td width="221">New Pakiza CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Rajendra Ahir.</td>
<td width="289">M/s. Creative Construction</td>
<td width="124">30-12-10</td>
<td width="109">MCGM</td>
<td width="92">78</td>
<td width="92">39</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">39</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1040</td>
<td width="88">KE</td>
<td width="221">Shiv Ganesh CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td style="font-weight: 400;" width="289">M/s Trinetra Construction Pvt. Ltd</td>
<td>06-01-11</td>
<td>Private</td>
<td>14</td>
<td>4</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>Yes</td>
<td>Yes</td>
<td>0</td>
<td>4</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1041</td>
<td width="88">KE</td>
<td width="221">Shiv- Ganesh CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td style="font-weight: 400;" width="289">M/s Trinetra Construction Pvt. Ltd</td>
<td>06-01-11</td>
<td>Private</td>
<td>14</td>
<td>4</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>4</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1042</td>
<td width="88">MW</td>
<td width="221">NAGSEN CHS(PROP), VAISHALI CHS (PROP), SIDDHARTH CHS(PROP), SARNATH CHS(PRPO), MARATHWADA CHS(PROP), RCB CHS (PROP)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dot Architect</td>
<td width="289">Arihant Developers</td>
<td width="124">06-01-11</td>
<td width="109">MHL STGL</td>
<td width="92">703</td>
<td width="92">0</td>
<td width="92">27</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1043</td>
<td width="88">PS</td>
<td width="221">Sanjay Nagar CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td style="font-weight: 400;" width="289">M/s. Samarth Erectores  Developers</td>
<td width="124">06-01-11</td>
<td width="109">MCGM</td>
<td>715</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1044</td>
<td width="88">PS</td>
<td width="221">Samrat Ashok Nagar  Shivshakti CHS Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td style="font-weight: 400;" width="289">M/s. Samarth Erectores  Developers</td>
<td width="124">06-01-11</td>
<td width="109">MCGM</td>
<td>108</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1045</td>
<td width="88">KE</td>
<td width="221">33 (14) D (scheme)</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">Shri Manoj Vishwakarma</td>
<td style="font-weight: 400;" width="289">Pratiksha Real Estate Pvt. Ltd.</td>
<td>07-01-11</td>
<td>Private</td>
<td>428</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1046</td>
<td width="88">KW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri Manoj Vishwakarma</td>
<td style="font-weight: 400;" width="289">Pratiksha Real Estate Pvt. Ltd.</td>
<td width="124">07-01-11</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">428</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1047</td>
<td width="88">FN</td>
<td width="221">Aman Sagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Super Saarathi Developers</td>
<td width="124">10-01-11</td>
<td width="109">STGOVT</td>
<td width="92">95</td>
<td width="92">0</td>
<td width="92">21</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1048</td>
<td width="88">MW</td>
<td width="221">Uttakarsha SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s Mayuree Consultants</td>
<td style="font-weight: 400;" width="289">Hilton Developers Pvt.ltd</td>
<td width="124">13-01-11</td>
<td width="109">STGOVT</td>
<td width="92">185</td>
<td width="92">0</td>
<td width="92">56</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1049</td>
<td>RN</td>
<td width="221">Ekta Nagar CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Rakesh Waghmare</td>
<td width="289">Khushi Builder  Developer</td>
<td>14-01-11</td>
<td>STGOVT</td>
<td width="92">109</td>
<td width="92">0</td>
<td width="92">152</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1050</td>
<td width="88">PN</td>
<td width="221">Jaldhara SRA Co.Op. Hsg.Soc(Ltd.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td width="289">M/s. V.G.S Construction</td>
<td width="124">15-01-11</td>
<td width="109">MHADA</td>
<td width="92">257</td>
<td width="92">211</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1051</td>
<td width="88">KE</td>
<td width="221">Shree Samarth SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">M/s. Kalakruti Realtors Pvt. Ltd</td>
<td>19-01-11</td>
<td>Private,MCGM</td>
<td>87</td>
<td>8</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1052</td>
<td>T</td>
<td width="221">GOVIND PRAKKASH SRA CHS LTD.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s Mayuree Consultants</td>
<td style="font-weight: 400;" width="289">M/s Sai developer</td>
<td>25-01-11</td>
<td>STGOVT</td>
<td>36</td>
<td width="92">0</td>
<td width="92">13</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1053</td>
<td width="88">KW</td>
<td width="221">Vile Parle Prem Nagar CHS (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/S Wesymor Consultants Pvt. Ltd.</td>
<td width="289">Sparks developer</td>
<td width="124">25-01-11</td>
<td width="109">MCGM</td>
<td>753</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1054</td>
<td width="88">FN</td>
<td width="221">Anand Nagar CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td width="124">31-01-11</td>
<td width="109">STGOVT</td>
<td width="92">138</td>
<td width="92">0</td>
<td width="92">139</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1055</td>
<td>FS</td>
<td width="221">Yashodhan Coop Housing Society (Ltd.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">L. S. Shri. Shashikant L. Jadhav of M/s. Spaceage</td>
<td width="289">M/s. Esque Finmark pvt. Ltd.</td>
<td>07-02-11</td>
<td>Private</td>
<td width="92">202</td>
<td width="92">0</td>
<td width="92">31</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">no</td>
<td width="92">no</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1056</td>
<td width="88">FN</td>
<td width="221">Gangasagar CHS Ltd. (Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Super Saarathi Developers</td>
<td width="124">22-02-11</td>
<td width="109">STGOVT</td>
<td width="92">44</td>
<td width="92">0</td>
<td width="92">24</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1057</td>
<td width="88">FN</td>
<td width="221">Sai Sahyadri CHS Ltd. (Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Super Saarathi Developers</td>
<td width="124">22-02-11</td>
<td width="109">STGOVT</td>
<td width="92">73</td>
<td width="92">0</td>
<td width="92">87</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1058</td>
<td width="88">FN</td>
<td width="221">Adarsh CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Super Saarathi Developers</td>
<td width="124">22-02-11</td>
<td width="109">STGOVT</td>
<td width="92">113</td>
<td width="92">0</td>
<td width="92">36</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1059</td>
<td>L</td>
<td width="221">Mahalaxmi Co.Op. Hsg. Soc.(Prop)</td>
<td>33-10</td>
<td width="289">Shree. Harshad K.D.</td>
<td width="289">M/s. Sterling Constructions.</td>
<td>23-02-11</td>
<td>Private</td>
<td>62</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1060</td>
<td width="88">RS</td>
<td width="221">Shree Ishaan (SRA) CHS Ltd & Ramji  (SRA) CHS Ltd &</td>
<td width="81">33-10</td>
<td width="289">Vinayak Bhat Consulting Architect</td>
<td width="289">M/s.  M. Construction Company  Associates</td>
<td width="124">23-02-11</td>
<td width="109">Private</td>
<td width="92">170</td>
<td width="92">110</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">Partly</td>
<td width="92">Yes</td>
<td width="92">35</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1061</td>
<td>RN</td>
<td width="221">S.R. scheme under 3.11 clause</td>
<td>3-11</td>
<td style="font-weight: 400;" width="289">Shri. Jintendra Patel Of M/s. Aakar Architects & C</td>
<td width="289">Mr.Krunal A. Bhatt</td>
<td>23-02-11</td>
<td>Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">82</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">82</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1062</td>
<td width="88">FN</td>
<td width="221">Siddhivinayak and Sai Darshan CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. JatinBhuta</td>
<td width="289">M/s. Easy Home Solution Pvt. Ltd.</td>
<td width="124">03-03-11</td>
<td width="109">MHADA</td>
<td width="92">285</td>
<td width="92">382</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1063</td>
<td>FS</td>
<td width="221">Vaibhavi CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s G. M. Kakade Engg. Const. Pvt. Ltd.</td>
<td width="289">M/s Landmark Developers</td>
<td>11-03-11</td>
<td>MCGM</td>
<td width="92">342</td>
<td width="92">145</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1064</td>
<td>T</td>
<td width="221">Shivchandra CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S AAKAR ARCHITECTS  CONSULTANTS</td>
<td width="289">M/S ARIHANT CONSTRUCTION COMPANY</td>
<td>16-03-11</td>
<td>STGOVT</td>
<td>33</td>
<td>6</td>
<td>3</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1065</td>
<td width="88">MW</td>
<td width="221">Indian SRA CHS Ltd, Sant Rohidas SRA CHS Ltd, Kohinoor SRA CHS Ltd, Vatsala SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri. Zeeshan Ansari of M/s. View Dimension</td>
<td width="289">M/s. PNR Builders  Developers</td>
<td width="124">24-03-11</td>
<td width="109">STGOVT</td>
<td width="92">367</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1066</td>
<td width="88">KW</td>
<td width="221">Sai Nagar & Shakti Nagar Sahakari Griha Nirman Sanstha (SRA)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ketan Belsare</td>
<td width="289">M/s. Sai Sagar Consultants</td>
<td width="124">25-03-11</td>
<td width="109">Private</td>
<td width="92">81</td>
<td width="92">262</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Part PAPs Constructed </td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1067</td>
<td width="88">FN</td>
<td width="221">OM Sai CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. G. L. Pangam  Associtaes</td>
<td style="font-weight: 400;" width="289">M/s. Rehab Pranay Developers</td>
<td width="124">30-03-11</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1068</td>
<td width="88">ME</td>
<td width="221">3.11</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">Shri. K.K.Pandey of M/s Rare Associates</td>
<td width="289">M/s. Aristo Developers</td>
<td width="124">31-03-11</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">8582</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1069</td>
<td width="88">FN</td>
<td width="221">Korba Mithagar Samanvay Samitee</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td style="font-weight: 400;" width="289">M/s East  West Builders</td>
<td width="124">05-04-11</td>
<td width="109">STGOVT</td>
<td width="92">1081</td>
<td width="92">0</td>
<td width="92">511</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1070</td>
<td>T</td>
<td width="221">Mulund Ashirwad CHS & Mulund Siddharth Nagar CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Rasik P. Hingoo Associates</td>
<td style="font-weight: 400;" width="289">M/S Riddhi Siddhi Corporation</td>
<td>15-04-11</td>
<td>MHADA</td>
<td>493</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1071</td>
<td width="88">FN</td>
<td width="221">Globle CHS Ltd. (Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Super Saarathi Developers</td>
<td width="124">27-04-11</td>
<td width="109">STGOVT</td>
<td width="92">41</td>
<td width="92">0</td>
<td width="92">39</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1072</td>
<td width="88">FN</td>
<td width="221">Sai Srishti CHS Ltd. (Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Super Saarathi Developers</td>
<td width="124">27-04-11</td>
<td width="109">STGOVT</td>
<td width="92">88</td>
<td width="92">0</td>
<td width="92">32</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1073</td>
<td width="88">FN</td>
<td width="221">Shree Sai Sangam CHS Ltd. (Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Super Saarathi Developers</td>
<td width="124">27-04-11</td>
<td width="109">STGOVT</td>
<td width="92">69</td>
<td width="92">0</td>
<td width="92">82</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1074</td>
<td>S</td>
<td width="221">Silver Moon Co. Op. Hoc. Soc. (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Shekar Arolkar  Asociates</td>
<td width="289">M/s. Parorch Developers LLP</td>
<td>30-04-11</td>
<td width="109">GOVT</td>
<td>147</td>
<td width="92">50</td>
<td>81</td>
<td width="92">119</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1075</td>
<td>T</td>
<td width="221">33(14)D Aristo</td>
<td>33(14)D</td>
<td width="289">MANOJ PARESH & Assocates</td>
<td width="289">Ariisto Developers</td>
<td>30-04-11</td>
<td>Private</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">1680</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1076</td>
<td>FS</td>
<td width="221">Dattavilla Lalshah CHS (Prop)& Sai Dutt CHS(Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MR. SATISH M. HANDE</td>
<td width="289">M/s Magnum Developers</td>
<td>06-05-11</td>
<td>Private</td>
<td width="92">218</td>
<td width="92">116</td>
<td width="92">76</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Part OC granted<br /> 06/10/2018</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1077</td>
<td width="88">MW</td>
<td width="221">Chembur Ekta SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. K.R. Rege  Associates</td>
<td style="font-weight: 400;" width="289">Gharandaj Developer</td>
<td width="124">13-05-11</td>
<td width="109">Private</td>
<td width="92">100</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1078</td>
<td width="88">KW</td>
<td width="221">33(14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s.Crystal Pried Developers</td>
<td width="124">16-05-11</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">144</td>
<td>No</td>
<td>No</td>
<td>No </td>
<td>0</td>
<td>0</td>
<td> </td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1079</td>
<td width="88">GS</td>
<td width="221">Golfadevi CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td width="289">M/s. Marvellous SNO (JV/Construction)</td>
<td width="124">26-05-11</td>
<td width="109">MCGM</td>
<td width="92">650</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1080</td>
<td width="88">KW</td>
<td width="221">33(14) D Scheme</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s. Design World</td>
<td width="289">M/s. Bagrodia Group of Companies</td>
<td width="124">17-06-11</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">31</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1081</td>
<td>GN</td>
<td width="221">SHREE SAI DATTA CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Muktanand Associates</td>
<td width="289">M/s. Shree SaiNirmala Developers</td>
<td>20-06-11</td>
<td>Private</td>
<td width="92">46</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1082</td>
<td width="88">KW</td>
<td width="221">A one Vishal SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Shri. Pradeep Jain of M/s. Kahaan Project Consulta</td>
<td style="font-weight: 400;" width="289">M/s Relliance Construction Comp</td>
<td width="124">22-06-11</td>
<td width="109">STGOVT</td>
<td width="92">243</td>
<td width="92">29</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Part PAPs Constructed </td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1083</td>
<td width="88">PN</td>
<td width="221">AAKASH CHS (PROP)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Ketan Belsare Of M/s.Ellora Project Consultant</td>
<td width="289">M/S.QASWA CONSTRUCTION</td>
<td width="124">24-06-11</td>
<td width="109">Private</td>
<td width="92">53</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">56</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1084</td>
<td width="88">RS</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri. Sanjay B. Shah</td>
<td width="289">M/s. Shree Krishna Rahul Developers</td>
<td width="124">24-06-11</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">64</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1085</td>
<td width="88">PN</td>
<td width="221">Matrudarshan SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td width="289">M/s. Royal Builders.</td>
<td width="124">27-06-11</td>
<td width="109">Private</td>
<td width="92">16</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1086</td>
<td width="88">MW</td>
<td width="221">Vighanaharata SRA CHS (prop)</td>
<td width="81">33-10</td>
<td width="289">Shri. Sunil Thakur</td>
<td width="289">M/s. Parsn Foundation & Engineering Corporation</td>
<td width="124">29-06-11</td>
<td width="109">STGOVT</td>
<td width="92">30</td>
<td width="92">7</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1087</td>
<td width="88">RC</td>
<td width="221">Harihar Krupa SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Yash Developers</td>
<td>29-06-11</td>
<td width="109">MCGM</td>
<td>473</td>
<td>0</td>
<td>90</td>
<td>0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1088</td>
<td width="88">FN</td>
<td width="221">Maharshi Balmiki SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Jangid Architects</td>
<td style="font-weight: 400;" width="289">M/s. Shiv Mangal Developers</td>
<td width="124">30-06-11</td>
<td width="109">MCGM</td>
<td width="92">103</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1089</td>
<td width="88">FN</td>
<td width="221">Rajiv Gandhi CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Jangid Architects</td>
<td style="font-weight: 400;" width="289">M/s. Shiv Mangal Developers</td>
<td width="124">30-06-11</td>
<td width="109">STGOVT</td>
<td width="92">87</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1090</td>
<td width="88">KW</td>
<td width="221">Anand CHS & Mata Durga Bhawani CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s. Anshuman Developer</td>
<td width="124">12-07-11</td>
<td width="109">Private,MHADA</td>
<td>153</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1091</td>
<td>L</td>
<td width="221">Aman (Kurla) SRA CHS (Ltd)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td width="289">M/s. Dani Builders & Developers</td>
<td>14-07-11</td>
<td>MHADA</td>
<td>105</td>
<td>39</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1092</td>
<td width="88">FN</td>
<td width="221">Ekta Aman CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Super Saarathi Developers</td>
<td width="124">18-07-11</td>
<td width="109">STGOVT</td>
<td width="92">17</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1093</td>
<td>S</td>
<td width="221">Bhagyalaxmi Chs. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Manohar M. Kaphale  Associates</td>
<td width="289">M/s. Shree Gaondevi Enterprises</td>
<td>18-07-11</td>
<td width="109">Private</td>
<td>93</td>
<td>0</td>
<td>3</td>
<td>0</td>
<td width="92">Under construction</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1094</td>
<td width="88">KE</td>
<td width="221">Payawadi SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Paarshad Associates</td>
<td style="font-weight: 400;" width="289">Grace Infracon  Property Developers</td>
<td>20-07-11</td>
<td>Private,MCGM</td>
<td>73</td>
<td>13</td>
<td width="92">4</td>
<td width="92">0</td>
<td>No</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1095</td>
<td width="88">PN</td>
<td width="221">Om Dattkrupa Welfare Society</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Daddy  Associates</td>
<td width="289">M/S.SOLITAIRE CONSTRUCTIONS</td>
<td width="124">28-07-11</td>
<td width="109">Private</td>
<td width="92">53</td>
<td width="92">0</td>
<td width="92">63</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1096</td>
<td width="88">KE</td>
<td width="221">Sayajirao SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Verticohorizon</td>
<td width="289">M/s. Maplle Infraprojects Ltd</td>
<td>29-07-11</td>
<td>Private</td>
<td>46</td>
<td>19</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1097</td>
<td width="88">MW</td>
<td width="221">Sant Gadge Maharaj CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289">M/s. Balan & Chheda Developers Pvt. Ltd</td>
<td width="124">29-07-11</td>
<td width="109">MCGM</td>
<td width="92">170</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1098</td>
<td width="88">ME</td>
<td width="221">Sai Darshan CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td width="289">M/s. Mishal Construction Pvt Ltd</td>
<td width="124">30-07-11</td>
<td width="109">STGOVT</td>
<td width="92">61</td>
<td width="92">0</td>
<td width="92">30</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1099</td>
<td width="88">PN</td>
<td width="221">Mariyaman Seva Society</td>
<td width="81">33-10</td>
<td width="289">Shri Manish Shah</td>
<td width="289">M/s. Samarth Erectors & Dev.</td>
<td width="124">01-08-11</td>
<td width="109">Private</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">23</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1100</td>
<td>S</td>
<td width="221">Madhusudan SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">Shri. Rahul Veturkar of M/s. Veturkar & Associates</td>
<td style="font-weight: 400;" width="289">M/S. Tirupati Developers</td>
<td>01-08-11</td>
<td width="109">Private</td>
<td>146</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">YES</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1101</td>
<td width="88">ME</td>
<td width="221">Trimurti SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td width="289">M/s. Urban Heights Realtors Pvt Ltd.</td>
<td width="124">09-08-11</td>
<td width="109">Private,STGOVT</td>
<td width="92">78</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1102</td>
<td>L</td>
<td width="221">Ekta SRA Coop. Hsg. Society Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deva Consultants</td>
<td style="font-weight: 400;" width="289">Baba Homes Builders & Developers</td>
<td>10-08-11</td>
<td>MHADA</td>
<td>115</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1103</td>
<td>L</td>
<td width="221">Shoor Sambhaji CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mrs. Leena Churi</td>
<td style="font-weight: 400;" width="289">M/s. Rizvi Developer</td>
<td>10-08-11</td>
<td>Private</td>
<td>371</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1104</td>
<td>L</td>
<td width="221">NARVEER TANAJI CHS LTD</td>
<td>33-10</td>
<td width="289">M/s. Dilip Jaywant & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Sai Corporation</td>
<td>12-08-11</td>
<td>Private</td>
<td>46</td>
<td>0</td>
<td>31</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1105</td>
<td width="88">KE</td>
<td width="221">Shree Ganesh (Andheri) S.R.A C.H.S. Ltd. (Proposed)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S Wesymor Consultants Pvt. Ltd.</td>
<td width="289">M/s. Rajiv Construction Company  Developer</td>
<td>18-08-11</td>
<td>Private,STGOVT</td>
<td>98</td>
<td>47</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1106</td>
<td width="88">FN</td>
<td width="221">Bhairavnath CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ketan Belsare</td>
<td width="289">M/s. NSS Realtors Pvt. Ltd.</td>
<td width="124">24-08-11</td>
<td width="109">MCGM</td>
<td width="92">123</td>
<td width="92">0</td>
<td width="92">23</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1107</td>
<td>FS</td>
<td width="221">Shindhu Nagar Sanyukta Slum Rehabilitation  CHS. (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S Wesymor Consultants Pvt. Ltd.</td>
<td width="289">M/S Sahana Properties & Resorts Pvt. Ltd.</td>
<td>24-08-11</td>
<td>MCGM</td>
<td width="92">813</td>
<td width="92">18</td>
<td width="92">30</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1108</td>
<td width="88">GS</td>
<td width="221">Shiv Ganesh CHS (Prop) & Shiv Sainath CHS (Prop) Shri Ganesh Krupa Commercial Welfare Society - VLT & Dhobighat Association CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Consultants Combined</td>
<td style="font-weight: 400;" width="289">M/s. Om Omega Sheltors</td>
<td width="124">24-08-11</td>
<td width="109">MCGM</td>
<td width="92">753</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1109</td>
<td width="88">MW</td>
<td width="221">Kokan Nagar CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Sameer V. Kulkarni</td>
<td style="font-weight: 400;" width="289">M/s. Sonu Realtors Pvt. Ltd</td>
<td width="124">03-09-11</td>
<td width="109">STGOVT</td>
<td width="92">164</td>
<td width="92">26</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1110</td>
<td width="88">KE</td>
<td width="221">33(14) (D)</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">M/s. Valuable Dreamscape Pvt. Ltd.</td>
<td>09-09-11</td>
<td>Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1111</td>
<td width="88">HE</td>
<td width="221">33(14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td style="font-weight: 400;" width="289">M/s. Shubham Developers</td>
<td width="124">12-09-11</td>
<td width="109">PVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">19</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1112</td>
<td width="88">FN</td>
<td width="221">Jai Bhavani CHS Ltd. (Proposed)</td>
<td width="81">33-10</td>
<td width="289">M/s. Sleekline Asso.</td>
<td width="289">M/s. Builtech Developers</td>
<td width="124">14-09-11</td>
<td width="109">STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1113</td>
<td width="88">FN</td>
<td width="221">Sai Baba CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Kasu Munshi  Associates</td>
<td width="289">Super Success Developers Pvt. Ltd</td>
<td width="124">14-09-11</td>
<td width="109">STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1114</td>
<td width="88">FN</td>
<td width="221">Sion 3 K (1)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Kasu Munshi  Associates</td>
<td width="289">M/s. Ackruti City Ltd. Consortium</td>
<td width="124">14-09-11</td>
<td width="109">STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1115</td>
<td width="88">FN</td>
<td width="221">Ambedkar Nagar CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Kasu Munshi  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Shreenath Realtors</td>
<td width="124">14-09-11</td>
<td width="109">STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1116</td>
<td width="88">FN</td>
<td width="221">Shiv Kripa/ Anand Aman CHS Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Kasu Munshi  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Shreenath Realtors</td>
<td width="124">14-09-11</td>
<td width="109">STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1117</td>
<td width="88">FN</td>
<td width="221">Jai Mata Di CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Kasu Munshi  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Shreenath Realtors</td>
<td width="124">14-09-11</td>
<td width="109">STGOVT</td>
<td width="92">35</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1118</td>
<td width="88">HE</td>
<td width="221">Om Shree Ram Nagar (Plot-A) SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s.Kamakshi Enterprises & Shreenathji Developers</td>
<td width="124">22-09-11</td>
<td width="109">PVT</td>
<td width="92">52</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1119</td>
<td width="88">N</td>
<td width="221">Shree Krishna SRA C.H.S. Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shelke & Associates</td>
<td width="289">M/s. Janhavi Housing Developers Pvt. Ltd.</td>
<td width="124">22-09-11</td>
<td width="109">Private</td>
<td width="92">32</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1120</td>
<td>FS</td>
<td width="221">Annabhau Sathe Nagar CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Catapult Realty Consultants</td>
<td width="289">The Bombay Dyeing  Manufacturing Co. Ltd.</td>
<td>23-09-11</td>
<td>Private</td>
<td width="92">386</td>
<td width="92">0</td>
<td width="92">217</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1121</td>
<td width="88">HE</td>
<td width="221">Ganesh Darshan Sahakari Griha Nirman Sanstha (Ltd)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">Super Constraction Co</td>
<td width="124">29-09-11</td>
<td width="109">STGOVT</td>
<td width="92">146</td>
<td width="92">0</td>
<td width="92">26</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1122</td>
<td width="88">RC</td>
<td width="221">Shree Siddheshwar B SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Raghuleela Realtors Pvt. Ltd</td>
<td>05-10-11</td>
<td width="109">Private</td>
<td>170</td>
<td width="92">86</td>
<td width="92">0</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1123</td>
<td>S</td>
<td width="221">Shree Deep Laxmi SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Ramesh Dalvi  Associates</td>
<td width="289">M/s. Puro Construction.</td>
<td>12-10-11</td>
<td width="109">Private</td>
<td>37</td>
<td>5</td>
<td>7</td>
<td>0</td>
<td width="92">Yes</td>
<td>Yes</td>
<td>YES</td>
<td>5</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>7</td>
</tr>
<tr>
<td width="64">1124</td>
<td>S</td>
<td width="221">Netaji Baug CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td width="289">M/s. Aadhya Realtors</td>
<td>13-10-11</td>
<td width="109">Private</td>
<td>95</td>
<td>0</td>
<td>19</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1125</td>
<td width="88">HE</td>
<td width="221">New Kalina CHS (Prop), Mahatma Phule CHS (Prop), Sahyadri CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">Essaar Group</td>
<td width="289">M/s. Rizvi Estates and Hotels Pvt. Ltd</td>
<td width="124">18-10-11</td>
<td width="109">PVT</td>
<td width="92">934</td>
<td width="92">338</td>
<td width="92">147</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1126</td>
<td width="88">RC</td>
<td width="221">Shree Ganesh SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Viral. G. Joshi</td>
<td width="289">M/s. Shivam Builders</td>
<td width="124">18-10-11</td>
<td width="109">MCGM</td>
<td>29</td>
<td width="92">13</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td width="92">yes</td>
<td>Yes</td>
<td>13</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1127</td>
<td>FS</td>
<td width="221">Mukund (Anna) Nagar Sahakari Griha Nirman Mahasangh (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">Darshan Group</td>
<td>21-10-11</td>
<td>Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1128</td>
<td width="88">G/N (Dharavi)</td>
<td width="221">GANIBAN CHS </td>
<td width="81">33-10</td>
<td width="289">MAHALE AND ASSOCIATES</td>
<td width="289">GLOBE BUILDERS</td>
<td width="124">21-10-11</td>
<td width="109">MCGM</td>
<td width="92">107</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1129</td>
<td width="88">KW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s. Catapult Realty Consultants</td>
<td width="289">M/s. DARSHAN DEVELOPERS PVT LTD</td>
<td width="124">29-10-11</td>
<td width="109">Private</td>
<td>0</td>
<td> </td>
<td width="92">0</td>
<td width="92">137</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1130</td>
<td>HW</td>
<td width="221">33(14)D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">PUSHKAR B. S</td>
<td width="289">M/s. M.N.K. Builders Pvt. Ltd</td>
<td>09-11-11</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>22</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1131</td>
<td width="88">PN</td>
<td width="221">Kachpada CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s P. N. Bhobe & Associates</td>
<td width="289">M/s. Adarsh Industrial Estate</td>
<td width="124">23-11-11</td>
<td width="109">Private</td>
<td width="92">634</td>
<td width="92">6</td>
<td width="92">5</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1132</td>
<td>S</td>
<td width="221">Shiv Darshan SRA CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">A.J associates</td>
<td style="font-weight: 400;" width="289">Shree Swami Samarth   Builders  Developers.</td>
<td>23-11-11</td>
<td width="109">Private,STGOVT</td>
<td>98</td>
<td>17</td>
<td>1</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1133</td>
<td>S</td>
<td width="221">Chandra vilas CHS (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s Mayuree Consultants</td>
<td width="289">M/s Kanchi concept  Ltd</td>
<td>23-11-11</td>
<td width="109">Private</td>
<td>41</td>
<td>10</td>
<td>11</td>
<td>0</td>
<td width="92">NO</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1134</td>
<td width="88">RC</td>
<td width="221">YASHODEEP  CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Veturkar    Associates</td>
<td width="289">VESSONS DEVLOPER PVT. LTD</td>
<td>24-11-11</td>
<td width="109">Private,STGOVT</td>
<td>9</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1135</td>
<td width="88">RS</td>
<td width="221">Valmiki Shejar Samiitee CHSL</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td style="font-weight: 400;" width="289">M/s. Damodar Suruchi Developers.</td>
<td width="124">30-11-11</td>
<td width="109">MHADA</td>
<td width="92">118</td>
<td width="92">30</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">30</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1136</td>
<td width="88">PN</td>
<td width="221">33(14)D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s.Ayyappa Developers pvt.ltd</td>
<td width="124">30-11-11</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">73</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1137</td>
<td width="88">RC</td>
<td width="221">Borivali Rakhi SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sanjay B. Shah</td>
<td width="289">Western Developments</td>
<td>02-12-11</td>
<td width="109">Private</td>
<td>28</td>
<td width="92">33</td>
<td width="92">0</td>
<td width="92">0</td>
<td>yes</td>
<td width="92">yes</td>
<td>Yes</td>
<td>33</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1138</td>
<td>L</td>
<td width="221">Height CHS</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/s. Allied Associates</td>
<td style="font-weight: 400;" width="289">M/s. Shah Bros. Enterprises & Siddiqui Bros. Enter</td>
<td>02-12-11</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>12</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1139</td>
<td width="88">N</td>
<td width="221">Siddhi Ganesh CHS Ltd & Sai Ganesh CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Nitin Gunjal</td>
<td style="font-weight: 400;" width="289">M/s. Neumec Developers  Builders</td>
<td width="124">07-12-11</td>
<td width="109">Private</td>
<td width="92">129</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1140</td>
<td width="88">FN</td>
<td width="221">National CHS Ltd. (Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Super Saarathi Developers</td>
<td width="124">08-12-11</td>
<td width="109">STGOVT</td>
<td width="92">152</td>
<td width="92">0</td>
<td width="92">184</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1141</td>
<td width="88">FN</td>
<td width="221">Azad Hind Seva Sangh CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Super Saarathi Developers</td>
<td width="124">08-12-11</td>
<td width="109">STGOVT</td>
<td width="92">78</td>
<td width="92">0</td>
<td width="92">9</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1142</td>
<td width="88">N</td>
<td width="221">Dattatraya Nagar SRA CHS (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sadashiv Nargundkar</td>
<td style="font-weight: 400;" width="289">M/s. Viddhi Properties Pvt. Ltd</td>
<td width="124">09-12-11</td>
<td width="109">STGOVT</td>
<td width="92">48</td>
<td width="92">0</td>
<td width="92">30</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1143</td>
<td width="88">N</td>
<td width="221">Gopal Krishna SRA CHS (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sadashiv Nargundkar</td>
<td style="font-weight: 400;" width="289">M/s. Viddhi Properties Pvt. Ltd</td>
<td width="124">09-12-11</td>
<td width="109">STGOVT</td>
<td width="92">145</td>
<td width="92">0</td>
<td width="92">40</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1144</td>
<td width="88">FN</td>
<td width="221">Janhit SRA CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. G. L. Pangam  Associtaes</td>
<td style="font-weight: 400;" width="289">M/s. Rehab Pranay Developers</td>
<td width="124">12-12-11</td>
<td width="109">Private</td>
<td width="92">51</td>
<td width="92">0</td>
<td width="92">91</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1145</td>
<td width="88">HE</td>
<td width="221">Balaji Shop Keepers Premises SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td style="font-weight: 400;" width="289">M/s. Ashapura Developer</td>
<td width="124">12-12-11</td>
<td width="109">STGOVT</td>
<td width="92">55</td>
<td width="92">42</td>
<td width="92">25</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1146</td>
<td>HW</td>
<td width="221">33(14)D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">PUSHKAR B. S</td>
<td style="font-weight: 400;" width="289">K. Mordani Realty</td>
<td>21-12-11</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>12</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1147</td>
<td width="88">MW</td>
<td width="221">Vaibhav Nagar CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">Sterling Buildcon Pvt. Ltd</td>
<td width="124">28-12-11</td>
<td width="109">STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1148</td>
<td width="88">PN</td>
<td width="221">33 (14) D scheme</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s. SARANG  ASSOCIATES</td>
<td width="289">M/s. Nine Globle Builders</td>
<td width="124">03-01-12</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">18</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1149</td>
<td>L</td>
<td width="221">33 (14) D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">PUSHKAR B. S</td>
<td width="289">M/s. Pasmina Realty Pvt. Ltd</td>
<td>04-01-12</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>132</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1150</td>
<td width="88">N</td>
<td width="221">Sadbhavna, New Trimurti (SRA) & Om Chaitanya Gagangiri Maharaj CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Samoon  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Ratan Builders</td>
<td width="124">06-01-12</td>
<td width="109">Private</td>
<td width="92">1372</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1151</td>
<td width="88">N</td>
<td width="221">Sadbhavana SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Samoon  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Ratan Builders</td>
<td width="124">06-01-12</td>
<td width="109">Private,MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1152</td>
<td>L</td>
<td width="221">Navjeevan SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Veturkar    Associates</td>
<td style="font-weight: 400;" width="289">M/s.  Unity Land Consultancy</td>
<td>13-01-12</td>
<td>Private</td>
<td>46</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1153</td>
<td width="88">N</td>
<td width="221">Shivnagar Pranay Bhoomi SRA C.H.S. Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dais Architects</td>
<td width="289">M/s.  Integrated Spaces Limited</td>
<td width="124">19-01-12</td>
<td width="109">Private</td>
<td width="92">91</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1154</td>
<td width="88">MW</td>
<td width="221">Highway View CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td style="font-weight: 400;" width="289">M/s.  Unity Land Consultancy</td>
<td width="124">20-01-12</td>
<td width="109">STGOVT</td>
<td width="92">282</td>
<td width="92">13</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1155</td>
<td>T</td>
<td width="221">Kadampada CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Manoj Walavalkar of M/s. M. M. Archs.</td>
<td width="289">M/s. Malde Properties Pvt. Ltd.</td>
<td>20-01-12</td>
<td>STGOVT</td>
<td>247</td>
<td>2</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1156</td>
<td>L</td>
<td width="221">Armaan (SRA) CHS LTD</td>
<td>33-10</td>
<td width="289">DALVI & ASSOCIATES</td>
<td width="289">ASSOCIATED BUILDERS</td>
<td>21-01-12</td>
<td>Private</td>
<td>51</td>
<td>36</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1157</td>
<td>L</td>
<td width="221">33 (14) D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/S. Aakar Architects  Consultants</td>
<td width="289">M/S. Gold Star Enterprises</td>
<td>23-01-12</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1158</td>
<td width="88">KE</td>
<td width="221">Rolex SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">M/s. Square Constructions</td>
<td>25-01-12</td>
<td>Private</td>
<td>18</td>
<td>0</td>
<td width="92">22</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1159</td>
<td>S</td>
<td width="221">Sarvashramik SRA C.H.S  (Ltd)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">M/s. Om Shiv Construction Co.</td>
<td>31-01-12</td>
<td width="109">Private</td>
<td>56</td>
<td>36</td>
<td>19</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1160</td>
<td width="88">KE</td>
<td width="221">S.R. scheme under 3.11 clause</td>
<td>3-11</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/s. Advaita Estate  Development Pvt. Ltd.</td>
<td>31-01-12</td>
<td>Private</td>
<td>1119</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1161</td>
<td width="88">KE</td>
<td width="221">33(14)D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/s. G.M.Arch Pvt. Ltd.</td>
<td width="289">M/s. Royal Fantasy Constructions Pvt.Ltd.</td>
<td>02-02-12</td>
<td>Private</td>
<td>106</td>
<td>0</td>
<td width="92">0</td>
<td width="92">103</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1162</td>
<td>S</td>
<td width="221">Gavdevi Hill CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td width="289">M/s. Sankalp Builders</td>
<td>07-02-12</td>
<td width="109">STGOVT</td>
<td>86</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1163</td>
<td>S</td>
<td width="221">Anand Mangal CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td style="font-weight: 400;" width="289">Samartha Krupa Developers</td>
<td>07-02-12</td>
<td width="109">Private</td>
<td>35</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">Part OCC granted</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1164</td>
<td>RN</td>
<td width="221">33 (14) D(Developer artiz)</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/s. Artiz Realty</td>
<td>13-02-12</td>
<td>Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td width="92">No</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1165</td>
<td>L</td>
<td width="221">Rehbar SRA CHS Ltd</td>
<td>33-10</td>
<td width="289">SHRI.SATSHIL D.MANJREKAR OF M/S.SATSHIL MANJREKAR</td>
<td width="289">M/s. A.I- Ammar Dveloper</td>
<td>15-02-12</td>
<td>Private</td>
<td>46</td>
<td>17</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1166</td>
<td>S</td>
<td width="221">Shree Ram Nagar CHS (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s Mayuree Consultants</td>
<td width="289">Heer  Mehta Landmark  Developer Pvt ltd.</td>
<td>22-02-12</td>
<td width="109">Private</td>
<td>372</td>
<td>104</td>
<td>0</td>
<td>16</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1167</td>
<td>S</td>
<td width="221">Shree Samarth Galaxy CHS LTD</td>
<td>33-10</td>
<td width="289">M/s. AJ. ASSOCIATES</td>
<td style="font-weight: 400;" width="289">Shree Swami Samarth   Builders  Developers.</td>
<td>23-02-12</td>
<td width="109">Private</td>
<td>22</td>
<td>3</td>
<td>0</td>
<td>0</td>
<td width="92">Yes</td>
<td>Yes</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1168</td>
<td width="88">FN</td>
<td width="221">Sheikh Mistry Hill View CHS Ltd.</td>
<td width="81">33-10</td>
<td width="289">M/s. Pupala  Associates</td>
<td width="289">M/s. Jiva Builders</td>
<td width="124">25-02-12</td>
<td width="109">Private</td>
<td width="92">64</td>
<td width="92">0</td>
<td width="92">139</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1169</td>
<td width="88">KE</td>
<td width="221">Baba Bhairav SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Tista Impex pvt.ltd.</td>
<td>27-02-12</td>
<td>STGOVT</td>
<td>37</td>
<td>16</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1170</td>
<td width="88">FN</td>
<td width="221">Sahil Sangam CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Consultants Combined</td>
<td style="font-weight: 400;" width="289">M/s. A. M. Constructions</td>
<td width="124">29-02-12</td>
<td width="109">MCGM</td>
<td width="92">49</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1171</td>
<td width="88">MW</td>
<td width="221">3.11 Scheme  (Eversmile Construction Pvt. Ltd.)</td>
<td width="81">3.11</td>
<td width="289">Mrs. Prajakta Kadu, Architect and Interior Designer</td>
<td width="289">M/s. Eversmile Construction Company Pvt. Ltd.</td>
<td width="124">29-02-12</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">17495</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">13876</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1172</td>
<td width="88">PS</td>
<td width="221">Panchratna Co.Op. Hsg. Soc. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td width="289">M/s. Shri. Swami Samarth Developers</td>
<td width="124">29-02-12</td>
<td width="109">STGOVT,MCGM</td>
<td>239</td>
<td>0</td>
<td>0</td>
<td>20</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1173</td>
<td>RN</td>
<td width="221">Om Kalyani CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dot Architect</td>
<td width="289">M/s. K.R.Mali Builders  Developers Pvt.Ltd</td>
<td>09-03-12</td>
<td>STGOVT</td>
<td width="92">107</td>
<td width="92">156</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1174</td>
<td width="88">E</td>
<td width="221">SHRAVASTI CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Neve  Associates</td>
<td width="289">M/S Commercial  Developers</td>
<td width="124">13-03-12</td>
<td width="109">Private</td>
<td width="92">50</td>
<td width="92">2</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1175</td>
<td width="88">ME</td>
<td width="221">Ekta CHS & Om Ganesh Nagar CHS &Jai Hanumaan Nagar SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Manoj Vishwakarma</td>
<td width="289">M/s. Wadhwa  Deserve Builder LLP</td>
<td width="124">30-03-12</td>
<td width="109">STGOVT</td>
<td width="92">2473</td>
<td width="92">0</td>
<td width="92">1147</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1176</td>
<td width="88">FN</td>
<td width="221">Sai Nagar SRA Sahakari Griha Nirman Sanstha Ltd.</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s. Dosti Associates</td>
<td width="124">02-04-12</td>
<td width="109">Private,MHADA,MCGM</td>
<td width="92">541</td>
<td width="92">0</td>
<td width="92">15</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1177</td>
<td>S</td>
<td width="221">Ganeshwadi chs (prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s Mayuree Consultants</td>
<td style="font-weight: 400;" width="289">Hilton Developers Pvt.ltd</td>
<td>07-04-12</td>
<td width="109">Private</td>
<td>210</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1178</td>
<td>S</td>
<td width="221">Shree Sankalp SRA CoOp. Housing Society Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant</td>
<td width="289">M/s. Sai Sastha Enterprises</td>
<td>19-04-12</td>
<td width="109">Private</td>
<td>41</td>
<td>10</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>YES</td>
<td>0</td>
<td>10</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1179</td>
<td>HW</td>
<td width="221">Navmala SRA CHS Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Tipnis Consultants</td>
<td style="font-weight: 400;" width="289">M/s. Joy Builders</td>
<td>24-04-12</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1180</td>
<td>HW</td>
<td width="221">Lumbini SRA CHS(prop),Konkanastha & Amrapali SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Tipnis Consultants</td>
<td style="font-weight: 400;" width="289">M/s. Joy Builders</td>
<td>24-04-12</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1181</td>
<td>L</td>
<td width="221">Adarsh Ekta SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mahale  &  Associates</td>
<td style="font-weight: 400;" width="289">M/s Bharat Mahan Developers</td>
<td>24-04-12</td>
<td>MHADA</td>
<td>183</td>
<td>61</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1182</td>
<td width="88">FN</td>
<td width="221">Sheikh Mishree SRA CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Ravi Raj Design Studio Pvt. Ltd.</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td width="124">05-05-12</td>
<td width="109">STGOVT</td>
<td width="92">173</td>
<td width="92">0</td>
<td width="92">58</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1183</td>
<td>L</td>
<td width="221">Navbharat SRA CHS (Prop.)</td>
<td>33-10</td>
<td width="289">Muthu Krishnan N. M/s. Mass Dimensions</td>
<td width="289">Grace Mass Housing Corporation</td>
<td>16-05-12</td>
<td>Private</td>
<td>150</td>
<td>70</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1184</td>
<td>S</td>
<td width="221">Shree Parshwanath SRA Coop. Housing Society</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shree Associates</td>
<td style="font-weight: 400;" width="289">Shree Swami Samarth   Builders  Developers.</td>
<td>17-05-12</td>
<td width="109">Private</td>
<td>107</td>
<td>11</td>
<td>30</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1185</td>
<td>RN</td>
<td width="221">33 (14) D<br /> jainam developer</td>
<td>33-14</td>
<td width="289">Shri.Kamlesh V. Gurav</td>
<td width="289">Shri. Ketan H. Mehta</td>
<td>18-05-12</td>
<td>Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">27</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1186</td>
<td width="88">N</td>
<td width="221">Navyug Apartment SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shree Associates</td>
<td width="289">M/s. Chintamani Realtors</td>
<td width="124">23-05-12</td>
<td width="109">Private</td>
<td width="92">45</td>
<td width="92">0</td>
<td width="92">5</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1187</td>
<td>HW</td>
<td width="221">33 (14) D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">PUSHKAR B. S</td>
<td width="289">SSD Holding LLP</td>
<td>24-05-12</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>19</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1188</td>
<td>S</td>
<td width="221">JEEVAN JYOT CHS (PROP ]</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Space Counsultant</td>
<td width="289">Suyog Developers</td>
<td>30-05-12</td>
<td width="109">Private</td>
<td>159</td>
<td>10</td>
<td>5</td>
<td>0</td>
<td width="92">Yes</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1189</td>
<td>S</td>
<td width="221">David Niwas CHS (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Ramesh Dalvi  Associates</td>
<td width="289">Ranjana  Developer</td>
<td>05-06-12</td>
<td width="109">Private</td>
<td>25</td>
<td>16</td>
<td>1</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1190</td>
<td>S</td>
<td width="221">Mahakaleshwar SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td width="289">M/s. Marathon Nextgen Reality Ltd</td>
<td>08-06-12</td>
<td width="109">Private</td>
<td>61</td>
<td>44</td>
<td>4</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1191</td>
<td width="88">MW</td>
<td width="221">3.11 scheme (Mahavir Associates)</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">M/s.Consultants Combined</td>
<td width="289"> M/s. Mahaavir Associates</td>
<td width="124">08-06-12</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">413</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1192</td>
<td width="88">KE</td>
<td width="221">Salasar SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">S. G. Nemivant</td>
<td style="font-weight: 400;" width="289">M/s. Salasarwala  Co.</td>
<td>14-06-12</td>
<td>Private</td>
<td>74</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1193</td>
<td width="88">FN</td>
<td width="221">Siddhivinayak CHS. Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shree Associates</td>
<td style="font-weight: 400;" width="289">Surana Constructions</td>
<td width="124">15-06-12</td>
<td width="109">STGOVT</td>
<td width="92">124</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1194</td>
<td>S</td>
<td width="221">Manav Co. Op. Hsg. Society (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">S.S. Associates  Architect And Int  Designer</td>
<td width="289">M/s. Ganaraj Construction</td>
<td>26-06-12</td>
<td width="109">Private</td>
<td>59</td>
<td>14</td>
<td>0</td>
<td>0</td>
<td width="92">Yes</td>
<td>Yes</td>
<td>YES</td>
<td>14</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1195</td>
<td width="88">RS</td>
<td width="221">Kandivali Hanuman Nagar Samarth CHS Ltd, Kandivali Hanuman Nagar Shree Samarth CHS Ltd, Kandivali Hanuman Nagar Samarth Krupa CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td style="font-weight: 400;" width="289">M/s. Damodar Suruchi Developers.</td>
<td width="124">09-07-12</td>
<td width="109">MHADA</td>
<td width="92">557</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1196</td>
<td width="88">FN</td>
<td width="221">Vijay Nagar CHS Ltd. (Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Surve  Associates</td>
<td style="font-weight: 400;" width="289">M/s. Lakhdawala Developers Pvt Ltd</td>
<td width="124">10-07-12</td>
<td width="109">MCGM</td>
<td width="92">196</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1197</td>
<td width="88">PN</td>
<td width="221">NAVJEEVAN SRA CHS (PROP)</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">M/s. Cresent amity Realtors pvt.ltd</td>
<td width="124">18-07-12</td>
<td width="109">Private</td>
<td width="92">84</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">55</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1198</td>
<td width="88">PN</td>
<td width="221">33 (14 ) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">M/s. Cresent amity Realtors pvt.ltd</td>
<td width="124">18-07-12</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">21</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92"> </td>
</tr>
<tr>
<td width="64">1199</td>
<td width="88">N</td>
<td width="221"> 1/7[PT] Of Village Ghatkopar                      NAGRAJ SRA CHS.           </td>
<td width="81">33-10</td>
<td width="289">M/s. Shelke & Associates.</td>
<td width="289">M/s. Sahil Realtors</td>
<td width="124">20-07-12</td>
<td width="109">STGOVT</td>
<td width="92">110</td>
<td width="92">0</td>
<td width="92">49</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1200</td>
<td>L</td>
<td width="221">Diamond Maharashtra (Complex) SRA CHS (Proposed)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td style="font-weight: 400;" width="289">M/s. N.K. Construction Works</td>
<td>27-07-12</td>
<td>STGOVT,MCGM</td>
<td>426</td>
<td>64</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1201</td>
<td>HW</td>
<td width="221">33 (14) D</td>
<td>33-14</td>
<td width="289">Taranath Sheety  associates</td>
<td style="font-weight: 400;" width="289">Grace Infracon  Property Developers</td>
<td>31-07-12</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>9</td>
<td>No</td>
<td width="92">No</td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1202</td>
<td width="88">PS</td>
<td width="221">Laxmi Nagar SRA CHS LTD (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">L. S. Shri. Shashikant L. Jadhav of M/s. Spaceage</td>
<td width="289">Reliable Builders & Developers</td>
<td width="124">02-08-12</td>
<td width="109">Private</td>
<td>331</td>
<td width="92">0</td>
<td width="92">195</td>
<td width="92">0</td>
<td>Constructed</td>
<td width="92">no</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1203</td>
<td>T</td>
<td width="221">Bibi Khatun Noor Manzil SRA CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant</td>
<td width="289">M/s. V.V. Enterprises.</td>
<td>06-08-12</td>
<td>Private</td>
<td>26</td>
<td>24</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1204</td>
<td width="88">MW</td>
<td width="221">Bhartratna Dr. Babasaheb Ambedkar CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. P.S. Chamankar & Associates</td>
<td width="289">M/s. Panache Developers Pvt. Ltd</td>
<td width="124">13-08-12</td>
<td width="109">STGOVT</td>
<td width="92">230</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1205</td>
<td width="88">PN</td>
<td width="221">Nevatia compound CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Nevatia Developers</td>
<td width="124">14-08-12</td>
<td width="109">Private,MCGM</td>
<td width="92">78</td>
<td width="92">0</td>
<td width="92">75</td>
<td width="92">0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1206</td>
<td width="88">RS</td>
<td width="221">Shree Mankameshwar Shejaar Sammittee CHS & Siddhivinayak Shejaar Sammittee CHS</td>
<td width="81">33-10</td>
<td width="289">Ms. Deepa Patel of M/s. Essaar Group</td>
<td width="289">M/s. Darshan Developer </td>
<td width="124">23-08-12</td>
<td width="109">MHADA</td>
<td width="92">210</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1207</td>
<td width="88">PN</td>
<td width="221">Kalash CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Muktanand Associates</td>
<td style="font-weight: 400;" width="289">M/s. Shivraj Developers</td>
<td width="124">01-09-12</td>
<td width="109">STGOVT</td>
<td width="92">77</td>
<td width="92">0</td>
<td width="92">58</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1208</td>
<td width="88">RS</td>
<td width="221">Saikrupa Sahyog CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">SHRI. MUKTANAND J. ZINGADE</td>
<td width="289">M/s. Jayesh Realities</td>
<td width="124">01-09-12</td>
<td width="109">STGOVT</td>
<td width="92">118</td>
<td width="92">162</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1209</td>
<td width="88">MW</td>
<td width="221">Shilpkar SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">Smt. Chitra Patel of M/s. ORISON Architects</td>
<td width="289">M/s. Suprabhat Estate & Developers Pvt. Ltd.</td>
<td width="124">05-09-12</td>
<td width="109">STGOVT</td>
<td width="92">118</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1210</td>
<td width="88">KE</td>
<td width="221">Om Shanti CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">M/s. Shree Krishna  Developers</td>
<td>27-09-12</td>
<td>Private</td>
<td>37</td>
<td>44</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1211</td>
<td>RN</td>
<td width="221">SHREE MAHALAXMI SRA CHS LTD(PROP) 2) JAI MAHAKALI SRA CHS (PROP) 3) SHIVRAYA SAHAKARI SRA CHS (PROP) 4) SHREE SAI GANESH SRA CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td style="font-weight: 400;" width="289">M/s. ASHAPURA ESTATE PRIVATE LTD.</td>
<td>16-10-12</td>
<td>Private</td>
<td width="92">465</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1212</td>
<td width="88">RS</td>
<td width="221">Devismruti SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Arch-V-Shan Creations</td>
<td width="289">M/s. Building Technologies India Pvt. Ltd.</td>
<td width="124">16-10-12</td>
<td width="109">Private</td>
<td width="92">46</td>
<td width="92">44</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1213</td>
<td>HW</td>
<td width="221">33(14)D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">PUSHKAR B. S</td>
<td style="font-weight: 400;" width="289">K. Mordani Realty</td>
<td>16-10-12</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>16</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1214</td>
<td width="88">RC</td>
<td width="221">Swayambhu Gaondevi CHS (Prop)</td>
<td>33-10</td>
<td width="289"> S. B. Associates</td>
<td width="289">Yogiraj Builders  Developers</td>
<td>19-10-12</td>
<td width="109">Private</td>
<td>148</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1215</td>
<td width="88">KE</td>
<td width="221">Jai Ganesh SRA CHS Ltd.</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. C. Subhash & Associates.</td>
<td style="font-weight: 400;" width="289">M/s. Darshan Construction</td>
<td>22-10-12</td>
<td>Private</td>
<td>32</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1216</td>
<td width="88">RS</td>
<td width="221">Adarsh Nagar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Grit Architecutral Consultancy Pvt. Ltd</td>
<td style="font-weight: 400;" width="289">Bombay Slum Redevelopment Corporation Ltd</td>
<td width="124">27-10-12</td>
<td width="109">STGOVT</td>
<td width="92">120</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1217</td>
<td width="88">FN</td>
<td width="221">Santoshi Mata Radhakrushna CHS (Prop.)</td>
<td width="81">33-10</td>
<td width="289">M/S Arch View Associates</td>
<td width="289">M/s. Krypton Corporation</td>
<td width="124">29-10-12</td>
<td width="109">STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1218</td>
<td width="88">PN</td>
<td width="221">Rahila Park SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. T.N. Hasan</td>
<td width="289">M/s. C.B. Enterprises</td>
<td width="124">30-10-12</td>
<td width="109">Private</td>
<td width="92">190</td>
<td width="92">0</td>
<td width="92">13</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1219</td>
<td>L</td>
<td width="221">Sukh Shanti CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/S. Vibhuti Constuction</td>
<td>01-11-12</td>
<td>Private,STGOVT</td>
<td>143</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1220</td>
<td width="88">KW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Ellora Project Consultants</td>
<td style="font-weight: 400;" width="289">Fairmont Construction Pvt. Ltd</td>
<td width="124">02-11-12</td>
<td width="109">Private</td>
<td> </td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td>No</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td width="64">1221</td>
<td width="88">KW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Ellora Project Consultants</td>
<td style="font-weight: 400;" width="289">Fairmont Construction Pvt. Ltd</td>
<td width="124">02-11-12</td>
<td width="109">Private</td>
<td> </td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td>No</td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
<tr>
<td width="64">1222</td>
<td width="88">KW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Ellora Project Consultants</td>
<td style="font-weight: 400;" width="289">Fairmont Construction Pvt. Ltd</td>
<td width="124">02-11-12</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1223</td>
<td width="88">KW</td>
<td width="221">33(14)D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Ketan Belsare Of M/s.Ellora Project Consultant</td>
<td style="font-weight: 400;" width="289">Fairmont Construction Pvt. Ltd</td>
<td width="124">02-11-12</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td> </td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1224</td>
<td width="88">KW</td>
<td width="221">3.11</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td width="289">M/s. Valentine Developer</td>
<td width="124">05-11-12</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">212</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1225</td>
<td>T</td>
<td width="221">Ali Bahadur CHS. (Prop)</td>
<td>33-10</td>
<td width="289">M/s. Rupji Construction.</td>
<td style="font-weight: 400;" width="289">Rupji Constructions</td>
<td>12-11-12</td>
<td>Private</td>
<td>47</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1226</td>
<td width="88">KW</td>
<td width="221">Surya Darshan SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Shri. Bharat S. Joshi</td>
<td width="289">M/s. Touch Wood Developer</td>
<td width="124">29-11-12</td>
<td width="109">Private</td>
<td width="92">32</td>
<td width="92">9</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1227</td>
<td width="88">KE</td>
<td width="221">SHREE SAINATH SRA CHS (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/S. STARWING DEVELOPERS PVT. LTD.</td>
<td>30-11-12</td>
<td>Private</td>
<td>185</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1228</td>
<td width="88">KE</td>
<td width="221">SONAL PARVATI CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Ketan Vaidya Associates</td>
<td style="font-weight: 400;" width="289">M/S SONAL CONTRACTER PVT LTD</td>
<td>01-12-12</td>
<td>Private</td>
<td>46</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1229</td>
<td width="88">HE</td>
<td width="221">Sanjay Nagar CHS</td>
<td width="81">33-10</td>
<td width="289">M/s. Vastu Creations</td>
<td width="289">M/s. k. Maniar Developers</td>
<td width="124">03-12-12</td>
<td width="109">MHADA</td>
<td width="92">128</td>
<td width="92">0</td>
<td width="92">24</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1230</td>
<td width="88">MW</td>
<td width="221">Shri Mahalaxmi SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Sameer V. Kulkarni</td>
<td style="font-weight: 400;" width="289">M/s. Sonu Realtors Pvt. Ltd</td>
<td width="124">03-12-12</td>
<td width="109">STGOVT</td>
<td width="92">70</td>
<td width="92">2</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1231</td>
<td width="88">KW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td width="289">M/s. Parinee Reality Pvt Ltd.</td>
<td width="124">04-12-12</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td> </td>
<td>0</td>
<td>0</td>
<td>0</td>
<td> </td>
</tr>
<tr>
<td width="64">1232</td>
<td width="88">PN</td>
<td width="221">Shree Prathmesh CHS Prop</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">M/s. Cosmic Developer</td>
<td width="124">05-12-12</td>
<td width="109">Private</td>
<td width="92">100</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1233</td>
<td width="88">KE</td>
<td width="221">Shree Ganesh Welfare SRA CHS Prop</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Arun Kumar Dube</td>
<td width="289">M/s. M.D. Globus Realty Pvt. Ltd.</td>
<td>07-12-12</td>
<td>Private,STGOVT</td>
<td>47</td>
<td>2</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1234</td>
<td width="88">HE</td>
<td width="221">Jagruti SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Suyog Shet M/s. MITI DESIGNERS  PLANNERS</td>
<td width="289">M/s. Naiknavare Developer Pvt. Ltd. & Sunhar Infra</td>
<td width="124">11-12-12</td>
<td width="109">PVT</td>
<td width="92">114</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1235</td>
<td width="88">KE</td>
<td width="221">Mangal Murti C.H.S. (Prop.)</td>
<td>33-10</td>
<td width="289">Shri. D. H. Patel</td>
<td width="289">M/s Unirock Developers</td>
<td>12-12-12</td>
<td>Private</td>
<td>19</td>
<td>4</td>
<td width="92">11</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1236</td>
<td>HW</td>
<td width="221">33 (14) D scheme</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/s. Sumer Associates.</td>
<td>13-12-12</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>502</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1237</td>
<td width="88">FN</td>
<td width="221">Sai Baba SRA CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Verticohorizon</td>
<td width="289">M/s. Akshay Developers</td>
<td width="124">14-12-12</td>
<td width="109">STGOVT</td>
<td width="92">143</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1238</td>
<td width="88">PS</td>
<td width="221">AMANSHANTI CHS LTD</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Muktanand Associates</td>
<td width="289">M/S. INDU CONSTRUCTION</td>
<td width="124">14-12-12</td>
<td width="109">Private</td>
<td>272</td>
<td>384</td>
<td>0</td>
<td>0</td>
<td>not constructed</td>
<td width="92">No</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1239</td>
<td>S</td>
<td width="221">Shiv Samarth Residency  CHS  (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">A.J associates</td>
<td style="font-weight: 400;" width="289">Shree Swami Samarth   Builders  Developers.</td>
<td>20-12-12</td>
<td width="109">Private,STGOVT</td>
<td>65</td>
<td>0</td>
<td>7</td>
<td>0</td>
<td>NO</td>
<td>Granted</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1240</td>
<td>T</td>
<td width="221">Gavanpada Savitri CHS. Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vikas V. Date.</td>
<td width="289">M/s Essar Construction Co.</td>
<td>28-12-12</td>
<td>MHADA</td>
<td>74</td>
<td>26</td>
<td>11</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>27</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1241</td>
<td width="88">GS</td>
<td width="221">Jivanjyot (SRA) CHS (Prop), Shree Swami Vivekanand (SRA) CHS (Prop), Mata Ramabai (SRA) CHS (Prop), Veer Jijamata Nagar (SRA) CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Samoon  Associates</td>
<td width="289">Municipal Corporation of Greater Mumbai (Contractor -M/S.LOKHANDWALA INFRASTRUCTURE PVT.LTD.)</td>
<td width="124">31-12-12</td>
<td width="109">MCGM</td>
<td width="92">3676</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1242</td>
<td width="88">PN</td>
<td width="221">Velnai Netaji CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td style="font-weight: 400;" width="289">M/s. Siddharth Enterprises</td>
<td width="124">31-12-12</td>
<td width="109">Private,MCGM</td>
<td width="92">77</td>
<td width="92">0</td>
<td width="92">57</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1243</td>
<td width="88">PN</td>
<td width="221">Velnai Parivartan SRA CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td style="font-weight: 400;" width="289">M/s. Siddharth Enterprises</td>
<td width="124">31-12-12</td>
<td width="109">Private,MCGM</td>
<td width="92">238</td>
<td width="92">0</td>
<td width="92">39</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1244</td>
<td>S</td>
<td width="221">Laxmi Narayan CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td style="font-weight: 400;" width="289">Shree Swami Samarth   Builders  Developers.</td>
<td>03-01-13</td>
<td width="109">Private,STGOVT</td>
<td>106</td>
<td>38</td>
<td>22</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1245</td>
<td width="88">PN</td>
<td width="221">JAI AMBE CHS (PROP)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Santosh Zirmute of M/s. Arch View Associates</td>
<td width="289">M/S. NOBLE INFRA PROJECTS</td>
<td width="124">10-01-13</td>
<td width="109">Private</td>
<td width="92">93</td>
<td width="92">23</td>
<td width="92">60</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1246</td>
<td width="88">KE</td>
<td width="221">Balaram SRA CHS (Proposed)</td>
<td>33-10</td>
<td width="289">M/s. The Designers</td>
<td width="289"> M/s. Aditya Developers & Builders</td>
<td>17-01-13</td>
<td>Private</td>
<td>17</td>
<td>15</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1247</td>
<td width="88">N</td>
<td width="221">33 (14) D Scheme (Kapil Kunj)</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Mr. Sachin Jadhav</td>
<td width="289">M/s. Shreenath Development Corporation</td>
<td width="124">17-01-13</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">18</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1248</td>
<td width="88">FN</td>
<td width="221">Gulmohor  A SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Ace Consultants</td>
<td width="289"> M/s. J.R.Properties.</td>
<td width="124">18-01-13</td>
<td width="109">Private</td>
<td width="92">19</td>
<td width="92">0</td>
<td width="92">36</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1249</td>
<td>FS</td>
<td width="221">Sewree Koliwada Sahakari Grihnirman Sanstha (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.G. Dalvi  Associates</td>
<td width="289">m/s. R.Kothari Eractor Pvt.Ltd.</td>
<td>23-01-13</td>
<td>Private,MCGM</td>
<td width="92">1040</td>
<td width="92">0</td>
<td width="92">278</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1250</td>
<td width="88">KW</td>
<td width="221">1) Samadhan CHS (prop)<br /> 2) New Shakti Rahiwasi Seva Samiti & Others CHS <br /> 3) Namratha CHS (prop).<br /> 4) Om Ganesh SRA CHS(prop)<br /> 5) Nav Shakti SRA CHS (prop)<br /> 6) Shakti Sahkari CHS (prop)<br />       7) Ekta SRA CHS (Prop).</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Ellora Project Consultants</td>
<td style="font-weight: 400;" width="289">M/S Sahyog Homes</td>
<td width="124">24-01-13</td>
<td width="109">Private</td>
<td>1444</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1251</td>
<td width="88">N</td>
<td width="221">M/s. Gala Realtors Pvt. Ltd</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s. G.M.Arch Pvt. Ltd.</td>
<td width="289">M/s. Gala Realtors Pvt. Ltd.</td>
<td width="124">14-02-13</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1252</td>
<td width="88">PN</td>
<td width="221">Holly Cross CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Shiv Sai Builders & M/s Royal Realtors</td>
<td width="124">15-04-13</td>
<td width="109">Private</td>
<td width="92">31</td>
<td width="92">10</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1253</td>
<td width="88">PN</td>
<td width="221">Hanuman Tekdi SRA CHS Ltd & Other Societies</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mrs. Leena Churi</td>
<td width="289">Razvi Estate Hotels Pvt. Ltd</td>
<td width="124">20-04-13</td>
<td width="109">Private</td>
<td width="92">1443</td>
<td width="92"> </td>
<td width="92">1919</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1254</td>
<td>FS</td>
<td width="221">Katradevi Adarsh CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chandrashekhar Architect</td>
<td width="289">M/s. Prarathana Graha Nirman</td>
<td>04-05-13</td>
<td>MCGM</td>
<td width="92">118</td>
<td width="92">17</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">Constructed</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">14</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1255</td>
<td>S</td>
<td width="221">Gaondevi Krupa Darshan SRA CHS (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Bhavsar Consultants</td>
<td style="font-weight: 400;" width="289"> M/s. Shivshankar Shivram Singh    Others</td>
<td>04-05-13</td>
<td width="109">Private</td>
<td>142</td>
<td>112</td>
<td>16</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1256</td>
<td width="88">PN</td>
<td width="221">Sairaj Guriyapada Sra chs Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Vilas P. Kharche</td>
<td width="289">Transcon-Sheth Creators Pvt</td>
<td width="124">16-05-13</td>
<td width="109">Private</td>
<td width="92">661</td>
<td width="92">0</td>
<td width="92">639</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1257</td>
<td width="88">KE</td>
<td width="221">Shiv Sai SRA CHS (Prop)</td>
<td>33-10</td>
<td width="289">M/s. Kanishka L.S. & Engineers</td>
<td width="289">M/s. Aarch Housing Co</td>
<td>20-05-13</td>
<td>MHADA,Not Available</td>
<td>147</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1258</td>
<td width="88">MW</td>
<td width="221">V. K. Krishnan Menon Veer Savarkar CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sachin Gaikwad of M/s. Design Crest</td>
<td width="289">M/s. Ranjay Developers Pvt. Ltd.</td>
<td width="124">20-05-13</td>
<td width="109">STGOVT</td>
<td width="92">127</td>
<td width="92">167</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1259</td>
<td width="88">KE</td>
<td width="221">33 (14) D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">PUSHKAR B. S</td>
<td style="font-weight: 400;" width="289">M/S.KOEL DEVELOPERS LLP.</td>
<td>28-06-13</td>
<td>Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1260</td>
<td width="88">KE</td>
<td width="221">Jogeshwari Mata SRA CHS. (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Design World</td>
<td width="289">M/s. Vardhman Infrasturctures</td>
<td>03-07-13</td>
<td>Private</td>
<td>42</td>
<td>9</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1261</td>
<td width="88">PN</td>
<td width="221">Dadi SRA CHS LTD</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Vishwas Satodia</td>
<td width="289">Shah Housecon Pvt Ltd</td>
<td width="124">08-08-13</td>
<td width="109">Private</td>
<td width="92">67</td>
<td width="92">0</td>
<td width="92">147</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1262</td>
<td>S</td>
<td width="221">Vishnu Bhuvan CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sachin Gaikwad of M/s. Design Crest</td>
<td style="font-weight: 400;" width="289">Shree Swami Samarth   Builders  Developers.</td>
<td>02-09-13</td>
<td width="109">Private</td>
<td>213</td>
<td width="92">18</td>
<td>10</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1263</td>
<td width="88">PN</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">Shreeji Constructions</td>
<td width="124">05-09-13</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1264</td>
<td width="88">HE</td>
<td width="221">Rajiv Gandhi Nagar with Navjeevan</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. S. S. Shinde of M/s. Bidco Engineering Divis</td>
<td style="font-weight: 400;" width="289">Housing Development  Imp. India Pvt. Ltd. HDIL</td>
<td width="124">12-09-13</td>
<td width="109">MMRDA</td>
<td width="92">108</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1265</td>
<td>S</td>
<td width="221">Parth CHS  Galaxy CHS</td>
<td>33-10</td>
<td width="289">Tryfour Associates</td>
<td width="289">M/s. Morphosis Realtors India PVT LTD</td>
<td>23-09-13</td>
<td width="109">GOVT</td>
<td>383</td>
<td>88</td>
<td>48</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1266</td>
<td width="88">ME</td>
<td width="221">Borbadevi CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sachin Gaikwad of M/s. Design Crest</td>
<td style="font-weight: 400;" width="289">M/s Atlantic Constructions</td>
<td width="124">24-09-13</td>
<td width="109">STGOVT</td>
<td width="92">268</td>
<td width="92">0</td>
<td width="92">38</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1267</td>
<td width="88">PN</td>
<td width="221">Omkareshwar SRA CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289">M/s. Vardhan Associates</td>
<td width="124">18-10-13</td>
<td width="109">Private</td>
<td width="92">74</td>
<td width="92">0</td>
<td width="92">30</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1268</td>
<td width="88">RS</td>
<td width="221">Om Sai Krupa  Sai Shraddha CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shantanoo Rane & Associate</td>
<td width="289">M/s. Radheshyam</td>
<td width="124">25-10-13</td>
<td width="109">MHADA</td>
<td width="92">229</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1269</td>
<td>S</td>
<td width="221">Malti Vijaya SRA C.H.S. (Prop).</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">M/s. Ahura Realty Builders  Developers</td>
<td>01-11-13</td>
<td width="109">Private</td>
<td>36</td>
<td>3</td>
<td>6</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1270</td>
<td width="88">PN</td>
<td width="221">Shri Sai Shradha CHS (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. S.P Shevde</td>
<td width="289">M/S.H  BUILDERS.</td>
<td width="124">25-11-13</td>
<td width="109">Private</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">23</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1271</td>
<td>HW</td>
<td width="221">33 (14) D Scheme..</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td width="289">M/S. ZOY SHELCON PVT. LTD.</td>
<td>23-12-13</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1272</td>
<td width="88">RS</td>
<td width="221">Dhaneshwari SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.  Shantanoo Rane    Associates</td>
<td width="289">M/s.C-art Developers Pvt. Ltd</td>
<td width="124">01-01-14</td>
<td width="109">MHADA</td>
<td width="92">141</td>
<td width="92">44</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1273</td>
<td width="88">RS</td>
<td width="221">KAMALA CHS (Ltd.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. S.V.Chemburkar</td>
<td width="289">M/s. Rajputana Associates Builders  Developers</td>
<td width="124">07-01-14</td>
<td width="109">Private</td>
<td width="92">45</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1274</td>
<td>S</td>
<td width="221">SADGURU SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td>08-01-14</td>
<td width="109">Private</td>
<td>47</td>
<td>64</td>
<td>3</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1275</td>
<td>S</td>
<td width="221">Sukhakarta (SRA)CHS ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td width="289">Aakar Nirman Properties</td>
<td>16-01-14</td>
<td width="109">Private</td>
<td>269</td>
<td width="92">10</td>
<td>57</td>
<td width="92">15</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1276</td>
<td width="88">MW</td>
<td width="221">Navbharat CHS (prop)</td>
<td width="81">33-10</td>
<td width="289">Shri. Rajratna Phadtare</td>
<td width="289">M/s. Unique property Enterprises Pvt. Ltd.</td>
<td width="124">23-01-14</td>
<td width="109">STGOVT</td>
<td width="92">143</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1277</td>
<td width="88">HE</td>
<td width="221">Subway SRA CHS</td>
<td width="81">3-11</td>
<td style="font-weight: 400;" width="289">AJITKUMAR G. RANE</td>
<td width="289">M/s. Silvex Developer Pvt. Ltd</td>
<td width="124">30-01-14</td>
<td width="109">MHADA</td>
<td width="92">67</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1278</td>
<td width="88">KE</td>
<td width="221">Ratilal Thakrshi SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah</td>
<td style="font-weight: 400;" width="289">M/s. Sangita Realty</td>
<td>18-02-14</td>
<td>Private</td>
<td>23</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1279</td>
<td>S</td>
<td width="221">Shubham SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dhaneshwar Pakhare  Associates</td>
<td width="289"> M/s. Trident Ozone LLP</td>
<td>01-03-14</td>
<td width="109">Private</td>
<td>163</td>
<td>4</td>
<td>22</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1280</td>
<td width="88">KW</td>
<td width="221">Lucky Star CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. SARANG  ASSOCIATES</td>
<td width="289">M/s. K.M.Enterprises</td>
<td width="124">21-03-14</td>
<td width="109">Private</td>
<td>28</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1281</td>
<td width="88">N</td>
<td width="221">Riddhi  Siddhi SRA CoOp. Hsg. Soc. (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Dais Architects</td>
<td width="289">M/s. Sadgurukrupa Developers</td>
<td width="124">24-03-14</td>
<td width="109">Private</td>
<td width="92">60</td>
<td width="92">0</td>
<td width="92">8</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1282</td>
<td width="88">FN</td>
<td width="221">Shree Ram CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Spaceage Consultant</td>
<td style="font-weight: 400;" width="289">M/s. S. Savla Constructions</td>
<td width="124">09-04-14</td>
<td width="109">STGOVT</td>
<td width="92">191</td>
<td width="92">0</td>
<td width="92">295</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1283</td>
<td width="88">MW</td>
<td width="221">Sanjay Nagar SRA CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td style="font-weight: 400;" width="289">M/s. Satre Infrastructure Pvt. Ltd</td>
<td width="124">09-04-14</td>
<td width="109">STGOVT,MHADA</td>
<td width="92">111</td>
<td width="92">40</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1284</td>
<td width="88">RC</td>
<td width="221">Shree Mahalaxmi CHS Ltd</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Aakar Architects & consultants</td>
<td width="289">M/s. Kothari Construction Co.</td>
<td width="124">29-04-14</td>
<td width="109">Private</td>
<td>50</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1285</td>
<td width="88">RS</td>
<td width="221">SAINATH CHS (PROP)</td>
<td width="81">33-10</td>
<td width="289">M/s. Vin Arch Services Architect</td>
<td width="289">SAI AASTHA DEVELOPERS</td>
<td width="124">20-05-14</td>
<td width="109">STGOVT</td>
<td width="92">181</td>
<td width="92">115</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1286</td>
<td>S</td>
<td width="221">33(14) D (Scheme No. 2)</td>
<td>33-14</td>
<td width="289">M/s. Ken Assist</td>
<td width="289">M/s. Shreenath Build Grond Pvt. Ltd.</td>
<td>29-05-14</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>63</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1287</td>
<td width="88">PN</td>
<td width="221">SURAJ BHUVAN RAHIWASHI SANGH SRA CHS (PROP.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/S. JET BUILD DEVELOPERS</td>
<td width="124">10-06-14</td>
<td width="109">Private</td>
<td width="92">103</td>
<td width="92">44</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1288</td>
<td width="88">KE</td>
<td width="221">Sai Prathana SRA CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chandrashekhar Architect</td>
<td style="font-weight: 400;" width="289">M/s Prarthana Constructions</td>
<td>16-06-14</td>
<td>Private</td>
<td>15</td>
<td>18</td>
<td width="92">0</td>
<td width="92">8</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1289</td>
<td>S</td>
<td width="221">VIGHANAHARTA CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td width="289">M/s. Siroya Rishabh Developers</td>
<td>18-06-14</td>
<td width="109">Private</td>
<td>33</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1290</td>
<td>S</td>
<td width="221">KACHARNATH SWAMI SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td>19-06-14</td>
<td width="109">Private</td>
<td>47</td>
<td>0</td>
<td>20</td>
<td>0</td>
<td width="92">Under construction</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1291</td>
<td>L</td>
<td width="221">Suchita Co Op Housing Society (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">M/s Suchita Construction Co.</td>
<td>02-07-14</td>
<td>Private</td>
<td>64</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1292</td>
<td width="88">KE</td>
<td width="221">Shree Krishna Kunj CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ketan Belsare</td>
<td width="289">M/s. Ellora Developer</td>
<td>03-07-14</td>
<td>Private</td>
<td>42</td>
<td>6</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>Yes</td>
<td>Yes</td>
<td>6</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1293</td>
<td>HW</td>
<td width="221">33 (14) D</td>
<td>33-14</td>
<td width="289">SHRI. KISHOR RAORANE</td>
<td width="289">M/S. TRINITY PROPERTY VENTURES</td>
<td>17-07-14</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>14</td>
<td>Yes</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1294</td>
<td>T</td>
<td width="221">Mulund Shanti Nagar, Ram Manohar Dube Chawl C.H.S. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Design Creations</td>
<td style="font-weight: 400;" width="289">M/s. Rajguru Developers Pvt. Ltd.</td>
<td>22-07-14</td>
<td>Private</td>
<td>260</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1295</td>
<td width="88">PN</td>
<td width="221">Hari Om CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Setsquare Project Consultant</td>
<td width="289">M/s. Raghvendra Construction Co.Pvt.Ltd.</td>
<td width="124">24-07-14</td>
<td width="109">Private</td>
<td width="92">81</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1296</td>
<td width="88">RS</td>
<td width="221">Sai Darshan SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td style="font-weight: 400;" width="289">M/s. J.P Corporation</td>
<td width="124">30-07-14</td>
<td width="109">Private</td>
<td width="92">92</td>
<td width="92">9</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">yes</td>
<td width="92">Part OC</td>
<td width="92">Yes</td>
<td width="92">9</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1297</td>
<td>S</td>
<td width="221">Harikrupa SRA chs. (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s Bhagyawan Enterprises.</td>
<td>30-07-14</td>
<td width="109">Private</td>
<td>22</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1298</td>
<td width="88">RS</td>
<td width="221">Shree Ganesh SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td style="font-weight: 400;" width="289">Shrreeya Developerss</td>
<td width="124">12-08-14</td>
<td width="109">Private,STGOVT,MCGM</td>
<td width="92">324</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1299</td>
<td width="88">KE</td>
<td width="221">Krishna Nagar CHS (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHDUR</td>
<td width="289">M/s. Prem Builders</td>
<td>14-08-14</td>
<td>Private</td>
<td>123</td>
<td>22</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>22</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1300</td>
<td width="88">KE</td>
<td width="221">Shiv Kripa CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td width="289">M/s. Panom Developer LLP</td>
<td>19-08-14</td>
<td>Private</td>
<td>32</td>
<td>9</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td> No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1301</td>
<td width="88">KE</td>
<td width="221">Samruddhi CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td width="289">M/s. Samruddhi Infrastructure and Developers</td>
<td>20-08-14</td>
<td>Private</td>
<td>32</td>
<td>40</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1302</td>
<td width="88">KE</td>
<td width="221">SHREE SIDDHIVINAYAK JAY AMBE JUNA ASHRAM MULGAON DONGRI SRA CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S. Aakar Architects  Consultants</td>
<td width="289">Niyati Real Estate Developers Pvt. Ltd.</td>
<td>20-08-14</td>
<td>Private</td>
<td>206</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1303</td>
<td width="88">ME</td>
<td width="221">Dr. Babasaheb Ambedkar SRA CHS (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Raja Aederi Consultants. Pvt. Ltd.</td>
<td style="font-weight: 400;" width="289">M/s. Lakhdawala Developers Pvt Ltd</td>
<td width="124">04-09-14</td>
<td width="109">Private</td>
<td width="92">1024</td>
<td width="92">0</td>
<td width="92">131</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1304</td>
<td width="88">N</td>
<td width="221">RANVEER SRA CHS (PROP.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td style="font-weight: 400;" width="289">M/s. Satre Infrastructure Pvt. Ltd</td>
<td width="124">06-09-14</td>
<td width="109">Private</td>
<td width="92">142</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1305</td>
<td width="88">HE</td>
<td width="221">Amrapali CHS</td>
<td width="81">33-10</td>
<td width="289">Atul Gulati</td>
<td width="289">Raj Arcades Homes Pvt Ltd</td>
<td width="124">15-09-14</td>
<td width="109">PVT</td>
<td width="92">191</td>
<td width="92">0</td>
<td width="92">4</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1306</td>
<td width="88">RS</td>
<td width="221">Shree Sai Shraddha CHS</td>
<td width="81">33-10</td>
<td width="289">M/s Mukesh D. Gami  Architectural Consultants</td>
<td width="289">M/S.SHREEJI CONSTRUCTION</td>
<td width="124">26-09-14</td>
<td width="109">MCGM</td>
<td width="92">158</td>
<td width="92">55</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1307</td>
<td>FS</td>
<td width="221">Panchratna SRA CHS (Proposed)</td>
<td>33-10</td>
<td width="289">Mr Tushar S. Sali of M/s. Point To Point Architec</td>
<td width="289">M/S. MATRU BHOOMI DEVELOPERS</td>
<td>01-10-14</td>
<td>MCGM,Not Available</td>
<td width="92">77</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1308</td>
<td width="88">RS</td>
<td width="221">Shree LaxmiKrupa CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Setsquare Project Consultant</td>
<td style="font-weight: 400;" width="289">M/s. Sai Construction</td>
<td width="124">01-10-14</td>
<td width="109">STGOVT</td>
<td width="92">215</td>
<td width="92">80</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1309</td>
<td width="88">RC</td>
<td width="221">Om Shree Siddheshwar CHS Ltd (Prop)</td>
<td>33-10</td>
<td width="289">M/s. Dream Infrastructural Pvt Ltd</td>
<td width="289">M/s. Siddheshwar Builders</td>
<td width="124">01-10-14</td>
<td width="109">STGOVT</td>
<td>72</td>
<td width="92">6</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1310</td>
<td width="88">KW</td>
<td width="221">Sitladevi CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sanjay B. Shah</td>
<td width="289">M/s. R. K. Developer</td>
<td width="124">13-10-14</td>
<td width="109">MHADA</td>
<td> </td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1311</td>
<td width="88">FN</td>
<td width="221">Kamraj Nagar CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Kasu Munshi  Associates</td>
<td width="289">M/s shreenath realtors</td>
<td width="124">23-10-14</td>
<td width="109">STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1312</td>
<td width="88">KW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td style="font-weight: 400;" width="289">M/s. Mega Enterprises</td>
<td width="124">30-10-14</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">50</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1313</td>
<td width="88">MW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Mehul Vaghela of M/s. Creative Consultancy</td>
<td width="289">Supreme Construction & Developers Pvt. Ltd</td>
<td width="124">18-11-14</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">420</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1314</td>
<td>S</td>
<td width="221">SAHAKAR CHS LTD</td>
<td>33-14</td>
<td width="289">M/s. Design Creations</td>
<td width="289">M/s. Shraddha Landmark Pvt Ltd.</td>
<td>21-11-14</td>
<td width="109">Private</td>
<td>0</td>
<td width="92">4</td>
<td>0</td>
<td width="92">27</td>
<td width="92">Yes</td>
<td width="92">yes</td>
<td>No</td>
<td>0</td>
<td>4</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1315</td>
<td width="88">PN</td>
<td width="221">33(14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Rasik P. Hingoo Associates</td>
<td style="font-weight: 400;" width="289">M/S.KAMALA HOMES & INFRASTRUCTURE</td>
<td width="124">24-11-14</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">70</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1316</td>
<td width="88">PN</td>
<td width="221">33(14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Rasik P. Hingoo Associates</td>
<td style="font-weight: 400;" width="289">M/S.KAMALA HOMES & INFRASTRUCTURE</td>
<td width="124">24-11-14</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92"> </td>
</tr>
<tr>
<td width="64">1317</td>
<td>HW</td>
<td width="221">Shastri Nagar SRA Co.Op Hsg Soc. (Prop)</td>
<td>33-10</td>
<td width="289">vivek bhole</td>
<td width="289">Pioneer India Developers Pvt Ltd</td>
<td>27-11-14</td>
<td>MCGM</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1318</td>
<td width="88">KE</td>
<td width="221">Sukh Shanti SRA CHS (Prop)</td>
<td>33-10</td>
<td width="289">Star Link Developer</td>
<td width="289">Space Design Consultant</td>
<td>28-11-14</td>
<td>Private</td>
<td>24</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1319</td>
<td width="88">N</td>
<td width="221">Golden Complex SRA CHS (Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant</td>
<td width="289">M/s. Raza Constructions Pvt. Ltd.</td>
<td width="124">03-12-14</td>
<td width="109">STGOVT</td>
<td width="92">406</td>
<td width="92">0</td>
<td width="92">91</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1320</td>
<td>L</td>
<td width="221">Shree Ashtavinayak CHS (Proposed)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Bilwamangal Rege</td>
<td width="289">Manraj & Co. (HUF)</td>
<td>04-12-14</td>
<td>Private</td>
<td>29</td>
<td>14</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1321</td>
<td width="88">KE</td>
<td width="221">Neel Gagan SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">M/s R.G  Corporaton</td>
<td>12-12-14</td>
<td>Private</td>
<td>25</td>
<td>9</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1322</td>
<td width="88">MW</td>
<td width="221">Yashwant Nagar -1 Janvikas CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant of M/s. Architectural Concept</td>
<td style="font-weight: 400;" width="289">M/s. Shree Sai Realtors</td>
<td width="124">17-12-14</td>
<td width="109">STGOVT</td>
<td width="92">61</td>
<td width="92">0</td>
<td width="92">117</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1323</td>
<td>T</td>
<td width="221">Mahaveer Dham </td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/S. V.S. VAIDYA & ASSOCIATES</td>
<td style="font-weight: 400;" width="289">Maverick Realtors</td>
<td>31-12-14</td>
<td>Private</td>
<td>32</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">42</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1324</td>
<td>T</td>
<td width="221">Old Hemant Villa CHS Ltd.</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td style="font-weight: 400;" width="289">Maverick Realtors</td>
<td>01-01-15</td>
<td>Private</td>
<td>13</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">14</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1325</td>
<td width="88">KE</td>
<td width="221">Sunderlal Bhattwadi Composite SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jatin Shah. M/s Shah & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Suparshwa Realty</td>
<td>02-01-15</td>
<td>Private</td>
<td>77</td>
<td>47</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>Yes</td>
<td>Yes</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1326</td>
<td>T</td>
<td width="221">Neelkanth Tirth CHS Ltd</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td style="font-weight: 400;" width="289">Maverick Realtors</td>
<td>09-01-15</td>
<td>Private</td>
<td>28</td>
<td>0</td>
<td>0</td>
<td>44</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1327</td>
<td>T</td>
<td width="221">N & G Co.Op.Hsg.Soc.Ltd.</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td style="font-weight: 400;" width="289">Maverick Realtors</td>
<td>09-01-15</td>
<td>Private</td>
<td>17</td>
<td>0</td>
<td>0</td>
<td>19</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1328</td>
<td width="88">MW</td>
<td width="221">Jay Bhavani CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant of M/s. Architectural Concept</td>
<td style="font-weight: 400;" width="289">M/s. Shree Sai Realtors</td>
<td width="124">09-01-15</td>
<td width="109">STGOVT</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1329</td>
<td>HW</td>
<td width="221">Nityanand Nagar SRA CHS Ltd.(prop)</td>
<td>33-10</td>
<td width="289">Hemant R. Pai</td>
<td width="289">Slum Rehabilitation Society</td>
<td>12-01-15</td>
<td>STGOVT,MHADA</td>
<td>36</td>
<td>0</td>
<td>770</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1330</td>
<td width="88">KW</td>
<td width="221">Late Yellapa Narayan Sonawane Welfare CHS (prop)</td>
<td width="81">33-10</td>
<td width="289">MR. ARIF L. SHAH OF M/S. ATHARVA CONSULTANTS.</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td width="124">17-01-15</td>
<td width="109">Private</td>
<td width="92">93</td>
<td width="92">106</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1331</td>
<td>L</td>
<td width="221">Jai Radhakrishna CHS (Proposed)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Bilwamangal Rege</td>
<td width="289">M/s. Ekta Developers</td>
<td>17-01-15</td>
<td>Private</td>
<td>34</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No </td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1332</td>
<td>L</td>
<td width="221">33(14) D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/s. Allied Associates</td>
<td style="font-weight: 400;" width="289">M/s. Shah Bros. Enterprises & Siddiqui Bros. Enter</td>
<td>20-01-15</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>50</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1333</td>
<td width="88">N</td>
<td width="221">SAHAKAR MARKET CHS (prop.)</td>
<td width="81">33-10</td>
<td width="289">M/S.RUPJI ASSOCIATES.</td>
<td width="289">M/S.RUPJI CONSTRUCTION .</td>
<td width="124">29-01-15</td>
<td width="109">MHADA</td>
<td width="92">100</td>
<td width="92">0</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1334</td>
<td width="88">PS</td>
<td width="221">Jai Bajrang Sahakari Grihanirman Soc. (Prop).</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Sanjay Neve  Associates</td>
<td style="font-weight: 400;" width="289">Right Channel Construction Pvt. Ltd.</td>
<td width="124">12-02-15</td>
<td width="109">Private</td>
<td>80</td>
<td>0</td>
<td>77</td>
<td>0</td>
<td>not constructed</td>
<td width="92">No</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1335</td>
<td>GN</td>
<td>SAI SAMMARTH CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Veturkar    Associates</td>
<td width="289">M/s. Sharaddha Developers</td>
<td>21-02-15</td>
<td>Private</td>
<td width="92">17</td>
<td width="92">7</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1336</td>
<td width="88">N</td>
<td width="221">Shree Saikrupa Co.Op.Hsg.Society (Prop.)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. G.M.Arch Pvt. Ltd.</td>
<td style="font-weight: 400;" width="289">M/s. Ambaji Construction Corporation.</td>
<td width="124">26-02-15</td>
<td width="109">STGOVT</td>
<td width="92">44</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1337</td>
<td>S</td>
<td width="221">Amrut Srushti chs. (Prop</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td>19-03-15</td>
<td width="109">Private</td>
<td>74</td>
<td width="92">54</td>
<td>23</td>
<td width="92">45</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1338</td>
<td>HW</td>
<td width="221">33 (14) D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">PUSHKAR B. S</td>
<td width="289">Niraj Kakad Construction Pvt. Ltd</td>
<td>23-03-15</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>15</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1339</td>
<td width="88">KE</td>
<td width="221">Trimbakkar Easte SRA Co. Op. Hsg. (prop).</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ketan Belsare</td>
<td width="289">M/s. Bindra-Sateri Constructions</td>
<td>20-04-15</td>
<td>Private</td>
<td>79</td>
<td>51</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1340</td>
<td width="88">GS</td>
<td width="221">Shree Saibaba Nagar SRA Co-Op. Hsg. Soc. (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Anand V. Dhokay Architects  Designer</td>
<td style="font-weight: 400;" width="289">Omkar Realtors & Developers Pvt. Ltd.</td>
<td width="124">21-04-15</td>
<td width="109">MCGM</td>
<td width="92">2633</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1341</td>
<td width="88">PN</td>
<td width="221">JAI HANUMAN SRA CHS [PROP]</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td style="font-weight: 400;" width="289">M/s. Vimal Builders</td>
<td width="124">24-04-15</td>
<td width="109">Private</td>
<td width="92">96</td>
<td width="92">98</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1342</td>
<td>RN</td>
<td width="221">SAI ASHIRWAD CHS (PROP), Sai Kripa CHS (PROP),Sai sadan CHS (PROP), Harsiddha mata CHS (PROP), Shree Parasnath CHS (PROP), Shivganga CHS (PROP), & Riddhi Siddhi (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MR. SATISH M. HANDE</td>
<td width="289">M/s. Shreeraj Developer LLP</td>
<td>28-04-15</td>
<td>Private</td>
<td width="92">401</td>
<td width="92">66</td>
<td width="92">119</td>
<td width="92">209</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1343</td>
<td width="88">KW</td>
<td width="221">Azad Nagar Welfare Society SRA CHS (prop)</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri Ashish Solanki</td>
<td style="font-weight: 400;" width="289">CHANDIWALA ENTERPRISES</td>
<td width="124">05-05-15</td>
<td width="109">Private</td>
<td width="92">93</td>
<td width="92">65</td>
<td width="92">0</td>
<td>0</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92"> </td>
</tr>
<tr>
<td width="64">1344</td>
<td width="88">G/N (Dharavi)</td>
<td width="221"> Kalpataru, Jai Kalimata, Jai Bajrangbali CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">M/s. M.R. Shendey & Associates </td>
<td width="289">M/s. Pushpa Construction Co</td>
<td width="124">11-05-15</td>
<td width="109">MCGM</td>
<td width="92">565</td>
<td width="92">0</td>
<td width="92">4</td>
<td width="92">151</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1345</td>
<td width="88">N</td>
<td width="221">Parnkuti Vikas SRA CHS (Proposed)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s P. N. Bhobe & Associates</td>
<td style="font-weight: 400;" width="289">Pentagon Premises Pvt. Ltd</td>
<td width="124">12-05-15</td>
<td width="109">STGOVT</td>
<td width="92">133</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1346</td>
<td width="88">KW</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td width="289">Shri. Arun Kumar Dube</td>
<td width="289">M/s. Star Constration</td>
<td width="124">16-05-15</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">49</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1347</td>
<td width="88">N</td>
<td width="221">Hitesh CHS</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s. Veturkar    Associates</td>
<td width="289">Magnum Cylinders Pvt Ltd</td>
<td width="124">16-05-15</td>
<td width="109">Private</td>
<td width="92">110</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1348</td>
<td width="88">PN</td>
<td width="221">33 (14) D Scheme</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s. C. Subhash & Associates.</td>
<td style="font-weight: 400;" width="289">M/s. Darshan Construction</td>
<td width="124">25-05-15</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1349</td>
<td width="88">PN</td>
<td width="221">33(14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">Keyland Developers</td>
<td width="124">25-05-15</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1350</td>
<td width="88">MW</td>
<td width="221">Dr. Babasaheb Ambedkar CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Consultants Combined</td>
<td width="289">Vardhan Housing</td>
<td width="124">27-05-15</td>
<td width="109">STGOVT</td>
<td width="92">148</td>
<td width="92">0</td>
<td width="92">52</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1351</td>
<td width="88">ME</td>
<td width="221">Bhimratna CHS (Prop) </td>
<td width="81">33-10</td>
<td width="289">Shantanoo Rane & Associates </td>
<td width="289">Fat Cat Infrastructures Pvt.Ltd </td>
<td width="124">28-05-15</td>
<td width="109">Private,MCGM</td>
<td width="92">167</td>
<td width="92">9</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1352</td>
<td>S</td>
<td width="221">Vishavabharti SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">S.S. Associates  Architect And Int  Designer</td>
<td width="289">M/S. Atharva  Developers Pvt. Ltd.</td>
<td>30-05-15</td>
<td width="109">Private</td>
<td>193</td>
<td>19</td>
<td>36</td>
<td>0</td>
<td>Partly</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1353</td>
<td>L</td>
<td width="221">Prerana SRA CHS ( Proposed), Arunodaya CHS(Prop.), Ekta CHS(Prop.), Panchratna CHS(Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S Mahendra G.Davda</td>
<td width="289">M/s. G.B. Constructions Builders  Devalopers</td>
<td>10-06-15</td>
<td>Private,STGOVT</td>
<td>182</td>
<td>75</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1354</td>
<td>HW</td>
<td width="221">33(14)D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">PUSHKAR B. S</td>
<td width="289">M/S. PARAMVIR REAL ESTATES LLP</td>
<td>14-06-15</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>16</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1355</td>
<td width="88">N</td>
<td width="221">Radhaswami SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">Architectural Concept</td>
<td width="289">Dev reality Builder  Developer</td>
<td width="124">20-06-15</td>
<td width="109">Private</td>
<td width="92">42</td>
<td width="92">0</td>
<td width="92">24</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1356</td>
<td width="88">RC</td>
<td width="221">Teenmurti Devipada SRA Sahakari Grihanirman Sanstha (prop), Tribhuvan SRA Sahakari Grihanirman Sanstha (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri Manoj Vishwakarma</td>
<td width="289">M/s DESERVE BUILDERS & DEVELOPER (WADHAVALI) PVT.</td>
<td>06-08-15</td>
<td width="109">Private</td>
<td>265</td>
<td width="92">502</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1357</td>
<td width="88">HE</td>
<td width="221">Samrudhhi CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Jaynat Vaidya of M/s. D. R. Vaidya & Co.</td>
<td width="289">M/s. R. G. Developers</td>
<td width="124">14-08-15</td>
<td width="109">PVT</td>
<td width="92">94</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1358</td>
<td width="88">PS</td>
<td width="221">Kranti Ekta CHS (prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Mahesh Mehta</td>
<td width="289"> M/S.SAFE HIGHTS DEVELOPERS PVT LTD.</td>
<td width="124">14-08-15</td>
<td width="109">Private</td>
<td>306</td>
<td>112</td>
<td>0</td>
<td>0</td>
<td>not constructed</td>
<td width="92">No</td>
<td width="92">No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1359</td>
<td>S</td>
<td width="221">Raigad CHS  (Prop)</td>
<td>33-10</td>
<td width="289">ShrI Yogesh  Agrawal</td>
<td width="289">M/s Agrawal Builders  Devlopers</td>
<td>14-08-15</td>
<td width="109">Private</td>
<td>68</td>
<td>4</td>
<td>26</td>
<td>0</td>
<td>NO</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1360</td>
<td width="88">PN</td>
<td width="221">33(14) D (Romell)</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td width="289">M/s Ashish Enterprises</td>
<td width="124">14-08-15</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">331</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1361</td>
<td>T</td>
<td width="221">Ashtavinayak CHS. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sachin Gaikwad of M/s. Design Crest</td>
<td width="289">M/s United Construction Company.</td>
<td>17-08-15</td>
<td>Private</td>
<td>121</td>
<td>3</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1362</td>
<td>S</td>
<td width="221">Gayatri CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">S.S. Associates  Architect And Int  Designer</td>
<td width="289">M/s Kshitij Realtors  Developers</td>
<td>21-08-15</td>
<td width="109">Private</td>
<td>40</td>
<td>12</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>Yes</td>
<td width="92">Yes</td>
<td width="92">12</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1363</td>
<td>T</td>
<td width="221">33(14)D</td>
<td>33-14</td>
<td width="289">B.R. Gandhi & Associates</td>
<td style="font-weight: 400;" width="289">M/s Nirman Constructions</td>
<td>26-08-15</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>71</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1364</td>
<td width="88">GS</td>
<td width="221">Jai Hind CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">Kadakia & Associates</td>
<td width="289">Orbit Corporation Ltd</td>
<td width="124">01-09-15</td>
<td width="109">MCGM</td>
<td width="92">20</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1365</td>
<td>GN</td>
<td width="221">Om Shree Janabai CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MR. SATISH M. HANDE</td>
<td width="289">Signet Properties Pvt. Ltd</td>
<td>03-09-15</td>
<td>Private</td>
<td width="92">51</td>
<td width="92">0</td>
<td width="92">21</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1366</td>
<td width="88">KE</td>
<td width="221">OM GURUKRUPA SRA CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. S.P Shevde</td>
<td width="289">M/s. Moss Realtors Pvt Ltd,</td>
<td>08-09-15</td>
<td>Private</td>
<td>32</td>
<td>9</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1367</td>
<td>S</td>
<td width="221">Shree Ganesh Krupa C.H.S. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shelke & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Atlanta Associates Builders  Developers</td>
<td>13-10-15</td>
<td width="109">Private</td>
<td>49</td>
<td>14</td>
<td>6</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1368</td>
<td width="88">HE</td>
<td width="221">Sant Dyaneshwar Nagar CHS</td>
<td width="81">33-10</td>
<td width="289">Yogesh R. Gaikwad</td>
<td width="289">M/s. Akshay Sthapatya</td>
<td width="124">14-10-15</td>
<td width="109">STGOVT</td>
<td width="92">43</td>
<td width="92">7</td>
<td width="92">10</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1369</td>
<td width="88">RS</td>
<td width="221">Gajanan CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Aakar Architects & Consultants</td>
<td width="289">M/s. Shivani Builders & Developers.</td>
<td width="124">04-12-15</td>
<td width="109">Private</td>
<td width="92">111</td>
<td width="92">91</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1370</td>
<td width="88">PN</td>
<td width="221">SUKOON CHS (PROP)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Kasu Munshi  Associates</td>
<td width="289">M.V.Q. DEVELOPERS</td>
<td width="124">19-12-15</td>
<td width="109">Private</td>
<td width="92">60</td>
<td width="92">0</td>
<td width="92">43</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1371</td>
<td width="88">RC</td>
<td width="221">Jai Ambe CHS (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s.Consultants Combined</td>
<td style="font-weight: 400;" width="289">M/s. Vastu Nirman</td>
<td>29-12-15</td>
<td width="109">Private</td>
<td>16</td>
<td width="92">28</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1372</td>
<td width="88">RC</td>
<td width="221">Shree Sai Ganesh (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">MR. SATISH M. HANDE</td>
<td width="289">Sai Sastha Developer</td>
<td>01-02-16</td>
<td width="109">Private</td>
<td>17</td>
<td width="92">12</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1373</td>
<td>S</td>
<td width="221">Sunshine CHS (Prop)</td>
<td>33-10</td>
<td width="289">Vijay Turbadakar</td>
<td width="289">Shraddha Landmark Pvt. Ltd</td>
<td>04-02-16</td>
<td width="109">Private</td>
<td>319</td>
<td>77</td>
<td>39</td>
<td>0</td>
<td width="92">Yes</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1374</td>
<td>GN</td>
<td width="221">Navkiran,New Janta,Hind Ekta CHS (Prop.)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S.S Associates</td>
<td style="font-weight: 400;" width="289">M/s. Shree Nidhi Concept Realtors Pvt.Ltd</td>
<td>05-02-16</td>
<td>STGOVT</td>
<td width="92">1263</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1375</td>
<td width="88">KW</td>
<td width="221">Rameshwar SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">GIRISH CHAUDHARI</td>
<td width="289">M/s. Reliance Enterprise.</td>
<td width="124">08-02-16</td>
<td width="109">Private</td>
<td width="92">52</td>
<td width="92">27</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1376</td>
<td width="88">MW</td>
<td width="221">Amirbaug SRA CHS </td>
<td width="81">33(10)</td>
<td width="289">Shri. Samar Raut of M/s. Vision  </td>
<td width="289">M/s. Utsav Developers              </td>
<td width="124">08-02-16</td>
<td width="109">PVT</td>
<td width="92">45</td>
<td width="92">44</td>
<td width="92">0</td>
<td width="92">17</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1377</td>
<td width="88">PN</td>
<td width="221">Chhatrapati Shivaji SRA CHS (Prop) & Radha Krishna SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Sameer V. Kulkarni</td>
<td style="font-weight: 400;" width="289">M/s. Lakhdawala Developers Pvt Ltd</td>
<td width="124">23-02-16</td>
<td width="109">STGOVT</td>
<td width="92">147</td>
<td width="92">0</td>
<td width="92">206</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1378</td>
<td>T</td>
<td width="221">Shiv Shankar CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Hemant Bhavsar</td>
<td width="289">M/s Vishal Enterprises.</td>
<td>05-03-16</td>
<td>Private</td>
<td>79</td>
<td>25</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1379</td>
<td width="88">ME</td>
<td width="221">DEVKRUPA(FED) CHSL</td>
<td width="81">33(10)</td>
<td width="289">Shri. Mukesh Babadur</td>
<td width="289">M/s. Ratnaakar Shelters LLP</td>
<td width="124">09-03-16</td>
<td width="109">MCGM</td>
<td width="92">123</td>
<td width="92">0</td>
<td width="92">164</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1380</td>
<td>T</td>
<td width="221">Satidevi (SRA) Sahakari Gruhnirman Santha (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Dot Architects.</td>
<td style="font-weight: 400;" width="289">Shreenath Developers</td>
<td>09-03-16</td>
<td>Private</td>
<td>44</td>
<td>44</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1381</td>
<td width="88">MW</td>
<td width="221">Shree Pawanputra SRA CHS & Shivsai SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">MUKESH BAHADUR OF CONSULTANTS COMBINED</td>
<td width="289">M/s. Mangalnath Developers</td>
<td width="124">10-03-16</td>
<td width="109">Private</td>
<td width="92">232</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1382</td>
<td width="88">KE</td>
<td width="221">Navketan SRA Sahakari Gruh Nirman Sanstha (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Arun Kumar Dube</td>
<td width="289">H.F. Realty C.A to Owner</td>
<td>11-03-16</td>
<td>Private</td>
<td>32</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1383</td>
<td>L</td>
<td width="221">33 (14) D</td>
<td>33-14</td>
<td width="289">Zainual Ghaswala & Associates</td>
<td width="289">S.K. Construction</td>
<td>18-03-16</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>15</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1384</td>
<td width="88">KW</td>
<td width="221">Ashtavinayak CHS (prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Chandrashekhar Architect</td>
<td style="font-weight: 400;" width="289">M/s Prarthana Constructions</td>
<td width="124">01-04-16</td>
<td width="109">STGOVT</td>
<td>107</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1385</td>
<td width="88">E</td>
<td width="221">Janta Sevak SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Vilas P. Kharche</td>
<td style="font-weight: 400;" width="289">M/s. Renaissance Construction</td>
<td width="124">12-04-16</td>
<td width="109">MCGM</td>
<td width="92">165</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">  No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1386</td>
<td width="88">PN</td>
<td width="221">33(14)D</td>
<td width="81">33-14</td>
<td width="289">Ind + Architects</td>
<td width="289">Kosmos & Apple Realty</td>
<td width="124">20-04-16</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">37</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1387</td>
<td width="88">PN</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">Ketan Vaidya Associates</td>
<td style="font-weight: 400;" width="289">Kosmos Developers</td>
<td width="124">20-04-16</td>
<td width="109">Private</td>
<td width="92"> </td>
<td width="92">11</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1388</td>
<td>L</td>
<td width="221">33 (14) D</td>
<td>33-14</td>
<td width="289">Shri Niranjan P. Gangoli</td>
<td width="289">Shri Jatin M. Sheth</td>
<td>22-04-16</td>
<td>Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>94</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1389</td>
<td width="88">RS</td>
<td width="221">Jai Hind Gandhi Nagar CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Shri. Vivek Bhole Architect Pvt.Ltd Neo Modern</td>
<td width="289">M/s.Hari Om Developer</td>
<td width="124">02-05-16</td>
<td width="109">Private,MHADA</td>
<td width="92">607</td>
<td width="92">0</td>
<td width="92">607</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1390</td>
<td>S</td>
<td width="221">Jai Hanuman CHS (Proposed)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Ajay Sawant of M/s. Architectural Concept</td>
<td style="font-weight: 400;" width="289">Sai Sanstha Enterprises</td>
<td>26-05-16</td>
<td width="109">Private</td>
<td>75</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>Yes</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1391</td>
<td width="88">KE</td>
<td width="221">Ashtavinayak C.H.S. (Prop)</td>
<td>33-10</td>
<td width="289">M/s. Ajit Ambekar & Associates</td>
<td width="289">M/s. Galaxy Enterprises</td>
<td>30-05-16</td>
<td>MHADA</td>
<td>78</td>
<td>4</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1392</td>
<td width="88">N</td>
<td width="221">Shree Umiya SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Prabhakar Satham  Associates</td>
<td width="289">M/s. Rushi Housecon Pvt. Ltd.</td>
<td width="124">31-05-16</td>
<td width="109">Private</td>
<td width="92">30</td>
<td width="92">0</td>
<td width="92">11</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1393</td>
<td width="88">PS</td>
<td width="221">Hanuman Nagar CHS (Prop) & Azad Nagar CHS (Prop)</td>
<td>33-10</td>
<td width="289">Shri. Mehul Waghela.</td>
<td width="289">M/s D.V. Builders & Developers.</td>
<td width="124">31-05-16</td>
<td width="109">MCGM</td>
<td>166</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1394</td>
<td>S</td>
<td width="221">Janteshwar SRA CHS  & Janta Market SRA CHS</td>
<td>33-10</td>
<td width="289">Accanoor Associates</td>
<td width="289">Accanoor Associates</td>
<td>03-06-16</td>
<td width="109">Private</td>
<td>372</td>
<td>96</td>
<td>112</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1395</td>
<td width="88">RS</td>
<td width="221">33 (14) D</td>
<td width="81">33-14</td>
<td style="font-weight: 400;" width="289">M/s. Skytech Consultants</td>
<td width="289">M/s. Dimple Realtors Pvt. Ltd</td>
<td width="124">22-06-16</td>
<td width="109">Private</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">181</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1396</td>
<td width="88">KW</td>
<td width="221">Noor - E - Moohmadiya CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s.Ellora Project Consultant Pvt. Ltd</td>
<td width="289">M/s. Massif Infrastructure & Developer</td>
<td width="124">27-06-16</td>
<td width="109">Private</td>
<td width="92">71</td>
<td width="92">0</td>
<td width="92">35</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1397</td>
<td>T</td>
<td width="221">Balaji Apartment CHS Ltd</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/S. V.S. VAIDYA & ASSOCIATES</td>
<td style="font-weight: 400;" width="289">M/s. Tridev Reality & Construction Pvt. Ltd</td>
<td>11-07-16</td>
<td>Private</td>
<td>26</td>
<td>0</td>
<td>0</td>
<td>40</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1398</td>
<td width="88">KE</td>
<td width="221">Janata Colony SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Samar Raut of M/s. Vision</td>
<td width="289">M/s. Satare Infrastructure Pvt Ltd.</td>
<td>15-07-16</td>
<td>STGOVT</td>
<td>22</td>
<td>29</td>
<td width="92">0</td>
<td width="92">0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1399</td>
<td>HW</td>
<td width="221">Jafar Buva Zopadpatti Colony CHS (Prop) & Jafar Baba Kadeshwari CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/S.POOJA  ASSOCIATES</td>
<td style="font-weight: 400;" width="289">M/s. Hare Krishna Builders</td>
<td>22-07-16</td>
<td>STGOVT</td>
<td>167</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1400</td>
<td>S</td>
<td width="221">SAI GANESH &SADGURU NIWAS SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td>22-08-16</td>
<td width="109">Private</td>
<td>96</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>YES</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1401</td>
<td>S</td>
<td width="221">Sahajeevan SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Santoshkumar Dubey of M/s. Matrix</td>
<td width="289">M/s. Nexzone Fiscal Services Pvt. Ltd</td>
<td>09-09-16</td>
<td width="109">Private</td>
<td>173</td>
<td>93</td>
<td>6</td>
<td>0</td>
<td width="92">Yes</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1402</td>
<td width="88">KW</td>
<td width="221">33(14) D</td>
<td width="81">33-14</td>
<td width="289">Mr. Sachin W. Parab of M/s. Archpro India</td>
<td width="289">M/s. D han International Pvt. Ltd</td>
<td width="124">09-09-16</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td> </td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1403</td>
<td>T</td>
<td width="221">Ekveera SRA C.H.S. (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Santoshkumar Dubey of M/s. Matrix</td>
<td width="289">M/s. Nexzone Buildcon LLP</td>
<td>12-09-16</td>
<td>Private</td>
<td>75</td>
<td>37</td>
<td>0</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1404</td>
<td width="88">KW</td>
<td width="221">33(14) D</td>
<td width="81">33-14</td>
<td width="289">Mrs. Bhaskar R. Mishra of M/s. Archpro India</td>
<td width="289">M/s. S.V.K. Projects L.L.P</td>
<td width="124">21-09-16</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">13</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1405</td>
<td>T</td>
<td width="221">SHRI OM SHAKTI CHS (PROP)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Mr. Santoshkumar Dubey of M/s. Matrix</td>
<td width="289">M/s. TERRAPOLIS ASSETS PVT LTD.</td>
<td>22-09-16</td>
<td>Private</td>
<td>122</td>
<td>25</td>
<td>46</td>
<td>0</td>
<td>Yes</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1406</td>
<td width="88">KW</td>
<td width="221">Sai Darshan CHS Ltd & Sarvadharmiya CHS</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">Vilas P. Kharche</td>
<td width="289">M/S. Veetrag Holding Co. Pvt. Ltd.</td>
<td width="124">25-09-16</td>
<td width="109">STGOVT</td>
<td width="92">692</td>
<td width="92"> </td>
<td width="92">39</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1407</td>
<td width="88">RS</td>
<td width="221">Ganesh Nagar SRA CHS (Prop), Shivsagar SRA CHS (Prop), Janpriya SRA CHS (Prop), Bahar SRA CHS (Prop), Adarsh SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">SHRI. JADHAV  ASSOCIATES</td>
<td width="289">M/S. SKODA CONSTRUCTION</td>
<td width="124">07-10-16</td>
<td width="109">STGOVT</td>
<td width="92">847</td>
<td width="92">547</td>
<td width="92">483</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1408</td>
<td width="88">RC</td>
<td width="221">Shreeyog CHSL<br /> 33 (11)</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/s. Ketan Vaidya Associates</td>
<td style="font-weight: 400;" width="289">Kosmos Developers</td>
<td>24-10-16</td>
<td width="109">Private</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">35</td>
<td>Yes</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1409</td>
<td width="88">RC</td>
<td width="221">Nandanvan CHS Ltd.<br /> 33 (11)</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">M/s. Ketan Vaidya Associates</td>
<td style="font-weight: 400;" width="289">Kosmos Developers</td>
<td>24-10-16</td>
<td width="109">Private</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">70</td>
<td>Yes</td>
<td width="92">No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1410</td>
<td width="88">PS</td>
<td width="221">Shree Sai Ganesh SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s Rasik P. Hingoo Associates</td>
<td width="289">M/s. Laxmidevi Developers</td>
<td width="124">24-10-16</td>
<td width="109">Private</td>
<td>132</td>
<td>8</td>
<td>0</td>
<td>0</td>
<td>Constructed</td>
<td width="92">Part O.C.C. granted</td>
<td width="92">05 PAP handed over to Estate Dept (SRA)</td>
<td>5</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1411</td>
<td width="88">FN</td>
<td width="221">Shree Datta Sai SRA CHS Ltd</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s. Dignity Realty</td>
<td width="124">26-10-16</td>
<td width="109">MCGM</td>
<td width="92">111</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1412</td>
<td width="88">PS</td>
<td width="221">New Nav Shakti SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s. Goregaon Electrical Industries Pvt. Ltd</td>
<td width="124">26-10-16</td>
<td width="109">Private</td>
<td>76</td>
<td>28</td>
<td>0</td>
<td>0</td>
<td>no</td>
<td width="92">no</td>
<td width="92">no</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1413</td>
<td>S</td>
<td width="221">33(14) D</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">Mr. Santoshkumar Dubey of M/s. Matrix</td>
<td width="289">M/s. United Enterprises & Marathon Realty Pvt. Ltd</td>
<td>26-10-16</td>
<td width="109">Private</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>123</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1414</td>
<td width="88">KW</td>
<td width="221">Shiv Srushti SRA CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">Mr. Mohammed Yakub Khan of M/s. M. V. & Associates</td>
<td width="289">M/s. LAK & HANWARE REALTY LLP</td>
<td width="124">05-11-16</td>
<td width="109">Private</td>
<td width="92">38</td>
<td width="92">9</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1415</td>
<td>S</td>
<td width="221">Vrindavan CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Shri. Sachin Gaikwad of M/s. Design Crest</td>
<td style="font-weight: 400;" width="289">Shree Swami Samarth   Builders  Developers.</td>
<td>07-11-16</td>
<td width="109">Private</td>
<td>36</td>
<td>28</td>
<td>14</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1416</td>
<td>T</td>
<td width="221">Anubhav CHS Ltd</td>
<td>33-14</td>
<td style="font-weight: 400;" width="289">Rajesh khandeparkar of M/S. V.S. Vaidya & associat</td>
<td style="font-weight: 400;" width="289">M/s. Tridev Reality & Construction Pvt. Ltd</td>
<td>07-11-16</td>
<td width="109">Private</td>
<td>40</td>
<td>0</td>
<td>0</td>
<td>37</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1417</td>
<td width="88">ME</td>
<td width="221">Jai Bhole Nagar Rahiwashi CHS </td>
<td width="81">33(10)</td>
<td width="289">M/s. Bhatnagar Ambre Kothari </td>
<td width="289">M/s. Vikas Construction Co </td>
<td width="124">25-11-16</td>
<td width="109">PVT</td>
<td width="92">173</td>
<td width="92">13</td>
<td width="92">88</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1418</td>
<td>S</td>
<td width="221">Rudraksh SRA CHS</td>
<td>33-10</td>
<td width="289">SHRI. AJAY SAWANT OF M/S.A.J. ASSOCIATES <br /> <br /> 2 / 1,OM SIDDHI VINAYAK SOCIETY, HARIYALI VILLAGE, VIKROLI ( EAST ), MUMBAI- 400 083</td>
<td width="289">M/S.  SUDHANSHU INFRASTRUCTURES PVT. LTD.</td>
<td>01-02-17</td>
<td width="109">Private</td>
<td>112</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1419</td>
<td>S</td>
<td width="221">Janseva chs.  Janshakti chs</td>
<td>33-10</td>
<td width="289">Laxmi Enterprises</td>
<td width="289">Kenstro Enclave Developers</td>
<td>18-02-17</td>
<td width="109">MCGM</td>
<td>480</td>
<td>0</td>
<td>206</td>
<td>0</td>
<td width="92">Under construction</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1420</td>
<td>S</td>
<td width="221">Ganesh Bhuvan  SRA CHS & Ganesh bhuvan Annex CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td>24-03-17</td>
<td width="109">Private & Govt</td>
<td>76</td>
<td>31</td>
<td>19</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1421</td>
<td width="88">ME</td>
<td width="221">Lumbini Baug CHS </td>
<td width="81">33(10)</td>
<td width="289">M/s. Arch View Associates</td>
<td width="289">M/s. Reliable Builders </td>
<td width="124">22-05-17</td>
<td width="109">MCGM</td>
<td width="92">1411</td>
<td width="92">0</td>
<td width="92">678</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1422</td>
<td>S</td>
<td width="221">Sarthak SRA CHS,</td>
<td>33-10</td>
<td width="289">SHRI AJAY SAWANT OF M/S ARCHITECTURAL CONCEPT 802,SKYLINE WEALTH SPACE, C-2 WING PREMIER ROAD, VIDYAVIHAR(W) MUMBAI-400 086.</td>
<td width="289">M/S NIPUN GROUPSS</td>
<td>29-05-17</td>
<td width="109">Private</td>
<td>127</td>
<td>24</td>
<td>9</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1423</td>
<td>T</td>
<td width="221">Vasanthi Vihar SRA CHS 33(14)D</td>
<td>33-14</td>
<td width="289">Mr. Girish Chaudhari. 101, Clemson's Croft, Azad Rd, Vile Parle (E), Mumbai 400057</td>
<td width="289">M/s. Romell Real Estate Pvt. Ltd.</td>
<td width="124">04-06-17</td>
<td width="109">Private</td>
<td>37</td>
<td>0</td>
<td>0</td>
<td>43</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1424</td>
<td>S</td>
<td width="221">Ambewadi SRA CHS</td>
<td>33-10</td>
<td width="289">SHRI SANTOSH DUBEY OF M/S.MATRIX.</td>
<td width="289">M/S.HARIYALI ESTATE PVT LTD.</td>
<td width="124">12-06-17</td>
<td width="109">Private</td>
<td>662</td>
<td>0</td>
<td>260</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1425</td>
<td width="88">ME</td>
<td width="221">Bhimwadi CHS </td>
<td width="81">33(10)</td>
<td style="font-weight: 400;" width="289">Shri Vishwas Satodia</td>
<td width="289">M/s Reliable Realtors</td>
<td width="124">13-07-17</td>
<td width="109">MCGM</td>
<td width="92">185</td>
<td width="92">0</td>
<td width="92">95</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1426</td>
<td>S</td>
<td width="221">Veer Sambhaji SRA CHS (Prop).</td>
<td>33-10</td>
<td width="289">M/s S.S.Associates<br /> Sheetal Nikhare</td>
<td width="289">M/s Ranjana Builder Developer</td>
<td width="124">04-09-17</td>
<td width="109">Private</td>
<td>36</td>
<td>9</td>
<td>3</td>
<td>0</td>
<td width="92">Yes</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1427</td>
<td>S</td>
<td width="221">Puro Height SRA CHS. (Prop.)            </td>
<td>33-10</td>
<td width="289">M/S S.S.ASSOCIATES, M/S SHEETAL NIKHARE, 202,ODYSSEY IT PARK, ROAD NO.9 NEAR OLD PASSPORT OFFICE LANE, WAGLE ESTATE, THANE (W)</td>
<td width="289">M/S. PURO CONTRUCTIONS.</td>
<td width="124">30-10-17</td>
<td width="109">Private</td>
<td>100</td>
<td>24</td>
<td>21</td>
<td>0</td>
<td width="92">NO</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1428</td>
<td>S</td>
<td width="221">Shiv Sai CHS</td>
<td>33-10</td>
<td width="289">M/s Matrix, Shri Santosh Dubey<br />702, Marathon Max, Mulund Goregaon Link Road,<br />Mulund (W), Mumbai – 400 080</td>
<td width="289">M/s Suyog Developer<br />702, Marathon Max, Mulund Goregaon Link Road,<br />Mulund (W), Mumbai – 400 080</td>
<td>06-11-17</td>
<td width="109">Private</td>
<td>158</td>
<td>14</td>
<td>9</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1429</td>
<td>S</td>
<td width="221">Seven Hill  CHS (Prop)</td>
<td>33-10</td>
<td width="289">SHRI SANTOSH DUBEY OF M/S MATRIX  , 702,MARATHON MAX , MULUND  GOREGAON LINK ROAD MULUND (W) MUMBAI 400080</td>
<td width="289">M/S NEXZONE ENERGY UTILITIES LLP 702,MARATHON MAX , MULUND  GOREGAON LINK ROAD MULUND (W) MUMBAI 400080</td>
<td width="124">06-11-17</td>
<td width="109">Private</td>
<td>109</td>
<td>9</td>
<td>7</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1430</td>
<td width="88">PN</td>
<td width="221">1. Vayshet Pada Suvarna Nagari SRA (Prop) Hsg. Soc 2. Santoshi Mata SRA Co-Op Hsg. Soc. 3. Jai Bhavani Vayshet Pada SRA Co-Op. Hsg. Soc.</td>
<td width="81">33-10</td>
<td width="289">Mr. Suresh A. Gaikwad Of M/s. Skytech Consultants,</td>
<td width="289">M/s. Royal Realtors</td>
<td width="124">14-11-17</td>
<td width="109">Private</td>
<td width="92">444</td>
<td width="92">0</td>
<td width="92">169</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1431</td>
<td width="88">KW</td>
<td width="221">Sing SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Shri. Santosh Zirmute of M/s. Arch View Associates </td>
<td width="289">M/s. Meezab Enterprises                                 </td>
<td width="124">16-11-17</td>
<td width="109">MHADA</td>
<td>89</td>
<td>0</td>
<td width="92">0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1432</td>
<td width="88">A</td>
<td width="221">Cuff Parade SRA CHS Fed.</td>
<td width="81">33(10)</td>
<td width="289">Shri. Vilas P. Kharche of M/s. Catapult Realty Consultants, </td>
<td width="289">M/s. Precaution Properties Pvt. Ltd.</td>
<td width="124">29-11-17</td>
<td width="109">STGOVT</td>
<td width="92">6997</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1433</td>
<td>T</td>
<td width="221">Om Sai SRA CHS (Prop)</td>
<td>33-10</td>
<td width="289">S.S. Associates  Architect And Int  Designer</td>
<td width="289">ASHWAMEDH BUILDERS  DEVELOPERS.</td>
<td>06-12-17</td>
<td>Private</td>
<td>53</td>
<td>5</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1434</td>
<td width="88">FN</td>
<td width="221">1) Om Sai CHS Ltd. (Prop.)<br /> 2) Godavari CHS Ltd. (Prop)<br /> 3) Buddha Vihar CHS Ltd. (Prop.)</td>
<td width="81">33-10</td>
<td>M/s DOT Architects.</td>
<td width="289">M/s. Rehab Pranay Developer</td>
<td width="124">12-12-17</td>
<td width="109">PVT</td>
<td width="92">236</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1435</td>
<td>HW</td>
<td width="221">33 (14) D</td>
<td width="81">33(14)D</td>
<td width="289">M/S.GVS ARCHITECTS & ASSOCIATES B-14, JEEVAN DHARA SOC, SHAHAJI RAJE ROAD, VILAPARLE (E), MUMBAI-400057.</td>
<td width="289">M/S.MANPREET ESTATES LLP, M/S.OBEDIENCE INFRACON PVT LTD.</td>
<td width="124">12-12-17</td>
<td width="109">Private </td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">22</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1436</td>
<td width="88">PN</td>
<td width="221">Rana Cottage 33(14) D</td>
<td width="81">33-14</td>
<td width="289">Shri. Arif Shah of M/s. Atharva Consultants,</td>
<td width="289">M/s. Jangid Home Pvt Ltd</td>
<td width="124">12-12-17</td>
<td width="109">PVT</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">63</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1437</td>
<td>T</td>
<td width="221">Panchsheel SRA CHS</td>
<td>33-10</td>
<td width="289">M/s. S S Associates</td>
<td width="289">M/s. Laizer Builders Developers</td>
<td width="124">27-12-17</td>
<td width="109">STGOVT</td>
<td>42</td>
<td>61</td>
<td>0</td>
<td>0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1438</td>
<td width="88">PN</td>
<td width="221">Shivpuri Pragati SRA Co-Op. Hsg. Society (Prop)</td>
<td width="81">33-10</td>
<td width="289">Shri. Jitendra B. Patel of M/S. Aakar Architects & Consultants  </td>
<td width="289">M/s. Dynamix Contractors and Builders Pvt. Ltd.</td>
<td width="124">18-01-18</td>
<td width="109">Private</td>
<td width="92">112</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1439</td>
<td width="88">PN</td>
<td width="221">Shiv Srishti Dindoshi CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">SHRI VISHWAS SATODIA</td>
<td width="289">M/S. SAMARTH ERECTORS & DEVELOPERS</td>
<td width="124">18-01-18</td>
<td width="109">MHADA</td>
<td width="92">361</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1440</td>
<td width="88">MW</td>
<td width="221">3 K Scheme </td>
<td width="81">33(10)</td>
<td width="289">Shri. Vishwas Satodia</td>
<td width="289">M/s. Sterling Buildcon Pvt. Ltd.</td>
<td width="124">01-02-18</td>
<td width="109">STGL & PVT</td>
<td width="92">6949</td>
<td width="92">0</td>
<td width="92">1846</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1441</td>
<td width="88">MW</td>
<td width="221">Om Ashakiran/Shree Vitthal Rukmini CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">Shri Vishwas Satodia</td>
<td width="289">Star Premises Pvt.Ltd</td>
<td width="124">01-02-18</td>
<td width="109">MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1442</td>
<td width="88">PN</td>
<td width="221">Ekta SRA Slum</td>
<td width="81">33-10</td>
<td width="289">HARISH D. GANDHI </td>
<td width="289">M/S. SHIDDHIVINAYAK DEVELOPERS KURAR</td>
<td width="124">15-02-18</td>
<td width="109">Private</td>
<td width="92">24</td>
<td width="92">0</td>
<td width="92">34</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1443</td>
<td width="88">A</td>
<td width="221">Mahatma Phule A SRA CHS Ltd. & Mahatma Phule B SRA CHS Ltd, C.S. No. 1980 (pt) of Fort Div. & 153-A(pt), 150A(Pt) of Backbay Reclamation Scheme -III Nariman Point</td>
<td width="81">33(10)</td>
<td width="289">Sangita Billimoria of M/s MITI</td>
<td width="289">M/s Ace Links.</td>
<td width="124">03-03-18</td>
<td width="109">STGOVT</td>
<td width="92">177</td>
<td width="92">27</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">YES</td>
<td width="92">NO</td>
<td width="92">YES</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">27</td>
</tr>
<tr>
<td width="64">1444</td>
<td>S</td>
<td width="221">Ganpatmali SRA  CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S. S. Associates.</td>
<td width="289">M/s Adhikari Enginnering Private Ltd.  </td>
<td>14-03-18</td>
<td width="109">Private</td>
<td>77</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1445</td>
<td width="88">RC</td>
<td width="221">33(11)</td>
<td>3.11</td>
<td width="289">Shri Vishwas Satodia</td>
<td width="289">M/s. Dev Engineers</td>
<td>10-04-18</td>
<td width="109">MCGM</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">377</td>
<td>No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1446</td>
<td width="88">FN</td>
<td width="221">Bright Sheikh Mistry SRA CHS Ltd. (Prop</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Allied Associates</td>
<td width="289">M/s. Vanu Developers</td>
<td width="124">18-04-18</td>
<td width="109">MHADA</td>
<td width="92">84</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1447</td>
<td>HW</td>
<td width="221">33 (14) D</td>
<td width="81">33 (14) D</td>
<td width="289">Shri. Pushkar B Suthar,<br /> <br />  1st Floor, Aditya Kutir, 4th Road, Khar (W), Mum - 52</td>
<td width="289">M/s. K Mordani Builders LLP</td>
<td width="124">04-05-18</td>
<td>PVT</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">16</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1448</td>
<td>HW</td>
<td width="221">33 (14) D</td>
<td width="81">33 (14) D</td>
<td style="font-weight: 400;" width="289">PUSHKAR B. S</td>
<td style="font-weight: 400;" width="289">M/S.KOEL DEVELOPERS LLP.</td>
<td width="124">04-05-18</td>
<td>PVT</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td width="92">91</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1449</td>
<td width="88">GS</td>
<td width="221">1) Ashtavinayak SRA CHS (Prop) 2) Arvind Nagar-2 SRA CHS (Prop) 3) Riddhi siddhi Vyaparti & Niwas SRA CHS (Prop) 4) Arvind Nagar Worli SRA CHS (Prop) & 5) Shree Mangalmurti CHS Ltd.</td>
<td width="81">33(10) & 33(7)</td>
<td width="289">SHRI.ANIL KATDARE, OF M/S.AAK ASSOCIATES.</td>
<td width="289">M/S.ALWAYS REMEMBER PROPERTIES PVT LTD.</td>
<td width="124">07-05-18</td>
<td width="109">MCGM</td>
<td width="92">634</td>
<td width="92">0</td>
<td width="92">197</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1450</td>
<td>S</td>
<td width="221">Shree Sai Baba SRA CHS</td>
<td>33-10</td>
<td width="289">Ajay Sawant of  M/s Architectural concepts       </td>
<td width="289">M/s Abhyudaya home pvt. Ltd.</td>
<td>15-05-18</td>
<td width="109">MHADA</td>
<td>29</td>
<td>0</td>
<td>4</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1451</td>
<td>S</td>
<td width="221">Nisarg SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td>18-05-18</td>
<td width="109">Private</td>
<td>67</td>
<td>0</td>
<td>11</td>
<td>0</td>
<td width="92">Under construction</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1452</td>
<td width="88">PN</td>
<td width="221">Jaiganesh CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">SHRI. PUSHKAR SUTHAR OF M/S. PUSHKAR CONSULTANTS, </td>
<td width="289">M/S. HARASIDDH CORPORATION</td>
<td width="124">21-05-18</td>
<td width="109">Private</td>
<td width="92">117</td>
<td width="92">4</td>
<td width="92">4</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1453</td>
<td width="88">PS</td>
<td width="221">Wagheshwari SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Mr. Alpesh M. Gandhi</td>
<td width="289">M/s. New One Construction Pvt. Ltd.</td>
<td width="124">23-05-18</td>
<td width="109">Pvt</td>
<td width="92">197</td>
<td width="92">9</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">no</td>
<td width="92">no</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1454</td>
<td width="88">KW</td>
<td width="221">“Sahara CHS (Prop)” & Sangam CHS (Prop) </td>
<td width="81">33-10</td>
<td width="289">M/s. Point to Point Architect</td>
<td width="289">M/s. Gajanan Builders.                                              </td>
<td width="124">15-06-18</td>
<td width="109">MHADA</td>
<td width="92">811</td>
<td width="92">0</td>
<td width="92">1253</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1455</td>
<td width="88">PN</td>
<td width="221">Ambawadi CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">Mr. Nikhil Mahajan of M/s. Prism Architects and Interior Designers</td>
<td width="289">M/s. Density Realty Pvt. Ltd.</td>
<td width="124">19-06-18</td>
<td width="109">Private</td>
<td width="92">34</td>
<td width="92">0</td>
<td width="92">0</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1456</td>
<td width="88">ME</td>
<td width="221">1) SAHYADRI NAGAR B CHS<br /> 2) SAHYOG CHS<br /> 3) SAI KRUPA CHS<br /> 4) NEW EKTA CHS</td>
<td width="81">33(10)</td>
<td style="font-weight: 400;" width="289">Shri. Arun Gurav of M/s. Skyline Infrabuilt Consultant Pvt. Ltd.</td>
<td width="289">M/s. Radius & Deserve Builders LLP</td>
<td width="124">28-06-18</td>
<td width="109">Govt. of Maharashtra</td>
<td width="92">1638</td>
<td width="92">0</td>
<td width="92">947</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1457</td>
<td width="88">ME</td>
<td width="221">Kasturba Nagar CHS (Prop),</td>
<td width="81">33(10)</td>
<td style="font-weight: 400;" width="289">Shri. Arun Gurav of M/s. Skyline Infrabuilt Consultant Pvt. Ltd.</td>
<td width="289">M/s. Radius & Deserve Builders LLP<br /> Co developer- M/s Deserve exim pvt Ltd<br /> & M/s Deserve builders & Developer Pvt Ltd</td>
<td width="124">30-06-18</td>
<td width="109">State Government </td>
<td width="92">643</td>
<td width="92">0</td>
<td width="92">476</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1458</td>
<td width="88">KE</td>
<td width="221">Shree Gokul SRA CHS (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. Griha Rachana</td>
<td width="289">M/s. Sunshine Developers  Construction Co.</td>
<td>21-07-18</td>
<td>Private</td>
<td>241</td>
<td>0</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1459</td>
<td width="88">FN</td>
<td width="221"> Ashirwad CHS (Prop.) & Shree Ganesh CHS (Prop.)</td>
<td width="81">33-10</td>
<td width="289">Shri. Sunil Ambre of M/s. Sunil Ambre & Associates</td>
<td style="font-weight: 400;" width="289">M/s. Kukreja Constructions</td>
<td width="124">26-07-18</td>
<td width="109">MCGM</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1460</td>
<td>RN</td>
<td width="221">PANCHASHEEL NAGAR CHS (PROP.)</td>
<td width="81">33-10</td>
<td width="289">SHRI. Mukesh Bahadur, B-101, Manek Kunji, Meghwadi, Dr S.S.Rao Road, Lalbaug  Mumbai-400012.</td>
<td width="289">M/S Sameer Constructions.</td>
<td width="124">03-08-18</td>
<td width="109">PRIVATE</td>
<td width="92">426</td>
<td width="92">212</td>
<td width="92">0</td>
<td width="92">0</td>
<td>No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1461</td>
<td width="88">PN</td>
<td width="221">33(11)</td>
<td width="81">33-11</td>
<td width="289">Mr. Rakesh G. Waghmare of      M/s. Design World</td>
<td width="289">Pragati Overseas Agency</td>
<td width="124">05-08-18</td>
<td width="109">PVT</td>
<td width="92"> </td>
<td width="92"> </td>
<td width="92">0</td>
<td width="92">256</td>
<td width="92">Yes</td>
<td width="92">Yes</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1462</td>
<td>S</td>
<td width="221">Panchmukhi SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td>14-08-18</td>
<td width="109">PVT & STGL</td>
<td>198</td>
<td>47</td>
<td>60</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1463</td>
<td width="88">RS</td>
<td width="221">YOGI NIWAS CO-OP HSG SOC (PROP)</td>
<td width="81">33-10</td>
<td width="289">M/s. Concept Architects 512/Highway Commercial Complex, I.B. Patel Rd., off Western Express Highway Goregaon € Mum 63.</td>
<td width="289">M/s. Shree Artha Buildtech Pvt Ltd</td>
<td width="124">28-08-18</td>
<td width="109">PVT</td>
<td width="92">12</td>
<td width="92">72</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1464</td>
<td>GN</td>
<td width="221">Janseva Rahivasi Sangh CHS (P)</td>
<td width="81">33-10</td>
<td style="font-weight: 400;" width="289">M/s. Deodhar Asoociates</td>
<td width="289">M/s. SLK Buildcon Pvt Ltd</td>
<td>07-09-18</td>
<td>STGOVT</td>
<td width="92">282</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1465</td>
<td>S</td>
<td width="221">jai Aakash deep SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S. S. Associates.</td>
<td width="289">M/s Aishwarya Constriction and Developers. </td>
<td>28-09-18</td>
<td width="109">PVT & STGL</td>
<td>82</td>
<td>36</td>
<td>11</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1466</td>
<td width="88">HE</td>
<td width="221">Pragati SRA CHS Ltd</td>
<td width="81">33-10</td>
<td width="289">Shri Prabhav A Shah of M/s. Aakar Architect</td>
<td width="289">M/s. Vaibhav Realtors</td>
<td width="124">08-10-18</td>
<td width="109">PVT</td>
<td width="92">21</td>
<td width="92">12</td>
<td width="92">0</td>
<td width="92">27</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1467</td>
<td width="88">FN</td>
<td width="221">1. Sai Sanjog SRA CHS (Prop),<br /> 2. Sukhsagar SRA CHS (Prop),<br /> 3. Simran SRA CHS (Prop),<br /> 4. Sukhamani SRA CHS (Prop),<br /> 5. Shri Sai Arman SRA CHS (Prop),<br /> 6. Shri Shakti Ganesh SRA CHS (Prop),<br /> 7. Milan SRA CHS (Prop),<br /> 8. Ekta SRA CHS (Prop).</td>
<td width="81">33-10</td>
<td width="289">Shri Samar Raut of M/s. VISION.</td>
<td width="289">M/s. A.B.Builders & Developers</td>
<td width="124">23-10-18</td>
<td width="109">MCGM</td>
<td width="92">1188</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1468</td>
<td width="88">N</td>
<td width="221">HIND MARATHA SRA CHS (PROP).</td>
<td width="81">33-10</td>
<td width="289">SHRI SAMAR RAUT OF M/S.VISION </td>
<td width="289">M/S.SATRE INFRASTRUCTURE PVT.LTD</td>
<td width="124">23-10-18</td>
<td width="109">Pvt</td>
<td width="92">90</td>
<td width="92">0</td>
<td width="92">7</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1469</td>
<td>S</td>
<td width="221">Om Sai SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s  Prabhakar Satham & Associates</td>
<td width="289">M/s Riddhi Siddhi Developers                  </td>
<td>20-11-18</td>
<td width="109">Private</td>
<td>33</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1470</td>
<td>T</td>
<td width="221">VASANT KRUPA SRA CHS (PROP), VASANT SRA CHS (PROP), Sidharth nagar SRA CHS (PROP)</td>
<td width="81">33-10</td>
<td width="289">SHRI. MAHESH B. SHELKE OF M/S. VERTICOHORIZON</td>
<td width="289">M/S. SHREE AKSHAY HOUSING,</td>
<td width="124">29-11-18</td>
<td width="109">STGOVT</td>
<td>166</td>
<td width="92">0</td>
<td width="92">63</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1471</td>
<td width="88">HW</td>
<td width="221">Bandra Reclamation SRA CHS</td>
<td>33(10)</td>
<td style="font-weight: 400;" width="289">M/s. Pagnis & Pagnis</td>
<td width="289">M/s. M.M. Property Developers Pvt. Ltd.</td>
<td width="124">30-01-19</td>
<td>MHADA</td>
<td>1096</td>
<td>0</td>
<td>0</td>
<td width="92">0</td>
<td>No</td>
<td>No</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1472</td>
<td width="88">RC</td>
<td width="221">Borivali Avirahi SRA CHS</td>
<td width="81">33-10</td>
<td width="289">Shri. Sanjay Neve</td>
<td width="289">M/s. Incline Realty Pvt. Ltd.</td>
<td width="124">25-04-19</td>
<td width="109">MHADA</td>
<td width="92">1042</td>
<td width="92">215</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1473</td>
<td>S</td>
<td width="221">Sainath SRA CHS</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s  Prabhakar Satham & Associates</td>
<td width="289">M/s Sainath Developer </td>
<td>07-05-19</td>
<td width="109">Private</td>
<td>66</td>
<td>27</td>
<td>4</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1474</td>
<td>S</td>
<td width="221">Ballareshwar Chs (Prop)</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td style="font-weight: 400;" width="289">Accanoor Associates</td>
<td>13-05-19</td>
<td width="109">Private</td>
<td>29</td>
<td>10</td>
<td>3</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1475</td>
<td width="88">RC</td>
<td width="221">Patilwadi</td>
<td width="81">33-10</td>
<td width="289">Mr. Sunil Magdum of Reenowned Architect </td>
<td width="289">Mahaan & Sheth Infracon Pvt. Ltd.</td>
<td width="124">14-05-19</td>
<td width="109">Pvt</td>
<td width="92">104</td>
<td width="92">57</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1476</td>
<td width="88">ME</td>
<td width="221">Ekta SRA CHS (Prop.)</td>
<td width="81">33(10)</td>
<td style="font-weight: 400;" width="289">M/s. DOT Architects</td>
<td width="289">M/s Build Square</td>
<td width="124">07-06-19</td>
<td width="109">MCGM</td>
<td width="92">306</td>
<td width="92">0</td>
<td width="92">3</td>
<td width="92">0</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1477</td>
<td width="88">RC</td>
<td width="221">Ramkrupa 33(11)</td>
<td width="81">33-10</td>
<td width="289">M/s Vivek Bhole Architects Pvt. Ltd.</td>
<td width="289">M/s. Nityanand Builders & Developer</td>
<td width="124">05-07-19</td>
<td width="109">Pvt</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">14</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1478</td>
<td width="88">PN</td>
<td width="221">Ekta CHS (Prop)</td>
<td width="81">33-10</td>
<td width="289">SHRI. VISHWAS  SATODIA</td>
<td width="289">M/S. POONAM  HOUSECON  PVT. LTD.</td>
<td width="124">20-07-19</td>
<td width="109">STGL</td>
<td width="92">55</td>
<td width="92">0</td>
<td width="92">84</td>
<td>0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1479</td>
<td>S</td>
<td width="221">Jangal Mangal Tower SRA</td>
<td>33-10</td>
<td style="font-weight: 400;" width="289">M/s. S. S. Associates.</td>
<td width="289">M/s. Trident Ozone LLP , <br /> Builders & Developers</td>
<td>01-08-19</td>
<td width="109">Private</td>
<td>91</td>
<td>0</td>
<td>49</td>
<td>0</td>
<td width="92">No</td>
<td>NO</td>
<td>No</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td width="64">1480</td>
<td>GN</td>
<td width="221">Daryasarang Machimmar CHS (P) & Makhdumiya Seva CHS (P)</td>
<td width="81">33-10</td>
<td width="289">Shri Anand V. Dhokay</td>
<td style="font-weight: 400;" width="289">M/s. Shree Nidhi Concept Realtors Pvt.Ltd</td>
<td>09-08-19</td>
<td>STGOVT</td>
<td width="92">306</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">NO</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
<tr>
<td width="64">1481</td>
<td width="88">RS</td>
<td width="221">SAI AZAD (SRA) C.H.S. (PROP)" </td>
<td width="81">33-10</td>
<td width="289">Shri. Suresh Gaikwad of M/s. SKY TECH CONSULTANTS</td>
<td width="289">M/S.Build Tech Properties</td>
<td width="124">07-09-19</td>
<td width="109">MCGM</td>
<td width="92">134</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">No</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
<td width="92">0</td>
</tr>
</tbody>
</table>
<p> </p>
</div>
</div>
</div>

</div>
</div>
</section>

<script type="text/javascript">
jQuery(document).ready(function () {
	jQuery('#main-nav nav').meanmenu()
});
</script>

@endsection
