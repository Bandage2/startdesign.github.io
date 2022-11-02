   <section class="site-blog">
      <div class="">
        <div class="blog">
          <div class="container">
            <div class="row"> 
              <div class="col-sm-12">
                <div class="title">
                  <h2>Read the tech stories of
                    <a href="javascript:;" class="typewrite" data-period="2000" data-type='[  "the week" ]'> 
                    </a>
                  </h2>
                  <span class="sub-head spc-bt-sub-head">Trending  stories
                  </span>
                </div>
 
              </div> 
            </div>
            <?php
            include_once 'blog.php';
            ?>
            <div class="row" style= "display:none">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-right">
                <div class="card ">
                  <div class="card-block">
                    <h5>Web Design 
                    </h5>
                    <h4 class="card-title">Are You Still Not Using These Ultimate Adobe Tools for Web Design and Development?
                    </h4>
                    <p class="card-text">You are a creative web designer or thinker, But not getting the output which is in your mind. Now, this is time to  ...
                    </p>
                    <a class="btn-read-more" href="https://www.startdesigns.com/blog/are-you-still-not-using-these-ultimate-adobe-tools-for-web-design-and-development" target="blank">Read More 
                      <i class="fa fa-long-arrow-right" aria-hidden="true">
                      </i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-up">
                <div class="card ">
                  <div class="card-block">
                    <h5>Blogging 
                    </h5>
                    <h4 class="card-title">Free Project Management Tools To Track Work Process in Pandemic Time
                    </h4>
                    <p class="card-text">Managing a project in pandemic time becomes an uphill battle for project managers. Since, work from home (WFH) is becoming the priority of... 
                    </p>
                    <a class=" btn-read-more" href="https://www.startdesigns.com/blog/free-project-management-tools-to-track-work-process-in-pandemic-time/" target="blank">Read More 
                      <i class="fa fa-long-arrow-right" aria-hidden="true">
                      </i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-left">
                <div class="card ">
                  <div class="card-block">
                    <h5> E-Commerce
                    </h5>
                    <h4 class="card-title">Why Your e-Commerce Business Need A Website?
                    </h4>  
                    <p class="card-text">Do you know there are currently 4,208,571,287 users according to Internet World States (Source) those are searches query for services, products, businesses, information, and other content online. 
                    </p>
                    <a class="btn-read-more" href="https://www.startdesigns.com/blog/why-your-e-commerce-business-need-a-website/" target="blank">Read More 
                      <i class="fa fa-long-arrow-right" aria-hidden="true">
                      </i>
                    </a>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="form_contact" id="foooter_form">
        <div class="container">
            <div class="row">
                <div class="col-md-4 form_left">
                    <div class="heading-box">
                        <h2>Tell Us About Your Project</h2>
                        <p>Let’s discuss your project and find out what we can do to provide value.</p>
                    </div>
                    <div class="form_left_img">
                        <img src="img/form-gr.svg" alt="">
                    </div>
                </div>

                <div class="col-md-8 form_right">
                    <form class="footer-form-class" method="post" autocomplete="off" id="form_validate" novalidate="novalidate" action="enquiry_ajax.php">
                        <div id="responseMessage1"></div>
                        <div class="form-group col-sm-6 ">
                            <label> <span class="require_fields">*</span>Name
                            </label>
                            <div class="user-iccoo">
                              <i class="fa fa-user" aria-hidden="true">
                              </i>
                            </div>
                            <input type="text" class="form-control input-footer alphaonly" placeholder="Enter Your Name" id="name" name="name">
                        </div>
                        <div class="form-group col-sm-6">
                            <label> <span class="require_fields">*</span> Email
                            </label>
                            <div class="user-iccoo">
                              <i class="fa fa-envelope" aria-hidden="true">
                              </i>
                            </div>
                             <input type="email" class="form-control input-footer" placeholder="Enter Your Email Address" id="email" name="email" required="" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" aria-required="true">
                        </div>
                        <div class="form-group col-sm-6">
                            <label> <span class="require_fields">*</span> Phone Number
                            </label>
                            <div class="user-iccoo">
                              <i class="fa fa-phone" aria-hidden="true">
                              </i>
                            </div>
                            <input id="phone" maxlength="14" name="phone" type="text" class="required comm_phone_number form-control input-footer" placeholder="Enter Your Number">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>  Skype Id  
                            </label>
                            <div class="user-iccoo">
                              <i class="fa fa-skype" aria-hidden="true">
                              </i>
                            </div>
                            <input type="text" class="form-control input-footer" placeholder="Skype" id="skype_id" name="skype_id">
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="interested">Interested In
                            </label>
                            <div class="user-iccoo" id="interested">
                              <i class="fa fa-get-pocket" aria-hidden="true">
                              </i>
                            </div>
                            <select class="form-control input-footer" name="interested" id="interested">
                              <option value="">Choose any
                              </option>
                              <option value="Web Design ">Web Design 
                              </option>
                              <option value="Web Development">Web Development
                              </option>
                              <option value="Mobile App Development">Mobile App Development
                              </option>
                              <option value="Ecommerce Development">Ecommerce Development
                              </option>
                              <option value="Digital Marketing ">Digital Marketing 
                              </option>
                              <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Details
                            </label>
                            <div class="user-iccoo">
                              <i class="fa fa-comments-o" aria-hidden="true">
                              </i>
                            </div>
                            <textarea class="form-control input-footer" rows="4" placeholder="Your Description..." name="message" id="message" maxlength="250"></textarea>
                        </div>
                        <div class="checkbox col-sm-12">
                            <label>
                              <input type="checkbox" name="res_checkbox"> Receive new services &amp; offers regarding web, web-app, mobile app solutions.
                            </label>
                        </div>
                        <div class="checkbox col-sm-12">
                          <div class="g-recaptcha" id="recaptcha-1" data-sitekey="<?php echo SITE_KEY; ?>"></div>
                        </div>                        
                        <div class="col-sm-12">
                            <button type="submit" id="button" name="form_submit" class="btn">submit
                          </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="pdt-50 mian_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left_side">
                    <div class="left_side_one panel-group" id="accordion">
                        <div class="about panel panel-default" >                            
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="heading accordion-toggle rotate" data-toggle="collapse" 
                                        data-parent="#accordion" href="#collapse1">Company</a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse in"  id="collapse1">
                                    <div class="panel-body">
                                        <ul class="foot_link">                                       
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="contact-us.php">Contact Us</a></li>
                                            <li><a href="career.php">Career</a></li>                                                                       
                                        </ul>
                                    </div>
                                </div>                                                     
                        </div> 
                        
                        <div class="ecom_dev panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse2">Ecommerce Development</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse2">
                                <div class="panel-body">
                                    <ul class="foot_link">                                        
                                        <li><a href="prestashop-development-company.php">Prestashop Development</a></li>
                                        <li><a href="magento-development-company.php">Magento Development</a></li>
                                        <li><a href="webflow-development-agency.php">Webflow Development</a></li>
                                        <li><a href="contact-us.php">BigCommerce Development</a></li>
                                        <li><a href="contact-us.php">OpenCart Development</a></li>
                                        <li><a href="contact-us.php">WooCommerce Development</a></li>
                                        <li><a href="drupal-development-services.php">Drupal Development</a></li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>

                        <div class="mapp_dev panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse3">Mobile App Development</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse3">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                        <li><a href="iphone-app-development.php">iPhone App Development</a></li>
                                        <li><a href="android-app-development-company.php">Android App Development</a></li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>

                        <div class="web_dev panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse4">Web Development</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse4">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                        <li><a href="php-development-services.php">PHP Development</a></li>                                        
                                        <li><a href="wordpress-development-services.php">Wordpress Development</a></li>
                                        <li><a href="ruby-on-rails-development.php">Ruby on Rails Development</a></li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="left_side_two">                        
                        <div class="resources panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse5">Resources</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse5">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                        <li><a href="/blog/index.php">Blog</a></li>
                                        <li><a href="portfolio.php">Portfolio</a></li>                                        
                                    </ul>
                                </div>
                            </div>                            
                        </div>   
                        
                        <div class="web_design panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse6">Web Design</a>
                                </h4>
                            </div>      
                            <div class="panel-collapse collapse"  id="collapse6">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                        <li><a href="contact-us.php">Mobile App Design</a></li>
                                        <li><a href="contact-us.php">Ecommerce Website Design</a></li>
                                        <li><a href="contact-us.php">Web App Design</a></li>                                        
                                        <li><a href="contact-us.php">Landing Page Design</a></li>
                                    </ul>
                                </div>
                            </div>                         
                        </div>

                        <!-- <div class="fstack_dev panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse7">Full Stack Development</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse7">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                        <li><a href="contact-us.php">PHP Development</a></li>
                                        <li><a href="contact-us.php">React Development</a></li>
                                        <li><a href="contact-us.php">Angular Development</a></li>
                                    </ul>
                                </div>
                            </div>                            
                        </div> -->

                        <div class="marketing panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse10">Marketing</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse10">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                        <li><a href="contact-us.php">Search Engine Optimization (SEO)</a></li>
                                        <li><a href="contact-us.php">Social Media Optimization (SMO)</a></li>
                                        <li><a href="contact-us.php">Pay Per Click (PPC)</a></li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>

                        <div class="paygat_way panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse7">Payment Gateway Integration</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse7">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                    	<li><div class="payment_icon"><img src="img/paypal-icon.png"></div>
                                            <a href="paypal-payment-gateway-integration.php">Paypal Integration</a>
                                        </li>
                                        <li><div class="payment_icon"><img src="img/stripe-icon.png"></div>
                                            <a href="stripe-payment-gateway-integration.php">Stripe Integration</a>
                                        </li>
                                        <li><div class="payment_icon"><img src="img/mangopay.png"></div>
                                            <a href="mangopay-payment-gateway-integration.php">Mangopay Integration</a>
                                        </li>
                                        <li><div class="payment_icon"><img src="img/alma.png"> </div>
                                            <a href="alma-payment-gateway-integration.php">Alma Integration</a>
                                        </li>
                                        <li><div class="payment_icon"><img src="img/monetico.png"></div>
                                            <a href="contact-us.php">Monetico Integration</a>
                                        </li>
                                        <li><div class="payment_icon"><img src="img/CMI-logo.png"></div>
                                            <a href="contact-us.php">CMI Integration</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right_side">
                    <div class="right_side_one">

                        <div class="hiremob panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse8">Hire Moblie App Developer</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse8">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                        <li><a href="hire-iphone-app-developer.php">Hire iPhone App Developer</a></li>
                                        <li><a href="hire-android-app-developer.php">Hire Android App Developer</a></li>
                                        <li><a href="contact-us.php">Hire Hybrid  App Developer</a></li>
                                        <li><a href="contact-us.php">Hire Web App Developer</a></li>
                                    </ul>
                                </div>
                            </div>                            
                        </div> 
                        
                        <div class="hireexpert panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse9">Hire Experts</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse9">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                        <li><a href="shopify-experts.php">Shopify Expert</a></li>
                                        <li><a href="webflow-experts.php">Webflow Expert</a></li>
                                        <li><a href="wordpress-experts.php">WordPress Expert</a></li>
                                        <li><a href="prestashop-experts.php">Prestashop Expert</a></li>
                                        <li><a href="ui-ux-experts.php">UI/UX Expert</a></li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>

                        <div class="graphic_design panel panel-default graphic-mb">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse12">Graphic Design Services</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse11">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                        <li><a href="contact-us.php">Logo Design</a></li>
                                        <li><a href="contact-us.php">Banner Design</a></li>                                        
                                    </ul>
                                </div>
                            </div>                           
                        </div>

                        
                    </div>

                    <div class="right_side_two">
                          <div class="graphic_design panel panel-default latest-tech">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse12">Latest Technologies</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse12">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                        <li><a href="web3-js-development.php">Web3.js</a></li>
                                        <li><a href="reactjs-development-services.php">React.js</a></li>
                                        <li><a href="angularjs-development.php">Angular.js</a></li>
                                        <li><a href="vuejs-development-company.php">Vue.js</a></li>
                                    </ul>
                                </div>
                            </div>                           
                        </div>
                        <div class="hireweb panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="heading accordion-toggle" data-toggle="collapse" 
                                    data-parent="#accordion" href="#collapse11">Hire Web Developer</a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse"  id="collapse11">
                                <div class="panel-body">
                                    <ul class="foot_link">
                                        <li><a href="hire-php-developers.php">Hire PHP Developer</a></li>                                        
                                        <li><a href="hire-drupal-developer.php">Hire Drupal Developer</a></li>
                                        <li><a href="hire-ruby-on-rails-developer.php">Hire Ruby on Rails Developer</a></li>
                                        <li><a href="hire-wordpress-developer.php">Hire Wordpress Developer</a></li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>   
                        
                        

                    </div>

                    <div class="contact_info">
                        <p class="contact_head">Contact Info</p>

                        <div class="contact_body">
                            <a href="mailto:info@startdesigns.com">
                            <img src="img/mail.svg" alt="mail">
                            <p class="labl">Sales:</p>
                            <p class="value">info@startdesigns.com</p>   
                        </a>
                        </div>
                        <div class="contact_body">
                            <a href="skype:+start10designs">
                            <img src="img/skype.svg" alt="skype">
                            <p class="labl">Skype Id:</p>
                            <p class="value">start10designs</p>
                            </a>
                        </div>
                        <div class="contact_body">
                            <img src="img/telephone.svg" alt="phone">
                            <p class="labl">Business No:</p>
                            <p class="value">+91 141-4044287</p>
                        </div>
                        <div class="contact_body">
                            <img src="img/global.svg" alt="mail">
                            <p class="labl">Our Global Presence: </p>
                            <div class="flags">
                                <img src="img/india.svg" alt="flag">
                                <img src="img/france-flag.svg" alt="flag">
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </footer>
    <section class="copyright_footer">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 footer_bottom">
                    <p>© Copyright 2015 - 2022. All Rights Reserved.</p>
                    <div class="made-india">
                      <p>Made In India</p>                      
                          <img src="img/india.svg" alt="flag">                      
                    </div>
                    <ul class="social_icon">
                        <li><a target="_blank" rel="me" href="https://www.facebook.com/startdeesigns.vipin/">
                      <i class="fa fa-facebook">
                      </i>
                    </a></li>
                        <li> <a target="_blank" rel="me" href="https://twitter.com/startdeesigns">
                      <i class="fa fa-twitter">
                      </i>
                    </a></li>
                        <li><a target="_blank" rel="me" href="https://www.youtube.com/channel/UCOKOnzXQgHeicjofeDI0tLw">
                      <i class="fa fa-youtube">
                      </i>
                    </a></li>
                        <li><a target="_blank" rel="me" href="https://in.linkedin.com/company/start-designs">
                      <i class="fa fa-linkedin">
                      </i>
                    </a></li>
                        <li><a target="_blank" rel="me" href="https://www.behance.net/startdesigns">
                      <i class="fa fa-behance" aria-hidden="true">
                      </i>
                    </a></li>
                        <li><a target="_blank" rel="me" href="https://dribbble.com/start10designs">
                      <i class="fa fa-dribbble" aria-hidden="true">
                      </i>
                    </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- ---------start project model starts------------ -->

 <div class="modal fade start_model" id="startproject" tabindex="-1" role="dialog" aria-labelledby="startprojectLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">      
        <!-- <h5 class="modal-title" id="startprojectLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      
      <div class="modal-body">
        <div class="col-md-12 right-body">
          <h2 class="hide-on-small">Start a Project</h2>
          <form id="top_validate" class="form-start" method="post" autocomplete="off" action="project_enquiry_ajax.php">
            <div id="responseMessage2"></div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name">              
            </div> 

            <div class="dblfield">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">              
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">              
              </div>
            </div>

            <div class="dblfield">  
              <?php  
                if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){   
                  $page_url = "https://";   
                }else{
                  $page_url = "http://";   
                }
                $page_url.= $_SERVER['HTTP_HOST'];  
                
                $page_url.= $_SERVER['REQUEST_URI']; 
              ?>            
              <!-- <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">              
              </div>  -->
              <div class="form-group">
                <label for="bname">Business Name</label>
                <input type="text" class="form-control" id="bname" name="bname" placeholder="Enter Business Name">
                <input type="hidden" id="subject" name="subject" value="Start a Project">
                <input type="hidden" id="page_url" name="page_url" value="<?php echo $page_url; ?>">              
              </div>  
              <div class="form-group">
                <label for="pbudget">Project Budget</label>
                <!-- <select class="form-control" name="item"> -->
                     <select class="form-control" name="pbudget" id="pbudget">
                  <option value="">Choose any</option>
                  <option>$1000-$5000</option>
                  <option>$5000-$20000</option>
                  <option>$20000-$50000</option>
                  <option>$50000+</option>
                </select>              
              </div>            
            </div>

              <div class="form-group">
                <label for="timeline">Timeline</label>
                <select class="form-control" name="timeline">
                  <option value="">Choose any</option>
                  <option>1 Month</option>
                  <option>2-4 Months</option>
                  <option>4-6 Months</option>
                  <option>6+ Months</option>
                </select>              
              </div>
                                 
                        
            <div class="form-group">
              <label for="message">Project Description</label>
              <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tell us about your project"></textarea>
            </div>
            <div class="form-group">
              <?php if(isset($_SERVER['REQUEST_URI']) && strlen(trim($_SERVER['REQUEST_URI']))>2){ ?>
              <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
              <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
          </form>

          <div class="modl_footer">
                        <div class="contact_body">
                            <div class="contac_icon"><img src="images/email-cont.png" alt="mail"></div>                           
                            <p class="value">info@startdesigns.com</p>
                        </div>
                        <div class="contact_body">
                            <div class="contac_icon"><img src="images/skype-cont.png" alt="skype"> </div>                           
                            <p class="value">start10designs</p>
                        </div>
                        <div class="contact_body">
                            <div class="contac_icon"><img src="images/call-cont.png" alt="phone"> </div>                          
                            <p class="value">+91 141-4044287</p>
                        </div>  
        </div>
        </div>        
      </div>     
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.js">
</script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="js/bootstrap.min.js" defer>
</script>
<script src="js/owl.carousel.min.js" defer>
</script>
<script src="js/script.js" defer>
</script>
<script src="js/slick.min.js" defer>
</script> 
<script src="js/jquery.validate.min.js">
</script>
<script src="js/additional-methods.min.js">
</script>
<!--  <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/additional-methods.js">
</script> -->
<script href="js/modernizr-custom.js"></script>
    


<script type="text/javascript">
$(document).ready(function(){


  (function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      //console.log(this.value);
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  };
}(jQuery));
$(".comm_phone_number").inputFilter(function(value) {
  return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 9999999999); 
});


var previouSlide = 0;
const $slider = $(".main-slide-show");
$slider.on('init', () => {
  mouseWheel($slider)
}
          )
  .slick({
  dots: true,
  horizontal:true,
  infinite: false,
  prevArrow: null,
  nextArrow: null,
  edgeFriction: null,
  speed: 1500,
  autoplay: false,
  cssEase: 'linear',
});
function mouseWheel($slider) {
  $slider.on('wheel', {
    $slider: $slider }
             , mouseWheelHandler),
   $slider.on('click', { $slider: $slider }, mouseClickHandler)
}
function mouseWheelHandler(e) {
  e.preventDefault()
  const $slider = e.data.$slider
  const delta = e.originalEvent.deltaY;
  if(delta > 0) {
    $slider.slick('slickNext')
    const lisA = document.querySelector('li.slick-active a').style.width = '100%';
    const lisButton = document.querySelector('li.slick-active button').style.pointerEvents = 'none';
  }
  else {
    $('li.slick-active').find('a').css('width','0%')
    $slider.slick('slickPrev');
  }
}
function mouseClickHandler(e) {
  e.preventDefault()
  const $slider = e.data.$slider
  const delta = e.originalEvent.deltaY;
  var currentSlide = $slider.slick('slickCurrentSlide');
  console.log(previouSlide);
console.log(currentSlide);
  if(currentSlide > previouSlide ) {
    $slider.slick('slickNext')
    const lisA = document.querySelector('li.slick-active a').style.width = '100%';
    const lisButton = document.querySelector('li.slick-active button').style.pointerEvents = 'none';
  }
  else {
    $('li.slick-active').find('a').css('width','0%')
    $slider.slick('slickPrev');
  }
  previouSlide = currentSlide;
}
});

$(document).ready(function(){
  $('.slick-dots li').append('<a></a>');
  const btnss = document.querySelectorAll('.slick-dots li button');
  btnss.forEach((lisBtnss, i)=>{
    lisBtnss.addEventListener('click', function(e){
      e.target.style.pointerEvents = 'none';
      let lisa = lisBtnss.nextSibling;
      if(lisa.style.width == 0){
        lisa.style.width = '100%';
      }
    });
  });
var clickButton = $("button[id*='slick-slide-control']").css('pointer-events', 'none');
setInterval(function(){
  var zz = $('.slick-dots li.slick-active').next('li').children('button').css('pointer-events', 'auto');
} , 1000);
$('.slick-dots li button').on('click', function(e){
  e.stopPropagation();
  // use this
});
});

$(document).ready(function(){
  $("#testimonial-slider").owlCarousel({
    items:1,
    itemsDesktop:[1000,2],
    itemsDesktopSmall:[979,2],
    itemsTablet:[767,2],
    pagination:false,
    transitionStyle:"fade",
    navigation:true,
    navigationText:["",""],
    autoPlay:true
  });
});



// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> 
<!-- -testimony silder- -->
<script>
  $(document).ready(function(){
    $('#review-slider').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,  
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    767: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})
  })
</script>

<script>
function init() {
  var vidDefer = document.getElementById('sd_video_box');
  var sdVedoDrc = vidDefer.getAttribute('data-src');
  vidDefer.setAttribute('src', sdVedoDrc);
}
setTimeout(function(){
  window.onload = init();
} , 3000);
</script>  
    <!-- ================== -->
<!--<script>
(function(i,s,o,g,r,a,m){
  i['GoogleAnalyticsObject']=r;
  i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)}
    ,i[r].l=1*new Date();
  a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];
  a.async=1;
  a.src=g;
  m.parentNode.insertBefore(a,m)
}
)(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-67094806-1', 'auto');
ga('send', 'pageview');
</script>-->

<script type="text/javascript">
  $(document).ready(function(){
  $(".add-get-bodyclass").click(function(){
    $(".homebody").addClass("getqueto-scrool");
  });

  $(".close-popupbtns").click(function(){
    $(".homebody").removeClass("getqueto-scrool");
  });
});
</script>

<!-- <script>
$(document).ready(function(){
    
  var url = window. location.href;
  if(url == 'https://www.startdesigns.com/')
  {
    alert(url);
    document.getElementsByTagName('meta')["keywords"].content = "My new page keywords!!";
    document.getElementsByTagName('meta')["description"].content = "My new page description!!";
    document.title = "My new Document Title!!";
  }

})
</script> -->
    <!-- ---------start project model ends------------ -->

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

<!--     <script src="js/bootstrap.min.js">
</script> -->
   <!-- <script src="js/jquery-1.11.1.min.js">
</script> -->
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> -->
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script> -->
<script>
$(document).ready(function() {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
     return this.optional(element) || /^[a-z\s]+$/i.test(value);
 });
     $("#form_validate").validate({
    
        rules: {

        name: {
                    required: true,
                    lettersonly: true,
                },
                email: {
                    required: true,
                },
                 phone: {
                    required: true,
                    number: true,
                    maxlength: 14,
                },
                // skype_id: {
                //     required: true,
                // },
                interested: {
                    required: true,
                },
                message: {
                    required: true,
                }
                 },


                 messages:{
                    name: {
                        required: "Please enter name",
                        lettersonly: "Please enter a valid name"
                    },
                    email: {
                        required: "Please enter email"
                         },
                         phone: {
                            required: "Please enter phone no.",
                             number: "Please enter valid number"
                        },
                    },
        submitHandler: function(form,e) {
            e.preventDefault();
            console.log('Form submitted'); 
            $.ajax({
                type: 'POST',
                url: 'enquiry_ajax.php',
                data: $('#form_validate').serialize(),
                success: function(response) {
                    $('.footer-form-class')[0].reset();
                    
                    response = JSON.parse(response);
                    $("#responseMessage1").html('<div id="responseMessage">'+response.message+'</div>');
                    setTimeout(function(){
                        $("#responseMessage1").html('');
                    },3000)
                },
            });
        }
    });

});  

</script>

<script type='text/javascript'>
$(document).ready(function() {
jQuery.validator.addMethod("lettersonly", function(value, element) {
return this.optional(element) || /^[a-z\s]+$/i.test(value);
 });
     $("#top_validate").validate({
    
        rules: {

        name: {
                    required: true,
                    lettersonly: true,
                },
                email: {
                    required: true,
                },
                 phone: {
                    required: true,
                    number: true,
                    maxlength: 14,
                },
                subject: {
                    required: true,
                },
                 bname: {
                    required: true,
                },
                 subject: {
                    required: true,
                },
                 pbudget: {
                    required: true,
                },

                 timeline: {
                    required: true,
                },

                message: {
                    required: true,
                }

                 },

                 messages:{
                    name: {
                        required: "Please enter name",
                        lettersonly: "Please enter a valid name"
                    },
                    email: {
                        required: "Please enter email"
                         },
                         phone: {
                            required: "Please enter phone no."
                        },
                    },
        submitHandler: function(form,e) {
            e.preventDefault();
            console.log('Form submitted');
            $.ajax({
                type: 'POST',
                url: 'project_enquiry_ajax.php',
                data: $('#top_validate').serialize(),
                success: function(response) {
                    $('.form-start')[0].reset();
                    response = JSON.parse(response);
                    console.log(response.status);
                    if(response.status){
                      $("#responseMessage2").html('<div id="responseMessage">'+response.message+'</div>');
                    }else{
                      $("#responseMessage2").html('<div id="responseMessage" style="color: red;">'+response.message+'</div>');
                    }
                    
                    setTimeout(function(){
                        $("#responseMessage2").html('');
                    },3000)
                },
            });
        }
    });

});  

</script>

<script>
 $(document).ready(function() {
  jQuery.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0}');
    jQuery.validator.addMethod("lettersonly", function(value, element) {
     return this.optional(element) || /^[a-z\s]+$/i.test(value);
 });
     $("#inquiryForm").validate({
    
        rules: {

        name: {
                    required: true,
                    lettersonly: true,
                },
                email: {
                    required: true,
                },
                 phone: {
                    required: true,
                    number: true,
                    maxlength: 14,
                }
                 },


                 messages:{
                    name: {
                        required: "Please enter name",
                        lettersonly: "Please enter a valid name"
                    },
                    email: {
                        required: "Please enter email"
                         },
                         phone: {
                            required: "Please enter phone no."
                        },
                    },
        submitHandler: function(form,e) {
            e.preventDefault();
            console.log('Form submitted');
            $.ajax({
                type: 'POST',
                url: 'quote_ajax.php',
                data: $('#inquiryForm').serialize(),
                success: function(response) {
                  //console.log(1234);
                    $('.get-quote')[0].reset();     
                    response = JSON.parse(response);
                    $("#responseMessage1").html('<div id="responseMessage">'+response.message+'</div>');
                    setTimeout(function(){
                        $("#responseMessage1").html('');
                    },3000)
                },
            });
        }
    });

});  
</script>

    <script>                            
        $(document).ready(function(){
            $(".panel").click(function(){
                $(this).children(".panel-collapse").toggleClass("in");
                $(this).find(".accordion-toggle").toggleClass("rotate");
            });
           
        });
    </script>
    <script>
var acc = document.getElementsByClassName("accordion-faq");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active-faq");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
    <!-- ----start project Model---- -->
<script>
  $('#projectmodel').on('shown.bs.modal', function () {
  $('#startproject').trigger('focus')
})
</script>

<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/20621720.js"></script>
<!-- End of HubSpot Embed Code -->
  