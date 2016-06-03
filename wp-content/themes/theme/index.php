<?php get_header();?> 
  
    <section>
    <div class="headline-container">
      <div class="headline">
        <div class="headline-image">
          <a href=""><img src="img/omotola.png"></a>
        </div>
        <div class="headline-content">
          <div class="headline-content-inner">
            <h4>HEADLINE</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="popular-posts">
      <div class="popular-post">
        <img src="img/adele.png">
        <title>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</title>
      </div>
      <div class="popular-post">
        <img src="img/brush.png">
        <title>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</title>
      </div>
      <div class="popular-post">
        <img src="img/eva.png">
        <title>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</title>
      </div>
    </div>
  </section>
  <section>
    <div class="feature">
      <div class="feature-content">
        <div class="feature-content-inner">
        <h4>New Look! Lupita Nyong’o Rocks Crown Braids To Sag Awards 2015</h4>
        <p>Hella narwhal Cosby sweater McSweeney's, salvia kitsch before they sold out.Hella narwhal Cosby sweater McSweeney's, salvia kitsch before they sold out.Hella narwhal Cosby sweater McSweeney's, salvia kitsch before they sold out. narwhal Cosby sweater McSweeney's, salvia kitsch </p>
        </div>
      </div>
      <div class="feature-image">
        <img src="img/lupita-feature.png">
      </div>
    </div>
  </section>
  <section>
    <div class="posts">
      <div class="post">
  <!-- Start the Loop. -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post-content">
          <div class="post-content-inner">
            <h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
            <p><?php the_content(); ?></p>
          </div>
        </div>
        <div class="post-image">
          <img src="img/trado.png">
        </div>
      </div>
  <!-- Stop The Loop (but note the "else:" - see next line). -->
 
  <?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <!-- REALLY stop The Loop. -->
  <?php endif; ?>
      <a class="load-more">loadmore</a>
    </div>
    <aside class="sidebar">
      <div class="highlights">
        <h4 class="title">Highlights</h4>
        <img src="img/lupi-highlights.png" height="629" width="376">
        <div class="caption">
          <h5 class="caption-title">Lupita N'yongo</h5>
          <p>Hella narwhal Cosby sweater McSweeney's, salvia kitsch before they sold out.Hella narwhal Cosby sweater McSweeney</p>
        </div>
      </div>
    </aside>
  </section>

  <section>
    <div class="social-media">
      <p>Follow us on:</p>
      <div class="icons">
        <a class="icon facebook" href="#"></a>
        <a class="icon instagram" href="#"></a>
        <a class="icon twitter" href="#"></a>
      </div>
    </div>
  </section>

</main>

 
<?php get_footer();?>