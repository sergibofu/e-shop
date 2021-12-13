@extends('admin.master')
@section('title', 'Add Product')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/products')}}"><i class="fas fa-boxes"></i>Productos</a>
</li>
<li class="breadcrumb-item">
    <a href="{{url('/admin/product/add')}}"><i class="fas fa-plus"></i>Add</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2><i class="fas fa-plus"></i>Add Product</h2>
        </div>
        <div class="inside">
            <form action="{{url('/admin/product/add')}}" method="post">
                @csrf
                {{-- ROW 1 --}}
                <div id="row1" class="row">

                    <div class="col-md-6">
                        <label for="name">Nombre del producto:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-keyboard"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control">
                        </div>

                    </div>

                    <div class="col-md-3">
                        <label for="name">Categoría:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-list-alt"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control">
                        </div>

                    </div>

                    
                    <div class="col-md-3">
                        <label for="name">Imagen destacada:</label>
                            <div class="custom-file">
                                <input type="file" name="image-file" class="custom-file-input" id="customFile">
                                <label for="customFile" class="custom-file-label"></label>
                            </div>
                    </div>
                
                </div> 

                {{-- ROW 2 --}}
                <div id="row2" class="row mt-2">

                    <div class="col-md-3">
                        <label for="price">Precio:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-keyboard"></i>
                                </div>
                            </div>
                            <input type="number" name="price" id="price" steps="any" min="0.00" class="form-control">
                        </div>

                    </div>

                    <div class="col-md-3">
                        <label for="discoutn">¿En descuento?:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-keyboard"></i>
                                </div>
                            </div>
                            <select type="select" name="discount" id="discount" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Si</option>
                            </select>
                        </div>

                    </div>
                    

                </div>

                {{-- ROW 3 --}}
                <div id="row3" class="row mt-2">
                    <div class="col-md-12">
                        <label for="description">Descripcion:</label>
                        <textarea name="description" id="description"></textarea>
                    </div>
                </div>

                
                <input class="btn btn-success mt-2" type="submit" value="save">

            </form>

           
        </div>{{-- end inside --}}
        
    </div>
</div>
@endsection