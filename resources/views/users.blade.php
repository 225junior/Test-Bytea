@extends('app.layout')
@section('content')



<div class="container mt-1">
  
  <div class="row">
    <div class="mt-4 col-md-6">
      <a href="user/add/" class="btn btn-success">Ajouter</a>
    </div>
  </div>
  
  
  <table class="table mt-5 table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenoms</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Default</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
    </tbody>
  </table>
  
  
  
  
  
</div>


@endsection