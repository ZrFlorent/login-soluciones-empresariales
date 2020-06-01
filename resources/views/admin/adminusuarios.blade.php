@extends('layouts.master')

@section('content')

 
        <div class="col-md-16">
            <div class="card">
                <div class="card-header"> Administracion de usuarios</div>

                <div class="card-body">
                <table class="table table-hover table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Tipo usuario</th>
                    <th scope="col">Correo</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->surname}}</td>
                            <td>{{$row->phone}}</td>
                            <td>{{$row->userType}}</td>
                            <td>{{$row->email}}</td>

                            <td class="text-center">
                                <a href="editar-usuarios/{{ $row ->id}}" class="btn btn-success btn-sm">Editar</a>
                                
                            </td>
                            <td class="text-center">
                            <form action="eliminar-usuarios/{{ $row ->id }}" method="post">    
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
                </table>
                </div>
                <div class="card-footer">

                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>


        
        @endsection

