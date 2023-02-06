<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "meta": {
    "options": {
      "linkedFile": "/login.php",
      "linkedForm": "serverconnectform1"
    },
    "$_GET": [
      {
        "type": "text",
        "name": "sort"
      },
      {
        "type": "text",
        "name": "dir"
      }
    ],
    "$_POST": [
      {
        "type": "text",
        "fieldName": "email",
        "name": "email"
      },
      {
        "type": "text",
        "fieldName": "password",
        "name": "password"
      }
    ]
  },
  "exec": {
    "steps": [
      {
        "name": "query",
        "module": "dbconnector",
        "action": "select",
        "options": {
          "connection": "MySQL",
          "sql": {
            "type": "SELECT",
            "columns": [
              {
                "table": "userdata",
                "column": "email"
              },
              {
                "table": "userdata",
                "column": "password"
              }
            ],
            "params": [
              {
                "operator": "equal",
                "type": "expression",
                "name": ":P1",
                "value": "{{$_POST.email}}",
                "test": ""
              },
              {
                "operator": "equal",
                "type": "expression",
                "name": ":P2",
                "value": "{{$_POST.password}}",
                "test": ""
              }
            ],
            "table": {
              "name": "userdata"
            },
            "joins": [],
            "wheres": {
              "condition": "AND",
              "rules": [
                {
                  "id": "userdata.email",
                  "field": "userdata.email",
                  "type": "string",
                  "operator": "equal",
                  "value": "{{$_POST.email}}",
                  "data": {
                    "table": "userdata",
                    "column": "email",
                    "type": "text",
                    "columnObj": {
                      "name": "email"
                    }
                  },
                  "operation": "=",
                  "table": "userdata"
                },
                {
                  "id": "userdata.password",
                  "field": "userdata.password",
                  "type": "string",
                  "operator": "equal",
                  "value": "{{$_POST.password}}",
                  "data": {
                    "table": "userdata",
                    "column": "password",
                    "type": "text",
                    "columnObj": {
                      "name": "password"
                    }
                  },
                  "operation": "=",
                  "table": "userdata"
                }
              ],
              "conditional": null,
              "valid": true
            },
            "query": "SELECT email, password\nFROM userdata\nWHERE email = :P1 /* {{$_POST.email}} */ AND password = :P2 /* {{$_POST.password}} */"
          }
        },
        "output": true,
        "meta": [
          {
            "type": "text",
            "name": "email"
          },
          {
            "type": "text",
            "name": "password"
          }
        ],
        "outputType": "array"
      },
      "SecurityProviders/security",
      {
        "name": "identity",
        "module": "auth",
        "action": "login",
        "options": {
          "provider": "security",
          "username": "{{$_POST.email}}"
        },
        "output": true,
        "meta": []
      }
    ]
  }
}
JSON
);
?>