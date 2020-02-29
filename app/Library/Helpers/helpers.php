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
function token()
{
    $token='qwertyuiopasdfghjklQWERTYUIOPASDFGHJKLZXCVBNM1234567890@$%!*';
    $token=str_shuffle($token);
    $token=substr($token,0,10);
    return $token;
}
function documentValidation($size_of_uploaded_file,$max_allowed_file_size,$allowed_extensions,$type_of_uploaded_file)
{
    $errors='';
    if($size_of_uploaded_file > $max_allowed_file_size )
    {
      $errors .= "\n Size of file should be less than $max_allowed_file_size";
    }
    
    
    $allowed_ext = false;
    for($i=0; $i<sizeof($allowed_extensions); $i++)
    {
      if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0)
      {
        $allowed_ext = true;
      }
    }
    
    if(!$allowed_ext)
    {
      $errors .= "\n The uploaded file is not supported file type. ".
      " Only the following file types are supported: ".implode(',',$allowed_extensions);
    }
    return $errors;
}