<?php
/*
 * author : Vivek
 * author_email : vivek@zeekoi.com
 * 
 * this script handles all the request to this application
 */
header( 'Cache-Control: max-age=172800' );
define('FBTOKEN', '1492059611044870%7CQMGI3jZ4lk38-XHaojUQHMHa1hI');
$request  = $_SERVER['REQUEST_URI'];
$params   = explode("/", $request);
$pageId='troll.malayalam';

if(isset($params[1]) && $params[1]=='post' && isset($params[2])){
    $data = file_get_contents('https://graph.facebook.com/v2.6/'.$params[2].'/?fields=message,comments.limit(50){attachment,message,created_time,from},full_picture,created_time,from,attachments{type,target}&access_token='.FBTOKEN);
    $data = json_decode($data, true);
    $ogimage = $data['full_picture'];
    include 'partials/header.php';
    include 'details_page.php';
    include 'partials/footer.php';    
}
else{
   $limit =30;  
   $data = file_get_contents('https://graph.facebook.com/v2.6/'.$pageId.'/posts?fields=full_picture,message,id,picture,likes.limit(1).summary(true),updated_time,attachments{type,target}&limit='.$limit.'&access_token='.FBTOKEN);
   include 'partials/header.php';
   include 'list_page.php';
   include 'partials/footer.php';
    
}
  
?>