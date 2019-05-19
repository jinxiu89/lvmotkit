<?php
/***
 * @author jinxiu89@163.com
 * @copyright 2019
 */
function route_class(){
    return str_replace('.','-',Route::currentRouteName());
}