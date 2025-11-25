
<?php

use app\controller\User;
use app\controller\Home;
use app\controller\Cliente;
use app\controller\Empresa;
use app\controller\Fornecedor;
use Slim\Routing\RouteCollectorProxy;

$app->get('/', Home::class . ':home');

$app->get('/home', Home::class . ':home');

$app->group('/usuario', function (RouteCollectorProxy $group) {
    $group->get('/lista', User::class . ':lista');
    $group->get('/cadastro', User::class . ':cadastro');
    $group->post('/listuser', User::class . ':listuser');
});
$app->group('/cliente', function (RouteCollectorProxy $group) {
    $group->get('/lista', Cliente::class . ':lista');
    $group->get('/cadastro', Cliente::class . ':cadastro');
    $group->post('/insert', Cliente::class . ':insert');
});
$app->group('/empresa', function (RouteCollectorProxy $group) {
    $group->get('/lista', Empresa::class . ':lista');
    $group->get('/cadastro', Empresa::class . ':cadastro');
    $group->post('/insert', Empresa::class . ':insert');
});
$app->group('/fornecedor', function (RouteCollectorProxy $group) {
    $group->get('/lista', Fornecedor::class . ':lista');
    $group->get('/cadastro', Fornecedor::class . ':cadastro');
    $group->post('/insert', Fornecedor::class . ':insert');
});