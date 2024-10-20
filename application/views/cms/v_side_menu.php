<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

        <?php  ?>

            <?php
            $SiteURLDashboard=site_url('cms/dashboard');
             $SiteURLSlider=site_url('cms/slider');
             $SiteURLAboutCompany=site_url('cms/about_company');
             $SiteURLCountryOffer=site_url('cms/country_offer');
             $SiteURLVideo=site_url('cms/video');
             $SiteURLImmigrationService=site_url('cms/immigration_service');
             $SiteURLContact=site_url('cms/contact');
             $SiteURLCompanyProfile=site_url('cms/company_profile');
             $SiteURLMissionVision=site_url('cms/mission_vision');
             $SiteURLDirectorMessage=site_url('cms/director_message');
             $SiteURLExpert=site_url('cms/expert');

            if($ActiveMenu=="home")
             {
            ?>
            <li><a href="<?php echo $SiteURLDashboard; ?>" class="" aria-expanded="false">
                         <div class="menu-icon">
                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                             </svg>
                         </div>
                         <span class="nav-text">Dashboard</span>
                     </a>
                 </li>

            <li class="mm-active"><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="nav-text">Home Page</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo $SiteURLSlider; ?>">Slider</a></li>
                    <li><a href="<?php echo $SiteURLAboutCompany; ?>">About Company</a></li>
                    <li><a href="<?php echo $SiteURLCountryOffer; ?>">Country Offer</a></li>
                    <li><a href="<?php echo $SiteURLVideo; ?>">Video</a></li>
                    <li><a href="<?php echo $SiteURLImmigrationService; ?>">Immigration Service</a></li>
                    <li><a href="<?php echo $SiteURLContact; ?>">Contact</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="nav-text">About Us</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo $SiteURLCompanyProfile; ?>">Company Profile</a></li>
                    <li><a href="<?php echo $SiteURLMissionVision; ?>">Mission, Vision, Goal</a></li>
                    <li><a href="<?php echo $SiteURLDirectorMessage; ?>">Director Message</a></li>
                    <li><a href="<?php echo $SiteURLExpert; ?>">Meet the Expert</a></li>
                </ul>
            </li>

                 <?php
                   $SiteURLStudentVisa=site_url('cms/student_visa');
                   $SiteURLWorkPermit=site_url('cms/work_permit');
                   $SiteURLTrainingVisa=site_url('cms/training_visa');
                   $SiteURLInvestmentVisa=site_url('cms/investment_visa');
                   $SiteURLTouristVisa=site_url('cms/tourist_visa');
                 ?>

                 <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                         <div class="menu-icon">
                             <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                             </svg>
                         </div>
                         <span class="nav-text">Visa&nbsp;Consultant</span>
                     </a>
                     <ul aria-expanded="false">
                         <li><a href="<?php echo $SiteURLStudentVisa; ?>">Student&nbsp;Visa</a></li>
                         <li><a href="<?php echo $SiteURLWorkPermit; ?>">Work&nbsp;permit&nbsp;Visa</a></li>
                         <li><a href="<?php echo $SiteURLTrainingVisa; ?>">Training&nbsp;Visa</a></li>
                         <li><a href="<?php echo $SiteURLInvestmentVisa; ?>">Investment&nbsp;Visa</a></li>
                         <li><a href="<?php echo $SiteURLTouristVisa; ?>">Tourist&nbsp;Visa</a></li>
                     </ul>
                 </li>

                 <?php
                 $SiteURLResumeBuilding=site_url('cms/resume_building');
                 $SiteURLInterviewMatching=site_url('cms/interview_matching');
                 $SiteURLInterviewPreparation=site_url('cms/interview_preparation');
                 $SiteURLCareerCounseling=site_url('cms/career_counseling');
                 $SiteURLHireStaff=site_url('cms/hire_staff');
                 ?>

                 <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                         <div class="menu-icon">
                             <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                             </svg>
                         </div>
                         <span class="nav-text">Job&nbsp;Recruitment</span>
                     </a>
                     <ul aria-expanded="false">
                         <li><a href="<?php echo $SiteURLResumeBuilding; ?>">Resume&nbsp;Building</a></li>
                         <li><a href="<?php echo $SiteURLInterviewMatching; ?>">Interview&nbsp;Matching</a></li>
                         <li><a href="<?php echo $SiteURLInterviewPreparation; ?>">Interview&nbsp;Preparation</a></li>
                         <li><a href="<?php echo $SiteURLCareerCounseling; ?>">Career&nbsp;Counseling</a></li>
                         <li><a href="<?php echo $SiteURLHireStaff; ?>">Hire&nbsp;Staff</a></li>
                     </ul>
                 </li>

                 <?php
                 $SiteURLCountryAustralia=site_url('cms/country_australia');
                 $SiteURLCountryNewZealand=site_url('cms/country_newzealand');
                 $SiteURLCountryCanada=site_url('cms/country_canada');
                 $SiteURLCountrySweden=site_url('cms/country_sweden');
                 $SiteURLCountryMalaysia=site_url('cms/country_malaysia');
                 ?>

                 <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                         <div class="menu-icon">
                             <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                             </svg>
                         </div>
                         <span class="nav-text">Country&nbsp;Serve</span>
                     </a>
                     <ul aria-expanded="false">
                         <li><a href="<?php echo $SiteURLCountryAustralia; ?>">Australia</a></li>
                         <li><a href="<?php echo $SiteURLCountryNewZealand; ?>">New Zealand</a></li>
                         <li><a href="<?php echo $SiteURLCountryCanada; ?>">Canada</a></li>
                         <li><a href="<?php echo $SiteURLCountrySweden; ?>">Sweden</a></li>
                         <li><a href="<?php echo $SiteURLCountryMalaysia; ?>">Malaysia</a></li>
                     </ul>
                 </li>


                 <?php
                 $SiteURLVisaCategory=site_url('cms/visa_category');
                 $SiteURLVisaAustralia=site_url('cms/visa_australia');
                 $SiteURLVisaNewZealand=site_url('cms/visa_newzealand');
                 $SiteURLVisaCanada=site_url('cms/visa_canada');
                 $SiteURLVisaSweden=site_url('cms/visa_sweden');
                 $SiteURLVisaMalaysia=site_url('cms/visa_malaysia');
                 ?>

                 <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                         <div class="menu-icon">
                             <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                             </svg>
                         </div>
                         <span class="nav-text">Apply for Visa</span>
                     </a>
                     <ul aria-expanded="false">
                         <li><a href="<?php echo $SiteURLVisaCategory; ?>">Visa Category</a></li>
                         <li><a href="<?php echo $SiteURLVisaAustralia; ?>">Australia</a></li>
                         <li><a href="<?php echo $SiteURLVisaNewZealand; ?>">New Zealand</a></li>
                         <li><a href="<?php echo $SiteURLVisaCanada; ?>">Canada</a></li>
                         <li><a href="<?php echo $SiteURLVisaSweden; ?>">Sweden</a></li>
                         <li><a href="<?php echo $SiteURLVisaMalaysia; ?>">Malaysia</a></li>
                     </ul>
                 </li>

                 <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                         <div class="menu-icon">
                             <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                             </svg>
                         </div>
                         <span class="nav-text">Header</span>
                     </a>
                     <ul aria-expanded="false">
                         <li><a href="#">Logo</a></li>
                         <li><a href="#">Menu</a></li>
                     </ul>
                 </li>
                 <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                         <div class="menu-icon">
                             <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                             </svg>
                         </div>
                         <span class="nav-text">Footer</span>
                     </a>
                     <ul aria-expanded="false">
                         <li><a href="#">Explore</a></li>
                         <li><a href="#">Visa</a></li>
                         <li><a href="#">Gallery</a></li>
                         <li><a href="#">Service</a></li>
                         <li><a href="#">Social</a></li>
                     </ul>
                 </li>

           <?php
             }
            elseif($ActiveMenu=="about")
            {
            ?>
                <li><a href="<?php echo $SiteURLDashboard; ?>" class="" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Home Page</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLSlider; ?>">Slider</a></li>
                        <li><a href="<?php echo $SiteURLAboutCompany; ?>">About Company</a></li>
                        <li><a href="<?php echo $SiteURLCountryOffer; ?>">Country Offer</a></li>
                        <li><a href="<?php echo $SiteURLVideo; ?>">Video</a></li>
                        <li><a href="<?php echo $SiteURLImmigrationService; ?>">Immigration Service</a></li>
                        <li><a href="<?php echo $SiteURLContact; ?>">Contact</a></li>
                    </ul>
                </li>
                <li class="mm-active"><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">About Us</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLCompanyProfile; ?>">Company Profile</a></li>
                        <li><a href="<?php echo $SiteURLMissionVision; ?>">Mission, Vision, Goal</a></li>
                        <li><a href="<?php echo $SiteURLDirectorMessage; ?>">Director Message</a></li>
                        <li><a href="<?php echo $SiteURLExpert; ?>">Meet the Expert</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLStudentVisa=site_url('cms/student_visa');
                $SiteURLWorkPermit=site_url('cms/work_permit');
                $SiteURLTrainingVisa=site_url('cms/training_visa');
                $SiteURLInvestmentVisa=site_url('cms/investment_visa');
                $SiteURLTouristVisa=site_url('cms/tourist_visa');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Visa&nbsp;Consultant</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLStudentVisa; ?>">Student&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLWorkPermit; ?>">Work&nbsp;permit&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTrainingVisa; ?>">Training&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLInvestmentVisa; ?>">Investment&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTouristVisa; ?>">Tourist&nbsp;Visa</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLResumeBuilding=site_url('cms/resume_building');
                $SiteURLInterviewMatching=site_url('cms/interview_matching');
                $SiteURLInterviewPreparation=site_url('cms/interview_preparation');
                $SiteURLCareerCounseling=site_url('cms/career_counseling');
                $SiteURLHireStaff=site_url('cms/hire_staff');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Job&nbsp;Recruitment</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLResumeBuilding; ?>">Resume&nbsp;Building</a></li>
                        <li><a href="<?php echo $SiteURLInterviewMatching; ?>">Interview&nbsp;Matching</a></li>
                        <li><a href="<?php echo $SiteURLInterviewPreparation; ?>">Interview&nbsp;Preparation</a></li>
                        <li><a href="<?php echo $SiteURLCareerCounseling; ?>">Career&nbsp;Counseling</a></li>
                        <li><a href="<?php echo $SiteURLHireStaff; ?>">Hire&nbsp;Staff</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLVisaCategory=site_url('cms/visa_category');
                $SiteURLCountryAustralia=site_url('cms/country_australia');
                $SiteURLCountryNewZealand=site_url('cms/country_newzealand');
                $SiteURLCountryCanada=site_url('cms/country_canada');
                $SiteURLCountrySweden=site_url('cms/country_sweden');
                $SiteURLCountryMalaysia=site_url('cms/country_malaysia');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Country&nbsp;Serve</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLVisaCategory; ?>">Visa Category</a></li>
                        <li><a href="<?php echo $SiteURLCountryAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLCountryNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLCountryCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLCountrySweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLCountryMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLVisaAustralia=site_url('cms/visa_australia');
                $SiteURLVisaNewZealand=site_url('cms/visa_newzealand');
                $SiteURLVisaCanada=site_url('cms/visa_canada');
                $SiteURLVisaSweden=site_url('cms/visa_sweden');
                $SiteURLVisaMalaysia=site_url('cms/visa_malaysia');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Apply for Visa</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLVisaAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLVisaNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLVisaCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLVisaSweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLVisaMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Header</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Logo</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Footer</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Visa</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Social</a></li>
                    </ul>
                </li>

            <?php }
            elseif($ActiveMenu=="VisaConsultant")
            {
            ?>
                <li><a href="<?php echo $SiteURLDashboard; ?>" class="" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Home Page</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLSlider; ?>">Slider</a></li>
                        <li><a href="<?php echo $SiteURLAboutCompany; ?>">About Company</a></li>
                        <li><a href="<?php echo $SiteURLCountryOffer; ?>">Country Offer</a></li>
                        <li><a href="<?php echo $SiteURLVideo; ?>">Video</a></li>
                        <li><a href="<?php echo $SiteURLImmigrationService; ?>">Immigration Service</a></li>
                        <li><a href="<?php echo $SiteURLContact; ?>">Contact</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">About Us</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLCompanyProfile; ?>">Company Profile</a></li>
                        <li><a href="<?php echo $SiteURLMissionVision; ?>">Mission, Vision, Goal</a></li>
                        <li><a href="<?php echo $SiteURLDirectorMessage; ?>">Director Message</a></li>
                        <li><a href="<?php echo $SiteURLExpert; ?>">Meet the Expert</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLStudentVisa=site_url('cms/student_visa');
                $SiteURLWorkPermit=site_url('cms/work_permit');
                $SiteURLTrainingVisa=site_url('cms/training_visa');
                $SiteURLInvestmentVisa=site_url('cms/investment_visa');
                $SiteURLTouristVisa=site_url('cms/tourist_visa');
                ?>

                <li class="mm-active"><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Visa&nbsp;Consultant</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLStudentVisa; ?>">Student&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLWorkPermit; ?>">Work&nbsp;permit&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTrainingVisa; ?>">Training&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLInvestmentVisa; ?>">Investment&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTouristVisa; ?>">Tourist&nbsp;Visa</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLResumeBuilding=site_url('cms/resume_building');
                $SiteURLInterviewMatching=site_url('cms/interview_matching');
                $SiteURLInterviewPreparation=site_url('cms/interview_preparation');
                $SiteURLCareerCounseling=site_url('cms/career_counseling');
                $SiteURLHireStaff=site_url('cms/hire_staff');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Job&nbsp;Recruitment</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLResumeBuilding; ?>">Resume&nbsp;Building</a></li>
                        <li><a href="<?php echo $SiteURLInterviewMatching; ?>">Interview&nbsp;Matching</a></li>
                        <li><a href="<?php echo $SiteURLInterviewPreparation; ?>">Interview&nbsp;Preparation</a></li>
                        <li><a href="<?php echo $SiteURLCareerCounseling; ?>">Career&nbsp;Counseling</a></li>
                        <li><a href="<?php echo $SiteURLHireStaff; ?>">Hire&nbsp;Staff</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLCountryAustralia=site_url('cms/country_australia');
                $SiteURLCountryNewZealand=site_url('cms/country_newzealand');
                $SiteURLCountryCanada=site_url('cms/country_canada');
                $SiteURLCountrySweden=site_url('cms/country_sweden');
                $SiteURLCountryMalaysia=site_url('cms/country_malaysia');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Country&nbsp;Serve</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLCountryAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLCountryNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLCountryCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLCountrySweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLCountryMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>


                <?php
                $SiteURLVisaCategory=site_url('cms/visa_category');
                $SiteURLVisaAustralia=site_url('cms/visa_australia');
                $SiteURLVisaNewZealand=site_url('cms/visa_newzealand');
                $SiteURLVisaCanada=site_url('cms/visa_canada');
                $SiteURLVisaSweden=site_url('cms/visa_sweden');
                $SiteURLVisaMalaysia=site_url('cms/visa_malaysia');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Apply for Visa</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLVisaCategory; ?>">Visa Category</a></li>
                        <li><a href="<?php echo $SiteURLVisaAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLVisaNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLVisaCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLVisaSweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLVisaMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Header</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Logo</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Footer</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Visa</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Social</a></li>
                    </ul>
                </li>

            <?php }
            elseif($ActiveMenu=="JobRecruitment")
            {
            ?>
                <li><a href="<?php echo $SiteURLDashboard; ?>" class="" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Home Page</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLSlider; ?>">Slider</a></li>
                        <li><a href="<?php echo $SiteURLAboutCompany; ?>">About Company</a></li>
                        <li><a href="<?php echo $SiteURLCountryOffer; ?>">Country Offer</a></li>
                        <li><a href="<?php echo $SiteURLVideo; ?>">Video</a></li>
                        <li><a href="<?php echo $SiteURLImmigrationService; ?>">Immigration Service</a></li>
                        <li><a href="<?php echo $SiteURLContact; ?>">Contact</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">About Us</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLCompanyProfile; ?>">Company Profile</a></li>
                        <li><a href="<?php echo $SiteURLMissionVision; ?>">Mission, Vision, Goal</a></li>
                        <li><a href="<?php echo $SiteURLDirectorMessage; ?>">Director Message</a></li>
                        <li><a href="<?php echo $SiteURLExpert; ?>">Meet the Expert</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLStudentVisa=site_url('cms/student_visa');
                $SiteURLWorkPermit=site_url('cms/work_permit');
                $SiteURLTrainingVisa=site_url('cms/training_visa');
                $SiteURLInvestmentVisa=site_url('cms/investment_visa');
                $SiteURLTouristVisa=site_url('cms/tourist_visa');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Visa&nbsp;Consultant</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLStudentVisa; ?>">Student&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLWorkPermit; ?>">Work&nbsp;permit&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTrainingVisa; ?>">Training&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLInvestmentVisa; ?>">Investment&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTouristVisa; ?>">Tourist&nbsp;Visa</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLResumeBuilding=site_url('cms/resume_building');
                $SiteURLInterviewMatching=site_url('cms/interview_matching');
                $SiteURLInterviewPreparation=site_url('cms/interview_preparation');
                $SiteURLCareerCounseling=site_url('cms/career_counseling');
                $SiteURLHireStaff=site_url('cms/hire_staff');
                ?>

                <li class="mm-active"><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Job&nbsp;Recruitment</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLResumeBuilding; ?>">Resume&nbsp;Building</a></li>
                        <li><a href="<?php echo $SiteURLInterviewMatching; ?>">Interview&nbsp;Matching</a></li>
                        <li><a href="<?php echo $SiteURLInterviewPreparation; ?>">Interview&nbsp;Preparation</a></li>
                        <li><a href="<?php echo $SiteURLCareerCounseling; ?>">Career&nbsp;Counseling</a></li>
                        <li><a href="<?php echo $SiteURLHireStaff; ?>">Hire&nbsp;Staff</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLCountryAustralia=site_url('cms/country_australia');
                $SiteURLCountryNewZealand=site_url('cms/country_newzealand');
                $SiteURLCountryCanada=site_url('cms/country_canada');
                $SiteURLCountrySweden=site_url('cms/country_sweden');
                $SiteURLCountryMalaysia=site_url('cms/country_malaysia');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Country&nbsp;Serve</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLCountryAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLCountryNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLCountryCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLCountrySweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLCountryMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>


                <?php
                $SiteURLVisaCategory=site_url('cms/visa_category');
                $SiteURLVisaAustralia=site_url('cms/visa_australia');
                $SiteURLVisaNewZealand=site_url('cms/visa_newzealand');
                $SiteURLVisaCanada=site_url('cms/visa_canada');
                $SiteURLVisaSweden=site_url('cms/visa_sweden');
                $SiteURLVisaMalaysia=site_url('cms/visa_malaysia');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Apply for Visa</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLVisaCategory; ?>">Visa Category</a></li>
                        <li><a href="<?php echo $SiteURLVisaAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLVisaNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLVisaCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLVisaSweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLVisaMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Header</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Logo</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Footer</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Visa</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Social</a></li>
                    </ul>
                </li>

            <?php }
            elseif($ActiveMenu=="CountryServe")
            {
            ?>
                <li><a href="<?php echo $SiteURLDashboard; ?>" class="" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Home Page</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLSlider; ?>">Slider</a></li>
                        <li><a href="<?php echo $SiteURLAboutCompany; ?>">About Company</a></li>
                        <li><a href="<?php echo $SiteURLCountryOffer; ?>">Country Offer</a></li>
                        <li><a href="<?php echo $SiteURLVideo; ?>">Video</a></li>
                        <li><a href="<?php echo $SiteURLImmigrationService; ?>">Immigration Service</a></li>
                        <li><a href="<?php echo $SiteURLContact; ?>">Contact</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">About Us</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLCompanyProfile; ?>">Company Profile</a></li>
                        <li><a href="<?php echo $SiteURLMissionVision; ?>">Mission, Vision, Goal</a></li>
                        <li><a href="<?php echo $SiteURLDirectorMessage; ?>">Director Message</a></li>
                        <li><a href="<?php echo $SiteURLExpert; ?>">Meet the Expert</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLStudentVisa=site_url('cms/student_visa');
                $SiteURLWorkPermit=site_url('cms/work_permit');
                $SiteURLTrainingVisa=site_url('cms/training_visa');
                $SiteURLInvestmentVisa=site_url('cms/investment_visa');
                $SiteURLTouristVisa=site_url('cms/tourist_visa');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Visa&nbsp;Consultant</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLStudentVisa; ?>">Student&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLWorkPermit; ?>">Work&nbsp;permit&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTrainingVisa; ?>">Training&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLInvestmentVisa; ?>">Investment&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTouristVisa; ?>">Tourist&nbsp;Visa</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLResumeBuilding=site_url('cms/resume_building');
                $SiteURLInterviewMatching=site_url('cms/interview_matching');
                $SiteURLInterviewPreparation=site_url('cms/interview_preparation');
                $SiteURLCareerCounseling=site_url('cms/career_counseling');
                $SiteURLHireStaff=site_url('cms/hire_staff');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Job&nbsp;Recruitment</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLResumeBuilding; ?>">Resume&nbsp;Building</a></li>
                        <li><a href="<?php echo $SiteURLInterviewMatching; ?>">Interview&nbsp;Matching</a></li>
                        <li><a href="<?php echo $SiteURLInterviewPreparation; ?>">Interview&nbsp;Preparation</a></li>
                        <li><a href="<?php echo $SiteURLCareerCounseling; ?>">Career&nbsp;Counseling</a></li>
                        <li><a href="<?php echo $SiteURLHireStaff; ?>">Hire&nbsp;Staff</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLCountryAustralia=site_url('cms/country_australia');
                $SiteURLCountryNewZealand=site_url('cms/country_newzealand');
                $SiteURLCountryCanada=site_url('cms/country_canada');
                $SiteURLCountrySweden=site_url('cms/country_sweden');
                $SiteURLCountryMalaysia=site_url('cms/country_malaysia');
                ?>

                <li class="mm-active"><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Country&nbsp;Serve</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLCountryAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLCountryNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLCountryCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLCountrySweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLCountryMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>


                <?php
                $SiteURLVisaCategory=site_url('cms/visa_category');
                $SiteURLVisaAustralia=site_url('cms/visa_australia');
                $SiteURLVisaNewZealand=site_url('cms/visa_newzealand');
                $SiteURLVisaCanada=site_url('cms/visa_canada');
                $SiteURLVisaSweden=site_url('cms/visa_sweden');
                $SiteURLVisaMalaysia=site_url('cms/visa_malaysia');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Apply for Visa</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLVisaCategory; ?>">Visa Category</a></li>
                        <li><a href="<?php echo $SiteURLVisaAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLVisaNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLVisaCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLVisaSweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLVisaMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Header</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Logo</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Footer</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Visa</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Social</a></li>
                    </ul>
                </li>

        <?php }
            elseif($ActiveMenu=="ApplyVisa")
            {
            ?>
                <li><a href="<?php echo $SiteURLDashboard; ?>" class="" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Home Page</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLSlider; ?>">Slider</a></li>
                        <li><a href="<?php echo $SiteURLAboutCompany; ?>">About Company</a></li>
                        <li><a href="<?php echo $SiteURLCountryOffer; ?>">Country Offer</a></li>
                        <li><a href="<?php echo $SiteURLVideo; ?>">Video</a></li>
                        <li><a href="<?php echo $SiteURLImmigrationService; ?>">Immigration Service</a></li>
                        <li><a href="<?php echo $SiteURLContact; ?>">Contact</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">About Us</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLCompanyProfile; ?>">Company Profile</a></li>
                        <li><a href="<?php echo $SiteURLMissionVision; ?>">Mission, Vision, Goal</a></li>
                        <li><a href="<?php echo $SiteURLDirectorMessage; ?>">Director Message</a></li>
                        <li><a href="<?php echo $SiteURLExpert; ?>">Meet the Expert</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLStudentVisa=site_url('cms/student_visa');
                $SiteURLWorkPermit=site_url('cms/work_permit');
                $SiteURLTrainingVisa=site_url('cms/training_visa');
                $SiteURLInvestmentVisa=site_url('cms/investment_visa');
                $SiteURLTouristVisa=site_url('cms/tourist_visa');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Visa&nbsp;Consultant</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLStudentVisa; ?>">Student&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLWorkPermit; ?>">Work&nbsp;permit&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTrainingVisa; ?>">Training&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLInvestmentVisa; ?>">Investment&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTouristVisa; ?>">Tourist&nbsp;Visa</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLResumeBuilding=site_url('cms/resume_building');
                $SiteURLInterviewMatching=site_url('cms/interview_matching');
                $SiteURLInterviewPreparation=site_url('cms/interview_preparation');
                $SiteURLCareerCounseling=site_url('cms/career_counseling');
                $SiteURLHireStaff=site_url('cms/hire_staff');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Job&nbsp;Recruitment</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLResumeBuilding; ?>">Resume&nbsp;Building</a></li>
                        <li><a href="<?php echo $SiteURLInterviewMatching; ?>">Interview&nbsp;Matching</a></li>
                        <li><a href="<?php echo $SiteURLInterviewPreparation; ?>">Interview&nbsp;Preparation</a></li>
                        <li><a href="<?php echo $SiteURLCareerCounseling; ?>">Career&nbsp;Counseling</a></li>
                        <li><a href="<?php echo $SiteURLHireStaff; ?>">Hire&nbsp;Staff</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLCountryAustralia=site_url('cms/country_australia');
                $SiteURLCountryNewZealand=site_url('cms/country_newzealand');
                $SiteURLCountryCanada=site_url('cms/country_canada');
                $SiteURLCountrySweden=site_url('cms/country_sweden');
                $SiteURLCountryMalaysia=site_url('cms/country_malaysia');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Country&nbsp;Serve</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLCountryAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLCountryNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLCountryCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLCountrySweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLCountryMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>


                <?php
                $SiteURLVisaCategory=site_url('cms/visa_category');
                $SiteURLVisaAustralia=site_url('cms/visa_australia');
                $SiteURLVisaNewZealand=site_url('cms/visa_newzealand');
                $SiteURLVisaCanada=site_url('cms/visa_canada');
                $SiteURLVisaSweden=site_url('cms/visa_sweden');
                $SiteURLVisaMalaysia=site_url('cms/visa_malaysia');
                ?>

                <li class="mm-active"><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Apply for Visa</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLVisaCategory; ?>">Visa Category</a></li>
                        <li><a href="<?php echo $SiteURLVisaAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLVisaNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLVisaCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLVisaSweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLVisaMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Header</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Logo</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Footer</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Visa</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Social</a></li>
                    </ul>
                </li>


            <?php }

            elseif($ActiveMenu=="Dashboard")
            {
                ?>

                <li class="mm-active"><a href="<?php echo $SiteURLDashboard; ?>" class="" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Home Page</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLSlider; ?>">Slider</a></li>
                        <li><a href="<?php echo $SiteURLAboutCompany; ?>">About Company</a></li>
                        <li><a href="<?php echo $SiteURLCountryOffer; ?>">Country Offer</a></li>
                        <li><a href="<?php echo $SiteURLVideo; ?>">Video</a></li>
                        <li><a href="<?php echo $SiteURLImmigrationService; ?>">Immigration Service</a></li>
                        <li><a href="<?php echo $SiteURLContact; ?>">Contact</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">About Us</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLCompanyProfile; ?>">Company Profile</a></li>
                        <li><a href="<?php echo $SiteURLMissionVision; ?>">Mission, Vision, Goal</a></li>
                        <li><a href="<?php echo $SiteURLDirectorMessage; ?>">Director Message</a></li>
                        <li><a href="<?php echo $SiteURLExpert; ?>">Meet the Expert</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLStudentVisa=site_url('cms/student_visa');
                $SiteURLWorkPermit=site_url('cms/work_permit');
                $SiteURLTrainingVisa=site_url('cms/training_visa');
                $SiteURLInvestmentVisa=site_url('cms/investment_visa');
                $SiteURLTouristVisa=site_url('cms/tourist_visa');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Visa&nbsp;Consultant</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLStudentVisa; ?>">Student&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLWorkPermit; ?>">Work&nbsp;permit&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTrainingVisa; ?>">Training&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLInvestmentVisa; ?>">Investment&nbsp;Visa</a></li>
                        <li><a href="<?php echo $SiteURLTouristVisa; ?>">Tourist&nbsp;Visa</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLResumeBuilding=site_url('cms/resume_building');
                $SiteURLInterviewMatching=site_url('cms/interview_matching');
                $SiteURLInterviewPreparation=site_url('cms/interview_preparation');
                $SiteURLCareerCounseling=site_url('cms/career_counseling');
                $SiteURLHireStaff=site_url('cms/hire_staff');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Job&nbsp;Recruitment</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLResumeBuilding; ?>">Resume&nbsp;Building</a></li>
                        <li><a href="<?php echo $SiteURLInterviewMatching; ?>">Interview&nbsp;Matching</a></li>
                        <li><a href="<?php echo $SiteURLInterviewPreparation; ?>">Interview&nbsp;Preparation</a></li>
                        <li><a href="<?php echo $SiteURLCareerCounseling; ?>">Career&nbsp;Counseling</a></li>
                        <li><a href="<?php echo $SiteURLHireStaff; ?>">Hire&nbsp;Staff</a></li>
                    </ul>
                </li>

                <?php
                $SiteURLCountryAustralia=site_url('cms/country_australia');
                $SiteURLCountryNewZealand=site_url('cms/country_newzealand');
                $SiteURLCountryCanada=site_url('cms/country_canada');
                $SiteURLCountrySweden=site_url('cms/country_sweden');
                $SiteURLCountryMalaysia=site_url('cms/country_malaysia');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Country&nbsp;Serve</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLCountryAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLCountryNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLCountryCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLCountrySweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLCountryMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>


                <?php
                $SiteURLVisaCategory=site_url('cms/visa_category');
                $SiteURLVisaAustralia=site_url('cms/visa_australia');
                $SiteURLVisaNewZealand=site_url('cms/visa_newzealand');
                $SiteURLVisaCanada=site_url('cms/visa_canada');
                $SiteURLVisaSweden=site_url('cms/visa_sweden');
                $SiteURLVisaMalaysia=site_url('cms/visa_malaysia');
                ?>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Apply for Visa</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo $SiteURLVisaCategory; ?>">Visa Category</a></li>
                        <li><a href="<?php echo $SiteURLVisaAustralia; ?>">Australia</a></li>
                        <li><a href="<?php echo $SiteURLVisaNewZealand; ?>">New Zealand</a></li>
                        <li><a href="<?php echo $SiteURLVisaCanada; ?>">Canada</a></li>
                        <li><a href="<?php echo $SiteURLVisaSweden; ?>">Sweden</a></li>
                        <li><a href="<?php echo $SiteURLVisaMalaysia; ?>">Malaysia</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Header</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Logo</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-text">Footer</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Visa</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Social</a></li>
                    </ul>
                </li>
        <?php
            }
            ?>




        </ul>
        <div class="help-desk">
            <a href="javascript:void(0)" class="btn btn-primary">Help Desk</a>
        </div>
    </div>
</div>