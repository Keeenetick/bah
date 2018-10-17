




<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"><script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.bg-info {
    background-color: #FF910C!important;

}
.text-info {
    color: #FF910C!important;
}

.btn-info {
    color: #fff;
    background-color: #FF910C;
    border-color: #FF910C;
}
</style>

<div class="container">
   
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">      
                        <div class="card border">
                            <div class="card-header p-2">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Бланк заявки</h3>
                                    <p class="m-0">Заполните анкету</p>
                                </div>
                            </div>
                            <div class="card-body p-3">
                            {!! Form::open(['route'=>'contactus.store']) !!}
                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="name" placeholder="Введите ваше имя" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="youremail@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                        </div>
                                        <input class="form-control" name="message" placeholder="Ваш номер телефона" >
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Отправить" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>
                            {!! Form::close() !!}

                        </div>
                   
                    <!--Form with header-->


                </div>
	</div>
</div>


</body>
</html>

