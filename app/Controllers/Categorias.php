<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Categorias extends BaseController
{
    public function index()
    {
        $category = new CategoryModel();
        $data = $category->findAll();
        $data = ['data' => $data];
        return view('categorias/listado', $data);
    }

    public function form_registro(){
        return view('categorias/formulario_registro');
    }

    public function registrar(){
        $category = new CategoryModel();
        $data = 
        [
            'nom_categoria' => $this->request->getPost('nombre_cat'),
            'desc_categoria' => $this->request->getPost('descripcion_cat'),
        ];
        $category->insert($data);
        return redirect()->to(base_url().'categorias');
    }
}
