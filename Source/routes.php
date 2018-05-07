<?php

$router->get('', 'PageController@index');
$router->get('tasks', 'TaskController@index');
$router->post('tasks', 'TaskController@store');
$router->get('delete', 'TaskController@delete');
