<?php
function dnd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}
function sanitize($dirty)
{
    return htmlentities($dirty,ENT_QUOTES,'UTF-8');
}
function currentUser()
{
    return Users::currentLoggedInUser();
}
function postedValues($post)
{
    $post_array=[];
    foreach($post as $key=>$value)
    {
        $post_array[$key]=$value;
    }
    return $post_array;
}