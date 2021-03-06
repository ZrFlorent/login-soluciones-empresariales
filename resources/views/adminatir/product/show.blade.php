@extends('layouts.admin')
@section('titulo','Consultar Producto')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.product.update', $producto->id)}}">Productos</a></li>

<li class="breadcrumb-item active">@yield('titulo')</li>

@endsection
@section('estilos')
<link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="/adminlte/plugins/ekko-lightbox/ekko-lightbox.css">
@endsection
@section('scripts')
<script src="/adminlte/ckeditor/ckeditor.js"></script>
<script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>
<!-- Ekko Lightbox -->
<script src="/adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

<script>
window.data = {
    editar:'Si',
    datos:{
    "nombre":"{{$producto->nombre}}",
    "precioanterior":"{{$producto->precio_anterior}}",
    "porcentajededescuento":"{{$producto->descuento_porcentaje}}"
    }
}

    $(function () {
    //Initialize Select2 Elements
    $('#category_id').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
   
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });
    });
  
</script>
@endsection
@section('contenido')

<div id="apiproduct">

<form action="{{ route('admin.product.update', $producto->id) }}" method="POST" enctype="multipart/form-data" >
@csrf
@method('PUT')

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->



      <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Datos generados automáticamente</h3>

           
          </div>
          <!-- /.card-header -->
          <div class="card-body">

             <div class="row">
              <div class="col-md-6">
                <div class="form-group">

                  <label>Visitas</label>
                  <input readonly value="{{ $producto -> visitas}}" class="form-control" type="number" id="visitas" name="visitas">

                 
                </div>
                <!-- /.form-group -->
                
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">

                  <label>Ventas</label>
                  <input readonly value="{{ $producto -> ventas}}"  class="form-control" type="number" id="ventas" name="ventas" >
                </div>
                <!-- /.form-group -->
    
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->




          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            
          </div>
        </div>
        <!-- /.card -->



















        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Datos del producto</h3>

          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">

                  <label>Nombre</label>
                  <input readonly @blur="getProduct" @focus="div_aparecer= false" v-model="nombre" type="text"
                        class="form-control" name="nombre" id="nombre">

                  <label for="slug">Slug</label>
                  <input readonly v-model="generarSlug" type=" text" class="form-control" name="slug" id="slug">
                  <div v-if="div_aparecer" v-bind:class="div_clase_slug">
                      @{{ div_mensajeslug }}
                  </div>
                  <br v-if="div_aparecer">
                 
                </div>
                <!-- /.form-group -->
                
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">




                  <label>Categoria</label>
                  <select disabled name="category_id" id="category_id" class="form-control select2" style="width: 100%;">
                    @foreach($categorias as $categoria)
                    
                     @if ($categoria->nombre == $producto->category->nombre)
                        <option value="{{ $categoria->id }}" selected="selected">{{ $categoria->nombre }}</option>
                     @else
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                     @endif
                    @endforeach


                  </select>
                  <label>Cantidad</label>
                  <input readonly value="{{ $producto -> cantidad}}" class="form-control" type="number" id="cantidad" name="cantidad" >
                </div>
                <!-- /.form-group -->
    
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->


          </div>
          <!-- /.card-body -->
          <div class="card-footer">
           
        </div>
      </div>

        <!-- /.card -->



        <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Sección de Precios</h3>


          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">



                  <div class="col-md-3">
                      <div class="form-group">

                          <label>Precio anterior</label>



                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">$</span>
                              </div>
                              <input readonly v-model="precioanterior" class="form-control" type="number"
                                  id="precioanterior" name="precioanterior" min="0" value="0" step=".01">
                          </div>

                      </div>
                      <!-- /.form-group -->

                  </div>
                  <!-- /.col -->



                  <div class="col-md-3">
                      <div class="form-group">

                          <label>Precio actual</label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">$</span>
                              </div>
                              <input readonly v-model="precioactual" class="form-control" type="number" id="precioactual"
                                  name="precioactual" min="0" value="0" step=".01">
                          </div>

                          <br>
                          <span id="descuento">
                              @{{ generardescuento }}
                          </span>
                      </div>
                      <!-- /.form-group -->

                  </div>
                  <!-- /.col -->




                  <div class="col-md-6">
                      <div class="form-group">

                          <label>Porcentaje de descuento</label>
                          <div class="input-group">
                              <input readonly v-model="porcentajededescuento" class="form-control" type="number"
                                  id="porcentajededescuento" name="porcentajededescuento" step="any" min="0"
                                  max="100" value="0">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">%</span>
                              </div>

                          </div>

                          <br>

                          <div class="progress">
                              <div id="barraprogreso" class="progress-bar" role="progressbar"
                                  v-bind:style="{width: porcentajededescuento+'%'}" aria-valuenow="0"
                                  aria-valuemin="0" aria-valuemax="100">
                                  @{{ porcentajededescuento }}%</div>
                          </div>
                      </div>
                      <!-- /.form-group -->

                  </div>
                  <!-- /.col -->


              </div>
              <!-- /.row -->


          </div>
          <!-- /.card-body -->
          <div class="card-footer">

          </div>
      </div>
      <!-- /.card -->







   <div class="row">
          <div class="col-md-6">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Descripciones del producto</h3>
              </div>
              <div class="card-body">
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                  <label>Descripción corta:</label>

                  <textarea readonly class="form-control ckeditor" name="descripcion_corta" id="descripcion_corta" rows="3">
                    {!! $producto -> descripcion_corta !!}

                  </textarea>
                
                </div>
                <!-- /.form group -->

               <div class="form-group">
                  <label>Descripción larga:</label>

                  <textarea readonly class="form-control ckeditor" name="descripcion_larga" id="descripcion_larga" rows="5">
                    {!! $producto -> descripcion_larga !!}

                  </textarea>
                
                </div>                

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

       </div>
        <!-- /.col-md-6 -->




          <div class="col-md-6">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Especificaciones y otros datos</h3>
              </div>
              <div class="card-body">
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                  <label>Especificaciones:</label>

                  <textarea readonly class="form-control ckeditor" name="especificaciones" id="especificaciones" rows="3">
                    {!! $producto -> especificaciones!!}
                  </textarea>
                
                </div>
                <!-- /.form group -->

               <div class="form-group">
                  <label>Datos de interes:</label>

                  <textarea readonly class="form-control ckeditor" name="datos_de_interes" id="datos_de_interes" rows="5">
                    {!! $producto -> datos_interes!!}
                  </textarea>
                
                </div>                

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

       </div>
        <!-- /.col-md-6 -->



      </div>
      <!-- /.row -->

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  Ekko Lightbox
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                @foreach ($producto->images as $imagenesproductos)
                <div id="imagen-{{$imagenesproductos->id}}" class="col-sm-2">
                  <a href="{{ $imagenesproductos->url}}" data-toggle="lightbox" data-title="Id del producto :{{ $imagenesproductos->id}}" data-gallery="gallery">
                    <img src="{{ $imagenesproductos->url}}" class="img-fluid mb-2" />
                  </a>
                  <br>
                  <a style="display: none" href="{{$imagenesproductos->url}}"
                    v-on:click.prevent="eliminarproducto({{$imagenesproductos}})">
                    <i class="fas fa-trash-alt" style="color: red"></i>{{ $imagenesproductos->id}}
                  </a>
                </div>
                @endforeach
                  
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->







     
     <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Administración</h3>
          </div>
          <!-- /.card-header -->
      <div class="card-body">

       <div class="row">
              <div class="col-md-6">
                <div class="form-group">

                      <label>Estado</label>
                      <select disabled name="estado" id="estado" class="form-control select2" style="width: 100%;">
                        @foreach($estado_productos as $estado)
                        
                         @if ($estado == $producto->estado)
                            <option value="{{ $estado }}" selected="selected">{{ $estado}}</option>
                         @else
                            <option value="{{ $estado }}">{{ $estado }}</option>
                         @endif
                        @endforeach
    
    
                      </select>


                </div>
                <!-- /.form-group -->
                
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="custom-control custom-checkbox">
                        <input disabled
                        @if ($producto->activo="Si")
                            checked                          
                        @endif
                        type="checkbox" class="custom-control-input" id="activo" name="activo">
                        <label class="custom-control-label" for="activo"></label>
                     </div>

                    </div>

                    <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input disabled
                        @if ($producto->sliderprincipal="Si")
                            checked                          
                        @endif
                      type="checkbox"  class="custom-control-input" id="sliderprincipal" name="sliderprincipal">
                      <label class="custom-control-label" for="sliderprincipal">Aparece en el Slider principal</label>
                    </div>
                  </div>

                  </div>

                

       </div>
            <!-- /.row -->




       <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                   <a class="btn btn-danger" href="{{ route('cancelar','admin.product.index') }}">Cancelar</a>
                                
                   <a href="{{ route('admin.product.edit' , $producto->slug)}}" class="btn btn-success float-right">Editar</a>

                </div>
                <!-- /.form-group -->
                
              </div>
              <!-- /.col -->


           
                

       </div>
            <!-- /.row -->




          </div>


   
          <!-- /.card-body -->
          <div class="card-footer">
            
          </div>
        </div>
        <!-- /.card -->





















      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



    </form>
  </div>
 @endsection     


