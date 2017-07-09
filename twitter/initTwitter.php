<?php 

require "vendor/autoload.php";
require "keys.php";
use Abraham\TwitterOAuth\TwitterOAuth;


//connect to api
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_secret);
$content 	= $connection->get("account/verify_credentials");

// get statuses
$statuses = $connection->get("statuses/user_timeline", ["count"=>25, "exclude_replies" => true]);

// var_dump($statuses);