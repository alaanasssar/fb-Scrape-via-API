<?php
$link = 'url';
$access_token = 'accessToken';

$url = 'https://graph.facebook.com/v2.9/?scrape=true&id='.$link.'&access_token='.$access_token.'';
$json = file_get_contents($url, false, stream_context_create(
    array (
        'http' => array(
            'method'    => 'POST',
            'header'    => 'Content-type: application/x-www-form-urlencoded',
            'content'   =>  $url
        )
    )
));
$obj = json_decode($json, true); 
echo "<pre>";
print_r();

// echo some data
// echo 'Site url => '.$obj['url'].'<br><br>Title = '.$obj['title'].'<br><br>Image url = '.$obj['image']['0']['url'].'<br><br>Description = '.$obj['description'];
echo "<pre>";
