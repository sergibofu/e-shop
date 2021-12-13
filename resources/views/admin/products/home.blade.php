@extends('admin.master')
@section('title', 'Productos')

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{url('/admin/users')}}"><i class="fas fa-boxes"></i>Productos</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2><i class="fas fa-boxes"></i>Productos</h2>
        </div>
        <div class="inside">
            <div class="btns">
                <a class="btn btn-primary" href="{{url('admin/product/add')}}"><i class="fas fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection