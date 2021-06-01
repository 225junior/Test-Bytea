<div>
    <div class="container mt-1 mb-5">
  
        <div class="row">
          <div class="mt-4 col-md-6">
            <a href="user/add/" class="btn btn-success">Ajouter</a>
          </div>
        </div>
        
        {{-- recherche  --}}
          <div class="mt-3 form-group">
            <input type="text" class="form-control" id="search" placeholder="Recherche ..." wire:model.debounce.500ms="search">
            <small class="form-text text-muted">Effectuez une recherche sur nimporte quelle colonne</small>
          </div>
        {{-- fin recherche  --}}
        
        <table class="table mt-5 table-hover">
          <thead>
            <tr>
              <th scope="col" wire:click="setOrderField('id')">#</th>
              <th scope="col" wire:click="setOrderField('name')">Nom</th>
              <th scope="col" wire:click="setOrderField('email')">Email</th>
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
        
        
        {{ $users->links() }}
        
        
        
      </div>
      
      
</div>
