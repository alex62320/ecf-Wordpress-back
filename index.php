<?php

get_header();
?>
    <div class="grid grid-cols-3">
        <div class="col-start-2">
<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
            <article class="bg-red-800 m-5 border border-red-800 rounded-lg">
                <h2 class="text-4xl text-gray-300 hover:text-gray-400 p-2">
                    <a href="<?= get_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <span class="text-gray-300 p-2"><?php the_time( get_option( 'date_format' ) ); ?></span>
                <?php if ( has_post_thumbnail() ): ?>
            <div>
                <?php the_post_thumbnail( 'large' ); ?>
            </div>
            <?php the_terms( $post->ID, 'post_tag', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
            <?php endif ?>
    </article>
        <?php
    endwhile;
else:
    ?>
        <p>Aucun post n'a été trouvé</p>
    <?php 
endif;
?>
        </div>
    </div>
<?php
get_footer();