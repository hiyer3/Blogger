<?php get_header(); ?>

<div class="wrapper">
<?php if(have_posts()): ?>
    <!-- Head Content -->
    <div >
    </div>
<?php while(have_posts()): the_post(); ?>
    
<?php //the_content(); ?>
<?php   
    endwhile;
    else:
    ?>
        <h1>Oops! Nothing to display.</h1>
    <?php 
    endif;
?>
</div>
<?php get_footer(); ?>