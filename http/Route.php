<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 16/08/2019
 * Time: 19:57
 */

namespace http;
use controller\ProdutoController as ProdutoController;

abstract class Route{

    public function put($recurso)
    {
        echo "put";
//        $recurso::listar();
    }

    public function post($recurso)
    {
        echo "post";
//        $recurso::post();
    }

    public function get($recurso)
    {
        echo $recurso;
        echo "get";
//        $recurso::listar();
    }

    public function delete($recurso)
    {
        echo "cheguei";
//        $recurso::delete();
    }
}

