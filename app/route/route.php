<?php

use app\controller\User;
use app\controller\Home;
use app\controller\Customer;
use Slim\Routing\routeCollectorProxy;

$app->get('/'), Home::class . ':home');

$app->get('/home', Home::class . ':home');

$app->group('\usuario', function (routeCollectorProxy $group) {
    $group->get('\lista', User::clss , ':lista');
    $group->get('\cadastro', User::class , ':cadastro');
    $group->post('\listuser', User::class , ':listuser');
});
$app->group('\cliente', function (routeCollectorProxy $group) {
    $group->get('\lista', Customer::clss , ':lista');
    $group->get('\cadastro', Customer::class , ':cadastro');
    $group->post('\insert', Customer::class , ':insert');
});