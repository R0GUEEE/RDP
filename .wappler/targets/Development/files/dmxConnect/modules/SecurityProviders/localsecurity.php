<?php
$exports = <<<'JSON'
{
  "name": "localsecurity",
  "module": "auth",
  "action": "provider",
  "options": {
    "secret": "R8A7b58Ub0OSGav",
    "provider": "Static",
    "connection": "MySQL",
    "users": {
      "pi": "pi"
    },
    "perms": {}
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