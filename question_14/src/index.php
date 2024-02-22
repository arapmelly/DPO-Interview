<?php

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

// Twitter OAuth 2.0 credentials
$client_id = 'MDRhSnhFNnlzeHZzQnlMYjNsU3g6MTpjaQ';
$client_secret = 'z8Sq4_0RySXTTGmlBD8ixtxpGQE0TtrELa4GxwbWUazbKBnW9s';
$redirect_uri = 'http://localhost:8080';

// Initialize TwitterOAuth with your credentials
$twitterOAuth = new TwitterOAuth($client_id, $client_secret);

// Redirect to Twitter authorization URL
if (!isset($_GET['oauth_token']) && !isset($_GET['oauth_verifier'])) {
    $request_token = $twitterOAuth->oauth('oauth/request_token', array('oauth_callback' => $redirect_uri));
    $url = $twitterOAuth->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
    header('Location: ' . $url);
    exit();
}

// Exchange request token for access token
$request_token = [];
$request_token['oauth_token'] = $_GET['oauth_token'];
$request_token['oauth_token_secret'] = $_GET['oauth_verifier'];
$access_token = $twitterOAuth->oauth('oauth/access_token', array('oauth_verifier' => $_GET['oauth_verifier']));

// Use access token to make authenticated requests
$twitterOAuth = new TwitterOAuth($client_id, $client_secret, $access_token['oauth_token'], $access_token['oauth_token_secret']);
$user_info = $twitterOAuth->get('account/verify_credentials');

echo json_encode($user_info);
