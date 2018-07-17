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

            <div class="about-targets">
                <div class="container">
                    <div class="col-md-6 col-r">
                        <div class="bg-title">
                            <div class="mission">
                                <h2>هـــدف <h2>
                            </div>
                        </div>
                        <div>
                            <strong>در همگرا چه هدفی داریم؟ </strong>
                            <p>هدف اصلی، همگرا کردن حمایت‌هایی است که در بنیاد ملی بازی‎‌های رایانه‌ای به بازیسازان ارائه می‌کنیم تا با متنوع‌ترین خدمات، صنعت بازی ایران را توانمند کنیم.</p>
                        </div>

                    </div>
                    <div class="col-md-6 col-l">
                        <div class="bg-title">
                            <div class="vision">
                                <h2>چشم‌انداز</h2>
                            </div>
                        </div>
                        <div>
                            <strong>چه چشم‌اندازی را دنبال می‌کنیم؟</strong>
                            <p>شفاف‌سازی حمایت‌های بنیاد ملی بازی‌های رایانه‌ای، ارتقاء تعالی شرکت‌ها/ تیم‌ها و تحول ساختاری صنعت بازی ایران از طریق ارائه‌ی متنوع‌ترین، بهترین و سریع‌ترین خدمات حمایتی </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-aboutus">
                <div class="container">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/video.png" alt="">
                </div>
            </div>
        </section>

        <section class="services" data-section-name="services">
            <div class="container">
                <div class="icon-service"></div>
                <h2>در همگرا برای تمام نیازهای تان راه حلی داریم !</h2>
            </div>
        </section>


            <br><br><br><br>
    </main>


</div>


<?php get_footer(); ?>
