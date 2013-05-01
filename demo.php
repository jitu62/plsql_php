<?php
$connection=mysql_connect("localhost","root","");
mysql_select_db("plsql",$connection);
$query=mysql_query("insert into test(name,photo,email,mobile,address) values("gautam","rajput","gtrj55",98260,"narela");
echo $query;
mysql_close($connection);

?>
