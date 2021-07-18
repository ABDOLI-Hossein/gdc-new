<?php
/**
 * Template Name: Home
 * Template Post Type: post, page
 */
get_header(); ?>


    <!--------------------------hero------------------>
    <div id="hero" class="col-12 p-0" style="background:url('<?php bloginfo('template_directory');?>/images/herobg.png') center no-repeat;background-size: cover">
        <div class="col-sm-10 col-11 mx-auto herobg p-0 text-center-m">
            <h1 class="d-none loaded">Gwinnett Dental Care</h1>
            <h2 class="d-none loaded">General Family and Cosmetic Dentistry</h2>

            <button class="d-none loaded btn align-items-center submit mt-4 hvr-icon-spin patient" type="submit" style="width: 207px;">
                <a href="<?php echo get_home_url(); ?>/?page_id=9" class="d-flex align-items-center">
                    <div class="green-circle3 hvr-icon mr-3" style="background-color: #FFFFFF">
                        <img class="img" src="<?php bloginfo('template_directory');?>/images/tell-hero.svg"   data-imghover="phone-call-w.svg"
                             data-imgnonhover="tell-hero.svg">
                    </div>
                    <h6>Contact Us</h6>
                </a>
            </button>

        </div>
    </div>

    <!------------------About Us---------------------->
    <div class="d-md-flex col-12" id="about-us" style="margin-top: 150px">
        <div id="aboutus-bg" class="col-sm-5 d-sm-none d-lg-block">
            <div class="d-block d-sm-none text-center-m">
                <h3 class="title">About us</h3>
                <img class="mx-auto d-block" src="<?php bloginfo('template_directory');?>/images/sep2.svg">
            </div>
            <img class="mt-5 mt-sm-0" src="<?php bloginfo('template_directory');?>/images/aboutus.png" style="max-width: 100%">
        </div>
        <div class="col-lg-6 pt-4 pt-sm-0">
            <div class="d-none d-sm-block">
                <h3 class="title">
                    About us
                </h3>
                <img src="<?php bloginfo('template_directory');?>/images/sep.png">
            </div>
            <p class="p mt-4">
                Welcome and Thank You for giving us the opportunity to share with you our commitment and love to excellent dental care and service.
            </p>
            <p class="p mt-4">
                We are a general family dental practice, providing care to patients of all ages since 2001.
            </p>
            <p class="p mt-4">
                The tradition of Preventive Dentistry is the basis for all services and treatments rendered at our office. Because of this conservative and traditional approach, you have our assurance that your treatment will be carried out in the most efficient way possible to preserve and maintain the highest level of oral health for you. According to our patients, the level of care and service they receive at our office gives them comfort and confidence to refer their family and friends to us. We would like to take this opportunity and welcome you to our practice.
            </p>
        </div>
    </div>
    <!-------------Treatments and Services-------------->
    <div class="col-sm-12 text-center" style="margin-top: 150px" id="treat">
        <h3 class="title mt-3">Treatments And Services</h3>
        <img src="<?php bloginfo('template_directory');?>/images/sep2.svg">
        <p class="p font-size-15 mt-3 col-9 p-0 mx-auto">As a general family dental practice we provide comprehensive dental care to our patients. We provide the following services. Please click the links below to display the related information.</p>
        <div  id="Treatments-sections" class="col-12 mt-5">
            <div class="d-sm-flex">
                <div class="d-flex col-12 col-sm-5 justify-content-end bbm">
                    <div class="patient d-flex">
                        <div class="text-right">
                            <a href="https://gwinnettdentalcare.com/?page_id=7#section1" class="font-size-16 ">Comprehensive Exam<br>
                                And X-Rays
                            </a>
                        </div>
                        <div class="pl-3">
                            <img class="img" src="<?php bloginfo('template_directory');?>/images/dental(1).svg"   data-imghover="dental(1)-w.svg"
                                 data-imgnonhover="dental(1).svg">
                        </div>
                    </div>
                </div>
                <div class="col-2 d-none d-sm-block"></div>
                <div class="d-flex col-sm-5 col-12  bbm">
                    <div class="d-flex patient">
                        <div class="pr-3">
                            <img class="img" src="<?php bloginfo('template_directory');?>/images/dentist(3).svg"   data-imghover="dentist(3)-w.svg"
                                 data-imgnonhover="dentist(3).svg">
                        </div>
                        <div class="">
                            <a href="https://gwinnettdentalcare.com/?page_id=7#section2" class="font-size-16">Emergency<br>
                                Dental Care</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-center">
                <div class="d-flex col-sm-4 col-12 justify-content-end  bbm">
                    <div class="d-flex patient">

                        <div class="text-right">
                            <a href="https://gwinnettdentalcare.com/?page_id=7#section12" class="font-size-16">Night guards<br class="d-block d-sm-none"> and<br class="d-none d-sm-block"> Retainers</a>
                        </div>
                        <div class="pl-3">
                            <img class="img" src="<?php bloginfo('template_directory');?>/images/dentist(4).svg"   data-imghover="dentist(4)-w.svg"
                                 data-imgnonhover="dentist(4).svg">
                        </div>
                    </div>
                </div>
                <div id="show-more" class="col-4 p-0 d-none d-sm-block" style="position: relative">
                    <div class="show-more" style="position: absolute;">
                        <a href="<?php echo get_home_url(); ?>/?page_id=7#section0">Show More<br><span>Services</span></a>
                    </div>
                    <img src="<?php bloginfo('template_directory');?>/images/chart.svg" class="img-fluid">

                </div>
                <div class="d-flex col-sm-4 col-12  bbm">
                    <div class="d-flex patient">

                        <div class="pr-3">
                            <img class="img" src="<?php bloginfo('template_directory');?>/images/toothbrush.svg"   data-imghover="toothbrush-w.svg"
                                 data-imgnonhover="toothbrush.svg">
                        </div>
                        <div class="text-left">
                            <a href="https://gwinnettdentalcare.com/?page_id=7#section3" class="font-size-16">Dental Cleaning<br>
                                /Hygiene
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex">
                <div class="d-flex col-sm-5 col-12 justify-content-end  bbm">
                    <div class="d-flex patient">

                        <div class="text-right">
                            <a href="https://gwinnettdentalcare.com/?page_id=7#section4" class="font-size-16">Treatment of Gum<br> Disease</a>
                        </div>
                        <div class="pl-3">
                            <img class="img" src="<?php bloginfo('template_directory');?>/images/healthcare-and-medical(1).svg"   data-imghover="healthcare-and-medical(1)-w.svg"
                                 data-imgnonhover="healthcare-and-medical(1).svg">
                        </div>

                    </div>
                </div>

                <div class="col-2 d-none d-sm-block"></div>
                <div class="d-flex col-sm-5 col-12 justify-content-start  bbm" style="border-bottom:none">
                    <div class="d-flex patient">

                        <div class="pr-3">
                            <img class="img"  src="<?php bloginfo('template_directory');?>/images/tooth(2).svg"   data-imghover="implant-w.svg"
                                 data-imgnonhover="tooth(2).svg">
                        </div>
                        <div class="text-left">
                            <a href="https://gwinnettdentalcare.com/?page_id=7#section9" class="font-size-16">Implant<br>
                                Restoration</a>
                        </div>

                    </div>
                </div>
                <!--				<section class="col-xs-12 show-more-services visible-xs">
                                    <a href="http://gdcnew.wpengine.com/#section0" class="a-button btn btn-primary">
                                        <div class="col-md-12 text-align-center">
                                            <p class="p-button-title font-size-15">show more services</p>
                                        </div>
                                    </a>
                                </section>-->
            </div>

        </div>
        <div class="d-sm-none d-block col-11 p-0 mx-auto">
            <a href="<?php echo get_home_url(); ?>/?page_id=7#section0" class="a-hover a-button btn w-100">

                <p class="p-button-title">Show More Services</p>
            </a>
        </div>
    </div>
    <!-------------Office Information------------------------->
    <div class="col-12 text-center mt-86" id="office-information" style="margin-top: 136px;background: url('<?php bloginfo('template_directory');?>/images/patientbg.png') no-repeat bottom;">
        <h3 class="title font-size-18">Office Information</h3>
        <img src="<?php bloginfo('template_directory');?>/images/sep2.svg">
        <p class="mt-4 p">For your convenience, before coming for your first visit, you can fill out the New Patient Forms at the comfort of your home.</p>
        <div class="col-10 col-lg-12 col-xl-10 mx-auto p-0 d-lg-flex"  style="margin-top: 70px;">

            <a class="col-3 p-0 zoom" style="height: fit-content">
                <div class="col-sm-11 office-information-boxshadow mb-5 mb-lg-0 patient"   data-toggle="modal" data-target="#modal1">
                    <div class="card">
                            <span class="img-card">
                                <img class="img" src="<?php bloginfo('template_directory');?>/images/Group%207508.svg" data-imghover="toothw.svg"
                                     data-imgnonhover="Group%207508.svg">
                            </span>
                        <div>
                            <h4 class="card-title office-information-boxtitle font-size-18">Dental Insurance</h4>
                            <p class="card-text office-information-boxtext margin-top-19 font-size-15">
                                At Gwinnett Dental Care, we are in network and participate with ...<br>


                                <!-- Button trigger modal -->
                                <button type="button"  data-toggle="modal" data-target="#modal1">
                                    Show More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23.197" height="14.041" viewBox="0 0 23.197 14.041">
                                        <g id="Group_20245" data-name="Group 20245" transform="translate(-13 0)">
                                            <g id="Group_20244" data-name="Group 20244">
                                                <path id="Path_28674" data-name="Path 28674" d="M35.865,6.219h0L29.947.33a1.132,1.132,0,0,0-1.6,1.605l3.973,3.953H14.132a1.132,1.132,0,1,0,0,2.265H32.321l-3.973,3.953a1.132,1.132,0,0,0,1.6,1.605l5.917-5.888h0A1.133,1.133,0,0,0,35.865,6.219Z" fill="#dfddc6"/>
                                            </g>
                                        </g>
                                    </svg>

                                </button>
                            </p>

                        </div>

                    </div>
                </div>

            </a>
            <a class="col-3 p-0 zoom mt-0 mt-sm-5">
                <div class="col-sm-11 office-information-boxshadow mb-5 mb-lg-0 patient"    data-toggle="modal" data-target="#modal2">
                    <div class="card">
                             <span class="img-card">
                                    <img class="img" src="<?php bloginfo('template_directory');?>/images/Group%207510.svg" data-imghover="moneyw.svg"
                                         data-imgnonhover="Group%207510.svg">
                             </span>
                        <div>
                            <h4 class="card-title office-information-boxtitle font-size-18">Financial Information</h4>
                            <p class="card-text office-information-boxtext margin-top-27 font-size-15">
                                Prior to having any treatment done at our practice, we go over all ...
                            </p>
                            <!-- Button trigger modal -->
                            <button  type="button"  data-toggle="modal" data-target="#modal2">
                                Show More
                                <svg xmlns="http://www.w3.org/2000/svg" width="23.197" height="14.041" viewBox="0 0 23.197 14.041">
                                    <g id="Group_20245" data-name="Group 20245" transform="translate(-13 0)">
                                        <g id="Group_20244" data-name="Group 20244">
                                            <path id="Path_28674" data-name="Path 28674" d="M35.865,6.219h0L29.947.33a1.132,1.132,0,0,0-1.6,1.605l3.973,3.953H14.132a1.132,1.132,0,1,0,0,2.265H32.321l-3.973,3.953a1.132,1.132,0,0,0,1.6,1.605l5.917-5.888h0A1.133,1.133,0,0,0,35.865,6.219Z" fill="#dfddc6"/>
                                        </g>
                                    </g>
                                </svg>

                            </button>
                        </div>

                    </div>
                </div>

            </a>
            <a class="col-3 p-0 zoom"  style="height: fit-content">

                <div class="col-sm-11 office-information-boxshadow mb-5 mb-lg-0 patient"    data-toggle="modal" data-target="#modal3">
                    <div class="card">
                            <span class="img-card">
                                <img class="img" src="<?php bloginfo('template_directory');?>/images/Group%207511.svg"  data-imghover="calendarw.svg"
                                     data-imgnonhover="Group%207511.svg">
                            </span>
                        <div>
                            <h4 class="card-title office-information-boxtitle font-size-18">Appointment Policy</h4>
                            <p class="card-text office-information-boxtext margin-top-27 font-size-15">
                                We welcome new patients. If you are a new patient and would like ...
                            </p>
                            <!-- Button trigger modal -->
                            <button  type="button"  data-toggle="modal" data-target="#modal3">
                                Show More
                                <svg xmlns="http://www.w3.org/2000/svg" width="23.197" height="14.041" viewBox="0 0 23.197 14.041">
                                    <g id="Group_20245" data-name="Group 20245" transform="translate(-13 0)">
                                        <g id="Group_20244" data-name="Group 20244">
                                            <path id="Path_28674" data-name="Path 28674" d="M35.865,6.219h0L29.947.33a1.132,1.132,0,0,0-1.6,1.605l3.973,3.953H14.132a1.132,1.132,0,1,0,0,2.265H32.321l-3.973,3.953a1.132,1.132,0,0,0,1.6,1.605l5.917-5.888h0A1.133,1.133,0,0,0,35.865,6.219Z" fill="#dfddc6"/>
                                        </g>
                                    </g>
                                </svg>

                            </button>
                        </div>

                    </div>
                </div>

            </a>
            <a class="col-3 p-0 zoom mt-0 mt-sm-5">
                <div  class="col-sm-11 office-information-boxshadow mb-5 mb-lg-0 patient"   data-toggle="modal" data-target="#modal4">
                    <div class="card">
                            <span class="img-card">
                                <img class="img" src="<?php bloginfo('template_directory');?>/images/Group%207512.svg"   data-imghover="clockw.svg"
                                     data-imgnonhover="Group%207512.svg">
                            </span>
                        <div>
                            <h4 class="card-title office-information-boxtitle font-size-18">Cancellation</h4>
                            <p class="card-text office-information-boxtext margin-top-19 font-size-15">
                                Please provide us with a minimum of 24 hour notice if you can’t keep ...
                            </p>
                            <!-- Button trigger modal -->
                            <button type="button"  data-toggle="modal" data-target="#modal4">
                                Show More
                                <svg xmlns="http://www.w3.org/2000/svg" width="23.197" height="14.041" viewBox="0 0 23.197 14.041">
                                    <g id="Group_20245" data-name="Group 20245" transform="translate(-13 0)">
                                        <g id="Group_20244" data-name="Group 20244">
                                            <path id="Path_28674" data-name="Path 28674" d="M35.865,6.219h0L29.947.33a1.132,1.132,0,0,0-1.6,1.605l3.973,3.953H14.132a1.132,1.132,0,1,0,0,2.265H32.321l-3.973,3.953a1.132,1.132,0,0,0,1.6,1.605l5.917-5.888h0A1.133,1.133,0,0,0,35.865,6.219Z" fill="#dfddc6"/>
                                        </g>
                                    </g>
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>

            </a>




            <!-- Modal1 -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Dental Insurance</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--                     <img class="mt-3 mb-3" src="<?php bloginfo('template_directory');?>/images/modal-sep.svg"> -->
                        <picture>
                            <source media="(max-width:414px)" srcset="<?php bloginfo('template_directory');?>/images/sepm.png">
                            <img class="mt-3 mb-3 w-100" src="<?php bloginfo('template_directory');?>/images/modal-sep.svg">
                        </picture>
                        <div class="modal-body">
                            <p>At Gwinnett Dental Care, we are in network and participate with most insurance companies’ Indemnity and PPO plans.  Companies we participate with are:
                            </p>
                            <p>Aetna, Ameritas, Assurant, BCBS of GA, Cigna, Connection Dental, Delta Dental, Delta Dental Premier, Dentemax, Guardian, Humana, Met Life, Mutual of Omaha, United Concordia, and United Healthcare, Cigna Access, and Aetna Access.
                            </p>
                            <p>Often the large insurance companies listed above have different plans that are listed under a different name. If you do not see the name of your dental insurance plan listed above, please call us for more info.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal1 -->
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content" style="margin-top: 15%">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Financial Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--                     <img class="mt-3 mb-3" src="<?php bloginfo('template_directory');?>/images/modal-sep.svg"> -->
                        <picture>
                            <source media="(max-width:414px)" srcset="<?php bloginfo('template_directory');?>/images/sepm.png">
                            <img class="mt-3 mb-3 w-100" src="<?php bloginfo('template_directory');?>/images/modal-sep.svg">
                        </picture>
                        <div class="modal-body">
                            <p>
                                Prior to having any treatment done at our practice, we go over all the financial aspect of your treatment with you. We want to make sure that financially you feel absolutely comfortable prior to committing to any of the recommended treatments.
                                If you have dental insurance, we will estimate your insurance coverage and your co-pay portion to the best of our ability. We are more than happy to file your insurance claim for you and your co-pay is always due at the time of your treatment.
                                You are responsible for providing us with your correct insurance information. This will enable us to properly and timely file your dental insurance claim on your behalf.
                                We also provide financing through Care Credit. If interested, please visit their website at <a href="http://www.CareCredit.com" class="green-text">www.CareCredit.com</a> or call us for more information.
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="financial">
                                    <img src="<?php bloginfo('template_directory');?>/images/mastercard.png" class="img-fluid">
                                </div>
                                <div class="financial">
                                    <img src="<?php bloginfo('template_directory');?>/images/visa.png" class="img-fluid">
                                </div>
                                <div class="financial">
                                    <img src="<?php bloginfo('template_directory');?>/images/discover.png" class="img-fluid">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal1 -->
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Appointment Policy</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--                     <img class="mt-3 mb-3" src="<?php bloginfo('template_directory');?>/images/modal-sep.svg"> -->
                        <picture>
                            <source media="(max-width:414px)" srcset="<?php bloginfo('template_directory');?>/images/sepm.png">
                            <img class="mt-3 mb-3 w-100" src="<?php bloginfo('template_directory');?>/images/modal-sep.svg">
                        </picture>
                        <div class="modal-body">
                            <p>
                                We welcome new patients. If you are a new patient and would like to make an appointment, please contact us and we will be more than happy to assist you with any questions you might have prior to your first visit.<br>
                                Our after hour emergency service is only available to our existing patients.

                            </p>
                            <p>
                                If you are a new patient with a dental emergency after our business hours, please seek assistance at a dental office or a medical clinic with available weekend and after hour emergency services.
                            </p>
                            <p>
                                To make an appointment, call 678-209-2273 or email us at <a href="mailto:info@gwinnettdentalcare.com" class="green-text">info@gwinnettdentalcare.com</a>. We will respond to your e-mail within the next business day
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal1 -->
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Cancellation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--                     <img class="mt-3 mb-3" src="<?php bloginfo('template_directory');?>/images/modal-sep.svg"> -->
                        <picture>
                            <source media="(max-width:414px)" srcset="<?php bloginfo('template_directory');?>/images/sepm.png">
                            <img class="mt-3 mb-3 w-100" src="<?php bloginfo('template_directory');?>/images/modal-sep.svg">
                        </picture>
                        <div class="modal-body">
                            <p>
                                Please provide us with a minimum of 24 hour notice if you can’t keep your appointment.<br>
                                We understand emergency situations happen and we ask you to let us know as soon as you find out you can’t make it to your appointment.

                            </p>
                            <p>
                                An appointment that is broken without any notice takes away precious time that can be utilized in assisting our other patients with possible emergency dental care.
                            </p>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
    <!----------------new patient forms----------------->
    <div class="col-12 d-sm-flex mx-auto" style="margin-top: 111px" id="patient">
        <div class="col-12 col-sm-5 d-sm-none d-md-block">
            <div class="d-block d-sm-none text-center-m">
                <h3 class="title">New Patient Forms</h3>
                <img class="mx-auto d-block" src="<?php bloginfo('template_directory');?>/images/sep2.svg">
            </div>
            <img src="<?php bloginfo('template_directory');?>/images/image-2.png" class="img-fluid" width="527" height="503">
        </div>
        <div class="col-12 col-md-6">
            <div class="d-none d-sm-block">
                <h2 class="title margin-bottom-22 font-size-18 mt-5">New Patient Forms</h2>
                <img src="<?php bloginfo('template_directory');?>/images/sep3.svg">
            </div>
            <p class="p font-size-15 mt-3">
                To make your first dental appointment quick and simple please fill out and submit the appropriate New Patient Forms.
            </p>
            <p class="p mt-3">
                You need to have Adobe Acrobat 8.0 or higher. These forms can be printed out on your local printer for completion by hand
            </p>
            <div class="col-12 d-lg-flex mt-5 p-0 text-center-m mb-5 mb-sm-0">
                <div class="col-lg-6 col-md-12 col-12 p-0 mb-4 mb-lg-0 up">

                    <a href="<?php echo get_home_url(); ?>/wp-content/uploads/2020/08/form-under18.pdf" class=" a-hover a-button btn col-11">
                        <p class="col-xs-8 p-button-title">Download PDF (Under 18)</p>
                    </a>

                </div>
                <div class="col-lg-6 col-md-12 col-12 p-0 mb-4 mb-sm-0 up">

                    <a href="<?php echo get_home_url(); ?>/wp-content/uploads/2020/08/form-adult.pdf" class="a-hover a-button btn col-11">

                        <p class="p-button-title">Download PDF (Adult)</p>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-------------------our team----------------------->
    <div class="col-12 mt-5" id="ourteam">
        <h3 class="title text-center">Our Team</h3>
        <img class="mx-auto d-block" src="<?php bloginfo('template_directory');?>/images/sep2.svg">

        <div class=" col-lg-12 col-xl-10 mx-auto d-sm-flex team mt-5 pb-4 pb-sm-0">
            <div class="col-sm-5 col-md-4 text-center">
                <img src="<?php bloginfo('template_directory');?>/images/maryam.jpg" width="233" height="322" style="margin-top: -20px">
                <div class="d-flex mt-5" style="justify-content: space-evenly">
                    <!--                     <div class="green-circle">
                        <img src="<?php bloginfo('template_directory');?>/images/twitter.svg">
                    </div> -->
                    <!-- 					<a href="https://www.facebook.com/GwinnettDentalCare">
					<div class="green-circle">
                        <img src="<?php bloginfo('template_directory');?>/images/facebook.svg">
                    </div>
					</a> -->

                    <a href="https://www.facebook.com/GwinnettDentalCare">
                        <button class="btn d-flex align-items-center submit hvr-icon-spin patient" type="submit" style="width: 190px;justify-content: flex-start;padding: 5px!important;">
                            <div class="green-circle3 hvr-icon mr-3" style="background-color: #FFFFFF">
                                <img class="img" src="<?php bloginfo('template_directory');?>/images/facebook(1)-g.svg"    data-imghover="facebook(1)-w.svg"
                                     data-imgnonhover="facebook(1)-g.svg">
                            </div>
                            <h6>Facebook</h6>
                        </button>
                    </a>





                    <!--                     <div class="green-circle">
                        <img src="<?php bloginfo('template_directory');?>/images/instagram.svg">
                    </div>
                    <div class="green-circle">
                        <img src="<?php bloginfo('template_directory');?>/images/linkedin.svg">
                    </div> -->
                </div>
            </div>
            <div class="col-sm-7 col-md-7 maryam pb-4 pt-4">
                <h4 class="mt-4 mt-lg-0" style="font-size: 20px;line-height: 30px;color: #BCD38B">Dr. Maryam Tabassian</h4>
                <p class="p-section-title">After receiving her Bachelor Degree in Biology and Chemistry and graduating Suma Cum Laude from Virginia Commonwealth University, Dr. Maryam Tabassian decided to pursue her lifelong ambition in healthcare by attending dental school.  She received her Doctoral degree in 2001, graduating Magna Cum Laude from Medical College of Virginia in Richmond. </p>
                <p class="p-section-title mt-4">She had the distinction of receiving the A.D. Williams Award and The Academy of Dental Materials Award in recognition of her excellence and outstanding achievements. Her passion for all aspects of dentistry, led her to become a general dentist and she has loved it ever since, one smile at a time. </p>
                <p class="p-section-title mt-4 mb-md-5 mb-xl-0">In her free time, Dr. Tabassian enjoys gardening, CrossFitting, and spending time with family and friends.</p>
            </div>
        </div>

        <div id="card" class="col-10 col-sm-12 col-xl-10 mx-auto d-sm-flex justify-content-between p-0 text-center" style="margin-top: 108px">
            <div class="emp-card center-block down">
                <img src="<?php bloginfo('template_directory');?>/images/emp1.png" alt="">
                <h6 class="green-text mt-3">Terri </h6>
                <p>Office Manager</p>
            </div>
            <div class="emp-card mt-5 center-block down">
                <img src="<?php bloginfo('template_directory');?>/images/emp5.png" alt="">
                <h6 class="green-text mt-3">Cindy</h6>
                <p>Front Office</p>
            </div>
            <div class="emp-card center-block down">
                <img src="https://gwinnettdentalcare.com/wp-content/uploads/2021/05/Linda-Hygienist.png" alt="" style="border-radius: 20px;">
                <h6 class="green-text mt-3">Linda</h6>
                <p>Hygienist</p>
            </div>
            <div class="emp-card mt-5 center-block down">
                <img src="https://gwinnettdentalcare.com/wp-content/uploads/2021/05/Stevie-Assistant.png" alt=""  style="border-radius: 20px;">
                <h6 class="green-text mt-3">Stevie</h6>
                <p>Assistant</p>
            </div>
            <!--             <div class="emp-card mt-5 center-block down">
                            <img src="https://gwinnettdentalcare.com/wp-content/uploads/2021/05/Stevie-Assistant.png" alt="" style="border-radius: 20px;">
                            <h6 class="green-text mt-3">Stevie</h6>
                            <p>Assistant</p>
                        </div> -->
            <div class="emp-card center-block down">
                <img src="https://gwinnettdentalcare.com/wp-content/uploads/2021/05/Carolyn-Assistant.png" alt="" style="border-radius: 20px;">
                <h6 class="green-text mt-3">Carolyn</h6>
                <p>Assistant</p>
            </div>

        </div>
    </div>
    <!--------------Testimonials------------------------>
    <div class="col-12 p-0" style="margin-top: 112px">
        <div class="col-lg-10 mx-auto text-center-m" style="max-height: 800px">
            <h4 class="title">Testimonials</h4>
            <img src="<?php bloginfo('template_directory');?>/images/sep.png" class="d-none d-sm-block">
            <img class="d-block d-sm-none mx-auto" src="<?php bloginfo('template_directory');?>/images/sep2.svg">
            <div class="mt-5">
                <div id="carousel1" class="owl-carousel owl-theme">
                    <div class="item col-12">
                        <div class="slider p-4">
                            <h6 class="green-text">
                                Casey K.
                            </h6>
                            <p>
                                I've been coming to this office for years and love the environment, staff, just everything. They learn who you are really quick and always happy and friendly. The staff have been there forever and treat you like an old friend. They don't try to sell you on products or procedures that you do not need or make you feel guilty. They definitely want you to feel comfortable and knowledgeable about your dental care in the office and at home.
                            </p>
                            <img class="mt-3" src="<?php bloginfo('template_directory');?>/images/virgul.svg" alt="">
                        </div>


                    </div>
                    <div class="item col-12">
                        <div class="slider p-4">
                            <h6 class="green-text">
                                N Sparrow
                            </h6>
                            <p>
                                I love this dental office! Starting with the front office Terry and Cindy are so friendly and always so welcoming. Kiki the chairside assistant is a sweetheart so kind, always going out of her way to make you comfortable. Dr Tabassian is very professional and has a gentle touch. And best of all is the hygienist Dee! She is amazing. She takes her time explaining everything she is doing. She is very meticulous with teeth cleaning! When I leave there I feel like I have gotten the Royal treatment! I first started going there because of my insurance now my whole family goes there. I definitely recommend GWINNETT DENTAL CARE!
                            </p>
                            <img class="mt-3" src="<?php bloginfo('template_directory');?>/images/virgul.svg" alt="">
                        </div>

                    </div>
                    <div class="item col-12">
                        <div class="slider p-4">
                            <h6 class="green-text">
                                Amanda Chase
                            </h6>
                            <p>
                                Wow! I am so blown away. I have put off going to the Dentist and handling some issues because I was so afraid of the sticker cost for the dental work. Not only did the Dentist help me figure out a plan of action but the amazing office staff helped me figure out the financial cost of my upcoming work. And I couldn’t believe how reasonable everything was. I feel embarrassed I wanted so long but I am so glad I found caring hands that will help me transform my smile and make me feel confident again with my smile!
                            </p>
                            <img class="mt-3" src="<?php bloginfo('template_directory');?>/images/virgul.svg" alt="">
                        </div>

                    </div>
                    <div class="item col-12">
                        <div class="slider p-4">
                            <h6 class="green-text">
                                Brittany T.
                            </h6>
                            <p>
                                I’ve been a patient here for over 15 years and drive 30 minutes to see them (when there are many offices much closer) because they are that good! Everyone is incredibly friendly, the hygienists clean quickly, and Dr. Tabassian is conservative but effective with her treatment approach.
                            </p>
                            <img class="mt-3" src="<?php bloginfo('template_directory');?>/images/virgul.svg" alt="">
                        </div>

                    </div>
                </div>
            </div>





        </div>
    </div>


<?php get_footer();?>