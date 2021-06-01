<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
class UsersTable extends Component
{
    use WithPagination;
    public string $search         = '';
    public string $orderField     = 'name';
    public string $orderDirection = 'ASC';

    protected $queryString =[
        'search' => ['except'=>'']
    ];

    public function setOrderField(string $name)
    {
        if ($name === $this->orderField)
        {
            $this->orderDirection = $this->orderDirection === 'ASC' ? 'DESC' : 'ASC'; 
        }else{
            $this->orderField = $name;
            $this->reset('orderDirection');
        }
    }

    public function render()
    {
        $users = User::where('name', 'LIKE', "%".$this->search."%")
        ->orderBy($this->orderField, $this->orderDirection)
        ->paginate(5);
        return view('livewire.users-table',\compact('users'));
    }
}
