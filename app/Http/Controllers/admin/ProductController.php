<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getHome(){
        return view('admin.products.home');
    }

    public function getProductAdd(){
        return view('admin.products.add');
    }

    public function addProduct(Request $req){
        return redirect('/admin/products');
    }
}
