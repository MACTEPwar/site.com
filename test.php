<?php 
    $database   = "31.202.199.91:C:\gradient\db\kmn.fdb";
    $user       = "SYSDBA";
    $password   = "masterkey";
    $db = ibase_connect($database, $user, $password, 'utf8') or die('Connection invalid');
    //$sql = "SELECT * FROM WEB_RPT_ACCOUNT_OBOROT_TODATE('131131','01.01.2018','01.04.2018')";
    ////$sql = "SELECT * FROM WEB_RPT_ACCOUNT_OBOROT_TODATE(131131,'01.01.2015','01.04.2018')";
    //$rc = ibase_query($db, $sql);
    //$mass;
    //if ($rc)
    //{
    //    $num = ibase_num_fields($rc);
    //    for ($i = 0 ; $i < $num; $i++)
    //    {
    //        $r = ibase_fetch_row($rc);
    //        $mass[] = $r;
    //        //break;
    //    }
    //}
    //echo "<pre>";
    //$s = 0;
    //var_dump($s);
    //echo "</pre>";
    
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./js/script.js"></script>
</head>
<body>
    <div id="myId"><p>0</p></div>
    <input type="button" id="clc">
    <script>
        $("#clc").click(function(){
            $("#myId").text(Number($("#myId").text()) + 1);
        });
    </script>
</body>
</html>