

<?php

get_header();



if(have_posts()) : ?>


<div class="cont">
<?php
    
    while (have_posts()) : the_post(); ?>
    
    <div class="left">
            
            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
               <div class="pic">
                <?php the_post_thumbnail(); ?>
                </div>
                <i id="icon" class="fa fa-calendar"></i><p1><?php the_time('F jS , Y'); ?> </p1><i id="icon"  class="fa fa-user"></i><p1><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p1>
               <p><?php the_excerpt(); ?></p>
               <div class="readmore">
                   <a href="<?php the_permalink() ?>">Read More</a>
                   </div>
    </div>
  
    <?php endwhile;?>
<div class="pag">
    <?php echo paginate_links()?>
</div>

    </div>



    <?php

    else :
        echo '<p>No content found</p>';
    endif;
?>

    <div class="right">
        <div class="sidenote">
            <div class="wrapper">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>

<?php
get_footer();


?>