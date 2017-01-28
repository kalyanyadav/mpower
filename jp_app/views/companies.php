<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('common/meta_tags'); ?>
<title><?php echo $title;?></title>
<?php $this->load->view('common/before_head_close'); ?>
<link rel="stylesheet" href="<?php echo base_url();?>public/css/demo.css">
<link rel="stylesheet" href="<?php echo base_url();?>public/css/listnav.css">
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<div id="fb-root"></div>

<div class="siteWraper">
<!--Header-->
<!--/Header--> 
<!--Detail Info-->
<div class="container detailinfo">
  
      <div class="row"> 
        <!--div class="col-md-4 col-sm-6">
        
        <!--Company Info-->       
          <!--div class="companyinfoWrp">            
              Sidebar
            
            <div class="clear"></div>
          </div>
        
        <!--Apply-->        
        <?php if($this->session->userdata('is_user_login')!=TRUE): ?>
        <!--div class="actionBox">
          <h4>Become a Member</h4>
          <p>Click on Login if you are already member.</p>
          <a href="<?php echo base_url('jobseeker-signup');?>" class="applyjob"><span>Register</span></a> <a href="<?php echo base_url('login');?>" class="refferbtn"><span>Login</span></a> </div>
        <?php endif;?>        
        </div-->
        
        
        <div class="col-md-12 col-sm-6">        
        <!--Job Detail-->      
		  <?php if($row_company->company_description):?>
          <div class="boxwraper">
            <div class="titlebar">About <?php echo $row_company->company_name;?></div>
            
            <!--Job Description-->
            
            <div class="companydescription">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="normal-details">
                    <?php 
    
                    echo strip_tags($row_company->company_description);
    
                  ?>
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <?php endif;?>
          <div class="searchjoblist">
            <!--Jobs List-->        
            <div class="boxwraper">
              <div class="titlebar">
                  Premium Companies
              </div>
              <div class="row"> 
                  
                  <div id="tabpage_4" class="col-md-12">
			
			<ul id="demoFour" class="demo">
				<li>
                                <img src="http://localhost/mpower/public/uploads/employer/thumb/JOBPORTAL-1457769102.jpg">
                                    <a href="#">Qatar petroleum</a>
									<div>Follow</div>
                                </li>
<li><p>4 Openings</p><a href="#">Abu Dhabi National Oil Company (ADNOC)</a></li>
<li><p>4 Openings</p><a href="#">Abu Dhabi Gas Development Company (Al-Hosn Gas)</a></li>
<li><a href="#">Abu Dhabi Gas Industries (Gasco)</a></li>
<li><a href="#">Abu Dhabi Polymers Company (Borouge)</a></li>
<li><a href="#">Al-Jubail Petrochemical Company (Kemya), Saudi Arabia</a></li>
<li><a href="#">Abu Dhabi (ADIPEC)</a></li>
<li><a href="#">Arabian Drilling Company (ADC)</a></li>
<li><a href="#">ASRY Offshore Services</a></li>
<li><a href="#">Azerbaijan International Operating Company (AIOC)</a></li>
<li><a href="#">Atlantis Holding </a></li>
<li><a href="#">Air Liquide Global E&amp;C Solutions Careers</a></li>
<li><a href="#">Arabtec Holding PJSC</a></li>
<li><a href="#">Burley SubSea</a></li>
<li><a href="#">Bahrain National Oil Company</a></li>
<li><a href="#">Crescent Petroleum</a></li>
<li><a href="#">Cheveron International Gas Inc.</a></li>
<li><a href="#">ConocoPhillips</a></li>
<li><a href="#">Dana Gas</a></li>
<li><a href="#">Dragon Oil</a></li>
<li><a href="#">Dolphin Energy</a></li>
<li><a href="#">Emirates National Oil Company (ENOC)</a></li>
<li><a href="#">Emirates General Petroleum Corporation - Oil (EGPC)</a></li>
<li><a href="#">Exillon Energy</a></li>
<li><a href="#">Egyptian Refining Company (ERC)</a></li>
<li><a href="#">Egyptian Natural Gas Holding Company - (EGAS)</a></li>
<li><a href="#">ExxonMobil - UAE </a></li>
<li><a href="#">ESNAAD</a></li>
<li><a href="#">GE Oil and Gas</a></li>
<li><a href="#">GeoPardazesh</a></li>
<li><a href="#">Gulf Marine Services</a></li>
<li><a href="#">Halliburton - UAE</a></li>
<li><a href="#">Ikarus</a></li>
<li><a href="#">International Petroleum Investment Company</a></li>
<li><a href="#">Kuwait National Petroleum Company (KNPC)</a></li>
<li><a href="#">Kuwait Energy Company (KEC)</a></li>
<li><a href="#">Kuwait Oil Co</a></li>
<li><a href="#">Lafarge Ciments S.A.</a></li>
<li><a href="#">Lamprell Energy Ltd</a></li>
<li><a href="#">Moody International Ltd.</a></li>
<li><a href="#">Maersk Oil Qatar AS </a></li>
<li><a href="#">National Iranian Oil Company</a></li>
<li><a href="#">Occidental of Oman, Inc.&nbsp; </a></li>
<li><a href="#">Petropars</a></li>
<li><a href="#">Parson International</a></li>
<li><a href="#">PetroRabigh, Saudi Arabia</a></li>
<li><a href="#">Petroleum Development Oman Ltd</a></li>
<li><a href="#">Pars Oil &amp; Gas Company (POGC),</a></li>
<li><a href="#">Parrex</a></li>
<li><a href="#">TransAsia Gas International</a></li>
<li><a href="#">Saudi Arabian Oil Company - Investment Companies </a></li>
<li><a href="#">Sadara Chemical Company, Saudi Arabia</a></li>
<li><a href="#">Yanbu Aramco Sinopec Refining Company, Saudi Arabia</a></li>
<li><a href="#">Zakum Development Company (Zadco), UAE</a></li>
<li><a href="#">RasGas</a></li>
<li><a href="#">Qatargas</a></li>
<li><a href="#">TAQA</a></li>
<li><a href="#">Qualion NMR</a></li>
<li><a href="#">Qatar Petroleum (QP)</a></li>
<li><a href="#">Qatar Shell Services Co. WLL</a></li>
<li><a href="#">Qatar Petrochemical Company (QAPCO)</a></li>
<li><a href="#">Rotary Engineering Limited</a></li>
<li><a href="#">RAK Petroleum (Ras Al Khaimah) </a></li>
<li><a href="#">SOCAR - State Oil Company of Azerbaijan</a></li>
<li><a href="#">Saudi Aramco</a></li>
<li><a href="#">Samarec</a></li>
<li><a href="#">The Arabian Industrial Gases Co. LLC</a></li>
<li><a href="#">Tasnee</a></li>
<li><a href="#">Weatherford Oil Tool Middle East Limited - Oil and Gas Field Services</a></li>
<li><a href="#">Arabtec Holding PJSC</a></li>
<li><a href="#">Al Shirawi Contracting</a></li>
<li><a href="#">Aldar Properties</a></li>
<li><a href="#">Astad Project Management</a></li>
<li><a href="#">Al Fara'a Group</a></li>
<li><a href="#">Alec</a></li>
<li><a href="#">Al Ghurair Group</a></li>
<li><a href="#">Al Shafar General Contracting</a></li>
<li><a href="#">Actco General Contracting Co</a></li>
<li><a href="#">Al Harbi Trading and Contracting</a></li>
<li><a href="#">Al Fouzan Trading and General Construction</a></li>
<li><a href="#">Arabian Construction Company (ACC)</a></li>
<li><a href="#">Al Ahmadiah Contracting Comp.&nbsp;</a></li>
<li><a href="#">Al Futtaim Carillion&nbsp;</a></li>
<li><a href="#">Al Habtoor Engineering&nbsp;</a></li>
<li><a href="#">Al Jaber Group&nbsp;</a></li>
<li><a href="#">Al Masaood Bergum&nbsp;</a></li>
<li><a href="#">Al Naboodah Contracting&nbsp;</a></li>
<li><a href="#">Al Rostamani Pegel&nbsp;</a></li>
<li><a href="#">ARABTEC&nbsp;</a></li>
<li><a href="#">ASGC</a></li>
<li><a href="#">Arabtec&nbsp;</a></li>
<li><a href="#">Aecom</a></li>
<li><a href="#">Al-Rashid Trading &amp; Contracting Company </a></li>
<li><a href="#">AHK International</a></li>
<li><a href="#">Al-Kifah Holding</a></li>
<li><a href="#">ADPI</a></li>
<li><a href="#">AL Wataniya Concrete</a></li>
<li><a href="#">AECOM</a></li>
<li><a href="#">Al Barari Firm Management</a></li>
<li><a href="#">ANAS S.p.A</a></li>
<li><a href="#">Al Malki Holding Group</a></li>
<li><a href="#">AL-Yamama Company</a></li>
<li><a href="#">Archirodon Construction</a></li>
<li><a href="#">Afras Trading and Contracting</a></li>
<li><a href="#">Belhasa Contracting</a></li>
<li><a href="#">Bin Omran Trading and Contracting</a></li>
<li><a href="#">Barwa Real Estate</a></li>
<li><a href="#">China State Engineering Co</a></li>
<li><a href="#">Consolidated Contractors Company</a></li>
<li><a href="#">Control Contracting &amp; Trading Company (CCTC)</a></li>
<li><a href="#">Chiyoda CCC Engineering Limited (CCEL)</a></li>
<li><a href="#">CH2M HILL UAE</a></li>
<li><a href="#">Dar Al Arkan</a></li>
<li><a href="#">Daewoo Engineering &amp; Construction</a></li>
<li><a href="#">DUTCO BALFOUR BEATTY</a></li>
<li><a href="#">Dubai Contracting Company</a></li>
<li><a href="#">DCC Engineering</a></li>
<li><a href="#">Danube Group</a></li>
<li><a href="#">Dodsal Engineering &amp; Construction Private Limited &nbsp;</a></li>
<li><a href="#">Drake &amp; Scull</a></li>
<li><a href="#">Dubai Roads and Transport Agency (RTA)</a></li>
<li><a href="#">Ezdan Holding Group</a></li>
<li><a href="#">Engineering Contracting Co.</a></li>
<li><a href="#">Fluor Arabia</a></li>
<li><a href="#">Gulf Cement Company</a></li>
<li><a href="#">GINCO General Contracting</a></li>
<li><a href="#">GS Engineering &amp; Construction</a></li>
<li><a href="#">Gannett Fleming</a></li>
<li><a href="#">HBK Contracting</a></li>
<li><a href="#">Harinsa Qatar</a></li>
<li><a href="#">Hyundai Engineering &amp; Construction Co. Ltd.</a></li>
<li><a href="#">Imdaad</a></li>
<li><a href="#">Kharafi National</a></li>
<li><a href="#">Kentz - SNC Lavalin</a></li>
<li><a href="#">KEO International Consultants</a></li>
<li><a href="#">L&amp;T Construction</a></li>
<li><a href="#">Louis Berger Group</a></li>
<li><a href="#">Larsen &amp; Toubro Construction</a></li>
<li><a href="#">Laing O'Rourke</a></li>
<li><a href="#">Meraas Holding</a></li>
<li><a href="#">Majid Al Futtaim Properties (MAF Properties)</a></li>
<li><a href="#">Mouchel</a></li>
<li><a href="#">Msheireb Properties</a></li>
<li><a href="#">Mushrif Trading &amp; Contracting</a></li>
<li><a href="#">Manazel Construction Company</a></li>
<li><a href="#">Northcorp</a></li>
<li><a href="#">Naboodah&nbsp;</a></li>
<li><a href="#">Nakheel Properties</a></li>
<li><a href="#">Nasser Bin Khaled &amp; Sons</a></li>
<li><a href="#">Orascom Construction Industries SAE</a></li>
<li><a href="#">Parsons International</a></li>
<li><a href="#">Qatar Rail</a></li>
<li><a href="#">Qatar Building Co</a></li>
<li><a href="#">Qatari Diar</a></li>
<li><a href="#">Rashid Trading &amp; Contracting</a></li>
<li><a href="#">Saudi BinLadin Group</a></li>
<li><a href="#">Shapoorji Pallonji</a></li>
<li><a href="#">Samsung Engineering &amp; Construction</a></li>
<li><a href="#">Sungwon Corp.&nbsp;</a></li>
<li><a href="#">Southern Province Cement Company</a></li>
<li><a href="#">Southern Province Cement Company</a></li>
<li><a href="#">Saudi Cement Company</a></li>
<li><a href="#">SS Lootah</a></li>
<li><a href="#">SYSTRA</a></li>
<li><a href="#">TAV</a></li>
<li><a href="#">Transemirates Contracting LLC</a></li>
<li><a href="#">Tiger Contracting</a></li>
<li><a href="#">United Development Company (UDC)</a></li>
<li><a href="#">Wade Adams ME</a></li>
<li><a href="#">Arab Chem Raw Materials Trading LLC</a></li>
<li><a href="#">ADEKA Al Ghurair Additives LLC</a></li>
<li><a href="#">Abu Dhabi National Chemicals Company</a></li>
<li><a href="#">Al Jubail Petrochemical Company</a></li>
<li><a href="#">Amir Kabir Petrochemical Company</a></li>
<li><a href="#">Arabian Petrochemical Co</a></li>
<li><a href="#">Arak Petrochemical Company</a></li>
<li><a href="#">Al Waha Petrochemical Company</a></li>
<li><a href="#">Abu Dhabi Polymers Company Ltd. - Petrochemicals</a></li>
<li><a href="#">Bakhtar Petrochemical Company</a></li>
<li><a href="#">BASF Kanoo Polyurethanes LLC</a></li>
<li><a href="#">Egyptian Petrochemicals Company</a></li>
<li><a href="#">Esfahan Petrochemical Compan</a></li>
<li><a href="#">Emirates General Petroleum Corporation</a></li>
<li><a href="#">Farabi Petrochemicals Company</a></li>
<li><a href="#">Global Alliance Group Free Zone Company</a></li>
<li><a href="#">Modern Petrochemicals Company Ltd. </a></li>
<li><a href="#">Petroleum Development Oman Ltd</a></li>
<li><a href="#">Qatar General Petroleum Corporation</a></li>
<li><a href="#">RAK Petroleum (Ras Al Khaimah) </a></li>
<li><a href="#">Saudi Basic Industries (SABIC)</a></li>
<li><a href="#">Saudi Basic Industries Corporation</a></li>
<li><a href="#">Wabel Trading FZE </a></li>
<li><a href="#">Al Mazroui Group of Companies</a></li>
<li><a href="#">Al Naboodah Cargo Centre LLC&nbsp;</a></li>
<li><a href="#">Al Rais Travel &amp; Shipping Agencies LLC&nbsp;</a></li>
<li><a href="#">Al Rostamani Group</a></li>
<li><a href="#">Abu Dhabi Shipping Agency (ADSA)</a></li>
<li><a href="#">Albwardy Investment&nbsp;</a></li>
<li><a href="#">Allied Keystone Logistics LLC</a></li>
<li><a href="#">Alltrans Freight &amp; Logistics</a></li>
<li><a href="#">AMI Middle East LLC</a></li>
<li><a href="#">Ayezan E-Gistics LLC</a></li>
<li><a href="#">Barloworld Logistics</a></li>
<li><a href="#">BMS Logistics LLC</a></li>
<li><a href="#">Barloworld Logistics LLC</a></li>
<li><a href="#">Bridgeway Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
<li><a href="#">DHL UAE</a></li>
<li><a href="#">Dutco Group&nbsp;</a></li>
<li><a href="#">Dubai World Central (DWC)&nbsp;</a></li>
<li><a href="#">Fedex UAE&nbsp;</a></li>
<li><a href="#">Gulf Agency Company Ltd -- GAC</a></li>
<li><a href="#">Gulftainer Company Limited&nbsp;</a></li>
<li><a href="#">IAL Logistics Emirates LLC</a></li>
<li><a href="#">Kanoo Shipping Agencies</a></li>
<li><a href="#">Middle  East Logistics DWC LLC</a></li>
<li><a href="#">Mohebi Logistics</a></li>
<li><a href="#">Modern Freight Co LLC</a></li>
<li><a href="#">Overseas Courier Services (OCS)</a></li>
<li><a href="#">R.H.S. Logistics</a></li>
<li><a href="#">Response Logistics Consulting FZE</a></li>
<li><a href="#">Sharjah National Travel and Tourist Agency&nbsp;</a></li>
<li><a href="#">Storall LLC Storage Solutions</a></li>
<li><a href="#">Toll Global Forwarding&nbsp;</a></li>
<li><a href="#">Trident Freight</a></li>
<li><a href="#">Time Cargo Logistics (TCL)</a></li>
<li><a href="#">UPS United Arab Emirates</a></li>
<li><a href="#">Verks Gloal Logistics LLC</a></li>
<li><a href="#">Etisalat</a></li>
<li><a href="#">Emirates Integrated Telecom (du)</a></li>
<li><a href="#">Mobily</a></li>
<li><a href="#">National Mobile Telecommmunications Co.</a></li>
<li><a href="#">Saudi Telecom</a></li>
<li><a href="#">Zain</a></li>
<li><a href="#">Al Arrab Contracting Company (ACC)</a></li>
<li><a href="#">Al Jaber Group</a></li>
<li><a href="#">Consolidated Contractors Company (CCC)</a></li>
<li><a href="#">Dubai Internet City Companies</a></li>
<li><a href="#">Dubai Media City Companies</a></li>
<li><a href="#">Dubai Healthcare City Companies</a></li>
<li><a href="#">Dubai Ports</a></li>
<li><a href="#">DP World</a></li>
<li><a href="#">Dubai Holding</a></li>
<li><a href="#">Emaar Properties</a></li>
<li><a href="#">Etisalat</a></li>
<li><a href="#">Emirates</a></li>
<li><a href="#">Emirates Integrated Telecommunications Company (du)</a></li>
<li><a href="#">Nakheel Properties</a></li>
<li><a href="#">Al Ghurair Group</a></li>
<li><a href="#">ABB - UAE</a></li>
<li><a href="#">AVH Pvt. Ltd.</a></li>
<li><a href="#">Al Massa Gypsum &amp; Decoration Work Careers</a></li>
<li><a href="#">Al Jabr Automotive - KIA Motors Careers</a></li>
<li><a href="#">AGL Coca Cola</a></li>
<li><a href="#">Advanced Watertek</a></li>
<li><a href="#">Boeing</a></li>
<li><a href="#">Caparol</a></li>
<li><a href="#">Citizenship Services Group</a></li>
<li><a href="#">Dubai Aluminium (DUBAL)</a></li>
<li><a href="#">Egybel Qatar</a></li>
<li><a href="#">Edgen Murray</a></li>
<li><a href="#">Dubai Blocks</a></li>
<li><a href="#">General Motors (GM)</a></li>
<li><a href="#">Preciosa Lighting</a></li>
<li><a href="#">Sysco Guest Supply</a></li>
<li><a href="#">Seaharvest Group</a></li>
<li><a href="#">Saint-Gobain</a></li>
<li><a href="#">SKM Air Conditioning</a></li>
<li><a href="#">United Food Technologies</a></li>
<li><a href="#">Varian Medical Systems</a></li>
<li><a href="#">Abyaar Real Estate Company</a></li>
<li><a href="#">Al Mazaya Holding Company</a></li>
<li><a href="#">ALDAR Properties</a></li>
<li><a href="#">Arabian Cemnet Company-Saudi Company</a></li>
<li><a href="#">Al Mazaya Holding Company</a></li>
<li><a href="#">Barwa Real Estate Company</a></li>
<li><a href="#">Dar Al Arkan Real Estate Development Company</a></li>
<li><a href="#">Ezdan Real Estate Company</a></li>
<li><a href="#">First Dubai Real Estate Development Comapany</a></li>
<li><a href="#">Galfar Enginering and Contracting</a></li>
<li><a href="#">Jabal Omar Development Company</a></li>
<li><a href="#">Middle East Specialized Cables Company</a></li>
<li><a href="#">Middle East Specialized Cables Company</a></li>
<li><a href="#">Qatar Dubai Real Estate Development Company</a></li>
<li><a href="#">Quatar Real Estate Investment Company</a></li>
<li><a href="#">RAK Properties</a></li>
<li><a href="#">Red Sea Housing Services-Saudi Arabia</a></li>
<li><a href="#">Red Sea Housing Services-Saudi Arabia</a></li>
<li><a href="#">Salhia Real Estate Company</a></li>
<li><a href="#">Saudi Real Estate Company</a></li>
<li><a href="#">Salhia Real Estate Company</a></li>
<li><a href="#">Sorouh Real Estate</a></li>
<li><a href="#">Taiba Holding Company</a></li>
<li><a href="#">The Commercial Real Estate Company</a></li>
<li><a href="#">United Development Company</a></li>
<li><a href="#">United Development Company</a></li>
<li><a href="#">Al-Rajhi Bank</a></li>
<li><a href="#">Al Ahli Bank Kuwait</a></li>
<li><a href="#">Al Khalij Commercial Bank</a></li>
<li><a href="#">ABC Islamic Bank</a></li>
<li><a href="#">Al Baraka Islamic Bank</a></li>
<li><a href="#">Al Salam Bank-Bahrain</a></li>
<li><a href="#">Arcapita Bank</a></li>
<li><a href="#">Ajman Bank</a></li>
<li><a href="#">Abu Dhabi Commercial Bank</a></li>
<li><a href="#">Arab National Bank</a></li>
<li><a href="#">Ahli United Bank</a></li>
<li><a href="#">Alinma Bank</a></li>
<li><a href="#">Abu Dhabi Islamic Bank</a></li>
<li><a href="#">Albaraka Bank Group</a></li>
<li><a href="#">Arab Banking Corporation</a></li>
<li><a href="#">Bank AlJazira</a></li>
<li><a href="#">Banque Saudi Fransi</a></li>
<li><a href="#">Bank Saderat Iran</a></li>
<li><a href="#">Bahrain Islamic Bank</a></li>
<li><a href="#">Bank of Bahrain and Kuwait</a></li>
<li><a href="#">Bank Albilad</a></li>
<li><a href="#">Badr Al Islami</a></li>
<li><a href="#">Bank of Bahrain &amp; Kuwait</a></li>
<li><a href="#">Barclay Bank PLC</a></li>
<li><a href="#">BNP Paribas</a></li>
<li><a href="#">Boubyan Bank</a></li>
<li><a href="#">National Bank of Oman</a></li>
<li><a href="#">Bank of Sharjah</a></li>
<li><a href="#">Bank Dhofar</a></li>
<li><a href="#">Burgan Bank</a></li>
<li><a href="#">Bank Muscat</a></li>
<li><a href="#">Commercial Bank of Kuwait</a></li>
<li><a href="#">Commercial Bank of Dubai</a></li>
<li><a href="#">Citi Islamic Investment Bank</a></li>
<li><a href="#">Citibank – Al Wasl</a></li>
<li><a href="#">Commercial Bank International</a></li>
<li><a href="#">Commercial Bank of Qatar</a></li>
<li><a href="#">Commercial International Bank Egypt (SAE)</a></li>
<li><a href="#">Deutsche Bank AG</a></li>
<li><a href="#">Dubai Islamic Bank</a></li>
<li><a href="#">Doha Bank</a></li>
<li><a href="#">Emirates NBD</a></li>
<li><a href="#">Emirates Bank International</a></li>
<li><a href="#">First Gulf Bank</a></li>
<li><a href="#">General Council for Islamic Banks &amp; Financial</a></li>
<li><a href="#">Global Banking Corporation</a></li>
<li><a href="#">ICICI Bank Ltd</a></li>
<li><a href="#">IndusInd Bank</a></li>
<li><a href="#">International Islamic Financial Market</a></li>
<li><a href="#">Islamic Development Bank</a></li>
<li><a href="#">Ithmaar Bank</a></li>
<li><a href="#">Kotak Mahindra International</a></li>
<li><a href="#">Kuwait Finance House</a></li>
<li><a href="#">Kuwait International Bank</a></li>
<li><a href="#">Liquidity Management Centre</a></li>
<li><a href="#">Mashreq</a></li>
<li><a href="#">Masraf Al Rayan</a></li>
<li><a href="#">Merrill Lynch International &amp; Co</a></li>
<li><a href="#">National Commercial Bank</a></li>
<li><a href="#">National Bank of Abu Dhabi</a></li>
<li><a href="#">National Bank of Kuwait</a></li>
<li><a href="#">National Bank of Bahrain</a></li>
<li><a href="#">National Bank of Fujairah</a></li>
<li><a href="#">Qatar International Islamic Bank</a></li>
<li><a href="#">Qatar National Bank</a></li>
<li><a href="#">Qatar Islamic Bank</a></li>
<li><a href="#">RAKBANK</a></li>
<li><a href="#">Riyad Bank</a></li>
<li><a href="#">Samba Financial Group</a></li>
<li><a href="#">Shamil Bank of Bahrain</a></li>
<li><a href="#">Sharjah Islamic Bank</a></li>
<li><a href="#">Saudi British Bank</a></li>
<li><a href="#">The Bank of New York Mellon</a></li>
<li><a href="#">Unicorn Invesment Bank</a></li>
<li><a href="#">UBS AG – Representative Office Dubai</a></li>
<li><a href="#">Union National Bank</a></li>
<li><a href="#">Venture Capital Bank</a></li>
<li><a href="#">Al Ghurair Investment</a></li>
<li><a href="#">Azadea Group - Lebanon</a></li>
<li><a href="#">Al-Musbah Group</a></li>
<li><a href="#">Agthia Group</a></li>
<li><a href="#">Arla Foods</a></li>
<li><a href="#">AMZ Group</a></li>
<li><a href="#">Al Mana Luxury</a></li>
<li><a href="#">AKC Group</a></li>
<li><a href="#">Alshaya Kuwait</a></li>
<li><a href="#">Americana - UAE</a></li>
<li><a href="#">B. &amp; R. Dora International DMCC Careers</a></li>
<li><a href="#">Chalhoub Group</a></li>
<li><a href="#">Colgate-Palmolive Company</a></li>
<li><a href="#">4 Corner General Trading</a></li>
<li><a href="#">Dinar Trading</a></li>
<li><a href="#">Etoile Group</a></li>
<li><a href="#">Estee Lauder Companies</a></li>
<li><a href="#">Emirates Leisure Retail (ELR)</a></li>
<li><a href="#">Fore Front Facilities Management Careers</a></li>
<li><a href="#">Fulcrum</a></li>
<li><a href="#">Foodco Holding</a></li>
<li><a href="#">Glee Hospitality</a></li>
<li><a href="#">Gucci</a></li>
<li><a href="#">Giordano</a></li>
<li><a href="#">Green Bird Group</a></li>
<li><a href="#">Henkel</a></li>
<li><a href="#">Majid Al Futtaim Fashion (MAF Fashion)</a></li>
<li><a href="#">Mercato</a></li>
<li><a href="#">Nestle Middle East</a></li>
<li><a href="#">Omar Bin Eid Group</a></li>
<li><a href="#">Optica</a></li>
<li><a href="#">Q-Auto</a></li>
<li><a href="#">RM Retail</a></li>
<li><a href="#">Al-Dawaa Medical Services Company &nbsp;</a></li>
<li><a href="#">Abbott S.A. &nbsp;</a></li>
<li><a href="#">Abu Dhabi International Medical Services LLC &nbsp;</a></li>
<li><a href="#">Al-Maidan Clinic for Oral Health Services Company K.S.C.P.</a></li>
<li><a href="#">Dallah Healthcare Holding Company</a></li>
<li><a href="#">Hatat Polyclinic LLC &nbsp;</a></li>
<li><a href="#">Hatat Polyclinic LLC &nbsp;</a></li>
<li><a href="#">Modern Pharmaceutical Company &nbsp;</a></li>
<li><a href="#">Mouwasat Medical Services Company</a></li>
<li><a href="#">Medicare Group (Q.S.C.)</a></li>
<li><a href="#">Parrex</a></li>
<li><a href="#">Saudi Pharmaceutical Industries and Medical Appliances Corporation</a></li>
	</ul>
		</div>
                  
              </div>
            </div>
          </div>
        
        </div>
        
      </div>
      
     
   
</div>
<?php $this->load->view('common/bottom_ads');?>
<!--Footer-->
<?php $this->load->view('common/before_body_close'); ?>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>public/js/jquery-listnav.js"></script>
<script src="<?php echo base_url();?>/public/js/vendor.js"></script>
<script>
$(function(){
	
	$('#demoFour').listnav({
		cookieName: 'cookie-demo',
		includeAll: false,
		onClick: function(letter) {
			$(".myLastClicked").text(letter.toUpperCase());
		}
	});
		$('.demo a').click(function(e) {
		e.preventDefault();
	});
});
</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>