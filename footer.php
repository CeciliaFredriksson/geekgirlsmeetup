			<!-- footer -->
			<footer class="center">
				<nav class="social-media-icons show-for-small-only">
<?php 
					wp_nav_menu( array(
						'menu' => 'Secondary menu'
					) );
?>
				</nav>
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> - GGM IF
					- Sidan är skapad av <a href="http://ceciliafredriksson.com" title="Cecilia Fredriksson" target="_blank">Cecilia Fredriksson</a>
				</p>
			</footer>
			<!-- /footer -->

			<?php wp_footer(); ?>
		</div>
    </body>
</html>
