<?php

return [
    'host' => env('ZABBIX_HOST', 'localhost') . '/' . env('ZABBIX_API_FILE', 'api_jsonrpc.php'),
    'username' => env('ZABBIX_USERNAME', 'admin'),
    'password' => env('ZABBIX_PASSWORD', 'zabbix'),
    'http_username' => env('ZABBIX_HTTP_USERNAME'),
    'http_password' => env('ZABBIX_HTTP_PASSWORD'),
    'authToken' => env('ZABBIX_AUTH_TOKEN', ''),
    'sslContext' => env('ZABBIX_SSL_CONTEXT', ''),
    'checkSsl' => env('ZABBIX_CHECK_SSL', true),
];