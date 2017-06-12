<?php while (have_posts()) : the_post(); ?>
    <div class="body-sidebar contact">
        <?php dynamic_sidebar('contactsb'); ?>
    </div>
<?php endwhile; ?>
