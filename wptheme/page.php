<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="page-style">
    </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no content available.</p>
<?php endif; ?>
    </div>
    </div>
</div>
<?php get_footer() ?>