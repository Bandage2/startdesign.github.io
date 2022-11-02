 <?php

if(stripos($_SERVER['REQUEST_URI'], '404.php') == false){ ?>
  <script>
    window.location.href='https://www.startdesigns.com/404.php';
  </script>  
  <?php 
  die();
}
 

 include('header.php'); ?>
<!--#include file="header.shtml"-->
          <div class="no-touch m-nav-menusocial">
            <div id="menusocial" class="menu--social1">
              <div class="toggle--social">
                <span class="soundspeaker-icon">
                </span>
              </div>
              <ul class="menu--sub">
                <li class="menu__item--facebook"> 
                  <a target="_blank" itemprop="samAs" class="menu-link sub-menu-link social_event_track_cls" data-title="Facebook" href="#">
                    <i>
                    </i>HB on Facebook
                  </a> 
                </li>
                <li class="menu__item--twitter"> 
                  <a target="_blank" itemprop="samAs"  class="menu-link sub-menu-link social_event_track_cls" data-title="Twitter" href="#">
                    <i>
                    </i> HB on Twitter 
                  </a> 
                </li>
                <li class="menu__item--linkdin"> 
                  <a target="_blank" itemprop="samAs"  class="menu-link sub-menu-link social_event_track_cls" data-title="LinkedIn" href="#">
                    <i>
                    </i>HB on Linkedin
                  </a> 
                </li>
                <li class="menu__item--google-p"> 
                  <a target="_blank" itemprop="samAs"  class="menu-link sub-menu-link social_event_track_cls" data-title="Google Plus" href="#">
                    <i>
                    </i>HB on Google+
                  </a> 
                </li>
                <li class="menu__item--youtube"> 
                  <a target="_blank" itemprop="samAs"  class="menu-link sub-menu-link social_event_track_cls" data-title="You Tube" href="#">
                    <i>
                    </i>HB on Youtube
                  </a> 
                </li>
                <li class="menu__item--blog"> 
                  <a target="_blank" itemprop="samAs"  class="menu-link sub-menu-link social_event_track_cls" data-title="Blog" href="#">
                    <i>
                    </i>HB on Blog
                  </a> 
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="top-container" style="display:none;">
          <div class="centerdiv">
            <div class="left"> 
              <a href="#" title=""> 
                <img src="images/logo.png" width="261" height="51" alt="" class="logo" /> 
              </a> 
            </div>
            <div class="right" style="width:72%;">
              <div class="r-clear menu-display">
                <div class="search-div">
                  <input type="search" placeholder="Search" name="" />
                </div>
                <span class="link-area">
                  <a target="_blank" title="" href="#">Blog
                  </a>
                  <a title="" href="#" target="_blank">Articles
                  </a>
                  <a title="" href="#">FAQ
                  </a>
                  <a title="" href="#">Careers
                  </a> 
                  <a title="Contact" href="#">Contact
                  </a> 
                  <a title="" href="#">Partnership
                  </a>
                </span> 
              </div>
              <div class="r-clear topmenu">
                <div class="mobile-tablet-menu">
                  <a href="#" class="mobile-menu-home-iclass" id="mobile-menu-home-icon">
                  </a>
                  <div class="mobile-menu-home-contner" id="mobile-menu-home">
                    <ul>
                      <li>
                        <a title="Company" href="#">Company
                        </a>
                      </li>
                      <li>
                        <a title="" href="#">Services
                        </a>
                      </li>
                      <li>
                        <a title="" href="#">Technology
                        </a>
                      </li>
                      <li>
                        <a title="" href="#">Products
                        </a>
                      </li>
                      <li>
                        <a title="" href="#">Client
                        </a>
                      </li>
                      <li>
                        <a title="Work" class="work-menu" href="#">Work
                        </a>
                      </li>
                      <li>
                        <a title="Inquiry" href="#" id="inquiry-pop-up" class="active">Get Quote
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <ul class="menu-t-menu-new">
                  <li>
                    <a title="startdesigns InfoTech" href="#">
                      <span class="home">
                      </span>
                    </a> 
                  </li>
                  <li>
                    <a title="Company" href="#">Company
                    </a> 
                  </li>
                  <li>
                    <a title="Services" href="#">Services
                    </a> 
                  </li>
                  <li>
                    <a title="Technology" href="#">Technology
                    </a> 
                  </li>
                  <li>
                    <a href="#">Products
                    </a> 
                  </li>
                  <li>
                    <a title="Work" href="#">Work
                    </a> 
                  </li>
                  <li>
                    <a title="Inquiry" href="#">Get Quote
                    </a> 
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>



    <section class="service-topbanner prestashopskyblue errorpage">
        <div class="container">
           
            <div class="row service-flex">
                <div class="col-md-6">
                  <div class="mainservicetopbanner">
                    
                    <h1>ERROR</h1>
                    <h3>PAGE NOT FOUND!</h3>
                    <p>The page you are looking for was moved, removed, renamed
                        or might never existed. Don’t worry, you can find us using following links
               </p>
                    <div class="dflex">
                      <a href="#foooter_form" class="btn btn-contactsupport">Go Home →</a>
                      <a href="#" class="btn btn-startproject" id="projectmodel" data-toggle="modal" data-target="#startproject">Contact Us →</a>
                    </div>
                   
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="rightside-topbanner wpbanner-top">
                    <img src="images/tarun-1.png">
                  </div>
                </div>
            </div>
        
        </div>
      </section>






<?php include('footer.php'); ?>
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
  $(document).ready(function(){
    $('#prestachoose-slider').owlCarousel({
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
      items: 2
    },
    1000: {
      items: 4
    }
  }
})
  })
</script>


</body>
</html>
