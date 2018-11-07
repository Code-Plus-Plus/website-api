<?php
  include "db-secrets.php";

  $dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

  if ($dblink->connect_errno) {
    printf("Failed to connect to the database");
    exit();
  }

  $result = $dblink->query("SELECT * FROM members");

  $dbdata = array();

  while ($row = $result->fetch_assoc()) {
    $dbdata[] = $row;
  }

  echo json_encode($dbdata);
?>
