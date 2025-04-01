<?php 
/* Template Name: Archive post */

get_header(); 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : ( ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 );

?>

	
		<div class="box_head_archive">
			<h1><?php the_title(); ?></h1>
			<div class="box_desc_head_archive">
				<?php the_content(); ?>
			</div>
		</div>
	
	
		<div class="box_pop_archive">
			<h2>محبوب ترین مقاله ها</h2>
			
			<div class="row">
				<?php
					
					
					$ids = get_field('pop_post_rel',false,false);
					if ( $ids ) {
						
						$query = new WP_Query(array(
							'post_type'     => 'post',
							'posts_per_page'	=> 3,
							'post__in'			=> $ids,
							'orderby'        	=> 'post__in',
						));
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) { $query->the_post();
							
								$cat = get_the_category();
								?>
									<div class="col-4 classnth">
										<div class="box_item_blog">
											<?php
												if ( has_post_thumbnail() ) {
													the_post_thumbnail('imgBlog');
												}
											?>
											<div class="box_uptit_item_blog">
												<a href="<?php echo get_category_link($cat[0]->term_id); ?>" class="box_linkcat_item_blog"><?php echo $cat[0]->name; ?></a>
												<div class="box_publish_item_blog"><i class="fa fa-clock-o" aria-hidden="true"></i>تاریخ انتشار: <?php echo get_the_date('d-m-Y'); ?></div>
											</div>
											<a href="<?php echo get_the_permalink(); ?>" class="box_tit_item_blog"><?php echo get_the_title(); ?></a>
											<div class="box_desc_item_blog">
												<?php the_field('kholaseye_maghale'); ?>
											</div>
											<div class="box_info_item_blog">
												<div class="box_author_info_item_blog">نویسنده: <?php echo get_the_author(); ?></div>
												<div class="box_comment_info_item_blog"><i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo get_comments_number(); ?></div>
												<div class="box_view_info_item_blog"><i class="fa fa-eye" aria-hidden="true"></i> <?php the_field('number_view_post'); ?></div>
											</div>
										</div>
									</div>
								<?php
							}
						}
					}
				?>
		
			</div>
			
		</div>
		
		<div class="box_main_archive">
			<div class="row">
				<div class="col-8 float-end paddingLeftClass">
				
					<?php
						$query = new WP_Query(array(
							'post_type'     => 'post',
							'paged' 	    => $paged,
							'posts_per_page'	=> 5
						));
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) { $query->the_post();
							
								$cat = get_the_category();
								?>

									<div class="row borderB_class">
										<div class="col-5 float-end">
											<?php
												if ( has_post_thumbnail() ) {
													the_post_thumbnail();
												}
											?>
										</div>
										<div class="col-7 float-start">
											<div class="box_uptit_item_blog">
												<a href="<?php echo get_category_link($cat[0]->term_id); ?>" class="box_linkcat_item_blog"><?php echo $cat[0]->name; ?></a>
												<div class="box_publish_item_blog"><i class="fa fa-clock-o" aria-hidden="true"></i>تاریخ انتشار: <?php the_date('d-m-Y'); ?></div>
											</div>
											<a href="<?php echo get_the_permalink(); ?>" class="box_tit_item_blog"><?php echo get_the_title(); ?></a>
											<div class="box_desc_item_blog">
												<?php the_field('kholase_maghale'); ?>
											</div>
											<div class="box_info_item_blog">
												<div class="box_author_info_item_blog">نویسنده: <?php echo get_the_author(); ?></div>
												<div class="box_comment_info_item_blog"><i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo get_comments_number(); ?></div>
												<div class="box_view_info_item_blog"><i class="fa fa-eye" aria-hidden="true"></i> <?php the_field('number_view_post'); ?></div>
											</div>
										</div>
									</div>
								
								<?php
							}
						}
						wp_pagenavi( array( 'query' => $query ) );
					?>
					
					
					
					
					
				</div>
					
				
			</div>
		</div>	
	</div>
	
<?php get_footer(); ?>