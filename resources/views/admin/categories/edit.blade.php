@extends('admin.master')
@section('title', 'Categorías')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{url('/admin/categories/0')}}"><i class="fas fa-folder-open"></i>Categorias</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{url('/admin/category/' . $category->id . '/edit')}}"><i class="fas fa-edit"></i>Editar Categoria</a>
    </li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        {{-- COL 1 --}}
        <div class="col-md-3">
            <div class="panel shadow">
                <div class="header">
                    <h2><i class="fas fa-edit"></i>Editar Categorías</h2>
                </div>{{-- end header --}}

                <div class="inside">
                    {!! Form::open(['url' => 'admin/category/' . $category->id . '/edit']) !!}

                    <label for="name">Nombre: </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-keyboard"></i>
                            </div>
                        </div>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}">
                    </div>

                    <label for="module" class="mt-3">Módulo: </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-keyboard"></i>
                            </div>
                        </div>
                        <select type="text" id="module" name="module" class="form-control">
                            <?php   
                                $modulesArray = getModulesArray();
                                foreach ($modulesArray as $key => $value) {
                                    echo "<option value=$key>$value</option>";
                                }
                            ?>
                        </select>
                    </div>

                    <label for="icon">Ícono: </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-keyboard"></i>
                            </div>
                        </div>
                        <input type="text" id="icon" name="icon" value="{{$category->icon}}" class="form-control">
                    </div>

                    <input type="submit" value="save" class="btn btn-success mt-2">
                    {!! Form::close() !!}
        
                   
                </div>{{-- end inside --}}
                
            </div>
        </div>

        {{-- COL 2 --}}
        <div class="col-md-9">
            {{$category}}
        </div>
    </div>

</div>
@endsection

