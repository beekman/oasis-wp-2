<? #blog beachbar ?>
<div class="beachbar">
	<div>
		<div class="wrap">
			<?php
				$args = array(
				'show_option_all'    => 'Latest Posts',
				'orderby'            => 'name',
				'order'              => 'ASC',
				'style'              => 'list',
				'show_count'         => 0
				'hide_empty'         => 1,
				'use_desc_for_title' => 0,
				'child_of'           => 0,
				'feed'               => '',
				'feed_type'          => '',
				'feed_image'         => '',
				'exclude'            => '',
				'exclude_tree'       => '',
				'include'            => '',
				'hierarchical'       => 0,
				'title_li'           => __( '' ),
				'show_option_none'   => __( '' ),
				'number'             => null,
				'echo'               => 1,
				'depth'              => 0,
				'current_category'   => 1,
				'pad_counts'         => 0,
				'taxonomy'           => 'category',
				'walker'             => null
				);
				wp_list_categories( $args );
			?>
		</div>
	</div>
</div>
