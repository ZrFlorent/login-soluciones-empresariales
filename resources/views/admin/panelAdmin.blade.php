@extends('layouts.master')

@section('content')

 
        <div class="col-md-16">
            <div class="card">
                <div class="card-header"> @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif</div>

                <div class="card-body">
                Bienvenido {{ Auth::user()->name }} 
                </div>
                
            </div>
        </div>


        
        @endsection

