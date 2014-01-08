<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/xuant.js"></script>


<div class="ym">
	<div class="ym1">
		<div id="imgPlay">
			<ul class="imgs" id="actor">
				<li>
					<?php if (get_option('mytheme_bannerlj1')!=""): ?>
						<a href="<?php echo get_option('mytheme_bannerlj1'); ?>" target="_blank">
					<?php else : ?>
						<a href="#" target="_blank">
					<?php endif; ?>
					<?php if (get_option('mytheme_banner1')!=""): ?>
						<img src="<?php echo get_option('mytheme_banner1'); ?>"/></a>
					<?php else : ?>
						<img src="<?php bloginfo('template_url'); ?>/images/b1.jpg"/></a>
					<?php endif; ?>
				</li>
				<li>
					<?php if (get_option('mytheme_bannerlj2')!=""): ?>
						<a href="<?php echo get_option('mytheme_bannerlj2'); ?>" target="_blank">
					<?php else : ?>
						<a href="#" target="_blank">
					<?php endif; ?>
					<?php if (get_option('mytheme_banner2')!=""): ?>
						<img src="<?php echo get_option('mytheme_banner2'); ?>"/></a>
					<?php else : ?>
						<img src="<?php bloginfo('template_url'); ?>/images/b1.jpg"/></a>
					<?php endif; ?>
				</li>
				<li>
					<?php if (get_option('mytheme_bannerlj3')!=""): ?>
						<a href="<?php echo get_option('mytheme_bannerlj3'); ?>" target="_blank">
					<?php else : ?>
						<a href="#" target="_blank">
					<?php endif; ?>
					<?php if (get_option('mytheme_banner3')!=""): ?>
						<img src="<?php echo get_option('mytheme_banner3'); ?>"/></a>
					<?php else : ?>
						<img src="<?php bloginfo('template_url'); ?>/images/b1.jpg"/></a>
					<?php endif; ?>
				</li>
				<li>
					<?php if (get_option('mytheme_bannerlj4')!=""): ?>
						<a href="<?php echo get_option('mytheme_bannerlj4'); ?>" target="_blank">
					<?php else : ?>
						<a href="#" target="_blank">
					<?php endif; ?>
					<?php if (get_option('mytheme_banner4')!=""): ?>
						<img src="<?php echo get_option('mytheme_banner4'); ?>"/></a>
					<?php else : ?>
						<img src="<?php bloginfo('template_url'); ?>/images/b1.jpg"/></a>
					<?php endif; ?>
				</li>
			</ul>
			<div class=prev></div>
			<div class=next></div>
		</div>
		<div class="ym1_1"></div>
		<div class="ym1_2">
			<form action="<?php bloginfo('url'); ?>" id="searchform" method="get">
				<label for="s" class="screen-reader-text"><img src="<?php bloginfo('template_url'); ?>/images/sous.jpg" /></label>
				<input type="text" id="s" name="s" value="" />
				<input type="submit" value="" id="searchsubmit" />
			</form>
		</div>
	</div>
	<div class="ym2">
		<div class="ym2_1">
			<!--关于我们-->
			<div class="ym2_2">
				<div class="a1">
					<div class="a1_1">
						<?php if (get_option('mytheme_tup1')!=""): ?>
							<img src="<?php echo get_option('mytheme_tup1'); ?>" />
						<?php else : ?>
							<img src="<?php bloginfo('template_url'); ?>/images/tu1.jpg" />
						<?php endif; ?>
					</div>
					<div class="a1_2"><img src="<?php bloginfo('template_url'); ?>/images/tu2.png" /></div>
				</div>
				<div class="a2">
						<h1>关于我们</h1>
						<b>About us</b>
						<p>
						<?php 
							$name = 'about-us'; //page别名
							global $wpdb;
							$page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name'");
							$page_data = get_page( $page_id )->post_content;
						?>
						<?php echo mb_strimwidth(strip_tags($page_data), 0,194,"..."); ?>
						</p>
						<div class="a2_1">
							<a href="<?php echo get_page_link( $page_id ); ?>" target="_blank">— Click to view more</a>
						</div>
				</div>
			</div>

			<!--新闻动态-->
			<div class="ym2_3">
				<div class="b1">
					<div class="b1_1">
						<?php if (get_option('mytheme_tup2')!=""): ?>
							<img src="<?php echo get_option('mytheme_tup2'); ?>" />
						<?php else : ?>
							<img src="<?php bloginfo('template_url'); ?>/images/tu3.jpg" />
						<?php endif; ?>
					 </div>
					<div class="b1_2"><img src="<?php bloginfo('template_url'); ?>/images/tu4.png" /></div>
				</div>
				<div class="b2">
					<h1>新闻动态</h1>
					<b>News</b>
					<div class="b2_2">
					<?php
						$cat=get_category_by_slug('company-news'); 		//获取分类别名为 company-news 的分类数据
						$cat_links=get_category_link($cat->term_id);	// 通过$cat数组里面的分类id获取分类链接
						$posts = get_posts( "category=($cat->term_id)&numberposts=5" );
					?>
					<?php if( $posts ) : ?>
					<!--新闻列表-->
					<ul>
					<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
						<li>
							<div class="b2_3">
								<a href="<?php the_permalink() ?>" target="_blank"><?php echo mb_strimwidth(get_the_title(), 0, 30,"...") ?></a>
							</div>
							<div class="b2_4"><?php the_time('20y-m-d')?></div>
						</li>
					<?php endforeach; ?>
					<?php else : ?>
						<!--没有一条新闻的时候，默认显示-->
						<li>
							<div class="b2_3"><a href="<?php  bloginfo('url');?>/sample2/" target="_blank">调用新闻动态标题组件展示…</a></div>
							<div class="b2_4">2012-02-02</div>
						</li>
						<li>
							<div class="b2_3"><a href="<?php  bloginfo('url');?>/sample2/" target="_blank">调用新闻动态标题组件展示…</a></div>
							<div class="b2_4">2012-02-02</div>
						</li>
						<li>
							<div class="b2_3"><a href="<?php  bloginfo('url');?>/sample2/" target="_blank">调用新闻动态标题组件展示…</a></div>
							<div class="b2_4">2012-02-02</div>
						</li>
						<li>
							<div class="b2_3"><a href="<?php  bloginfo('url');?>/sample2/" target="_blank">调用新闻动态标题组件展示…</a></div>
							<div class="b2_4">2012-02-02</div>
						</li>
					</ul>
					<?php endif; ?> 
					</div>
					<div class="b2_1"><a href="<?php echo $cat_links; ?>" target="_blank">— Click to view more</a></div>
				</div>
			</div>

			<!--联系我们-->
			<div class="ym2_4">
				<div class="c1">
					<div class="c1_1">
						<?php if (get_option('mytheme_lianx1')!=""): ?>
							<?php echo get_option('mytheme_lianx1'); ?>
						<?php else : ?>
							0731-1234567
						<?php endif; ?>
					</div>
				</div>
					<?php 
						$name = 'contact'; //page别名
						global $wpdb;
						$page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name'");
						$page_data = get_page( $page_id )->post_content;
					?>
					<div class="c2">
						<a href="<? echo get_page_link( $page_id ); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/tu5.jpg" /></a>
					</div>
					<h1>联系我们</h1>
					<b>Contact us</b>
					<p>
					<?php if (get_option('mytheme_lianx3')!=""): ?>
						联系地址：<?php echo get_option('mytheme_lianx3'); ?><br />
					<?php else : ?>
						联系地址：这里输入您的联系地址如：湖南省长沙市雨花区劳动中路等<br />
					<?php endif; ?>
					<?php if (get_option('mytheme_lianx1')!=""): ?>
						联系电话：<?php echo get_option('mytheme_lianx1'); ?><br />
					<?php else : ?>
						联系电话：0731-1234567<br />
					<?php endif; ?>
					<?php if (get_option('mytheme_lianx2')!=""): ?>
						联系人：<?php echo get_option('mytheme_lianx2'); ?><br />
					<?php else : ?>
						联系人：XXX （先生）<br />
					<?php endif; ?>
					<?php if (get_option('mytheme_lianx4')!=""): ?>
						Email：<?php echo get_option('mytheme_lianx4'); ?><br />
					<?php else : ?>
						Email：asdsa@dssf.com
					<?php endif; ?>
				</p>
				<div class="c3">
					<a href="<? echo get_page_link( $page_id ); ?>" target="_blank">— Click to view more</a>
				</div>
			</div>
		</div>

		<!--精彩案例-->
		<div class="ym2_5">
			<div class="d1">
				<h1>精彩案例</h1>
				<b>Wonderful case</b>
				<div class="d1_1">Our excellent display case</div>
				<div class="d2">
				<?php
					$cat=get_category_by_slug('company-case'); //获取分类别名为 company-case 的分类数据
					$cat_links=get_category_link($cat->term_id); // 通过$cat数组里面的分类id获取分类链接
					$posts = get_posts( "category=($cat->term_id)&numberposts=4" ); 
				?>
				<?php if( $posts ) : ?>
					<ul>
					<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
						<li>
							<div class="d2_1">
								<a href="<?php global $post;echo $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" rel="lightbox[set_3]" class="case_img">
									<div class="cp1"><?php the_post_thumbnail('thumbnail'); ?></div>
									<h1><?php echo mb_strimwidth(get_the_title(), 0, 20,"...") ?></h1>
									<div class="gd">
										<img src="<?php bloginfo('template_url'); ?>/images/more.jpg" />
									</div>
								</a>
							</div>
						</li>
						<?php endforeach; ?>
						<?php else : ?>
						<li>
							<div class="d2_1">
								<a href="<?php bloginfo('template_url'); ?>/images/al1.jpg" rel="lightbox[set_3]" class="case_img">
									<div class="cp1">
										<img src="<?php bloginfo('template_url'); ?>/images/tu6.jpg" />
									</div>
									<h1>调用案例标题</h1>
									<div class="gd">
										<img src="<?php bloginfo('template_url'); ?>/images/more.jpg" />
									</div>
								</a>
							</div>
						</li>
					</ul>
				<?php endif; ?> 
				</div>
			</div>
		</div>
		<div class="ym2_6">
			<div class="e1">
				<h1>最新产品</h1>
				<b>The latest products</b>
				<div class="e1_1">Product display</div>
				<div class="e2">
				<?php
					$cat=get_category_by_slug('company-product'); //获取分类别名为 company-product 的分类数据
					$cat_links=get_category_link($cat->term_id); // 通过$cat数组里面的分类id获取分类链接
					$posts = get_posts( "category=($cat->term_id)&numberposts=3" );
				?>
				<?php if( $posts ) : ?>
				<ul>
				<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
					<li>
						<div class="e2_1">
							<div class="e2_2">
								<a href="<?php the_permalink() ?>" target="_blank"><?php the_post_thumbnail('thumbnail'); ?></a>
							</div>
							<div class="e2_3">
								<h1><?php echo mb_strimwidth(get_the_title(), 0, 30,"...") ?></h1>
								<p><?php echo mb_strimwidth(strip_tags($post->post_content), 0,62,"..."); ?></p>
								<div class="e2_4"><?php the_time('20y-m-d')?></div>
								<div class="e2_5"><a href="<?php the_permalink() ?>" target="_blank">READ MORE</a></div>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
				<?php else : ?>
					<li>
						<div class="e2_1">
							<div class="e2_2"><a href="<?php  bloginfo('url');?>/sample/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/tu7.jpg" /></a></div>
							<div class="e2_3">
								<h1>调用显示产品标题</h1>
								<p>调用产品描述的内容如：通过相应功能截取关于我们页面中一段相关位子…</p>
								<div class="e2_4">2012-02-02</div>
								<div class="e2_5"><a href="<?php  bloginfo('url');?>/sample/" target="_blank">READ MORE</a></div>
							</div>
						</div>
					</li>
				</ul>
				<?php endif; ?> 
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
