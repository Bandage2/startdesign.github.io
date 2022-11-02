<?php
//Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/blog/wp-load.php';
//print_r($wpdb);
$query = "SELECT * FROM $wpdb->posts where post_status = 'publish' and post_type='post' ORDER BY `wp_posts`.`post_date` DESC limit 0,3 ";
 $records = $wpdb->get_results($query, OBJECT);
?>

<div class="row">
<?php 
  if ($records): ?>
  <?php global $post; ?>
  <?php foreach ($records as $post): ?>
    <?php setup_postdata($post); ?>

    

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 test" data-aos="fade-right">
                <div class="card ">
                  <div class="card-block">
                     <p class="card-text blog_images" ><?php echo get_the_post_thumbnail( $page->ID  ); ?>
                    </p>
                    <div class="card-content">
                      <h5><?php the_category(', ') ?> 
                    </h5>
                    <h4 class="card-title"><?php the_title(); ?>
                    </h4>
                    <a class="btn-read-more" href="<?php the_permalink() ?>" target="_blank">Read More 
                      <i class="fa fa-long-arrow-right" aria-hidden="true">
                      </i>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
  <?php endforeach; ?>
  
  <?php else : ?>
    <h2 class="center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
 <?php endif; ?>
</div>