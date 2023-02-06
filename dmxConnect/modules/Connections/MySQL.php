<?php
$exports = <<<'JSON'
{
  "name": "MySQL",
  "module": "dbconnector",
  "action": "connect",
  "options": {
    "server": "mysql",
    "databaseType": "MySQL",
    "connectionString": "mysql:host=192.168.50.30;port=3306;dbname=MySite;user=pi;password=1294;sslverify=false",
    "meta": false
  }
}
JSON;
?>