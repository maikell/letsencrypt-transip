<?php

return [
    'transip_login'       => '',
    'transip_private_key' => '
-----END PRIVATE KEY-----',

    // only allow access from whitelisted IP's. default: true
    // 'transip_whitelist_only_token' => true,

    'logfile'     => 'logs/certbot-transip.log',
    'loglevel'    => 'info', // options: debug, info, error
];

