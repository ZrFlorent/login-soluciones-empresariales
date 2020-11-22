@extends('layouts.admin')
@section('titulo','Crear categoria')
@section('breadcrumb')

<li class="breadcrumb-item active">@yield('titulo')</li>

@endsection

@section('contenido')

  <!-- /.row -->
  <div id="confirmarEliminar" class="row">
  <span style="display: none" id="urlID"> {{ route('admin.category.index') }}</span>
    @include('forms.modal_eliminar')
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>
              
                <div class="card-tools">
                <form>
                  <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="nombre" class="form-control float-right" placeholder="Buscar" value="{{ request()->get('nombre') }}">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <a class="btn btn-success float-right" href="{{ route('admin.category.create')}}">Crear</a> 

                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Slug</th>
                      <th>Descripcion</th>
                      <th>Fecha de creacion</th>
                      <th>Fecha de modificacion</th>
                      <th colspan="3"></th>

                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($categorias as $categoria)
                      <tr>
                        <td>{{ $categoria -> id }}</td>
                        <td>{{ $categoria -> nombre }}</td>
                        <td>{{ $categoria -> slug }} </td>
                        <td>{{ $categoria -> descripcion }} </td>
                        <td> {{$categoria-> created_at }} </td>
                        <td> {{$categoria-> updated_at }} </td>
                      
                        
                      <td><a href="{{ route('admin.category.show', $categoria -> slug )}}">Ver</a> </td>
                      <td><a href="{{ route('admin.category.edit', $categoria -> slug )}}">Editar</a> </td>
                      <td><a href="{{ route('admin.category.index') }}" v-on:click.prevent="eliminarCategoria({{ $categoria->id }})">Eliminar</a> </td>

                      

                    </tr>
                      
                      @endforeach
                   
                  </tbody>
                </table>
                {{ $categorias ->appends($_GET)->links() }}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
@endsection
