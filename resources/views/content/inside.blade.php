@extends('layout')
@section('inside')
	<body>
	 			<header class="main_head">
	 						
	 	
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/log2.png" alt="Brand"></a>
			</div>

			<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<ul class="nav navbar-nav">
               
					<li><a href="index.html">Главная</a></li>
					<li><a href="#">Наши Клиенты</a></li>
					<li class="active"><a href="#">Услуги<span class="sr-only">(current)</span></a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Блог</a></li>
					<li><a href="#">Прочее</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Рекомендации</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Раздел1</a></li>
							<li><a href="#">Раздел2</a></li>
							<li><a href="#">Раздел3</a></li>
							<li class="divider"></li>
							<li><a href="#">Раздел+линия</a></li>
							<li class="divider"></li>
							<li><a href="#">Раздел+линия</a></li>
						</ul>
					</li>
                </ul> -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		 {!!menu('mainmenu','bootstrap') !!} 
		 </div>
				<div class="nav navbar-nav navbar-right">
					<div class="lead phone_top"> +(380)50 279 74 07  <p> График робот: 8:00 до 17:00</p></div>
				</div>
			</div>
		</div>
	</nav>
	</header>
			<section class="s_slider">
										<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<div class="overlay"></div>
										<div class="slide_img" style="background-image:url(img/slide_11.png)"></div>
									<div class="container">
										<div class="carousel-caption">
											<div class="h1">Порошковая покраска<small> г. Киеве ул.Пушкина 75</small></div>
											<p> Наша компания предлагает услуги по порошковой покраске металла и металлоконструкций в Киеве. RAL (около 250).</p>
											<p><a class="btn btn-lg btn-primary" href="#" role="button">Читать подробнее</a></p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="overlay"></div>
										<div class="slide_img" style="background-image:url(img/slide_111.png)"></div>
									<div class="container">
										<div class="carousel-caption">
											<div class="h1">Порошковая покраска<small> г. Киеве ул.Пушкина 75</small></div>
											<p> Наша компания предлагает услуги по порошковой покраске металла и металлоконструкций в Киеве. У нас доступен большой выбор цветов по шкале RAL (около 250). В своей работе используем порошковые краски известных, отлично зарекомендовавших себя европейских производителей.</p>
											<p><a class="btn btn-lg btn-primary" href="#" role="button">Читать подробнее</a></p>
										</div>
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div><!-- /.carousel -->
			</section>

							<section class="s_main">
								<div class="container">
									<div class="row">
										<div class="col-lg-9 col-lg-push-3 col-sm-8 col-sm-push-4">
											<div class="content">

									@foreach($posts as $post)
																						
																

											<h1>{{$post->title}}</h1>

										<article>
											
										<div class="row">
											
											<div class="col-md-12">
												
										<img src="{{Voyager::image($post->image)}}" alt="alt">
									<p>
									{!!$post->body!!}
									</p>
									
											</div>

										</article>
										@endforeach
										<div class="witget_news">
											
										<h4>Новости в сфере авто</h4>

										<div class="row">
											<ul>

											<li class="li col-sm-4">
											<div class="panel panel-default">
											<div class="panel-body">
												<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. 
												Грамматики продолжил своего маленький по всей свой всемогущая даже, если, свой эта до имеет буквенных. 
												Рукописи заманивший, переписывается. Большой несколько, то.</p>
												<a class="more" href="#">Читать далее></a>
											</div>
											</div>
											</li>

											<li class="li col-sm-4">
											<div class="panel panel-default">
											<div class="panel-body">
												<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. 
												Грамматики продолжил своего маленький по всей свой всемогущая даже, если, свой эта до имеет буквенных. 
												Рукописи заманивший, переписывается. Большой несколько, то.</p>
												<a class="more" href="#">Читать далее></a>
											</div>
											</div>
											</li>

											<li class="li col-sm-4">
											<div class="panel panel-default">
											<div class="panel-body">
												<p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. 
												Грамматики продолжил своего маленький по всей свой всемогущая даже, если, свой эта до имеет буквенных. 
												Рукописи заманивший, переписывается. Большой несколько, то.</p>
												<a class="more" href="#">Читать далее></a>
											</div>
											</div>
											</li>

										</ul>
										</div>
										

										</div>

											</div>
										</div>
										<div class="col-lg-3 col-lg-pull-9 col-sm-4 col-sm-pull-8">
												<aside class="left_side">
													
													<form class="box box_search">
								
								<div class="panel panel-default">
									<div class="panel-heading">

										<div class="form-group">
											<div class="input-group">
												<input class="form-control" type="text" placeholder="Поиск по сайту" required>
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
												</span>
											</div>
										</div>

									</div>
								</div>

							</form>

							<form class="box box_back">
								
								<div class="panel panel-default">
									

								</div>

							</form>

							<div class="box box_mnu">
								
								<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">

										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a class="" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													Наши услуги
													<span class="btn btn-default dropdown-toggle">
														<span class="caret"></span>
													</span>
												</a>
											</h4>
										</div>

										<div aria-expanded="true" id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="list-group">
												<a href="#" class="list-group-item active">
													<span>Покраска дисков</span>
												</a>
												<a href="#" class="list-group-item">
													<span>Покраска мелких деталей</span>
												</a>
												<a href="#" class="list-group-item">
													<span>Покраска объемных деталей</span>
												</a>
												<a href="#" class="list-group-item">
													<span>Полировка</span>
												</a>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													Наши ресурсы 
													<span class="btn btn-default dropdown-toggle">
														<span class="caret"></span>
													</span>
												</a>
											</h4>
										</div>

										<div aria-expanded="true" id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="list-group">
												<a href="#" class="list-group-item">
													<span>Порошковая краска</span>
												</a>
												<a href="#" class="list-group-item">
													<span>Оборудование</span>
												</a>
												<a href="#" class="list-group-item">
													<span>Сотрудники</span>
												</a>
											</div>
										</div>

									</div>
									
								</div>

							</div>
	 			<div class="box box_articles">
										<div class="panel panel-default">
									<div class="panel-body">

										<h4>Интересные статьи</h4>

										<div id="asideCarousel" class="carousel slide carousel-fade aside_carousel" data-ride="carousel">
											
											<div class="carousel-inner" role="listbox">

												<div class="item active">
													<div class="aside_carousel_cont">
														
														<h4 class="lead">“As font, typography, and paout without being distracted by the content.”</h4>
														<div class="aside_car_container">
															<p>Replacing meaningful content with placeholder text allows viewers to focus on graphic aspects such as font, typography, aed by t meaningful text, as they can instead use quickly-generated lorem ipsum.</p>
															<p>The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC...</p>
														</div>
														<a href="#" class="more">Читать далее ></a>

													</div>
												</div>

												<div class="item">
													<div class="aside_carousel_cont">
														
														<h4 class="lead">“As font, typography, and paout without being distracted by the content.”</h4>
														<div class="aside_car_container">
															<p>Replacing meaningful content with placeholder text allows viewers to focus on graphic aspects such as font, typography, aed by t meaningful text, as they can instead use quickly-generated lorem ipsum.</p>
															<p>The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC...</p>
														</div>
														<a href="#" class="more">Читать далее ></a>

													</div>
												</div>

												<div class="item">
													<div class="aside_carousel_cont">
														
														<h4 class="lead">“As font, typography, and paout without being distracted by the content.”</h4>
														<div class="aside_car_container">
															<p>Replacing meaningful content with placeholder text allows viewers to focus on graphic aspects such as font, typography, aed by t meaningful text, as they can instead use quickly-generated lorem ipsum.</p>
															<p>The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC...</p>
														</div>
														<a href="#" class="more">Читать далее ></a>

													</div>
												</div>

												<div class="item">
													<div class="aside_carousel_cont">
														
														<h4 class="lead">“As font, typography, and paout without being distracted by the content.”</h4>
														<div class="aside_car_container">
															<p>Replacing meaningful content with placeholder text allows viewers to focus on graphic aspects such as font, typography, aed by t meaningful text, as they can instead use quickly-generated lorem ipsum.</p>
															<p>The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC...</p>
														</div>
														<a href="#" class="more">Читать далее ></a>

													</div>
												</div>

												<div class="item">
													<div class="aside_carousel_cont">
														
														<h4 class="lead">“As font, typography, and paout without being distracted by the content.”</h4>
														<div class="aside_car_container">
															<p>Replacing meaningful content with placeholder text allows viewers to focus on graphic aspects such as font, typography, aed by t meaningful text, as they can instead use quickly-generated lorem ipsum.</p>
															<p>The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC...</p>
														</div>
														<a href="#" class="more">Читать далее ></a>

													</div>
												</div>

												<div class="item">
													<div class="aside_carousel_cont">
														
														<h4 class="lead">“As font, typography, and paout without being distracted by the content.”</h4>
														<div class="aside_car_container">
															<p>Replacing meaningful content with placeholder text allows viewers to focus on graphic aspects such as font, typography, aed by t meaningful text, as they can instead use quickly-generated lorem ipsum.</p>
															<p>The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC...</p>
														</div>
														<a href="#" class="more">Читать далее ></a>

													</div>
												</div>

												<div class="item">
													<div class="aside_carousel_cont">
														
														<h4 class="lead">“As font, typography, and paout without being distracted by the content.”</h4>
														<div class="aside_car_container">
															<p>Replacing meaningful content with placeholder text allows viewers to focus on graphic aspects such as font, typography, aed by t meaningful text, as they can instead use quickly-generated lorem ipsum.</p>
															<p>The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC...</p>
														</div>
														<a href="#" class="more">Читать далее ></a>

													</div>
												</div>

											</div>

											<!-- Indicators -->
											<ol class="carousel-indicators">
												<li data-target="#asideCarousel" data-slide-to="0" class="active"></li>
												<li data-target="#asideCarousel" data-slide-to="1"></li>
												<li data-target="#asideCarousel" data-slide-to="2"></li>
												<li data-target="#asideCarousel" data-slide-to="3"></li>
												<li data-target="#asideCarousel" data-slide-to="4"></li>
												<li data-target="#asideCarousel" data-slide-to="5"></li>
												<li data-target="#asideCarousel" data-slide-to="6"></li>
											</ol>
											
											<div class="car_controls">
												<a class="left carousel-control" href="#asideCarousel" role="button" data-slide="prev">
													<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="right carousel-control" href="#asideCarousel" role="button" data-slide="next">
													<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
											</div>
											
										</div>

									</div>

								</div>
								</div>

							<div class="box">
								<div class="well">
									<h4> Лицензия №  </h4>
									<p>T14-49-56-47-54<br> Love is good na-na na</p>
								</div>
							</div>
						</aside>
						</section>


	 <footer class="main_footer">
	 	<div class="container">
		<div class="row">
	 	<div class="col-md-2 col-sm-6 col-xs-6">
	 			<div class="logo_wrap">
	 				<img src="img/log2.png" alt="alt">
	 			</div>	
	 	</div>
	 	<div class="col-md-4 col-sm-6 col-xs-6">
	 		
				<strong>Европейское качество<br>по стандарту</strong>

	 	</div>
	 	<div class="col-md-4 col-sm-6 col-xs-6">
	 		
				<div class="lead footer_phone">
					(+380)50279-74-07 <br>
					<a href="google.com" class="callback" data-toggle="modal" data-target="#myModal">Заказать звонок</a>
				</div>

	 	</div>
	 	<div class="col-md-2 col-sm-6 col-xs-6">
	 	 					<div class="opa">
	 						<small>Спасибо - сюда :))</small>
	 					</div>
	 				<a href="#" class="devel">
	 					<p>akrec121@gmail.com</p>
					</a>	
	 	</div>
		</div>	
		</div>
	 </footer>


	<div class="modals">
			
			<div class="modal fade" id="myModal">
				<div class="modal-dialog">

					<form class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="submit"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Заказать звонок</h4>
						</div>
						<div class="modal-body">
							
							<div class="form-group">
								<label class="control-label" for="inputName">Ваше имя:</label>
								<input class="form-control" id="inputName" type="text">
							</div>

							<div class="form-group">
								<label class="control-label" for="inputPhone">Ваш телефон:</label>
								<input class="form-control" id="inputPhone" type="text">
							</div>

						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-warning">Заказать</button>
						</div>
					</form><!-- /.modal-content -->

				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

		</div>
		<!--[if lt IE 9]>
		<script src="libs/html5shiv/es5-shim.min.js"></script>
		<script src="libs/html5shiv/html5shiv.min.js"></script>
		<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
		<script src="libs/respond/respond.min.js"></script>
		<![endif]-->

		<!-- Load CSS -->
		<script>
			function loadCSS(hf) {
				var ms=document.createElement("link");ms.rel="stylesheet";
				ms.href=hf;document.getElementsByTagName("head")[0].appendChild(ms);
			}
	 		
		</script>

		<!-- Load CSS compiled without Bootstrap & Header styles (after release) -->
		<script>var ms=document.createElement("link");ms.rel="stylesheet";
			// ms.href="compiled.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
		</script>

		<!-- Load Scripts -->
		<script>var scr = {"scripts":[
			{"src" : "libs/modernizr/modernizr.js", "async" : false},
			{"src" : "libs/jquery/jquery-1.11.2.min.js", "async" : false},
			{"src" : "libs/bootstrap/js/bootstrap.min.js", "async" : false},
			{"src" : "libs/plugins-scroll/plugins-scroll.js", "async" : false},
			{"src" : "js/common.js", "async" : false}
			]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
		</script>

	</body>
@endsection

	