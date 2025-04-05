<?php 
get_header(); 

$post = get_post();
setup_postdata($post); 


$author_id = get_post_field ('post_author', get_the_ID());
?>

	
		<?php 
			$cat = get_the_category();
		?>
		<div class="box_head_archive box_head_single">
			<h1><?php the_title(); ?></h1>
			<div class="box_uptit_item_blog">
				<a href="<?php echo get_category_link($cat[0]->term_id); ?>" class="box_linkcat_item_blog"><?php echo $cat[0]->name; ?></a>
				<div class="box_publish_item_blog"><i class="fa fa-clock-o" aria-hidden="true"></i>تاریخ انتشار: <?php echo get_the_date('d-m-Y'); ?></div>
			</div>
			
		</div>
		
		<div class="box_img_single">
			<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}
			?>
		</div>
		
		<div class="box_main_single">
			<div class="row">
				<div class="col-8 float-end paddingLeftClass">
		
					<div class="box_info_item_blog">
						<div class="box_author_info_item_blog">نویسنده: <?php echo get_the_author(); ?></div>
						<div class="box_comment_info_item_blog"><i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo get_comments_number(); ?></div>
						<div class="box_view_info_item_blog"><i class="fa fa-eye" aria-hidden="true"></i> <?php the_field('number_view_post'); ?></div>
						<div class="box_view_info_item_blog box_report_info_item_single"><i class="fa fa-info-circle" aria-hidden="true"></i> گزارش خطا</div>
					</div>
					
					<div class="desc_single"><?php the_content(); ?></div>
					
					<div class="box_tag_share_single">
						<div class="box_tag_single">
							<?php								
								$term_cats = wp_get_post_terms($post->ID, 'category');
								if($term_cats) {
									foreach($term_cats as $term_cat) {
										echo '<a href="'.get_category_link($term_cat->term_id).'">'.$term_cat->name.'</a>';
									}
								}
							?>
						</div>
						<div class="box_share_single">
							<div class="box_tit_share_single">به اشتراک بگذارید:</div>
							<div class="box_links_share_single">
								
									<?php
										$title= urlencode(get_the_title());
										$url= urlencode(get_permalink());
									?>

								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>&amp;t=<?php echo $title; ?>" class="iconShare1" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#" class="iconShare2" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#" class="iconShare3" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
								<a href="#" class="iconShare4" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>

					<div class="box_author_single">
						<div class="box_avatar_author_single">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
						</div>
						<div class="box_info_author_single">
							<b><?php echo get_the_author_meta( 'display_name' , $author_id ); ?></b>
							<div class="sub_info_author_single">@hassansolgi</div>
							<div class="bio_info_author_single"><?php echo get_the_author_meta('description', $author_id); ?></div>
						</div>
					</div>
					
					
					<div class="box_comment">
						<?php
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						?>
					</div>
					

				</div>
				<div class="col-4 float-start">
					<?php get_sidebar('single'); ?>
				</div>
				
			</div>
		</div>
		
	</div>
	
<?php get_footer(); ?>