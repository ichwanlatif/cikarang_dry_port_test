<?php
    $serverName = "LAPTOP-TATO3Q5J";

    $connectionInfo = array(
        "Database" => "cikarang_inland_port_test"
    );

    $conn = sqlsrv_connect($serverName, $connectionInfo);

    if($conn)
    {
        echo "Connected!";
    }
    else
    {
        echo "Connection could not be established. <br/>";
        die(print_r(sqlsrv_errors(), true));
    }

?>