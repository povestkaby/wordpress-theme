
<?php get_header(); ?>

	<?php if(get_option("cema93_timer_text") != "Нет призыва" ) { ?>
		<?php 
			$lastday	= get_option("cema93_timer_years").'-'.get_option("cema93_timer_months").'-'.get_option("cema93_timer_days");
			$datetime1 = new DateTime("now");
			$datetime2 = new DateTime($lastday);
			$interval = date_diff($datetime1, $datetime2);
			$timer = $interval->format('%a');
		?>
        <div class="header__main">
            <div class="container">
                <div class="header__main-inner">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-1">
                            <div class="header__main-title">
                                <h1>Центр прав призывника</h1>
                            </div>
                            <div class="header__main-text">
                                <p>
                                    это сервис вопросов и ответов, предназначенный для призывников,
                                    допризывников, военнообязанных, военнослужащих, альтернативщиков и их близких
                                </p>
                            </div>
                            <a href="https://povestka.by/questions/ask/" class="header__main-btn default-btn">
                                Задать вопрос
                            </a>
                        </div>
                        <div class="header__main-man"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__features">
            <div class="container">
                <div class="header__features-items">
                    <div class="row justify-content-between">
                        <div class="col-sm-4">
                            <div class="header__features-item">
                                <i class="icon-user"></i>
                                <h3>550.000</h3>
                                <p>посетителей в год</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="header__features-item header__features-second">
                                <i class="icon-list"></i>
                                <h3>5.000</h3>
                                <p>ответов в год</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="header__features-item">
                                <i class="icon-calendar-alt"></i>
                                <h3>7 лет</h3>
                                <p>работает для вас</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
		<section class="conscription">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12 col-xl-4 offset-xl-1">
						<div class="conscription__text">
							<div class="conscription__text-title">
								<h1 class="conscription__text-title-text"><?php echo get_option("cema93_timer_text"); ?></h1>
							</div>
							<p>дней осталось</p>
						</div>
					</div>
					<div class="col-lg-12 col-xl-4 offset-xl-1">
						<div class="conscription__counter">
						
							<div class="conscription__counter-number"><?php echo str_pad($timer, 3, '0', STR_PAD_LEFT); ?></div>
							<svg class="progress__ring" width="300" height="300">
								<defs>
									<filter id="inset-shadow">
										<feFlood flood-color="#005900" />
										<feComposite operator="out" in2="SourceGraphic" />
										<feGaussianBlur stdDeviation="7" />
										<feComposite operator="atop" in2="SourceGraphic" />
									</filter>
								</defs>
								<circle class="progress__ring-outline" stroke="#EAF7E6" stroke-width="24" cx="150" cy="150" r="126" fill="transparent" />
								<circle class="progress__ring-circle" stroke="#2CAB00" filter="url(#inset-shadow)" stroke-linecap="round" stroke-width="24" cx="150" cy="150" r="126" fill="transparent" />
							</svg>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>

    <section class="advantages">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="advantages__title">
                        <h3>
                            Белорусские призывники зачастую не знают своих прав,
                            чем могут пользоваться военкоматы.
                            Мы помогаем молодым людям заполнить эти пробелы на волонтёрских началах
                        </h3>
                    </div>
                </div>
            </div>

            <div class="advantages__items">
                <div class="row advantages__slider">
                    <div class="col-md-4 offset-md-2 col-xl-3 offset-xl-0">
                        <div class="advantages__items-item">
                            <div class="advantages__items-img">
                                <img src="https://povestka.by/wp-content/themes/stable/img/advantages/news.png" alt="message">
                            </div>
                            <p>Публикуем актуальные новости и аналитику</p>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-0 col-xl-3 offset-xl-0">
                        <div class="advantages__items-item">
                            <div class="advantages__items-img">
                                <img src="https://povestka.by/wp-content/themes/stable/img/advantages/questions.png" alt="questions">
                            </div>
                            <p>Отвечаем на вопросы</p>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-2 col-xl-3 offset-xl-0">
                        <div class="advantages__items-item">
                            <div class="advantages__items-img">
                                <img src="https://povestka.by/wp-content/themes/stable/img/advantages/files.png" alt="files">
                            </div>
                            <p>Размещаем полезные документы</p>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-0 col-xl-3 offset-xl-0">
                        <div class="advantages__items-item">
                            <div class="advantages__items-img">
                                <img src="https://povestka.by/wp-content/themes/stable/img/advantages/messages.png" alt="files">
                            </div>
                            <p>Консультируем в соц. сетях</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="help">
        <div class="container">
            <div class="help__title">
                <h2>Как получить помощь</h2>
            </div>
            <div class="help__content">
                <div class="row">
                    <div class="col-lg-6 col-xl-5 offset-xl-1">

                        <!-- Для пк -->

                        <div class="help__content-points">
                            <div class="help__content-point">
                                <div class="help__content-img">
                                    <i class="icon-user"></i>
                                </div>
                                <div class="help__content-title">
                                    <h3>Зарегистрируйтесь на сайте (подтвердите e-mail и телефон)</h3>
                                </div>
                            </div>
                            <div class="help__content-point">
                                <div class="help__content-img">
                                    <i class="icon-search"></i>
                                </div>
                                <div class="help__content-title">
                                    <h3>Воспользуйтесь поиском (на сайте более 8000 ответов на вопросы)</h3>
                                </div>
                            </div>
                            <div class="help__content-point">
                                <div class="help__content-img">
                                    <i class="icon-question"></i>
                                </div>
                                <div class="help__content-title">
                                    <h3>Задайте вопрос на сайте (ответ в течение суток)</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Для телефонов -->

                        <div class="help__content-points__small">
                            <div class="help__content-point">
                                <div class="help__content-img">
                                    <i class="icon-user"></i>
                                </div>
                                <div class="help__content-title">
                                    <h3>Зарегистрируйтесь на сайте (подтвердите e-mail и телефон)</h3>
                                </div>
                            </div>
                            <div class="help__content-point">
                                <div class="help__content-title">
                                    <h3>Воспользуйтесь поиском (на сайте более 8000 ответов на вопросы)</h3>
                                </div>
                                <div class="help__content-img">
                                    <i class="icon-search"></i>
                                </div>
                            </div>
                            <div class="help__content-point">
                                <div class="help__content-img">
                                    <i class="icon-question"></i>
                                </div>
                                <div class="help__content-title">
                                    <h3>Задайте вопрос на сайте (ответ в течение суток)</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-0 col-lg-5 offset-xl-1 col-xl-5 text-center text-md-start">
						<div class="help__content-man"></div>
						<a href="https://povestka.by/questions/ask/" class="help__content-btn default-btn">Задать вопрос</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
	
	

    <section class="blog">
        <div class="container">
            <div class="row">

<?php $sticky = count(get_option('sticky_posts')); $posts_per_page =4-$sticky; if($posts_per_page < 0) $posts_per_page = 0; $post_number=0; $query = new WP_Query( array( 'posts_per_page' => $posts_per_page) ); ?>
<?php if ( $query->have_posts() ) { ?>
	<?php while ( $query->have_posts() ) { $query->the_post();?>
		<?php if($post_number++ ==0){ ?>
                <div class="col-lg-8 offset-lg-2 col-xl-5 offset-xl-0">
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog__donations">
                            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ); ?>" alt="donations">
                            <div class="blog__donations-title">
                                <h3>
                                    <? echo get_the_title(); ?>
                                </h3>
                            </div>
                            <p class="d-xl-block d-xxl-none">
                                <?php echo strip_tags(get_the_content('')); ?>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 offset-lg-2 col-xl-7 offset-xl-0">
                    <div class="blog__articles">
		<?php }else{ ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="blog__article<?php if($post_number ==4) echo " blog__article-last"; ?>">
                                <div class="blog__article-img">
                                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ); ?>" alt="article">
                                </div>
                                <div class="blog__article-title">
                                    <? echo get_the_title(); ?>
                                </div>
                                <div class="blog__article-date">
                                    <?php the_time('j F Y'); ?>
                                </div>
                            </div>
                        </a>
		<?php } ?>

	<?php } ?>
                    </div>
                </div>
<?php } ?>
<?php wp_reset_postdata(); ?>

				
            </div>
            <div class="row">
                <div class="col">
                    <div class="blog__articles-inner">
                        <a href="https://povestka.by/news/">
                            <div class="blog__articles-inner__btn">
                                Все новости
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>



























<?php /* ?>
<?php get_header('old'); ?>
			<div class="container">
				<ul class="nav nav-tabs row" role="tablist" id="tabs">
					<li role="presentation" class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="section-wrapper">
							<a href="/doc/">
								<img src="https://povestka.by/wp-content/themes/stable/img-old/sections/1.png" class="img-responsive" alt="Образцы заявлений, обращений и прочих документов" />
								<p>Образцы заявлений и жалоб</p>
							</a>
							<div class="section-border-1"></div>
							<div class="section-border-2"></div>
							<div class="section-border-3"></div>
							<div class="section-border-4"></div>
						</div>
					</li>
					<li role="presentation" class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="section-wrapper">
							<a href="/doc/#medical">
								<img src="https://povestka.by/wp-content/themes/stable/img-old/sections/2.png" class="img-responsive" alt="Медицинские противопоказания для службы в армии" />
								<p>Медицинские противопоказания для службы в армии</p>
							</a>
							<div class="section-border-1"></div>
							<div class="section-border-2"></div>
							<div class="section-border-3"></div>
							<div class="section-border-4"></div>
						</div>
					</li>
					<li role="presentation" class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="section-wrapper">
							<a href="/doc/#law">
								<img src="https://povestka.by/wp-content/themes/stable/img-old/sections/3.png" class="img-responsive" alt="Нормативно-правовые акты" />
								<p>Нормативно-правовые акты</p>
							</a>
							<div class="section-border-1"></div>
							<div class="section-border-2"></div>
							<div class="section-border-3"></div>
							<div class="section-border-4"></div>
						</div>
					</li>
					<li role="presentation" class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="section-wrapper">
							<a href="/doc/#gos">
								<img src="https://povestka.by/wp-content/themes/stable/img-old/sections/4.png" class="img-responsive" alt="Разъяснения от государственных органов" />
								<p>Разъяснения от государственных органов и комментарии к законодательству</p>
							</a>
							<div class="section-border-1"></div>
							<div class="section-border-2"></div>
							<div class="section-border-3"></div>
							<div class="section-border-4"></div>
						</div>
					</li>
				</ul>
				<div class="clearfix"></div>
				<div class="row faq-header" id="faq">
					<?php $the_query = new WP_Query( array( 'post_type' => 'faq', 'cema93-faq-cat' => array( 'prizyv', 'meditsina-otsrochki', 'ngm-zapas-sbory-ags' ), 'posts_per_page' => -1, 'meta_query'  => array( array( 'key'        => 'show_on_front-page', 'compare'    => '=', 'value'      => true )), 'meta_key' => 'order_number', 'orderby' => 'meta_value', 'order' => 'ASC' )); ?>
					<?php if($the_query->have_posts()) { ?>
						<div class="col-xs-4 col-sm-3 col-md-2 col-lg-3">
							<div class="faq-title">
								FAQ<span>Актуальные <br>вопросы</span>
							</div>
						</div>
						<div class="col-xs-8 col-sm-offset-4 col-md-offset-6 col-lg-offset-6  col-sm-5 col-md-4 col-lg-3">
							<a href="https://povestka.by/faq/" class="question-btn">Все вопросы</a>
						</div>
						<div class="clearfix"></div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="panel-group">
								<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="panel panel-default panel-help">
										<a href="#faq-<?php the_ID(); ?>" data-toggle="collapse">
											<div class="panel-heading">
												<?php echo ltrim( (string)get_field("order_number", get_the_ID()), '0'); ?>. <?php the_title();?>
											</div>
										</a>
										<div id="faq-<?php the_ID(); ?>" class="collapse">
											<div class="panel-body">
												<?php the_content();?>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="news-separator"><a href="/news/">Новости</a></div>
					</div>
					<div class="clearfix"></div>
					
						<?php $sticky = get_option( 'sticky_posts' ); $sticky_post = 0; ?>
						<?php if($sticky) { ?>
							<?php
								global $more;
								$the_query = new WP_Query( array('posts_per_page' => 1, 'category_name' => 'news', 'post__in' => $sticky, 'ignore_sticky_posts' => 1));
								$i=1;
							?>
							<?php while( $the_query->have_posts() ) : $the_query->the_post();
									$more = 0;
									$sticky_post = get_the_ID();
							?>
							<?php if ( has_post_thumbnail() ) { ?>
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ); ?>" class="img-rounded img-responsive" style="margin: 0 auto 10px auto;" loading="lazy" alt="<?php the_title(); ?>"></a>
										</div>
										<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
											<div class="news-text">
												<p class="news-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></p>
												<p class="text hidden-xs"><?php echo strip_tags(get_the_content('')); ?></p>
												<p class="news-date hidden-xs"><?php the_time('j F Y'); ?></p>
											</div>
										</div>
									<?php }else { ?>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="news-text">
												<p class="news-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></p>
												<p class="text hidden-xs"><?php echo strip_tags(get_the_content('')); ?></p>
												<p class="news-date hidden-xs"><?php the_time('j F Y'); ?></p>
											</div>
										</div>
									<?php } ?>
								<?php endwhile; ?>
							<div class="clearfix"></div>
							<?php
								global $more;
								$the_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 3, 'category_name' => 'news', 'post__not_in' => array($sticky_post) ));
								$i=1;
							?>
							<?php while( $the_query->have_posts() ) : $the_query->the_post();
									$more = 0;
							?>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 news-block">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php if ( has_post_thumbnail() ) { ?>
												<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ); ?>" class="img-responsive img-rounded" loading="lazy" alt="<?php the_title(); ?>">
											<?php }else { ?>
											<?php } ?>
											<span class="text"><?php the_title();?></span>
										</a>
									</div>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>
						<?php }else{?>
							<?php
								global $more;
								$the_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 4, 'category_name' => 'news'));
								$i=1;
							?>
							<?php while( $the_query->have_posts() ) : $the_query->the_post();
									$more = 0;
							?>
								<?php if(1==$i++) { ?>
									<?php if ( has_post_thumbnail() ) { ?>
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ); ?>" class="img-rounded img-responsive" style="margin: 0 auto 10px auto;" loading="lazy" alt="<?php the_title(); ?>"></a>
										</div>
										<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
											<div class="news-text">
												<p class="news-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></p>
												<p class="text hidden-xs"><?php echo strip_tags(get_the_content('')); ?></p>
												<p class="news-date hidden-xs"><?php the_time('j F Y'); ?></p>
											</div>
										</div>
									<?php }else { ?>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="news-text">
												<p class="news-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></p>
												<p class="text hidden-xs"><?php echo strip_tags(get_the_content('')); ?></p>
												<p class="news-date hidden-xs"><?php the_time('j F Y'); ?></p>
											</div>
										</div>
									<?php } ?>
									<div class="clearfix"></div>
								<?php } else { ?>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 news-block">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php if ( has_post_thumbnail() ) { ?>
												<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ); ?>" class="img-responsive img-rounded" loading="lazy" alt="<?php the_title(); ?>">
											<?php } ?>
											<span class="text"><?php the_title();?></span>
										</a>
									</div>
								<?php } ?>
							<?php endwhile; ?>
						<?php } ?>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="questions-separator"><a href="/questions/">Вопросы пользователей</a></div>
					</div>
					<div class="col-xs-12" id="anspress">
					<?php
						$my_posts = new WP_Query;
						$myposts = $my_posts->query( array(
							'post_type' => array( 'question' ),
							'posts_per_page' => 10,
							'fields' => 'ids',
						) );
						set_query_var('ap_hide_list_head', 1);
						anspress()->questions = new Question_Query( array( 'post__in' => $myposts ) );
						ap_get_template_part( 'question-list' );
						wp_reset_postdata();
					?>
					</div>
				</div>
					
			</div>
<?php get_footer('old'); ?>
<?php */ ?>