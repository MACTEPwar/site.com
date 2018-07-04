<?php 
    session_start();
    
    
    if (!isset($_SESSION['user'])) 
    {
        header("Location: login.php");
    }
    else
    {
        //$database   = "31.202.199.91:C:\gradient\db\kmn.fdb";
        //$user       = "SYSDBA";
        //$password   = "masterkey";
        //$db = ibase_connect($database, $user, $password, 'utf8');
        //$sql = "SELECT * FROM WEB_RPT_ACCOUNT_OBOROT_TODATE(131131,'01.01.2015','01.04.2018')";
        //$rc = ibase_query($db, $sql);
        //$mass;
        //if ($rc)
        //{
        //    $num = ibase_num_fields($rc);
        //    for ($i = 0 ; $i < $num; $i++)
        //    {
        //        $r = ibase_fetch_row($rc);
        //        //$mass[] = $r;
        //        //break;
        //        echo "<pre>";
        //        var_dump($r);
        //        echo "</pre>";
        //    }
        //}
        //echo "<pre>";
        //var_dump($mass);
        //echo "</pre>";
    }
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="./css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./js/script.js"></script>
        
        <!--
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        
-->
    </head>
    <body>
        <!--
        <input type="date" name="betweenDate" id="betweenDate"/>
        <input type="date" name="toDate" id="toDate"/>
        <input type="button" name="getDataFromDb" value="Сформировать отчет" id="getDateFromDb" class="btn-success"/><br><br>
        -->
        <!--
        <table id="tableReport">

        </table>
-->
        <?php //var_dump($_SESSION[user]); 
        ?>
        <div class="container">
            <div class="row" style="background-color:#1936a0;color:white;box-shadow: 0px -10px 10px #20f5e1;border-radius: 10px;">
                <nav class="navbar navbar-expand-lg navbar-light" style="min-width:100%;background-color:#1936a0;color:white;box-shadow: 0px -10px 10px #20f5e1;border-radius: 10px;">
                    
                    <div class="alaNavBar" style="display:contents;">
                        <img src="image/user.png" width="5%" style="padding: 0 15px 0 0;">
                        <div id="headerUser" style="padding: 0 15px 0 0; min-width:325px;">
                        <?php echo "<div align='left'>Абонент: ".$_SESSION['user'][2]." ".$_SESSION['user'][1]." ".$_SESSION['user'][3]."</div>
                            <div align='left'>Л\С: ".$_SESSION['user'][6]."</div>
                            <div align='left'>Адрес: ".$_SESSION['user'][5]."</div>";
                        ?>
                        </div>
                            
                        <div class="mr-auto" style="min-width:60%;text-align:center;" id="titleForReport">
                            <!-- <p>Оборотная ведомость за период с 01.01.2018г.-30.04.2018г.</p> -->
                        </div>
                        <div>
                            <ul class="navbar-nav">
                                <li class="nav-item active" id="logOut">
                                    <a class="nav-link" href="#" style="color:white;">Выход<span class="sr-only"></span></a>
                                </li>
                            </ul>
                        </div>
                        <!--
                        <ul class="navbar-nav">
                            <li class="nav-item" style="padding: 0 15px 0 0;max-width:10%;">
                                <img src="image/user.png" width="120%" style="padding: 0 15px 0 0;">
                                <?php echo "<div align='left'>Абонент: ".$_SESSION['user'][2]." ".$_SESSION['user'][1]." ".$_SESSION['user'][3]."</div>
                                    <div align='left'>Л\С: ".$_SESSION['user'][6]."</div>
                                    <div align='left'>Адрес: ".$_SESSION['user'][5]."</div>";
                                ?>
                            </li>
                            <li class="nav-item" style="padding: 0 15px 0 0; min-width:325px;">
                                
                            </li>
                            <li class="nav-item mr-auto" style="min-width:60%;text-align:center;">
                                <p>Оборотная ведомость за период с 01.01.2018г.-30.04.2018г.</p>
                            </li>
                            <li class="nav-item">
                            </li>
                        </ul>
                        -->
                    </div>
                    
                </nav>
                
                <div id="newLgota" style="padding-left:15px;padding-bottom:5px;">
                        
                </div>
            </div>
            <div class="row">
            <div class="alert alert-success" role="alert">
                Уважаемый абонент! Приветствуем Вас в личном кабинете! Ниже отображается ведомость вашего платежа за последний месяц.

Вы также можете отобразить архив платежей, нажав на кнопку "архив платежей" и выбрать интересующую Вас дату.
            </div>
                </div>
            <!--
            <div class="row" style="margin-top:10px;margin-bottom: 10px;">
                <input type="date" name="betweenDate" id="betweenDate" class="form-control"/>
                <input type="date" name="toDate" id="toDate" class="form-control"/>
                <input type="button" name="getDataFromDb" value="Сформировать отчет" id="getDateFromDb" class="btn btn-primary"/>
            </div>
            -->
            <div class="row" style="box-shadow: 0px -10px 10px #20f5e1;border-radius: 10px;">
                
                <table id="tablePreview" class="table table-bordered" >
                    <tr>
                        <th>1</th>
                        <td>2</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>4</td>
                    </tr>
                </table>
            </div>
            <div class="row" style="margin-top:0px;">
                <div class="btn-group btn-group-toggle" data-toggle="buttons"style="width:100%;" >
                    <div class="btn btn-success" id="buy" style="width:50%;">Оплатить</div>
                    <div class="btn btn-success" id="printPreview" style="width:50%;background-color:#1936a0;">Распечатать</div>
                </div>
            </div>
            <div class="row" style="margin-top:0px;">
                <div class="btn btn-success" id="viewPreview" style="width:100%;background-color:#1936a0;">Архив платежей</div>
            </div>
            <div class="row" id="FullReport" style="display: none;">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="background-color:#1936a0;box-shadow: 0px -10px 10px #20f5e1;border-radius: 10px;width:100%;">
                  <label class="btn btn-secondary" style="background-color:#1936a0;display: -webkit-box;width:25%;">С
                    <input type="date" name="betweenDate" id="betweenDate" autocomplete="off" class="form-control" style="margin-left:12px;">
                  </label>
                  <label class="btn btn-secondary" style="background-color:#1936a0;display: -webkit-box;width:25%;">До
                    <input type="date" name="toDate" id="toDate" autocomplete="off" class="form-control" style="margin-left:12px;">
                  </label>
                  <label class="btn btn-secondary" id="getDateFromDb" style="background-color:#1936a0;width:25%;">Сформировать отчет
                    <input type="radio" name="getDataFromDb">
                  </label>
                  <label class="btn btn-secondary" id="printReport" style="background-color:#1936a0;width:25%;">Печать
                    <input type="radio" name="getDataFromDb">
                  </label>
                </div>
            </div>
            <div class="row">
                <table id="tableReport" class="table table-bordered" style="box-shadow: 0px -10px 10px #20f5e1;border-radius: 10px;width:100%;">
                    <thead class="thead-inverse" id="tThr">
                        <!--
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                          <th>Username</th>
                          <th>Username</th>
                          <th>Username</th>
                          <th>Username</th>
                          <th>Username</th>
                      </tr>
                        -->
                    </thead>
                </table>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>    
    </body>
</html>