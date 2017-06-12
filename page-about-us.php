<?php while (have_posts()) : the_post(); ?>
    <div class="body-sidebar about">
        <?php dynamic_sidebar('aboutsb'); ?>
    </div>
<?php endwhile; ?>
