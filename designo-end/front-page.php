<?php get_header(); ?>

<main class="bloc_main_index">
	<article class="index_main_article">
		<section class="index_main_article_section">

			<img class="image" src="<?= get_field('image')['sizes']['home_top'] ?>" alt="Mobile phone Frame">

			<h1 class="index_main_article_section_h1"><?= get_field('title'); ?></h1>
			<p class="index_main_article_section_p"><?= get_field('subtitle'); ?></p>
			<a href="<?= get_field('button_link') ?>" title="Designo about page" aria-label="Designo about page" class="index_main_article_section_a"><?= get_field('button_title') ?></a>
		</section>

	</article>

	<div class="index_main_img_deco_top"><?= get_template_part('template-parts/deco_background_1_index') ?></div>

	<nav class="index_main_nav">
		<ul class="index_main_nav_ul">
			<li class="index_main_nav_ul_li index_main_nav_ul_li-WD">

				<img src="<?= get_field('image_background', 50)['sizes']['projects_back'] ?>" alt="<?= get_the_title(50) ?>" class="image">

				<a class="index_main_nav_ul_li_a" title="Designo Web Design page" href="<?= site_url(); ?>/web_design">
					<div class="index_main_nav_ul_li_a_div">
						<h2 class="index_main_nav_ul_li_a_div_h2"><?= get_the_title(50); ?></h2>
						<h3 class="index_main_nav_ul_li_a_div_h3">VIEW PROJECTS</h3>
					</div>
				</a>
			</li>

			<li class="index_main_nav_ul_li index_main_nav_ul_li-AD">
				<a class="index_main_nav_ul_li_a" title="Designo App Design page" href="appdesign.html">
					<div class="index_main_nav_ul_li_a_div">
						<h2 class="index_main_nav_ul_li_a_div_h2">APP DESIGN</h2>
						<h3 class="index_main_nav_ul_li_a_div_h3">VIEW PROJECTS</h3>
					</div>
				</a>
			</li>

			<li class="index_main_nav_ul_li index_main_nav_ul_li-GD">
				<a class="index_main_nav_ul_li_a" title="Designo Home page" href="index.html">
					<div class="index_main_nav_ul_li_a_div">
						<h2 class="index_main_nav_ul_li_a_div_h2">GRAPHIC DESIGN</h2>
						<h3 class="index_main_nav_ul_li_a_div_h3">VIEW PROJECTS</h3>
					</div>
				</a>
			</li>
		</ul>
	</nav>


	<section class="index_main_section">
		<div class="index_main_section_div">
			<img class="index_main_section_div_img" alt="passinate" src="./src/img/passinate_index.png" />
			<h3 class="index_main_section_div_h3">PASSIONATE</h3>
			<p class="index_main_section_div_p">Each project starts with an in-depth brand research to ensure we only create
				products that serve a purpose. We merge art, design, and technology into exciting new solutions.</p>
		</div>

		<div class="index_main_section_div">
			<img class="index_main_section_div_img" alt="resourceful" src="src/img/resourceful_index.png" />
			<h3 class="index_main_section_div_h3">RESOURCEFUL</h3>
			<p class="index_main_section_div_p">Everything that we do has a strategic purpose. We use an agile approach in
				all of our projects and value customer collaboration. It guarantees superior results that fulfill our client’s
				needs.</p>
		</div>

		<div class="index_main_section_div">
			<img class="index_main_section_div_img" alt="friendly" src="src/img/friendly_index.png" />
			<h3 class="index_main_section_div_h3">FRIENDLY</h3>
			<p class="index_main_section_div_p">We are a group of enthusiastic folks who know how to put people first. Our
				success depends on our customers, and we strive to give them the best experience a company can provide.</p>
		</div>
	</section>
</main>

<?php get_footer(); ?>