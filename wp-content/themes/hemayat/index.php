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
                            <img class="" src="<?= $img[0]; ?>" alt="همگرا" />
                        </div>

                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="section about" data-section-name="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 btn-about">
                        <a href="#" title=""><span>می‌خواهم بیشتر بدانم</span></a>
                    </div>
                    <div class="col-md-6 btn-about">
                        <a href="#" title=""><span>می‌خواهم با حامی همکاری کنم</span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <span class="who-is-us"></span>
                        <?php 
                            $post_about = get_post( 34, ARRAY_A );
                        ?>
                        <h1><?php echo $post_about['post_title']; ?></h1>
                        <!-- <h1>ما کیستیم</h1> -->
                    </div>
                    <div class="col-md-12">
                        <p><?php echo $post_about['post_content']; ?></p>
                       <!--  <p>ساختار حمایتی همگرا در سال 1396 متولد شد تا حمایت‌های بنیاد ملی بازی‌های رایانه‌ای در حوزه‌های مختلف صنعت بازی را همگرا کند! ما در همگرا با تجربه‌ای طولانی، شما را در مسیر موفقیت همراهی کرده و آنچه را برای رشد احتیاج دارید، در اختیارتان قرار می‌دهیم. </p> -->
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
                            <?php 
                                $post_mission = get_post( 35, ARRAY_A );
                                echo $post_mission['post_content'];
                            ?>
                           <!--  <strong>در همگرا چه هدفی داریم؟ </strong>
                            <p>هدف اصلی، همگرا کردن حمایت‌هایی است که در بنیاد ملی بازی‎‌های رایانه‌ای به بازیسازان ارائه می‌کنیم تا با متنوع‌ترین خدمات، صنعت بازی ایران را توانمند کنیم.</p> -->
                        </div>

                    </div>
                    <div class="col-md-6 col-l">
                        <div class="bg-title">
                            <div class="vision">
                                <h2>چشم‌انداز</h2>
                            </div>
                        </div>
                        <div>
                            <?php 
                                $post_vision = get_post( 38, ARRAY_A );
                                echo $post_vision['post_content'];
                            ?>
                            <!-- <strong>چه چشم‌اندازی را دنبال می‌کنیم؟</strong>
                            <p>شفاف‌سازی حمایت‌های بنیاد ملی بازی‌های رایانه‌ای، ارتقاء تعالی شرکت‌ها/ تیم‌ها و تحول ساختاری صنعت بازی ایران از طریق ارائه‌ی متنوع‌ترین، بهترین و سریع‌ترین خدمات حمایتی </p> -->
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
                                    <?php 
                                       /* $hegsa_1 = get_post( 67, ARRAY_A );
                                        echo $hegsa_1['post_title'];
                                        echo $hegsa_1['post_content'];*/
                                     ?>
                                    <?php echo get_the_title( 67 );
                                    //echo get_post_field('post_content', 67);

                                     ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="hegsa">
                                    <?php echo get_the_title( 70 ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="hegsa">
                                    <?php echo get_the_title( 71 ); ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="hegsa">
                                    <?php echo get_the_title( 72 ); ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="hegsa">
                                    <?php echo get_the_title( 78 ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="hegsa">
                                    <?php echo get_the_title( 81 ); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="hegsa">
                                    <?php echo get_the_title( 83 ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="section our-advantages" data-section-name="advantages">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-advantages">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="container panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="arrow"></span>
                            <?php 
                                $post_advantages = get_post( 40, ARRAY_A );
                                echo $post_advantages['post_title'];
                            ?>
                            <!-- چرا بهترین حامی صنعت بازی هستیم؟ -->
                        </a>
                      </h4>
                    </div>

                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="container panel-body">
                        <?php echo $post_advantages['post_content']; ?>
                        <!-- <ul>
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
                        </ul>-->

                      </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section partners" data-section-name="partners">
            <div class="container">
                <div class="row no-margin">
                    <div class="icon col-sm-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/icon_1.png" alt="همکاران تجاری">
                        <h2>همکاران تجاری</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 motion-capture">
                        <h3>موشن کپچر</h3>
                    </div>
                    <div class="col-md-4 infrastructure-equipment">
                        <h3>تجهیزات زیرساختی</h3>
                    </div>
                    <div class="col-md-4 sounding">
                        <h3>صداگذاری</h3>
                    </div>
                </div>
                <div class="owl-carousel owl-theme partner-slider">
                   <?php
                        $partner_slides = get_posts( array(
                            'post_type'      => 'partner-slider',
                            'posts_per_page' => -1,
                            'post_status'    => 'publish',
                            'post_parent'    => null
                        ) );
                         
                        if ( $partner_slides ) {
                            foreach ( $partner_slides as $post ) {
                                setup_postdata( $post );
                                $meta_data   = get_post_meta(get_the_ID());
                                $partner_img = $meta_data["wpcf-partner-img"];?>

                                <div class="slide">
                                    <img class="" src="<?= $partner_img[0]; ?>" alt="<?php the_title(); ?>" />
                                    <h3><?php the_title(); ?></h3>
                                </div>
                            <?php    
                                the_excerpt();
                            }
                           wp_reset_postdata();
                        }
                        ?>
                </div>
            </div>
        </section>

        <section class="section get-support" data-section-name="getSupport">
            <div class="panel-group" id="register" role="tablist" aria-multiselectable="true">
                <div class="panel panel-converge">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="container panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#register" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="arrow"></span>
                                <?php 
                                    $post_support_1 = get_post( 42, ARRAY_A );
                                    echo $post_support_1['post_title'];
                                ?>
                                <!-- چگونه با ما همگرا شوید؟  -->
                            </a>
                        </h4>
                    </div>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="container panel-body">
                            <?php echo $post_support_1['post_content']; ?>
                        <!-- <ul>
                            <li><strong>تیم / شرکت: </strong>
                                <span>اولین پیش‌شرط برای پیوستن به همگرا این است که تیم یا شرکت بازیسازی باشید.</span>
                            </li>
                            <li><strong>ساخت بازی: </strong>
                                <span>برای پیوستن به همگرا باید در چهار سال گذشته حداقل دو بازی ساخته و در بازار عرضه کرده باشید</span>
                            </li>
                            <li><strong>فعال بودن: </strong>
                                <span>شما باید حتما تیم کاری فعالی داشته باشید که هم‌اکنون در حال کار روی یک عنوان بازی باشد.</span>
                            </li>
                        </ul> -->

                        </div>
                    </div>
                </div>

                <div class="panel panel-converge">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="container panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#register" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="arrow"></span>
                                <?php 
                                    $post_support_2 = get_post( 44, ARRAY_A );
                                    echo $post_support_2['post_title'];
                                ?>
                                <!-- شما را چگونه می‌سنجیم؟ -->
                            </a>
                        </h4>
                    </div>

                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="container panel-body">
                            <?php  echo $post_support_2['post_content']; ?>
                            <!-- <p>به منظور شناخت تیم‌ها و شرکت‌های بازیساز، از کمک کارشناسان متخصص استفاده می‌کنیم تا زمینه‌های زیر را بررسی کنیم:</p>
                            <ul>
                                <li><strong>‌کیفیت بازی‌تان: </strong>
                                    <span>نوع بازی،‌ پیچیدگی تولید‌، قابلیت اجرا بر بستر اینترنت، تست‌های سازگاری و عملکرد بازی تیم/ شرکت شما، 49% از امتیازتان را شکل می‌دهند.</span>
                                </li>
                                <li><strong> اثرگذاری بازی‌تان:</strong>
                                    <span> شاخص¬های ارزشی و اخلاقی بازی شما که براساس اصول دقیق روانشناسی و جامعه‌شناسی استوار هستند، 10% از امتیاز شما را شکل می‌دهند.</span>
                                </li>
                                <li><strong>‌وضعیت حقوقی‌تان: </strong>
                                    <span>تعداد نیروی انسانی بیمه شده، میزان درآمد داخلی و خارجی، شرکت در جشنواره‌ها و نمایشگاه‌ها و... بررسی می‌شوند تا 30% از امتیاز شما را شکل ‌دهند.</span>
                                </li>
                                <li><strong>میزان همکاری‌تان با ما: </strong>
                                    <span>به‌کارگیری کارآموزان و انجام پژوهش‌های مرتبط با صنعت بازی با سایر اعضای همگرا، 11% از امتیاز شما را به خود اختصاص می‌دهند.</span>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="gif-view">
                <div class="container">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/git-icon.png" alt="">
                </div>
            </div>

            <div class="video-register">
                <div class="container">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/video.png" alt="">
                </div>
            </div>

            <div class="container">
                <div class="row last-row">
                    <div class="col-md-4 icon-1">
                        <a href="#" title="">
                            <span class="icon"></span>
                            <span>فرد حقیقی هستم می‌خواهم شرکت رو ثبت کنم  </span>
                        </a>
                    </div>
                    <div class="col-md-4 icon-2">
                        <a href="#" title="">
                            <span class="icon"></span>
                            <span> می‌خواهم حامی تجاری شوم</span>
                        </a>
                    </div>
                    <div class="col-md-4 icon-3">
                        <a href="#" title="">
                            <span class="icon"></span>
                            <span>فرد حقیقی هستم می‌خواهم شرکت رو ثبت کنم  </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section faq" data-section-name="faq">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="icon-faq"></span>
                        <h2>هنوز سوال دارم</h2>
                    </div>
                </div>
                <?php 
                    $args = array(
                        'post_type'   => 'post', 
                        'category_name'    => 'faq',
                        'numberposts' => -1,
                        'post_status' => 'any' ,
                        'order' => 'ASC',
                    );

                    $faq_posts  = get_posts( $args );
                ?>
                <div class="row no-margin">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <?php 
                        foreach ($faq_posts as $key => $faq_post) : ?>

                            <li role="presentation"><a href="#faq_<?= $key; ?>" aria-controls="faq_<?= $key; ?>" role="tab" data-toggle="tab"><?= $faq_post->post_title ?></a></li>

                        <?php endforeach ?> 
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php 
                        foreach ($faq_posts as $key => $faq_post) :  ?>
                            
                            <div role="tabpanel" class="tab-pane" id="faq_<?= $key; ?>">
                                <?= $faq_post->post_content; ?>
                            </div>

                        <?php endforeach ?> 
                    </div>

                </div>  
            </div>
        </section>

        <section class="section media" data-section-name="media">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 top-row">
                        <span class="icon-bg"></span>
                        <h2>افراد معروف درباره ما چه میگویند</h2>
                    </div>
                </div>
            </div>
            
            <div class="recommendations">
                <div class="container">
                    <div class="owl-carousel owl-theme recom-slider">
                        <?php
                            $args_recom = array(
                                'category'         => '',
                                'orderby'          => 'order',
                                'order'            => 'ASC',
                                'post_type'        => 'recom-slider',
                                'post_status'      => 'publish',
                                'posts_per_page'   => -1
                            );
                            $recom_slides = get_posts($args_recom);

                            foreach( $recom_slides as $key => $recom_slide ){
                                $meta_recom      = get_post_meta($recom_slides[$key]->ID);
                                $advisor_img     = $meta_recom['wpcf-adviser-img'];
                                $advisor_name    = $meta_recom['wpcf-adviser-name'];
                            ?>
                            <div class="slide">
                                <img src="<?= $advisor_img[0]; ?>" alt="<?= $advisor_name[0]; ?>" />
                                <div class="text-slide">
                                    <?php echo $recom_slide->post_content; ?>
                                    <span><?= $advisor_name[0]; ?></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 middle-row">
                        <span class="icon-bg"></span>
                        <h2> رسانه ها در باره ما چه می گویند</h2>
                    </div>
                </div>
            </div>

            <div class="in-media">
                <div class="container">
                    <div class="owl-carousel owl-theme media-slider">
                        <?php
                            $args_media = array(
                                'category'         => '',
                                'orderby'          => 'order',
                                'order'            => 'ASC',
                                'post_type'        => 'media-slider',
                                'post_status'      => 'publish',
                                'posts_per_page'   => -1
                            );
                            $media_slides = get_posts($args_media);

                            foreach( $media_slides as $key => $media_slide ){
                                $meta_media    = get_post_meta($media_slides[$key]->ID);
                                $media_img     = $meta_media['wpcf-media-slide-img'];
                                $media_url     = $meta_media['wpcf-media-slide-url'];
                            ?>
                            <div class="slide">
                                <img  src="<?= $media_img[0]; ?>" alt="<?= $media_slide->post_title; ?>" />
                                <p><?php echo $media_slide->post_title; ?></p>
                                <a href="<?= $media_url[0]; ?>" title="<?= $media_slide->post_title; ?>">+ادامه مطلب</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </section>
    </main>


</div>


<?php get_footer(); ?>
