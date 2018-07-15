<?php
/*
Template Name: Home
*/
 ?>
<?php get_header(); ?>

<div id="content" class="container-fluid">
    <main id="main">

        <section class="main-slider" data-section-name="home">
            <div class="inner-content container">
                <?php
                    $args = array(
                        'offset'           => 0,
                        'category'         => '',
                        'category_name'    => '',
                        'orderby'          => 'order',
                        'order'            => 'ASC',
                        'include'          => '',
                        'exclude'          => '',
                        'meta_key'         => '',
                        'meta_value'       => '',
                        'post_type'        => 'slider-plugin',
                        'post_mime_type'   => '',
                        'post_parent'      => '',
                        'post_status'      => 'publish',
                        'suppress_filters' => true
                    );
                    $slides = get_posts($args);
                ?>
                <div class="owl-carousel owl-theme main_slider">
                    <?php
                        foreach(  $slides as $key => $args ){
                            $meta 	  	= get_post_meta($slides[$key]->ID);
                            $img 		= $meta['wpcf-image-slider'];
                        ?>
                        <?php $meta ?>
                        <div class="slide">
                            <img class="" src="<?= $img[0]; ?>" alt="" />
                        </div>

                    <?php } ?>
                </div>
            </div>
        </section>

         <section class="about" data-section-name="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 btn-about">
                        <a href="#"><span>می‌خواهم بیشتر بدانم</span></a>
                    </div>
                    <div class="col-md-6 btn-about">
                        <a href="#"><span>می‌خواهم با حامی همکاری کنم</span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <span class="who-is-us"></span>
                        <h1>ما کیستیم</h1>
                    </div>
                    <div class="col-md-12">
                        <p>ساختار حمایتی همگرا در سال 1396 متولد شد تا حمایت‌های بنیاد ملی بازی‌های رایانه‌ای در حوزه‌های مختلف صنعت بازی را همگرا کند! ما در همگرا با تجربه‌ای طولانی، شما را در مسیر موفقیت همراهی کرده و آنچه را برای رشد احتیاج دارید، در اختیارتان قرار می‌دهیم. </p>
                    </div>
                </div>
            </div>

            <br><br><br><br>
         </section>

    </main>


</div>


<?php get_footer(); ?>
