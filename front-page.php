<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package freelance
 */

get_header();
?>
    <!--variables-->
    <?php 
    $meta_values = get_fields();

    $logo_image                = ( isset( $meta_values['logo']['logo_image'] ) ) ? $meta_values['logo']['logo_image'] : null;
	  $logo_title                = ( isset( $meta_values['logo']['logo_title'] ) ) ? $meta_values['logo']['logo_title'] : null;
    $hero_description_title    = ( isset( $meta_values['hero_description']['hero_title'] ) ) ? $meta_values['hero_description']['hero_title'] : null;
    $hero_description_subtitle = ( isset( $meta_values['hero_description']['hero_subtitle'] ) ) ? $meta_values['hero_description']['hero_subtitle'] : null;
    $socials                   = ( isset( $meta_values['socials'] ) ) ? $meta_values['socials'] : null;
    $value_tail                = ( isset( $meta_values['value_tail'] ) ) ? $meta_values['value_tail'] : null;
    $services_title            = ( isset( $meta_values['services_title'] ) ) ? $meta_values['services_title'] : null;
    $services_gallery          = ( isset( $meta_values['services_gallery'] ) ) ? $meta_values['services_gallery'] : null;
    $featured_title            = ( isset( $meta_values['featured_title'] ) ) ? $meta_values['featured_title'] : null;
    $featured_description      = ( isset( $meta_values['featured_description'] ) ) ? $meta_values['featured_description'] : null;
    $featured_button_link      = ( isset( $meta_values['featured_button']['link'] ) ) ? $meta_values['featured_button']['link'] : null;
    $featured_button_text      = ( isset( $meta_values['featured_button']['text'] ) ) ? $meta_values['featured_button']['text'] : null;
    $featured_image_caption    = ( isset( $meta_values['featured_image_caption'] ) ) ? $meta_values['featured_image_caption'] : null;
    $featured_image            = ( isset( $meta_values['featured_image'] ) ) ? $meta_values['featured_image'] : null;
    $action_background         = ( isset( $meta_values['action_background'] ) ) ? $meta_values['action_background'] : null;
    $action_title              = ( isset( $meta_values['action_title'] ) ) ? $meta_values['action_title'] : null;
    $action_description        = ( isset( $meta_values['action_description'] ) ) ? $meta_values['action_description'] : null;
    $action_button_link        = ( isset( $meta_values['action_button']['link'] ) ) ? $meta_values['action_button']['link'] : null;
    $action_button_text        = ( isset( $meta_values['action_button']['text'] ) ) ? $meta_values['action_button']['text'] : null;
    ?>
    <!--variables end-->

		<!--hero section-->
    <div class="hero">
		<div class="container">
			<div class="hero-description">
				<h1 class="hero-title">
					<?php echo $hero_description_title; ?>
				</h1>
				<p><?php echo $hero_description_subtitle; ?></p>
			</div>
			<div class="hero-inner">
				<ul class="link-list">
          <?php
          if ( !is_null( $socials ) ) {
            foreach( $socials as $value ) {
              $link = $value['social_link'];
              $icon = $value['social_icon'];

              echo '<li class="link-list-item"><a href="' .$link. '" class="list-item-link"><i class="fab fa-' .$icon. '"></i></a></li>';
            }
          }
          ?>
					<li class="vertical-process-wrapper">
						<div class="vertical-process stop">
							<span class="vertical-process-circle"></span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--hero section end-->

	<!--values section-->
	<div class="values animsition">
		<div class="container">
			<div class="values-inner">
				<div class="row justify-content-center">
              <?php
              if ( !is_null( $value_tail ) ) {
                foreach( $value_tail as $item ) {
                  $title       = $item['value_title'];
                  $description = $item['value_description'];
                  $more_link        = $item['value_link']['link'];
                  $more_text        = $item['value_link']['text'];
                  ?>

                  <div class="col-xs-12 col-sm-8 col-md-4">
                    <div class="value-col">
                      <h2 class="value-title">
                        <?php echo $title; ?>
                      </h2>
                      <p><?php echo $description; ?></p>
                      <a href="<?php echo $more_link; ?>" class="value-link"><span></span><?php echo $more_text; ?></a>
                    </div>
					        </div>
                  <?php
                }
              }
              ?>
					
				</div>
			</div>
		</div>
	</div>
	<!--values section end-->

	<!-- services section-->
	<div class="services">
		<div class="container">
			<div class="services-inner">
				<h2 class="services-title title"><?php echo $services_title ?></h2>
				<div class="horizontal-process-wrapper">
					<div class="horizontal-process">
						<span class="horizontal-process-circle"></span>
					</div>
				</div>
			</div>
			<div class="services-gallery">
				<div class="row">
        <?php
              if ( !is_null( $services_gallery ) ) {
                foreach( $services_gallery as $item ) {
                  $image            = $item['tail_image'];
                  $title            = $item['tail_title'];
                  $description      = $item['frame_description'];
                  $frame_link       = $item['frame_link']['link'];
                  $frame_text       = $item['frame_link']['text'];
                  ?>

              <div class="col-img">
                <ul class="before">
                    <li><img class="frame-icon" src="<?php echo $image; ?>" alt="<?php echo $title; ?>"></li>
                  <li>
                    <h4 class="frame-title"><?php echo $title; ?></h4>
                  </li>
                </ul>
                <ul class="after">
                  <li>
                    <h4 class="frame-title"><?php echo $title; ?></h4>
                  </li>
                  <li>
                    <p><?php echo $description; ?></p>
                  </li>
                  <li><a href="<?php echo $frame_link; ?>" class="frame-link"><?php echo $frame_text; ?></a></li>
                </ul>
					    </div>
                  <?php
                }
              }
              ?>
					<div class="col-img">
            <img src="<?php echo $logo_image?>" alt="logo" class="logo-img">
						<img src="<?php echo $logo_title?>" alt="logo title" class="logo-img-title">
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- services section end -->

	<!-- featured project section -->
	<div class="featured-project">
		<div class="container">
			<div class="featured-project-inner">
				<div class="row justify-content-lg-between justify-content-md-center">
					<div class="col-sm-12 col-md-8 col-lg-6 pull-lg-left">
						<div class="column-left">
							<h2 class="featured-project-title title"><?php echo $featured_title; ?></h2>
							<p><?php echo $featured_description; ?></p>
							<div class="common-btn"><a href="<?php echo $featured_button_link; ?>" class="btn"><?php echo $featured_button_text; ?></a>
							</div>
						</div>
						<div class="vertical-process-wrapper-2">
							<div class="vertical-process-2 stop">
								<span class="vertical-process-2-circle"></span>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-8 col-lg-6 pull-lg-right">
						<div class="column-right">
							<figure>
								<figcaption>
									<p><?php echo $featured_image_caption; ?></p><span class="figcaption-span"></span>
								</figcaption>
								<img class="feat-proj-img" src="<?php echo $featured_image; ?>" alt="<?php echo $featured_title; ?>">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- featured project end -->

	<!-- call to action section -->
	<div class="call-to-action" style="background-image: url(<?php echo $action_background; ?>);">
		<div class="container">
			<div class="call-to-action-inner">
				<div class="row justify-content-center">
					<div class="col-sm-6">
						<h3 class="call-to-action-title"><?php echo $action_title; ?></h3>
						<p><?php echo $action_description; ?></p>
						<div class="common-btn"><a href="<?php echo $action_button_link; ?>" class="btn"><?php echo $action_button_text; ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- call to action end -->


<?php
get_footer();
