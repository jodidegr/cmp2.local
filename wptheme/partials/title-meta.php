<div class="col-sm-12 col-md-4 col-lg-4">
<p class="post-meta-text"><strong>AUTEUR:</strong> <em> <?php the_author(); ?></em></p>
<p class="post-meta-text"><strong>GEPOST OP:</strong> <em> <?php the_time('jS F Y'); ?></em></p>
<p class="post-meta-text"><strong>CATEGORIE:</strong> <em> <?php the_category(', '); ?></em></p>
<p class="post-meta-text"><strong>VORIGE POST:</strong> <em> <?php previous_post( '%', '', 'yes', 'yes'); ?></em></p>
<p class="post-meta-text"><strong>VOLGENDE POST:</strong> <em> <?php next_post( '%', '', 'yes', 'yes'); ?></em></p>
</div>