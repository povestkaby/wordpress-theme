<?php get_header('old'); ?>
	<div class="container">
		<div class="row">
			<section class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
							<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
								<a itemprop="item" itemid="https://povestka.by/" href="https://povestka.by/"><i class="fa fa-home" aria-hidden="true"></i><span itemprop="name" class="sr-only">Главная</span></a>
								<meta itemprop="position" content="1" />
							</li>
							<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
								<a itemscope itemtype="https://schema.org/Thing" itemprop="item" itemid="https://povestka.by/news/" href="https://povestka.by/news/"><span itemprop="name">Новости</span></a>
								<meta itemprop="position" content="2" />
							</li>
							<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="hidden">
								<a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="<?php echo home_url( $wp->request . '/' ); ?>"><span itemprop="name"><?php the_title();?></span></a>
								<meta itemprop="position" content="3" />
							</li>
						</ol>
				<?php $content_arr = get_extended ( $post->post_content ); ?>
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ); ?>" class="img-rounded img-responsive" style="margin: 0 auto 10px auto;" alt="<?php the_title(); ?>">
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<div class="news-text">
							<h1 class="news-title"><?php the_title();?></h1>
							<p class="text"><?php echo $content_arr['main'] ?></p>
							<p class="news-date"><?php the_time('j F Y'); ?></p>
						</div>
					</div>
				<?php }else{ ?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="news-text">
							<h1 class="news-title"><?php the_title();?></h1>
							<p class="text"><?php echo $content_arr['main'] ?></p>
							<p class="news-date"><?php the_time('j F Y'); ?></p>
						</div>
					</div>
				<?php } ?>
				<div class="clearfix"></div>
				<div class="text-center">
					<?php
						$all_posts = new WP_Query(array(
							'post_type' => 'post',
							'orderby' => 'date',
							'order' => 'DESC',
							'posts_per_page' => -1
						));
						foreach($all_posts->posts as $key => $value) {
							if($value->ID == $post->ID){
								$nextID = $all_posts->posts[$key - 1]->ID;
								$prevID = $all_posts->posts[$key + 1]->ID;
								break;
							}
						}
						
						if ( false === get_permalink( $nextID ) ) { $nextID = 0; }
						if ( false === get_permalink( $prevID ) ) { $prevID = 0; }

					?>
					<nav>
						<ul class="pager">
							<?php if( $prevID > 0 ): ?>
								<li class="previous"><a href="<?php echo get_the_permalink($prevID); ?>"><span aria-hidden="true">&larr;</span> Предыдущая</a></li>
							<?php endif; ?>
							<?php if( $nextID > 0 ): ?>
								<li class="next"><a href="<?php echo get_the_permalink($nextID); ?>">Следующая <span aria-hidden="true">&rarr;</span></a></li>
							<?php endif; ?>
						</ul>
					</nav>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 news-full-text">
					<?php echo apply_filters('the_content', $content_arr['extended']); ?>
					<a href="http://t.me/povestkaby"><img src="<?php echo get_template_directory_uri(); ?>/img-old/join_telegram.png" class="img-responsive" alt="Подписывайтесь  на наш telegram канал"></a>
<script async src="https://an.yandex.ru/system/widget.js"></script>
<script>
    (yaads = window.yaads || []).push({
        id: "986682-1",
        render: "#id-986682-1"
    });
</script>
<div id="id-986682-1"></div>

				</div>
			<?php endwhile; // end of the loop. ?>
			</section>
			<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
				<script async src="https://an.yandex.ru/system/widget.js"></script>
				<script>
					(yaads = window.yaads || []).push({
						id: "986682-2",
						render: "#id-986682-2"
					});
				</script>
				<div id="id-986682-2"></div>
			</aside>
		</div>
					<?php if(display_ad() AND wp_is_mobile()) { ?>
						<!-- Yandex.RTB R-A-986682-6 -->
						<div id="yandex_rtb_R-A-986682-6-1"></div>
						<script type="text/javascript">
							(function(w, d, n, s, t) {
								w[n] = w[n] || [];
								w[n].push(function() {
									Ya.Context.AdvManager.render({
										blockId: "R-A-986682-6",
										renderTo: "yandex_rtb_R-A-986682-6-1",
										pageNumber: 1,
										async: true
									});
								});
								t = d.getElementsByTagName("script")[0];
								s = d.createElement("script");
								s.type = "text/javascript";
								s.src = "//an.yandex.ru/system/context.js";
								s.async = true;
								t.parentNode.insertBefore(s, t);
							})(this, this.document, "yandexContextAsyncCallbacks");
						</script>
					<?php } ?>
					<?php if(display_ad() AND !wp_is_mobile()) { ?>
						<div class="clearfix"></div>
						<!-- Yandex.RTB R-A-986682-5 -->
						<div id="yandex_rtb_R-A-986682-5-1"></div>
						<script type="text/javascript">
							(function(w, d, n, s, t) {
								w[n] = w[n] || [];
								w[n].push(function() {
									Ya.Context.AdvManager.render({
										blockId: "R-A-986682-5",
										renderTo: "yandex_rtb_R-A-986682-5-1",
										pageNumber: 1,
										async: true
									});
								});
								t = d.getElementsByTagName("script")[0];
								s = d.createElement("script");
								s.type = "text/javascript";
								s.src = "//an.yandex.ru/system/context.js";
								s.async = true;
								t.parentNode.insertBefore(s, t);
							})(this, this.document, "yandexContextAsyncCallbacks");
						</script>
					<?php } ?>
	</div>
<?php get_footer('old'); ?>
