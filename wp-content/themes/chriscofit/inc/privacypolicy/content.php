<section id="generic-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Privacy Policy</h2>
            </div>
        </div>
    </div>
</section>

<section id="main-content">
    <div class="container">
        <div class="row content">
            <div class="col-sm-12">
            <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post();
                        the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>