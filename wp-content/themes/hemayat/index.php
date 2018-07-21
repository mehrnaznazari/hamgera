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
                                    <img class="" src="<?= $partner_img[0]; ?>" alt="" />
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
                            چگونه با ما همگرا شوید؟ </a>
                      </h4>
                    </div>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="container panel-body">
                        <ul>
                            <li><strong>تیم / شرکت: </strong>
                                <span>اولین پیش‌شرط برای پیوستن به همگرا این است که تیم یا شرکت بازیسازی باشید.</span>
                            </li>
                            <li><strong>ساخت بازی: </strong>
                                <span>برای پیوستن به همگرا باید در چهار سال گذشته حداقل دو بازی ساخته و در بازار عرضه کرده باشید</span>
                            </li>
                            <li><strong>فعال بودن: </strong>
                                <span>شما باید حتما تیم کاری فعالی داشته باشید که هم‌اکنون در حال کار روی یک عنوان بازی باشد.</span>
                            </li>
                        </ul>

                      </div>
                    </div>
                </div>

                <div class="panel panel-converge">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="container panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#register" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span class="arrow"></span>
                            شما را چگونه می‌سنجیم؟
                        </a>
                      </h4>
                    </div>

                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="container panel-body">
                        <p>به منظور شناخت تیم‌ها و شرکت‌های بازیساز، از کمک کارشناسان متخصص استفاده می‌کنیم تا زمینه‌های زیر را بررسی کنیم:</p>
                        <ul>
                            <li><strong>‌کیفیت بازی‌تان: </strong>
                                <span>نوع بازی،‌ پیچیدگی تولید‌، قابلیت اجرا بر بستر اینترنت، تست‌های سازگاری و عملکرد بازی تیم/ شرکت شما، 49% از امتیازتان را شکل می‌دهند.</span>
                            </li>
                            <li><strong> اثرگذاری بازی‌تان:</strong>
                                <span> شاخص¬های ارزشی و اخلاقی بازی شما که براساس اصول دقیق روانشناسی و جامعه‌شناسی استوار هستند، 1۰% از امتیاز شما را شکل می‌دهند.</span>
                            </li>
                            <li><strong>‌وضعیت حقوقی‌تان: </strong>
                                <span>تعداد نیروی انسانی بیمه شده، میزان درآمد داخلی و خارجی، شرکت در جشنواره‌ها و نمایشگاه‌ها و... بررسی می‌شوند تا 30% از امتیاز شما را شکل ‌دهند.</span>
                            </li>
                            <li><strong>میزان همکاری‌تان با ما: </strong>
                                <span>به‌کارگیری کارآموزان و انجام پژوهش‌های مرتبط با صنعت بازی با سایر اعضای همگرا، 11% از امتیاز شما را به خود اختصاص می‌دهند.</span>
                            </li>
                        </ul>

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
                    <img src="http://localhost/hamgera/wp-content/themes/hemayat/library/images/video.png" alt="">
                </div>
            </div>

            <div class="container">
                <div class="row last-row">
                    <div class="col-md-4 icon-1">
                        <a href="#" title="">
                            <span class="icon"></span>
                            <span>رد حقیقی هستم می‌خواهم شرکت رو ثبت کنم  </span>
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
                            <span>رد حقیقی هستم می‌خواهم شرکت رو ثبت کنم  </span>
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

                <div class="row no-margin">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#support_faq" aria-controls="support_faq" role="tab" data-toggle="tab">سوالات حمایت</a></li>
                        <li role="presentation"><a href="#grading_faq" aria-controls="grading_faq" role="tab" data-toggle="tab">سوالات گریدبندی</a></li>
                        <li role="presentation"><a href="#evaluation_faq" aria-controls="evaluation_faq" role="tab" data-toggle="tab">سوالات ارزیابی</a></li>
                        <li role="presentation"><a href="#registration_faq" aria-controls="registration_faq" role="tab" data-toggle="tab">سوالات ثبت نام</a></li>
                         <li role="presentation"><a href="#general_faq" aria-controls="general_faq" role="tab" data-toggle="tab">سوالات عمومی</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="support_faq">
                            <ul>
                                <li>
                                    حمایت‌ها از جنس تسهیلات هستند یا بلاعوض؟
                                    <p>حمایت‌ها هم به‌صورت بلاعوض هستند هم به صورت تسهیلات. اما اکثر حمایت‌ها بلاعوض هستند</p>
                                </li>
                                <li>
                                    حمایت‌های دریافتی را خودمان انتخاب می‌کنیم؟
                                    <p>دقیقا! با توجه به گریدی که از ارزیابی بدست آورده‌اید، می‌توانید حمایت‌هایی که به شما نمایش داده خواهد شد و مورد نیازتان است را انتخاب کرده و از آن بهره‌برداری کنید. پس از یک سال، این فرایند تکرار خواهد شد.</p>
                                </li>
                                <li>
                                    حمایت‌ها به چه صورت به دستمان خواهد رسید؟
                                    <p>بعد از فرایند ارزیابی و گریدبندی، گرید به شما اعلام شده و لیستی از حمایت‌هایی که می‌توانید از آن‌ها بهره‌برداری کنید به شما نمایش داده خواهد شد.</p>
                                </li>
                                <li>
                                    چه نوع حمایت‌هایی در برنامه‌ی شما وجود دارد؟
                                    <p>تامین تجهیزات سخت‌افزاری و نرم‌افزاری، تامین خدمات زیرساختی پشتیبانی (مانند سرور، صداگذاری، رندینگ، موشن کپچر و...)، تامین فضای استقرار شرکت‌ها و تیم‌ها، خدمات پشتیبانی، خدمات آزمون در تولید و نشر بازی‌های ویدئویی، تسهیلات مالی و سرمایه‌گذاری، تبلیغات و بازاریابی و توسعه بازار، ارائه تسهیلات مالی، مشاوره و منتورینگ است.</p>
                                </li>
                                
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="grading_faq">
                            <ul>
                                <li>
                                    حمایت‌ها از جنس تسهیلات هستند یا بلاعوض؟
                                    <p>حمایت‌ها هم به‌صورت بلاعوض هستند هم به صورت تسهیلات. اما اکثر حمایت‌ها بلاعوض هستند</p>
                                </li>
                                <li>
                                    حمایت‌های دریافتی را خودمان انتخاب می‌کنیم؟
                                    <p>دقیقا! با توجه به گریدی که از ارزیابی بدست آورده‌اید، می‌توانید حمایت‌هایی که به شما نمایش داده خواهد شد و مورد نیازتان است را انتخاب کرده و از آن بهره‌برداری کنید. پس از یک سال، این فرایند تکرار خواهد شد.</p>
                                </li>
                                <li>
                                    حمایت‌ها به چه صورت به دستمان خواهد رسید؟
                                    <p>بعد از فرایند ارزیابی و گریدبندی، گرید به شما اعلام شده و لیستی از حمایت‌هایی که می‌توانید از آن‌ها بهره‌برداری کنید به شما نمایش داده خواهد شد.</p>
                                </li>
                                <li>
                                    چه نوع حمایت‌هایی در برنامه‌ی شما وجود دارد؟
                                    <p>تامین تجهیزات سخت‌افزاری و نرم‌افزاری، تامین خدمات زیرساختی پشتیبانی (مانند سرور، صداگذاری، رندینگ، موشن کپچر و...)، تامین فضای استقرار شرکت‌ها و تیم‌ها، خدمات پشتیبانی، خدمات آزمون در تولید و نشر بازی‌های ویدئویی، تسهیلات مالی و سرمایه‌گذاری، تبلیغات و بازاریابی و توسعه بازار، ارائه تسهیلات مالی، مشاوره و منتورینگ است.</p>
                                </li>
                                <li>
                                    حمایت‌ها از جنس تسهیلات هستند یا بلاعوض؟
                                    <p>حمایت‌ها هم به‌صورت بلاعوض هستند هم به صورت تسهیلات. اما اکثر حمایت‌ها بلاعوض هستند</p>
                                </li>
                                <li>
                                    حمایت‌های دریافتی را خودمان انتخاب می‌کنیم؟
                                    <p>دقیقا! با توجه به گریدی که از ارزیابی بدست آورده‌اید، می‌توانید حمایت‌هایی که به شما نمایش داده خواهد شد و مورد نیازتان است را انتخاب کرده و از آن بهره‌برداری کنید. پس از یک سال، این فرایند تکرار خواهد شد.</p>
                                </li>
                                <li>
                                    حمایت‌ها به چه صورت به دستمان خواهد رسید؟
                                    <p>بعد از فرایند ارزیابی و گریدبندی، گرید به شما اعلام شده و لیستی از حمایت‌هایی که می‌توانید از آن‌ها بهره‌برداری کنید به شما نمایش داده خواهد شد.</p>
                                </li>
                                <li>
                                    چه نوع حمایت‌هایی در برنامه‌ی شما وجود دارد؟
                                    <p>تامین تجهیزات سخت‌افزاری و نرم‌افزاری، تامین خدمات زیرساختی پشتیبانی (مانند سرور، صداگذاری، رندینگ، موشن کپچر و...)، تامین فضای استقرار شرکت‌ها و تیم‌ها، خدمات پشتیبانی، خدمات آزمون در تولید و نشر بازی‌های ویدئویی، تسهیلات مالی و سرمایه‌گذاری، تبلیغات و بازاریابی و توسعه بازار، ارائه تسهیلات مالی، مشاوره و منتورینگ است.</p>
                                </li>
                                
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="evaluation_faq">3...</div>
                        <div role="tabpanel" class="tab-pane" id="registration_faq">4...</div>
                        <div role="tabpanel" class="tab-pane" id="general_faq">5...</div>
                    </div>

                </div>  
            </div>
        </section>



            <br><br><br><br>
    </main>


</div>


<?php get_footer(); ?>
