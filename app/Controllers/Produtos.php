<?php
namespace App\Controllers;

class Produtos extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
       // echo "<h1>Teste produtos </h1>";
       $data['titulo'] = "Tela de produtos";
       return view('produto_index', $data);
    }
    public function detalhes($produtos){
       // echo "<h1>xbox 360</h1>";
       $data['produtos'] = $produtos;
       $data['titulo'] = 'Produto '.$produtos;
       return view('produto_detalhes',$data);

    }
}
?>