<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./js/script.js"></script>
        <link href="./css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body style="background-color:#1936a0;">
        <div class="container" style="max-width:400px;box-shadow: 0 0 7px 1px black;position:relative;">
                <div class="row" style="min-width:100%;padding-left:10px;padding-right:10px;background-color:white;">
                    <h1>Регитсрация</h1>
                    <form class="form-horizontal"  style="min-width:100%;" action="./query.php?name=reg_form" method="post" id="regForm">
                        <div class="alert alert-success">Введите Ваши данные в соответствующие строки.</div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <div class="col" style="padding:0;padding-right:5px;">
                            <input type="text" name="firstname" class="form-control" placeholder="Фамилия" id="regFirstname" pattern="[а-яА-ЯёЁ]{2,64}" required title="Разрешены только буквы кириллицы"/>
                            </div>
                            <div class="col" style="padding:0;padding-right:5px;">
                            <input type="text" name="username" class="form-control" placeholder="Имя" id="regName" pattern="[а-яА-ЯёЁ]{2,64}" required title="Разрешены только буквы кириллицы"/>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input type="text" name="patronymic" class="form-control" placeholder="Отчество" id="regPatronymic" pattern="[а-яА-ЯёЁ]{2,64}" required title="Разрешены только буквы кириллицы"/> 
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input id="lsOne" type="text" name="regLogin" class="form-control" placeholder="Лицевой счет" pattern="[0-9]{4,16}" required title="Разрешены только цифры от 4 до 16 символов"/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input id="lsTwo" type="text" name="regLoginConfim" class="form-control" placeholder="Повторите лицевой счет" pattern="[0-9]{4,16}" required title="Разрешены только цифры от 4 до 16 символов"/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input id="passOne" type="password" name="regPass" class="form-control" placeholder="Пароль" pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{8,}" required title="Введенный пароль не соответсвует стандарту. Пароль должен содержать  одну заглавную букву, одну маленькую букву, одну цифру и быть от 8 и более символов."/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input id="passTwo" type="password" name="regPassConfim" class="form-control" placeholder="Повторите пароль"/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input type="email" name="email" class="form-control" placeholder="E-mail (myEmail@email.ccc)" id="regEmail"/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input type="text" name="phone" class="form-control" placeholder="Телефон (0663377888)" id="regPhone" pattern="[0-9]{10}" required title="Неверно указан номер телефона. Введите в формате 0678888888."/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input type="text" name="address" class="form-control" placeholder="Адрес" id="regAddress" pattern="[0-9А-я., ]{5,}" required title="Адрес содержит неверные символы."/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <div class="col" style="padding:0;padding-right:5px;">
                                <input type="submit" name="btnReg" value="Зарегистрироваться" style="width:100%;" class="btn btn-success" id="btnRegSubmit">
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