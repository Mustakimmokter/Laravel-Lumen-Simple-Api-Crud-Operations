<?php



$router->get('/','ExampleController@DbConn');

$router->get('/details','DbDataController@dbDataSelect');
$router->post('/details','DbDataController@dbDataCreate');
$router->put('/details','DbDataController@dbDataUpdate');
$router->delete('/details','DbDataController@dbDataDelete');