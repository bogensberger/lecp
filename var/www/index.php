<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
  echo '<p>Hello Word</p>';
  $dbh = @pg_connect("host=localhost dbname=doc");
  $result = @pg_query($dbh, "select version['number'] from sys.nodes limit 1");
  $row = @pg_fetch_array($result, 0, PGSQL_NUM);
  echo '<p>Crate is running with version '.$row[0].'</p>';
 ?>
 </body>
</html>
