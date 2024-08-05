<?php get_header(); ?>

<main class="wd_bloc_main">
  <section class="wd_bloc_main_section">
    <h1 class="wd_bloc_main_section_h1"><?= get_the_title(50); ?></h1>
    <p class="wd_bloc_main_section_p"><?= get_field('subtitle', 50) ?></p>
  </section>


  <div class="wd_bloc_main_article">
    <?php
    if (have_posts()) :

      while (have_posts()) : the_post(); ?>

        <article class="wd_bloc_main_article_div">
          <a class="wd_bloc_main_article_div" href="<?php the_permalink(); ?>">
            <div class="wd_bloc_main_article_div_div">
              <img class="wd_bloc_main_article_div_div_img" alt="express" src="<?= get_field('image')['sizes']['cpt'] ?>" />
              <div class="wd_bloc_main_article_div_div_text">
                <h3 class="wd_bloc_main_article_div_div_text_h3"><?php the_title(); ?></h3>
                <p class="wd_bloc_main_article_div_div_text_p"><?php the_field('description') ?></p>
              </div>
            </div>
          </a>
        </article>
    <?php
      endwhile;
    endif;
    ?>

    <?php

    $q = new WP_Query(array(
      'post_type' => 'web_design',
      'order'   => 'ASC',
      'posts_per_page' => 3,

    ));
    if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post(); ?>
        <article class="wd_bloc_main_article_div">
          <a href="<?php the_permalink(); ?>" class="wd_bloc_main_article_div">
            <div class="wd_bloc_main_article_div_div">
              <img class="wd_bloc_main_article_div_div_img" alt="express" src="<?= get_field('image')['sizes']['cpt'] ?>" />
              <div class="wd_bloc_main_article_div_div_text">
                <h3 class="wd_bloc_main_article_div_div_text_h3"><?php the_title(); ?></h3>
                <p class="wd_bloc_main_article_div_div_text_p"><?php the_field('description') ?></p>
              </div>
            </div>
          </a>
        </article>
    <?php endwhile;
    endif; ?>

  </div>


  <nav class="wd_bloc_main_nav">
    <ul class="wd_bloc_main_nav_ul">
      <li class="wd_bloc_main_nav_ul_li wd_bloc_main_nav_ul_li-appd">
        <a title="Designo App Design page" href="appdesign.html">
          <div class="index_main_nav_ul_li_a_div">
            <h2 class="wd_bloc_main_nav_ul_li_h2">APP DESIGN</h2>
            <h3 class="wd_bloc_main_nav_ul_li_h3">VIEW PROJECTS</h3>
          </div>
        </a>
      </li>
      <li class="wd_bloc_main_nav_ul_li wd_bloc_main_nav_ul_li-grd">
        <a title="Designo Home page" href="index.html">
          <div class="index_main_nav_ul_li_a_div">
            <h2 class="wd_bloc_main_nav_ul_li_h2">GRAPHIC DESIGN</h2>
            <h3 class="wd_bloc_main_nav_ul_li_h3">VIEW PROJECTS</h3>
          </div>
        </a>
      </li>
    </ul>
  </nav>
</main>

<?php get_footer(); ?>