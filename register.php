<?php

// PARAMETRI DA MODIFICARE
$WEBHOOK_URL = 'https://byakuyakuchiki01.herokuapp.com/webhook.php';
$BOT_TOKEN = '1113108165:AAFjhP6x-i1yepu8EP5JQHxfYY7zghSi1ts';

// NON APPORTARE MODIFICHE NEL CODICE SEGUENTE
$parameters = array('url' => $WEBHOOK_URL);
$url = \sprintf('https://api.telegram.org/bot%s/setWebhook?%s', $BOT_TOKEN, \http_build_query($parameters));
$handle = \curl_init($url);
\curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
\curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
\curl_setopt($handle, CURLOPT_TIMEOUT, 60);
$result = \curl_exec($handle);
\curl_close($handle);
\print_r($result);
