@extends('app.layout')
@section('content')



<div class="container mt-1">
  
  <div class="row">
    <div class="mt-4 col-md-6">
      <a href="user/add/" class="btn btn-success">Ajouter</a>
    </div>
  </div>
  
  <form action="">
    <div class="form-group">
      <label for="search" class="form-label"></label>
      <input type="text" class="form-control" id="search" placeholder="Recherche ...">
      <small class="form-text text-muted">Effectuez une recherche sur nimporte quelle colonne</small>
    </div>
  </form>
  
  <table class="table mt-5 table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">Status</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      
      <tr>
        <td scope="row">{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td><span class="badge bg-info"> {{ $user->email }} </span></td>
        <td> <button type="button" class="btn btn-info"> Edit </button> </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  
  
  
  
  
</div>


@endsection