<?php get_header('old'); ?>
	<div class="container">
		<h1 class="text-center">Книга памяти</h1>
		<div class="jumbotron">
			<p>Минобороны Беларуси очень неохотно делится данными о количестве погибших в белорусской армии. Мы хотим рассказать всем то, о чем стараются умалчивать.</p>
			<p>Мы собираем данные по крупицам в интернете. Если вы знаете о случае гибели военнослужащих просьба связаться с нами <a href="mailto:info@povestka.by">info@povestka.by</a></p>
		</div>
		<div class="row">
			<?php $i=1; ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center" style="margin-bottom:20px">
					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) { ?>
							<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), array (250,250) ); ?>" class="img-responsive center-block">
						<?php }else { ?>
							<img src="https://povestka.by/wp-content/themes/stable/img-old/memory/no-photo.jpg" alt="<?php the_title();?>" class="img-responsive center-block">
						<?php } ?>
					</a>
					<a href="<?php the_permalink(); ?>"><?php the_title();?></a><?php if( get_field('DeathDate') ) { ?>, <br><?php echo date('Y', strtotime(get_field('DeathDate'))) ?><?php } ?>
				</div>
				<?php if( $i++ %3 == 0 ) {?><div class="clearfix"></div> <?php }?>
			<?php endwhile; ?><?php wp_reset_query(); ?>
		</div>
		<h2 class="text-center">Список происшествий, о которых почти ничего не известно</h2>
		<div class="jumbotron">
			<h2>27 сентября 2017 года, Сморгонь</h2>
				<span style="font-size: 16px;">16.10.2017 в Государственном пограничном комитете (ГПК) Республики Беларусь подтвердили информацию о самоубийстве офицера в учебном центре Института пограничной службы в Сморгони (Гродненская область).</span>
				<span style="font-size: 16px;">Как сообщил официальный представитель ГПК Антон Бычковский, трагедия произошла 27-го сентября 2017-го года.
				То, что 22-летний младший офицер пограничной службы покончил с собой, выстрелив себе в голову из пистолета, подтверждают видеозаписи с камер наблюдения.</span>
			<h2>19 января 2017 года, Печи, смерть на площади</h2>
				<span style="font-size: 16px;">Трагедия произошла на территории 72-го учебного центра в Печах. По информации, которая попала в СМИ, военный воздушно-десантных войск умер во время упражнений на плацу. Пресс-служба Минобороны подтвердила информацию о происшедшем, однако подробностей не раскрыла. Известно лишь, что это «не связано с прохождением военной службы».</span>
			<h2>21 сентября 2016 года, военный полигон под Борисовом</h2>
				<span style="font-size: 16px;">21 сентября в одной из воинских частей в Витебской области в результате, как <a href="http://www.mil.by/ru/news/58019/" target="_blank" rel="noopener">сообщало</a> Минобороны, нарушения требований безопасности при эксплуатации техники получил травмы несовместимые с жизнью военнослужащий срочной службы.</span>
			<h2>24 августа 2016 года, военный полигон под Борисовом</h2>
				<span style="font-size: 16px;">Об этом случае информации немного. Известно, что происшествие произошло на 226-м полигоне «Борисовский» во время учебных стрельб. Военнослужащий срочной службы получил боевые патроны и отправился на огневой рубеж. Однако, не доходя до него, приложил дуло к голове и выстрелил все три патрона.<br>Военнослужащему было 23 года, а до конца срока службы оставалось два месяца. Информацию о случившемся подтвердили в Минобороны, однако подробностей не раскрыли, ссылаясь на «этические причины». Следственный комитет проводил проверку по факту гибели военнослужащего, ее результаты не публиковались.</span>
			<h2>2 ноября 2014</h2>
				<span style="font-size: 16px;">Утром 2 ноября, заступив на дежурство, застрелился из табельного оружия старший лейтенант воинской части, базирующейся под Лунинцем. Как <a href="http://camarade.biz/node/16369" target="_blank" rel="noopener">сообщалось</a>, пострадавшего успели доставить в реанимационное отделение больницы, где тот скончался.</span>
			<h2>7 июня 2014</h2>
				<span style="font-size: 16px;">7 июня в одной из воинских частей в результате поражения электрическим током <a href="https://news.tut.by/society/402761.html" target="_blank" rel="noopener">погиб военнослужащий</a> срочной службы.</span>
			<h2>11 апреля 2013 года</h2>
				<span style="font-size: 16px;">11 апреля в результате неосторожного обращения с оружием получил ранение, несовместимое с жизнью, военнослужащий срочной военной службы сухопутных войск.</span>
			<h2>30 апреля 2013 года,  56-ой Тильзитский отдельный полк связи</h2>
				<span style="font-size: 16px;">Информацию о трагической гибели солдата подтвердила и пресс-служба Министерства обороны. "30 апреля при выполнении работ по техническому обслуживанию противопожарной емкости потерял сознание и был доставлен в 432-й Главный военный клинический медицинский центр Вооруженных Сил военнослужащий третьего периода срочной военной службы. Медицинскими специалистами в течение 15 дней проводился весь комплекс реанимационных мероприятий, однако жизнь военнослужащего спасти не удалось", - <a href="https://news.tut.by/hotline/348641.html" target="_blank" rel="noopener">говорится</a> в сегодняшнем сообщении пресс-службы.</span>
			<h2>29 октября 2012</h2>
				<span style="font-size: 16px;">29 октября в Барановичах на территории войсковой части при проведении демонтажа крыши бывшей заправочной станции погиб военнослужащий срочной службы. Солдат был смертельно травмирован обрушившейся бетонной плитой.</span>
			<h2>16 июня 2011 года</h2>
				<span style="font-size: 16px;">16 июня в одной из воинских частей совершил самоубийство военнослужащий срочной службы.</span>
			<h2>29 июня 2011 года</h2>
				<span style="font-size: 16px;">29 июня в Добрушском районе в результате дорожно-транспортного происшествия в деревне Усохи погиб военнослужащий срочной службы одной из частей Государственного пограничного комитета. Военнослужащий, управляя служебной автомашиной, выехал за пределы проезжей части, автомобиль ударился в колодец и опрокинулся. В результате сослуживец-пассажир 1991 года рождения получил травмы, был помещен в больницу, где позже умер.</span>
			<h2>Июнь 2010 года</h2>
				<span style="font-size: 16px;">В ходе плановых мероприятий боевой подготовки во время выполнения прыжка с парашютом погиб прапорщик.</span>
			<h2>11 июня 2010 года</h2>
				<span style="font-size: 16px;">11 июня на одном из полигонов сил специальных операций погиб солдат. Военнослужащий получил ранения, несовместимые с жизнью, во время проведения плановых занятий по боевой подготовке в результате неосторожного обращения с оружием.</span>
			<h2>2009 год</h2>
				<span style="font-size: 16px;">Солдат-срочник получил несовместимые с жизнью травмы в результате <a href="http://naviny.by/rubrics/disaster/2009/05/28/ic_news_124_312031/" target="_blank" rel="noopener">обрушения</a> бетонного перекрытия в одном из зданий в поселке Боровуха Полоцкого района. Солдаты заезжали в бокс на автомобиле «Урал». Машина задела несущую колонну, что вызвало обрушение на кабину автомобиля плит с крыши бокса.</span>
			<h2>Март 2008 года</h2>
				<span style="font-size: 16px;">В марте на полигоне 72-го Объединенного учебного центра под Борисовом погиб танкиста. Его <a href="http://naviny.by/rubrics/disaster/2008/04/01/ic_news_124_288538" target="_blank" rel="noopener">гибель</a> в Министерстве обороны Беларуси объяснили трагическим стечением обстоятельств и назвали первым подобным случаем в истории танковых войск.<br>При выполнении подготовительного упражнения вождения танка молодой солдат, прослуживший в армии всего два месяца, растерялся, совершил наезд на дерево. Машина весом более 40 тонн опустилась на его обломок. Удар пришелся на люк запасного выхода, который находится в днище танка под сиденьем механика-водителя. В результате люк был выбит, причинив военнослужащему повреждения, не совместимые с жизнью.</span>
			<h2>17 марта 2008 года</h2>
				<span style="font-size: 16px;">17 марта в одной из частей транспортных войск Борисовского гарнизона в цеху по ремонту строительно-восстановительной техники при осуществлении ремонта бульдозера в результате нарушения правил эксплуатации транспортных средств погиб военнослужащий-бульдозерист.</span>


		</div>
	</div>
<?php get_footer('old'); ?>
