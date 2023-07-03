<?php

ini_set("display_errors", true);
error_reporting(E_ALL);

//mysqli_connect( "34.73.138.207", "mandaBemUser", "f#]CSAz89TdxzeQy", "mandabem", '5432' );
$conn = null;
try {
//    $conn = pg_connect("host=34.73.138.207 port=5432 dbname=mandabem user=mandaBemUser password=f#]CSAz89TdxzeQy");
    $conn = pg_connect("host=pink-metrics.cxcbgeowvxbo.us-east-1.rds.amazonaws.com port=5432 dbname=a214e0b470b64224196314f78e3a7da00 user=mandabem_user password=hFU2wmaXxEWLBfzu");

//    $result = pg_query($conn, "SELECT * FROM information_schema.tables");
   
    //Para listar todas as tabelas
//    $result = pg_query($conn, "SELECT table_schema, table_name, table_type FROM information_schema.tables ");
    
    
//    $result = pg_query($conn, " SELECT id,rid,attendance_id,remote_jid,t,ts,workspace,department_name,username,duration,updated_at FROM messages where rid like '%616099d6fa092500093bd3d8%'  limit 20 ");
    $result = pg_query($conn, " SELECT * FROM messages WHERE  username NOT like '%cliente.5521979227345.mandabem%' AND username NOT like '%bot.local%' limit 200");
//    $result = pg_query($conn, " SELECT
//                                    ts WITH TIME ZONE 'epoch' +
//                                    INTERVAL '1 second' * round(extract('epoch' from ts) / 300) * 300 as ts,
//                                    username,
//                                    count(b.username)
//                                FROM time a, id 
//                                
//                                GROUP BY 
//                                round(extract('epoch' from ts) / 300), name");
    
    
//    $result = pg_query($conn, " SELECT COUNT(username) as num_envios,username,(SELECT COUNT( username) as inicio FROM messages WHERE t LIKE '%attendance-started%' ) as ini,"
//            . " (SELECT COUNT(username) as fim FROM messages WHERE t LIKE '%attendance-finished%' ) FROM messages    "
//            . "WHERE updated_at > '2022-06-01 00:00:00' AND username NOT like '%cliente.5521979227345.mandabem%' GROUP BY username,ini ORDER BY num_envios DESC  " );
    
    
//    $result = pg_query($conn, " SELECT COUNT(username) as num_envios,username FROM messages WHERE t like '%attendance-started%')  FROM messages    "
//            . "WHERE updated_at > '2022-06-01 00:00:00' AND username NOT like '%cliente.5521979227345.mandabem%' "
//            . "AND username NOT like '%bot.local%'  GROUP BY username ORDER BY num_envios DESC" );
    
//    $result = pg_query($conn, " SELECT COUNT(username) as num_envios,username, (SELECT COUNT( username) as inicio FROM messages WHERE t LIKE '%attendance-started%' GROUP BY inicio ) as ini"
//            . ", (SELECT COUNT(username) as fim FROM messages WHERE t LIKE '%attendance-finished%' GROUP BY fim ) as final  FROM messages    "
//            . "WHERE updated_at > '2022-06-01 00:00:00' AND username NOT like '%cliente.5521979227345.mandabem%' "
//            . "AND username NOT like '%bot.local%'  GROUP BY num_envios,username,ini,fim ORDER BY num_envios " );
    //campos da tabela e seu formato (datatime,int,...)
//    $result = pg_query($conn, "SELECT COLUMN_NAME,data_type  FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'messages'");
    
//    $result = pg_query($conn, "SELECT
//                            m.username AS username
//                            , COUNT(m.username) AS numero_envios
//                            , (SELECT COUNT(1) FROM messages mini WHERE mini.username = m.username  AND mini.t LIKE '%attendance-started%') AS inicio
//                            , (SELECT COUNT(1) FROM messages mfim WHERE mfim.username = m.username  AND mfim.t LIKE '%attendance-finished%') AS fim
//                        FROM
//                            messages m
//                        WHERE
//                             m.username NOT LIKE '%cliente.5521979227345.mandabem%'
//                            AND m.username NOT LIKE '%bot.local%'
//                        GROUP BY
//                            m.username
//                        ORDER BY 
//                            numero_envios DESC
//                        ");
    
    
    $dados = array();
    while ($row = pg_fetch_row($result)) {
       print_r($row); 
//        echo "Author: $row[1] ";
//        echo "<br />\n";
    }
    foreach($dados as $d){
        
    }
    
} catch (Exception $e) {
//    print_r($e);
}
?>


