<?php

$C['token'] = 'token';
$C['webhook'] = 'webhook_url';
$C['chat_id'] = 'chat_id';

$C["wikiapi"] = "https://zh.wikipedia.org/w/api.php";
$C["user"] = "";
$C["pass"] = "";
$C["cookiefile"] = __DIR__."/../data/cookie.txt";
$C["User-Agent"] = "AbuseLogBot";
$C["allowsapi"] = array("cli");

$C["day"] = ["日", "一", "二", "三", "四", "五", "六"];

$C['defaultdata'] = array(
	"lasttime" => date("Y-m-d", time()-60*10)."T".date("H:i:s", time()-60*10)."Z"
);
