<?php
$serverName = "tcp:sqlserver-lab.database.windows.net,1433";  // full server name
$connectionOptions = array(
    "Database" => "sqldb-lab",                   // your DB name
    "Uid" => "adminibrahim",       // admin user + @server
    "PWD" => "Ibrahim@123"                       // password
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn) {
    echo "✅ Connection successful!";
    sqlsrv_close($conn);
} else {
    echo "❌ Connection failed!";
    die(print_r(sqlsrv_errors(), true));
}

echo "Hi, this is a testing app";
?>
