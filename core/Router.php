<?php
class Router
{
    public static function route($url)
    {
        //controller
        $controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
        $controller_name = $controller;
        array_shift($url);


        //action
        $action = (isset($url[0]) && $url[0] != '') ? $url[0] . 'Action' : 'indexAction';
        $action_name = $action;

        array_shift($url);


        //params
        $querey_params = $url;
        var_dump($querey_params);
        $dispatch = new $controller($controller_name, $action_name);
       // var_dump($dispatch);
        if (method_exists($controller, $action)) {
            call_user_func([$dispatch, $action], $querey_params);
        } else {
            die("No Controller exists for " . $controller_name);
        }
    }
}
