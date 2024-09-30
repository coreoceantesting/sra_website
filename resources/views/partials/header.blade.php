<header>
    <div class="header_top" style="background-color: #3e3da5;">
      <div class="container">
        <div class="pull-left">
          <ul class="top_access">
          </ul>
        </div>
        <div class="pull-right">
          <ul id="example" class="top_access">
            <li class="">
              <a href="#navigation" class="width_auto">
                <span>
                  दिशादर्शकाकडे जा
                </span>
              </a>
            </li>
            <li class="">
              <a href="https://sra.gov.in/pagem/innerpage/help-marathi.php" class="width_auto">
                <span>
                  पटलावरील माहिती वाचणे
                </span>
              </a>
            </li>
            <li class="">
              <a href="#content" class="width_auto">
                <span>
                  मुख्य विषयाकडे जा
                </span>
              </a>
            </li>
            <li class="dropdown">
              <a href="">
                <img src="https://www.sra.gov.in/assets/themes/images/fonticon.png" alt="Font"
                title="Font">
              </a>
              <ul class="dropdown-content">
                <li>
                  <a href="javascript:void(0)" onClick="set_font_size('decrease')">
                    <img src="https://www.sra.gov.in/assets/themes/images/decrease-font-size.png"
                    alt="Decrease Font Size" title="Decrease Font Size">
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" onclick="set_font_size('')">
                    <img src="https://www.sra.gov.in/assets/themes/images/standard-view.png"
                    alt="Normal Font Size" title="Normal Font Size">
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" onclick="set_font_size('increase')">
                    <img src="https://www.sra.gov.in/assets/themes/images/increase-text-size.png"
                    alt="Increase Font Size" title="Increase Font Size">
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" onclick="setActiveStyleSheet('change'); return false;">
                    <img src="https://www.sra.gov.in/assets/themes/images/high-contrast.png"
                    alt="High Contrast" title="High Contrast">
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)" onclick="setActiveStyleSheet('style'); return false;">
                    <img src="https://www.sra.gov.in/assets/themes/images/standard-view.png"
                    alt="Default" title="Default">
                  </a>
                </li>
              </ul>
            </li>
            <li class="">
              <a href="" class="width_auto">
                <span>
                  English
                </span>
              </a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="header_bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-xs-12">
            <div class="pull-left logo">
              <img src="https://www.sra.gov.in/assets/themes/images/logo_image.png"
              alt="SRA Logo" title="SRA Logo">
            </div>
            <div class="pull-left logo_text">
              <h1>
                झोपडपट्टी पुनर्वसन प्राधिकरण, बृहन्मुंबई
              </h1>

              <h4 style="font-family: 'David-Bold', sans-serif;">
                  <b> Slum Rehabilitation Authority, Brihanmumbai</b>
                </h4>

              <p>
                <span class="hindi_19">
                  महाराष्ट्र शासन
                </span>
                <br>
                <span class="font_90">
                  Government of Maharashtra
                </span>
              </p>
            </div>
            </a>
          </div>
          <div class="col-md-4 col-md-offset-1 col-xs-12 right_logos mt10">
            <div class="pull-left">
              <ul class="signup">
              </ul>
            </div>
            <div class="pull-right" style="text-align:end">
              <a href="#" target="_blank"><img src="https://sra.gov.in/assets/themes/images/shivaji_mh.png"
                  class="mha_logs" width="24%" onclick="return sitevisit();" alt="maharashtra.gov.in"
                   title="maharashtra.gov.in">
              </a>
              <a href="https://www.maharashtra.gov.in/" target="_blank">
                <img src="https://www.sra.gov.in/assets/themes/images/mh_logo.png" width="22%"
                class="mha_logs" onclick="return sitevisit();" alt="maharashtra.gov.in"
                title="maharashtra.gov.in">
              </a>
              <a href="https://www.india.gov.in/" target="_blank">
                <img src="https://www.sra.gov.in/assets/themes/images/emblem_of_india.png"
                width="14%" class="emblem_logo" onclick="return sitevisit();" alt="Emblem"
                title="Emblem">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      function sitevisit() {
        if (!confirm('This is external link, Are you sure you want to continue?')) return false;
      }
    </script>
  </header>

  <section>
    <div id="main-nav" class=" navigation-bg" style="background-color: rgb(234, 80, 14);">
        <nav>
        <div class="mean-container" id="navigation">
            <ul class="clearfix sf-menu" id="example">

            <li class="current">
                <a href="https://www.sra.gov.in/marathi" title="मुख्य पृष्ठ " class="home_icon">
                <span>
                    मुख्य पृष्ठ
                </span>
                </a>
            </li>
            <li class="has-sub">
                <a href="{{ route('about-drp') }}" target=""
                title="आमच्या विषयी">
                आमच्या विषयी
                </a>
                <ul>
                <li>
                    <a href="{{ route('department-history') }}"
                    title="विभागीय माहिती">
                    विभागीय माहिती
                    </a>
                </li>
                <li>
                    <a href="{{ route('vision-mission-marathi') }}"
                    title="हेतू आणि ध्येय">
                    हेतू आणि ध्येय
                    </a>
                </li>
                <li>
                    <a href="{{ route('organization-structure-marathi') }}"
                    title="संस्थेचा आराखडा">
                    संस्थेचा आराखडा
                    </a>
                </li>
                <li>
                    <a href="{{ route('our-leaderhip-marathi') }}"
                    title="आमचे नेतृत्व">
                    आमचे नेतृत्व
                    </a>
                </li>
                <li>
                    <a href="{{ route('authority-members-marathi') }}"
                    title="सक्षम सदस्य">
                    सक्षम सदस्य
                    </a>
                </li>
                <li>
                    <a href="{{ route('our-affiliated-offices-marathi') }}"
                    title="संलग्न कार्यालये">
                    संलग्न कार्यालये
                    </a>
                    <ul>
                    <li>
                        <a href="https://housing.maharashtra.gov.in/" target="_blank" title="डी.आर.पी  (धारावी)">
                        डी.आर.पी (धारावी)
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('thane-city-marathi') }}"
                        target="" title="ठाणे शहर">
                        ठाणे शहर
                        </a>
                    </li>
                    <li>
                        <a href="https://housing.maharashtra.gov.in/" target="_blank" title="गृहनिर्माण विभाग">
                        गृहनिर्माण विभाग
                        </a>
                    </li>
                    <li>
                        <a href="https://mahahousing.mahaonline.gov.in/" target="_blank" title="महाराष्ट्र गृहनिर्माण विकास महामंडळ">
                        महाराष्ट्र गृहनिर्माण विकास महामंडळ
                        </a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('gallery') }}" title="गॅलरी">
                    गॅलरी
                    </a>
                    <ul>
                    <li>
                        <a href="{{ route('photo-gallery') }}" target=""
                        title="फोटो गॅलरी">
                        फोटो गॅलरी
                        </a>
                    </li>
                    <li>
                        <a href="https://www.sra.gov.in/pagem/innerpage/spot_light.php" target=""
                        title="स्पॉटलाइट">
                        स्पॉटलाइट
                        </a>
                    </li>
                    </ul>
                </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="{{ route('our-projects-marathi') }}"
                target="" title="आमचे प्रकल्प">
                आमचे प्रकल्प
                </a>
            </li>
            <li class="has-sub">
                <a href="{{ route('tenders-notices-marathi') }}"
                target="" title="निविदा आणि सूचना">
                निविदा आणि सूचना
                </a>
            </li>
            <li class="has-sub">
                <a href="{{ route('resources-marathi') }}"
                target="" title="संसाधने">
                संसाधने
                </a>
                <ul>
                <li>
                    <a href="{{ route('notification-acts-marathi') }}"
                    title="अधिसूचना आणि कायदा">
                    अधिसूचना आणि कायदा
                    </a>
                </li>
                <li>
                    <a href="{{ asset('storage/pdf/15139381181509647295sanad.pdf') }}"
                    _blank title="नागरी सनद">
                    नागरी सनद
                    </a>
                </li>
                <li>
                    <a href="{{ route('circularm') }}" target="_blank" title="आमची परिपत्रके"
                    onclick="return confirm('External website that opens in a new window.')">
                    आमची परिपत्रके
                    </a>
                </li>
                <li>
                    <a href="{{ route('gis-mis-slum-data-marathi') }}"
                    title="जीआयएस-एमआयएस झोपडपट्टी डेटा">
                    जीआयएस-एमआयएस झोपडपट्टी डेटा
                    </a>
                </li>
                <li>
                    <a href="{{ route('coopertaive-department-marathi') }}"
                    title="सहकार विभाग">
                    सहकार विभाग
                    </a>
                    <ul>
                    <li>
                        <a href="{{ route('act-rules-marathi') }}"
                        target="" title="कायदा व नियम">
                        कायदा व नियम
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('housing-manual-marathi') }}"
                        target="" title="गृहनिर्माण पुस्तिका">
                        गृहनिर्माण पुस्तिका
                        </a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('ordersm') }}" target="_blank" title="आमचे आदेश"
                    onclick="return confirm('External website that opens in a new window.')">
                    आमचे आदेश
                    </a>
                </li>
                <li>
                    <a href="{{ route('government-resolutions') }}"
                    title="शासन निर्णय">
                    शासन निर्णय
                    </a>
                </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="https://www.sra.gov.in/pagem/innerpage/citizen-services-marathi.php"
                target="" title="नागरी सेवा">
                नागरी सेवा
                </a>
                <ul>
                <li>
                    <a href="{{route('rtimarathi')}}" title="माहितीचा अधिकार कायदा">
                    माहितीचा अधिकार कायदा
                    </a>
                    <ul>
                    <li>
                        <a href="https://www.sra.gov.in/upload/cmsfiles/15139388061509645558RTI_Act_2005.pdf"
                        target="_blank" title="माहितीचा अधिकार कायदा २००५">
                        माहितीचा अधिकार कायदा २००५
                        </a>
                    </li>
                    <li>
                        <a href="https://www.sra.gov.in/upload/cmsfiles/15198076151514438109RTI_board.pdf"
                        target="_blank" title="जनमाहिती आणि अपिल अधिकारी">
                        जनमाहिती आणि अपिल अधिकारी
                        </a>
                    </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('processtracker')}}" target="_blank" title="आपल्या पत्रांचा मागोवा"
                    onclick="return confirm('External website that opens in a new window.')">
                    आपल्या पत्रांचा मागोवा
                    </a>
                </li>
                <li>
                    <a href="" target="_blank" title="योजना माहिती"
                    onclick="return confirm('External website that opens in a new window.')">
                    योजना माहिती
                    </a>
                </li>
                <li>
                    <a href="{{route('rentmanagemntsystemmr')}}"
                    title="भाडे व्यवस्थापन प्रणाली">
                    भाडे व्यवस्थापन प्रणाली
                    </a>
                </li>
                <li>
                    <a href="{{route('transferoftenements')}}"
                    title="सदनिकेचे / गाळयाचे हस्तांतरण (Transfer Of Tenement)">
                    सदनिकेचे / गाळयाचे हस्तांतरण (Transfer Of Tenement)
                    </a>
                </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="{{route('contactusmarathi')}}"
                target="" title="संपर्क साधा">
                संपर्क साधा
                </a>
            </li>
            <li class="has-sub">
                <a href="{{route('righttoservicemarathi')}}"
                target="" title="महाराष्ट्र लोकसेवा हक्क अधिनियम, २०१५">
                महाराष्ट्र लोकसेवा हक्क अधिनियम, २०१५
                </a>
            </li>
            <li class="has-sub">
                <a href="" target="" title="अधिक">
                अधिक
                </a>
                <ul>
                <li>
                    <a href="{{route('enviornmentcellmarathi')}}"
                    title="पर्यावरण कक्ष">
                    पर्यावरण कक्ष
                    </a>
                </li>
                <li>
                    <a href="http://umd.nic.in/sra/" target="_blank" title="भौगोलिक स्थितीचे संकेतस्थळ"
                    onclick="return confirm('External website that opens in a new window.')">
                    भौगोलिक स्थितीचे संकेतस्थळ
                    </a>
                </li>
                </ul>
            </li>
            </ul>
        </div>
        <div id="content">
        </div>
        </nav>
    </div>
    </section>
