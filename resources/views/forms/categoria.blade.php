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
        


      </tr>
        
        @endforeach
     
    </tbody>
  </table>