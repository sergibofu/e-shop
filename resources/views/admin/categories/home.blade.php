@extends('admin.master')
@section('title', 'Categorías')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{url('/admin/categories')}}"><i class="fas fa-folder-open"></i>Categorias</a>
    </li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        {{-- COL 1 --}}
        <div class="col-md-3">
            <div class="panel shadow">
                <div class="header">
                    <h2><i class="fas fa-plus"></i>Agregar Categorías</h2>
                </div>{{-- end header --}}

                <div class="inside">
                    {!! Form::open(['url' => 'admin/category/add']) !!}

                    <label for="name">Nombre: </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-keyboard"></i>
                            </div>
                        </div>
                        <input type="text" name="name" class="form-control">
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
                        <input type="text" id="icon" name="icon" class="form-control">
                    </div>

                    <input type="submit" value="save" class="btn btn-success mt-2">
                    {!! Form::close() !!}
        
                   
                </div>{{-- end inside --}}
                
            </div>
        </div>

        <div class="col-md-9">
            <div class="panel shadow">
                <div class="header">
                    <h2><i class="fas fa-folder-open"></i>Categorías</h2>
                </div>{{-- end header --}}

                <div class="inside">
                    <nav class="nav">
                        @foreach(getModulesArray() as $key => $module)
                            <a href="{{url('/admin/categories/' . $key)}}" class="nav-link">{{$module}}</a>
                        @endforeach
                    </nav>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Ícono</td>
                                <td>Nombre</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{!! htmlspecialchars_decode($category->icon) !!}</td>
                                    <td>{{$category->name}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                </div>{{-- end inside --}}
                
            </div>
        </div>
    </div>

</div>
@endsection

