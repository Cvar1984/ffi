<?php

/* {{{ hot spot
 */
$curl = FFI::load(__DIR__ . '/include/libcurl.h');
$test = FFI::load(__DIR__ . '/include/test.h');
/* }}} */

/* {{{ Perform a curl
 */
$ch = $curl->curl_easy_init();
$curl->curl_easy_setopt($ch, CURLOPT_URL, 'http://hackme.org');
$curl->curl_easy_perform($ch);
$curl->curl_easy_cleanup($ch);
/* }}} */
$test->printf('Hello world');
