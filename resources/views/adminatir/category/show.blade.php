@extends('layouts.admin')
@section('titulo','Ver categoria')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.category.index')}}">Categorias</a></li>

<li class="breadcrumb-item active">@yield('titulo')</li>

@endsection
@section('contenido')
 <!-- Default box -->
<div id="apicategory">

  <form>
    @csrf
    <span style="display:none" id="editar">{{ $editar}}</span>
    <span style="display:none" id="nombretemp">{{ $cat ->nombre }}</span>
   <div class="card">
        <div class="card-header">
          <h3 class="card-title">Editar categoria</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <div class="container">
                <h1>Editar categoria</h1>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input readonly @blur="getCategory" @focus="div_aparecer= false" v-model="nombre" type="text"
                        class="form-control" name="nombre" id="nombre">

                    <label for="slug">Slug</label>
                    <input readonly v-model="generarSlug" type=" text" class="form-control" name="slug" id="slug">
                   
                    <label for="descripcion">Descripción</label>
                    <textarea readonly class="form-control" name="descripcion" id="descripcion" cols="30" rows="10">{{ $cat -> descripcion}}</textarea>

                </div>
            
            <br><br>
           

    </div>        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <a href="{{ route('cancelar','admin.category.index')}}" class="btn btn-danger">cancelar</a>
          <a href="{{ route('admin.category.edit' , $cat->slug)}}" class="btn btn-success float-right">Editar</a>

        
           
        </div>
        <!-- /.card-footer-->
      </div>
      </form>
      </div>

      <!-- /.card -->
      @endsection
