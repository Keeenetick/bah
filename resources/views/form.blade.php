@extends('layout')

@section('form')
    <form class="box box_back">
								
								<div class="panel panel-default">
									<div class="panel-heading clearfix">
										<h4>Бланк заявки</h4>
										<button class="btn btn-warning">Отправить заявку</button>
									</div>
									<div class="panel-body">

										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
												<input class="form-control" type="text" placeholder="Ваше имя" required>
											</div>

											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
												<input class="form-control" type="text" placeholder="Ваш телефон" required>
											</div>

										</div>
									</div>

								</div>

							</form>
@endsection