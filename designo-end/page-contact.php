<?php get_header(); ?>

	<main class="bloc_main_contact">
		<article class="main_contact_contain">
			<section class="main_contact_contain_contactus">
				<h1 class="main_contact_contain_contactus_h1">Contact Us</h1>
				<p class="main_contact_contain_contactus_p">
					Ready to take it to the next level? Let’s talk about your project or idea and find out how we can help your business grow. If you are looking for unique digital experiences that’s relatable to your users, drop us a line.
				</p>
			</section>
			<section class="main_contact_contain_form">
				<form class="main_contact_contain_form_cont">
					<!-- <label class="main_contact_contain_form_cont_label" for="name">Name</label> -->
					<input type="text" id="name" name="name" placeholder="Name" />
					<!-- <hr> -->
					<!-- <label class="main_contact_contain_form_cont_label" for="email">Email Adress</label> -->
					<input type="text" id="email" name="email" placeholder="Email Adress" />
					<!-- <hr> -->
					<!-- <label class="main_contact_contain_form_cont_label" for="Phone">Phone</label> -->
					<input type="text" id="phone" name="phone" placeholder="Phone" />
					<!-- <hr> -->
					<!-- <label class="main_contact_contain_form_cont_label" for="message">Your Message</label> -->
					<input type="text" id="message" name="message" placeholder="Your Message" />
					<!-- <hr> -->
					<input class="button_submit" style="border: 0" type="submit" value="Submit" />
				</form>
			</section>
		</article>
		<nav class="contact_nav_country">
			<ul class="contact_nav_country_ul">
				<li class="contact_nav_country_ul_li">
					<img src="./src/img/canada_image.png" alt="canada-illustration" class="contact_nav_country_ul_li_img" />
					<h3 class="contact_nav_country_ul_li_h3">CANADA</h3>
					<a href="locations.html" class="contact_nav_country_ul_li_btn">SEE LOCATION</a>
				</li>
				<li class="contact_nav_country_ul_li">
					<img src="./src/img/australia_image.png" alt="australia-illustration" class="contact_nav_country_ul_li_img" />
					<h3 class="contact_nav_country_ul_li_h3">AUSTRALIA</h3>
					<a href="locations.html" class="contact_nav_country_ul_li_btn">SEE LOCATION</a>
				</li>
				<li class="contact_nav_country_ul_li last">
					<img src="./src/img/united_kingdom_image.png" alt="united-kingdom-illustration" class="contact_nav_country_ul_li_img" />
					<h3 class="contact_nav_country_ul_li_h3">UNITED KINGDOM</h3>
					<a href="locations.html" class="contact_nav_country_ul_li_btn">SEE LOCATION</a>
				</li>
			</ul>
		</nav>
	</main>

<?php get_footer(); ?>
