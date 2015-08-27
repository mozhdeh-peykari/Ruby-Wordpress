<?php get_header(); ?>

 <div id="content">
     <div class="article">    


 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

       
          <h2><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h2>
          <p class="info noprint"> <span class="date"><?php the_time('F jS, Y'); ?></span><span class="noscreen">,</span> <span class="cat"><a href="#"><?php the_category( ', ' ); ?></a></span><span class="noscreen">,</span> <span class="user"><a href="#"><?php the_author_posts_link(); ?></a></span><span class="noscreen">,</span> <span class="comments"><a href="#"><?php comments_popup_link( 'No Comments »', '1 Comment »', '% Comments »' ); ?></a></span> </p>
          <p><?php the_excerpt() ?></p>
          <p class="btn-more box noprint"><strong><a href="<?php the_permalink(); ?>">Continue</a></strong></p>

        
 <?php endwhile; else : ?>
 <?php endif; ?>
      </div>
        <hr class="noscreen" />
      </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
