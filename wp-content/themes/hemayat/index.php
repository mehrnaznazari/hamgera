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

        <section class="section about" data-section-name="about">
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

        <section class="section services" data-section-name="services">
            <div class="container">
                <div class="icon-service"></div>
                <h2>در همگرا برای تمام نیازهای تان راه حلی داریم !</h2>

                <div class="row our-supports">
                    <div class="col-md-3">
                        <div class="support-details">
                            <strong>به تجهیزات، امکانات و محل استقرار نیاز دارید؟ </strong>
                            <p>کمبود امکانات و نداشتن تجهیزات به روز، رسیدن به اهداف را سخت و یا حتی غیرممکن میسازد. تخفیف مناسب برای خدمات زیرساختی (مانند سرور، صداگذاری، رندرینگ، موشن کپچر و ...)، وام حمایتی برای تهیه محل استقرار، خرید تجهیزات سختافزاری/ نرمافزاری و لایسنس‌های مورد نیاز، در کنار ما ممکن خواهد شد.</p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="hegsa">
                                    به جذب تسهیلات مالی و سرمایه گذاری نیاز دارید؟
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="hegsa">
                                    به تجهیزات، امکانات و محل استقرار نیاز دارید؟
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="hegsa">
                                    به تجهیزات، امکانات و محل استقرار نیاز دارید؟
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="hegsa">
                                    به تجهیزات، امکانات و محل استقرار نیاز دارید؟
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="hegsa">
                                    به تجهیزات، امکانات و محل استقرار نیاز دارید؟
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="hegsa">
                                    به تجهیزات، امکانات و محل استقرار نیاز دارید؟
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="hegsa">
                                    به تجهیزات، امکانات و محل استقرار نیاز دارید؟
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="section our-advantages" data-section-name="advantages">
            <!-- <div class="container"> -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-advantages">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="container panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="arrow"></span>
                                چرا بهترین حامی صنعت بازی هستیم؟ </a>
                          </h4>
                        </div>

                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="container panel-body">
                            <ul>
                                <li><strong>کیفیت:</strong>
                                    <span>با ما همگرا شوید تا به شما خدمات باکیفیت ارائه دهیم. هدف‌مان این است که راه رشد شما را کوتاه‌تر و هموارتر کنیم!</span>
                                </li>
                                <li><strong>حمایت بدون بازپرداخت :</strong>
                                    <span>بخش قابل توجهی از حمایت‌های ما بدون بازپرداخت است. رشد شما در پایان سالِ حمایتی‌تان برای ما حکم بازپرداخت را خواهد داشت. </span>
                                </li>
                                <li><strong>جامعیت:</strong>
                                    <span>تیم ما از بطن صنعت گیم متولد شده است. ما عمیقا نیازها و دغدغه‌های بازیسازان را لمس کرد‌ه‌ایم. همچنین، با ملاقات‌های مداوم با بازیسازان، نیازسنجی کاملی از دغدغه‌های فعالان صنعت بازی در ایران تهیه کرده‌ و برای رفع هرکدام حمایت‌هایی درنظر گرفته‌ایم. </span>
                                </li>
                                <li><strong>پشتیبانی: </strong>
                                    <span>دبیرخانه همگرا، از تیمی متمرکز، فعال، متخصص و مشتاق تشکیل شده که آماده‌ی همراهی با شما و پاسخگویی به سوالات‌تان است. شما در تعامل با این تیم با تجربه‌ی جدیدی از همراهی روبه‌رو خواهید شد. </span>
                                </li>
                                <li><strong>امنیت: </strong>
                                    <span>همگرا زیرمجموعه‌ی متولی صنعت بازی، بنیاد ملی بازی‌های رایانه‌ای، است، با ما اطلاعات ثبت‌نام و حقوقی شما ایمن خواهد بود.</span>
                                </li>

                            </ul>

                          </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </section>


            <br><br><br><br>
    </main>


</div>


<?php get_footer(); ?>
