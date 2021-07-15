<?php get_header('old'); ?>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
		<div class="container">
			<div class="row">
				<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p>На этой странице проводится аукцион продажи рекламных мест на сайте povestka.by.</p>
					<h3>Процесс участия в&nbsp;аукционе</h3>
					<ul>
					<li>на каждый лот установлена начальная цена (например, 20 рублей);</li>
					<li>вы делаете ставку, указывая, сколько вы готовы заплатить за указанный лот (например, 21 рубль);</li>
					<li>вашу ставку может перебить другой участник, указав цену выше вашей;</li>
					<li>вы можете сделать неограниченное количество ставок повышая цену лота пока не закончилось время торгов;</li>
					<li>лот достаётся за финальную цену тому, кто сделает последнюю (наибольшую) ставку.</li>
					</ul>
				</section>
				<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3>Доступные лоты</h3>
					
					<div class="lots">
					<?php
						$query = new WP_Query( array( 
							'post_type' => 'lot', 
							'posts_per_page' => -1, 
						) );
					?>
					<?php while ( $query->have_posts() ) { $query->the_post(); ?>
						<div class="row jumbotron" lotID="<?php the_ID(); ?>">
							<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
								<strong><?php the_title(); ?></strong><br>
								<?php the_content(); ?>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="panel panel-default">
									<table class="table">
										<tr>
											<td>Месяц размещения</td>
											<td><?php the_field('год_и_месяц_размещения', get_the_ID()); ?></td>
										</tr>
										<tr>
											<td>Текущая ставка</td>
											<td class="current_cost-<?php the_ID(); ?>"></td>
										</tr>
										<tr>
											<td>Окончание торгов</td>
											<td><?php the_field('дата_окончания_аукциона', get_the_ID()); ?></td>
										</tr>
									</table>
									<div class="panel-footer">
										<form class="form-inline LotSubmit" lotID="<?php the_ID(); ?>">
											<div class="form-group" style="position:relative;">
												<input type="number" class="form-control cost_input cost_input-<?php the_ID(); ?>" placeholder="Ваша ставка, BYN" required>
											</div>
											<button type="submit" class="btn btn-default submit-<?php the_ID(); ?>">OK</button>
										</form>
									</div>
								</div>
								<div class="panel panel-default last-binds-pannel-<?php the_ID(); ?>" style="display: none;">
									<div class="panel-heading">Последние 5 ставок</div>
									<ul class="list-group last-binds-<?php the_ID(); ?>"></ul>
								</div>
							</div>
						</div>
						<hr>
					<?php } ?>

					</div>
				
				</section>
				<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<small>На нашем информационном ресурсе размещена реклама на основании Договоров заключенных с Индивидуальным предпринимателем Гавриленко Семёном Алексеевичем, УНП 193052606.</small>

					
				</section>
			</div>
		</div>
<?php get_footer('old'); ?>