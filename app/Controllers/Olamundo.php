<?php
namespace App\Controllers;

class Olamundo extends BaseController
{
    public function index($pessoa)
    {
        //return view('welcome_message');
        echo "<h1>Olá $pessoa </h1>";
    }
}
?>