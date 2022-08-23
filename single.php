<?php
get_header();
?>
    <div class="grid grid-cols-3">
        <div class="col-start-2">
<?php
if (have_posts()):
        the_post();
        ?>
        <article class="bg-red-800 m-5 border border-red-800 rounded-lg">
            <h2 class="text-4xl text-gray-300 hover:text-gray-400 p-2"><?php the_title() ?></h2>
            <?php if ( has_post_thumbnail() ): ?>
            <div>
                <?php the_post_thumbnail( 'large' ); ?>
            </div>
            <?php endif ?>
            <p><?php the_content(); ?></p>
            
        </article>
    <?php
endif;
?>
        </div>
    </div>
<?php
get_footer();