<div class="col-sm-12 col-md-12 col-lg-12">
<?php if( have_comments()) : ?>
<h3 id="comments-title">
    <?php 
        printf  (
                    _n('One Response to %2$s','%1$s Responses to %2$s', get_comments_numbers(), 'zonderzorgen'),
                    number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>'
                ); 
    ?>
</h3>

<ol class="commentlist">
    <?php
        wp_list_comments();
    ?>
</ol>

<?php if(get_comments_pages_count() > 1 && get_option('page_comments')) : ?>
<div class="navigation">
    <div class="nav-previous">
        <?php previous_comments_link( __('<span class="meta-nav>&larr;</span> Older Comments', 'zonderzorgen') ); ?>
    </div>
    <div class="nav-next">
        <?php next_comments_link( __('Newer Comments <span class="meta-nav>&r"arr;</span>', 'zonderzorgen') ); ?>
    </div>
</div>
<?php endif; ?>

<?php if (! comments_open() && get_comments_number()) : ?>
<p class="nocomments">
    <?php _e( 'Comments are closed' , 'zonderzorgen' ); ?>
</p>
<?php endif; ?>

<?php 
    endif;
    // Einde van have_comments()    
 ?>

 <?php comment_form(); ?>
 </div>
