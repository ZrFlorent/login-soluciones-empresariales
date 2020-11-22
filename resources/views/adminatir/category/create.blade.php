@extends('layouts.admin')
@section('titulo','Crear categoria')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.category.index')}}">Categorias</a></li>

<li class="breadcrumb-item active">@yield('titulo')</li>

@endsection
@section('contenido')
 <!-- Default box -->
<div id="apicategory">

  <form action="{{ route('admin.category.store')}}" method="POST">
    @csrf
   <div class="card">
        <div class="card-header">
          <h3 class="card-title">Nueva categoria</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <div class="container">
                <h1>Crear nueva categoria</h1>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input @blur="getCategory" @focus="div_aparecer= false" v-model="nombre" type="text"
                        class="form-control" name="nombre" id="nombre">

                    <label for="slug">Slug</label>
                    <input readonly v-model="generarSlug" type=" text" class="form-control" name="slug" id="slug">
                    <div v-if="div_aparecer" v-bind:class="div_clase_slug">
                        @{{ div_mensajeslug }}
                    </div>
                    <br v-if="div_aparecer">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>

                </div>
            
            <br><br>
           

    </div>        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <a href="{{ route('cancelar','admin.category.index')}}" class="btn btn-danger">cancelar</a>
        <input :disabled="deshabilitar_boton==1" type="submit" value="guardar"
                    class="btn btn-primary float-right">
           
        </div>
        <!-- /.card-footer-->
      </div>
      </form>
      </div>

      <!-- /.card -->
      @endsection
