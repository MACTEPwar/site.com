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