<!-- If current author is a subscriber then show its profile image and his name -->

<div class="row profile-author">
    <?php
                    if ( user_can( $current_auth, "subscriber" ) ) {  ?>
    <div class="row" style="text-align: center;">
        <img src="<?php echo esc_url( get_avatar_url( get_the_author_meta( 'ID' ) ) ); ?>" /><br>
        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
            <h4><?php the_author(); ?></h4>
        </a>
    </div>
    <?php } ?>
</div>
