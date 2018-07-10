<?php get_header(); ?>

	<section class="hero">
		<?php get_template_part('./components/nav'); ?>
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="hero__quote">
					<h1><?php bloginfo( 'description' ); ?></h1>
					<div class="hero__bars"></div>
				</div>
			</div>
		</div>
		<i class="arrow material-icons">expand_more</i>
	</section>

	<section class="who-we-are">
		<div class="container to-animate">
			<div class="row align-items-center full-vh">
				<div class="col-lg-6">
					<h1><?php echo get_theme_mod('who_we_are_title', 'Who we are.'); ?></h1>
					<p><?php echo get_theme_mod('who_we_are_desc', "We are one of the UK's leading Facebook Management Agencies with various in-house departments that specialise in social media campaigns, design and outreach marketing with over 10 years experience in the industry."); ?></p>
				</div>
				<div class="col-lg-6">
					<img class='pop' src="<?php echo get_theme_mod('who_we_are_image', get_template_directory_uri() . '/assets/images/whoarewe.png'); ?>" alt="who we are">
				</div>
			</div>
		</div>
	</section>

	<section class='what-we-do'>
		<div class="container-fluid to-animate">
			<div class="row">
				<div class="what-we-do__boxes">
					<div class="what-we-do__box col-md-4 col-sm-6">
						<h2>Facebook<br> ad campaigns</h2>
					</div>
					<div class="what-we-do__box col-md-4 col-sm-6">
						<h2>Facebook<br> page design</h2>
					</div>
					<div class="what-we-do__box col-md-4 col-sm-6">
						<h2>Facebook<br> management</h2>
					</div>
					<div class="what-we-do__box col-md-4 col-sm-6">
						<h2>Facebook<br> outreach</h2>
					</div>
					<div class="what-we-do__box col-md-4 col-sm-6">
						<h2>Facebook<br> competition apps</h2>
					</div>
					<div class="what-we-do__box col-md-4 col-sm-6">
						<h2>Facebook<br> networking</h2>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="what-we-do__slides">
					<!-- slide 1 -->
					<div class="what-we-do__slide">
						<div class="what-we-do__slide__close">
							<i class="material-icons">close</i>
						</div>
						<div class="what-we-do__slide__content">
							<h2>Facebook<br> ad campaigns</h2>
							<p><?php echo get_theme_mod('campaigns'); ?></p>
						</div>
						<div class="what-we-do__slide__nav">
							<i class="no-pointer material-icons">chevron_left</i>
							<i class="material-icons">chevron_right</i>
						</div>
					</div>
					<!-- slide 2 -->
					<div class="what-we-do__slide">
						<div class="what-we-do__slide__close">
							<i class="material-icons">close</i>
						</div>
						<div class="what-we-do__slide__content">
							<h2>Facebook<br> page design</h2>
							<p><?php echo get_theme_mod('design'); ?></p>
						</div>
						<div class="what-we-do__slide__nav">
							<i class="material-icons">chevron_left</i>
							<i class="material-icons">chevron_right</i>
						</div>
					</div>
					<!-- slide 3 -->
					<div class="what-we-do__slide">
						<div class="what-we-do__slide__close">
							<i class="material-icons">close</i>
						</div>
						<div class="what-we-do__slide__content">
							<h2>Facebook<br> management</h2>
							<p><?php echo get_theme_mod('management'); ?></p>
						</div>
						<div class="what-we-do__slide__nav">
							<i class="material-icons">chevron_left</i>
							<i class="material-icons">chevron_right</i>
						</div>
					</div>
					<!-- slide 4 -->
					<div class="what-we-do__slide">
						<div class="what-we-do__slide__close">
							<i class="material-icons">close</i>
						</div>
						<div class="what-we-do__slide__content">
							<h2>Facebook<br> outreach</h2>
							<p><?php echo get_theme_mod('outreach'); ?></p>
						</div>
						<div class="what-we-do__slide__nav">
							<i class="material-icons">chevron_left</i>
							<i class="material-icons">chevron_right</i>
						</div>
					</div>
					<!-- slide 5 -->
					<div class="what-we-do__slide">
						<div class="what-we-do__slide__close">
							<i class="material-icons">close</i>
						</div>
						<div class="what-we-do__slide__content">
							<h2>Facebook<br> competition apps</h2>
							<p><?php echo get_theme_mod('apps'); ?></p>
						</div>
						<div class="what-we-do__slide__nav">
							<i class="material-icons">chevron_left</i>
							<i class="material-icons">chevron_right</i>
						</div>
					</div>
					<!-- slide 6 -->
					<div class="what-we-do__slide">
						<div class="what-we-do__slide__close">
							<i class="material-icons">close</i>
						</div>
						<div class="what-we-do__slide__content">
							<h2>Facebook<br> networking</h2>
							<p><?php echo get_theme_mod('networking'); ?></p>
						</div>
						<div class="what-we-do__slide__nav">
							<i class="material-icons">chevron_left</i>
							<i class="no-pointer material-icons">chevron_right</i>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="clients">
		<div class="container to-animate">
			<div class="row">
				<div class="col">
					<h1>Our clients.</h1>
				</div>
			</div>
			<div class="row">
				<?php
					$args = array( 'post_type' => 'client', 'order' => 'ASC' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
				 ?>
				 <div class="clients__client col-md-3 col-sm-6">
 					<img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
 				</div>
			 	<?php endwhile; ?>
			</div>
		</div>
	</section>

	<section class="contact">
		<img class='waves' src="<?php echo get_template_directory_uri() . '/assets/images/waves.png'?>" alt="waves">
		<div class="container  to-animate">
			<div class="row">
				<div class="col">
					<h1><?php echo get_theme_mod('contact_title', 'Get in touch.'); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<form class="" action="" method="post">
						<div class='form__row'>Hello!</div><br>
						<div class='form__row'><span>My name is </span><input type=text></div>
						<div class='form__row'><span>and my email address </span><input type=email></div><br>
						<div class='form__row'>Let's start something great together: </div>
						<textarea name="message" rows="8"></textarea>
						<button type="submit" name="submit">Send enquiry</button>
					</form>
				</div>
				<div class="col-md-6">
					<div class="row align-items-center flex-column">
						<div>
							<div class="contact__info">
								<i class="material-icons">alternate_email</i>
								<span><a href='mailto:<?php echo get_theme_mod('contact_email', 'loremipsum@mysocialnetwork.com'); ?>'><?php echo get_theme_mod('contact_email', 'loremipsum@mysocialnetwork.com'); ?></a></span>
							</div>
							<div class="contact__info">
								<i class="material-icons">call</i>
								<span><a href='tel:<?php echo get_theme_mod('contact_tel', '0121 000 0000'); ?>'><?php echo get_theme_mod('contact_tel', '0121 000 0000'); ?></a></span>
							</div>
							<div class="contact__info">
								<i class="material-icons">place</i>
								<span>
									<?php echo get_theme_mod('contact_addr_1', 'Lorem ipsum'); ?><br>
									<?php echo get_theme_mod('contact_addr_2', '1 Lorem ipsum'); ?><br>
									<?php echo get_theme_mod('contact_addr_3', 'B1 3JR'); ?>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php get_footer(); ?>
