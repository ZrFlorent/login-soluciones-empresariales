@extends('layouts.admin')
@section('titulo', 'Crear producto')
@section('breadcrumb')

    <li class="breadcrumb-item active">@yield('titulo')</li>

@endsection

@section('contenido')

    <!-- /.row -->
    <div id="confirmarEliminar" class="row">
        <span style="display: none" id="urlID"> {{ route('admin.product.index') }}</span>
        @include('forms.modal_eliminar')
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Información de registros</h3>

                    <div class="card-tools">
                        <form>
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="nombre" class="form-control float-right" placeholder="Buscar"
                                    value="{{ request()->get('nombre') }}">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <a class="btn btn-success float-right" href="{{ route('admin.product.create') }}">Crear</a>

                    <table class="table table-head-fixed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Imagenes</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Activo</th>
                                <th>En el carousel</th>
                                <th colspan="3"></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $producto->id }}</td>
                                    <td>
                                        @if ($producto->images->count() <= 0)
                                            <img src="/img/avatar2.png" style="height:70px;" alt="" class="rounded-circle">
                                        @else
                                            <img src="{{ $producto->images->random()->url }}" style="height:70px;" alt="">

                                        @endif
                                    </td>
                                    <td>{{ $producto->nombre }} </td>
                                    <td>{{ $producto->precio_actual }} </td>
                                    <td> {{ $producto->activo }} </td>
                                    <td> {{ $producto->sliderprincipal }} </td>


                                    <td><a href="{{ route('admin.product.show', $producto->slug) }}">Ver</a> </td>
                                    <td><a href="{{ route('admin.product.edit', $producto->slug) }}">Editar</a> </td>
                                    <td><a href="{{ route('admin.product.index') }}"
                                            v-on:click.prevent="eliminarCategoria({{ $producto->id }})">Eliminar</a> </td>



                                </tr>

                            @endforeach

                        </tbody>
                    </table>
                    {{ $productos->appends($_GET)->links() }}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@endsection
