<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //


    public function aboutDrp()
    {
        return view('pagem.innerpage.aboutus');
    }

    public function departmentHistory()
    {
        return view('pagem.innerpage.department-history');
    }

    public function visionMissionMarathi()
    {
        return view('pagem.innerpage.vision-mission-marathi');
    }

    public function organizationStructureMarathi()
    {
        return view('pagem.innerpage.organization-structure-marathi');
    }

    public function ourLeaderhipMarathi()
    {
        return view('pagem.innerpage.our-leaderhip-marathi');
    }

    public function authorityMembersMarathi()
    {
        return view('pagem.innerpage.authority-members-marathi');
    }

    public function ourAffiliatedOfficesmarathi()
    {
        return view('pagem.innerpage.our-affiliated-offices-marathi');
    }

    public function thaneCityMarathi()
    {
        return view('pagem.innerpage.thane-city-marathi');
    }

    public function ourProjectsMarathi()
    {
        return view('pagem.innerpage.our-projects-marathi');
    }

    public function tendersNoticesMarathi()
    {
        return view('pagem.innerpage.tenders-notices-marathi');
    }

    public function resourcesMarathi()
    {
        return view('pagem.innerpage.resources-marathi');
    }

    public function notificationActsMarathi()
    {
        return view('pagem.innerpage.notification-acts-marathi');
    }
    public function coopertaiveDepartmentMarathi()
    {
        return view('pagem.innerpage.coopertaive-department-marathi');
    }

    public function actRulesMarathi()
    {
        return view('pagem.innerpage.act-rules-marathi');
    }
    public function housingManualMarathi()
    {
        return view('pagem.innerpage.housing-manual-marathi');
    }
    public function governmentResolutions()
    {
        return view('pagem.innerpage.government-resolutions');
    }
    public function ordersm()
    {
        return view('pagem.innerpage.ordersm');
    }
    public function gisMisSlumDataMarathi()
    {
        return view('pagem.innerpage.gisMisSlumDataMarathi');
    }
    public function circularm()
    {
        return view('pagem.innerpage.circularm');
    }

    public function gallery()
    {
        return view('pagem.innerpage.gallery');
    }
    public function photoGallery()
    {
        return view('pagem.innerpage.photo-gallery');
    }

    public function rtimarathi(){
        return view('pagem/innerpage/rti-marathi');
    }



    
    public function processtracker(){
        return view('pagem/innerpage/processtracker');

    }
}
