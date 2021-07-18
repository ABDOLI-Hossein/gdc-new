<?php
/**
 * Template Name: Contact us
 * Template Post Type: post, page
 */
get_header(); ?>
<div class="col-12">
    <!---------Boxes------------------------>
    <h3 class="title text-center mt-5">Contact Us</h3>
    <img class="mx-auto d-block" src="<?php bloginfo('template_directory');?>/images/sep2.svg">
    <div class="col-xl-10 col-12 d-sm-flex mx-auto justify-content-between p-0 mt-5 text-center-m contactUsMarginTop">
        <div class="box-items height-142 align-items-center text-center" style="width: 326px">
            <div class="d-flex justify-content-center">
                <div class="green-circle4"  style="margin-top: -10%;">
                    <img src="<?php bloginfo('template_directory');?>/images/tell-icon2.svg" class="hvr-icon">
                </div>
            </div>

            <div class="mt-3">
                <h5>Phone Number</h5>
                <a href="tel: 678-209-2273">
                    <h6 class="pt-2">
                        678-209-2273
                    </h6>
                </a>
            </div>
        </div>
        <div class="box-items height-142 align-items-center text-center mt-5" style="width: 326px">
            <div class="d-flex justify-content-center">
                <div class="green-circle4" style="margin-top: -10%;">
                    <img src="<?php bloginfo('template_directory');?>/images/email-icon2.svg" class="hvr-icon">
                </div>
            </div>

            <div class="mt-3">
                <h5>Email Address</h5>
                <a href="mailto:info@gwinnettdenta lcare.com">
                    <h6 class="pt-2" id="email">
                        info@gwinnettdentalcare.com
                    </h6>
                </a>
            </div>
        </div>
        <div class="box-items height-142 align-items-center text-center mt-5 mt-sm-0" style="width: 326px">
            <div class="d-flex justify-content-center">
                <div class="green-circle4" style="margin-top: -10%;">
                    <img src="<?php bloginfo('template_directory');?>/images/fax-icon2.svg" class="hvr-icon">
                </div>
            </div>

            <div class="mt-3">
                <h5>Fax Number</h5>
                <h6 class="pt-2">
                    678-209-2275
                </h6>
            </div>
        </div>
    </div>
    <!---------------------------------------------------->
    <div class="green-box col-10 col-md-12 col-xl-10 mx-auto p-3 p-sm-0" style="margin-top: 125px">


        <div class=" d-md-flex p-3 align-items-center" style="justify-content: space-evenly">
            <div class="col-12 col-sm-auto d-flex align-items-center justify-content-center p-0">
                <img src="<?php bloginfo('template_directory');?>/images/clock3.svg" class="pr-3 pr-sm-0">
            </div>

            <div class="pl-sm-4 pl-0  p-0" style="justify-content: space-evenly;" id="gbox-md">
                <div class="pr-0 pr-md-4 pr-lg-0 d-md-flex" style="justify-content: space-between">
                    <h6>Office Hours :<br class="d-block d-sm-none"> Mon - Wed<br class="d-block d-sm-none"> 6:00 AM - 3:00 PM</h6>
                    <h6>Closed :<br class="d-block d-sm-none"> Thursday, Friday, Saturday, Sunday</h6>
                </div>
                <p>For after hours emergencies (ONLY AVAILABLE TO PATIENTS OF RECORD) please call <a href="tel:678-209-2273" style="color:#ffffff" id="phone-hover">678-209-2273</a> for detail.</p>
            </div>
        </div>


    </div>
    <!-------------------------------------->
    <div class="col-12" style="background: url('<?php bloginfo('template_directory');?>/images/formbg.png') left no-repeat">
        <div class="col-12  mx-auto d-flex p-0 text-center-m" style="margin-top: 50px;">
            <div class="col-lg-5 col-md-6 d-none d-sm-block">
                <img src="<?php bloginfo('template_directory');?>/images/message.png" class="pt-3 img-fluid">
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <!--                 <h2 class="title font-size-18">Send us a message</h2>
                <picture>
                    <source media="(max-width:414px)" srcset="<?php bloginfo('template_directory');?>/images/sep2.svg">
                    <img src="<?php bloginfo('template_directory');?>/images/sep3.svg">
                </picture>



                <form class="mt-4" id="form">
                    <div class="form-row">
                        <div class="col-12 col-sm-6 mb-3">
                            <input type="text" class="form-control name"  placeholder="Name"  required>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <input type="text" class="form-control"  placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" id="validationDefault05" placeholder="Subject" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message"  rows="6"></textarea>
                    </div>
                    <button class="btn d-flex align-items-center submit mt-4 hvr-icon-spin" type="submit">
                        <div class="green-circle3" style="background-color: #FFFFFF">
                            <img src="<?php bloginfo('template_directory');?>/images/message.svg" class="hvr-icon">
                        </div>
                        <h6>Submit</h6>
                    </button>
                </form> -->

                <div id="RwRequestAppointment" class="rw-request-appointment" data-secondid="bbf744d0-9c18-47af-9fe0-2514fae80ede"></div>




            </div>
        </div>
    </div>





</div>

<?php get_footer(); ?>
