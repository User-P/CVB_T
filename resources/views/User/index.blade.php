@extends('layouts/layout')
@section('title')
<title>Usuarios</title>
@endsection
@section('content')
<div class="page-content">
  <!-- Page Header-->
  <div class="page-header no-margin-bottom">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Tables</h2>
    </div>
  </div>
  <!-- Breadcrumb-->
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Tables            </li>
    </ul>
  </div>
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="block margin-bottom-sm">
            <table id="tableUsers" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido materno</th>
                <th>Email</th>
                <th>Genero</th>
                <th>Telefono</th>
                <th>Imagen</th>
                <th>Direccion</th>
                <th>Entidad</th>
                <th>Municipio</th>
                <th>opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>   
              <td>{{$user->name}}</td>
              <td>{{$user->middlename}}</td>
              <td>{{$user->lastname}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->gender}}</td>
              <td>{{$user->phone}}</td>
              <td>{{$user->image}}</td>
              <td>{{$user->address}}</td>
              <td>{{$user->entity}}</td>
              <td>{{$user->municipality}}</td>
              <td>opcion</td>
              </tr>
              @endforeach
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="footer__block block no-margin-bottom">
      <div class="container-fluid text-center">
        <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
      </div>
    </div>
  </footer>
</div>
@endsection

@section('scripts')
    <script>
    $(document).ready(function() {
      $('#tableUsers').DataTable();
    });
    </script>
@endsection
