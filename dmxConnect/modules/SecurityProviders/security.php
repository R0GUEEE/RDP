<?php
$exports = <<<'JSON'
{
  "name": "security",
  "module": "auth",
  "action": "provider",
  "options": {
    "secret": "ojCLlvMTDP1W5Vt",
    "provider": "Database",
    "connection": "MySQL",
    "users": {
      "table": "userdata",
      "identity": "id",
      "username": "email",
      "password": "password"
    },
    "permissions": {}
  },
  "meta": [
    {
      "name": "identity",
      "type": "text"
    }
  ]
}
JSON;
?>