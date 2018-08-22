<section id="generic-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact Chris</h2>
            </div>
        </div>
    </div>
</section>
<section id="main-content">
    <div class="container">
        <div class="row content">
            <div class="col-sm-8">
                <p>I'm  here to take care of your <strong>fitness</strong> needs. Have any questions or concerns? PX Muscle and Nutrition and I truly understand. Feel free to contact us anytime at  with your important questions:</p>
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post();
                        the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-4">
                <address>
                    <strong>PX Muscle and Nutrition</strong><br>
                    11807 Westheimer Rd PMB 839<br>
                    Houston, TX 77077<br>
                    <abbr title="Phone">P:</abbr> 281.509.5722
                </address>
            </div>
        </div>
    </div>
</section>



