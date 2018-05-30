<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./js/script.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body style="background-color:#1936a0;">
        <!--
        <h1>Регистрация</h1>
        <form action="./query.php?name=reg_form" method="post" id="regForm">
            <label>Введите фамилию: <input type="text" name="firstname"/></label>
            <label> имя: <input type="text" name="username"/></label><br><br>
            <label> Введите отчество: <input type="text" name="patronymic"/></label><br><br>
            <label> Введите логин: <input type="text" name="regLogin"/></label><br><br>
            <label> Введите пароль: <input type="text" name="regPass"/></label><br><br>
            <label> Введите email: <input type="text" name="email"/></label><br><br>
            <label> Введите телефон: <input type="text" name="phone"/></label><br><br>
            <label> Введите адрес: <input type="text" name="address"/></label><br><br>
            <input type="submit" value="Зарегистрироваться" name="btnReg" />
            <input type="button" id="btcRegCancel" value="Отмена"/>
        </form>
        -->
        <div class="container" style="max-width:400px;box-shadow: 0 0 7px 1px black;position:relative;top:20%;">
                <div class="row" style="min-width:100%;padding-left:10px;padding-right:10px;background-color:white;">
                    <form class="form-horizontal"  style="min-width:100%;" action="./query.php?name=reg_form" method="post" id="regForm">
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <div class="col" style="padding:0;padding-right:5px;">
                            <input type="text" name="firstname" class="form-control" placeholder="Фамилия"/>
                            </div>
                            <div class="col" style="padding:0;padding-right:5px;">
                            <input type="text" name="username" class="form-control" placeholder="Имя"/>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input type="text" name="patronymic" class="form-control" placeholder="Отчество"/> 
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input type="text" name="regLogin" class="form-control" placeholder="Логин"/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input type="password" name="regPass" class="form-control" placeholder="Пароль"/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input type="text" name="email" class="form-control" placeholder="E-mail"/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input type="text" name="phone" class="form-control" placeholder="Телефон"/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input type="text" name="address" class="form-control" placeholder="Адрес"/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <div class="col" style="padding:0;padding-right:5px;">
                                <input type="submit" name="btnReg" value="Зарегистрироваться" style="width:100%;" class="btn btn-success">
                            </div>
                            <div class="col"  style="padding:0;padding-left:5px;">
                                <input type="button" value="Отмена" id="btcRegCancel" style="width:100%;" class="btn btn-primary"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </body>
</html>