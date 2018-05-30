<html>
    <head>
        <link href="./css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./js/script.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body style="background-color:#1936a0;">
        <!--
        <form action="./query.php?name=login_form" method="post">
            <input type="text" name="login">
            <input type="password" name="pass">
            <input type="submit" name="login_form" value="Войти" >
            <input type="button" value="Зарекгитрироваться" id="btnReg"/>
        </form>
        -->
            <div class="container" style="max-width:400px;box-shadow: 0 0 7px 1px black;position:relative;top:30%;">
                <div class="row" style="min-width:100%;padding-left:10px;padding-right:10px;background-color:white;">
                    <form class="form-horizontal"  style="min-width:100%;" action="./query.php?name=login_form" method="post">
                        <div class="row" style="margin-left:0px;margin-right:0px;">
                            <input type="text" name="login" class="form-control" placeholder="Лоигн"/>
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <input type="password" name="pass" class="form-control" placeholder="Пароль"/> 
                        </div>
                        <div class="row" style="margin-top:10px;margin-left:0px;margin-right:0px;">
                            <div class="col" style="padding:0;padding-right:5px;">
                                <input type="submit" name="login_form" value="Войти" style="width:100%;" class="btn btn-success">
                            </div>
                            <div class="col"  style="padding:0;padding-left:5px;">
                                <input type="button" value="Зарегиcтрироваться" id="btnReg" style="width:100%;" class="btn btn-primary"/>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>  
    </body>
</html>