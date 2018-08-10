<?php
/*
Template Name: Home
*/
 ?>
<?php get_header(); ?>

<div id="content" class="container-fluid">
    <main id="main">

        <section class="section main-slider"  id="home">
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

        <section class="section about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 btn-about">
                        <a href="#want-to-know-more" title=""><span>می‌خواهم بیشتر بدانم</span></a>
                    </div>
                    <div class="col-md-6 btn-about">
                        <a href="#getSupport" title=""><span>می‌خواهم با حامی همکاری کنم</span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span id="want-to-know-more" class="who-is-us"></span>
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-aboutus">
                <?php 
                    $video_post         = get_post( 92, ARRAY_A );
                    $video_meta         = get_post_custom(92);
                    $video_id           = $video_meta['wpcf-video-id'][0];
                    $video_capture      = $video_meta['wpcf-video-capture'][0];
                 ?>
                <div class="container">
                    <img src="<?= $video_capture; ?>" alt="درباره همگرا" data-toggle="modal" data-target="#exampleModalCenter">
                </div>
                
                <div class="modal modal-wide fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <?php 
                            if ($video_id) { ?>
                                <div class="h_iframe-aparat_embed_frame"> <span style="display: block;padding-top: 56%"></span><iframe src="https://www.aparat.com/video/video/embed/videohash/<?php echo $video_id ?>/vt/frame" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" ></iframe></div>
                        <?php } ?>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <section class="section services" id="services">
            <div class="container">
                <div class="icon-service"></div>
                <h2>در همگرا برای تمام نیازهای تان راه حلی داریم !</h2>

                <div class="row our-supports">
                    <div class="col-md-3 col-sm-3">
                        <div class="support-details">
                         <?php 
                            $thePostIdArray = array("67","70", "71", "72", "78", "81","83");
                            $limit = 7; $counter = 0;
                            if (have_posts()) : 
                                foreach ($thePostIdArray as $id) { ?>
                                    <div id="post-<?= $id; ?>">
                                     <?php
                                        $queried_post = get_post($id);
                                        echo $queried_post->post_content;
                                     ?>
                                    </div>
                                <?php  } 
                            endif;
                         ?>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-9">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="hegsa" data-id="67">
                                    <?php echo get_the_title( 67 );?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="hegsa" data-id="70">
                                    <?php echo get_the_title( 70 ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="hegsa" data-id="71">
                                    <?php echo get_the_title( 71 ); ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="hegsa" data-id="72">
                                    <?php echo get_the_title( 72 ); ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="hegsa" data-id="78">
                                    <?php echo get_the_title( 78 ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="hegsa" data-id="81">
                                    <?php echo get_the_title( 81 ); ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="hegsa" data-id="83">
                                    <?php echo get_the_title( 83 ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="section our-advantages" id="advantages">
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
                        </a>
                      </h4>
                    </div>

                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="container panel-body">
                        <?php echo $post_advantages['post_content']; ?>
                      </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section partners" id="partners">
            <div class="container">
                <div class="row no-margin">
                    <div class="icon col-sm-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/icon_1.png" alt="همکاران تجاری">
                        <h2>همکاران تجاری</h2>
                    </div>
                </div>
                <div class="row no-margin">
                    <div class="col-md-4 col-sm-4 motion-capture">
                        <h3>تست بازی</h3>
                    </div>
                    <div class="col-md-4 col-sm-4 infrastructure-equipment">
                        <h3>استدیو صدا</h3>
                    </div>
                    <div class="col-md-4 col-sm-4 sounding">
                        <h3>مشاوره حقوقی</h3>
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
                                $partner_img = $meta_data["wpcf-partner-img"];
                                $partner_url = $meta_data["wpcf-partner-url"];?>

                                <div class="slide">
                                    <img class="" src="<?= $partner_img[0]; ?>" alt="<?php the_title(); ?>" />
                                    <h3><a href="<?= $partner_url[0] ?>"><?php the_title(); ?></a></h3>
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

        <section class="section get-support" id="getSupport">
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
                            </a>
                        </h4>
                    </div>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="container panel-body">
                            <?php echo $post_support_1['post_content']; ?>
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
                            </a>
                        </h4>
                    </div>

                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="container panel-body">
                            <?php  echo $post_support_2['post_content']; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gif-view">
                <div class="container">
                    <?php $gif_url =  get_post_custom(102);?>
                    <img src="<?php echo $gif_url['wpcf-video-capture'][0]; ?>" alt="مراحل ثبت نام">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/library/images/git-icon.png" alt="مراحل ثبت نام"> -->
                </div>
            </div>
            
            <div class="video-register">
               <!--  <div class="container">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/video.png" alt="">
                </div> -->
            
                <?php 
                    $video_post         = get_post( 97, ARRAY_A );
                    $video_meta         = get_post_custom(97);
                    $video_id           = $video_meta['wpcf-video-id'][0];
                    $video_capture      = $video_meta['wpcf-video-capture'][0];
                 ?>
                <div class="container">
                    <img src="<?= $video_capture; ?>" alt="درباره همگرا" data-toggle="modal" data-target="#ModalCenter">
                </div>
                
                <div class="modal modal-wide fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <?php 
                            if ($video_id) { ?>
                                <div class="h_iframe-aparat_embed_frame"> <span style="display: block;padding-top: 56%"></span><iframe src="https://www.aparat.com/video/video/embed/videohash/<?php echo $video_id ?>/vt/frame" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" ></iframe></div>
                        <?php } ?>
                    </div>
                  </div>
                </div>
            </div>

            <div class="container">
                <div class="row last-row">
                    <div class="col-md-4 col-sm-6 icon-1">
                        <a href="https://portal.ircg.ir/IRCGAssets/Pages/ShowForm?pid=4407" title="می خواهم تیمم را ثبت نام کنم">
                            <!-- <span class="icon"></span> -->
                            <span>می خواهم تیمم را ثبت نام کنم</span>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 icon-2">
                        <a href="https://portal.ircg.ir/IRCGAssets/Pages/ShowForm?pid=4395" title="می خواهم شرکتم را ثبت نام کنم">
                            <!-- <span class="icon"></span> -->
                            <span>می خواهم شرکتم را ثبت نام کنم</span>
                        </a>
                    </div>
                    <div class="col-md-4  icon-3">
                        <a href="https://portal.ircg.ir/IRCGAssets/Pages/ShowForm?pid=4432" title="می خواهم حامی تجاری شوم">
                            <!-- <span class="icon"></span> -->
                            <span>می خواهم حامی تجاری شوم</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section faq" id="faq">
            <div class="container">
                <div class="row no-margin">
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
                <div class="row no-margin tab-collection">

                    <!-- Nav tabs -->
                    <div class="overflow">
                        <ul class="nav nav-tabs" role="tablist">
                            <?php 
                            foreach ($faq_posts as $key => $faq_post) : ?>

                                <li role="presentation"><a href="#faq_<?= $key; ?>" aria-controls="faq_<?= $key; ?>" role="tab" data-toggle="tab"><?= $faq_post->post_title ?></a></li>

                            <?php endforeach ?> 
                        </ul>
                    </div>

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

        <section class="section media" id="media">
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
