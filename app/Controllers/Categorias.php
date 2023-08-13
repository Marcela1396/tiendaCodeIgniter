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

    public function form_edicion($id){
        $category = new CategoryModel();
        $data = $category->find($id);
        $data = ['data' => $data];
        return view('categorias/formulario_edicion', $data);
    }

    public function editar(){
        $category = new CategoryModel();
        $data = 
        [
            'nom_categoria' => $this->request->getPost('nombre_cat'),
            'desc_categoria' => $this->request->getPost('descripcion_cat'),
        ];
        $category->update($this->request->getPost('id_cat'), $data);
        return redirect()->to(base_url().'categorias');
    }

    public function eliminar($id){
        $category = new CategoryModel();
        $category->delete($id);
        return redirect()->to(base_url().'categorias');
        
    }
}
