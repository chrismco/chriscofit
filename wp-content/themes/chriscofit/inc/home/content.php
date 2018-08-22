<?php
get_template_part('inc/home/banner');
?>
<?php
get_template_part('inc/home/blocks');
?>
<section>
<div class="container">
    <div class="content">
        <div class="row">
        <div class="col-md-6">
            <img class="img-responsive chris-kfir" src="<?php echo get_stylesheet_directory_uri(); ?>/images/chris-kfir.png" alt="">
        </div>
            <div class="col-md-6">
                <h2>Get To Know Chris</h2>
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post();
                        the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <a class="green-btn" target="_blank" href="<?php bloginfo('url') ?>/contact/">Transform Me</a>
                <!-- <a class="green-btn" href="/30day/">Transform Me</a> -->
            </div>
          
        </div>
    </div>
</div>
</section>
<section id="clients">
<div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <?php echo do_shortcode( '[slide-anything id="54"]' ); ?>
        
        
        </div>
        
        </div>
</div>

</section>


<?php
get_template_part('inc/home/services');
?>