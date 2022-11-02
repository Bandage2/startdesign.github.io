<?php
    require('constant.php');
?>
<!doctype html>

<html lang="en-us" style="scroll-behavior: smooth;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <?php $page_name=basename($_SERVER[ 'PHP_SELF']); if($page_name=='index.php' && $page_name) { ?>
    <title>Best Web Design Agency - StartDesigns</title>
    <?php } elseif ($page_name=='ecommerce-website-development.php' && $page_name) { ?>
    <title>Ecommerce Website Development Company - StartDesigns</title>
     <?php } elseif ($page_name=='about-us.php' && $page_name) { ?>
    <title>About Us - StartDesigns</title>
    <?php } elseif ($page_name=='website-development-company.php' && $page_name) { ?>
    <title>Website Development Company | Web Development Services - StartDesigns</title>
    <?php } elseif ($page_name=='web-design-company.php' && $page_name) { ?>
    <title>Web Design Company | UI/UX Design Services - StartDesigns</title>
    <?php } elseif ($page_name=='mobile-app-development-agency.php' && $page_name) { ?>
    <title>Mobile App Development Agency - StartDesigns</title>
    <?php } elseif ($page_name=='internet-marketing-services.php' && $page_name) { ?>
    <title>Internet Marketing Services - StartDesigns</title>
    <?php } elseif ($page_name=='hire-iphone-app-developer.php' && $page_name) { ?>
    <title>Hire iPhone App Developers and Programmers - StartDesigns</title>
    <?php } elseif ($page_name=='hire-android-app-developer.php' && $page_name) { ?>
    <title>Hire Android App Developer - StartDesigns</title>
    <?php } elseif ($page_name=='hire-php-developers.php' && $page_name) { ?>
    <title>Hire PHP Developer or Dedicated Programmer - StartDesigns</title>
    <?php } elseif ($page_name=='hire-drupal-developer.php' && $page_name) { ?>
    <title>Hire Drupal Developer and Experts - StartDesigns</title>
    <?php } elseif ($page_name=='hire-wordpress-developer.php' && $page_name) { ?>
    <title>Hire WordPress Developer with 10+ Years Experience - StartDesigns</title>
    <?php } elseif($page_name=='hire-magento-developer.php' && $page_name) { ?>
    <title>Hire Magento Developer | Certified Magento Developers - StartDesigns</title>
    <?php } elseif ($page_name=='hire-ruby-on-rails-developer.php' && $page_name) { ?>
    <title>Hire Ruby on Rails Developer - StartDesigns</title>
    <?php } elseif ($page_name=='hire-ui-ux-designer-from-india.php' && $page_name) { ?>
    <title>Hire UI/UX Designer | A Creative Web Design Agency</title>
    <?php } elseif ($page_name=='hire-shopify-developer.php' && $page_name) { ?>
    <title>Hire Shopify Developer and Expert - StartDesigns</title>


    <?php } elseif ($page_name=='wordpress-development-services.php' && $page_name) { ?>
    <title>WordPress Development Services - StartDesigns</title>
    <?php } elseif ($page_name=='webflow-development-agency.php' && $page_name) { ?>
    <title> Webflow Agency for Design and Development Webflow Website</title>
    <?php } elseif ($page_name=='webflow-experts.php' && $page_name) { ?>
    <title>Webflow Experts | Webflow Design Development Company </title>
    <?php } elseif ($page_name=='shopify-experts.php' && $page_name) { ?>
    <title>Hire Shopify Experts | Certified Shopify Developers</title>
    <?php } elseif ($page_name=='prestashop-experts.php' && $page_name) { ?>
    <title>Prestashop Experts | Hire Certified Prestashop Agency</title>
    <?php } elseif ($page_name=='alma-payment-gateway-integration.php' && $page_name) { ?>
    <title>Hire Developer for Alma Payment Gateway Integration</title>
    <?php } elseif ($page_name=='mangopay-payment-gateway-integration.php' && $page_name) { ?>
    <title>Mangopay Payment Gateway Integration Service - StartDesigns</title>
    <?php } elseif ($page_name=='ui-ux-experts.php' && $page_name) { ?>
    <title>Hire UI UX Experts | UI UX Design Services - StartDesigns</title>
    <?php } elseif ($page_name=='php-development-services.php' && $page_name) { ?>
    <title>PHP Development Services | Core PHP Development Company</title>
    <?php } elseif ($page_name=='vuejs-development-company.php' && $page_name) { ?>
    <title>Vue.js Development Company | Hire Vue JS Developers</title>
    <?php } elseif ($page_name=='web3-js-development.php' && $page_name) { ?>
    <title>Web3.js Development Services | Hire Web3 JS Developers</title>
    <?php } elseif ($page_name=='angularjs-development.php' && $page_name) { ?>
    <title>AngularJs Development Services | Best AngularJS Company</title>
    <?php } elseif ($page_name=='reactjs-development-services.php' && $page_name) { ?>
    <title>ReactJs Development Services |  ReactJS Development Company</title>
    <?php } elseif ($page_name=='wordpress-experts.php' && $page_name) { ?>
    <title>Hire WordPress Experts | WordPress Expert Developers</title>
    <?php } elseif ($page_name=='paypal-payment-gateway-integration.php' && $page_name) { ?>
    <title>PayPal Integration Solution | PayPal REST API Integration</title>
    <?php } elseif ($page_name=='stripe-payment-gateway-integration.php' && $page_name) { ?>
    <title>Stripe Integration Solution | Stripe API Integration</title>
    <?php } elseif ($page_name=='ruby-on-rails-development.php' && $page_name) { ?>
    <title>Ruby on Rails Development | RoR Development Services</title>
    <?php } elseif ($page_name=='iphone-app-development.php' && $page_name) { ?>
    <title>iPhone App Development Company - StartDesigns</title>
    <?php } elseif ($page_name=='android-app-development-company.php' && $page_name) { ?>
    <title>Android App Development Company- StartDesigns</title>
    <?php } elseif ($page_name=='magento-development-company.php' && $page_name) { ?>
    <title>Magento Development Company - StartDesigns</title>
    <?php } elseif ($page_name=='prestashop-development-company.php' && $page_name) { ?>
    <title>PrestaShop Development Company - StartDesigns</title>

    <?php } else { ?>
    <title>Top Web and Mobile App Development Company - START DESIGNS</title>
    <?php } ?>
   
    <meta name="format-detection" content="telephone-no">

  

    <?php $page_name=basename($_SERVER[ 'PHP_SELF']); if($page_name=='index.php' && $page_name) { ?>
    <meta name="description" content="StartDesigns, a leading Web Design Agency. Our designers able to design a web application, eCommerce site, and mobile apps." />
    <meta name="keywords" content="offshore development company, offshore IT services, outsource software development, software development solution, mobile app ui design, ux/ui designer, ux and ui, best mobile ui design, best app ui design, mobile ux design, web designer UK, web designer, web designing company UK, web designing company USA, web design and development, logo design company, web development services, graphic designer, e-commerce web design" />
    <?php } elseif ($page_name=='prestashop-development-company.php' && $page_name) { ?>
    <meta name="description" content="StartDesigns, PrestaShop development company for cutting-edge e-commerce development. We offer PrestaShop web development solutions for businesses" />
    <?php } elseif ($page_name=='magento-development-company.php' && $page_name) { ?>
    <meta name="description" content="StartDesigns a Magento development company since 2015. We offer advanced Magento development services for e-commerce startups, SMBs, and enterprises." />
    <?php } elseif ($page_name=='ecommerce-website-development.php' && $page_name) { ?>
    <meta name="description" content="StartDesgins, a trusted Ecommerce Website Development Company. Our developers provide best eCommerce solutions and service for businesses." />
    <meta name="keywords" content="ecommerce web development, ecommerce web design company, ecommerce web development services, ecommerce website designing company,ecommerce web design and development, ecommerce website development, ecommerce website designing, best ecommerce website designers" />
    <?php } elseif ($page_name=='about-us.php' && $page_name) { ?>
    <meta name="description" content="Since 2015 StartDesigns has been providing complete IT solutions for more than 150+ clients USA and UK. Completed 500+ projects and won 10 awards." />
    <meta name="keywords" content="ecommerce web development, ecommerce web design company, ecommerce web development services, ecommerce website designing company,ecommerce web design and development, ecommerce website development, ecommerce website designing, best ecommerce website designers" />
    <?php } elseif ($page_name=='website-development-company.php' && $page_name) { ?>
    <meta name="description" content="StartDesigns, a company providing website development services. We have a team of world-class web developers and also provide website maintenance services." />
    <meta name="keywords" content="best web development company, web development agency, website development services, website development company, web development company, web design company, web development company, web app development company" />
    <?php } elseif ($page_name=='web-design-company.php' && $page_name) { ?>
    <meta name="description" content="Top web design company for the last 5 years. We are a web design agency with 700+ satisfied customers by our creative UI/UX designers." />
    <meta name="keywords" content="website designing company, website designing, website design company, website design services, best website designing company, web design company, website design agency usa, web design agency, website design and developemnt company" />
    <?php } elseif ($page_name=='mobile-app-development-agency.php' && $page_name) { ?>
    <meta name="description" content="StartDesigns - Leading Mobile App Development Agency. Our dedicated developers make custom android and ios mobile applications." />
    <meta name="keywords" content="mobile app development agency, mobile app development company, cross platform mobile app development, custom mobile app development, ios mobile app development, android mobile app development, mobile web app development, top mobile app developers, app development cost" />
    <?php } elseif ($page_name=='internet-marketing-services.php' && $page_name) { ?>
    <meta name="description" content="We are a leading Internet Marketing Services. We offer SEO, SMO, PPC, and complete digital marketing solutions for all businesses and niches." />
    <meta name="keywords" content="internet marketing agency, online marketing services, online marketing agency, internet marketing services, digital marketing consultant, digital marketing agency, digital marketing company, best digital marketing company, search engine marketers, b2b digital marketing, digital marketing experts, digital marketing services, seo services company, affordable seo services, search engine optimization company, local seo services" />
    <?php } elseif ($page_name=='hire-iphone-app-developer.php' && $page_name) { ?>
    <meta name="description" content="Looking to hire iPhone app developer and programmer? StartDesigns is the right place online where you can hire dedicated iphone or ios developer." />
    <meta name="keywords" content="hire iphone app developer, hire ios developer, hire ios app developer, hire iphone developer, hire iphone app programmer, iphone app developers for hire" />
    <?php } elseif ($page_name=='hire-android-app-developer.php' && $page_name) { ?>
    <meta name="description" id="metaTag" content="Hire Android App Developer USA - Get your custom android app build by top android app developers who employed advanced technology for high performance." />
    <meta name="keywords" content="hire android app developer from USA, hire android application developer, android app development" />
    <?php } elseif ($page_name=='hire-php-developers.php' && $page_name) { ?>
    <meta name="description" id="metaTag" content="Hire PHP developer or programmer from StartDesigns who can develop your website back-end components, connect apps with web services and more." />
    <meta name="keywords" content="hire php programmer, php programmers, hire php developer, hire php developers USA, hire php developers, hire php developer USA, hire dedicated php developers, hire dedicated php developer, hire php developers online" />
    <?php } 

    elseif ($page_name=='webflow-development-agency.php' && $page_name) { ?>
    <meta name="description" id="metaTag" content="StartDesigns, a Webflow agency for design and development of Webflow websites since 2015. We are a Webflow partner agency for custom Webflow solutions." />
    <meta name="keywords" content="webflow development company, webflow development agency, hire php programmer, php programmers, hire php developer, hire php developers USA, hire php developers, hire php developer USA, hire dedicated php developers, hire dedicated php developer, hire php developers online" />
    <?php }

    elseif ($page_name=='hire-drupal-developer.php' && $page_name) { ?>
    <meta name="description" id="metaTag" content="Hire Drupal Developer & Expert for complete drupal development solutions. StartDesigns, a leading agency to hire from USA. We completed over 500 projects." />
    <meta name="keywords" content="hire drupal developer USA, hire drupal developer, drupal development company, drupal development company usa, drupal development agency, hire drupal expert from USA" />
    <?php } elseif ($page_name=='hire-wordpress-developer.php' && $page_name) { ?>
    <meta name="description" content="Hire WordPress developers with 10+ years of experience for custom WordPress website development, theme, and plugin implementation from StartDesigns." />
    <meta name="keywords" content="hire wordpress developer from USA, hire dedicated wordpress developer from USA, wordpress development services usa, hire wordpress developer, hire a wordpress developer, wordpress developer for hire" />
    <?php } elseif ($page_name=='hire-magento-developer.php' && $page_name) { ?>
    <meta name="description" content="Hire Magento developers for your eCommerce website development and maintenance. StartDesigns provides a full-stack Magento solution." />
    <meta name="keywords" content="hire magento developer, magento development company, magento ecommerce development, magento website development, magento development services, magento agency" />
    <?php } elseif ($page_name=='hire-ruby-on-rails-developer.php' && $page_name) { ?>
    <meta name="description" content="Hire dedicated Ruby on Rails Developers hourly basis USA. Our RoR developer can develop a complex reliable and scalable web application for your business." />
    <meta name="keywords" content="hire ruby on rails developer, ruby on rails development company, ruby on rails website development, outsource ruby on rails development, ror development services, ruby on rails web app" />
    <?php } elseif ($page_name=='hire-ui-ux-designer-from-india.php' && $page_name) { ?>
    <meta name="description" content="StartDesigns, We have USA's most creative UI/UX designer to hire. We have complete 500+ projects internationally for 150+ clients. We also won 10 awards globally." />
    <meta name="keywords" content="hire ui/ux designer from USA, ui and ux design company, ui and ux design agency, website design agency, hire website designer online" /><?php } 

 

    elseif ($page_name=='shopify-experts.php' && $page_name) { ?>
    <meta name="description" content="Hire Shopify experts or certified Shopify developers for complete Shopify store design and development solutions USA. Opt StartDesigns to get Shopify help." />
    <?php } elseif ($page_name=='prestashop-experts.php' && $page_name) { ?>
    <meta name="description" content="Hire Prestashop experts from Prestashop certified agency USA. We have offered complete Prestashop design and development services since 2015." />
    <?php } elseif ($page_name=='webflow-experts.php' && $page_name) { ?>
    <meta name="description" content="Hire Webflow experts to get your Webflow website ready. StartDesigns, a certified Webflow website design and development company since 2015." />
    <?php } elseif ($page_name=='wordpress-development-services.php' && $page_name) { ?>
    <meta name="description" content="Advanced WordPress development services from the best WordPress development company USA. StartDesigns offers complete WordPress solutions." />
    <?php } elseif ($page_name=='alma-payment-gateway-integration.php' && $page_name) { ?>
    <meta name="description" content="Hire a developer for Alma Payment Gateway Integration on your website. StartDesigns offers high-quality assistance to France based clients." />
    <?php } elseif ($page_name=='mangopay-payment-gateway-integration.php' && $page_name) { ?>
    <meta name="description" content="StartDesigns offers Mangopay payment gateway integration services for businesses in France. We are delivering advanced payment gateway solutions." />
    <?php } elseif ($page_name=='php-development-services.php' && $page_name) { ?>
    <meta name="description" content="PHP development services for the web app, e-commerce, CMS, and API development. StartDesigns, a core PHP development company since 2015." />
    <?php } elseif ($page_name=='ui-ux-experts.php' && $page_name) { ?>
    <meta name="description" content="Need UI UX experts for frontend design. Hire Start Designs's advanced UI UX design services since 2015. We have in-house certified UI/UX designers." />
    <?php } elseif ($page_name=='vuejs-development-company.php' && $page_name) { ?>
    <meta name="description" content="StartDesigns is a Vue.js development company with in-house Vue JS developers. Hire Vue Js developers for custom web apps and front-end development." />
    <?php } elseif ($page_name=='web3-js-development.php' && $page_name) { ?>
    <meta name="description" content="Web3.js development services for Ethereum web application solution. Hire Web3 developers for Ethereum Javascript API development and integration." />
    <?php } elseif ($page_name=='angularjs-development.php' && $page_name) { ?>
    <meta name="description" content="StartDesigns is providing AngularJs development services worldwide. We are an AngularJS development company with the highest customer satisfaction rate." />
	<?php } elseif ($page_name=='reactjs-development-services.php' && $page_name) { ?>
    <meta name="description" content="ReactJs development services for advanced frontend solutions. We are a leading ReactJs development company for thriving dynamic UI/UX solutions." />
    <?php } elseif ($page_name=='wordpress-experts.php' && $page_name) { ?>
    <meta name="description" content="Hire WordPress experts for complete WordPress designs and development solutions. Our expert developers have expertise in custom development." />
    <?php } elseif ($page_name=='paypal-payment-gateway-integration.php' && $page_name) { ?>
    <meta name="description" content="Hire developers for a PayPal integration solution. We offer custom PayPal REST API integration services for all ecommerce platforms and custom websites." />
    <?php } elseif ($page_name=='stripe-payment-gateway-integration.php' && $page_name) { ?>
    <meta name="description" content="Hire developers for a Stripe integration solution. We offer custom Stripe API integration services for all ecommerce stores and custom websites." />
    <?php } elseif ($page_name=='ruby-on-rails-development.php' && $page_name) { ?>
    <meta name="description" content="Ruby on Rails development services for custom website design and development. Hire RoR developers for robust, and scalable web apps." />
    <?php } elseif ($page_name=='iphone-app-development.php' && $page_name) { ?>
    <meta name="description" content="StartDesigns, is an iPhone app development company provides iOS application development services for enterprises and small businesses globally since 2015" />
    <?php } elseif ($page_name=='android-app-development-company.php' && $page_name) { ?>
    <meta name="description" content="StartDesigns, is an android app development company since 2015. We offer advanced android app development services for startups, SMBs, and enterprises" />



    <?php } elseif ($page_name=='hire-shopify-developer.php' && $page_name) { ?>
 	<meta name="description" content="Hire professional Shopify developer or expert with 100% satisfaction development of your eCommerce website that can generate unprecedented sales." />
    <meta name="keywords" content="hire shopify developer from USA, hire shopify designer from USA, ui and ux design agency, website design agency, hire website designer online" />
    <?php } else { ?>
    <meta name="description" content="Looking to hire Wordpress Developer for web development of your business? StartDesigns provides dedicated full stack WP programmers on an hourly basis from USA." />
    <meta name="keywords" content="offshore development company, offshore IT services, outsource software development, software development solution, mobile app ui design, ux/ui designer, ux and ui, best mobile ui design, best app ui design, mobile ux design, web designer UK, web designer USA, web designing company UK, web designing company USA, web designing company USA, web design and development, logo design company, web development services, graphic designer, e-commerce web design" />
    <?php } ?>
    <link rel="canonical" href="https://www.startdesigns.com/<?php echo basename($_SERVER['PHP_SELF']); ?>"/>
    <meta name="google-site-verification" content="4P_KdYQLa7g5zDwmvzs_dlIgRvVMZR2gu_hmJ3A54vc" />
    <meta name="copyright" content="Copyright © 2015 Start Designs">
    <meta name="author" content="Start Designs">
    <meta name="designer" content="Vipin agarwal">
    <meta name="email" content="startdeesigns@gmail.com">
    <meta name="robots" content="noodp">
    
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Start Designs">
    <meta property="og:url" content="https://www.startdesigns.com/<?php echo basename($_SERVER['PHP_SELF']); ?>">
    <?php $page_name=basename($_SERVER[ 'PHP_SELF']); if($page_name=='index.php' && $page_name) { ?>
    <meta property="og:title" content="Best Web Design Agency | Website Development Company - StartDesigns">
    <?php } elseif ($page_name=='ecommerce-website-development.php' && $page_name) { ?>
    <meta property="og:title" content="Ecommerce Website Design | Web Development Company - StartDesigns">
     <?php } elseif ($page_name=='about-us.php' && $page_name) { ?>
    <meta property="og:title" content="About Us | Start Designs">
    <?php } elseif ($page_name=='website-development-company.php' && $page_name) { ?>
    <meta property="og:title" content="Website Development Company USA">
    <?php } elseif ($page_name=='web-design-company.php' && $page_name) { ?>
    <meta property="og:title" content="Website Design Company | UI/UX Design Services - StartDesigns">
    <?php } elseif ($page_name=='mobile-app-development-agency.php' && $page_name) { ?>
    <meta property="og:title" content="Mobile App Development Agency | App Design Company - StartDesigns">
    <?php } elseif ($page_name=='internet-marketing-services.php' && $page_name) { ?>
    <meta property="og:title" content="Internet Marketing Services | Digital Marketing Solutions - StartDesigns">
    <?php } elseif ($page_name=='hire-iphone-app-developer.php' && $page_name) { ?>
    <meta property="og:title" content="Hire iPhone App Developers and Programmers - StartDesigns">
    <?php } elseif ($page_name=='hire-android-app-developer.php' && $page_name) { ?>
    <meta property="og:title" content="Hire Dedicated Android App Developer from USA - StartDesigns">
    <?php } elseif ($page_name=='hire-php-developers.php' && $page_name) { ?>
    <meta property="og:title" content="Hire Dedicated PHP Developer & Programmer from USA - StartDesigns">
    <?php } elseif ($page_name=='hire-asp-net-developer.php' && $page_name) { ?>
    <meta property="og:title" content="Hire ASP NET Developer | Asp.Net Programmer from USA - StartDesigns">
    <?php } elseif ($page_name=='hire-drupal-developer.php' && $page_name) { ?>
    <meta property="og:title" content="Hire Drupal Developer and Experts from USA - StartDesigns">
    <?php } elseif ($page_name=='hire-wordpress-developer.php' && $page_name) { ?>
     <meta property="og:title" content="Hire Wordpress Developer | Full Stack WP Programmers USA - StartDesigns">
    <?php } elseif($page_name=='hire-magento-developer.php' && $page_name) { ?>
    <meta property="og:title" content="Hire Magento Developer | Magento 2 Development - StartDesigns">
    <?php } elseif ($page_name=='hire-ruby-on-rails-developer.php' && $page_name) { ?>
    <meta property="og:title" content="Hire Ruby on Ralis Developer USA, RoR Development Company">
    <?php } elseif ($page_name=='hire-ui-ux-designer-from-india.php' && $page_name) { ?>
    <meta property="og:title" content="Hire UI/UX Designer from USA | A Creative Web Design Agency">
    <?php } elseif ($page_name=='prestashop-development-company.php' && $page_name) { ?>
    <meta property="og:title" content="PrestaShop Development Company - StartDesigns">
    <?php } elseif ($page_name=='magento-development-company.php' && $page_name) { ?>
    <meta property="og:title" content="Magento Development Company - StartDesigns">
    <?php } else { ?>
    <meta property="og:title" content="Top Web and Mobile App Development Company - START DESIGNS">
    <?php } ?>
    <?php $page_name=basename($_SERVER[ 'PHP_SELF']); if($page_name=='index.php' && $page_name) { ?>
    <meta property="og:description" content="StartDesigns, a leading Web Design and Development service company. Our developers able to make a web application, eCommerce site, and mobile apps.">
    <?php } elseif ($page_name=='ecommerce-website-development.php' && $page_name) { ?>
    <meta property="og:description" content="StartDesgins, a trusted Ecommerce Website Design and Development Company, Our developers provide the best eCommerce solutions for businesses.">
   
    <?php } elseif ($page_name=='prestashop-development-company.php' && $page_name) { ?>
      <meta property="og:description" content="StartDesigns, PrestaShop development company for cutting-edge e-commerce development. We offer PrestaShop web development solutions for businesses.">
    <?php } elseif ($page_name=='magento-development-company.php' && $page_name) { ?>
    <meta property="og:description" content="StartDesigns a Magento development company since 2015. We offer advanced Magento development services for e-commerce startups, SMBs, and enterprises.">
    
    <?php } elseif ($page_name=='about-us.php' && $page_name) { ?>
    <meta property="og:description" content="Since 2015 Start Designs has been providing complete IT solutions for more than 150+ clients globally. Completed 500+ projects and won 10 awards.">
    <?php } elseif ($page_name=='website-development-company.php' && $page_name) { ?>
    <meta property="og:description" content="StartDesigns, a website development company in the USA. We have a team of world-class web developers and also provide website maintenance services.">
    <?php } elseif ($page_name=='web-design-company.php' && $page_name) { ?>
    <meta property="og:description" content="Top website design company for the last 5 years. We are a web design agency with 150 + satisfied customers by our creative UI/UX designers.">
    <?php } elseif ($page_name=='mobile-app-development-agency.php' && $page_name) { ?>
    <meta property="og:description" content="StartDesigns, Leading Mobile App Development Agency in the USA, Our developers make custom mobile applications for android, and ios at the best cost.">
    <?php } elseif ($page_name=='internet-marketing-services.php' && $page_name) { ?>
    <meta property="og:description" content="We are a leading Internet Marketing Service provider, We offer SEO, SMO, PPC, and complete digital marketing solutions for all businesses and niches.">
    <?php } elseif ($page_name=='hire-iphone-app-developer.php' && $page_name) { ?>
    <meta property="og:description" content="Looking to hire iphone app developer and programmer? StartDesigns is the right place online where you can hire dedicated iphone or ios developer for business.">
    <?php } elseif ($page_name=='hire-android-app-developer.php' && $page_name) { ?>
    <meta property="og:description" content="Need an Android App for your business? StartDesigns is a company to hire a developer for android application development at an affordable cost from USA.">
    <?php } elseif ($page_name=='hire-php-developers.php' && $page_name) { ?>
    <meta property="og:description" content="Need a dedicated php developer and programmer from USA for your business, StartDesigns provides php development services on flexible hiring models.">
    <?php } elseif ($page_name=='hire-asp-net-developer.php' && $page_name) { ?>
    <meta property="og:description" content="Hire asp.net developer and programmers from USA. StartDesigns, An asp net development company from USA. We providing services for USA and Globally.">
    <?php } elseif ($page_name=='hire-drupal-developer.php' && $page_name) { ?>
    <meta property="og:description" content="Hire Drupal Developer & Expert for complete drupal development solutions. StartDesigns, a leading agency to hire from USA. We completed over 500 projects.">
    <?php } elseif ($page_name=='hire-wordpress-developer.php' && $page_name) { ?>
    <meta property="og:description" content="Looking to hire Wordpress Developer for web development of your business? StartDesigns provides dedicated full stack WP programmers on an hourly basis from USA.">
    <?php } elseif ($page_name=='hire-magento-developer.php' && $page_name) { ?>
    <meta property="og:description" content="Looking to hire Certified Magento 2 Developer? StartDesigns, a Magento Development Company provides consultant for ecommerce web design on hourly basis.">
    <?php } elseif ($page_name=='hire-ruby-on-rails-developer.php' && $page_name) { ?>
    <meta property="og:description" content="Hire Dedicated Ruby on Rails Developer hourly basis form USA. Start Designs, an RoR firm that would complete your business needs. We have done 500+ projects.">
    <?php } elseif ($page_name=='hire-ui-ux-designer-from-india.php' && $page_name) { ?>
    <meta property="og:description" content="StartDesigns, We have USA's most creative UI/UX designer to hire. We have complete 500+ projects internationally for 150+ clients. We also won 10 awards globally.">
    <?php } else { ?>
    <meta property="og:description" content="Looking to hire Wordpress Developer for web development of your business? StartDesigns provides dedicated full stack WP programmers on an hourly basis from USA.">
    <?php } ?>    

    <meta property="og:image" content="https://www.startdesigns.com/images/startdesigns-og.png">
    <meta property="og:image:secure_url" content="https://www.startdesigns.com/images/startdesigns-og.png">
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@startdeesigns"/>
    <meta name="twitter:title" content="Best Web Design & Development Company | Start Designs"/>
    <meta name="twitter:description" content="StartDesigns, a leading Web Design and Development company. Our developers able to make a web application, eCommerce site, and mobile apps."/>
    <meta name="twitter:image" content="https://www.startdesigns.com/images/startdesigns-og.png"/>
    <meta name="twitter:creator" content="@startdeesigns" />
    
    <!-- Ad sense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6816037931956084"
     crossorigin="anonymous"></script>
    
    <!-- Schema Tag-->
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "StartDesigns",
    "alternateName": "Start Designs",
    "url": "https://www.startdesigns.com/",
    "logo": "https://www.startdesigns.com/images/logo.png",
    "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "8003366789",
    "contactType": "technical support",
    "areaServed": ["US","GB","CA","FR","IT","150"],
    "availableLanguage": ["en","Hindi"]
    },
    "sameAs": [
    "https://www.facebook.com/startdeesigns.vipin/",
    "https://twitter.com/startdeesigns",
    "https://www.youtube.com/channel/UCOKOnzXQgHeicjofeDI0tLw",
    "https://www.linkedin.com/company/start-designs",
    "https://www.startdesigns.com/",
    "https://www.pinterest.com/start_designs/"
    ]
    }
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N4GMWSZ');</script>
    <!-- End Google Tag Manager -->

  
    <meta name="p:domain_verify" content="0ac255098299fc2e41aeb037d532ed26"/>
    
    <link rel="publisher" href="https://plus.google.com/+Startdesignss">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v2">

    <link rel="stylesheet" href="css/frcss/frstyle.css">
    <link rel="alternate" hreflang="en-us" href="https://www.startdesigns.com/<?php echo basename($_SERVER['PHP_SELF']); ?>" />
      <!-- testimoial css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
      
    <link rel="stylesheet" type="text/css" href="css/get-quote.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"> -->
    <link rel="stylesheet" type="text/css" href="css/footer-new.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css?v2">
    <script src='https://www.google.com/recaptcha/api.js'></script>     
  </head>
  <body class="homebody body-x pageladder" style="padding:0;" itemscope>    
    <!-- ================loader============ -->
   <!-- <div id="loader-wrapper">
      <div class="loader-content">
        <div class="cube1 b-cube">
        </div>
        <div class="cube2 b-cube">
        </div>
      </div>
    </div>-->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4GMWSZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
      <div class="top-header">
        <div class="container">
          <div class="our-info">
            <span class="email-id">
              <a href="mailto:info@startdesigns.com">
                <img src="footer/images-footer/email.png" alt="emailimage"> info@startdesigns.com
              </a>
            </span>
            <div class="pull-right">  
                <span class="email-id animate-charcter">
                  <a href="career.php" class= "anny" content="We Are Hiring">
                   We Are Hiring
                  </a>              
                </span>
              <span class="skype-id">
                <a href="skype:+start10designs"> 
                  <img src="footer/images-footer/skypeIcon.png" alt="skypeIconimage">start10designs
                </a>
              </span>
              <span class="phone-number ">
                <a href="tel:+910141-4044287"> 
                  <img src="images/india.png" alt="indiaimage">+91 141-4044287
                </a>
              </span> 
              <!--
              <span class="phone-number ">
                <a href="tel:+33615101055"> 
                  <img src="images/france.png"> +33 615101055
                </a>
              </span>
              -->
              
            </div> 
          </div>
        </div>
      </div>
      <div class="errorbox-position" id="var_msg_cnt" style="display:none;">
        <div class="closebtn-errorbox"> 
          <a href="javascript:void(0);" onclick="Project.closeMessage(); return false;">
            <button type="button" class="btn-close" aria-label="Close">×</button>     
            </button>
          </a> 
        </div>
        <div class="content-errorbox alert " id="err_msg_cnt"> 
        </div>
      </div>
      <div class="page-nav">
        <a href="#" title="">
        </a>
        <a href="#" title="">
        </a>
        <a href="#" title="">
        </a>
        <a href="#" title="">
        </a>
        <a href="#" title="">
        </a>
        <a href="#" title="">
        </a>
      </div>
      <div id="wrapper"> 
        <div class="top-main">
          <div class="full-bg-nav-opecity">
          </div>
          <div class="topbar">
            <div class="container">
              <div class="left">
                <ul class="top-shortmenu">
                  <li>
                    <a href="tel:+1234567890" title="Call Us" class="hover-clr-green L-pdnone">
                      <i class="fa fa-phone" aria-hidden="true">
                      </i>+91 141 4044287
                    </a>
                  </li>
                  <li>
                    <a href="email:+1234567890"  title="Email" class="hover-clr-green">
                      <i class="fa fa-envelope" aria-hidden="true">
                      </i>info@startdesigns.com
                    </a>
                  </li>
                </ul>
              </div>
              <div class="right">
                <ul class="top-shortmenu">
                  <li>
                    <a href="skype:+1234567890" title="Skype" class="hover-clr-green">
                      <i class="fa fa-skype" aria-hidden="true">
                      </i>skype
                    </a>
                  </li>
                  <li>
                    <a href="hangout:+1234567890?call" title="Google Hangout" class="hover-clr-green">
                      <i class="fa fa-google" aria-hidden="true">
                      </i>Hangout
                    </a>
                  </li>
                  <li>
                    <a href="whatsapp:+1234567890?call" title="whatsapp" class="hover-clr-green R-pdnone">
                      <i class="fa fa-whatsapp" aria-hidden="true">
                      </i>whatsapp
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="top-container-def">
            <div class="container">
              <!-- mobile menu code -->
              <!-- mob menu end here -->
              <div class="logo-left">
                <div class="logo open-logopopup">
                  <a itemprop="url" title="Start Designs" href="https://www.startdesigns.com/" class="capguy">
                  </a> 
                  <div class="popup-detailsbox">
                    <div class="detailbox-excuit">
                      <h3>Contact details
                      </h3>
                      <div class="text-flagicons">
                        <ul>
                          <li>
                            <a href="#"> 
                              <span>USA
                              </span> 
                              <p>+91 141 4044287 
                              </p> 
                            </a>
                          </li> 
                          <li>
                            <a href="#">
                              <i class="fa fa-flag" aria-hidden="true">
                              </i> 
                              <span>France
                              </span> 
                              <p>+91 141 4044287 
                              </p> 
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="logo-social-icons">
                        <ul class="social-ul-logo">
                          <li>
                            <a target="_blank" rel="me" href="#">
                              <i class="fa fa-twitter">
                              </i>
                            </a>
                          </li>
                          <li>
                            <a target="_blank" rel="me" href="#">
                              <i class="fa fa-linkedin">
                              </i>
                            </a>
                          </li>
                          <li>
                            <a target="_blank" rel="me" href="#">
                              <i class="fa fa-facebook">
                              </i>
                            </a>
                          </li>
                          <li>
                            <a target="_blank" rel="me" href="#">
                              <i class="fa fa-youtube">
                              </i>
                            </a>
                          </li>
                          <li>
                            <a target="_blank" rel="me" href="#">
                              <i class="fa fa-google-plus">
                              </i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <a href="#" class="inquery-popup-box" onclick="document.getElementById('id01').style.display='block'">Inquiry now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="menu-right" id="head_menu">
                <div class="r-clear">
                  <div class="search-div relative">
                    <span class="search-icon">
                    </span> 
                  </div>
                </div>
                <div class="r-clear topmenu">
                  <ul class="top-togle-menu-cls header_menu">
                    <li class="sidebar-menu"> 
                      <a class="togle-li-cls" title="" href="https://www.startdesigns.com/">Home
                      </a>
                    </li>
                    <li> 
                      
                      About us
                      </a>
                    </li>
                    <li> 
                      <a class="togle-li-cls head-parent"  title="" href="javascript:;" >Services
                      </a>
                      <div class="dropdown-bg">
                        <div class="centerauto">
                          <div class="company-tb services-tb">
                            <div class="block-drop block-drop-mobile block280">
                              <ul class="item-drop bor-line header_submenu">
                                <li>
                                  <a href="ecommerce-website-development.php">
                                    <img src="images/icons/online-shop.svg" alt="">
                                    <span> ecommerce development
                                    </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="web-design-company.php"> 
                                    <img src="images/web-design-nav.png" alt="">
                                    <span>web design
                                    </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="website-development-company.php">
                                    <img src="images/icons/web-programming.svg" alt="">
                                    <span>web Development
                                    </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="mobile-app-development-agency.php">
                                    <img src="images/sd-mobappli.png" alt="">
                                    <span >
                                      mobile application Development
                                    </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="internet-marketing-services.php"> 
                                    <img src="images/sddigital-marketing.png" alt="">
                                    <span>
                                      internet marketing services 
                                    </span>
                                  </a>
                                </li>                                
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li> 
                      <a class="togle-li-cls subhead-parent" title="" href="javascript:;" >Hire Resources
                      </a>
                      <div class="dropdown-bg">
                        <div class="centerauto">
                          <div class="company-tb services-tb">
                            <div class="block-drop block-drop-mobile block280" id="sub_header">
                              <ul class="item-drop bor-line  head_submenu">
                                <li>
                                  <a href="javascript:;"> 
                                    <img src="images/mobile-app-nav.png" alt="">
                                    <span>
                                      Hire Mobile App Developers
                                    </span>
                                  </a>
                                  <ul class="item-drop bor-line sub-menu2 sub_menu_head">
                                    <li>
                                      <a href="hire-iphone-app-developer.php" class="">Hire iPhone App Developer
                                      </a>
                                    </li>
                                    <li>
                                      <a href="hire-android-app-developer.php" class="">Hire Android App Developer
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                                <li>
                                  <a href="javascript:;">
                                    <img src="images/icons/web-programming.svg" alt="">
                                    <span>
                                      Hire  web  Developer
                                    </span>
                                  </a>
                                  <ul class="item-drop bor-line sub-menu2 sub_menu_head">
                                    <li>
                                      <a href="hire-php-developers.php" class="">Hire PHP Developer
                                      </a>
                                    </li>                                     
                                    <li>
                                      <a href="hire-wordpress-developer.php" >Hire WordPress Developer
                                      </a>
                                    </li>
                                    <li>
                                      <a href="hire-magento-developer.php" >Hire Magento Developer
                                      </a>
                                    </li>
                                    <li>
                                      <a href="hire-ruby-on-rails-developer.php" >Hire Ruby on Rails Developer
                                      </a>
                                    </li>
                                    <li>
                                      <a href="hire-drupal-developer.php" >Hire Drupal Developer
                                      </a>
                                    </li>
                                    <li>
                                   <a href="hire-shopify-developer.php">Hire Shopify Developer
                                  </a>
                                 </li>
                                  </ul>
                                </li>
                               <li>
                                  <a href="hire-ui-ux-designer-from-india.php">
                                    <img src="images/ux-design-nav.png" alt="">
                                    <span>
                                      Hire UI/UX Designer 
                                    </span>
                                  </a>
                                </li>
                                 
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class="work-menu" href="portfolio.php">Portfolio
                      </a> 
                    </li>
                    <li>
                      <a class="work-menu" href="career.php">career
                      </a> 
                    </li>
                    <li> 
                      <a class="togle-li-cls" href="contact-us.php">Contact us
                      </a>
                    </li>
                    <li> 
                      <a class="togle-li-cls" href="https://www.startdesigns.com/blog/">Blog
                      </a>
                    </li>
                    <li class="inquiry-menu">
                      <a onclick="document.getElementById('id01').style.display='block'" class="add-get-bodyclass" style="width:auto;">  Get Quote 
                      </a>
                    </li>
                  </ul>
                </div>
                <!--========================= desktop menu=============== -->
                <div class="mobile-menu-last">
                  <div class="burger-container">
                    <div id="burger">
                      <div class="bar topBar">
                      </div>
                      <div class="bar btmBar">
                      </div>
                      <div class="bar btmBar" style="top: 6px;">
                      </div>
                    </div>
                  </div>
                  <ul class="menu">
                    <li> 
                      <a class="  " title="" href="index.php">Home
                      </a>
                    </li>
                    <li> 
                      <a class=" " title="" href="about-us.php">About us
                      </a>
                    </li >
                    <li class="dropof-services"> 
                      <a role="button" class="collapsed arr-icon" data-toggle="collapse" href="#lisul" aria-expanded="false" aria-controls="lisul">Services
                      </a>
                      <div class="collapse" id="lisul">
                        <ul class=" ">
                          <li>
                            <a href="ecommerce-website-development.php"> 
                              ecommerce development 
                            </a>
                          </li>
                          <li>
                            <a href="web-design-company.php">  Web Design 
                            </a>
                          </li>
                          <li>
                            <a href="website-development-company.php"> web Development   
                            </a>
                          </li>
                          <li>
                            <a href="mobile-app-development-agency.php"> mobile application Development   
                            </a>
                          </li>
                          <li>
                            <a href="internet-marketing-services.php" >  internet marketing services    
                            </a>  
                          </li>
                         <!-- <li>
                            <a href="ui-ux-design.php" >  UI/UX   
                            </a>  
                          </li>-->
                        </ul>
                      </div>
                    </li>
                    <li class="dropof-services">     
                      <a role="button" class="collapsed arr-icon " data-toggle="collapse" href="#hire-resources" aria-expanded="false" >Hire Resources
                      </a>
                      <div class="collapse sub-sub-drop" id="hire-resources">
                        <ul class=" ">
                          <li>
                            <a class="collapsed arr-icon sub-drop-down" data-toggle="collapse" href="#hire-mobile-app-developers" aria-expanded="false">Hire Mobile App Developers
                            </a>
                            <div class="collapse sub-sub-drop" id="hire-mobile-app-developers">
                              <ul class=" ">
                                <li>
                                  <a href="hire-iphone-app-developer.php">Hire iPhone App Developer
                                  </a>
                                </li>
                                <li>
                                  <a href="hire-android-app-developer.php">Hire Android App Developer
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li>
                            <a role="button" class="collapsed arr-icon sub-drop-down" data-toggle="collapse" href="#hire-web-developers" aria-expanded="false">Hire  web  Developer
                            </a> 
                            <div class="collapse sub-sub-drop" id="hire-web-developers">
                              <ul class=" ">
                                <li>
                                  <a href="hire-php-developers.php">Hire PHP Developer
                                  </a>
                                </li> 
                                <li>
                                  <a href="hire-wordpress-developer.php">Hire WordPress Developer
                                  </a>
                                </li>                               
                                <li>
                                   <a href="hire-shopify-developer.php">Hire Shopify Developer
                                  </a>
                                 </li>
                                <li>
                                  <a href="hire-drupal-developer.php">Hire Drupal Developer
                                  </a>
                                </li>
                                <li>
                                  <a href="hire-magento-developer.php">Hire Magento Developer
                                  </a>
                                </li>
                                <li>
                                  <a href="hire-ruby-on-rails-developer.php">Hire Ruby on Rails Developer
                                  </a>
                                </li>
                                 
                              </ul>
                            </div>
                          </li>  
                          <li>
                            <a href="hire-ui-ux-designer-from-india.php" class="">Hire UI/UX Designer
                            </a>
                          </li>
                          
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a class=" " href="portfolio.php">Portfolio
                      </a> 
                    </li>
                    <li>
                      <a class="work-menu" href="career.php">career
                      </a> 
                    </li>
                    <li> 
                      <a class=" " title="Company"  href="contact-us.php">Contact us
                      </a>
                    </li>
                     <li> 
                      <a class="togle-li-cls" href="https://www.startdesigns.com/blog/">Blog
                      </a>
                    </li>
                     <li class="inquiry-menu">
                      <a onclick="document.getElementById('id01').style.display='block'" class="add-get-bodyclass" style="width:auto;">  Get Quote 
                      </a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
           <!-- <div id="id01" class="modal" style="background-color: #fff;">
              <div id="inq-popup" class="" style="">
                <div class="">
                  <div class="center-align" id="inquiry_form_div">
                    <form  id="inquiryForm" method="post"  autocomplete="off" action="quote_ajax.php">
                      <div id="quote_response">
                      </div>
                      <div class="inq-cnt">
                        <div class="row">
                          <span onclick="document.getElementById('id01').style.display='none'" class="close-popupbtns" title="Close Modal">&times;
                          </span>
                          <div class="col-sm-12">
                              
                              <img src="images/logo.png" class="img-responsive" alt=""> 

                            
                          </div>
                        </div>
                        <h2>Thank you for reaching out. 
                          <strong>Let’s Talk!
                          </strong>
                        </h2>
                        <div class="inq-left">
                          <div class="title-txt"> 
                            <span class="inquiry-kindly-test">Kindly fill up the form below
                            </span> 
                          </div>
                          <div class="inq-form-left">
                            <div class="row">
                              <div class="row">
                              <input type="text" name="name" value="" placeholder="Name" id="name" class="first-name val alphaonly" maxlength="50" tabindex="2" onkeyup="this.value=this.value.replace(/[^a-z   A-Z]/g,'');">
                                <span class="require_fields">*</span>
                              </div>
                            </div>
                            <div class="row">
                              <input type="email" name="email" id="email" value="" placeholder="Email" class="email val" tabindex="4" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                              <span class="require_fields">*</span>
                            </div>
                            <div class="row">
                              <input id="phone" maxlength="14" name="phone" type="text" class="required comm_phone_number drop-country" tabindex="10" value="" placeholder="Number" title="Please enter exactly 10 digits"  pattern="[1-9]{1}[0-9]{9}">
                              <span class="require_fields">*</span>
                            </div>
                             <div class="row">
                              <input type="text" name="skypeid" id="skypeid" placeholder="Skype Id" class="site-name val" tabindex="9">
                               <span class="require_fields">*</span>
                            </div>
                            <div class="row">
                              <input type="text" name="company" id="comapny" value="" placeholder="Company Name" class="comp-name val" maxlength="50" tabindex="8">
                            </div> 
                          </div>
                        </div>
                        <div class="inq-right">
                          <div class="inqury-check-box">
                            <fieldset class="inq-services-fieldset">
                              <legend>Select your requirement
                              </legend>
                              <ul>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]"  type="checkbox" value="Mobile Apps Development" tabindex="10" class="inquiry_services_cls" style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Mobile Apps Development
                                    </span>
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Application Services" tabindex="11" class="inquiry_services_cls "  style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Application Services
                                    </span>
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Hire Dedicated Resources" tabindex="12" class="inquiry_services_cls "  style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Hire Dedicated Resources
                                    </span>
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Cloud Solutions" tabindex="13" class="inquiry_services_cls "  style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Cloud Solutions
                                    </span>
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Enterprise Solution" tabindex="14" class="inquiry_services_cls "   style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Enterprise Solution
                                    </span>
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]    Others
                                                 ervice" id="inq_service[]" type="checkbox" value="IT Consultancy" tabindex="15" class="inquiry_services_cls " style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      IT Consultancy
                                    </span>
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Game Development" tabindex="16" class="inquiry_services_cls " style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Game Development inquiry_file
                                    </span>
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Embedded Solutions" tabindex="17" class="inquiry_services_cls " style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Embedded Solutions
                                    </span>
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]"  type="checkbox" value="Enterprise Web Solutions" tabindex="18" class="inquiry_services_cls " style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Enterprise Web Solutions
                                    </span>
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]"  type="checkbox" value="UI/UX Services" tabindex="19" class="inquiry_services_cls " style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      UI/UX Services
                                    </span>
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Others" tabindex="20" class="inquiry_services_cls inquiry_services_cls_others"  style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Others
                                    </span>
                                  </label>
                                </li>
                              </ul>
                            </fieldset>
                          </div>
                          <div class="project-dtls">
                            <textarea name="information" id="information" placeholder="Describe Your Project" class="val" tabindex="18" style="resize: none;" maxlength="250"></textarea>
                            <span class="require_fields">*</span>
                            <div class="upload-file"> 
                               <a href="#" class="tool-content" title="Upload *.jpg, *.jpeg, *.gif, *.png, *.pdf, *.doc, *.docx, *.xls, *.xlsx, *.odt, *.zip files only">
                              </a> 
                              <a href="javascript:;" class="toolcancel-btn frm-cancel-file" attr-it="vInquiryFile" id="vInquiryFile_cancelact" style="display:none;" title="Remove the file">
                              </a> -->
                              <!-- <input type="file" name="inquiry_file" placeholder="attach a file" id="inquiry" accept="image/png, image/jpeg, application/pdf, application/docx, application/excel" >
                              <span id="file"></span>
                             
                          <div id="request_quote_loader" class="request-quote" style="display:none;">
                            <div style="text-align:center;font-size:19px;"> Please wait....
                              <br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div> 
                </div>
              </div>
            </div>  -->
          
       <div id="id01" class="modal" style="background-color: #fff;">
              <div id="inq-popup" class="" style="">
                <div class="">
                  <div class="center-align" id="inquiry_form_div">
                     <form  id="inquiryForm" class="get-quote" method="post"  autocomplete="off" action="quote_ajax.php" enctype="multipart/form-data" target="_blank">
                      <div id="quote_response">
                      </div>
                      <div class="inq-cnt">
                        <div class="row">
                          <span onclick="document.getElementById('id01').style.display='none'" class="close-popupbtns" title="Close Modal">&times;
                          </span>
                          <div class="col-sm-12 quote-sd-logo text-center">
                              
                              <img src="images/logo.png" class="img-responsive" alt=""> 
                             
                          </div>
                        </div>
                        <!-- <h2>Thank you for reaching out. 
                          <strong>Let’s Talk!
                          </strong>
                        </h2> -->
                        <div class="inq-left">
                          <div class="title-txt"> 
                            <span class="inquiry-kindly-test">Kindly fill up the form below
                            </span> 
                          </div>
                          <div class="inq-form-left">
                            <div class="row">
                             <div class="row">
                                <input type="text" name="name" value="" placeholder="Name" id="name" class="first-name val alphaonly">
                <span class="require_fields">*</span>
                                <span class="error-msg" id="vName_err">
                                </span> 
                              </div>
                            </div>
                            <div class="row">
                              <input type="email" name="email" id="email" value="" placeholder="Email" class="email val">
                <span class="require_fields">*</span>
                              <div class="error-msg"> 
                                <span id="vEmail_err">
                                </span> 
                              </div>
                            </div>
                            <div class="row">
                             <input id="phone" maxlength="14" name="phone" type="text" class="required comm_phone_number drop-country" placeholder="Number">
               <span class="require_fields">*</span>
                              <div class="error-msg"> 
                                <span id="vMobile_err">
                                </span> 
                              </div>
                            </div>
               <div class="row">
                              <input type="text" name="skypeid" id="skypeid" placeholder="Skype Id" class="site-name val" tabindex="9">
                            </div>
                            <div class="row">
                              <input type="text" name="company" id="comapny" value="" placeholder="Company Name" class="comp-name val" maxlength="50" tabindex="8">
                              <div class="error-msg"> 
                                <span id="vCompanyName_err">
                                </span> 
                              </div>
                            </div>
                            <div class="row">
                              <input type="text" name="website" id="website" value="" placeholder="Website URL" class="site-name val" tabindex="9">
                              <div class="error-msg"> 
                                <span id="vWebsite_err">
                                </span> 
                              </div>
                            </div>
                            <div class="row">
                              <select name="user_budget" class="inqbudget chosen-select" id="user_budget" tabindex="-1">
                                <option value="" selected="selected">Select Project Budget
                                </option>
                                <option value="Below $5000">Below $5K
                                </option>
                                <option value="$5K - $15K">$5K - $15K
                                </option>
                                <option value="$15K - $40K">$15K - $40K
                                </option>
                                <option value="$40K - $60K">$40K - $60K
                                </option>
                                <option value="$60K and above">$60K and above
                                </option>
                              </select>
                              <span class="error-msg" id="InqBudget_err">
                              </span> 
                            </div>
                          </div>
                        </div>
                        <div class="inq-right">
                          <div class="inqury-check-box">
                            <fieldset class="inq-services-fieldset">
                              <legend>Select your requirement
                              </legend>
                              <div id="error-inquiry"></div>
                              <ul>
                                <li>
                                  <label class="custom-label" onclick="">

                                    <input name="inq_service[]" type="checkbox" value="Mobile Apps Development" tabindex="10" class="inquiry_services_cls" style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Mobile Apps Development
                                    </span>
                                    
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Application Services" tabindex="11" class="inquiry_services_cls "  style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Application Services
                                    </span>
                                    
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Hire Dedicated Resources" tabindex="12" class="inquiry_services_cls "  style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Hire Dedicated Resources
                                    </span>
                                    
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Cloud Solutions" tabindex="13" class="inquiry_services_cls "  style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Cloud Solutions
                                    </span>
                                    <div class="inquiry-s-cls ">
                                      <div class="inquiry-tooltip">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting 
                                      </div>
                                      <em class="help-icon">
                                      </em>
                                    </div>
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Enterprise Solution" tabindex="14" class="inquiry_services_cls "   style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Enterprise Solution
                                    </span>
                                    
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="IT Consultancy" tabindex="15" class="inquiry_services_cls " style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      IT Consultancy
                                    </span>
                                    
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Game Development" tabindex="16" class="inquiry_services_cls " style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Game Development inquiry_file
                                    </span>
                               
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Embedded Solutions" tabindex="17" class="inquiry_services_cls " style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Embedded Solutions
                                    </span>
                                    
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Enterprise Web Solutions" tabindex="18" class="inquiry_services_cls " style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Enterprise Web Solutions
                                    </span>
                                   
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="UI/UX Services" tabindex="19" class="inquiry_services_cls " style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      UI/UX Services
                                    </span>
                                    
                                  </label>
                                </li>
                                <li>
                                  <label class="custom-label" onclick="">
                                    <input name="inq_service[]" type="checkbox" value="Others" tabindex="20" class="inquiry_services_cls inquiry_services_cls_others"  style="position: absolute; left: -9999px;">
                                    <span class="custom-check">
                                    </span>
                                    <span>
                                      Others
                                    </span>
                                    
                                  </label>
                                </li>
                              </ul>
                            </fieldset>
                            <span  class="error-msg" id="inq_service_err">
                            </span> 
                          </div>
                          <div class="project-dtls">
                            <textarea name="information" id="information" placeholder="Brief Project Information" class="val" tabindex="18" style="resize: none;" maxlength="250"></textarea>
                            <span class="require_fields">*</span>
                            <div class="upload-file"> 
                              
                               <input type="file" name="inquiry_file" id="inquiry" accept="image/png, image/jpeg, application/pdf, application/docx, application/xlsx, application/txt" >
                              <span id="file"></span>
                              
                            </div>

                          </div> 
                            <div class="capcha_div">                          
                              <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>                          
                            </div>                           
                          <div id="vInquiryFile_err">
                          </div>
                          <span id="tInformation_err">















                            
                        </div>
                        
                        <div class="clear">
                        </div>
                        <div class="all-error-msg text-center">
                          <div class="row inq-new-error-msg" id="form_error_gen_msg">Fields marked in red are mandatory
                          </div>
                          <div class="request-quote" id="request_quote_div">
                            <button class="btn w-auto" name="form_submit" id="button" type="submit" value="Request a Quote"> Request a quote
                            </button>
                            
                          </div>
                          <div id="request_quote_loader" class="request-quote" style="display:none;">
                            <div style="text-align:center;font-size:19px;"> Please wait....
                              <br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div> 
                </div>
              </div>
            </div>
      </div>

