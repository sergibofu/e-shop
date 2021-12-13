<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class CategoriesController extends Controller
{
    public function getCategories($module = 0){
        $categories = Category::where('module', $module)->orderBy('name', 'asc')->get();
        $data = ['categories' => $categories];
        return view('admin.categories.home', $data);
    }

    public function postCategoryAdd(Request $req){

            //nuestras normas de validacion y mensajes de respuesta
            $rules = [
                'name'      =>       'required',
                'module'     =>       'required',
                'icon' => 'required'
            ];
        
            $messages = [
                "name.required" => "El nombre es requerido",
                "module.required" => "El modulo es requerido",
                "icon.required" => "El icono es requerido"
            ];

            //validamos nuestra peticion
            $validator = Validator::make($req->all(), $rules, $messages);

            if($validator->fails()):
                return back()->withErrors($validator)->with('message', 'Se ha producido un error')
                       ->with('typealert', 'danger');
            else:
                $category = new Category();
                $category->module = $req->input('module');
                $category->name = $req->input('name');
                $category->icon = $req->input('icon');
                $category->slug = Str::slug($req->input('name'));

                //guardamos nuestra categoria
                if($category->save()):
                    return back()->with('message', 'Categoría guardada correctamente')
                    ->with('typealert', 'success');
                else:
                    return back()->with('message', 'Se ha producido un error')
                    ->with('typealert', 'danger');
                endif;

            endif;



    }
}
