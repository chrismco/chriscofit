
<?php
// get_template_part('inc/home/banner');
// get_template_part('inc/home/blocks');
?>

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h2><i>Dieting isn't</i><strong>LIVING</strong></h2>
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post();
                        the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
// get_template_part('inc/home/services');
?>