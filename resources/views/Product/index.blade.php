@extends('layouts/layout')
@section('title')
<title>Productos</title>
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
                <th>Categoria</th>
                <th>Precio</th>
                <th>Color</th>
                <th>Tamaño</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>   
              <td>{{$product->name}}</td>
              <td>{{$product->category}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->color}}</td>
              <td>{{$product->size}}</td>
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
