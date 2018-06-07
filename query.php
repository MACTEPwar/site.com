<?php
session_start();
//var_dump($_POST);
$host = 'localhost'; // адрес сервера 
$database = 'bdForSite'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$link = mysqli_connect($host, $user, $password, $database) 
or die("Ошибка " . mysqli_error($link));
mysqli_set_charset($link,'utf8');
if (isset($_POST['login_form']))
{ 
    $log = htmlentities(mysqli_real_escape_string($link, $_POST['login']));
    $pass = htmlentities(mysqli_real_escape_string($link, $_POST['pass']));

    $query ="SELECT * FROM users";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    $arr;

    if($result)
    {
        $rows = mysqli_num_rows($result); // количество полученных строк

        //echo "<table><tr><th>Id</th><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Телефон</th><th>Адрес</th><th>Логин</th><th>Пароль</th></tr>";
        for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($result);
            //echo "<tr>";
                //for ($j = 0 ; $j < 8 ; ++$j) echo "<td>$row[$j]</td>";
            $arr[] = $row;
            //echo "</tr>";
        }
        //echo "</table>";

        // очищаем результат
        mysqli_free_result($result);
    }
    //echo "<pre>";
    //var_dump($arr);
    //echo "<pre>"; 
    mysqli_close($link);

    foreach($arr as $i)
    {
        if ($i[6] === $log) 
        {
            if ($i[7] === md5($pass))
            {
                $_SESSION['user']=$i;
            }
            else echo "Введенный пароль не верный";
        }
    }
    //echo $_SESSION['user'];
    header("Location: vedomost.php");
}
else if(isset($_POST['btnReg']))
{
    //$query ="INSERT INTO `users` (`id`, `name`, `serbame`, `patronymic`, `phone`, `address`, `login`, `password`) VALUES (NULL, '".$_POST['username']."', '".$_POST['firstname']."', '".$_POST['patronymic']."', '".$_POST['phone']."', '".$_POST['address']."', '".$_POST['regLogin']."', '".$_POST['regPass']."','".$_POST['email']."');";
    //$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    //mail("shebanic95@gmail.com", "Новый пользователь", "Пользователь ".$_POST['firstname']." ". $_POST['username']." ". $_POST['patronymic']." зарегистрирован\nЛогин   - ".$_POST['regLogin']."\nПароль - ".$_POST['regPass']);
    //mail(.$_POST['email'], "Подтверждение пароля", "Для подтверждения перейдите по ссылке: http://site.com/");
    //header("Location: vedomost.php");
    
    $email;
    $regPass = htmlspecialchars($_POST['regPass'],ENT_QUOTES);
    $username = htmlspecialchars($_POST['username'],ENT_QUOTES);
    $firstname = htmlspecialchars($_POST['firstname'],ENT_QUOTES);
    $patronymic = htmlspecialchars($_POST['patronymic'],ENT_QUOTES);
    $phone = htmlspecialchars($_POST['phone'],ENT_QUOTES);
    $address = htmlspecialchars($_POST['address'],ENT_QUOTES);
    $regLogin = htmlspecialchars($_POST['regLogin'],ENT_QUOTES);
    
    if (preg_match('/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/',$_POST['email'],$matches)) $email = $matches[0];
    else 
    {
        echo 'Введенный email не соответствует формату, либо содержит недопустимые символы. Повторите попытку.';
        exit;
    }
    
    //echo $password;

    
    $_SESSION['ver'] = verCode();
    $text = "Для подтверждения перейдите по ссылке: http://site.com/query.php?ver=". $_SESSION['ver']."&username=".urlencode($username)."&firstname=".urlencode($firstname)."&patronymic=".urlencode($patronymic)."&phone=".urlencode($phone)."&address=".urlencode($address)."&regLogin=".$regLogin."&regPass=".md5($regPass)."&email=".urlencode($email);
    //$t = md5("123124132");
    //echo $t."<br>";
    //echo md5(md5($t).salt());
    echo "Подтвердите пароль, перейдя на заданный email и перейдя по ссылке в письме.";
    mail($email, "Подтверждение пароля", $text);
}
else if(isset($_POST['getDateFromDb']))
{
    //var_dump($_POST);
    //$betweenDate = strComp(str_replace("-",".",$_POST['between']));
    $betweenDate = strComplete(str_replace("-",".",$_POST['between']));
    $toDate = strComplete(str_replace("-",".",$_POST['to']));
    //echo $betweenDate." \n".$toDate;
    
    $database   = "31.202.199.91:C:\gradient\db\kmn.fdb";
    $user       = "SYSDBA";
    $password   = "masterkey";
    $db = ibase_connect($database, $user, $password, 'utf8');
    $sql = "SELECT * FROM WEB_RPT_ACCOUNT_OBOROT_TODATE(".$_SESSION['user'][6].",'".$betweenDate."','".$toDate."')";
    //$sql = "SELECT * FROM WEB_RPT_ACCOUNT_OBOROT_TODATE(131131,'01.01.2015','01.04.2018')";
    $rc = ibase_query($db, $sql);
    $mass;
    if ($rc)
    {
        $num = ibase_num_fields($rc);
        for ($i = 0 ; $i < $num; $i++)
        {
            $r = ibase_fetch_row($rc);
            $mass[] = $r;
            //break;
        }
    }
    echo json_encode(array('mass' => $mass,'b' => $betweenDate,'t' => $toDate,'u' => $_SESSION['user'][6] ));
        //
        
        
        
   
}
else if(isset($_GET['ver']) && $_GET['ver'] === $_SESSION['ver'])
{
    $query ="INSERT INTO `users` (`id`, `name`, `serbame`, `patronymic`, `phone`, `address`, `login`, `password`,`email`) VALUES (NULL, '".$_GET['username']."', '".$_GET['firstname']."', '".$_GET['patronymic']."', '".$_GET['phone']."', '".$_GET['address']."', '".$_GET['regLogin']."', '".$_GET['regPass']."','".$_GET['email']."');";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    header("Location: vedomost.php");
}

function strComplete($str)
{
    $arr = explode(".",$str);
    $res = $arr[count($arr)-1];
    for($i = count($arr)-2 ; $i>=0;$i--)
    {
        $res = $res.".".$arr[$i];
    }
    return $res;
}

function verCode()
{
    return md5(rand(0, PHP_INT_MAX));
}
?>