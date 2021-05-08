<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersTable extends Component
{
    public string $search = '';
    protected $queryString =[
        'search'
    ];

    public function render()
    {
        $users = User::where('name', 'LIKE', "%".$this->search."%")->get();
        return view('livewire.users-table',\compact('users'));
    }
}
