<?php

namespace app\controller;

use app\database\builder\SelectQuery;

class User extends Base
{
    public function lista($request, $response)
    {
        $dadosTemplate = [
            'titulo' => 'Cadastro de User'
        ];
        return $this->getTwig()
            ->render($response, $this->setView('listuser'), $dadosTemplate)
            ->withHeader('Content-type', 'text/html')
            ->withStatus(200);
    }
    public function cadastro($request, $response)
    {
        $dadosTemplate = [
            'titulo' => 'Cadastro de Usuario'
        ];
        return $this->getTwig()
            ->render($response, $this->setView('user'), $dadosTemplate)
            ->withHeader('Content-Type', 'text/html')
            ->withStatus(200);
    }
    public function listuser($request, $response)
    {
        $form = $request->getParsedBody();
        $order = $for['order'][0]['column'];
        $orderType = $form['order'][0]['dir'];
        $start = $form['start'];
        $length = $form['length'];
        $term = $form['search']['value'];

        $query =SelectQuery::select('id,nome,sobrenome')->from('usuario');

        if (!is_null($term) && ($term !=='')) {
            $query->where('nome', 'ilike', $term, 'or')
                ->where('sobrenome', 'ilike', $term);
        }
        $users = $query->fetchAll();

        $userData = []
        
        $data = [
            'status' => true,
            'recordsTotal' =>2,
            'recordsFiltered' => 2,
            'data' => [[
                1,
                'adriely',
                'thawany',
                "<button class='btn btn-danger'>Excluir</button>"
            ]]
            ];
        $payload = json_encode($data);

        $response->getBody()->write($payload);

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);

    }
}
