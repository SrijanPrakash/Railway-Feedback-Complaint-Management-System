<?php

require 'vendor/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', 'KJbPZWcF802BAfJW7lrNth4MZ');
define('CONSUMER_SECRET', 'QfQL7S2RfhyBSwYxVS5hMYEyYlcsJwAgFJRSdjHt7y92BQG2rr');
define('ACCESS_TOKEN', '4619963718-wSPMXmDH8PvizntujbRfPMuXup845c55cX3HyRn');
define('ACCESS_TOKEN_SECRET', 'doClTLFMCbVd6EpnGOVna2Z4eFKz9NgDBou7YCcku7TGR');

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
$content = $connection->get("account/verify_credentials");
$qtweet = $_REQUEST['reply'];
$tweetid = $_REQUEST['tweet_id'];
$connection->post('statuses/update', array('status' => $qtweet, 'in_reply_to_status_id' => $tweetid,'auto_populate_reply_metadata'=>'true'));
var_dump($connection->getLastHttpCode());
?>