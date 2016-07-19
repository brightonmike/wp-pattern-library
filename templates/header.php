<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head() ?>
</head>

<body>

	<!-- fabricator icons -->
	<svg style="display: none;">
		<symbol id="f-icon-code" viewBox="0 0 512 512">
			<path d="M377.3 121.3l-40.5 40.4 94.4 94.3-94.4 94.3 40.5 40.4L512 256zM134.7 121.3L0 256l134.7 134.7 40.5-40.4L80.8 256l94.4-94.3zM281.8 103.8zM230.183 408.16l-29.233-7.97 80.85-296.484 29.234 7.972z"/>
		</symbol>
		<symbol id="f-icon-notes" viewBox="0 0 512 512">
			<path d="M443.8 0H68.2C30.6 0 0 30.5 0 68v264.2c0 16.6 8.9 29.5 25.9 37.5 15.3 7.2 33.1 8.4 40.1 8.5V512l201.6-134h176.1c37.6 0 68.2-30.3 68.2-67.8V68c.1-37.5-30.5-68-68.1-68zM114 438V330H68.2c-11.1 0-19.2-8.8-19.2-19.8V68c0-11 8.2-20 19.2-20h375.5c11.1 0 19.2 9 19.2 20v242.2c0 11-8.2 19.8-19.2 19.8H244.2L114 438z"/>
		</symbol>
		<symbol id="f-icon-labels" viewBox="0 0 512 512">
			<path d="M304 280c0 13.2-10.8 24-24 24h-48c-13.2 0-24-10.8-24-24v-48c0-13.2 10.8-24 24-24h48c13.2 0 24 10.8 24 24v48zM464 280c0 13.2-10.8 24-24 24h-48c-13.2 0-24-10.8-24-24v-48c0-13.2 10.8-24 24-24h48c13.2 0 24 10.8 24 24v48zM144 280c0 13.2-10.8 24-24 24H72c-13.2 0-24-10.8-24-24v-48c0-13.2 10.8-24 24-24h48c13.2 0 24 10.8 24 24v48z"/>
		</symbol>
		<symbol id="f-icon-menu" viewBox="0 0 512 512">
			<path d="M512 100c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h488c6.6 0 12 5.4 12 12v24zM512 212c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12v-24c0-6.6 5.4-12 12-12h488c6.6 0 12 5.4 12 12v24zM512 324c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12v-24c0-6.6 5.4-12 12-12h488c6.6 0 12 5.4 12 12v24zM512 436c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12v-24c0-6.6 5.4-12 12-12h488c6.6 0 12 5.4 12 12v24z"/>
		</symbol>
		<symbol id="f-icon-settings" viewBox="0 0 512 512">
			<path d="M256 377.3c-67.5 0-121.6-53.9-121.6-121.3s54-121.3 121.6-121.3S377.6 188.6 377.6 256 323.5 377.3 256 377.3zm0-215.6c-52.7 0-94.6 41.8-94.6 94.3s41.9 94.3 94.6 94.3 94.6-41.8 94.6-94.3-41.9-94.3-94.6-94.3zM293.2 512h-72.9L200 450c-13.5-4-27-9.4-39.2-16.2l-59.4 29.6L50 412.3 79.7 353c-6.8-12.1-12.2-25.6-16.2-39.1L0 292.4v-72.8l62.1-20.2c4.1-13.5 9.5-26.9 16.2-39.1L48.6 101 100 49.9l59.4 29.6c12.2-6.7 25.7-12.1 39.2-16.2L220.2 0h72.9l20.3 62c13.5 4 27 9.4 39.2 16.2L412 48.5l51.3 51.2-29.7 59.3c6.8 12.1 12.2 25.6 16.2 39.1l62.1 20.2V291l-62.1 20.2c-4.1 13.5-9.5 26.9-16.2 39.1l29.7 59.3-51.3 51.2-59.4-29.6c-12.2 6.7-25.7 12.1-39.2 16.2L293.2 512zm-54.1-26.9h35.1l18.9-57.9 6.8-1.3c16.2-4 31.1-10.8 45.9-18.9l6.8-4 54 26.9 24.3-24.3-27-53.9 4.1-6.7c8.1-13.5 14.9-29.6 18.9-45.8l1.4-6.7 58.1-18.9v-35l-58.1-18.9-1.4-6.7c-4.1-16.2-10.8-31-18.9-45.8l-4.1-6.7 27-53.9-24.3-24.3-54 26.9-6.8-4c-14.8-8.2-29.7-14.9-45.9-19l-6.8-1.3L274.2 27h-35.1l-18.9 57.9-6.8 1.3c-16.2 4-31.1 10.8-45.9 18.9l-6.8 4-54-26.9-24.3 24.3 27 53.9-4.1 6.7c-8.1 13.5-14.9 29.6-18.9 45.8l-1.4 6.7-58 18.9v35l58.1 18.9 1.4 6.7c4.1 16.2 10.8 31 18.9 45.8l4.1 6.7-27 53.9 24.3 24.3 54-26.9 6.8 4c14.9 8.1 29.7 14.8 45.9 18.9l6.8 1.3 18.8 58z"/>
		</symbol>
	</svg>
	<!-- /fabricator icons -->

	<!-- fabricator menu -->
	<div class="f-menu">

		<div class="f-controls">
			<div class="f-control f-global-control" data-f-toggle-control="labels" title="Toggle Labels">
				<svg>
					<use xlink:href="#f-icon-labels" />
				</svg>
			</div>
			<div class="f-control f-global-control" data-f-toggle-control="notes" title="Toggle Notes">
				<svg>
					<use xlink:href="#f-icon-notes" />
				</svg>
			</div>
			<div class="f-control f-global-control" data-f-toggle-control="code" title="Toggle Code">
				<svg>
					<use xlink:href="#f-icon-code" />
				</svg>
			</div>
		</div>

		<ul>
			<li>
				<a href="<?= esc_url( get_post_type_archive_link( 'fabricator_pattern' ) ) ?>" class="f-menu__heading">Overview</a>
			</li>

			<?php
			$pattern_query = new WP_Query([
				'post_type' => 'fabricator_pattern',
				'posts_per_page' => 500,
				'orderby' => 'title',
				'order' => 'ASC',
			]);

			if ( $pattern_query->have_posts() ) : while ( $pattern_query->have_posts() ) :
				$pattern_query->the_post();
				setup_postdata($post)
				?>

				<li>
					<a href="<?php the_permalink() ?>" class="f-menu__heading"><?php the_title() ?></a>
					<ul>

					<?php
					$materials = new DirectoryIterator( wppl()->get_materials_directory() . $post->post_name );

					foreach( $materials as $material ) :
						if ( $material->isFile() ) :
						?>

						<li>
							<a href="<?php the_permalink() ?>#<?= wppl()->slug_from_filename( $material->getFilename() )?>"><?= wppl()->title_from_filename( $material->getFilename() ) ?></a>
						</li>

						<?php
						elseif ( $material->isDir() && ! $material->isDot() ) :
						?>

						<li class="f-menu_accordion_group">
							<div class="control"></div>

							<a class="f-menu_accordion_toggle" href="<?php the_permalink() ?>#<?= wppl()->slug_from_filename( $material->getFilename() )?>"><?= wppl()->title_from_filename( $material->getFilename() ) ?></a>

							<ul class="f-menu_accordion">
								<?php
								$material_children = new DirectoryIterator( $material->getPathname() );

								foreach ( $material_children as $material_child ) :
									if ( ! $material_child->isDot() ) :
									?>

									<li>
										<a href="<?php the_permalink() ?>#<?= wppl()->slug_from_filename( $material_child->getFilename() )?>"><?= wppl()->title_from_filename( $material_child->getFilename() ) ?></a>
									</li>

									<?php
									endif;
								endforeach;
								?>
							</ul>
						</li>

						<?php
						endif;
					endforeach;
					?>
					</ul>
				</li>
				<?php
				wp_reset_postdata();
			endwhile; endif;
			?>
		</ul>
	</div>
	<!-- /fabricator menu -->

	<div class="f-container">
		<div class="f-control-bar">
			<div class="f-control f-menu-toggle">
				<svg>
					<use xlink:href="#f-icon-menu" />
				</svg>
			</div>
		</div>
