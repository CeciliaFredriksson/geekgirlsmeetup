<?php
/**
 * @author	Cecilia Fredriksson
 * @date	2016-03-13
 * @copy	www.ceciliafredriksson.com
 * Template Name: program
 * @since PACKAGE VERSION 1.0
 */
get_header();?>
<section class="cf-program-section row">
	<h1 class="center">Program</h1>
	<article class="center small-12 medium-12 medium-centered large-8 large-centered columns">
		<?php if(get_field('beskrivning')) {
			echo get_field('beskrivning');
		} ?>
	</article>
</section>
<section class="cf-program-section row show-for-large-up">

<?php
	if(get_field('saturday')) {
?>
		<div class="cf-program-saturday small-12 columns">
			<?php echo get_field('saturday'); ?>
		</div>
		<ul class="cf-program-label small-12 columns">
			<li class="cf-programpunkt">Progampunkt</li>
			<li class="cf-talare">Talare</li>
			<li class="cf-tid">Tid</li>
			<li class="cf-rum">Rum</li>
		</ul>
<?php
	}

	if( have_rows('saturday-program') ) {

		while( have_rows('saturday-program') ) {
			the_row(); 
?> 
			<ul class="cf-program small-12 columns">
<?php
				// vars
				$programpunkt = get_sub_field('programpunkt');
				$talare = get_sub_field('talare');
				$tid = get_sub_field('tid');
				$rum = get_sub_field('rum');
?>
				<li class="cf-programpunkt">
					<?php echo $programpunkt ? $programpunkt : ' '; ?>
				</li>

				<li class="cf-talare">
					<?php echo $talare ? $talare : ' '; ?>
				</li>

				<li class="cf-tid">
					<?php echo $tid ? $tid : ' '; ?>
				</li>

				<li class="cf-rum">
					<?php echo $rum ? $rum : ' '; ?>
				</li>
			</ul>
<?php
		} 
	}
?>
</section>
<section class="cf-program-section row show-for-large-up">

<?php
	if(get_field('sunday')) {
?>
		<div class="cf-program-sunday small-12 columns">
			<?php echo get_field('sunday'); ?>
		</div>
		<ul class="cf-program-label small-12 columns">
			<li class="cf-programpunkt">Progampunkt</li>
			<li class="cf-talare">Talare</li>
			<li class="cf-tid">Tid</li>
			<li class="cf-rum">Rum</li>
		</ul>
<?php
	}

	if( have_rows('sunday-program') ) {

		while( have_rows('sunday-program') ) {
			the_row(); 
?> 
			<ul class="cf-program small-12 columns">
<?php
				// vars
				$programpunkt = get_sub_field('programpunkt');
				$talare = get_sub_field('talare');
				$tid = get_sub_field('tid');
				$rum = get_sub_field('rum');
?>
				<li class="cf-programpunkt">
					<?php echo $programpunkt ? $programpunkt : ' '; ?>
				</li>

				<li class="cf-talare">
					<?php echo $talare ? $talare : ' '; ?>
				</li>

				<li class="cf-tid">
					<?php echo $tid ? $tid : ' '; ?>
				</li>

				<li class="cf-rum">
					<?php echo $rum ? $rum : ' '; ?>
				</li>
			</ul>
<?php
		} 
	}
?>
</section>
<section class="cf-program-section row show-for-medium-down saturday">

<?php
	if(get_field('saturday')) {
?>
		<div class="cf-program-saturday small-12 columns center">
			<h2><?php echo get_field('saturday'); ?></h2>
		</div>
<?php
	}

	if( have_rows('saturday-program') ) {

		while( have_rows('saturday-program') ) {
			the_row(); 
			
			// vars
			$programpunkt = get_sub_field('programpunkt');
			$talare = get_sub_field('talare');
			$tid = get_sub_field('tid');
			$rum = get_sub_field('rum');

			if( $programpunkt == 'Lunch' || $programpunkt == 'Fika' ) {
?>
				<ul class="cf-program small-12 columns lunch center">
<?php
			} else if( $programpunkt == 'Registrering' ) {
?>
				<ul class="cf-program small-12 columns registrering center">
<?php
			} else {
?>
				<ul class="cf-program small-12 columns center">
<?php
			}	
?>
				<li class="cf-tid">
					<?php echo $tid ? 'Tid: ' . $tid : ' '; ?>
				</li>

				<li class="cf-programpunkt">
					<?php echo $programpunkt ? $programpunkt : ' '; ?>
				</li>

				<li class="cf-talare">
					<?php echo $talare ? 'Talare: ' . $talare : ' '; ?>
				</li>

				<li class="cf-rum">
					<?php echo $rum ? 'Rum: ' . $rum : ' '; ?>
				</li>
			</ul>
<?php
		} 
	}
?>
</section>
<section class="cf-program-section row show-for-medium-down sunday">

<?php
	if(get_field('sunday')) {
?>
		<div class="cf-program-saturday small-12 columns center">
			<h2><?php echo get_field('sunday'); ?></h2>
		</div>
<?php
	}

	if( have_rows('sunday-program') ) {

		while( have_rows('sunday-program') ) {
			the_row(); 
			
			// vars
			$programpunkt = get_sub_field('programpunkt');
			$talare = get_sub_field('talare');
			$tid = get_sub_field('tid');
			$rum = get_sub_field('rum');

			if( $programpunkt == 'Lunch' || $programpunkt == 'Fika' ) {
?>
				<ul class="cf-program small-12 columns lunch center">
<?php
			} else if( $programpunkt == 'Registrering' ) {
?>
				<ul class="cf-program small-12 columns registrering center">
<?php
			} else {
?>
				<ul class="cf-program small-12 columns center">
<?php
			}	
?>
				<li class="cf-tid">
					<?php echo $tid ? 'Tid: ' . $tid : ' '; ?>
				</li>

				<li class="cf-programpunkt">
					<?php echo $programpunkt ? $programpunkt : ' '; ?>
				</li>

				<li class="cf-talare">
					<?php echo $talare ? 'Talare: ' . $talare : ' '; ?>
				</li>

				<li class="cf-rum">
					<?php echo $rum ? 'Rum: ' . $rum : ' '; ?>
				</li>
			</ul>
<?php
		} 
	}
?>
</section>
<?php

get_footer();
